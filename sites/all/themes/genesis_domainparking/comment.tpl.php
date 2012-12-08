<?php
// $Id: comment.tpl.php,v 1.10 2011/01/14 02:57:57 jmburnz Exp $

/**
 * @see template_preprocess()
 * @see template_preprocess_comment()
 * @see template_process()
 * @see theme_comment()
 */
?>
<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php print $picture ?>

  <?php print render($title_prefix); ?>
    <h3 class="comment-title"<?php print $title_attributes; ?>>
      <?php print $title ?>
      <?php if ($new): ?>
        <span class="new"><?php print $new ?></span>
      <?php endif; ?>
    </h3>
  <?php print render($title_suffix); ?>

  <div class="comment-submitted">
    <span class="comment-id"><?php print $permalink; ?></span>
    <?php print $submitted; ?>
  </div>

  <div class="comment-content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['links']);
      print render($content);
    ?>
    <?php if ($signature): ?>
    <div class="user-signature clearfix">
      <?php print $signature ?>
    </div>
    <?php endif; ?>
  </div>

  <?php print render($content['links']) ?>
</div>
