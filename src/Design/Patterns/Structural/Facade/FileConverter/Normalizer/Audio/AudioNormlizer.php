<?php

namespace DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Normalizer\Audio;

use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Normalizer\Normalizer;

class AudioNormlizer implements Normalizer
{
    public function normalize(string $file): void
    {
        echo "I am nromalize the file {$file} due to some data corruption\n";
    }
}
