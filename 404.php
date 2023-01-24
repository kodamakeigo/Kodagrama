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
        <h1>お探しのページは見つかりませんでした。</h1>
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
    </div>

</section>


<?php get_footer();
