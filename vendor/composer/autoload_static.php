<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7f636403ef4927306e14e18b01569199
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Exchange\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Exchange\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7f636403ef4927306e14e18b01569199::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7f636403ef4927306e14e18b01569199::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7f636403ef4927306e14e18b01569199::$classMap;

        }, null, ClassLoader::class);
    }
}