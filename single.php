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
            <!-- Post Hero Section -->
            <section class="post-hero" style="background: linear-gradient(rgba(26, 54, 93, 0.9), rgba(26, 54, 93, 0.9)), url('<?php echo get_template_directory_uri(); ?>/images/hero-bg.png'); background-size: cover; background-position: center; color: #fff; text-align: center; padding: 6rem 0; position: relative;">
                <div class="container" style="position: relative; z-index: 2;">
                    <div class="post-category" style="background: var(--secondary); color: #fff; padding: 5px 15px; border-radius: 30px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 1.5rem;">
                        <?php the_category(', '); ?>
                    </div>
                    <h1 style="font-size: 3rem; line-height: 1.2; margin-bottom: 1.5rem; max-width: 900px; margin-left: auto; margin-right: auto; font-family: 'Playfair Display', serif;">
                        <?php the_title(); ?>
                    </h1>
                    <div class="post-meta" style="font-size: 1rem; opacity: 0.9; display: flex; justify-content: center; gap: 2rem; align-items: center;">
                        <span><i class="far fa-user"></i> By <?php the_author(); ?></span>
                        <span><i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
                        <span><i class="far fa-comments"></i> <?php comments_number('No Comments', '1 Comment', '% Comments'); ?></span>
                    </div>
                </div>
            </section>

            <!-- Post Content -->
            <section class="post-content-area" style="padding: 5rem 0; background: #fff;">
                <div class="container" style="max-width: 900px;">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="featured-image" style="margin-bottom: 3rem; border-radius: 20px; overflow: hidden; box-shadow: var(--shadow-medium);">
                            <?php the_post_thumbnail('full', array('style' => 'width: 100%; height: auto; display: block;')); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content" style="font-size: 1.1rem; line-height: 1.8; color: #2d3748;">
                        <?php the_content(); ?>
                    </div>

                    <div class="post-tags" style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid #e2e8f0;">
                        <?php the_tags('<span class="tag-label">Tags:</span> ', ', ', ''); ?>
                    </div>
                </div>
            </section>

            <!-- Navigation -->
            <section class="post-navigation-premium" style="padding-bottom: 6rem; background: #fff;">
                <div class="container" style="max-width: 900px;">
                    <div class="nav-links" style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; padding: 2rem; background: var(--bg-light); border-radius: 20px;">
                        <div class="nav-prev" style="text-align: left;">
                            <?php 
                            $prev_post = get_previous_post();
                            if( !empty( $prev_post ) ): ?>
                                <span style="font-size: 0.85rem; color: #718096; text-transform: uppercase; font-weight: 700; display: block; margin-bottom: 0.5rem;">← Previous Article</span>
                                <a href="<?php echo get_permalink( $prev_post->ID ); ?>" style="font-weight: 700; color: var(--primary); font-size: 1.1rem;"><?php echo $prev_post->post_title; ?></a>
                            <?php endif; ?>
                        </div>
                        <div class="nav-next" style="text-align: right;">
                            <?php 
                            $next_post = get_next_post();
                            if( !empty( $next_post ) ): ?>
                                <span style="font-size: 0.85rem; color: #718096; text-transform: uppercase; font-weight: 700; display: block; margin-bottom: 0.5rem;">Next Article →</span>
                                <a href="<?php echo get_permalink( $next_post->ID ); ?>" style="font-weight: 700; color: var(--primary); font-size: 1.1rem;"><?php echo $next_post->post_title; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        </article>
        <?php
    endwhile;
    ?>
</main>

<style>
    .entry-content p { margin-bottom: 1.5rem; }
    .entry-content h2, .entry-content h3 { color: var(--primary); margin: 2.5rem 0 1.5rem; }
    .tag-label { font-weight: 700; color: var(--primary); }
    .post-tags a {
        display: inline-block;
        background: #edf2f7;
        color: #4a5568;
        padding: 5px 12px;
        border-radius: 5px;
        font-size: 0.9rem;
        margin-right: 0.5rem;
        transition: var(--transition);
    }
    .post-tags a:hover {
        background: var(--primary);
        color: #fff;
    }
    .nav-links a:hover {
        color: var(--secondary) !important;
    }
</style>

<?php
get_footer();
