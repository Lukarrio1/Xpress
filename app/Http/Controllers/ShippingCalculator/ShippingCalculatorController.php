<?php

namespace App\Http\Controllers\ShippingCalculator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Calsea;
class ShippingCalculatorController extends Controller
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
        return view('SpCalulator.index');
    }

    public function Data(){
        return json_encode(Calsea::find(1));
    }
}
