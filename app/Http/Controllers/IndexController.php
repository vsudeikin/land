<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Edu;
use App\Skill;
use App\Portfolio;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware(['web']);
    }

    public function show()
    {
        $about = About::all(); 
        $edu = Edu::all();
        $skill = Skill::all();
        $portfolio = Portfolio::all();

        return view('index')->with([
            'about' => $about,
            'edu' => $edu,
            'skill' => $skill,
            'portfolio' => $portfolio
        ]);
    }

    public function send(Request $request)
    {
        
    }
}
