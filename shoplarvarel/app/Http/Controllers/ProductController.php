<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
	use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;

class ProductController extends Controller
{
	  public function AuthLogin(){
        $admin_id=Session::get('admin_id');
        if($admin_id){
            return Redirect::to('admin-index');
        }
        else
            return Redirect::to('admin')->send();
    }

public function addProduct(){
	$this->AuthLogin();
	$cate=DB::table('category')->orderby('id')->get();
	$brand=DB::table('brand')->orderby('id')->get();
	return view('adminpages.addproduct')->with('cate',$cate)->with('brand',$brand);
}
public function allProduct(){
	$this->AuthLogin();
	$data=DB::table('product')->join('category','category.id','=','product.cate_id')->join('brand','brand.id','=','product.brand_id')->select('category.name as cate_name','product.*','brand.name as brand_name')->get();
	return view('adminpages.allproduct')->with('data',$data);
}
public function addProdetail($pro_slug){
	$this->AuthLogin();
	$data=DB::table('product')->where('slug',$pro_slug)->get();
	return view('adminpages.addprodetail')->with('data',$data);
}
public function editProduct($product_id){
	$this->AuthLogin();
	$cate=DB::table('category')->get();
	$brand=DB::table('brand')->get();
	$data=DB::table('product')->where('id',$product_id)->get();
		return view('adminpages.editproduct')->with('data',$data)->with('cate',$cate)->with('brand',$brand);
}
public function delProduct($product_id){
	$this->AuthLogin();
	DB::table('product')->where('id',$product_id)->delete();
		return Redirect::to('all-product');
}
public function addedProduct(Request $request){
	$this->AuthLogin();
	$data=array();
	$data['name']=$request->product_name;
	$data['desc']=$request->product_desc;
	$data['info']=$request->product_info;
	$data['price']=$request->product_price;
	$data['status']=$request->product_status;
	$data['cate_id']=$request->cate;
	$data['brand_id']=$request->brand;
	$data['slug']=Str::slug($request->product_name);
	$getimg=$request->product_img;
	if($getimg){
		$getnameimg=$getimg->getClientOriginalName();
		$newimg=$getnameimg;
		$getimg->move("./upload/product",$newimg);
		$data['image']=$newimg;
		DB::table('product')->insert($data);
			return Redirect::to('all-product');
	}
		DB::table('product')->insert($data);
		return Redirect::to('all-product');
}
public function editedProduct(Request $request,$product_id)
{
	$this->AuthLogin();
	$data=array();
	$data['name']=$request->product_name;
	$data['desc']=$request->product_desc;
	$data['info']=$request->product_info;
	$data['price']=$request->product_price;
	$data['status']=$request->product_status;
	$data['cate_id']=$request->cate;
	$data['brand_id']=$request->brand;
	$data['slug']=Str::slug($request->product_name);
		$getimg=$request->product_img;
	if($getimg){
		$getnameimg=$getimg->getClientOriginalName();
		$newimg=$getnameimg;
		$getimg->move("./upload/product",$newimg);
		$data['image']=$newimg;
		DB::table('product')->where('id',$product_id)->update($data);
			return Redirect::to('all-product');
	}
	DB::table('product')->where('id',$product_id)->update($data);
	return Redirect::to('all-product');
}
public function addedProdetail(Request $request,$pro_id){
	$this->AuthLogin();
	$data['product_id']=$pro_id;
	$data['cpu']=$request->CPU;
	$data['ram']=$request->Ram;
	$data['screen']=$request->Screen;
	$data['SDcard']=$request->SDcard;
	$data['SIM']=$request->Sim;
	$data['camera']=$request->Camera;
	$data['pin']=$request->Pin;
	$data['os']=$request->OS;
	$data['storage']=$request->Storage;
	DB::table('productdetail')->insert($data);
	return Redirect::to('all-product');
}
public function Productdetail($pro_id){
	$this->AuthLogin();
	$data=DB::table('productdetail')->join('product','product.id','=','productdetail.product_id')->where('productdetail.product_id',$pro_id)->get();
	return view('adminpages.productdetail')->with('data',$data);
}
//user
	public function prodetail1($product_id)
	{
		
		$cate=DB::table('category')->orderby('id')->get();
	$brand=DB::table('brand')->orderby('id')->get();
	$product=DB::table('product')->where('product.id',$product_id)->join('brand','brand.id','=','product.brand_id')->join('productdetail','productdetail.product_id','=','product.id')->join('category','category.id','=','product.cate_id')->select('brand.name as brand_name','product.*','category.name as category_name','productdetail.cpu','productdetail.ram','productdetail.screen','productdetail.SDcard','productdetail.SIM','productdetail.camera','productdetail.pin','productdetail.os','productdetail.storage')->get();
	foreach($product as $v){
		$cate_id=$v->cate_id;
	}
	$relate=DB::table('product')->join('brand','brand.id','=','product.brand_id')->join('category','category.id','=','product.cate_id')->where('category.id',$cate_id)->whereNotIn('product.id',[$product_id])->select('brand.name as brand_name','product.*','category.name as category_name')->get();
		return view('Userpages.product.prodetail')->with('cate',$cate)->with('brand',$brand)->with('product',$product)->with('relate',$relate);
	}
}