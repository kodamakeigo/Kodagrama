<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
get_header(); ?>

<section>
    <header>
        <h1 class="404">お探しのページが見つかりませんでした。</h1>
    </header>


    <div class="page-content">
        <div class="page-404-search">
            <?php get_search_form(); ?>
        </div>
        <!-- <div class="page-content">
            <p class="page-section-intro">
                申し訳ございません、お探しのページが見つかりませんでした。<br>
                トップページにお戻りいただき、改めてお探しください。
            </p>
            <nav class="section-btn">
                <a href="<?php echo esc_url(home_url('/')); ?>" style="
                    color: #fff;
                    background: skyblue;
                    border-radius: 27px;
                    padding: 10px;
                    display: block;
                    width: 80%;
                    text-align: center;
                ">トップページへ</a>
            </nav>
        </div> -->

        <div class="404-image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/404-image.png" alt="404 Not Found" width="700" height="200" loading="lazy">
        </div>
        <section class="404-announce">
            <p>URLが間違っているか、ページが存在しません。<br>下のリンク一覧から他のページをご覧ください。</p>
            <a href="#">Topページ</a>
            <nav class="404-move">
                <a class="404-about" href="">About</a>
                <a class="404-works" href="">Works</a>
                <a class="404-contact" href="">Contact</a>
            </nav>
        </section>

    </div>

</section>


<?php get_footer();
