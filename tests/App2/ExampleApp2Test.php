<?php

namespace Nanaweb\Example\App2;

use Nanaweb\Example\App2\Output1Provider\ProviderForA;
use Nanaweb\Example\App2\Output1Provider\ProviderForNotA;
use Nanaweb\Example\App2\Output2Provider\ProviderForNotZ;
use Nanaweb\Example\App2\Output2Provider\ProviderForZ;
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
        $resolver1 = new Output1ProviderResolver();
        $resolver1
            ->addOutput1Provider(new ProviderForA())
            ->addOutput1Provider(new ProviderForNotA())
        ;

        $resolver2 = new Output2ProviderResolver();
        $resolver2
            ->addOutput2Provider(new ProviderForZ())
            ->addOutput2Provider(new ProviderForNotZ())
        ;

        return new ExampleApp2($resolver1, $resolver2);
    }
}
