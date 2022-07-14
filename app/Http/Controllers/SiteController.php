<?php

namespace App\Http\Controllers;

class SiteController extends Controller {

public function index()
{
    return 'index page';
}

public function about()
{
    return 'about page';
}

public function team()
{
    return 'team page';
}

public function services()
{
    return 'services page';
}

public function contact()
{
    return 'contact page';
}

public function news($id = null)
{
    return 'news #'.$id;
}

public function user()
{

    $user = "Mohammed";
    $id = 15;


    // return url("posts/{$user}/comments/{$id}");
    // return route('posts', compact('user', 'id'));
    return route('posts', [$user, $id]);

}

public function view()
{
    return view('welcome');
}


}



