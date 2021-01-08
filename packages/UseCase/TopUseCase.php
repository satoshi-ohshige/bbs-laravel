<?php

namespace Bbs\UseCase;

class TopUseCase implements TopUseCaseInterface
{

    public function handle(): string
    {
        return "welcome";
    }
}
