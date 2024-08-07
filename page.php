<?php get_header(); ?>

<?php
		
		if( have_rows('page_builder') ):
				
				while ( have_rows('page_builder') ) : the_row();
					include('partials/' . get_row_layout() . '.php');
				endwhile;

		endif;

?>

<?php get_footer(); ?>