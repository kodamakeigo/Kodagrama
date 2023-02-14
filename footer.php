<?php

/**
 * The template for displaying the footer
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
?>
</main>
<footer class="footer">
    <div class="footer-inner">
        <a href="#" class="page-top-btn"><span class="screen-reader-text">ページ先頭へ</span></a>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/pc-footer-crabs.png" class="pc-footer-crabs pc-section" alt="" width="1380" height="300" loading="lazy">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sp-footer-crab.png" class="sp-footer-crab sp-section" alt="" width="160" height="100" loading="lazy">
    </div>
    <p class="copyright">&copy;kodagrama</p>
</footer>
<?php wp_footer(); ?>
</body>

</html>