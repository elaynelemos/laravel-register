<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\User as UserModel;

class User extends Controller
{
    public function save(Request $request) {
        if(UserModel::register($request)){
            return response("ok", 201);
        } else {
            return response("error", 409);
        }
    }
}
