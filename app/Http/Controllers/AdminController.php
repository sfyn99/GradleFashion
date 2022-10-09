<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function doregister(Request $req) {
        $a =new admin();
        $a->name = $req->name;
        $a->email = $req->email;
        $a->password = $req->password;
        $a->save();
        
        
        return view('admin.register');


    }
}
