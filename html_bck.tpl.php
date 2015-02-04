<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
  <head profile="<?php print $grddl_profile; ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta http-equiv="language" content="<?php print $language->language; ?>" />
    <?php print $head; ?>
    <title><?php print html_entity_decode($head_title); ?></title>
    <?php print $styles; ?>
    <?php print $scripts; ?>
  </head>
  <body class="<?php print $classes; ?>" <?php print $attributes; ?>>
    <!--googleoff: all--> 
    <div id="skip-link">
      <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
    </div>
    <!--googleon: all--> 
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
    <div class="cnt-wrapper"></div>
  </body>
</html>