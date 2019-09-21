<?php

namespace Nanaweb\Example\App2;

class ExampleApp2
{
    /**
     * @var Output1ProviderResolver
     */
    private $output1ProviderResolver;

    /**
     * @var Output2ProviderResolver
     */
    private $output2ProviderResolver;

    /**
     * @param Output1ProviderResolver $output1ProviderResolver
     * @param Output2ProviderResolver $output2ProviderResolver
     */
    public function __construct(
        Output1ProviderResolver $output1ProviderResolver,
        Output2ProviderResolver $output2ProviderResolver
    )
    {
        $this->output1ProviderResolver = $output1ProviderResolver;
        $this->output2ProviderResolver = $output2ProviderResolver;
    }

    public function do(string $input1, string $input2): int
    {
        $output1 = $this->output1ProviderResolver->resolve($input1)->provide();
        $output2 = $this->output2ProviderResolver->resolve($input2)->provide();

        return $output1 * $output2;
    }
}
