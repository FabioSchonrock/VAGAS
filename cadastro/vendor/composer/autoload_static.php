<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite2550e725be4775dee5fac4fce4d13fc
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite2550e725be4775dee5fac4fce4d13fc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite2550e725be4775dee5fac4fce4d13fc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite2550e725be4775dee5fac4fce4d13fc::$classMap;

        }, null, ClassLoader::class);
    }
}
