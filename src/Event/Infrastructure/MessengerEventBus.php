<?php
declare(strict_types=1);

namespace CQRS\Event\Infrastructure;

use CQRS\Event\Domain\Event;
use CQRS\Event\Domain\EventBus;
use Symfony\Component\Messenger\MessageBusInterface;

final class MessengerEventBus implements EventBus
{
    public function __construct(private MessageBusInterface $eventBus)
    {
    }

    public function dispatch(Event $event): void
    {
        $this->eventBus->dispatch($event);
    }
}