<?php
// スライダー用
add_action('wp_enqueue_scripts', 'hmb_home_slider_script');
function hmb_home_slider_script() {

    // slick js
    if( is_home() || is_front_page())
	{
		wp_enqueue_script( 'slick-js', get_theme_file_uri('/library/js/libs/slick.min.js'), array('jquery'), '1.5.9', true );

		
		$slicktag = "
		jQuery(document).ready(function($) {
			$('.slickcar').slick({
                slidesToShow: 6,

				autoplay: true,
				autoplaySpeed: 4000,
				
                pauseOnDotsHover: true,
				dots: true,
				speed: 260,
			
				responsive: [
					{
						breakpoint: 1100,
						settings: {
							arrows: false,
							slidesToShow: 4
						}
					},
					{
						breakpoint: 768,
						settings: {
							arrows: false,
							slidesToShow: 3
						}
					},
					{
						breakpoint: 480,
						settings: {
							arrows: false,
							slidesToShow: 2
						}
					}
				]
			});
		});";
		wp_add_inline_script('slick-js', $slicktag);

        // slick css
        wp_enqueue_style('slick', get_theme_file_uri('/library/css/slick.min.css'));

    }
}

function hmb_home_header_slider() {
    if( is_front_page() || is_home() ) {

        $args = array(
            'posts_per_page' => 16,
            'offset' => 0,
            'tag' => 'pickup',
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => array('post','page'),
            'post_status' => 'publish',
            'suppress_filters' => true,
            'ignore_sticky_posts' => true,
            'no_found_rows' => true
        );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) {

            $output = '<div id="top_carousel">
                    <ul class="slickcar">';

            while ( $the_query->have_posts() ) {
				$the_query->the_post();

				$cat = get_the_category();
				if($cat){
					$cat = $cat[0];
					$catid = $cat->cat_ID;
					$catname = $cat->name;
				} else {
					$catid = "";
					$catname = "";
				}
				$post_id = get_the_ID();

				$output .= '<li class="top_carousel__li animated fadeInUp"><a href="' .get_permalink(). '" class="top_carousel__link">';
				$output .= '<figure class="eyecatch">'.get_the_post_thumbnail($post_id, 'home-thum').
							'<span class="cat-name osusume-label cat-id-' . $catid . '">'. $catname . '</span></figure>';
				$output .= '<h2 class="entry-title">' .get_the_title(). '</h2>';
				$output .= '</a></li>';
            }

            $output .= '</ul>
                </div>';
            
            echo $output;
        }
        wp_reset_postdata();
    }
}