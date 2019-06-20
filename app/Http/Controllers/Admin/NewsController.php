<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\PasswordUpdatedEmail;
use Illuminate\Support\Facades\Mail;
use App\News;
use App\User;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin',['except'=>['']]);
    }

    public function Create(){
        return view('admin.news');
    }

    public function store(Request $request){
     $this->validate($request,[
         'subject'=>'required',
         'body'=>'required'
     ]);
     $new = new News;
     $new->subject =htmlentities($request->subject);
     $new->body = htmlentities($request->body);
    //  $this->Email(htmlentities($request->subject),htmlentities($request->body));
     $new->save();
     return json_encode([
         'status'=>200,
     ]);
    }

    public function Email($subject,$body){
        $users = User::all();
        foreach($users as $user){
            Mail::to($user->email)->send(new PasswordUpdatedEmail($subject, $body));
        }
    }
}
