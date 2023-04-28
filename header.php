
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<?php 
	$header_logo = carbon_get_theme_option('crb_header_logo');
	$footer_logo = carbon_get_theme_option('crb_footer_logo');
	$header_logo_main = $footer_logo;
	
	$header_logo_main_url = $header_logo_main ? $header_logo_main : '';
	$header_logo_url = $header_logo ? $header_logo : '';
?>

<?php if(is_page( 'Home' )):?>
	
	<header class="header-home">
		<nav class="navbar navbar-expand-lg fixed-top w-100 header__navmenu">
			<div class="container-fluid container-lg p-4">
				<div class="offcanvas offcanvas-top d-block" tabindex="1" id="offcanvasDarkNavbar" aria-labelledby="Y-Y-navbar">
					<div class="offcanvas-header">
						<a class="offcanvas-brand logo-link" href="#">
							<img src="<?php echo $header_logo_url; ?>" alt="Y-Y-logo">
						</a>
						<button type="button" class="navbar-toggler" data-bs-dismiss="offcanvas" aria-label="Close"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons-svg/icon-park_hamburger-button-1.svg" alt="humpurger" class="humburger-img svg"></button>
					</div>
					<div class="offcanvas-body d-flex justify-content-between align-items-center offcanvas-body__main-content">
						<ul class="navbar-nav d-flex gap-4">
							<li class="nav-item">
								<a class="nav-link p-0" aria-current="page" href="catalog.html">Catalog</a>
							</li>
							<li class="nav-item">
								<a class="nav-link p-0" aria-current="page" href="#">Wishlist</a>
							</li>
						</ul>
						<!-- <?php
							yy_primary_menu();
							?> -->
						<a class="navbar-brand logo-link" href="#">
							<img src="<?php echo $header_logo_url; ?>" alt="Y-Y-logo">
						</a>
						<ul class="navbar-nav d-flex align-items-center gap-4">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle serch-link p-0" href="#" role="button"
									data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" data-bs-auto-close="outside">
									Search
								</a>
								<div class="dropdown-menu dropdown-menu-end px-2">
									<?php get_search_form(); ?>
									<div class="search_result"></div>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link dropdown-toggle bucket-link" href="<?= esc_url( wc_get_cart_url() ) ?>" role="button"
									data-bs-display="static" aria-expanded="false" target="_blank">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons-svg/teenyicons_bag-outline.svg" alt="bucket" class="svg">
									<?php yy_store_woocommerce_cart_link();?>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<a class="navbar-toggler navbar-brand logo-link" href="#">
					<img src="<?php echo $header_logo_url; ?>" alt="Y-Y-logo">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Y-Y-togglerBtn">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons-svg/icon-park_hamburger-button.svg" alt="humpurger" class="humburger-img svg">
				</button>
			</div>
		</nav>	
		<section class="hero" id="hero">
			<div id="carouselExampleSlidesOnly" class="hero-slider carousel slide carousel-fade " 
				data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-bg.png" class="d-block w-100" alt="hero-bg">
					</div>
					<div class="carousel-item">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-bg.png" class="d-block w-100" alt="hero-bg">
					</div>
				</div>
				<div class="container-fluid container-lg hero-content text-white">
					<div class="d-flex flex-column align-items-center">
						<h1>explore fashion</h1>
						<a class="btn btn-outline-light link-btn py-0" href="<?= wc_get_page_permalink( 'shop' ); ?>" role="button">to shop</a>
					</div>
				</div>
			</div>
		</section>
	</header>
<?php endif; ?>

<?php if(!is_page( 'Home' )):?>
	<header class="header-main">
		<nav class="navbar navbar-expand-md w-100">
			<div class="container-fluid container-lg p-4">
				<div class="offcanvas offcanvas-top d-block" tabindex="1" id="offcanvasDarkNavbar"
					aria-labelledby="Y-Y-navbar">
					<div class="offcanvas-header">
						<a class="offcanvas-brand logo-link" href="<?php echo get_home_url(); ?>">
							<img src="<?php echo $header_logo_url; ?>" alt="Y-Y-logo">
						</a>
						<button type="button" class="navbar-toggler" data-bs-dismiss="offcanvas" aria-label="Close">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons-svg/icon-park_hamburger-button-1.svg" alt="humpurger"
								class="humburger-img svg"></button>
					</div>
					<div class="offcanvas-body d-flex justify-content-between align-items-center offcanvas-body__main-content">
						<ul class="navbar-nav d-flex justify-content-center align-items-center gap-md-4 navbar-links">
							<li class="nav-item ">
								<a class="navbar-brand logo-link" href="<?php echo get_home_url(); ?>">
									<img src="<?php echo $header_logo_main_url; ?>" alt="Y-Y-logo">
								</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link p-0" aria-current="page" href="#">for her</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link p-0" aria-current="page" href="#">for him</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link p-0" aria-current="page" href="#">for children</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link p-0" aria-current="page" href="#">accessories</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link p-0" aria-current="page" href="#">bags</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link p-0" aria-current="page" href="#">Y&Y India</a>
							</li>
						</ul>
						<ul class="navbar-nav d-flex align-items-center gap-lg-3 navbar-interactive">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle serch-link p-0" href="#" role="button"
									data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" data-bs-auto-close="outside">
									<img class="svg" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons-svg/ion_search-outline.svg" alt="serch"> </a>
								<div class="dropdown-menu dropdown-menu-end px-2">
									<div class="form-wrapper">
										<?php get_search_form(); ?>
										<div class="search_result"></div>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle bucket-link pe-2" href="#" role="button"
									data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" data-bs-auto-close="outside">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons-svg/teenyicons_bag-outline.svg" alt="bucket" class="svg">
									<?php yy_store_woocommerce_cart_link();?>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<div class="form-wrapper bucket-wrapper">
										<form class="p-3 bucket bucket-form">
											<?php
												yy_store_woocommerce_minicart();
											?>	
										</form>
									</div>
								</div>

							</li>
						</ul>
					</div>
				</div>
				<a class="navbar-toggler navbar-brand logo-link" href="<?php echo get_home_url(); ?>">
					<img src="<?php echo $header_logo_main_url; ?>" alt="Y-Y-logo">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
					data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
					aria-label="Y-Y-togglerBtn">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons-svg/icon-park_hamburger-button.svg" alt="humpurger"
						class="humburger-img svg">
				</button>
			</div>
		</nav>
	</header>
<?php endif; ?>