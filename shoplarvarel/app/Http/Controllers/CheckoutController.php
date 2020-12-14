<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Cart;
use Illuminate\Support\Facades\Redirect;
session_start();
class CheckoutController extends Controller
{
    
    public function AuthLogin(){
        $admin_id=Session::get('admin_id');
        if($admin_id){
            return Redirect::to('admin-index');
        }
        else
            return Redirect::to('admin')->send();
    }
    public function checkout(){
    	$cate=DB::table('category')->orderby('id')->get();
		$brand=DB::table('brand')->orderby('id')->get();
        $data=Cart::content();
    	return view('Userpages.checkout.showcheckout')->with('cate',$cate)->with('brand',$brand);
    }
    public function addcheckout(Request $request){
        $data['name']=$request->ship_name;
        $data['email']=$request->ship_email;
        $data['note']=$request->message;
        $data['phone']=$request->ship_phone;
        $data['address']=$request->ship_add;
        $ship_id=DB::table('shipping')->insertGetId($data);
        Session::put('ship_id',$ship_id);
        return Redirect::to('payment');
    }
    public function payment(){
        $cate=DB::table('category')->orderby('id')->get();
        $brand=DB::table('brand')->orderby('id')->get();
        $data=Cart::content();
        return view('Userpages.checkout.payment')->with('cate',$cate)->with('brand',$brand)->with('data',$data);
    }
    public function addpayment(Request $request){
        //payment
        $data['payment_options']=$request->payment_option;
        $data['status']='0';
        $payment_id=DB::table('payment')->insertGetId($data);
        //order
         $odata['customer_id']=Session::get('user_id');
        $odata['ship_id']=Session::get('ship_id');
         $odata['payment_id']=$payment_id;
          $odata['total']=Cart::total();
          $odata['status']='0';
          $order_id=DB::table('order')->insertGetId($odata);
        //orderdetail
          $a=Cart::content();
          foreach($a as $v){
          $ddata['order_id']=$order_id;
          $ddata['product_id']=$v->id;
          $ddata['Quantity']=$v->qty;
          DB::table('ordere_detail')->insert($ddata);
      }
      if($ddata)
        Cart::destroy();
        $cate=DB::table('category')->orderby('id')->get();
        $brand=DB::table('brand')->orderby('id')->get();
        return view('Userpages.checkout.end')->with('cate',$cate)->with('brand',$brand);
    }
    public function morder(){
        $this->AuthLogin();
        $allorder=DB::table('order')
        ->join('customer','customer.id','=','order.customer_id')
        ->select('order.*','customer.name')->get();
        return view('Adminpages.manage_order')->with('data',$allorder);
    }
    public function showorder($id){
        $this->AuthLogin();
       $orderby_id=DB::table('order')
        ->join('customer','customer.id','=','order.customer_id')
        ->join('shipping','shipping.id','=','order.ship_id')->select('customer.name as cus_name','customer.phone as cus_phone','customer.email as cus_email','order.*','shipping.*')->where('order.id',$id)->get();
        $data=DB::table('ordere_detail')
        ->join('product','product.id','=','ordere_detail.product_id')->join('order','order.id','=','ordere_detail.order_id')->select('product.*','ordere_detail.*','order.total')->where('ordere_detail.order_id',$id)->get();
         return view('Adminpages.showorder')->with('order',$orderby_id)->with('orderdetail',$data);
    }
    public function delorder($id){
        $this->AuthLogin();
        DB::table('order')->where('id',$id)->delete();
        return Redirect::to('m-order');   
    }
 }
