<?php include 'header.php'; ?>
<?php
/**
 * Service Section : Paralysis Rehabilitation
 * Wrapper class  : service_new_common_section
 *
 * Include this file inside your service page:
 *   <?php include 'service_paralysis_section.php'; ?>
 *
 * Requires (in <head> of your layout):
 *   - Bootstrap 5 CSS/JS
 *   - Bootstrap Icons
 *   - Poppins font
 *   - service_new_common_section.css
 */
 
// ---------- Editable data ----------
$clinic_name  = 'SMART PHYSIOCARE';
$clinic_title = 'Smart Physiotherapy and Rehabilitation Center Kakinada';
$phones       = ['+91-7730044533', '+91-9121675661'];
$section_img  = 'assets/images/Paralysis Rehabilitation.webp'; // change to your image path
 
$causes = [
    ['icon' => 'bi-activity',          'text' => 'Spinal cord injury'],
    ['icon' => 'bi-person-bounding-box','text' => 'Head injury'],
    ['icon' => 'bi-heart-pulse',       'text' => 'Stroke'],
    ['icon' => 'bi-diagram-3',         'text' => 'Multiple Sclerosis'],
    ['icon' => 'bi-cpu',               'text' => 'Motor neuron disease'],
    ['icon' => 'bi-bandaid',           'text' => 'Spina Bifida'],
];
 
$depends_on = [
    'Whether the problem is central or peripheral',
    'The cause of the paralysis',
    'The extent of the damage',
    'The likely prognosis',
    'Other symptoms that are present',
];
 
$focus_areas = [
    'Muscle strengthening to reduce pain and stiffness and to prevent soft tissue contractures',
    'Stretches to maintain muscle length and joint range of motion',
    'Core stability exercises',
    'Dynamic balance work',
    'Transfer practice (getting in and out of a wheelchair, bed, shower/bath, on and off the toilet)',
     'Re-education of walking pattern',
    'Sensory stimulation',
    'Facilitation of return to hobbies / driving / work',
    'Use of hydrotherapy pool to relieve stiff muscles, strengthen weak muscles and maximize mobility',
    'Functional electrical stimulation',
    'Provision of walking aids and equipment',
    'Career education',
];
?>
 
<section class="service_new_common_section" id="paralysis-service">
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
                    What is <span>Paralysis?</span>
                </h2>
                <span class="service_new_common_section__underline"></span>
 
                <p class="service_new_common_section__text">
                    Paralysis is the inability to move muscles on your own and with purpose. Paralysis can be a
                    complete loss of movement known as <strong>plegia</strong>, or a significant weakness called
                    <strong>paresis</strong>.
                </p>
                <p class="service_new_common_section__text">
                    Paralysis is caused by injury or disease affecting the central nervous system (brain and spinal
                    cord) which means that the nerve signals sent to the muscles is interrupted.
                </p>
                <p class="service_new_common_section__text">
                    Disturbance in the pathways between the brain and the muscles means that the muscles are not
                    given the instructions to move as they would do normally. Our specialist neurological
                    physiotherapists at <?= $clinic_name ?> commonly treat people with partial or total paralysis of
                    their upper and lower limbs and trunk due to neurological conditions.
                </p>
            </div>
 
            <div class="col-lg-5">
                <div class="service_new_common_section__imgbox">
                    <img src="<?= htmlspecialchars($section_img) ?>"
                         alt="Paralysis rehabilitation at <?= htmlspecialchars($clinic_name) ?>"
                         class="img-fluid" loading="lazy">
                    <div class="service_new_common_section__badge">
                        <i class="bi bi-shield-plus"></i>
                        <span>Neuro Rehabilitation<br>Specialists</span>
                    </div>
                </div>
            </div>
        </div>
 
        <!-- ============ 2. CAUSES ============ -->
        <div class="service_new_common_section__block">
            <h3 class="service_new_common_section__subtitle">Some of the <span>causes</span> include</h3>
 
            <div class="row g-3 g-lg-4">
                <?php foreach ($causes as $c): ?>
                    <div class="col-6 col-md-4">
                        <div class="service_new_common_section__card service_new_common_section__card--center">
                            <div class="service_new_common_section__icon">
                                <i class="bi <?= $c['icon'] ?>"></i>
                            </div>
                            <h4 class="service_new_common_section__card_title"><?= $c['text'] ?></h4>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
 
            <p class="service_new_common_section__note">
                All individuals with paralysis will substantially benefit from a neurological physiotherapy
                assessment and treatment plan in order to improve muscle strength, increase the ability to carry out
                functional activities and to maximize overall quality of life.
            </p>
        </div>
 
        <!-- ============ 3. DEPENDS ON ============ -->
        <div class="service_new_common_section__block">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-5">
                    <div class="service_new_common_section__card service_new_common_section__card--highlight h-100">
                        <div class="service_new_common_section__label">
                            <span class="service_new_common_section__line"></span> Assessment
                        </div>
                        <h3 class="service_new_common_section__subtitle text-start mb-3">
                            Rehabilitation treatment <span>depends on</span>
                        </h3>
                        <ul class="service_new_common_section__list">
                            <?php foreach ($depends_on as $d): ?>
                                <li><i class="bi bi-check2-circle"></i><?= $d ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <p class="service_new_common_section__text mb-0">
                            Following the assessment, there will be the opportunity to discuss your goals and
                            expectations of paralysis rehabilitation treatment.
                        </p>
                    </div>
                </div>
 
                <!-- ============ 4. FOCUS AREAS ============ -->
                <div class="col-lg-7">
                    <div class="service_new_common_section__card h-100">
                        <div class="service_new_common_section__label">
                            <span class="service_new_common_section__line"></span> Treatment
                        </div>
                        <h3 class="service_new_common_section__subtitle text-start mb-3">
                            Physiotherapy may <span>focus on</span>
                        </h3>
                        <div class="row g-2 g-md-3">
                            <?php foreach ($focus_areas as $f): ?>
                                <div class="col-md-6">
                                    <div class="service_new_common_section__focus">
                                        <i class="bi bi-arrow-right-circle"></i>
                                        <span><?= $f ?></span>
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
                        Your recovery plan, <span>tailored to you</span>
                    </h3>
                    <p class="service_new_common_section__text mb-0">
                        Your paralysis rehabilitation program at <?= $clinic_name ?> in Kakinada will be tailored to
                        your needs for the best possible outcome and to ensure you reach your maximum potential.
                        If you would like more information on physiotherapy, or to book an appointment please call us.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="service_new_common_section__phones">
                        <?php foreach ($phones as $p): ?>
                            <a href="tel:<?= preg_replace('/[^+\d]/', '', $p) ?>"
                               class="service_new_common_section__btn">
                                <span class="service_new_common_section__btn_text">
                                    <i class="bi bi-telephone"></i> <?= $p ?>
                                </span>
                                <span class="service_new_common_section__btn_arrow"><i class="bi bi-arrow-right"></i></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
 
    </div>
</section>

<?php include 'footer.php'; ?>