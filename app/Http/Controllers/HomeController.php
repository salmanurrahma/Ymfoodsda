<?php

namespace App\Http\Controllers;
use App\barang;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\ResponseS
     */
    public function index()
    {
        $barangs = Barang::paginate(20);
        return view('home', compact('barangs'));
    }
}
