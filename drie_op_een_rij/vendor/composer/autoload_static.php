<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf07757b727ef3194732592b0aa965604
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DrieOpEenRij\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DrieOpEenRij\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf07757b727ef3194732592b0aa965604::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf07757b727ef3194732592b0aa965604::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf07757b727ef3194732592b0aa965604::$classMap;

        }, null, ClassLoader::class);
    }
}
