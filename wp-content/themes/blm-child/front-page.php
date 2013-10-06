<?php

/* Template Name: Front Page */



get_header(); ?>

<div id="main">

	<?php the_post_thumbnail('full'); ?>


	<section id="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
<?php
$new_query_1 = new WP_Query();
$new_query_1->query(array('page_id' => 7));
while ($new_query_1->have_posts()) :
$new_query_1->the_post();
the_content("Read more");
endwhile;
wp_reset_query();
?>			
		<?php endwhile; endif; ?>
		
	</section><!-- #content -->



</div><!-- #main -->

<?php get_footer(); ?>