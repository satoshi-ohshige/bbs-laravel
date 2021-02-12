<?php

namespace BbsTests\Repository;

use Bbs\Domain\Thread;
use Bbs\Repository\ThreadRepository;
use BbsTests\TestCase;
use Illuminate\Support\Facades\Storage;

class ThreadRepositoryGetTest extends TestCase
{
    public function test()
    {
        // 1. 準備
        $thread = new Thread(1,'test_title','test_body', new \DateTimeImmutable());
        Storage::put("persistence/thread_{$thread->getId()}.txt", serialize($thread));

        // 2. テスト対象を実行
        $threadRepository = new ThreadRepository();
        $response = $threadRepository->get($thread->getId());

        // 3. 検証
        $this->assertEquals($thread, $response);

        // 4. お片付け
        

    }
}
