<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

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
        if ($id->xl == "") {
            $id->xl = 10000 + Auth::user()->id;
            $id->save();
            return view('home');
        }

        return view('home');

    }
}
