@extends('layouts.navbarlayout')
@section('main-content')

@foreach($guitars as $guitar)
    <h5> Name: {{$guitar['name']}}<br>
        Brand:  {{$guitar['brand']}}
    </h5>
@endforeach
<p>Here is the Guitar content </p>
@endsection
