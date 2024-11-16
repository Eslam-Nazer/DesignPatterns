<?php

namespace DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Compress;

interface Compress
{
    public function compress(string $file): void;
}
