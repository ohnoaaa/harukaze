<?php
// 固定ページ画像パス
function replaceImagePath($arg) {
    $content = str_replace('"<?php echo get_template_directory_uri(); ?>/images/', '"' . get_bloginfo('template_directory') . '/<?php echo get_template_directory_uri(); ?>/images/', $arg);
    $content = str_replace(',<?php echo get_template_directory_uri(); ?>/images/', ',' . get_bloginfo('template_directory') . '/<?php echo get_template_directory_uri(); ?>/images/', $content); // ミスがあったため修正
    return $content;
}
add_action('the_content', 'replaceImagePath');
add_filter('acf/settings/remove_wp_meta_box', '__return_false');
add_theme_support('post-thumbnails');

/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

  if ( 'post' == $post_type ) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'blogs'; //任意のスラッグ名
  }
  return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );




// カスタム投稿
// add_action( 'init', 'create_post_type' );
// function create_post_type() {
//   register_post_type('referee',// 投稿タイプ名の定義
//     array(
//       'label' => '審判',//表示名
//       'description' => '',//説明
//       'public' => true,// 投稿タイプをパブリックにするか否か
//       'show_ui' => true,
//       'show_in_menu' => true,
//       'capability_type' => 'post',
//       'hierarchical' => false,//固定ページのように親ページを指定するならtrue
//       'rewrite' => true,
//       'query_var' => false,// スラッグでURLをリクエストできる
//       'has_archive' => true,// アーカイブを有効にするか否か
//       'exclude_from_search' => false,// サイト内検索から除外する
//       'menu_position' => 27,// 管理画面上でどこに配置するか
//       'supports' => array(
//         'title',
//         'editor',
//         'revisions',
//         'page-attributes',
//         'comments'
//       ),
//     )
//   );
//   register_taxonomy(
//     'referee_cat',// 新規カスタムタクソノミー名
//     'referee',// 新規カスタムタクソノミーを反映させる投稿タイプの定義名
//     array(
//       'label' => '対応地域',// 表示するカスタムタクソノミー名
//       'hierarchical' => true,//固定ページのように親ページを指定するならtrue
//       'show_ui' => true,
//       'query_var' => true,// スラッグでURLをリクエストできる
//       'rewrite' => array('slug' => 'referee'),// カスタムタクソノミースラッグ名
//       'singular_label' => '対応地域'
//     )
//   );
// }
