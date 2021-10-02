# PhpAbstractDecorator

[![PHP Tests](https://github.com/paulhenri-l/php-abstract-decorator/actions/workflows/php-tests.yml/badge.svg)](https://github.com/paulhenri-l/php-abstract-decorator/actions/workflows/php-tests.yml)
[![PHP Code Style](https://github.com/paulhenri-l/php-abstract-decorator/actions/workflows/php-code-style.yml/badge.svg)](https://github.com/paulhenri-l/php-abstract-decorator/actions/workflows/php-code-style.yml)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)

This abstract class helps you in creating decorators for your classes.

## Installation

```
composer require paulhenri-l/php-abstract-decorator
```

## Usage

```php
<?php

class Person {
    public function talk()
    {
        return "hello";
    }

    public function name()
    {
        return "none";
    }
}

class LoudPerson extends \PaulhenriL\PhpAbstractDecorator\AbstractDecorator {
    public function talk(){
        return mb_strtoupper(
            $this->decoratedInstance->talk()
        );
    }
}

$person = new Person;
$loudPerson = new LoudPerson($person);

$loudPerson->talk(); // HELLO
$loudPerson->name(); // none
```
