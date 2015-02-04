<?php

/**
 * @file
 * template.php
 *
 * This file should only contain light helper functions and stubs pointing to
 * other files containing more complex functions.
 *
 * The stubs should point to files within the `theme` folder named after the
 * function itself minus the theme prefix. If the stub contains a group of
 * functions, then please organize them so they are related in some way and name
 * the file appropriately to at least hint at what it contains.
 *
 * All [pre]process functions, theme functions and template implementations also
 * live in the 'theme' folder. This is a highly automated and complex system
 * designed to only load the necessary files when a given theme hook is invoked.
 * @see _bootstrap_theme()
 * @see theme/registry.inc
 *
 * Due to a bug in Drush, these includes must live inside the 'theme' folder
 * instead of something like 'includes'. If a module or theme has an 'includes'
 * folder, Drush will think it is trying to bootstrap core when it is invoked
 * from inside the particular extension's directory.
 * @see https://drupal.org/node/2102287
 */

/**
 * Implementation of hook_preprocess_node
 * 
 * @param type $variables
 */
function janssenpro_preprocess_node(&$variables) {
//echo 'preprocess node<br>';//exit;
  // Get a list of all the regions for this theme
  /*foreach (system_region_list($GLOBALS['theme']) as $region_key => $region_name) {

    // Get the content for each region and add it to the $region variable
    if ($blocks = block_get_blocks_by_region($region_key)) {
      $variables['region'][$region_key] = $blocks;
    }
    else {
      $variables['region'][$region_key] = array();
    }
  }*/
}



function janssenpro_preprocess_html(&$vars) {
  global $language;
  //echo '<pre>';print_r($vars);exit;
  $vars['classes_array'][] = "lepakshiarray";
  $vars['attributes_array']['data-id'] = 'dinesh';
  $vars['head_title_array']['title'] = 'dinesh';
  //echo '<pre>';print_r($vars);exit;
 // echo 'preprocess html<br>';//exit;
  /*if (!$vars['is_front']) {
    // Add unique classes for each page and website section
    $path = drupal_get_path_alias($_GET['q']);
    list($section, ) = explode('/', $path, 2);
    $body_classes[] = janssenpro_id_safe('page-' . $path);
    $body_classes[] = janssenpro_id_safe('section-' . $section);
  }
  else {
    $body_classes[] = janssenpro_id_safe('page-home');
  }
  foreach ($body_classes as $body_class) {
    array_push($vars['classes_array'], $body_class);
  }*/
}

function janssenpro_preprocess_page(&$vars) {
  global $language;
  $vars['head_title_array']['title'] = 'dinesh';
  //print_r(theme_get_suggestions(arg(), 'page'));
  print_r($vars['theme_hook_suggestions']);
  exit;
  //echo '<pre>';print_r($vars);exit;
  //echo 'preprocess page<br>';//exit;
}

function janssenpro_id_safe($string) {
  // Replace with dashes anything that isn't A-Z, numbers, dashes, or underscores.
  $string = strtolower(preg_replace('/[^a-zA-Z0-9_-]+/', '-', $string));
  // If the first character is not a-z, add 'n' in front.
  if ($string{0} == '-') {
    $string = 'id' . $string;
  }
  return $string;
}


