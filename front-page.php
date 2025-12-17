<?php
/**
 * The front page template file
 *
 * @package Roomish
 */

get_header(); ?>

<main id="main" class="site-main">
	<section class="main">
		<div class="container grid grid-2">
			<div>
				<h1 class="heading-primary"><?php echo esc_html__( 'Roomish AI Interior design for real life', 'roomish' ); ?></h1>
				<p class="text-lead"><?php echo esc_html__( 'Upload a room photo and explore styles, colors, and details with AI to create a new look for your space.', 'roomish' ); ?></p>
				<div class="store-section">
					<div class="store-badges">
						<a class="store-badge" href="#" aria-label="<?php echo esc_attr__( 'Download on the App Store', 'roomish' ); ?>">
							<picture>
								<source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/appStore.webp" type="image/webp">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/appStore.png" width="163" height="48" alt="<?php echo esc_attr__( 'Download on the App Store - Roomish AI Interior Design', 'roomish' ); ?>">
							</picture>
						</a>
					</div>
				</div>
				<div class="pills-container">
					<span class="pill"><?php echo esc_html__( 'Photo-based redesign', 'roomish' ); ?></span>
					<span class="pill"><?php echo esc_html__( 'Selective AI changes', 'roomish' ); ?></span>
					<span class="pill"><?php echo esc_html__( 'Interior styles & colors', 'roomish' ); ?></span>
					<span class="pill"><?php echo esc_html__( 'Realistic results', 'roomish' ); ?></span>
				</div>
			</div>
			<div class="main-phone-container">
				<picture>
					<source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/main.webp" type="image/webp">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/main.png" alt="<?php echo esc_attr__( 'Roomish AI interior design app', 'roomish' ); ?>" width="380" height="474" fetchpriority="high" decoding="async">
				</picture>
			</div>
		</div>
	</section>

	<section class="section" id="features">
		<div class="container">
			<h2 class="heading-secondary text-center"><?php echo esc_html__( 'What you can do with Roomish AI', 'roomish' ); ?></h2>
			<p class="text-lead space-3xl"><?php echo esc_html__( 'Use AI tools to redesign, restyle, and refine your room from a photo.', 'roomish' ); ?></p>
			<div class="grid grid-3">
				<div class="feature-card">
					<div class="feature-card-image">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/interior-design.png" alt="<?php echo esc_attr__( 'Interior Design - Roomish AI', 'roomish' ); ?>">
					</div>
					<div class="feature-card-content">
						<h3><?php echo esc_html__( 'Interior Design', 'roomish' ); ?></h3>
						<p class="text-muted"><?php echo esc_html__( 'Redesign your room', 'roomish' ); ?></p>
					</div>
				</div>
				<div class="feature-card">
					<div class="feature-card-image">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/reference-design.png" alt="<?php echo esc_attr__( 'Reference Design - Roomish AI', 'roomish' ); ?>">
					</div>
					<div class="feature-card-content">
						<h3><?php echo esc_html__( 'Reference Design', 'roomish' ); ?></h3>
						<p class="text-muted"><?php echo esc_html__( 'Create design with references', 'roomish' ); ?></p>
					</div>
				</div>
				<div class="feature-card">
					<div class="feature-card-image">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/main.png" alt="<?php echo esc_attr__( 'AI Recolor - Roomish AI', 'roomish' ); ?>">
					</div>
					<div class="feature-card-content">
						<h3><?php echo esc_html__( 'AI Recolor', 'roomish' ); ?></h3>
						<p class="text-muted"><?php echo esc_html__( 'Create design with AI tools', 'roomish' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section" id="how-it-works">
		<div class="container">
			<h2 class="heading-secondary text-center space-3xl"><?php echo esc_html__( "It's easy to get started", 'roomish' ); ?></h2>
			<div class="grid grid-2">
				<div class="phone-container">
					<picture>
						<source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/started.webp" type="image/webp">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/started.png" alt="<?php echo esc_attr__( 'Roomish AI Interior Design App', 'roomish' ); ?>" width="193" height="400" class="main-phone">
					</picture>
					<div class="floating-card floating-room-type">
						<div class="card-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-room-type.svg" alt="" width="24" height="24"></div>
						<span><?php echo esc_html__( 'Room type', 'roomish' ); ?></span>
					</div>

					<div class="floating-card floating-room-style">
						<div class="card-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-room-style.svg" alt="" width="24" height="24"></div>
						<span><?php echo esc_html__( 'Room style', 'roomish' ); ?></span>
					</div>

					<div class="floating-card floating-color-palette">
						<div class="card-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-room-palette.svg" alt="" width="24" height="24"></div>
						<span><?php echo esc_html__( 'Color palette', 'roomish' ); ?></span>
					</div>
				</div>

				<div class="steps">
					<div class="step">
						<div>
							<h3><?php echo esc_html__( 'Upload a room photo', 'roomish' ); ?></h3>
							<p class="text-muted"><?php echo esc_html__( 'Add a photo of your room to start redesigning it with AI', 'roomish' ); ?></p>
						</div>
					</div>
					<div class="step">
						<div>
							<h3><?php echo esc_html__( 'Choose a style and colors', 'roomish' ); ?></h3>
							<p class="text-muted"><?php echo esc_html__( 'Pick an interior style and color palette that fits your space', 'roomish' ); ?></p>
						</div>
					</div>
					<div class="step">
						<div>
							<h3><?php echo esc_html__( 'Generate and refine', 'roomish' ); ?></h3>
							<p class="text-muted"><?php echo esc_html__( 'Get AI-generated results and adjust details step by step until it feels right', 'roomish' ); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<h2 class="heading-secondary text-center"><?php echo esc_html__( 'Redesign rooms your way', 'roomish' ); ?></h2>
			<p class="text-muted text-center space-3xl"><?php echo esc_html__( 'Explore styles, colors, and details with AI — and change only what you want.', 'roomish' ); ?></p>

			<div class="lifestyle-grid">
				<div class="cell">
					<picture>
						<source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/work-space.webp" type="image/webp">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/work-space.jpg" width="100%" height="100%" alt="<?php echo esc_attr__( 'Roomish at work', 'roomish' ); ?>">
					</picture>
					<div class="cell-content">
						<span class="eyebrow"><?php echo esc_html__( 'Redesign your space', 'roomish' ); ?></span>
						<b><?php echo esc_html__( 'See how your room can look in a new style', 'roomish' ); ?></b>
					</div>
				</div>

				<div class="cell">
					<picture>
						<source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/work-styles.webp" type="image/webp">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/work-styles.png" width="100%" height="100%" alt="<?php echo esc_attr__( 'Roomish at home', 'roomish' ); ?>">
					</picture>
					<div class="cell-content">
						<span class="eyebrow"><?php echo esc_html__( 'Explore interior styles', 'roomish' ); ?></span>
						<b><?php echo esc_html__( 'Compare styles and find what fits your room', 'roomish' ); ?></b>
					</div>
				</div>

				<div class="cell">
					<picture>
						<source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/work-space.webp" type="image/webp">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/work-space.jpg" width="100%" height="100%" alt="<?php echo esc_attr__( 'Roomish on Apple Watch', 'roomish' ); ?>">
					</picture>
					<div class="cell-content">
						<span class="eyebrow"><?php echo esc_html__( 'Choose a color palette', 'roomish' ); ?></span>
						<b style="max-width: 320px;"><?php echo esc_html__( 'Experiment with colors for walls, furniture, and decor', 'roomish' ); ?></b>
					</div>
				</div>

				<div class="cell">
					<picture>
						<source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/work-styles.webp" type="image/webp">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/work-styles.png" width="100%" height="100%" alt="<?php echo esc_attr__( 'Roomish while travelling', 'roomish' ); ?>">
					</picture>
					<div class="cell-content">
						<span class="eyebrow"><?php echo esc_html__( 'Refine the details', 'roomish' ); ?></span>
						<b><?php echo esc_html__( 'Change colors selectively with AI Recolor', 'roomish' ); ?></b>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-center" id="find-us">
		<h2 class="heading-secondary"><?php echo esc_html__( 'Find us on the App Store', 'roomish' ); ?></h2>
		<div class="store-section">
			<div class="store-badges">
				<a class="store-badge" href="#" aria-label="<?php echo esc_attr__( 'Download on the App Store', 'roomish' ); ?>">
					<picture>
						<source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/appStore.webp" type="image/webp">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/appStore.png" width="163" height="48" alt="<?php echo esc_attr__( 'Download on the App Store - Roomish AI Interior Design', 'roomish' ); ?>">
					</picture>
				</a>
			</div>
		</div>
		<div class="gallery-container" id="wave-gallery">
			<div class="gallery-track">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/screen-1.png" alt="<?php echo esc_attr__( 'Roomish screen 1', 'roomish' ); ?>">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/screen-2.png" alt="<?php echo esc_attr__( 'Roomish screen 2', 'roomish' ); ?>">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/screen-3.png" alt="<?php echo esc_attr__( 'Roomish screen 3', 'roomish' ); ?>">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/screen-4.png" alt="<?php echo esc_attr__( 'Roomish screen 4', 'roomish' ); ?>">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/screen-5.png" alt="<?php echo esc_attr__( 'Roomish screen 5', 'roomish' ); ?>">
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
