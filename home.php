<?php
/**
 * The blog index template
 */

get_header();
?>

<main class="site-main">
    <!-- Blog Hero Section -->
    <section class="hero blog-hero" style="background-image: linear-gradient(rgba(26, 54, 93, 0.9), rgba(26, 54, 93, 0.9)), url('<?php echo get_template_directory_uri(); ?>/images/hero-bg.png');">
        <div class="container">
            <h1>Insights & Wellness</h1>
            <p>Expert advice, health tips, and the latest news from Roshni Health Care.</p>
        </div>
        <div class="hero-overlay"></div>
    </section>

    <!-- Blog Posts Grid -->
    <section class="blog-posts">
        <div class="container">
            <div class="blog-grid">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        ?>
                        <article class="card blog-card">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="post-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium_large'); ?>
                                    </a>
                                    <div class="post-category">
                                        <?php 
                                        $categories = get_the_category();
                                        if ( ! empty( $categories ) ) {
                                            echo esc_html( $categories[0]->name );
                                        }
                                        ?>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="post-thumbnail-placeholder">
                                    <i class="fas fa-image"></i>
                                </div>
                            <?php endif; ?>

                            <div class="card-content">
                                <div class="post-meta">
                                    <span><i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
                                    <span><i class="far fa-user"></i> <?php the_author(); ?></span>
                                </div>
                                
                                <h2>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                
                                <div class="excerpt">
                                    <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>
                                </div>
                                
                                <div class="read-more-wrapper">
                                    <a href="<?php the_permalink(); ?>" class="read-more-link">
                                        Read Full Story <span>&rarr;</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                        <?php
                    endwhile;
                else :
                    ?>
                    <div class="no-posts">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/no-results.png" alt="No posts">
                        <h3>No posts found yet.</h3>
                        <p>We are currently writing new articles for you. Please check back soon!</p>
                    </div>
                    <?php
                endif;
                ?>
            </div>

            <!-- Pagination -->
            <div class="pagination-wrapper">
                <?php
                echo paginate_links( array(
                    'prev_text' => '&larr; Previous',
                    'next_text' => 'Next &rarr;',
                    'type'      => 'list',
                ) );
                ?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
