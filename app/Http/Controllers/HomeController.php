<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('pages.home.index');
    }

    public function privacy(): View{
        return view('pages.home.privacy');
    }

    public function contact(): View{
        return view("pages.about.index");
    }
}
