<?php

namespace App\Twig\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
class BaseComponent
{
    use DefaultActionTrait;

    public function getTimeStamp(): int
    {
        return (new \DateTime())->getTimestamp();
    }
}