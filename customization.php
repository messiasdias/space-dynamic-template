<?php

add_theme_support('post-thumbnails');

// Our custom post Portfolio function
function create_type_portfolio()
{
	register_post_type(
		'portfolio',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Portfólio'),
				'singular_name' => __('Portfólio'),
				'name_admin_bar' => 'Portfólio',
				'add_new' => 'Nova Galeria',
				'add_new_item' => 'Publicar Nova Galeria de Portfólio',
				'all_items' => 'Ver Todos',
				'search_items' => "Pesquisar Galeria de Portfólio",
			),
			'public' => true,
			'has_archive' => 'portfolio', //true
			'rewrite' => array('slug' => '/portfolio'),
			'show_in_rest' => true,
			'show_in_menu' => true,
			'supports' =>  array('thumbnail', 'title', 'editor', 'comments', 'exerpt'),
			'menu_icon' => 'dashicons-format-gallery'
		)
	);
}
// Hooking up our function to theme setup
add_action('init', 'create_type_portfolio');

function create_type_services()
{
	register_post_type(
		'services',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Serviços'),
				'singular_name' => __('Serviço'),
				'name_admin_bar' => 'Serviço',
				'add_new' => 'Novo Serviço',
				'add_new_item' => 'Publicar Serviço',
				'all_items' => 'Ver Todos'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => '/services'),
			'supports' => array('thumbnail', 'title', 'editor', 'comments'),
			'menu_icon' => 'dashicons-admin-tools'
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_type_services' );


// Our custom post type function
function create_type_about_us()
{
	register_post_type(
		'about-us',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Sobre Nós'),
				'singular_name' => __('Item de Sobre Nós'),
				'name_admin_bar' => 'Sobre Nós',
				'add_new' => 'Novo Item Sobre Nós',
				'add_new_item' => 'Publicar',
				'all_items' => 'Ver todos os Itens'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => '/about-us'),
			'supports' => array('thumbnail', 'title', 'editor', 'comments'),
			'menu_icon' => 'dashicons-businessperson'
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_type_about_us');


function home_section_top($wp_customize)
{
	$wp_customize->add_section(
		"home_section_top",
		array(
			'title' => 'Home Page Topo',
			'description' => 'Configurações da seção Top (Início) do Site',
		)
	);

	//section_top_image
	$wp_customize->add_setting(
		'section_top_image',
		array(
			'default' => get_parent_theme_file_uri('template/assets/images/banner-right-image.png')
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'section_top_image',
			array(
				'type' => 'image',
				'label' =>  'Imagem',
				'section' => 'home_section_top',
				'settings' => 'section_top_image',
			)
		)
	);

	//section_top_welcome
	$wp_customize->add_setting(
		'section_top_welcome',
		array(
			'default' => 'Bem-vindo ao Espaço Dinâmico'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'section_top_welcome',
			array(
				'type' => 'text',
				'label' =>  'Welcome Message',
				'section' => 'home_section_top',
				'settings' => 'section_top_welcome',
			)
		)
	);
	
	//section_top_title
	$wp_customize->add_setting(
		'section_top_title',
		array(
			'default' => 'Criamos <em>ideias digitais</em> &amp; marketing de <span>SEO</span>'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'section_top_title',
			array(
				'type' => 'textarea',
				'label' =>  'Título',
				'section' => 'home_section_top',
				'settings' => 'section_top_title',
			)
		)
	);

	//section_top_text
	$wp_customize->add_setting(
		'section_top_text',
		array(
			'default' => 'Space Dynamic is a professional looking HTML template using a Bootstrap 5 (beta 2). This CSS template is free for you provided by <a rel="nofollow" href="/" target="_parent">TemplateMo</a>.'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'section_top_text',
			array(
				'type' => 'textarea',
				'label' =>  'Texto',
				'section' => 'home_section_top',
				'settings' => 'section_top_text',
			)
		)
	);
}

add_action('customize_register', 'home_section_top');


function home_section_about($wp_customize)
{
	$wp_customize->add_section(
		"home_section_about",
		array(
			'title' => 'Home Page Sobre',
			'description' => 'Configurações da seção About (Sobre) do Site',
		)
	);

	//section_about_image
	$wp_customize->add_setting(
		'section_about_image',
		array(
			'default' => get_parent_theme_file_uri('template/assets/images/about-left-image.png')
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'section_about_image',
			array(
				'type' => 'image',
				'label' =>  'Imagem',
				'section' => 'home_section_about',
				'settings' => 'section_about_image',
			)
		)
	);
}

add_action('customize_register', 'home_section_about');


function home_section_services($wp_customize)
{
	$wp_customize->add_section(
		"home_section_services",
		array(
			'title' => 'Home Page Serviços',
			'description' => 'Configurações da seção Services (Serviços) do Site',
		)
	);

	//section_services_image
	$wp_customize->add_setting(
		'section_services_image',
		array(
			'default' => get_parent_theme_file_uri('template/assets/images/services-left-image.png')
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'section_services_image',
			array(
				'type' => 'image',
				'label' =>  'Imagem',
				'section' => 'home_section_services',
				'settings' => 'section_services_image',
			)
		)
	);

	//section_services_title
	$wp_customize->add_setting(
		'section_services_title',
		array(
			'default' => 'Expanda seu site com nossos <em>serviços de SEO</em>  &amp; ideias de <span>projetos</span>'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'section_services_title',
			array(
				'type' => 'textarea',
				'label' =>  'Título',
				'section' => 'home_section_services',
				'settings' => 'section_services_title',
			)
		)
	);

	//section_services_text
	$wp_customize->add_setting(
		'section_services_text',
		array(
			'default' => 'O modelo Space Dynamic HTML5 é gratuito para uso em projetos de seu site. No entanto, você não tem permissão para redistribuir o arquivo ZIP do modelo em nenhum site de coleção de modelos CSS. Entre em contato conosco para mais informações. Obrigado pela sua amável cooperação.'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'section_services_text',
			array(
				'type' => 'textarea',
				'label' =>  'Texto',
				'section' => 'home_section_services',
				'settings' => 'section_services_text',
			)
		)
	);
}

add_action('customize_register', 'home_section_services');


function home_section_portfolio($wp_customize){
	$wp_customize->add_section(
		"home_section_portifolio",
		array(
			'title' => 'Home Page Portifólio',
			'description' => 'Configurações da seção Portfolio (Portifólio) do Site',
		)
	);

	//section_portifolio_title
	$wp_customize->add_setting(
		'section_portifolio_title',
		array(
			'default' => 'Veja o que nossa agência <em>oferece</em> e o que <span>oferecemos</span>'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'section_portifolio_title',
			array(
				'type' => 'textarea',
				'label' =>  'Título',
				'section' => 'home_section_portifolio',
				'settings' => 'section_portifolio_title',
			)
		)
	);
}

add_action('customize_register', 'home_section_portfolio');


function home_section_blog($wp_customize){
	$wp_customize->add_section(
		"home_section_blog",
		array(
			'title' => 'Home Page Blog',
			'description' => 'Configurações da seção Blog (Posts) do Site',
		)
	);

	//section_blog_image
	$wp_customize->add_setting(
		'section_blog_image',
		array(
			'default' => get_parent_theme_file_uri('template/assets/images/blog-dec.png')
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'section_blog_image',
			array(
				'type' => 'image',
				'label' =>  'Imagem',
				'section' => 'home_section_blog',
				'settings' => 'section_blog_image',
			)
		)
	);

	//section_blog_title
	$wp_customize->add_setting(
		'section_blog_title',
		array(
			'default' => 'Confira o que é <em>Tendência</em> em nossas últimas <span>notícias</span>'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'section_blog_title',
			array(
				'type' => 'textarea',
				'label' =>  'Título',
				'section' => 'home_section_blog',
				'settings' => 'section_blog_title',
			)
		)
	);
}

add_action('customize_register', 'home_section_blog');

function home_section_contact($wp_customize)
{
	$wp_customize->add_section(
		"home_section_contact",
		array(
			'title' => 'Home Page Contato',
			'description' => 'Configurações da seção Contact (Contato) do Site',
		)
	);

	//section_contact_image
	$wp_customize->add_setting(
		'section_contact_image',
		array(
			'default' => get_parent_theme_file_uri('template/assets/images/contact-decoration.png')
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'section_contact_image',
			array(
				'type' => 'image',
				'label' =>  'Imagem',
				'section' => 'home_section_contact',
				'settings' => 'section_contact_image',
			)
		)
	);

	//section_contact_title
	$wp_customize->add_setting(
		'section_contact_title',
		array(
			'default' => 'Sinta-Se À Vontade Para Nos Enviar Uma Mensagem Sobre As Necessidades Do Seu Site'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'section_contact_title',
			array(
				'type' => 'textarea',
				'label' =>  'Título',
				'section' => 'home_section_contact',
				'settings' => 'section_contact_title',
			)
		)
	);

	//section_contact_subtitle
	$wp_customize->add_setting(
		'section_contact_subtitle',
		array(
			'default' => 'Tire Suas Dúvidas No Nosso Whatsapp:'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'section_contact_subtitle',
			array(
				'type' => 'textarea',
				'label' =>  'Subtítulo',
				'section' => 'home_section_contact',
				'settings' => 'section_contact_subtitle',
			)
		)
	);

	//section_contact_text
	$wp_customize->add_setting(
		'section_contact_text',
		array(
			'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doer ket eismod tempor incididunt ut labore et dolores'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'section_contact_text',
			array(
				'type' => 'textarea',
				'label' =>  'Texto',
				'section' => 'home_section_contact',
				'settings' => 'section_contact_text',
			)
		)
	);
	
	//section_contact_email
	$wp_customize->add_setting(
		'section_contact_email',
		array(
			'default' => 'seu@email.com'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'section_contact_email',
			array(
				'type' => 'text',
				'label' =>  'Email - Caixa de Entrada',
				'section' => 'home_section_contact',
				'settings' => 'section_contact_email',
			)
		)
	);
	
	//section_contact_wpphone
	$wp_customize->add_setting(
		'section_contact_wpphone',
		array(
			'default' => '81999999999'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'section_contact_wpphone',
			array(
				'type' => 'number',
				'label' =>  'Número do Whathsapp',
				'section' => 'home_section_contact',
				'settings' => 'section_contact_wpphone',
			)
		)
	);

	//section_contact_wpmessage
	$wp_customize->add_setting(
		'section_contact_wpmessage',
		array(
			'default' => 'Olá, Gostaria de mais informações sobre os serviços.'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'section_contact_wpmessage',
			array(
				'type' => 'text',
				'label' =>  'Mensagem de contato do Whathsapp',
				'section' => 'home_section_contact',
				'settings' => 'section_contact_wpmessage',
			)
		)
	);

	//section_contact_wpimage
	$wp_customize->add_setting(
		'section_contact_wpimage',
		array(
			'default' => get_parent_theme_file_uri('template/assets/images/whatsapp.png')
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'section_contact_wpimage',
			array(
				'type' => 'image',
				'label' =>  'Logo do Whathsapp',
				'section' => 'home_section_contact',
				'settings' => 'section_contact_wpimage',
			)
		)
	);
}

add_action('customize_register', 'home_section_contact');