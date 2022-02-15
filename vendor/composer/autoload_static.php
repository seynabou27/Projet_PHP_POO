<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2dead529d67fd4d9655535ff7b30d62d
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Collections\\' => 28,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Doctrine\\Common\\Collections\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/collections/lib/Doctrine/Common/Collections',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2dead529d67fd4d9655535ff7b30d62d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2dead529d67fd4d9655535ff7b30d62d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2dead529d67fd4d9655535ff7b30d62d::$classMap;

        }, null, ClassLoader::class);
    }
}
