<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Calsea;
use App\Calair;

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
    
    public function SeaRates(Request $request){
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

    public function SeaData(){
   
        return json_encode(Calsea::find(1));
    }


    public function AirData(){
      
        return json_encode(Calair::find(1));
        }
        
    public function AirRates(Request $request){
        $this->validate($request,[
            'exrate'=>"required",
            'shw1'=>"required",
            'shw2'=>"required",
            'shw3'=>"required",
            'shw4'=>"required",
            'shw5'=>"required",
            'shw6'=>"required",
            'shw7'=>"required",
            'shw8'=>"required",
            'shw9'=>"required",
            'shw10'=>"required",
            'shw11up'=>"required",
            'shw21up'=>"required"
        ]);
            if(count(Calair::all())<1){
                $new = new Calair;
                $new->exrate = htmlentities($request->exrate);
                $new->w1lb = htmlentities($request->shw1);
                $new->w2lb = htmlentities($request->shw2);
                $new->w3lb = htmlentities($request->shw3);
                $new->w4lb = htmlentities($request->shw4);
                $new->w5lb = htmlentities($request->shw5);
                $new->w6lb = htmlentities($request->shw6);
                $new->w7lb = htmlentities($request->shw7);
                $new->w8lb = htmlentities($request->shw8);
                $new->w9lb = htmlentities($request->shw9);
                $new->w10lb = htmlentities($request->shw10);
                $new->w11lbup =htmlentities($request->shw11up);
                $new->w21lbup =htmlentities($request->shw21up);
                $new->save();
            }else{
                $update = Calair::find(1);
                $update->exrate = htmlentities($request->exrate);
                $update->w1lb = htmlentities($request->shw1);
                $update->w2lb = htmlentities($request->shw2);
                $update->w3lb = htmlentities($request->shw3);
                $update->w4lb = htmlentities($request->shw4);
                $update->w5lb = htmlentities($request->shw5);
                $update->w6lb = htmlentities($request->shw6);
                $update->w7lb = htmlentities($request->shw7);
                $update->w8lb = htmlentities($request->shw8);
                $update->w9lb = htmlentities($request->shw9);
                $update->w10lb = htmlentities($request->shw10);
                $update->w11lbup =htmlentities($request->shw11up);
                $update->w21lbup =htmlentities($request->shw21up);
                $update->save();
            }
        return json_encode(['status'=>201]);
    }


   
    
}
