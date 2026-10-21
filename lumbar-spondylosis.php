<?php include 'header.php'; ?>

<?php
/**
 * Service Section : Lumbar Spondylosis
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
$clinic_title = 'Lumbar Spondylosis Treatment Center Kakinada';

$phones = [
    '+91-7730044533',
    '+91-9121675661'
];

$section_img = 'assets/images/lumbar spondylosis.webp';


// Symptoms of Lumbar Spondylosis
$symptoms = [
    [
        'icon' => 'bi-person-standing',
        'text' => 'Stiffness'
    ],
    [
        'icon' => 'bi-bandaid',
        'text' => 'Low back pain'
    ],
    [
        'icon' => 'bi-lightning',
        'text' => 'Tingling / Pins and Needles'
    ],
    [
        'icon' => 'bi-activity',
        'text' => 'Abnormal Reflexes'
    ],
    [
        'icon' => 'bi-person-walking',
        'text' => 'Gait Problems'
    ],
    [
        'icon' => 'bi-diagram-3',
        'text' => 'Co-ordination Problems'
    ],
];


// Physiotherapy Treatments
$treatments = [
    [
        'title' => 'Strengthening Exercises',
        'text'  => 'Lumbar spine strengthening exercises are used to improve the support and stability of the lower back.'
    ],
    [
        'title' => 'Range of Motion Exercises',
        'text'  => 'Specific mobility exercises help maintain and improve movement of the lumbar spine.'
    ],
    [
        'title' => 'TENS',
        'text'  => 'TENS may be used as a pain management technique to help reduce discomfort associated with lumbar spondylosis.'
    ],
    [
        'title' => 'Wax Therapy',
        'text'  => 'Wax therapy may be used as part of pain management to help reduce stiffness and discomfort.'
    ],
];


// Other Procedures
$other_procedures = [
    'Hydrotherapy',
    'Balance Exercises',
    'Ergonomics Assessment (Biomechanical)',
    'Postural Realignment',
    'Pacing guidance',
    'Lumbar spine strengthening',
    'Range-of-motion exercises',
    'Pain management techniques'
];
?>


<section class="service_new_common_section" id="lumbar-spondylosis-service">

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
                    <span>Lumbar Spondylosis?</span>
                </h2>

                <span class="service_new_common_section__underline"></span>


                <p class="service_new_common_section__text">
                    Lumbar spondylosis is a type of lower back arthritis that
                    commonly affects older adults. Physiotherapy can help
                    alleviate the symptoms associated with lumbar spondylosis.
                </p>


                <p class="service_new_common_section__text">
                    The lumbar spine consists of five vertebrae separated by
                    discs that act as shock absorbers and help make the spine
                    more flexible.
                </p>


                <p class="service_new_common_section__text">
                    As we age, wear and tear may affect the joints of the lumbar
                    spine. Additional bony growths called
                    <strong>osteophytes</strong> can develop around the vertebrae
                    and discs as the body attempts to repair the damage.
                </p>


                <p class="service_new_common_section__text">
                    These osteophytes may cause stiffness in the spine and can
                    sometimes place pressure on surrounding nerves, resulting in
                    additional symptoms and complications.
                </p>

            </div>


            <div class="col-lg-5">

                <div class="service_new_common_section__imgbox">

                    <img
                        src="<?= htmlspecialchars($section_img) ?>"
                        alt="Lumbar Spondylosis Treatment at <?= htmlspecialchars($clinic_name) ?>"
                        class="img-fluid"
                        loading="lazy"
                    >


                    <div class="service_new_common_section__badge">

                        <i class="bi bi-activity"></i>

                        <span>
                            Lumbar Spondylosis<br>
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
                <span>Lumbar Spondylosis</span>
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

                Along with stiffness and lower back pain, some people may
                experience neurological symptoms such as tingling, abnormal
                reflexes, gait difficulties and coordination problems.

            </p>

        </div>



        <!-- ============ 3. DIAGNOSIS / NEXT STEPS ============ -->
        <div class="service_new_common_section__block">

            <div class="row g-4 align-items-stretch">


                <div class="col-lg-5">

                    <div class="service_new_common_section__card service_new_common_section__card--highlight h-100">


                        <div class="service_new_common_section__label">

                            <span class="service_new_common_section__line"></span>
                            Diagnosis & Care

                        </div>


                        <h3 class="service_new_common_section__subtitle text-start mb-3">

                            What should you do after
                            <span>diagnosis?</span>

                        </h3>


                        <ul class="service_new_common_section__list">

                            <?php foreach ($other_procedures as $procedure): ?>

                                <li>
                                    <i class="bi bi-check2-circle"></i>
                                    <?= htmlspecialchars($procedure) ?>
                                </li>

                            <?php endforeach; ?>

                        </ul>


                        <p class="service_new_common_section__text mb-0">

                            If you believe you may have symptoms of lumbar
                            spondylosis, you should consult your doctor for an
                            appropriate diagnosis.

                            <!-- Depending on the severity of your symptoms, your
                            doctor may recommend investigations such as an
                            X-ray or MRI scan. -->

                            Once lumbar spondylosis has been diagnosed,
                            beginning a physiotherapy program at
                            <strong><?= htmlspecialchars($clinic_name) ?></strong>
                            can help support your recovery and symptom management.

                        </p>

                    </div>

                </div>



                <!-- ============ 4. PHYSIOTHERAPY TREATMENT ============ -->
                <div class="col-lg-7">

                    <div class="service_new_common_section__card h-100">


                        <div class="service_new_common_section__label">

                            <span class="service_new_common_section__line"></span>
                            Treatment

                        </div>


                        <h3 class="service_new_common_section__subtitle text-start mb-3">

                            Physiotherapy for
                            <span>Lumbar Spondylosis</span>

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


                        <p class="service_new_common_section__text mt-4 mb-0">

                            Pacing guidance is also an important part of
                            rehabilitation, as it helps you manage your
                            activities, maintain control over your symptoms and
                            avoid allowing the condition to interfere excessively
                            with your everyday life.

                        </p>

                    </div>

                </div>

            </div>

        </div>



        <!-- ============ 5. CTA ============ -->
        <div class="service_new_common_section__cta">

            <div class="row align-items-center g-4">


                <div class="col-lg-7">

                    <h3 class="service_new_common_section__cta_title">

                        Improve your movement,
                        <span>reduce lower back discomfort</span>

                    </h3>


                    <p class="service_new_common_section__text mb-0">

                        Lumbar spondylosis is typically manageable with
                        conservative treatment. Physiotherapy can help improve
                        mobility, strength, posture and symptom management.

                        In more severe cases, further medical or surgical
                        treatment may be considered.

                        If you believe you have lumbar spondylosis,
                        visit
                        <strong><?= htmlspecialchars($clinic_name) ?></strong>
                        for physiotherapy assessment and management, or call us
                        to schedule an appointment.

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