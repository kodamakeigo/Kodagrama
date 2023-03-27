<?php

/**
 * The main template file
 *
 * @link       http://codex.wordpress.org/Template_Hierarchy
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
get_header(); ?>

<section class="section-eyecatch">
    <div class="section-eyecatch-inner">
        <div class="section-eyecatch-text">
            <h2 class="section-eyecatch-title">K.Kodama<br><span class="section-eyecatch-title-sub">Portfolio</span></h2>
            <p class="section-eyecatch-intro pc-section">Web制作の勉強を始めて約2年。<br>html、css、js、php、PhotoShop、Illustratorを学んできました。<br>
                ひとつWebサイトを作成することで、自分の現在の実力を認識し、Web制作を勉強をしてきた証を残すべくこのポートフォリオを作成しました。</p>
        </div>
        <figure class="section-eyecatch-img">
            <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/eyecatch-sp.png" media="(max-width: 767px)">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/eyecatch.png" alt="Kodagrama" width="872" height="697" loading="eager">
            </picture>
        </figure>
    </div>
    <p class="section-eyecatch-intro sp-section">Web制作の勉強を始めて約2年。<br>html、css、js、php、PhotoShop、Illustratorを学んできました。<br>
        ひとつWebサイトを作成することで、自分の現在の実力を認識し、Web制作を勉強をしてきた証を残すべくこのポートフォリオを作成しました。</p>
</section>

<section class="about" id="about">
    <h2 class="title-home">About</h2>
    <div class="home-about-list-wrap">
        <ul id="js-home-about-list" class="home-about-list">
            <li>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/fishing_ill.png" alt="釣りのイラスト" width="280" height="347" loading="eager">
                <span>釣りが好き</span>
            </li>
            <li>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/fishing_ill.png" alt="釣りのイラスト" width="280" height="347" loading="eager">
                <span>釣りが好き</span>
            </li>
            <li>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/fishing_ill.png" alt="釣りのイラスト" width="280" height="347" loading="eager">
                <span>釣りが好き</span>
            </li>
            <li>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/fishing_ill.png" alt="釣りのイラスト" width="280" height="347" loading="eager">
                <span>釣りが好き</span>
            </li>
        </ul>
    </div>
</section>
<section class="works" id="works">
    <h2 class="title-home">Works</h2>
    <div class="home-about-list-wrap">
        <ul class="home-works-list">
            <li class="card_wrap">
                <h3 class="familycard">家族名刺</h3>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/family_flont.png" class="crad_img" alt="家族名刺画像表" width="" height="" loading="lazy">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/family_back.png" class="crad_img" alt="家族名刺画像裏" width="" height="" loading="lazy">
                <p>イラストデザインを始めて行った作品です。<br>アットホームな色使い、シンプルで個人の特徴を捉えたイラストを意識しました。</p>
            </li>
            <li class="card_wrap">
                <h3 class="maicard">妻の名刺</h3>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/mai_flont.png" class="crad_img" alt="妻の名刺画像" width="" height="" loading="lazy">
                <p>妻が就職した不動産会社の名刺をデザインしました。<br>モノクロのシンプルな配色を意識し、顔写真有など細かな要望に答える形で作成しました。</p>
            </li>
            <li class="card_wrap">
                <h3 class="kscard">母の名刺</h3>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ks_flont.png" class="crad_img" alt="オカンの名刺画像表" width="" height="" loading="lazy">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ks_back.png" class="crad_img" alt="オカンの名刺画像裏" width="" height="" loading="lazy">
                <p>母の不動産管理会社名刺をデザインしました。<br>北海道をモチーフにしてとのことでしたので、かわいい動物と北海道拠点の富良野から見える十勝岳連峰の写真をイラスト風に加工しました。</p>
            </li>
        </ul>
    </div>
</section>

<section class="contact" id="contact">
    <h2 class="title-home">Contact</h2>
    <div class="home-contact">
        <?php echo do_shortcode('[contact-form-7 id="17" title="お問い合わせフォーム"]'); ?>
    </div>
</section>
<?php get_footer();
