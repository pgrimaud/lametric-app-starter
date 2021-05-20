<?php

declare(strict_types=1);

namespace LaMetric;

abstract class Field
{
    /**
     * Text field on https://developer.lametric.com
     */
    public const TEXT_TYPE = 'text';

    /**
     * Number on https://developer.lametric.com
     */
    public const NUMBER_TYPE = 'number';

    /**
     * Switch on https://developer.lametric.com
     */
    public const SWITCH_TYPE = 'switch';

    /**
     * Single choice on https://developer.lametric.com
     */
    public const CHOICES_TYPE = 'choices';
}
