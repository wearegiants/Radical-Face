<?php

$settings = array(

  'available_scripts'      => array(
    'jquery-g'             => array('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js','1.11.1'),
    'plugins'              => array('/assets/js/vendor.min.js'),
    'scripts'              => array('/assets/js/main.min.js'),
  ),

  'default_scripts'        => array(
    'plugins',
    'scripts',
  ),

  'available_stylesheets'  => array(
    'theme'                => array('/assets/css/main.css'),
  ),

  'default_stylesheets'    => array(
    'vendor',
    'theme',
  ),

  'deregister_scripts' => array('','l10n'),

);

Themewrangler::set_defaults( $settings );

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
  wp_deregister_script('jquery');
  wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", array(), '1.0.0', false);
  wp_enqueue_script('jquery');
}