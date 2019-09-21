<?php

namespace Nanaweb\Example\App3;

class ExampleApp3 extends BaseApp
{
    /**
     * @var BaseApp
     */
    private $delegate;

    /**
     * @param BaseApp $delegate
     */
    public function __construct(BaseApp $delegate)
    {
        $this->delegate = $delegate;
    }

    public function do(int $input): int
    {
        return $this->delegate->do($input) * 3;
    }
}
