<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
		
	
		<div id="map"></div>
		<footer id="contacts">
			<div class="container-fluid">
				<h2 class="footer-title">Наши контакты</h2>
				<h3 class="footer-subtitle">Позвоните! И мы быстро решим любую вашу проблему</h3>
				<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 order-1 order-sm-1 order-md-3 order-lg-1 order-xl-1 footer-col">
						<div class="footer-contacts-item">
							<h4 class="footer-block-title">Контакты</h4>
							<div class="contact-item first">
								<svg width="30" height="30"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/dist/svg-sprite.svg#footer-location"></use></svg>
								<div class="address">
										<div class="address-title">Юридический аддрес:</div>
										<span>г.Москва , Волгоградский проспект д.32 к.10 офис 7</span>
								</div>
							</div>

							<div class="contact-item">
								<svg width="30" height="30"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/dist/svg-sprite.svg#footer-location-phis"></use></svg>
								<div class="address">
										<div class="address-title">Физический аддрес:</div>
										<span>г.Москва , Волгоградский проспект д.32 к.10 офис 7</span>
								</div>
							</div>

							<div class="contact-item">
								<svg width="30" height="30"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/dist/svg-sprite.svg#header-email"></use></svg>
								<a href="mailto: umelec24.ru@yandex.ru">umelec24.ru@yandex.ru</a>
							</div>

						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 order-2 order-sm-2 order-md-1 order-lg-2 order-xl-2 footer-col">
						<div class="footer-contacts-item">
							<h4 class="footer-block-title">Полезные ссылки</h4>
							<div class="links-item">
								<div class="row">
										<div class="col-6 footer-list-col">
											<?php 
												wp_nav_menu( [
													'theme_location'  => 'footer-nav-links1',
													'container'       => false, 
													'container_class' => '', 
													'menu_class'      => 'footer-list', 
													'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
												] );
											?>
					
										</div>
										<div class="col-6 footer-list-col">
											<?php 
												wp_nav_menu( [
													'theme_location'  => 'footer-nav-links2',
													'container'       => false, 
													'container_class' => '', 
													'menu_class'      => 'footer-list', 
													'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
												] );
											?>
						
										</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 order-3 order-sm-3 order-md-2 order-lg-3 order-xl-3 footer-col">
							<div class="footer-contacts-item">
								<h4 class="footer-block-title">Звоните нам!</h4>
								<div class="call-item">
									<a href="tel: +7 (499) 444-21-95" class="footer-phone">+7 (499) 444-21-95</a>
									<div class="footer-work-hours">
											<svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/dist/svg-sprite.svg#24h"></use></svg>
											<span>Пн-Вс 8:00 - 22:00</span>
									</div>
									<button class="submit footer-submit request-btn">Вызов мастера</button>
								</div>
							</div>
					</div>
				</div>
			</div>
		</footer>
   </div>

	<div class="arrow-up">
		<svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/dist/svg-sprite.svg#arrow-up"></use></svg>
	</div>

	

	<section class="mobile-menu">
		<div class="close-menu">
			<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/dist/svg-sprite.svg#close-menu-icon"></use></svg>
		</div>

		<nav id="mobile-menu">
			<div class="mobile-tabs">
				<div class="mobile-tab active">Меню</div>
				<div class="mobile-tab">Услуги</div>
			</div>

			<div class="content-wrap">
					<div class="mobile-content">
						<?php 
							wp_nav_menu( [
								'theme_location'  => 'mobile-nav-menu',
								'menu'            => '', 
								'container'       => false, 
								'container_class' => '', 
								'container_id'    => '',
								'menu_class'      => 'mobile-list', 
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => '',
							] );
						?>
			
						<div class="mobile-menu-block first">
							<svg width="30" height="30"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/dist/svg-sprite.svg#footer-location"></use></svg>
							<div class="address">
								<div class="address-title">Юридический аддрес:</div>
								<span>г.Москва , Волгоградский проспект д.32 к.10 офис 7</span>
							</div>
						</div>

						<div class="mobile-menu-block">
							<svg width="30" height="30"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/dist/svg-sprite.svg#footer-location-phis"></use></svg>
							<div class="address">
								<div class="address-title">Физический аддрес:</div>
								<span>г.Москва , Волгоградский проспект д.32 к.10 офис 7</span>
							</div>
						</div>

						<div class="mobile-menu-block">
							<svg width="30" height="30"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/dist/svg-sprite.svg#header-email"></use></svg>
							<a href="mailto: umelec24.ru@yandex.ru">umelec24.ru@yandex.ru</a>
						</div>

						<div class="mobile-menu-block">
							<svg width="30" height="30"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/dist/svg-sprite.svg#header-phone"></use></svg>
							<a href="tel: +7 (499) 444-21-95">+7 (499) 444-21-95</a>
						</div>
					</div>
		
					<div class="mobile-content">
					<?php 
						wp_nav_menu( [
							'theme_location'  => 'service-mobile-menu',
							'menu'            => '', 
							'container'       => false, 
							'container_class' => '', 
							'container_id'    => '',
							'menu_class'      => 'mobile-list one', 
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						] );
					?>
					
				</div>
			</div>
		</nav>
	</section>

	<div class="wrap-modal">
		<div class="modal-window">
			<section class="modal">
				<div class="container-fluid modal-container">
					<div class="modal-form-wrap">
							<h3 class="modal-title">Остались вопросы?</h3>
							<h4 class="modal-subtitle">Вы можете через форму ниже. Мы постараемся ответить как можно скорее</h4>
							<div class="form-title">Мы всегда на связи!</div>
							
							<?php echo do_shortcode( '[contact-form-7 id="216" title="Без названия"]' ) ?>
					</div>
				</div>
				<button class="close-modal">
					<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 0C8.07497 0 0 8.07497 0 18C0 27.925 8.07497 36 18 36C27.925 36 36 27.925 36 18C36 8.07497 27.925 0 18 0ZM25.2802 23.1591C25.5731 23.452 25.5731 23.9269 25.2802 24.2198L24.2198 25.2802C23.9269 25.573 23.4521 25.573 23.1591 25.2802L18 20.1211L12.8409 25.2802C12.5479 25.5731 12.0731 25.5731 11.7802 25.2802L10.7198 24.2198C10.4268 23.9269 10.4268 23.452 10.7198 23.1591L15.8789 17.9999L10.7198 12.8408C10.4268 12.548 10.4268 12.0731 10.7198 11.7802L11.7802 10.7197C12.0731 10.4269 12.5479 10.4269 12.8409 10.7197L18 15.8788L23.1591 10.7197C23.4521 10.4269 23.9269 10.4269 24.2198 10.7197L25.2802 11.7802C25.5732 12.073 25.5732 12.5479 25.2802 12.8408L20.1211 17.9999L25.2802 23.1591Z" /></svg>
				</button>
			</section>
		</div>
		<div class="modal-overlay"></div>
	</div>
	<div class="overlay"></div>

	<?php wp_footer(); ?>
	

   </body>
</html>

	<!-- <?php get_template_part( 'template-parts/footer/footer-widgets' ); ?> -->

<?php wp_footer(); ?>

</body>
</html>
