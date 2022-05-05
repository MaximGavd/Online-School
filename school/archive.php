<?php
/*
	Template name: Новости
*/
get_header(); ?>
<section class="section-top-archive" style="background-image: url('<?php bloginfo('template_url') ?>/img/news-bg.png');">
	<div class="container">
		<div class="section-archive-title">Новости</div>
	</div>
</section>
<section class="section-post-loop">
	<div class="container">
		<div class="row">
			<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
		'post_type'              => 'post',
		'orderby'                => 'menu_order',
		'order'                  => 'ASC',
		'showposts'              => 3,
		'no_rows_found'          => true,
		'update_post_meta_cache' => false,
		'update_post_term_cache' => false,
		'paged' => $paged
	);
$custom_loop = new WP_Query($args);
?>

<?php while ( $custom_loop->have_posts() ) : $custom_loop->the_post(); ?>
	<div class="inner_news_cover col-lg-4">
		<div class="inner_news">
			<a class="inner_link" href="<?php echo get_permalink() ?>">
				<div class="inner_image_post"><?php echo get_the_post_thumbnail(); ?></div>
				<div class="inner_title_post"><?php echo the_title(); ?></div>
				<div class="inner_subtitle_post"><?php echo the_content(); ?></div>
				<div class="inner_link_post">Читать далее</div>
			</a>
		</div>
	</div>
	<?php endwhile;  ?>
<?php if ($custom_loop->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
	<nav class="prev-next-posts d-flex justify-content-between">
		<div class="prev-posts-link">
			<?php echo get_previous_posts_link( '&#8592; Предыдущая страница' ); // display newer posts link ?>
		</div>
		<div class="next-posts-link">
			<?php echo get_next_posts_link( 'Следующая страица &#8594;', $custom_loop->max_num_pages ); // display older posts link ?>

		</div>
	</nav>
<?php } ?>
<?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
