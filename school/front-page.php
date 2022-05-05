<?php get_header(); ?>
<section class="section-main-bg" style="background-image: url('<?php echo bloginfo('template_url') ?>/img/bg.png');">
	<div class="container">
		<div class="row text-center d-flex justify-content-center flex-row">
			<div class="top-title">«Открытая школа 360»</div>
			<div class="top-subtitle">
				<p>
					<?php the_field( 'subtitle_1block', 44 ); ?>
				</p>
			</div>
		</div>
	</div>
</section>
<section class="section-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 content-left-site">
				<div class="content-site-title">
					<?php the_field('title_2block' , 44 ); ?>
				</div>
				<div class="content-site-individual">
					<?php the_field('subtitle_2-block' , 44 ); ?>
				</div>
				<div class="content-site-numbers">
					<div class="content-site-deff">Чем мы отличаемся</div>
					<div class="content-site-numblock d-flex align-items-center">
						<div class="content-site-circle">1</div>
						<div class="content-site-numtext"><?php the_field('diff_1_pos' , 44 ); ?></div>
					</div>
					<div class="content-site-numblock d-flex align-items-center">
						<div class="content-site-circle">2</div>
						<div class="content-site-numtext"><?php the_field('diff_2_pos' , 44 ); ?></div>
					</div>
					<div class="content-site-numblock d-flex align-items-center">
						<div class="content-site-circle">3</div>
						<div class="content-site-numtext"><?php the_field('diff_3_pos' , 44 ); ?></div>
					</div>
					<div class="content-site-numblock d-flex align-items-center">
						<div class="content-site-circle">4</div>
						<div class="content-site-numtext"><?php the_field('diff_4_pos' , 44) ; ?></div>
					</div>
				</div>
			</div>
			<div class="col-lg-7 content-right-site">
				<img src="<?php the_field('school_photo' , 44 ); ?>" alt="about">
			</div>
			<div class="content-site-teach">
					<div class="content-site-teachtitle">Учеба в «Открытая школа 360» — это</div>
					<div class="content-site-teach-info d-flex flex-row flex-wrap justify-content-between">
						<div class="content-site-teach-block d-flex align-items-center">
							<div class="content-site-teach-img">
								<img src="<?php echo bloginfo('template_url') ?>/img/happy.svg" alt="happy">
							</div>
							<div class="content-site-teach-text">
								<p><?php the_field('title_learn_1pos' , 44 ); ?></p>
								<small><?php the_field('subtitle_learn_1pos' , 44 ); ?></small>
							</div>
						</div>
						<div class="content-site-teach-block d-flex align-items-center">
							<div class="content-site-teach-img">
								<img src="<?php echo bloginfo('template_url') ?>/img/happy.svg" alt="happy">
							</div>
							<div class="content-site-teach-text">
								<p><?php the_field('title_learn_2pos' , 44 ); ?></p>
								<small><?php the_field('subtitle_learn_2pos' , 44 ); ?></small>
							</div>
						</div>
						<div class="content-site-teach-block d-flex align-items-center">
							<div class="content-site-teach-img">
								<img src="<?php echo bloginfo('template_url') ?>/img/happy.svg" alt="happy">
							</div>
							<div class="content-site-teach-text">
								<p><?php the_field('title_learn_3pos' , 44 ); ?></p>
								<small><?php the_field('subtitle_learn_2pos' , 44 ); ?></small>
							</div>
						</div>
						<div class="content-site-teach-block d-flex align-items-center">
							<div class="content-site-teach-img">
								<img src="<?php echo bloginfo('template_url') ?>/img/happy.svg" alt="happy">
							</div>
							<div class="content-site-teach-text">
								<p><?php the_field('title_learn_4pos' , 44 ); ?></p>
								<small><?php the_field('subtitle_learn_3pos' , 44 ); ?></small>
							</div>
						</div>
					</div>
			</div>
			<div class="content-site-album">
				<img class="leav-left-site" src="<?php bloginfo('template_url') ?>/img/leav.svg" alt="leav">
				<div class="col-lg-12 content-albul-title">Фотоальбом</div>
				<div class="contens-site-albumcover">
					<div class="content-site-albumslide">
						<div class="content-site-photos"><img src="<?php the_field('slider_image_1' , 44 ); ?>" alt="school"></div>
						<div class="content-site-photos"><img src="<?php the_field('slider_image_2' , 44 ); ?>" alt="school"></div>
						<div class="content-site-photos"><img src="<?php the_field('slider_image_3' , 44 ); ?>" alt="school"></div>
						<div class="content-site-photos"><img src="<?php the_field('slider_image_4' , 44 ); ?>" alt="school"></div>
						<div class="content-site-photos"><img src="<?php the_field('slider_image_5' , 44 ); ?>" alt="school"></div>
						<div class="content-site-photos"><img src="<?php the_field('slider_image_6' , 44 ); ?>" alt="school"></div>
						<div class="content-site-photos"><img src="<?php the_field('slider_image_7' , 44 ); ?>" alt="school"></div>
					</div>
					<div class="content-arrows-cover d-flex">
					 <div class="content-site-prev content-arrow"><img src="<?php echo bloginfo('template_url') ?>/img/arrow-left.svg" alt="next"></div>
					 <div class="content-site-next content-arrow"><img src="<?php echo bloginfo('template_url') ?>/img/arrow-next.svg" alt="next"></div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>
