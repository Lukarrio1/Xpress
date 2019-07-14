<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\PasswordUpdatedEmail;
use Illuminate\Support\Facades\Mail;
use App\News;
use App\User;
use App\Mail\NewBroadCast;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin', ['except' => ['']]);
    }

    public function Create()
    {
        return view('admin.news');
    }

    public function index(){
        return view('admin.Allnews');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'subject' => 'required',
            'body' => 'required'
    ]);
        $this->Email(htmlentities($request->subject), htmlentities($request->body));
        $new = new News;
        $new->subject = htmlentities($request->subject);
        $new->body = htmlentities($request->body);
        $new->save();
        return json_encode([
            'status' => 200,
        ]);
    }

    public function allnews(){
        $news = News::orderby('created_at','desc')->get();
        return json_encode($news);
    }

    public function singleNews($id){
        $single= News::find($id);
        return json_encode($single);
    }

    public function search(Request $request){
        $this->validate($request,['search'=>'required']);
        $search = htmlentities($request->search);
        $res = News::where('subject','LIKE', '%'.$search.'%')
        ->orWhere('body','LIKE','%'.$search.'%')
        ->orderby('created_at','desc')
        ->get();
        return json_encode($res);
    }

    public function destroy(Request $request){
        $this->validate($request,[
            "id"=>"required"
        ]);
      $delete = News::find(htmlentities($request->id));
      $delete->delete();
      return json_encode(['status'=>200]);
    }

    public function Email($subject, $body)
    {
        $users = User::all();
        foreach ($users as $user) {
            if($user->deleted==0){
             Mail::to($user->email)->send(new NewBroadCast($subject, $body));
            }
        }
    }

     
}
