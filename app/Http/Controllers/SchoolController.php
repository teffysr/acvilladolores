<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index()
    {
        $courses = Courses::all();
        return view('escuela', ['courses' => $courses]);
    }
}
