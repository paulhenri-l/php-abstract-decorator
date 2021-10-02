<?php

namespace PaulhenriL\PhpAbstractDecorator;

abstract class AbstractDecorator
{
    protected $decoratedInstance;

    public function __construct($decoratedInstance)
    {
        $this->decoratedInstance = $decoratedInstance;
    }

    public function __call($method, $args)
    {
        $result = $this->decoratedInstance->{$method}(...$args);

        if ($result instanceof $this->decoratedInstance) {
            $result = new static($result);
        }

        return $result;
    }

    public function __get($property)
    {
        return $this->decoratedInstance->{$property};
    }

    public function __set($property, $value)
    {
        $this->decoratedInstance->{$property} = $value;
    }
}
