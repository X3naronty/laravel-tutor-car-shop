<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HelloController extends Controller
{
    public static function welcome($name="default", $surname="unknown")
    {
        return view('hello.welcome', ['name' => $name])->with('surname', $surname);
    }
}
