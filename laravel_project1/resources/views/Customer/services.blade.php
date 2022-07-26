@extends('Customer.customerlayout')
@section('demo')
<form method="" action="">
  {{@csrf_field()}}
<div style='text-align:center'>   
<input style='width: 600px;height: 50px;text: size 80px;' type="search" name="search" placeholder="search your service">
<input style='width: 60px;height: 50px' type="submit" name="submit" value="Search">
</div>
</form> 
<!--  -->
<h1>AC service</h1>
<table class='table table-bordered' >
    <tr>
        <th>ID</th>
        <th>name</th>
        <th>price</th>
    </tr>  
    <form action="{{route('customer.service.submit')}}"  method="post">
    {{@csrf_field()}}
    @foreach($acservices as $sl) 
      <tr>
       <td><input type='checkbox' name='myservices[]' value='{{$sl->id}}'> {{$sl->id}}</td>
       <td>{{$sl->s_name}}</td> 
       <td>{{$sl->price}}</td> 
      </tr>
    @endforeach
</table>
<h1>Appliance repair</h1>
<table class='table table-bordered'>
    <tr>
        <th>ID</th>
        <th>name</th>
        <th>price</th>
    </tr>  
    @foreach($applianceservices as $ar) 
      <tr>
       <td><input type='checkbox' name='myservices[]' value='{{$ar->id}}'> {{$ar->id}}</td>
       <td>{{$ar->s_name}}</td> 
       <td>{{$ar->price}}</td> 
       <td><input type='submit' class="btn btn-success" name='checkbox_submit' value='Add to cart' data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"></td>
      </tr>
    @endforeach
</table>
<center>
<input type='submit' class="btn btn-success" name='checkbox_submit' value='proceed to order' data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
</center>
</form>
@endsection