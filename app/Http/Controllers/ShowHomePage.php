<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ShowHomePage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showHomePage($id){

       
        return view('home',['firstName'=>$firstName,'lastName'=>$lastName]);

    }

     public function addNewUser(Request $req){

        
        $user = new User;  
        $user->first_name=$req->first_name;
        $user->last_name=$req->last_name;
        $id=$user->save();
        
        return view('welcome');
    } 

    public function getUsers(){
        $users = new User;  
        $users=$users->all();
        
        return view('all_users',['users'=>$users]);

    }


}
