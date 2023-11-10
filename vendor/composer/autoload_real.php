<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitaf9aa460175a51a6c1e3071f22bd1c89
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitaf9aa460175a51a6c1e3071f22bd1c89', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitaf9aa460175a51a6c1e3071f22bd1c89', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitaf9aa460175a51a6c1e3071f22bd1c89::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
