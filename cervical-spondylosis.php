<?php include 'header.php'; ?>

<?php
/**
 * Service Section : Cervical Spondylosis
 * Wrapper class  : service_new_common_section
 *
 * Requires:
 * - Bootstrap 5 CSS/JS
 * - Bootstrap Icons
 * - Poppins font
 * - service_new_common_section.css
 */

// ---------- Editable data ----------
$clinic_name  = 'SMART PHYSIO CARE';
$clinic_title = 'Cervical Spondylosis Treatment Center Kakinada';

$phones = [
    '+91-7730044533',
    '+91-9121675661'
];

$section_img = 'assets/images/cervical spondylosis.webp';


// Symptoms of Cervical Spondylosis
$symptoms = [
    [
        'icon' => 'bi-person',
        'text' => 'Neck pain with limited range of movement'
    ],
    [
        'icon' => 'bi-activity',
        'text' => 'Muscle spasms'
    ],
    [
        'icon' => 'bi-person-standing',
        'text' => 'Stiffness, especially worse in the morning'
    ],
    [
        'icon' => 'bi-head',
        'text' => 'Headaches'
    ],
    [
        'icon' => 'bi-person-arms-up',
        'text' => 'Shoulder pain'
    ],
    [
        'icon' => 'bi-bandaid',
        'text' => 'Arm pain'
    ],
    [
        'icon' => 'bi-lightning',
        'text' => 'Weakness or numbness in the upper limb'
    ],
];


// Physiotherapy Treatments
$treatments = [
    [
        'title' => 'Ultrasonic Therapy',
        'text'  => 'Sound waves are transmitted through the tissues to help increase tissue activity and support the healing process.'
    ],
    [
        'title' => 'Interferential Therapy',
        'text'  => 'Tiny electrical impulses are introduced into the tissues at different frequencies to help with pain relief, muscle or nerve stimulation, improved blood flow and reduced inflammation.'
    ],
    [
        'title' => 'Mobilization',
        'text'  => 'A manual therapy technique in which the physiotherapist gently moves the joint and surrounding soft tissues to help restore normal movement, lubricate joint surfaces and reduce discomfort.'
    ],
    [
        'title' => 'Manipulation',
        'text'  => 'A fast, short-movement thrust may be delivered at the end of the available range to help reduce joint restrictions, break down adhesions and restore more comfortable movement.'
    ],
];


// Physiotherapy Goals
$focus_areas = [
    'Reduce neck pain and discomfort',
    'Improve cervical spine mobility',
    'Reduce muscle stiffness and spasms',
    'Improve range of neck movement',
    'Improve posture and spinal alignment',
    'Reduce shoulder and arm pain',
    'Improve upper limb function',
    'Help manage weakness or numbness',
    'Improve flexibility of surrounding soft tissues',
    'Support comfortable daily activities',
    'Reduce joint stiffness',
    'Improve overall neck function'
];
?>


