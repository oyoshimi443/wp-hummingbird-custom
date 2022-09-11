<?php

function opencage_customize_register($wp_customize) {
	
    $wp_customize->add_section( 'colors', array(
    'title' => __( '> サイトカラー設定', 'opencage' ),
    'priority' => 30,
    'description' => 'サイトの色変更が可能です。<br>※「背景色」を適用させたい場合は、【カスタマイズ > 背景画像】から背景画像を削除しておく必要があります。',
    ) );

	$wp_customize->add_setting( 'opencage_color_maintext', array( 'default' => '#3E3E3E', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opencage_color_maintext', array(
    'label' => __( 'メインテキスト', 'opencage' ),
    'section' => 'colors',
    'settings' => 'opencage_color_maintext',
    ) ) );

	$wp_customize->add_setting( 'opencage_color_mainlink', array( 'default' => '#e55937', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opencage_color_mainlink', array(
    'label' => __( 'リンク', 'opencage' ),
    'section' => 'colors',
    'settings' => 'opencage_color_mainlink',
    ) ) );

	$wp_customize->add_setting( 'opencage_color_mainlink_hover', array( 'default' => '#E69B9B', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opencage_color_mainlink_hover', array(
    'label' => __( 'リンク（マウスオン時）', 'opencage' ),
    'section' => 'colors',
    'settings' => 'opencage_color_mainlink_hover',
    ) ) );
	  
	$wp_customize->add_setting( 'opencage_color_headerbg', array( 'default' => '#e55937', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opencage_color_headerbg', array(
    'label' => __( 'ヘッダー背景（メインカラー）', 'opencage' ),
    'section' => 'colors',
    'settings' => 'opencage_color_headerbg',
    ) ) );

	$wp_customize->add_setting( 'opencage_color_headertext', array( 'default' => '#ffffff', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opencage_color_headertext', array(
    'label' => __( 'ヘッダーテキスト', 'opencage' ),
    'section' => 'colors',
    'settings' => 'opencage_color_headertext',
    ) ) );

	$wp_customize->add_setting( 'opencage_color_headerlink', array( 'default' => '#ffffff', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opencage_color_headerlink', array(
    'label' => __( 'ヘッダーリンク', 'opencage' ),
    'section' => 'colors',
    'settings' => 'opencage_color_headerlink',
    ) ) );

	$wp_customize->add_setting( 'opencage_color_headerlink_hover', array( 'default' => '#FFFF00', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opencage_color_headerlink_hover', array(
    'label' => __( 'ヘッダーリンク（マウスオン時）', 'opencage' ),
    'section' => 'colors',
    'settings' => 'opencage_color_headerlink_hover',
    ) ) );

	$wp_customize->add_setting( 'opencage_color_labelbg', array( 'default' => '#e55937', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opencage_color_labelbg', array(
    'label' => __( 'ラベル背景', 'opencage' ),
    'section' => 'colors',
    'settings' => 'opencage_color_labelbg',
    ) ) );

	$wp_customize->add_setting( 'opencage_color_labeltext', array( 'default' => '#ffffff', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opencage_color_labeltext', array(
    'label' => __( 'ラベルテキスト', 'opencage' ),
    'section' => 'colors',
    'settings' => 'opencage_color_labeltext',
    ) ) );

	$wp_customize->add_setting( 'opencage_color_formbg', array( 'default' => '#FFFFFF', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opencage_color_formbg', array(
    'label' => __( '入力フォーム背景', 'opencage' ),
    'section' => 'colors',
    'settings' => 'opencage_color_formbg',
    ) ) );
    
    $wp_customize->add_setting( 'opencage_color_hukidashi', array( 'default' => '#e55937', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opencage_color_hukidashi', array(
    'label' => __( '記事ページの見出し背景（H2）', 'opencage' ),
    'section' => 'colors',
    'settings' => 'opencage_color_hukidashi',
    ) ) );

	$wp_customize->add_setting( 'opencage_color_sidelink', array( 'default' => '#666666', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opencage_color_sidelink', array(
    'label' => __( 'サイドバーリンク', 'opencage' ),
    'section' => 'colors',
    'settings' => 'opencage_color_sidelink',
    ) ) );

	$wp_customize->add_setting( 'opencage_color_sidelink_hover', array( 'default' => '#999999', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opencage_color_sidelink_hover', array(
    'label' => __( 'サイドバーリンク（マウスオン時）', 'opencage' ),
    'section' => 'colors',
    'settings' => 'opencage_color_sidelink_hover',
    ) ) );

	$wp_customize->add_setting( 'opencage_color_footerbg', array( 'default' => '#0E0E0E', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opencage_color_footerbg', array(
    'label' => __( 'フッター背景', 'opencage' ),
    'section' => 'colors',
    'settings' => 'opencage_color_footerbg',
    ) ) );

	$wp_customize->add_setting( 'opencage_color_footertext', array( 'default' => '#CACACA', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opencage_color_footertext', array(
    'label' => __( 'フッターテキスト', 'opencage' ),
    'section' => 'colors',
    'settings' => 'opencage_color_footertext',
    ) ) );

	$wp_customize->add_setting( 'opencage_color_footerlink', array( 'default' => '#BAB4B0', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opencage_color_footerlink', array(
    'label' => __( 'フッターリンク', 'opencage' ),
    'section' => 'colors',
    'settings' => 'opencage_color_footerlink',
    ) ) );

	  
         }
    add_action('customize_register', 'opencage_customize_register');
    
    function opencage_customize_css()
    {
    //初期カラー
    $maintext = get_theme_mod( 'opencage_color_maintext', '#3E3E3E');
    $mainlink = get_theme_mod( 'opencage_color_mainlink', '#e55937');
    $mainlinkhover = get_theme_mod( 'opencage_color_mainlink_hover', '#E69B9B');
    $mainformbg = get_theme_mod( 'opencage_color_formbg', '#FFFFFF');
    $mainhukidashi = get_theme_mod( 'opencage_color_hukidashi', '#e55937');
    $headerbg = get_theme_mod( 'opencage_color_headerbg', '#e55937');
    $headertext = get_theme_mod( 'opencage_color_headertext', '#ffffff');
    $headerlink = get_theme_mod( 'opencage_color_headerlink', '#ffffff');
    $headerlinkhover = get_theme_mod( 'opencage_color_headerlink_hover', '#FFFF00');
    $labelbg = get_theme_mod( 'opencage_color_labelbg', '#e55937');
    $labeltext = get_theme_mod( 'opencage_color_labeltext', '#ffffff');
    $sidelink = get_theme_mod( 'opencage_color_sidelink', '#666666');
    $sidelinkhover = get_theme_mod( 'opencage_color_sidelink_hover', '#999999');
    $footerbg = get_theme_mod( 'opencage_color_footerbg', '#0E0E0E');
    $footertext = get_theme_mod( 'opencage_color_footertext', '#CACACA');
    $footerlink = get_theme_mod( 'opencage_color_footerlink', '#BAB4B0');
    ?>
<style type="text/css">
body{color: <?php echo $maintext; ?>;}
a{color: <?php echo $mainlink; ?>;}
a:hover{color: <?php echo $mainlinkhover; ?>;}
#main article footer .post-categories li a,#main article footer .tags a{  background: <?php echo $mainlink; ?>;  border:1px solid <?php echo $mainlink; ?>;}
#main article footer .tags a{color:<?php echo $mainlink; ?>; background: none;}
#main article footer .post-categories li a:hover,#main article footer .tags a:hover{ background:<?php echo $mainlinkhover; ?>;  border-color:<?php echo $mainlinkhover; ?>;}
input[type="text"],input[type="password"],input[type="datetime"],input[type="datetime-local"],input[type="date"],input[type="month"],input[type="time"],input[type="week"],input[type="number"],input[type="email"],input[type="url"],input[type="search"],input[type="tel"],input[type="color"],select,textarea,.field { background-color: <?php echo $mainformbg; ?>;}
/*ヘッダー*/
.header{background: <?php echo $headerbg; ?>; color: <?php echo $headertext; ?>;}
#logo a,.nav li a,.nav_btn{color: <?php echo $headerlink; ?>;}
#logo a:hover,.nav li a:hover{color:<?php echo $headerlinkhover; ?>;}
@media only screen and (min-width: 768px) {
.nav ul {background: <?php echo $footerbg; ?>;}
.nav li ul.sub-menu li a{color: <?php echo $footerlink; ?>;}
}
/*メインエリア*/
.widgettitle {background: <?php echo $headerbg; ?>; color:  <?php echo $headertext; ?>;}
.widget li a:after{color: <?php echo $headerbg; ?>!important;}
/* 投稿ページ */
.entry-content h2{background: <?php echo $mainhukidashi; ?>;}
.entry-content h3{border-color: <?php echo $mainhukidashi; ?>;}
.entry-content ul li:before{ background: <?php echo $mainhukidashi; ?>;}
.entry-content ol li:before{ background: <?php echo $mainhukidashi; ?>;}
/* カテゴリーラベル */
.post-list-card .post-list .eyecatch .cat-name,.top-post-list .post-list .eyecatch .cat-name,.byline .cat-name,.single .authorbox .author-newpost li .cat-name,.related-box li .cat-name,#top_carousel .cat-name{background: <?php echo $labelbg; ?>; color:  <?php echo $labeltext; ?>;}
/* CTA */
.cta-inner{ background: <?php echo $footerbg; ?>;}
/* ボタンの色 */
.btn-wrap a{background: <?php echo $mainlink; ?>;border: 1px solid <?php echo $mainlink; ?>;}
.btn-wrap a:hover{background: <?php echo $mainlinkhover; ?>;}
.btn-wrap.simple a{border:1px solid <?php echo $mainlink; ?>;color:<?php echo $mainlink; ?>;}
.btn-wrap.simple a:hover{background:<?php echo $mainlink; ?>;}
.readmore a{border:1px solid <?php echo $mainlink; ?>;color:<?php echo $mainlink; ?>;}
.readmore a:hover{background:<?php echo $mainlink; ?>;color:#fff;}
/* サイドバー */
.widget a{text-decoration:none; color:<?php echo $sidelink; ?>;}
.widget a:hover{color:<?php echo $sidelinkhover; ?>;}
/*フッター*/
#footer-top{background-color: <?php echo $footerbg; ?>; color: <?php echo $footertext; ?>;}
.footer a,#footer-top a{color: <?php echo $footerlink; ?>;}
#footer-top .widgettitle{color: <?php echo $footertext; ?>;}
.footer {background-color: <?php echo $footerbg; ?>;color: <?php echo $footertext; ?>;}
.footer-links li:before{ color: <?php echo $headerbg; ?>;}
/* ページネーション */
.pagination a, .pagination span,.page-links a{border-color: <?php echo $mainlink; ?>; color: <?php echo $mainlink; ?>;}
.pagination .current,.pagination .current:hover,.page-links ul > li > span{background-color: <?php echo $mainlink; ?>; border-color: <?php echo $mainlink; ?>;}
.pagination a:hover, .pagination a:focus,.page-links a:hover, .page-links a:focus{background-color: <?php echo $mainlink; ?>; color: #fff;}
/* OTHER */
ul.wpp-list li a:before{background: <?php echo $headerbg; ?>;color: <?php echo $headertext; ?>;}
.blue-btn, .comment-reply-link, #submit { background-color: <?php echo $mainlink; ?>; }
.blue-btn:hover, .comment-reply-link:hover, #submit:hover, .blue-btn:focus, .comment-reply-link:focus, #submit:focus {background-color: <?php echo $mainlinkhover; ?>; }
</style>
<?php
    }
    add_action( 'wp_head', 'opencage_customize_css');


function opencage_theme_support() {

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-background',
	    array(
	    'default-image' => get_template_directory_uri() .'/library/images/body_bg01.png',
	    'default-color' => 'f7f7f7',
	    'wp-head-callback' => '_custom_background_cb',
	    'admin-head-callback' => '',
	    'admin-preview-callback' => ''
	    )
	);
	add_theme_support('automatic-feed-links');
	add_theme_support( 'menus' );
	register_nav_menus(
		array(
			'main-nav' => __( 'グローバルナビ' ),
			'footer-links' => __( 'フッターナビ' )
		)
	);

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form'
	) );

}



