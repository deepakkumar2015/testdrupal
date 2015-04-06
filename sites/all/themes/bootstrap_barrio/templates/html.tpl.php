<?php

/**
 * @file
 * Override of Bootstrap html.tpl.php.
 */
?>
<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8">
  <?php if ($mobile_friendly): ?>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php endif; ?>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php print $scripts; ?>
    <link rel="stylesheet" href="<?php print path_to_theme(); ?>/libraries/flexslider/flexslider.css" type="text/css" media="screen" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="<?php print path_to_theme(); ?>/libraries/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 450,
        itemMargin: 5,
        pausePlay: true,
        start: function(slider){
            $('body').removeClass('loading');
        }
      });
    });
    </script>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>