<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Notifications routes for now ..
    public function all_notification()
    {
        return json_encode( User::orderBy('created_at', 'DESC')->get());
    }

    // to show a single notification for now..
    public function show($id){
        return User::find($id);
    }
}
