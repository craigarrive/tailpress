<?php
// REGISTER CARE HOMES POST TYPE
function register_cpt_care_homes() {
  $labels = array(
    'name' 									=> _x( 'Care Homes', 'care-homes' ),
    'singular_name' 				=> _x( 'Care Homes', 'care-homes' ),
    'add_new' 							=> _x( 'Add Care Home', 'care-homes' ),
    'add_new_item' 					=> _x( 'Add New Care Home', 'care-homes' ),
    'edit_item' 						=> _x( 'Edit Care Home', 'care-homes' ),
    'new_item' 							=> _x( 'New Care Home', 'care-homes' ),
    'view_item' 						=> _x( 'View Care Home', 'care-homes' ),
    'search_items' 					=> _x( 'Search Care Homes', 'care-homes' ),
    'not_found' 						=> _x( 'No Care Home found', 'care-homes' ),
    'not_found_in_trash' 		=> _x( 'No Care Home found in Trash', 'care-homes' ),
    'parent_item_colon' 		=> _x( 'Parent Care Home:', 'care-homes' ),
    'menu_name'							=> _x( 'Care Homes', 'care-homes' ),
    'name_admin_bar'				=> _x( 'Care Homes', 'care-homes' ),
    'all_items' 						=> _x( 'All Care Homes', 'care-homes'),
  );
  $args = array(
    'labels' 								=> $labels,
    'hierarchical' 					=> true,
    'description' 					=> 'Care Homes filterable by Care Home',
    'supports' 							=> array( 'title', 'editor', 'thumbnail'),
    'public' 								=> true,
    'show_ui' 							=> true,
    'show_in_menu' 					=> true,
    'menu_icon' 						=> 'dashicons-admin-home',
    'show_in_nav_menus'			=> true,
    'publicly_queryable' 		=> true,
    'exclude_from_search' 	=> false,
    'has_archive' 					=> true,
    'query_var' 						=> true,
    'can_export' 						=> true,
    'rewrite' 							=> true,
    'capability_type' 			=> 'post',
  );
  register_post_type( 'care-homes', $args );
}
add_action( 'init', 'register_cpt_care_homes' );

function add_custom_taxonomy_county() {
  
  register_taxonomy('county', 'care-homes', array(
      // Hierarchical taxonomy (like categories)
      // 'hierarchical' => true,
      // 'has_archive' => 'carehomes',

      // This array of options controls the labels displayed in the WordPress Admin UI
      'labels' => array(
          'name' => _x( 'County', 'taxonomy general name' ),
          'singular_name' => _x( 'County', 'taxonomy singular name' ),
          'search_items' =>  __( 'Search Counties' ),
          'all_items' => __( 'All Counties' ),
          'parent_item' => __( 'Parent County' ),
          'parent_item_colon' => __( 'Parent County:' ),
          'edit_item' => __( 'Edit County' ),
          'update_item' => __( 'Update County' ),
          'add_new_item' => __( 'Add New County' ),
          'new_item_name' => __( 'New County Name' ),
          'menu_name' => __( 'Counties' ),
      ),

      // Control the slugs used for this taxonomy
      'rewrite' => array(
          'slug' => 'counties', // This controls the base slug that will display before each term
          // 'with_front' => false, // Don't display the category base before "/locations/"
          'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
      ),
  ));
}
add_action( 'init', 'add_custom_taxonomy_county', 0 );
?>