	<section class="footer">
		<div class="container">
			<section class="cta-section">
				<div class="container">
					<picture>
						<source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.webp" type="image/webp">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" width="64" height="64" alt="<?php echo esc_attr__( 'Roomish - We track, you drink', 'roomish' ); ?>">
					</picture>
					<div class="cta-content">
						<div>
							<h2 class="heading-secondary"><?php echo esc_html__( 'AI Room Design & 3D Interior', 'roomish' ); ?></h2>
							<p class="text-lead"><?php echo esc_html__( 'Home Decor Designer & Planner', 'roomish' ); ?></p>
						</div>
						<div class="cta-buttons">
							<a href="#"><?php echo esc_html__( 'Open', 'roomish' ); ?></a>
						</div>
					</div>
				</div>
			</section>
			<p class="text-muted footer-links">
				<a href="/terms-of-use/"><?php echo esc_html__( 'Terms of Use', 'roomish' ); ?></a> | 
				<a href="/privacy-policy/"><?php echo esc_html__( 'Privacy Policy', 'roomish' ); ?></a> | 
				<a href="mailto:admin@roomish.com"><?php echo esc_html__( 'Contact Us', 'roomish' ); ?></a>
			</p>
			<p class="text-muted">@<?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p>
		</div>
	</section>
</div><!-- #app -->

<?php wp_footer(); ?>

</body>
</html>