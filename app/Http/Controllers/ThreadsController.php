<?php

namespace App\Http\Controllers;

use Bbs\UseCase\Threads\ThreadsPostUseCaseInterface;
use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function create()
    {
        return view('threads.create');
    }

    public function post(Request $request, ThreadsPostUseCaseInterface $threadsPostUseCase)
    {
        $threadsPostUseCase->handle('sampleTitle', 'sampleBody');
    }
}
