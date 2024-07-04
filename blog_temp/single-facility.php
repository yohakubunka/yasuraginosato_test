<?php get_header(); ?>
<section class="sv">
  <div class="wrap12">
    <img src="<?php the_field('sv');?>" alt="">
  </div>
</section>
<section class="h2">
  <div class="wrap12">
    <h2>
      <img src="<?php the_field('h2');?>" alt="">
    </h2>
  </div>
</section>
<div class="wrap12 flex2 under-wrap">
  <?php
  $terms = wp_get_object_terms($post->ID,'facility_cat');
  foreach($terms as $term){
    $cat = $term->name;
    $slug = $term->slug;
  }
  ?>
  <?php if($slug == 'synthesis'):?>
    <?php include_once("synthesis.php"); ?>
    <?php include_once __DIR__ . '/nursary.php'; ?>
  <?php elseif($slug == 'old'):?>
    <?php include_once("old.php"); ?>
    <?php include_once __DIR__ . '/nursary.php'; ?>
  <?php elseif($slug == 'nursary'):?>
    <?php include_once __DIR__ . '/nursary.php'; ?>
  <?php elseif($slug == 'authorization'):?>
    <?php include_once __DIR__ . '/nursary.php'; ?>
  <?php endif;?>
  <section class="sidebar">
    <?php get_sidebar();?>
  </section>
</div>
<?php get_footer(); ?>
