<?php
// ウィジェット
function theme_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __( 'メインサイドバー', 'moaretrotheme' ),
		'description' => __( 'メインのサイドバーです。', 'moaretrotheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle"><span>',
		'after_title' => '</span></h4>',
	));


	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __( 'スクロール領域', 'moaretrotheme' ),
		'description' => __( '「テキスト」や「WordPress Popular Posts」などを追加してバナーや読んで欲しい記事を設定できる ※スマホの場合はサイドバーの一番上に表示される', 'moaretrotheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle"><span>',
		'after_title' => '</span></h4>',
	));
	
	register_sidebar(array(
		'id' => 'addbanner-sp-side',
		'name' => __( '【広告】サイドバー（mobile）', 'moaretrotheme' ),
		'description' => __( 'サイドバー上部にAdsenseなどの広告を表示します。テキストウィジェットを追加して広告コードを貼り付けて下さい。こちらはモバイル用！【推奨サイズ】300×250', 'moaretrotheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle"><span>',
		'after_title' => '</span></h4>',
	));

	register_sidebar(array(
		'id' => 'addbanner-pc-side',
		'name' => __( '【広告】サイドバー（PC）', 'moaretrotheme' ),
		'description' => __( 'サイドバー上部にAdsenseなどの広告を表示します。テキストウィジェットを追加して広告コードを貼り付けて下さい。こちらはパソコン用！【推奨サイズ】336×280', 'moaretrotheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle"><span>',
		'after_title' => '</span></h4>',
	));

	register_sidebar(array(
		'id' => 'addbanner-sp-titleunder',
		'name' => __( '【広告】記事タイトル下（mobile）', 'moaretrotheme' ),
		'description' => __( '記事タイトル下にAdsenseなどの広告を表示します。テキストウィジェットを追加して広告コードを貼り付けて下さい。こちらはモバイル用！【推奨サイズ】レスポンシブ', 'moaretrotheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));


	register_sidebar(array(
		'id' => 'addbanner-pc-titleunder',
		'name' => __( '【広告】記事タイトル下（PC）', 'moaretrotheme' ),
		'description' => __( '記事タイトル下にAdsenseなどの広告を表示します。テキストウィジェットを追加して広告コードを貼り付けて下さい。こちらはパソコン用！【推奨サイズ】468×60 or レスポンシブ', 'moaretrotheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'id' => 'addbanner-sp-contentfoot',
		'name' => __( '【広告】記事下（mobile）', 'moaretrotheme' ),
		'description' => __( '記事コンテンツ下にAdsenseなどの広告を表示します。テキストウィジェットを追加して広告コードを貼り付けて下さい。こちらはモバイル用！【推奨サイズ】300×250', 'moaretrotheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle"><span>',
		'after_title' => '</span></h4>',
	));


	register_sidebar(array(
		'id' => 'addbanner-pc-contentfoot',
		'name' => __( '【広告】記事下（PC）', 'moaretrotheme' ),
		'description' => __( '記事コンテンツ下にAdsenseなどの広告を表示します。テキストウィジェットを追加して広告コードを貼り付けて下さい。こちらはパソコン用！【推奨サイズ】336×280', 'moaretrotheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle"><span>',
		'after_title' => '</span></h4>',
	));

	register_sidebar(array(
		'id' => 'home-top',
		'name' => __( '【トップページ】上部（PC）', 'moaretrotheme' ),
		'description' => __( 'トップページ（PC）のヘッダー下 最大サイズ：728px', 'moaretrotheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle"><span>',
		'after_title' => '</span></h4>',
	));
	register_sidebar(array(
		'id' => 'home-top_mobile',
		'name' => __( '【トップページ】上部（mobile）', 'moaretrotheme' ),
		'description' => __( 'トップページ（スマホ・タブレット）のヘッダー下', 'moaretrotheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle"><span>',
		'after_title' => '</span></h4>',
	));

	register_sidebar(array(
		'id' => 'home-bottom',
		'name' => __( '【トップページ】下部（PC）', 'moaretrotheme' ),
		'description' => __( 'トップページ（PC）のフッター上 最大サイズ：728px', 'moaretrotheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle"><span>',
		'after_title' => '</span></h4>',
	));
	register_sidebar(array(
		'id' => 'home-bottom_mobile',
		'name' => __( '【トップページ】下部（mobile）', 'moaretrotheme' ),
		'description' => __( 'トップページ（スマホ・タブレット）のフッター上', 'moaretrotheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle"><span>',
		'after_title' => '</span></h4>',
	));


	register_sidebar(array(
		'id' => 'footer1',
		'name' => __( '【フッター】（左）', 'moaretrotheme' ),
		'description' => __( 'フッターの左端', 'moaretrotheme' ),
		'before_widget' => '<div id="%1$s" class="widget footerwidget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle"><span>',
		'after_title' => '</span></h4>',
	));
	
	register_sidebar(array(
		'id' => 'footer2',
		'name' => __( '【フッター】（真ん中）', 'moaretrotheme' ),
		'description' => __( 'フッターの真ん中', 'moaretrotheme' ),
		'before_widget' => '<div id="%1$s" class="widget footerwidget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle"><span>',
		'after_title' => '</span></h4>',
	));
	
	register_sidebar(array(
		'id' => 'footer3',
		'name' => __( '【フッター】（右）', 'moaretrotheme' ),
		'description' => __( 'フッターの右端', 'moaretrotheme' ),
		'before_widget' => '<div id="%1$s" class="widget footerwidget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle"><span>',
		'after_title' => '</span></h4>',
	));

	register_sidebar(array(
		'id' => 'cta',
		'name' => __( 'CTA設定', 'moaretrotheme' ),
		'description' => __( '記事（single）の一番下にColl To Actionを設置できます。「テキスト」を追加してテキストやコードを貼るか、「Black Studio TinyMCE Widget（プラグイン）」などのビジュアルエディタを追加してもOKです。', 'moaretrotheme' ),
		'before_widget' => '<div id="%1$s" class="ctawidget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	));

}


//ウィジェット内でショートコードを使用可能に
add_filter('widget_text', 'do_shortcode');


// カテゴリの投稿数をaタグの中に
add_filter( 'wp_list_categories', 'my_list_categories', 10, 2 );
function my_list_categories( $output, $args ) {
  $output = preg_replace('/<\/a>\s*\((\b\d{1,3}(,\d{3})*\b)\)/',' <span class="count">($1)</span></a>',$output);
  return $output;
}

// アーカイブの投稿数をaタグの中に
add_filter( 'get_archives_link', 'my_archives_link' );
function my_archives_link( $output ) {
  $output = preg_replace('/<\/a>\s*(&nbsp;)\((\d+)\)/',' ($2)</a>',$output);
  return $output;
}

// 新着記事のフォーマットを変更
class My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {
 
	function widget($args, $instance) {
	
		extract( $args );
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts') : $instance['title'], $instance, $this->id_base);
				
		if( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
			$number = 10;
					
		$r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
		if( $r->have_posts() ) :
			
			echo $before_widget;
			if( $title ) echo $before_title . $title . $after_title; ?>
			<ul>
				<?php while( $r->have_posts() ) : $r->the_post(); ?>				
				<li class="cf">
					<a class="cf" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_title(); ?>
						<span class="date gf"><?php the_time('Y.m.d'); ?></span>
					</a>
				</li>
				<?php endwhile; ?>
			</ul>
			 
			<?php
			echo $after_widget;
		
		wp_reset_postdata();
		
		endif;
	}
}
function my_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('My_Recent_Posts_Widget');
}
add_action('widgets_init', 'my_recent_widget_registration');


//画像付き新着記事ウィジェット追加
///////////////////////////////////
class NewEntryImageWidget extends WP_Widget {
    public function __construct() {
        parent::__construct(
			false,
			$name = '[画像付き] 最新の投稿'
        );
    }
    function widget($args, $instance) {
        extract( $args );
        $title_new = apply_filters( 'widget_title_new', empty($instance['title_new']) ? "" : $instance['title_new'] );
        $entry_count = apply_filters( 'widget_entry_count', empty($instance['entry_count']) ? "" : $instance['entry_count'] );
        global $g_entry_count; 
        $g_entry_count = 5;
        if ($entry_count) {
          $g_entry_count = $entry_count;
        }
        ?>
        <?php echo $args['before_widget']; ?>
            <?php 
	            if ($title_new) {
	            	echo $args['before_title'] . $title_new . $args['after_title'];
            	}
            ?>
			<ul>
			<?php global $g_entry_count; ?>
			<?php query_posts('posts_per_page='.$g_entry_count); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li>
			<a class="cf" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php if ( has_post_thumbnail()) : ?>
			<figure class="eyecatch">
			<?php the_post_thumbnail('home-thum'); ?>
			</figure>
			<?php else: ?>
			<figure class="eyecatch noimg">
			<img src="<?php echo get_theme_file_uri('/library/images/noimg.png'); ?>">
			</figure>
			<?php endif; ?>
			<?php the_title(); ?>
			<span class="date gf"><?php the_time('Y.m.d'); ?></span>
			</a>
			</li>
			<?php endwhile; 
			else :
			  echo '<p>新着記事はありません。</p>';
			endif; ?>
			<?php wp_reset_query(); ?>
			</ul>
        <?php echo $args['after_widget']; ?>
        <?php
    }
    function update($new_instance, $old_instance) {
     $instance = $old_instance;
     $instance['title_new'] = strip_tags($new_instance['title_new']);
     $instance['entry_count'] = strip_tags($new_instance['entry_count']);
        return $instance;
    }
    function form($instance) {
        $title_new = esc_attr( empty($instance['title_new']) ? "" : $instance['title_new'] );
        $entry_count = esc_attr( empty($instance['entry_count']) ? 5 : $instance['entry_count'] );
        ?>
        <?php //タイトル入力フォーム ?>
        <p>
			<label for="<?php echo $this->get_field_id('title_new'); ?>">
			<?php _e( 'Title:' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id('title_new'); ?>" name="<?php echo $this->get_field_name('title_new'); ?>" type="text" value="<?php echo $title_new; ?>" />
        </p>
        <?php //表示数入力フォーム ?>
        <p>
			<label for="<?php echo $this->get_field_id('entry_count'); ?>">
			<?php _e( 'Number of posts to show:' ); ?>
			</label>
			<input class="tiny-text" id="<?php echo $this->get_field_id('entry_count'); ?>" name="<?php echo $this->get_field_name('entry_count'); ?>" type="number" value="<?php echo $entry_count; ?>" />
        </p>
        <?php
    }
}
// add_action('widgets_init', create_function('', 'return register_widget("NewEntryImageWidget");'));
add_action('widgets_init', function(){register_widget('NewEntryImageWidget' );});