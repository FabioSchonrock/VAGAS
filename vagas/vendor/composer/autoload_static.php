<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b2573836cfb29999a3a158b7b3267c5
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b2573836cfb29999a3a158b7b3267c5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b2573836cfb29999a3a158b7b3267c5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4b2573836cfb29999a3a158b7b3267c5::$classMap;

        }, null, ClassLoader::class);
    }
}
