<?php

namespace App\Http\Controllers;

use App\Album;
use App\Artist;
use App\Song;
use File;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function index()
    {
        $header = File::get('text/header.txt');
        return view('admin/index',['header'=>$header]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function group()
    {
        $about = File::get('text/about.txt');
        $artists = Artist::all();
        return view('admin/group',['about'=>$about,'artists'=>$artists]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function updhist(Request $request)
    {
        $history = $request->history;
        File::put('text/about.txt', $history);
        return $this->group();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function updartist(Request $request)
    {
        $this->validate($request, [
            'artist' => 'required|max:255',//обязательное заполнение защито в форме
            'role' => 'required|max:255',//обязательное заполнение защито в форме
        ], [
            'artist.required' => 'Задайте имя артиста!!',
            'role.max' => 'Слишком много текста (не более 255 символов)!'
           ]);
        $artist = Artist::find($request->id);
        $artist->artist = $request->artist;
        $artist->role = $request->role;
        $artist->save();
        return $this->group();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function deleteartist(Request $request)
    {
        $artist = Artist::find($request->id);
        $artist->delete();
        return $this->group();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function insertartist(Request $request)
    {
        $this->validate($request, [
            'artist' => 'required|max:255',
            'role' => 'required|max:255',
        ], [
            'artist.required' => 'Задайте имя артиста!!',
            'role.max' => 'Слишком много текста (не более 255 символов)!'
        ]);
        $data = $request->all();
        $artist = new Artist;
        $artist->fill($data);
        $artist->save();
        return $this->group();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function music()
    {
        $albums = Album::all();
        $songs = Song::all();
        return view('admin/music',['albums'=>$albums, 'songs'=>$songs]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function updalbum(Request $request)
    {
        $this->validate($request, [
            'year' => 'required|date_format:"Y"',//обязательное заполнение защито в форме
            'title' => 'required|max:255',//обязательное заполнение защито в форме
            'image' => 'max:2000|url',
            'tracksnum' => 'required|max:250',
        ], [
            'year.date_format' => 'Укажите год выпуска альбома в формате 4 цифр.',
            'title.max' => 'Слишком длинное название альбома!',
            'image.url' => 'Некорректный URL!',
            'tracksnum.max' => 'Слишком много треков для одного альбома!'
        ]);
        $album = Album::find($request->id);
        $album->title = $request->title;
        $album->year = $request->year;
        $album->tracksnum = $request->tracksnum;
        $album->image = $request->image;
        $album->save();
        return $this->music();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function deletealbum(Request $request)
    {
        $album = Album::find($request->id);
        $album->delete();
        return $this->music();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function insertalbum(Request $request)
    {
        $this->validate($request, [
            'year' => 'required|date_format:"Y"',//обязательное заполнение защито в форме
            'title' => 'required|max:255',//обязательное заполнение защито в форме
            'image' => 'max:2000|url',
            'tracksnum' => 'max:250',
        ], [
            'year.date_format' => 'Укажите год выпуска альбома в формате 4 цифр.',
            'title.max' => 'Слишком длинное название альбома!',
            'image.url' => 'Некорректный URL!',
            'tracksnum.max' => 'Слишком много треков для одного альбома!'
        ]);
        $data = $request->all();
        $album = new Album();
        $album->fill($data);
        $album->save();
        return $this->music();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function updtrack(Request $request)
    {
        $this->validate($request, [
            'album_id' => 'required',//обязательное заполнение защито в форме
            'title' => 'required|max:255',//обязательное заполнение защито в форме
            'timing' => 'required|date_format:"i.s"',
            'track' => 'required|max:250',
        ], [
            'title.max' => 'Слишком длинное название трека!',
            'timing.date_format' => 'Введите время в формате "Мин.Сек"',
            'track.max' => 'Слишком много треков для одного альбома!'
        ]);
        $song = Song::find($request->id);
        $song->title = $request->title;
        $song->album_id = $request->album_id;
        $song->track = $request->track;
        $song->timing = $request->timing;
        $song->save();
        return $this->music();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function deletetrack(Request $request)
    {
        $song = Song::find($request->id);
        $song->delete();
        return $this->music();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function inserttrack(Request $request)
    {
        $this->validate($request, [
            'album_id' => 'required',//обязательное заполнение защито в форме
            'title' => 'required|max:255',//обязательное заполнение защито в форме
            'timing' => 'required',
            'track' => 'required|max:250',
        ], [
            'title.max' => 'Слишком длинное название трека!',
            'track.max' => 'Слишком много треков для одного альбома!'
        ]);
        $data = $request->all();
        if (Album::find($request->album_id)) { //защита от некорректно введённого album_id
            $song = new Song();
            $song->fill($data);
            $song->save();
            return $this->music();
        } else {
            return $this->music();
        }
    }
}
