<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
        <?php get_sidebar(); ?>
	</main>



<?php get_footer(); ?>
