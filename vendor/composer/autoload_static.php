<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6b06aba9d921e5fcae7bf6a798390a11
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6b06aba9d921e5fcae7bf6a798390a11::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6b06aba9d921e5fcae7bf6a798390a11::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6b06aba9d921e5fcae7bf6a798390a11::$classMap;

        }, null, ClassLoader::class);
    }
}
