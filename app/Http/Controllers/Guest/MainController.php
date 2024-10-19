<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Movie;

class MainController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('welcome', compact('movies'));
    }
}
