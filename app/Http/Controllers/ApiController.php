<?php

namespace App\Http\Controllers;

use App\Almahir_content;
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

    public function readContent()
    {
        $content = Almahir_content::all();
        return response()->json($content);
    }
}
