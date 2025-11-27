<?php
/**
 * @file
 * Theme functions for BD X-Ray theme.
 */

/**
 * Preprocess variables for page.tpl.php
 */
function xray_preprocess_page(&$variables) {
  // Add body classes
  $variables['classes'][] = 'xray';
}

/**
 * Preprocess variables for block.tpl.php
 */
function xray_preprocess_block(&$variables) {
  // Blocks in Backdrop already have their subject in $variables['block']->subject
  // No additional preprocessing needed for this theme
}

/**
 * Preprocess variables for node.tpl.php
 */
function xray_preprocess_node(&$variables) {
  // Additional node preprocessing if needed
}
