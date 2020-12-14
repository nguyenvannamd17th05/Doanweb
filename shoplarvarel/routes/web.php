<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;		
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index']);
Route::get('index',[HomeController::class,'index']);
Route::get('login',[HomeController::class,'logincheck']);
Route::post('logined',[HomeController::class,'logined']);
Route::post('add-user',[HomeController::class,'adduser']);
Route::get('logout-user',[HomeController::class,'logout']);
//User Category
Route::get('category/{cate_id}',[CategoryController::class,'showcategory']);
Route::get('brand/{brand_id}',[BrandController::class,'showbrand']);
//ADmin
Route::get('admin',[AdminController::class,'index']);
Route::get('admin-index',[AdminController::class,'showindex']);
Route::post('admin-dashboard',[AdminController::class,'dashboard']);
Route::get('logout',[AdminController::class,'logout']);
//Category
Route::get('add-category',[CategoryController::class, 'addCategory']);
Route::get('all-category',[CategoryController::class, 'allCategory']);
Route::get('edit-category/{cate_id}',[CategoryController::class, 'editCategory']);
Route::get('del-category/{cate_id}',[CategoryController::class, 'delCategory']);


Route::post('added-category',[CategoryController::class, 'addedCategory']);
Route::post('edited-category/{cate_id}',[CategoryController::class, 'editedCategory']);


//Brand
Route::get('add-brand',[BrandController::class, 'addBrand']);
Route::get('all-brand',[BrandController::class, 'allBrand']);
Route::get('edit-brand/{brand_id}',[BrandController::class, 'editBrand']);
Route::get('del-brand/{brand_id}',[BrandController::class, 'delBrand']);
 	

Route::post('added-brand',[BrandController::class, 'addedBrand']);
Route::post('edited-brand/{brand_id}',[BrandController::class, 'editedBrand']);
//Product
Route::get('add-product',[ProductController::class, 'addProduct']);
Route::get('all-product',[ProductController::class, 'allProduct']);
Route::get('all-prodetail/{pro_id}',[ProductController::class,'Productdetail']);
Route::get('edit-product/{product_id}',[ProductController::class, 'editProduct']);
Route::get('del-product/{product_id}',[ProductController::class, 'delProduct']);
Route::get('add-prodetail/{pro_slug}',[ProductController::class,'addProdetail']);
 	
Route::post('added-prodetail/{pro_id}',[ProductController::class,'addedProdetail']	);
Route::post('added-product',[ProductController::class, 'addedProduct']);
Route::post('edited-product/{product_id}',[ProductController::class, 'editedProduct']);
//userproduct
Route::get('prodetail/{product_id}',[ProductController::class, 'prodetail1']);


//cart
Route::post('add-cart',[CartController::class,'addcart']);
Route::get('showcart',[CartController::class,'showcart']);
Route::get('delete-procart/{rowid}',[CartController::class,'delete']);
Route::post('update-cart/{rowid}',[CartController::class,'updatecart']);

//search
Route::get('search',[AdminController::class,'search']);

//checkout
Route::get('checkout',[CheckoutController::class,'checkout']);
Route::post('add-checkout',[CheckoutController::class,'addcheckout']);
Route::get('payment',[CheckoutController::class,'payment']);
Route::post('order',[CheckoutController::class,'addpayment']);
Route::get('m-order',[CheckoutController::class,'morder']);
Route::get('edit-order/{id}',[CheckoutController::class,'showorder']);
Route::get('del-order/{id}',[CheckoutController::class,'delorder']);
