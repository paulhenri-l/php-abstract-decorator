<?php

namespace PaulhenriL\PhpAbstractDecorator\Tests\Fakes;

use PaulhenriL\PhpAbstractDecorator\AbstractDecorator;

class GreatGreeter extends AbstractDecorator
{
    public function greet(): string
    {
        return mb_strtoupper(
            $this->decoratedInstance->greet()
        );
    }
}
