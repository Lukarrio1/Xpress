<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\spnotify;
use App\User;
use App\Shipments;

class ShipmentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin',['except'=>['']]);
    }
    public function UpdateShipments(){
        return view('admin.updateshipment/Updateshipments');
    }


    public function SentShipment(){
        return view('admin.updateshipment/Sentshipments');
    }

    public function Store(Request $request){
        $this->validate($request,[
            'id'=>'required',
            'tracking'=>'required',
            'reference'=>'required',
            'date'=>'required',
            'description'=>'required',
            'charge'=>'required',
            'status'=>'required'
        ]);
        $id = htmlentities($request->id);
        $shp = new Shipments;
        $notify = spnotify::where('user_id',$id)->first();
        $shp->tracking_no = htmlentities($request->tracking);
        $shp->reference_no = htmlentities($request->reference);
        $shp->delivery_date = htmlentities($request->date);
        $shp->description = htmlentities($request->description);
        $shp->spcharge = htmlentities($request->charge);
        switch($request->status){
            case "dw":
            $shp->status ="Delivered to Warehouse";
            break;
            case "Ij" :
            $shp->status ="In transit to Jamaica";
            break;
            case "ac" : 
            $shp->status ="At Customs";
            break;
            case "ru": 
            $shp->status ="Ready for Pick Up";
            break;
        }
            if(empty($notify)){
                $newnotify = new spnotify;
                $newnotify->user_id=$id;
                $newnotify->token = "true";
                $newnotify->save();
            }else if($notify->token=="false"){
                $notify->token = "true";
                $notify->save();
            }
        $shp->user_id = htmlentities($request->id);
        $shp->save();
        return json_encode(['status'=>200]);
        
    }

    public function All(){
        $Shipments = Shipments::OrderBy('created_at','Desc')->get();
        $ship = array();
        foreach($Shipments as $shipment){
            $user = User::find($shipment->user_id);
            $ship[] =[
            'id'=>$shipment->id,
            'xl'=>$user->xl,
            'tracking_no'=>$shipment->tracking_no,
            'reference_no'=>$shipment->reference_no,
            'description'=>$shipment->description,
            'spcharge'=>$shipment->spcharge,
            'status'=>$shipment->status,
            'delivery_date'=>$shipment->delivery_date,
            'collected'=>$shipment->collected,
            'created_at'=>$shipment->created_at,
            'updated_at'=>$shipment->updated_at
            ];
        }
        return json_encode($ship);
    

    }

    public function completed(Request $request){
        $ship = Shipments::find(htmlentities($request->id));
        $ship->collected = 1;
        $ship->save();
        return json_encode(["status"=>200]);

    }

}   
