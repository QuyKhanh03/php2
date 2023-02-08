<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0f3e37b460d489332240dd915571725d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0f3e37b460d489332240dd915571725d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0f3e37b460d489332240dd915571725d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0f3e37b460d489332240dd915571725d::$classMap;

        }, null, ClassLoader::class);
    }
}
