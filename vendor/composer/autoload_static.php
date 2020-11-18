<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64a9ca73da5eb7e4484f7b9b5f6a9adc
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'SebastianBergmann\\Template\\Exception' => __DIR__ . '/..' . '/phpunit/php-text-template/src/exceptions/Exception.php',
        'SebastianBergmann\\Template\\InvalidArgumentException' => __DIR__ . '/..' . '/phpunit/php-text-template/src/exceptions/InvalidArgumentException.php',
        'SebastianBergmann\\Template\\RuntimeException' => __DIR__ . '/..' . '/phpunit/php-text-template/src/exceptions/RuntimeException.php',
        'SebastianBergmann\\Template\\Template' => __DIR__ . '/..' . '/phpunit/php-text-template/src/Template.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit64a9ca73da5eb7e4484f7b9b5f6a9adc::$classMap;

        }, null, ClassLoader::class);
    }
}
