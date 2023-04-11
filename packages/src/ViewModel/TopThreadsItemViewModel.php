<?php

namespace Bbs\ViewModel;

use Bbs\Domain\Thread;

class TopThreadsItemViewModel
{
    public function __construct(private Thread $thread)
    {
    }

    public function getId(): string
    {
        return (string)$this->thread->getId();
    }

    public function getTitle(): string
    {
        return $this->thread->getTitle();
    }

    public function getBody(): string
    {
        return mb_substr($this->thread->getBody(), 0, 2);
    }
}
