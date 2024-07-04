<?php get_header(); ?>
<section class="sv">
  <div class="wrap12">
    <img src="<?php echo get_template_directory_uri();?>/images/news/sv.png" alt="">
  </div>
</section>
<section class="h2">
  <div class="wrap12">
    <h2>
      <img src="<?php echo get_template_directory_uri();?>/images/news/h2.png" alt="">
    </h2>
  </div>
</section>
<div class="wrap12 flex2 under-wrap">
  <section class="main-wrap archive-news">
    <article class="tax-link">
      <a href="<?php echo get_home_url();?>/news" class="remove">すべて表示する</a>
      <a href="<?php echo get_home_url();?>/news_cat/all" class="all">全ての方へ</a>
      <a href="<?php echo get_home_url();?>/news_cat/synthesis" class="synthesis">社会福祉総合施設</a>
      <a href="<?php echo get_home_url();?>/news_cat/op" class="op">特別養護老人ホーム</a>
      <a href="<?php echo get_home_url();?>/news_cat/y-ns" class="y-ns">幼保連携型認定こども園</a>
      <a href="<?php echo get_home_url();?>/news_cat/ns" class="ns">保育園</a>
    </article>
    <article class="news-list">
      <ul>
        <?php
        $tarms = get_the_terms( $post -> ID ,'news_cat' );
        foreach ($tarms as $tarm) {
          $tarmname = $tarm -> slug;
        }
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts( array(
          'post_type'=>'news',
          'posts_per_page' => 10,
          'paged' => $paged,
          'tax_query' => array(
            array(
              'taxonomy' => 'news_cat', // カスタム分類 Products-cat
              'field' => 'slug',
              'terms' => $tarmname, // ターム item1 で絞り込む
            )
          )
        )
      );
      ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php
        $terms = wp_get_object_terms($post->ID,'news_cat');
        foreach($terms as $term){
          $cat = $term->name;
          $slug = $term->slug;
        }
        ?>
        <li><a href="<?php echo get_permalink();?>">
          <p class="days"><?php echo get_the_date("Y.m.d");?></p>
          <p class="tag <?php echo $slug;?>"><?php echo $cat;?></p>
          <p class="text"><?php echo get_the_title();?></p>
        </a></li>
      <?php endwhile; else : ?>
        <div class="no-result">該当なし<?php echo($month)?></div>
      <?php endif; ?>
    </ul>
    <?php
    if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
    wp_reset_query();
    ?>
  </article>
</section>
<section class="sidebar">
  <?php get_sidebar();?>
</section>
</div>
<?php get_footer(); ?>
