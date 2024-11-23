<?php

namespace DesignPattern\Design\Patterns\Structural\FlyWeight\GameBoard;

class GameTileBorder
{
    private GameTile $tile;

    public function __construct(
        private string $style,
        private string $thickness,
        string $color,
        string $size,
        string $level
    ) {
        $this->tile = GameTileFactory::createTile(
            $color,
            $size,
            $level
        );
    }

    /**
     * Summary of getStyle
     * @return string
     */
    public function getStyle(): string
    {
        return $this->style;
    }

    /**
     * Summary of getThickness
     * @return string
     */
    public function getThickness(): string
    {
        return $this->thickness;
    }

    /**
     * Summary of getTail
     * @return GameTile|mixed
     */
    public function getTail(): GameTile
    {
        return $this->tile;
    }
}
