<?php

add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'news', [ // 投稿タイプ名の定義
        'labels' => [
            'name'          => 'ニュース', // 管理画面上で表示する投稿タイプ名
            'singular_name' => 'news',    // カスタム投稿の識別名
        ],
        'public'        => true,  // 投稿タイプをpublicにするか
        'has_archive'   => false, // アーカイブ機能ON/OFF
        'menu_position' => 5,     // 管理画面上での配置場所
        'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
    ]);

    $args_team_cat = array(
       'label' => 'カテゴリー',
       'public' => true,
       'show_ui' => true,
       'show_in_nav_menus' => true,
       'show_admin_column' => true,
       'hierarchical' => true,
       'query_var' => true
     );
    register_taxonomy('news_cat','news',$args_team_cat);
}

?>
