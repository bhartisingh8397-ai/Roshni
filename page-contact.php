<?php
/**
 * Template Name: Contact Page
 */

get_header();
?>

<main class="site-main">
    <section class="page-header" style="background: var(--accent); color: #fff; padding: 4rem 0; text-align: center;">
        <div class="container">
            <h1>Contact Us</h1>
        </div>
    </section>

    <section class="contact-section">
        <div class="container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem;">
            <div class="contact-info">
                <h2 style="color: var(--primary);">Get in Touch</h2>
                <p>We are here to help you. Visit us at our centre or reach out via phone.</p>
                
                <div style="margin-top: 2rem;">
                    <div style="margin-bottom: 1.5rem;">
                        <strong>📍 Address:</strong><br>
                        Sonepat Road, Gohana
                    </div>
                    <div style="margin-bottom: 1.5rem;">
                        <strong>📞 Phone:</strong><br>
                        <a href="tel:9588536580" style="color: var(--primary); font-size: 1.2rem;">9588536580</a>
                    </div>
                    <div>
                        <strong>⏰ Hours:</strong><br>
                        Mon - Sat: 9:00 AM - 7:00 PM
                    </div>
                </div>
            </div>
            <div class="contact-form-placeholder" style="background: #fff; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow);">
                <h3 style="margin-bottom: 1rem;">Send a Message</h3>
                <p style="color: #666;">(Form integration with Contact Form 7 or WPForms ready)</p>
                <div style="margin-top: 1rem;">
                    <input type="text" placeholder="Your Name" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 5px;">
                    <input type="email" placeholder="Your Email" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 5px;">
                    <textarea placeholder="Your Message" rows="5" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;"></textarea>
                    <button class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Send Now</button>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
