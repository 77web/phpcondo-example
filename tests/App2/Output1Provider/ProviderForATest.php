<?php


namespace Nanaweb\Example\App2\Output1Provider;


use PHPUnit\Framework\TestCase;

class ProviderForATest extends TestCase
{
    public function test_supports()
    {
        $SUT = new ProviderForA();

        $this->assertTrue($SUT->supports('A'));
        $this->assertFalse($SUT->supports('B'));
    }

    public function test_provide()
    {
        $SUT = new ProviderForA();

        $this->assertEquals(1, $SUT->provide());
    }
}
