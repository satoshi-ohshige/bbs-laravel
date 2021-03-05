<?php

namespace App\Http\Controllers;

use Bbs\UseCase\TopUseCaseInterface;
use Bbs\ViewModel\TopViewModel;
use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * TopController constructor.
     */
    public function __construct(private TopUseCaseInterface $topUseCase)
    {
    }

    public function index(Request $request)
    {
        $threads = $this->topUseCase->handle();

        $viewModel = new TopViewModel($threads);
        return view('top', ['viewModel' => $viewModel]);
    }
}
