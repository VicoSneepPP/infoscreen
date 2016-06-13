<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_aantal-hoofdberichten',
		'title' => 'Aantal hoofdberichten',
		'fields' => array (
			array (
				'key' => 'field_574eb6fd97640',
				'label' => 'Kies het aantal hoofdberichten die wilt tonen',
				'name' => 'no_main',
				'type' => 'number',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 1,
				'max' => '',
				'step' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'default',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'featured_image',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_afbeelding-staandliggend',
		'title' => 'Afbeelding staand/liggend',
		'fields' => array (
			array (
				'key' => 'field_574c4f00ff616',
				'label' => 'Kies format voor je afbeelding',
				'name' => 'img_format_lrg',
				'type' => 'select',
				'required' => 1,
				'choices' => array (
					'hor' => 'Horizontaal',
					'ver' => 'Verticaal',
				),
				'default_value' => 'hor : Horizontaal',
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'hoofdbericht',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'excerpt',
				1 => 'categories',
				2 => 'tags',
				3 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_nieuws-van-welke-vestiging',
		'title' => 'Nieuws van welke vestiging',
		'fields' => array (
			array (
				'key' => 'field_574e9526c2137',
				'label' => 'Kies de vestiging waarvan je nieuws wilt laten zien',
				'name' => 'vest_news',
				'type' => 'taxonomy',
				'taxonomy' => 'category',
				'field_type' => 'multi_select',
				'allow_null' => 0,
				'load_save_terms' => 1,
				'return_format' => 'id',
				'multiple' => 0,
			),
			array (
				'key' => 'field_574eb4825808a',
				'label' => 'Aantal nieuwsitems',
				'name' => 'no_nieuws',
				'type' => 'number',
				'instructions' => 'Kies hier het maximaal aantal berichten die je wilt tonen.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 1,
				'max' => '',
				'step' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'default',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'featured_image',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_weer-in-vestiging',
		'title' => 'Weer in vestiging',
		'fields' => array (
			array (
				'key' => 'field_574d8b6ac2c8a',
				'label' => 'Kies je stad',
				'name' => 'city_weather',
				'type' => 'select',
				'required' => 1,
				'choices' => array (
					0 => 'Den Haag',
					1 => 'Eindhoven',
					2 => 'Veenendaal',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'default',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'discussion',
				3 => 'comments',
				4 => 'revisions',
				5 => 'categories',
				6 => 'tags',
				7 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
register_field_group(array (
		'id' => 'acf_aantal-hoofdberichten',
		'title' => 'Aantal hoofdberichten',
		'fields' => array (
			array (
				'key' => 'field_574eb6fd97640',
				'label' => 'Kies het aantal hoofdberichten die wilt tonen',
				'name' => 'no_main',
				'type' => 'number',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 1,
				'max' => '',
				'step' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'default',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-home.php',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'featured_image',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_berichten-opties',
		'title' => 'Berichten opties',
		'fields' => array (
			array (
				'key' => 'field_575e71ca3e05e',
				'label' => 'Kies het aantal hoofdberichten die wilt tonen',
				'name' => 'no_main',
				'type' => 'number',
				'instructions' => 'Kies hier het maximaal aantal Hoofdberichten die je wilt tonen.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 1,
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_575e71ed3e05f',
				'label' => 'Aantal nieuwsitems',
				'name' => 'no_nieuws',
				'type' => 'number',
				'instructions' => 'Kies hier het maximaal aantal berichten die je wilt tonen.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 1,
				'max' => '',
				'step' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-home.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'featured_image',
				6 => 'categories',
				7 => 'tags',
				8 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}

?>
