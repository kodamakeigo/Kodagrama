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
        <h1 class="page-404-pc">お探しのページが見つかりませんでした。</h1>
        <h1 class="page-404-sp">お探しのページが<br>見つかりませんでした。</h1>
    </header>


    <div class="page-content">
        <div class="image-404">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/404-image.png" alt="404 Not Found" width="700" height="200" loading="lazy">
        </div>
        <section class="announce-404">
            <div class="announce-text-404">
                <p>URLが間違っているか、ページが存在しません。<br>下のリンク一覧から他のページをご覧ください。</p>
            </div>
            <nav class="move-404">
                <ul class="move-404-list">
                    <li><a class="nav-link-404" href="<?php echo esc_url(home_url('/#about')); ?>">About</a></li>
                    <li><a class="nav-link-404" href="<?php echo esc_url(home_url('/#works')); ?>">Works</a></li>
                    <li><a class="nav-link-404" href="<?php echo esc_url(home_url('/#contact')); ?>">Contact</a></li>
                </ul>
            </nav>
            <nav class="top-404">
                <a class="top-nav-404" href="<?php echo esc_url(home_url('/')); ?>">Topページへ</a>
            </nav>
        </section>

    </div>

</section>


<?php get_footer();
