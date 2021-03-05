<?php

namespace Bbs\Domain;

class Thread
{
    public function __construct(
        private int $id,
        private string $title,
        private string $body,
        private \DateTimeInterface $postDate,
    ) {
    }

    public static function factory(string $title, string $body, \DateTimeInterface $postDate): Thread
    {
        $id = mt_rand(1, 9999999);
        return new self($id, $title, $body, $postDate);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getShortBody(int $length): string
    {
        return mb_substr($this->body, 0, $length);
    }

    public function getPostDate(): \DateTimeInterface
    {
        return $this->postDate;
    }
}
