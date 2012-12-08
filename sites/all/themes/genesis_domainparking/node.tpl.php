<?php
// $Id: node.tpl.php,v 1.8 2010/12/18 12:23:54 jmburnz Exp $

/**
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="node-inner clearfix">

    <?php print render($title_prefix); ?>
    <?php if ($teaser): ?>
      <h2 class="node-title"<?php print $title_attributes; ?>>
        <a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a>
      </h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php print $user_picture; ?>

    <?php if ($display_submitted): ?>
      <div class="node-submitted">
        <?php print $submitted; ?>
      </div>
    <?php endif; ?>

    <div class="node-content"<?php print $content_attributes; ?>>
      <?php
        // Hide comments and links and render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content);
      ?>
    </div>

    <?php if ($content['links']): ?>
      <div class="node-links">
        <?php print render($content['links']); ?>
      </div>
    <?php endif; ?>

    <?php print render($content['comments']); ?>

  </div>
</div>
