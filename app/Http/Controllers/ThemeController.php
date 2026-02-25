<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function web()
    {
        return view('pages.web');
    }

    public function category()
    {
        return view('pages.category');
    }
    public function contacts()
    {
        return view('pages.contacts');
    }

    public function singleBlog()
    {
        return view('pages.single-blog');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function register()
    {
        return view('pages.register');
    }

}
