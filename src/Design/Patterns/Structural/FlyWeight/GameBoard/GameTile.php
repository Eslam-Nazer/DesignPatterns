<?php

namespace DesignPattern\Design\Patterns\Structural\FlyWeight\GameBoard;

class GameTile
{
    /**
     * Summary of __construct
     * @param string $color
     * @param string $size
     * @param string $level
     */
    public function __construct(
        private string $color,
        private string $size,
        private string $level
    ) {}

    /**
     * Summary of getColor
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Summary of getSize
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * Summary of getLevel
     * @return string
     */
    public function getLevel(): string
    {
        return $this->level;
    }
}
