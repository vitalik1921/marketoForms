<?php

/**
 * Plugin Name: Marketo Forms
 * Plugin URI: http://site-builder.in.ua
 * Version: 1.0
 * Author: Vitaliy Shebela
 * Author URI: http://site-builder.in.ua
 */

namespace awis_marketo_forms;

if (!defined('WPINC')) exit; // Exit if accessed directly

//load plugin loader
require_once('inc/Plugin_Loader.php');

class MF_Loader extends \awis_marketo_forms\inc\Plugin_Loader
{
    function __construct($plugin_dir, $plugin_url)
    {
        parent::__construct($plugin_dir, $plugin_url);

        self::$plugin_admin = new \awis_marketo_forms\adm\MF_Admin();
        self::$plugin = new \awis_marketo_forms\MF_Plugin(0, 'Marketo Forms', '1.0.0');
        self::$plugin_public = new \awis_marketo_forms\pbl\MF_Public();
    }

    /**
     * Activation
     */
    public function activation()
    {
        if (!get_option('mf_forms_base_url')) {
            update_option('mf_forms_base_url', '//app-lon02.marketo.com');
        }
    }

    /**
     * Deactivation
     */
    public function deactivation()
    {
//      TODO: implementation
    }
}

$plugin_loader = new MF_Loader(plugin_dir_path(__FILE__), plugin_dir_url(__FILE__));

//register WP hooks
register_activation_hook(__FILE__, array($plugin_loader, 'activation'));
register_deactivation_hook(__FILE__, array($plugin_loader, 'deactivation'));

//wrapper for load more button
function marketo_display_form($form_id)
{
    $plugin = MF_Loader::getPlugin();
    $plugin->display_form($form_id);
}




