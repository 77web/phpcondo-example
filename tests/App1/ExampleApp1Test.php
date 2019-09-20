<?php


namespace Nanaweb\Example\App1;


use PHPUnit\Framework\TestCase;

class ExampleApp1Test extends TestCase
{
    public function test()
    {
        $converter = $this->prophesize(ExampleConverter::class);
        $formatter = $this->prophesize(ExampleFormatter::class);

        $input = 'input';
        $converted = 1;
        $output = 'output';

        $converter->convert($input)->willReturn($converted)->shouldBeCalled();
        $formatter->format($converted)->willReturn($output)->shouldBeCalled();

        $app = new ExampleApp1($converter->reveal(), $formatter->reveal());
        $this->assertEquals($output, $app->do($input));
    }

}
