<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sdnotify as sn;
use App\Sheduledelivery as sd;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DeliveryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin', ['except' => ['']]);
    }

    public function index()
    {
        return view('admin.Delivery');

    }


    public function notification()
    {

        $notify = sn::where('clicked', "false")
            ->orderBy('created_at', 'DESC')
            ->get();
        return json_encode($notify);
    }


    public function AllSdelivery()
    {
        $allsd = sd::orderBy('created_at', 'DESC')
            ->get();
        return json_encode($allsd);
    }

    public function DeliveryUpdate(Request $request)
    {
        $user = htmlentities($request->id);
        DB::table('sdnotifies')
            ->where('user_id', '=', $user)
            ->where('clicked', '=', 'false')
            ->update(['clicked' => 'true']);
        return json_encode(["status" => 200]);
    }

    public function TokenUpdate(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'value' => 'required',
        ]);
        $value = $request->value;
        $id = $request->id;
        $dev = sd::find($id);
        $user = $dev->user_id;
        $update = sn::where('user_id', $user)->first();
        $update->clicked = "true";
        $update->save();
        if ($value == $dev->token) {
            $dev->token = "false";
            $dev->save();
            return 1;
        } else if ($value != $dev->token) {
            $dev->token = "true";
            $dev->save();
            return 0;
        }
    }

    public function DeliverySearch(Request $request)
    {
        $this->validate($request, [
            'search' => 'required'
        ]);
        $search = htmlentities($request->search);
        $result = sd::where('firstname', 'LIKE', '%' . $search . '%')
            ->orwhere('lastname', 'like', '%' . $search . '%')
            ->orwhere('address', 'like', '%' . $search . '%')
            ->orwhere('phone', 'like', '%' . $search . '%')
            ->orderBy('created_at', 'DESC')
            ->get();
        return json_encode($result);

    }
}
