<!-- ================= TOP INFO BAR ================= -->
<div class="top-bar">
    <div class="container">
        <div class="row align-items-center g-2">
            <div class="col-lg-9 d-none d-md-flex flex-wrap gap-4">
                <!-- <a href="tel:+917805965989" class="info-item" title="Call Dr. Ashish Kumar Goyal">
                        <i class="bi bi-telephone-fill" aria-hidden="true"></i>+91 78059 65989
                    </a> -->
                <address class="info-item">
                    <i class="bi bi-geo-alt-fill" aria-hidden="true"></i>
                    <a href="https://www.google.com/maps/search/?api=1&query=Ganesh+Plaza+JD+Nagar+Makarpura+Vadodara+390013"
                        target="_blank" rel="noopener noreferrer" title="View clinic location on Google Maps">
                        JD Nagar, Makarpura, Vadodara, Gujarat – 390013
                    </a>
                </address>
                <span class="info-item">
                    <i class="bi bi-clock-fill" aria-hidden="true"></i>
                    <time>Mon – Sat: 9:00 AM – 11:30 PM</time>
                </span>
            </div>
            <div class="col-8 d-md-none">
                <a href="tel:+917805965989" class="info-item"><i class="bi bi-telephone-fill" aria-hidden="true"></i>+91
                    78059 65989</a>
            </div>
            <div class="col-4 col-lg-3 text-end">
                <a href="https://wa.me/917805965989?text=Hello%20Dr.%20Goyal%2C%20I%20would%20like%20to%20book%20an%20appointment."
                    target="_blank" rel="noopener noreferrer" class="book-link"
                    title="Chat on WhatsApp to book an appointment">WhatsApp Now</a>
            </div>
        </div>
    </div>
</div>

<!-- ================= MAIN HEADER ================= -->
<header class="main-header" role="banner">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between py-2">
            <a href="/" class="brand-wrap" title="Dr. Ashish Kumar Goyal - Home"
                aria-label="Dr. Ashish Kumar Goyal - Home">
                <img src="assets/images/logo.png" width="180" height="62"
                    alt="Dr. Ashish Kumar Goyal - Orthopedic Surgeon in Vadodara logo" fetchpriority="high"
                    decoding="async">
            </a>

            <div class="d-flex align-items-center gap-3 gap-xl-4">
                <!-- Header Quick Info Widgets (Left of Book Appointment) -->
                <div class="header-info-widgets d-none d-lg-flex align-items-center gap-3 gap-xl-4 me-2">
                    <!-- Widget 1: Direct Helpline / OPD Call -->
                    <a href="tel:+917805965989" class="header-widget" title="Call Dr. Ashish Kumar Goyal">
                        <span class="header-widget-icon" aria-hidden="true">
                            <i class="bi bi-telephone-fill"></i>
                        </span>
                        <span class="header-widget-content">
                            <span class="header-widget-label">Helpline / OPD</span>
                            <span class="header-widget-value">+91 78059 65989</span>
                        </span>
                    </a>

                    <span class="header-widget-divider d-none d-xl-block" aria-hidden="true"></span>

                    <!-- Widget 2: OPD Consultation Hours -->
                    <!-- <div class="header-widget d-none d-xl-flex">
                            <span class="header-widget-icon" aria-hidden="true">
                                <i class="bi bi-clock-fill"></i>
                            </span>
                            <span class="header-widget-content">
                                <span class="header-widget-label">OPD Timing</span>
                                <span class="header-widget-value">Mon – Sat: 9 AM – 11:30 PM</span>
                            </span>
                        </div> -->
                </div>

                <a href="contact.php" class="btn btn-cta d-none d-lg-inline-flex align-items-center gap-2"
                    title="Book Appointment with Dr. Goyal">
                    <i class="bi bi-calendar2-check" aria-hidden="true"></i> Book Appointment
                </a>
                <button class="menu-toggle d-lg-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-label="Open navigation menu">
                    <i class="bi bi-list" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </div>
</header>

