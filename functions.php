<?php

define('THEME_PATH', get_template_directory_uri());
define('HOME_URL', get_home_url());

function favicon()
{
  echo '<link rel="icon" type="image/png" href="' . THEME_PATH . '/assets/img/favicons/favicon-16x16.png' . '">' .
    '<link rel="icon" type="image/ico" href="' . THEME_PATH . '/assets/img/favicons/favicon.ico' . '">' .
    '<link rel="apple-touch-icon-precomposed" type="image/png" href="' . THEME_PATH . '/assets/img/favicons/favicon-16x16.png' . '">' .
    '<link rel="apple-touch-icon" type="image/png" href="' . THEME_PATH . '/assets/img/favicons/favicon-32x32.png' . '">';
}
add_action('wp_head', 'favicon');
add_action('admin_head', 'favicon');
