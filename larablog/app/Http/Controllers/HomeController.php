<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cart;
use App\Product;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

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

    public function getDetail($id) {
        $products = DB::table('products')->where('id',$id)->first();
        return view('page.productDetail',  compact('products'));
    }


    public function AddCart($id)
    {
        $product = DB::table('products')->where('id', $id)->first();

        if ($product != null) {

            $oldCart = session('Cart') ? session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->add($product, $id);
            session(['Cart' => $newCart]);
            $cart = session('Cart');
        }
        return view('page.cart', compact('cart'));
    }

    public function DeleteItemCart(Request $req, $id)
    {
        $oldCart = session('Cart') ? session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->removeItem($id);
        if (Count($newCart->products) > 0) {
            session(['Cart' => $newCart]);
            $cart = session('Cart');
        } else {
            $req->session()->forget('Cart');
            $cart = null;
        }
        return view('page.cart', compact('cart'));
    }

    public function checkOut() {
        return view('page.checkout');
    }
}
