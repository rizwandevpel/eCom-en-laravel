<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req)
    {
       
        $user=User::where('email', '=', $req->input('email') )->first();

        if ($user || (Hash::check($req->password, $user->password))) {
            return 'Username or password is not match';
         }
         else{
             return redirect('/');
         }








    }
}
