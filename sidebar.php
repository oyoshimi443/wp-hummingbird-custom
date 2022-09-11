<div id="sidebar1" class="sidebar m-all t-all d-2of7 last-col cf" role="complementary">

<?php if ( is_active_sidebar( 'addbanner-pc-side' ) && !wp_is_mobile() ) : ?>
<div class="add">
<?php dynamic_sidebar( 'addbanner-pc-side' ); ?>
</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'addbanner-sp-side' ) && wp_is_mobile() ) : ?>
<div class="add">
<?php dynamic_sidebar( 'addbanner-sp-side' ); ?>
</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'sidebar2' ) && wp_is_mobile()) : ?>
<div id="no-scrollfix" class="mobile add">
<?php dynamic_sidebar( 'sidebar2' ); ?>
</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
<?php dynamic_sidebar( 'sidebar1' ); ?>
<?php endif; ?>

<?php if ( is_active_sidebar( 'sidebar2' ) && !wp_is_mobile() ) : ?>
<div id="scrollfix" class="add cf">
<?php dynamic_sidebar( 'sidebar2' ); ?>
</div>
<?php endif; ?>

</div>