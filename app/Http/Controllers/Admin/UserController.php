<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin',['except'=>['']]);
    }
    
   public function index(){
       return view('admin.Allusers');
   }
   
   public function Allusers(){
    $users = User::orderBy('created_at', 'DESC')->get();
     return json_encode($users);
   }

   public function Singleuser(Request $request){
    $this->validate($request,[
    'id'=>'required'
    ]);
    $user = User::find($request->id);
    return json_encode([
        'name' => $user->name,
        'country'=> $user->Country,
        'address'=>$user->address,
        'city'=>$user->city,
        'parish'=>$user->parish,
        'telephone'=>$user->telephone,
        'email'=>$user->email,
        'data'=>$user->password,
        'image'=>$user->userimage,
        'ex'=>$user->id,
        ]);
   }

   public function Search(Request $request){
    $this->validate($request,[
    'search'=>'required',
    ]);
    $search = $request->search;
    $results = DB::table('users')
    ->where('name','LIKE','%'.$search.'%')
    ->orWhere('email','LIKE','%'.$search.'%')
    ->orWhere('telephone','LIKE','%'.$search.'%')
    ->orWhere('city','LIKE','%'.$search.'%')
    ->orWhere('parish','LIKE','%'.$search.'%')
    ->orWhere('Country','LIKE','%'.$search.'%')
    ->orWhere('address','LIKE','%'.$search.'%')
    ->orderby('created_at','desc')
    ->get();
    return json_encode($results);
   }
}
