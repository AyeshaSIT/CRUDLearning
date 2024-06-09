<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

</style>
<link rel="stylesheet" href="{{url('css/stylesheet.css')}}">
</head>
<body>
    <div class="navclass">
    <ul>
        <li><a href="{{route('home.index')}}">Home</a></li>
        <li><a href="{{route('guitars.index')}}">Guitars</a></li>
        <li><a href="{{route('home.about')}}">About</a></li>
        <li><a href="{{route('home.contact')}}">Contact</a></li>
    </ul>
</div>
    <div> @yield('main-content')  </div>
    <div> @yield('script')  </div>

</body>
</html>