=== Plugin Name ===
Contributors: https://profiles.wordpress.org/vitalik1921
Donate link: http://site-builder.in.ua/
Tags: marketing, marketo, marketo, forms
Requires at least: 3.6
Tested up to: 4.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugin allows to add Marketo forms (http://www.marketo.com/) to the site using shortcodes and function. Also it makes
forms responsive, and it resets form styles.

== Description ==

Before using you should open Settings -> Marketo Forms and enter your base URL and Subscriber ID. This information you
can get from Marketo, or you can extract it from generated code in Marketo back-end. It looks like this:

MktoForms2.loadForm("base url", "subscriber  id", $form_id, callback_function);

After that you can use shortcode to display Marketo from:

[marketo id=10]

where id - is form identificator

Also developers can use function to display forms:

marketo_display_form($form_id);

== Installation ==

1. Extract archive to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to Settings -> Marketo Forms and enter your base URL and Subscriber ID
