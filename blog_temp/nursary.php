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
<?php if ($post_id == 30): ?>
  <!-- 準備中：<a href="javascript:void(0);" onclick="alert('準備中');"> -->
  <a href="https://reserva.be/oashisuajima" target="_blank">
    <div class="reserved-icon ajima">
      <p>
        <img src="<?php echo get_template_directory_uri() ?>/images/common/reserv.svg" /><br>
        <span>採用・入園<br>見学会予約</span>
      </p>
    </div>
  </a>
  <?php elseif ($post_id == 31):?>
    <a href="https://reserva.be/oashisukodomoen" target="_blank">
    <div class="reserved-icon kodomoen">
      <p>
        <img src="<?php echo get_template_directory_uri() ?>/images/common/reserv2.svg" /><br>
        <span>採用・入園<br>見学会予約</span>
      </p>
    </div>
  </a>
  <?php elseif ($post_id == 34):?>
    <a href="<?php echo get_home_url();?>/contact"  target="_blank">
    <div class="reserved-icon yasuragi">
      <p>
        <img src="<?php echo get_template_directory_uri() ?>/images/common/reserv4.svg" /><br>
        <span>採用・見学<br>資料請求</span>
      </p>
    </div>
  </a>
  <?php elseif ($post_id == 32):?>
    <a href="<?php echo get_home_url();?>/contact"  target="_blank">
    <div class="reserved-icon oasis-y">
      <p>
        <img src="<?php echo get_template_directory_uri() ?>/images/common/reserv4.svg" /><br>
        <span>採用・見学<br>資料請求</span>
      </p>
    </div>
  </a>
  <?php elseif ($post_id == 33):?>
    <a href="<?php echo get_home_url();?>/contact" target="_blank">
    <div class="reserved-icon oasis-k">
      <p>
        <img src="<?php echo get_template_directory_uri() ?>/images/common/reserv4.svg" /><br>
        <span>採用・見学<br>資料請求</span>
      </p>
    </div>
  </a>
  <?php elseif ($post_id == 574):?>
    <a href="https://reserva.be/oashisuhato" target="_blank">
    <div class="reserved-icon hatooka">
      <p>
        <img src="<?php echo get_template_directory_uri() ?>/images/common/reserv3.svg" /><br>
        <span>採用・入園<br>見学会予約</span>
      </p>
    </div>
  </a>
<?php endif; ?>

<?php
$post = get_page(get_the_ID());
$slug = $post->post_name;
?>


