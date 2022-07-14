<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $r) {
        $validator = Validator::make($r->all(), [
            'name' =>'required|string',
            'surname' =>'required|string',
            'patronymic' =>'string',
            'login' =>'required|string|unique:App\Models\User,login',
            'email' =>'required|string|unique:App\Models\User,email|email:rfc,dns',
            'password' =>'required|string|min:6',
            'passwordRepeat' =>'required|string|same:password',
        ]);

    if($validator->fails()) return response()->json($validator->errors(), 400);

    User::create([
        'name' => $r->name,
        'surname' => $r->surname,
        'patronymic' => $r->patronymic,
        'login' => $r->login,
        'email' => $r->email,
        'password' => Hash::make($r->password),
    ]);

    return response()->json(['success' => 'success'], 200);
}
public function auth(Request $r)
{
    $validator = Validator::make($r->all(), [
        'login' =>'required|string',
        'password' =>'required|string',

    ]);
    
    if ($validator->fails()) return response()->json($validator->errors(), 400);

    if(Auth::attempt(['login' => $r->login, 'password' => $r->password]))
    {
        return response()->json(['success' => 'success'], 200);
    } else 
    {
        return response()->json('errorLogin', 400);
    }
}

    public function logout()
    {
        Auth::logout();

        return redirect()->back();
    }
}
