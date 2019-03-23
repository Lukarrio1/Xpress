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


    public function Allusers(){
        return json_encode(User::all());
    }

    //Notifications function for now ..
    public function Token()
    {
        $user = User::find(Auth::user()->id);
        if(empty($user->token)){
        return json_encode([
        'notification'=>'',
        'icon'=>'',
        'id'=>'',
        'url'=>''
        ]);
        }else{
        return json_encode([
        'notification'=>'Please verify your email address..',
        'icon'=>'<i class="fa fa-envelope-square">',
        'id'=>'1',
        'url'=>'/home',
        ]);
        }
    }

    // // to show a single notification for now..
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
