<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit823c93f682c8a13e39c299e263851be0
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wpappy_1_0_6\\' => 13,
        ),
        'M' => 
        array (
            'My_Plugin\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wpappy_1_0_6\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpappy/wpappy/includes',
        ),
        'My_Plugin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'My_Plugin\\Config' => __DIR__ . '/../..' . '/includes/Config.php',
        'My_Plugin\\Setting' => __DIR__ . '/../..' . '/includes/Setting.php',
        'My_Plugin\\Setting\\General' => __DIR__ . '/../..' . '/includes/Setting/General.php',
        'My_Plugin\\Setup' => __DIR__ . '/../..' . '/includes/Setup.php',
        'My_Plugin\\Singular' => __DIR__ . '/../..' . '/includes/Singular.php',
        'Wpappy_1_0_6\\Admin' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Admin.php',
        'Wpappy_1_0_6\\Admin\\Notice' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Admin/Notice.php',
        'Wpappy_1_0_6\\Ajax' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Ajax.php',
        'Wpappy_1_0_6\\App' => __DIR__ . '/..' . '/wpappy/wpappy/includes/App.php',
        'Wpappy_1_0_6\\Asset' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Asset.php',
        'Wpappy_1_0_6\\Core' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Core.php',
        'Wpappy_1_0_6\\Core\\Admin' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Core/Admin.php',
        'Wpappy_1_0_6\\Core\\Admin\\Notice' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Core/Admin/Notice.php',
        'Wpappy_1_0_6\\Core\\Asset' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Core/Asset.php',
        'Wpappy_1_0_6\\Core\\Debug' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Core/Debug.php',
        'Wpappy_1_0_6\\Core\\Debug\\Log' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Core/Debug/Log.php',
        'Wpappy_1_0_6\\Core\\FS' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Core/FS.php',
        'Wpappy_1_0_6\\Core\\Feature' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Core/Feature.php',
        'Wpappy_1_0_6\\Core\\Hook' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Core/Hook.php',
        'Wpappy_1_0_6\\Core\\Http' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Core/Http.php',
        'Wpappy_1_0_6\\Core\\Info' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Core/Info.php',
        'Wpappy_1_0_6\\Core\\Media' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Core/Media.php',
        'Wpappy_1_0_6\\Core\\Media\\Upload' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Core/Media/Upload.php',
        'Wpappy_1_0_6\\Core\\Type' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Core/Type.php',
        'Wpappy_1_0_6\\Core\\Type\\Str' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Core/Type/Str.php',
        'Wpappy_1_0_6\\Customizer' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Customizer.php',
        'Wpappy_1_0_6\\Customizer\\Context' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Customizer/Context.php',
        'Wpappy_1_0_6\\Customizer\\Control\\Alpha_Color' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Customizer/Control/Alpha_Color.php',
        'Wpappy_1_0_6\\Customizer\\Control\\Line' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Customizer/Control/Line.php',
        'Wpappy_1_0_6\\Customizer\\Control\\Notice' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Customizer/Control/Notice.php',
        'Wpappy_1_0_6\\Customizer\\Control\\Radio_Image' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Customizer/Control/Radio_Image.php',
        'Wpappy_1_0_6\\Customizer\\Section\\Link' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Customizer/Section/Link.php',
        'Wpappy_1_0_6\\Debug' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Debug.php',
        'Wpappy_1_0_6\\Debug\\Log' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Debug/Log.php',
        'Wpappy_1_0_6\\Feature' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Feature.php',
        'Wpappy_1_0_6\\Helper\\Featured' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Helper/Featured.php',
        'Wpappy_1_0_6\\Helper\\Single_Call' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Helper/Single_Call.php',
        'Wpappy_1_0_6\\Hook' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Hook.php',
        'Wpappy_1_0_6\\Http' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Http.php',
        'Wpappy_1_0_6\\I18n' => __DIR__ . '/..' . '/wpappy/wpappy/includes/I18n.php',
        'Wpappy_1_0_6\\Info' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Info.php',
        'Wpappy_1_0_6\\Integration' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Integration.php',
        'Wpappy_1_0_6\\Integration\\ACF' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Integration/ACF.php',
        'Wpappy_1_0_6\\Integration\\ACF\\Block_Category' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Integration/ACF/Block_Category.php',
        'Wpappy_1_0_6\\Integration\\Plugin' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Integration/Plugin.php',
        'Wpappy_1_0_6\\Integration\\Polylang' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Integration/Polylang.php',
        'Wpappy_1_0_6\\Integration\\WC' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Integration/WC.php',
        'Wpappy_1_0_6\\Integration\\Yoast' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Integration/Yoast.php',
        'Wpappy_1_0_6\\Media' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Media.php',
        'Wpappy_1_0_6\\Media\\Upload' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Media/Upload.php',
        'Wpappy_1_0_6\\Nav_Menu' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Nav_Menu.php',
        'Wpappy_1_0_6\\Setting' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Setting.php',
        'Wpappy_1_0_6\\Setting\\Base' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Setting/Base.php',
        'Wpappy_1_0_6\\Setting\\Box' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Setting/Box.php',
        'Wpappy_1_0_6\\Setting\\Content' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Setting/Content.php',
        'Wpappy_1_0_6\\Setting\\Context' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Setting/Context.php',
        'Wpappy_1_0_6\\Setting\\Control' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Setting/Control.php',
        'Wpappy_1_0_6\\Setting\\Control\\Checkbox' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Setting/Control/Checkbox.php',
        'Wpappy_1_0_6\\Setting\\Control\\Control' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Setting/Control/Control.php',
        'Wpappy_1_0_6\\Setting\\Control\\Radio' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Setting/Control/Radio.php',
        'Wpappy_1_0_6\\Setting\\Control\\Select' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Setting/Control/Select.php',
        'Wpappy_1_0_6\\Setting\\Control\\Simple_Control' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Setting/Control/Simple_Control.php',
        'Wpappy_1_0_6\\Setting\\Control\\Text' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Setting/Control/Text.php',
        'Wpappy_1_0_6\\Setting\\Control\\Textarea' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Setting/Control/Textarea.php',
        'Wpappy_1_0_6\\Setting\\Handler' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Setting/Handler.php',
        'Wpappy_1_0_6\\Setting\\Page' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Setting/Page.php',
        'Wpappy_1_0_6\\Setting\\Setting' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Setting/Setting.php',
        'Wpappy_1_0_6\\Setting\\Storage' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Setting/Storage.php',
        'Wpappy_1_0_6\\Setting\\Sub_Tab' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Setting/Sub_Tab.php',
        'Wpappy_1_0_6\\Setting\\Submit_Btn' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Setting/Submit_Btn.php',
        'Wpappy_1_0_6\\Setting\\Tab' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Setting/Tab.php',
        'Wpappy_1_0_6\\Simpleton' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Simpleton.php',
        'Wpappy_1_0_6\\Template' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Template.php',
        'Wpappy_1_0_6\\Type' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Type.php',
        'Wpappy_1_0_6\\Type\\Arr' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Type/Arr.php',
        'Wpappy_1_0_6\\Type\\Str' => __DIR__ . '/..' . '/wpappy/wpappy/includes/Type/Str.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit823c93f682c8a13e39c299e263851be0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit823c93f682c8a13e39c299e263851be0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit823c93f682c8a13e39c299e263851be0::$classMap;

        }, null, ClassLoader::class);
    }
}
