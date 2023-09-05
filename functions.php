<?php
    function custom_theme_support(){
    //テーマサポート
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' ); //アイキャッチ画像追加


    register_nav_menus(array(//メニュー位置追加
        'global_nav'=>esc_html__('global navigation','Hamburger'),
        'sidebar_nav'=>esc_html__('sidebar navigation','Hamburger'),
        'footer_nav'=>esc_html__('footer navigation','Hamburger'),
    
    ));
    add_theme_support('editor-styles');
    add_editor_style();
}
add_action('after_setup_theme','custom_theme_support');



    //タイトル出力
    function Hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'Hamburger_title' );

    function Hamburger_script() {
        wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() );
        wp_enqueue_style( 'Sacramento', '//fonts.googleapis.com/css?family=Sacramento&amp;amp;subset=latin-ext', array() );
        wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
        wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '4.5.0' );
        wp_enqueue_style( 'Hamburger', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0.0' );
    }
    add_action( 'wp_enqueue_scripts', 'Hamburger_script' );

    


