# Marketo Forms
Plugin allows to add Marketo forms (http://www.marketo.com/) to the site using shortcodes and function. Also it adds
useful classes for form fields.

## Installation
1. Copy to 'plugins' folder
2. Activate
3. Go to Settings -> Marketo Forms and add subscriber ID

##Usage
Before using you should open Settings -> Marketo Forms and enter your base URL and Subscriber ID. This information you
can get from Marketo, or you can extract it from generated code in Marketo back-end. It looks like this:

MktoForms2.loadForm("base url", "subscriber  id", $form_id, callback_function);

After that you can use shortcode to display Marketo from:

[marketo id=10]

where id - is form identificator

Also developers can use function to display forms:

marketo_display_form($form_id);

### Requirements
* WordPress 3.8.2 and higher
* WooCommerce 2.3.2 and higher

## Author

* Vitaliy Shebela (vitalik.privat@gmail.com)

## License
This file is part of Deployer.

Deployer is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Deployer is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Deployer.  If not, see <http://www.gnu.org/licenses/>.




