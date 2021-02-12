<?php

namespace Bbs\UseCase\Threads;

interface ThreadsPostUseCaseInterface
{

    public function handle(string $title, string $body): void;
}
