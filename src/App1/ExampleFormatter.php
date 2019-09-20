<?php


namespace Nanaweb\Example\App1;


class ExampleFormatter
{
    public function format(int $value): string
    {
        return number_format($value);
    }
}
