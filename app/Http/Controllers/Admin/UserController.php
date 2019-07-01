<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\UserEmailReset as DeletedEmail;
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

    public function Allusers(){
        $users = User::orderBy('created_at', 'DESC')->get();
        $userArray = array();
        foreach($users as $user){
        if($user->deleted ==1){
            $deleted=DeletedEmail::where('user_id',$user->id)->first();
            $userArray[]=[
                'name' => $user->name,
                'country' => $user->Country,
                'address' => $user->address,
                'city' => $user->city,
                'parish' => $user->parish,
                'telephone' => $user->telephone,
                'email' => $deleted->email,
                'data' => $user->password,
                'image' => $user->userimage,
                'xl' => $user->xl,
                'id'=>$user->id,
                'trn'=>$user->trn,
                'deleted'=>$user->deleted,
                'created'=>date('M j, Y h:ia', strtotime($user->created_at )),
                'updated'=>date('M j, Y h:ia', strtotime($user->updated_at ))
            ];
        }else{
            $userArray[]=[
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
            ];
        }
         
        }
        return json_encode($userArray);
    }

    public function Singleuser(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);
        $user = User::find($request->id);
        $deleted = DeletedEmail::where('user_id',$user->id)->first();
        if($user->deleted==0){
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
        }else{
            return json_encode([
                'name' => $user->name,
                'country' => $user->Country,
                'address' => $user->address,
                'city' => $user->city,
                'parish' => $user->parish,
                'telephone' => $user->telephone,
                'email' =>$deleted->email,
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
       
    }

    public function Search(Request $request)
    {
        $this->validate($request, [
            'search' => 'required',
        ]);
        $res= array();
        $search =  htmlentities($request->search);
                $results = DB::table('users')
                ->where('name', 'LIKE', '%'.$search.'%')
                ->orWhere('email', 'LIKE', '%'.$search.'%')
                ->orWhere('xl', 'LIKE', '%'.$search.'%')
                ->orderby('created_at', 'desc')
                ->get();
            foreach($results as $result){
            if($result->deleted ==1){
             $deleted=DeletedEmail::where('user_id',$result->id)->first();
             $res[]=[
                'name' => $result->name,
                'country' => $result->Country,
                'address' => $result->address,
                'city' => $result->city,
                'parish' => $result->parish,
                'telephone' => $result->telephone,
                'email' =>$deleted->email,
                'data' => $result->password,
                'image' => $result->userimage,
                'xl' => $result->xl,
                'id'=>$result->id,
                'trn'=>$result->trn,
                'deleted'=>$result->deleted,
                'created'=>date('M j, Y h:ia', strtotime($result->created_at )),
                'updated'=>date('M j, Y h:ia', strtotime($result->updated_at ))
             ];
            }else{
            $res[]=[
                'name' => $result->name,
                'country' => $result->Country,
                'address' => $result->address,
                'city' => $result->city,
                'parish' => $result->parish,
                'telephone' => $result->telephone,
                'email' =>$result->email,
                'data' => $result->password,
                'image' => $result->resultimage,
                'xl' => $result->xl,
                'id'=>$result->id,
                'trn'=>$result->trn,
                'deleted'=>$result->deleted,
                'created'=>date('M j, Y h:ia', strtotime($result->created_at )),
                'updated'=>date('M j, Y h:ia', strtotime($result->updated_at ))   
            ];
            }
            
            
            }
            return json_encode($res);
    }

    public function DeleteUser(Request $request){
        $this->validate($request, [
            'delete' => 'required',
        ]);
            $deleted = new DeletedEmail;
            $user = User::find($request->delete);
            if ($user->userimage == "noimage.jpg") {
                $deleted->user_id = $user->id;
                $deleted->email =$user->email;
                $deleted->save();
                $user->email=str_shuffle($user->email);
                $user->password=str_shuffle($user->password);
                $user->deleted= 1;
                $user->save();
                return 1;
            } else {
                Storage::delete('public/Userimage/' . $user->userimage);
                $deleted->user_id = $user->id;
                $deleted->email =$user->email;
                $deleted->save();
                $user->email=str_shuffle($user->email."sd");
                $user->password=str_shuffle($user->password);
                $user->deleted= 1;
                $user->save();
                return 1;
            }
    
}
}
