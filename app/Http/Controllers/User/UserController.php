<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordUpdatedEmail;
use Illuminate\Support\Facades\Storage;

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
    // this function send a single user to the
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
        'data'=>$user->password,
        'image'=>$user->userimage,
        'id'=>$user->id,
        ]);
    }

    /*
     * Updates the users password
     *
     * @return \Illuminate\Http\Response
     */
    // this function updates the pasword
    public function PasswordUpdate(Request $request){
        $this->validate($request,[
        'newpass'=>'required|min:6',
        ]);
    $password =User::find(Auth::user()->id);
    $password->password = Hash::make($request->newpass);
    $this->PasswordEmailNotification();
    $password->save();

    } 
// this function checks the the oldpassword form the from and compare it with the password from the database
    public function Pdata(Request $request){
        $this->validate($request,[
        'data'=>'required|min:6',
        ]);
    $p= User::find(Auth::user()->id);
    if (Hash::check($request->data,$p->password)) {
        return json_encode([
            'passed'=>1,
           ]);
    }else{
    return json_encode([
        'passed'=>0,
        ]);
    }
      
    }
    /**
     * Storeimage a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // this function updates or store a new image for the user..
    public function Storeimage(Request $request)
    {
        $this->validate($request,[
        'image'=>'required|max:1999|image',
        ]);
            
        //gets the image name with extension.
        $filenameWithExt= $request->file('image')->getClientOriginalName();
        //gets the just the file name
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //gets extension
        $extension = $request->file('image')->getClientOriginalExtension();
        //new file name
        $filenametostore= $filename.'_'.time().'.'.$extension;
        $image = User::find(Auth::user()->id);
        if($image->userimage=="noimage.jpg"){
            $path= $request->file('image')->storeAs('public/Userimage', $filenametostore);  
            $image->userimage = $filenametostore;
            $image->save();
            return redirect('/MyAccount');
        }else{
            Storage::delete('public/Userimage/'.$image->userimage);
            $path= $request->file('image')->storeAs('public/Userimage', $filenametostore);
            $image->userimage = $filenametostore;
            $image->save();
            return redirect('/MyAccount');
        }
      


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function removeimg(Request $request)
    {
        $this->validate($request,[
            'rm'=>'required',
        ]);
        if($request->rm =="true"){
            $user = User::find(Auth::user()->id);
            if($user->userimage=="noimage.jpg"){
            }else{
            Storage::delete('public/Userimage/'.$user->userimage);
            $user->userimage ="noimage.jpg";
            $user->save();
            return 1;
            }
        }
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
    // this function deletes a user from the database 
    public function destroy(Request $request)
    {
        $this->validate($request,[
        'delete'=>'required',
        ]);
            if($request->delete ==true){
                $user = User::find(Auth::user()->id);
                if($user->userimage=="noimage.jpg"){
                    $user->delete();
                    return 1;
                }else{
                Storage::delete('public/Userimage/'.$user->userimage);
                $user->delete();
                return 1;
                }
            }

    }
// this function returns the modal token
    public function Modaltoken(){
        $token= User::find(Auth::user()->id);
        return json_encode([
        'token'=>$token->login_modal,
        'id'=>$token->id,
        ]);
    }
    // this function updates the token for the modal
    public function modaltokenupdate(Request $request){
    $this->validate($request,[
    'id'=>'required',
    ]);
    $token = User::find($request->id);
    $token->login_modal="";
    $token->save();
    }
    // this function returns all the user in the database will remove later this is for the admin section..
    public function all_users(){
        return json_encode(User::orderBy('created_at', 'DESC')->get());
    }
// this function sends an email to the user as soon as they change there password
    public function PasswordEmailNotification(){
    $person = User::find(Auth::user()->id);
    $name =$person->name;
    $mail = 'your password has been updated successfully';
    Mail::to($person->email)->send(new PasswordUpdatedEmail($name,$mail));
        }
}
