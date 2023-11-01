<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec2654d36670a7fa56c7499072626a15
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Caio\\Api\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Caio\\Api\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitec2654d36670a7fa56c7499072626a15::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec2654d36670a7fa56c7499072626a15::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec2654d36670a7fa56c7499072626a15::$classMap;

        }, null, ClassLoader::class);
    }
}
