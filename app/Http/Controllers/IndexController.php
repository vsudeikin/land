<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Edu;
use App\Skill;
use App\Portfolio;
use Mail;
use App\Mail\SendMassage;

class IndexController extends Controller
{

    public function show()
    {
        $about = About::first(); 
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
       $this->validate($request, [
        'name' => 'required|max:50',
        'email' => 'required|email',
        'text' => 'required|max:1000|min:1',
        ],
        [
        'required' => 'Поле :attribute обязательно для заполнения',
        'email'    => 'Поле :attribute должно содержать e-mail адрес',
        'max'   => 'Поле :attribute должно содержать не более :max символов.'
        ]);
       
       $mail_to = About::find(1);

       Mail::to($mail_to->email)
         ->send(new SendMassage($request));

       return redirect()->route('index')->with('sent','Сообщение отправлено');
    }
 
}