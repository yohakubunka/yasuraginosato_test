<?php
  // テンプレート読み込みフィルターをカスタマイズ
  add_filter('template_include','custom_search_template');
  function custom_search_template($template){
      // 検索結果の時
      if ( is_search() ) {
          // 表示する投稿タイプを取得
          $post_types = get_query_var('post_type');
          // search-{$post_type}.php の読み込みルールを追加
          foreach ( (array) $post_types as $post_type )
              $templates[] = "search-{$post_type}.php";
          $templates[] = 'search.php';
          $template = get_query_template('search',$templates);
      }
      return $template;
  }
  function custom_search($search, $wp_query  ) {
      //query['s']があったら検索ページ表示
      if ( isset($wp_query->query['s']) ) $wp_query->is_search = true;
      return $search;
  }
  add_filter('acf/fields/google_map/api', function () {
    return array(
        'libraries' => 'places',
        'key'        => 'AIzaSyBU9u6I07HyAEjLoFSKagkVenRpBradC1c', // Googleで発行したキーを用意する
        'client'     => ''
      );
  });

  register_sidebar( array(
    'name' => 'サイドバーウィジェット',
    'id' => 'sidebar',
    'description' => 'サイドバーのウィジェットエリア',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
  ) );

  add_filter( 'wpcf7_validate_email', 'wpcf7_text_validation_filter_extend', 11, 2 );
  add_filter( 'wpcf7_validate_email*', 'wpcf7_text_validation_filter_extend', 11, 2 );
  function wpcf7_text_validation_filter_extend( $result, $tag ) {
  global $my_email_confirm;
  $tag = new WPCF7_Shortcode( $tag );
  $name = $tag->name;
  $value = isset( $_POST[$name] )
  ? trim( wp_unslash( strtr( (string) $_POST[$name], "\n", " " ) ) )
  : '';
  if ($name == "your-email"){
  $my_email_confirm=$value;
  }
  if ($name == "your-email_confirm" && $my_email_confirm != $value){
  $result->invalidate( $tag,"確認用のメールアドレスが一致していません");
  }

  return $result;
  }

  // 管理者権限を持たないユーザーは管理者バーを非表示
  if ( ! current_user_can( 'manage_options' ) ) {
  show_admin_bar( false );
  }

?>
