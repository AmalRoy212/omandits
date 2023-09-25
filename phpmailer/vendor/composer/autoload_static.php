<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit17acb25fad7c2e73689df559d093c116
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit17acb25fad7c2e73689df559d093c116::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit17acb25fad7c2e73689df559d093c116::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit17acb25fad7c2e73689df559d093c116::$classMap;

        }, null, ClassLoader::class);
    }
}