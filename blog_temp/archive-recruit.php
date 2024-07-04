<?php get_header(); ?>
<section class="sv">
  <div class="wrap12">
    <img src="<?php echo get_template_directory_uri();?>/images/recruit/sv.png" alt="">
  </div>
</section>
<section class="h2">
  <div class="wrap12">
    <h2>
      <img src="<?php echo get_template_directory_uri();?>/images/recruit/h2.png" alt="">
    </h2>
  </div>
</section>
<div class="wrap12 flex2 under-wrap">
  <section class="main-wrap archive-recruit">
    <article class="cont01">
      <h3><img src="<?php echo get_template_directory_uri();?>/images/recruit/h3-01.png" alt=""></h3>
      <h4><img src="<?php echo get_template_directory_uri();?>/images/recruit/h4-01.png" alt=""></h4>
      <p class="text">
        やすらぎの郷では、保育士・介護士の方を募集しております。保育士や介護士のお仕事は、決して楽なものではありません。しかし、相手が笑顔になってくれた瞬間に何物にも代えがたい喜びを感じられる、素敵なお仕事です。私たちが求める人物像は、人を支え、助ける仕事にやり甲斐を感じられる方。学歴・経験は問いませんので、興味をお持ちの方はぜひお問い合わせください。
      </p>
      <p class="img">
        <img src="<?php echo get_template_directory_uri();?>/images/recruit/cont01-img.png" alt="">
      </p>
    </article>
    <article class="searchbox">
      <h3><img src="<?php echo get_template_directory_uri();?>/images/recruit/h3-02.png" alt=""></h3>
      <div class="searchbox-inner">
        <h4 class="jouken">検索条件</h4>
        <p class="text">
          雇用形態別・職種別・エリア別に募集要項を掲載しています。ご希望の勤務地・働き方を選んでください。
        </p>
        <?php echo do_shortcode('[searchandfilter id="144"]');?>
        <!-- <?php
        $koyou = $_GET["_sft_koyou"];
        $koyou2 = explode(",",$koyou);
        $shokushu = $_GET["_sft_shokushu"];
        $shokushu2 = explode(",",$shokushu);
        $shisetsu = $_GET["_sft_shisetsu"];
        $shisetsu2 = explode(",",$shisetsu);
        ?> -->
      </div>
    </article>
    <article class="recruit-list" id="main">
      <?php if($koyou == NULL && $shokushu == NULL && $shisetsu == NULL):?>
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts( array(
          'post_type'=>'recruit',
          'posts_per_page' => 10,
          'paged' => $paged
        )
      );
      ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="single">
          <h3 class="button"><?php echo get_the_title();?></h3>
          <div class="inner">
            <dl>
              <dt>求人番号</dt>
              <dd><?php the_field("r-number");?></dd>
            </dl>
            <dl>
              <dt>職種</dt>
              <dd>
                <?php
                $terms = wp_get_object_terms($post->ID,'shokushu');
                foreach($terms as $term){
                  $cat = $term->name;
                  $slug = $term->slug;
                }
                ?>
                <?php echo $cat;?>
              </dd>
            </dl>
            <dl>
              <dt>雇用形態</dt>
              <dd>
                <?php
                $terms = wp_get_object_terms($post->ID,'koyou');
                foreach($terms as $term){
                  $cat = $term->name;
                  $slug = $term->slug;
                }
                ?>
                <?php echo $cat;?>
              </dd>
            </dl>
            <dl>
              <dt>募集人数</dt>
              <dd><?php the_field("wants");?></dd>
            </dl>
            <dl>
              <dt>応募資格</dt>
              <dd><?php the_field("shikaku");?></dd>
            </dl>
            <dl>
              <dt>仕事内容</dt>
              <dd><?php the_field("works");?></dd>
            </dl>
            <dl>
              <dt>勤務地</dt>
              <dd><?php the_field("w-address");?></dd>
            </dl>
            <dl>
              <dt>勤務時間</dt>
              <dd><?php the_field("w-time");?></dd>
            </dl>
            <dl>
              <dt>給与</dt>
              <dd><?php the_field("money");?></dd>
            </dl>
            <dl>
              <dt>休日</dt>
              <dd><?php the_field("rest");?></dd>
            </dl>
            <dl>
              <dt>応募方法</dt>
              <dd><?php the_field("oubo");?></dd>
            </dl>
            <dl>
              <dt>見学情報</dt>
              <dd><?php the_field("kengaku");?></dd>
            </dl>
            <a href="<?php echo get_permalink();?>">この募集に応募する</a>
          </div>
        </div>
      <?php endwhile;?>
      <?php else:?>
        <p class="text">
          大変申し訳ありませんが、全ての職種について現在、求人募集は行っておりません。<br>何卒、ご了承のほどお願いいたします。
        </p>
      <?php endif; ?>
      <?php wp_reset_query();?>
      <?php else:?>
        <?php if($koyou == NULL):?>
          <?php
          $koyou2 = array("ky01","ky02","ky03","ky04");
          ?>
        <?php endif;?>
        <?php if($shokushu == NULL):?>
          <?php
          $shokushu2 = array("sh01","sh02","sh03","sh04","sh05","sh06");
          ?>
        <?php endif;?>
        <?php if($shisetsu == NULL):?>
          <?php
          $shisetsu2 = array("si01","si02","si03","si04","si05","si06","si07","si08","si09");
          ?>
        <?php endif;?>
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts( array(
          'post_type'=>'recruit',
          'posts_per_page' => 10,
          'paged' => $paged,
          'tax_query' => array(
            array(
              'taxonomy' => 'koyou', // カスタム分類 Products-cat
              'field' => 'slug',
              'terms' => $koyou2, // ターム item1 で絞り込む
            ),
            array(
              'taxonomy' => 'shokushu', // カスタム分類 Products-cat
              'field' => 'slug',
              'terms' => $shokushu2, // ターム item1 で絞り込む
            ),
            array(
              'taxonomy' => 'shisetsu', // カスタム分類 Products-cat
              'field' => 'slug',
              'terms' => $shisetsu2, // ターム item1 で絞り込む
            )
          )
        )
      );
      ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="single">
          <h3 class="button"><?php echo get_the_title();?></h3>
          <div class="inner">
            <dl>
              <dt>求人番号</dt>
              <dd><?php the_field("r-number");?></dd>
            </dl>
            <dl>
              <dt>職種</dt>
              <dd>
                <?php
                $terms = wp_get_object_terms($post->ID,'shokushu');
                foreach($terms as $term){
                  $cat = $term->name;
                  $slug = $term->slug;
                }
                ?>
                <?php echo $cat;?>
              </dd>
            </dl>
            <dl>
              <dt>雇用形態</dt>
              <dd>
                <?php
                $terms = wp_get_object_terms($post->ID,'koyou');
                foreach($terms as $term){
                  $cat = $term->name;
                  $slug = $term->slug;
                }
                ?>
                <?php echo $cat;?>
              </dd>
            </dl>
            <dl>
              <dt>募集人数</dt>
              <dd><?php the_field("wants");?></dd>
            </dl>
            <dl>
              <dt>応募資格</dt>
              <dd><?php the_field("shikaku");?></dd>
            </dl>
            <dl>
              <dt>仕事内容</dt>
              <dd><?php the_field("works");?></dd>
            </dl>
            <dl>
              <dt>勤務地</dt>
              <dd><?php the_field("w-address");?></dd>
            </dl>
            <dl>
              <dt>勤務時間</dt>
              <dd><?php the_field("w-time");?></dd>
            </dl>
            <dl>
              <dt>給与</dt>
              <dd><?php the_field("money");?></dd>
            </dl>
            <dl>
              <dt>休日</dt>
              <dd><?php the_field("rest");?></dd>
            </dl>
            <dl>
              <dt>応募方法</dt>
              <dd><?php the_field("oubo");?></dd>
            </dl>
            <dl>
              <dt>見学情報</dt>
              <dd><?php the_field("kengaku");?></dd>
            </dl>
            <a href="<?php echo get_permalink();?>">この募集に応募する</a>
          </div>
        </div>
      <?php endwhile;?>
    <?php else:?>
      <p class="text">
        大変申し訳ありませんが、全ての職種について現在、求人募集は行っておりません。<br>何卒、ご了承のほどお願いいたします。
      </p>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
    <?php endif;?>
    </article>
  </section>
  <section class="sidebar">
    <?php get_sidebar();?>
  </section>
</div>
<?php get_footer(); ?>
