<?php
/**
 * @file
 * The primary PHP file for this theme.
 */


function lilac_preprocess_node(&$variables) {

  // Read More
  $variables['read_more'] = $variables['content']['links']['node'];

  // Format created date
  $variables['created_date_formatted'] = date('F d, Y, l h:i A', $variables['created']);
}
