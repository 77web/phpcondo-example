<?php


namespace Nanaweb\Example\App1;


use PHPUnit\Framework\TestCase;

class ExampleApp1Test extends TestCase
{
    public function test()
    {
        $app = new ExampleApp1(new ExampleConverter(), new ExampleFormatter());

        $this->assertEquals('1,000', $app->do('1000'));
    }

}
