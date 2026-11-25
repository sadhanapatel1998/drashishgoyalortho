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
                    <span class="current" aria-current="page">Sitemap</span>
                </nav>

                <h1 class="page-banner-title">
                    Website <span>Sitemap</span>
                </h1>
                <p class="page-banner-sub">
                    A comprehensive directory of Dr. Ashish Kumar Goyal's orthopaedic treatments, specialized surgeries, academic research, and patient resources.
                </p>
            </div>
        </div>
    </section>

    <!-- ================= 2. SITEMAP MAIN DIRECTORY ================= -->
    <section class="sitemap-section py-5">
        <div class="container">

            <!-- Section Heading -->
            <div class="section-heading text-center mb-4">
                <span class="section-tag">
                    <i class="bi bi-diagram-3-fill" aria-hidden="true"></i> SITE DIRECTORY &amp; NAVIGATION
                </span>
                <h2>Structured Index of <span>All Pages</span></h2>
                <p>Easily navigate through our complete list of services, clinical specialities, patient guides, and hospital information.</p>
            </div>

            <!-- Interactive Search & Filter Bar -->
            <div class="sitemap-toolbar mb-5">
                <div class="row align-items-center g-3">
                    <div class="col-lg-6">
                        <div class="sitemap-search-wrap">
                            <i class="bi bi-search" aria-hidden="true"></i>
                            <input type="text" id="sitemapSearchInput" class="form-control sitemap-search-input" 
                                placeholder="Search pages, surgeries, or treatments (e.g. robotic, ACL, trauma)..."
                                aria-label="Search sitemap pages">
                            <button type="button" id="clearSearchBtn" class="btn-clear-search d-none" aria-label="Clear search">
                                <i class="bi bi-x-circle-fill"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <div class="sitemap-stats d-inline-flex align-items-center gap-3">
                            <span class="sitemap-badge-counter">
                                <i class="bi bi-check2-circle text-success me-1"></i> <strong id="visiblePageCount">19</strong> Active Pages
                            </span>
                            <a href="sitemap.xml" target="_blank" class="btn-xml-link" title="Open Machine-Readable XML Sitemap">
                                <i class="bi bi-filetype-xml me-1"></i> XML Sitemap
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Category Quick Jump Bar -->
                <div class="sitemap-categories-nav mt-3">
                    <button type="button" class="sitemap-cat-btn active" data-category="all">All Categories</button>
                    <button type="button" class="sitemap-cat-btn" data-category="main">Main Pages</button>
                    <button type="button" class="sitemap-cat-btn" data-category="replacement">Joint Replacement</button>
                    <button type="button" class="sitemap-cat-btn" data-category="sports">Arthroscopy &amp; Sports</button>
                    <button type="button" class="sitemap-cat-btn" data-category="trauma">Trauma &amp; Specialities</button>
                    <button type="button" class="sitemap-cat-btn" data-category="resources">Resources &amp; Contact</button>
                </div>
            </div>

            <!-- Sitemap Categorized Cards Grid -->
            <div class="row g-4" id="sitemapGrid">

                <!-- Category 1: Main & Information Pages -->
                <div class="col-lg-6 sitemap-category-col" data-category="main">
                    <div class="sitemap-card h-100">
                        <div class="sitemap-card-header">
                            <div class="sitemap-card-icon">
                                <i class="bi bi-grid-fill"></i>
                            </div>
                            <div>
                                <h3 class="sitemap-card-title">Main &amp; Core Pages</h3>
                                <span class="sitemap-card-sub">Essential clinic &amp; doctor profile pages</span>
                            </div>
                        </div>
                        <ul class="sitemap-links-list">
                            <li class="sitemap-link-item" data-title="home page orthopedic surgeon vadodara">
                                <a href="index.php" class="sitemap-link">
                                    <div class="sitemap-link-main">
                                        <strong>Home</strong>
                                        <span>Primary portal, doctor profile, robotic joint overview &amp; appointment booking</span>
                                    </div>
                                    <span class="sitemap-url-pill">/</span>
                                    <i class="bi bi-arrow-right sitemap-arrow"></i>
                                </a>
                            </li>
                            <li class="sitemap-link-item" data-title="about dr ashish kumar goyal qualifications fellowship">
                                <a href="about.php" class="sitemap-link">
                                    <div class="sitemap-link-main">
                                        <strong>About Dr. Ashish Kumar Goyal</strong>
                                        <span>Surgeon profile, UK NHS training, fellowship credentials &amp; surgical philosophy</span>
                                    </div>
                                    <span class="sitemap-url-pill">/about</span>
                                    <i class="bi bi-arrow-right sitemap-arrow"></i>
                                </a>
                            </li>
                            <li class="sitemap-link-item" data-title="specialities clinical expertise orthopedics">
                                <a href="specialities.php" class="sitemap-link">
                                    <div class="sitemap-link-main">
                                        <strong>Orthopaedic Specialities</strong>
                                        <span>Comprehensive overview of all clinical super-specialities and key focus areas</span>
                                    </div>
                                    <span class="sitemap-url-pill">/specialities</span>
                                    <i class="bi bi-arrow-right sitemap-arrow"></i>
                                </a>
                            </li>
                            <li class="sitemap-link-item" data-title="treatments services procedures hospital care">
                                <a href="treatments-services.php" class="sitemap-link">
                                    <div class="sitemap-link-main">
                                        <strong>Treatments &amp; Services</strong>
                                        <span>Full range of advanced joint replacement, arthroscopy, and reconstruction care</span>
                                    </div>
                                    <span class="sitemap-url-pill">/treatments-services</span>
                                    <i class="bi bi-arrow-right sitemap-arrow"></i>
                                </a>
                            </li>
                            <li class="sitemap-link-item" data-title="research publications medical papers journals">
                                <a href="research-publications.php" class="sitemap-link">
                                    <div class="sitemap-link-main">
                                        <strong>Research &amp; Publications</strong>
                                        <span>Peer-reviewed scientific journals, international case studies &amp; clinical trials</span>
                                    </div>
                                    <span class="sitemap-url-pill">/research-publications</span>
                                    <i class="bi bi-arrow-right sitemap-arrow"></i>
                                </a>
                            </li>
                            <li class="sitemap-link-item" data-title="blogs articles patient education joint health tips">
                                <a href="blogs.php" class="sitemap-link">
                                    <div class="sitemap-link-main">
                                        <strong>Health Blogs &amp; Articles</strong>
                                        <span>Patient education, recovery tips, knee care guidelines &amp; sports medicine</span>
                                    </div>
                                    <span class="sitemap-url-pill">/blogs</span>
                                    <i class="bi bi-arrow-right sitemap-arrow"></i>
                                </a>
                            </li>
                            <li class="sitemap-link-item" data-title="contact opd appointment clinic vadodara makarpura phone">
                                <a href="contact.php" class="sitemap-link">
                                    <div class="sitemap-link-main">
                                        <strong>Contact &amp; OPD Consultation</strong>
                                        <span>Clinic address, OPD consultation hours, emergency helpline &amp; booking form</span>
                                    </div>
                                    <span class="sitemap-url-pill">/contact</span>
                                    <i class="bi bi-arrow-right sitemap-arrow"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Category 2: Joint Replacement & Preservation -->
                <div class="col-lg-6 sitemap-category-col" data-category="replacement">
                    <div class="sitemap-card h-100">
                        <div class="sitemap-card-header">
                            <div class="sitemap-card-icon icon-blue">
                                <i class="bi bi-cpu-fill"></i>
                            </div>
                            <div>
                                <h3 class="sitemap-card-title">Joint Replacement &amp; Surgery</h3>
                                <span class="sitemap-card-sub">AI, robotic, minimally invasive knee &amp; hip procedures</span>
                            </div>
                        </div>
                        <ul class="sitemap-links-list">
                            <li class="sitemap-link-item" data-title="robotic joint replacement knee hip surgery ai sub-millimeter">
                                <a href="robotic-joint-replacement.php" class="sitemap-link">
                                    <div class="sitemap-link-main">
                                        <strong>Robotic Joint Replacement</strong>
                                        <span>Sub-millimeter AI-assisted robotic precision, ligament-sparing joint reconstruction</span>
                                    </div>
                                    <span class="sitemap-url-pill">/robotic-joint-replacement</span>
                                    <i class="bi bi-arrow-right sitemap-arrow"></i>
                                </a>
                            </li>
                            <li class="sitemap-link-item" data-title="total knee hip replacement tkr thr arthritis implants">
                                <a href="total-knee-hip-replacement.php" class="sitemap-link">
                                    <div class="sitemap-link-main">
                                        <strong>Total Knee &amp; Hip Replacement (TKR &amp; THR)</strong>
                                        <span>Advanced implants, personalized bone alignment, rapid same-day rehabilitation</span>
                                    </div>
                                    <span class="sitemap-url-pill">/total-knee-hip-replacement</span>
                                    <i class="bi bi-arrow-right sitemap-arrow"></i>
                                </a>
                            </li>
                            <li class="sitemap-link-item" data-title="revision daa hip replacement direct anterior approach">
                                <a href="revision-daa-hip-replacement.php" class="sitemap-link">
                                    <div class="sitemap-link-main">
                                        <strong>Revision &amp; DAA Hip Replacement</strong>
                                        <span>Muscle-sparing Direct Anterior Approach &amp; complex revision of worn hip implants</span>
                                    </div>
                                    <span class="sitemap-url-pill">/revision-daa-hip-replacement</span>
                                    <i class="bi bi-arrow-right sitemap-arrow"></i>
                                </a>
                            </li>
                            <li class="sitemap-link-item" data-title="joint replacement surgery partial knee unicompartmental">
                                <a href="joint-replacement-surgery.php" class="sitemap-link">
                                    <div class="sitemap-link-main">
                                        <strong>Joint Replacement Surgery Overview</strong>
                                        <span>Comprehensive surgical options for severe arthritis, joint pain &amp; mobility restoration</span>
                                    </div>
                                    <span class="sitemap-url-pill">/joint-replacement-surgery</span>
                                    <i class="bi bi-arrow-right sitemap-arrow"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Category 3: Arthroscopy & Sports Injuries -->
                <div class="col-lg-6 sitemap-category-col" data-category="sports">
                    <div class="sitemap-card h-100">
                        <div class="sitemap-card-header">
                            <div class="sitemap-card-icon icon-green">
                                <i class="bi bi-activity"></i>
                            </div>
                            <div>
                                <h3 class="sitemap-card-title">Arthroscopy &amp; Sports Medicine</h3>
                                <span class="sitemap-card-sub">Minimally invasive keyhole ligament &amp; cartilage care</span>
                            </div>
                        </div>
                        <ul class="sitemap-links-list">
                            <li class="sitemap-link-item" data-title="arthroscopy sports injuries acl pcl meniscus keyhole ligament tear">
                                <a href="arthroscopy-sports-injuries.php" class="sitemap-link">
                                    <div class="sitemap-link-main">
                                        <strong>Arthroscopy &amp; Sports Injuries</strong>
                                        <span>Keyhole arthroscopic surgery for ACL, PCL, meniscus repairs, rotator cuff &amp; instability</span>
                                    </div>
                                    <span class="sitemap-url-pill">/arthroscopy-sports-injuries</span>
                                    <i class="bi bi-arrow-right sitemap-arrow"></i>
                                </a>
                            </li>
                            <li class="sitemap-link-item" data-title="acl reconstruction ligament repair knee stability athlete recovery">
                                <a href="arthroscopy-sports-injuries.php#acl" class="sitemap-link">
                                    <div class="sitemap-link-main">
                                        <strong>ACL Reconstruction &amp; Ligament Balancing</strong>
                                        <span>Anatomic single &amp; double-bundle ligament grafts for high-performance athletic stability</span>
                                    </div>
                                    <span class="sitemap-url-pill">/arthroscopy-sports-injuries#acl</span>
                                    <i class="bi bi-arrow-right sitemap-arrow"></i>
                                </a>
                            </li>
                            <li class="sitemap-link-item" data-title="meniscus repair cartilage preservation joint cushion">
                                <a href="arthroscopy-sports-injuries.php#meniscus" class="sitemap-link">
                                    <div class="sitemap-link-main">
                                        <strong>Meniscus Repair &amp; Cartilage Restoration</strong>
                                        <span>Preserving natural knee shock absorbers through advanced suture techniques</span>
                                    </div>
                                    <span class="sitemap-url-pill">/arthroscopy-sports-injuries#meniscus</span>
                                    <i class="bi bi-arrow-right sitemap-arrow"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Category 4: Complex Trauma, Reconstruction & Specialities -->
                <div class="col-lg-6 sitemap-category-col" data-category="trauma">
                    <div class="sitemap-card h-100">
                        <div class="sitemap-card-header">
                            <div class="sitemap-card-icon icon-purple">
                                <i class="bi bi-bandaid-fill"></i>
                            </div>
                            <div>
                                <h3 class="sitemap-card-title">Complex Trauma &amp; Specialities</h3>
                                <span class="sitemap-card-sub">Fracture salvage, revision, oncology &amp; regenerative care</span>
                            </div>
                        </div>
                        <ul class="sitemap-links-list">
                            <li class="sitemap-link-item" data-title="complex trauma revision surgeries nonunion malunion implant failure">
                                <a href="complex-trauma-revision-surgeries.php" class="sitemap-link">
                                    <div class="sitemap-link-main">
                                        <strong>Complex Trauma &amp; Revision Surgeries</strong>
                                        <span>Treatment for non-union, malunion fractures, failed hardware &amp; post-surgical salvage</span>
                                    </div>
                                    <span class="sitemap-url-pill">/complex-trauma-revision-surgeries</span>
                                    <i class="bi bi-arrow-right sitemap-arrow"></i>
                                </a>
                            </li>
                            <li class="sitemap-link-item" data-title="complex trauma revision treatment fractures pelivic acetabular">
                                <a href="complex-trauma-revision.php" class="sitemap-link">
                                    <div class="sitemap-link-main">
                                        <strong>Complex Trauma &amp; Fracture Management</strong>
                                        <span>Emergency stabilization, high-energy injury care &amp; pelvic reconstruction</span>
                                    </div>
                                    <span class="sitemap-url-pill">/complex-trauma-revision</span>
                                    <i class="bi bi-arrow-right sitemap-arrow"></i>
                                </a>
                            </li>
                            <li class="sitemap-link-item" data-title="foot ankle surgeries fractures flatfoot deformity correction">
                                <a href="foot-ankle-surgeries.php" class="sitemap-link">
                                    <div class="sitemap-link-main">
                                        <strong>Foot &amp; Ankle Surgeries</strong>
                                        <span>Achilles tendon repair, ankle arthroscopy, flatfoot correction &amp; trauma fixation</span>
                                    </div>
                                    <span class="sitemap-url-pill">/foot-ankle-surgeries</span>
                                    <i class="bi bi-arrow-right sitemap-arrow"></i>
                                </a>
                            </li>
                            <li class="sitemap-link-item" data-title="orthopaedic oncology bone soft tissue tumor biopsy limb salvage">
                                <a href="orthopaedic-oncology.php" class="sitemap-link">
                                    <div class="sitemap-link-main">
                                        <strong>Orthopaedic Oncology</strong>
                                        <span>Comprehensive evaluation, biopsy &amp; limb salvage for bone and soft-tissue tumors</span>
                                    </div>
                                    <span class="sitemap-url-pill">/orthopaedic-oncology</span>
                                    <i class="bi bi-arrow-right sitemap-arrow"></i>
                                </a>
                            </li>
                            <li class="sitemap-link-item" data-title="regenerative medicine prp stem cell platelet rich plasma cartilage">
                                <a href="regenerative-medicine.php" class="sitemap-link">
                                    <div class="sitemap-link-main">
                                        <strong>Regenerative Medicine &amp; PRP</strong>
                                        <span>Non-invasive platelet-rich plasma (PRP) therapies for early arthritis &amp; tendon healing</span>
                                    </div>
                                    <span class="sitemap-url-pill">/regenerative-medicine</span>
                                    <i class="bi bi-arrow-right sitemap-arrow"></i>
                                </a>
                            </li>
                            <li class="sitemap-link-item" data-title="orthopedic treatment under ayushman bharat pmjay cashless surgery knee hip fracture">
                                <a href="orthopedic-treatment-under-ayushman-bharat.php" class="sitemap-link">
                                    <div class="sitemap-link-main">
                                        <strong>Orthopedic Treatment Under Ayushman Bharat (PM-JAY)</strong>
                                        <span>Complete patient guide to 100% cashless knee replacement, hip surgery, and trauma care</span>
                                    </div>
                                    <span class="sitemap-url-pill">/orthopedic-treatment-under-ayushman-bharat</span>
                                    <i class="bi bi-arrow-right sitemap-arrow"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Category 5: Patient Highlights & Fast Actions -->
                <div class="col-lg-12 sitemap-category-col" data-category="resources">
                    <div class="sitemap-card sitemap-card-wide">
                        <div class="sitemap-card-header">
                            <div class="sitemap-card-icon icon-teal">
                                <i class="bi bi-hospital-fill"></i>
                            </div>
                            <div>
                                <h3 class="sitemap-card-title">Patient Resources, Clinic Access &amp; Webmaster Links</h3>
                                <span class="sitemap-card-sub">OPD support, direct hospital desks &amp; technical endpoints</span>
                            </div>
                        </div>
                        <div class="row g-3 sitemap-resources-grid">
                            <div class="col-md-4 col-sm-6">
                                <div class="sitemap-resource-box">
                                    <i class="bi bi-telephone-outbound text-primary"></i>
                                    <div>
                                        <strong>OPD &amp; Emergency Helpline</strong>
                                        <a href="tel:+917805965989">+91 78059 65989</a>
                                        <small class="d-block text-muted">Direct phone assistance</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="sitemap-resource-box">
                                    <i class="bi bi-whatsapp text-success"></i>
                                    <div>
                                        <strong>WhatsApp Appointment Desk</strong>
                                        <a href="https://wa.me/917805965989?text=Hello%20Dr.%20Goyal%2C%20I%20would%20like%20to%20book%20an%20appointment." target="_blank" rel="noopener noreferrer">Chat on WhatsApp</a>
                                        <small class="d-block text-muted">Quick query &amp; slots</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="sitemap-resource-box">
                                    <i class="bi bi-geo-alt-fill text-danger"></i>
                                    <div>
                                        <strong>Clinic Location Map</strong>
                                        <a href="https://maps.google.com/?q=Ganesh+Plaza+JD+Nagar+Makarpura+Vadodara" target="_blank" rel="noopener noreferrer">Ganesh Plaza, Vadodara</a>
                                        <small class="d-block text-muted">Google Maps directions</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="sitemap-resource-box">
                                    <i class="bi bi-shield-check text-warning"></i>
                                    <div>
                                        <strong>Cashless TPA Desk</strong>
                                        <span>Tie-ups with All Major Insurers</span>
                                        <small class="d-block text-muted">Hassle-free approvals</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="sitemap-resource-box">
                                    <i class="bi bi-globe-americas text-info"></i>
                                    <div>
                                        <strong>International Patients</strong>
                                        <a href="contact.php">Remote Video Consultations</a>
                                        <small class="d-block text-muted">UK, Africa &amp; Middle East</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="sitemap-resource-box highlight-xml">
                                    <i class="bi bi-filetype-xml text-warning"></i>
                                    <div>
                                        <strong>XML Sitemap Endpoint</strong>
                                        <a href="sitemap.xml" target="_blank">sitemap.xml</a>
                                        <small class="d-block text-muted">Search Engine indexing protocol</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- No Results Message for Search -->
            <div id="noSitemapResults" class="text-center py-5 d-none">
                <i class="bi bi-search display-5 text-muted mb-3 d-block"></i>
                <h4 class="fw-bold">No matching pages found</h4>
                <p class="text-muted">Try searching with a different term, or reset the filter to view all categories.</p>
                <button type="button" class="btn btn-outline-warning rounded-pill px-4" id="resetSitemapSearch">Reset Search</button>
            </div>

        </div>
    </section>
