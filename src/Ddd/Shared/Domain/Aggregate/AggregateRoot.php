<?php
namespace App\Ddd\Shared\Domain\Aggregate;


//use SalariesNba\Shared\Domain\Bus\Event\DomainEvent;

abstract class AggregateRoot
{
    private $domainEvents = [];

    final public function pullDomainEvents(): array
    {
        $domainEvents       = $this->domainEvents;
        $this->domainEvents = [];

        return $domainEvents;
    }

    /*final protected function record(DomainEvent $domainEvent): void
    {
        $this->domainEvents[] = $domainEvent;
    }*/
}