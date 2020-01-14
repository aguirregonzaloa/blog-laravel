<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    public function create(){
    
        return view('registration.create');
    }
    
    public function store(){
    
        //validate the form
        
        $this->validate(request(), [
        
        'name' => 'required',
            
        'email' => 'required|email',
            
        'password' => 'required|confirmed'
        ]);
        
     //   var_dump(bcrypt('password'));
       //create and save the user
      $user = User::create(request(['name','email', 'password']));
        
        //Sign them in
        
        auth()->login($user);
        
        return redirect()->home();
        
       // return back();
        
    
    }
}
