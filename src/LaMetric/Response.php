<?php

declare(strict_types=1);

namespace LaMetric;

use LaMetric\Response\Frame;
use LaMetric\Response\FrameCollection;

class Response
{
    /**
     * @param string $value
     *
     * @return string
     */
    public function error(string $value = 'INTERNAL ERROR'): string
    {
        return $this->asJson([
            'frames' => [
                [
                    'index' => 0,
                    'text'  => $value,
                    'icon'  => 'null'
                ]
            ]
        ]);
    }

    /**
     * @param array $data
     *
     * @return string
     */
    private function asJson(array $data = []): string
    {
        return json_encode($data, JSON_PRETTY_PRINT);
    }

    /**
     * @param FrameCollection $frameCollection
     *
     * @return string
     */
    public function data(FrameCollection $frameCollection): string
    {
        $response = [
            'frames' => []
        ];

        /** @var Frame $frame */
        foreach ($frameCollection->getFrames() as $key => $frame) {
            $data['frames'][] = [
                [
                    'index' => $key,
                    'icon'  => $frame->getIcon(),
                    'text'  => $frame->getText(),
                ],
            ];
        }

        return $this->asJson($response);
    }
}
