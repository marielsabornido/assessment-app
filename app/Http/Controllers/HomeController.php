<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application report.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $students = Student::has('courses')
        ->with(['courses', 'program' => function($q) {
            $q->with(['college']);
        }])->get();

        return view('welcome', compact('students'));
    }

    /**
     * Show the application dashboard.
    *st
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $students = Student::with(['program' => function($q) {
            $q->with(['college']);
        }])->get();

        return view('home', compact('students'));
    }
}
