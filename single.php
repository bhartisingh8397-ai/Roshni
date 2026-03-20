<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <section class="page-header" style="background: #2c3e50; color: #fff; padding: 4rem 0; text-align: center;">
                <div class="container">
                    <h1><?php the_title(); ?></h1>
                    <div style="margin-top: 1rem; opacity: 0.8;">
                        By <?php the_author(); ?> | <?php echo get_the_date(); ?>
                    </div>
                </div>
            </section>

            <section class="post-content" style="padding: 4rem 0;">
                <div class="container" style="max-width: 800px;">
                    <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail('large', array('style' => 'width: 100%; height: auto; border-radius: 15px; margin-bottom: 2rem;'));
                    }
                    the_content();
                    ?>
                </div>
            </article>

            <section class="post-navigation" style="padding-bottom: 4rem;">
                <div class="container" style="max-width: 800px; display: flex; justify-content: space-between; border-top: 1px solid #ddd; padding-top: 2rem;">
                    <div><?php previous_post_link('%link', '← Previous Post'); ?></div>
                    <div><?php next_post_link('%link', 'Next Post →'); ?></div>
                </div>
            </section>
        <?php
    endwhile;
    ?>
</main>

<?php
get_footer();
