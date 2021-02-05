<?php

namespace Bbs\UseCase\Threads;

use Bbs\Domain\Thread;
use Bbs\Repository\ThreadRepositoryInterface;

class ThreadsPostUseCase implements ThreadsPostUseCaseInterface
{
    public function __construct(private ThreadRepositoryInterface $threadRepository)
    {
    }

    public function handle(string $title, string $body): void
    {
        $thread = Thread::factory($title, $body, new \DateTimeImmutable());

        $this->threadRepository->save($thread);
    }
}
