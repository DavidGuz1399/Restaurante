<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;

class FacturaController extends Controller
{
    public function index(){
        $facturas=Factura::all();
        return view('facturas.index',compact('facturas'));
    }
    public function create(){
        return view('facturas.crear');
    }
    public function store(Request $request){
        // return $request;
        $factura= new Factura();
        $factura->valor=$request->valor;
        $factura->save();
        return redirect()->back();
    }
}
