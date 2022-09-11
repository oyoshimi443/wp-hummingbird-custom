<?php if ( !get_option( 'opencage_toppage_headerimgonly' ) && get_option( 'opencage_toppage_headeregtext' ) && get_option( 'opencage_toppage_headerjptext' ) && is_front_page() && !is_paged() ) : ?>
<script type="text/javascript">
jQuery(function( $ ) {
	$(window).load(function(){
	    $("#custom_header .wrap").css("opacity", "100");
	});
});
</script>

<div id="custom_header" class="topheaderimgbg<?php if ( get_option( 'opencage_toppage_headertextcolor' ) ) : ?> text_bk<?php endif;?><?php if( get_option( 'opencage_toppage_headerlayout' ) ):?> layoutcenter<?php endif;?>"<?php if ( get_theme_mod( 'opencage_toppage_headerbg' ) ) : ?> style="background-image: url(<?php if ( get_theme_mod('opencage_toppage_headerbgsp') && is_mobile()): echo get_theme_mod('opencage_toppage_headerbgsp'); else: echo get_theme_mod('opencage_toppage_headerbg'); endif;?>); background-position: center center; background-repeat: repeat;"<?php endif;?>>
	<div class="wrap cf" style="opacity: 0;">
		<div class="header-eyecatch">
			<?php if ( get_theme_mod( 'opencage_toppage_headerimg' ) ) : ?><figure class="wow animated bounceInDown" data-wow-delay="0.5s"><img src="<?php echo get_theme_mod( 'opencage_toppage_headerimg' ); ?>"></figure><?php endif;?>
		</div>
		<div class="header-text">
			<?php if ( get_option( 'opencage_toppage_headeregtext' )) : ?>
			<h1 class="en gf wow animated bounceInDown" data-wow-delay="0.5s"><?php echo get_option( 'opencage_toppage_headeregtext' ); ?></h1>
			<?php endif; ?>
			<?php if ( get_option( 'opencage_toppage_headerjptext' )) : ?>
			<h2 class="ja wow animated bounceInUp" data-wow-delay="0.8s"><?php echo get_option( 'opencage_toppage_headerjptext' ); ?></h2>
			<?php endif; ?>
			<?php if ( get_option( 'opencage_toppage_headerlink' )) : ?>
			<p class="btn-wrap simple wow animated bounceInUp" data-wow-delay="1s"><a href="<?php echo get_option( 'opencage_toppage_headerlink' ); ?>"><?php if ( get_option( 'opencage_toppage_headerlinktext' )) : ?><?php echo get_option( 'opencage_toppage_headerlinktext' ); ?><?php else:?>詳しくはこちら<?php endif;?></a></p>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>

<?php if ( get_option( 'opencage_toppage_headerimgonly' ) && get_theme_mod('opencage_toppage_headerbg') && is_front_page() && !is_paged() ) : ?>
<div id="custom_header" class="topheaderimg">
<?php if ( get_option( 'opencage_toppage_headerlink' )) : ?><a href="<?php echo get_option( 'opencage_toppage_headerlink' ); ?>"><?php endif; ?>
<img src="<?php if ( get_theme_mod('opencage_toppage_headerbgsp') && is_mobile()): echo get_theme_mod('opencage_toppage_headerbgsp'); else: echo get_theme_mod('opencage_toppage_headerbg'); endif;?>">
<?php if ( get_option( 'opencage_toppage_headerlink' )) : ?></a><?php endif; ?>
</div>
<?php endif; ?>