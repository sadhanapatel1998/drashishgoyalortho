<?php
ob_start();
include 'include/data.php';
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
                    <span class="current" aria-current="page">Research &amp; Publications</span>
                </nav>
                <h1 class="page-banner-title">Research &amp; <span>Publications</span></h1>
                <p class="page-banner-sub">
                    Advancing orthopaedic science through clinical research, biomechanics, and international collaborations.
                </p>
            </div>
        </div>
    </section>

    <!-- ================= 2. RESEARCH & PUBLICATIONS MAIN SECTION ================= -->
    <section class="research-page-section" aria-label="Academic research and global presence">
        <div class="container">
            <!-- Key Academic Metrics / Stats Bar -->
            <div class="research-stats-bar">
                <div class="row g-3 align-items-center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="research-stat-col">
                            <div class="research-stat-icon" aria-hidden="true">
                                <i class="bi bi-journal-medical"></i>
                            </div>
                            <div>
                                <div class="research-stat-num">3+</div>
                                <p class="research-stat-label">Indexed Publications &amp; Case Studies</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="research-stat-col">
                            <div class="research-stat-icon" aria-hidden="true">
                                <i class="bi bi-globe-americas"></i>
                            </div>
                            <div>
                                <div class="research-stat-num">20+</div>
                                <p class="research-stat-label">Countries Patient Reach &amp; Training</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="research-stat-col">
                            <div class="research-stat-icon" aria-hidden="true">
                                <i class="bi bi-award-fill"></i>
                            </div>
                            <div>
                                <div class="research-stat-num">Top 50</div>
                                <p class="research-stat-label">Reviewer Distinction (JCOT 2020)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="research-stat-col">
                            <div class="research-stat-icon" aria-hidden="true">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>
                            <div>
                                <div class="research-stat-num">MCh UK</div>
                                <p class="research-stat-label">Royal College of Surgeons &amp; NHS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Interactive Tab Navigation (Matching Old Site Filter Tabs) -->
            <div class="research-tabs-wrapper" role="tablist" aria-label="Research sections">
                <button type="button" class="research-tab-btn active" data-target="#section-publications" role="tab" aria-selected="true">
                    <i class="bi bi-journal-text" aria-hidden="true"></i> Research &amp; Publications
                </button>
                <button type="button" class="research-tab-btn" data-target="#section-global" role="tab" aria-selected="false">
                    <i class="bi bi-globe2" aria-hidden="true"></i> Global Presence
                </button>
                <button type="button" class="research-tab-btn" data-target="#section-impact" role="tab" aria-selected="false">
                    <i class="bi bi-shield-check" aria-hidden="true"></i> Impact on Orthopaedic Science
                </button>
                <!-- <button type="button" class="research-tab-btn" data-target="#section-stories" role="tab" aria-selected="false">
                    <i class="bi bi-person-lines-fill" aria-hidden="true"></i> Patient Stories &amp; Evidence
                </button> -->
            </div>

            <!-- Overview Lead Card -->
            <div class="research-overview-card">
                <h3><i class="bi bi-diamond-fill text-warning fs-6" aria-hidden="true"></i> Overview: Evidence-Based Surgical Care</h3>
                <p>
                    Dedicated to advancing orthopaedic science through rigorous clinical research, joint biomechanics, and international collaborations. Dr. Ashish Kumar Goyal’s work directly contributes to breakthrough innovations in robotic joint replacement, complex trauma salvage, arthroscopic ligament reconstruction, and regenerative medicine—translating academic discovery into safe, long-lasting clinical outcomes for patients.
                </p>
            </div>

            <!-- ================= SECTION A: NOTABLE PUBLICATIONS ================= -->
            <div id="section-publications" class="research-content-block mb-5">
                <div class="section-heading text-center mb-5">
                    <span class="section-tag">
                        <i class="bi bi-book-half" aria-hidden="true"></i> PEER-REVIEWED MEDICAL PAPERS
                    </span>
                    <h2>Notable <span>Publications &amp; Case Studies</span></h2>
                    <p>Indexed clinical case reports and biomechanical studies advancing modern orthopaedic techniques.</p>
                </div>

                <div class="row g-4 align-items-stretch">

                    <!-- Publication 1: Mangled Ankle Injury Salvage -->
                    <div class="col-lg-4 col-md-6">
                        <article class="pub-card">
                            <div class="pub-meta-top">
                                <span class="pub-journal-badge">
                                    <i class="bi bi-journal-bookmark-fill" aria-hidden="true"></i> JOCR Indexed
                                </span>
                                <span class="pub-tag">Complex Trauma Salvage</span>
                            </div>

                            <h3 class="pub-title">Successful Salvage of a Mangled Ankle Injury</h3>

                            <div class="pub-affil">
                                <i class="bi bi-building-check" aria-hidden="true"></i>
                                <span>Published in <em>Journal of Orthopaedic Case Reports</em></span>
                            </div>

                            <p class="pub-excerpt">
                                High-energy open fracture-dislocation with extensive soft tissue loss, bony comminution, and critical neurovascular threat successfully salvaged using a staged biological reconstruction protocol.
                            </p>

                            <ul class="pub-highlights">
                                <li><i class="bi bi-check2-circle" aria-hidden="true"></i> <strong>Limb Preservation:</strong> Avoided below-knee amputation in catastrophic injury.</li>
                                <li><i class="bi bi-check2-circle" aria-hidden="true"></i> <strong>Staged Debridement:</strong> Advanced negative pressure wound therapy and antibiotic bead protection.</li>
                                <li><i class="bi bi-check2-circle" aria-hidden="true"></i> <strong>Full Weight-Bearing:</strong> Restored stable plantigrade foot function and unassisted mobility.</li>
                            </ul>

                            <div class="pub-takeaway-box">
                                <strong>Clinical Takeaway for Patients</strong>
                                <p>Proves that even extreme, shattered injuries can be salvaged safely without amputation through methodical biological reconstruction.</p>
                            </div>

                            <button type="button" class="pub-action-btn" data-bs-toggle="modal" data-bs-target="#pubModal1">
                                Read Study Summary <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </button>
                        </article>
                    </div>

                    <!-- Publication 2: Chronic Tibial Tunnel Infection After ACL -->
                    <div class="col-lg-4 col-md-6">
                        <article class="pub-card">
                            <div class="pub-meta-top">
                                <span class="pub-journal-badge">
                                    <i class="bi bi-journal-bookmark-fill" aria-hidden="true"></i> Trauma International
                                </span>
                                <span class="pub-tag">Sports Arthroscopy</span>
                            </div>

                            <h3 class="pub-title">Chronic Tibial Tunnel Infection After ACL Reconstruction</h3>

                            <div class="pub-affil">
                                <i class="bi bi-building-check" aria-hidden="true"></i>
                                <span>Featured in <em>Trauma International Journal</em></span>
                            </div>

                            <p class="pub-excerpt">
                                Staged diagnostic and surgical protocol for eradicating deep-seated bone tunnel infections post-arthroscopic ACL reconstruction, maintaining joint stability while completely curing osteomyelitis.
                            </p>

                            <ul class="pub-highlights">
                                <li><i class="bi bi-check2-circle" aria-hidden="true"></i> <strong>Hardware Salvage:</strong> Safe extraction of infected interference hardware without cartilage damage.</li>
                                <li><i class="bi bi-check2-circle" aria-hidden="true"></i> <strong>Targeted Elution:</strong> Antibiotic cement spacers with targeted microbiological eradication.</li>
                                <li><i class="bi bi-check2-circle" aria-hidden="true"></i> <strong>Ligament Integrity:</strong> Preserved knee stability preventing persistent athletic disability.</li>
                            </ul>

                            <div class="pub-takeaway-box">
                                <strong>Clinical Takeaway for Patients</strong>
                                <p>Highlights specialized expertise in saving knee joints when complications or deep infections occur following ligament reconstruction surgery.</p>
                            </div>

                            <button type="button" class="pub-action-btn" data-bs-toggle="modal" data-bs-target="#pubModal2">
                                Read Study Summary <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </button>
                        </article>
                    </div>

                    <!-- Publication 3: Kinematics Research in Football Motion Models -->
                    <div class="col-lg-4 col-md-12">
                        <article class="pub-card">
                            <div class="pub-meta-top">
                                <span class="pub-journal-badge">
                                    <i class="bi bi-cpu-fill" aria-hidden="true"></i> UK Motion Lab
                                </span>
                                <span class="pub-tag">Biomechanics &amp; AI</span>
                            </div>

                            <h3 class="pub-title">Kinematics Research in Football Motion Models</h3>

                            <div class="pub-affil">
                                <i class="bi bi-geo-alt-fill" aria-hidden="true"></i>
                                <span>Conducted at <em>Institute of Motion Analysis Lab, UK</em></span>
                            </div>

                            <p class="pub-excerpt">
                                High-precision 3D kinematic analysis of rotational knee loads, cutting angles, and deceleration stresses in high-performance athletes to optimize surgical graft tensioning and implant alignment.
                            </p>

                            <ul class="pub-highlights">
                                <li><i class="bi bi-check2-circle" aria-hidden="true"></i> <strong>Dynamic 3D Modeling:</strong> Quantified joint forces during high-speed pivot and deceleration maneuvers.</li>
                                <li><i class="bi bi-check2-circle" aria-hidden="true"></i> <strong>Robotic Alignment:</strong> Informs sub-millimeter implant positioning to match individual kinematics.</li>
                                <li><i class="bi bi-check2-circle" aria-hidden="true"></i> <strong>Re-injury Prevention:</strong> Establishes objective functional criteria for safe return-to-sport.</li>
                            </ul>

                            <div class="pub-takeaway-box">
                                <strong>Clinical Takeaway for Patients</strong>
                                <p>Bridges engineering with surgical precision so your joint replacement or ACL reconstruction feels natural, balanced, and durable under high movement.</p>
                            </div>

                            <button type="button" class="pub-action-btn" data-bs-toggle="modal" data-bs-target="#pubModal3">
                                Read Study Summary <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </button>
                        </article>
                    </div>

                </div>
            </div>

            <!-- Academic Distinction & Peer Review Strip -->
            <div class="academic-strip mb-5">
                <div class="row g-3 align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="academic-strip-item">
                            <div class="academic-strip-icon" aria-hidden="true">
                                <i class="bi bi-patch-check-fill"></i>
                            </div>
                            <div class="academic-strip-text">
                                <strong>Top 50 Peer Reviewer (2020)</strong>
                                <span>Journal of Clinical Orthopaedics &amp; Trauma (JCOT)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="academic-strip-item">
                            <div class="academic-strip-icon" aria-hidden="true">
                                <i class="bi bi-award-fill"></i>
                            </div>
                            <div class="academic-strip-text">
                                <strong>Global Citizen Scholarship</strong>
                                <span>Awarded in the UK for MCh Orthopaedic Program</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="academic-strip-item">
                            <div class="academic-strip-icon" aria-hidden="true">
                                <i class="bi bi-heart-pulse-fill"></i>
                            </div>
                            <div class="academic-strip-text">
                                <strong>COVID Warrior Distinction 2020</strong>
                                <span>Indian Medical Association &amp; Apollo Hospital</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ================= SECTION B: GLOBAL PRESENCE ================= -->
            <div id="section-global" class="research-content-block mb-5">
                <div class="global-banner-card">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-7">
                            <div class="d-inline-flex align-items-center gap-2 mb-3 px-3 py-1 rounded-pill" style="background: rgba(245, 130, 32, 0.2); border: 1px solid rgba(245, 130, 32, 0.4);">
                                <i class="bi bi-globe2 text-warning fs-6" aria-hidden="true"></i>
                                <span class="small fw-semibold text-white text-uppercase" style="letter-spacing: 0.5px;">Global Reach &amp; UK Fellowship</span>
                            </div>

                            <h3 class="global-banner-title">
                                World-Class Orthopaedic Care <span>Beyond Borders</span>
                            </h3>

                            <p class="global-banner-desc">
                                Dr. Ashish Kumar Goyal’s surgical expertise and academic research have reached patients and surgical institutions across the world. Having completed intensive super-specialty training in the United Kingdom and collaborated with premier medical centres, he brings internationally validated protocols directly to his patients.
                            </p>

                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-3 p-3 rounded-3" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.08);">
                                        <i class="bi bi-airplane-engines text-warning fs-3" aria-hidden="true"></i>
                                        <div>
                                            <div class="fw-bold fs-5 text-white">20+ Countries</div>
                                            <span class="small text-muted">International Patient Reach</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-3 p-3 rounded-3" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.08);">
                                        <i class="bi bi-hospital text-warning fs-3" aria-hidden="true"></i>
                                        <div>
                                            <div class="fw-bold fs-5 text-white">NHS &amp; Europe</div>
                                            <span class="small text-muted">Surgical Training &amp; Fellowships</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column: How Global Exposure Benefits Patients -->
                        <div class="col-lg-5">
                            <div class="global-box-glass">
                                <h4><i class="bi bi-shield-check" aria-hidden="true"></i> How This Benefits Patients</h4>
                                <ul class="global-check-list">
                                    <li class="global-check-item">
                                        <div class="global-check-icon"><i class="bi bi-check-lg" aria-hidden="true"></i></div>
                                        <div>
                                            <strong class="text-white d-block">Access to Latest Global Methodologies</strong>
                                            <span class="small text-light opacity-75">Integration of UK &amp; European robotic navigation, sub-mm joint alignment, and advanced tissue sparing.</span>
                                        </div>
                                    </li>
                                    <li class="global-check-item">
                                        <div class="global-check-icon"><i class="bi bi-check-lg" aria-hidden="true"></i></div>
                                        <div>
                                            <strong class="text-white d-block">High Success Rate &amp; Safety Standards</strong>
                                            <span class="small text-light opacity-75">Rigorous infection control adhering to British Orthopaedic Association (BOA) and NHS clinical governance.</span>
                                        </div>
                                    </li>
                                    <li class="global-check-item">
                                        <div class="global-check-icon"><i class="bi bi-check-lg" aria-hidden="true"></i></div>
                                        <div>
                                            <strong class="text-white d-block">Trusted by International &amp; NRI Patients</strong>
                                            <span class="small text-light opacity-75">Seamless virtual second opinions, comprehensive travel surgery planning, and accelerated rehab protocols.</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ================= SECTION C: IMPACT ON ORTHOPAEDIC SCIENCE ================= -->
            <div id="section-impact" class="research-content-block mb-5">
                <div class="section-heading text-center mb-5">
                    <span class="section-tag">
                        <i class="bi bi-lightning-charge-fill" aria-hidden="true"></i> CLINICAL EXCELLENCE
                    </span>
                    <h2>Impact on <span>Orthopaedic Science</span></h2>
                    <p>Translating scientific research and surgical discovery into tangible clinical benefits for every patient.</p>
                </div>

                <div class="row g-4 align-items-stretch">
                    <!-- Impact Card 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="impact-card">
                            <div class="impact-icon-wrap" aria-hidden="true">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <h4>Improving Surgical Outcomes Through Research</h4>
                            <p>
                                Application of evidence-based parameters significantly reduces operative blood loss, decreases soft tissue trauma, eliminates surgical revision risks, and facilitates rapid walking within 24 to 48 hours of joint replacement.
                            </p>
                        </div>
                    </div>

                    <!-- Impact Card 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="impact-card">
                            <div class="impact-icon-wrap" aria-hidden="true">
                                <i class="bi bi-journal-check"></i>
                            </div>
                            <h4>Contributing to Medical Journals &amp; Case Studies</h4>
                            <p>
                                Active contribution as an author and recognized reviewer for top indexed medical journals (including JCOT), reviewing innovative global techniques and publishing pioneering trauma salvage methodologies.
                            </p>
                        </div>
                    </div>

                    <!-- Impact Card 3 -->
                    <div class="col-lg-4 col-md-12">
                        <div class="impact-card">
                            <div class="impact-icon-wrap" aria-hidden="true">
                                <i class="bi bi-droplet-half"></i>
                            </div>
                            <h4>Innovating Non-Invasive &amp; Regenerative Therapies</h4>
                            <p>
                                Championing joint-preservation through Platelet-Rich Plasma (PRP), bone marrow aspirate concentrate (BMAC), and biological osteotomies that delay or prevent the need for artificial joint replacement.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ================= SECTION D: PATIENT STORIES & CLINICAL EVIDENCE ================= -->
            <!-- <div id="section-stories" class="research-content-block mb-5">
                <div class="section-heading text-center mb-5">
                    <span class="section-tag">
                        <i class="bi bi-chat-heart-fill" aria-hidden="true"></i> EVIDENCE IN PRACTICE
                    </span>
                    <h2>Patient Stories &amp; <span>Clinical Recoveries</span></h2>
                    <p>Real experiences of patients whose mobility was restored through research-backed surgical techniques.</p>
                </div>

                <div class="row g-4">
                    <?php 
                    $researchTestimonials = array_slice($testimonials, 0, 3);
                    foreach ($researchTestimonials as $t): 
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 p-4" style="background: #ffffff; border: 1.5px solid #ebdace !important; border-radius: 18px; box-shadow: 0 6px 20px rgba(0,0,0,0.03);">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center text-white fw-bold" style="width: 46px; height: 46px; background: linear-gradient(135deg, #f58220 0%, #c85f00 100%); font-size: 16px;">
                                        <?= htmlspecialchars($t['initials']); ?>
                                    </div>
                                    <div>
                                        <h5 class="mb-0 fw-bold" style="font-family:'Montserrat',sans-serif; font-size: 16px; color:#171717;"><?= htmlspecialchars($t['name']); ?></h5>
                                        <span class="small text-muted"><?= htmlspecialchars($t['location']); ?></span>
                                    </div>
                                </div>
                                <div class="text-warning small" aria-label="5 out of 5 stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                            <div class="badge align-self-start mb-3 px-3 py-1 rounded-pill" style="background:#fff5ec; color:#c85f00; font-size:12px; font-weight:600;">
                                <?= htmlspecialchars($t['procedure']); ?>
                            </div>
                            <p class="text-secondary small mb-0" style="line-height: 1.7;">
                                "<?= htmlspecialchars($t['review']); ?>"
                            </p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div> -->

            <!-- ================= CALL TO ACTION BANNER ================= -->
            <div class="mt-5 p-4 p-md-5 rounded-4 text-center position-relative overflow-hidden" style="background: linear-gradient(135deg, #171717 0%, #262626 100%); color:#ffffff; border: 1px solid rgba(245, 130, 32, 0.3);">
                <div class="position-relative" style="z-index: 2;">
                    <span class="d-inline-flex align-items-center gap-2 mb-3 px-3 py-1 rounded-pill small fw-semibold" style="background: rgba(245,130,32,0.2); color: #f58220; border: 1px solid rgba(245,130,32,0.4);">
                        <i class="bi bi-shield-check"></i> SECOND OPINIONS &amp; COMPLEX CASE CONSULTATIONS
                    </span>
                    <h3 class="fw-bold mb-3" style="font-family:'Montserrat',sans-serif; font-size: clamp(22px, 3vw, 32px);">
                        Seeking an Evidence-Based Second Opinion?
                    </h3>
                    <p class="text-light opacity-75 mx-auto mb-4" style="max-width: 650px; font-size: 15px; line-height: 1.7;">
                        Whether dealing with an unhealed fracture, knee arthritis, or failed previous surgery, consult Dr. Ashish Kumar Goyal for an honest, research-backed evaluation and personalized roadmap to pain-free mobility.
                    </p>
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <a href="contact.php" class="btn btn-cta d-inline-flex align-items-center gap-2">
                            <i class="bi bi-calendar2-check" aria-hidden="true"></i> Book Consultation
                        </a>
                        <a href="https://wa.me/918347378713?text=Hello%20Dr.%20Ashish%20Kumar%20Goyal%2C%20I%20would%20like%20to%20consult%20regarding%20an%20Orthopaedic%20Second%20Opinion." 
                           target="_blank" rel="noopener noreferrer" 
                           class="btn btn-outline-light d-inline-flex align-items-center gap-2"
                           style="border-radius: 50px; padding: 12px 26px; font-weight: 600;">
                            <i class="bi bi-whatsapp text-success" aria-hidden="true"></i> WhatsApp Now
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<!-- ================= MODALS FOR PUBLICATION ABSTRACTS ================= -->

