<?php


namespace Nanaweb\Example\App2\Output2Provider;


class ProviderForZ implements Output2ProviderInterface
{
    public function supports(string $input2): bool
    {
        return $input2 === 'Z';
    }

    public function provide(): int
    {
        return 2;
    }
}
