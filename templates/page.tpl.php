
<!-- Title -->
<?php if ($site_name || $site_slogan):?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2><?php print $site_name; ?> | <?php print $site_slogan; ?></h2>
      </div>
    </div>
  </div>
<?php endif; ?>

<div id="page"> 
  <div id="main-content" class="<?php print $container_class; ?>">
    <div class="row">
      <?php if (!empty($page['content'])): ?>
        <div id="content" class="col-sm-9">
          <?php if (!$is_front): ?>
            <h3><?php print $title; ?></h3>
          <?php endif; ?>
          <?php print render($page['content']);?>
        </div>
      <?php endif; ?>

      <?php if (!empty($page['sidebar_first']) || !empty($page['sidebar_second'])): ?>   
        <div id="sidebar" class="col-sm-3">
          <?php if (!empty($page['sidebar_first'])): ?>
            <div id="sidebar-first">
              <?php print render($page['sidebar_first']);?>
            </div>
          <?php endif; ?>

          <?php if (!empty($page['sidebar_second'])): ?>
            <div id="sidebar-second">
              <?php print render($page['sidebar_second']);?>
            </div>
          <?php endif; ?>

        </div>
      <?php endif; ?>
    </div>
  </div>
</div>