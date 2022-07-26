<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alluser;

class managerController extends Controller
{
    public function registration()
    {
        return view('Manager.registration');
    }
    public function registrationSubmit(Request $r)
    {
        $r->validate(
            [
                'username'=>'required|min:4|max:10|unique:allusers|regex:/^[A-Za-z0-9]+(?:[_-][A-Za-z0-9]+)*$/',
                'email'=>'required',
                'password'=>'required|min:6|max:11',
                'cpassword'=>'required|same:password',
                'mobile'=>'required|min:11|max:11|regex:/^01[3,5,6,7,8,9]{1}[0-9]{8}$/',
                'gender'=>'required',
                'date'=>'required',
                'picture'=>'mimes:png,jpg,jpeg|required|max:10000',
                
            ],
            
    );

    $pic=$r->file('picture')->store('Profile Picture');


    $st =new alluser();
    $st->username=$r->username;
    $st->password=md5($r->password);
    $st->email=$r->email;
    $st->phone=$r->mobile;
    $st->dob=$r->date;
    $st->gender=$r->gender;
    $st->usertype="manager";
    $st->image=$pic;
    $st->save();
    $r->session()->flash('registration','User Registered');
    return redirect()->route('login');

    }

    public function Home()
    {
        return view('Manager.home');
    }
    public function Profile()
    {
        return view('Manager.profile');
    }


}
