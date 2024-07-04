<?php get_header(); ?>
<section class="sv">
    <div class="wrap12">
        <img src="<?php echo get_template_directory_uri(); ?>/images/contact/sv.png" alt="">
    </div>
</section>
<section class="h2">
    <div class="wrap12">
        <h2>
            <img src="<?php echo get_template_directory_uri(); ?>/images/contact/h2.png" alt="">
        </h2>
    </div>
</section>
<div class="wrap12 flex2 under-wrap">
    <section class="main-wrap contact">
        <article class="cont01">
            <p class="text">
                当法人や各施設に対するご意見・ご要望などがございましたら、お気軽にお問い合わせください。<br>
                <br>
                お問い合わせには、営業時間内に対応させていただきます。<br>
                営業時間：9:00～17:00(土・日・祝日および夏季・年末年始の休業日を除く)<br>
                <br>
                お問い合わせフォームよりお問い合わせを頂きますと、<br>
                サーバーよりお問い合わせ内容確認メールが自動送信されます。 <br>
                お返事にお時間をいただく場合がございます。<br>
                予めご了承いただきますようお願いいたします。<br>
                <br>
                <span>お急ぎの場合は、各施設までご連絡をお願いいたします。</span>
            </p>
            <ul>
                <li>【本部事務所】社会福祉法人やすらぎの郷<span><i class="fa fa-phone-square" aria-hidden="true"></i>052-901-5255</span>
                </li>
                <li>【特別養護老人ホーム】オアシス楠<span><i class="fa fa-phone-square" aria-hidden="true"></i>052-938-3383</span></li>
                <li>【特別養護老人ホーム】オアシス東吉野<span><i class="fa fa-phone-square" aria-hidden="true"></i>0746-42-0778</span>
                </li>
                <li>【特別養護老人ホーム】オアシス高遠（仮称）<span><i class="fa fa-phone-square" aria-hidden="true"></i>（052）901 - 5559
                        （法人本部）</span></li>
                <li>【幼保連携型認定こども園】オアシスこども園<span><i class="fa fa-phone-square" aria-hidden="true"></i>052-501-8117</span>
                </li>
                <li>【認可保育所】オアシスあじま保育園<span><i class="fa fa-phone-square" aria-hidden="true"></i>052-903-4006</span></li>
                <li>【小規模保育事業A型施設】名古屋市家庭保育室オアシス名西<span><i class="fa fa-phone-square"
                            aria-hidden="true"></i>052-325-6000</span></li>
                <li>【事業所内保育事業B型施設】事業所内保育オアシス<span><i class="fa fa-phone-square"
                            aria-hidden="true"></i>052-901-5559</span></li>
            </ul>
        </article>
        <article class="cont02">
            <?php echo do_shortcode('[contact-form-7 id="4" title="コンタクトフォーム 1"]'); ?>
            <div class="modal js-modal">
                <div class="modal__bg js-modal-close"></div>
                <div class="modal__content">
                    <div class="modal__content--flex">
                        <p class="modal_head">お問い合わせ項目</p>
                        <p class="input_cf7_01"></p>
                    </div>
                    <div class="modal__content--flex">
                        <p class="modal_head">お名前</p>
                        <p class="input_cf7_02"></p>
                    </div>
                    <div class="modal__content--flex">
                        <p class="modal_head">フリガナ</p>
                        <p class="input_cf7_03"></p>
                    </div>
                    <div class="modal__content--flex">
                        <p class="modal_head">メールアドレス</p>
                        <p class="input_cf7_04"></p>
                    </div>
                    <div class="modal__content--flex">
                        <p class="modal_head">メールアドレス（確認）</p>
                        <p class="input_cf7_05"></p>
                    </div>
                    <div class="modal__content--flex">
                        <p class="modal_head">電話番号</p>
                        <p class="input_cf7_06"></p>
                    </div>
                    <div class="modal__content--flex">
                        <p class="modal_head">住所</p>
                        <p class="input_cf7_07"></p>
                    </div>
                    <div class="modal__content--flex">
                        <p class="modal_head">メッセージ</p>
                        <p class="input_cf7_08"></p>
                    </div>
                    <button id="modal_submit">上記の内容で送信する</button>
                    <a class="js-modal-close" href="">戻って編集する</a>
                </div>
                <!--modal__inner-->
            </div>
        </article>
    </section>
    <section class="sidebar">
        <?php get_sidebar(); ?>
    </section>
</div>
<?php get_footer(); ?>
<script>
$(function() {
    $('input[name="check-box"]').change(function() {
        if ($(this)[0].checked) {
            $('#conf-button').prop('disabled', false);
        } else {
            $('#conf-button').prop('disabled', true);
        }
    });
    $('#conf-button').on('click', function() {
        $('.js-modal').fadeIn();
        $('input[name="c-shisetsu[]"]:checked').each(function() {
            $('.input_cf7_01').append("<span>" + $(this).val() + "</span>");
        });
        $('input[name="c-mokuteki[]"]:checked').each(function() {
            $('.input_cf7_02').append("<span>" + $(this).val() + "</span>");
        });
        $('.input_cf7_03').text($('input[name="c-name"]').val());
        $('.input_cf7_04').text($('input[name="y-name"]').val());
        $('.input_cf7_05').text($('input[name="f-name"]').val());
        $('.input_cf7_06').text($('input[name="your-email"]').val());
        $('.input_cf7_07').text($('input[name="your-email_confirm"]').val());
        $('.input_cf7_08').text($('input[name="y-tell"]').val());
        $('.input_cf7_08').text($('textarea[name="c-textarea"]').val());

        return false;
    });
    $('.js-modal-close').on('click', function() {
        $('.js-modal').fadeOut();
        return false;
    });
    $('#modal_submit').on('click', function() {
        $('form.wpcf7-form').submit();
        $('.js-modal').fadeOut();
    });
});
</script>