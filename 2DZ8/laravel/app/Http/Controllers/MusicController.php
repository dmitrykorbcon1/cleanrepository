<?php

namespace App\Http\Controllers;

/**
 * Class MusicController
 * @package App\Http\Controllers
 */
class MusicController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('music');
    }
}
