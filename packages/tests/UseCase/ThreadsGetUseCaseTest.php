<?php

namespace Bbs\tests\UseCase;

use Bbs\Domain\Thread;
use Bbs\Repository\ThreadRepositoryInterface;
use Bbs\UseCase\Threads\ThreadsGetUseCase;
use BbsTests\TestCase;
use Mockery\MockInterface;

class ThreadsGetUseCaseTest extends TestCase
{
    private ThreadRepositoryInterface | MockInterface $threadRepository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->threadRepository = \Mockery::mock(ThreadRepositoryInterface::class);
    }

    public function testSuccess(): void
    {
        // 1. 準備
        $id = 1;
        $title = 'testtitle';
        $body = 'testbody';
        $postDate = new \DateTimeImmutable();
        $thread = new Thread($id, $title, $body, $postDate);
        $this->threadRepository
            ->shouldReceive('get')
            ->once()
            ->with($id)
            ->andReturn($thread);

        $threadUseCase = new ThreadsGetUseCase($this->threadRepository);
        // 2. テスト対象を実行
        $result = $threadUseCase->handle($id);

        // 3. 検証
        $this->assertEquals($thread, $result);
    }
}
