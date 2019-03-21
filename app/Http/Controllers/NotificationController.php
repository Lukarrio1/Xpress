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

    //Notifications function for now ..
    public function all_notification()
    {
        $user = User::find(Auth::user()->id);
        if(empty($user->token)){
        }else{
        return json_encode([
        'notification'=>'Your email is not verified.',
        'icon'=>'<i class="fa fa-envelope-square">',
        ]);
        }
    }

    // to show a single notification for now..
    public function show($id){

        $user= User::find($id);

        return json_encode([
        'name'=>$user->name,
        'email'=>$user->email,
        'phone'=>$user->telephone,
        'address'=>$user->address,
        'city'=>$user->city,
        'parish'=>$user->parish,
        'country'=>$user->Country,
        ]);
    }
}
