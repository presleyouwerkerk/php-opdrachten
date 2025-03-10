<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit18f6963f6548b8e36beb6ab675a543d2
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DobbelSpel\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DobbelSpel\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit18f6963f6548b8e36beb6ab675a543d2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit18f6963f6548b8e36beb6ab675a543d2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit18f6963f6548b8e36beb6ab675a543d2::$classMap;

        }, null, ClassLoader::class);
    }
}
