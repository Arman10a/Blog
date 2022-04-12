<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show($id , Request $request)
    {

        // $af =   DB::table('users')
        // ->where('id', 1)
        // ->update(['role' => 'manager']);
        // echo $af;

        // DB::table('users')
        // ->updateOrInsert(
        // ['email' => 'john1@example.com', 'name' => 'John12'],
        // ['password' => '67889']
        // );
        // DB::table('users')
        // ->whereNull('role', 'user')->delete();

        $users = DB::table('users')->where('name', 'John')->get();
        foreach ($users as $user) {
            echo $user->name;
        }
       
    }

}

