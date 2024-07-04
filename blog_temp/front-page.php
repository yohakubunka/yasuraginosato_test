<?php get_header(); ?>
<div class="index">
  <section class="concept">
    <div class="wrap12">
      <h2><img src="<?php echo get_template_directory_uri(); ?>/images/index/h2-01.png" alt=""></h2>
      <p class="text scale">
        <img src="<?php echo get_template_directory_uri(); ?>/images/index/concept-text.png" alt="">
      </p>
      <article class="flex50">
        <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/index/concept-img01.png" alt=""></p>
        <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/index/concept-img02.png" alt=""></p>
      </article>
    </div>
  </section>
  <section class="facility">
    <div class="wrap12">
      <h2><img src="<?php echo get_template_directory_uri(); ?>/images/index/h2-02.png" alt=""></h2>
      <article class="flex33">
        <?php
          $args = array(
            'post_type' => 'facility', // カスタム投稿タイプ Products
            'posts_per_page' => -1,
          );
          $the_query = new WP_Query($args); if($the_query->have_posts()):
        ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <a href="<?php echo get_permalink();?>">
            <img src="<?php the_field("thumbs");?>" alt="">
          </a>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        <?php endif; ?>
      </article>
    </div>
  </section>
  <section class="news">
    <div class="wrap12">
      <h2><img src="<?php echo get_template_directory_uri(); ?>/images/index/h2-03.png" alt=""></h2>
      <article class="list">
        <ul>
          <?php
            $args = array(
              'post_type' => 'news', // カスタム投稿タイプ Products
              'posts_per_page' => 3,
            );
            $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
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
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
          <?php endif; ?>
        </ul>
      </article>
      <a href="<?php echo get_home_url();?>/news" class="link"><img src="<?php echo get_template_directory_uri(); ?>/images/index/news-more.png" alt=""></a>
    </div>
  </section>
  <section class="access">
    <div class="wrap12">
      <h2><img src="<?php echo get_template_directory_uri(); ?>/images/index/h2-04.png" alt=""></h2>
      <article class="flex50">
        <?php
          $args = array(
            'post_type' => 'access', // カスタム投稿タイプ Products
            'posts_per_page' => -1,
          );
          $the_query = new WP_Query($args); if($the_query->have_posts()):
        ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <div class="single">
            <div class="img"><img src="<?php the_field("thumbs");?>" alt=""></div>
            <div class="info">
              <h3><span><?php the_field("sub");?></span><br><?php echo get_the_title();?></h3>
              <p class="address">〒<?php the_field("a-number");?><br><?php the_field("address");?></p>
              <p class="tell"><i class="fa fa-phone-square" aria-hidden="true"></i><?php the_field("tell");?></p>
              <p class="map"><a href="<?php the_field("g-map");?>" target="_blank"><i class="fa fa-map" aria-hidden="true"></i> Googleマップへ <i class="fa fa-window-restore" aria-hidden="true"></i></a></p>
            </div>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        <?php endif; ?>
      </article>
    </div>
  </section>
  <section class="info">
    <div class="wrap12 flex50">
      <article class="contact">
        <h2><img src="<?php echo get_template_directory_uri(); ?>/images/index/h2-05.png" alt=""></h2>
        <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/index/tell.png" alt=""></p>
        <p class="link"><a href="<?php echo get_home_url();?>/contact"><img src="<?php echo get_template_directory_uri(); ?>/images/index/contact-link.png" alt=""></a></p>
      </article>
      <article class="link">
        <h2><img src="<?php echo get_template_directory_uri(); ?>/images/index/h2-06.png" alt=""></h2>
        <div class="banner">
          <a href="http://www.iryou-ks.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/index/banner01.png" alt=""></a>
          <a href="https://nagoya-wc.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/index/banner02.png" alt=""></a>
          <a href="http://yohaku-bunka.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/index/banner03.png" alt=""></a>
        </div>
      </article>
    </div>
  </section>
</div>
<?php get_footer(); ?>
