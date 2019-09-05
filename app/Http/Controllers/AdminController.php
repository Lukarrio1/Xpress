<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin', ['except' => ['']]);
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

    public function edit()
    {
        return view('admin.adminMain/edit');
    }

    public function editData()
    {
        $admin = Admin::find(Auth::user()->id);
        return json_encode([
            'name' => $admin->name,
            'email' => $admin->email,
        ]);
    }

    public function AppData()
    {
        $url = config('app.url');
        $name = config('app.name');
        return json_encode([
            'app_name' => $name,
            'app_url' => $url
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:200',
            'name' => 'required'
        ]);
        $name = htmlentities($request->name);
        $email = htmlentities($request->email);
        $admin = Admin::find(Auth::user()->id);
        $admin->name = $name;
        $admin->email = $email;
        $admin->save();
        return json_encode(['status' => 200]);
    }

    public function Pdata(Request $request)
    {
        $this->validate($request, [
            'data' => 'required|min:6',
        ]);
        $p = Admin::find(Auth::user()->id);
        if (Hash::check($request->data, $p->password)) {
            return json_encode([
                'passed' => 1,
            ]);
        } else {
            return json_encode([
                'passed' => 0,
            ]);
        }
    }

    public function PasswordUpdate(Request $request)
    {
        $this->validate($request, [
            'newpass' => 'required|min:6',
        ]);
        $password = Admin::find(Auth::user()->id);
        $password->password = Hash::make(htmlentities($request->newpass));
        $password->save();
        return json_encode(["status" => 200]);
    }
}