<!-- if hatooka case ================== -->
<?php if ($post_id == 574): ?> 

  <section class="main-wrap nursary deveShimizu">
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
          <p class="text <?php echo $slug;?>"><?php the_field('concept-text');?></p>
        </div>
      </article>
      <nav class="inner-nav">
        <a href="#cont01">施設概要</a>
        <a href="#cont03">サービス概要</a>
        <a href="#cont04">保育目標・方針</a>
        <a href="#cont05">園の一日</a>
        <a href="#cont06">園の間取り図<?php if($post_id == 30) echo "と動画"; ?></a>
        <!--<a href="#cont07">資料のダウンロード</a>-->
        <?php if(get_field("cm")):?>
          <a href="#cont09">園の取り組み</a>
          <a href="#cont08">アクセスマップ</a>
        <?php else:?>
          <a href="#cont08">アクセスマップ</a>
          <a href="" class="dammy"></a>
        <?php endif;?>
        <a href="" class="dammy"></a>
      </nav>

    <article class="info" id="cont01">
      <h3><img src="<?php echo get_template_directory_uri();?>/images/facility/h3-01.png" alt=""></h3>
      <div class="list oasis-ht">
      <dl>
            <dt>園名</dt>
            <dd><?php the_field("name");?></dd>
          </dl>
          <dl>
            <dt>所在地</dt>
            <dd><?php the_field("address");?></dd>
          </dl>
          <dl>
            <dt>電話</dt>
            <dd><?php the_field("tell");?></dd>
          </dl>
          <dl>
            <dt>FAX</dt>
            <dd><?php the_field("fax");?></dd>
          </dl>
          <dl>
            <dt>沿革</dt>
            <dd><?php the_field("enkaku");?></dd>
          </dl>
          <?php if(get_field('tenin')):?>
            <dl>
              <dt>定員</dt>
              <dd><?php the_field("tenin");?></dd>
            </dl>
          <?php endif;?>
          <dl>
            <dt>対象年齢</dt>
            <dd><?php the_field("nenrei");?></dd>
          </dl>
          <dl>
            <dt>保育時間</dt>
            <dd><?php the_field("time");?></dd>
          </dl>
          <dl>
            <dt>職員構成</dt>
            <dd><?php the_field("shokuin");?></dd>
          </dl>
          <dl>
            <dt>休園日</dt>
            <dd><?php the_field("yasumi");?></dd>
          </dl>
          <dl>
            <dt>年間行事<br>（一斉行事）</dt>
            <dd><?php the_field("year-event");?></dd>
          </dl>
          <!-- <dl>
            <dt>福祉サービス<br>第三者評価</dt>
            <dd>
              <?php
                $filefiled = get_field('evaluation');
                if($filefiled) { 
                ?>
                <a href="<?php echo $filefiled?>" target="_blank">令和2年度受審結果はこちら</a>
              <?php } ?>
              </dd>
          </dl> -->
      </div>
    </article>
    <article class="service" id="cont03">
      <h3><img src="<?php echo get_template_directory_uri();?>/images/facility/h3-03.png" alt=""></h3>
      <div class="service-box">
        <?php the_field("service");?>
      </div>
    </article>
    <article class="mk" id="cont04">
      <h3><img src="<?php echo get_template_directory_uri();?>/images/facility/h3-05.png" alt=""></h3>
      <div class="mk-box">
        <div class="mk-flex">
          <div class="left">
            <img src="<?php echo get_template_directory_uri();?>/images/facility/circle01.png" alt="">
          </div>
          <div class="right">
            <p class="f-text">
              <?php the_field("mk1");?>
            </p>
          </div>
        </div>
        <div class="mk-flex">
          <div class="left">
            <img src="<?php echo get_template_directory_uri();?>/images/facility/circle02.png" alt="">
          </div>
          <div class="right">
            <p class="s-text">
              <?php the_field("mk2");?>
            </p>
            <p class="t-text">
              <?php the_field("mk3");?>
            </p>
          </div>
        </div>
      </div>
    </article>
    <article class="days" id="cont05">
      <h3><img src="<?php echo get_template_directory_uri();?>/images/facility/h3-06.png" alt=""></h3>
      <p class="img pc">
        <img src="<?php the_field("days-pc");?>" alt="">
      </p>
      <p class="img sp">
        <img src="<?php the_field("days-sp");?>" alt="">
      </p>
    </article>
    <article class="nursary-map" id="cont06">
      <h3><img src="<?php echo get_template_directory_uri();?>/images/facility/h3-07.png" alt=""></h3>
      <p class="img pc">
        <img src="<?php the_field("nursary-map");?>" alt="">
      </p>
      <p class="text sp">
        園の間取り図をパソコンでご確認ください。
      </p>
    </article>
    <?php if(get_field("cm")):?>
      <article class="cm" id="cont09">
        <h3><img src="<?php echo get_template_directory_uri();?>/images/facility/h3-09.png" alt=""></h3>
        <?php the_field("cm");?>
      </article>
    <?php endif;?>
    <article class="map" id="cont08">
      <h3><img src="<?php echo get_template_directory_uri();?>/images/facility/h3-04.png" alt=""></h3>
      <p class="text">
        <?php the_field("info");?>
      </p>
      <div class="frame">
        <?php the_field("map");?>
      </div>
    </article>
  </section>
<!-- 2022/09/29古田追加 新施設を追加する場合は参照してください -->
<?php elseif ($post_id == 32): ?> <!--オアシス吉野-->
<?php elseif ($post_id == 33): ?> <!--オアシス楠-->
<?php elseif ($post_id == 34): ?> <!--やすらぎの郷 -->
<?php elseif ($post_id == 730): ?> <!--オアシス高遠 -->
  
