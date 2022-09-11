<!doctype html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php wp_title(''); ?></title>
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<?php if ( get_theme_mod( 'opencage_appleicon' ) ) : ?><link rel="apple-touch-icon" href="<?php echo get_theme_mod( 'opencage_appleicon' ); ?>"><?php endif; ?>
<?php if ( get_theme_mod( 'opencage_favicon' ) ) : ?><link rel="icon" href="<?php echo get_theme_mod( 'opencage_favicon' ); ?>"><?php endif; ?>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<!--[if IE]>
<?php if ( get_theme_mod( 'opencage_favicon_ie' ) ) : ?><link rel="shortcut icon" href="<?php echo get_theme_mod( 'opencage_favicon_ie' ); ?>"><?php endif; ?>
<![endif]-->

<?php get_template_part( 'head' ); ?>

<?php wp_head(); ?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6112879928376988"
     crossorigin="anonymous"></script>
	
</head>

<body <?php body_class(); ?>>

<div id="container" class="<?php echo esc_html(get_option('post_options_ttl'));?> <?php echo esc_html(get_option('post_options_date'));?><?php if ( get_option( 'side_options_right' ) ) : ?> sidebarleft<?php endif; ?>">

<?php if(!is_page_template( 'page-lp.php' ) && !is_singular( 'post_lp' ) ): ?>
<header class="header<?php if ( get_option('side_options_headercenter') || wp_is_mobile() ) : ?> headercenter<?php endif; ?>" role="banner">
<div id="inner-header" class="wrap cf<?php if ( get_option( 'side_options_description' ) ) : ?> descriptionnone<?php endif; ?>">
<?php if ( !get_option( 'side_options_description' ) ) : ?><p class="site_description"><?php bloginfo('description'); ?></p><?php endif; ?>
<div id="logo" class="gf">
	<?php
		$sitelogo_tag = (is_home() || is_front_page()) ? 'h1' : 'p';
	?>
	<?php if ( get_theme_mod( 'opencage_logo' ) ) : ?>
		<<?php echo $sitelogo_tag;?> class="h1 img"><a href="<?php echo esc_url(home_url()); ?>" rel="nofollow"><img src="<?php echo get_theme_mod( 'opencage_logo' ); ?>" alt="<?php bloginfo('name'); ?>"></a></<?php echo $sitelogo_tag;?>>
	<?php else : ?>
		<<?php echo $sitelogo_tag;?> class="h1 text"><a href="<?php echo esc_url(home_url()); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></<?php echo $sitelogo_tag;?>>
	<?php endif; ?>
</div>

<nav id="g_nav" role="navigation">
<?php if(get_option('side_options_header_search')):?>
<?php get_search_form(); ?>
<?php endif; ?>

<?php wp_nav_menu(array(
     'container' => false,
     'container_class' => 'menu cf',
     'menu' => __( 'グローバルナビ' ),
     'menu_class' => 'nav top-nav cf',
     'theme_location' => 'main-nav',
     'before' => '',
     'after' => '',
     'link_before' => '',
     'link_after' => '',
     'depth' => 0,
     'fallback_cb' => ''
)); ?>
</nav>
<button id="drawerBtn" class="nav_btn"></button>
<script type="text/javascript">
jQuery(function( $ ){
var menu = $('#g_nav'),
    menuBtn = $('#drawerBtn'),
    body = $(document.body),     
    menuWidth = menu.outerWidth();                
     
    menuBtn.on('click', function(){
    body.toggleClass('open');
        if(body.hasClass('open')){
            body.animate({'left' : menuWidth }, 300);            
            menu.animate({'left' : 0 }, 300);                    
        } else {
            menu.animate({'left' : -menuWidth }, 300);
            body.animate({'left' : 0 }, 300);            
        }             
    });
});    
</script>

</div>
</header>
<?php breadcrumb(); ?>
<?php endif; ?>