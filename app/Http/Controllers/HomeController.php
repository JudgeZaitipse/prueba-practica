<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\factura as Factura;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $facturas = Factura::with(['estado','cliente','vehiculo','usuario'])
        ->where('estado_id',1)->get();
        return view('home',compact('facturas'));
    }
}
