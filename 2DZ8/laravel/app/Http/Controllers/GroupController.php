<?php

namespace App\Http\Controllers;
use App\Artist;
use File;

/**
 * Class GroupController
 * @package App\Http\Controllers
 */
class GroupController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function index()
    {
        $about = File::get('text/about.txt');

        $artists = Artist::all();

        return view('group',['about'=>$about,'artists'=>$artists]);
    }
}
