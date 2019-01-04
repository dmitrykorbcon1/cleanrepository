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
        <h3>Редактирование </h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="form">
                <form method="POST" action="/admin/updhist">
                    <div class="form-group">
                        <label for="history">История группы</label>
                        <textarea class="form-control" cols="300" rows="10" name="history" required>{{$about}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Сохранить</button>
                    <button type="reset" class="btn btn-group">Отменить</button>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <h3>Редактирование состава группы</h3>
    </div>
    <div class="container">
          <table class="d-md-table-row">
                <tr>
                    <th></th>
                    <th>Музыкант</th>
                    <th>Роль</th>
                </tr>
                @foreach ($artists as $artist)
                <tr>
                    <form action="/admin/updartist" method="post">
                        <td width="30">{{$artist->id}}</td>
                        <td width="100"> <input type="text" name="artist" value="{{$artist->artist}}"></td>
                        <td width="150"> <textarea class="form-control" wrap="soft" name="role" rows="4">{{$artist->role}}</textarea></td>
                        <td width="100"> <button type="submit" name="id" value="{{$artist->id}}"> Сохранить изменения </button></td>
                        {{ csrf_field() }}
                    </form>
                        <td>
                            <form action="/admin/deleteartist" method="post">
                                <button class="btn badge-danger" type="submit" name="id" value="{{$artist->id}}">Удалить</button>
                                {{ csrf_field() }}
                            </form>
                        </td>
                </tr>
                @endforeach
                <tr>
                    <form action="/admin/insertartist" method="post">
                        <td width="30"></td>
                        <td width="100"> <input type="text" name="artist" required placeholder="Имя музыканта" ></td>
                        <td width="150"> <textarea wrap="soft" name="role" rows="4" required placeholder="Амплуа" ></textarea></td>
                        <td width="100"> <button type="submit" name="add"> Добавить участника </button></td>
                        {{ csrf_field() }}
                    </form>
                </tr>
            </table>
        </div>
    </div>
@endsection