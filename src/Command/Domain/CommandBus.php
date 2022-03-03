<?php

declare(strict_types=1);

namespace CQRS\Command\Domain;

interface CommandBus
{
    public function dispatch(Command $command): void;
}
