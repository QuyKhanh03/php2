<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit610e558a094400d4aff10b21315b34d7
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
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit610e558a094400d4aff10b21315b34d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit610e558a094400d4aff10b21315b34d7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit610e558a094400d4aff10b21315b34d7::$classMap;

        }, null, ClassLoader::class);
    }
}
