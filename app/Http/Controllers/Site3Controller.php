<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site3Controller extends Controller
{
    public function index()
    {
        return view('website3.index');
    }

    public function feature()
    {
        return view('website3.feature');
    }

    public function download()
    {
        return view('website3.download');
    }

    public function contact()
    {
        return view('website3.contact');
    }

    public function contact_data()
    {
        return view('website3.contact-data');
    }

}
