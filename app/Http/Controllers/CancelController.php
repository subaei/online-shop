<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CancelController extends Controller
{
    public function index()
    {
        return view('cancel');
    }
}
