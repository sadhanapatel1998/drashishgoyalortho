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
                    <span class="current" aria-current="page">Blogs &amp; Articles</span>
                </nav>

                <h1 class="page-banner-title">
                    Health Articles &amp; <span>Orthopaedic Insights</span>
                </h1>
                <p class="page-banner-sub">
                    Evidence-based medical guidance on robotic joint replacement, sports injuries, and fracture recovery.
                </p>
            </div>
        </div>
    </section>

    <!-- ================= 2. BLOGS MAIN SECTION ================= -->
    <section class="blog-section">
        <div class="container">

            <div class="section-heading text-center">
                <span class="section-tag">
                    <i class="bi bi-journal-medical" aria-hidden="true"></i> PATIENT EDUCATION
                </span>
                <h2>Knowledge for <span>Better Joint Health</span></h2>
                <p>Written and curated by Dr. Ashish Kumar Goyal to help patients make informed decisions about their orthopaedic care.</p>
            </div>

            <!-- Category Filter Pills -->
            <div class="blog-filter-bar">
                <button type="button" class="blog-filter-btn active" data-filter="all">All Articles</button>
                <button type="button" class="blog-filter-btn" data-filter="robotic">Robotic Joint Surgery</button>
                <button type="button" class="blog-filter-btn" data-filter="sports">Sports Medicine</button>
                <button type="button" class="blog-filter-btn" data-filter="trauma">Trauma &amp; Revision</button>
                <button type="button" class="blog-filter-btn" data-filter="wellness">Joint Wellness</button>
            </div>

            <!-- Blog Articles Grid -->
            <div class="row g-4" id="blogGrid">

                <!-- Blog 1: Robotic Knee Replacement -->
                <div class="col-lg-4 col-md-6 blog-item" data-category="robotic">
                    <article class="blog-card">
                        <div class="blog-thumb">
                            <img src="assets/images/blog/blog-1.jpg"
                                alt="Robotic vs Traditional Knee Replacement surgery comparison" loading="eager"
                                width="400" height="220">
                            <span class="blog-category-badge">Robotic Joint Surgery</span>
                        </div>
                        <div class="blog-body">
                            <div class="blog-meta">
                                <span><i class="bi bi-calendar3" aria-hidden="true"></i> Nov 2026</span>
                                <span><i class="bi bi-clock" aria-hidden="true"></i> 4 min read</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#blogModal1">
                                    Robotic vs Traditional Knee Replacement: What Every Patient Should Know
                                </a>
                            </h3>
                            <p class="blog-excerpt">
                                Discover how 3D CT patient modeling and haptic boundary protection achieve 0.5 mm cutting precision, preserve ligaments, and enable walking within 24 hours.
                            </p>
                            <a href="javascript:void(0)" class="blog-readmore" data-bs-toggle="modal" data-bs-target="#blogModal1">
                                Read Full Article <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog 2: ACL Recovery -->
                <div class="col-lg-4 col-md-6 blog-item" data-category="sports">
                    <article class="blog-card">
                        <div class="blog-thumb">
                            <img src="assets/images/blog/blog-2.jpg"
                                alt="ACL Tear Symptoms, Arthroscopy and Recovery for athletes" loading="eager"
                                width="400" height="220">
                            <span class="blog-category-badge">Sports Medicine</span>
                        </div>
                        <div class="blog-body">
                            <div class="blog-meta">
                                <span><i class="bi bi-calendar3" aria-hidden="true"></i> Oct 2026</span>
                                <span><i class="bi bi-clock" aria-hidden="true"></i> 5 min read</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#blogModal2">
                                    ACL Tear: Warning Signs, Keyhole Arthroscopy &amp; Return-to-Play Timeline
                                </a>
                            </h3>
                            <p class="blog-excerpt">
                                An athlete’s comprehensive guide to recognizing ligament rupture, understanding 4K arthroscopic autograft reconstruction, and structured rehabilitation.
                            </p>
                            <a href="javascript:void(0)" class="blog-readmore" data-bs-toggle="modal" data-bs-target="#blogModal2">
                                Read Full Article <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog 3: Knee Stiffness Exercises -->
                <div class="col-lg-4 col-md-6 blog-item" data-category="wellness">
                    <article class="blog-card">
                        <div class="blog-thumb">
                            <img src="assets/images/blog/blog-3.jpg"
                                alt="Daily exercises to reduce knee stiffness and arthritis pain" loading="eager"
                                width="400" height="220">
                            <span class="blog-category-badge">Joint Wellness</span>
                        </div>
                        <div class="blog-body">
                            <div class="blog-meta">
                                <span><i class="bi bi-calendar3" aria-hidden="true"></i> Oct 2026</span>
                                <span><i class="bi bi-clock" aria-hidden="true"></i> 3 min read</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#blogModal3">
                                    5 Daily Exercises to Relieve Knee Stiffness and Strengthen Cartilage
                                </a>
                            </h3>
                            <p class="blog-excerpt">
                                Simple, low-impact physiotherapy movements recommended by orthopaedic specialists to preserve synovial lubrication and relieve early joint stiffness.
                            </p>
                            <a href="javascript:void(0)" class="blog-readmore" data-bs-toggle="modal" data-bs-target="#blogModal3">
                                Read Full Article <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog 4: Direct Anterior Approach (DAA) Hip -->
                <div class="col-lg-4 col-md-6 blog-item" data-category="robotic">
                    <article class="blog-card">
                        <div class="blog-thumb">
                            <img src="assets/images/services/joint-replacement-surgery.jpg"
                                alt="Direct Anterior Approach DAA Hip Replacement in Vadodara" loading="lazy"
                                width="400" height="220">
                            <span class="blog-category-badge">Robotic Joint Surgery</span>
                        </div>
                        <div class="blog-body">
                            <div class="blog-meta">
                                <span><i class="bi bi-calendar3" aria-hidden="true"></i> Sep 2026</span>
                                <span><i class="bi bi-clock" aria-hidden="true"></i> 4 min read</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#blogModal4">
                                    Direct Anterior Approach (DAA) Hip Replacement: The Muscle-Sparing Advantage
                                </a>
                            </h3>
                            <p class="blog-excerpt">
                                How navigating between natural intermuscular planes without cutting gluteal tendons eliminates posterior hip precautions and speeds up recovery.
                            </p>
                            <a href="javascript:void(0)" class="blog-readmore" data-bs-toggle="modal" data-bs-target="#blogModal4">
                                Read Full Article <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog 5: Non-Union Fractures & Revision -->
                <div class="col-lg-4 col-md-6 blog-item" data-category="trauma">
                    <article class="blog-card">
                        <div class="blog-thumb">
                            <img src="assets/images/services/complex-trauma-revision.jpg"
                                alt="Non-Union Fractures and Revision Trauma Surgery in Vadodara" loading="lazy"
                                width="400" height="220">
                            <span class="blog-category-badge">Trauma &amp; Revision</span>
                        </div>
                        <div class="blog-body">
                            <div class="blog-meta">
                                <span><i class="bi bi-calendar3" aria-hidden="true"></i> Aug 2026</span>
                                <span><i class="bi bi-clock" aria-hidden="true"></i> 5 min read</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#blogModal5">
                                    Non-Union Fractures: Why Some Bones Fail to Heal &amp; How Revision Fixes It
                                </a>
                            </h3>
                            <p class="blog-excerpt">
                                An in-depth clinical explanation of delayed union vs. non-union, why plates break, and how biological bone grafting and locked implants salvage limbs.
                            </p>
                            <a href="javascript:void(0)" class="blog-readmore" data-bs-toggle="modal" data-bs-target="#blogModal5">
                                Read Full Article <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog 6: Platelet-Rich Plasma (PRP) -->
                <div class="col-lg-4 col-md-6 blog-item" data-category="wellness">
                    <article class="blog-card">
                        <div class="blog-thumb">
                            <img src="assets/images/services/regenerative-medicine.jpg"
                                alt="Platelet Rich Plasma PRP therapy for knee joint pain" loading="lazy"
                                width="400" height="220">
                            <span class="blog-category-badge">Joint Wellness</span>
                        </div>
                        <div class="blog-body">
                            <div class="blog-meta">
                                <span><i class="bi bi-calendar3" aria-hidden="true"></i> Jul 2026</span>
                                <span><i class="bi bi-clock" aria-hidden="true"></i> 4 min read</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#blogModal6">
                                    Platelet-Rich Plasma (PRP) in Orthopaedics: Can It Delay Knee Replacement?
                                </a>
                            </h3>
                            <p class="blog-excerpt">
                                How autologous cellular growth factors reduce joint inflammation in early Grade 1–2 osteoarthritis and chronic tendonitis without surgery.
                            </p>
                            <a href="javascript:void(0)" class="blog-readmore" data-bs-toggle="modal" data-bs-target="#blogModal6">
                                Read Full Article <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </article>
                </div>

            </div>

            <!-- Newsletter / Contact Box -->
            <div class="blog-newsletter-card text-center text-lg-start d-flex flex-wrap align-items-center justify-content-between">
                <div>
                    <h3 class="fw-bold mb-2">Have a Question About an <span>Orthopaedic Condition?</span></h3>
                    <p class="text-white-50 mb-0" style="max-width: 600px;">
                        Consult Dr. Ashish Kumar Goyal in Vadodara to review your diagnostic reports, discuss treatment options, and get personalized advice.
                    </p>
                </div>
                <div class="d-flex flex-wrap gap-3 mt-3 mt-lg-0">
                    <a href="contact.php" class="btn btn-cta d-inline-flex align-items-center gap-2">
                        <i class="bi bi-calendar2-check" aria-hidden="true"></i> Book Consultation
                    </a>
                    <a href="tel:+917805965989" class="btn btn-outline-light d-inline-flex align-items-center gap-2"
                        style="border-radius: 50px; padding: 12px 24px; font-weight: 600;">
                        <i class="bi bi-telephone-fill text-warning" aria-hidden="true"></i> +91 78059 65989
                    </a>
                </div>
            </div>

        </div>
    </section>

