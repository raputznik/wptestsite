<?php

/*Template Name: Page New*/

get_header(); ?>

<div id="main">
	
	<section id="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h1><?php the_title(); ?></h1>
			
			<?php the_content(); ?>
			
		</article>
		
		<?php endwhile; endif; ?>
		
	</section><!-- #content -->

<!-- <?php get_sidebar(); ?>-->



<div id="quote_thing">

	<!-- old quote -->
	

<!-- Adding testimonials to sidebar -->
<?php 

	$args = array(
		'post_type' => 'testimonial',
		'orderby' => 'rand', 'posts_per_page' => '1'
	);
	$query = new WP_Query( $args );

	while($query->have_posts()): $query->the_post();
		echo "<h2>";
		echo the_title();
		echo "</h2>";
		echo "<p>";
		echo get_the_content();
		echo "</p>";
	endwhile;

 ?>

</div>



		</div><!-- #main -->

<?php get_footer(); ?>





