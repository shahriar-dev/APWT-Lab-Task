<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Registration;

class Reg_Controller extends Controller
{

    function create()
    {
        return view("Regestration");
    }


    public function createSubmit(Request $request){
    $this->validate(
        $request,
        [
            'name'=>'required|min:5|max:10|regex:/^[A-Za-z]+$/',
            'id'=>'required',
            'dob'=>'required',
            'email' => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password'=>'required'
        ],
        [
            'name.required'=>'Please put your name',
            'name.min'=>'Name must be greater than 2 charcters',
            'email.required'=> 'Enter your email',
            'dob.required' => 'Select your Date of Birth',


        ]
    );

  $var = new Registration();
    $var->name= $request->name;
    $var->id = $request->id;
    $var->email = $request->email;
    $var->phone=$request->phone;
    $var->dob = $request->dob;
    $var->password = $request->password;
    $var->save();


    return "Account created successfully";      
}

    function list()
    {
        $registrations = Registration::all();
        //return $registrations;
       return view('UserList')->with('registrations',$registrations);

    }


    function home()
    {
        return view('Home');
    }


}
