<?php


// if ( ! function_exists( 'twenty_twenty_one_setup' ) ) {

// 	function twenty_twenty_one_setup() {
// 		add_theme_support( 'post-thumbnails' );
// 		set_post_thumbnail_size( 1568, 9999 );


// 		$logo_width  = 300;
// 		$logo_height = 100;

// 		add_theme_support(
// 			'custom-logo',
// 			array(
// 				'height'               => $logo_height,
// 				'width'                => $logo_width,
// 				'flex-width'           => true,
// 				'flex-height'          => true,
// 				'unlink-homepage-logo' => true,
// 			)
// 		);

// 	}
// }
// add_action( 'after_setup_theme', 'twenty_twenty_one_setup' );




// SVG Icons class.
require get_template_directory() . '/classes/class-twenty-twenty-one-svg-icons.php';

	// Подключение css (в таком же порядке они подключаются в браузере, если не указывать зависимость)
	add_action( 'wp_enqueue_scripts', 'my_styles' );
	function my_styles() {
      wp_enqueue_style( 'style', get_stylesheet_uri() );
		wp_enqueue_style( 'bootstrap-grid.min', get_template_directory_uri() . '/assets/lib/bootstrap-grid.min.css' );
      wp_enqueue_style( 'css-circular-prog-bar', get_template_directory_uri() . '/assets/lib/css-circular-prog-bar.css' );
      wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/lib/fonts.css' );
		wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/assets/lib/lightbox.css' );
		wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/lib/slick/slick.css' );
		wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/lib/slick/slick-theme.css' );
      wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/lib/reset.css' );  
      wp_enqueue_style( 'style.min', get_template_directory_uri() . '/assets/css/style.min.css' );
	}


	// Подключение jQuery
	// add_action( 'wp_enqueue_scripts', 'my_scripts_method', 99 );
	// function my_scripts_method() {
	// 	// получаем версию jQuery
	// 	wp_enqueue_script( 'jquery' );
	// 	// для версий WP меньше 3.6 'jquery' нужно поменять на 'jquery-core'
	// 	$wp_jquery_ver = $GLOBALS['wp_scripts']->registered['jquery']->ver;
	// 	$jquery_ver = $wp_jquery_ver == '' ? '1.12.4' : $wp_jquery_ver;

	// 	wp_deregister_script( 'jquery-core' );
	// 	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', false, null, true );
	// 	wp_enqueue_script( 'jquery' );
	// }

	

	// Подключение js (в таком же порядке они подключаются в браузере, если не указывать зависимость)
	add_action( 'wp_enqueue_scripts', 'my_scripts' ); // вместо wp_enqueue_scripts можно использовать хук wp_footer (wp_footer указывается в index.php в то место, где должны быть скрипты)
	function my_scripts() {
		wp_enqueue_script( 'jQuery-1.12.4.min', get_template_directory_uri( ) . '/assets/lib/jQuery-1.12.4.min.js', null, null, true );
		wp_enqueue_script( 'bootstrap.min', get_template_directory_uri( ) . '/assets/lib/bootstrap.min.js', array('jquery'), null, true );
		wp_enqueue_script( 'counter', get_template_directory_uri( ) . '/assets/lib/counter.js', array('jquery'), null, true );
		wp_enqueue_script( 'jquery.spincrement.min', get_template_directory_uri( ) . '/assets/lib/jquery.spincrement.min.js', array('jquery'), null, true );
		wp_enqueue_script( 'lightbox', get_template_directory_uri( ) . '/assets/lib/lightbox.js', array('jquery'), null, true );
      wp_enqueue_script( 'masonry', get_template_directory_uri( ) . '/assets/lib/masonry.min.js', array('jquery'), null, true );
		wp_enqueue_script( 'images-loaded-masonry', 'https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js', array('jquery', 'masonry'), null, true );
		wp_enqueue_script( 'slick.min', get_template_directory_uri( ) . '/assets/lib/slick/slick.min.js', array('jquery'), null, true );
		wp_enqueue_script( 'imask', 'https://unpkg.com/imask', array('jquery'), null, true );
      wp_enqueue_script( 'script', get_template_directory_uri( ) . '/assets/js/script.js', array('jquery'), null, true );
	}
	

	// Регистрация меню
	add_action( 'after_setup_theme', 'theme_register_nav_menu' );
	function theme_register_nav_menu() {
		register_nav_menu( 'nav-header-menu', 'Навигационные ссылки в header' );
		register_nav_menu( 'service-header-menu', 'Меню с услугами в header' );
		register_nav_menu( 'mobile-nav-menu', 'Навигационные ссылки в мобильном меню' );
		register_nav_menu( 'service-mobile-menu', 'Меню с услугами в мобильном меню' );
		register_nav_menu( 'footer-nav-links1', 'Ссылки в footer1' );
		register_nav_menu( 'footer-nav-links2', 'Ссылки в footer2' );

		add_theme_support( 'title-tag' ); // Во вкладке браузера автоматически подставляется title страниц
		add_theme_support( 'post-thumbnails', array( 'post', 'portfolio' ) );  // Выводим изображение к посту
		add_theme_support( 'post-formats', array( 'video', 'aside' ) );
		add_image_size( 'post_thumb', 1300, 500, true ); // Выводим свое изображение, с необходимым нам размером
	}


	/* для меню с услугами в header */
	// Фильтр для добавления собственных классов вложенным списками ul и другим элементам (nav_menu_submenu_css_class)
	add_filter( 'nav_menu_submenu_css_class', 'change_class_ul', 10, 3 );
	function change_class_ul( $classes, $args, $depth ){
		if ( $args -> theme_location === 'service-header-menu' && $depth == 0 ) {
			$classes = [
			  'menu-list--1'
			];
		} else if ($args -> theme_location === 'service-header-menu' && $depth == 1) {
			$classes = [
				'menu-list--2'
			];
		}
		return $classes;
	}

	// изменение стандартных классов WP на свои для li
	add_filter( 'nav_menu_css_class', 'filter_nav_menu_css_classes', 10, 4 );
	function filter_nav_menu_css_classes( $classes, $item, $args, $depth) {
		if ($args->theme_location === 'service-header-menu' && $depth == 1) {
		  $classes = [
			 'menu-item--1'
		  ];
		} else if ($args -> theme_location === 'service-header-menu' && $depth == 2) {
			$classes = [
				'menu-item--2'
			];
		}
		return $classes;
	}

	/* Для навигационных ссылок в мобильном меню */
	// изменение стандартных классов WP на свои для li
	add_filter( 'nav_menu_css_class', 'mobile_list_li_classes', 10, 5 );
	function mobile_list_li_classes( $classes, $item, $args, $depth) {
		if ($args->theme_location === 'mobile-nav-menu') {
		  $classes = [
			 'mobile-list-item-menu'
		  ];
		} 
		return $classes;
	}


	/* Для меню с услугами в мобильном меню */
	add_filter( 'nav_menu_submenu_css_class', 'change_class_ul_service_mobile', 10, 4 );
	function change_class_ul_service_mobile( $classes, $args, $depth ){
		if ( $args -> theme_location === 'service-mobile-menu' ) {
			$classes = [
			  'mobile-list__1'
			];
		};
		return $classes;
	}

	// изменение стандартных классов WP на свои для li
	add_filter( 'nav_menu_css_class', 'change_class_li_service_mobile', 10, 5 );
	function change_class_li_service_mobile( $classes, $item, $args, $depth) {
		if ($args->theme_location === 'service-mobile-menu' && $depth == 0) {
		  $classes = [
			 'mobile-list-item'
		  ];
		} else if($args->theme_location === 'service-mobile-menu' && $depth == 1) {
			$classes = [
				'mobile-list-item__1'
			 ];
		}; 
		return $classes;
	}


	/* Регистрация сайдбаров */

	// Регистрация виджета для добавления 
	add_action( 'widgets_init', 'register_services' );
	function register_services(){
		register_sidebar( array(
			'name'          => 'Блок с услугами',
			'id'            => "sidebar-services",
			'description'   => '',
			'class'         => '',
			'before_widget' => '',
			'after_widget'  => "",
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => "</h2>\n",
			'before_sidebar' => '', // WP 5.6
			'after_sidebar'  => '', // WP 5.6
		) );
	}
?>