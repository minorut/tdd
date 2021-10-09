<?php

namespace Tests\Unit\Minorut\Tdd;

use Minorut\Tdd\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     * @covers \Minorut\Tdd\Example::hello
     */
    public function it_returns_hello(): void
    {
        $this->assertSame((new Example())->hello(), 'Hello');
    }
}
