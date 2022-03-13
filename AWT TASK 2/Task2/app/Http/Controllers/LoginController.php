<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Registration;

class LoginController extends Controller
{
    //


    function Login()
    {
        return view("Login");
    }


    public function Contact()
    {
        return view("Contact");
    }
    
    public function LoginCheck(Request $request){
        $this->validate(
            $request,
            [
                
                'email' => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'Password'=>'required'
            ],
            [
                'email.required'=> 'Enter your email',
                
            ]
        );

        $registrations = Registration::all();
        $Check=False;
        foreach($registrations as $user)
        {
            if($user->Email== $request->email && $user->Password==$request->Password)
                {
                    return ("Login Success");
                    $Check=True;
                }


        }
       


    if($Check==False)
{
    return ("Login Fail");
}


    }
    



}
