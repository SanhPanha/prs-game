<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1f1108aca7b1c95ecefc2ba5a1f9daf1
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Name\\Rockpaperscissors\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Name\\Rockpaperscissors\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1f1108aca7b1c95ecefc2ba5a1f9daf1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1f1108aca7b1c95ecefc2ba5a1f9daf1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1f1108aca7b1c95ecefc2ba5a1f9daf1::$classMap;

        }, null, ClassLoader::class);
    }
}