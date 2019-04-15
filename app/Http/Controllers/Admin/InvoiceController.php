<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Prealerts;
use App\User;
use App\invoicenf as Notify;
use Illuminate\Support\Facades\DB;
class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin',['except'=>['']]);
    }

    public function index(){
        return view('admin.Invoices');
    }

    public function Allinvoices(){
    
    $inv=Prealerts::orderBy('created_at', 'DESC')->get();
        return json_encode($inv); 
    }
    
    public function UpdateInvoice(Request $request){
        $this->validate($request,[
            'id'=>'required',
            'inv'=>'required',
        ]); 
       $inv = $request->inv;
       $id = $request->id;     
       $invoice = Prealerts::find($id);
       $user =$invoice->user_id;
       $update= Notify::where('user_id',$user)->first();
       $update->clicked = "true";
       $update->save();
       if($inv==$invoice->token){
        $invoice->token ="false";
        $invoice->save();
        return 1;
       }else if($inv!=$invoice->token){
        $invoice->token ="true";
        $invoice->save();
        return 0;
       }
    }

    public function InvoiceNotification(){
    $notify = Notify::where('clicked','false')->orderBy('updated_at','ASC')->get();
    return json_encode($notify);
    }

    public function InvoiceNotificationUpdate(Request $request){
        $this->validate($request,[
        'id'=>'required',
        ]);
        $update= Notify::find($request->id);
        $update->clicked = "true";
        $update->save();
        return 1;
    }
}
