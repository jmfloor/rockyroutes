<article id="post-<?php the_ID(); ?>" <?php post_class('route_container'); ?>>
	
	<header class="route-header">
		<?php the_title( sprintf('<h1 class="route-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
		
		<small>Grade: <?php the_terms( $post->ID, 'grade', '', ', ', '' ); ?> | Height: <?php the_terms( $post->ID, 'distance', '', ', ', '' ); ?>m</small>
	</header>
	
	<div class="route_content">
		
		<?php if( has_post_thumbnail() ): ?>
		
			<div class="col-xs-12 col-sm-4">
				<div class="thumbnail"><?php the_post_thumbnail('medium'); ?></div>
			</div>
			<div class="col-xs-12 col-sm-8">
				<?php the_excerpt(); ?>
			</div>
		
		<?php else: ?>
		
			<?php the_content() ?>
			
		
		<?php endif; ?>
	</div>

</article>