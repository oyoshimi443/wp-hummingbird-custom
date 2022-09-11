<?php

function opencage_head_cleanup() {
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action( 'wp_head', 'wp_generator' );
	add_filter( 'style_loader_src', 'opencage_remove_wp_ver_css_js', 9999 );
	add_filter( 'script_loader_src', 'opencage_remove_wp_ver_css_js', 9999 );
}

// title
if (!function_exists('rw_title')) {
	function rw_title( $title, $sep, $seplocation ) {
	  global $page, $paged;
	
	  if ( is_feed() ) return $title;
	
	  $sep = " | ";
	  if ( 'right' == $seplocation ) {
	    $title .= get_bloginfo( 'name' );
	  } elseif ( is_home() || is_front_page() ){
		$title = $title . get_bloginfo( 'name' );  
	  } else {
	    $title = $title ."{$sep}" . get_bloginfo( 'name' );
	  }
	  $site_description = get_bloginfo( 'description', 'display' );
	  if ( $site_description && ( is_home() || is_front_page() ) ) {
	    $title .= "{$sep}{$site_description}";
	  }
	  if ( $paged >= 2 || $page >= 2 ) {
	    $title .= "{$sep}" . sprintf( __( '%sページ目', 'dbt' ), max( $paged, $page ) );
	  }
	  return $title;
	}
}

function my_title_fix($title, $sep, $seplocation){  
if(!$sep || $sep == " "){  
$title = str_replace(' '.$sep.' ', $sep, $title);  
}  
return $title;  
}  
add_filter('wp_title', 'my_title_fix', 10, 3); 


function opencage_rss_version() { return ''; }

function opencage_remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}

function opencage_remove_wp_widget_recent_comments_style() {
	if ( has_filter( 'wp_head', 'wp_widget_recent_comments_style' ) ) {
		remove_filter( 'wp_head', 'wp_widget_recent_comments_style' );
	}
}

function opencage_remove_recent_comments_style() {
	global $wp_widget_factory;
	if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
		remove_action( 'wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style') );
	}
}


// Include SCRIPTS
if (!is_admin()) {
	function register_script(){
	//IE判定
	$ieua = $_SERVER['HTTP_USER_AGENT'];
		wp_deregister_script( 'jquery' );
		wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.4' );
		wp_register_script( 'css-modernizr', get_theme_file_uri('/library/js/libs/modernizr.custom.min.js'), array(), '2.5.3', true );
		// wp_register_script( 'jquery.bxslider', get_theme_file_uri('/library/js/libs/jquery.bxslider.min.js'), array('jquery'), '4.2.1', true );
		if(!wp_is_mobile() && !strstr($ieua, 'Trident') && !strstr($ieua, 'MSIE') && !get_option( 'side_options_animatenone' )){
			wp_register_script( 'wow', get_theme_file_uri('/library/js/libs/wow.min.js'), array('jquery'), '', true );
		}
		wp_register_script( 'main-js', get_theme_file_uri('/library/js/scripts.js'), array( 'jquery' ), '', true );
	}
	function add_script() {
		register_script();
		if(is_front_page() || is_home()) {
			wp_enqueue_script('jquery');
			// wp_enqueue_script( 'jquery.bxslider' );
			wp_enqueue_script( 'wow' );
			wp_enqueue_script( 'main-js' );
			wp_enqueue_script( 'css-modernizr' );
			}
			else {
			wp_enqueue_script('jquery');
			wp_enqueue_script( 'wow' );
			wp_enqueue_script( 'main-js' );
			wp_enqueue_script( 'css-modernizr' );
			}
	}
	add_action('wp_enqueue_scripts', 'add_script');
}

