<?php

namespace DesignPattern\Design\Patterns\Structural\Facade\FileConverter\FileScanner\Video;

use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\FileScanner\FileScanner;

class MP4Scanner extends FileScanner
{
    public function scan(): bool
    {
        return (bool) rand(0, 1);
    }
}