</main>

<!-- ================= SITEMAP JAVASCRIPT ================= -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('sitemapSearchInput');
    const clearBtn = document.getElementById('clearSearchBtn');
    const resetBtn = document.getElementById('resetSitemapSearch');
    const catBtns = document.querySelectorAll('.sitemap-cat-btn');
    const linkItems = document.querySelectorAll('.sitemap-link-item');
    const catCols = document.querySelectorAll('.sitemap-category-col');
    const counter = document.getElementById('visiblePageCount');
    const noResults = document.getElementById('noSitemapResults');

    let currentCategory = 'all';

    function filterSitemap() {
        const query = searchInput.value.trim().toLowerCase();
        let visibleCount = 0;

        if (query.length > 0) {
            clearBtn.classList.remove('d-none');
        } else {
            clearBtn.classList.add('d-none');
        }

        catCols.forEach(col => {
            const colCategory = col.getAttribute('data-category');
            const matchesCat = (currentCategory === 'all' || currentCategory === colCategory);

            let colVisibleItems = 0;
            const items = col.querySelectorAll('.sitemap-link-item');

            if (items.length > 0) {
                items.forEach(item => {
                    const text = (item.getAttribute('data-title') || '' + ' ' + item.textContent).toLowerCase();
                    const matchesQuery = (query === '' || text.includes(query));

                    if (matchesCat && matchesQuery) {
                        item.style.display = '';
                        colVisibleItems++;
                        visibleCount++;
                    } else {
                        item.style.display = 'none';
                    }
                });

                if (colVisibleItems > 0 && matchesCat) {
                    col.style.display = '';
                } else {
                    col.style.display = 'none';
                }
            } else {
                // Category without link items (e.g. resources block)
                if (matchesCat && (query === '' || col.textContent.toLowerCase().includes(query))) {
                    col.style.display = '';
                    visibleCount += 1;
                } else {
                    col.style.display = 'none';
                }
            }
        });

        if (counter) {
            counter.textContent = visibleCount;
        }

        if (visibleCount === 0) {
            noResults.classList.remove('d-none');
        } else {
            noResults.classList.add('d-none');
        }
    }

    if (searchInput) {
        searchInput.addEventListener('input', filterSitemap);
    }

    if (clearBtn) {
        clearBtn.addEventListener('click', function () {
            searchInput.value = '';
            filterSitemap();
            searchInput.focus();
        });
    }

    if (resetBtn) {
        resetBtn.addEventListener('click', function () {
            searchInput.value = '';
            currentCategory = 'all';
            catBtns.forEach(btn => btn.classList.remove('active'));
            catBtns[0].classList.add('active');
            filterSitemap();
        });
    }

    catBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            catBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            currentCategory = this.getAttribute('data-category');
            filterSitemap();
        });
    });
});
</script>

<?php
$content = ob_get_clean();
require 'layout.php';
?>
