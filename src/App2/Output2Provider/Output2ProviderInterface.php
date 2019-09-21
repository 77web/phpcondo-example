<?php


namespace Nanaweb\Example\App2\Output2Provider;


interface Output2ProviderInterface
{
    public function supports(string $input2): bool;

    public function provide(): int;
}
