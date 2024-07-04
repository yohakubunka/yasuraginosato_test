<!-- adobe fonts -->
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
<?php if ($post_id == 34): ?>
  <!-- 準備中：<a href="javascript:void(0);" onclick="alert('準備中');"> -->
  <a href="javascript:void(0);" onclick="alert('準備中');">
    <div class="reserved-icon yasuragi">
      <p>
        <img src="<?php echo get_template_directory_uri() ?>/images/common/reserv4.svg" /><br>
        <span>採用・見学<br>資料請求</span>
      </p>
    </div>
  </a>
<?php endif; ?>

<section class="main-wrap synthesis">

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
            <a class="PDF-link"href="<?= $document_url ?>" target="_blank"><?= $document_title ?></a>
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
              'terms' => 'synthesis', // ターム item1 で絞り込む
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
  <!--block-->
  <div class="flex-block">
    <p class="text">
      <span>事業所内保育</span>
      地域のお子様をお預かりすると共に、社会福祉法人やすらぎの郷に勤務する従業員の皆様のお子様をお預かりする保育室です。乳児期のお子様がみえる従業員の方にも、お子様をお預けいただきながら安心して働いて頂くことができます。0歳から2歳までのお子様の健やかな心身の成長発達を支え、安心して日々の生活を過ごすことができる環境を整えています。
    </p>
    <p class="img">
      <img src="<?php echo get_template_directory_uri();?>/images/syn/syn-img01.png" alt="">
    </p>
  </div>
  <!--block-->
  <!-- <div class="flex-block">
    <p class="text2">
      <span>相談支援</span>
      サービス等利用計画についての相談及び作成などの支援が必要と認められる場合に、相談支援専門員が障害者の自立した生活を支え、障害者の抱える課題の解決や適切なサービス利用に向けて、よりきめ細やかく支援するものです。障害のある人の福祉に関する様々な問題について、相談支援専門員が障害のある人等からの相談に応じ、必要な情報の提供、障害福祉サービスの利用支援等を行うほか、権利擁護のための必要な援助も行います。
    </p>
  </div> -->
  <!--block-->
  <div class="flex-block">
    <p class="text2">
      <span>居宅介護支援</span>
      介護サービスその他の保健医療サービスや福社サービスを利用者が適切に利用できるように、要介護者である利用者の依頼をうけて、介護支援専門員が行う利用者の自立した日常生活の支援です。介護支援専門員は、利用者の解決すべき課題の把握（アセスメント）や、居宅介護サービス計画（ケアプラン）の作成、サービスの実施状況の把提（モニタリング）、給付管理業務、サービス事業者との連絡調整等を行います。
    </p>
  </div>
  <!--block-->
  <div class="flex-block">
    <p class="text">
      <span>障害者ケアホーム</span>
      障害者ケアホームは定員が7名、ユニットが7 名の住居になっています。また入居者の状態に応じ管理栄養士が作成したお食事や生活支援員や世話人により障害をお持ちのかたでも快道に安全に共同生活が蓉らしていただけます。
    </p>
    <p class="img">
      <img src="<?php echo get_template_directory_uri();?>/images/syn/syn-img04.png" alt="">
    </p>
  </div>
  <!--block-->
  <div class="flex-block">
    <p class="text2">
      <span>認知症グループホーム</span>
      地域密着型認知症対応型グループホームは定員が18 名、各ユニットが9 名の住居になっています。また入居者の状態に応じ管理栄養士が作成したお食事や介護職員により認知症の方が快適に安全に共同生活が暮らしていただけます。
    </p>
  </div>
  <!--block-->
  <div class="flex-block">
    <p class="text">
      <span>ショートステイ</span>
      ご家庭で療養されているご高齢者で、介護を必要とする方が、ご家族の一時的な都合（旅行・冠婚葬祭・介護疲れ等）により、短期間施設に入所していただき、食事・入浴・排泄や健康管理等の日常生活介護サービスを提供いたします。また、ご希望により福祉車両で、送迎も行います。
    </p>
    <p class="img">
      <img src="<?php echo get_template_directory_uri();?>/images/syn/syn-img06.png" alt="">
    </p>
  </div>
  <!--block-->
  <div class="flex-block">
    <p class="text2">
      <span>特別養護老人ホーム</span>
      地域密着型ユニット型施設定員29 名、各ユニットが9 名-10 名の住居になっています。“名古屋市特別養護老人ホーム優先入所指針"に基づき入所者を決定します。また入所者の状態に応じ管理栄養土が作成したお食事や看護師や介護職員により、日常の介護サービスが受けられ状態に応じた入浴方沫で快遼に暮らしていただけます。
    </p>
  </div>
  <!--block-->
  <div class="flex-block">
    <p class="text">
      <span>デイサービス</span>
      施設の最上階で日常では昧わえないパノラマが広がりまた展望風呂も殷置されておりどこか旅行に来たかのような雰囲気が味わえます。また浴室にはご利用者の状態に合わせた機械浴槽も設置されており自宅でお風呂に入れない方でも安心して入浴して頂けます。また管理栄養士が献立作成をしておりますのでお食事も状態に合わせて召し上がっていただけます。介護職員は日頃より挨拶と満面の笑みで年間行事や積極的なボランティアを受け入れているので“楽しいデイサービス”の提供を行っております。
    </p>
    <p class="img">
      <img src="<?php echo get_template_directory_uri();?>/images/syn/syn-img08.png" alt="">
    </p>
  </div>
</article>
<article class="map" id="cont04">
  <h3><img src="<?php echo get_template_directory_uri();?>/images/facility/h3-04.png" alt=""></h3>
  <p class="text">
    社会福祉総合施設やすらぎの郷<br>
    〒462－0016　名古屋市北区西味鋺一丁目901番地の15<br>
    TEL:052-901-5559
  </p>
  <div class="frame">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3259.417966560479!2d136.9111574152463!3d35.220964080304206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600373e544f652ff%3A0x49c347264e1871d3!2z44CSNDYyLTAwMTYg5oSb55-l55yM5ZCN5Y-k5bGL5biC5YyX5Yy66KW_5ZGz6Yu677yR5LiB55uu77yZ77yQ77yR4oiS77yR77yV!5e0!3m2!1sja!2sjp!4v1514186060320" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</article>
</section>
