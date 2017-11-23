
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php if ((!$page && !empty($title)) || !empty($title_prefix) || !empty($title_suffix) || $display_submitted): ?>
  <header>
    <?php print render($title_prefix); ?>

    <?php if (!$page && !empty($title)): ?>
    <h3<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
    <?php endif; ?>
      <?php print render($title_suffix); ?>
    <?php if ($created_date_formatted): ?>
    <span class="submitted">
      <?php /* print $user_picture; */ ?>
      <?php print $created_date_formatted; ?>
    </span>
    <?php endif; ?>
  </header>
  <?php endif; ?>
  
  <?php
  // Hide comments, tags, and links now so that we can render them later.
  hide($content['comments']);
  hide($content['links']);
  hide($content['field_tags']);
  hide($content['field_image']);
  print render($content);
  ?>
</article>
