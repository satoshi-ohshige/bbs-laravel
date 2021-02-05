<?php

namespace Bbs\Repository;

use Bbs\Domain\Thread;
use Illuminate\Support\Facades\Storage;

class ThreadRepository implements ThreadRepositoryInterface
{
    public function save(Thread $thread): void
    {
        Storage::put("persistence/thread_{$thread->getId()}.txt", serialize($thread));
    }

    public function get(int $id): Thread
    {

        return unserialize(Storage::get("persistence/thread_{$id}.txt"));
    }
}
