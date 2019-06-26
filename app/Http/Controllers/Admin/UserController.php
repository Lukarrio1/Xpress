<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin', ['except' => ['']]);
    }

    public function index()
    {
        return view('admin.Allusers');
    }

    public function Allusers()
    {
        $users = User::orderBy('created_at', 'DESC')->get();
        return json_encode($users);
    }

    public function Singleuser(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);
        $user = User::find($request->id);
        return json_encode([
            'name' => $user->name,
            'country' => $user->Country,
            'address' => $user->address,
            'city' => $user->city,
            'parish' => $user->parish,
            'telephone' => $user->telephone,
            'email' => $user->email,
            'data' => $user->password,
            'image' => $user->userimage,
            'xl' => $user->xl,
            'id'=>$user->id,
            'trn'=>$user->trn,
            'deleted'=>$user->deleted,
            'created'=>date('M j, Y h:ia', strtotime($user->created_at )),
            'updated'=>date('M j, Y h:ia', strtotime($user->updated_at ))
        ]);
    }

    public function Search(Request $request)
    {
        $this->validate($request, [
            'search' => 'required',
        ]);
        $search =  htmlentities($request->search);
        $results = DB::table('users')
                ->where('name', 'LIKE', '%'.$search.'%')
                ->orWhere('email', 'LIKE', '%'.$search.'%')
                // ->orWhere('telephone', 'LIKE', '%'.$search.'%')
                // ->orWhere('city', 'LIKE', '%'.$search.'%')
                // ->orWhere('parish', 'LIKE', '%'.$search.'%')
                // ->orWhere('Country', 'LIKE', '%'.$search.'%')
                // ->orWhere('address', 'LIKE', '%'.$search.'%')
                ->orWhere('xl', 'LIKE', '%'.$search.'%')
                ->orderby('created_at', 'desc')
                ->get();
            return json_encode($results);
    }

    public function DeleteUser(Request $request){
        $this->validate($request, [
            'delete' => 'required',
        ]);
            $user = User::find($request->delete);
            if ($user->userimage == "noimage.jpg") {
                $user->email=str_shuffle($user->email);
                $user->password=str_shuffle($user->password);
                $user->deleted= 1;
                $user->save();
                return 1;
            } else {
                Storage::delete('public/Userimage/' . $user->userimage);
                $user->email=str_shuffle($user->email."sd");
                $user->password=str_shuffle($user->password);
                $user->deleted= 1;
                $user->save();
                return 1;
            }
    
}
}
