<?php

namespace Nanaweb\Example\App2;

use Nanaweb\Example\App2\Output2Provider\Output2ProviderInterface;

class Output2ProviderResolver
{
    /**
     * @var Output2ProviderInterface[]
     */
    private $output2Providers = [];

    public function addOutput2Provider(Output2ProviderInterface $output2Provider)
    {
        $this->output2Providers[] = $output2Provider;

        return $this;
    }

    public function resolve(string $target)
    {
        foreach ($this->output2Providers as $output2Provider) {
            if ($output2Provider->supports($target)) {
                return $output2Provider;
            }
        }

        throw new \LogicException('No Output2Provider defined');
    }
}
