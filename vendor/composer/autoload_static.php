<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit40f9e93856ae624982e8cd336666d73f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Albet\\Ppob\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Albet\\Ppob\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit40f9e93856ae624982e8cd336666d73f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit40f9e93856ae624982e8cd336666d73f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit40f9e93856ae624982e8cd336666d73f::$classMap;

        }, null, ClassLoader::class);
    }
}
