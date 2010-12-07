<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>">
<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <!--[if IE]>
    <link type="text/css" rel="stylesheet" media="all" href="<?php print $base_path . $directory; ?>/ie.css"/>
  <![endif]-->
  <!--[if IE 6]>
    <link type="text/css" rel="stylesheet" media="all" href="<?php print $base_path . $directory; ?>/ie6.css"/>
  <![endif]-->
  <?php print $scripts ?>
  <script type="text/javascript"></script>
</head>

<body class="<?php print $body_classes; ?>">

  <?php if ($primary_links) {?> 
    <div id="primary">
    <?php print preg_replace('/<a (.*?)>(.*?)<\\/a>/i','<a \\1><span>\\2</span></a>',theme('links', $primary_links, array('class' =>'links', 'id' => 'navlist'))); ?></div>
  <?php } ?>

    <div id="header-region">
      <?php print $header ?>
    </div>
  <div id="header"><div id="h2">
    <?php if ($logo) {
 ?><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a><?php } ?>

    <?php if ($search_box) : ?>
      <div class="search-box"><?php print $search_box ?></div>
    <?php endif; ?>
    
      <h1 class='site-name'><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1>
    
    <span class="clear"></span>
    <?php if ($site_slogan) {
 ?>
      <div class='site-slogan'><?php print $site_slogan ?></div>
    <?php } ?>
  </div></div>
 <div id="wrapper">
  
    <?php if ($left) {
 ?>
      <div id="sidebar-left" class="clearfix">
      <?php print $left ?>
      </div>
    <?php } ?>

    <div id="main" class="clearfix"><div id="main-inner"><div id="main-inner2">
      <?php if ($mission) {
 ?><div id="mission"><?php print $mission ?></div><?php } ?>
      <div class="inner">
        <?php print $breadcrumb ?>
        <h1 class="title"><?php print $title ?></h1>
        <?php if ($tabs){
 ?><div class="tabs"><?php print $tabs ?></div><?php } ?>
        <?php print $help ?>
        <?php if ($show_messages && $messages) print $messages; ?>
        <?php print $content; ?>
        <?php print $feed_icons; ?>
      </div>
    </div></div></div>

    <?php if ($right): ?>
      <div id="sidebar-right" class="clearfix">
      <?php print $right ?>
      </div>
    <?php endif; ?>
    <br clear="all"/>
    <span class="clear"></span>
  </div>

  <br clear="all"/>
  <div id="footer">
  <?php print $footer; ?>
  <?php print $footer_message;?><br/>
    <a href="http://www.rockettheme.com/Templates/Free_Templates/Novus_-_Free_Joomla_Template/">Theme</a> <a href="http://www.avioso.com">port</a> sponsored by <a href="http://www.duplika.com">Duplika Hosting</a>.
  <?php print $closure ?>
  </div>
</body>
</html>
