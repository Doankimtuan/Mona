<?php

namespace App\Http\Controllers;

use App\Bill;
use App\BillDetail;

use DB;
use App\Cart;
use App\Customers;
use App\Product;
use Illuminate\Http\Request;
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
        $products = DB::table('products')->paginate(9);
        return view('page.store', compact('products'));
    }

    public function getKnowledge(){
        return view('page.knowledge');
    }

    public function getDetail($id) {
        $products = DB::table('products')->where('id',$id)->first();
        return view('page.productDetail',  compact('products'));
    }

    public function getContact(){
        return view('page.contact');
    }


    public function AddCart($id)
    {
        $product = DB::table('products')->where('id', $id)->first();

        if ($product != null) {

            $oldCart = session('Cart') ? session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->add($product, $id, 1);
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

    public function getCheckOut() {
        return view('page.checkout');
    }


    public function postCheckOut(Request $req)       // lay data tu form roi luu
    	{
           
  	    	$cart = Session::get('Cart');
           	$cus = new Customers();
         	$cus->name = $req->name;
        	$cus->email = $req->email;
        	$cus->address = $req->address;
        	$cus->phone_number = $req->phone_number;
        	$cus->note = $req->note;
        	$cus->save();

        	$bill = new Bill();
        	$bill->id_custommer = $cus->id;
        	$bill->date_order = date('Y-m-d');
        	$bill->total = $cart->totalPrice;
        	$bill->payment = $req->pay;
            $bill->save();

        	foreach ($cart->products as $item) {
                # code...
            		$billdetail = new BillDetail();
           		    $billdetail->id_bill = $bill->id;
            		$billdetail->id_product = $item['productInfo']->id;
            		$billdetail->quantily = $item['qty'];
            		$billdetail->unit_price = $item['productInfo']->price;
            		$billdetail->save();
       		}

            Session::forget('Cart');
              
      		return redirect()->back()->with('thongbao', 'Dat hang thanh cong');
    	}





    public function search(Request $req) {
        $products = DB::table('products')->where('name', 'like','%'.$req->key.'%')->get();
        return view('page.store', compact('products'));
    }

    public function save_cart(Request $req) {
        $productID = $req->productid_hidden;
        $qty = $req->qty;

        $data = DB::table('products')->where('id', $productID)->first();

        if ($data != null) {

            $oldCart = session('Cart') ? session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->add($data, $productID, $qty);
            session(['Cart' => $newCart]);
            $cart = session('Cart');
        }
        return view('page.cart', compact('cart'));
    }



    // Admin
    public function getAdmin(){
        return view('page.store');
    }
}
