<?php

declare(strict_types=1);

namespace LaMetric;

class Validator
{
    /**
     * @var array
     */
    private $parameters = [];

    /**
     * @param array $parameters
     */
    public function __construct(array $parameters = [])
    {
        $this->parameters = $parameters;
    }

    public function check($parameters)
    {

    }
}
