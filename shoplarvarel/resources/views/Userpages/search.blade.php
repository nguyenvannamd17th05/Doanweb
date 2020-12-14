@extends('welcome')
@section('content')
<div class="features_items"><!--features_items-->
    
        <h2 class="title text-center">{{$result}} </h2>

@foreach($data as $v)
<a href="{{URL::to('prodetail/'.$v->id)}}">
<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">
                <img src="{{URL::to('./upload/product/'.$v->image)}}" alt="" />
                <h2> {{number_format($v->price,0,',','.').' '.'VND'}}</h2>
                <p>{{$v->name}}</p>
                <a href="{{URL::to('add-cart')}}" class="btn btn-default add-to-cart"><i class="fa fa-info-circle"></i>View detail</a>
            </div>
        </div>
       
    </div>
</div>
</a>
@endforeach
</div>
@endsection