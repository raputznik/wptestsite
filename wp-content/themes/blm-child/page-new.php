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
	<?php $meta_quote = get_post_meta($post->ID, 'quotation', true); 
			if ($meta_quote) { echo "<p><strong>".$meta_quote."</strong></p>"; } 
			else { 
				echo "<p>No quote found.</p>"; } ?>
			</div>



			</div><!-- #main -->

<?php get_footer(); ?>