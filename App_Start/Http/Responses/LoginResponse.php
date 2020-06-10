<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\AuthController;

class LoginResponse implements Responsable
{
    public function toResponse($request)
    {

        self::validateUserRequest($request);

        $requestData = self::getRequestData($request);

        $user = self::getUserFromDB($requestData);

        if(self::checkIfUserExists($user) == true)
            return view('user.login', ['error' => 'Incorrect email or password']);

        $request->session()->put('user', $user);
        return redirect('/profile');
    }
    
    private static function validateUserRequest(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);
    }
    private static function getRequestData(Request $request)
    {
        $requestData = $request->all();
        $requestData['email'] = $request->email;
        $requestData['password'] = AuthController::hashString($request->password);
        return $requestData;
    }

    private static function getUserFromDB($requestData)
    {
        return  User::where($requestData)->get()->first();
    }

    private static function checkIfUserExists($user)
    {
        if($user == null)
            return true;        
    }
}