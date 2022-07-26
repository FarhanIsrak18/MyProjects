<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></head>
 <center><h1><u>{{$customer->username}} profile edit</u></h1></center>

 <div style='text-align:right'>
 <a href="{{route('customer.home')}}" class="btn btn-primary">Home</a>
 <a href="{{route('customer.profile')}}" class="btn btn-success">Back</a>
</div>

 <form action="{{route('customer.edit.submit')}}"  method="post">
 {{@csrf_field()}}

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">password</th>
      <th scope="col"><input type='password' name='password' value=''placeholder='password'>
      @error('password')
            <span id=colorfm>{{$message}}</span>
            @enderror
    </th>
      
    </tr>
    <tr>
      <th scope="col">Confirm password</th>
      <th scope="col"><input type='password' name='cpassword' value='' placeholder='confirm password'>
      @error('cpassword')
            <span id=colorfm>{{$message}}</span>
            @enderror
    </th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">email</th>
      <td><input type='text' name='email' value='{{$customer->email}}'></td>
      @error('email')
            <span id=colorfm>{{$message}}</span>
            @enderror<br>
    </tr>
    <tr>
      <th scope="row">phone No</th>
      <td><input type='text' name='phone' value='{{$customer->phone}}'></td>
      @error('phone')
            <span id=colorfm>{{$message}}</span>
            @enderror<br>
    </tr>
    <tr>
      <th scope="row">date of birth</th>
      <td><input type='date' name='dob' value='{{$customer->dob}}'></td>
      @error('dob')
            <span id=colorfm>{{$message}}</span>
            @enderror<br>
    </tr>
    <tr>
      <th scope="row">gender</th>
      <td><input type='text' name='gender' value='{{$customer->gender}}'></td>
      @error('gender')
            <span id=colorfm>{{$message}}</span>
            @enderror<br>
    </tr>
    <tr>
      <th scope="row">address</th>
      <td><textarea name='address' value='{{$customer->address}}'>{{$customer->address}}</textarea>
      @error('address')
            <span id=colorfm>{{$message}}</span>
            @enderror<br>
          </td><br>
      
    </tr>
  </tbody>

</table>
<input type='submit' name='submit' value='edit' class='btn btn-warning'>
</form>