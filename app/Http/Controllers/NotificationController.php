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
       $data = [];
        foreach($users as $user) {
            $data[$user->id] = [$user->name, $user->email , $user->telephone, $user->city];
        }
    
        return json_encode($users); // Make sure we return json 
    }
}
