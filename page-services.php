<?php
/**
 * Template Name: Services Page
 */

get_header();
?>

<main class="site-main">
    <section class="page-header" style="background: var(--secondary); color: #fff; padding: 4rem 0; text-align: center;">
        <div class="container">
            <h1>Our Services</h1>
        </div>
    </section>

    <section class="services-list">
        <div class="container">
            <div class="footer-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <!-- Special Education -->
                <div class="card" style="background: #fff; padding: 2rem; border-radius: 15px;">
                    <h3 style="color: var(--primary);">Special Education</h3>
                    <p>Support for ASD, ADHD, Behaviour Management, and more.</p>
                </div>
                <!-- Therapies -->
                <div class="card" style="background: #fff; padding: 2rem; border-radius: 15px;">
                    <h3 style="color: var(--secondary);">Therapies</h3>
                    <p>Speech, OT, ABA, and Physical Therapy for all ages.</p>
                </div>
                <!-- Dental -->
                <div class="card" style="background: #fff; padding: 2rem; border-radius: 15px;">
                    <h3 style="color: var(--accent);">Dental Care</h3>
                    <p>RCT, Implants, Dentures, and Cosmetic Dentistry.</p>
                </div>
                <!-- Skin & Hair -->
                <div class="card" style="background: #fff; padding: 2rem; border-radius: 15px;">
                    <h3 style="color: var(--sun);">Skin & Hair</h3>
                    <p>Laser treatments, Acne care, and Hair restoration.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
