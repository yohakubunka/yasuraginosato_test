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
  <section class="main-wrap archive-recruit">
    <article class="searchbox">
      <?php echo do_shortcode('[searchandfilter id="144"]');?>
      <?php
       $test = array($_GET["_sft_koyou"]);
       echo var_dump($test);
       echo("test");
      ?>
    </article>
  </section>
  <section class="sidebar">
    <?php get_sidebar();?>
  </section>
</div>
<?php get_footer(); ?>
