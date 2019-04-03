<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeliveryController extends Controller
{
 public function Newdelivery(){
     return view('admin.Delivery');
 }
}
