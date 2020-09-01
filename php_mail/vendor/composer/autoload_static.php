<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit25871cc51727603182f04b6f67494f53
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit25871cc51727603182f04b6f67494f53::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit25871cc51727603182f04b6f67494f53::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
