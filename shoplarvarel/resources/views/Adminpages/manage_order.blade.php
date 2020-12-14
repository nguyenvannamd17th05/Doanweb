@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Category List
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            
            <th>Customer name</th>
            <th>ID</th>
         
            <th>Total</th>
            <th>Status</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        	@foreach($data as $k=>$v)
          <tr>

            <td>{{$v->name}}</td>
            <td>{{$v->id}}</td>
            <td><span class="text-ellipsis">{{$v->total}}</span></td>
            <td><?php if($v->status==0)
            echo" Đang chờ xử lý";
            else 
              echo" Đã xử lý";
            ?></td>
          
            <td>
              <a href="{{asset('edit-order/'.$v->id)}}" class="active" ui-toggle-class="">
              	<i class="fa fa-eye text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc chắn xóa?')" href="{{URL::to('del-order/'.$v->id)}}" class="active" ui-toggle-class="">
              	<i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
         @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection