<?php
    function custom_theme_support(){
    //テーマサポート
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' ); //アイキャッチ画像追加


    register_nav_menus(array(//メニュー位置追加　・上かサイドか下か
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
        wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.5.0.min.js','','', true );
        wp_enqueue_script('my_script',get_template_directory_uri().'/js/script.js');
    }
    add_action( 'wp_enqueue_scripts', 'Hamburger_script' );

    

    //カスタム投稿タイプの記述

    function cpt_register_works() { //add_actionの２つのパラメーターを定義
        $labels = [
            "singular_name" => "Works",
            "edit_item" => "Works",
        ];
        $args = [
            "label" => "Works", //管理画面に出てくる名前
            "labels" => $labels,
            "description" => "",
            "public" => true,
            "show_in_rest" => true,
            "rest_base" => "",
            "rest_controller_class" => "WP_REST_Posts_Controller",
            "has_archive" => true,
            "delete_with_user" => false,
            "exclude_from_search" => false,
            "map_meta_cap" => true,
            "hierarchical" => true,
            "rewrite" => [ "slug" => "works", "with_front" => true ], //スラッグをworksに設定
            "query_var" => true,
            "menu_position" => 5,
            "supports" => [ "title", "editor", "thumbnail" ],
        ];
        register_post_type( "works", $args );
    }
    add_action( 'init', 'cpt_register_works' );

    function cpt_register_dep() { //add_actionの２つのパラメーターを定義
        $labels = [
            "singular_name" => "dep",
        ];
        $args = [
            "label" => "カテゴリー",
            "labels" => $labels,
            "publicly_queryable" => true,
            "hierarchical" => true,
            "show_in_menu" => true,
            "query_var" => true,
            "rewrite" => [ 'slug' => 'dep', 'with_front' => true, ], //カテゴリーのスラッグ
            "show_admin_column" => false,
            "show_in_rest" => true,
            "rest_base" => "dep",
            "rest_controller_class" => "WP_REST_Terms_Controller",
            "show_in_quick_edit" => false,
            ];
        register_taxonomy( "dep", [ "works" ], $args ); //「works」というカスタム投稿タイプにカテゴリーを追加
    }
    add_action( 'init', 'cpt_register_dep' );
    ?>

<?php
//投稿→カテゴリのpを外す
remove_filter('term_description','wpautop');
//抜粋」に登録されたテキストを表示する際に、<p>タグを除去
remove_filter('the_excerpt', 'wpautop');
// 記事の自動整形を無効化
remove_filter('the_content', 'wpautop');
remove_filter('the_title', 'wpautop');  
?>