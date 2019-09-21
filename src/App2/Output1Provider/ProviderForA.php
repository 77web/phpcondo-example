<?php


namespace Nanaweb\Example\App2\Output1Provider;


class ProviderForA implements Output1ProviderInterface
{
    public function supports(string $input1): bool
    {
        return $input1 === 'A';
    }

    public function provide(): int
    {
        return 1;
    }

}
