<?php

namespace App\Http\Controllers;
use App\Http\Requests\createUserRequest;
use App\Models\user;
use Illuminate\Http\Request;


class UserController extends Controller
{
    
    public function register()
    {
        return view('register');
    }
    public function index()
    {
        $users = user::all();
        return view('liste',[
            'users' => $users,
         ]);
    }

    public function handleRegistration(User $user,  createUserRequest $request)
    {
         
           $user -> nom = $request -> nom; 
           $user -> prenom = $request -> prenom; 
           $user -> email = $request -> email; 
           $user -> sous_couver = $request -> sous_couver;

           $user -> save();

           return redirect()->route('yaro')->with('success' , 'enregitrer avec succes ') ;
        
    }

    // public function show($id)
    // {
    //    dd($id);
    // }
    public function delete(User $user)
    {
        $user -> delete();
        
        return redirect()->route('liste')->with('success' , 'enregitrer avec succes ') ;
    }
}
