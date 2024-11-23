<?php

use DesignPattern\Design\Patterns\Structural\FlyWeight\GameBoard\GameBoard;
use DesignPattern\Design\Patterns\Structural\FlyWeight\GameBoard\GameTileBorder;
use DesignPattern\Design\Patterns\Structural\FlyWeight\GameBoard\GameTileColor;
use DesignPattern\Design\Patterns\Structural\FlyWeight\GameBoard\GameTileFactory;
use DesignPattern\Design\Patterns\Structural\FlyWeight\GameBoard\GameTileLevel;

require "vendor/autoload.php";

$border = new GameBoard();
$borderTail1 = new GameTileBorder(
    'dashed',
    'thick',
    GameTileColor::TILE_COLOR_GREEN,
    '100x100',
    GameTileLevel::TILE_LEVEL_BEGINNER
);
$borderTail2 = new GameTileBorder(
    'dashed',
    'thick',
    GameTileColor::TILE_COLOR_GREEN,
    '100x100',
    GameTileLevel::TILE_LEVEL_BEGINNER
);
$borderTail3 = new GameTileBorder(
    'dashed',
    'thick',
    GameTileColor::TILE_COLOR_GREEN,
    '100x100',
    GameTileLevel::TILE_LEVEL_INTERMEDIATE
);
$borderTail4 = new GameTileBorder(
    'dashed',
    'thick',
    GameTileColor::TILE_COLOR_GREEN,
    '100x100',
    GameTileLevel::TILE_LEVEL_INTERMEDIATE
);
$borderTail5 = new GameTileBorder(
    'dashed',
    'thick',
    GameTileColor::TILE_COLOR_BLUE,
    '200x200',
    GameTileLevel::TILE_LEVEL_EXPERT
);
$borderTail6 = new GameTileBorder(
    'dashed',
    'thick',
    GameTileColor::TILE_COLOR_BROWN,
    '150x150',
    GameTileLevel::TILE_LEVEL_BEGINNER
);
$borderTail7 = new GameTileBorder(
    'dashed',
    'thick',
    GameTileColor::TILE_COLOR_RED,
    '300x300',
    GameTileLevel::TILE_LEVEL_BEGINNER
);
$borderTail8 = new GameTileBorder(
    'dashed',
    'thick',
    GameTileColor::TILE_COLOR_RED,
    '300x300',
    GameTileLevel::TILE_LEVEL_BEGINNER
);
$borderTail9 = new GameTileBorder(
    'dashed',
    'thick',
    GameTileColor::TILE_COLOR_RED,
    '300x300',
    GameTileLevel::TILE_LEVEL_EXPERT
);
$borderTail10 = new GameTileBorder(
    'dashed',
    'thick',
    GameTileColor::TILE_COLOR_RED,
    '300x300',
    GameTileLevel::TILE_LEVEL_EXPERT
);


$border->addTile($borderTail1);
$border->addTile($borderTail2);
$border->addTile($borderTail3);
$border->addTile($borderTail4);
$border->addTile($borderTail5);
$border->addTile($borderTail6);
$border->addTile($borderTail7);
$border->addTile($borderTail8);
$border->addTile($borderTail9);
$border->addTile($borderTail10);

echo $border;
GameTileFactory::getTailes();
