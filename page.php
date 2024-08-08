<?php get_header(); ?>
<div class="container mx-auto">
<?php
		
		if( have_rows('page_builder') ):
				
				while ( have_rows('page_builder') ) : the_row();
					include('partials/' . get_row_layout() . '.php');
				endwhile;

		endif;

?>
</div>

<?php get_footer(); ?>