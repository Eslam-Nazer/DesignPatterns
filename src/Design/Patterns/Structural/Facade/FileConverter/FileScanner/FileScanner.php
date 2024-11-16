<?php

namespace DesignPattern\Design\Patterns\Structural\Facade\FileConverter\FileScanner;

abstract class FileScanner
{

    /**
     * Summary of __construct
     * @param string $file
     */
    public function __construct(
        protected string $file,
    ) {}

    abstract public function scan(): bool;
}
