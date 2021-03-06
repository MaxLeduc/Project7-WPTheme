<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

		<article class="post-loop" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<section class="entry-content">
				<?php 
				 echo '<div class="featured-img" style="background:url(\'';
				 echo catch_that_image();
				 echo '\'); background-size:cover; background-position:center;">';
				 echo '<div class="triangle"></div><figcaption id="featured-img"></figcaption>';
				 echo '</div>';
				?>
				<aside class="post-preview">
					<h6><?php the_time('F j, Y');?></h6>
					<h2 class="entry-title">
		        		<a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
		          			<?php the_title(); ?>
		        		</a>
		      		</h2>
					<?php the_excerpt(); ?>
					<?php wp_link_pages( array(
	          			'before' => '<div class="page-link"> Pages:',
	          			'after' => '</div>'
	      			  )); ?>
	      			<?php $post_link = get_permalink($post)?>
	      			<div class="post-foot">
	      				<p><?php the_tags(); ?></p>
	      			</div>
	      		</aside>

		</article><!-- #post-## -->

		<?php comments_template( '', true ); ?>


<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
