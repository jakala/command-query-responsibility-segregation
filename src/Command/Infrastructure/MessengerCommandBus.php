<?php

declare(strict_types=1);

namespace CQRS\Command\Infrastructure;

use CQRS\Command\Domain\Command;
use CQRS\Command\Domain\CommandBus;
use Symfony\Component\Messenger\MessageBusInterface;

final class MessengerCommandBus implements CommandBus
{
    public function __construct(private MessageBusInterface $commandBus)
    {
    }

    public function dispatch(Command $command): void
    {
        $this->commandBus->dispatch($command);
    }
}