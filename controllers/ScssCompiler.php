<?php

namespace SDSS;

class ScssCompiler
{
    
    public static function init() {
        add_action('init', [self::class, 'pluginCompile'], 20);
        add_action('init', [self::class, 'themeCompile'], 30);
    }
    
    public static function themeCompile() {
        if ( COMPILE_SCSS == true ) {
            self::updateScss( 'display', get_stylesheet_directory() . '/_src/scss/' );
             self::updateScss( 'button_settings', get_stylesheet_directory() . '/_src/scss/' );
            self::compileScss(
                get_stylesheet_directory() . '/',
                '_src/scss/',
                '_src/scss/main.scss',
                'assets/css/theme.css'
            );
        }
    }
    
    public static function pluginCompile() {
        // If it's the site colours form being saved
//        if (isset($_POST['acf']['field_6540e7a0716d3'])) {
            self::updateScss('display', BASE_DIR . '_src/scss/front/');
            self::updateScss('button_settings', BASE_DIR . '_src/scss/front/');
            
            self::compileScss(
                BASE_DIR,
                '_src/scss/front',
                '_src/scss/front/main.scss', 
                'assets/css/sb-front.css'
            );
            self::compileScss(
                BASE_DIR,
                '_src/scss/admin',
                '_src/scss/admin/main.scss',
                'assets/css/sb-admin.css'
            );
//        }
    }

    public static function updateScss($what, $where) {
        $file = $where . '_' . $what . '.scss';
        if (file_exists($file)) {
            unlink($file);
        }
        $data = get_field('super_site_' . $what, 'options');
        if($data) {
            $content = '';
            foreach($data as $key => $value) {
                if(is_array($value)) {
                    foreach($value as $subKey => $subValue) {
                        if(is_array($subValue)) {
                            foreach($subValue as $subSubKey => $subSubValue) {
                                $content .= '$' . $what . '_' . $key . '_' . $subKey . '_' . $subSubKey . ': ' . $subSubValue . '; ';
                            }
                        } else {
                            $content .= '$' . $what . '_' . $key . '_' . $subKey . ': ' . $subValue . '; ';
                        }
                    }
                } else {
                    $content .= '$' . $what . '_' . $key . ': ' . $value . '; ';
                }
            }
            file_put_contents($file, $content);
        }

    }    
    
    public static function compileScss($baseDir, $importPath, $srcFile, $outputFile) {
        $compiler = new \ScssPhp\ScssPhp\Compiler();
        $compiler->addImportPath($baseDir . $importPath . '/');

        $scss = file_get_contents($baseDir . $srcFile);
        
        file_put_contents(
            $baseDir . $outputFile, // output file path
            $compiler->compile($scss) // compiled css
        );

    }
    
}