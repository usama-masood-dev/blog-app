<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage()
    {
        return view('pages.index');
    }

    public function aboutPage()
    {
        return view('pages.about');
    }

    public function servicesPage()
    {
        return view('pages.services');
    }

    public function contactPage()
    {
        return view('pages.contact');
    }
}
