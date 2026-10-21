<?php include 'header.php'; ?>

<?php
/**
 * Service Section : Cancer Rehabilitation
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
$clinic_title = 'Cancer Treatment Center Kakinada';

$phones = [
    '+91-7730044533',
    '+91-9121675661'
];

$section_img = 'assets/images/Cancer Rehabilitation.webp';


// Symptoms of Cancer
$symptoms = [
    [
        'icon' => 'bi-bandaid',
        'text' => 'Pain'
    ],
    [
        'icon' => 'bi-circle-fill',
        'text' => 'Lumps'
    ],
    [
        'icon' => 'bi-activity',
        'text' => 'Swelling'
    ],
    [
        'icon' => 'bi-droplet',
        'text' => 'Bleeding'
    ],
    [
        'icon' => 'bi-person-dash',
        'text' => 'Unexplained weight loss'
    ],
    [
        'icon' => 'bi-battery-half',
        'text' => 'Fatigue'
    ],
    [
        'icon' => 'bi-moisture',
        'text' => 'Excessive sweating'
    ],
];


// Cancer rehabilitation categories
$rehab_categories = [
    [
        'title' => 'Before Surgery',
        'text'  => 'Before cancer surgery, physiotherapy can help identify issues that may affect recovery. A pre-operative assessment and education program may include advice, targeted exercises to build muscle strength, and activities to improve stamina.'
    ],
    [
        'title' => 'After Surgery',
        'text'  => 'After surgery, physiotherapy supports the healing process through manual therapy, modified exercises, education and functional guidance. It aims to restore strength and flexibility to joints and muscles that may have become weak or stiff following surgery.'
    ],
    [
        'title' => 'During Cancer Treatments',
        'text'  => 'During cancer treatment, physiotherapy aims to maintain health, energy levels and physical performance. It may include fatigue management, cardiovascular activity, flexibility exercises, strengthening exercises, spinal stability work and practical advice for home and work activities.'
    ],
    [
        'title' => 'Overall Fitness',
        'text'  => 'After treatment, physiotherapy can help improve overall fitness, endurance, cardiovascular health, strength and flexibility. Rehabilitation can also support return to work, sports, leisure activities and a more active lifestyle.'
    ],
];


// Physiotherapy focus areas
$focus_areas = [
    'Reduce the physical effects associated with cancer and its treatment',
    'Improve strength, flexibility and physical endurance',
    'Support recovery before and after surgery',
    'Help manage fatigue during cancer treatment',
    'Improve cardiovascular fitness',
    'Maintain or improve joint mobility',
    'Prevent muscle weakness and deconditioning',
    'Improve spinal stability and core strength',
    'Support return to daily activities and work',
    'Improve overall physical function and independence',
    'Support return to sports and leisure activities',
    'Improve quality of life'
];
?>


<section class="service_new_common_section" id="cancer-rehabilitation-service">

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
                    Cancer <span>Rehabilitation</span> 
                </h2>

                <span class="service_new_common_section__underline"></span>


                <p class="service_new_common_section__text">
                    Cancer refers to a group of disorders in which uncontrolled
                    cell division and growth occur. Depending on the type and
                    location of the cancer, it can produce a wide range of
                    symptoms and physical effects.
                </p>


                <p class="service_new_common_section__text">
                    Physiotherapy can help reduce some of the physical effects
                    associated with cancer and its treatment while supporting
                    a person's ability to remain active and maintain as much
                    independence as possible.
                </p>


                <p class="service_new_common_section__text">
                    Cancer may be classified as benign or malignant. Malignant
                    tumors can invade surrounding tissues and may spread to
                    other organs through the bloodstream or lymphatic system,
                    while benign tumors do not spread in the same way.
                </p>

            </div>


            <div class="col-lg-5">

                <div class="service_new_common_section__imgbox">

                    <img
                        src="<?= htmlspecialchars($section_img) ?>"
                        alt="Cancer Rehabilitation at <?= htmlspecialchars($clinic_name) ?>"
                        class="img-fluid"
                        loading="lazy"
                    >


                    <div class="service_new_common_section__badge">

                        <i class="bi bi-heart-pulse"></i>

                        <span>
                            Cancer Rehabilitation<br>
                            Physiotherapy
                        </span>

                    </div>

                </div>

            </div>

        </div>



        <!-- ============ 2. SYMPTOMS ============ -->
        <div class="service_new_common_section__block">

            <h3 class="service_new_common_section__subtitle">
                Common
                <span>Symptoms of Cancer</span>
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

                These symptoms can also occur in individuals who do not have
                cancer, so they do not confirm a diagnosis on their own.
                Diagnosis may involve medical examination, blood tests,
                computed tomography (CT) scans and microscopic examination
                of a biopsy sample.

            </p>

        </div>



        <!-- ============ 3. TYPES / ASSESSMENT ============ -->
        <div class="service_new_common_section__block">

            <div class="row g-4 align-items-stretch">


                <div class="col-lg-5">

                    <div class="service_new_common_section__card service_new_common_section__card--highlight h-100">


                        <div class="service_new_common_section__label">

                            <span class="service_new_common_section__line"></span>
                            Cancer Types

                        </div>


                        <h3 class="service_new_common_section__subtitle text-start mb-3">

                            Understanding different
                            <span>types of cancer</span>

                        </h3>


                        <ul class="service_new_common_section__list">

                            <li>
                                <i class="bi bi-check2-circle"></i>
                                Carcinoma – commonly affects organs such as the breast,
                                prostate, pancreas and lungs
                            </li>

                            <li>
                                <i class="bi bi-check2-circle"></i>
                                Sarcoma – cancer that develops in tissues such as bone
                                or cartilage
                            </li>

                            <li>
                                <i class="bi bi-check2-circle"></i>
                                Lymphoma – cancer involving the lymphatic system
                            </li>

                            <li>
                                <i class="bi bi-check2-circle"></i>
                                Leukemia – cancer affecting blood-forming tissues and
                                blood cells
                            </li>

                        </ul>


                        <p class="service_new_common_section__text mb-0">

                            An expert physiotherapist at
                            <strong><?= htmlspecialchars($clinic_name) ?></strong>
                            will conduct a detailed assessment, discuss realistic
                            rehabilitation goals and develop a treatment strategy
                            according to the patient's individual needs.

                        </p>

                    </div>

                </div>



                <!-- ============ 4. PHYSIOTHERAPY FOCUS ============ -->
                <div class="col-lg-7">

                    <div class="service_new_common_section__card h-100">


                        <div class="service_new_common_section__label">

                            <span class="service_new_common_section__line"></span>
                            Physiotherapy

                        </div>


                        <h3 class="service_new_common_section__subtitle text-start mb-3">

                            Cancer rehabilitation may
                            <span>focus on</span>

                        </h3>


                        <div class="row g-2 g-md-3">

                            <?php foreach ($focus_areas as $focus): ?>

                                <div class="col-md-6">

                                    <div class="service_new_common_section__focus">

                                        <i class="bi bi-arrow-right-circle"></i>

                                        <span>
                                            <?= htmlspecialchars($focus) ?>
                                        </span>

                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- ============ 5. CANCER REHABILITATION CATEGORIES ============ -->
        <div class="service_new_common_section__block">

            <h3 class="service_new_common_section__subtitle">
                SMART Physio Care Cancer Rehabilitation
                <span>Programs</span>
            </h3>


            <div class="row g-3 g-lg-4">

                <?php foreach ($rehab_categories as $category): ?>

                    <div class="col-md-6">

                        <div class="service_new_common_section__card h-100">

                            <div class="service_new_common_section__icon">

                                <i class="bi bi-heart-pulse"></i>

                            </div>


                            <h4 class="service_new_common_section__card_title text-start mb-3">

                                <?= htmlspecialchars($category['title']) ?>

                            </h4>


                            <p class="service_new_common_section__text mb-0">

                                <?= htmlspecialchars($category['text']) ?>

                            </p>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>



        <!-- ============ 6. CTA ============ -->
        <div class="service_new_common_section__cta">

            <div class="row align-items-center g-4">


                <div class="col-lg-7">

                    <h3 class="service_new_common_section__cta_title">

                        Supporting your recovery,
                        <span>every step of the way</span>

                    </h3>


                    <p class="service_new_common_section__text mb-0">

                        Physiotherapy can help improve mobility, physical
                        function and the ability to perform daily activities
                        during and after cancer treatment.

                        At
                        <strong><?= htmlspecialchars($clinic_name) ?></strong>,
                        cancer rehabilitation may be provided according to the
                        patient's needs through appropriate physiotherapy,
                        exercise-based rehabilitation and other suitable
                        rehabilitation methods.

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