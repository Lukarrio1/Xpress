<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sdnotify as sn;
use App\Sheduledelivery as sd;

class DeliveryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin',['except'=>['']]);
    }

   public function index(){
      
     return view('admin.Delivery');

   }

  

   public function notification(){

    $notify = sn::where('clicked', "false")
    ->orderBy('created_at', 'DESC')
    ->get();
    return json_encode($notify);
    }
     
  

    public function AllSdelivery(){
     $allsd = sd::all()
     ->orderBy('created_at', 'DESC')
     ->get(); 
      return json_encode($allsd);
    }


}
