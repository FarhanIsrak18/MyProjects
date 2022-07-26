
<div class="container-fluid">
<h1>Welcome {{$customer->username}}</h1>
</div>
<body>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<form action="{{route('customer.delete.submit')}}" method="post">
  {{@csrf_field()}}
  <a href="edit" class="btn btn-success">edit</a>
<!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Delete account
</button>
<a href="{{route('customer.home')}}" class="btn btn-success">Back</a>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure to delete account?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Delete</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- shows the information -->
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">username</th>
      <th scope="col">{{$customer->username}}</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">email</th>
      <td>{{$customer->email}}</td>
      
    </tr>
    <tr>
      <th scope="row">phone No</th>
      <td>{{$customer->phone}}</td>
      
    </tr>
    <tr>
      <th scope="row">date of birth</th>
      <td>{{$customer->dob}}</td>
      
    </tr>
    <tr>
      <th scope="row">gender</th>
      <td>{{$customer->gender}}</td>
      
    </tr>
    <tr>
      <th scope="row">address</th>
      <td>{{$customer->address}}</td>
      
    </tr>
    <tr>
      <th scope="row">picture</th>
      <td>{{$customer->image}}</td>
    </tr>
    
  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>