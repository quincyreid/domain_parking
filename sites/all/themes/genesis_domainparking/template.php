<?php
// $Id: template.php,v 1.10 2011/01/14 02:57:57 jmburnz Exp $

 function genesis_domainparking_preprocess_page(&$vars) {
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