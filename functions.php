<?php

//Prevent direct access to the file

if(!defined( 'ABSPATH')){
	exit;
}

// Import further additional custom functions

require_once( trailingslashit( get_stylesheet_directory() ) . 'includes/style.php' );

// Get child theme version

function fc_theme_child_version() {
	$theme = wp_get_theme();
	if ( !$theme->exists() ) {
		return;
	}
	return $theme->get( 'Version' );
}

// Enqueue child theme admin scripts & styles

function fc_theme_child_enqueue_admin_scripts_styles() {
	wp_enqueue_style( 'fc_theme-admin-custom-style', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/css/admin-custom-style.css', array(), fc_theme_child_version(), 'all' );
	wp_enqueue_script( 'fc_theme-admin-custom-script', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/js/admin-custom-script.js', array(
		'jquery'
	), fc_theme_child_version(), true );

	if(is_login()){
		wp_enqueue_style('fc_theme_login_custom_style', trailingslashit(get_stylesheet_directory_uri()) . 'assets/css/admin-custom-styles.css', array(), fc_theme_child_version(), 'all');
	}
}
add_action( 'admin_enqueue_scripts', 'fc_theme_child_enqueue_admin_scripts_styles', 20 );
add_action('login_enqueue_scripts', 'fc_theme_child_enqueue_admin_scripts_styles', 20);

// Enqueue child theme scripts & styles

