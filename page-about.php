<?php
/**
 * Template Name: About Page
 */

get_header();
?>

<main class="site-main">
    <section class="page-header" style="background: linear-gradient(rgba(26, 35, 126, 0.9), rgba(26, 35, 126, 0.9)), url('<?php echo get_template_directory_uri(); ?>/images/hero-bg.png'); background-size: cover; background-position: center; color: #fff; padding: 6rem 0; text-align: center;">
        <div class="container">
            <h1 style="font-size: 3.5rem; font-family: 'Playfair Display', serif;">About Roshni</h1>
        </div>
    </section>

    <section class="about-content">
        <div class="container">
            <div class="footer-grid" style="grid-template-columns: repeat(auto-fit, minmax(450px, 1fr)); gap: 3rem; margin-bottom: 4rem;">
                <div class="card" style="padding: 3rem; border-radius: 20px;">
                    <h2 style="color: var(--primary); font-size: 2rem; margin-bottom: 1.5rem;">Our Mission</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8;">At Roshni Health Care, we are dedicated to "Lighting the Path to Better Health". Our mission is to combine specialized education for children with advanced dental and skin care, providing a holistic approach to family wellness.</p>
                </div>
                <div class="card" style="padding: 3rem; border-radius: 20px;">
                    <h2 style="color: var(--secondary); font-size: 2rem; margin-bottom: 1.5rem;">Our Vision</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8;">To be a leading healthcare provider known for excellence, compassion, and innovation in special education and medical services, empowering every individual to lead a healthier and brighter life.</p>
                </div>
            </div>

            <div class="glass-panel" style="padding: 4rem; text-align: center;">
                <h3 style="color: var(--primary); font-size: 2.5rem; margin-bottom: 2rem;">Why Choose Us?</h3>
                <div class="footer-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); text-align: left; gap: 2rem;">
                    <div>✅ <strong>Highly Trained Therapists</strong>: Compassionate experts in behavior and speech.</div>
                    <div>✅ <strong>Advanced Dental Care</strong>: Using the latest tech for pain-free treatments.</div>
                    <div>✅ <strong>Holistic Approach</strong>: Combining education and medicine for full health.</div>
                    <div>✅ <strong>Central Gohana Hub</strong>: Easily accessible for all local families.</div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
