<?php

namespace Spatie\EventSourcing\Tests\TestClasses\Projectors;

use Illuminate\Support\Collection;
use Spatie\EventSourcing\Projectors\Projector;
use Spatie\EventSourcing\Projectors\ProjectsEvents;
use Spatie\EventSourcing\Tests\TestClasses\Events\MoneyAddedEvent;
use Spatie\EventSourcing\Tests\TestClasses\Events\MoneySubtractedEvent;

class ProjectorWithoutHandlesEvents implements Projector
{
    use ProjectsEvents;

    public function functionThatHandlesMoneyAdd(MoneyAddedEvent $event)
    {
        $event->account->addMoney($event->amount);
    }

    public function anotherFunctionThatHandlesMoneySubstracted(MoneySubtractedEvent $event)
    {
        $event->account->subtractMoney($event->amount);
    }

    public function functionWithoutTypeHint($parameter)
    {
    }

    public function functionWithUnreleatedClassTypeHint(Collection $test)
    {
    }

    protected function protectedFunction(MoneyAddedEvent $event)
    {
    }

    private function privateFunction(MoneyAddedEvent $event)
    {
    }
}