// Include CSS
function register_style() {
	wp_register_style('style', get_bloginfo('template_directory').'/style.css');
	wp_register_style('shortcode', get_theme_file_uri('/library/css/shortcode.css'));
	wp_register_style('fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css');
	wp_register_style('gf_Ubuntu', '//fonts.googleapis.com/css?family=Ubuntu+Condensed');
	wp_register_style('gf_Lato', '//fonts.googleapis.com/css?family=Lato');
	// wp_register_style('slider', get_theme_file_uri('/library/css/bx-slider.css'));
	if(!get_option( 'side_options_animatenone' )){
		wp_register_style('animate', get_theme_file_uri('/library/css/animate.min.css'));
	}
	wp_register_style('lp_css', get_theme_file_uri('/library/css/lp.css'));
}
	function add_stylesheet() {
		register_style();
			wp_enqueue_style('style');
			// wp_enqueue_style('slider');
			wp_enqueue_style('animate');
			wp_enqueue_style('shortcode');
			wp_enqueue_style('gf_Ubuntu');
			wp_enqueue_style('gf_Lato');
			wp_enqueue_style('fontawesome');
		if(is_page_template( 'page-lp.php' ) || is_singular( 'post_lp' )) {
			wp_enqueue_style('lp_css');
		}
		elseif (is_home() || is_front_page()) {
		}
	}
add_action('wp_enqueue_scripts', 'add_stylesheet');


