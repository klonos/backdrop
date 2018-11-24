<?php
 /**
 * @file
 * Theme setting file for the test_theme theme.
 */
 /**
 * Implements hook_form_FORM_ID_alter().
 */
$form['test_theme_checkbox'] = array(
  '#type' => 'checkbox',
  '#title' => 'Test theme checkbox',
  '#default_value' => theme_get_setting('test_theme_checkbox', 'test_theme'),
);
 // Force the form to be cached so we can test that this file is properly
// loaded and the custom submit handler is properly called even on a cached
// form build.
$form_state['cache'] = TRUE;
