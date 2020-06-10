<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class UsersManagement extends Controller
{
    public function showUsers()
    {

        // check if user loged in
        if (!request()->session()->get('user')) {
            return '';
        }
        // cahnge to not found page later
        $users = DB::table('users')
        ->where('type','blogger')
        ->select('id','username','email')
        ->get();
        return view('user.show_users', compact('users'));
    }

    public function deleteUser($id){
        DB::table('users')->where('id',$id)->delete() ; 
        return redirect('show_users');
    }
}
