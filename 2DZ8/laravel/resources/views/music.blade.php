@extends('template')

@section('content')
    <div class="container">
        <br><br><br>
        <div class="row">
            @foreach (\App\Album::all() as $data)
            <div class="col-md-6">
                Год выхода: {{$data->year}} <br>
                <img class="w-25 img center" src="{{$data->image}}"><br>
                Название альбома: {{$data->title}}<br>
                Кол-во треков:{{$data->tracksnum}}<br>
                    <b>Треки:</b><br>
                @foreach ($data->songs()->get() as $song)
                        {{$song->track}}:{{$song->title }}-{{$song->timing}}<br>
                @endforeach
                <hr>
                <br>
            </div>
            @endforeach
        </div>
    </div>
@endsection