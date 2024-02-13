<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit25ab77d484736083ab199301e4db5dc6
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SuperBuilder\\' => 13,
            'ScssPhp\\ScssPhp\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SuperBuilder\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
        'ScssPhp\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/scssphp/scssphp/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ScssPhp\\ScssPhp\\Base\\Range' => __DIR__ . '/..' . '/scssphp/scssphp/src/Base/Range.php',
        'ScssPhp\\ScssPhp\\Block' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block.php',
        'ScssPhp\\ScssPhp\\Block\\AtRootBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/AtRootBlock.php',
        'ScssPhp\\ScssPhp\\Block\\CallableBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/CallableBlock.php',
        'ScssPhp\\ScssPhp\\Block\\ContentBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/ContentBlock.php',
        'ScssPhp\\ScssPhp\\Block\\DirectiveBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/DirectiveBlock.php',
        'ScssPhp\\ScssPhp\\Block\\EachBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/EachBlock.php',
        'ScssPhp\\ScssPhp\\Block\\ElseBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/ElseBlock.php',
        'ScssPhp\\ScssPhp\\Block\\ElseifBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/ElseifBlock.php',
        'ScssPhp\\ScssPhp\\Block\\ForBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/ForBlock.php',
        'ScssPhp\\ScssPhp\\Block\\IfBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/IfBlock.php',
        'ScssPhp\\ScssPhp\\Block\\MediaBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/MediaBlock.php',
        'ScssPhp\\ScssPhp\\Block\\NestedPropertyBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/NestedPropertyBlock.php',
        'ScssPhp\\ScssPhp\\Block\\WhileBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/WhileBlock.php',
        'ScssPhp\\ScssPhp\\Cache' => __DIR__ . '/..' . '/scssphp/scssphp/src/Cache.php',
        'ScssPhp\\ScssPhp\\Colors' => __DIR__ . '/..' . '/scssphp/scssphp/src/Colors.php',
        'ScssPhp\\ScssPhp\\CompilationResult' => __DIR__ . '/..' . '/scssphp/scssphp/src/CompilationResult.php',
        'ScssPhp\\ScssPhp\\Compiler' => __DIR__ . '/..' . '/scssphp/scssphp/src/Compiler.php',
        'ScssPhp\\ScssPhp\\Compiler\\CachedResult' => __DIR__ . '/..' . '/scssphp/scssphp/src/Compiler/CachedResult.php',
        'ScssPhp\\ScssPhp\\Compiler\\Environment' => __DIR__ . '/..' . '/scssphp/scssphp/src/Compiler/Environment.php',
        'ScssPhp\\ScssPhp\\Exception\\CompilerException' => __DIR__ . '/..' . '/scssphp/scssphp/src/Exception/CompilerException.php',
        'ScssPhp\\ScssPhp\\Exception\\ParserException' => __DIR__ . '/..' . '/scssphp/scssphp/src/Exception/ParserException.php',
        'ScssPhp\\ScssPhp\\Exception\\RangeException' => __DIR__ . '/..' . '/scssphp/scssphp/src/Exception/RangeException.php',
        'ScssPhp\\ScssPhp\\Exception\\SassException' => __DIR__ . '/..' . '/scssphp/scssphp/src/Exception/SassException.php',
        'ScssPhp\\ScssPhp\\Exception\\SassScriptException' => __DIR__ . '/..' . '/scssphp/scssphp/src/Exception/SassScriptException.php',
        'ScssPhp\\ScssPhp\\Exception\\ServerException' => __DIR__ . '/..' . '/scssphp/scssphp/src/Exception/ServerException.php',
        'ScssPhp\\ScssPhp\\Formatter' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter.php',
        'ScssPhp\\ScssPhp\\Formatter\\Compact' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter/Compact.php',
        'ScssPhp\\ScssPhp\\Formatter\\Compressed' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter/Compressed.php',
        'ScssPhp\\ScssPhp\\Formatter\\Crunched' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter/Crunched.php',
        'ScssPhp\\ScssPhp\\Formatter\\Debug' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter/Debug.php',
        'ScssPhp\\ScssPhp\\Formatter\\Expanded' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter/Expanded.php',
        'ScssPhp\\ScssPhp\\Formatter\\Nested' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter/Nested.php',
        'ScssPhp\\ScssPhp\\Formatter\\OutputBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter/OutputBlock.php',
        'ScssPhp\\ScssPhp\\Logger\\LoggerInterface' => __DIR__ . '/..' . '/scssphp/scssphp/src/Logger/LoggerInterface.php',
        'ScssPhp\\ScssPhp\\Logger\\QuietLogger' => __DIR__ . '/..' . '/scssphp/scssphp/src/Logger/QuietLogger.php',
        'ScssPhp\\ScssPhp\\Logger\\StreamLogger' => __DIR__ . '/..' . '/scssphp/scssphp/src/Logger/StreamLogger.php',
        'ScssPhp\\ScssPhp\\Node' => __DIR__ . '/..' . '/scssphp/scssphp/src/Node.php',
        'ScssPhp\\ScssPhp\\Node\\Number' => __DIR__ . '/..' . '/scssphp/scssphp/src/Node/Number.php',
        'ScssPhp\\ScssPhp\\OutputStyle' => __DIR__ . '/..' . '/scssphp/scssphp/src/OutputStyle.php',
        'ScssPhp\\ScssPhp\\Parser' => __DIR__ . '/..' . '/scssphp/scssphp/src/Parser.php',
        'ScssPhp\\ScssPhp\\SourceMap\\Base64' => __DIR__ . '/..' . '/scssphp/scssphp/src/SourceMap/Base64.php',
        'ScssPhp\\ScssPhp\\SourceMap\\Base64VLQ' => __DIR__ . '/..' . '/scssphp/scssphp/src/SourceMap/Base64VLQ.php',
        'ScssPhp\\ScssPhp\\SourceMap\\SourceMapGenerator' => __DIR__ . '/..' . '/scssphp/scssphp/src/SourceMap/SourceMapGenerator.php',
        'ScssPhp\\ScssPhp\\Type' => __DIR__ . '/..' . '/scssphp/scssphp/src/Type.php',
        'ScssPhp\\ScssPhp\\Util' => __DIR__ . '/..' . '/scssphp/scssphp/src/Util.php',
        'ScssPhp\\ScssPhp\\Util\\Path' => __DIR__ . '/..' . '/scssphp/scssphp/src/Util/Path.php',
        'ScssPhp\\ScssPhp\\ValueConverter' => __DIR__ . '/..' . '/scssphp/scssphp/src/ValueConverter.php',
        'ScssPhp\\ScssPhp\\Version' => __DIR__ . '/..' . '/scssphp/scssphp/src/Version.php',
        'ScssPhp\\ScssPhp\\Warn' => __DIR__ . '/..' . '/scssphp/scssphp/src/Warn.php',
        'SuperBuilder\\Backend\\CustomiseAdmin' => __DIR__ . '/../..' . '/Controllers/Backend/CustomiseAdmin.php',
        'SuperBuilder\\Backend\\DefineAcfOptionsPages' => __DIR__ . '/../..' . '/Controllers/Backend/DefineAcfOptionsPages.php',
        'SuperBuilder\\Backend\\RegisterCustomFields' => __DIR__ . '/../..' . '/Controllers/Backend/RegisterCustomFields.php',
        'SuperBuilder\\Frontend\\Enqueue' => __DIR__ . '/../..' . '/Controllers/Frontend/Enqueue.php',
        'SuperBuilder\\Frontend\\FlexibleContentBlock' => __DIR__ . '/../..' . '/Controllers/Frontend/FlexibleContentBlock.php',
        'SuperBuilder\\Frontend\\FlexibleContentLooper' => __DIR__ . '/../..' . '/Controllers/Frontend/FlexibleContentLooper.php',
        'SuperBuilder\\Frontend\\ScssCompiler' => __DIR__ . '/../..' . '/Controllers/Frontend/ScssCompiler.php',
        'SuperBuilder\\Frontend\\SuperCodes' => __DIR__ . '/../..' . '/Controllers/Frontend/SuperCodes.php',
        'SuperBuilder\\Helpers\\Helper' => __DIR__ . '/../..' . '/Controllers/Helpers/Helper.php',
        'SuperBuilder\\Loader' => __DIR__ . '/../..' . '/Controllers/Loader.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit25ab77d484736083ab199301e4db5dc6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit25ab77d484736083ab199301e4db5dc6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit25ab77d484736083ab199301e4db5dc6::$classMap;

        }, null, ClassLoader::class);
    }
}
