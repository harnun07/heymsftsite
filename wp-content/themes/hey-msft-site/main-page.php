<?php
/**
 * Template Name: Main Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hey_MSFT_Site
 */
global $product;
get_header();
?>
	<main id="primary" class="site-main">
		<?php
			while ( have_posts() ) :
				the_post();
				the_content();
			endwhile;
		?>
		<svg id="leftArrow" class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
			<g stroke-linejoin="round" stroke-linecap="round" >
				<circle r="46" cx="50" cy="50" />
				<polyline points="60 25, 30 50, 60 75" ></polyline>
			</g>
		</svg>
		<svg id="rightArrow" class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
			<g stroke-linejoin="round" stroke-linecap="round" >
				<circle r="46" cx="50" cy="50" />
				<polyline points="40 25, 70 50, 40 75" ></polyline>
			</g>
		</svg>
		<!-- <div id="outer-wrapper" class="main-wrapper"> -->
		<div class="main-wrapper">
			<?php
				$innerpages = new WP_Query(array(
					'post_type' => 'page',
					'post_status' => 'publish',
					'post__not_in' => array(9),
					'posts_per_page' => -1,
					'order' => 'ASC'
				));
			?>
			<?php if ( $innerpages->have_posts() ) : ?>
				<?php while ( $innerpages->have_posts() ) : $innerpages->the_post(); ?>
					<section id="page-<?php the_id(); ?>" class="inner-page">
						<?php if ( get_the_ID() === 415 || is_page( 415 ) ) : ?>
							<div class="elementor-section elementor-section-boxed">
								<div class="elementor-container">
									<div class="row stretched">
										<div class="col-sm-4">
											<?php the_content(); ?>
										</div>
										<div class="col-sm-8">
											<div id="tabbed-element">
												<div class="container d-flex">
												  <ul id="tabs" class="nav nav-tabs" role="tablist">
													<li class="nav-item">
													  <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">
														<img src="<?php the_field('video_one_thumbnail'); ?>" />
													  </a>
													</li>
													<li class="nav-item">
													  <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">
														<img src="<?php the_field('video_two_thumbnail'); ?>" />
													  </a>
													</li>
													<li class="nav-item">
													  <a id="tab-C" href="#pane-C" class="nav-link" data-toggle="tab" role="tab">
														<img src="<?php the_field('video_three_thumbnail'); ?>" />
													  </a>
													</li>
												  </ul>
												  <div id="content" class="tab-content" role="tablist">
													<div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
														<a href="<?php the_field('video_one_resource'); ?>" data-fancybox="">
															<img src="<?php the_field('video_one_splash_image'); ?>">
														</a>
													</div>
													<div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
														<a href="<?php the_field('video_two_resource'); ?>" data-fancybox="">
															<img src="<?php the_field('video_two_splash_image'); ?>">
														</a>
													</div>
													<div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
														<a href="<?php the_field('video_three_resource'); ?>" data-fancybox="">
															<img src="<?php the_field('video_three_splash_image'); ?>">
														</a>
													</div>
												  </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php else: ?>
							<?php the_content(); ?>
						<?php endif; ?>
					</section>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			<footer>
				<div class="row">
					<div class="col-sm-12">
						<span></span>
					</div>
				</div>
			</footer>
		</div>
		<nav class="dot-nav">
		  <ul class="dot-ul">
			<?php
				$innerpages = new WP_Query(array(
					'post_type' => 'page',
					'post_status' => 'publish',
					'post__not_in' => array(9),
					'posts_per_page' => -1,
					'order' => 'ASC'
				));
			?>
			<?php if ( $innerpages->have_posts() ) : ?>
				<?php while ( $innerpages->have_posts() ) : $innerpages->the_post(); ?>
					<li><span></span></li>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		  </ul>
		</nav>
	</main>
<?php
get_footer();