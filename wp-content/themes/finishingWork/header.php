<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title>Главная</title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>


	<!-- <link rel="stylesheet" href="css/style.min.css?_v=20220402174029"> -->
	
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header__container">
				<div class="header__item logo-header">
					<?php the_custom_logo(); ?>
					<div class="logo-header__text">Ремонт жилой и коммерческой нежвижимости в Тюмени</div>
				</div>
				<div class="header__item social-header">
					<div class="social-header__text">Связаться с нами через месседжеры</div>
					<ul class="social-header__list">
						<li>
							<a href="<?php the_field('instagram-link'); ?>" class="social-header__link">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/social/01.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/social/01.png" alt=""></picture>
							</a>
						</li>
						<li>
							<a href="<?php the_field('youtube-link'); ?>" class="social-header__link">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/social/02.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/social/02.png" alt=""></picture>
							</a>
						</li>
						<li>
							<a href="<?php the_field('whatsapp-link'); ?>" class="social-header__link">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/social/03.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/social/03.png" alt=""></picture>
							</a>
						</li>
						<li>
							<a href="<?php the_field('telegram-link'); ?>" class="social-header__link">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/social/04.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/social/04.png" alt=""></picture>
							</a>
						</li>

					</ul>
				</div>
				<div class="header__contact contact-header">
					<div class="contact-header__item">
						<a href="tel:<?php the_field('phone-number'); ?>" class="contact-header__phone"><?php the_field('phone'); ?></a>
						<div class="contact-header__info">Ежедневно с 10:00 до 22:00</div>
					</div>
					<a href="" class="contact-header__button button">ЗАКАЗАТЬ ЗВОНОК</a>
					<a href="tel:88006565789" class="contact-header__image">
						<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/phone.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/phone.png" alt=""></picture>
					</a>
				</div>
			</div>
		</header>