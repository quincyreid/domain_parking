<?php
// $Id: field.tpl.php,v 1.4 2011/01/14 03:34:24 jmburnz Exp $

/**
 * @see theme_field()
 * @see template_preprocess_field()
 * @see theme_field()
 */
?>
<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if (!$label_hidden) : ?>
    <h3 class="field-label"<?php print $title_attributes; ?>><?php print $label ?>:&nbsp;</h3>
  <?php endif; ?>
  <?php foreach ($items as $delta => $item) : ?>
    <div class="field-item <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?>><?php print render($item); ?></div>
  <?php endforeach; ?>
</div>
