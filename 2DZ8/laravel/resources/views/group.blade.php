@extends('template')

@section('content')
    <div class="container">
        <br><br><br>
        <div class="row">
           <h3>История группы</h3>
        </div>
        <p class="main"> {{$about}}</p>
        <br>
        <div class="row">
            <h3>Участники группы</h3>
        </div>
        <br>
            <ul class="main">
                @foreach($artists->all() as $artist)
                <li> <b> - {{$artist->artist}} </b> — {{$artist->role}}</li>
                @endforeach
            </ul>
     </div>
@endsection