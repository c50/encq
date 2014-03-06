<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

 // menus customization
 // - See more at: http://www.webmar.com.au/blog/how-create-responsive-mobile-menu-omega-subtheme
function encq_menu_tree__main_menu($variables){
   if (preg_match("/\bmenu-subnavigation\b/i", $variables['tree'])){
    return '<ul id="menu-navigation">' . $variables['tree'] . '</ul>';
  } else {
    return '<ul class="menu-subnavigation">' . $variables['tree'] . '</ul>';
  }
}
