<?php get_header(); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post();
  the_content();
  endwhile; endif;?>
  <?php $pageId = get_post_type();?>
<?php get_footer(); ?>
