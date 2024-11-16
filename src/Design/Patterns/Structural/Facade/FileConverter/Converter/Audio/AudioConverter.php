<?php

namespace DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Converter\Audio;

use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Converter\Converter;

class AudioConverter implements Converter
{
    public function convert(string $file, string $fromType, string $toType): void
    {
        echo "I am converting the file {$file} from {$fromType} to {$toType}\n";
    }
}
