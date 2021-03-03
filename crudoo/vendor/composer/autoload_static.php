<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit70c4ab3a401849c97bcfd6b91f835a8b
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'C' => 
        array (
            'Cocur\\Slugify\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Cocur\\Slugify\\' => 
        array (
            0 => __DIR__ . '/..' . '/cocur/slugify/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit70c4ab3a401849c97bcfd6b91f835a8b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit70c4ab3a401849c97bcfd6b91f835a8b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit70c4ab3a401849c97bcfd6b91f835a8b::$classMap;

        }, null, ClassLoader::class);
    }
}
