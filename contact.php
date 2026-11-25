<?php
ob_start();
?>

<!-- ================= PAGE CONTENT ================= -->
<main id="main-content">

    <!-- ================= 1. PAGE BREADCRUMB BANNER ================= -->
    <section class="page-banner" aria-label="Page header">
        <div class="container">
            <div class="page-banner-content">
                <nav class="page-breadcrumb" aria-label="Breadcrumb">
                    <a href="index.php"><i class="bi bi-house-door-fill" aria-hidden="true"></i> Home</a>
                    <span class="sep" aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                    <span class="current" aria-current="page">Contact Us</span>
                </nav>

                <h1 class="page-banner-title">
                    Contact <span>Dr. Ashish Kumar Goyal</span>
                </h1>
                <p class="page-banner-sub">
                    Schedule an appointment, request second opinions, or visit our orthopaedic clinic in Vadodara.
                </p>
            </div>
        </div>
    </section>

    <!-- ================= 2. QUICK CONTACT INFO CARDS ================= -->
    <section class="contact-section">
        <div class="container">

            <div class="section-heading text-center">
                <span class="section-tag">
                    <i class="bi bi-geo-alt-fill" aria-hidden="true"></i> REACH OUR CLINIC
                </span>
                <h2>Get in Touch with <span>Our Orthopaedic Team</span></h2>
                <p>We are here to answer your questions, evaluate MRI reports, and schedule your consultation without delay.</p>
            </div>

            <div class="row g-4 mb-5">

                <!-- 1. Clinic Address -->
                <div class="col-lg-3 col-md-6">
                    <div class="contact-info-card">
                        <div class="contact-info-icon" aria-hidden="true">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <h3>Clinic Location</h3>
                        <p>2nd Floor, Ganesh Plaza, Above Ganesh Hyundai Showroom, Near Maneja Crossing Road, JD Nagar, Makarpura, Vadodara, Gujarat – 390013</p>
                        <a href="https://maps.google.com/?q=Makarpura+Vadodara+Ganesh+Plaza" target="_blank" rel="noopener noreferrer" class="contact-info-link">
                            View on Google Maps <i class="bi bi-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <!-- 2. Phone Helpline -->
                <div class="col-lg-3 col-md-6">
                    <div class="contact-info-card">
                        <div class="contact-info-icon" aria-hidden="true">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <h3>Phone Helpline</h3>
                        <p>Call our OPD desk directly for appointment scheduling, general inquiries, or emergency fracture guidance.</p>
                        <a href="tel:8347378713" class="contact-info-link">
                            +91 8347378713 <i class="bi bi-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <!-- 3. Email Us -->
                
<div class="col-lg-3 col-md-6">
    <div class="contact-info-card">
        <div class="contact-info-icon" aria-hidden="true">
            <i class="bi bi-envelope-fill"></i>
        </div>

        <h3>Email Us</h3>

        <p>Send your X-rays, MRI reports, medical queries, or appointment requests directly to our medical team via email.</p>

        <a href="mailto:drgoyal41@gmail.com" class="contact-info-link">
            drgoyal41@gmail.com <i class="bi bi-arrow-right" aria-hidden="true"></i>
        </a>
    </div>
