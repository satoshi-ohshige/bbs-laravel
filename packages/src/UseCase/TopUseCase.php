<?php

namespace Bbs\UseCase;

use Bbs\Repository\ThreadRepositoryInterface;

class TopUseCase implements TopUseCaseInterface
{
    public function __construct(private ThreadRepositoryInterface $threadRepository)
    {
    }

    public function handle(): array
    {
        return $this->threadRepository->getAll();
    }
}
