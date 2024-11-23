<?php

namespace DesignPattern\Design\Patterns\Structural\FlyWeight\GameBoard;

class GameTileFactory
{
    /**
     * Summary of tiles
     * @var GameTile[]|array
     */
    private static array $tiles = [];

    public static function getTailes()
    {
        var_dump(self::$tiles);
    }
    public static function createTile($color, $size, $level)
    {
        $hash = md5($color . $size . $level);

        if (!array_key_exists($hash, self::$tiles,)) {
            self::$tiles[$hash] = new GameTile($color, $size, $level);
        }
        return self::$tiles[$hash];
    }
}
