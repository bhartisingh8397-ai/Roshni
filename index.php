<?php
/**
 * The main template file
 */

get_header();

if ( is_front_page() ) :
    ?>
    <main class="site-main">
        <!-- Hero Section -->
        <section class="hero" style="background: linear-gradient(rgba(26, 54, 93, 0.85), rgba(26, 54, 93, 0.85)), url('<?php echo get_template_directory_uri(); ?>/images/hero-bg.png'); background-size: cover; background-position: center; color: #fff; text-align: center; padding: 12rem 0; position: relative;">
            <div class="container" style="position: relative; z-index: 2;">
                <h1 style="font-size: 4.5rem; margin-bottom: 2rem; font-family: 'Playfair Display', serif;">Roshni Health Care</h1>
                <p style="font-size: 1.6rem; opacity: 0.9; max-width: 800px; margin: 0 auto;">Lighting the Path to Better Health with Compassion & Care</p>
                <div style="margin-top: 3rem;">
                    <a href="#services" class="btn btn-primary" style="background: var(--secondary); border: none; padding: 15px 40px; font-size: 1.1rem;">Explore Services</a>
                    <a href="#contact" class="btn btn-primary" style="background: transparent; border: 2px solid #fff; margin-left: 1.5rem; padding: 15px 40px; font-size: 1.1rem;">Get in Touch</a>
                </div>
            </div>
        </section>

        <!-- Special Education Section -->
        <section id="special-education" style="background: #fff;">
            <div class="container">
                <div class="section-title">
                    <h2>Centre for Special Education</h2>
                    <p>Highly Trained Therapists Providing Compassionate and Skilled Care</p>
                </div>
                <div class="footer-grid" style="grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));">
                    <div class="card" style="background: var(--bg-light); padding: 2rem; border-radius: 15px; border-left: 5px solid var(--secondary);">
                        <h3>Areas We Work On</h3>
                        <ul style="padding-left: 0;">
                            <li>• Autism Spectrum Disorder (ASD)</li>
                            <li>• ADHD</li>
                            <li>• Behaviour Management</li>
                            <li>• Anger Management</li>
                            <li>• Mental Disabilities (M.R.)</li>
                            <li>• Speech and Language Delays</li>
                            <li>• Trouble in school or Home</li>
                        </ul>
                    </div>
                    <div class="card" style="background: var(--bg-light); padding: 2rem; border-radius: 15px; border-left: 5px solid var(--accent);">
                        <h3>Therapies We Provide</h3>
                        <ul style="padding-left: 0;">
                            <li>• Speech And Language Therapy</li>
                            <li>• Occupational Therapy (OT)</li>
                            <li>• Joint Attention Therapy</li>
                            <li>• Applied Behaviour Analysis (ABA)</li>
                            <li>• Physical Therapy</li>
                            <li>• Behaviour Management Therapy</li>
                            <li>• Social Skill Training</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Dental & Skin Section -->
        <section id="dental-skin" style="background: var(--bg-light);">
            <div class="container">
                <div class="section-title">
                    <h2>Specialized Medical Care</h2>
                    <p>Dental, Skin & Hair Treatments by Dr. Amanpreet Chahal (BDS, PGDCC)</p>
                </div>
                <div class="footer-grid">
                    <div class="card" style="background: #fff; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow);">
                        <h3 style="color: var(--primary);">Dental Care</h3>
                        <ul style="padding-left: 0;">
                            <li>• Dental X-Ray & OPG</li>
                            <li>• Bleaching (Teeth Whitening)</li>
                            <li>• Root Canal Treatment (RCT)</li>
                            <li>• Tooth Implants</li>
                            <li>• Complete Dentures</li>
                            <li>• Ultrasonic Scaling</li>
                        </ul>
                    </div>
                    <div class="card" style="background: #fff; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow);">
                        <h3 style="color: var(--secondary);">Skin & Hair</h3>
                        <ul style="padding-left: 0;">
                            <li>• Tattoo Removal</li>
                            <li>• Acne & Scar Treatment</li>
                            <li>• Hair Fall Treatment</li>
                            <li>• Botox & Fillers</li>
                            <li>• Permanent Hair Reduction</li>
                            <li>• Wrinkle Reduction</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Section -->
        <section id="latest-blog" style="background: #fff;">
            <div class="container">
                <div class="section-title">
                    <h2>Latest from Our Blog</h2>
                    <p>Health tips and news from Roshni Health Care</p>
                </div>
                <div class="footer-grid">
                    <?php
                    $latest_posts = get_posts( array(
                        'posts_per_page' => 3,
                        'post_status'    => 'publish',
                    ) );

                    if ( $latest_posts ) :
                        foreach ( $latest_posts as $post ) : setup_postdata( $post );
                            ?>
                            <article class="card" style="background: var(--bg-light); padding: 2rem; border-radius: 15px;">
                                <h3 style="font-size: 1.25rem;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div style="margin-bottom: 1rem; color: #666; font-size: 0.85rem;"><?php echo get_the_date(); ?></div>
                                <div class="excerpt" style="font-size: 0.9rem;">
                                    <?php the_excerpt(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" style="color: var(--primary); font-weight: 700; margin-top: 1rem; display: inline-block;">Read More →</a>
                            </article>
                            <?php
                        endforeach;
                        wp_reset_postdata();
                    else :
                        ?>
                        <div class="card" style="background: var(--bg-light); padding: 2rem; border-radius: 15px; grid-column: 1 / -1; text-align: center;">
                            <p>No blog posts found yet. Start sharing your health expertise!</p>
                        </div>
                        <?php
                    endif;
                    ?>
                </div>
                <div style="text-align: center; margin-top: 3rem;">
                    <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn btn-primary" style="background: transparent; border: 2px solid var(--primary); color: var(--primary);">View All Posts</a>
                </div>
            </div>
        </section>

        <!-- Get in Touch Section -->
        <section id="contact" style="background: var(--bg-light);">
            <div class="container">
                <div class="section-title">
                    <h2>Get in Touch</h2>
                    <p>Have questions? We're here to help you on your path to better health.</p>
                </div>
                <div class="footer-grid" style="grid-template-columns: 1fr 1.5fr; gap: 4rem;">
                    <div class="contact-sidebar">
                        <div class="card" style="background: #fff; padding: 2rem; border-radius: 15px; margin-bottom: 2rem;">
                            <h3 style="color: var(--primary);">Visit Us</h3>
                            <p>Sonepat Road, Gohana</p>
                        </div>
                        <div class="card" style="background: #fff; padding: 2rem; border-radius: 15px; margin-bottom: 2rem;">
                            <h3 style="color: var(--secondary);">Call Us</h3>
                            <p><a href="tel:9588536580" style="color: var(--sun); font-weight: 800; font-size: 1.5rem;">9588536580</a></p>
                        </div>
                    </div>
                    <div class="contact-form-card" style="background: #fff; padding: 3rem; border-radius: 20px; box-shadow: var(--shadow);">
                        <h3 style="margin-bottom: 1.5rem;">Send a Message</h3>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1rem;">
                            <input type="text" placeholder="Your Name" style="padding: 12px; border: 1px solid #ddd; border-radius: 8px;">
                            <input type="email" placeholder="Your Email" style="padding: 12px; border: 1px solid #ddd; border-radius: 8px;">
                        </div>
                        <input type="text" placeholder="Subject" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; margin-bottom: 1rem;">
                        <textarea placeholder="Your Message" rows="5" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; margin-bottom: 1rem;"></textarea>
                        <button class="btn btn-primary" style="width: 100%; font-size: 1rem; padding: 15px;">Send Message</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
else :
    ?>
    <main id="primary" class="site-main">
        <div class="container" style="padding: 4rem 0;">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    if ( is_singular() ) :
                        the_title('<h1>', '</h1>');
                        the_content();
                    else :
                        the_title('<h2><a href="' . get_permalink() . '">', '</a></h2>');
                        the_excerpt();
                    endif;
                endwhile;
            else :
                echo '<p>No content found</p>';
            endif;
            ?>
        </div>
    </main>
    <?php
endif;

get_footer();
