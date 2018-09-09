<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wpexpert
 */

?>

<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wpexpert
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class('featured-post clearfix'); ?>>

	
<div class="thumb">
<a href="<?php the_permalink(); ?>">
					
					<?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail( 'post-sticky', array( 'class'  => '' ) );
                 } 
		?>
</a>
</div>

			<div class="content">
					<div>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div class="meta">
							
								<?php  wpexpert_posted_by();?>  	<?php the_date('F j, Y'); ?>
								</div>
							<div class="summary">
									<?php the_excerpt(); ?>
									<p><a href="<?php echo get_permalink(); ?>">Read more ></a></p>
							</div>
					</div>
			</div>
	</div>
	<!-- .entry-content -->
	<footer class="entry-footer">
	</footer>
	<!-- .entry-footer -->

</article>
