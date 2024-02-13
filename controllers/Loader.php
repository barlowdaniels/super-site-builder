<?php

namespace SuperBuilder;

use SuperBuilder\Backend\CustomiseAdmin;
use SuperBuilder\Backend\RegisterDefaultNavMenus;
use SuperBuilder\Backend\DefineAcfOptionsPages;
use SuperBuilder\Backend\RegisterCustomFields;
use SuperBuilder\Frontend\ScssCompiler;
use SuperBuilder\Frontend\Enqueue;
use SuperBuilder\Frontend\HeaderBuilder;
use SuperBuilder\Frontend\SuperCodes;

class Loader
{

    public function __construct() {
        CustomiseAdmin::classInit();
        RegisterDefaultNavMenus::classInit();
        DefineAcfOptionsPages::classInit();
        RegisterCustomFields::classInit();
        ScssCompiler::classInit(); 
        Enqueue::classInit();
        HeaderBuilder::classInit();
        SuperCodes::classInit();
    }    
    
}