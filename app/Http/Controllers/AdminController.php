<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function doregister(Request $req) {
       
      $valid= Validator::make($req->all(),[

       'name' => 'required',
       'email'=> 'required|email|unique:admins,email',
       'password'=>'required|min:8',
       'confirm_password'=> 'same:password'
      ]);
      
      if($valid->fails())
      {
        return back()->withInput()->withErrors($valid);
      }

      else{
        $a =new admin();
        $a->name = $req->name;
        $a->email = $req->email;
        $a->password = $req->password;
        $a->confirm_password = $req->confirm_password;
        $a->save();
        
        
        return redirect('register');
      }
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
      


    }
}
