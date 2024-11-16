<?php

namespace DesignPattern\Design\Patterns\Structural\Facade\FileConverter\FileScanner\Audio;

use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\FileScanner\FileScanner;

class MP3Scanner extends FileScanner
{
    public function scan(): bool
    {
        return (bool) rand(0, 1);
    }
}
