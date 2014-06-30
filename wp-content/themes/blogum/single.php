<?php get_header(); ?>

<div id="content">

    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <div <?php post_class('single clear'); ?> id="post_<?php the_ID(); ?>">
            <div class="post_meta">
                <div class="post_data">
                    <div class="post_author">by: <?php the_author_link() ?></div>
                    <div class="post_date"><?php the_time(__('d-m-Y')) ?></div>
                    <div class="post_categories"><?php the_category(', '); ?></div>
                    <div class="post_share">
                        <a href="javascript: void(0);" class="sharethis">Share</a>
                        <ul class="sharelist">
                            <li class="share_fb"><a href="http://facebook.com/share.php?u=<?php the_permalink() ?>&amp;t=<?php echo urlencode(the_title('','', false)) ?>" target="_blank">Facebook</a>
            </li>
                            <li class="share_twitter"><a href="http://twitter.com/home?status=<?php the_title(); ?> <?php echo getTinyUrl(get_permalink($post->ID)); ?>" target="_blank">Twitter</a></li>

                        </ul>
                    </div>
                    <?php edit_post_link( __( 'Edit' ), '<div class="post_edit">', '</div>' ); ?>
                </div>
            </div>
            <div class="post_content">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <div class="post_tags clear">
                    <?php
                        if (get_the_tag_list()) {
                            echo get_the_tag_list('<ul><li>','</li><li>','</li></ul>');
                        }
                    ?>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
