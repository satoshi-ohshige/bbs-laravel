<?php

namespace BbsTests\Repository;

use Bbs\Domain\Thread;
use Bbs\Repository\ThreadRepository;
use BbsTests\TestCase;
use Illuminate\Support\Facades\Storage;

class ThreadRepositoryGetTest extends TestCase
{
    private int $targetId = 1;

    public function setUp(): void
    {
        parent::setUp();

        Storage::delete("persistence/thread_{$this->targetId}.txt");
    }

    public function testGetSuccess()
    {
        // 1. 準備
        $thread = new Thread($this->targetId, 'test_title', 'test_body', new \DateTimeImmutable());
        Storage::put("persistence/thread_{$this->targetId}.txt", serialize($thread));

        // 2. テスト対象を実行
        $threadRepository = new ThreadRepository();
        $response = $threadRepository->get($this->targetId);

        // 3. 検証
        $this->assertEquals($thread, $response);
    }

    public function tearDown(): void
    {
        // parent::tearDown()内の処理によってfacadesの呼び出しができなくなるので先に実行しておく
        Storage::delete("persistence/thread_{$this->targetId}.txt");
        parent::tearDown();
    }
}
