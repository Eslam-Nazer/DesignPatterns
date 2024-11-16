<?php

namespace DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Normalizer\Video;

use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Normalizer\Normalizer;

class VideoNormlizer implements Normalizer
{
    public function normalize(string $file): void
    {
        echo "I am nromalize the video {$file} due to some data corruption\n";
    }
}
