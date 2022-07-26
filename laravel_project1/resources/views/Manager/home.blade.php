<html>
 <body>
     <head>
        <title>
            Manager | Home
        </title>
        <link rel="stylesheet" href="{{asset('manager.css')}}">
       
</head>
 <h2>Welcome  <a id="myfavourite" href="{{route('manager.profile')}}">{{Session()->get('username')}} </a> </h2>

  <div class="sticky">
<div class="topnav">
  <li><a href="#"> <a href="{{route('manager.home')}}"><h2>Home</h2> </a>
  <b href="#"> <a href="{{route('logout')}}"><h2>LogOut</h2></a>
 </div> </div>
<br> 



</head></html>
</html>