<?php
// $Id: html.tpl.php,v 1.9 2011/01/14 03:12:40 jmburnz Exp $

/**
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"
  <?php print $rdf_namespaces; ?>>
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<?php // modify the layout by changing the id, see layout.css ?>
<body id="genesis-1c" <?php print $attributes;?>>

  <?php if (!$in_overlay): // Hide the skip-link in overlay ?>
    <div id="skip-link">
      <a href="#main-content"><?php print t('Skip to main content'); ?></a>
    </div>
  <?php endif; ?>

  <?php print $page_top; ?>
  <div id="container" class="<?php print $classes; ?>">
    <?php print $page; ?>
  </div>
  <?php print $page_bottom; ?>

</body>
</html>
