<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site1Controller extends Controller
{

    public function index()
    {
        $name = "Ibrahim Al-Ashqar";
        $desc = 'Full-Stack Developer';
        # Passing Data To Views:
        # 1)
        // return view('website1.index', [
        //     'name' => $name,
        //     'desc' => $desc
        // ]);
        # 2)
        // return view('website1.index')->with('name', $name)->with('desc', $desc);
        # 3)
        return view('website1.index', compact('name', 'desc'));
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
