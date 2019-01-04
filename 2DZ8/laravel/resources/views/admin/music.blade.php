@extends('template')

@section('content')
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>
    <style>
       td, th { border: 1px solid black; text-align: center }
    </style>
    <div class="container">
        <h3>Редактирование альбомов</h3>
    </div>
    <div class="container">
        <table class="d-md-table-row">
            <tr>
                <th>ID</th>
                <th>Название альбома</th>
                <th>Год выпуска</th>
                <th>Число треков</th>
                <th>Ссылка на url обложки</th>
            </tr>
            @foreach ($albums as $album)
            <tr>
                <form action="/admin/updalbum" method="post">
                    <td width="30">{{$album->id}}</td>
                    <td width="100"> <input type="text" name="title" value="{{$album->title}}"></td>
                    <td width="50"> <input type="text" name="year" value="{{$album->year}}"></td>
                    <td width="50"> <input type="text" name="tracksnum" value="{{$album->tracksnum}}"></td>
                    <td width="100"> <input type="url" name="image" value="{{$album->image}}"></td>
                    <td width="100"> <button type="submit" name="id" value="{{$album->id}}"> Сохранить изменения </button></td>
                    {{ csrf_field() }}
                </form>
                    <td>
                        <form action="/admin/deletealbum" method="post">
                            <button class="btn badge-danger" type="submit" name="id" value="{{$album->id}}">Удалить</button>
                            {{ csrf_field() }}
                        </form>
                    </td>
            </tr>
            @endforeach
            <tr>
                <form action="/admin/insertalbum" method="post">
                    <td width="30"></td>
                    <td width="100"> <input type="text" name="title" required></td>
                    <td width="50"> <input type="text" name="year" required></td>
                    <td width="50"> <input type="text" name="tracksnum" required></td>
                    <td width="100"> <input type="url" name="image" required ></td>
                    <td width="100"> <button type="submit" name="add"> Добавить альбом </button></td>
                    {{ csrf_field() }}
                </form>
            </tr>
        </table>
    </div>
    <div class="container">
        <h3>Редактирование песен</h3>
    </div>
    <div class="container">
        <table class="d-md-table-row">
            <tr>
                <th>ID альбома</th>
                <th>№ трека</th>
                <th>Название</th>
                <th>Длительность</th>
            </tr>
            @foreach ($songs as $song)
                <tr>
                    <form action="/admin/updtrack" method="post">
                        <td width="100"> <input type="text" name="album_id" value="{{$song->album_id}}"></td>
                        <td width="100"> <input type="text" name="track" value="{{$song->track}}"></td>
                        <td width="100"> <input type="text" name="title" value="{{$song->title}}"></td>
                        <td width="100"> <input type="text" name="timing" value="{{$song->timing}}"></td>
                        <td width="100"> <button type="submit" name="id" value="{{$song->id}}"> Сохранить изменения </button></td>
                        {{ csrf_field() }}
                    </form>
                    <td>
                        <form action="/admin/deletetrack" method="post">
                            <button class="btn badge-danger" type="submit" name="id" value="{{$song->id}}">Удалить трек</button>
                            {{ csrf_field() }}
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>
                <form action="/admin/inserttrack" method="post">
                    <td width="100"> <input type="text" name="album_id" required></td>
                    <td width="100"> <input type="text" name="track" required></td>
                    <td width="100"> <input type="text" name="title" required></td>
                    <td width="100"> <input type="text" name="timing" required></td>
                    <td width="100"> <button type="submit" name="add"> Добавить трек </button></td>
                    {{ csrf_field() }}
                </form>
            </tr>
        </table>
    </div>
@endsection