//カスタムロゴ
function opencage_logo_theme_customizer( $wp_customize ) {
    // Logo upload
    $wp_customize->add_section( 'opencage_logo_section' , array(
	    'title'       => __( '> サイトロゴ・アイコン', 'opencage_logo' ),
	    'priority'    => 30,
	) );
	$wp_customize->add_setting( 'opencage_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'opencage_logo', array(
		'label'        => __( 'ロゴ画像をアップロード', 'opencage_logo' ),
		'description' => '<span style="font-size:10px;">ロゴ画像を利用する場合はこちらからアップロードしてください。推奨：420×72px（表示サイズは高さ36pxとなります。）</span>',
		'section'    => 'opencage_logo_section',
		'settings'   => 'opencage_logo',
	) ) );

	$wp_customize->add_setting( 'opencage_favicon' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'opencage_favicon', array(
		'label'        => __( 'ファビコン（.png）をアップロード', 'opencage_favicon' ),
		'description' => '<span style="font-size:10px;">推奨：32×32px</span>',
		'section'    => 'opencage_logo_section',
		'settings'   => 'opencage_favicon',
	) ) );
	$wp_customize->add_setting( 'opencage_favicon_ie' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'opencage_favicon_ie', array(
		'label'        => __( 'IE用ファビコン（.ico）をアップロード', 'opencage_favicon_ie' ),
		'description' => '<span style="font-size:10px;">推奨：16×16px</span>',
		'section'    => 'opencage_logo_section',
		'settings'   => 'opencage_favicon_ie',
	) ) );
	$wp_customize->add_setting( 'opencage_appleicon' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'opencage_appleicon', array(
		'label'        => __( 'アップルタッチアイコンをアップロード', 'opencage_appleicon' ),
		'description' => '<span style="font-size:10px;">推奨：144 x 144px</span>',
		'section'    => 'opencage_logo_section',
		'settings'   => 'opencage_appleicon',
	) ) );
}
add_action('customize_register', 'opencage_logo_theme_customizer');


