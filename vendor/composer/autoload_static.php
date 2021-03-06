<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit22bfbd1509018e9010b8ca40b9b6700b
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPGraphQL\\ACF\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPGraphQL\\ACF\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WPGraphQL\\ACF\\ACF' => __DIR__ . '/../..' . '/src/class-acf.php',
        'WPGraphQL\\ACF\\ACF_Settings' => __DIR__ . '/../..' . '/src/class-acfsettings.php',
        'WPGraphQL\\ACF\\Config' => __DIR__ . '/../..' . '/src/class-config.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit22bfbd1509018e9010b8ca40b9b6700b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit22bfbd1509018e9010b8ca40b9b6700b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit22bfbd1509018e9010b8ca40b9b6700b::$classMap;

        }, null, ClassLoader::class);
    }
}
