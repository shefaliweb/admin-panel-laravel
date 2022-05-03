<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class Admincontroller extends Controller
{
   public function userlogin(Request $request)
    {   
        
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $usercheck=Admin::where(['username'=>$request->username,
                                 'password'=>$request->password])->count();
        if ($usercheck > 0) {
            return redirect('/dashboard');
        }else{
           return redirect('/')->with('error','Invalid Username or password'); 
        }
        
            
          
    }
   }


    