</main>

<!-- ================= ARTICLE MODALS ================= -->

<!-- Modal 1 -->
<div class="modal fade" id="blogModal1" tabindex="-1" aria-labelledby="bmLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 rounded-4 shadow">
            <div class="modal-header border-bottom pb-3">
                <div>
                    <span class="badge bg-warning text-dark mb-1">Robotic Joint Surgery</span>
                    <h4 class="modal-title fw-bold" id="bmLabel1" style="font-family:'Montserrat',sans-serif;">Robotic vs Traditional Knee Replacement: What Every Patient Should Know</h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4" style="font-family:'Poppins',sans-serif; font-size:14.5px; line-height:1.8; color:#374151;">
                <p>When considering total or partial knee replacement for advanced osteoarthritis, one of the most common questions patients ask is: <em>"How does robotic-assisted surgery differ from traditional knee replacement, and is it really worth it?"</em></p>
                
                <h5 class="fw-bold mt-4 text-dark" style="font-family:'Montserrat',sans-serif;">1. Pre-Operative 3D CT Blueprint vs. 2D X-Rays</h5>
                <p>Traditional surgery uses standard 2D X-rays and manual cutting jigs. Because every patient's bone shape, rotational profile, and ligament tension are unique, manual jigs introduce small deviations. Robotic systems generate a personalized 3D CT scan of your joint before making any incision, allowing Dr. Ashish Goyal to determine the ideal implant size, rotation, and alignment beforehand.</p>

                <h5 class="fw-bold mt-4 text-dark" style="font-family:'Montserrat',sans-serif;">2. Haptic Safety Boundaries</h5>
                <p>During surgery, the robotic arm operates within haptic boundaries defined by the pre-operative plan. If the cutting saw touches tissue outside the intended bone cut, the robot instantly stops cutting. This active safety boundary eliminates accidental damage to the posterior cruciate ligament (PCL), collateral ligaments, nerves, and popliteal vessels.</p>

                <h5 class="fw-bold mt-4 text-dark" style="font-family:'Montserrat',sans-serif;">3. Sub-Vastus Muscle Preservation</h5>
                <p>Because robotic cuts are sub-millimeter accurate (0.5 mm &amp; 0.5°), Dr. Goyal accesses the joint between natural muscle planes without cutting the quadriceps tendon. Less muscle trauma directly translates into significantly lower post-operative pain, negligible blood loss, and walking within 24 hours.</p>

                <div class="alert alert-light border mt-4">
                    <strong>Conclusion:</strong> Robotic knee replacement does not replace the surgeon; it equips an expert surgeon with aerospace precision to ensure your implant lasts 25–30+ years and feels like a natural knee.
                </div>
            </div>
            <div class="modal-footer border-top">
                <a href="contact.php" class="btn btn-cta">Consult Dr. Goyal on Robotic Surgery</a>
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="blogModal2" tabindex="-1" aria-labelledby="bmLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 rounded-4 shadow">
            <div class="modal-header border-bottom pb-3">
                <div>
                    <span class="badge bg-warning text-dark mb-1">Sports Medicine</span>
                    <h4 class="modal-title fw-bold" id="bmLabel2" style="font-family:'Montserrat',sans-serif;">ACL Tear: Warning Signs, Keyhole Arthroscopy &amp; Return-to-Play Timeline</h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4" style="font-family:'Poppins',sans-serif; font-size:14.5px; line-height:1.8; color:#374151;">
                <p>The anterior cruciate ligament (ACL) is the primary stabilizer preventing the tibia from sliding forward relative to the femur. Sudden stops, twisting while running, or landing awkwardly from a jump often cause complete ACL tears in cricket, football, and badminton athletes.</p>

                <h5 class="fw-bold mt-4 text-dark" style="font-family:'Montserrat',sans-serif;">Key Warning Signs:</h5>
                <ul>
                    <li>An audible "pop" or tearing sensation deep inside the knee at the moment of injury.</li>
                    <li>Rapid swelling (hemarthrosis) within 2 to 4 hours of trauma.</li>
                    <li>Feeling of instability or the knee "giving way" when trying to pivot or walk on uneven ground.</li>
                </ul>

                <h5 class="fw-bold mt-4 text-dark" style="font-family:'Montserrat',sans-serif;">Why Doesn't the ACL Heal on Its Own?</h5>
                <p>The ACL is immersed in synovial fluid and lacks the direct blood supply needed to form a bridging scar. While conservative management with physiotherapy may suffice for sedentary individuals, active persons and athletes who leave an ACL tear untreated risk secondary meniscus damage and early onset osteoarthritis within 5 to 10 years.</p>

                <h5 class="fw-bold mt-4 text-dark" style="font-family:'Montserrat',sans-serif;">Arthroscopic Autograft Reconstruction:</h5>
                <p>Using 4 mm keyhole incisions and a 4K arthroscope, Dr. Ashish Goyal reconstructs the torn ligament using a hamstring tendon autograft. Tunnels are drilled at the exact anatomic footprints, and the graft is rigidly locked with bio-composite screws, allowing early weight-bearing and return to competitive sports within 6 to 9 months.</p>
            </div>
            <div class="modal-footer border-top">
                <a href="contact.php" class="btn btn-cta">Schedule Knee Arthroscopy Evaluation</a>
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="blogModal3" tabindex="-1" aria-labelledby="bmLabel3" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 rounded-4 shadow">
            <div class="modal-header border-bottom pb-3">
                <div>
                    <span class="badge bg-warning text-dark mb-1">Joint Wellness</span>
                    <h4 class="modal-title fw-bold" id="bmLabel3" style="font-family:'Montserrat',sans-serif;">5 Daily Exercises to Relieve Knee Stiffness and Strengthen Cartilage</h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4" style="font-family:'Poppins',sans-serif; font-size:14.5px; line-height:1.8; color:#374151;">
                <p>Joint stiffness upon waking up or after prolonged sitting is a hallmark of early cartilage degeneration. Maintaining muscular strength around the joint stabilizes knee kinematics and distributes body weight evenly.</p>

                <h5 class="fw-bold mt-4 text-dark" style="font-family:'Montserrat',sans-serif;">1. Isometric Quad Sets</h5>
                <p>Lie flat on your back with legs straight. Tighten your thigh muscles (quadriceps) by pushing the back of your knee down toward the bed. Hold for 5 seconds and release. Repeat 15 times per leg.</p>

                <h5 class="fw-bold mt-4 text-dark" style="font-family:'Montserrat',sans-serif;">2. Straight Leg Raises (SLR)</h5>
                <p>Bend one knee with foot flat on the floor; keep the other leg straight. Tighten the thigh of the straight leg and raise it 12 inches off the ground. Hold for 3 seconds and slowly lower. Perform 2 sets of 10 repetitions.</p>

                <h5 class="fw-bold mt-4 text-dark" style="font-family:'Montserrat',sans-serif;">3. Seated Knee Extensions</h5>
                <p>Sit upright in a sturdy chair. Slowly straighten your affected leg out in front until fully extended. Hold for 5 seconds, feel the quadriceps contraction, and slowly lower. 15 repetitions, twice daily.</p>

                <h5 class="fw-bold mt-4 text-dark" style="font-family:'Montserrat',sans-serif;">4. Gentle Hamstring Stretch</h5>
                <p>Sit on the edge of a chair, extend one leg forward with heel on the ground and toes pointing up. Gently lean your chest toward your toes until you feel a comfortable stretch behind your thigh. Hold 20 seconds; do not bounce.</p>

                <h5 class="fw-bold mt-4 text-dark" style="font-family:'Montserrat',sans-serif;">5. Stationary Cycling with Low Resistance</h5>
                <p>Riding a stationary upright cycle for 15–20 minutes daily circulates synovial fluid across articular cartilage, nourishing chondrocytes without high-impact joint loading.</p>
            </div>
            <div class="modal-footer border-top">
                <a href="contact.php" class="btn btn-cta">Book Physiotherapy Consultation</a>
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 4 -->
<div class="modal fade" id="blogModal4" tabindex="-1" aria-labelledby="bmLabel4" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 rounded-4 shadow">
            <div class="modal-header border-bottom pb-3">
                <div>
                    <span class="badge bg-warning text-dark mb-1">Robotic Joint Surgery</span>
                    <h4 class="modal-title fw-bold" id="bmLabel4" style="font-family:'Montserrat',sans-serif;">Direct Anterior Approach (DAA) Hip Replacement: The Muscle-Sparing Advantage</h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4" style="font-family:'Poppins',sans-serif; font-size:14.5px; line-height:1.8; color:#374151;">
                <p>Total Hip Replacement is often referred to as the "operation of the century" for its extraordinary ability to eradicate hip pain. However, the surgical technique used to access the hip joint plays a critical role in how quickly you recover.</p>

                <h5 class="fw-bold mt-4 text-dark" style="font-family:'Montserrat',sans-serif;">What is the Direct Anterior Approach?</h5>
                <p>Unlike traditional posterior hip surgery that detaches the external rotator muscles and capsule, DAA enters between natural muscular planes (tensor fasciae latae and sartorius). No muscle or tendon is cut from the femur.</p>

                <h5 class="fw-bold mt-4 text-dark" style="font-family:'Montserrat',sans-serif;">Key Advantages for Patients:</h5>
                <ul>
                    <li><strong>No Strict Hip Precautions:</strong> Patients can bend down to tie shoes, sit in standard chairs, and sleep on their side immediately after surgery without fear of dislocation.</li>
                    <li><strong>Significantly Less Pain:</strong> Uncut muscle tissue experiences far less inflammatory trauma, dramatically reducing opioid painkiller needs.</li>
                    <li><strong>Accurate Leg Length Control:</strong> Patients are operated in the supine (face-up) position, allowing real-time fluoroscopic X-ray verification of leg length equivalence during component placement.</li>
                </ul>
            </div>
            <div class="modal-footer border-top">
                <a href="contact.php" class="btn btn-cta">Inquire About DAA Hip Surgery</a>
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 5 -->
<div class="modal fade" id="blogModal5" tabindex="-1" aria-labelledby="bmLabel5" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 rounded-4 shadow">
            <div class="modal-header border-bottom pb-3">
                <div>
                    <span class="badge bg-warning text-dark mb-1">Trauma &amp; Revision</span>
                    <h4 class="modal-title fw-bold" id="bmLabel5" style="font-family:'Montserrat',sans-serif;">Non-Union Fractures: Why Some Bones Fail to Heal &amp; How Revision Fixes It</h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4" style="font-family:'Poppins',sans-serif; font-size:14.5px; line-height:1.8; color:#374151;">
                <p>When a bone fracture fails to unite after 6 to 9 months, it is clinically classified as a non-union. This condition causes persistent pain, mobility loss, and eventual breakage of plates or screws placed during initial surgery.</p>

                <h5 class="fw-bold mt-4 text-dark" style="font-family:'Montserrat',sans-serif;">Why Do Fractures Become Non-Unions?</h5>
                <ul>
                    <li><strong>Mechanical Instability:</strong> Insufficient fixation that allows micro-motion beyond what osteoblasts can tolerate.</li>
                    <li><strong>Biological Deficiency:</strong> Poor blood supply to bone ends, commonly seen in severe open fractures or after excessive soft-tissue stripping.</li>
                    <li><strong>Infection:</strong> Low-grade bacterial biofilm on metal implants that inhibits bone bridging.</li>
                    <li><strong>Patient Factors:</strong> Heavy tobacco smoking, uncontrolled diabetes, and severe vitamin D deficiency.</li>
                </ul>

                <h5 class="fw-bold mt-4 text-dark" style="font-family:'Montserrat',sans-serif;">The Revision Solution:</h5>
                <p>Dr. Ashish Kumar Goyal uses biological fixation principles: carefully extracting broken hardware, clearing fibrotic non-union tissue, applying autologous cancellous bone graft rich in osteogenic factors, and achieving absolute stability with modern anatomical locked compression plates.</p>
            </div>
            <div class="modal-footer border-top">
                <a href="contact.php" class="btn btn-cta">Book Trauma Revision Evaluation</a>
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 6 -->
<div class="modal fade" id="blogModal6" tabindex="-1" aria-labelledby="bmLabel6" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 rounded-4 shadow">
            <div class="modal-header border-bottom pb-3">
                <div>
                    <span class="badge bg-warning text-dark mb-1">Joint Wellness</span>
                    <h4 class="modal-title fw-bold" id="bmLabel6" style="font-family:'Montserrat',sans-serif;">Platelet-Rich Plasma (PRP) in Orthopaedics: Can It Delay Knee Replacement?</h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4" style="font-family:'Poppins',sans-serif; font-size:14.5px; line-height:1.8; color:#374151;">
                <p>Platelet-Rich Plasma (PRP) is an autologous biologic therapy prepared by centrifuging a small sample of the patient's own blood to isolate platelets concentrated up to 5 to 7 times normal baseline levels.</p>

                <h5 class="fw-bold mt-4 text-dark" style="font-family:'Montserrat',sans-serif;">How Does PRP Work?</h5>
                <p>Platelets contain alpha granules packed with essential growth factors (PDGF, TGF-beta, VEGF, and IGF-1). When injected into an arthritic joint or degenerated tendon under ultrasound guidance, these bio-active proteins suppress inflammatory cytokines (IL-1beta), stimulate hyaluronic acid synthesis, and reduce cartilage friction.</p>

                <h5 class="fw-bold mt-4 text-dark" style="font-family:'Montserrat',sans-serif;">Who Is an Ideal Candidate?</h5>
                <ul>
                    <li>Patients with mild-to-moderate (Grade 1 and 2) knee osteoarthritis who want non-surgical relief.</li>
                    <li>Active individuals suffering from chronic patellar tendonitis, tennis elbow, or plantar fasciitis unresponsive to physiotherapy.</li>
                    <li>Younger patients looking to delay surgical intervention while maintaining daily mobility.</li>
                </ul>

                <p class="mt-3"><em>Note: PRP does not regrow completely worn-away cartilage in severe Grade 4 bone-on-bone arthritis, for which robotic joint replacement remains the definitive gold standard.</em></p>
            </div>
            <div class="modal-footer border-top">
                <a href="contact.php" class="btn btn-cta">Schedule PRP Consultation</a>
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const filterBtns = document.querySelectorAll('.blog-filter-btn');
    const blogItems = document.querySelectorAll('.blog-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const filter = this.getAttribute('data-filter');

            blogItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?php
$content = ob_get_clean();
require 'layout.php';
?>
