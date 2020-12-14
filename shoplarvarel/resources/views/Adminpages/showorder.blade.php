@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Order 
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Customer name</th>
            <th>Email</th>
            <th>Phone</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($order as $v)
          <tr>
            <td>{{$v->cus_name}}</td>
            <td>{{$v->cus_email}}</td>
            <td>{{$v->cus_phone}}<span class="text-ellipsis"></span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<br>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Shipping
    </div>
  
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên người nhận</th>
            <th>Địa chỉ</th>
            <th>Phone</th>
            <th>Note</th> 
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>   
          <tr>        
            <td>{{$v->name}}</td>
            <td>{{$v->address}}</td>
            <td><span>{{$v->phone}} </span></td>
            <td>{{$v->Note}}</td>
          </tr>
       @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
  <br>
  <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Order Detail
    </div>
    
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
           
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
         
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
     @foreach($orderdetail as $v)
          <tr>
            <td>{{$v->name}}</td>
            <td>{{$v->Quantity}}</td>
            <td>{{$v->price}}<span> </span></td>
            <td>{{$v->total}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection