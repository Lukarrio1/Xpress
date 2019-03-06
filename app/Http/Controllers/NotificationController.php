<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Notifications routes for now ..
    public function all_notification()
    {
        $notification = "notification one";
        return view('xpress.notification')->with('notification',$notification);
    }
}
