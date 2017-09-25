<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware(['web']);
    }

    public function show()
    {
        
    }

    public function send(Request $request)
    {
        
    }
}
