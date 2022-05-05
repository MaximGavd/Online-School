<?php get_header(); ?>

	<main id="primary" class="site-main single-page-content">
		<div class="container">
			<div class="cover-single-post">
				<?php while ( have_posts() ) :
					the_post(); ?>
					<div class="single-post-inner row">
						<div class="single-left-part col-lg-7">
							<h1 class="single-title"><?php the_title(); ?></h1>
							<div class="date-single-post"><?php the_date('d.m.Y'); ?></div>
							<div class="content-single-post"><?php the_content(); ?></div>
						</div>
						<div class="single-right-part col-lg-5">	
								<?php echo get_the_post_thumbnail(); ?>
						</div>	
					</div>
					<div class="cover-nav-single">
						<?php
						the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle">' . esc_html__( '&#8592; Предыдущая статья', 'school' ) . '</span>',
								'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Следующая статья &#8594;', 'school' ) . '</span> ',
							)
						); ?>
					</div>
					
				<?php endwhile; ?>
			</div>
		</div>
	</main><!-- #main -->

<?php get_footer();
