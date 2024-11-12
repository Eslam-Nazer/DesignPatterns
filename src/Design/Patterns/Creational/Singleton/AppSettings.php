<?php

namespace DesignPattern\Design\Patterns\Creational\Singleton;

class AppSettings
{
    private static array $config;
    private static ?self $instance = null;
    private function __construct()
    {
        self::$config = parse_ini_file(__DIR__ . "/config.ini", true);
    }

    private function __clone() {}

    /**
     * Summary of getInstance
     * @return AppSettings | self
     */
    public static function getInstance(): self
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Summary of getConfig
     * @param string $key
     * @return mixed
     */
    public static function getConfig(string $key): mixed
    {
        return self::$config[$key] ?? null;
    }
}
