<?php

/**
 * The template for displaying the header
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      Maitake 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#444444">
	<script>
		(function(d) {
			var config = {
					kitId: 'npa2pwx',
					scriptTimeout: 3000,
					async: true
				},
				h = d.documentElement,
				t = setTimeout(function() {
					h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
				}, config.scriptTimeout),
				tk = d.createElement("script"),
				f = false,
				s = d.getElementsByTagName("script")[0],
				a;
			h.className += " wf-loading";
			tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
			tk.async = true;
			tk.onload = tk.onreadystatechange = function() {
				a = this.readyState;
				if (f || a && a != "complete" && a != "loaded") return;
				f = true;
				clearTimeout(t);
				try {
					Typekit.load(config)
				} catch (e) {}
			};
			s.parentNode.insertBefore(tk, s)
		})(document);
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="header">
		<div class="header-inner">
			<h1 class="header-logo">
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" width="245" height="160" loading="eager">
				</a>
			</h1>
			<?php
			wp_nav_menu(array(
				'container'       => 'nav',
				'container_class' => 'global-nav',
				'theme_location' => 'primary'
			)); ?>

			<nav class="hamburger-btn">
				<button>
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/menu-btn.svg" alt="メニュー" width="100" height="116" loading="eager">
				</button>
			</nav>
			<nav class="hamburger-menu">
				<button>
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/menu-btn-close.svg" alt="閉じる" width="90" height="102" loading="lazy">
				</button>
				<?php
				wp_nav_menu(array(
					'container'       => 'div',
					'container_class' => 'global-nav-sp',
					'theme_location' => 'primary'
				)); ?>
			</nav>
		</div>
	</header>
	<main class="main-contents">