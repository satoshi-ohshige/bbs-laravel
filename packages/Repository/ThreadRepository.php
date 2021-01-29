<?php

namespace Bbs\Repository;

use Bbs\Domain\Thread;

class ThreadRepository implements ThreadRepositoryInterface
{
    public function save(Thread $thread): void
    {

    }

    public function get(int $id): Thread
    {

        return new Thread($id, 'sampleTitle', 'sampleBody', new \DateTime);

    }
}
