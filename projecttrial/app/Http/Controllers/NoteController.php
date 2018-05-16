<?php

namespace App\Http\Controllers;

use App\Note;
use App\Library;
use Illuminate\Http\Request;

class NoteController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $notes = Note::all();
        $libraries = Library::all();
        return view('teacher.home', compact('notes', 'libraries'));
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
        $note= new Note;
       $note->notesdescription=$request->notesdescription;
          if ($request->hasFile('notes')) {
            $filename=$request->notes->getClientOriginalName();
            $note->notes=$request->file('notes');
            $note->notes=$request->notes->storeAs('public/', $filename);
            $note->notes=$filename;
        }
         $this->validate($request, [
            'notesdescription'=>'min:1|max:10',
            'notes'=>'required',
        ]);
        $note->save();
        return redirect('teacher/home')->with('mess', 'sent successfully!');
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
