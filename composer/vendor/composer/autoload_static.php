<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42d82624f7450b9018fb6b7329472def
{
    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'Xavi\\Composer\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Xavi\\Composer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit42d82624f7450b9018fb6b7329472def::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42d82624f7450b9018fb6b7329472def::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit42d82624f7450b9018fb6b7329472def::$classMap;

        }, null, ClassLoader::class);
    }
}