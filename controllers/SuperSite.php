<?php

namespace SDSS;

use SDSS\SuperAdmin; // Customise admin
use SDSS\CustomFields; // Register ACF fields
use SDSS\Enqueue; // Scripts/Styles
use SDSS\Helpers; // Helpers
use SDSS\SuperCodes; // Shortcodes
use SDSS\ScssCompiler; // Scss Compiler
use SDSS\FlexibleContent; // Flexible content looper
use SDSS\Block; // Flexible content block functions

class SuperSite
{

    public function __construct() {
        SuperAdmin::init(); // Initialise Admin customisations
        CustomFields::init(); // Initialise the Page Builder
        ScssCompiler::init(); // Initialise scss compiler
        Enqueue::init(); // Initialise scripts and styles enqueue
        SuperCodes::init(); // Initialise custom shortcodes
    }    
    
}