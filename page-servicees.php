<?php
/**
 * Template Name: Страница с услугами
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

   <!-- <h1 class="section-title"><?php the_field( 'service-title' ); ?></h1> -->
   <?php get_template_part( 'template-parts/content/content-page' ); ?>

   
	
   

   <section class="section-team">
      <div class="container-fluid">
         <h2 class="team-title">Наши лучшие мастера</h2>
         <h3 class="team-subtitle">Наш сервис отличается высоким уровнем обслуживания и качества. Мы заботимся о своих клиентах</h3>

         <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 team-col">
               <div class="employee">
                     <div class="employee-photo">
                        <div class="photo"> <img src="img/dist/index/employee1.webp" alt="Виктор Зубарев"></div>
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
                        <div class="photo"><img src="img/dist/index/employee2.webp" alt="Борис Дмитриев"></div>
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
                        <div class="photo"><img src="img/dist/index/employee3.webp" alt="Сергей Вишневский"></div>
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
                     <a href="img/dist/index/work-process2.webp" class="work-wrap" data-lightbox="work-process2" data-title="Вызывала мастера для замены розеток, которые начали трещать и искрить непонятно из за чего. Мастер подъехал в назначенное время и в течении часа поменял розетки, предварительно обработав сами провода от окисления. Прошла неделя, ни каких шумов и искр нету. Буду советовать всем знакомым.">
                        <img src="img/dist/index/work-process2.webp" alt="">
                        <div class="work-descr">
                           <div class="work-date">15 ноября 2020, 23:59</div>
                           <div class="work-location">Москва, Строгино</div>
                        </div>
                     </a>
               </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 grid-item">
               <div class="our-work">
                     <a href="img/dist/index/work-process3.webp" class="work-wrap" data-lightbox="work-process3" data-title="">
                        <img src="img/dist/index/work-process3.webp" alt="">
                        <div class="work-descr">
                           <div class="work-date">15 июля 2020</div>
                           <div class="work-location">Москва, Косино</div>
                        </div>
                     </a>
               </div>
            </div>
            
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 grid-item">
               <div class="our-work">
                     <a href="img/dist/index/work-process4.webp" class="work-wrap" data-lightbox="work-process4" data-title="">
                        <img src="img/dist/index/work-process4.webp" alt="">
                        <div class="work-descr">
                           <div class="work-date">23 октября 2020</div>
                           <div class="work-location">Москва, Отрадное</div>
                        </div>
                     </a>
               </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 grid-item">
               <div class="our-work">
                     <a href="img/dist/index/work-process5.webp" class="work-wrap" data-lightbox="work-process5" data-title="Приглашала мастера для установки нового унитаза, он смог подъехать в этот же день после обеда. Сантехник, на удивление был вежлив и аккуратен. С работой справился минут за 40, проконсультировал по поводу правильной эксплуатации сантехники. На выполненные работы дал гарантию. Благодарю за качественный и доступный сервис.">
                        <img src="img/dist/index/work-process5.webp" alt="">
                        <div class="work-descr">
                           <div class="work-date">10 июля 2020</div>
                           <div class="work-location">Москва, Новогиреево</div>
                        </div>
                     </a>
               </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 grid-item">
               <div class="our-work">
                     <a href="img/dist/index/work-process9.webp" class="work-wrap" data-lightbox="work-process9" data-title="Выражаю огромную благодарностью за работу мастера Бориса Дмитриева по устранению течи в пластиковой трубе на даче.  Очень рад, что у Вас работают мастера столь высокого класса. Работа проведена очень оперативно.  Такая работа позволяет понимать, что все сделано качественно и долговечно.">
                        <img src="img/dist/index/work-process9.webp" alt="">
                        <div class="work-descr">
                           <div class="work-date">10 октября 2019</div>
                           <div class="work-location">МО, Раменский район</div>
                        </div>
                     </a>
               </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 grid-item">
               <div class="our-work">
                     <a href="img/dist/index/work-process7.webp" class="work-wrap" data-lightbox="work-process7" data-title="Огромная благодарность за ремонт унитаза мастеру Борису,фамилию к сожалению не запомнил, но есть номер заявки 7894,таким сантехникам можно доверять сложные работы.">
                        <img src="img/dist/index/work-process7.webp" alt="">
                        <div class="work-descr">
                           <div class="work-date">22 октября 2019</div>
                           <div class="work-location">Москва <br> Кутузовский район</div>
                        </div>
                     </a>
               </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 grid-item">
                     <div class="our-work">
                        <a href="img/dist/index/work-process-10.webp" class="work-wrap" data-lightbox="work-process7" data-title="Вызывала мастера по установке раковины.Отличное качество обслуживания. Компетентный и приятный в общении специалист выполнил свою работу быстро, и качественно. Рекомендую!">
                           <img src="img/dist/index/work-process-10.webp" alt="">
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
                        <div class="counter-img"><img src="img/dist/index/facts-icon1.webp" alt=""></div>
                        <div class="counter-title">Выполнено работ</div>
                        <div class="counter-number">2500</div>
                     </div>
               </div>
               <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 counter-col">
                     <div class="counter-item">
                        <div class="counter-img"><img src="img/dist/index/facts-icon2.webp" /></div>
                        <div class="counter-title">Профессионалов</div>
                        <div class="counter-number">417</div>
                     </div>
               </div>
               <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 counter-col">
                     <div class="counter-item">
                        <div class="counter-img"><img src="img/dist/index/facts-icon3.webp" /></div>
                        <div class="counter-title">Счастливых клиентов</div>
                        <div class="counter-number">2500</div>
                     </div>
               </div>
               <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 counter-col">
                     <div class="counter-item">
                        <div class="counter-img"><img src="img/dist/index/facts-icon4.webp" /></div>
                        <div class="counter-title">рабочих часов</div>
                        <div class="counter-number">26459</div>
                     </div>
               </div>
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

<? get_footer(); ?>