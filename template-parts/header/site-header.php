<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= true === get_theme_mod( 'display_title_and_tagline', true ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<div class="fullpage">
	<header>
		<div class="header-top">
			<div class="container-fluid header-top-container">
				<div class="header-nav-block">
					<a href="mailto: umelec24.ru@yandex.ru" class="header-top-link">
						<svg><use xlink:href="<?php echo get_template_directory_uri(  ); ?>/assets/img/dist/svg-sprite.svg#header-email"></use></svg>
						<span>umelec24.ru@yandex.ru</span>   
					</a>
					<a href="tel: +7 (495) 189-67-44" class="header-top-link">
						<svg width="14" height="14"><use xlink:href="<?php echo get_template_directory_uri(  ); ?>/assets/img/dist/svg-sprite.svg#header-phone"></use></svg>
						<span>+7 (495) 189-67-44</span>
					</a>
				</div>

				<div class="header-info-block">
					<div class="work-hours">
						<svg><use xlink:href="<?php echo get_template_directory_uri(  ); ?>/assets/img/dist/svg-sprite.svg#24h"></use></svg>
						<span>Пн-Вс 8:00 - 22:00</span>
					</div>
					<button class="quote request-btn">БЕСПЛАТНЫЙ ВЫЗОВ МАСТЕРА</button>
				</div>
			</div>
		</div>

		<div class="header-center">
			<div class="container-fluid header-center-container">
				<a href="<?php bloginfo( 'url' ) ?>" class="logo">
					<div class="logo-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dist/logo.png" alt="Лого"></div>
					<div class="logo-text">
						<div class="logo-text-title">Умелец</div>
						<div class="logo-text-subtitle">Сервис бытовых услуг</div>
					</div>
				</a>

				<nav class="top-menu">
					<?php 
						wp_nav_menu( [
							'theme_location'  => 'nav-header-menu',
							'menu'            => '', 
							'container'       => false, 
							'container_class' => '', 
							'container_id'    => '',
							'menu_class'      => 'top-menu-list', 
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
				</nav>

				<div class="burger-icon">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
	</header>
	
	<div class="menu-wrap">
		<div class="container-fluid menu-container">
			<?php 
				// свой класс построения меню:
				

			?>

			<nav class="menu">
				<?php 
					wp_nav_menu( [
						'theme_location'  => 'service-header-menu',
						'menu'            => '', 
						'container'       => false, 
						'container_class' => '', 
						'container_id'    => '',
						'menu_class'      => 'menu-list', 
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
			</nav>
		</div>
	</div>
