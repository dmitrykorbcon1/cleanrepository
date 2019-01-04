@extends('template')

@section('content')
    <style>
        img    { background-size:100%; align-content: space-around; max-width: 100%; height: auto}
        p       { text-align: center; font-size: 20pt; color: red }
    </style>
    <br>
    <p>{{$header}}</p>
    <br>
    <p><img src="{{asset('/image/body.jpg')}}"></p>
@endsection