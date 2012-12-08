<?php
// $Id: template.php,v 1.10 2011/01/14 02:57:57 jmburnz Exp $

/**
 * Preprocess and Process Functions SEE: http://drupal.org/node/254940#variables-processor
 * 1. Rename each function to match your subthemes name,
 *    e.g. if you name your theme "themeName" then the function
 *    name will be "themeName_preprocess_hook". Tip - you can
 *    search/replace on "genesis_mytheme".
 * 2. Uncomment the required function to use.
 */

/**
 * Override or insert variables into all templates.
 */

 function genesis_mytheme_preprocess_page(&$vars) {
   global $theme;
   // Set variables for the logo and site_name.
   if ($vars['logo']) {
     $vars['site_logo'] = '<a href="' . $vars['front_page'] . '" title="' . t('Home page') . '" rel="home"><img src="' . $vars['logo'] . '" alt="' . $vars['site_name'] . ' ' . t('logo') . '" /></a>';
   }
   if ($vars['site_name']) {
     $vars['site_name'] = $_SERVER['SERVER_NAME'];
   }
   // Set variables for the primary and secondary links.
   $vars['main_menu_links'] = theme('links__system_main_menu', array('links' => $vars['main_menu'], 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'clearfix')), 'heading' => t('Main menu')));
   $vars['secondary_menu_links'] = theme('links__system_secondary_menu', array('links' => $vars['secondary_menu'], 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'clearfix')), 'heading' => t('Secondary menu'))); 
 }
 
 


/*function genesis_mytheme_preprocess_page(&$vars) {
  dpm($vars);
  $variables['site_name'] = 'site_name';
  $request_path = variable_get($_SERVER['site_name']);
}
*/

/* -- Delete this line if you want to use these functions
function genesis_mytheme_process(&$vars, $hook) {
}
// */

/**
 * Override or insert variables into the html templates.
 */
/* -- Delete this line if you want to use these functions
function genesis_mytheme_preprocess_html(&$vars) {
  // Uncomment the folowing line to add a conditional stylesheet for IE 7 or less.
  // drupal_add_css(path_to_theme() . '/css/ie/ie-lte-7.css', array('weight' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
}
function genesis_mytheme_process_html(&$vars) {
}
// */

/**
 * Override or insert variables into the page templates.
 */
/* -- Delete this line if you want to use these functions
function genesis_mytheme_preprocess_page(&$vars) {
}
function genesis_mytheme_process_page(&$vars) {
}
// */

/**
 * Override or insert variables into the node templates.
 */
/* -- Delete this line if you want to use these functions
function genesis_SUBTHEME_preprocess_node(&$vars) {
}
function genesis_SUBTHEME_process_node(&$vars) {
}
// */

/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function genesis_SUBTHEME_preprocess_comment(&$vars) {
}
function genesis_SUBTHEME_process_comment(&$vars) {
}
// */

/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function genesis_SUBTHEME_preprocess_block(&$vars) {
}
function genesis_SUBTHEME_process_block(&$vars) {
}
// */
