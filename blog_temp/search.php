<?php
if(!isset($_SESSION)){
  session_start();
}
?>
<?php get_header(); ?>
<div class="wrap13 archive-products">
  <section class="mv">
    <div class="img"><img src="<?php echo get_template_directory_uri();?>/images/mv.jpg" alt=""></div>
  </section>
  <section class="news">
    <p class="text"><span>NOTICE</span>GALLERY YUIのインターネットストアがオープン致しました。</p>
  </section>
  <div class="inner-wrap">
    <section class="main-wrap archive-products">
      <?php
        $s = $_GET["s"];
      ?>
      <h2 class="bc">商品一覧 | <?php if($s){ ?>検索キーワード：<?php echo $s; ?><br><?php } ?></h2>
      <h3>検索結果<span>- Search Results -</span></h3>
      <ul class="list" id="Result">
        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          query_posts( array(
            'post_type'=>'products',
            'posts_per_page' => -1,
            'paged' => $paged,
            's' => $s,
            )
          );
        ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php
          $terms = wp_get_object_terms($post->ID,'products_cat');
          foreach($terms as $term){
            $cat = $term->name;
            $slug = $term->slug;
          }
          ?>
          <li class="single">
            <a href="<?php echo get_permalink();?>">
              <p class="img"><img src="<?php the_field('thumbs');?>" alt=""></p>
              <h4><?php echo get_the_title();?></h4>
              <p class="price">&yen;<b class="yen"><?php the_field('price');?></b> <span>税込</span></p>
            </a>
          </li>
        <?php endwhile; else : ?>
        </ul>
        <p class="no-result" style="text-align:center;">該当する商品はありません。</p>
        <?php endif; ?>
        <?php wp_reset_query();?>
      </ul>
      <article class="history-list">
        <h3>最近チェックしたアイテム<span>- History -</span></h3>
        <ul class="list" id="Result">
          <?php if (isset($_SESSION['watched_page'])): ?>
            <?php $i = 0; foreach ($_SESSION['watched_page'] as $wp): ?>
              <?php if ($i >= 3): ?>
                <?php break; ?>
                <?php else: ?>
                <li class="single">
                  <a href="<?php echo get_permalink($wp);?>">
                    <p class="img"><img src="<?php the_field('thumbs',$wp);?>" alt=""></p>
                    <h4><?php echo get_the_title($wp);?></h4>
                    <p class="price">&yen; <b class="yen"><?php the_field("price",$wp);?></b> <span>税込</span></p>
                  </a>
                </li>
                <?php $i++; ?>
              <?php endif; ?>
            <?php endforeach; ?>
          <?php else:?>
          </ul>
            <section class="no-products">
              <p class="text">
                履歴はありません。
              </p>
            </section>
          <?php endif; ?>
        </ul>
      </article>
    </section>
    <section class="sidebar">
      <?php get_sidebar();?>
    </section>
  </div>
</div>
<?php get_footer(); ?>
