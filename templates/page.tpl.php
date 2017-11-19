<div id="page">
  <header id="header" class="<?php print $container_class; ?>">
    <div class="row">
      <!-- header left -->
      <div id="header-left" class="col-sm-8">
        <!-- <a href="#" class="navbar-brand">Lilac Theme</a> -->
        <?php if ($logo): ?>
        <a class="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>
        <?php if (!empty($site_name)): ?>
          <a class="name" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
        <?php endif; ?>
        
      </div>

      <!-- header right -->
      <?php if (!empty($page['header_right'])): ?>
        <div id="header-right" class="col-sm-4">
          <?php print render($page['header_right']); ?>
        </div>     
      <?php endif; ?>   
    </div>
  </header>

  <!-- main menu -->
  <nav class="<?php print $navbar_classes; ?>">
    <div class="<?php print $container_class?>">
      <div class="row">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <?php if ($primary_nav): ?>
          <div id="main-menu" class="col-sm-9">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <?php print render($primary_nav); ?>
              </ul>
            </div><!-- /.navbar-collapse -->              
          </div>
        <?php endif; ?>

        <?php if (!empty($page['search'])): ?>
          <div id="search" class="col-sm-3">
            <?php print render($page['search']); ?>
          </div>
        <?php endif; ?>

      </div>
    </div><!-- /.container-fluid -->
  </nav>

  <!-- main-content -->
  <div class="main-container <?php print $container_class; ?>">
    <div class="row">
      <?php if ($messages): ?>
        <div id="messages" class="col-sm-9">
          <?php print $messages; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div id="main-content" class="<?php print $container_class; ?>">
    <div class="row">
      <?php if (!empty($page['content'])): ?>
        <div id="content" class="col-sm-9">
          <h2><?php print $title; ?></h2>
          <?php print render($page['content']); ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($page['sidebar_first']) OR !empty($page['sidebar_second'])): ?>
        <div id="sidebar" class="col-sm-3">
          <?php if (!empty($page['sidebar_first'])): ?>
            <div id="sidebar-first">
              <?php print render($page['sidebar_first']); ?>
            </div>
          <?php endif; ?>

          <?php if (!empty($page['sidebar_second'])): ?>
            <div id="sidebar-second">
              <?php print render($page['sidebar_second']); ?>
            </div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>

  </div>
  <!-- content -->  <!-- sidebar first -->  <!-- sidebar second -->
  <?php if (!empty($page['footer'])): ?>
  <footer id="footer" class="<?php print $container_class; ?>">
    <?php print render($page['footer']); ?>
  </footer>
  <?php endif; ?>
</div>
