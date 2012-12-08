<?php
// $Id: page.tpl.php,v 1.13 2011/01/14 03:34:24 jmburnz Exp $
/**
* @see template_preprocess()
* @see template_preprocess_page()
* @see template_process()
*/

?>
  <?php if (!$in_overlay): // hide in overlay ?>

    <?php if ($page['leaderboard']): ?>
      <div id="leaderboard" class="clearfix">
        <?php print render($page['leaderboard']); ?>
      </div>
    <?php endif; ?>

    <?php if ($secondary_menu_links): ?>
      <div id="secondary-menu-wrapper" class="clearfix">
        <div class="secondary-menu-inner"><?php print $secondary_menu_links; ?></div>
      </div>
    <?php endif; ?>

    <div id="header" class="clearfix">

      <?php if ($site_logo || $site_name || $site_slogan): ?>
        <div id="branding">

          <?php if ($site_logo or $site_name): ?>
            <?php if ($title): ?>
              <div class="logo-site-name"><strong>
                <?php if ($site_logo): ?><span id="logo"><?php print $site_logo; ?></span><?php endif; ?>
                <?php if ($site_name): ?><span id="site-name"><?php print $site_name; ?></span><?php endif; ?>
              </strong></div>
            <?php else: /* Use h1 when the content title is empty */ ?>
              <h1 class="logo-site-name">
                <?php if ($site_logo): ?><span id="logo"><?php print $site_logo; ?></span><?php endif; ?>
                <?php if ($site_name): ?><span id="site-name"><?php print $site_name; ?></span><?php endif; ?>
             </h1>
            <?php endif; ?>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>

        </div> <!-- /branding -->
      <?php endif; ?>

      <?php if ($page['header']): ?>
        <div id="header-blocks"><?php print render($page['header']); ?></div>
      <?php endif; ?>

    </div> <!-- /header -->

    <?php if ($main_menu_links): ?>
      <div id="main-menu-wrapper" class="clearfix">
        <div class="main-menu-inner"><?php print $main_menu_links; ?></div>
      </div>
    <?php endif; ?>

  <?php endif; // end hide in overlay ?>

  <?php print $breadcrumb; ?>
  <?php print $messages; ?>
  <?php print render($page['help']); ?>

  <?php if ($page['secondary_content'] && !$in_overlay): // hide in overlay ?>
    <div id="secondary-content">
      <?php print render($page['secondary_content']); ?>
    </div>
  <?php endif; ?>

  <div id="columns" class="clear clearfix">
    <div id="content-column">
      <div class="content-inner">

        <?php if ($page['highlighted']): ?>
          <div id="highlighted"><?php print render($page['highlighted']); ?></div>
        <?php endif; ?>

        <div id="main-content">
          <?php print render($title_prefix); ?>
          <?php if ($site_name): ?>
            <h1 id="page-title"><?php print $site_name; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>

          <?php if ($tabs): ?>
            <div class="local-tasks"><?php print render($tabs); ?></div>
          <?php endif; ?>

          <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>

          <div id="content">
            <?php print render($page['content']); ?>
          </div>
        </div>

      </div>
    </div>

    <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="sidebar"><?php print render($page['sidebar_first']); ?></div>
    <?php endif; ?>

    <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="sidebar"><?php print render($page['sidebar_second']); ?></div>
    <?php endif; ?>

  </div> <!-- /columns -->

  <?php if (!$in_overlay): // hide in overlay ?>

    <?php if ($page['tertiary_content']): ?>
      <div id="tertiary-content">
        <?php print render($page['tertiary_content']); ?>
      </div>
    <?php endif; ?>

    <?php if ($page['footer'] || $feed_icons): ?>
      <div id="footer">
        <?php print render($page['footer']); ?>
        <?php print $feed_icons; ?>
      </div>
    <?php endif; ?>

  <?php endif; // end hide in overlay ?>