// Archives excerpt
function opencage_filter_ptags_on_images($content){
	return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
// more
if (!function_exists('opencage_excerpt_more')) {
	function opencage_excerpt_more($more) {
		global $post;
		return '...';
	}
}



// include function file
require_once( 'library/admin.php' );
require_once( 'library/shortcode.php' );
require_once( 'library/widget.php' );
require_once( 'library/custom-post-type.php' );
require_once( 'library/customizer.php' );
require_once( 'library/parts_home_slider.php' );

//UPDATE CHECK
require 'library/theme-update-checker.php';
$example_update_checker = new ThemeUpdateChecker(
'hummingbird',
'http://open-cage.com/theme-update/hummingbird/update-info.json'
);


// THEME SUPPORT
function opencage_ahoy() {

add_editor_style( get_bloginfo('template_url') . '/library/css/editor-style.css' );

	add_action( 'init', 'opencage_head_cleanup' );
	add_filter( 'wp_title', 'rw_title', 10, 3 );
	add_filter( 'the_generator', 'opencage_rss_version' );
	add_filter( 'wp_head', 'opencage_remove_wp_widget_recent_comments_style', 1 );
	add_action( 'wp_head', 'opencage_remove_recent_comments_style', 1 );
	
	opencage_theme_support();
	
	add_action( 'widgets_init', 'theme_register_sidebars' );
	add_filter( 'the_content', 'opencage_filter_ptags_on_images' );
	add_filter( 'excerpt_more', 'opencage_excerpt_more' );
}
add_action( 'after_setup_theme', 'opencage_ahoy' );


// embedded content size
if (!isset( $content_width ) ) {
	$content_width = 728;
}

// eyecatch size
if (!function_exists('add_mythumbnail_size')) {
	function add_mythumbnail_size() {
	add_theme_support('post-thumbnails');
	add_image_size( 'home-thum', 360, 230, true );
	add_image_size( 'single-thum', 728, 9999 );
	add_image_size( 'slide-thum', 728, 376, true );
	}
	add_action( 'after_setup_theme', 'add_mythumbnail_size' );
}


// breadcrumb
function stk_itemprop_position($position){
	return '<meta itemprop="position" content="'. $position .'" />';
}

if (!function_exists('breadcrumb')) {
	function breadcrumb($divOption = array("id" => "breadcrumb", "class" => "breadcrumb inner wrap cf")){
	    global $post;
	    $str ='';
	    if(get_option('side_options_pannavi', 'pannavi_on') !== 'pannavi_off'){
		    if(!is_home()&&!is_front_page()&&!is_admin() ){
		        $tagAttribute = '';
		        foreach($divOption as $attrName => $attrValue){
		            $tagAttribute .= sprintf(' %s="%s"', $attrName, $attrValue);
		        }
		        $i = 1;
		        $str.= '<div'. $tagAttribute .'>';
		        $str.= '<ul itemscope itemtype="http://schema.org/BreadcrumbList">';
		        $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="bc_homelink"><a itemprop="item" href="'. esc_url(home_url()) .'/"><span itemprop="name">HOME</span></a>' . stk_itemprop_position($i) . '</li>';
		        $i++;
		        if(is_category()) {
		            $cat = get_queried_object();
		            if($cat -> parent != 0){
		                $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
		                foreach($ancestors as $ancestor){
		                    $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="'. get_category_link($ancestor) .'"><span itemprop="name">'. get_cat_name($ancestor) .'</span></a>' . stk_itemprop_position($i) . '</li>';
		                    $i++;
		                }
		            }
		            $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">'. $cat -> name . '</span>' . stk_itemprop_position($i) . '</li>';
		            
		        } elseif ( is_post_type_archive() ) {
			        $cpt = get_query_var( 'post_type' );
			        $str.= '<li>' . get_post_type_object( $cpt )->label . '</li>';
			        
			    } elseif ( is_tax() ) {
				    //taxonomy
				    $query_obj = get_queried_object();
					$post_types = get_taxonomy( $query_obj->taxonomy )->object_type;
					$cpt = $post_types[0];
					$str.= '<li><a href="'. get_post_type_archive_link( $cpt ) . '"><span>'. get_post_type_object( $cpt )->label .'</span></a></li>';
					$taxonomy = get_query_var( 'taxonomy' );
					$term = get_term_by( 'slug', get_query_var( 'term' ), $taxonomy );
					if ( is_taxonomy_hierarchical( $taxonomy ) && $term->parent != 0 ) {
						$ancestors = array_reverse( get_ancestors( $term->term_id, $taxonomy ) );
						foreach ( $ancestors as $ancestor_id ) {
							$ancestor = get_term( $ancestor_id, $taxonomy );
							$str.='<li><a href="'. get_term_link( $ancestor, $term->slug ) .'"><span>'. $ancestor->name .'</span></a></li>';
						}
					}
					$str.='<li>'. $term->name .'</li>';
					
		        } elseif(is_single()){
		            $post_type = get_post_type( $post->ID );
			        if ( $post_type == 'post' ) {
				        // normal post
			            $categories = get_the_category($post->ID);
			            $cat = $categories[0];
			            if($cat -> parent != 0){
			                $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
			                foreach($ancestors as $ancestor){
			                    $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="'. get_category_link($ancestor).'"><span itemprop="name">'. get_cat_name($ancestor). '</span></a>' . stk_itemprop_position($i) . '</li>';
								$i++;
			                }
			            }
			            $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="'. get_category_link($cat -> term_id). '"><span itemprop="name">'. $cat-> cat_name . '</span></a>' . stk_itemprop_position($i) . '</li>';
						$i++;
			            $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="bc_posttitle"><span itemprop="name">'. $post -> post_title .'</span>' . stk_itemprop_position($i) . '</li>';
			        } else {
						// custom post type
						$post_type_object = get_post_type_object( $post->post_type );
						if($post_type_object->has_archive !== false){
							$str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="'. get_post_type_archive_link(get_post_type()) .'"><span itemprop="name">'. $post_type_object->labels->name .'</a></span>' . stk_itemprop_position($i) . '</li>';
						}
						$i++;
						$str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="bc_posttitle"><span itemprop="name">'. $post -> post_title .'</span>' . stk_itemprop_position($i) . '</li>';
				    }
				    
		        } elseif(is_page()){
		            if($post -> post_parent != 0 ){
		                $ancestors = array_reverse(get_post_ancestors( $post->ID ));
		                foreach($ancestors as $ancestor){
		                    $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="' . get_the_permalink($ancestor) . '"><span itemprop="name">'. get_the_title($ancestor) .'</span></a>' . stk_itemprop_position($i) . '</li>';
							$i++;
		                }
		            }
		            $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="bc_posttitle"><span itemprop="name">'. $post -> post_title .'' . stk_itemprop_position($i) . '</span></li>';
		            
		        } elseif(is_date()){
					if( is_year() ){
						$str.= '<li>' . get_the_time('Y') . '年</li>';
					} else if( is_month() ){
						$str.= '<li><a href="' . get_year_link(get_the_time('Y')) .'">' . get_the_time('Y') . '年</a></li>';
						$str.= '<li>' . get_the_time('n') . '月</li>';
					} else if( is_day() ){
						$str.= '<li><a href="' . get_year_link(get_the_time('Y')) .'">' . get_the_time('Y') . '年</a></li>';
						$str.= '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('n') . '月</a></li>';
						$str.= '<li>' . get_the_time('j') . '日</li>';
					}
					if(is_year() && is_month() && is_day() ){
						$str.= '<li>' . wp_title('', false) . '</li>';
					}
		        } elseif(is_search()) {
		            $str.='<li><span>「'. get_search_query() .'」で検索した結果</span></li>';
		        } elseif(is_author()){
		            $str .='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">投稿者 : '. get_the_author_meta('display_name', get_query_var('author')).'</span>' . stk_itemprop_position($i) . '</li>';
		        } elseif(is_tag()){
		            $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">タグ : '. single_tag_title( '' , false ). '</span>' . stk_itemprop_position($i) . '</li>';
		        } elseif(is_attachment()){
		            $str.= '<li><span>'. $post -> post_title .'</span></li>';
		        } elseif(is_404()){
		            $str.='<li>ページがみつかりません。</li>';
		        } else{
		            $str.='';
		        }
		        $str.='</ul>';
		        $str.='</div>';
		    }
		}
	    echo $str;
	}
}


// is_mobile
function is_mobile(){
$useragents = array(
'iPhone',
'iPod',
'Android.*Mobile',
'Windows.*Phone',
'dream',
'CUPCAKE',
'blackberry9500',
'blackberry9530',
'blackberry9520',
'blackberry9550',
'blackberry9800',
'webOS',
'incognito',
'webmate'
);
$pattern = '/'.implode('|', $useragents).'/i';
return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}


// page tags
function add_tag_to_page() {
 register_taxonomy_for_object_type('post_tag', 'page');
}
add_action('init', 'add_tag_to_page');


// Custom menu description
add_filter('walker_nav_menu_start_el', 'description_in_nav_menu', 10, 4);
function description_in_nav_menu($item_output, $item){
	return preg_replace('/(<a.*?>[^<]*?)</', '$1' . "<span class=\"gf\">{$item->description}</span><", $item_output);
}

// Site Search Page unset
if (!function_exists('SearchFilter')) {
	function SearchFilter($query) {
		if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
			$query->set( 'post_type', 'post' );
		}
		return $query;
	}
	add_filter('pre_get_posts','SearchFilter');
}


