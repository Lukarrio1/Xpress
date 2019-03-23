<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function SingleUser()
    {
        $user= User::find(Auth::user()->id);
        return json_encode([
        'name' => $user->name,
        'country'=> $user->Country,
        'address'=>$user->address,
        'city'=>$user->city,
        'parish'=>$user->parish,
        'telephone'=>$user->telephone,
        'email'=>$user->email,
        ]);
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('user.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:3',
            'country'=>'required|min:3',
            'address'=>'required|min:3',
            'city'=>'required|min:3',
            'parish'=>'required|min:3',
            'telephone'=>'required|min:7',
        ]);
        $user= User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->telephone = $request->telephone;
        $user->parish= $request->parish;
        $user->city = $request->city;
        $user->address= $request->address;
        $user->Country =$request->country;
        $user->save();
        return "updated";

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $this->validate($request,[
        'delete'=>'required',
        ]);
            if($request->delete ==true){
                $user = User::find(Auth::user()->id);
                $user->delete();
                return 1;
            }

    }

    public function Modaltoken(){
        $token= User::find(Auth::user()->id);
        return json_encode([
        'token'=>$token->login_modal,
        'id'=>$token->id,
        ]);
    }

    public function modaltokenupdate(Request $request){
    $this->validate($request,[
    'id'=>'required',
    ]);
    $token = User::find($request->id);
    $token->login_modal="";
    $token->save();
    }
    public function all_users(){
        return json_encode(User::orderBy('created_at', 'DESC')->get());
    }
}
