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
    <figure class="section-eyecatch-img">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/eyecatch.png" alt="Kodagrama" width="872" height="697" loading="eager">
    </figure>
    <div class="section-eyecatch-text">
        <h2 class="section-eyecatch-title">K.Kodama<br><span class="section-eyecatch-title-sub">Portfolio</span></h2>
        <p class="section-eyecatch-intro">Web制作の勉強を始めて約2年。
            html、css、js、php、PhotoShop、Illustrator
            を学んできました。
            ひとつWebサイトを作成することで、自分の現在の実力を認識し、
            Web制作を勉強をしてきた証を残すべくこのポートフォリオを作成しました。</p>
    </div>
</section>

<section>
    <h2>About</h2>
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
</section>

<?php get_footer();
