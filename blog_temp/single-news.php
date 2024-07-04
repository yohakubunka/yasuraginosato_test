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
  <section class="main-wrap single-news">
    <h3><?php echo get_the_title();?></h3>
    <p class="tag">
      <?php
      $terms = wp_get_object_terms($post->ID,'news_cat');
      foreach($terms as $term){
        $cat = $term->name;
        $slug = $term->slug;
      }
      ?>
      <?php echo get_the_date("Y.m.d");?><span> / <?php echo $cat;?> / <?php the_field("facility");?></span>
    </p>
    <article class="main-content">
      <?php
      $this_content= wpautop($post->post_content);
      echo $this_content;
      ?>
    </article>
  </section>
  <section class="sidebar">
    <?php get_sidebar();?>
  </section>
</div>
<?php get_footer(); ?>
