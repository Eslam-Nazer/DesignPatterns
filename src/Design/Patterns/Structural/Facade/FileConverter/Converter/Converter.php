<?php

namespace DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Converter;

interface Converter
{
    public function convert(string $file, string $fromType, string $toType): void;
}