//トップページ
function opencage_toppage_theme_customizer( $wp_customize ) {
    $wp_customize->add_section( 'opencage_toppage_section' , array(
	    'title'       => __( '> トップページ設定', 'opencage_toppage' ),
	    'priority'    => 30,
	    'description' => 'トップページの設定全般。ヘッダー画像やリンクの設置などができます。<a href="//open-cage.com/hummingbird/document/toppage/#i-4" target="_blank">→アニメーションヘッダーの使い方</a>',
	) );
	
	$wp_customize->add_setting('opencage_toppage_headeregtext', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'opencage_toppage_headeregtext', array(
	    'label' =>'英語表示テキスト（大テキスト）',
		'description' => '<span style="font-size:10px;"><b style="color:red;">【必須】</b>推奨はローマ字です。日本語でも表示は可能ですがフォントの見た目が変わります。※ヘッダーを表示したくない場合は手テキストを削除してください。</span>',
	    'section' => 'opencage_toppage_section',
	    'settings' => 'opencage_toppage_headeregtext',
	));
    $wp_customize->add_setting('opencage_toppage_headerjptext', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'opencage_toppage_headerjptext', array(
	    'label' =>'日本語表示テキスト（小テキスト）',
		'description' => '<span style="font-size:10px;"><b style="color:red;">【必須】</b>小さな補足テキストが入ります。※ヘッダーを表示したくない場合は手テキストを削除してください。<</span>',
	    'section' => 'opencage_toppage_section',
	    'settings' => 'opencage_toppage_headerjptext',
	));

	
	$wp_customize->add_setting( 'opencage_toppage_headerbg' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'opencage_toppage_headerbg', array(
		'label'        => __( 'ヘッダー背景画像', 'opencage_toppage_headerbg' ),
		'description' => '<span style="font-size:10px;">中央を起点としてリピート表示されます。</span>',
		'section'    => 'opencage_toppage_section',
		'settings'   => 'opencage_toppage_headerbg',
	) ) );
	$wp_customize->add_setting( 'opencage_toppage_headerbgsp' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'opencage_toppage_headerbgsp', array(
		'label'        => __( 'ヘッダー背景画像（SP用）', 'opencage_toppage_headerbgsp' ),
		'description' => '<span style="font-size:10px;">スマートフォン用のヘッダー背景画像を設定できます。設定しなかった場合は上のPC用が表示されます。</span>',
		'section'    => 'opencage_toppage_section',
		'settings'   => 'opencage_toppage_headerbgsp',
	) ) );

    $wp_customize->add_setting('opencage_toppage_headerimgonly', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'opencage_toppage_headerimgonly', array(
	    'settings' => 'opencage_toppage_headerimgonly',
	    'label' =>'背景画像のみを表示する',
		'description' => '<span style="font-size:10px;">このオプションにチェックを入ると<b>上の「ヘッダー背景画像」</b>で設定した画像が<b>そのまま表示</b>されるようになります。<b style="color:red;">画像をすべて表示させたい場合はcheckをいれてください。</b><b>※ヘッダーボタンURLにリンクを設置した場合は画像にリンクが設定されます。</b></span>',
	    'section' => 'opencage_toppage_section',
	    'type' => 'checkbox',
	));


	$wp_customize->add_setting( 'opencage_toppage_headerimg' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'opencage_toppage_headerimg', array(
		'label'        => __( 'ヘッダーアイキャッチ画像をアップロード', 'opencage_toppage_headerimg' ),
		'description' => '<span style="font-size:10px;">最大横幅：440px</span>',
		'section'    => 'opencage_toppage_section',
		'settings'   => 'opencage_toppage_headerimg',
	) ) );

    $wp_customize->add_setting('opencage_toppage_headerlink', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'opencage_toppage_headerlink', array(
	    'label' =>'ヘッダーボタンURL',
	    'section' => 'opencage_toppage_section',
	    'settings' => 'opencage_toppage_headerlink',
	));
    $wp_customize->add_setting('opencage_toppage_headerlinktext', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'opencage_toppage_headerlinktext', array(
	    'label' =>'ヘッダーボタンテキスト',
		'description' => '<span style="font-size:10px;">ここに入力した文字で置き換えます。上の「ヘッダーボタンURL」を設定していない場合は表示されません。</span>',
	    'section' => 'opencage_toppage_section',
	    'settings' => 'opencage_toppage_headerlinktext',
	));
    $wp_customize->add_setting('opencage_toppage_headertextcolor', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'opencage_toppage_headertextcolor', array(
	    'label' =>'ヘッダーエリアテキスト色を黒にする',
	    'section' => 'opencage_toppage_section',
	    'settings' => 'opencage_toppage_headertextcolor',
	    'type' => 'checkbox',
	));
    $wp_customize->add_setting('opencage_toppage_headerlayout', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'opencage_toppage_headerlayout', array(
	    'label' =>'ヘッダーイメージを縦並びにする',
		'description' => '<span style="font-size:10px;">チェックを入れると画像とテキストを縦並びにできます。ヘッダーアイキャッチを設定しなければテキストのみの表示にすることもできます。</span>',
	    'section' => 'opencage_toppage_section',
	    'settings' => 'opencage_toppage_headerlayout',
	    'type' => 'checkbox',
	));
}
add_action('customize_register', 'opencage_toppage_theme_customizer');


