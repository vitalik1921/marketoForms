<?php

namespace awis_marketo_forms;

class MF_Plugin extends \awis_marketo_forms\inc\Plugin
{
    protected $base_url;
    protected $subscriber_id;

    function __construct($id, $name, $version)
    {
        parent::__construct($id, $name, $version);

        $this->base_url = get_option('mf_forms_base_url');
        $this->subscriber_id = get_option('mf_forms_subscriber_id');

        //notice user if not enough info for marketo
        add_action('admin_notices', array($this, 'display_admin_message'));

        //add shortcode
        add_shortcode('marketo', array($this, 'display_form_shortcode'));
    }

    /**
     *  Display admin notice if there is not enough info
     */
    function display_admin_message()
    {

        if (!$this->base_url) {
            echo '<div id="message" class="error fade"><p><strong>Marketo Forms: Marketo base url is not defined.</strong></p></div>';
        }

        if (!$this->subscriber_id) {
            echo '<div id="message" class="error fade"><p><strong>Marketo Forms: Marketo subscriber ID is not defined.</strong></p></div>';
        }
    }

    /**
     *  Display Marketo From
     * @param $form_id - Marketo identificator of the form
     */
    function display_form($form_id)
    {
        if ((!$this->base_url) || (!$this->subscriber_id)) {
            return;
        }

        ?>
        <form id="mktoForm_<?php echo $form_id; ?>"></form>
        <script>
            MktoForms2.loadForm("<?php echo $this->base_url ?>", "<?php echo $this->subscriber_id ?>", <?php echo $form_id; ?>, function () {
                jQuery(window).trigger("marketo_form_loaded")
            });
        </script>
    <?php
    }

    /**
     * Shortcode for Marketo froms
     * @param $atts - we are expecting form ID here
     */
    function display_form_shortcode($atts)
    {
        $attributes = shortcode_atts(array(
            'id' => '',
        ), $atts);

        if ($form_id = $attributes['id']) {
            $this->display_form($form_id);
        }
    }
}