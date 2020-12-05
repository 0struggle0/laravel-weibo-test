<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\View\Factory as View;
// use Illuminate\Support\Facades\View;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('static_pages/home');
    }

    public function help()
    {
        return view('static_pages/help');
    }

    public function about()
    {
        return view('static_pages/about');
    }
}