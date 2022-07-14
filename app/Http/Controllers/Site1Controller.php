<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site1Controller extends Controller
{

    public function index()
    {
        return view('website1.index');
    }

    public function about()
    {
        return view('website1.about');
    }

    public function post()
    {
        return view('website1.post');
    }
    
    public function contact()
    {
        return view('website1.contact');
    }
}
