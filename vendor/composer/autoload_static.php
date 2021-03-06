<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc467a2e8d346043e0196b62abd04d45
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc467a2e8d346043e0196b62abd04d45::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc467a2e8d346043e0196b62abd04d45::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdc467a2e8d346043e0196b62abd04d45::$classMap;

        }, null, ClassLoader::class);
    }
}
