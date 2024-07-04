<?php get_header(); ?>
<section class="sv">
  <div class="wrap12">
    <img src="<?php echo get_template_directory_uri();?>/images/facility/sv.png" alt="">
  </div>
</section>
<section class="h2">
  <div class="wrap12">
    <h2>
      <img src="<?php echo get_template_directory_uri();?>/images/facility/h2.png" alt="">
    </h2>
  </div>
</section>
<section class="archive-facility">
  <div class="wrap12">
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
          <p class="more"><img src="<?php echo get_template_directory_uri();?>/images/facility/more.png" alt=""></p>
        </a>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </article>
  </div>
</section>
<?php get_footer(); ?>
