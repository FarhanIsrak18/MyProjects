@extends('Customer.customerlayout')
@section('demo')
<center>
<h1>Fill the information and submit to order</h1><br>


<form action="{{route('customer.order.submit')}}" method='post'>

{{@csrf_field()}}
    
    <div style="background-color: seagreen;width: 400px" >
    <b>Customer name</b><br> <input type='text' name='username' value='{{session()->get("username")}}'readonly> 
     @error('username')
            <span id=colorfm>{{$message}}</span>
            @enderror<br>
    <b>services ID </b><br><input type='text' name='servicesId' value='{{session()->get("id")}}' readonly>
    @error('servicesId')
            <span id=colorfm>{{$message}}</span>
            @enderror
    <br>
    <b>totall price</b> <br><input type='text' name='totalcost' value='{{session()->get("price")}}' readonly>
    @error('totalcost')
            <span id=colorfm>{{$message}}</span>
            @enderror
    <br>
   <b>Area</b><br>
   <input list="browsers" name="branch">
    <datalist id="browsers">
        @foreach($branchs as $b)
        <option name="branch" value="{{$b->name}}">
        @endforeach
  </datalist>
  @error('branch')
            <span id=colorfm>{{$message}}</span>
            @enderror
  <br>
   <!-- dropdown -->
   <b>Address</b><br><textarea name='address' value=""></textarea>
   @error('address')
            <span id=colorfm>{{$message}}</span>
            @enderror
   <br>
   <input type='submit' name='submit' value='order' class='btn btn-warning'>
   </div>


</form>
</center>

@endsection