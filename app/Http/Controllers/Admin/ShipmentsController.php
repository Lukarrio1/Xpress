<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use spnotify;
use User;

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
}