function opencage_postpage_customizer($wp_customize) {
    $wp_customize->add_section( 'postpage_section', array(
        'title'          =>'> 投稿・固定ページ設定',
        'priority'       => 30,
    ));

    $wp_customize->add_setting('post_options_ttl', array(
	   'type'  => 'option',
	   'default' => 'h_default',
	));
	$wp_customize->add_control( 'post_options_ttl', array(
	    'settings' => 'post_options_ttl',
	    'label' =>'見出し（H2）デザイン',
		'description' => '<span style="font-size:10px;">見出し（H2）のデザインを変更することが可能です。</span>',
	    'section' => 'postpage_section',
	    'type' => 'radio',
	    'choices' => array(
            'h_default' => 'ステッチ風（デフォルト）',
            'h_simple' => 'シンプル',
        ),
	));

    $wp_customize->add_setting('sns_options_text', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'sns_options_text', array(
	    'settings' => 'sns_options_text',
	    'label' =>'記事下のシェアタイトルを入力',
	    'section' => 'postpage_section',
	));
    $wp_customize->add_setting('sns_options_page', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'sns_options_page', array(
	    'settings' => 'sns_options_page',
	    'label' =>'固定ページでもSNSボタンを表示する',
		'description' => '<span style="font-size:10px;">固定ページにも独自のSNSボタンを表示させたい場合にチェックをいれる。</span>',
	    'section' => 'postpage_section',
	    'type' => 'checkbox',
	));
    $wp_customize->add_setting('sns_options_hide', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'sns_options_hide', array(
	    'settings' => 'sns_options_hide',
	    'label' =>'SNSボタンを表示しない',
		'description' => '<span style="font-size:10px;">SNSボタンをプラグインなどで実装する場合に、チェックをいれれば独自のSNSボタンが非表示になります。</span>',
	    'section' => 'postpage_section',
	    'type' => 'checkbox',
	));

    $wp_customize->add_setting('post_options_eyecatch', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'post_options_eyecatch', array(
	    'settings' => 'post_options_eyecatch',
	    'label' =>'記事・固定ページでアイキャッチ画像を表示しない',
		'description' => '<span style="font-size:10px;">こちらにチェックをいれると記事ページにてアイキャッチ画像を自動出力しないようにします。</span>',
	    'section' => 'postpage_section',
	    'type' => 'checkbox',
	));

    $wp_customize->add_setting('post_options_date', array(
	   'type'  => 'option',
	   'default' => 'undo_off',
	));
	$wp_customize->add_control( 'post_options_date', array(
	    'settings' => 'post_options_date',
	    'label' =>'投稿日・更新日表示設定',
		'description' => '<span style="font-size:10px;">投稿日・更新日を非表示にすることができます。※CSSで非表示にするだけなので、ソースは出力されます。</span>',
	    'section' => 'postpage_section',
	    'type' => 'radio',
	    'choices' => array(
            'undo_off' => '投稿日のみ表示する',
            'date_on' => '投稿日・更新日を表示する',
            'date_off' => '投稿日・更新日を表示しない',
        ),
	));

    $wp_customize->add_setting('fbbox_options_url', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'fbbox_options_url', array(
	    'settings' => 'fbbox_options_url',
	    'label' =>'記事下にfacebookいいねボックスを表示',
		'description' => '<span style="font-size:10px;">facebookページのURLを入力 ※個人ページURLは使用できません。</span>',
	    'section' => 'postpage_section',
	));
}
add_action( 'customize_register', 'opencage_postpage_customizer' );


