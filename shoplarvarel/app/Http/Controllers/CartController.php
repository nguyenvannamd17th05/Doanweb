<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Cart;
class CartController extends Controller
{
    public function addcart(Request $request){
    	$pro_id=$request->id_hidden;
    	$qty=$request->qty;
    	$cate=DB::table('category')->orderby('id')->get();
		$brand=DB::table('brand')->orderby('id')->get();
		$product=DB::table('product')->where('id',$pro_id)->first();
    
		$data['id']=$pro_id;
		$data['qty']=$qty;
		$data['name']= $product->name;
		$data['price']=$product->price;
		$data['weight']=$product->price;	
		$data['options']['image']=$product->image;
		Cart::add($data);
   		return Redirect::to('showcart');	
    }
    public function showcart(){
    
    	$cate=DB::table('category')->orderby('id')->get();
		$brand=DB::table('brand')->orderby('id')->get();
    	return view('Userpages.cart.showcart')->with('cate',$cate)->with('brand',$brand);
    }
    public function delete($rowid){
    	Cart::remove($rowid);
    			return Redirect::to('showcart');
    }
    public function updatecart(Request $request,$rowid){
    	$qty=$request->qty;
    	Cart::update($rowid,$qty);
    	return Redirect::to('showcart');
    }
}

