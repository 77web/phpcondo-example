<?php

namespace Nanaweb\Example\App2;

class ExampleApp2
{
    public function do(string $input1, string $input2): int
    {
        if ($input1 === 'A') {
            $output1 = 1;
        } else {
            $output1 = 2;
        }

        if ($input2 === 'Z') {
            $output2 = 2;
        } else {
            $output2 = 1;
        }

        return $output1 * $output2;
    }
}
