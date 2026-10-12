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
        'link' => 'paralysis-rehabilitation.php'
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

        <div class="row g-4 inssv-achievement-row">

            <div class="col-12 col-md-6 col-lg-4">
                <div class="inssv-card">
                    <span class="inssv-card-shine" aria-hidden="true"></span>
                    <div class="inssv-card-inner">
                        <h3 class="inssv-count">800+</h3>
                        <p class="inssv-label">Patients</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="inssv-card">
                    <span class="inssv-card-shine" aria-hidden="true"></span>
                    <div class="inssv-card-inner">
                        <h3 class="inssv-count">15+</h3>
                        <p class="inssv-label">Experienced Doctors</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
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

 <?php include 'footer.php'; ?>
