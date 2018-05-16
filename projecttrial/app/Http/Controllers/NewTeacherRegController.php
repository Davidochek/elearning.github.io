<?php

namespace App\Http\Controllers;
use App\Teacher;

use Illuminate\Http\Request;

class NewTeacherRegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('teacher.register');
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
        $teacher=new Teacher;
        $teacher->name=$request->name;
        $teacher->lastname=$request->lastname;
        $teacher->school=$request->school;
        $teacher->email=$request->email;
        $teacher->password=$request->password;
        $this->validate($request,   [
            'firstname'=>'min:2',
            'lastname'=>'min:2',
            'school'=>'min:2',
            'email'=>'unique:teachers|email|min:6',
            'password'=>'confirmed|min:6|max:12',
        ]);
        $teacher->save();
        return redirect('teacher')->with('mess', 'You have successfully been registered proceed to Login in ');


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
