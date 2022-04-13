<?php
/*
TempLate Name: home
*/
?>
<?php get_header(); ?>
		<main class="page">
			<section class="page__main-block main-block">
				<div class="main-block__container">
					<h1 class="main-block__title title"><?php the_field('title'); ?>
						<span> <br> <?php the_field('triger'); ?></span>
					</h1>
					<div class="main-block__text"><?php the_field('text'); ?></div>
					<div class="main-block__footer">
						<a href="" class="main-block__button button">Рассчитать стоимость ремонта</a>
						<div class="main-block__decor">
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/main-block/button.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/main-block/button.png" alt="картинка"></picture>
						</div>
					</div>
				</div>
			</section>
			<section class="page__project project-page">
				<div class="project-page__container">
					<h2 class="project-page__title title">С <span>2015 года</span> отремонтировали <br>
						более <span>160 объектов</span></h2>
					<div class="project-page__text">От небольших студий до ресторанов на высоте 100 метров</div>
					<div class="project-page__body">

					<?php
						global $post;
						$myposts = get_posts([ 
						'numberposts' => -1,
						'category' => 5,
							]);
						if( $myposts ){
						foreach( $myposts as $post ){
						setup_postdata( $post );
					?>
						<article class="project-page__item item-project">
							<div class="item-project__image-ibg">
							<?php the_post_thumbnail(); ?>
								<!-- <picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/project-page/01.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/project-page/01.jpg" alt="картинка"></picture> -->
							</div>
							<div class="item-project__content">
								<div class="item-project__title"><?php the_title(); ?></div>
								<div class="item-project__subtitle"><?php the_content(); ?></div>
								<a href="" class="item-project__button">Подробнее</a>
							</div>
						</article>
					<?php } } wp_reset_postdata(); ?>
					</div>
					<div class="project-page__image">
						<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/project-page/bg.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/project-page/bg.png" alt=""></picture>
					</div>
					<a href="" class="project-page__button button">получить консультацию</a>
				</div>
			</section>
			<section class="page__solutions solutions-page">
				<div class="solutions-page__container">
					<h2 class="solutions-page__title title">Предлагаем самые <span>выгодные <br> решения</span> для наших
						клиентов
					</h2>
					<div class="solutions-page__text">Выберите тариф, который вам подходит</div>
					<div class="solutions-page__body">
						<article class="solutions-page__item item-solutions">
							<div class="item-solutions__image-ibg">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/solutions-page/01.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/solutions-page/01.png" alt="картинка"></picture>
							</div>
							<div class="item-solutions__title">Тариф «Эконом» </div>
							<div class="item-solutions__info">от 4000 ₽/м²</div>
							<ul class="item-solutions__list">
								<li class="item-solutions__link">— Стены и обои</li>
								<li class="item-solutions__link">— Пол: Ламинат или кварцвинил</li>
								<li class="item-solutions__link">— Сан. узел - плитка</li>
							</ul>
							<a href="" class="item-solutions__button button">выбрать </a>
						</article>
						<article class="solutions-page__item item-solutions">
							<div class="item-solutions__image-ibg">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/solutions-page/02.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/solutions-page/02.png" alt="картинка"></picture>
							</div>
							<div class="item-solutions__title">Тариф «Комфорт»</div>
							<div class="item-solutions__info">от 6000 ₽/м²</div>
							<ul class="item-solutions__list">
								<li class="item-solutions__link">— Стены и обои или покраска</li>
								<li class="item-solutions__link">— Пол: Ламинат или кварцвинил</li>
								<li class="item-solutions__link">— Сан. узел - плитка</li>
								<li class="item-solutions__link">— Сантехника и электрика</li>
							</ul>
							<a href="" class="item-solutions__button button">выбрать </a>
						</article>
						<article class="solutions-page__item item-solutions">
							<div class="item-solutions__image-ibg">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/solutions-page/03.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/solutions-page/03.png" alt="картинка"></picture>
							</div>
							<div class="item-solutions__title">Тариф «Евролюкс»</div>
							<div class="item-solutions__info">от 8000 ₽/м²</div>
							<ul class="item-solutions__list">
								<li class="item-solutions__link">— Стены и обои или покраска, декоративная штукатурка</li>
								<li class="item-solutions__link">— Пол: Ламинат, кварцвинил или кранитная плитка</li>
								<li class="item-solutions__link">— Сан. узел - плитка</li>
								<li class="item-solutions__link">— Сантехника и электрика</li>
								<li class="item-solutions__link">— Натяжные потолки</li>
								<li class="item-solutions__link">— Монтаж люстр, раковин,
									санфоянсоф и т.д.</li>
							</ul>
							<a href="" class="item-solutions__button button">выбрать </a>
						</article>
					</div>
					<a href="" class="solutions-page__info"><span>Индивидуальный проект узнать подробнее</span></a>
				</div>
			</section>
			<section class="page__calculate calculate-page">
				<div class="calculate-page__container">
					<h2 class="calculate-page__title title">Рассчитайте стоимость ремонта <br> <span>за 1 минуту</span> с
						точностью 99%</h2>
					<div class="calculate-page__body">
						<form class="calculate-page__form form-calculate" method="GET" enctype="multipart/form-data" action="#">
							<div class="form-calculate__item">
								<div class="form-calculate__label">Тип площади</div>
								<select name="form[]" class="form">
									<option value="1" selected>Жилая</option>
									<option value="2">Жилая</option>
									<option value="3">Не жилая</option>
									<option value="4">Жилая</option>
								</select>
							</div>
							<div class="form-calculate__item">
								<div class="form-calculate__label">Тариф</div>
								<select name="form[]" class="form">
									<option value="1" selected>Люкс</option>
									<option value="2">Эконом</option>
									<option value="3">Люкс</option>
									<option value="4">Люкс</option>
								</select>
							</div>
							<div class="form-calculate__item">
								<div class="form-calculate__label">Площадь,м²</div>
								<div data-range class="form-calculate__range range-calculate">
									<div data-range-item class="range-calculate__range"></div>
									<div class="range-calculate__inputs">
										<input data-range-from="0" autocomplete="off" value="500" type="text" name="form[]" class="range-calculate__input">
										<input data-range-to="5000" autocomplete="off" value="1000" type="text" name="form[]" class="range-calculate__input range-calculate__input_right">
									</div>
								</div>
							</div>
							<div class="form-calculate__item">
								<div class="form-calculate__label">Ваше имя</div>
								<input autocomplete="off" type="text" name="form[]" placeholder="" class="form-calculate__input">
							</div>
							<div class="form-calculate__item">
								<div class="form-calculate__label">Ваше телефон</div>
								<input autocomplete="off" type="tel" name="form[]" placeholder="+8 (800)" class="form-calculate__input">
							</div>
							<button type="submit" class="form-calculate__btn button">Расчитать стоимость</button>
						</form>
						<div class="calculate-page__image-ibg">
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/calculate-page/01.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/calculate-page/01.jpg" alt="картинка"></picture>
						</div>
					</div>
					<div class="calculate-page__bg">
						<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/calculate-page/bg.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/calculate-page/bg.png" alt="картинка"></picture>
					</div>
				</div>
			</section>
			<section class="page__advantage advantage-page">
				<div class="advantage-page__container">
					<h2 class="advantage-page__title title">Почему нам <span>доверяют ?</span></h2>
					<div class="advantage-page__body">
						<article class="advantage-page__item item-advantage">
							<div class="item-advantage__image">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/advantage-page/01.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/advantage-page/01.png" alt=""></picture>
							</div>
							<div class="item-advantage__info">
								<div class="item-advantage__title">Опыт</div>
								<div class="item-advantage__text">Опыт наших мастеров более 10 лет</div>
							</div>
						</article>
						<article class="advantage-page__item item-advantage">
							<div class="item-advantage__image">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/advantage-page/02.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/advantage-page/02.png" alt=""></picture>
							</div>
							<div class="item-advantage__info">
								<div class="item-advantage__title">Гарантии</div>
								<div class="item-advantage__text">Даем гарантию на свои
									работы 2 года</div>
							</div>
						</article>
						<article class="advantage-page__item item-advantage">
							<div class="item-advantage__image">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/advantage-page/03.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/advantage-page/03.png" alt=""></picture>
							</div>
							<div class="item-advantage__info">
								<div class="item-advantage__title">Команда</div>
								<div class="item-advantage__text">Ежеквартально наши мастера
									проходят профессиональную
									аттестацию</div>
							</div>
						</article>
						<article class="advantage-page__item item-advantage">
							<div class="item-advantage__image">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/advantage-page/04.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/advantage-page/04.png" alt=""></picture>
							</div>
							<div class="item-advantage__info">
								<div class="item-advantage__title">Поставщики</div>
								<div class="item-advantage__text">Специальные условия от поставщиков мебели для
									наших клиентов</div>
							</div>
						</article>
						<article class="advantage-page__item item-advantage">
							<div class="item-advantage__image">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/advantage-page/05.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/advantage-page/05.png" alt=""></picture>
							</div>
							<div class="item-advantage__info">
								<div class="item-advantage__title">Видеонаблюдение</div>
								<div class="item-advantage__text">Установим камеру видеонаблюдения
									за ремонтом, в режиме реального
									времени с компьютера или телефонав</div>
							</div>
						</article>
						<article class="advantage-page__item item-advantage">
							<div class="item-advantage__image">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/advantage-page/06.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/advantage-page/06.png" alt=""></picture>
							</div>
							<div class="item-advantage__info">
								<div class="item-advantage__title">Договор</div>
								<div class="item-advantage__text">Все сроки и гарании
									прописываем в договоре</div>
							</div>
						</article>
					</div>
					<div class="advantage-page__footer">
						<a href="" class="advantage-page__button button">получить консультацию</a>
					</div>
				</div>
			</section>
			<section class="page__application application-page">
				<div class="application-page__container">
					<div class="application-page__info">
						<h2 class="application-page__title">Закажите замер, а также предварительную оценку объекта
							<span>БЕСПЛАТНО</span>
						</h2>
						<div class="application-page__text">На бесплатном выезде <br>
							инженер замерщик:</div>
						<ul class="application-page__list">
							<li class="application-page__link">Сделает точный замер</li>
							<li class="application-page__link">Сориентирует по срокам</li>
							<li class="application-page__link">Поможет определиться
								с видом ремонта</li>
						</ul>
					</div>
					<form class="application-page__form form-application" method="GET" enctype="multipart/form-data" action="#">
						<div class="form-application__body">
							<div class="form-application__title">Укажите ваши контакты</div>
							<div class="form-application__text">и мы перезвоним вам, чтобы назначить удобное время для замера
							</div>
							<div class="form-application__item">
								<input autocomplete="off" type="text" name="form[]" placeholder="Ваше имя" class="form-application__input">
							</div>
							<div class="form-application__item">
								<input autocomplete="off" type="text" name="form[]" placeholder="Телефон" class="form-application__input">
							</div>
							<button type="submit" class="form-application__btn button">ЗАКАЗАТЬ БЕСПЛАТНЫЙ ЗАМЕР</button>
						</div>
					</form>
				</div>
			</section>
			<section class="page__step step-page">
				<div class="step-page__container">
					<h2 class="step-page__title title"> <span>5 шагов</span> до ремонта вашей мечты</h2>
					<div class="step-page__body">
						<div class="step-page__item item-step">
							<div class="item-step__number">1</div>
							<div class="item-step__body">
								<div class="item-step__title">Заявка</div>
								<div class="item-step__text">Вы оставляете заявку на сайте или по телефону. Мы
									договариваемся о встрече для точного замера и расчета стоимости</div>
							</div>
						</div>
						<div class="step-page__item item-step">
							<div class="item-step__number">2</div>
							<div class="item-step__body">
								<div class="item-step__title">Замер</div>
								<div class="item-step__text">Мы выезжаем на объект, делаем
									все необходимые замеры</div>
							</div>
						</div>
						<div class="step-page__item item-step">
							<div class="item-step__number">3</div>
							<div class="item-step__body">
								<div class="item-step__title">Смета, договор</div>
								<div class="item-step__text">Состовляем точную смету, сроки,
									а также график платежей</div>
							</div>
						</div>
						<div class="step-page__item item-step">
							<div class="item-step__number">4</div>
							<div class="item-step__body">
								<div class="item-step__title">Передача ключей</div>
								<div class="item-step__text">После подписания договора вы передаете нам ключи, мы приступаем к
									работе</div>
							</div>
						</div>
						<div class="step-page__item item-step">
							<div class="item-step__number">5</div>
							<div class="item-step__body">
								<div class="item-step__title">Ремонт</div>
								<div class="item-step__text">Делаем качественный ремонт, утверждая
									с вами каждый этап работ</div>
							</div>
						</div>
						<div class="step-page__item item-step">
							<div class="item-step__number">6</div>
							<div class="item-step__body">
								<div class="item-step__title">Принимайте работу!</div>
								<div class="item-step__text">Принимайте работу! Получайте ваши ключи, а также уют в вашем доме
								</div>
							</div>
						</div>
					</div>
					<div class="step-page__button">
						<a href="" class="step-page__btn button">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</a>
					</div>
					<div class="step-page__image">
						<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/step-page/bg.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/step-page/bg.png" alt="картинка"></picture>
					</div>
				</div>
			</section>
			<section class="page__materials materials-page">
				<div class="materials-page__container">
					<h2 class="materials-page__title title">Используем только лучшие метериалы <br> от <span>80</span>+
						Мировых производителей</h2>
					<div class="materials-page__info">Некоторые из них:</div>
					<div class="materials-page__image-ibg">
						<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/materials-page/bg.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/materials-page/bg.png" alt="картинка"></picture>
					</div>
					<a href="" class="materials-page__button button">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</a>
				</div>
				<div class="materials-page__decor-01">
					<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/materials-page/decor_01.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/materials-page/decor_01.png" alt="картинка"></picture>
				</div>
				<div class="materials-page__decor-02">
					<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/materials-page/decor_02.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/materials-page/decor_02.png" alt="картинка"></picture>
				</div>
			</section>
			<section class="page__profitable profitable-page">
				<div class="profitable-page__container">
					<h2 class="profitable-page__title title">Ремонт с нами - <span>выгодно</span></h2>
					<div class="profitable-page__body">
						<div class="profitable-page__info">
							<div class="profitable-page__text">Предоставляем гибкую систему оплаты ремонта, а также
								беспроцентную рассрочку через банки партнеры</div>
							<a href="" class="profitable-page__button button">рассчитать стоимость</a>
						</div>
						<div class="profitable-page__image">
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/profitable-pag/bg.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/profitable-pag/bg.png" alt="картинка"></picture>
						</div>
					</div>
				</div>
			</section>
			<section class="page__reviews reviews-page">
				<div class="reviews-page__container">
					<h2 class="reviews-page__title title">Отзывы наших клиентов</h2>
					<div class="reviews-page__body">
						<div class="reviews-page__button-prev"></div>
						<div class="reviews-page__slider swiper">
							<div class="reviews-page__wrapper swiper-wrapper">
								
								<?php
								global $post;
								$myposts = get_posts([ 
								'numberposts' => -1,
								'category' => 3,
								]);
								if( $myposts ){
								foreach( $myposts as $post ){
								setup_postdata( $post );
								?>
								<div class="reviews-page__slide swiper-slide">
									<div class="reviews-page__image-ibg">
										<?php the_post_thumbnail(); ?>
										<!-- <picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/reviews-page/01.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/reviews-page/01.png" alt=""></picture> -->
									</div>
									<button type="button" data-popup-youtube="sohdv21BVNI" data-popup="#video" class="reviews-page__play"><span></span></button>
								</div>
								<?php } } wp_reset_postdata(); ?>
							</div>
						</div>
						<div class="reviews-page__button-next"></div>
					</div>
				</div>
			</section>
			<section class="page__questions questions-page">
				<div class="questions-page__container">
					<h2 class="questions-page__title title">Остались вопросы?</h2>
					<div class="questions-page__body">
						<div data-spollers class="questions-page__spollers spollers">
							<div class="spollers__item">
								<button type="button" data-spoller class="spollers__title">Сколько в среднем длится
									ремонт?</button>
								<div class="spollers__body">Контент спойлера</div>
							</div>
						</div>
						<div data-spollers class="questions-page__spollers spollers">
							<div class="spollers__item">
								<button type="button" data-spoller class="spollers__title">Как происходит оплата ?</button>
								<div class="spollers__body">Контент спойлера</div>
							</div>
						</div>
						<div data-spollers class="questions-page__spollers spollers">
							<div class="spollers__item">
								<button type="button" data-spoller class="spollers__title">Как можно сэкономить на
									ремонте?</button>
								<div class="spollers__body">Контент спойлера</div>
							</div>
						</div>
						<div data-spollers class="questions-page__spollers spollers">
							<div class="spollers__item">
								<button type="button" data-spoller class="spollers__title">Какие гарантии на выполненную работу?
								</button>
								<div class="spollers__body">Контент спойлера</div>
							</div>
						</div>
						<div data-spollers class="questions-page__spollers spollers">
							<div class="spollers__item">
								<button type="button" data-spoller class="spollers__title">Когда можно вызвать замерщика?
								</button>
								<div class="spollers__body">Контент спойлера</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="page__contact contact-page">
				<div class="contact-page__container">
					<div class="contact-page__body">
						<div class="contact-page__info">
							<h2 class="contact-page__title">Контактная информация</h2>
							<div class="contact-page__item">
								<div class="contact-page__label">E-mail</div>
								<a href="mailto:<?php the_field('ma'); ?>" class="contact-page__items"><?php the_field('ma'); ?></a>
							</div>
							<div class="contact-page__item">
								<div class="contact-page__label">Телефон</div>
								<a href="tel:<?php the_field('phone-number'); ?>" class="contact-page__items"><?php the_field('phone'); ?></a>
							</div>
							<div class="contact-page__item">
								<div class="contact-page__label">График работы</div>
								<div class="contact-page__items"><?php the_field('schedule-work'); ?></div>
							</div>
						</div>
						<div id="map" class="contact-page__map">
						</div>
					</div>
				</div>
			</section>
		</main>
		<?php get_footer(); ?>