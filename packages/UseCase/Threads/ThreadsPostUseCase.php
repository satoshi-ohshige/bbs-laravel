<?php

namespace Bbs\UseCase\Threads;

use Bbs\Domain\Thread;

class ThreadsPostUseCase implements ThreadsPostUseCaseInterface
{
    public function handle(string $title, string $body): void
    {
        $thread = Thread::factory($title, $body, new \DateTimeImmutable());
    }

}
