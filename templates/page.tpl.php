<div id="page">
  <header id="header">
    <div class="container">
      <div class="row">
        <?php if ($site_name || $site_slogan):?>
          <div id="header-left" class="col-sm-9">
            <h2><?php print $site_name; ?> | <span id="site-slogan"><?php print $site_slogan; ?></span></h2>
          </div>
        <?php endif; ?>
        <?php if (!empty($page['header_right'])): ?>
          <div id="header-right" class="col-sm-3">
            <?php print render($page['header_right']); ?>
          </div>
        <?php endif; ?>
      </div>   
    </div>
  </header>
  <!-- Menu -->
  <nav id="main-menu" class="navbar navbar-default">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="col-sm-9">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
      <!-- Collapse Navigation Links -->
      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <div class="navbar-collapse collapse" id="navbar-collapse">
          <nav role="navigation">
            <?php if (!empty($primary_nav)): ?>
              <?php print render($primary_nav); ?>
            <?php endif; ?>
            <?php if (!empty($secondary_nav)): ?>
              <?php print render($secondary_nav); ?>
            <?php endif; ?>
            <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
            <?php endif; ?>
          </nav>
        </div>
      <?php endif; ?>
      </div>
      <?php if (!empty($page['search'])): ?>
        <div id="search" class="col-sm-3">
          <?php print render($page['search']); ?>
        </div>
      <?php endif; ?>
    </div><!-- /.container -->
  </nav>
  <!-- Sytem Messages -->
  <div id="messages" class="<?php print $container_class; ?>">
    <div class="row">
      <div class="col-sm-9">
        <?php print $messages; ?>
      </div>
    </div>
  </div>
  <!-- Main Content -->
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