<?php get_header(); ?>
<div id="content">
<div id="inner-content" class="wrap cf">
<main id="main" class="m-all t-all d-5of7 cf" role="main">
<div class="archivettl">
<?php if (is_category()) { ?>
<h1 class="archive-title h2">
<span><?php _e( 'CATEGORY', 'moaretrotheme' ); ?></span> <?php single_cat_title(); ?>
</h1>

<?php } elseif (is_tag()) { ?>
<h1 class="archive-title h2">
<span><?php _e( 'TAG', 'moaretrotheme' ); ?></span> <?php single_tag_title(); ?>
</h1>

<?php } elseif (is_author()) {
global $post;
$author_id = $post->post_author;
?>
<h1 class="archive-title h2">
<span class="author-icon"><?php echo get_avatar(get_the_author_id(), 150); ?></span>
「<?php the_author_meta('display_name', $author_id); ?>」の記事
</h1>
<?php } elseif (is_day()) { ?>
<h1 class="archive-title h2">
<?php the_time('l, F j, Y'); ?>
</h1>

<?php } elseif (is_month()) { ?>
<h1 class="archive-title h2">
<?php the_time('F Y'); ?>
</h1>

<?php } elseif (is_year()) { ?>
<h1 class="archive-title h2">
<?php the_time('Y'); ?>
</h1>
<?php } ?>
</div>

<?php if (category_description() && !is_paged()) : ?>
<div class="taxonomy-description"><?php echo category_description(); ?></div>
<?php endif; ?>

<?php get_template_part( 'parts_archive_simple' ); ?>

</main>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>