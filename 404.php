<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Y&Y_Store
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container-md">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title text-center">404</h1>
				</header><!-- .page-header -->

				<div class="page-content">
					
					<div class="cart-wrapper d-flex justify-content-center flex-column align-items-center">
						<h2 class="mb-3 "><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'yy-store' ); ?></h2>
						<p class="mb-3">
							<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'yy-store' ); ?>
						</p>
						<a href="<?= wc_get_page_permalink( 'shop' ); ?>" class="btn btn-dark d-flex justify-content-center align-items-center gap-1">
							<img class="svg me-2" src="<?= esc_url( get_template_directory_uri() ) ?>/assets/images/icons-svg/teenyicons_bag-outline_white.svg" alt="">
							<h4 class="m-0 p-0 d-inline-block">go to shop</h4>
						</a>
					</div>
					<hr>
	
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'yy-store' ); ?></h2>
						<ul class="list-unstyled">
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					$yy_store_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'yy-store' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$yy_store_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</div>						
	</main><!-- #main -->

<?php
get_footer();
