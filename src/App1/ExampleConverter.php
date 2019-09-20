<?php


namespace Nanaweb\Example\App1;


class ExampleConverter
{
    public function convert(string $input): int
    {
        return intval($input);
    }
}
