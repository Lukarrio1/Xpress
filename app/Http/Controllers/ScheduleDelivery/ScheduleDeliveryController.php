<?php

namespace App\Http\Controllers\ScheduleDelivery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sheduledelivery as sd;
use App\Sdnotify as sn;
use Illuminate\Support\Facades\Auth;

class ScheduleDeliveryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shd = sd::Where('user_id',Auth::user()->id)->OrderBy('created_at','desc')->get();
        return json_encode($shd);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ScheduleDelivery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
        'firstname'=>"required",
        'lastname'=>"required",
        'address'=>"required",
        'phone'=>"required",
        'express'=>"required"
       ]);
        
       $delivery = new sd;
       $notify =  sn::where('user_id',Auth::user()->id)->first();;
       $delivery->user_id =Auth::user()->id;
       $delivery->firstname = htmlentities($request->firstname);
       $delivery->lastname =htmlentities($request->lastname);
       $delivery->address = htmlentities($request->address);
       $delivery->phone = htmlentities($request->phone);
       if($request->express=="false"){ 
        $delivery->save();
       }else{
        $delivery->express="true"; 
        $delivery->save();
       }
       if(empty($notify)){
        $notify= new sn;
        $notify->user_id=Auth::user()->id;
        $notify->notification = "New schedule delivery from ".Auth::user()->name."";
        $notify->save();
       }else{
        $notify->clicked ="false";
        $notify->save(); 
       }
       return json_encode(["status"=>200]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function single($id)
    {
       $sch = sd::Where('user_id',Auth::user()->id)->where('id',$id)->first();
       return json_encode($sch);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
