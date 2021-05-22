<?php

use LaMetric\Field;

return [
    [
        'key'     => 'field-1',
        'type'    => Field::TEXT_TYPE,
        'default' => 'hello',
    ],
    [
        'key'  => 'field-2',
        'type' => Field::NUMBER_TYPE,
    ],
    [
        'key'  => 'field-3',
        'type' => Field::SWITCH_TYPE,
    ],
    [
        'key'     => 'field-4',
        'type'    => Field::CHOICES_TYPE,
        'choices' => [
            'iron-man',
            'captain-america',
            'ant-man',
            'thor',
        ],
    ],
];
