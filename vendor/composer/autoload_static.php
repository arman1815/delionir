<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2aa2da31e1cdc3439a139dd181277e1f
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kavenegar\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kavenegar\\' => 
        array (
            0 => __DIR__ . '/..' . '/kavenegar/php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2aa2da31e1cdc3439a139dd181277e1f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2aa2da31e1cdc3439a139dd181277e1f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
