<?php include 'header.php'; ?>
<!-- =========================================================
     INDEX NEW THIRD SECTION
     PREMIUM ABOUT / EXPERIENCED DOCTORS SECTION
========================================================= -->
<section class="index_new_third_section" id="index_new_third_section">
    <div class="ints-bg-glow ints-bg-glow-one"></div>
    <div class="ints-bg-glow ints-bg-glow-two"></div>
    <div class="ints-pattern"></div>

    <div class="container ints-container">
        <div class="ints-main-card">
            <div class="ints-card-shine"></div>

            <!-- Decorative Tooth Icons -->
            <div class="ints-tooth ints-tooth-one">
                <svg viewBox="0 0 100 120" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M50 12C34 2 14 10 10 30C6 49 15 62 22 80C29 100 35 109 42 106C48 103 46 82 50 77C54 82 52 103 58 106C65 109 71 100 78 80C85 62 94 49 90 30C86 10 66 2 50 12Z"
                        fill="none" stroke="currentColor" stroke-width="3"/>
                </svg>
            </div>

            <div class="ints-tooth ints-tooth-two">
                <svg viewBox="0 0 100 120" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M50 12C34 2 14 10 10 30C6 49 15 62 22 80C29 100 35 109 42 106C48 103 46 82 50 77C54 82 52 103 58 106C65 109 71 100 78 80C85 62 94 49 90 30C86 10 66 2 50 12Z"
                        fill="none" stroke="currentColor" stroke-width="3"/>
                </svg>
            </div>

            <div class="row align-items-center g-4">
                <!-- LEFT CONTENT -->
                <div class="col-lg-6 col-md-12">
                    <div class="ints-content-block">
                        <div class="ints-subtitle-wrap">
                            <span class="ints-subtitle">About Us</span>
                            <span class="ints-subtitle-line"></span>
                        </div>

                        <h2 class="ints-title">Experienced Doctors</h2>

                        <p class="ints-description ints-tab-content active" data-tab-content="vision">
                            At SMART PHYSIO CARE, we are committed to providing exceptional
                            in-patient physiotherapy and rehabilitation services to help our
                            patients achieve their optimal level of function and quality of life.
                            Our team of highly trained and experienced physiotherapists,
                            occupational therapists, and other rehabilitation professionals use
                            a personalized and evidence-based approach to care, incorporating
                            the latest techniques and technologies.
                        </p>

                        <p class="ints-description ints-tab-content" data-tab-content="mission">
                            Our mission is to deliver compassionate rehabilitation care with a
                            patient-first approach. We focus on improving mobility, restoring
                            confidence, and helping every individual recover with the support of
                            advanced therapies, skilled professionals, and personalized treatment plans.
                        </p>

                        <p class="ints-description ints-tab-content" data-tab-content="strategy">
                            Our strategy is centered on clinical excellence, innovation, and
                            collaborative recovery planning. We combine modern physiotherapy
                            techniques, multidisciplinary expertise, and continuous patient
                            monitoring to create effective recovery journeys and long-term wellness outcomes.
                        </p>

                        <div class="ints-tab-buttons">
                            <button type="button" class="ints-tab-btn active" data-tab="vision">Vision</button>
                            <button type="button" class="ints-tab-btn" data-tab="mission">Mission</button>
                            <button type="button" class="ints-tab-btn" data-tab="strategy">Strategy</button>
                        </div>

                        <div class="ints-highlight-box">
                            <span class="ints-highlight-dot"></span>
                            <span class="ints-highlight-text">Right care at Right Time</span>
                        </div>
                    </div>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="col-lg-6 col-md-12">
                    <div class="ints-image-block">
                        <div class="ints-image-outer">
                            <div class="ints-image-shine"></div>
                            <img src="assets/images/shape/doc.jpeg" alt="smart physiocare hospital" class="ints-main-image">
                        </div>

                        <div class="ints-floating-badge ints-badge-one">
                            <i class="bi bi-heart-pulse-fill"></i>
                            <span>Expert Rehab Team</span>
                        </div>

                        <div class="ints-floating-badge ints-badge-two">
                            <i class="bi bi-shield-check"></i>
                            <span>Trusted Care</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
/* ============================================
   INDEX NEW SIXTH SECTION
   SMART PHYSIOCARE - OUR TEAM
   Total: 7 doctors

   Replace image paths with actual doctor photos.
============================================ */

$insixDoctors = [
    [
        'name' => 'Dr. B.V.V.S.N. PAVAN KUMAR',
        'qualification' => 'PT',
        'specialization' => 'M.P.T (Cardio and Pulmonary Rehabilitation Specialist), FNR (Fellowship in Neuro-Rehabilitation Specialist), Cancer Rehabilitation Specialist, Manual Therapist',
        'image' => 'assets/images/tinified/002.webp'
    ],
    [
        'name' => 'Dr. HARI PRASAD.P',
        'qualification' => 'BPT',
        'specialization' => 'COMAT-Manual Therapist, Sports Rehabilitation Specialist',
        'image' => 'assets/images/tinified/007.webp'
    ],
    [
        'name' => 'Dr. RAMJI RAO',
        'qualification' => 'BPT',
        'specialization' => 'Neuro-Rehabilitation Specialist, Paediatric Neuro-Rehabilitation Specialist',
        'image' => 'assets/images/tinified/005.webp'
    ],
    [
        'name' => 'Dr. KRISHNA VENI',
        'qualification' => 'MPT',
        'specialization' => 'Orthopedics, Cancer Rehabilitation Specialist',
        'image' => ' assets/images/tinified/001.webp'
    ],
    [
        'name' => 'Dr. K. PRASANNA',
        'qualification' => 'BPT',
        'specialization' => 'Neuro-Rehabilitation Specialist, Cancer Rehabilitation Specialist',
        'image' => 'assets/images/tinified/006.webp'
    ],
    [
        'name' => 'Dr. SUPRIYA',
        'qualification' => 'BPT',
        'specialization' => 'Obstetric and Gynecology Rehabilitation Specialist, Neuro Rehabilitation Specialist',
        'image' => 'assets/images/tinified/004.webp'
    ],
    [
        'name' => 'Dr. RAJESWARA RAO',
        'qualification' => 'PT, MPT',
        'specialization' => 'Musculoskeletal and Sports Rehabilitation',
        'image' => 'assets/images/tinified/003.webp'
    ]
];
?>

