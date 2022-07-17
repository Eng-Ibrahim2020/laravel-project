<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }

    public function form1_data(Request $request)
    {
        // dd($request->all());
        // dd($request->input('name'));
        // dd($request->name);
        $name = $request->name;
        return "Welcome $name";
    }

    public function form2()
    {
        return view('forms.form2');
    }

    public function form2_data(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'gender'=>'required',
            'age'=>'required',
        ]);

        $name = $request->name;
        $email = $request->email;
        $gender = $request->gender;
        $age = $request->age;

        return view('forms.form2_data', compact('name', 'email', 'gender', 'age'));
    }

    public function form3()
    {
        return view('forms.form3');
    }

    public function form3_data(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);
        dd($request->all());
    }

    public function form4()
    {
        return view('forms.form4');
    }

    public function form4_data(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|max:45',
            'uploadedFile'=>'required|file|mimes:pdf'
        ]);

        $name = rand().time().$request->file('uploadedFile')->getClientOriginalName();
        $request->file('uploadedFile')->move(public_path('uploads'), $name);

        return 'Successfully Uploading File.';
    }
}
