<?php

namespace Bbs\Domain;

class Thread
{
    public function __construct(
        private string $title,
        private string $body,
        private \DateTimeInterface $postDate,
    ) {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getPostDate(): \DateTimeInterface
    {
        return $this->postDate;
    }
}
