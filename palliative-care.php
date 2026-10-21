<?php include 'header.php'; ?>

<?php
/**
 * Service Section : Palliative Care
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
$clinic_title = 'Palliative Care Physiotherapy Center Kakinada';

$phones = [
    '+91-7730044533',
    '+91-9121675661'
];

$section_img = 'assets/images/img-sr4.webp';


// Benefits of Palliative Care Physiotherapy
$benefits = [
    [
        'icon' => 'bi-heart-pulse',
        'text' => 'Relief from painful and distressing symptoms'
    ],
    [
        'icon' => 'bi-person-check',
        'text' => 'Maintain or improve physical independence'
    ],
    [
        'icon' => 'bi-person-walking',
        'text' => 'Support mobility and physical function'
    ],
    [
        'icon' => 'bi-house-heart',
        'text' => 'Support care at the patient’s preferred location'
    ],
    [
        'icon' => 'bi-emoji-smile',
        'text' => 'Improve overall quality of life'
    ],
    [
        'icon' => 'bi-people',
        'text' => 'Work closely with the wider palliative care team'
    ],
];


// Physiotherapy Focus Areas
$focus_areas = [
    'Comprehensive physical assessment',
    'Management of painful symptoms',
    'Maintaining mobility and movement',
    'Supporting physical independence',
    'Improving functional ability',
    'Helping patients remain active where possible',
    'Supporting comfort and positioning',
    'Encouraging confidence in daily activities',
    'Improving overall quality of life'
];


// Role of Physiotherapy in Palliative Care
$treatments = [
    [
        'title' => 'Comprehensive Assessment',
        'text'  => 'Physiotherapy begins with a detailed assessment of the patient’s physical abilities, symptoms, mobility and individual needs.'
    ],
    [
        'title' => 'Symptom Relief',
        'text'  => 'Physiotherapy can help relieve painful or limiting physical symptoms and improve overall comfort.'
    ],
    [
        'title' => 'Maintain Independence',
        'text'  => 'Treatment aims to help patients maintain as much physical independence and functional ability as possible.'
    ],
    [
        'title' => 'Quality of Life',
        'text'  => 'Physiotherapists support patients in developing a positive approach to living with illness and the effects of treatment, with the aim of improving well-being and quality of life.'
    ],
];
?>


<section class="service_new_common_section" id="palliative-care-service">

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
                    <span>Palliative Care?</span>
                </h2>

                <span class="service_new_common_section__underline"></span>


                <p class="service_new_common_section__text">
                    Palliative care is specialized medical care for people
                    living with serious illnesses. Its main goal is to provide
                    relief from the symptoms and stress associated with illness.
                </p>


                <p class="service_new_common_section__text">
                    The objective of palliative care is to improve the quality
                    of life of both the patient and their family by providing
                    additional physical, emotional and clinical support.
                </p>


                <p class="service_new_common_section__text">
                    Palliative care is provided by a specially trained team of
                    doctors, nurses and other healthcare professionals who work
                    alongside the patient's existing medical team. It is based
                    on the patient's needs rather than prognosis and can be
                    provided at any age or stage of a serious illness, including
                    alongside curative treatment.
                </p>

            </div>


            <div class="col-lg-5">

                <div class="service_new_common_section__imgbox">

                    <img
                        src="<?= htmlspecialchars($section_img) ?>"
                        alt="Palliative Care Physiotherapy at <?= htmlspecialchars($clinic_name) ?>"
                        class="img-fluid"
                        loading="lazy"
                    >


                    <div class="service_new_common_section__badge">

                        <i class="bi bi-heart-pulse"></i>

                        <span>
                            Palliative Care<br>
                            Physiotherapy
                        </span>

                    </div>

                </div>

            </div>

        </div>



        <!-- ============ 2. BENEFITS ============ -->
        <div class="service_new_common_section__block">

            <h3 class="service_new_common_section__subtitle">
                How Physiotherapy Supports
                <span>Palliative Care</span>
            </h3>


            <div class="row g-3 g-lg-4">

                <?php foreach ($benefits as $benefit): ?>

                    <div class="col-6 col-md-4">

                        <div class="service_new_common_section__card service_new_common_section__card--center">

                            <div class="service_new_common_section__icon">

                                <i class="bi <?= htmlspecialchars($benefit['icon']) ?>"></i>

                            </div>


                            <h4 class="service_new_common_section__card_title">

                                <?= htmlspecialchars($benefit['text']) ?>

                            </h4>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>


            <p class="service_new_common_section__note">

                Palliative care physiotherapy aims to provide a comprehensive
                assessment and suitable treatment for people with serious,
                progressive or incurable illnesses while supporting comfort,
                independence and overall quality of life.

            </p>

        </div>



        <!-- ============ 3. PHYSIOTHERAPY FOCUS ============ -->
        <div class="service_new_common_section__block">

            <div class="row g-4 align-items-stretch">


                <div class="col-lg-5">

                    <div class="service_new_common_section__card service_new_common_section__card--highlight h-100">


                        <div class="service_new_common_section__label">

                            <span class="service_new_common_section__line"></span>
                            Physiotherapy Support

                        </div>


                        <h3 class="service_new_common_section__subtitle text-start mb-3">

                            Palliative care physiotherapy
                            <span>focuses on</span>

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

                            The physiotherapy team works closely with palliative
                            care doctors, nurses and other clinical professionals
                            to ensure that treatment is coordinated around the
                            patient's individual needs and goals.

                        </p>

                    </div>

                </div>



                <!-- ============ 4. ROLE OF PHYSIOTHERAPY ============ -->
                <div class="col-lg-7">

                    <div class="service_new_common_section__card h-100">


                        <div class="service_new_common_section__label">

                            <span class="service_new_common_section__line"></span>
                            Treatment

                        </div>


                        <h3 class="service_new_common_section__subtitle text-start mb-3">

                            How physical therapy fits into
                            <span>Palliative Care</span>

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

                            Physiotherapists are well-positioned to encourage
                            patients to develop a positive approach to living
                            with illness or the effects of treatment. This can
                            positively support their well-being, independence
                            and overall quality of life.

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

                        Support comfort, independence and
                        <span>quality of life</span>

                    </h3>


                    <p class="service_new_common_section__text mb-0">

                        If you or someone you know may benefit from
                        physiotherapy as part of palliative care or for an
                        advanced progressive illness,
                        <strong><?= htmlspecialchars($clinic_name) ?></strong>
                        can provide suitable physiotherapy support based on
                        individual needs.

                        To schedule an appointment or speak with our
                        physiotherapy team, please call us.

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