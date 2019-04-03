<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShipmentsController extends Controller
{
    public function UpdateShipments(){
        return view('admin.Updateshipments');
    }
}
