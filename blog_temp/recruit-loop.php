<div class="single">
  <h3><?php echo get_the_title();?></h3>
  <div class="inner">
    <dl>
      <dt>求人番号</dt>
      <dd><?php the_field("number");?></dd>
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
  </div>
</div>
