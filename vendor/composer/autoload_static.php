<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f3671a060c4f3142771b48632db4c9d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f3671a060c4f3142771b48632db4c9d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f3671a060c4f3142771b48632db4c9d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6f3671a060c4f3142771b48632db4c9d::$classMap;

        }, null, ClassLoader::class);
    }
}