<!-- Modal 1: Mangled Ankle Injury -->
<div class="modal fade" id="pubModal1" tabindex="-1" aria-labelledby="pubModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
            <div class="modal-header text-white" style="background: linear-gradient(135deg, #171717 0%, #292929 100%); border-bottom: 3px solid #f58220; padding: 22px 28px;">
                <div>
                    <span class="badge mb-2" style="background: #f58220; color: #fff; font-size: 11px;">Indexed Case Report • JOCR</span>
                    <h5 class="modal-title fw-bold" id="pubModal1Label" style="font-family:'Montserrat',sans-serif;">Successful Salvage of a Mangled Ankle Injury</h5>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4" style="font-family:'Poppins',sans-serif; color: #374151; font-size: 14.5px; line-height: 1.8;">
                <h6 class="fw-bold text-dark mb-2" style="font-family:'Montserrat',sans-serif;">Clinical Background &amp; Challenge</h6>
                <p>
                    Mangled extremity injuries involving the ankle joint represent one of the most difficult challenges in trauma orthopaedics, carrying high historical amputation rates of up to 40%. The patient presented with catastrophic high-energy open fracture-dislocation with extensive soft tissue degloving, severe bony comminution, and contamination.
                </p>
                <h6 class="fw-bold text-dark mb-2 mt-4" style="font-family:'Montserrat',sans-serif;">Surgical Protocol &amp; Reconstruction</h6>
                <p>
                    Dr. Ashish Kumar Goyal executed a methodical staged biological reconstruction protocol:
                </p>
                <ul class="mb-3 ps-3">
                    <li><strong>Stage 1:</strong> Immediate meticulous debridement in Class 100 sterile operating theater with temporary spanning external fixation to re-align length and axis without compromising damaged periosteal blood flow.</li>
                    <li><strong>Stage 2:</strong> Targeted application of negative pressure wound therapy (NPWT) and local antibiotic elution to sterilize the contaminated wound bed.</li>
                    <li><strong>Stage 3:</strong> Definitive anatomical articular reconstruction utilizing low-profile titanium locked compression plates and autologous cancellous bone grafting to bridge bone defects.</li>
                </ul>
                <h6 class="fw-bold text-dark mb-2 mt-4" style="font-family:'Montserrat',sans-serif;">Clinical Outcome &amp; Patient Impact</h6>
                <p class="mb-0">
                    The salvage protocol succeeded in 100% wound healing with complete eradication of infection. At long-term follow-up, the patient regained a pain-free, stable, plantigrade foot with solid radiographic union, returning to independent weight-bearing walking and avoiding lifelong disability.
                </p>
            </div>
            <div class="modal-footer bg-light px-4 py-3 border-0">
                <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">Close</button>
                <a href="contact.php" class="btn btn-cta">Consult Dr. Goyal</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2: Chronic Tibial Tunnel Infection After ACL -->
