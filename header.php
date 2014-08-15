<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<script type="text/javascript" src="//use.typekit.net/xut3evl.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />  
    <meta name="robots" content="noindex, nofollow" />
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
    <link href="<?php bloginfo('template_url'); ?>/css/flexslider.css" rel="stylesheet" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script>
		$(window).load(function() {
			$("#toggle").click(function () {
				$(".main").toggle();
			});
		});
    </script>
	<script src="<?php bloginfo('template_url'); ?>/includes/jquery.flexslider.js"></script>
	<script type="text/javascript">
	  $(window).load(function() {
		$(".flexslider").flexslider();
	  });
	</script>
    
    <!-- Remy Sharp Shim --> 
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php /*?> Always have wp_head() just before the closing </head>
	   tag of your theme. Many plugins use this hook to add 
       elements to <head> such as styles, scripts, and meta tags.
	  <?php */?>
     <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <h1>
        <a href="<?php echo get_option('home'); ?>">
            <span><?php bloginfo('name'); ?></span> <!-- for SEO -->
            <img src="<?php bloginfo('template_url'); ?>/images/iap-logo.png" id="logo" alt="<?php bloginfo('name'); ?>"/> <!-- for screen readers -->
        </a>
    </h1>  
</header>
<div class="navigationitems">
<img id="toggle" src="<?php bloginfo('template_url'); ?>/images/img-toggle.png" width="25" height="25"	alt="Toggle Menu">
<h1 id="pageid"> GALLERY</h1>
	<!-- START NAVIGATION -->
	<nav class="main">
        <?php wp_nav_menu( array( 
			'theme_location' => 'main-menu' ,
			'menu' => 'Main Menu' ,
			'container'  => 'ul',

		) ); ?>
		</nav>
		</div>
<!-- END NAVIGATION -->