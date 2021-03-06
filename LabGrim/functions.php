<?php
// Requerendo o Customizer
require get_template_directory() . '/customizers/customizer-footer.php';
require get_template_directory() . '/customizers/customizer-sobre.php';
require get_template_directory() . '/customizers/customizer-producoes.php';
require get_template_directory() . '/customizers/customizer-agenda.php';
require get_template_directory() . '/widgets/widget-home.php';
require get_template_directory() . '/widgets/widget-sobre.php';
require get_template_directory() . '/widgets/widget-galeria-producoes.php';

// Carrega scripts e folhas de estilo
function load_scripts() {
	// Bootstrap
	wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), '4.3.1', 'all' );
	wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap/bootstrap.min.js', array( 'jquery', 'popper' ), '4.3.1', true );
	wp_enqueue_script( 'popper', get_stylesheet_directory_uri() . '/js/bootstrap/popper.min.js', array( 'jquery' ), '1.15.0', 'all' );
	
	// CSS
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts.css' );
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
	
	// Funções JS
	wp_enqueue_script( 'responsiveHome', get_stylesheet_directory_uri() . '/js/responsiveHome.js', array(), '1.0', true );
	wp_enqueue_script( 'responsiveHeader', get_stylesheet_directory_uri() . '/js/responsiveHeader.js', array(), '1.0', true );
	wp_enqueue_script( 'responsiveFooter', get_stylesheet_directory_uri() . '/js/responsiveFooter.js', array(), '1.0', true );
	wp_enqueue_script( 'sandwichMenu', get_stylesheet_directory_uri() . '/js/sandwichMenu.js', array(), '1.0', true );
	wp_enqueue_script( 'pesquisadoresMenu', get_stylesheet_directory_uri() . '/js/pesquisadoresMenu.js', array(), '1.0', true );
	wp_enqueue_script( 'galeriaCarousel', get_stylesheet_directory_uri() . '/js/galeriaCarousel.js', array(), '1.0', true );
	wp_enqueue_script( 'publicacoesCarousel', get_stylesheet_directory_uri() . '/js/publicacoesCarousel.js', array(), '1.0', true );
	// Script Principal
	wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array(), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Configurando o tema
function labgrim_config() {
	// Registrando Menus
	register_nav_menus(
		array(
			'my_main_menu' => 'Main Menu'
		)
	);

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats' );
}
add_action( 'after_setup_theme', 'labgrim_config', 0 );

//Registrando Sidebars
add_action( 'widgets_init', 'labgrim_sidebars' );
function labgrim_sidebars() {
	register_sidebar(
		array(
			'name'             => 'Social Menu',
			'id'               => 'social-menu',
			'description'      => 'Social menu area',
			'before_widget'    => '<div class="social-icon-wrapper">',
			'after_widget'     => '</div>',
			'before_title'     => '<h2 class="social-icon-title">',
			'after_title'      => '</h2>'
		)
	);

	register_sidebar(
		array(
			'name'             => 'Home',
			'id'               => 'home-pag',
			'description'      => 'Área para adição do widget Home Lab Grim',
			'before_widget'    => '<div class="lg-home-wrapper">',
			'after_widget'     => '</div>',
			'before_title'     => '<h2 class="lg-home-title">',
			'after_title'      => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name'             => 'Sobre',
			'id'               => 'page-sobre',
			'description'      => 'Área para adição do widget Pesquisador Lab Grim',
			'before_widget'    => '<div class="sobre-pesquisadores-wrapper">',
			'after_widget'     => '</div>',
			'before_title'     => '<h2 class="sobre-pesquisadores-title">',
			'after_title'      => '</h2>'
		)
	);

	register_sidebar(
		array(
			'name'             => 'Produções',
			'id'               => 'page-producoes',
			'description'      => 'Área para adição do widget Galeria Produções',
			'before_widget'    => '<div class="galeria-producoes-wrapper">',
			'after_widget'     => '</div>',
			'before_title'     => '<h2 class="galeria-producoes-title">',
			'after_title'      => '</h2>'
		)
	);
}

add_image_size( 'labgrim-thumbnail', 350, 196, array( 'center', 'center' ) );


////////////////CUSTOM POST TYPE/////////////////////////////////

function create_posttype() {
  register_post_type( 'publicacoes',
    array(
      'labels' => array(
        'name' => __( 'Publicações' ),
        'singular_name' => __( 'Publicação' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'producoes'),
    )
  );
}
add_action( 'init', 'create_posttype' );