<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $news = News::orderBy('created_at', 'DESC')->get();
        return json_encode($news);
    }

    public function SingleNews(Request $request){
        $this->validate($request,[
            'id'=>'required'
        ]);
    $news = News::find($request->id);
    if(empty($news)){
        return json_encode([
            'subject'=>"News Deleted",
            'body'=>"  ",
            "created_at"=>null,
            "updated_at"=>null,
            "id"=>null
        ]);
      }
    return json_encode($news);
    }
}
