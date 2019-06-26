<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use App\spnotify;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = User::find(Auth::user()->id);
        $notify = spnotify::where('user_id',$id->id)->first();
        if(empty($notify)){
            $newnotify = new spnotify;
            $newnotify->user_id=$id->id;
            $newnotify->token = "false";
            $newnotify->completed=0;
            $newnotify->save();
        }
        if ($id->xl == "") {
            $id->xl = 10000 + Auth::user()->id;
            $id->save();
            return view('home');
        }
        return view('home');

    }
}
