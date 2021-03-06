<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite91aad72f3e46e06b7cd1de5d17cf486
{
    public static $files = array (
        '6953de7a6369ad87cf8c47a63e483e71' => __DIR__ . '/../..' . '/secure/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
            'Admin\\safe\\' => 11,
            'Admin\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Admin\\safe\\' => 
        array (
            0 => __DIR__ . '/../..' . '/secure',
        ),
        'Admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/admin',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite91aad72f3e46e06b7cd1de5d17cf486::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite91aad72f3e46e06b7cd1de5d17cf486::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
