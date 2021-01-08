<?php

namespace App\Http\Controllers;

use Bbs\UseCase\TopUseCaseInterface;
use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * TopController constructor.
     */
    public function __construct(private TopUseCaseInterface $topUseCase)
    {
    }

    public function __invoke(Request $request)
    {
        $message = $this->topUseCase->handle();
        return view('top', ['message' => $message]);
    }
}
