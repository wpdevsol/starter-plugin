<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit_Wpappy_1_0_5
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wpappy_1_0_5\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wpappy_1_0_5\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Wpappy_1_0_5\\Admin' => __DIR__ . '/../..' . '/includes/Admin.php',
        'Wpappy_1_0_5\\Admin\\Notice' => __DIR__ . '/../..' . '/includes/Admin/Notice.php',
        'Wpappy_1_0_5\\Ajax' => __DIR__ . '/../..' . '/includes/Ajax.php',
        'Wpappy_1_0_5\\App' => __DIR__ . '/../..' . '/includes/App.php',
        'Wpappy_1_0_5\\Asset' => __DIR__ . '/../..' . '/includes/Asset.php',
        'Wpappy_1_0_5\\Core' => __DIR__ . '/../..' . '/includes/Core.php',
        'Wpappy_1_0_5\\Core\\Admin' => __DIR__ . '/../..' . '/includes/Core/Admin.php',
        'Wpappy_1_0_5\\Core\\Admin\\Notice' => __DIR__ . '/../..' . '/includes/Core/Admin/Notice.php',
        'Wpappy_1_0_5\\Core\\Asset' => __DIR__ . '/../..' . '/includes/Core/Asset.php',
        'Wpappy_1_0_5\\Core\\Debug' => __DIR__ . '/../..' . '/includes/Core/Debug.php',
        'Wpappy_1_0_5\\Core\\Debug\\Log' => __DIR__ . '/../..' . '/includes/Core/Debug/Log.php',
        'Wpappy_1_0_5\\Core\\FS' => __DIR__ . '/../..' . '/includes/Core/FS.php',
        'Wpappy_1_0_5\\Core\\Feature' => __DIR__ . '/../..' . '/includes/Core/Feature.php',
        'Wpappy_1_0_5\\Core\\Hook' => __DIR__ . '/../..' . '/includes/Core/Hook.php',
        'Wpappy_1_0_5\\Core\\Http' => __DIR__ . '/../..' . '/includes/Core/Http.php',
        'Wpappy_1_0_5\\Core\\Info' => __DIR__ . '/../..' . '/includes/Core/Info.php',
        'Wpappy_1_0_5\\Core\\Media' => __DIR__ . '/../..' . '/includes/Core/Media.php',
        'Wpappy_1_0_5\\Core\\Media\\Upload' => __DIR__ . '/../..' . '/includes/Core/Media/Upload.php',
        'Wpappy_1_0_5\\Core\\Type' => __DIR__ . '/../..' . '/includes/Core/Type.php',
        'Wpappy_1_0_5\\Core\\Type\\Str' => __DIR__ . '/../..' . '/includes/Core/Type/Str.php',
        'Wpappy_1_0_5\\Customizer' => __DIR__ . '/../..' . '/includes/Customizer.php',
        'Wpappy_1_0_5\\Customizer\\Context' => __DIR__ . '/../..' . '/includes/Customizer/Context.php',
        'Wpappy_1_0_5\\Customizer\\Control\\Alpha_Color' => __DIR__ . '/../..' . '/includes/Customizer/Control/Alpha_Color.php',
        'Wpappy_1_0_5\\Customizer\\Control\\Line' => __DIR__ . '/../..' . '/includes/Customizer/Control/Line.php',
        'Wpappy_1_0_5\\Customizer\\Control\\Notice' => __DIR__ . '/../..' . '/includes/Customizer/Control/Notice.php',
        'Wpappy_1_0_5\\Customizer\\Control\\Radio_Image' => __DIR__ . '/../..' . '/includes/Customizer/Control/Radio_Image.php',
        'Wpappy_1_0_5\\Customizer\\Section\\Link' => __DIR__ . '/../..' . '/includes/Customizer/Section/Link.php',
        'Wpappy_1_0_5\\Debug' => __DIR__ . '/../..' . '/includes/Debug.php',
        'Wpappy_1_0_5\\Debug\\Log' => __DIR__ . '/../..' . '/includes/Debug/Log.php',
        'Wpappy_1_0_5\\Feature' => __DIR__ . '/../..' . '/includes/Feature.php',
        'Wpappy_1_0_5\\Helper\\Featured' => __DIR__ . '/../..' . '/includes/Helper/Featured.php',
        'Wpappy_1_0_5\\Helper\\Single_Call' => __DIR__ . '/../..' . '/includes/Helper/Single_Call.php',
        'Wpappy_1_0_5\\Hook' => __DIR__ . '/../..' . '/includes/Hook.php',
        'Wpappy_1_0_5\\Http' => __DIR__ . '/../..' . '/includes/Http.php',
        'Wpappy_1_0_5\\I18n' => __DIR__ . '/../..' . '/includes/I18n.php',
        'Wpappy_1_0_5\\Info' => __DIR__ . '/../..' . '/includes/Info.php',
        'Wpappy_1_0_5\\Integration' => __DIR__ . '/../..' . '/includes/Integration.php',
        'Wpappy_1_0_5\\Integration\\ACF' => __DIR__ . '/../..' . '/includes/Integration/ACF.php',
        'Wpappy_1_0_5\\Integration\\ACF\\Block_Category' => __DIR__ . '/../..' . '/includes/Integration/ACF/Block_Category.php',
        'Wpappy_1_0_5\\Integration\\Plugin' => __DIR__ . '/../..' . '/includes/Integration/Plugin.php',
        'Wpappy_1_0_5\\Integration\\Polylang' => __DIR__ . '/../..' . '/includes/Integration/Polylang.php',
        'Wpappy_1_0_5\\Integration\\WC' => __DIR__ . '/../..' . '/includes/Integration/WC.php',
        'Wpappy_1_0_5\\Integration\\Yoast' => __DIR__ . '/../..' . '/includes/Integration/Yoast.php',
        'Wpappy_1_0_5\\Media' => __DIR__ . '/../..' . '/includes/Media.php',
        'Wpappy_1_0_5\\Media\\Upload' => __DIR__ . '/../..' . '/includes/Media/Upload.php',
        'Wpappy_1_0_5\\Nav_Menu' => __DIR__ . '/../..' . '/includes/Nav_Menu.php',
        'Wpappy_1_0_5\\Setting' => __DIR__ . '/../..' . '/includes/Setting.php',
        'Wpappy_1_0_5\\Setting\\Base' => __DIR__ . '/../..' . '/includes/Setting/Base.php',
        'Wpappy_1_0_5\\Setting\\Box' => __DIR__ . '/../..' . '/includes/Setting/Box.php',
        'Wpappy_1_0_5\\Setting\\Content' => __DIR__ . '/../..' . '/includes/Setting/Content.php',
        'Wpappy_1_0_5\\Setting\\Context' => __DIR__ . '/../..' . '/includes/Setting/Context.php',
        'Wpappy_1_0_5\\Setting\\Control' => __DIR__ . '/../..' . '/includes/Setting/Control.php',
        'Wpappy_1_0_5\\Setting\\Control\\Checkbox' => __DIR__ . '/../..' . '/includes/Setting/Control/Checkbox.php',
        'Wpappy_1_0_5\\Setting\\Control\\Control' => __DIR__ . '/../..' . '/includes/Setting/Control/Control.php',
        'Wpappy_1_0_5\\Setting\\Control\\Radio' => __DIR__ . '/../..' . '/includes/Setting/Control/Radio.php',
        'Wpappy_1_0_5\\Setting\\Control\\Select' => __DIR__ . '/../..' . '/includes/Setting/Control/Select.php',
        'Wpappy_1_0_5\\Setting\\Control\\Simple_Control' => __DIR__ . '/../..' . '/includes/Setting/Control/Simple_Control.php',
        'Wpappy_1_0_5\\Setting\\Control\\Text' => __DIR__ . '/../..' . '/includes/Setting/Control/Text.php',
        'Wpappy_1_0_5\\Setting\\Control\\Textarea' => __DIR__ . '/../..' . '/includes/Setting/Control/Textarea.php',
        'Wpappy_1_0_5\\Setting\\Handler' => __DIR__ . '/../..' . '/includes/Setting/Handler.php',
        'Wpappy_1_0_5\\Setting\\Page' => __DIR__ . '/../..' . '/includes/Setting/Page.php',
        'Wpappy_1_0_5\\Setting\\Setting' => __DIR__ . '/../..' . '/includes/Setting/Setting.php',
        'Wpappy_1_0_5\\Setting\\Storage' => __DIR__ . '/../..' . '/includes/Setting/Storage.php',
        'Wpappy_1_0_5\\Setting\\Sub_Tab' => __DIR__ . '/../..' . '/includes/Setting/Sub_Tab.php',
        'Wpappy_1_0_5\\Setting\\Submit_Btn' => __DIR__ . '/../..' . '/includes/Setting/Submit_Btn.php',
        'Wpappy_1_0_5\\Setting\\Tab' => __DIR__ . '/../..' . '/includes/Setting/Tab.php',
        'Wpappy_1_0_5\\Simpleton' => __DIR__ . '/../..' . '/includes/Simpleton.php',
        'Wpappy_1_0_5\\Template' => __DIR__ . '/../..' . '/includes/Template.php',
        'Wpappy_1_0_5\\Type' => __DIR__ . '/../..' . '/includes/Type.php',
        'Wpappy_1_0_5\\Type\\Arr' => __DIR__ . '/../..' . '/includes/Type/Arr.php',
        'Wpappy_1_0_5\\Type\\Str' => __DIR__ . '/../..' . '/includes/Type/Str.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit_Wpappy_1_0_5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit_Wpappy_1_0_5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit_Wpappy_1_0_5::$classMap;

        }, null, ClassLoader::class);
    }
}
