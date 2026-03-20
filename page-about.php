<?php
/**
 * Template Name: About Page
 */

get_header();
?>

<main class="site-main">
    <section class="page-header" style="background: var(--primary); color: #fff; padding: 4rem 0; text-align: center;">
        <div class="container">
            <h1>About Us</h1>
        </div>
    </section>

    <section class="about-content">
        <div class="container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
            <div class="about-text">
                <h2 style="color: var(--primary);">Our Mission</h2>
                <p>At Roshni Health Care, we are dedicated to "Lighting the Path to Better Health". Our facility combines specialized education for children with advanced dental and skin care, providing a holistic approach to family wellness.</p>
                <p style="margin-top: 1rem;">With a team of highly trained therapists and medical professionals like Dr. Amanpreet Chahal, we ensure that every patient receives compassionate and skilled care tailored to their unique needs.</p>
            </div>
            <div class="about-info" style="background: #fff; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow);">
                <h3 style="color: var(--secondary);">Why Choose Us?</h3>
                <ul style="padding-left: 0; list-style: none;">
                    <li style="margin-bottom: 1rem;">✅ Highly Trained Therapists</li>
                    <li style="margin-bottom: 1rem;">✅ Compassionate Care</li>
                    <li style="margin-bottom: 1rem;">✅ Specialized Special Education</li>
                    <li style="margin-bottom: 1rem;">✅ Advanced Dental Technology</li>
                    <li style="margin-bottom: 1rem;">✅ Central Location in Gohana</li>
                </ul>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
