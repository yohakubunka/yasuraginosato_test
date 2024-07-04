<script>
(function(d) {
  var config = {
    kitId: 'vsw6nty',
    scriptTimeout: 3000,
    async: true
  },
  h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);
</script>

<?php $post_id = get_the_ID(); ?>
<?php if ($post_id == 32): ?>
  <!-- 準備中：<a href="javascript:void(0);" onclick="alert('準備中');"> -->
  <a href="javascript:void(0);" onclick="alert('準備中');">
    <div class="reserved-icon oasis-y">
      <p>
        <img src="<?php echo get_template_directory_uri() ?>/images/common/reserv4.svg" /><br>
        <span>採用・見学<br>資料請求</span>
      </p>
    </div>
  </a>
  <?php elseif ($post_id == 33):?>
    <a href="javascript:void(0);" onclick="alert('準備中');">
    <div class="reserved-icon oasis-k">
      <p>
        <img src="<?php echo get_template_directory_uri() ?>/images/common/reserv4.svg" /><br>
        <span>採用・見学<br>資料請求</span>
      </p>
    </div>
  </a>
  <?php elseif ($post_id == 730):?>
    <a href="javascript:void(0);" onclick="alert('準備中');">
    <div class="reserved-icon oasis-k">
      <p>
        <img src="<?php echo get_template_directory_uri() ?>/images/common/reserv4.svg" /><br>
        <span>採用・見学<br>資料請求</span>
      </p>
    </div>
  </a>
<?php endif; ?>

<section class="main-wrap old">
  <article class="main-img">
    <img src="<?php the_field('main01');?>" alt="">
  </article>
  <article class="thumbs">
    <p class="thumbs-img img01"><img src="<?php the_field('main01');?>" alt=""></p>
    <p class="thumbs-img img02"><img src="<?php the_field('main02');?>" alt=""></p>
    <p class="thumbs-img img03"><img src="<?php the_field('main03');?>" alt=""></p>
    <p class="thumbs-img img04"><img src="<?php the_field('main04');?>" alt=""></p>
    <p class="thumbs-img img05"><img src="<?php the_field('main05');?>" alt=""></p>
    <p class="thumbs-img img06"><img src="<?php the_field('main06');?>" alt=""></p>
  </article>
  <article class="concept">
    <div class="pc">
      <img src="<?php the_field('concept');?>" alt="">
    </div>
    <div class="sp">
      <p class="text"><?php the_field('concept-text');?></p>
    </div>
  </article>
  <nav class="inner-nav">
    <a href="#cont01">施設概要</a>
    <a href="#cont02">お知らせ</a>
    <a href="#cont03">サービス概要</a>
    <a href="#cont04">アクセスマップ</a>
  </nav>
  <article class="info" id="cont01">
    <h3><img src="<?php echo get_template_directory_uri();?>/images/facility/h3-01.png" alt=""></h3>
    <div class="list">
      <dl>
        <dt>所在地</dt>
        <dd><?php the_field("address");?></dd>
      </dl>
      <dl>
        <dt>電話</dt>
        <dd><?php the_field("tell");?></dd>
      </dl>
      <dl>
        <dt>設備</dt>
        <dd><?php the_field("equipment");?></dd>
      </dl>
      <dl>
        <dt>建物</dt>
        <dd><?php the_field("building");?></dd>
      </dl>
      <dl>
        <dt>事業内容</dt>
        <dd><?php the_field("works");?></dd>
      </dl>
      <dl>
        <dt>関係書類</dt>
        <dd>
          <?php
          $cf_group = SCF::get('facility-document');//カスタムグループの取得
          foreach ($cf_group as $field_name => $field_value ): //foreachでkeyとvalueの取得 ?>
            <?php //値を変数の格納する
            $document_title = $field_value['document-title'];//書類のタイトルの取得
            $document_url = esc_url(wp_get_attachment_url($field_value['document-PDF']));//書類のPDFの取得
            ?>
            <a class="PDF-link" href="<?= $document_url ?>" target="_blank"><?= $document_title ?></a>
          <?php endforeach; ?>
        </dd>
      </dl>
    </div>
  </article>
  <article class="news" id="cont02">
    <h3><img src="<?php echo get_template_directory_uri();?>/images/facility/h3-02.png" alt=""></h3>
    <div class="list">
      <ul>
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts( array(
          'post_type'=>'news',
          'posts_per_page' => 3,
          'paged' => $paged,
          'tax_query' => array(
            array(
              'taxonomy' => 'news_cat', // カスタム分類 Products-cat
              'field' => 'slug',
              'terms' => 'op', // ターム item1 で絞り込む
            )
          )
        )
      );
      ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li><a href="<?php echo get_permalink();?>">
          <p class="days"><?php echo get_the_date("Y.m.d");?></p>
          <p class="text"><?php echo get_the_title();?></p>
        </a></li>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    <?php endif; ?>
  </ul>
  <p class="more"><a href="<?php echo get_home_url();?>/news"><img src="<?php echo get_template_directory_uri();?>/images/facility/more02.png" alt=""></a></p>
</div>
</article>
<article class="service" id="cont03">
  <h3><img src="<?php echo get_template_directory_uri();?>/images/facility/h3-03.png" alt=""></h3>
  <div class="service-box">
    <?php the_field("service");?>
  </div>
</article>
<article class="map" id="cont04">
  <h3><img src="<?php echo get_template_directory_uri();?>/images/facility/h3-04.png" alt=""></h3>
  <p class="text">
    <?php the_field("info");?>
  </p>
  <div class="frame">
    <?php the_field("map");?>
  </div>
</article>
</section>
