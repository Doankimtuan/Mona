<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        $products = DB::table('products')->limit('8')->get();
        return view('home', compact('products'));
    }

    public function getIntroduce(){
        return view('page.introduce');
    }

    public function getStore()
    {
        $products = DB::table('products')->limit('100')->get();
        return view('page.store', compact('products'));
    }
    
    public function getKnowledge(){
        return view('page.knowledge');
    }
}
