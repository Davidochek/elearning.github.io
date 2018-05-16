<?php

namespace App\Http\Controllers;

use App\Library;
use App\Note;
use Illuminate\Http\Request;

class LibrariesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $notes = Note::all();
        return view('home', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $library= new Library;
       $library->description=$request->description;
          if ($request->hasFile('assignment')) {
            $filename=$request->assignment->getClientOriginalName();
            $library->assignment=$request->file('assignment');
            $library->assignment=$request->assignment->storeAs('public/', $filename);
            $library->assignment=$filename;
        }
        $this->validate($request, [
            'description'=>'min:1|max:10',
            'assignment'=>'required',
        ]);
        $library->save();
        return redirect('home')->with('mess','assignment submitted');
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
    public function edit($id)
    {
        //
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
        //
    }
}
