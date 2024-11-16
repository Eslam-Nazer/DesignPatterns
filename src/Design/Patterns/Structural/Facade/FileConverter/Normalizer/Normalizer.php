<?php

namespace DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Normalizer;

interface Normalizer
{
    public function normalize(string $file): void;
}
