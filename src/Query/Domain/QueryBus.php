<?php

namespace CQRS\Query\Domain;

interface QueryBus
{
    public function handle(Query $query): mixed;
}