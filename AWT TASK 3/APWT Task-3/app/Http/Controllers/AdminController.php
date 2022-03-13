<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\FreelanceEmployer;


class AdminController extends Controller
{
    //
    function Registration()
    {
        return view('Admin.Registration');
    }
    
    function RegistrationSubmit(Request $request)
    {
        $this->validate(
            $request,
            [
                'username'=>'required',
                'email'=>'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'password'=>'required|min:6',
                'phone'=>'required|min:11',


            ],
            [
                'username.required'=>'Username required !',
                'phone.required'=>'Phone Number Needed!!',
                'phone.min'=>'Phone number not valid',
                'email.required'=>'Email required !',
                'email.regex'=>'Email Formate is invalid!',
                'password.required'=>'Password required !',
                'password.min'=>'Minimum 6 character required !'
            ]
        );
        $var = new Admin();
        $var->Username= $request->username;
        $var->Email = $request->email;
        $var->Phone=$request->phone;
        $var->Password = $request->password;
        $var->save();
    

        return redirect()->route('login');
    
      
    }

    function Update(Request $request)
    {
        $id = $request->id;
        $Admin = Admin::where('id',$id)->first();
        return view('Admin.AdminUpdateProfile')->with('Admin', $Admin);
    }

    function UpdateSubmit(Request $request){

        $this->validate(
            $request,
            [
                'email'=>'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'password'=>'required|min:6',
                'phone'=>'required|min:11',


            ],
            [
                'phone.required'=>'Phone Number Needed!!',
                'phone.min'=>'Phone number not valid',
                'email.required'=>'Email required !',
                'email.regex'=>'Email Formate is invalid!',
                'password.required'=>'Password required !',
                'password.min'=>'Minimum 6 character required !'
            ]
        );
        $var = Admin::where('id',Session()->get('admin_id'))->first();
        $var->Email = $request->email;
        $var->Phone=$request->phone;
        $var->Password = $request->password;
        $var->save();
    

        return redirect()->route('AdminDash');
    

    }



    public function UserList(){
        $User = FreelanceEmployer::all();
        return view('Admin.UserList')->with('User',$User);
    }


    public function UserEdit(Request $request){
        //
        $id = $request->id;
        $user = FreelanceEmployer::where('id',$id)->first();
        return view('Admin.FreelanceUpdate')->with('Freelance', $user);

    }


    public function UserEditSubmit(Request $request){


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
                'name.required'=>'Please Enter Your Name',
                'name.min'=>'Name must be greater than 2 charcters',
                'username.required'=>'Username is needed',
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
        $var = FreelanceEmployer::where('Username',$request->username)->first();
        $var->Username= $request->username;
        $var->Name= $request->name;
        $var->Email = $request->email;
        $var->Address = $request->address;
        $var->Phone=$request->phone;
        $var->Job_Type = $request->jobtype;
        $var->Password = $request->password;
        $var->save();
    

        return redirect()->route('UserList');
    
//
    }

    public function UserDelete(Request $request){
        $var = FreelanceEmployer::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('UserList');

    }



}
