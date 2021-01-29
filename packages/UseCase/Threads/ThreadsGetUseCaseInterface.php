<?php

namespace Bbs\UseCase\Threads;

use Bbs\Domain\Thread;

interface ThreadsGetUseCaseInterface
{
    public function handle(): Thread;
}
