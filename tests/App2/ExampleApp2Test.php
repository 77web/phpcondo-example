<?php

namespace Nanaweb\Example\App2;

use Nanaweb\Example\App2\Output1Provider\Output1ProviderInterface;
use Nanaweb\Example\App2\Output2Provider\Output2ProviderInterface;
use PHPUnit\Framework\TestCase;

class ExampleApp2Test extends TestCase
{
    public function test()
    {
        $resolver1P = $this->prophesize(Output1ProviderResolver::class);
        $provider1P = $this->prophesize(Output1ProviderInterface::class);
        $resolver2P = $this->prophesize(Output2ProviderResolver::class);
        $provider2P = $this->prophesize(Output2ProviderInterface::class);

        $input1 = 'dummy';
        $input2 = 'dummy2';
        $output1 = 3;
        $output2 = 2;

        $provider1P->provide()->willReturn($output1)->shouldBeCalled();
        $provider2P->provide()->willReturn($output2)->shouldBeCalled();
        $resolver1P->resolve($input1)->willReturn($provider1P->reveal())->shouldBeCalled();
        $resolver2P->resolve($input2)->willReturn($provider2P->reveal())->shouldBeCalled();

        $app = new ExampleApp2($resolver1P->reveal(), $resolver2P->reveal());
        $this->assertEquald($output1 * $output2, $app->do($input1, $output1));
    }
}
