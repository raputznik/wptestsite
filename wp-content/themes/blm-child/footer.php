<?php
/**
 * The template for displaying the footer.
 * 
 * @package blm_basic
 */
?>
	<footer>
<div class="footer-wrap">
		<div class="footer-col1">	
			<h1>Latest Blog Posts</h1>
			<div class="line-separator"></div>
			<?php 
				
					$args = array(
						'post_type' => 'post',
						'orderby' => 'date', 'posts_per_page' => '5'
					);
					$query = new WP_Query( $args );
				
					while($query->have_posts()): $query->the_post();
						echo "<ul>";
						echo "<li>";
						echo the_title();
						echo "</li>";
						echo "</ul>";
					
					endwhile;
				
				 ?>
		</div>		


		<div class="footer-col2">	
			<h1>Contact Info</h1>
			<div class="line-separator"></div>
			<p>
				Jane Doe<br>
				123 Street Avenue <br>
				City, Province <br>
				Country <br>


			</p>
			<br>
			<p>
				Send us an email to <a href="mailto:mail@domain.com?Subject=Hello%20again" target="_top">mail@domain.com</a>
			</p>
		</div>		

		<div class="footer-col3">	
			<h1>Latest Tweet</h1>
			<div class="line-separator"></div>
			<p>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nib

			</p>
			
					</div>		



</div>
<!-- 		<p>&copy; <?php echo date( 'Y' ); ?> Copyright Info <? ?></p>
 -->	</footer>
	
</div><!-- end of wrapper -->
<?php wp_footer(); ?>
</body>
</html>