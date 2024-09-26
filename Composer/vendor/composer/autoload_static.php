<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit208a663c965a56ac72c6b27579c58101
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vitor\\Composer\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vitor\\Composer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit208a663c965a56ac72c6b27579c58101::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit208a663c965a56ac72c6b27579c58101::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit208a663c965a56ac72c6b27579c58101::$classMap;

        }, null, ClassLoader::class);
    }
}
