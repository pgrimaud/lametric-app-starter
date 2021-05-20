<?php

declare(strict_types=1);

namespace LaMetric\Response;

class FrameCollection
{
    /**
     * @var array
     */
    private array $frames;

    /**
     * @param Frame $frame
     */
    public function addFrame(Frame $frame): void
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
