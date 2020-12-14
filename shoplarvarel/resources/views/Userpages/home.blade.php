@extends('welcome')
@section('content')
@foreach($cate as $value)
<div class="features_items"><!--features_items-->
<h2 class="title text-center">{{$value->name}}</h2>
@foreach($product as $v)
@if($v->cate_id==$value->id)
<a href="{{URL::to('prodetail/'.$v->id)}}">
<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">
                <img src="{{URL::to('./upload/product/'.$v->image)}}" alt="" />
                <h2> {{number_format($v->price,0,'.',',').' '.'VND'}}</h2>
                <p>{{$v->name}}</p>
                 <a href="{{URL::to('prodetail/'.$v->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-info-circle"></i>View detail</a>  
            </div>
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
            </ul>
        </div>
    </div>
</div>
</a>
@endif
@endforeach
</div>
@endforeach
@endsection