<section class="service_new_common_section" id="cervical-spondylosis-service">

    <!-- decorative background -->
    <span class="service_new_common_section__glow service_new_common_section__glow--one"></span>
    <span class="service_new_common_section__glow service_new_common_section__glow--two"></span>
    <span class="service_new_common_section__dots"></span>


    <div class="container position-relative">


        <!-- ============ 1. INTRO ============ -->
        <div class="row align-items-center g-4 g-lg-5">

            <div class="col-lg-7">

                <div class="service_new_common_section__label">
                    <span class="service_new_common_section__line"></span>
                    <?= htmlspecialchars($clinic_title) ?>
                </div>


                <h2 class="service_new_common_section__title">
                    What is
                    <span>Cervical Spondylosis?</span>
                </h2>

                <span class="service_new_common_section__underline"></span>


                <p class="service_new_common_section__text">
                    Cervical spondylosis refers to age-related degenerative
                    changes affecting the bones and soft tissues of the
                    cervical spine.
                </p>


                <p class="service_new_common_section__text">
                    The ligaments and capsules around the spinal joints may
                    gradually deteriorate and become fibrotic. The facet joints
                    between and behind adjacent vertebrae may also wear down
                    over time.
                </p>


                <p class="service_new_common_section__text">
                    These changes can lead to the development of bony growths
                    known as <strong>osteophytes</strong>, which may contribute
                    to narrowing around the nerve roots. The spinal discs may
                    also bulge, protrude or become damaged.
                </p>

            </div>


            <div class="col-lg-5">

                <div class="service_new_common_section__imgbox">

                    <img
                        src="<?= htmlspecialchars($section_img) ?>"
                        alt="Cervical Spondylosis Treatment at <?= htmlspecialchars($clinic_name) ?>"
                        class="img-fluid"
                        loading="lazy"
                    >


                    <div class="service_new_common_section__badge">

                        <i class="bi bi-activity"></i>

                        <span>
                            Cervical Spondylosis<br>
                            Physiotherapy
                        </span>

                    </div>

                </div>

            </div>

        </div>



        <!-- ============ 2. SYMPTOMS ============ -->
        <div class="service_new_common_section__block">

            <h3 class="service_new_common_section__subtitle">
                Symptoms of
                <span>Cervical Spondylosis</span>
            </h3>


            <div class="row g-3 g-lg-4">

                <?php foreach ($symptoms as $symptom): ?>

                    <div class="col-6 col-md-4">

                        <div class="service_new_common_section__card service_new_common_section__card--center">

                            <div class="service_new_common_section__icon">

                                <i class="bi <?= htmlspecialchars($symptom['icon']) ?>"></i>

                            </div>


                            <h4 class="service_new_common_section__card_title">

                                <?= htmlspecialchars($symptom['text']) ?>

                            </h4>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>


            <p class="service_new_common_section__note">

                Cervical spondylosis may affect neck movement and can sometimes
                cause symptoms extending into the shoulders, arms and upper
                limbs. Physiotherapy aims to improve movement, reduce discomfort
                and help restore normal function.

            </p>

        </div>



        <!-- ============ 3. PHYSIOTHERAPY GOALS ============ -->
        <div class="service_new_common_section__block">

            <div class="row g-4 align-items-stretch">


                <div class="col-lg-5">

                    <div class="service_new_common_section__card service_new_common_section__card--highlight h-100">


                        <div class="service_new_common_section__label">

                            <span class="service_new_common_section__line"></span>
                            Rehabilitation Goals

                        </div>


                        <h3 class="service_new_common_section__subtitle text-start mb-3">

                            Physiotherapy can
                            <span>help improve</span>

                        </h3>


                        <ul class="service_new_common_section__list">

                            <?php foreach ($focus_areas as $focus): ?>

                                <li>

                                    <i class="bi bi-check2-circle"></i>

                                    <?= htmlspecialchars($focus) ?>

                                </li>

                            <?php endforeach; ?>

                        </ul>


                        <p class="service_new_common_section__text mb-0">

                            At
                            <strong><?= htmlspecialchars($clinic_name) ?></strong>,
                            your physiotherapist will assess your neck movement,
                            pain, stiffness, posture and functional limitations
                            before creating a treatment plan suited to your
                            condition.

                        </p>

                    </div>

                </div>



                <!-- ============ 4. TREATMENTS ============ -->
                <div class="col-lg-7">

                    <div class="service_new_common_section__card h-100">


                        <div class="service_new_common_section__label">

                            <span class="service_new_common_section__line"></span>
                            Treatment

                        </div>


                        <h3 class="service_new_common_section__subtitle text-start mb-3">

                            Physiotherapy treatments commonly used for
                            <span>Cervical Spondylosis</span>

                        </h3>


                        <div class="row g-2 g-md-3">

                            <?php foreach ($treatments as $treatment): ?>

                                <div class="col-md-6">

                                    <div class="service_new_common_section__focus">

                                        <i class="bi bi-arrow-right-circle"></i>

                                        <span>
                                            <strong>
                                                <?= htmlspecialchars($treatment['title']) ?>:
                                            </strong>

                                            <?= htmlspecialchars($treatment['text']) ?>
                                        </span>

                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- ============ 5. CTA ============ -->
        <div class="service_new_common_section__cta">

            <div class="row align-items-center g-4">


                <div class="col-lg-7">

                    <h3 class="service_new_common_section__cta_title">

                        Get expert care for
                        <span>Cervical Spondylosis</span>

                    </h3>


                    <p class="service_new_common_section__text mb-0">

                        If you believe you may be experiencing symptoms of
                        cervical spondylosis, our physiotherapy team at
                        <strong><?= htmlspecialchars($clinic_name) ?></strong>
                        can assess your condition and provide an appropriate
                        treatment and management plan.

                        To schedule an appointment or speak with our
                        physiotherapist, please call us.

                    </p>

                </div>



                <div class="col-lg-5">

                    <div class="service_new_common_section__phones">

                        <?php foreach ($phones as $phone): ?>

                            <a
                                href="tel:<?= preg_replace('/[^+\d]/', '', $phone) ?>"
                                class="service_new_common_section__btn"
                            >

                                <span class="service_new_common_section__btn_text">

                                    <i class="bi bi-telephone"></i>

                                    <?= htmlspecialchars($phone) ?>

                                </span>


                                <span class="service_new_common_section__btn_arrow">

                                    <i class="bi bi-arrow-right"></i>

                                </span>

                            </a>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>

        </div>


    </div>

</section>


<?php include 'footer.php'; ?>