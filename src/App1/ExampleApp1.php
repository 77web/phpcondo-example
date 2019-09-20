<?php

namespace Nanaweb\Example\App1;

class ExampleApp1
{
    public function do(string $input)
    {
        $converter = new ExampleConverter();

        return ExampleFormatter::format($converter->convert($input));
    }
}
