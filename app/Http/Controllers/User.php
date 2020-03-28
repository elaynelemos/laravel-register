<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\User as UserModel;

use Hash;

class User extends Controller
{
    public function register() {
        return view('user.register');
    }

    public function save(Request $request) {
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "password" => "min:8"
        ]);

        if(UserModel::register($request)){
            return view('user.success', [
                "person" => $request->input('name')
            ]);
        } else {
            echo "Woops! Register failed.";
        }
    }
}
