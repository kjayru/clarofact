<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use App\Layer;
use App\InvoiceItem;
use App\Invoice;
use App\Configuration;
class ConoceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$recibos = Invoice::all();
        //$invoices = InvoiceItem::with('positions','layers')->get();
        $configure = Configuration::first();

        $recibo = Invoice::where('slug','hoja-1')->first();
        $recibos = Invoice::all();
        $invoices = InvoiceItem::where('invoice_id',$recibo->id)->with('positions','layers')->get();

        $titulo = 'Hoja 1';
        $pag= 'hoja-1';
        return view('landing.conoce',['invoices'=>$invoices,'recibos'=>$recibos,'pag'=>$pag,'titulo'=>$titulo,'configure'=>$configure]);
    }

    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $configure = Configuration::first();

        $recibo = Invoice::where('slug',$slug)->first();
        $recibos = Invoice::all();
        $invoices = InvoiceItem::where('invoice_id',$recibo->id)->with('positions','layers')->get();
        
        $ppurl = explode("/",$_SERVER['REQUEST_URI']);
        $pag= $ppurl[2];
        $titulo = $recibo->name;
        return view('landing.conoce',['invoices'=>$invoices,'recibos'=>$recibos,'pag'=>$pag,'titulo'=>$titulo,'configure'=>$configure]);
    }

   
}
