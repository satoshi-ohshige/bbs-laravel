<?php

namespace App\Http\Controllers;

class ThreadsController extends Controller
{
    public function create()
    {
        return view('threads.create');
    }
}
