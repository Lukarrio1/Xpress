<?php

namespace App\Http\Controllers\Shipment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shipments;
use App\spnotify;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ShipmentsController extends Controller
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

        return view('Shipments.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Shipments()
    {
        $user = Auth::user()->id;
        $shipments = DB::table('shipments')
        ->where('user_id','=',$user)
        ->orderBy('created_at', 'desc')
        ->get(); 
        return json_encode($shipments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function notification()
    {
        $user = Auth::user()->id;
        $new = DB::table('spnotifies')
        ->where('user_id','=',$user)
        ->where('token','=','true')
        ->count(); 
        return json_encode([
        'number'=>$new,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
    public function update(Request $request)
    {   
        $this->validate($request,[
            'status'=>'required',
        ]);

        if($request->status==1){
        $user = Auth::user()->id;
        DB::table('spnotifies')
        ->where('user_id','=',$user)
        ->where('token','=','true')->update(['token'=>'false']);
       
        return json_encode($request->status);
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
