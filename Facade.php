<?php

use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\CorruptedFileException;
use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\FileConverterFacade;

require "vendor/autoload.php";

try {
    $converter = new FileConverterFacade('audio.mp4');
    $converter->convert();
} catch (CorruptedFileException $e) {
    echo $e->getMessage();
}
