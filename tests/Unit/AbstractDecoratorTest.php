<?php

namespace PaulhenriL\PhpAbstractDecorator\Tests\Unit;

use PaulhenriL\PhpAbstractDecorator\Tests\Fakes\GreatGreeter;
use PaulhenriL\PhpAbstractDecorator\Tests\Fakes\Greeter;
use PaulhenriL\PhpAbstractDecorator\Tests\TestCase;

class AbstractDecoratorTest extends TestCase
{
    public function test_methods_are_decorated()
    {
        $greater = new Greeter("world");
        $greatGreater = new GreatGreeter($greater);

        $this->assertEquals("HELLO WORLD", $greatGreater->greet());
    }

    public function test_methods_can_be_chained()
    {
        $greater = new Greeter("world");
        $greatGreater = new GreatGreeter($greater);

        $this->assertInstanceOf(GreatGreeter::class, $greatGreater->myself());
    }

    public function test_other_methods_can_still_be_called()
    {
        $greater = new Greeter("world");
        $greatGreater = new GreatGreeter($greater);

        $this->assertEquals("world", $greatGreater->getGreetee());
    }

    public function test_properties_can_still_be_retrieved()
    {
        $greater = new Greeter("world");
        $greatGreater = new GreatGreeter($greater);

        $this->assertEquals("world", $greatGreater->greetee);
    }

    public function test_properties_can_still_be_set()
    {
        $greater = new Greeter("world");
        $greatGreater = new GreatGreeter($greater);

        $greatGreater->greetee = "monde";

        $this->assertEquals("monde", $greatGreater->greetee);
        $this->assertEquals("monde", $greater->greetee);
    }
}
