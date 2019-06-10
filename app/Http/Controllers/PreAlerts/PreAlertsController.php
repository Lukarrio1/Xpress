<?php

namespace App\Http\Controllers\PreAlerts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Prealerts;
use Illuminate\Support\Facades\Auth;
use App\invoicenf as nt;
class PreAlertsController extends Controller
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
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('PreAlerts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'vender' => 'required|max:256',
            'tracking' => 'required|max:256',
            'courier' => 'required|max:256',
            'pkgname' => 'required|max:256',
            'description' => 'required|max:256',
            'value' => 'required|max:100|min:1',
            'weight' => 'required|max:100',
            'invoice' => 'mimes:pdf,jpeg,jpg,png|max:1999',
        ]);

        //gets the image name with extension.
        $filenameWithExt = $request->file('invoice')->getClientOriginalName();
        //gets the just the file name
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //gets extension
        $extension = $request->file('invoice')->getClientOriginalExtension();
        //new file name
        $filenametostore = $filename . '_' . time() . '.' . $extension;
        $store = new Prealerts;
        $store->user_id = Auth::user()->id;
        $store->name= Auth::user()->name;
        $store->email= Auth::user()->email;
        $store->xl= Auth::user()->first()->xl;
        $notify = nt::where('user_id',Auth::user()->id)->first();
        if(empty($notify->user_id)){
        $notify = New nt;
        $notify->user_id = Auth::user()->id;
        $notify->notification = "New invoice from ".Auth::user()->name."";
        $notify->save();
        }else{
        $notify->clicked="false";
        $notify->save();
        }
        $store->vender = htmlentities($request->vender);
        $store->tracking = htmlentities($request->tracking);
        $store->courier = htmlentities($request->courier);
        $store->pkgname = htmlentities($request->pkgname);
        $store->description= htmlentities($request->description);
        $store->value =  htmlentities($request->value);
        $store->weight =  htmlentities($request->weight);
        $path = $request->file('invoice')->storeAs('public/Invoice', $filenametostore);
        $store->invoice = $filenametostore;
        $store->save();
        return redirect()->back()->with('success', 'Pre alert sent..');

    }

}
