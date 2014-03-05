<?php

/**
 * @file
 * Contents of omega_preprocess_maintenance_page().
 */


// enable/disable optional CSS files
{
  drupal_add_css(drupal_get_path('theme', 'encq') . '/css/global.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE, 'weight', -100));
}
