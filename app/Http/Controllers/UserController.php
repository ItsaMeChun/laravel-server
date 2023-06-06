<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {

    }
    public function test()
    {
        return response()->json(['message' => 'Test message to get the api'], 200);
    }
}
