<?php

namespace DesignPattern\Design\Patterns\Structural\FlyWeight\GameBoard;

class GameBoard
{
    /**
     * Summary of __construct
     * @param GameTile[]|array|null $tile
     */
    public function __construct(
        private ?array $tiles = [],
    ) {}

    public function addTile(GameTileBorder $tile): void
    {
        array_push($this->tiles, $tile);
    }

    /**
     * Summary of __toString
     * @return string
     */
    public function __toString(): string
    {
        return join("\n", array_map(
            fn(GameTileBorder $border) => $border->getStyle() .
                " | " .
                $border->getThickness() .
                " | " .
                $border->getTail()->getColor() .
                " | " .
                $border->getTail()->getSize() .
                " | " .
                $border->getTail()->getLevel(),
            $this->tiles
        ));
    }
}
