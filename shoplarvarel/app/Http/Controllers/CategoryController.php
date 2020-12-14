<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DB;
use Session;
class CategoryController extends Controller
{
    //admin
      public function AuthLogin(){
        $admin_id=Session::get('admin_id');
        if($admin_id){
            return Redirect::to('admin-index');
        }
        else
            return Redirect::to('admin')->send();
    }
    public function addCategory(){
        $this->AuthLogin();
    	return view('adminpages.addcategory');
    }
    public function allCategory(){
        $this->AuthLogin();
    	$data=DB::table('category')->get();
    	return view('adminpages.allcategory')->with('data',$data);
 
    }
    public function editCategory($cate_id){
        $this->AuthLogin();
    	$data=DB::table('category')->where('id',$cate_id)->get();
    	return view('adminpages.editcategory')->with('data',$data);
    	
    }
    public function delCategory($cate_id){
        $this->AuthLogin();
    	DB::table('category')->where('id',$cate_id)->delete();
    	return Redirect::to('all-category');	
    }
    public function addedCategory(Request $request){
        $this->AuthLogin();
    	$data=array();
    	$data['name']=$request->category_name;
    	$data['desc']=$request->category_desc;
    	
   		DB::table('category')->insert($data);
   		return Redirect::to('all-category');
    }
    public function editedCategory(Request $request,$cate_id)
    {
        $this->AuthLogin();
    	$data=array();
    	$data['name']=$request->category_name;
    	$data['desc']=$request->category_desc;
        $data['id']=$request->category_id;
    	DB::table('category')->where('id',$cate_id)->update($data);
    	return Redirect::to('all-category');
    }
    //user
    public function showcategory($cate_id){
    
        $cate=DB::table('category')->orderby('id')->get();
        $brand=DB::table('brand')->orderby('id')->get();
        $cate1=DB::table('category')->where('category.id',$cate_id)->limit(1)->get();
        $product_by_cate=DB::table('product')->join('category','product.cate_id','=','category.id')->where('product.cate_id',$cate_id)->select('category.name as category_name','product.*')->get();
        return view('Userpages.category.showcategory')->with('cate',$cate)->with('brand',$brand)->with('pbc',$product_by_cate)->with('cate1',$cate1);
    }   
}
