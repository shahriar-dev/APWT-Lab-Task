<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FreelanceEmployer;
use App\Models\Admin;



class LoginValidation extends Controller
{
    //
    function login()
    {
        return view('FreelanceEmployer.login');
    }


    function loginSubmit(Request $request)
    {
        $this->validate(
            $request,
            [
                'username'=>'required',
                'password'=>'required|min:6',
            ],
            [
                'username.required'=>'Username is required !',
                'password.required'=>'Password required !',
                'password.min'=>'Minimum 6 character required !'
            ]
        );




     $FreelanceEmployer=FreelanceEmployer::where('Username',$request->username)
                            ->where('Password',$request->password)
                            ->first();
    
    
    $Admin=Admin::where('Username',$request->username)
                ->where('Password',$request->password)->first();



        if($FreelanceEmployer)
        {
            $request->session()->put('freelance_id',$FreelanceEmployer->id);
            $request->session()->put('freelance_username',$FreelanceEmployer->Username);
            return redirect()->route('freelancerDash');
        }

        else if($Admin)
        {
            $request->session()->put('admin_id',$Admin->id);
            return redirect()->route('AdminDash');
        }

        else{
            return("Account not found");
        }

    }



    public function logout(){
        session()->forget('freelance_id');
        session()->forget('admin_id');
        return redirect()->route('login');
    }




    public function freelancerDash(){

         $FreelanceEmployer=FreelanceEmployer::where('id',Session()->get('freelance_id'))->first();

         return view('Dashboard')->with('FreelanceEmployer',$FreelanceEmployer);
    }


    public function AdminDash(){

        $Admin=Admin::where('id',Session()->get('admin_id'))->first();

        return view('Dashboard')->with('Admin',$Admin);
   }




}
