<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::all()->toArray();

        $edit = [
                 'portfolio' => 'active',
                 'rows' => $portfolio,
                 'path' => 'portfolio'
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
            'portfolio' => 'active',
            'path' => 'portfolio'
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
            'img' =>  'required_without:img_old|unique:portfolios,img,$request->id'
        ],
           [ 'required' => 'Поле :attribute обязательно для заполнения',
            'max'   => 'Поле :attribute должно содержать не более :max символов.',
            'unique' => 'Файл с таким именем уже существует.',
            'required_without' => 'Выберете изображение'
          
            ]);

            if ($request->hasFile('img')) {
                $file = $request->file('img');         
                $file->move(public_path().'/img/portfolio/', $file->getClientOriginalName());
                $data = $request->except(['_token', 'img_old']);
                $data['img'] = $file->getClientOriginalName();
                $portfolio = Portfolio::updateOrCreate([ 'id' => $data['id']], $data);
            } else {
                $data = $request->except(['_token', 'img_old', 'img']);
                $portfolio = Portfolio::updateOrCreate([ 'id' => $data['id']], $data);
            }

         return redirect()->route('portfolio.index');
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
    public function edit(Portfolio $portfolio, Request $request)
    {
        $data = $portfolio->toArray();
        $data['portfolio'] = 'active';
        $data['path'] = 'portfolio';
        
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
        Portfolio::destroy($id);
        return redirect()->back();
    }
}
