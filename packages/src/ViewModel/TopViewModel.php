<?php

namespace Bbs\ViewModel;

use Bbs\Domain\Thread;

class TopViewModel
{
    /**
     * @param Thread[] $threads
     */
    public function __construct(private array $threads)
    {
    }

    /**
     * @return Thread[]
     */
    public function getThreads(): array
    {
        $viewThreads = [];
        foreach ($this->threads as $thread) {
            $viewThreads[] = new TopThreadsItemViewModel($thread);
        }
        return $viewThreads;
    }
}
