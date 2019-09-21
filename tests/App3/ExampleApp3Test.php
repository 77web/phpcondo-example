<?php


namespace Nanaweb\Example\App3;


use PHPUnit\Framework\TestCase;

class ExampleApp3Test extends TestCase
{
    public function test()
    {
        $input = 2;
        $delegateOutput = 1;

        $delegateP = $this->prophesize(BaseApp::class);
        $delegateP->do($input)->willReturn($delegateOutput)->shouldBeCalled();

        $app = new ExampleApp3($delegateP->reveal());

        $this->assertEquals(3, $app->do($input));
    }
}
