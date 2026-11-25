<?php
ob_start();
include 'include/data.php';

// Auto-sync knee asset to local directory if needed
$kneeAssetSrc = 'C:/Users/USWT/.gemini/antigravity/brain/3db154cb-1431-4ec4-a6bf-c83354cdcc32/knee_joint_anatomy_1794637046054.jpg';
$kneeAssetDst = __DIR__ . '/assets/images/knee-joint.jpg';
if (!file_exists($kneeAssetDst) && file_exists($kneeAssetSrc)) {
    @copy($kneeAssetSrc, $kneeAssetDst);
}
?>

<!-- ================= PAGE CONTENT ================= -->
<main id="main-content">

    <!-- ================= HERO CAROUSEL ================= -->
    <section class="hero" aria-label="Featured treatments">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5500"
            data-bs-pause="hover">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <!-- Slide 1: AI & Robotic Knee Joint Replacement -->
                <div class="carousel-item active">
                    <div class="hero-slide slide-1">
                        <div class="container">
                            <div class="row hero-row">
                                <div class="col-lg-7 col-md-7 hero-content-col order-1 order-md-1">
                                    <div class="hero-content">
                                        <div class="hero-eyebrow-tag">
                                            <span class="eyebrow-bar" aria-hidden="true"></span>
                                            <span>ORTHOPAEDIC | JOINT | SPORTS INJURY</span>
                                            <span class="eyebrow-bar" aria-hidden="true"></span>     
                                        </div>
                                        <!-- Only ONE H1 per page -->
                                        <h1 class="hero-title">Move Better. <span>Live Pain-Free.</span></h1>
                                        <p class="hero-text">Experience next-generation AI &amp; Robotic Joint
                                            Replacement with sub-millimeter precision, minimal tissue damage, and rapid
                                            same-day mobility.</p>

                                        <div class="hero-feature-pills">
                                            <span class="hero-pill">
                                                <i class="bi bi-bandaid" aria-hidden="true"></i>
                                                <span>Keyhole Surgery</span>
                                            </span>
                                            <span class="hero-pill">
                                                <i class="bi bi-shield-check" aria-hidden="true"></i>
                                                <span>Faster Recovery</span>
                                            </span>
                                            <span class="hero-pill">
                                                <i class="bi bi-person-walking" aria-hidden="true"></i>
                                                <span>Sports Injury Care</span>
                                            </span>
                                        </div>

                                        <div class="hero-actions">
                                            <a href="#appointment" class="hero-btn-primary">
                                                <i class="bi bi-calendar2-check" aria-hidden="true"></i>
                                                <span>Book Appointment</span>
                                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                                            </a>
                                            <a href="https://wa.me/918347378713?text=Hello%20Dr.%20Ashish%20Kumar%20Goyal%2C%20I%20would%20like%20to%20consult%20regarding%20Robotic%20Knee%20Replacement."
                                                target="_blank" rel="noopener noreferrer" class="hero-btn-secondary"
                                                aria-label="Chat on WhatsApp with Dr. Ashish Kumar Goyal">
                                                <i class="bi bi-whatsapp" aria-hidden="true"></i>
                                                <span>WhatsApp Us</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 hero-visual-col order-2 order-md-2">
                                    <div class="hero-visual-wrap">
                                        <div class="hero-visual-backdrop" aria-hidden="true"></div>
                                        <div class="hero-img-wrap">
                                            <img src="assets/images/doctor.png"
                                                alt="Robotic knee replacement surgeon in Vadodara - Dr. Ashish Kumar Goyal"
                                                width="640" height="620" loading="eager" fetchpriority="high" decoding="async">
                                        </div>
                                        <!-- Floating Trust Badge 1 -->
                                        <div class="hero-float-card hero-float-tl">
                                            <div class="float-icon"><i class="bi bi-trophy-fill" aria-hidden="true"></i>
                                            </div>
                                            <div class="float-body">
                                                <strong>5,000+</strong>
                                                <span>Successful Surgeries</span>
                                            </div>
                                        </div>
                                        <!-- Floating Trust Badge 2 -->
                                        <div class="hero-float-card hero-float-br">
                                            <div class="float-icon float-icon-accent"><i class="bi bi-calendar2-check-fill"
                                                    aria-hidden="true"></i></div>
                                            <div class="float-body">
                                                <strong>10+ Years</strong>
                                                <span>of Experience</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2: Sports Injury & Arthroscopic Keyhole Surgery -->
                <div class="carousel-item">
                    <div class="hero-slide slide-2">
                        <div class="container">
                            <div class="row hero-row">
                                <div class="col-lg-7 col-md-7 hero-content-col order-1 order-md-1">
                                    <div class="hero-content">
                                        <div class="hero-eyebrow-tag">
                                            <span class="eyebrow-bar" aria-hidden="true"></span>
                                            <span>SPORTS MEDICINE | ARTHROSCOPY | ACL</span>
                                            <span class="eyebrow-bar" aria-hidden="true"></span>
                                        </div>
                                        <h2 class="hero-title">Get Back to <span>Your Active Life.</span></h2>
                                        <p class="hero-text">Minimally invasive keyhole surgeries for ACL, PCL, and
                                            Meniscus tears—engineered to restore peak athletic stability and lasting
                                            joint longevity.</p>

                                        <div class="hero-feature-pills">
                                            <span class="hero-pill">
                                                <i class="bi bi-activity" aria-hidden="true"></i>
                                                <span>Keyhole Arthroscopy</span>
                                            </span>
                                            <span class="hero-pill">
                                                <i class="bi bi-shield-check" aria-hidden="true"></i>
                                                <span>Ligament Care</span>
                                            </span>
                                            <span class="hero-pill">
                                                <i class="bi bi-lightning-charge-fill" aria-hidden="true"></i>
                                                <span>Accelerated Return</span>
                                            </span>
                                        </div>

                                        <div class="hero-actions">
                                            <a href="#appointment" class="hero-btn-primary">
                                                <i class="bi bi-calendar2-check" aria-hidden="true"></i>
                                                <span>Consult Now</span>
                                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                                            </a>
                                            <a href="https://wa.me/919429197711?text=Hello%20Dr.%20Ashish%20Kumar%20Goyal%2C%20I%20would%20like%20to%20consult%20regarding%20Sports%20Injuries."
                                                target="_blank" rel="noopener noreferrer" class="hero-btn-secondary"
                                                aria-label="Chat on WhatsApp with Dr. Ashish Kumar Goyal">
                                                <i class="bi bi-whatsapp" aria-hidden="true"></i>
                                                <span>WhatsApp Us</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 hero-visual-col order-2 order-md-2">
                                    <div class="hero-visual-wrap">
                                        <div class="hero-visual-backdrop" aria-hidden="true"></div>
                                        <div class="hero-img-wrap">
                                            <img src="assets/images/doctor.png"
                                                alt="ACL treatment and arthroscopic surgery specialist in Vadodara"
                                                width="640" height="620" loading="eager" fetchpriority="high" decoding="async">
                                        </div>
                                        <!-- Floating Trust Badge 1 -->
                                        <div class="hero-float-card hero-float-tl">
                                            <div class="float-icon"><i class="bi bi-trophy-fill"
                                                    aria-hidden="true"></i></div>
                                            <div class="float-body">
                                                <strong>5,000+</strong>
                                                <span>Successful Surgeries</span>
                                            </div>
                                        </div>
                                        <!-- Floating Trust Badge 2 -->
                                        <div class="hero-float-card hero-float-br">
                                            <div class="float-icon float-icon-accent"><i class="bi bi-lightning-fill"
                                                    aria-hidden="true"></i></div>
                                            <div class="float-body">
                                                <strong>Sports &amp; ACL</strong>
                                                <span>Keyhole Expert</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3: Complete Knee Care & Preservation -->
                <div class="carousel-item">
                    <div class="hero-slide slide-3">
                        <div class="container">
                            <div class="row hero-row">
                                <div class="col-lg-7 col-md-7 hero-content-col order-1 order-md-1">
                                    <div class="hero-content">
                                        <div class="hero-eyebrow-tag">
                                            <span class="eyebrow-bar" aria-hidden="true"></span>
                                            <span>KNEE PRESERVATION | CARTILAGE | MOBILITY</span>
                                            <span class="eyebrow-bar" aria-hidden="true"></span>
                                        </div>
                                        <h2 class="hero-title">Stronger Knees. <span>Lasting Mobility.</span></h2>
                                        <p class="hero-text">From cartilage restoration to advanced partial knee
                                            replacement, get personalized care focused on preserving your natural knee
                                            kinematics.</p>

                                        <div class="hero-feature-pills">
                                            <span class="hero-pill">
                                                <i class="bi bi-droplet-half" aria-hidden="true"></i>
                                                <span>Cartilage Therapies</span>
                                            </span>
                                            <span class="hero-pill">
                                                <i class="bi bi-hospital" aria-hidden="true"></i>
                                                <span>Zero-Infection OT</span>
                                            </span>
                                            <span class="hero-pill">
                                                <i class="bi bi-heart-pulse-fill" aria-hidden="true"></i>
                                                <span>Personalized Physio</span>
                                            </span>
                                        </div>

                                        <div class="hero-actions">
                                            <a href="#appointment" class="hero-btn-primary">
                                                <i class="bi bi-calendar2-check" aria-hidden="true"></i>
                                                <span>Book Consultation</span>
                                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                                            </a>
                                            <a href="https://wa.me/918347378713?text=Hello%20Dr.%20Ashish%20Kumar%20Goyal%2C%20I%20would%20like%20to%20consult%20regarding%20Knee%20Care%20and%20Treatment."
                                                target="_blank" rel="noopener noreferrer" class="hero-btn-secondary"
                                                aria-label="Chat on WhatsApp with Dr. Ashish Kumar Goyal">
                                                <i class="bi bi-whatsapp" aria-hidden="true"></i>
                                                <span>WhatsApp Us</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 hero-visual-col order-2 order-md-2">
                                    <div class="hero-visual-wrap">
                                        <div class="hero-visual-backdrop" aria-hidden="true"></div>
                                        <div class="hero-img-wrap">
                                            <img src="assets/images/doctor.png"
                                                alt="Meniscus repair and minimally invasive knee treatment in Vadodara"
                                                width="640" height="620" loading="eager" fetchpriority="high" decoding="async">
                                        </div>
                                        <!-- Floating Trust Badge 1 -->
                                        <div class="hero-float-card hero-float-tl">
                                            <div class="float-icon"><i class="bi bi-person-hearts"
                                                    aria-hidden="true"></i></div>
                                            <div class="float-body">
                                                <strong>98% Mobility</strong>
                                                <span>Patient Satisfaction</span>
                                            </div>
                                        </div>
                                        <!-- Floating Trust Badge 2 -->
                                        <div class="hero-float-card hero-float-br">
                                            <div class="float-icon float-icon-accent"><i class="bi bi-card-checklist"
                                                    aria-hidden="true"></i></div>
                                            <div class="float-body">
                                                <strong>Cashless Desk</strong>
                                                <span>All Major TPAs</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev hero-arrow" type="button" data-bs-target="#heroCarousel"
                data-bs-slide="prev" aria-label="Previous slide">
                <i class="bi bi-chevron-left" aria-hidden="true"></i>
            </button>
            <button class="carousel-control-next hero-arrow" type="button" data-bs-target="#heroCarousel"
                data-bs-slide="next" aria-label="Next slide">
                <i class="bi bi-chevron-right" aria-hidden="true"></i>
            </button>
        </div>
    </section>

    <!-- ================= DOCTOR ABOUT CARDS ================= -->
    <section class="doctor-about-cards" aria-labelledby="doctorCardsHeading">
        <div class="container">

            <div class="section-heading text-center">
                <span class="section-tag">
                    <i class="bi bi-person-badge-fill" aria-hidden="true"></i> ABOUT DR. ASHISH KUMAR GOYAL
                </span>
                <h2 id="doctorCardsHeading">Committed to Better <span>Orthopaedic Care</span></h2>
                <p>Focused on helping patients improve mobility, relieve pain, and live healthier lives through advanced
                    surgical precision and compassionate guidance.</p>
            </div>

            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="doctor-info-card">
                        <div class="doctor-card-top">
                            <div class="doctor-card-icon">
                                <i class="bi bi-award-fill" aria-hidden="true"></i>
                            </div>
                            <span class="doctor-card-badge">01</span>
                        </div>
                        <h3 class="doctor-card-title">Orthopaedic Expertise</h3>
                        <p class="doctor-card-text">15+ years of surgical excellence in advanced knee, joint and bone
                            care.</p>
                        <span class="doctor-card-watermark" aria-hidden="true">01</span>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="doctor-info-card">
                        <div class="doctor-card-top">
                            <div class="doctor-card-icon">
                                <i class="bi bi-heart-pulse-fill" aria-hidden="true"></i>
                            </div>
                            <span class="doctor-card-badge">02</span>
                        </div>
                        <h3 class="doctor-card-title">Patient-Centred Care</h3>
                        <p class="doctor-card-text">Compassionate, personalized treatment tailored to your daily
                            mobility needs.</p>
                        <span class="doctor-card-watermark" aria-hidden="true">02</span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="doctor-info-card">
                        <div class="doctor-card-top">
                            <div class="doctor-card-icon">
                                <i class="bi bi-robot" aria-hidden="true"></i>
                            </div>
                            <span class="doctor-card-badge">03</span>
                        </div>
                        <h3 class="doctor-card-title">Advanced Treatments</h3>
                        <p class="doctor-card-text">AI &amp; robotic precision knee replacements with minimally invasive
                            keyhole techniques.</p>
                        <span class="doctor-card-watermark" aria-hidden="true">03</span>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="doctor-info-card">
                        <div class="doctor-card-top">
                            <div class="doctor-card-icon">
                                <i class="bi bi-person-walking" aria-hidden="true"></i>
                            </div>
                            <span class="doctor-card-badge">04</span>
                        </div>
                        <h3 class="doctor-card-title">Personalised Guidance</h3>
                        <p class="doctor-card-text">Step-by-step physiotherapy protocols and continuous doctor
                            follow-ups.</p>
                        <span class="doctor-card-watermark" aria-hidden="true">04</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= ABOUT US SECTION ================= -->
    <section class="about-section" id="about">
        <div class="container">
            <div class="row align-items-center g-5">

                <div class="col-lg-5">
                    <div class="about-image-wrap">
                        <div class="about-image">
                            <img src="assets/images/about-us/about-img.jpg" alt="About Image" class="img-fluid"
                                loading="lazy" decoding="async" width="520" height="520">
                        </div>
                        <div class="about-experience">
                            <i class="bi bi-heart-pulse" aria-hidden="true"></i>
                            <div>
                                <strong>Expert Care</strong>
                                <span>Focused on Better Mobility</span>
                            </div>
                        </div>
                        <div class="about-image-shape"></div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="about-content">

                        <span class="section-tag about-tag">
                            <i class="bi bi-person-badge" aria-hidden="true"></i>
                            ABOUT THE DOCTOR
                        </span>

                        <h2>
                            Dedicated to Helping You
                            <span>Move Better &amp; Live Better.</span>
                        </h2>

                        <p class="about-intro">
                            Welcome to the practice of Dr. Ashish Kumar Goyal.
                            We are committed to providing patient-focused
                            orthopaedic care with an emphasis on mobility,
                            comfort and quality of life.
                        </p>

                        <p class="about-description">
                            From knee and sports injuries to advanced
                            orthopaedic procedures, our approach focuses on
                            understanding each patient's condition and
                            providing appropriate treatment guidance.
                            Every patient deserves personalised attention
                            and care throughout their treatment journey.
                        </p>

                        <div class="about-highlights">
                            <div class="about-highlight">
                                <span><i class="bi bi-check2-circle" aria-hidden="true"></i></span>
                                <div>
                                    <h3 class="h5">Patient-Centred Approach</h3>
                                    <p>Care planned around individual needs.</p>
                                </div>
                            </div>

                            <div class="about-highlight">
                                <span><i class="bi bi-check2-circle" aria-hidden="true"></i></span>
                                <div>
                                    <h3 class="h5">Orthopaedic Care</h3>
                                    <p>Support for joint, knee and sports injuries.</p>
                                </div>
                            </div>

                            <div class="about-highlight">
                                <span><i class="bi bi-check2-circle" aria-hidden="true"></i></span>
                                <div>
                                    <h3 class="h5">Personalised Treatment Guidance</h3>
                                    <p>Understanding your condition and treatment options.</p>
                                </div>
                            </div>

                            <div class="about-highlight">
                                <span><i class="bi bi-check2-circle" aria-hidden="true"></i></span>
                                <div>
                                    <h3 class="h5">Focus on Better Mobility</h3>
                                    <p>Helping patients work towards improved movement.</p>
                                </div>
                            </div>
                        </div>

                        <div class="about-bottom">
                            <a href="#appointment" class="about-btn">
                                Book an Appointment
                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>

                            <div class="about-doctor-name">
                                <strong>Dr. Ashish Kumar Goyal</strong>
                                <span>Orthopaedic Care | Vadodara</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= SERVICES SECTION ================= -->
    <section class="services-section" id="services" aria-labelledby="servicesHeading">
        <div class="container">
            <div class="section-heading text-center">
                <span class="section-tag">
                    <i class="bi bi-bounding-box-circles" aria-hidden="true"></i> OUR SERVICES
                </span>
                <h2 id="servicesHeading">Comprehensive <span>Orthopaedic Care</span></h2>
                <p>Advanced orthopaedic treatments designed to relieve pain, restore mobility and help you
                    return to an active, healthy lifestyle.</p>
            </div>
            <div class="row g-4">
                <?php foreach ($services as $service): ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <article class="service-card">
                            <div class="service-img">
                                <img src="assets/images/services/<?php echo htmlspecialchars($service['image']); ?>"
                                    alt="<?php echo htmlspecialchars($service['alt']); ?>" width="600" height="400"
                                    loading="lazy" decoding="async">
                            </div>
                            <div class="service-body">
                                <span class="service-icon">
                                    <i class="bi <?php echo htmlspecialchars($service['icon']); ?>" aria-hidden="true"></i>
                                </span>
                                <h3>
                                    <?php echo htmlspecialchars($service['title']); ?>
                                </h3>
                                <p>
                                    <?php echo htmlspecialchars($service['description']); ?>
                                </p>
                                <a href="<?php echo htmlspecialchars($service['link']); ?>" class="service-link">
                                    Read More
                                    <i class="bi bi-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ================= WHY CHOOSE US SECTION ================= -->
    <section class="whychoose-section" id="why-choose-us" aria-labelledby="whyChooseHeading">
        <div class="container">
            <div class="section-heading text-center">
                <span class="section-tag">
                    <i class="bi bi-award-fill" aria-hidden="true"></i> WHY CHOOSE US
                </span>
                <h2 id="whyChooseHeading">Advanced Care with <span>Proven Precision</span></h2>
                <p>Delivering excellence in robotic joint replacement, arthroscopy, and sports trauma through surgical
                    expertise, cutting-edge technology, and compassionate patient care.</p>
            </div>
            <div class="row g-4 align-items-center why-showcase-row">
                <div class="col-lg-4 col-md-12 order-1">
                    <div class="why-item-card">
                        <div class="why-item-icon-wrap">
                            <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <circle cx="16" cy="15" r="3" stroke="#f58220" stroke-width="2.2" />
                                <circle cx="7" cy="21" r="2.5" stroke="#f58220" stroke-width="2.2" />
                                <circle cx="25" cy="9" r="2.5" stroke="#f58220" stroke-width="2.2" />
                                <line x1="8.8" y1="19.2" x2="14.2" y2="16.8" stroke="#f58220" stroke-width="2.2"
                                    stroke-linecap="round" />
                                <line x1="17.8" y1="13.2" x2="23.2" y2="10.8" stroke="#f58220" stroke-width="2.2"
                                    stroke-linecap="round" />
                                <path d="M4 26H12" stroke="#f58220" stroke-width="2.2" stroke-linecap="round" />
                                <path d="M7 23.5V26" stroke="#f58220" stroke-width="2.2" stroke-linecap="round" />
                                <path d="M25 6.5V3.5" stroke="#f58220" stroke-width="2.2" stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="why-item-content">
                            <div class="why-item-header">
                                <h3 class="why-item-title">Robotic Precision</h3>
                                <span class="why-item-badge">01</span>
                            </div>
                            <p class="why-item-desc">Advanced technology for greater accuracy and better outcomes.</p>
                        </div>
                    </div>

                    <!-- Card 02: Faster Recovery -->
                    <div class="why-item-card">
                        <div class="why-item-icon-wrap">
                            <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <circle cx="21" cy="7" r="2.5" stroke="#f58220" stroke-width="2.2" />
                                <path d="M14 13L18 10L21 13L25 12" stroke="#f58220" stroke-width="2.2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M18 10L16 17L21 21L23 27" stroke="#f58220" stroke-width="2.2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16 17L12 21L8 22" stroke="#f58220" stroke-width="2.2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <line x1="4" y1="9" x2="10" y2="9" stroke="#f58220" stroke-width="2.2"
                                    stroke-linecap="round" />
                                <line x1="2" y1="13" x2="8" y2="13" stroke="#f58220" stroke-width="2.2"
                                    stroke-linecap="round" />
                                <line x1="4" y1="17" x2="9" y2="17" stroke="#f58220" stroke-width="2.2"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="why-item-content">
                            <div class="why-item-header">
                                <h3 class="why-item-title">Faster Recovery</h3>
                                <span class="why-item-badge">02</span>
                            </div>
                            <p class="why-item-desc">Minimally invasive techniques that help you return to daily life
                                sooner.</p>
                        </div>
                    </div>

                    <!-- Card 03: Sports Expertise -->
                    <div class="why-item-card">
                        <div class="why-item-icon-wrap">
                            <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M9 7H23V14C23 17.866 19.866 21 16 21C12.134 21 9 17.866 9 14V7Z"
                                    stroke="#f58220" stroke-width="2.2" stroke-linejoin="round" />
                                <path d="M9 10H5C3.89543 10 3 10.8954 3 12V13C3 15.2091 4.79086 17 7 17H9"
                                    stroke="#f58220" stroke-width="2.2" stroke-linecap="round" />
                                <path d="M23 10H27C28.1046 10 29 10.8954 29 12V13C29 15.2091 27.2091 17 25 17H23"
                                    stroke="#f58220" stroke-width="2.2" stroke-linecap="round" />
                                <path d="M16 21V25M11 28H21" stroke="#f58220" stroke-width="2.2"
                                    stroke-linecap="round" />
                                <polygon
                                    points="16,11 17.2,13.5 19.8,13.8 17.9,15.6 18.4,18.2 16,16.9 13.6,18.2 14.1,15.6 12.2,13.8 14.8,13.5"
                                    fill="#f58220" />
                            </svg>
                        </div>
                        <div class="why-item-content">
                            <div class="why-item-header">
                                <h3 class="why-item-title">Sports Expertise</h3>
                                <span class="why-item-badge">03</span>
                            </div>
                            <p class="why-item-desc">Specialised care for sports injuries, including ACL and meniscus
                                treatment.</p>
                        </div>
                    </div>

                </div>

                <!-- CENTER COLUMN: Spotlight Centerpiece -->
                <div class="col-lg-4 col-md-12 order-3 order-lg-2">
                    <div class="why-spotlight-card">

                        <!-- Eyebrow -->
                        <div class="why-spotlight-eyebrow">
                            <span>EXPERIENCE</span>
                            <span class="sep">|</span>
                            <span>EXPERTISE</span>
                            <span class="sep">|</span>
                            <span>TRUST</span>
                        </div>

                        <!-- Main Heading -->
                        <h3 class="why-spotlight-title">
                            Trusted Orthopaedic Care<br>
                            with <span>Proven Expertise</span>
                        </h3>

                        <!-- Middle Visual & Key Points -->
                        <div class="why-spotlight-middle">
                            <!-- 3D Knee Anatomy Render with Ambient Glow -->
                            <div class="why-knee-wrap">
                                <div class="why-knee-glow" aria-hidden="true"></div>
                                <img src="assets/images/bone-png.png"
                                    alt="3D Human Knee Joint Anatomy - Orthopaedic Precision" width="165" height="210"
                                    loading="lazy" decoding="async">
                            </div>

                            <!-- 3 Vertical Key Highlight Points -->
                            <div class="why-spotlight-points">
                                <div class="spotlight-point">
                                    <div class="spotlight-point-icon">
                                        <i class="bi bi-calendar3" aria-hidden="true"></i>
                                    </div>
                                    <div class="spotlight-point-text">
                                        <strong>10+ Years</strong>
                                        <span>of Experience</span>
                                    </div>
                                </div>
                                <div class="spotlight-point">
                                    <div class="spotlight-point-icon">
                                        <i class="bi bi-mortarboard-fill" aria-hidden="true"></i>
                                    </div>
                                    <div class="spotlight-point-text">
                                        <strong>International</strong>
                                        <span>Training</span>
                                    </div>
                                </div>
                                <div class="spotlight-point">
                                    <div class="spotlight-point-icon">
                                        <i class="bi bi-people-fill" aria-hidden="true"></i>
                                    </div>
                                    <div class="spotlight-point-text">
                                        <strong>Patient-First</strong>
                                        <span>Approach</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Consultation Button -->
                        <div class="why-spotlight-cta">
                            <a href="#appointment" class="btn-spotlight-consult"
                                title="Book Consultation with Dr. Ashish Kumar Goyal">
                                <span>Book Consultation</span>
                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>

                        <!-- Bottom Fluid Wave Graphic -->
                        <div class="why-spotlight-wave" aria-hidden="true">
                            <svg viewBox="0 0 400 58" fill="none" preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 40 C 90 20, 170 50, 260 34 C 310 24, 360 36, 400 30 L 400 58 L 0 58 Z"
                                    fill="#e2e8f0" opacity="0.65" />
                                <path d="M0 58 C 110 54, 180 50, 240 42 C 300 34, 345 14, 400 8 L 400 58 L 0 58 Z"
                                    fill="#ff9940" />
                            </svg>
                        </div>

                    </div>
                </div>

                <!-- RIGHT COLUMN: Cards 04, 05, 06 -->
                <div class="col-lg-4 col-md-12 order-2 order-lg-3">

                    <!-- Card 04: Safe & Sterile Surgeries -->
                    <div class="why-item-card">
                        <div class="why-item-icon-wrap">
                            <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M16 4L6 8V15C6 21.6 10.3 26.8 16 28C21.7 26.8 26 21.6 26 15V8L16 4Z"
                                    stroke="#f58220" stroke-width="2.2" stroke-linejoin="round" />
                                <path d="M16 11V19M12 15H20" stroke="#f58220" stroke-width="2.2"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="why-item-content">
                            <div class="why-item-header">
                                <h3 class="why-item-title">Safe &amp; Sterile Surgeries</h3>
                                <span class="why-item-badge">04</span>
                            </div>
                            <p class="why-item-desc">Class 100 modular OT with advanced safety protocols.</p>
                        </div>
                    </div>

                    <!-- Card 05: Personalised Care -->
                    <div class="why-item-card">
                        <div class="why-item-icon-wrap">
                            <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M19 6C17.3 6 16.2 7 16 7.6C15.8 7 14.7 6 13 6C10.8 6 9 7.8 9 10C9 13 13 16.5 16 18C19 16.5 23 13 23 10C23 7.8 21.2 6 19 6Z"
                                    stroke="#f58220" stroke-width="2" stroke-linejoin="round" />
                                <path
                                    d="M4 22C4 20.3 5.3 19 7 19H12L15 22H21C22.7 22 24 23.3 24 25C24 26.7 22.7 28 21 28H10L4 22Z"
                                    stroke="#f58220" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="why-item-content">
                            <div class="why-item-header">
                                <h3 class="why-item-title">Personalised Care</h3>
                                <span class="why-item-badge">05</span>
                            </div>
                            <p class="why-item-desc">Guidance from diagnosis to recovery, tailored to your needs.</p>
                        </div>
                    </div>

                    <!-- Card 06: Complete Rehabilitation -->
                    <div class="why-item-card">
                        <div class="why-item-icon-wrap">
                            <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <rect x="3" y="11" width="3" height="10" rx="1.5" stroke="#f58220" stroke-width="2" />
                                <rect x="6" y="9" width="3" height="14" rx="1.5" stroke="#f58220" stroke-width="2" />
                                <line x1="9" y1="16" x2="23" y2="16" stroke="#f58220" stroke-width="2.4"
                                    stroke-linecap="round" />
                                <rect x="23" y="9" width="3" height="14" rx="1.5" stroke="#f58220" stroke-width="2" />
                                <rect x="26" y="11" width="3" height="10" rx="1.5" stroke="#f58220" stroke-width="2" />
                            </svg>
                        </div>
                        <div class="why-item-content">
                            <div class="why-item-header">
                                <h3 class="why-item-title">Complete Rehabilitation</h3>
                                <span class="why-item-badge">06</span>
                            </div>
                            <p class="why-item-desc">Structured physiotherapy and follow-ups for long-lasting results.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- ================= PATIENT TESTIMONIALS SLIDER SECTION ================= -->
    <section class="testimonials-section" id="testimonials" aria-labelledby="testimonialsHeading">
        <div class="container">
            <div class="section-heading text-center">
                <span class="section-tag">
                    <i class="bi bi-chat-quote-fill" aria-hidden="true"></i>
                    PATIENT EXPERIENCES
                </span>
                <h2 id="testimonialsHeading">
                    Real Stories of <span>Restored Mobility</span>
                </h2>
                <p>
                    Hear from patients who overcame joint pain and ligament injuries
                    through Dr. Ashish Kumar Goyal's surgical care.
                </p>
                <div class="rating-badge mt-3">
                    <span class="stars" aria-label="5 out of 5 stars">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                            <i class="bi bi-star-fill" aria-hidden="true"></i>
                        <?php endfor; ?>
                    </span>
                    <span>
                        <strong>4.9 / 5.0</strong>
                        Rating on Google Reviews (250+ Verified Patients)
                    </span>
                </div>
            </div>

            <!-- Testimonials Swiper Slider -->
            <div class="testimonial-slider-wrap">
                <div class="swiper testimonialSwiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($testimonials as $testimonial): ?>
                            <div class="swiper-slide">
                                <article class="testimonial-card">
                                    <div class="testimonial-quote-icon">
                                        <i class="bi bi-quote" aria-hidden="true"></i>
                                    </div>
                                    <div class="testimonial-stars" aria-label="<?php echo $testimonial['rating']; ?> stars">
                                        <?php for ($i = 0; $i < $testimonial['rating']; $i++): ?>
                                            <i class="bi bi-star-fill" aria-hidden="true"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <p class="testimonial-text">
                                        "<?php echo htmlspecialchars($testimonial['review']); ?>"
                                    </p>
                                    <div class="testimonial-patient">
                                        <div class="patient-avatar">
                                            <?php echo htmlspecialchars($testimonial['initials']); ?>
                                        </div>
                                        <div class="patient-info">
                                            <h4>
                                                <?php echo htmlspecialchars($testimonial['name']); ?>
                                            </h4>
                                            <p class="patient-procedure">
                                                <?php echo htmlspecialchars($testimonial['procedure']); ?>
                                            </p>
                                            <p class="patient-location">
                                                <?php echo htmlspecialchars($testimonial['location']); ?>
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Slider Navigation & Pagination -->
                <div class="testimonial-controls">
                    <button type="button" class="testimonial-nav-btn testimonial-prev"
                        aria-label="Previous testimonial">
                        <i class="bi bi-chevron-left" aria-hidden="true"></i>
                    </button>
                    <div class="swiper-pagination testimonial-pagination"></div>
                    <button type="button" class="testimonial-nav-btn testimonial-next" aria-label="Next testimonial">
                        <i class="bi bi-chevron-right" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <!-- ================= APPOINTMENT SECTION ================= -->
    <section class="appointment-section" id="appointment">
        <div class="container">
            <div class="appointment-wrapper">

                <div class="row g-0 align-items-stretch">

                    <!-- LEFT CONTENT -->
                    <div class="col-lg-5">
                        <div class="appointment-info">

                            <span class="appointment-tag">
                                <i class="bi bi-calendar-check" aria-hidden="true"></i>
                                BOOK AN APPOINTMENT
                            </span>

                            <h2>
                                Take the First Step
                                Towards <span>Better Mobility.</span>
                            </h2>

                            <p class="appointment-description">
                                Schedule your consultation with Dr. Ashish Kumar Goyal
                                for expert orthopaedic care and advanced treatment.
                            </p>

                            <div class="appointment-features">

                                <div class="appointment-feature">
                                    <span class="feature-icon">
                                        <i class="bi bi-person-badge" aria-hidden="true"></i>
                                    </span>
                                    <div>
                                        <h3 class="h5">Expert Orthopaedic Consultation</h3>
                                        <p>Personalised care and treatment guidance.</p>
                                    </div>
                                </div>

                                <div class="appointment-feature">
                                    <span class="feature-icon">
                                        <i class="bi bi-calendar2-check" aria-hidden="true"></i>
                                    </span>
                                    <div>
                                        <h3 class="h5">Easy Appointment Booking</h3>
                                        <p>Choose your preferred consultation date.</p>
                                    </div>
                                </div>

                                <div class="appointment-feature">
                                    <span class="feature-icon">
                                        <i class="bi bi-geo-alt" aria-hidden="true"></i>
                                    </span>
                                    <div>
                                        <h3 class="h5">Visit Our Clinic</h3>
                                        <p>JD Nagar, Makarpura, Vadodara, Gujarat.</p>
                                    </div>
                                </div>

                            </div>

                            <a href="tel:8347378713" class="appointment-call">
                                <i class="bi bi-telephone-fill" aria-hidden="true"></i>
                                +91 8347378713
                            </a>

                        </div>
                    </div>

                    <!-- RIGHT FORM -->
                    <div class="col-lg-7">
                        <div class="appointment-form-box">

                            <div class="form-heading">
                                <h3>Request an Appointment</h3>
                                <p>Fill in your details and we will continue on WhatsApp to confirm your slot.</p>
                            </div>

                            <form id="appointmentForm">

                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <label for="patientName">Full Name *</label>
                                        <div class="input-group-custom">
                                            <i class="bi bi-person" aria-hidden="true"></i>
                                            <input type="text" id="patientName" name="name"
                                                placeholder="Enter your name" autocomplete="name" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="patientPhone">Phone Number *</label>
                                        <div class="input-group-custom">
                                            <i class="bi bi-telephone" aria-hidden="true"></i>
                                            <input type="tel" id="patientPhone" name="phone"
                                                placeholder="Enter mobile number" autocomplete="tel" inputmode="tel"
                                                pattern="[0-9+\-\s]{10,15}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="patientEmail">Email Address</label>
                                        <div class="input-group-custom">
                                            <i class="bi bi-envelope" aria-hidden="true"></i>
                                            <input type="email" id="patientEmail" name="email"
                                                placeholder="Enter your email" autocomplete="email">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="patientService">Select Treatment *</label>
                                        <div class="input-group-custom">
                                            <i class="bi bi-heart-pulse" aria-hidden="true"></i>
                                            <select id="patientService" name="treatment" required>
                                                <option value="">Choose Treatment</option>
                                                <option>Robotic Knee Replacement</option>
                                                <option>ACL Reconstruction</option>
                                                <option>Meniscus Repair</option>
                                                <option>Arthroscopy</option>
                                                <option>Sports Injury Treatment</option>
                                                <option>Orthopaedic Consultation</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="appointmentDate">Preferred Date *</label>
                                        <div class="input-group-custom">
                                            <i class="bi bi-calendar-event" aria-hidden="true"></i>
                                            <input type="date" id="appointmentDate" name="date" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="appointmentTime">Preferred Time</label>
                                        <div class="input-group-custom">
                                            <i class="bi bi-clock" aria-hidden="true"></i>
                                            <select id="appointmentTime" name="time">
                                                <option value="">Select Time</option>
                                                <option>Morning (9 AM - 12 PM)</option>
                                                <option>Afternoon (12 PM - 4 PM)</option>
                                                <option>Evening (4 PM - 8 PM)</option>
                                                <option>Night (8 PM - 11:30 PM)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="patientMessage">Message (Optional)</label>
                                        <div class="input-group-custom textarea-group">
                                            <i class="bi bi-chat-left-text" aria-hidden="true"></i>
                                            <textarea id="patientMessage" name="message" rows="3"
                                                placeholder="Briefly describe your concern..."></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="appointment-submit">
                                            Book on WhatsApp
                                            <i class="bi bi-arrow-right" aria-hidden="true"></i>
                                        </button>
                                    </div>

                                </div>
                            </form>

                            <div class="appointment-note">
                                <i class="bi bi-shield-check" aria-hidden="true"></i>
                                Your details are sent from your own phone via WhatsApp to request your appointment.
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ================= FAQS SECTION ================= -->
    <section class="faq-section" id="faqs" aria-labelledby="faqsHeading">
        <div class="container">

            <div class="section-heading text-center">
                <span class="section-tag">
                    <i class="bi bi-question-circle-fill" aria-hidden="true"></i> GOT QUESTIONS?
                </span>
                <h2 id="faqsHeading">Frequently Asked <span>Questions</span></h2>
                <p>Find answers to common questions about robotic joint surgery, ACL reconstruction, recovery periods,
                    and insurance coverage.</p>
            </div>

            <div class="row g-4 align-items-start">

                <div class="col-lg-8">
                    <div class="accordion faq-accordion" id="orthoFaqAccordion">

                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeadingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseOne" aria-expanded="true"
                                    aria-controls="faqCollapseOne">
                                    What makes Robotic Knee Replacement better than conventional surgery?
                                </button>
                            </h3>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="faqHeadingOne" data-bs-parent="#orthoFaqAccordion">
                                <div class="accordion-body">
                                    Robotic-assisted surgery uses 3D CT-guided planning and sub-millimeter robotic
                                    precision to position the implant with exact alignment to your natural joint. This
                                    preserves healthy bone and ligaments, causes substantially less tissue trauma,
                                    minimizes blood loss, and allows significantly quicker rehabilitation compared to
                                    conventional manual techniques.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeadingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseTwo" aria-expanded="false"
                                    aria-controls="faqCollapseTwo">
                                    How soon will I be able to walk after robotic knee replacement surgery?
                                </button>
                            </h3>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo"
                                data-bs-parent="#orthoFaqAccordion">
                                <div class="accordion-body">
                                    Under Dr. Goyal's rapid recovery protocol, most patients stand and walk with support
                                    within 24 to 48 hours after surgery. Within 2 to 3 weeks, patients typically walk
                                    comfortably with minimal assistance, and can resume driving and routine daily
                                    activities within 4 to 6 weeks.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeadingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseThree" aria-expanded="false"
                                    aria-controls="faqCollapseThree">
                                    Is cashless Mediclaim and health insurance accepted at your clinic?
                                </button>
                            </h3>
                            <div id="faqCollapseThree" class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingThree" data-bs-parent="#orthoFaqAccordion">
                                <div class="accordion-body">
                                    Yes. We provide complete cashless hospitalization assistance for all major private
                                    health insurance providers and TPAs (Third Party Administrators), as well as
                                    corporate health plans. Our dedicated billing desk guides you through
                                    pre-authorization, claim filing, and discharge paperwork.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeadingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseFour" aria-expanded="false"
                                    aria-controls="faqCollapseFour">
                                    What is Arthroscopy and when is it recommended for knee injuries?
                                </button>
                            </h3>
                            <div id="faqCollapseFour" class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingFour" data-bs-parent="#orthoFaqAccordion">
                                <div class="accordion-body">
                                    Arthroscopy is a minimally invasive keyhole procedure where a pencil-sized camera
                                    and specialized instruments are inserted through tiny incisions. It is recommended
                                    to diagnose and treat ACL/PCL tears, meniscus tears, cartilage defects, loose
                                    bodies, and recurrent joint instability without opening the entire joint.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeadingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseFive" aria-expanded="false"
                                    aria-controls="faqCollapseFive">
                                    Can elderly patients with diabetes or hypertension safely undergo knee surgery?
                                </button>
                            </h3>
                            <div id="faqCollapseFive" class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingFive" data-bs-parent="#orthoFaqAccordion">
                                <div class="accordion-body">
                                    Yes. Elderly patients with controlled diabetes, high blood pressure, or thyroid
                                    issues routinely undergo successful robotic knee surgery. Every patient undergoes
                                    comprehensive pre-anesthesia medical evaluation (PAC) and cardiac clearance to
                                    ensure utmost surgical safety and painless recovery.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeadingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseSix" aria-expanded="false"
                                    aria-controls="faqCollapseSix">
                                    What documents should I bring for my first consultation?
                                </button>
                            </h3>
                            <div id="faqCollapseSix" class="accordion-collapse collapse" aria-labelledby="faqHeadingSix"
                                data-bs-parent="#orthoFaqAccordion">
                                <div class="accordion-body">
                                    Please bring all existing X-rays, MRI scans, CT scans, blood test reports, previous
                                    discharge summaries (if any), and your current medication prescription. This allows
                                    Dr. Ashish Goyal to give you an accurate diagnosis and customized treatment roadmap
                                    right on day one.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Sidebar CTA -->
                <div class="col-lg-4">
                    <div class="faq-sidebar-box">
                        <div class="faq-sidebar-icon">
                            <i class="bi bi-chat-dots-fill" aria-hidden="true"></i>
                        </div>
                        <h3>Have Another Question?</h3>
                        <p>Our orthopaedic medical team is here to help you understand your symptoms, evaluate MRI/X-ray
                            reports, and guide you towards the right care.</p>
                        <a href="https://wa.me/918347378713?text=Hello%20Dr.%20Goyal%2C%20I%20have%20a%20question%20regarding%20my%20orthopedic%20condition."
                            target="_blank" rel="noopener noreferrer" class="faq-sidebar-btn">
                            <i class="bi bi-whatsapp" aria-hidden="true"></i> Ask on WhatsApp
                        </a>
                        <div class="mt-4 pt-3 border-top border-secondary">
                            <small class="text-white-50 d-block mb-1">Direct Consultation Line:</small>
                            <a href="tel:8347378713" class="text-white fw-bold text-decoration-none">
                                <i class="bi bi-telephone-fill text-warning me-1"></i> +91 8347378713
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ================= BLOG / HEALTH INSIGHTS SECTION ================= -->
    <section class="blog-section" id="blog" aria-labelledby="blogHeading">
        <div class="container">

            <div class="section-heading text-center">
                <span class="section-tag">
                    <i class="bi bi-journal-medical" aria-hidden="true"></i> HEALTH INSIGHTS &amp; BLOGS
                </span>
                <h2 id="blogHeading">Orthopaedic Knowledge &amp; <span>Wellness Tips</span></h2>
                <p>Expert articles and practical advice to help you understand joint conditions, injury rehabilitation,
                    and modern surgical solutions.</p>
            </div>

            <div class="row g-4">

                <!-- Blog 1 -->
                <div class="col-lg-4 col-md-6">
                    <article class="blog-card">
                        <div class="blog-thumb">
                            <img src="assets/images/blog/blog-1.jpg"
                                alt="Robotic vs Traditional Knee Replacement surgery comparison" loading="lazy"
                                decoding="async">
                            <span class="blog-category-badge">Joint Replacement</span>
                        </div>
                        <div class="blog-body">
                            <div class="blog-meta">
                                <span><i class="bi bi-calendar3" aria-hidden="true"></i> Nov 2026</span>
                                <span><i class="bi bi-clock" aria-hidden="true"></i> 4 min read</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="blogs.php">Robotic vs Traditional Knee Replacement: What
                                    Every Patient Should Know</a>
                            </h3>
                            <p class="blog-excerpt d-none">
                                Understand how sub-millimeter robotic precision minimizes muscle damage, protects
                                ligaments, and enables rapid return to active mobility.
                            </p>
                            <a href="blogs.php" class="blog-readmore">
                                Read Full Article <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog 2 -->
                <div class="col-lg-4 col-md-6">
                    <article class="blog-card">
                        <div class="blog-thumb">
                            <img src="assets/images/blog/blog-2.jpg"
                                alt="ACL Tear Symptoms, Arthroscopy and Recovery for athletes" loading="lazy"
                                decoding="async">
                            <span class="blog-category-badge">Sports Medicine</span>
                        </div>
                        <div class="blog-body">
                            <div class="blog-meta">
                                <span><i class="bi bi-calendar3" aria-hidden="true"></i> Oct 2026</span>
                                <span><i class="bi bi-clock" aria-hidden="true"></i> 5 min read</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="blogs.php">ACL Tear: Warning Signs, Keyhole Arthroscopy
                                    &amp; Recovery Timeline</a>
                            </h3>
                            <p class="blog-excerpt d-none">
                                A step-by-step roadmap for active individuals dealing with ligament tears, from initial
                                MRI diagnosis to full sports return.
                            </p>
                            <a href="blogs.php" class="blog-readmore">
                                Read Full Article <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog 3 -->
                <div class="col-lg-4 col-md-6">
                    <article class="blog-card">
                        <div class="blog-thumb">
                            <img src="assets/images/blog/blog-3.jpg"
                                alt="Daily exercises to reduce knee stiffness and arthritis pain" loading="lazy"
                                decoding="async">
                            <span class="blog-category-badge">Knee Wellness</span>
                        </div>
                        <div class="blog-body">
                            <div class="blog-meta">
                                <span><i class="bi bi-calendar3" aria-hidden="true"></i> Oct 2026</span>
                                <span><i class="bi bi-clock" aria-hidden="true"></i> 3 min read</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="blogs.php">5 Daily Exercises to Relieve Knee
                                    Stiffness and Strengthen Cartilage</a>
                            </h3>
                            <p class="blog-excerpt d-none">
                                Simple, low-impact physiotherapy movements recommended by orthopaedic specialists to
                                maintain joint flexibility and reduce pain.
                            </p>
                            <a href="blogs.php" class="blog-readmore">
                                Read Full Article <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </article>
                </div>

            </div>

        </div>
    </section>

</main>


<?php
$content = ob_get_clean();
require 'layout.php';
?>