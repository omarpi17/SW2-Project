<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\User;

use PharIo\Manifest\Author;
use App\Http\Responses\LoginResponse;
use App\Http\Responses\ProfileResponse;

class AuthController extends Controller
{

    public function LoginView()
    {
        return view('user.login');
    }

    public function RegisterView()
    {
        return view('user.register');
    }
    
    public static function hashString($string)
    {
        return hash('md5', $string);
    }
    
    public function Register(){
        
        request()->merge(['type' => "blogger"]);
        if(request()->password != request()->confirmPassword)
        {
            return view('user.register', ['error' => 'Passwords don\'t match']);
        }
        // if(User::select('username','password')->where('username',$request))
        $user =  User::create(request()->all());
        $user->password = self::hashString($user->password);
        $user->save();
        return redirect('/login');
    }


    public function Login(Request $request)
    {
        return new LoginResponse();
    }
    
    public function Profile(Request $request)
    {   
        return new ProfileResponse();
    }
    
    public function Logout()
    {
        session()->forget('user');
        session()->flush();
        return redirect('/');
    }
}
