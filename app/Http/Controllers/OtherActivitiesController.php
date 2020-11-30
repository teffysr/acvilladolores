<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherActivitiesController extends Controller
{
    public function index()
    {
        return view('otras_actividades');
    }
}
