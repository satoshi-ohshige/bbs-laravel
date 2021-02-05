<?php

namespace App\Http\Controllers;

use Bbs\UseCase\Threads\ThreadsGetUseCaseInterface;
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
        $threadsPostUseCase->handle($request->input('title'), $request->input('body'));
    }

    public function index($id, ThreadsGetUseCaseInterface $threadsGetUseCase)
    {
        $thread = $threadsGetUseCase->handle((int)$id);
        return view('threads.index', ['title' => $thread->getTitle(), 'body' => $thread->getBody()]);
    }
}
