<?php


namespace Nanaweb\Example\App3;


use PHPUnit\Framework\TestCase;

class ExampleApp3Test extends TestCase
{
    public function test()
    {
        $app = new ExampleApp3(new BaseApp());

        $this->assertEquals(12, $app->do(2));
    }
}
