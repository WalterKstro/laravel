<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $projects = ["Project 1","Project 2","Project 3","Project 4","Project 5"];
        //
        return view('about',compact('projects'));
    }
}
