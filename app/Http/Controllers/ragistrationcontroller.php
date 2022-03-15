<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\ragistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class ragistrationcontroller extends Controller
{
    public function adduser(Request $req){
       
        $ragistration = new ragistration; 
        $ragistration->name = $req->input('name');
        $ragistration->email = $req->input('email');
        $ragistration->password = $req->input('password');
        $ragistration->save();
        //set session
            if(Session()->has('name')){
                        return redirect('home');
                     }else{
                        $req->session()->put('user',$req);
                        return view('home');
                     }
    }
    public function login(Request $req){
        //return "hallo";
       $user = ragistration::where(['email'=>$req->email])->first();
      
       if(!$user || !Hash::check($req->password, $user->password))
       {
                return "username or password is not matched";
       }else{
            $req->session()->put('user',$user);
           return redirect('/');
       }
    }
    
}
