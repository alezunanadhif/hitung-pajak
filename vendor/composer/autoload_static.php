<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5eb43f381014cedd8a8d6d355e29e1d8
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Calculate\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Calculate\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Calculate',
        ),
    );

    public static $classMap = array (
        'App\\Calculate\\AbstractCalculator' => __DIR__ . '/../..' . '/App/Calculate/AbstractCalculator.php',
        'App\\Calculate\\CalculatorInterface' => __DIR__ . '/../..' . '/App/Calculate/CalculatorInterface.php',
        'App\\Calculate\\FirstRuleCalculator' => __DIR__ . '/../..' . '/App/Calculate/FirstRuleCalculator.php',
        'App\\Calculate\\FourthRuleCalculator' => __DIR__ . '/../..' . '/App/Calculate/FourthRuleCalculator.php',
        'App\\Calculate\\PPH21Calculator' => __DIR__ . '/../..' . '/App/Calculate/PPH21Calculator.php',
        'App\\Calculate\\SecondRuleCalculator' => __DIR__ . '/../..' . '/App/Calculate/SecondRuleCalculator.php',
        'App\\Calculate\\ThirdRuleCalculator' => __DIR__ . '/../..' . '/App/Calculate/ThirdRuleCalculator.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5eb43f381014cedd8a8d6d355e29e1d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5eb43f381014cedd8a8d6d355e29e1d8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5eb43f381014cedd8a8d6d355e29e1d8::$classMap;

        }, null, ClassLoader::class);
    }
}
