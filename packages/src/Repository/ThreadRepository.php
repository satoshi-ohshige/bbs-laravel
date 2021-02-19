<?php

namespace Bbs\Repository;

use Bbs\Domain\Thread;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Facades\Storage;

class ThreadRepository implements ThreadRepositoryInterface
{
    public function save(Thread $thread): void
    {
        Storage::put("persistence/thread_{$thread->getId()}.txt", serialize($thread));
    }

    public function get(int $id): ?Thread
    {
        try {
            $thread = Storage::get("persistence/thread_{$id}.txt");
        } catch (FileNotFoundException) {
            return null;
        }

        return unserialize($thread);
    }

    public function getAll(): array
    {
        $files = Storage::allFiles("persistence");
        $threads = [];
        foreach ($files as $file) {
            $threads[] = unserialize(Storage::get($file));
        }

        return $threads;
    }
}
