<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
  li {
    float: left;
  }
  
  li a {
    display: block;
    text-align: center;
    padding: 14px 16px;
    
  }
  
  li a:hover:not(.active){ 
    background-color: #da2626;
  }
  /*  */

</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
{{-- <link rel="stylesheet" href="{{url('css/stylesheet.css')}}"> --}}
</head>
<body>
    <div>
    <ul>
        <li><a href="{{route('home.index')}}" style="text-decoration: none; color: white;">Home</a></li>
         <li><a href="{{route('customer.view')}}" style="text-decoration: none; color: white;">Customer Data</a></li>
        <li><a href="{{route('home.about')}}" style="text-decoration: none; color: white;">About</a></li>
        <li><a href="{{route('home.contact')}}" style="text-decoration: none; color: white;">Contact</a></li>
    </ul>
</div>
    <div> <br>@yield('main-customer-content')  </div>

</body>
</html>