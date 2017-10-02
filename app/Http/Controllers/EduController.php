<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Edu;
use Validator;

class EduController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edu = Edu::all()->toArray();

        $edit = [
                'edu' => 'active',
                'rows' => $edu,
                'path' => 'edu'
        ];
        return view('edit')->with($edit);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create')->with([
            'edu' => 'active',
            'path' => 'edu'
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->validate($request, [
            'name' => 'required|max:50',
            'desc' => 'required',
            'img' =>  'required_without:img_old|unique:edus,img,$request->id'
            ],
           [ 'required' => 'Поле :attribute обязательно для заполнения',
            'max'   => 'Поле :attribute должно содержать не более :max символов.',
            'unique' => 'Файл с таким именем уже существует.',
            'required_without' => 'Выберете изображение'
          
            ]);

            if ($request->hasFile('img')) {
                $file = $request->file('img');         
                $file->move(public_path().'/img/edu/', $file->getClientOriginalName());
                $data = $request->except(['_token', 'img_old']);
                $data['img'] = $file->getClientOriginalName();
                $portfolio = Edu::updateOrCreate([ 'id' => $data['id']], $data);
            } else {
                $data = $request->except(['_token', 'img_old', 'img']);
                $portfolio = Edu::updateOrCreate([ 'id' => $data['id']], $data);
            }

       
       
       return redirect()->route('edu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Edu $edu, Request $request)
    {
        // $data['data'] = Edu::where('id',$id)->get()->toArray(); 
        $data = $edu->toArray();
        $data['edu'] = 'active';
        $data['path'] = 'edu';
        
        return view('create')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Edu::destroy($id);
        return redirect()->back();
    }
}
