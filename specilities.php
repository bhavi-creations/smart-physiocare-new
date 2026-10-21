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
        'title' => 'Orthopedic',
        'description' => 'Orthopedics is a medical specialty focused on the diagnosis and treatment of musculoskeletal conditions, encompassing bones, joints, muscles, ligaments, and tendons. Orthopedic physicians employ both surgical and non-surgical interventions to address issues ranging from fractures and arthritis to sports injuries. By utilizing advanced techniques and technologies, orthopedics aims to restore mobility, alleviate pain, and enhance the overall quality of life for patients with orthopedic concerns.',
        'image' => './assets/images/Orthopedic (384 x 256).png',
        'icon' => 'bi-person-wheelchair',
        // 'link' => 'paralysis-rehabilitation-center.php'
    ],
    [
        'title' => 'Neurology',
        'description' => 'Neurology is the medical specialty focused on disorders of the nervous system, encompassing the brain, spinal cord, and peripheral nerves. Neurologists diagnose and treat a wide range of conditions, including neurological diseases, strokes, seizures, and movement disorders. This field plays a crucial role in understanding and addressing the complexities of the human nervous system, advancing both medical knowledge and patient care.',
        'image' => './assets/images/Neurology- (370x 247).png',
        'icon' => 'bi-activity',
        // 'link' => 'spinal-cord-injury-rehabilitation-center.php'
    ],
    [
        'title' => 'Cardio and pulmonary',
        'description' => 'Cardiovascular health is crucial for overall well-being, encompassing the heart and blood vessels. Regular aerobic exercise, such as running or swimming, strengthens the cardiovascular system, improving heart function and circulation. Pulmonary health relates to the respiratory system, where efficient lung function is vital for oxygen exchange. Combined, cardio and pulmonary wellness contribute to increased stamina, enhanced endurance, and a healthier respiratory capacity.',
        'image' => './assets/images/Cardio and pulmonary(384x 216).png',
        'icon' => 'bi-heart-pulse',
        // 'link' => 'cancer-rehabilitation.php'
    ],
    [
        'title' => 'Paediatrics',
        'description' => 'Pediatrics is the branch of medicine dedicated to the health and well-being of children, from infancy to adolescence. Pediatricians specialize in the diagnosis, treatment, and prevention of various childhood illnesses and developmental issues. Their focus extends beyond physical health to encompass the unique emotional and social needs of young patients. By providing comprehensive care, pediatricians play a crucial role in promoting the overall growth and resilience of children.',
        'image' => './assets/images/Paediatrics- (384261).png',
        'icon' => 'bi-bandaid',
        // 'link' => 'cervical-spondylosis.php'
    ],
    [
        'title' => 'Geriatric',
        'description' => 'Geriatrics is the branch of medicine focused on the health and care of elderly individuals. It addresses the unique medical needs and challenges associated with aging, including the management of chronic conditions and age-related diseases. Geriatricians specialize in providing comprehensive healthcare to promote the well-being and quality of life in older adults. As the global population continues to age, the importance of geriatric medicine in addressing the complexities of aging becomes increasingly significant.',
        'image' => 'assets/images/lumbar spondylosis.webp',
        'icon' => 'bi-activity',
        // 'link' => 'lumbar-spondylosis.php'
    ],
    [
        'title' => 'Sports',
        'description' => 'At Smart Physiotherapy Hospital, we recognize the vital role sports play in maintaining a healthy lifestyle. Our expert physiotherapists are dedicated to optimizing athletic performance and preventing injuries. Through personalized rehabilitation programs, we aim to enhance athletes well-being, ensuring they can continue pursuing their passion with strength and resilience. Trust us to support your journey to peak physical condition.',
        'image' => './assets/images/Sports  (384261).png',
        'icon' => 'bi-bandaid',
        // 'link' => 'frozen-shoulders.php'
    ],
    [
        'title' => 'Obstetric and gynecology',
        'description' => 'At Smart Physiotherapy Hospital, our Obstetric and Gynecology department is dedicated to providing comprehensive care for womens health. Our expert team of obstetricians and gynecologists offers personalized services, including prenatal care, childbirth assistance, and gynecological consultations. With a focus on promoting overall well-being, we strive to empower women through preventive and therapeutic interventions, ensuring a holistic approach to their health journey.',
        'image' => './assets/images/gyn.jpeg',
        'icon' => 'bi-heart-pulse',
        // 'link' => 'palliative-care.php'
    ],
    [
        'title' => 'Post Operative Care For Early RecoveryAfter Major Surgeries',
        'description' => 'At Smart Physiotherapy Hospital, our dedicated team ensures optimal post-operative care for early recovery following major surgeries. Our personalized rehabilitation programs focus on pain management, mobility enhancement, and swift recovery. With a commitment to individualized attention, we strive to accelerate the healing process and restore patients to their optimal functional capacity.',
        'image' => 'assets/images/img-sr4.webp',
        'icon' => 'bi-person-heart',
        // 'link' => 'geriatric-rehabilitation.php'
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
                Our<span> Specialities</span>
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

                        <!-- <a
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

                        </a> -->

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

 <?php include 'footer.php'; ?>
