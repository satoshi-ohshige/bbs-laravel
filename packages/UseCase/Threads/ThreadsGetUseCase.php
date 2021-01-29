<?php

namespace Bbs\UseCase\Threads;

use Bbs\Domain\Thread;

class ThreadsGetUseCase implements ThreadsGetUseCaseInterface
{
    public function handle(): Thread
    {
        return new Thread('sampleTitle', 'sampleBody', new \DateTime);
    }

}
