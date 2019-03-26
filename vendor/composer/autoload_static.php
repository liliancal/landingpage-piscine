<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7f49d9489e008b4ec820d0755edc73bb
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7f49d9489e008b4ec820d0755edc73bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7f49d9489e008b4ec820d0755edc73bb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
