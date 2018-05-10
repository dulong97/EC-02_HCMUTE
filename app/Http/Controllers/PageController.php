<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AuctionProduct;
use App\Bidder;
use App\ProductType;
use App\Bidder_AuctionProduct;
use App\Cart;
use App\CartDB;
use App\Cart_detail;
use Session;

class PageController extends Controller
{
    public function getIndex(){
        $product = AuctionProduct::Where('state',1)->get();
        $produc_type = ProductType::all();
    	return view('trangchu',['product'=>$product,'produc_type'=>$produc_type]);
    }
    public function getDangky(){
    	return view('dangky');
    }

    public function getDangnhap(){
    	return view('dangnhap');
    }
      public function getDangxuat(){
        Session::flush();
        return redirect('dangnhap');
    }
    public function postDangnhap(Request $request){
        $username = $request['username'];
        $pass     = $request['password'];
        $bidder      = Bidder::Where('username',$username)->first();
        // dd($bidder);
        if($bidder!=null && $bidder->password == $pass ){
           Session::put('dangnhap',$bidder);
           return $this->getIndex();

        }
        else
          return redirect()->back()->with('error','Đăng nhập không thành công');
          //  return view('dangnhap',['error'=>'Đăng nhập không thành công']);
    }

    public function getGiohang(){
       
    	return view('giohang');
    }
    public function getThanhtoan(){
    	return view('thanhtoan');
    } 
    public function getDaugia($id){
        $getsp = AuctionProduct::Where('id',$id)->first();
        $bidder_ids = Bidder_AuctionProduct::all();
       // $bidders = Bidder::Where('id',$bidder_ids->id_bidder)->select('name')->get();
       $bidders = Bidder_AuctionProduct::Where('id_product',$id)
                                ->join('Bidder', 'Bidder.id', '=', 'Bidder_AuctionProduct.id_bidder')
                                ->select('name','bid_price','Bidder_AuctionProduct.created_at','username')
                                ->orderBy('bid_price', 'desc')
                                ->get();

        //dd($bidders);
    	return view('daugia',['getsp'=>$getsp,'bidders'=>$bidders]);
    }

    public function postDaugia($id){
        $bidders = Bidder_AuctionProduct::Where('id_product',$id)
                                ->join('Bidder', 'Bidder.id', '=', 'Bidder_AuctionProduct.id_bidder')
                                ->select('bid_price')
                                ->orderBy('bid_price', 'desc')
                                ->first();

        $bidder_product = new Bidder_AuctionProduct();
        $bidder_product->id_product = $id;
        $bidder_product->id_bidder = Session::get('dangnhap')->id;
        if($bidders->bid_price<=100000)
        $bidder_product->bid_price = $bidders->bid_price+10000;
        else
        $bidder_product->bid_price = $bidders->bid_price+$bidders->bid_price*0.2;
        $bidder_product->save();
        return redirect()->back();
    }


    public function getAddtocart(Request $req,$id){
        $product=AuctionProduct::find($id);
        $oldcart=Session('cart')?Session::get('cart'):null;
        $cart= new Cart($oldcart);
        $cart->add($product,$id);
        $req->Session()->put('cart',$cart);
        $product_cart = Session::get('cart')->items;
        //return redirect()->back();
        if(Session::has('dangnhap')){
        $cart = new CartDB();
        $cart->id_bidder = Session::get('dangnhap')->id;
        $cart->total_price = Session::get('cart')->totalPrice;
        $cart->save();
        $cart_detail = new Cart_detail();
        foreach ($product_cart as $key => $value) {
            $cart_detail->id_product =  $key;  
            $cart_detail->id_cart = $cart->id; 
            $cart_detail->price = $value['price'];
            $cart_detail->Soluong = $value['qty'];
            $cart_detail->save();
        }
        return view('giohang',['product_cart1'=>$product_cart]);

     }
             return view('giohang',['product_cart1'=>$product_cart]);

 }

    // public function postDaugia(Request $req){
    //     $bidders = new Bidder_AuctionProduct;
        
    // }

}
