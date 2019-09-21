<?php

namespace Nanaweb\Example\App2;

use Nanaweb\Example\App2\Output1Provider\Output1ProviderInterface;

class Output1ProviderResolver
{
    /**
     * @var Output1ProviderInterface[]
     */
    private $output1Providers = [];

    public function addOutput1Provider(Output1ProviderInterface $output1Provider)
    {
        $this->output1Providers[] = $output1Provider;

        return $this;
    }

    public function resolve(string $target)
    {
        foreach ($this->output1Providers as $output1Provider) {
            if ($output1Provider->supports($target)) {
                return $output1Provider;
            }
        }

        throw new \LogicException('No Output1Provider defined');
    }
}
