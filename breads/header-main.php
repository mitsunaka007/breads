<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package breads
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<div class="headerImg">
			<img src="http://breads.local/wp-content/uploads/2022/06/breads-header.jpg" alt="breads-header">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$breads_description = get_bloginfo( 'description', 'display' );
				if ( $breads_description || is_customize_preview() ) :
					?>
					<!-- <p class="site-description"><?php echo $breads_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p> -->
				<?php endif; ?>
			</div><!-- .site-branding -->
		</div>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'breads' ); ?></a>

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="main-navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'breads' ); ?></button> -->
			<?php
			// wp_nav_menu(
			// 	array(
			// 		'theme_location' => 'menu-1',
			// 		'menu_id'        => 'primary-menu',
			// 	)
			// );
			?>
			<div class="fixedhamburger">
				<div class="wrapper">
					<div id="menu" class="hamburger">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
				<nav class="menu">
					<div class="menu-inner">
						<div class="menu-inner-boxs">
							<div class="menu-inner-box">
								<h2>パンの種類</h2>
								<ul>
									<li class="menu-inner-a icons"><a href=""><img src="http://breads.local/wp-content/uploads/2022/06/breads-icon1_min.png" alt=""><span>メニュー1</span></a></li>
									<li class="menu-inner-a icons"><a href=""><img src="http://breads.local/wp-content/uploads/2022/06/breads-icon2_min.png" alt=""><span>メニュー2</span></a></li>
									<li class="menu-inner-a icons"><a href=""><img src="http://breads.local/wp-content/uploads/2022/06/breads-icon3_min.png" alt=""><span>メニュー3</span></a></li>
									<li class="menu-inner-a icons"><a href=""><img src="http://breads.local/wp-content/uploads/2022/06/breads-icon4_min.png" alt=""><span>メニュー4</span></a></li>
									<li class="menu-inner-a icons"><a href=""><img src="http://breads.local/wp-content/uploads/2022/06/breads-icon5_min.png" alt=""><span>メニュー5</span></a></li>
									<ul>
										<?php wp_list_pages('sort_column=menu_order&include=6,25,1519,1645,1720&title_li='); ?>
									</ul>
								</ul>
							</div>
							<div class="menu-inner-box">
								<h2>サイトマップ</h2>
								<ul class="category-list">
									<?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'category', 'show_count' => 1,'include' =>5)); ?>
								</ul>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