<?php else: ?>  
  <!-- else other case ================== -->

    <section class="main-wrap nursary">
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
          <p class="text <?php echo $slug;?>"><?php the_field('concept-text');?></p>
        </div>
      </article>
      <nav class="inner-nav">
        <a href="#cont01">施設概要</a>
        <a href="#cont02">お知らせ</a>
        <a href="#cont03">サービス概要</a>
        <a href="#cont04">保育目標・方針</a>
        <a href="#cont05">園の一日</a>
        <a href="#cont06">園の間取り図<?php if($post_id == 30) echo "と動画"; ?></a>
        <!--<a href="#cont07">資料のダウンロード</a>-->
        <?php if(get_field("cm")):?>
          <a href="#cont09">園の取り組み</a>
          <a href="#cont08">アクセスマップ</a>
        <?php else:?>
          <a href="#cont08">アクセスマップ</a>
          <a href="" class="dammy"></a>
        <?php endif;?>
      </nav>
      <article class="info" id="cont01">
        <h3><img src="<?php echo get_template_directory_uri();?>/images/facility/h3-01.png" alt=""></h3>
        <div class="list <?php echo $slug;?>">
          <dl>
            <dt>園名</dt>
            <dd><?php the_field("name");?></dd>
          </dl>
          <dl>
            <dt>所在地</dt>
            <dd><?php the_field("address");?></dd>
          </dl>
          <dl>
            <dt>電話</dt>
            <dd><?php the_field("tell");?></dd>
          </dl>
          <dl>
            <dt>FAX</dt>
            <dd><?php the_field("fax");?></dd>
          </dl>
          <dl>
            <dt>沿革</dt>
            <dd><?php the_field("enkaku");?></dd>
          </dl>
          <?php if(get_field('tenin')):?>
            <dl>
              <dt>定員</dt>
              <dd><?php the_field("tenin");?></dd>
            </dl>
          <?php endif;?>
          <dl>
            <dt>対象年齢</dt>
            <dd><?php the_field("nenrei");?></dd>
          </dl>
          <dl>
            <dt>保育時間</dt>
            <dd><?php the_field("time");?></dd>
          </dl>
          <dl>
            <dt>職員構成</dt>
            <dd><?php the_field("shokuin");?></dd>
          </dl>
          <dl>
            <dt>休園日</dt>
            <dd><?php the_field("yasumi");?></dd>
          </dl>
          <dl>
            <dt>年間行事<br>（一斉行事）</dt>
            <dd><?php the_field("year-event");?></dd>
          </dl>
          <!-- <?php if ($post_id == 30): ?> 
            <dl>
              <dt class="servicesn">福祉サービス<br>第三者評価</dt>
              <dd>
                <?php
                  $filefiled = get_field('evaluation');
                  if($filefiled) { 
                  ?>
                  <a class="pdf-file" href="<?php echo $filefiled?>" target="_blank">令和2年度受審結果はこちら</a>
                <?php } ?>
                </dd>
            </dl>
            <?php elseif ($post_id == 31):?>
              <dl>
              <dt class="servicesn">福祉サービス<br>第三者評価</dt>
              <dd>
                <?php
                  $filefiled = get_field('evaluation');
                  if($filefiled) { 
                  ?>
                  <a class="pdf-file" href="<?php echo $filefiled?>" target="_blank">令和2年度受審結果はこちら</a>
                <?php } ?>
                </dd>
            </dl>
          <?php endif;?> -->
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
                  'terms' => array('ns','y-ns'), // ターム item1 で絞り込む
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
    <article class="mk" id="cont04">
      <h3><img src="<?php echo get_template_directory_uri();?>/images/facility/h3-05.png" alt=""></h3>
      <div class="mk-box">
        <div class="mk-flex">
          <div class="left">
            <img src="<?php echo get_template_directory_uri();?>/images/facility/circle01.png" alt="">
          </div>
          <div class="right">
            <p class="f-text">
              <?php the_field("mk1");?>
            </p>
          </div>
        </div>
        <div class="mk-flex">
          <div class="left">
            <img src="<?php echo get_template_directory_uri();?>/images/facility/circle02.png" alt="">
          </div>
          <div class="right">
            <p class="s-text">
              <?php the_field("mk2");?>
            </p>
            <p class="t-text">
              <?php the_field("mk3");?>
            </p>
          </div>
        </div>
      </div>
    </article>
    <article class="days" id="cont05">
      <h3><img src="<?php echo get_template_directory_uri();?>/images/facility/h3-06.png" alt=""></h3>
      <p class="img pc">
        <img src="<?php the_field("days-pc");?>" alt="">
      </p>
      <p class="img sp">
        <img src="<?php the_field("days-sp");?>" alt="">
      </p>
    </article>
    <article class="nursary-map" id="cont06">
      <h3><img src="<?php echo get_template_directory_uri();?>/images/facility/h3-07.png" alt=""></h3>
      <p class="img pc">
        <img src="<?php the_field("nursary-map");?>" alt="">
      </p>
      <p class="text sp">
        園の間取り図をパソコンでご確認ください。
      </p>

      <?php if ($post_id == 30): ?>
    <div class="youtubeWrap deveShimizu"></div>
    <iframe class="youtube deveShimizu" width="100%" height="415" src="https://www.youtube.com/embed/IHds7plSh48" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <!--Creates the popup body-->
    <div class="popup-overlay deveShimizu">
      <!--Creates the popup content-->
      <div class="popup-content">
        <p><img src="<?php echo get_template_directory_uri() ?>/images/common/youtubeqr.png" /></p>
        <!--popup's close button-->
        <button class="close">閉じる</button>
      </div>
      </div>
      <div class="open-wrap deveShimizu"><button class="open deveShimizu">QRコードを開く</button></div>
    <?php endif; ?>
    </article>
    <!--
    <article class="paper" id="cont07">
    <h3><img src="<?php echo get_template_directory_uri();?>/images/facility/h3-08.png" alt=""></h3>
    <p class="text">様々な提出書類書式をダウンロード・プリントアウトして提出できます。どうぞご活用ください。</p>
    <div class="flex33 <?php echo $slug;?>">
    <a href="<?php echo get_template_directory_uri();?>/pdf/s01.pdf" target="_blank">投薬依頼書</a>
    <a href="<?php echo get_template_directory_uri();?>/pdf/s02.pdf" target="_blank">制服　購入詳細一覧</a>
    <a href="<?php echo get_template_directory_uri();?>/pdf/s03.pdf" target="_blank">登園許可報告書</a>
    </div>
    <p class="text">
    <span>食物アレルギー対応給食申請等について</span>
    食物アレルギー対応給食申請等については、添付資料をダウンロードし、提出下さい。
    </p>
    <div class="flex33 <?php echo $slug;?>">
    <a href="<?php echo get_template_directory_uri();?>/pdf/s04.pdf" target="_blank">投薬依頼食物アレルギー対応<br>給食申請書（新規・継続）書</a>
    <a href="<?php echo get_template_directory_uri();?>/pdf/s05.pdf" target="_blank">食物アレルギー対応<br>給食申請書（変更・解除）</a>
    <a href="<?php echo get_template_directory_uri();?>/pdf/s06.pdf" target="_blank">保育所におけるアレルギー<br>疾患生活管理指導表</a>
    </div>
    </article>
    -->
    <?php if(get_field("cm")):?>
      <article class="cm" id="cont09">
        <h3><img src="<?php echo get_template_directory_uri();?>/images/facility/h3-09.png" alt=""></h3>
        <?php the_field("cm");?>
      </article>
    <?php endif;?>
    <article class="map" id="cont08">
      <h3><img src="<?php echo get_template_directory_uri();?>/images/facility/h3-04.png" alt=""></h3>
      <p class="text">
        <?php the_field("info");?>
      </p>
      <div class="frame">
        <?php the_field("map");?>
      </div>
    </article>
    </section>

<?php endif; ?> <!-- end if ================== -->
