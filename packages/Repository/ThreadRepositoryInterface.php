<?php


namespace Bbs\Repository;


use Bbs\Domain\Thread;

interface ThreadRepositoryInterface
{
    public function save(Thread $thread): void;

    public function get(int $id): Thread;

    public function getAll(): array;
}
