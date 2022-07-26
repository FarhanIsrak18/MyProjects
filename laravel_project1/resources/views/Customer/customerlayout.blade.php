<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<form action="{{route('customer.cartsubmit')}}" method="post">
  {{csrf_field()}}

<div style='text-align:right'>
<div style='background-color: pink;text-align: center;height: 70px;'>
 <h1>Customer</h1>

</div> 
<a href='{{route("customer.home")}}' class="btn btn-secondary">Home</a>
<!--This is cart -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">cart</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">My cart</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form actio="" method=""> <!-- table-->
        <table class="table table-success table-striped">
          <tr>
              <th>items ID</th>
              <th>price</th>
          </tr>
          <tr>
              <td>{{session()->get('id')}}</td>
              <td>{{session()->get('price')}}</td>
          </tr>
</table>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">order</button>  
      </div>
      </form><!-- table-->
      </div>
      
    </div>
  </div>
</div><!-- upto this is cart-->
<a href='{{route("customer.profile")}}' class="btn btn-primary">profile</a> <a href="{{route('logout')}}"class="btn btn-Danger">LogOut</a>

</div><br><br>


<!-- dropdown -->

<!--  -->
</form>


 @yield('demo')<br><br><br><br><br><br><br>


<center>@copyright</center>