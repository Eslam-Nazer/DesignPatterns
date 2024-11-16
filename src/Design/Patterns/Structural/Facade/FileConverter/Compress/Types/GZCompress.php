<?php

namespace DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Compress\Types;

use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Compress\Compress;

class GZCompress implements Compress
{
    public function compress(string $content): void
    {
        echo "File has been compressed to gz files\n";
    }
}