<div class="modal fade" id="pubModal2" tabindex="-1" aria-labelledby="pubModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
            <div class="modal-header text-white" style="background: linear-gradient(135deg, #171717 0%, #292929 100%); border-bottom: 3px solid #f58220; padding: 22px 28px;">
                <div>
                    <span class="badge mb-2" style="background: #f58220; color: #fff; font-size: 11px;">Sports Medicine • Trauma International</span>
                    <h5 class="modal-title fw-bold" id="pubModal2Label" style="font-family:'Montserrat',sans-serif;">Chronic Tibial Tunnel Infection After ACL Reconstruction</h5>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4" style="font-family:'Poppins',sans-serif; color: #374151; font-size: 14.5px; line-height: 1.8;">
                <h6 class="fw-bold text-dark mb-2" style="font-family:'Montserrat',sans-serif;">Clinical Background &amp; Dilemma</h6>
                <p>
                    Post-operative infection following anterior cruciate ligament (ACL) reconstruction occurs in 0.5%–1.8% of cases but poses a grave risk: uncontrolled infection can rapidly destroy articular cartilage, induce severe joint stiffness (arthrofibrosis), and cause permanent ligament graft failure. Tibial tunnel osteomyelitis presents unique complexities due to deep retained fixation hardware.
                </p>
                <h6 class="fw-bold text-dark mb-2 mt-4" style="font-family:'Montserrat',sans-serif;">Staged Eradication Protocol</h6>
                <p>
                    The published technique delineates a two-stage salvage approach:
                </p>
                <ul class="mb-3 ps-3">
                    <li><strong>Arthroscopic Debridement:</strong> Complete arthroscopic washout of the knee joint with delicate preservation of the healthy intra-articular ACL graft fibers.</li>
                    <li><strong>Hardware Extraction &amp; Tunnel Reaming:</strong> Safe removal of loose interference screws followed by thorough debridement and curettage of necrotic tibial bone walls.</li>
                    <li><strong>High-Dose Antibiotic Spacers:</strong> Implantation of biodegradable vancomycin and tobramycin-impregnated calcium sulfate beads directly filling the bone tunnel dead space.</li>
                </ul>
                <h6 class="fw-bold text-dark mb-2 mt-4" style="font-family:'Montserrat',sans-serif;">Results</h6>
                <p class="mb-0">
                    Achieved complete microbiological clearance with normalization of inflammatory markers (ESR/CRP). The patient maintained full knee range-of-motion (0°–135°) and objective ligament stability without recurrence of infection.
                </p>
            </div>
            <div class="modal-footer bg-light px-4 py-3 border-0">
                <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">Close</button>
                <a href="contact.php" class="btn btn-cta">Consult Dr. Goyal</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3: Kinematics Research in Football Motion Models -->
