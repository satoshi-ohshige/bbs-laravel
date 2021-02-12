<?php

namespace Bbs\UseCase\Threads;

use Bbs\Domain\Thread;
use Bbs\Repository\ThreadRepositoryInterface;

class ThreadsGetUseCase implements ThreadsGetUseCaseInterface
{
    public function __construct(private ThreadRepositoryInterface $threadRepository)
    {
    }
    public function handle(int $id): Thread
    {
        return $this->threadRepository->get($id);
    }
}