function theme_customize_register($wp_customize) {
    $wp_customize->add_section( 'option_section', array(
        'title'          =>'> その他オプション',
        'priority'       => 30,
    ));
    $wp_customize->add_setting('side_options_header_search', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'side_options_header_search', array(
	    'settings' => 'side_options_header_search',
	    'label' =>'ヘッダーのサイト内検索を表示する',
	    'section' => 'option_section',
	    'type' => 'checkbox',
	));

    $wp_customize->add_setting('side_options_description', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'side_options_description', array(
	    'settings' => 'side_options_description',
	    'label' =>'サイトディスクリプションを表示しない',
	    'section' => 'option_section',
	    'type' => 'checkbox',
	));
    $wp_customize->add_setting('side_options_headercenter', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'side_options_headercenter', array(
	    'settings' => 'side_options_headercenter',
	    'label' =>'ヘッダーを中央配置にする',
	    'section' => 'option_section',
	    'type' => 'checkbox',
	));

    $wp_customize->add_setting('side_options_right', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'side_options_right', array(
	    'settings' => 'side_options_right',
	    'label' =>'メインカラムを右側に変更する',
		'description' => '<span style="font-size:10px;">サイドバーと記事部分を入れ替えます（※PC表示）</span>',
	    'section' => 'option_section',
	    'type' => 'checkbox',
	));
    $wp_customize->add_setting('side_options_animatenone', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'side_options_animatenone', array(
	    'settings' => 'side_options_animatenone',
	    'label' =>'アニメーションを使用しない',
		'description' => '<span style="font-size:10px;">サイト全体のアニメーション機能がOFFになります。※トップページのみ適用するなどの機能はありません。</span>',
	    'section' => 'option_section',
	    'type' => 'checkbox',
	));

    $wp_customize->add_setting('opencage_toppage_archivelayout', array(
	   'type'  => 'option',
	   'default' => 'toplayout-simple',
	));
	$wp_customize->add_control( 'opencage_toppage_archivelayout', array(
	    'settings' => 'opencage_toppage_archivelayout',
	    'label' =>'[PC]トップページ記事レイアウト',
	    'section' => 'option_section',
	    'type' => 'radio',
	    'choices' => array(
            'toplayout-simple' => 'シンプル',
            'toplayout-card' => 'カード型',
            'toplayout-big' => 'ビッグ',
        ),
	));

    $wp_customize->add_setting('opencage_toppage_sp_archivelayout', array(
	   'type'  => 'option',
	   'default' => 'toplayout-card',
	));
	$wp_customize->add_control( 'opencage_toppage_sp_archivelayout', array(
	    'settings' => 'opencage_toppage_sp_archivelayout',
	    'label' =>'[SP]トップページ記事レイアウト',
		'description' => '<span style="font-size:10px;">※PC画面では確認できません。実機にてご確認ください。</span>',
	    'section' => 'option_section',
	    'type' => 'radio',
	    'choices' => array(
            'toplayout-simple' => 'シンプル',
            'toplayout-card' => 'カード型',
            'toplayout-big' => 'ビッグ',
        ),
	));

    $wp_customize->add_setting('opencage_archivelayout', array(
	   'type'  => 'option',
	   'default' => 'toplayout-simple',
	));
	$wp_customize->add_control( 'opencage_archivelayout', array(
	    'settings' => 'opencage_archivelayout',
	    'label' =>'[PC]その他一覧ページ記事レイアウト',
	    'section' => 'option_section',
	    'type' => 'radio',
	    'choices' => array(
            'toplayout-simple' => 'シンプル',
            'toplayout-card' => 'カード型',
            'toplayout-big' => 'ビッグ',
        ),
	));

    $wp_customize->add_setting('opencage_sp_archivelayout', array(
	   'type'  => 'option',
	   'default' => 'toplayout-card',
	));
	$wp_customize->add_control( 'opencage_sp_archivelayout', array(
	    'settings' => 'opencage_sp_archivelayout',
	    'label' =>'[SP]その他一覧ページ記事レイアウト',
		'description' => '<span style="font-size:10px;">※PC画面では確認できません。実機にてご確認ください。</span>',
	    'section' => 'option_section',
	    'type' => 'radio',
	    'choices' => array(
            'toplayout-simple' => 'シンプル',
            'toplayout-card' => 'カード型',
            'toplayout-big' => 'ビッグ',
        ),
	));

}
add_action( 'customize_register', 'theme_customize_register' );


function opencage_head_theme_customizer($wp_customize) {
    $wp_customize->add_section( 'head_section', array(
        'title'          =>'> アクセス解析コード',
        'priority'       => 30,
    ));
    $wp_customize->add_setting('other_options_ga', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'other_options_ga', array(
	    'settings' => 'other_options_ga',
	    'label' =>'GoogleAnalyticsタグ',
		'description' => '<span style="font-size:10px;">Google Analyticsの認証IDを入力してください。（UA-xxxxxxxx-xx）</span>',
	    'section' => 'head_section',
	));
    $wp_customize->add_setting('other_options_headcode', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'other_options_headcode', array(
	    'label' =>'headタグ',
		'description' => '<span style="font-size:10px;"><head>タグ内に解析コードなどを入力したい場合はご記入いただけます。※PHPなどのプログラムファイルは動作しません。</span>',
	    'settings' => 'other_options_headcode',
	    'type' => 'textarea',
	    'section' => 'head_section',
	));
}
add_action( 'customize_register', 'opencage_head_theme_customizer' );