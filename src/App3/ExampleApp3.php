<?php

namespace Nanaweb\Example\App3;

class ExampleApp3 extends BaseApp
{
    public function do(int $input): int
    {
        return parent::do($input) * 3;
    }
}
