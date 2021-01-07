<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ApiController extends Controller
{
    public function create(Request $request){

        $users = new User();

        $users->email = $request->input('email');

        $users->save();
        return response()->json($users);
    }
}
