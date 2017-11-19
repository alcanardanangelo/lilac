<?php
/**
 * @file
 * The primary PHP file for this theme.
 */


function lilac_preprocess_node(&$variables) {
  // Title
  $variables['title'] = ucwords($variables['title']);

  // Read More
  $variables['read_more'] = $variables['content']['links']['node'];

  // Format created date
  $variables['created_date_formatted'] = date('F d, Y, l h:i A', $variables['created']);
}

function lilac_preprocess_page(&$variables) {

  
}
