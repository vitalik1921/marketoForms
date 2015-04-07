<?php

namespace awis_marketo_forms\adm;

class MF_Admin extends \awis_marketo_forms\inc\Plugin_Admin
{
    /**
     * Add plugin styles/scripts
     * @return mixed
     */
    function add_enqueue_scripts()
    {
        //we do nothing here
    }

    /**
     * @return mixed
     */
    function register_admin_settings()
    {
        //register fields
        register_setting('mf-settings-group', 'mf_forms_base_url');
        register_setting('mf-settings-group', 'mf_forms_subscriber_id');
    }

    /**
     * Add admin menu items
     * @return mixed
     */
    function add_admin_items()
    {
        // Add a new submenu under Options:
        add_options_page('Marketo Forms Options', 'Marketo Forms', 'manage_options', 'mf_options', array($this, 'mf_options_page'));
    }

    /**
     *  Marketo Forms Options
     */
    function mf_options_page()
    {

        ?>

        <div class="wrap">
            <h2>Marketo Froms</h2>

            <form method="post" action="options.php">
                <?php settings_fields('mf-settings-group'); ?>

                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Base Url</th>
                        <td><input type="text" name="mf_forms_base_url"
                                   value="<?php echo get_option('mf_forms_base_url'); ?>"/></td>
                    </tr>

                    <tr valign="top">
                        <th scope="row">Subscriber ID</th>
                        <td><input type="text" name="mf_forms_subscriber_id"
                                   value="<?php echo get_option('mf_forms_subscriber_id'); ?>"/></td>
                    </tr>
                </table>

                <p class="submit">
                    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>"/>
                </p>
            </form>
        </div>
    <?php
    }
}