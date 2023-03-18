<?php

/*
Plugin Name:  WPSST Google Translate Button
Plugin URI:   https://www.syriasmart.net
Description:  Use this ShortCode "[translate_dropdown]" for button. 
Version:      1.0
Author:       Syria Smart Technology 
Author URI:   https://www.syriasmart.net
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wpsst-google-translate-button
Domain Path:  /languages
*/

function add_translate_dropdown_shortcode()
{
    ob_start();
    echo '<div id="google_translate_element"></div>';
    echo '<script type="text/javascript">
          function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: \'auto\', includedLanguages: \'ar,en,fr,es\'}, \'google_translate_element\');
          }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>';
    $content = ob_get_clean();
    return $content;
}
add_shortcode('translate_dropdown', 'add_translate_dropdown_shortcode');

?>