<?php
declare(strict_types=1);

namespace CQRS\Query\Infrastructure;

use CQRS\Query\Domain\Query;
use CQRS\Query\Domain\QueryBus;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;

final class MessengerQueryBus implements QueryBus
{
    use HandleTrait {
        handle as handleQuery;
    }
    public function __construct(private MessageBusInterface $queryBus)
    {
    }

    public function handle(Query $query): mixed
    {
        return $this->handleQuery($query);
    }
}