<?php
/**
 * The blog index template
 */

get_header();
?>

<main class="site-main">
    <section class="page-header" style="background: #2c3e50; color: #fff; padding: 4rem 0; text-align: center;">
        <div class="container">
            <h1>Latest Updates</h1>
            <p>Health tips and news from Roshni Health Care</p>
        </div>
    </section>

    <section class="blog-posts">
        <div class="container">
            <div class="footer-grid">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        ?>
                        <article class="card" style="background: #fff; padding: 2rem; border-radius: 15px;">
                            <h2 style="font-size: 1.5rem;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div style="margin: 1rem 0; color: #666; font-size: 0.9rem;">
                                Published on <?php echo get_the_date(); ?>
                            </div>
                            <div class="excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary" style="margin-top: 1rem; font-size: 0.9rem; padding: 8px 16px;">Read More</a>
                        </article>
                        <?php
                    endwhile;
                else :
                    echo '<p>No posts found.</p>';
                endif;
                ?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
