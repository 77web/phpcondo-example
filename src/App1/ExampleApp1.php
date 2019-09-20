<?php

namespace Nanaweb\Example\App1;

class ExampleApp1
{
    /**
     * @var ExampleConverter
     */
    private $converter;

    /**
     * @var ExampleFormatter
     */
    private $formatter;

    /**
     * @param ExampleConverter $converter
     * @param ExampleFormatter $formatter
     */
    public function __construct(ExampleConverter $converter, ExampleFormatter $formatter)
    {
        $this->converter = $converter;
        $this->formatter = $formatter;
    }

    public function do(string $input)
    {
        return $this->formatter->format($this->converter->convert($input));
    }
}
