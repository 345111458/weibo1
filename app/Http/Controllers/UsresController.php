<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsresController extends Controller
{
    //
    public function create()
    {
        return view('users.create');
    }
}
