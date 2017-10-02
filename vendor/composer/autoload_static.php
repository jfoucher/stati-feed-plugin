<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb7863d6ae7c43845b013ad7746d17928
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stati\\Plugin\\Feed\\Tests\\' => 24,
            'Stati\\Plugin\\Feed\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stati\\Plugin\\Feed\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Stati\\Plugin\\Feed\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb7863d6ae7c43845b013ad7746d17928::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb7863d6ae7c43845b013ad7746d17928::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
