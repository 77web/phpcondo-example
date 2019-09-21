<?php


namespace Nanaweb\Example\App2;


use PHPUnit\Framework\TestCase;

class ExampleApp2Test extends TestCase
{
    public function test_AZ()
    {
        $app = $this->getSUT();
        $this->assertEquals(2, $app->do('A', 'Z'));
    }

    public function test_AX()
    {
        $app = $this->getSUT();
        $this->assertEquals(1, $app->do('A', 'X'));
    }

    public function test_BZ()
    {
        $app = $this->getSUT();
        $this->assertEquals(4, $app->do('B', 'Z'));
    }

    public function test_BX()
    {
        $app = $this->getSUT();
        $this->assertEquals(2, $app->do('B', 'X'));
    }

    private function getSUT()
    {
        return new ExampleApp2();
    }
}
