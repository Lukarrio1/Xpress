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
    $users = User::all();
    
        return json_encode($users); // Make sure we return json 
    }
}
