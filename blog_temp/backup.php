<?php get_header(); ?>
<div class="single wrap12">
  <article class="inner">
    <?php
      $cat = get_the_category();
      $cat_id = $cat[0]->name;
      $cat_slug = $cat[0]->slug;
    ?>
    <p class="dt"><span class="days"><?php echo get_the_date("Y.m.d"); ?></span><span class="tag <?php echo $cat_slug;?>"><?php echo $cat_id;?></span></p>
    <h2 class="jp"><?php echo get_the_title();?></h2>
    <!--<h2 class="en"><?php //echo the_field("en-title");?></h2>-->
    <div class="main-content jp">
      <?php
      $this_content= wpautop($post->post_content);
      echo $this_content;
      ?>
    </div>
    <div class="en main-content">
      <?php //the_field("en-content");?>
    </div>
  </article>
  <article class="sidebar">
    <?php get_sidebar();?>
  </article>
</div>
<?php get_footer(); ?>
