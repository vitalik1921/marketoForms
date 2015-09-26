<?php

namespace awis_marketo_forms\pbl;

use awis_marketo_forms\MF_Loader;

class MF_Public extends \awis_marketo_forms\inc\Plugin_Public
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Add plugin styles/scripts
     * @return mixed
     */
    function add_enqueue_scripts()
    {
        wp_enqueue_style('marketo-forms', MF_Loader::getPluginUrl() . 'pbl/css/mf_plugin.css');
        wp_enqueue_script('marketo-forms', MF_Loader::getPluginUrl() . 'pbl/js/mf_plugin.js', array('jquery'));
        wp_enqueue_script('marketoForms2', '//app-lon02.marketo.com/js/forms2/js/forms2.min.js');
    }
}
