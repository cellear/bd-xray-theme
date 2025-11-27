<?php
/**
 * @file
 * Theme functions for Backdrop Outlined theme.
 */

/**
 * Preprocess variables for page.tpl.php
 */
function backdrop_outlined_preprocess_page(&$variables) {
  // Add body classes
  $variables['classes'][] = 'backdrop-outlined';
}

/**
 * Preprocess variables for block.tpl.php
 */
function backdrop_outlined_preprocess_block(&$variables) {
  // Blocks in Backdrop already have their subject in $variables['block']->subject
  // No additional preprocessing needed for this theme
}

/**
 * Preprocess variables for node.tpl.php
 */
function backdrop_outlined_preprocess_node(&$variables) {
  // Additional node preprocessing if needed
}
