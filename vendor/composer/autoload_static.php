<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitDontChange
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\DependencyInjection\\' => 38,
            'Symfony\\Component\\Debug\\' => 24,
            'Symfony\\Component\\Console\\' => 26,
            'Symfony\\Component\\Config\\' => 25,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PrivateBin\\' => 11,
            'Phplint\\' => 8,
            'PDepend\\' => 8,
        ),
        'J' => 
        array (
            'Jdenticon\\' => 10,
        ),
        'I' => 
        array (
            'Identicon\\' => 10,
            'IPLib\\' => 6,
        ),
        'C' => 
        array (
            'Composer\\XdebugHandler\\' => 23,
            'Composer\\Pcre\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\DependencyInjection\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/dependency-injection',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Symfony\\Component\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/config',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'PrivateBin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
        'Phplint\\' => 
        array (
            0 => __DIR__ . '/..' . '/phplint/phplint/Phplint',
        ),
        'PDepend\\' => 
        array (
            0 => __DIR__ . '/..' . '/pdepend/pdepend/src/main/php/PDepend',
        ),
        'Jdenticon\\' => 
        array (
            0 => __DIR__ . '/..' . '/jdenticon/jdenticon/src',
        ),
        'Identicon\\' => 
        array (
            0 => __DIR__ . '/..' . '/yzalis/identicon/src/Identicon',
        ),
        'IPLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/mlocati/ip-lib/src',
        ),
        'Composer\\XdebugHandler\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/xdebug-handler/src',
        ),
        'Composer\\Pcre\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/pcre/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPMD\\' => 
            array (
                0 => __DIR__ . '/..' . '/phpmd/phpmd/src/main/php',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitDontChange::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitDontChange::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitDontChange::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitDontChange::$classMap;

        }, null, ClassLoader::class);
    }
}
