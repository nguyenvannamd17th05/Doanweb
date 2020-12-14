<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    public function AuthLogin(){
        $admin_id=Session::get('admin_id');
        if($admin_id){
            return Redirect::to('admin-index');
        }
        else
            return Redirect::to('admin')->send();
    }
    public function index(){
        return view('admin_login');
        }
    public function showindex(){
        $this->AuthLogin();
        return view('Adminpages.admin_index');
    }
    public function dashboard(Request $request){
       
        $email=$request->admin_email;
        $pass=$request->admin_password;
        $result=DB::table('admin')->where('email',$email)->where('password',$pass)->first();
        if($result){
            Session::put('admin_id',$result->id);
        Session::put('name',$result->name);
        return Redirect::to('admin-index');
        }else{
        session::put('message','Mật khẩu hoặc tài khoản sai');
        return Redirect::to('admin');
        }
    }
    public function logout(){
        $this->AuthLogin();
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('admin');
    }
    public function search(Request $request){
        $result=$request->search;
        $result1=str_replace(' ', '%', $result);   
        $cate=DB::table('category')->orderby('id')->get();
        $brand=DB::table('brand')->orderby('id')->get();     
        $data=DB::table('product')->where('name','like','%'.$result1.'%' )->get();
       
        return view('Userpages.search')->with('cate',$cate)->with('brand',$brand)->with('data',$data)->with('result',$result);
    }
}