<?php

declare(strict_types=1);

namespace LaMetric\Response;

class FrameCollection
{
    /**
     * @var array
     */
    private $frames;

    /**
     * @param Frame $frame
     */
    public function addFrame(Frame $frame)
    {
        $this->frames[] = $frame;
    }

    /**
     * @return array
     */
    public function getFrames(): array
    {
        return $this->frames;
    }
}
