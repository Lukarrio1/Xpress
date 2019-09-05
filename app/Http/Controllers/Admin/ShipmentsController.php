<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\spnotify;
use App\User;
use App\Shipments;
use App\Mail\ShipmentStatus;
use App\Mail\ShipmentCollected;
use Illuminate\Support\Facades\Mail;

class ShipmentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin', ['except' => ['']]);
    }
    public function UpdateShipments()
    {
        return view('admin.updateshipment/Updateshipments');
    }


    public function SentShipment()
    {
        return view('admin.updateshipment/Sentshipments');
    }

    public function Store(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'tracking' => 'required',
            'reference' => 'required',
            'date' => 'required',
            'description' => 'required',
            'charge' => 'required',
            'status' => 'required'
        ]);
        $id = htmlentities($request->id);
        $shp = new Shipments;
        $notify = spnotify::where('user_id', $id)->first();
        $shp->tracking_no = htmlentities($request->tracking);
        $shp->reference_no = htmlentities($request->reference);
        $shp->delivery_date = htmlentities($request->date);
        $shp->description = htmlentities($request->description);
        $shp->spcharge = htmlentities($request->charge);
        $status = "";
        switch ($request->status) {
            case "dw":
                $shp->status = "Delivered to Warehouse";
                $status = " was delivered to the Warehouse";
                break;
            case "Ij":
                $shp->status = "In transit to Jamaica";
                $status = "is in transit to jamaica";
                break;
            case "ac":
                $shp->status = "At Customs";
                $status = "is at customs";
                break;
            case "ru":
                $shp->status = "Ready for Pick Up";
                $status = "is ready for pick up";
                if (empty($notify)) {
                    $newnotify = new spnotify;
                    $newnotify->user_id = $id;
                    $newnotify->token = "true";
                    $newnotify->completed = 1;
                    $newnotify->save();
                } else if ($notify->token == "false") {
                    $notify->token = "true";
                    $notify->completed = 1;
                    $notify->save();
                }
                $shp->user_id = htmlentities($request->id);
                $shp->save();
                $this->ShipmentStatusMail($status, $request->id, $request->reference);
                break;
        }
        if (empty($notify)) {
            $newnotify = new spnotify;
            $newnotify->user_id = $id;
            $newnotify->token = "true";
            $newnotify->save();
        } else if ($notify->token == "false") {
            $notify->token = "true";
            $notify->save();
        }
        $shp->user_id = htmlentities($request->id);
        $shp->save();
        $this->ShipmentStatusMail($status, $request->id, $request->reference);
        return json_encode(['status' => 200]);
    }
    public function All()
    {
        $Shipments = Shipments::OrderBy('created_at', 'Desc')->get();
        $ship = array();
        foreach ($Shipments as $shipment) {
            $user = User::find($shipment->user_id);
            $ship[] = [
                'id' => $shipment->id,
                'xl' => $user->xl,
                'name' => $user->name,
                'tracking_no' => $shipment->tracking_no,
                'reference_no' => $shipment->reference_no,
                'description' => $shipment->description,
                'spcharge' => $shipment->spcharge,
                'status' => $shipment->status,
                'delivery_date' => $shipment->delivery_date,
                'collected' => $shipment->collected,
                'created_at' => $shipment->created_at,
                'updated_at' => $shipment->updated_at
            ];
        }
        return json_encode($ship);
    }

    public function completed(Request $request)
    {
        $ship = Shipments::find(htmlentities($request->id));
        if ($ship->status === "Ready for Pick Up") {
            $ship->collected = 1;
            $ship->save();
            $this->ShipmentCollected($ship->user_id, $ship->reference_no);
            return json_encode(["status" => 200]);
        }
    }

    public function updatestatus(Request $request)
    {
        $shp = Shipments::find(htmlentities($request->id));
        $status = "";
        switch ($request->status) {
            case "dw":
                $shp->status = "Delivered to Warehouse";
                $status = " 
            We are happy to say your package have arrived at our facility,<br>
            please stand by for all deliveries and pickup schedules.<br><br>
        
            Ensure all invoices are uploaded to your XpressPortals to prevent delays.<br><br>
        
            If you have done so already or if we had ordered<br>
            your item(s) on your behalf please disregard.<br>
        
            Thank You for your Cooperation.<br>
            Regards,<br>
            Xpresslogistics";
                $this->ShipmentStatusMail($status, $shp->user_id, $shp->reference_no);
                break;
            case "Ij":
                $shp->status = "In transit to Jamaica";
                $status = "is in transit to jamaica";
                $this->ShipmentStatusMail($status, $shp->user_id, $shp->reference_no);
                break;
            case "ac":
                $shp->status = "At Customs";
                $status = "is at customs";
                $this->ShipmentStatusMail($status, $shp->user_id, $shp->reference_no);
                break;
            case "ru":
                $shp->status = "Ready for Pick Up";
                $status = "is ready for pick up";
                $this->ShipmentStatusMail($status, $shp->user_id, $shp->reference_no);
                $notify = spnotify::where("user_id", $shp->user_id)->first();
                $notify->completed = 1;
                $notify->save();
                break;
        }
        $shp->save();

        return json_encode(["status" => 200]);
    }

    public function ShipmentStatusMail($status, $id, $reference)
    {
        $user = User::find($id);
        Mail::to($user->email)->send(new ShipmentStatus($status, $reference));
    }

    public function ShipmentCollected($id, $reference)
    {
        $user = User::find($id);
        Mail::to($user->email)->send(new ShipmentCollected($reference));
    }

    public function search(Request $request)
    {
        $this->validate($request, [
            "search" => "required"
        ]);
        $result = array();
        $search = htmlentities($request->search);
        $shipments =  Shipments::where('tracking_no', 'LIKE', '%' . $search . '%')
            ->orWhere('reference_no', 'LIKE', '%' . $search . '%')
            ->orWhere('status', 'LIKE', '%' . $search . '%')
            ->orderby('created_at', 'desc')
            ->get();
        $users = User::where('xl', 'like', '%' . $search . '%')
            ->orWhere('name', 'LIKE', '%' . $search . '%')
            ->get();
        if (count($users) > 0) {
            foreach ($users as $user) {
                $shipments = Shipments::where('user_id', $user->id)
                    ->orderby('created_at', 'desc')
                    ->get();
                foreach ($shipments as $shipment) {
                    $result[] = [
                        'id' => $shipment->id,
                        'name' => $user->name,
                        'xl' => $user->xl,
                        'tracking_no' => $shipment->tracking_no,
                        'reference_no' => $shipment->reference_no,
                        'description' => $shipment->description,
                        'spcharge' => $shipment->spcharge,
                        'status' => $shipment->status,
                        'delivery_date' => $shipment->delivery_date,
                        'collected' => $shipment->collected,
                        'created_at' => $shipment->created_at,
                        'updated_at' => $shipment->updated_at
                    ];
                }
            }
        } else {
            foreach ($shipments as $shipment) {
                $xl = User::find($shipment->user_id);
                $result[] = [
                    'id' => $shipment->id,
                    'xl' => $xl->xl,
                    'name' => $user->name,
                    'tracking_no' => $shipment->tracking_no,
                    'reference_no' => $shipment->reference_no,
                    'description' => $shipment->description,
                    'spcharge' => $shipment->spcharge,
                    'status' => $shipment->status,
                    'delivery_date' => $shipment->delivery_date,
                    'collected' => $shipment->collected,
                    'created_at' => $shipment->created_at,
                    'updated_at' => $shipment->updated_at
                ];
            }
        }

        return json_encode($result);
    }
}
