<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

		<section class="section-main">
			<div class="bg-wrap">
				<div class="container-fluid main-container">
					<div class="main-block">
							<h1 class="main-title">Сервис <strong>бытовых услуг</strong> «УМЕЛЕЦ»</h1>
							<h2 class="main-subtitle">для дома, офиса и коммерческих зданий</h2>
							<p class="main-text">Мы осуществляем ремонтные и монтажные работы, работаем с сантехникой и электрикой. Проводим ремонтно-отделочные работы в квартирах.</p>
							
							<div class="button-group">
								<a href="#about" class="main-button service-link"><span>Наши услуги</span></a>
								<button class="main-button request-button request-btn"><span>Бесплатный вызов мастера</span></button>
							</div>
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="features-wrap">
					<div class="main-features row">
							<div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 features-col">
								<div class="main-features-block">
									<div class="features-top-block">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/main-features-1.webp" alt="">
											<div class="features-title">Бесплатно</div>
									</div>
									<p class="features-bottom-block">Выезд мастера - БЕСПЛАТНО</p>
								</div>
							</div>

							<div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 features-col">
								<div class="main-features-block">
									<div class="features-top-block">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/main-features-2.webp" alt="">
											<div class="features-title">Работа</div>
									</div>
									<p class="features-bottom-block">Работа - под ключ</p>
								</div>
							</div>

							<div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 features-col">
								<div class="main-features-block">
									<div class="features-top-block">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/main-features-3.webp" alt="">
											<div class="features-title">Гарантия</div>
									</div>
									<p class="features-bottom-block">ГАРАНТИЯ - до 3 лет</p>
								</div>
							</div>
					</div>
				</div>

				<div class="welcome row">
					<div class="col-7 welcome-col">
						<div class="block-title">
							<h2>Добро пожаловать в «УМЕЛЕЦ»</h2>
							<div class="call-block">
								<div class="call-block-item">
									<svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/dist/svg-sprite.svg#24h"></use></svg>
									<span>Звоните 24/7:</span>
								</div>
								<a href="tel: +7 (495) 189-67-43">+7 (495) 189-67-43</a>
							</div>
						</div>
					</div>

					<div class="col-5 welcome-col">
							<div class="block-descr">
								<p>Сервис оказания бытовых услуг «Умелец» существует на рынке <strong>с 2016 года</strong>, но уже по праву успел завоевать признание и уважение своих клиентов. Мы оказываем различные виды коммунально-бытовых услуг в Москве и Московской области. </p>
								<p>Наш штат – это команда <strong>высококвалифицированных профессионалов</strong>, которых объединяет колоссальный опыт работы и любовь к своему делу. Каждый из них прошел строгую проверку на профессиональную пригодность и имеет соответствующее разрешение.</p>
								<p></p>
							</div>
					</div>
				</div>
			</div>
		</section>

		<section id="about" class="section-service">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12-col-lg-12 col-xl-6">
							<div class="service-block">
								<h2 class="service-title">Что мы можем <strong>Вам предложить?</strong></h2>
								<p class="service-text">Сервис оказания бытовых услуг «Умелец» существует на рынке <strong>с 2016 года</strong>, но уже по праву успел завоевать признание и уважение своих клиентов. Мы оказываем различные виды коммунально-бытовых услуг в Москве и Московской области.</p>
								<div class="service-arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/service-arrow.webp" alt="стрелка"></div>
							</div>
					</div>
					<div class="col-12 col-sm-12 col-md-12-col-lg-12 col-xl-6 service-col">
							<div class="row">
								<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 service-item-col">
									<a  class="service-item">
											<div class="service-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/service-img1.webp" alt=""></div>
											<div class="service-item-title">Сантехник на дом</div>
									</a>
								</div>
								<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 service-item-col">
									<a  class="service-item">
											<div class="service-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/service-img2.webp" alt=""></div>
											<div class="service-item-title">Услуги мастера</div>
									</a>
								</div>
								<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 service-item-col">
									<a  class="service-item">
											<div class="service-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/service-img3.webp" alt=""></div>
											<div class="service-item-title">Устранение засора</div>
									</a>
								</div>
								<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 service-item-col">
									<a  class="service-item">
											<div class="service-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/service-img4.webp" alt=""></div>
											<div class="service-item-title">Услуги электрика</div>
									</a>
								</div>
								<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 service-item-col">
									<a  class="service-item">
											<div class="service-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/service-img5.webp" alt=""></div>
											<div class="service-item-title">Выезд мастера</div>
									</a>
								</div>
								<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 service-item-col">
									<a  class="service-item">
											<div class="service-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/service-img6.webp" alt=""></div>
											<div class="service-item-title">Установка унитаза</div>
									</a>
								</div>
								<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 service-item-col">
									<a  class="service-item">
											<div class="service-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/service-img7.webp" alt=""></div>
											<div class="service-item-title">Ремонт Исталляции унитаза</div>
									</a>
								</div>
								<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 service-item-col">
									<a  class="service-item">
											<div class="service-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/service-img8.webp" alt=""></div>
											<div class="service-item-title">Ремонт душевой кабины</div>
									</a>
								</div>
								<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 service-item-col">
									<a  class="service-item">
											<div class="service-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/service-img9.webp" alt=""></div>
											<div class="service-item-title">Устранение протечек</div>
									</a>
								</div>
								<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 service-item-col">
									<a  class="service-item">
											<div class="service-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/service-img1.webp" alt=""></div>
											<div class="service-item-title">Ремонт унитаза</div>
									</a>
								</div>
								<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 service-item-col">
									<a  class="service-item">
											<div class="service-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/service-img2.webp" alt=""></div>
											<div class="service-item-title">Установка бытовой техники</div>
									</a>
								</div>
								<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 service-item-col">
									<a  class="service-item">
											<div class="service-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/service-img3.webp" alt=""></div>
											<div class="service-item-title">Установка смесителя</div>
									</a>
								</div>
							</div>
					</div>
				</div>
			</div>
		</section>

      <section class="section-team">
			<div class="container-fluid">
				<h2 class="team-title">Наши лучшие мастера</h2>
				<h3 class="team-subtitle">Наш сервис отличается высоким уровнем обслуживания и качества. Мы заботимся о своих клиентах</h3>

				<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 team-col">
						<div class="employee">
							<div class="employee-photo">
								<div class="photo"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/employee1.webp" alt="Виктор Зубарев"></div>
							</div>
							<div class="employee-info">
								<div class="employee-name">Виктор Зубарев</div>
								<div class="employee-proff">Сантехника</div>
								<div class="employee-expirience">Опыт работы 15 лет</div>
								<p class="employee-descr">Мастер сантехник, <strong>опыт работы 15 лет</strong>. Окончил ИжГТУ им М.Т.Калашникова по специальности техника и технологии строительства.Выполняет широкий спектр работ по сантехнике.</p>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 team-col">
						<div class="employee">
								<div class="employee-photo">
									<div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/employee2.webp" alt="Борис Дмитриев"></div>
								</div>
								<div class="employee-info">
									<div class="employee-name">Борис Дмитриев</div>
									<div class="employee-proff">Универал</div>
									<div class="employee-expirience">Опыт работы 16 лет</div>
									<p class="employee-descr">Мастер универсал, <strong>опыт работы 16 лет</strong>. Окончил ЛГТУ по специальности инженер. Большой опыт ремонта и настройки сложно-технического оборудования. Выполняет любые работы.</p>
								</div>
						</div>
					</div>

					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 team-col">
						<div class="employee">
								<div class="employee-photo">
									<div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/employee3.webp" alt="Сергей Вишневский"></div>
								</div>
								<div class="employee-info">
									<div class="employee-name">Сергей Вишневский</div>
									<div class="employee-proff">Электрика</div>
									<div class="employee-expirience">Опыт работы 13 лет</div>
									<p class="employee-descr">Мастер электрик, <strong>опыт работы 13 лет</strong>. Окончил МЭИ по специальности радиотехника. Специализируется на выполнении работ под ключ, большой опыт электромонтажных работ.</p>
								</div>
						</div>
					</div>
				</div>

				<div class="team-request">
					<div class="request-title">Позвоните нам сегодня для бесплатной консультации или для запланированной встречи</div>
					<button class="request-button main-button team-btn request-btn">Бесплатный вызов мастера</button>
				</div>
			</div>
		</section>

		<section class="section-work">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
							<h2 class="work-title">Бизнес, с которым мы работаем</h2>
					</div>
					
					<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
							<div class="work-info">
								<h3 class="work-subtitle">Мы предоставляем различные коммерческие услуги разнорабочих</h3>
								<p class="work-text">Мы будем рады Вам помоч! оставьте номер телефона, и мы перезвоним Вам через минуту</p>
								<div class="row">
									<div class="col-6 work-list-col">
											<ul class="work-list">
												<li><span>Установка бытовой техники</span></li>
												<li><span>Ремонт инсталляции унитаза</span></li>
												<li><span>Устранение протечек</span></li>
												<li><span>Установка смесителя</span></li>
												<li><span>Ремонт душевой кабины</span></li>
											</ul>
									</div>
									<div class="col-6 work-list-col">
											<ul class="work-list">
												<li><span>Установка унитаза</span></li>
												<li><span>Ремонт унитаза</span></li>
												<li><span>Услуги электрика</span></li>
												<li><span>Услуги мастера</span></li>
												<li><span>Выезд мастера</span></li>
											</ul>
									</div>
								</div>
							</div>
					</div>
				</div>

				<div class="row work-circles">
					<div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 work-circle-col">
							<div class="work-circle">
								<div class="circle-wrap">
									<div class="percent-wrap">
											<div class="percent">
												<span>75</span>
												<span>%</span>                
											</div>
									</div>
									<svg viewBox="0 0 36 36">
											<circle cx="18" cy="18" r="15.92" stroke="#d6e3ea" stroke-width="2.5" fill="none"></circle>
											<circle  cx="18" cy="18" r="15.92" stroke="#f3c600" stroke-width="2.4" stroke-dasharray="75, 100" fill="none" style="animation-duration: 2.6s;"></circle>
									</svg>
								</div>
								<span class="work-circle-info">Квартиры и частные дома</span>    
							</div>
					</div>

					<div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 work-circle-col">
							<div class="work-circle">
								<div class="circle-wrap">
									<div class="percent-wrap">
											<div class="percent">
												<span>88</span>
												<span>%</span>                
											</div>
									</div>
									<svg viewBox="0 0 36 36">
											<circle cx="18" cy="18" r="15.92" stroke="#d6e3ea" stroke-width="2.5" fill="none"></circle>
											<circle  cx="18" cy="18" r="15.92" stroke="#f3c600" stroke-width="2.4" stroke-dasharray="88, 100" fill="none" style="animation-duration: 2.6s;"></circle>
									</svg>
								</div>
								<span class="work-circle-info">Малый бизнес</span>    
							</div>
					</div>

					<div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 work-circle-col">
							<div class="work-circle">
								<div class="circle-wrap">
									<div class="percent-wrap">
											<div class="percent">
												<span>65</span>
												<span>%</span>                
											</div>
									</div>
									<svg viewBox="0 0 36 36">
											<circle cx="18" cy="18" r="15.92" stroke="#d6e3ea" stroke-width="2.5" fill="none"></circle>
											<circle  cx="18" cy="18" r="15.92" stroke="#f3c600" stroke-width="2.4" stroke-dasharray="65, 100" fill="none" style="animation-duration: 2.6s;"></circle>
									</svg>
								</div>
								<span class="work-circle-info">Отели и гооспитали</span>    
							</div>
					</div>

					<div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 work-circle-col">
							<div class="work-circle">
								<div class="circle-wrap">
									<div class="percent-wrap">
											<div class="percent">
												<span>75</span>
												<span>%</span>                
											</div>
									</div>
									<svg viewBox="0 0 36 36">
											<circle cx="18" cy="18" r="15.92" stroke="#d6e3ea" stroke-width="2.5" fill="none"></circle>
											<circle  cx="18" cy="18" r="15.92" stroke="#f3c600" stroke-width="2.4" stroke-dasharray="75, 100" fill="none" style="animation-duration: 2.6s;"></circle>
									</svg>
								</div>
								<span class="work-circle-info">Торговые центры</span>    
							</div>
					</div>
				</div>
			</div>
		</section>

		<section class="work-process">
			<div class="container-fluid">
				<div class="row work-process-head">
					<div class="col-5 process-head-col">
							<h2 class="work-process-title">Наши работы и рабочий процесс</h2>
					</div>
					<div class="col-7 process-head-col">
							<p class="work-process-text">Сервис оказания бытовых услуг «Умелец» существует на рынке <strong>с 2016 года</strong>, но уже по праву успел завоевать признание и уважение своих клиентов. Мы оказываем различные виды коммунально-бытовых услуг в Москве и Московской области.</p>
					</div>
				</div>
			</div>

			<div class="container-fluid our-work-container">
				<div class="row grid">
					<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 grid-item">
							<div class="our-work">
								<a href="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/work-process2.webp" class="work-wrap" data-lightbox="work-process2" data-title="Вызывала мастера для замены розеток, которые начали трещать и искрить непонятно из за чего. Мастер подъехал в назначенное время и в течении часа поменял розетки, предварительно обработав сами провода от окисления. Прошла неделя, ни каких шумов и искр нету. Буду советовать всем знакомым.">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/work-process2.webp" alt="">
									<div class="work-descr">
											<div class="work-date">15 ноября 2020, 23:59</div>
											<div class="work-location">Москва, Строгино</div>
									</div>
								</a>
							</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 grid-item">
							<div class="our-work">
								<a href="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/work-process3.webp" class="work-wrap" data-lightbox="work-process3" data-title="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/work-process3.webp" alt="">
									<div class="work-descr">
											<div class="work-date">15 июля 2020</div>
											<div class="work-location">Москва, Косино</div>
									</div>
								</a>
							</div>
					</div>
					
					<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 grid-item">
							<div class="our-work">
								<a href="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/work-process4.webp" class="work-wrap" data-lightbox="work-process4" data-title="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/work-process4.webp" alt="">
									<div class="work-descr">
											<div class="work-date">23 октября 2020</div>
											<div class="work-location">Москва, Отрадное</div>
									</div>
								</a>
							</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 grid-item">
							<div class="our-work">
								<a href="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/work-process5.webp" class="work-wrap" data-lightbox="work-process5" data-title="Приглашала мастера для установки нового унитаза, он смог подъехать в этот же день после обеда. Сантехник, на удивление был вежлив и аккуратен. С работой справился минут за 40, проконсультировал по поводу правильной эксплуатации сантехники. На выполненные работы дал гарантию. Благодарю за качественный и доступный сервис.">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/work-process5.webp" alt="">
									<div class="work-descr">
											<div class="work-date">10 июля 2020</div>
											<div class="work-location">Москва, Новогиреево</div>
									</div>
								</a>
							</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 grid-item">
							<div class="our-work">
								<a href="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/work-process9.webp" class="work-wrap" data-lightbox="work-process9" data-title="Выражаю огромную благодарностью за работу мастера Бориса Дмитриева по устранению течи в пластиковой трубе на даче.  Очень рад, что у Вас работают мастера столь высокого класса. Работа проведена очень оперативно.  Такая работа позволяет понимать, что все сделано качественно и долговечно.">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/work-process9.webp" alt="">
									<div class="work-descr">
											<div class="work-date">10 октября 2019</div>
											<div class="work-location">МО, Раменский район</div>
									</div>
								</a>
							</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 grid-item">
							<div class="our-work">
								<a href="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/work-process7.webp" class="work-wrap" data-lightbox="work-process7" data-title="Огромная благодарность за ремонт унитаза мастеру Борису,фамилию к сожалению не запомнил, но есть номер заявки 7894,таким сантехникам можно доверять сложные работы.">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/work-process7.webp" alt="">
									<div class="work-descr">
											<div class="work-date">22 октября 2019</div>
											<div class="work-location">Москва <br> Кутузовский район</div>
									</div>
								</a>
							</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 grid-item">
							<div class="our-work">
								<a href="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/work-process-10.webp" class="work-wrap" data-lightbox="work-process7" data-title="Вызывала мастера по установке раковины.Отличное качество обслуживания. Компетентный и приятный в общении специалист выполнил свою работу быстро, и качественно. Рекомендую!">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/work-process-10.webp" alt="">
										<div class="work-descr">
											<div class="work-date">05 марта 2019</div>
											<div class="work-location">Москва, Жулебино</div>
										</div>
								</a>
							</div>
						</div>
				</div>
			</div>
		</section>

		<section class="facts">
			<div class="container-fluid">
				<h2 class="facts-title">Немного о цифрах...</h2>
				<h3 class="facts-subtitle">Сервис оказания бытовых услуг «Умелец» существует на рынке <strong>с 2016 года</strong>, но уже по праву успел завоевать признание и уважение своих клиентов. Мы оказываем различные виды коммунально-бытовых услуг в Москве и Московской области.</h3>

				<div class="counter-wrap">
					<div class="counter-row active active row">
							<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 counter-col">
								<div class="counter-item">
									<div class="counter-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/facts-icon1.webp" alt=""></div>
									<div class="counter-title">Выполнено работ</div>
									<div class="counter-number">2500</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 counter-col">
								<div class="counter-item">
									<div class="counter-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/facts-icon2.webp" /></div>
									<div class="counter-title">Профессионалов</div>
									<div class="counter-number">417</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 counter-col">
								<div class="counter-item">
									<div class="counter-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/facts-icon3.webp" /></div>
									<div class="counter-title">Счастливых клиентов</div>
									<div class="counter-number">2500</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 counter-col">
								<div class="counter-item">
									<div class="counter-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/facts-icon4.webp" /></div>
									<div class="counter-title">рабочих часов</div>
									<div class="counter-number">26459</div>
								</div>
							</div>
					</div>
				</div>
			</div>
		</section>

		<section id="testimonials" class="testi">
			<div class="container-fluid">
				<h2 class="testi-title">Отзывы</h2>
				<div class="testi-slider">
					<div class="slide">
							<div class="testimonials">
								<div class="testi-photo">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/user-photo.webp" alt="User">
								</div>
								<p class="testimonials-text">
									<span>Вызывала мастера для замены розеток, которые начали трещать и искрить непонятно из за чего. Мастер подъехал в назначенное время и в течении часа поменял розетки, предварительно обработав сами провода от окисления. Прошла неделя, ни каких шумов и искр нету. Буду советовать всем знакомым.</span>
								</p>
								<div class="user-info">
									<div class="user-name">Татьяна</div>
									<div class="user-location">Москва, Строгино</div>
								</div>
							</div>
					</div>

					<div class="slide">
							<div class="testimonials">
								<div class="testi-photo">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/user-photo.webp" alt="User">
								</div>
								<p class="testimonials-text">
									<span>Вызывала мастера для замены розеток, которые начали трещать и искрить непонятно из за чего. Мастер подъехал в назначенное время и в течении часа поменял розетки, предварительно обработав сами провода от окисления. Прошла неделя, ни каких шумов и искр нету. Буду советовать всем знакомым.</span>
								</p>
								<div class="user-info">
									<div class="user-name">Татьяна</div>
									<div class="user-location">Москва, Строгино</div>
								</div>
							</div>
					</div>

					<div class="slide">
							<div class="testimonials">
								<div class="testi-photo">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/user-photo.webp" alt="User">
								</div>
								<p class="testimonials-text">
									<span>Вызывала мастера для замены розеток, которые начали трещать и искрить непонятно из за чего. Мастер подъехал в назначенное время и в течении часа поменял розетки, предварительно обработав сами провода от окисления. Прошла неделя, ни каких шумов и искр нету. Буду советовать всем знакомым.</span>
								</p>
								<div class="user-info">
									<div class="user-name">Татьяна</div>
									<div class="user-location">Москва, Строгино</div>
								</div>
							</div>
					</div>

					<div class="slide">
							<div class="testimonials">
								<div class="testi-photo">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/index/user-photo.webp" alt="User">
								</div>
								<p class="testimonials-text">
									<span>Вызывала мастера для замены розеток, которые начали трещать и искрить непонятно из за чего. Мастер подъехал в назначенное время и в течении часа поменял розетки, предварительно обработав сами провода от окисления. Прошла неделя, ни каких шумов и искр нету. Буду советовать всем знакомым.</span>
								</p>
								<div class="user-info">
									<div class="user-name">Татьяна</div>
									<div class="user-location">Москва, Строгино</div>
								</div>
							</div>
					</div>
				</div>
			</div>
		</section>

		<section class="partners">
			<div class="container-fluid">
				<h2 class="partners-title">Наши партнеры</h2>
				<div class="partner-slider">
					<div class="partner-slide">
							<div class="partner-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist//index//partner1.webp" alt=""></div>
					</div>

					<div class="partner-slide">
							<div class="partner-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist//index//partner2.webp" alt=""></div>
					</div>

					<div class="partner-slide">
							<div class="partner-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist//index//partner3.webp" alt=""></div>
					</div>

					<div class="partner-slide">
							<div class="partner-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist//index//partner4.webp" alt=""></div>
					</div>

					<div class="partner-slide">
							<div class="partner-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist//index//partner5.webp" alt=""></div>
					</div>

					<div class="partner-slide">
							<div class="partner-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist//index//partner6.webp" alt=""></div>
					</div>

					<div class="partner-slide">
							<div class="partner-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist//index//partner7.webp" alt=""></div>
					</div>

					<div class="partner-slide">
							<div class="partner-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist//index//partner8.webp" alt=""></div>
					</div>

					<div class="partner-slide">
							<div class="partner-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist//index//partner9.webp" alt=""></div>
					</div>

					<div class="partner-slide">
							<div class="partner-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist//index//partner10.webp" alt=""></div>
					</div>
				</div>
			</div>
		</section>

		<section class="form-req">
			<div class="container-fluid">
				<h2 class="form-req-title">Остались вопросы?</h2>
				<h3 class="form-req-subtitle">Укажите номер телефона и мы перезвоним Вам через минуту</h3>

				<div class="form-title">Мы всегда на связи!</div>
				<?php echo do_shortcode( '[contact-form-7 id="214" title="Без названия"]' ) ?> 
			</div>
		</section>

<?php get_footer(); ?>
