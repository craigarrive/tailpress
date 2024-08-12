<?php 
add_action('acf/init', 'my_acf_op_init');

function my_acf_op_init() {

    // Google Maps API
    acf_update_setting('google_api_key', 'AIzaSyAOkHYEWbNQnGYXX5RJSEgLU-r04zaDJOc');

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

function acf_load_color_field_choices( $field ) {
    
    // Reset choices
    $field['choices'] = array();    

    if( have_rows('theme_colours', 'option') ) {
        
        // Execute repeatedly as long as the below statement is true
        while( have_rows('theme_colours', 'option') ) {
            
            the_row();
            
            $value = get_sub_field('hex');
            $label = get_sub_field('name');

            
            // Append to choices
            $field['choices'][ $value ] = $label;
            
        }
        
    }

    // Return the field
    return $field;
    
}

add_filter('acf/load_field/name=background_colour', 'acf_load_color_field_choices');
add_filter('acf/load_field/name=text_colour', 'acf_load_color_field_choices');

function print_pre($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

?>







