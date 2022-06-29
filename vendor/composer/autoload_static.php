<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc27120f08d7d81afb1c98f153dcd627d
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Karacraft\\UtilityCommands\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Karacraft\\UtilityCommands\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc27120f08d7d81afb1c98f153dcd627d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc27120f08d7d81afb1c98f153dcd627d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc27120f08d7d81afb1c98f153dcd627d::$classMap;

        }, null, ClassLoader::class);
    }
}