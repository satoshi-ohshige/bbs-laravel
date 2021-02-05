<?php

namespace Bbs\Repository;

use Bbs\Domain\Thread;
use Illuminate\Support\Facades\Storage;

class ThreadRepository implements ThreadRepositoryInterface
{
    public function save(Thread $thread): void
    {
        Storage::put('persistence/threads.txt', $thread->getBody());
    }

    public function get(int $id): Thread
    {

        return new Thread($id, 'sampleTitle', 'sampleBody', new \DateTime());
    }
}
