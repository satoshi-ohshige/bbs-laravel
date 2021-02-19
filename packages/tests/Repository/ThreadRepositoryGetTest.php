<?php

namespace BbsTests\Repository;

use Bbs\Domain\Thread;
use Bbs\Repository\ThreadRepository;
use BbsTests\TestCase;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Facades\Storage;

class ThreadRepositoryGetTest extends TestCase
{
    public function testGetSuccess()
    {
        // 1. 準備
        $targetId = 1;
        $thread = new Thread($targetId, 'test_title', 'test_body', new \DateTimeImmutable());
        Storage::shouldReceive('get')
            ->once()
            ->with("persistence/thread_{$targetId}.txt")
            ->andReturn(serialize($thread));

        // 2. テスト対象を実行
        $threadRepository = new ThreadRepository();
        $response = $threadRepository->get($targetId);

        // 3. 検証
        $this->assertEquals($thread, $response);
    }

    public function testGetFileNotExist()
    {
        // 1. 準備
        $targetId = 1;
        Storage::shouldReceive('get')
            ->once()
            ->with("persistence/thread_{$targetId}.txt")
            ->andThrow(FileNotFoundException::class);

        // 2. テスト対象を実行
        $threadRepository = new ThreadRepository();
        $this->expectException(FileNotFoundException::class);
        $threadRepository->get($targetId);
    }
}
