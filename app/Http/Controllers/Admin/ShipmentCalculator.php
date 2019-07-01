<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Calsea;

class ShipmentCalculator extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin', ['except' => ['']]);
    }
    
    public function index()
    {
        return view('admin.ShipmentCalculator');
    }
    
    public function Rates(Request $request){
        $this->validate($request,[
            'exrate'=>'required',
            'percentage'=>'required'
        ]);
        $exrate = htmlentities($request->exrate);
        $percentage = htmlentities($request->percentage);
        $sea = Calsea::all();
        if(count($sea)<1){
            $new = new Calsea;
            $new->exrate = $exrate;
            $new->prerate =$percentage;
            $new->save();
        }else{
            $update = Calsea::find(1);
            $update->exrate = $exrate;
            $update->prerate = $percentage;
            $update->save();
        }
        return json_encode(['status'=>200]);
    }
    public function Data(){
    return json_encode(Calsea::find(1));
    }
}
