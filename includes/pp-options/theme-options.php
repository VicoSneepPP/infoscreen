<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {

  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array.
   */
  $saved_settings = get_option( ot_settings_id(), array() );

	$website = get_template_directory_uri();

  /**
   * Custom settings array that will eventually be
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array(
    'contextual_help' => array(
      'content'       => array(
		array(
          'id'        => 'shortcode_prod',
          'title'     => __( 'Shortcode producten', 'ppdirect' ),
          'content'   => __( '<p><strong>[plusport_products]</strong></p>
		  					 <p>De shortcode voor gerelateerde producten binnen het merk </p>
							 <p>*LET OP: Deze shortcode werkt alleen wanneer de "Related products on page" in gebruik is</br>
							 <strong>ÉN</strong> dat er producten zijn geselecteerd</p> ', 'ppdirect' )
        ),
		array(
          'id'        => 'shortcode_faq',
          'title'     => __( 'Shortcode FAQ', 'ppdirect' ),
          'content'   => __( '<p><strong>[faq categorie="<i>slug van categorie</i>"]</strong></p>
							 <p> De shortcode om FAQ\'s te vullen.</br>
							 Vul in de slug van de categorie achter "categorie=" in de shortcode om FAQ\'s te tonen binnen deze categorie.</br>
							 Wanneer je geen categorie, clustert hij niet en toont alle FAQ\'s.</p> ', 'ppdirect' )
        )
      ),
      'sidebar'       => __( '<pLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.

</p>', 'ppdirect' )
    ),
    'sections'        => array(
      array(
        'id'          => 'algemeen',
        'title'       => __( 'Algemeen', 'ppdirect' )
      ),
	  //array(
      //  'id'          => 'pp_prods',
      //  'title'       => __( 'Sectie: Producten', 'ppdirect' )
      //),
      //array(
      //  'id'          => 'pp_social',
      //  'title'       => __( 'Sectie: Social icons', 'ppdirect' )
      //),
    ),
    'settings'        => array(
      array(
        'id'          => 'pp_logo',
        'label'       => __( 'Logo', 'ppdirect' ),
        'desc'        => __( 'Upload hier je logo. Dit wordt bovenaan op de site getoond', 'ppdirect' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'algemeen',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array(
          array(
            'value'       => 'yes',
            'label'       => __( 'Yes', 'ppdirect' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'pp_favicon',
        'label'       => __( 'Favicon', 'ppdirect' ),
        'desc'        => __( 'Upload een .png/.ico met een vierkant formaat. Dit verschijnt bovenaan in je browser', 'ppdirect' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'algemeen',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      //array(
      //  'id'          => 'pp_google_analytics (optioneel)',
      //  'label'       => __( 'Google Analytics', 'ppdirect' ),
      //  'desc'        => __( 'Voer hier je UA-code in', 'ppdirect' ),
      //  'std'         => '',
      //  'type'        => 'text',
      //  'section'     => 'algemeen',
      //  'rows'        => '',
      //  'post_type'   => '',
      //  'taxonomy'    => '',
      //  'min_max_step'=> '',
      //  'class'       => '',
      //  'condition'   => '',
      //  'operator'    => 'and'
      //),
      //array(
      //  'id'          => 'pp_hotjar (optioneel)',
      //  'label'       => __( 'Hotjar ID', 'ppdirect' ),
      //  'desc'        => __( 'Voer hier je Hotjar ID in', 'ppdirect' ),
      //  'std'         => '',
      //  'type'        => 'text',
      //  'section'     => 'algemeen',
      //  'rows'        => '',
      //  'post_type'   => '',
      //  'taxonomy'    => '',
      //  'min_max_step'=> '',
      //  'class'       => '',
      //  'condition'   => '',
      //  'operator'    => 'and'
      //),
array(
        'id'          => 'pp_tab_product1',
        'label'       => __( '3 Producten', 'ppdirect' ),
        'desc'        => __( '', 'ppdirect' ),
        'std'         => '',
        'type'        => 'tab',
        'section'     => 'pp_prods',
        'rows'        => '5',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'pp_prodtit_01',
        'label'       => __( 'Header blok (!LET OP: werkt alleen als dit thema 3 producten ondersteund)', 'ppdirect' ),
        'desc'        => __( 'Titel verschijnt in de zwarte headerbalk', 'ppdirect' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'pp_prods',
        'rows'        => '1',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'pp_proddesc_01',
        'label'       => __( 'Extra content veld bij 3 producten', 'ppdirect' ),
        'desc'        => __( '<img src="'. get_template_directory_uri() .'/img/options/three_prod.png" style="vertical-align:middle;" /></br> Content is 1 kolom breed.', 'ppdirect' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'pp_prods',
        'rows'        => '8',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'pp_prodlink01',
        'label'       => __( 'Link naar pagina', 'ppdirect' ),
        'desc'        => __( 'Kies hier de pagina waar dit naar toe moet verwijzen.', 'ppdirect' ),
        'std'         => '',
        'type'        => 'page-select',
        'section'     => 'pp_prods',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

array(
        'id'          => 'pp_tab_product2',
        'label'       => __( '2 Producten', 'ppdirect' ),
        'desc'        => __( '', 'ppdirect' ),
        'std'         => '',
        'type'        => 'tab',
        'section'     => 'pp_prods',
        'rows'        => '5',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'id'          => 'pp_prodtit_02',
        'label'       => __( 'Header blok  (!LET OP: werkt alleen als dit thema 2 producten ondersteund)', 'ppdirect' ),
        'desc'        => __( 'Titel verschijnt in de zwarte headerbalk', 'ppdirect' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'pp_prods',
        'rows'        => '1',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'pp_proddesc_02',
        'label'       => __( 'Extra content veld bij 2 producten', 'ppdirect' ),
        'desc'        => __( '<img src="'. get_template_directory_uri() .'/img/options/two_prod.png" style="vertical-align:middle;" /></br> Content is 1 kolom breed.', 'ppdirect' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'pp_prods',
        'rows'        => '8',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'id'          => 'pp_prodlink02',
        'label'       => __( 'Link naar pagina', 'ppdirect' ),
        'desc'        => __( 'Kies hier de pagina waar dit naar toe moet verwijzen.', 'ppdirect' ),
        'std'         => '',
        'type'        => 'page-select',
        'section'     => 'pp_prods',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),



	  array(
        'id'          => 'pp_facebook',
        'label'       => __( '<img src="'. get_template_directory_uri() .'/img/social/fb.png">  link to Facebook', 'ppdirect' ),
        'desc'        => __( 'Voer hier link naar Facebook in', 'ppdirect' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'pp_social',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

	  array(
        'id'          => 'pp_twitter',
        'label'       => __( '<img src="'. get_template_directory_uri() .'/img/social/tw.png"> link to Twitter', 'ppdirect' ),
        'desc'        => __( 'Voer hier link naar Twitter in', 'ppdirect' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'pp_social',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'pp_linkedin',
        'label'       => __( '<img src="'. get_template_directory_uri() .'/img/social/in.png"> Link to LinkedIn', 'ppdirect' ),
        'desc'        => __( 'Voer hier link naar LinkedIn ', 'ppdirect' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'pp_social',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

    )
  );

  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );

  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings );
  }

  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;

}
