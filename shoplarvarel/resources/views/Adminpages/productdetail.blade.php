 @extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">

    <div class="panel-heading">
      Product Detail
    </div>
    
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
      
          <tr>
            
            <th>Product</th>
   
            <th>CPU</th>
            <th>RAM</th>
            <th>Screen</th>
            <th>SD Card</th>
            <th>Sim</th>
            <th>Camera</th>
            <th>Pin</th>
            <th>OS</th>
            <th>Storage</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
               @foreach($data as $v)

          <tr>
            
            <td>{{$v->name}}</td>
           
            <td>{{$v->cpu}}</td>
            <td>{{$v->ram}}</td>
            <td>{{$v->screen}}</td>
            <td>{{$v->SDcard}}</td>
            <td>{{$v->SIM}}</td>
            <td>{{$v->camera}}</td>  
            <td>{{$v->pin}}</td> 
            <td>{{$v->os}}</td> 
            <td>{{$v->storage}}</td> 
          </tr>
         @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection