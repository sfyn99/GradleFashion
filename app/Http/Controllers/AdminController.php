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
        
        
        return redirect('Dashboard');
      }}
      public function registerfunc() {

        return view('admin.register');
      
      }
      public function loginfunc() {

        return view('admin.login');
      
      } 



      public function auth(Request $req ){
        $email = $req->post('email');
        $password = $req->post('password');

        $result= Admin::where(['email'=>$email,'password'=>$password])->get();
        
        if(isset($result['0']->id)){

          $req->session()->put('Admin_login',true);
          $req->session()->put('Admin_id',$result['0']->id);
          return redirect('Dashboard');
        }

          else{
              $req->session()->flash('error','invalid credentials');
              return redirect('login');
          }
        

        

      }
      public function dashboardfunc(){

        return view('admin.Dashboard');
      }
      public function bashboardfunc(){
        return view('admin.Dashboard');
      }
      public function logout(Request $request) {
        $request->session()->flush();
        return redirect('login');
        
    }
    }   
       
       
       
       
       
       
       
       
       
       
       
       
       
       
      


    

