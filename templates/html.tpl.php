<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
<head>
<title><?php print $head_title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<meta name="description" lang="fr" content="Peintre bruxellois passionné par l'humain">
<meta name="description" lang="nl" content="Brussels schilder gefascineerd door de mens ">
<meta name="description" lang="en" content="Brussels painter fascinated by human">

<meta name="keywords" content="encq, artiste peintre, tableau acrylique, atelier de peinture Bruxelles">
<meta name="author" content="Eric Lemonne, C50 Dynamic Design">
<meta name="identifier-url" content="http://www.encq.be">
<meta name="revisit-after" content="30 days">
<meta name="publisher" content=" encq.be ">
<meta name="copyright" content=" encq.be ">

 <?php print $head; ?>
  
  <link href='http://fonts.googleapis.com/css?family=Exo:100,200,400' rel='stylesheet' type='text/css'>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <script type="text/javascript" src="//use.typekit.net/ktd5qnd.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3472351-25']);
  _gaq.push(['_setDomainName', 'encq.be']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body<?php print $attributes;?>>
  <div id="decor">
    <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  </div>
</body>
</html>
