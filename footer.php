<?php 
	$footer_logo = carbon_get_theme_option('crb_footer_logo');
	$footer_logo_url = $footer_logo ? $footer_logo : '';
?>


		<footer class="footer" id="footer">
			<div class="container py-5">
				<div class="row gap-3 gap-lg-5 text-center">
					<div class="col-md p-0">
						<a class="logo-link" href="#">
							<img src="<?php echo $footer_logo_url; ?>" alt="Y-Y-logo">
						</a>
					</div>
					<div class="col-md p-0">
						<h3 class="mb-4">exclusive</h3>
						<ul class="list-unstyled p-0">
							<li class="">
								<a href="#">visit production</a>
							</li>
							<li>
								<a href="#">restaurant “Y&Y”</a>
							</li>
						</ul>
					</div>
					<div class="col-md p-0">
						<h3 class="mb-4">need help?</h3>
						<ul class="list-unstyled p-0">
							<li class="">
								<a href="#">contact us</a>
							</li>
							<li>
								<a href="#">FAQs</a>
							</li>
							<li>
								<a href="#">site`s map</a>
							</li>
							<li>
								<a href="#">delivery</a>
							</li>
						</ul>
					</div>
					<div class="col-md p-0">
						<h3 class="mb-4">our company</h3>
						<ul class="list-unstyled p-0">
							<li class="">
								<a href="#">about Y&Y</a>
							</li>
							<li>
								<a href="#">Y&Y India</a>
							</li>
							<li>
								<a href="#">Y&Y x Netflix</a>
							</li>
							<li>
								<a href="#">career</a>
							</li>
							<li>
								<a href="#">code of ethics</a>
							</li>
						</ul>
					</div>
					<div class="col-md p-0">
						<h3 class="mb-4">follow us</h3>
						<ul class="list-unstyled p-0">
							<li class="">
								<a href="#"><i class="bi bi-twitter me-2"></i>twitter</a>
							</li>
							<li>
								<a href="#"><i class="bi bi-youtube me-2"></i>youtube</a>
							</li>
							<li class="">
								<a href="#"><i class="bi bi-spotify me-2"></i>spotify</a>
							</li>
							<li>
								<a href="#"><i class="bi bi-instagram me-2"></i>instagram</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>	

		<?php wp_footer(); ?>

	</body>
</html>
