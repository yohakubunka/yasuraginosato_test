<footer>
  <section class="pagetop">
    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/common/pagetop.png" alt=""></a>
  </section>
  <div class="wrap12">
    <article class="logo">
      <a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/f-logo.png" alt=""></a>
    </article>
    <article class="info">
      <p>〒462－0016 名古屋市北区西味鋺一丁目901番地の15<br>TEL:（052）901 - 5255　<br class="sp">FAX:（052）901 - 5999<span class="sp">　</span></p>
    </article>
    <nav class="footer-nav pc2">
      <a href="<?php echo get_home_url();?>">ホーム</a>
      <a href="<?php echo get_home_url();?>/company">法人案内</a>
      <a href="<?php echo get_home_url();?>/facility">施設の紹介</a>
      <a href="<?php echo get_home_url();?>/recruit">採用情報</a>
      <a href="<?php echo get_home_url();?>/news">お知らせ</a>
      <a href="<?php echo get_home_url();?>/contact">お問い合わせ</a>
      <a href="<?php echo get_home_url();?>/privacy">プライバシーポリシー</a>
    </nav>
  </div>
  <section class="copy">
    <div class="wrap12">
      <p>&copy; 2017 社会福祉法人 やすらぎの郷</p>
    </div>
  </section>
</footer>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/slick.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/common.js"></script>
<?php
  $post = get_page(get_the_ID());
  $slug = $post->post_name;
  $type = get_post_type();
?>
<?php if($type == "facility"):?>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/facility.js"></script>
<?php elseif($type == "recruit"):?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/recruit.js"></script>
<?php endif;?>
<?php wp_footer(); ?>
</body>
</html>