<div class="modal fade" id="pubModal3" tabindex="-1" aria-labelledby="pubModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
            <div class="modal-header text-white" style="background: linear-gradient(135deg, #171717 0%, #292929 100%); border-bottom: 3px solid #f58220; padding: 22px 28px;">
                <div>
                    <span class="badge mb-2" style="background: #f58220; color: #fff; font-size: 11px;">Motion Analysis • UK Lab</span>
                    <h5 class="modal-title fw-bold" id="pubModal3Label" style="font-family:'Montserrat',sans-serif;">Kinematics Research in Football Motion Models</h5>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4" style="font-family:'Poppins',sans-serif; color: #374151; font-size: 14.5px; line-height: 1.8;">
                <h6 class="fw-bold text-dark mb-2" style="font-family:'Montserrat',sans-serif;">Study Overview &amp; Biomechanical Modeling</h6>
                <p>
                    Conducted at the Institute of Motion Analysis Lab in the United Kingdom, this research investigated multi-planar joint kinematics during sudden deceleration, lateral side-stepping, and pivot landing maneuvers common to competitive football athletes.
                </p>
                <h6 class="fw-bold text-dark mb-2 mt-4" style="font-family:'Montserrat',sans-serif;">Key Biomechanical Findings</h6>
                <p>
                    Using dynamic infrared motion capture and synchronous ground reaction force plates:
                </p>
                <ul class="mb-3 ps-3">
                    <li>Identified specific rotational torque thresholds where ACL tensile strain reaches peak failure risk during non-contact pivot landings.</li>
                    <li>Mapped tibial anterior translation under varied quadriceps and hamstring co-contraction ratios.</li>
                    <li>Correlated coronal plane knee alignment with articular contact stress distribution.</li>
                </ul>
                <h6 class="fw-bold text-dark mb-2 mt-4" style="font-family:'Montserrat',sans-serif;">Translation to Modern Surgery</h6>
                <p class="mb-0">
                    These laboratory findings directly inform Dr. Ashish Goyal’s surgical philosophy: precise anatomical femoral and tibial tunnel placement in ACL reconstruction, and sub-millimeter robotic component balancing in knee arthroplasty to recreate natural knee kinematics and prevent premature implant wear.
                </p>
            </div>
            <div class="modal-footer bg-light px-4 py-3 border-0">
                <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">Close</button>
                <a href="contact.php" class="btn btn-cta">Consult Dr. Goyal</a>
            </div>
        </div>
    </div>
</div>

<!-- Client-side Interactive Filter Tab Handler -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabButtons = document.querySelectorAll('.research-tab-btn');
    tabButtons.forEach(btn => {
        btn.addEventListener('click', function () {
            tabButtons.forEach(b => {
                b.classList.remove('active');
                b.setAttribute('aria-selected', 'false');
            });
            this.classList.add('active');
            this.setAttribute('aria-selected', 'true');

            const targetSelector = this.getAttribute('data-target');
            const targetEl = document.querySelector(targetSelector);
            if (targetEl) {
                targetEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
});
</script>

<?php
$content = ob_get_clean();
require 'layout.php';
?>
