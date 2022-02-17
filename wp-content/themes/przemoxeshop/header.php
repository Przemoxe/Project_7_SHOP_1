<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package przemoxeShop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<div class="search-show  container-fluid">
		<div class="row row-search text-white bg-white">
			<div class="col-11 d-flex flex-column justify-content-center">
				<span class="d-inline ps-5"><?php aws_get_search_form( true ); ?></span>
			</div>
			<div class="col-1 d-flex justify-content-center align-items-center">
				<i class="bi bi-x"></i>
			</div>
		</div>
	</div>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'przemoxeshop' ); ?></a>

	<!-- front-page-menu -->

	<?php if(is_front_page() || is_account_page()) : ?>
		<header id="masthead" class="site-header <?php if(!is_front_page()){ echo "header-not-transparent";} ?>">


			<nav id="site-navigation" class="main-navigation main-navigation-transparent">
				<div class="container front-page-menu  d-flex flex-column justify-content-center">
					<div class="row align-items-center">
						<div class="col-5 menu-container text-center">
							
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
						</div>
						<div class="col-2 logo text-center text-white"><h2 class="text-uppercase"><a class="text-white " href="<?php echo site_url()?>">Przemoxe</a> </h2></div>
						
						<div class="col-5 text-white container-login-search-basket d-flex align-items-center justify-content-end">
							<div class="me-5"><a class="color-effects" href="<?php echo wc_get_page_permalink( 'myaccount' ); ?>">Zaloguj</a></div>
							<!-- <span class="d-inline"><?php aws_get_search_form( true ); ?></span> -->
							<div><i class="bi bi-search color-effects"></i></div>
							<div class="ms-5"><a class="basket-square d-inline " href="<?php echo wc_get_cart_url(); ?>" ><span>Koszyk</span><span><?php echo sprintf ( _n( '%d item', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> </span>
							</a></div>
							

								
						</div>
					
					</div>
				</div>

			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
	<?php endif; ?>

	<!-- menu pages -->
	<?php if(!(is_front_page() || is_account_page()))  : ?>

			<header id="masthead" class="site-header header-no-front-page ?>">

				<nav id="site-navigation" class="main-navigation main-navigation-not-transparent">
					<div class="container front-page-menu  d-flex flex-column justify-content-center">
						<div class="row align-items-center">
							<div class="col-5 menu-container text-center">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
								?>
							</div>
							<div class="col-2 logo text-center text-white"><h2 class="text-uppercase"><a class="text-white " href="<?php echo site_url()?>">Przemoxe</a></h2></div>
							<div class="col-5 text-white container-login-search-basket d-flex align-items-center justify-content-end">
								<div class="me-5"><a class="color-effects" href="<?php echo wc_get_page_permalink( 'myaccount' ); ?>">Zaloguj</a></div>
								<!-- <span class="d-inline"><?php aws_get_search_form( true ); ?></span> -->
								<div><i class="bi bi-search color-effects"></i></div>
								<div class="ms-5"><a class="basket-square d-inline " href="<?php echo wc_get_cart_url(); ?>" ><span>Koszyk</span><span><?php echo sprintf ( _n( '%d item', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> </span>
								</a></div>
							</div>
						
						</div>
					</div>

				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->


	<?php endif; ?>


	
