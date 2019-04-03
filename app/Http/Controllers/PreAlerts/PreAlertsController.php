<?php

namespace App\Http\Controllers\PreAlerts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Prealerts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PreAlertsController extends Controller
{
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
        $this->validate($request,[
            'vender' => 'required|max:256',
            'tracking' => 'required|max:256',
            'courier' => 'required|max:256',
            'pkgname' => 'required|max:256',
            'description' => 'required|max:256',
            'value'=>'required|max:100|min:1',
            'weight'=>'required|max:100',
            'invoice'=>'mimes:pdf,jpeg,jpg,png',
        ]);

           //gets the image name with extension.
           $filenameWithExt= $request->file('invoice')->getClientOriginalName();
           //gets the just the file name
           $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
           //gets extension
           $extension = $request->file('invoice')->getClientOriginalExtension();
           //new file name
           $filenametostore= $filename.'_'.time().'.'.$extension;
            $store = new Prealerts;
            $store->user_id =Auth::user()->id;
            $store->vender = $request->vender;
            $store->tracking = $request->tracking;
            $store->courier = $request->courier;
            $store->pkgname = $request->pkgname;
            $store->description = $request->description;
            $store->value = $request->value;
            $store->weight = $request->weight;
            $path= $request->file('invoice')->storeAs('public/Invoice', $filenametostore); 
            $store->invoice =$filenametostore;
            $store->save();
            return view('/prealerts')->with('success','Pre-Alert sent..');

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
