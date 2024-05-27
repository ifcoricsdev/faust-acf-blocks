<?php
/**
 * Plugin Name: ACF CTA Block
 * Description: Custom compilation of Blocks using Advanced Custom Fields
 * Version: 1.0
 * Author: Rico Dadiz
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Include block registrations.
require_once plugin_dir_path(__FILE__) . 'blocks/index.php';