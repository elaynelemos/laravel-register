<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Hash;

class User extends Model
{
    protected $connection = 'sqlite';
    protected $table = 'user';

    public static function list(int $limit) {
        $sql = self::select([
            "id",
            "name",
            "email",
            "password",
            "register_date"
        ])
        ->limit($limit);

        return $sql->get();
    }

    public static function register(Request $request) {
        return self::insert([
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "password" => Hash::make($request->input('password')),
            "register_date" => new Carbon()
        ]);
    }
}
