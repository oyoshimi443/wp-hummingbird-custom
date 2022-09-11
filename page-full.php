<?php
/*
Template Name:サイドバーなし（1カラム）
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'parts_homeheader' ); ?>
<div id="content">
<div id="inner-content" class="wrap page-full cf">
<main id="main" class="m-all t-all d-all cf" role="main">
<?php get_template_part( 'parts_add_top' ); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?>>
<header class="article-header entry-header animated fadeInDown">
<h1 class="page-title entry-title" itemprop="headline"><?php the_title(); ?></h1>
<?php if ( has_post_thumbnail() && !get_option( 'post_options_eyecatch' ) ) :?>
<figure class="eyecatch animated fadeInUp">
<?php the_post_thumbnail('full'); ?>
</figure>
<?php endif; ?>
<?php if ( !get_option( 'sns_options_hide' ) &&!is_home() && !is_front_page() && get_option( 'sns_options_page' )) : ?>
<?php get_template_part( 'parts_sns_short' ); ?>
<?php endif; ?>
</header>
<section class="entry-content cf">
<?php the_content(); ?>
</section>
<?php if ( !get_option( 'sns_options_hide' ) &&!is_home() && !is_front_page() && get_option( 'sns_options_page' )) : ?>
<footer class="article-footerfull">
<div class="sharewrap wow animated bounceIn" data-wow-delay="0.5s">
<?php if ( get_option( 'sns_options_text' ) ) : ?>
<h3><?php echo get_option( 'sns_options_text' ); ?></h3>
<?php endif; ?>
<?php get_template_part( 'parts_sns' ); ?>
</div>
</footer>
<?php endif; ?>
</article>
<?php endwhile; endif; ?>
<?php get_template_part( 'parts_add_bottom' ); ?>
</main>
</div>
</div>
<?php get_footer(); ?>