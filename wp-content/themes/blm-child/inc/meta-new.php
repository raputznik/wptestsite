<?php

/*Template Name: Meta New*/

?>

<div class="entrymeta">
	
	<p>Filed in: <?php the_category(', ');?> | <?php echo the_tags(); ?> | <?php comments_popup_link( 'No Comments &#187;', '1 Comment &#187;', '% Comments &#187;' ); ?></p>
</div>