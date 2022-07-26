<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alluser;

class customerApiController extends Controller
{
    //
    public function getAll()
    {
        $alluser = alluser::all();
        // foreach ($courses as $course) {
        //     $course->department = $course->department;
        // }
        return response($alluser, 200);
    }

    public function getCustomerbyId($id)
    {
        $alluser = alluser::where('id', $id)->first();
        
        return response($alluser, 200);
    }
}
