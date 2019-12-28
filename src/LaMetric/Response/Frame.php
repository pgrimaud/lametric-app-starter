<?php

declare(strict_types=1);

namespace LaMetric\Response;

class Frame
{
    /**
     * @var string
     */
    private $text = '';

    /**
     * @var string
     */
    private $icon = '';

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getIcon(): string
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     */
    public function setIcon(string $icon): void
    {
        $this->icon = $icon;
    }
}
