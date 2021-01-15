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
}
