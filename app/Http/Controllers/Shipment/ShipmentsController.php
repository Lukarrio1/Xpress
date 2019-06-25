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
     * This function only returns the shipment page for the user...
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        DB::table('spnotifies')
        ->where('user_id','=',$user)
        ->where('token','=','true')
        ->update(['token'=>'false']);
        return view('Shipments.index');
    }

    /**
     * This function shows all of the shipments that belongs to the logged in user via ajax.
     *
     * @return all shipments
     */
    public function Shipments()
    {
        $user = Auth::user()->id;
        $shipments = DB::table('shipments')
        ->where('user_id','=',$user)
        ->orderBy('updated_at', 'DESC')
        ->get(); 
        return json_encode($shipments);
    }

    /**
     * This function return 1 if the user has unseen shipment package via the Shipment page
     *
     * @param void
     * @return number
     */
    public function notification()
    {
        $user = Auth::user()->id;
        $new = spnotify::where('user_id',$user)->first();
        if(!empty($new)){
            if($new->token =="true"){
            return 1;
              }else{
            return 0;
        }
        }
        return 0;
       
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
