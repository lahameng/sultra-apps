<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HatiController extends Controller
{
    public function tampilHati()
    {
        return view('contents.hati');
    }
}
