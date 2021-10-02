<?php

namespace PaulhenriL\PhpAbstractDecorator\Tests\Fakes;

class Greeter
{
    protected $greetee;

    public function __construct(string $greetee)
    {
        $this->greetee = $greetee;
    }

    public function greet(): string
    {
        return "hello " . $this->greetee;
    }

    public function getGreetee(): string
    {
        return $this->greetee;
    }
}
