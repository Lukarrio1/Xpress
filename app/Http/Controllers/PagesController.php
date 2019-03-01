<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index(){
        
        return view('Dashboard');
    }

    //Notifications routes for now .. 
    public function all_notification(){
        return view('xpress.notification');
    } 
}
