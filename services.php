<?php include 'header.php'; ?>
<?php
/* =============================================
   SMART PHYSIOCARE - SERVICES DATA
   TOTAL 11 SERVICES

   IMPORTANT:
   Replace sample image paths with the actual
   image paths used in your old website.
============================================= */

$snfServices = [
    [
        'title' => 'Paralysis Rehabilitation',
        'description' => 'Paralysis is the inability to move muscles on your own and with purpose. It may involve complete loss of movement or significant muscle weakness.',
        'image' => 'assets/images/Paralysis Rehabilitation.webp',
        'icon' => 'bi-person-wheelchair',
        'link' => 'paralysis-rehabilitation-center.php'
    ],
    [
        'title' => 'Spinal Cord Injury Rehabilitation',
        'description' => 'Our specialized neurological physiotherapy team provides rehabilitation care for patients with spinal cord injuries.',
        'image' => 'assets/images/Spinal Cord Injury Rehabilitation-1.webp',
        'icon' => 'bi-activity',
        'link' => 'spinal-cord-rehabilitation.php'
    ],
    [
        'title' => 'Cancer Rehabilitation',
        'description' => 'Personalized rehabilitation support focused on improving physical function, mobility and quality of life for people affected by cancer.',
        'image' => 'assets/images/tinified1/cancer.webp',
        'icon' => 'bi-heart-pulse',
        'link' => 'cancer-rehabilitation.php'
    ],
    [
        'title' => 'Cervical Spondylosis',
        'description' => 'Cervical spondylosis involves age-related degenerative changes in the bones, discs and soft tissues of the neck.',
        'image' => 'assets/images/cervical spondylosis.webp',
        'icon' => 'bi-bandaid',
        'link' => 'cervical-spondylosis.php'
    ],
    [
        'title' => 'Lumbar Spondylosis',
        'description' => 'Lumbar spondylosis is a degenerative condition affecting the lower back. Physiotherapy may help manage symptoms and improve mobility.',
        'image' => 'assets/images/lumbar spondylosis.webp',
        'icon' => 'bi-activity',
        'link' => 'lumbar-spondylosis.php'
    ],
    [
        'title' => 'Frozen Shoulders',
        'description' => 'Frozen shoulder, also known as adhesive capsulitis, causes stiffness, discomfort and reduced movement of the shoulder joint.',
        'image' => 'assets/images/sholuder.webp',
        'icon' => 'bi-bandaid',
        'link' => 'frozen-shoulder.php'
    ],
    [
        'title' => 'Palliative Care',
        'description' => 'Supportive care for people with serious illnesses, focused on easing symptoms and improving comfort and quality of life.',
        'image' => 'assets/images/img-sr3.webp',
        'icon' => 'bi-heart-pulse',
        'link' => 'palliative-care.php'
    ],
    [
        'title' => 'Geriatric Rehabilitation',
        'description' => 'Rehabilitation for older adults focused on improving balance, strength, mobility and confidence in everyday activities.',
        'image' => 'assets/images/img-sr4.webp',
        'icon' => 'bi-person-heart',
        'link' => 'geriatric-rehabilitation.php'
    ],
    [
        'title' => 'Pre/Post-Pregnancy Rehabilitation',
        'description' => 'Physiotherapy support for mobility, strength and physical well-being during pregnancy and postpartum recovery.',
        'image' => 'assets/images/pre or post ptegnancy-.webp',
        'icon' => 'bi-hearts',
        'link' => 'pregnancy-rehabilitation.php'
    ],
    [
        'title' => 'Osteoarthritis',
        'description' => 'Osteoarthritis is a degenerative joint condition affecting cartilage and surrounding tissues. Rehabilitation focuses on movement and function.',
        'image' => 'assets/images/Osteoarthritis.webp',
        'icon' => 'bi-bandaid',
        'link' => 'osteoarthritis.php'
    ],
    [
        'title' => 'Pain Management',
        'description' => 'Physiotherapy plays a role in managing acute and chronic pain through personalized assessment, exercise and rehabilitation approaches.',
        'image' => 'assets/images/Pain Management.webp',
        'icon' => 'bi-heart-pulse',
        'link' => 'pain-management.php'
    ]
];
?>

<!-- =============================================
     SERVICE NEW FIRST SECTION
     PREMIUM REHABILITATION SERVICES
============================================= -->

