<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\invoicenf as Notify;
use App\Prealerts;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin', ['except' => ['']]);
    }

    public function index()
    {
        return view('admin.Invoices');
    }

    public function Allinvoices()
    {
        $inv = Prealerts::orderBy('updated_at', 'ASC')->get();
        return json_encode($inv);
    }

    public function UpdateInvoice(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'inv' => 'required',
        ]);
        $inv = $request->inv;
        $id = $request->id;
        $invoice = Prealerts::find($id);
        $user = $invoice->user_id;
        $update = Notify::where('user_id', $user)->first();
        $update->clicked = "true";
        $update->save();
        if ($inv == $invoice->token) {
            $invoice->token = "false";
            $invoice->save();
            return 1;
        } else if ($inv != $invoice->token) {
            $invoice->token = "true";
            $invoice->save();
            return 0;
        }
    }

    public function InvoiceNotification()
    {
        $notify = Notify::where('clicked', 'false')->orderBy('created_at', 'DESC')->get();
        return json_encode($notify);
    }

    public function InvoiceNotificationUpdate(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);
        $update = Notify::find($request->id);
        $update->clicked = "true";
        $update->save();
        return json_encode(["status" => 200]);
    }

    public function InvoiceSearch(Request $request)
    {
        $this->validate($request, [
            'search' => 'required',
        ]);
        $search = htmlentities($request->search);
        $result = Prealerts::where('xl', 'LIKE', '%' . $search . '%')
            ->orwhere('email', 'like', '%' . $search . '%')
            ->orwhere('courier', 'like', '%' . $search . '%')
            ->orwhere('tracking', 'like', '%' . $search . '%')
            ->orwhere('name', 'like', '%' . $search . '%')
            ->orderBy('created_at', 'DESC')
            ->get();
        return json_encode($result);
    }

    public function InvFile(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);
        $inv = Prealerts::find($request->id);
        $ext = substr_count($inv->invoice, ".pdf");
        return json_encode([
            'file' => $inv->invoice,
            'ext' => $ext,
        ]);
    }
}
