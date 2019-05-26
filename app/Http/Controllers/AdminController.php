<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin',['except'=>['']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin');
    }

    public function edit(){
        return view('admin.adminMain/edit');
    }
    
   public function editData(){
       $admin = Admin::find(Auth::user()->id);
       return json_encode([
        'name'=>$admin->name,
        'email'=>$admin->email,
       ]);
   }
}
