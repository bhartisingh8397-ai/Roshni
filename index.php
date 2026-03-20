<?php
/**
 * The main template file
 */

get_header();

if ( is_front_page() ) :
    ?>
    <main class="site-main">
        <!-- Hero Section -->
        <section class="hero" style="background: linear-gradient(135deg, var(--primary) 0%, #004d70 100%); color: #fff; text-align: center; padding: 8rem 0;">
            <div class="container">
                <h1 style="font-size: 4rem; margin-bottom: 1rem;">Roshni Health Care</h1>
                <p style="font-size: 1.5rem; opacity: 0.9;">Lighting the Path to Better Health</p>
                <div style="margin-top: 2rem;">
                    <a href="#services" class="btn btn-primary" style="background: var(--accent); border: none;">Explore Services</a>
                    <a href="#contact" class="btn btn-primary" style="background: transparent; border: 2px solid #fff; margin-left: 1rem;">Contact Us</a>
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

        <!-- Contact CTA -->
        <section id="contact" style="background: var(--primary); color: #fff; text-align: center;">
            <div class="container">
                <h2>Ready to Start Your Journey to Better Health?</h2>
                <p style="font-size: 1.2rem; margin-bottom: 2rem;">Visit us or call today to schedule a consultation.</p>
                <div style="font-size: 2rem; font-weight: 700; margin-bottom: 1rem;">
                    <a href="tel:9588536580" style="color: var(--sun);">9588536580</a>
                </div>
                <p>Sonepat Road, Gohana</p>
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