// User Profile Html
remove_filter('pre_user_description', 'wp_filter_kses');

// update_profile_fields
if (!function_exists('update_profile_fields')) {
	function update_profile_fields( $contactmethods ) {
	    // Remove
	    unset($contactmethods['aim']);
	    unset($contactmethods['jabber']);
	    unset($contactmethods['yim']);
	    // Add
	    $contactmethods['twitter'] = 'Twitter';
	    $contactmethods['facebook'] = 'Facebook';
	    $contactmethods['googleplus'] = 'Google+';
	    $contactmethods['instagram'] = 'Instagram';
	    $contactmethods['youtube'] = 'YouTube';
	     
	    return $contactmethods;
	}
	add_filter('user_contactmethods','update_profile_fields',10,1);
}

// pagination
if (!function_exists('pagination')) {
	function pagination($pages = '', $range = 2)
	{
	     global $wp_query, $paged;
	
		$big = 999999999;
	
		echo "<nav class=\"pagination cf\">";
	 	echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'current' => max( 1, get_query_var('paged') ),
			'prev_text'    => __('<'),
			'next_text'    => __('>'),
			'type'    => 'list',
			'total' => $wp_query->max_num_pages
		) );
		echo "</nav>\n";
	}
}

// pinback
function no_self_pingst( &$links ) {
    $home = home_url();
    foreach ( $links as $l => $link )
        if ( 0 === strpos( $link, $home ) )
            unset($links[$l]);
}
add_action( 'pre_ping', 'no_self_pingst' );


// iframe Response
function wrap_iframe_in_div($the_content) {
if ( is_singular() ) {
//YouTube
$the_content = preg_replace('/<iframe[^>]+?youtube\.com[^<]+?<\/iframe>/is', '<div class="youtube-container">${0}</div>', $the_content);
}
return $the_content;
}
add_filter('the_content','wrap_iframe_in_div');


// block Widgetを無効化
function oct_remove_widgets_block_editor() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'oct_remove_widgets_block_editor' );