<section class="section-contacts">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 title_contacts">Напишите нам</div>
			<div class="col-lg-12 cover_contacts">
				<div class="inner_contacts inner_contact_row1 row">
					<div class="col-md-4 col-12 inner_contact">
						<div class="inner_image"><img src="<?php bloginfo('template_url') ?>/img/fb.svg" alt="facebook"></div>
						<div class="inner_text">otkrytaya.shkola</div>
					</div>
					<div class="col-md-4 col-12 inner_contact">
						<div class="inner_image"><img src="<?php bloginfo('template_url') ?>/img/inst.svg" alt="inst"></div>
						<div class="inner_text">otkrytaya.shkola</div>
					</div>
					<div class="col-md-4 col-12 inner_contact">
						<div class="inner_image"><img src="<?php bloginfo('template_url') ?>/img/app.svg" alt="facebook"></div>
						<div class="inner_text">8 977 850 15 47</div>
					</div>
				</div>
				<div class="inner_contacts inner_contact_row2 row">
					<div class="col-md-4 col-12 inner_contact">
						<div class="inner_image"><img src="<?php bloginfo('template_url') ?>/img/place2.svg" alt="facebook"></div>
						<div class="inner_text">Московская область, г.о.Химки, ул.Гоголя, д.9</div>
					</div>
					<div class="col-md-4 col-12 inner_contact">
						<div class="inner_image"><img src="<?php bloginfo('template_url') ?>/img/phone2.svg" alt="inst"></div>
						<div class="inner_text">8 977 850 15 47</div>
					</div>
					<div class="col-md-4 col-12 inner_contact">
						<div class="inner_image"><img src="<?php bloginfo('template_url') ?>/img/mail2.svg" alt="facebook"></div>
						<div class="inner_text">otkrytaya.shkola@bk.ru</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<sectyion class="section-news">
	<div class="container">
		<div class="row">
			<div class="info_top_news col-lg-12 d-flex justify-content-between align-items-center">
				<div class="title_news">Новости</div>
				<div class="more_btn_news"><a href="<?php echo get_home_url() ?>/news">Все новости</a></div>
			</div>
			<div class="info_bottom_news col-lg-12 row justify-content-between">
				<?php
				    $recent_posts = wp_get_recent_posts(array(
				        'numberposts' => 3, // Number of recent posts thumbnails to display
				        'post_status' => 'publish' // Show only the published posts
				    ));
				    foreach( $recent_posts as $post_item ) : ?>
				<div class="inner_news_cover col-xl-4 col-lg-6">
					<div class="inner_news">
						<a class="inner_link" href="<?php echo get_permalink($post_item['ID']) ?>">
							<div class="inner_image_post"><?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?></div>
							<div class="inner_title_post"><?php echo $post_item['post_title'] ?></div>
							<div class="inner_subtitle_post"><?php echo $post_item['post_content'] ?></div>
							<div class="inner_link_post">Читать далее</div>
						</a>
					</div>
									            
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>			
</sectyion>
<?php get_footer(); ?>