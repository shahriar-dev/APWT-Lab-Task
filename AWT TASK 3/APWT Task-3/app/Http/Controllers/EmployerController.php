<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FreelanceEmployer;

class EmployerController extends Controller
{
    //

    function Home()
    {
        return view('Home');
    }

    function Dashboard()
    {
        return view('Dashboard');
    }


    function Registration()
    {
        return view('FreelanceEmployer.Registration');
    }

    function RegistrationSubmit(Request $request)
    {
        $this->validate(
            $request,
            [
                'name'=>'required|min:3|max:30',
                'username'=>'required',
                'email'=>'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'address'=>'required',
                'password'=>'required|min:6',
                'phone'=>'required|min:11',
                'jobtype'=>'required'


            ],
            [
                'username.required'=>'Username required !',
                'name.required'=>'Please Enter Your Name',
                'name.min'=>'Name must be greater than 2 charcters',
               
                'address.required'=>'Address Needed',
                'phone.required'=>'Phone Number Needed!!',
                'phone.min'=>'Phone number not valid',
                'jobtype.required'=>'Enter job category please',
                'email.required'=>'Email required !',
                'email.regex'=>'Email Formate is invalid!',
                'password.required'=>'Password required !',
                'password.min'=>'Minimum 6 character required !'



    
    
            ]
        );
        $var = new FreelanceEmployer();
        $var->Username= $request->username;
        $var->Name= $request->name;
        $var->Email = $request->email;
        $var->Address = $request->address;
        $var->Phone=$request->phone;
        $var->Job_Type = $request->jobtype;
        $var->Password = $request->password;
        $var->save();
    

        return redirect()->route('login');
    
      
    }



}
