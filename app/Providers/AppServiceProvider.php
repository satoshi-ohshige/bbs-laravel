<?php

namespace App\Providers;

use Bbs\UseCase\Threads\ThreadsGetUseCase;
use Bbs\UseCase\Threads\ThreadsGetUseCaseInterface;
use Bbs\UseCase\Threads\ThreadsPostUseCase;
use Bbs\UseCase\Threads\ThreadsPostUseCaseInterface;
use Bbs\UseCase\TopUseCase;
use Bbs\UseCase\TopUseCaseInterface;
use Bbs\Repository\ThreadRepositoryInterface;
use Bbs\Repository\ThreadRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(TopUseCaseInterface::class, TopUseCase::class);
        $this->app->singleton(ThreadsPostUseCaseInterface::class, ThreadsPostUseCase::class);
        $this->app->singleton(ThreadsGetUseCaseInterface::class, ThreadsGetUseCase::class);
        $this->app->singleton(ThreadRepositoryInterface::class, ThreadRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