</div>


                <!-- 4. Consulting Timings -->
                <div class="col-lg-3 col-md-6">
                    <div class="contact-info-card">
                        <div class="contact-info-icon" aria-hidden="true">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <h3>OPD Hours</h3>
                        <p>Monday to Saturday: 9:00 AM – 11:30 PM.<br>Sunday: Available for emergencies and prior appointments.</p>
                        <a href="#contactForm" class="contact-info-link">
                            Request Time Slot <i class="bi bi-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

            </div>

            <!-- ================= 3. FORM & MAP ROW ================= -->
            <div class="row g-4 g-lg-5 align-items-stretch" id="contactForm">

                <!-- Left: Interactive Appointment Form -->
                <div class="col-lg-7">
                    <div class="contact-form-card h-100">
                        <h3 class="contact-form-title">
                            Send a Message or <span>Book Appointment</span>
                        </h3>
                        <p class="contact-form-desc">
                            Fill out the form below with your details and clinical concern. Our OPD coordinator will confirm your consultation slot promptly.
                        </p>

                        <form id="contactPageForm">
                            <div class="row g-3">

                                <div class="col-md-6">
                                    <label for="contactName" class="form-label fw-bold text-dark small">Full Name *</label>
                                    <div class="input-group-custom">
                                        <i class="bi bi-person" aria-hidden="true"></i>
                                        <input type="text" id="contactName" name="name" class="form-control"
                                            placeholder="Enter your full name" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="contactPhone" class="form-label fw-bold text-dark small">Phone Number *</label>
                                    <div class="input-group-custom">
                                        <i class="bi bi-telephone" aria-hidden="true"></i>
                                        <input type="tel" id="contactPhone" name="phone" class="form-control"
                                            placeholder="10-digit mobile number" pattern="[0-9+\-\s]{10,15}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="contactEmail" class="form-label fw-bold text-dark small">Email Address</label>
                                    <div class="input-group-custom">
                                        <i class="bi bi-envelope" aria-hidden="true"></i>
                                        <input type="email" id="contactEmail" name="email" class="form-control"
                                            placeholder="name@example.com">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="contactTreatment" class="form-label fw-bold text-dark small">Select Concern / Treatment *</label>
                                    <div class="input-group-custom">
                                        <i class="bi bi-heart-pulse" aria-hidden="true"></i>
                                        <select id="contactTreatment" name="treatment" class="form-select" required>
                                            <option value="">Choose Treatment</option>
                                            <option>Robotic Knee Replacement</option>
                                            <option>Total Hip Replacement (THR)</option>
                                            <option>Revision &amp; DAA Hip Replacement</option>
                                            <option>Complex Trauma &amp; Revision</option>
                                            <option>ACL &amp; Sports Injury Arthroscopy</option>
                                            <option>Foot &amp; Ankle Surgery</option>
                                            <option>General Orthopaedic Consultation</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="contactDate" class="form-label fw-bold text-dark small">Preferred Date *</label>
                                    <div class="input-group-custom">
                                        <i class="bi bi-calendar-event" aria-hidden="true"></i>
                                        <input type="date" id="contactDate" name="date" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="contactTime" class="form-label fw-bold text-dark small">Preferred Time Slot</label>
                                    <div class="input-group-custom">
                                        <i class="bi bi-clock" aria-hidden="true"></i>
                                        <select id="contactTime" name="time" class="form-select">
                                            <option value="">Any Time Slot</option>
                                            <option>Morning (9:00 AM – 1:00 PM)</option>
                                            <option>Afternoon (1:00 PM – 5:00 PM)</option>
                                            <option>Evening (5:00 PM – 8:00 PM)</option>
                                            <option>Night (8:00 PM – 11:30 PM)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="contactMessage" class="form-label fw-bold text-dark small">Message / Symptoms (Optional)</label>
                                    <div class="input-group-custom textarea-group">
                                        <i class="bi bi-chat-left-text" aria-hidden="true"></i>
                                        <textarea id="contactMessage" name="message" class="form-control" rows="3"
                                            placeholder="Briefly describe your joint pain, injury, or prior surgery history..."></textarea>
                                    </div>
                                </div>

                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-cta w-100 py-3 d-inline-flex align-items-center justify-content-center gap-2"
                                        style="font-size: 16px; border-radius: 10px;">
                                        <i class="bi bi-whatsapp" aria-hidden="true"></i> Submit Appointment Request on WhatsApp
                                    </button>
                                    <small class="text-muted d-block text-center mt-2">
                                        <i class="bi bi-shield-check text-success" aria-hidden="true"></i> Confidential &amp; direct routing to Dr. Ashish Goyal's clinical desk.
                                    </small>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                <!-- Right: Google Map & Operating Hours Box -->
                <div class="col-lg-5">
                    <div class="d-flex flex-column h-100 justify-content-between">

                        <!-- Google Map -->
                        <div class="contact-map-wrap">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118151.78926955745!2d73.10926715018693!3d22.26871583008922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc63198e945c5%3A0xc07823e20ec42ef3!2sMakarpura%2C%20Vadodara%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin"
                                title="Dr. Ashish Kumar Goyal Orthopaedic Clinic Location in Makarpura Vadodara"
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>

                        <!-- Clinic Hours & Features Box -->
                        <div class="contact-hours-box">
                            <h4><i class="bi bi-hospital" aria-hidden="true"></i> OPD &amp; Emergency Schedule</h4>
                            <ul class="contact-hours-list">
                                <li>
                                    <span>Monday – Saturday:</span>
                                    <strong>9:00 AM – 11:30 PM</strong>
                                </li>
                                <li>
                                    <span>Sunday:</span>
                                    <strong>Emergency / Prior Booking</strong>
                                </li>
                                <li>
                                    <span>24/7 Trauma Emergency:</span>
                                    <strong class="text-warning">Always Open</strong>
                                </li>
                                <li>
                                    <span>Cashless Mediclaim Desk:</span>
                                    <strong>All Major TPAs Covered</strong>
                                </li>
                            </ul>

                            <div class="mt-3 pt-3 border-top border-secondary d-flex align-items-center justify-content-between">
                                <div>
                                    <small class="text-white-50 d-block">Helpline Number:</small>
                                    <a href="tel:8347378713" class="text-white fw-bold text-decoration-none">
                                        <i class="bi bi-telephone-fill text-warning me-1"></i> +91 8347378713
                                    </a>
                                </div>
                                <a href="https://wa.me/918347378713" target="_blank" rel="noopener noreferrer"
                                    class="btn btn-sm btn-outline-light rounded-pill px-3">
                                    <i class="bi bi-whatsapp text-success me-1"></i> WhatsApp
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactPageForm');
    if (!form) return;

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const name = document.getElementById('contactName').value.trim();
        const phone = document.getElementById('contactPhone').value.trim();
        const email = document.getElementById('contactEmail').value.trim();
        const treatment = document.getElementById('contactTreatment').value;
        const date = document.getElementById('contactDate').value;
        const time = document.getElementById('contactTime').value;
        const message = document.getElementById('contactMessage').value.trim();

        let text = `*New Appointment Request - Dr. Ashish Kumar Goyal Website*%0A%0A`;
        text += `*Patient Name:* ${encodeURIComponent(name)}%0A`;
        text += `*Phone:* ${encodeURIComponent(phone)}%0A`;
        if (email) text += `*Email:* ${encodeURIComponent(email)}%0A`;
        text += `*Treatment/Concern:* ${encodeURIComponent(treatment)}%0A`;
        text += `*Preferred Date:* ${encodeURIComponent(date)}%0A`;
        if (time) text += `*Preferred Time:* ${encodeURIComponent(time)}%0A`;
        if (message) text += `*Message:* ${encodeURIComponent(message)}%0A`;

        const waUrl = `https://wa.me/918347378713?text=${text}`;
        window.open(waUrl, '_blank');
    });
});
</script>

<?php
$content = ob_get_clean();
require 'layout.php';
?>
