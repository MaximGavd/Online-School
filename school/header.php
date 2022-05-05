<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package school
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
 	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header class="header-main">
		<div class="header-top d-xl-block d-none">
			<div class="container">
				<div class="cover-info d-flex justify-content-between">
					<div class="d-flex info-block mail-block-top align-items-center">
						<div class="image-block"><img src="<?php echo bloginfo('template_url') ?>/img/mail.svg" alt="mail"></div>
						<div class="text-block"><a href="mailto:otkrytaya.shkola@bk.ru">otkrytaya.shkola@bk.ru</a></div>
					</div>
					<div class="d-flex info-block place-block-top align-items-center">
						<div class="image-block"><img src="<?php echo bloginfo('template_url') ?>/img/place.svg" alt="place"></div>
						<div class="text-block">г.о. Химки, ул. Гоголя 9</div>
					</div>
					<div class="d-flex info-block clock-block-top align-items-center">
						<div class="image-block"><img src="<?php echo bloginfo('template_url') ?>/img/clock.svg" alt="clock"></div>
						<div class="text-block">Пн-Вс: с 8:30 - 19:00</div>
					</div>
					<div class="d-flex info-block phone-block-top align-items-center">
						<div class="image-block"><img src="<?php echo bloginfo('template_url') ?>/img/phone.svg" alt="phone"></div>
						<div class="text-block"><a href="tel:+89778501547">+8 977 850 15 47</a></div>
					</div>
					<a href="<?php echo get_home_url(); ?>/contacts"><div class="btn-top-course">Записаться</div></a>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-2 col-lg-1"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo bloginfo('template_url') ?>/img/logo.png" alt="logo"></a></div>
					<div class="col-xl-10 col-lg-11 cover-menu">
						<?php wp_nav_menu( [
							'theme_location'  => 'primary-1',
							'menu'            => 'header',
							'container'       => 'ul',
							'container_class' => 'header-main-menu',
							'container_id'    => '',
							'menu_class'      => 'header-main-menu d-flex justify-content-between',
						] ); ?>
							
					</div>
				</div>
			</div>
		</div>
	</header>
