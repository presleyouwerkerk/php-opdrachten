<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e6c3314819288d8dee6dbfe794a2b82
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Schooluitje\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Schooluitje\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e6c3314819288d8dee6dbfe794a2b82::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e6c3314819288d8dee6dbfe794a2b82::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4e6c3314819288d8dee6dbfe794a2b82::$classMap;

        }, null, ClassLoader::class);
    }
}
