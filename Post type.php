<?php

function wayup_register_custom_post_type()
{
	register_post_type(
		'testimonial',
		array(
			'labels' => array(
				'name' => 'Отзывы',
				'singular_name' => 'Отзыв',
				'add_new' => 'Добавить новый'
			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'testimonials'),
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
		)
	);

	register_post_type(
		'service',
		array(
			'labels' => array(
				'name' => 'Услуги',
				'singular_name' => 'Услуга',
				'add_new' => 'Добавить новую'
			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'services'),
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
		)
	);

	register_post_type(
		'news',
		array(
			'labels' => array(
				'name' => 'Новости',
				'singular_name' => 'Новость',
				'add_new' => 'Добавить новую'
			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'news'),
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
		)
	);
}

add_action('init', 'wayup_register_custom_post_type');
?>
