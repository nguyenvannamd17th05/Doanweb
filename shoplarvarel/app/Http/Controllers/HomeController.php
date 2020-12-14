<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();	
class HomeController extends Controller
{
	public function index(){
	$cate=DB::table('category')->orderby('id')->get();
	$brand=DB::table('brand')->orderby('id')->get();
    $product=DB::table('product')->get();
    return view('Userpages.home')->with('cate',$cate)->with('brand',$brand)->with('product',$product);
	}
	public function logincheck(){
    	$cate=DB::table('category')->orderby('id')->get();
		$brand=DB::table('brand')->orderby('id')->get();
    	return view('Userpages.checkout.logincheckout')->with('cate',$cate)->with('brand',$brand);
    }
   public function adduser(Request $request){
    	$data['name']=$request->user_name;
    	$data['email']=$request->user_email;
    	$data['password']=md5($request->user_pass);
    	$data['phone']=$request->user_phone;
    	$user_id=DB::table('customer')->insertGetId($data);
            Session::put('user_id',$user_id);
            Session::put('user_name',$request->user_name);
    	return Redirect::to('index');
    }

    public function logined(Request $request){
        $email=$request->username;
        $pass=md5($request->password);
        $result=DB::table('customer')->where('email',$email)->where('password',$pass)->first();
       	
        if($result){
        Session::put('user_name',$result->name);
        Session::put('user_id',$result->id);
        return Redirect::to('index');
        }else{
        Session::put('message','Mật khẩu hoặc tài khoản sai');
        return Redirect::to('login');
        }
    }
    public function logout(){
        Session::flush();
        return Redirect::to('/');
    }

}
