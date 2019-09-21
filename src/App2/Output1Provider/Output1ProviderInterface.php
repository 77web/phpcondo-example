<?php


namespace Nanaweb\Example\App2\Output1Provider;


interface Output1ProviderInterface
{
    public function supports(string $input1): bool;

    public function provide(): int;
}
