<?php

use LaMetric\Parameters;

return [
    [
        'name' => 'field-1',
        'type' => Parameters::TEXT_TYPE,
    ],
    [
        'name' => 'field-2',
        'type' => Parameters::NUMBER_TYPE,
    ],
    [
        'name' => 'field-3',
        'type' => Parameters::SWITCH_TYPE,
    ],
    [
        'name'    => 'field-4',
        'type'    => Parameters::CHOICES_TYPE,
        'choices' => [
            'iron-man',
            'captain-america',
            'ant-man',
            'thor',
        ]
    ]
];
