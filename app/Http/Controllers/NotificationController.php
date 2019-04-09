<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    // public function Allusers(){
    //     return json_encode(User::all());
    // }

    // this function checks to see if there is an email token in the database
    public function Token()
    {
        $user = User::find(Auth::user()->id);
        // if the token is empty an empty array will be passed
        if(empty($user->token)){
        return json_encode([
        'notification'=>'',
        'icon'=>'',
        'time'=>'',
        ]);
        }else{
        // if there is a token in the database a notification will be passed..
        return json_encode([
        'notification'=>'Please verify your email address..',
        'icon'=>'<i class="fa fa-envelope-square">',
        'time'=>$user->create_at,
        ]);
        }
    }
}
