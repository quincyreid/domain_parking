<?php
// $Id: block.tpl.php,v 1.6 2010/06/02 22:50:01 jmburnz Exp $

/**
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see template_process()
 */
?>
<div id="block-<?php print $block->module . '-' . $block->delta; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="block-inner">

    <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h2 class="block-title"<?php print $title_attributes; ?>><?php print $title; ?></h2>
      <?php endif;?>
    <?php print render($title_suffix); ?>

    <div class="content"<?php print $content_attributes; ?>>
      <?php print $content ?>
    </div>

  </div>
</div>
