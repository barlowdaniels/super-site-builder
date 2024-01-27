<?php
/*
Plugin Name: Super Site
Description: A plugin for building WordPress websites with ACF at superhero speeds.
Version: 1.0
Author: Super Digital
*/

// Define base
if (!defined('BASE_DIR')) {
    define('BASE_DIR', plugin_dir_path(__FILE__));
}
if (!defined('BASE_URL')) {
    define('BASE_URL', plugin_dir_url(__FILE__));
}

// Autoload composer packages
require_once 'vendor/autoload.php';

$superSite = new SDSS\SuperSite();