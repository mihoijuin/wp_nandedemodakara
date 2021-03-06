<?php
/**
 * Nandedemodakara functions and definitions
 *
 * @package WordPress
 * @subpackage Nandedemodakara
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>

	<body>
		<!-- header -->
		<header id="header">
			<section class="header-logo">
				<div class="media-title">
					<h1>
						<a href="<?php echo home_url(); ?>/top">
							<img class="title" src="<?php echo get_template_directory_uri(); ?>/images/nandedemodakara_title.svg" alt="">
						</a>
					</h1>
					<p>
						ニートとHR業界サラリーマンが対話し<br>
						「なんで？」「でも〜」「だから〜」が飛び交う場
					</p>
				</div>
				<div class="header-pcimg">
					<img class="header-icon1 pcimg" src="<?php echo get_template_directory_uri(); ?>/images/porin-wanko.png" alt="" width="150" height="150">
					<img class="header-icon2 pcimg" src="<?php echo get_template_directory_uri(); ?>/images/kento-nyanko.png" alt="" width="150" height="150">
					<div class="img-message">
						<p>Welcome</p>
					</div>
				</div>
				<div class="header-smartimg">
					<img class="header-icon1" src="<?php echo get_template_directory_uri(); ?>/images/porin-wanko.png" alt="" width="130" height="130">
					<img class="header-icon2" src="<?php echo get_template_directory_uri(); ?>/images/kento-nyanko.png" alt="" width="130" height="130">
				</div>
			</section>
			<nav class="header-nav">
				<?php wp_nav_menu(); ?>
			</nav>
		</header>