<!-- ==========================================
     INDEX NEW SIXTH SECTION - OUR TEAM
========================================== -->

<section class="index_new_sixth_section" id="index_new_sixth_section">

    <div class="insix-glow insix-glow-one" aria-hidden="true"></div>
    <div class="insix-glow insix-glow-two" aria-hidden="true"></div>
    <div class="insix-grid-pattern" aria-hidden="true"></div>

    <span class="insix-medical-cross insix-cross-one" aria-hidden="true">+</span>
    <span class="insix-medical-cross insix-cross-two" aria-hidden="true">+</span>

    <div class="container insix-container">

        <!-- SECTION HEADING -->
        <div class="insix-heading-wrap">

            <div class="insix-subtitle">
                <span class="insix-subtitle-dot"></span>
                MEET OUR SPECIALISTS
            </div>

            <h2 class="insix-heading">
                Our <span>Team</span>
            </h2>

            <p class="insix-heading-description">
                Meet our dedicated rehabilitation professionals.
            </p>

            <div class="insix-heading-line" aria-hidden="true"></div>

        </div>

        <!-- =====================================
             DESKTOP / LAPTOP DOCTOR GRID
             Visible from 992px onwards
        ====================================== -->

        <div class="insix-desktop-grid">

            <?php foreach ($insixDoctors as $doctor): ?>

                <article class="insix-doctor-card">

                    <div class="insix-image-box">

                        <img
                            src="<?php echo htmlspecialchars($doctor['image'], ENT_QUOTES, 'UTF-8'); ?>"
                            alt="<?php echo htmlspecialchars($doctor['name'], ENT_QUOTES, 'UTF-8'); ?>"
                            class="insix-doctor-image"
                            loading="lazy">

                        <div class="insix-image-light" aria-hidden="true"></div>

                        <span class="insix-image-accent" aria-hidden="true">
                            <i class="bi bi-heart-pulse"></i>
                        </span>

                    </div>

                    <div class="insix-card-content">

                        <div class="insix-card-line" aria-hidden="true"></div>

                        <h3 class="insix-doctor-name">
                            <?php echo htmlspecialchars($doctor['name'], ENT_QUOTES, 'UTF-8'); ?>
                        </h3>

                        <div class="insix-qualification">
                            <?php echo htmlspecialchars($doctor['qualification'], ENT_QUOTES, 'UTF-8'); ?>
                        </div>

                        <p class="insix-specialization">
                            <?php echo htmlspecialchars($doctor['specialization'], ENT_QUOTES, 'UTF-8'); ?>
                        </p>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

        <!-- =====================================
             TABLET & MOBILE SWIPER
             Visible below 992px
        ====================================== -->

        <div class="insix-slider-area">

            <div class="swiper insix-doctors-swiper">

                <div class="swiper-wrapper">

                    <?php foreach ($insixDoctors as $doctor): ?>

                        <div class="swiper-slide">

                            <article class="insix-doctor-card">

                                <div class="insix-image-box">

                                    <img
                                        src="<?php echo htmlspecialchars($doctor['image'], ENT_QUOTES, 'UTF-8'); ?>"
                                        alt="<?php echo htmlspecialchars($doctor['name'], ENT_QUOTES, 'UTF-8'); ?>"
                                        class="insix-doctor-image"
                                        loading="lazy">

                                    <div class="insix-image-light" aria-hidden="true"></div>

                                    <span class="insix-image-accent" aria-hidden="true">
                                        <i class="bi bi-heart-pulse"></i>
                                    </span>

                                </div>

                                <div class="insix-card-content">

                                    <div class="insix-card-line" aria-hidden="true"></div>

                                    <h3 class="insix-doctor-name">
                                        <?php echo htmlspecialchars($doctor['name'], ENT_QUOTES, 'UTF-8'); ?>
                                    </h3>

                                    <div class="insix-qualification">
                                        <?php echo htmlspecialchars($doctor['qualification'], ENT_QUOTES, 'UTF-8'); ?>
                                    </div>

                                    <p class="insix-specialization">
                                        <?php echo htmlspecialchars($doctor['specialization'], ENT_QUOTES, 'UTF-8'); ?>
                                    </p>

                                </div>

                            </article>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

            <!-- SWIPER CONTROLS -->
            <div class="insix-slider-controls">

                <button class="insix-prev" type="button"
                        aria-label="Previous doctor">
                    <i class="bi bi-arrow-left"></i>
                </button>

                <div class="insix-pagination"></div>

                <button class="insix-next" type="button"
                        aria-label="Next doctor">
                    <i class="bi bi-arrow-right"></i>
                </button>

            </div>

        </div>

    </div>

</section>

<!-- END INDEX NEW SIXTH SECTION -->

<?php include 'footer.php'; ?>