<section class="service_new_first_section"
         id="service_new_first_section">

    <!-- Background decorative elements -->
    <div class="snfs-bg-glow snfs-glow-one"
         aria-hidden="true"></div>

    <div class="snfs-bg-glow snfs-glow-two"
         aria-hidden="true"></div>

    <div class="snfs-background-grid"
         aria-hidden="true"></div>

    <span class="snfs-decor-cross snfs-cross-one"
          aria-hidden="true">+</span>

    <span class="snfs-decor-cross snfs-cross-two"
          aria-hidden="true">+</span>

    <div class="container snfs-container">

        <!-- SECTION TITLE -->
        <div class="snfs-title-area">

            <div class="snfs-eyebrow">

                <span class="snfs-eyebrow-line"></span>

                <span>
                    SMART PHYSIOCARE HOSPITAL
                </span>

                <span class="snfs-eyebrow-line"></span>

            </div>

            <h1 class="snfs-section-title">
                Our <span>Services</span>
            </h1>

            <p class="snfs-section-description">
                Comprehensive physiotherapy and rehabilitation
                care to support better mobility, independence
                and quality of life.
            </p>

            <div class="snfs-title-decoration"
                 aria-hidden="true">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </div>

        <!-- SERVICES GRID -->
        <div class="snfs-services-grid">

            <?php foreach ($snfServices as $snfService): ?>

                <article class="snfs-service-card">

                    <!-- IMAGE SECTION -->
                    <div class="snfs-image-area">

                        <div class="snfs-image-wrap">

                            <img
                                src="<?php echo htmlspecialchars($snfService['image'], ENT_QUOTES, 'UTF-8'); ?>"
                                alt="<?php echo htmlspecialchars($snfService['title'], ENT_QUOTES, 'UTF-8'); ?>"
                                class="snfs-service-image"
                                loading="lazy">

                        </div>

                        <div class="snfs-image-shade"
                             aria-hidden="true"></div>

                        <!-- FLOATING ICON -->
                        <div class="snfs-floating-icon"
                             aria-hidden="true">

                            <i class="bi <?php
                                echo htmlspecialchars(
                                    $snfService['icon'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                );
                            ?>"></i>

                        </div>

                    </div>

                    <!-- CONTENT SECTION -->
                    <div class="snfs-card-content">

                        <div class="snfs-card-heading-wrap">

                            <span class="snfs-card-heading-accent"
                                  aria-hidden="true"></span>

                            <h2 class="snfs-service-title">
                                <?php echo htmlspecialchars(
                                    $snfService['title'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ); ?>
                            </h2>

                        </div>

                        <p class="snfs-service-description">
                            <?php echo htmlspecialchars(
                                $snfService['description'],
                                ENT_QUOTES,
                                'UTF-8'
                            ); ?>
                        </p>

                        <a
                            href="<?php echo htmlspecialchars(
                                $snfService['link'],
                                ENT_QUOTES,
                                'UTF-8'
                            ); ?>"
                            class="snfs-read-more">

                            <span>Read More</span>

                            <span class="snfs-read-arrow">
                                <i class="bi bi-arrow-up-right"></i>
                            </span>

                        </a>

                    </div>

                    <!-- Animated bottom border -->
                    <span class="snfs-card-bottom-light"
                          aria-hidden="true"></span>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>

<!-- END SERVICE NEW FIRST SECTION -->







<!-- =========================================
     SERVICE NEW SECOND SECTION
     OUR ACHIEVEMENTS
========================================= -->
<section class="service_new_second_section" id="service_new_second_section">

    <div class="inssv-bg-glow inssv-glow-one" aria-hidden="true"></div>
    <div class="inssv-bg-glow inssv-glow-two" aria-hidden="true"></div>

    <div class="container inssv-container">

        <div class="inssv-heading-wrap">
            <span class="inssv-subtitle">Our Achievements</span>
            <h2 class="inssv-title">Our Achievements</h2>
        </div>

        <!-- Added justify-content-start (or justify-content-center) & reduced column widths -->
        <div class="row g-3 inssv-achievement-row align-items-center">

            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="inssv-card">
                    <span class="inssv-card-shine" aria-hidden="true"></span>
                    <div class="inssv-card-inner">
                        <h3 class="inssv-count">800+</h3>
                        <p class="inssv-label">Patients</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="inssv-card">
                    <span class="inssv-card-shine" aria-hidden="true"></span>
                    <div class="inssv-card-inner">
                        <h3 class="inssv-count">15+</h3>
                        <p class="inssv-label">Experienced Doctors</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="inssv-card">
                    <span class="inssv-card-shine" aria-hidden="true"></span>
                    <div class="inssv-card-inner">
                        <h3 class="inssv-count">2+</h3>
                        <p class="inssv-label">Branches</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="inssv-dot-pattern" aria-hidden="true">
            <span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span>
        </div>

    </div>
</section>
<!-- END SERVICE NEW SECOND SECTION -->





<!-- =========================================
     SERVICE NEW THIRD SECTION
========================================= -->
<section class="service_new_third_section" id="service_new_third_section">
    <div class="snts-bg-shape snts-shape-one"></div>
    <div class="snts-bg-shape snts-shape-two"></div>
    <div class="snts-glow snts-glow-left"></div>
    <div class="snts-glow snts-glow-right"></div>

    <div class="container-fluid snts-container">
        <div class="snts-heading-wrap">
            <span class="snts-subtitle">Meet Our Professionals</span>
            <h2 class="snts-title">Browse By <span>Categories</span></h2>
            <p class="snts-description">
                Explore our specialised physiotherapy services and visit us at our convenient
                locations to get expert care, personalised for your needs.
            </p>
        </div>

        <div class="row g-4 align-items-stretch snts-main-row">

            <!-- SPECIALITY CARD -->
            <div class="col-12 col-md-6 col-xl-4 d-flex">
                <div class="snts-card snts-light-card h-100 w-100">
                    <div class="snts-icon-circle">
                        <i class="bi bi-heart-pulse"></i>
                    </div>

                    <div class="snts-card-pattern snts-speciality-pattern"></div>

                    <h3 class="snts-card-title">By Speciality</h3>
                    <p class="snts-mini-label">EXPERT CARE FOR EVERY NEED</p>

                    <ul class="snts-list">
                        <li><i class="bi bi-chevron-right"></i> Orthopedic</li>
                        <li><i class="bi bi-chevron-right"></i> Neurology</li>
                        <li><i class="bi bi-chevron-right"></i> Cardio and Pulmonary</li>
                        <li><i class="bi bi-chevron-right"></i> Paediatrics</li>
                        <li><i class="bi bi-chevron-right"></i> Geriatric</li>
                        <li><i class="bi bi-chevron-right"></i> Sports</li>
                        <li><i class="bi bi-chevron-right"></i> Obstetric and Gynecology</li>
                        <li><i class="bi bi-chevron-right"></i> Post Operative Care For Early Recovery After Major Surgeries</li>
                    </ul>

                    <div class="snts-card-bottom">
                        <a href="#" class="snts-btn-link">
                            <span class="snts-arrow-circle"><i class="bi bi-arrow-right"></i></span>
                            <span>Explore Specialities</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- LOCATION CARD -->
            <div class="col-12 col-md-6 col-xl-4 d-flex">
                <div class="snts-card snts-light-card h-100 w-100">
                    <div class="snts-icon-circle">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>

                    <div class="snts-card-pattern snts-location-pattern"></div>

                    <h3 class="snts-card-title">By Location</h3>
                    <p class="snts-mini-label">VISIT OUR CLINICS</p>

                    <div class="snts-location-block">
                        <div class="snts-location-icon">
                            <i class="bi bi-hospital"></i>
                        </div>
                        <div class="snts-location-content">
                            <h4>Kakinada</h4>
                            <p>
                                D.No.2-365, 1st Floor, Above Surya Pharmacy,
                                OPP. 3rd Battalion Commander Office,
                                APSP-1st Gate, Kakinada-533005, A.P.
                            </p>
                            <a href="#">View on Map <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <div class="snts-location-divider"></div>

                    <div class="snts-location-block">
                        <div class="snts-location-icon">
                            <i class="bi bi-hospital"></i>
                        </div>
                        <div class="snts-location-content">
                            <h4>Rajahmundry</h4>
                            <p>
                                SMART Physiocare Hospital, OPP. Dr. Rajababu Garu ENT Hospital,
                                Danavaipeta, Rajahmundry-533103, E.G.Dt., A.P.
                            </p>
                            <a href="#">View on Map <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <div class="snts-card-bottom">
                        <a href="#" class="snts-btn-link">
                            <span class="snts-arrow-circle"><i class="bi bi-arrow-right"></i></span>
                            <span>Get Directions</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- FAQ CARD -->
            <div class="col-12 col-xl-4 d-flex">
                <div class="snts-card snts-faq-card h-100 w-100">
                    <div class="snts-faq-badge">Support</div>

                    <h3 class="snts-faq-title">Frequently Asked Questions.</h3>
                    <p class="snts-faq-text">
                        Find quick answers to common questions about our services,
                        appointments and care at Smart Physio Care Hospital.
                    </p>

                    <div class="accordion snts-accordion" id="sntsFaqAccordion">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="sntsFaqOneHead">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sntsFaqOne" aria-expanded="false" aria-controls="sntsFaqOne">
                                    What services does Smart Physio Care Hospital provide?
                                </button>
                            </h2>
                            <div id="sntsFaqOne" class="accordion-collapse collapse" aria-labelledby="sntsFaqOneHead" data-bs-parent="#sntsFaqAccordion">
                                <div class="accordion-body">
                                    We provide orthopaedic, neurological, sports, geriatric, paediatric,
                                    cardio-pulmonary and rehabilitation-focused physiotherapy services.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="sntsFaqTwoHead">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#sntsFaqTwo" aria-expanded="true" aria-controls="sntsFaqTwo">
                                    How can I schedule an appointment?
                                </button>
                            </h2>
                            <div id="sntsFaqTwo" class="accordion-collapse collapse show" aria-labelledby="sntsFaqTwoHead" data-bs-parent="#sntsFaqAccordion">
                                <div class="accordion-body">
                                    You can schedule an appointment by calling our reception desk during
                                    working hours. Our team will assist you in finding a convenient date and time.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="sntsFaqThreeHead">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sntsFaqThree" aria-expanded="false" aria-controls="sntsFaqThree">
                                    What should I wear for my physiotherapy session?
                                </button>
                            </h2>
                            <div id="sntsFaqThree" class="accordion-collapse collapse" aria-labelledby="sntsFaqThreeHead" data-bs-parent="#sntsFaqAccordion">
                                <div class="accordion-body">
                                    Please wear comfortable clothing that allows easy movement and gives
                                    access to the treatment area if needed.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- =========================================
     END SERVICE NEW THIRD SECTION
========================================= -->

 <?php include 'footer.php'; ?>
