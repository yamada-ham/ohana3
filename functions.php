<?php
add_theme_support( 'post-thumbnails' );
add_image_size('size1',800,500,true);

$arg = array(
		'label' => 'メニュー',
		'labels' => array(
			'singular_name' => 'メニュー',
			'add_new_item' => 'メニューを追加',
			'add_new' => '新規追加',
			'new_item' => '新規投稿',
			'view_item' => 'メニューを表示',
			'not_found' => 'メニューは見つかりませんでした',
			'not_found_in_trash' => 'ゴミ箱にメニューはありません。',
			'search_items' => 'メニューを検索',
		),
		'public' => true,
		'hierarchical' => false,
		'menu_position' => 6,
		'supports' => array('title','editor','author','thumbnail',
		'excerpt','comments','custom-fields' ,'revisions'),
		'has_archive' => true
	);
	register_post_type('menu', $arg);

function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];

    if(empty($first_img)){ //Defines a default image
        $first_img = "/images/default.jpg";
    }
return $first_img;
}

// 基本設定
function mytheme_setup() {

	// ページのタイトルを出力
	add_theme_support( 'title-tag' );

	// HTML5対応
	add_theme_support( 'html5', array( 'style', 'script' ) );

	// アイキャッチ画像
	add_theme_support( 'post-thumbnails' );

	// ナビゲーションメニュー
	register_nav_menus( array(
		'primary' => 'メイン',
	) );

	// 編集画面用のCSS
	add_theme_support( 'editor-styles' );
	add_editor_style( 'editor-style.css' );

	// グーテンベルク由来のCSS（theme.min.css）
	add_theme_support( 'wp-block-styles' );

	// 埋め込みコンテンツのレスポンシブ化
	add_theme_support( 'responsive-embeds' );

}
add_action( 'after_setup_theme', 'mytheme_setup' );


// ウィジェット
function mytheme_widgets() {

	register_sidebar( array(
		'id' => 'sidebar-notice',
		'name' => 'お知らせ',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	) );

	register_sidebar( array(
		'id' => 'sidebar-food',
		'name' => 'お品書き',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	) );

	register_sidebar( array(
		'id' => 'sidebar-company',
		'name' => '企業情報',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	) );

}
add_action( 'widgets_init', 'mytheme_widgets' );


// CSS
function mytheme_enqueue() {

	//テーマのCSS
	wp_enqueue_style( 'mytheme-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ) );

}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue' );

// ロゴの設置の設定
function theme_customize($wp_customize){
	//ロゴ画像
	$wp_customize->add_section( 'logo_section', array(
		'title' => 'ロゴ画像', //セクションのタイトル
		'priority' => 60, //セクションの位置
		'description' => 'ロゴ画像を使用する場合はアップロードしてください。画像を使用しない場合はタイトルがテキストで表示されます。', //セクションの説明
	));

		$wp_customize->add_setting( 'logo_url' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_url', array(
			'label' => 'ロゴ画像',//セッティングのタイトル
			'section' => 'logo_section', //セクションID
			'settings' => 'logo_url', //セッティングID
			'description' => 'ロゴ画像を設定してください。', //セッティングの説明
		)));
}
add_action( 'customize_register', 'theme_customize' );

/* テーマカスタマイザーで設定された画像のURLを取得
---------------------------------------------------------- */
//ロゴ画像
function get_the_logo_url(){
	return esc_url( get_theme_mod( 'logo_url' ) );
}
