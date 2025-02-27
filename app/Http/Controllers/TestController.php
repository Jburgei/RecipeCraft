<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function showMessage()
    {
        return response()->json(['message' => 'This is from a Controller!']);
    }
}
