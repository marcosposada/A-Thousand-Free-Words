<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail
		<?php //if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php// the_permalink(); ?>" title="<?php //the_title(); ?>">
				<?php //the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php //endif; ?>
		 /post thumbnail -->


		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

        <a class="read-more" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            Read more
        </a>

		<?php edit_post_link(); ?>

	</article>
	<!-- /article -->
    <div class="title">
        <h2>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </h2>
        <?php the_category(); ?>
    </div>
    <div class="clearfix"></div>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