function fc_theme_child_enqueue_scripts_styles() {
	wp_enqueue_style( 'fc_theme-custom-webfonts', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/css/custom-webfonts.css', array(), fc_theme_child_version(), 'all' );
	wp_enqueue_style( 'fc_theme-custom-style', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/css/custom-style.css', array(), fc_theme_child_version(), 'all' );
	wp_enqueue_script( 'fc_theme-custom-script', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/js/custom-script.js', array(
		'jquery'
	), fc_theme_child_version(), true );
}
add_action( 'wp_enqueue_scripts', 'fc_theme_child_enqueue_scripts_styles', 20 );

// Block Icon

$block_icon = '<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
					width="493.000000pt" height="418.000000pt" viewBox="0 0 493.000000 418.000000"
					preserveAspectRatio="xMidYMid meet">

					<g transform="translate(0.000000,418.000000) scale(0.100000,-0.100000)"
					fill="#000000" stroke="none">
					<path d="M390 4174 c-25 -2 -89 -9 -142 -15 -111 -13 -100 2 -119 -158 -15
					-134 -7 -466 15 -581 49 -269 152 -486 299 -633 59 -59 60 -61 48 -91 -102
					-252 -143 -522 -121 -800 6 -76 10 -139 8 -140 -2 -1 -41 -17 -88 -35 -70 -28
					-256 -115 -268 -126 -2 -2 10 -30 27 -63 l31 -61 122 58 c120 57 196 87 203
					79 1 -1 15 -47 29 -100 15 -54 29 -105 32 -113 5 -11 -4 -19 -27 -27 -44 -15
					-278 -132 -303 -150 -17 -14 -17 -17 15 -69 18 -30 34 -56 35 -57 1 -2 31 12
					66 31 66 37 248 117 265 117 6 0 23 -28 37 -63 15 -34 56 -111 91 -170 304
					-513 792 -858 1383 -978 151 -31 508 -38 673 -14 677 98 1268 534 1556 1148
					20 42 41 77 46 77 17 0 200 -81 265 -117 35 -19 65 -33 66 -31 1 1 17 27 35
					57 32 52 32 55 15 69 -25 18 -259 135 -303 150 -23 8 -32 16 -27 27 3 8 17 59
					32 113 14 53 28 99 29 100 7 8 83 -22 203 -79 l122 -58 31 61 c17 33 29 61 27
					63 -12 11 -198 98 -268 126 -47 18 -86 34 -88 35 -2 1 2 63 8 137 22 277 -20
					553 -120 802 -12 29 -11 32 50 95 150 155 246 359 296 627 22 118 30 449 15
					584 -19 160 -7 145 -124 160 -126 16 -433 16 -547 0 -214 -30 -401 -92 -539
					-178 -96 -60 -231 -190 -322 -309 l-70 -91 -62 13 c-315 66 -888 66 -1229 0
					l-68 -13 -69 92 c-91 118 -226 248 -322 308 -136 85 -304 142 -507 172 -98 15
					-360 26 -442 19z m428 -160 c207 -30 386 -99 517 -199 79 -60 181 -175 268
					-301 35 -50 65 -84 75 -84 9 0 44 7 77 14 347 81 904 84 1285 6 54 -11 103
					-20 109 -20 5 0 37 40 71 89 78 114 188 238 265 297 123 96 310 167 522 200
					113 17 423 23 499 10 l41 -7 7 -61 c10 -104 6 -338 -8 -448 -40 -299 -124
					-482 -302 -655 l-102 -100 31 -60 c76 -151 123 -332 137 -540 9 -117 0 -338
					-13 -351 -3 -3 -31 2 -63 10 -180 46 -473 59 -673 31 -231 -33 -451 -102 -671
					-212 -80 -39 -151 -76 -159 -81 -11 -8 -8 -20 18 -66 18 -31 35 -56 38 -56 2
					0 73 34 156 75 427 209 853 266 1268 169 l67 -16 -14 -61 c-13 -55 -43 -158
					-49 -165 -1 -1 -44 9 -96 23 -397 105 -769 97 -1074 -24 -78 -31 -216 -116
					-222 -136 -2 -6 16 -32 40 -59 l43 -49 49 38 c195 150 532 200 910 135 122
					-21 260 -54 283 -69 28 -17 -135 -301 -258 -451 -257 -314 -611 -543 -995
					-643 -178 -47 -285 -60 -485 -60 -310 0 -538 51 -818 184 -315 149 -582 381
					-775 674 -72 110 -161 285 -150 295 14 12 161 48 288 70 376 65 715 14 910
					-135 l49 -38 43 49 c24 27 42 53 40 59 -6 20 -144 105 -222 136 -305 121 -684
					129 -1074 23 -51 -14 -94 -24 -96 -22 -6 7 -36 108 -49 165 l-14 61 67 16
					c126 29 187 37 331 43 318 12 617 -55 937 -212 83 -41 154 -75 156 -75 3 0 20
					25 38 56 37 66 49 52 -121 138 -446 226 -926 293 -1365 191 -32 -8 -61 -13
					-63 -10 -2 2 -8 52 -13 112 -23 259 31 564 135 772 l35 69 -79 72 c-44 40
					-101 100 -126 133 -104 137 -179 352 -204 584 -13 114 -10 456 3 469 25 25
					366 24 545 -2z"/>
					<path d="M1415 2656 c-104 -27 -170 -71 -212 -143 -24 -42 -28 -58 -28 -128 0
					-87 17 -131 79 -208 40 -50 144 -118 226 -148 54 -20 84 -24 180 -24 106 0
					120 2 178 29 148 69 206 204 150 353 -28 77 -127 177 -218 221 -115 56 -250
					74 -355 48z m203 -120 c42 -61 65 -136 65 -209 0 -60 -5 -78 -39 -145 -21 -41
					-44 -77 -51 -79 -13 -5 -55 63 -78 127 -20 55 -22 142 -6 195 13 41 71 145 81
					145 3 0 15 -15 28 -34z"/>
					<path d="M3180 2654 c-137 -29 -276 -127 -334 -234 -81 -148 -23 -313 136
					-386 59 -27 71 -29 183 -28 136 1 200 18 293 80 234 155 258 414 49 529 -98
					54 -201 67 -327 39z m87 -136 c75 -128 74 -244 -3 -376 -14 -24 -31 -41 -37
					-39 -7 2 -30 38 -51 79 -34 67 -39 85 -39 145 0 46 7 86 21 122 20 52 62 121
					72 121 3 0 20 -24 37 -52z"/>
					<path d="M2245 1870 c-40 -13 -72 -31 -95 -55 -31 -32 -35 -42 -34 -85 1 -85
					81 -181 187 -225 l38 -16 -3 -317 c-3 -314 -3 -317 -26 -350 -39 -53 -94 -76
					-187 -76 -194 0 -391 128 -485 317 -22 43 -40 86 -40 93 0 8 -3 14 -6 14 -9 0
					-129 -31 -132 -35 -8 -8 53 -144 91 -203 193 -298 600 -424 816 -252 l41 31
					45 -35 c71 -53 133 -71 250 -70 80 1 115 6 177 27 207 71 379 235 454 433 14
					37 23 68 22 69 -5 5 -116 35 -127 35 -6 0 -11 -6 -11 -13 0 -7 -15 -44 -34
					-82 -94 -197 -292 -329 -491 -329 -93 0 -148 23 -187 76 -23 33 -23 36 -26
					350 l-3 317 46 20 c59 26 101 61 141 118 79 110 34 210 -111 248 -83 21 -234
					19 -310 -5z"/>
					</g>
				</svg>';

// Register custom Blocks

function fc_theme_child_register_blocks() {
	global $block_icon;

    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'about-me',
            'title' => 'About Me',
            'render_template' => 'template-parts/blocks/block-about-me.php',
            'category' => 'design',
            'icon' => $block_icon,
            'mode' => 'edit',
            'supports' => array(
                'align' => false,
                'mode' => false
            ),
            'keywords' => array(
                'about me'
			)
        ));

		acf_register_block_type(array(
			'name' => 'skills',
			'title' => 'Skills',
			'render_template' => 'template-parts/blocks/block-skills.php',
			'category' => 'widgets',
			'icon' => $block_icon,
			'mode' => 'edit',
			'supports' => array(
				'align' => false,
				'mode' => false 
			),
			'keywords' => array(
				'skills'
			)
		));

		acf_register_block_type(array(
			'name' => 'services',
			'title' => 'Services',
			'render_template' => 'template-parts/blocks/block-services.php',
			'category' => 'design',
			'icon' => $block_icon,
			'mode' => 'edit',
			'supports' => array(
				'align' => false,
				'mode' => false 
			),
			'keywords' => array(
				'services'
			)
		));

		acf_register_block_type(array(
			'name' => 'parallax',
			'title' => 'Parallax',
			'render_template' => 'template-parts/blocks/block-parallax.php',
			'category' => 'design',
			'icon' => $block_icon,
			'mode' => 'edit',
			'supports' => array(
				'align' => false,
				'mode' => false 
			),
			'keywords' => array(
				'parallax'
			)
		));

		acf_register_block_type(array(
			'name' => 'post-loop',
			'title' => 'Post Loop',
			'render_template' => 'template-parts/blocks/block-post-loop.php',
			'category' => 'widgets',
			'icon' => $block_icon,
			'mode' => 'edit',
			'supports' => array(
				'align' => false,
				'mode' => false 
			),
			'keywords' => array(
				'post loop',
				'post',
				'loop'
			)
		));

		acf_register_block_type(array(
			'name' => 'conditions',
			'title' => 'Conditions',
			'render_template' => 'template-parts/blocks/block-conditions.php',
			'category' => 'design',
			'icon' => $block_icon,
			'mode' => 'edit',
			'supports' => array(
				'align' => false,
				'mode' => false 
			),
			'keywords' => array(
				'conditions'
			)
		));

		acf_register_block_type(array(
			'name' => 'fc-image',
			'title' => 'Image',
			'render_template' => 'template-parts/blocks/fc-block-image.php',
			'category' => 'design',
			'icon' => $block_icon,
			'mode' => 'edit',
			'supports' => array(
				'align' => false,
				'mode' => false 
			),
			'keywords' => array(
				'image'
			)
		));

		acf_register_block_type(array(
			'name' => 'fc-text',
			'title' => 'Text',
			'render_template' => 'template-parts/blocks/fc-block-text.php',
			'category' => 'design',
			'icon' => $block_icon,
			'mode' => 'edit',
			'supports' => array(
				'align' => false,
				'mode' => false 
			),
			'keywords' => array(
				'text'
			)
		));

		acf_register_block_type(array(
			'name' => 'fc-button-link',
			'title' => 'Button-Link',
			'render_template' => 'template-parts/blocks/fc-block-button-link.php',
			'category' => 'design',
			'icon' => $block_icon,
			'mode' => 'edit',
			'supports' => array(
				'align' => false,
				'mode' => false 
			),
			'keywords' => array(
				'button',
				'link',
				'button link'
			)
		));

		acf_register_block_type(array(
			'name' => 'fc-shortcode',
			'title' => 'Shortcode',
			'render_template' => 'template-parts/blocks/fc-block-shortcode.php',
			'category' => 'widgets',
			'icon' => $block_icon,
			'mode' => 'edit',
			'supports' => array(
				'align' => false,
				'mode' => false,
				'className' => true
			),
			'keywords' => array(
				'shortcode'
			)
		));

		acf_register_block_type(array(
			'name' => 'fc-heading',
			'title' => 'Heading',
			'render_template' => 'template-parts/blocks/fc-block-heading.php',
			'category' => 'design',
			'icon' => $block_icon,
			'mode' => 'edit',
			'supports' => array(
				'align' => false,
				'mode' => false,
				'className' => true
			),
			'keywords' => array(
				'heading'
			)
		));

		acf_register_block_type(array(
			'name' => 'portfolio-hero',
			'title' => 'Hero',
			'render_template' => 'template-parts/blocks/portfolio-block-hero.php',
			'category' => 'design',
			'icon' => $block_icon,
			'mode' => 'edit',
			'supports' => array(
				'align' => false,
				'mode' => false,
				'className' => true
			),
			'keywords' => array(
				'hero'
			)
		));
    } 
}
add_action('init', 'fc_theme_child_register_blocks'); 

