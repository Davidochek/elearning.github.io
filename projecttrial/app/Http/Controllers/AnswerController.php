<?php

namespace App\Http\Controllers;

use App\Library;
use App\Note;
use App\Question;
use App\Rating;
use Charts;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:teacher');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show= Question::where('answer', Null)->count();
         $chart = Charts::database(Rating::all(), 'bar', 'highcharts')
        ->elementLabel("Total")
        ->dimensions(824, 540)
        ->responsive(false)
        ->groupBy('rate')
        ->title("Class Analysis");
        $notes = Note::all();
        $libraries = Library::all();
        $questions = Question::all();
        return view('teacher.home', compact('notes', 'libraries', 'questions', 'chart', 'show'));
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

        $answer=new Question;
        $answer->answer=$request->answer;
        if ($request->hasFile('pdfs')) {
            $filename=$request->pdfs->getClientOriginalName();
            $answer->pdfs=$request->file('pdfs');
            $answer->pdfs=$request->pdfs->storeAs('public/', $filename);
            $answer->pdfs=$filename;
        }
        $this->validate($request, [
            'answer'=>'min:1|required',
        ]);
        $answer->save();
        return redirect('teacher/home')->with('mess', 'Answer sent successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $show= Question::where('answer', Null)->count();
        $question=Question::find($id);
        return view ('teacher.answer', compact('question','show'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $question=Question::find($id);
        $question->question=$request->question;
        $question->answer=$request->answer;
         if ($request->hasFile('pdfs')) {
            $filename=$request->pdfs->getClientOriginalName();
            $question->pdfs=$request->file('pdfs');
            $question->pdfs=$request->pdfs->storeAs('public/', $filename);
            $question->pdfs=$filename;
        }
        $this->validate($request, [
            'question'=>'required',
            'answer'=>'min:20|required',
        ]);
        $question->save();
        return redirect('teacher/home')->with('mess', 'Answer sent successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}