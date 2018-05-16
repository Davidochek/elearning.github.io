<?php

namespace App\Http\Controllers;
use App\Library;
use App\Rating;
use Charts;
use Illuminate\Http\Request;

class TeacherController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $chart = Charts::database(Rating::all(), 'bar', 'highcharts')
        ->elementLabel("Total")
        ->dimensions(1000, 500)
        ->responsive(false)
        ->groupBy('game');
        return view('teacher.home', compact('chart'));
    }
}
