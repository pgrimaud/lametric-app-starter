<?php

declare(strict_types=1);

namespace LaMetric;

use LaMetric\Exception\{InvalidArgumentException, MissingArgumentException};

class Validator
{
    /**
     * @var array
     */
    private array $parameters;

    /**
     * @param array $parameters
     */
    public function __construct(array $parameters = [])
    {
        $this->parameters = array_map('addslashes', $parameters);
    }

    /**
     * @param array $fields
     * @return bool
     *
     * @throws InvalidArgumentException
     * @throws MissingArgumentException
     */
    public function check(array $fields = []): bool
    {
        foreach ($fields as $field) {
            $key = $field['key'];

            if (!isset($this->parameters[$key])) {
                throw new MissingArgumentException(sprintf('Missing %s argument', $key));
            }

            switch ($field['type']) {
                case Field::TEXT_TYPE:
                    if ($this->parameters[$key] === '') {
                        throw new InvalidArgumentException(sprintf('Invalid %s argument', $key));
                    }
                    break;
                case Field::NUMBER_TYPE:
                    if ((int)$this->parameters[$key] === 0) {
                        throw new InvalidArgumentException(sprintf('Invalid %s argument', $key));
                    }
                    break;
                case Field::SWITCH_TYPE:
                    if (!in_array($this->parameters[$key], ['true', 'false'])) {
                        throw new InvalidArgumentException(sprintf('Invalid %s argument', $key));
                    }
                    break;
                case Field::CHOICES_TYPE:
                    if (!in_array($this->parameters[$key], $field['choices'])) {
                        throw new InvalidArgumentException(sprintf('Invalid %s argument', $key));
                    }
                    break;
            }
        }

        return true;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->parameters;
    }
}
