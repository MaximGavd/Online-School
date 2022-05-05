<?php 
/*
	Template name: Галерея страница
*/

?>

<?php get_header(); ?>

<section class="section-gallery">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 title-gallery">Галерея</div>
			<div class="col-lg-12 sortby-gallery d-flex justify-content-between">
				<div class="gallery-item gallery_1_sort active-btn-opened"><?php the_field('category_name_1' , 13); ?></div>
				<div class="gallery-item gallery_2_sort"><?php the_field('category_name_2' , 13); ?></div>
				<div class="gallery-item gallery_3_sort"><?php the_field('category_name_3' , 13); ?></div>
				<div class="gallery-item gallery_4_sort"><?php the_field('category_name_4' , 13); ?></div>
				<div class="gallery-item gallery_5_sort"><?php the_field('category_name_5' , 13); ?></div>
				<div class="gallery-item gallery_6_sort"><?php the_field('category_name_6' , 13); ?></div>
			</div>
					<div class="wrapper-gallery">
						<div class="col-lg-12 row gallery-cover gallery_1_showed active-gallery">
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat_1' , 13); ?>" alt="gallery">
							</div>
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat_2' , 13); ?>" alt="gallery">
							</div>
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat_3' , 13); ?>" alt="gallery">
							</div>
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat_4' , 13); ?>" alt="gallery">
							</div>
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat_4' , 13); ?>" alt="gallery">
							</div>
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat_5' , 13); ?>" alt="gallery">
							</div>
						</div>
						<div class="col-lg-12 row gallery-cover gallery_2_showed">
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat2_1' , 13) ?>" alt="gallery">
							</div>
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat2_2' , 13) ?>" alt="gallery">
							</div>
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat2_3' , 13) ?>" alt="gallery">
							</div>
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat2_4' , 13) ?>" alt="gallery">
							</div>
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat2_5' , 13) ?>" alt="gallery">
							</div>
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat2_6' , 13) ?>" alt="gallery">
							</div>
						</div>
						<div class="col-lg-12 row gallery-cover gallery_3_showed">
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat3_1' , 13) ?>" alt="gallery">
							</div>
						</div>
						<div class="col-lg-12 row gallery-cover gallery_4_showed">
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat4_1' , 13) ?>" alt="gallery">
							</div>
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat4_2' , 13) ?>" alt="gallery">
							</div>
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat4_3' , 13) ?>" alt="gallery">
							</div>
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat4_4' , 13) ?>" alt="gallery">
							</div>
						</div>
						<div class="col-lg-12 row gallery-cover gallery_5_showed">
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat5_1' , 13) ?>" alt="gallery">
							</div>
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat5_2' , 13) ?>" alt="gallery">
							</div>
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat5_3' , 13) ?>" alt="gallery">
							</div>
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat5_4' , 13) ?>" alt="gallery">
							</div>
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat5_5' , 13) ?>" alt="gallery">
							</div>
						</div>
						<div class="col-lg-12 row gallery-cover gallery_6_showed">
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat6_1' , 13) ?>" alt="gallery">
							</div>
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat6_2' , 13) ?>" alt="gallery">
							</div>
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat6_3' , 13) ?>" alt="gallery">
							</div>
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat6_4' , 13) ?>" alt="gallery">
							</div>
							<div class="col-lg-4 col-md-6 gallery-inner-block">
								<img src="<?php the_field('image_cat6_5' , 13) ?>" alt="gallery">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>