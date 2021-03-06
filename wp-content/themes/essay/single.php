<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                <div class="the-image">
			        <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                    <?php the_post_thumbnail_caption(); ?>
                </div>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

            <span class="author"><?php _e( 'By:', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>



			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>



			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>





			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>



		</article>
		<!-- /article -->
        <div class="comments-wrapper">
            <?php comments_template(); ?>
        </div>

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
        <?php get_sidebar(); ?>
	</main>



<?php get_footer(); ?>
