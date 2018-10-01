<?php 
	
/*
	Template Name: Routes Template
*/
	
get_header(); ?>

<?php 
    
    $args = array('post_type' => 'routes', 'posts_per_page' => 3 );
    $loop = new WP_Query( $args ); 
   

	if( $loop->have_posts() ):

		while( $loop->have_posts() ): $loop->the_post(); ?>
			
            <?php get_template_part( 'content', 'routes'); ?>
					
		<?php endwhile;
	
    else:  ?> <h3>no posts in loop</h3> <?php  

	endif;
		
?>

<?php get_footer(); ?>