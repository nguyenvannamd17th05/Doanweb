<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;	
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

class BrandController extends Controller
{
        public function AuthLogin(){
        $admin_id=Session::get('admin_id');
        if($admin_id){
            return Redirect::to('admin-index');
        }
        else
            return Redirect::to('admin')->send();
    }
    public function addBrand(){
        $this->AuthLogin();
    	return view('adminpages.addbrand');
    }
    public function allBrand(){
        $this->AuthLogin();
    	$data=DB::table('brand')->get();
    	return view('adminpages.allbrand')->with('data',$data);
 
    }
    public function editBrand($brand_id){
        $this->AuthLogin();
    	$data=DB::table('brand')->where('id',$brand_id)->get();
    	return view('adminpages.editbrand')->with('data',$data);
    	
    }
    public function delBrand($brand_id){
        $this->AuthLogin();
    	DB::table('brand')->where('id',$brand_id)->delete();
    	return Redirect::to('all-brand');	
    }
    public function addedBrand(Request $request){
        $this->AuthLogin();
    	$data=array();
    	$data['name']=$request->brand_name;
    	$data['desc']=$request->brand_desc;
   		DB::table('brand')->insert($data);
   		return Redirect::to('all-brand');
    }
    public function editedBrand(Request $request,$brand_id)
    {
        $this->AuthLogin();
    	$data=array();
    	$data['name']=$request->brand_name;
    	$data['desc']=$request->brand_desc;
    	DB::table('brand')->where('id',$brand_id)->update($data);
    	return Redirect::to('all-brand');
    }
    //branduser
     public function showbrand($brand_id){
      
        $cate=DB::table('category')->orderby('id')->get();
        $brand=DB::table('brand')->orderby('id')->get();
        $brand1=DB::table('brand')->where('brand.id',$brand_id)->limit(1)->get();
        $product_by_brand=DB::table('product')->join('brand','product.brand_id','=','brand.id')->where('product.brand_id',$brand_id)->select('brand.name as brand_name','product.*')->get();
        return view('Userpages.brand.showbrand')->with('cate',$cate)->with('brand',$brand)->with('pbb',$product_by_brand)->with('brand1',$brand1);
    }   
}

