<?php get_header(); ?>

<div class="row">

<div class="col-xs-12">
		
		<div id="awesome-carousel" class="carousel slide" data-ride="carousel">
		
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		
	
	<?php 
	
		$args_cat = array(
			'include' => '7, 8, 9'
		);

		$categories = get_categories( $args_cat);

		$count = 0;
	
	foreach ($categories as $category):

			$args = array(
			'type' => 'post',
			'posts_per_page' => 1,	
			'category__in' => $category ->term_id,
			'category__not_in' => array(10),
		);

	$lastBolg = new WP_Query($args);

		if($lastBolg-> have_posts()):

		while ($lastBolg -> have_posts()) : $lastBolg ->the_post(); ?>

					<div class="item <?php if ($count == 0): echo 'active'; endif; ?>">
						<?php the_post_thumbnail('thumbnail' ); ?>
						<div class="carousel-caption">
						    <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink( ) ) ),'</a></h1>'); ?>
						    <small><?php the_category( ); ?></small>
  						</div>
					</div>
			
							
		<?php endwhile;

	endif;

		wp_reset_postdata();

    	$count++;

	endforeach;  

	?> 

</div>

	<!-- Controls -->
		  <a class="left carousel-control" href="#awesome-carousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#awesome-carousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
      
	</div>	
</div>
</div>


	<hr style="height:30px">

<div  class="row">
	<div class="col-xs-12 col-sm-8">

	<?php 
	
	$args = array(
		'type' => 'post',
		'posts_per_page' => -1,
		'cat' => 8
	);

	$lastBolg = new WP_Query($args);

		if($lastBolg-> have_posts()):

		while ($lastBolg -> have_posts()) : $lastBolg ->the_post(); ?>

			<?php get_template_part('content', get_post_format( )); ?>	

		<?php endwhile;

	endif;

	wp_reset_postdata();

	?>
	</div>


	 <div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div> 

</div>

<?php get_footer(); ?>