// Allow specific Blocks

function fc_theme_child_allowed_block_types(){
	$allowed_blocks = array(
		'acf/about-me',
		'acf/conditions',
		'acf/fc-button-link',
		'acf/fc-heading',
		'acf/fc-text',
		'acf/fc-image',
		'acf/fc-shortcode',
		'acf/portfolio-hero',
		'acf/parallax',
		'acf/post-loop',
		'acf/services',
		'acf/skills',
		'core/block' 
	);

	return $allowed_blocks;
}
add_filter('allowed_block_types_all', 'fc_theme_child_allowed_block_types', 10);

// Add HTML for the Preloader into the footer tag

function add_preloader(){
	echo '
		<!-- Preloader -->

		<div id="preloader">
			<div class="preloader-image"></div>
			<div class="loading-text">
				Loading... <span id="progress-percentage">0%</span>
			</div>
			<div class="progress-bar">
				<div class="progress"></div>
			</div>
		</div>
	';
}
add_action('wp_footer', 'add_preloader');

//Register ACF fields for translation

function register_acf_strings_for_translation(){
	if(have_rows('footer_address_data', 'option')){
		while(have_rows('footer_address_data', 'option')){
			the_row();
			$label = get_sub_field('label');
			pll_register_string('address_label_' . $label, $label, 'Address Labels');
		}
	}
}
add_action('init', 'register_acf_strings_for_translation');

//Register hardcoded strings for translation

function register_hardcoded_strings_for_translation(){
	pll_register_string('archive_projects_heading', 'Projekte', 'archive-projects', true);
}
add_action('init', 'register_hardcoded_strings_for_translation');

//Integrate menu container class consistency for different menus, so additional styling can be avoided

function force_menu_class_consistency($nav_menu, $args){
	if(in_array($args -> theme_location, ['main-menu', 'main-menu-english', 'footer_menu', 'footer_menu_english'])){
		$nav_menu = preg_replace(
			'/<div class="[^"]*menu-[^"]*-container"/',
			'<div class="menu-main-menu-container"',
			$nav_menu
		);
	}

	return $nav_menu;
}
add_filter('wp_nav_menu', 'force_menu_class_consistency', 10, 2);

?>