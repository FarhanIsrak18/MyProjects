<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alluser;
use App\Models\customer;
use App\Models\service;
use App\Models\allservice;
use App\Models\branch;
use App\Models\order;


class customerController extends Controller
{
    //
    public function registration(){
        return view('Customer.registration');
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
    $st->usertype="customer";
    $st->active_status="active";
    $st->image=$pic;
    $st->save();

    $cr =new customer();
    $cr->username=$r->username;
    $cr->password=md5($r->password);
    $cr->email=$r->email;
    $cr->phone=$r->mobile;
    $cr->dob=$r->date;
    $cr->gender=$r->gender;
    // $cr->usertype="customer";
    // $cr->active_status="active";
    $cr->image=$pic;
    $cr->save();
    $r->session()->flash('registration','User Registered');
    return redirect()->route('login');

    }

    public function home(){
        
        return view('Customer.home');
    }
    public function profile(){
        $name=Session()->get('username');
        $customer=customer::where('username',$name)->first();
        return view('Customer.profile')->with('customer',$customer);
        
    }
    public function edit(){
        $name=Session()->get('username');
        $customer=customer::where('username',$name)->first();
        return view('Customer.edit')->with('customer',$customer);
    }

    //edit method
    public function editsubmit(Request $req){

        
        $req->validate(
            [
                               
                'password'=>'required|min:6|max:11',
                'cpassword'=>'required|same:password',
                'email'=>'required',
                'phone'=>'required|regex:/^01[0-9]{9}$/',
                'gender'=>'required',
                'dob'=>'required',
                'address'=>'required',
                
            ],
           
    );
    
    $name=$req->Session()->get('username');
    $c= customer::where('username',$name)
    ->first();
    $c->password=md5($req->password);
    $c->email=$req->email;
    $c->phone=$req->phone;
    $c->dob=$req->dob;
    $c->gender=$req->gender;
    $c->address=$req->address;
    $c->save();

    $a= alluser::where('username',$name)->first();
    
    $a->password=md5($req->password);
    $a->email=$req->email;
    $a->phone=$req->phone;
    $a->dob=$req->dob;
    $a->gender=$req->gender;
    $a->save();

    return back();
    }
//
public function deletesubmit(Request $r){
    $name=Session()->get('username');
    $products = customer::where('username','=',$name)->delete();
    $products = alluser::where('username','=',$name)->delete();
    // $r->session()->flash('registration','customer account deleted');
    
    return view('login');

}

public function cart(Request $r){
    $r->session()->put('service','ac repair');
    $r->session()->put('price','5000');
    return view('Customer.home');
}

public function services(){
    $service = service::all();
    $acservices = allservice::where('services_id',1)->get();
    $applianceservices = allservice::where('services_id',2)->get();
    $PCservices = allservice::where('services_id',3)->get();//pest control service
    $hahaservices = allservice::where('services_id',4)->get();
    $heheservices = allservice::where('services_id',5)->get();
    return view('Customer.services')
    ->with('service',$service)
    ->with('acservices',$acservices)
    ->with('applianceservices',$applianceservices);
}


public function servicesubmit(Request $req){
    $total=0;
    $amar="";
    session()->put('id',$amar);
    foreach($req->myservices as $ms){
        $totalcost = allservice::where('id',$ms)->first();
        $total=$total+($totalcost->price);

    $tomar=session()->get("id").$ms.",";
    $req->session()->put('id',$tomar);
    //$ss = session()->get("id")+",";
    // $req->session()->put('name',$ms);
    }
    $req->session()->put('price',$total);
   
    
    return redirect()->route('customer.orderpage');
}

public function cartsubmit(){
    return redirect()->route('customer.orderpage');

}
public function orderpage(){
    
    $branchs = branch::all();
   return view('Customer.orderpage')
   ->with('branchs',$branchs);
}

public function ordersubmit(Request $req){
    
    $req->validate(
        [
            
            'username'=>'required',
            'servicesId'=>'required',
            'totalcost'=>'required',
            'branch'=>'required',
            'address'=>'required',
            
        ],
       
);
      $br = new order();
      $br->customer_name = $req->username;;
      $br->list = $req->servicesId;
      $br->amount = $req->totalcost;
      $br->branch = $req->branch;
      $br->address = $req->address;
      $br->save();
       
    return redirect()->route('customer.services');
}

public function search(Request $req){
    $search = $req->search;
    $searchService = allservice::where('name','LIKE','%'.$req->search.'%')->get();
    return view('Customer.services')->with('searchService',$searchService);
}
    
public function servicehistory(){
    $name = session()->get('username');
    $servicehistory = order::where('customer_name',$name)->get();
    return view('Customer.servicehistory')->with('servicehistory',$servicehistory);
}
}
