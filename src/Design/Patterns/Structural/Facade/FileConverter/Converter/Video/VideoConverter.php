<?php

namespace DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Converter\Video;

use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Converter\Converter;

class VideoConverter implements Converter
{
    public function convert(string $file, string $fromType, string $toType): void
    {
        echo "I am converting the file {$file} from {$fromType} to {$toType}\n";
    }
}
