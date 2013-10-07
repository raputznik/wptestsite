<?php

/* Template Name: Front Page */



get_header(); ?>

<div id="main">

	<?php the_post_thumbnail('full'); ?>


<div class="home-wrap">	

	<section id="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h1><?php echo get_the_title($post = 7); ?> </h1>
			
<!-- 			<?php the_content(); ?> -->			

			<?php
				$new_query_1 = new WP_Query();
				$new_query_1->query(array('page_id' => 7));
				while ($new_query_1->have_posts()) :
				$new_query_1->the_post();
				the_content();
				endwhile;
				wp_reset_query();
			?>

		</article>
		
		<?php endwhile; endif; ?>
		
	</section><!-- #content -->

	<section id="content2">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h1><?php echo get_the_title($post = 61); ?> </h1>
			
<!-- 			<?php the_content(); ?> -->			

			<?php
				$new_query_1 = new WP_Query();
				$new_query_1->query(array('page_id' => 61));
				while ($new_query_1->have_posts()) :
				$new_query_1->the_post();
				the_content();
				endwhile;
				wp_reset_query();
			?>

		</article>
		
		<?php endwhile; endif; ?>
		
	</section><!-- #content -->
</div>


</div><!-- #main -->

<?php get_footer(); ?>