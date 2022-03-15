<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\ragistration;
use Illuminate\Http\Request;

class profilecontroller extends Controller
{
    //
    function profile(){
        
        $data=ragistration::all();
        return view('profile',['profile'=>$data]);
    }
}
