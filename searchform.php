<form class="d-flex justify-content-between search_form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
		<input type="search" class="form-control contact__input" placeholder="Search" aria-label="Search" value="<?php echo get_search_query(); ?>" name="s">
		<button class="btn btn-outline-secondary contact__btn" type="submit">
			<img class="svg" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons-svg/ion_search-outline.svg" alt="search">
		</button>
	</div>
</form>