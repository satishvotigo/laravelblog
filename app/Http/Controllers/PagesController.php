<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home(){
        $tasks = ["Task 1", "Task 2", "Task 3"];
        return view('home', compact('tasks'));
    }

    public function about(){
        $tasks = ["Task 4", "Task 5", "Task 5"];
        return view('about', compact('tasks'));
    }

    public function contactus(){
        $tasks = ["Task 7", "Task 8", "Task 9"];
        return view('contactus', compact('tasks'));
    }
}