<?php $activePage = basename($_SERVER['PHP_SELF'] ?? ''); ?>
<!-- Desktop navigation (sticky) -->
<div class="nav-row d-none d-lg-block">
    <div class="container">
        <nav class="navbar justify-content-center" aria-label="Main navigation">
            <ul class="navbar-nav flex-row flex-wrap justify-content-center">
                <li class="nav-item"><a class="nav-link <?= (in_array($activePage, ['', 'index.php'])) ? 'active' : '' ?>" href="/" aria-current="page">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= ($activePage === 'about.php') ? 'active' : '' ?>" href="about.php" title="About Dr. Ashish Kumar Goyal">About
                        Dr. Goyal</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= (in_array($activePage, ['specialities.php', 'robotic-joint-replacement.php', 'total-knee-hip-replacement.php', 'revision-daa-hip-replacement.php', 'complex-trauma-revision.php', 'arthroscopy-sports-injuries.php'])) ? 'active' : '' ?>" href="specialities.php" aria-haspopup="true">
                        Specialities <i class="bi bi-chevron-down" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item <?= ($activePage === 'robotic-joint-replacement.php') ? 'active' : '' ?>" href="robotic-joint-replacement.php">
                                Robotic Joint Replacement
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item <?= ($activePage === 'total-knee-hip-replacement.php') ? 'active' : '' ?>" href="total-knee-hip-replacement.php">
                                Total Knee &amp; Hip Replacement (TKR &amp; THR)
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item <?= ($activePage === 'revision-daa-hip-replacement.php') ? 'active' : '' ?>" href="revision-daa-hip-replacement.php">
                                Revision &amp; DAA Hip Replacement
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item <?= ($activePage === 'complex-trauma-revision.php') ? 'active' : '' ?>" href="complex-trauma-revision.php">
                                Complex Trauma &amp; Revision Surgeries
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item <?= ($activePage === 'arthroscopy-sports-injuries.php') ? 'active' : '' ?>" href="arthroscopy-sports-injuries.php">
                                Arthroscopy &amp; Sports Injuries
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= (in_array($activePage, ['treatments-services.php', 'joint-replacement-surgery.php', 'complex-trauma-revision-surgeries.php', 'foot-ankle-surgeries.php', 'arthroscopy-sports-injuries.php', 'orthopaedic-oncology.php', 'regenerative-medicine.php'])) ? 'active' : '' ?>" href="treatments-services.php" aria-haspopup="true">
                        Treatments &amp; Services <i class="bi bi-chevron-down" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item <?= ($activePage === 'joint-replacement-surgery.php') ? 'active' : '' ?>" href="joint-replacement-surgery.php">
                                Joint Replacement Surgery
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item <?= ($activePage === 'complex-trauma-revision-surgeries.php') ? 'active' : '' ?>" href="complex-trauma-revision-surgeries.php">
                                Complex Trauma &amp; Revision Surgeries
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item <?= ($activePage === 'foot-ankle-surgeries.php') ? 'active' : '' ?>" href="foot-ankle-surgeries.php">
                                Foot &amp; Ankle Surgeries
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item <?= ($activePage === 'arthroscopy-sports-injuries.php') ? 'active' : '' ?>" href="arthroscopy-sports-injuries.php">
                                Arthroscopy &amp; Sports Injuries
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item <?= ($activePage === 'orthopaedic-oncology.php') ? 'active' : '' ?>" href="orthopaedic-oncology.php">
                                Orthopaedic Oncology
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item <?= ($activePage === 'regenerative-medicine.php') ? 'active' : '' ?>" href="regenerative-medicine.php">
                                Regenerative Medicine
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="nav-item"><a class="nav-link" href="international-patients.php">International
                        Patients</a></li> -->
                <li class="nav-item"><a class="nav-link" href="research-publications.php">Research &amp;
                        Publications</a></li>
                <li class="nav-item"><a class="nav-link <?= ($activePage === 'blogs.php') ? 'active' : '' ?>" href="blogs.php">Blogs</a></li>
                <li class="nav-item"><a class="nav-link <?= ($activePage === 'contact.php') ? 'active' : '' ?>" href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</div>

<!-- ================= MOBILE MENU ================= -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
        <p class="offcanvas-title fw-bold mb-0" id="mobileMenuLabel" style="font-family:'Montserrat',sans-serif;">
            Menu</p>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close menu"></button>
    </div>
    <div class="offcanvas-body">
        <nav aria-label="Mobile navigation">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link <?= (in_array($activePage, ['', 'index.php'])) ? 'active' : '' ?>" href="/" aria-current="page">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= ($activePage === 'about.php') ? 'active' : '' ?>" href="about.php">About Dr. Goyal</a></li>
                <li class="nav-item">
                    <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                        href="#mobSpec" role="button" aria-expanded="false" aria-controls="mobSpec">
                        Specialities <i class="bi bi-chevron-down small" aria-hidden="true"></i>
                    </a>
                    <div class="collapse ps-3" id="mobSpec">
                        <a class="nav-link" href="specialities.php">All Specialities</a>
                        <a class="nav-link" href="robotic-knee-replacement-surgeon-vadodara.php">Robotic Knee
                            Replacement Surgeon in Vadodara</a>
                        <a class="nav-link" href="acl-specialist-vadodara.php">ACL Specialist in Vadodara</a>
                        <a class="nav-link" href="meniscus-repair-vadodara.php">Meniscus Repair in Vadodara</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link <?= (in_array($activePage, ['treatments-services.php', 'joint-replacement-surgery.php', 'complex-trauma-revision-surgeries.php', 'foot-ankle-surgeries.php', 'arthroscopy-sports-injuries.php', 'orthopaedic-oncology.php', 'regenerative-medicine.php'])) ? 'active' : '' ?>" href="treatments-services.php">Treatments &amp;
                        Services</a></li>
                <li class="nav-item"><a class="nav-link" href="international-patients.php">International
                        Patients</a></li>
                <li class="nav-item"><a class="nav-link" href="research-publications.php">Research &amp;
                        Publications</a></li>
                <li class="nav-item"><a class="nav-link <?= ($activePage === 'blogs.php') ? 'active' : '' ?>" href="blogs.php">Blogs</a></li>
                <li class="nav-item"><a class="nav-link <?= ($activePage === 'contact.php') ? 'active' : '' ?>" href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
        <a href="contact.php" class="btn btn-cta w-100 mt-4"><i class="bi bi-calendar2-check me-2"
                aria-hidden="true"></i>Book Appointment</a>
        <div class="mt-4 small text-muted">
            <p class="mb-1"><i class="bi bi-clock-fill text-warning me-2" aria-hidden="true"></i>Mon – Sat: 9:00 AM
                – 11:30 PM</p>
            <p class="mb-0"><i class="bi bi-geo-alt-fill text-warning me-2" aria-hidden="true"></i>JD Nagar,
                Makarpura, Vadodara – 390013</p>
        </div>
    </div>
</div>