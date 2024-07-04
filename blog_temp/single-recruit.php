<?php get_header(); ?>
<section class="sv">
    <div class="wrap12">
        <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/sv.png" alt="">
    </div>
</section>
<section class="h2">
    <div class="wrap12">
        <h2>
            <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/h2.png" alt="">
        </h2>
    </div>
</section>
<div class="wrap12 flex2 under-wrap">
    <section class="main-wrap single-recruit">
        <article class="cont01">
            <p class="text">
                求人のお問い合わせ・ご質問は、本部事務局採用担当までご連絡ください。<br>
                <br>
                営業時間内に対応させていただきます。 <br>
                営業時間：9:00～17:00(土・日・祝日および夏季・年末年始の休業日を除く) <br>
                <br>
                フォームよりご応募いただいた方には、後日こちらより折り返しのご連絡をいたしますので、<br>
                ご連絡先に間違いがないようご注意ください。<br>
                <br>
                <span>お急ぎの場合は、各施設までご連絡をお願いいたします。</span>
            </p>
            <ul>
                <li>【本部事務所】社会福祉法人やすらぎの郷<span><i class="fa fa-phone-square" aria-hidden="true"></i>052-901-5255</span>
                </li>
                <li>【特別養護老人ホーム】オアシス楠<span><i class="fa fa-phone-square" aria-hidden="true"></i>052-938-3383</span></li>
                <li>【特別養護老人ホーム】オアシス東吉野<span><i class="fa fa-phone-square" aria-hidden="true"></i>0746-42-0778</span>
                </li>
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
            <p class="hide"><?php the_field("r-number"); ?></p>
            <?php echo do_shortcode('[contact-form-7 id="148" title="求人応募"]'); ?>
            <div class="modal js-modal">
                <div class="modal__bg js-modal-close"></div>
                <div class="modal__content">
                    <div class="modal__content--flex">
                        <p class="modal_head">お問い合わせ番号</p>
                        <p class="input_cf7_01"></p>
                    </div>
                    <div class="modal__content--flex">
                        <p class="modal_head">お問い合わせ項目</p>
                        <p class="input_cf7_02"></p>
                    </div>
                    <div class="modal__content--flex">
                        <p class="modal_head">お名前</p>
                        <p class="input_cf7_03"></p>
                    </div>
                    <div class="modal__content--flex">
                        <p class="modal_head">フリガナ</p>
                        <p class="input_cf7_04"></p>
                    </div>
                    <div class="modal__content--flex">
                        <p class="modal_head">性別</p>
                        <p class="input_cf7_05"></p>
                    </div>
                    <div class="modal__content--flex">
                        <p class="modal_head">年齢</p>
                        <p class="input_cf7_06"></p>
                    </div>
                    <div class="modal__content--flex">
                        <p class="modal_head">メール</p>
                        <p class="input_cf7_07"></p>
                    </div>
                    <div class="modal__content--flex">
                        <p class="modal_head">メール（確認）</p>
                        <p class="input_cf7_08"></p>
                    </div>
                    <div class="modal__content--flex">
                        <p class="modal_head">お電話番号</p>
                        <p class="input_cf7_09"></p>
                    </div>
                    <div class="modal__content--flex">
                        <p class="modal_head">住所</p>
                        <p class="input_cf7_10"></p>
                    </div>
                    <div class="modal__content--flex">
                        <p class="modal_head">メッセージ</p>
                        <p class="input_cf7_11"></p>
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
        $('.input_cf7_01').text($('input[name="c-number"]').val());
        $('input[name="c-koumoku[]"]:checked').each(function() {
            $('.input_cf7_02').append("<span>" + $(this).val() + "</span>");
        });
        $('.input_cf7_03').text($('input[name="y-name"]').val());
        $('.input_cf7_04').text($('input[name="f-name"]').val());
        $('.input_cf7_05').text($('input[name="c-sex"]:checked').val());
        $('.input_cf7_06').text($('input[name="y-old"]').val());
        $('.input_cf7_07').text($('input[name="your-email"]').val());
        $('.input_cf7_08').text($('input[name="your-email_confirm"]').val());
        $('.input_cf7_09').text($('input[name="y-tell"]').val());
        $('.input_cf7_10').text($('input[name="y-address"]').val());
        $('.input_cf7_11').text($('textarea[name="c-textarea"]').val());

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