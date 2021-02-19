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

        return redirect('/');
    }

    public function index($id, ThreadsGetUseCaseInterface $threadsGetUseCase)
    {
        $thread = $threadsGetUseCase->handle((int)$id);
        if ($thread === null) {
            abort(404);
        }
        return view('threads.index', ['title' => $thread->getTitle(), 'body' => $thread->getBody()]);
    }
}
