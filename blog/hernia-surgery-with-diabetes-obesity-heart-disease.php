<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2026-10-16');

$page_title       = 'Hernia Surgery With Diabetes, Obesity or Heart Disease';
$page_description = 'Hernia surgery with diabetes, obesity or heart disease is usually possible. What changes about your risk, and what gets optimized before an elective repair.';
$page_keywords    = 'hernia surgery with diabetes, hernia surgery obesity risk, hernia surgery heart disease, pre-operative optimization hernia surgery, high risk hernia surgery patients';
$page_image       = $site['url'] . 'assets/images/hernia-surgery-with-diabetes-obesity-heart-disease.png';
$page_published   = '2026-10-16';
$page_modified    = '2026-10-16';

$schema_about = [
    '@type'         => 'MedicalCondition',
    'name'          => 'Hernia Repair in Patients With Comorbidities',
    'description'   => 'Hernia surgery planning for patients with diabetes, obesity, heart disease, or a chronic cough, which usually involves pre-operative optimization of the underlying condition rather than ruling surgery out.',
    'riskFactor' => [
        ['@type' => 'MedicalRiskFactor', 'name' => 'Poorly controlled diabetes'],
        ['@type' => 'MedicalRiskFactor', 'name' => 'Obesity'],
        ['@type' => 'MedicalRiskFactor', 'name' => 'Unstable heart disease'],
        ['@type' => 'MedicalRiskFactor', 'name' => 'Chronic cough or COPD'],
    ],
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'Can I have hernia surgery if my diabetes is not well controlled?',
        'a' => 'Elective surgery is usually delayed until blood sugar is brought into a safer range, since poor control raises the risk of infection and slow wound healing.',
    ],
    [
        'q' => 'Does being overweight mean I cannot have hernia surgery?',
        'a' => 'No, but a higher BMI does raise the technical difficulty and the risk of wound complications and recurrence, which is why weight is often addressed before an elective repair.',
    ],
    [
        'q' => 'Is hernia surgery safe with heart disease?',
        'a' => 'Usually yes, once your heart condition is assessed as stable. Your surgeon and an anesthetist coordinate with your cardiologist to plan the safest approach.',
    ],
    [
        'q' => 'Do I need medical clearance before hernia surgery?',
        'a' => 'For most healthy adults with a straightforward hernia, no. With diabetes, heart disease, or other significant conditions, a pre-operative fitness assessment is standard practice.',
    ],
    [
        'q' => 'Should I try to lose weight before hernia surgery?',
        'a' => 'For a planned, non-urgent hernia, often yes, since it can lower your surgical risk. For a painful or enlarging hernia, waiting on weight loss is not usually advised.',
    ],
    [
        'q' => 'Is age alone a reason to avoid hernia surgery?',
        'a' => 'No. Fitness for anesthesia and overall health matter far more than age in years. Many people in their seventies and eighties have hernia repair safely.',
    ],
];

require_once __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <nav class="text-sm mb-6 text-brand-200">
            <a href="<?= $base_path ?>" class="hover:text-white transition">Home</a>
            <span class="mx-2">/</span>
            <a href="<?= $base_path ?>blog" class="hover:text-white transition">Blog</a>
            <span class="mx-2">/</span>
            <span class="text-white">Surgery With Comorbidities</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Patient Decision Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Hernia Surgery When You Have <br class="hidden md:inline"><span class="text-accent">Diabetes, Obesity or Heart Disease</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar of Billroth Hospitals</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>October 16, 2026</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Content & Sidebar Layout -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-12">

            <article class="lg:col-span-8 bg-white rounded-3xl p-8 md:p-12 shadow-sm border border-slate-100">
                <div class="prose prose-slate max-w-none">

                    <img src="<?= $base_path ?>assets/images/hernia-surgery-with-diabetes-obesity-heart-disease.png" alt="Hernia Surgery When You Have Diabetes, Obesity or Heart Disease" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: Surgery With a Comorbidity</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>Diabetes, obesity and heart disease almost never rule out hernia surgery. They change the plan around it.</strong> For an elective repair, blood sugar, weight and cardiac stability are typically optimized first, which lowers your risk rather than simply accepting it. For a painful, enlarging or emergency hernia, surgery is not delayed for optimization that would take months.
                        </p>
                    </div>

                    <!-- 1. The real message -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">A Comorbidity Changes the Plan, Not the Answer</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        If you or a family member has diabetes, a higher BMI, or a heart condition, the question is rarely whether hernia surgery is possible. It almost always is. The real question is what needs to happen before and around the operation to make it as safe as it would be for anyone else, and that is a genuinely different conversation from "can this be done at all."
                    </p>

                    <!-- 2. The comorbidity table -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What Changes, and What Gets Optimized</h2>
                    <div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm">
                        <table class="w-full text-slate-700 text-sm">
                            <thead>
                                <tr class="bg-brand-900 text-white">
                                    <th class="px-5 py-3.5 text-left font-semibold">Condition</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">What changes</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">What gets optimized</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Diabetes</td>
                                    <td class="px-5 py-3.5">Higher risk of infection and slower wound healing if poorly controlled</td>
                                    <td class="px-5 py-3.5">Blood sugar brought into target range, medication timing coordinated with surgery</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Obesity</td>
                                    <td class="px-5 py-3.5">Technically harder repair, higher recurrence and wound complication risk</td>
                                    <td class="px-5 py-3.5">Weight loss support, sometimes medication-assisted, before an elective repair</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Heart disease</td>
                                    <td class="px-5 py-3.5">Anesthesia carries added risk if the condition is unstable</td>
                                    <td class="px-5 py-3.5">Cardiology review, medication adjustment, timing surgery around cardiac stability</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Chronic cough or COPD</td>
                                    <td class="px-5 py-3.5">Repeated coughing strains the fresh repair, raising recurrence risk</td>
                                    <td class="px-5 py-3.5">Treating the underlying cause and optimizing breathing before elective surgery</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Advanced age</td>
                                    <td class="px-5 py-3.5">Fitness for anesthesia matters more than the number itself</td>
                                    <td class="px-5 py-3.5">General medical fitness assessment and tailored anesthesia planning</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- 3. Diabetes -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Diabetes and Hernia Surgery</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Uncontrolled blood sugar interferes with wound healing and raises infection risk, which is exactly why an elective hernia repair is often scheduled once your diabetes is stable rather than immediately. This is a matter of timing, not a barrier. Our page on <a href="<?= $base_path ?>special-considerations/diabetes" class="text-brand-700 font-semibold hover:underline">hernia surgery with diabetes</a> covers the specific blood sugar targets and precautions used around surgery.
                    </p>

                    <!-- 4. Obesity -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Obesity and Hernia Surgery</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Excess weight makes the repair technically harder and is independently linked to higher rates of wound complications and recurrence. Where the hernia is not urgent, structured pre-operative weight loss, sometimes supported by medication or dietary counseling, genuinely improves the odds of a durable repair. Full detail on this is covered in our guide to <a href="<?= $base_path ?>special-considerations/obesity" class="text-brand-700 font-semibold hover:underline">hernia repair with high BMI</a>.
                    </p>

                    <!-- 5. Heart disease -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Heart Disease and Hernia Surgery</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        The concern with heart disease is almost always about anesthesia rather than the hernia operation itself. A stable, well-managed heart condition, confirmed through a pre-operative cardiac review, generally allows surgery to proceed safely. Blood thinners are a common complicating factor, since they may need to be paused or adjusted under your cardiologist's guidance before and after surgery. This coordination between your surgeon, anesthetist and cardiologist is standard practice, not a sign that something unusual is being attempted.
                    </p>

                    <!-- 6. Chronic cough -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">A Chronic Cough Deserves Attention Too</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        An untreated chronic cough, whether from COPD, uncontrolled asthma, or another cause, repeatedly stresses a hernia repair the same way heavy lifting does, and is one of the more overlooked reasons a repair can fail early. Getting the underlying respiratory condition properly managed before elective surgery is one of the more effective, and most often skipped, steps in reducing recurrence risk. Our page on <a href="<?= $base_path ?>special-considerations/chronic-cough-copd" class="text-brand-700 font-semibold hover:underline">hernia surgery with a chronic cough or COPD</a> covers this in more depth.
                    </p>

                    <!-- 7. Elderly -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">If You Are Arranging Care for an Older Family Member</h2>
                    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 rounded-r-2xl mb-8">
                        <p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">
                            <strong>Age itself is rarely the deciding factor.</strong> A fit 80-year-old can often tolerate hernia surgery better than an unfit 55-year-old with several uncontrolled conditions. What genuinely matters is a proper assessment of fitness for anesthesia, not a birth year. Our dedicated guide to <a href="<?= $base_path ?>special-considerations/elderly" class="text-amber-900 font-semibold hover:underline">hernia surgery for elderly patients</a> covers how that assessment works.
                        </p>
                    </div>

                    <!-- 8. FAQ -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-12 mb-6 border-b border-slate-100 pb-3">Frequently Asked Questions</h2>
                    <div class="space-y-4 mb-10" id="faqAccordion">
                        <?php foreach ($faqs as $i => $faq): ?>
                        <div class="faq-item bg-slate-50 rounded-2xl border border-slate-200 p-6">
                            <h3 class="font-bold text-slate-900 text-lg mb-2">Q<?= $i + 1 ?>: <?= htmlspecialchars($faq['q'], ENT_QUOTES, 'UTF-8') ?></h3>
                            <p class="text-slate-600 text-sm md:text-base leading-relaxed m-0"><?= htmlspecialchars($faq['a'], ENT_QUOTES, 'UTF-8') ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="bg-slate-100 border border-slate-200 rounded-2xl p-6 mb-8">
                        <p class="text-slate-600 text-sm leading-relaxed m-0">
                            This article is general medical information, not a personal fitness assessment. Your own suitability for surgery, and the optimization you may need beforehand, should be confirmed with your surgical and medical team together.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Have a Condition That Complicates the Picture?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Book a consultation to discuss your hernia alongside your diabetes, weight, heart condition or other health factors.</p>
                        <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition shadow-lg hover:scale-105">
                            Book a Consultation
                        </a>
                    </div>
                </div>
            </article>

            <aside class="lg:col-span-4 space-y-8">
                <div class="bg-brand-50 rounded-3xl p-6 border border-brand-100">
                    <h3 class="font-bold text-brand-900 text-base mb-3">The Short Version</h3>
                    <ul class="list-none p-0 m-0 space-y-2.5">
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Comorbidities change the plan, not whether surgery is possible.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Diabetes and weight are often optimized before elective repair.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Heart disease needs cardiology coordination, not automatic exclusion.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Age alone is rarely the deciding factor.</li>
                    </ul>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm text-center">
                    <img src="<?= $base_path ?>assets/images/dr-kumar-headshot-2026.jpg" alt="Dr. Kumar of Billroth Hospitals, hernia and abdominal wall surgeon in Chennai" width="96" height="96" class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-brand-50 shadow-md mb-4">
                    <h3 class="font-bold text-slate-900 text-lg mb-1">Dr. Kumar of Billroth Hospitals</h3>
                    <p class="text-xs text-brand-700 font-semibold mb-3">Senior Hernia &amp; Abdominal Wall Surgeon</p>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">Over 29 years of experience managing hernia repair in patients with diabetes, obesity, heart disease and advanced age.</p>
                    <a href="<?= $base_path ?>treatment/hernia-surgeon-in-chennai" class="inline-flex items-center justify-center w-full bg-brand-50 hover:bg-brand-100 text-brand-800 text-xs font-bold py-2.5 rounded-xl border border-brand-100 transition">
                        View Doctor Profile
                    </a>
                </div>

                <div class="bg-red-600 text-white rounded-3xl p-6 shadow-lg">
                    <h3 class="font-bold text-lg mb-2">Hernia Emergency?</h3>
                    <p class="text-red-100 text-xs leading-relaxed mb-4">If the bulge is hard, discolored or you are vomiting, do not wait for an appointment.</p>
                    <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center justify-center w-full gap-2 bg-white text-red-700 font-bold text-sm py-3 rounded-xl hover:bg-red-50 transition">
                        <?= $site['phone'] ?>
                    </a>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                    <h3 class="font-bold text-slate-900 text-base mb-4 border-b border-slate-100 pb-2">Related Guides</h3>
                    <div class="space-y-3">
                        <a href="<?= $base_path ?>special-considerations/diabetes" class="block text-xs font-semibold text-slate-800 hover:text-brand-700 transition">Hernia Surgery With Diabetes</a>
                        <a href="<?= $base_path ?>special-considerations/obesity" class="block text-xs font-semibold text-slate-800 hover:text-brand-700 transition">Hernia Repair With High BMI</a>
                        <a href="<?= $base_path ?>special-considerations/elderly" class="block text-xs font-semibold text-slate-800 hover:text-brand-700 transition">Hernia Surgery for Elderly Patients</a>
                        <a href="<?= $base_path ?>special-considerations/chronic-cough-copd" class="block text-xs font-semibold text-slate-800 hover:text-brand-700 transition">Surgery With Chronic Cough or COPD</a>
                    </div>
                </div>
            </aside>

        </div>
    </div>
</section>

<?php
// FAQPage schema, generated from the same $faqs array rendered above so the
// markup and the visible text can never disagree.
$faq_schema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    '@id'        => $page_url . '#faq',
    'isPartOf'   => ['@id' => $page_url . '#webpage'],
    'mainEntity' => array_map(function ($faq) {
        return [
            '@type'          => 'Question',
            'name'           => $faq['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['a']],
        ];
    }, $faqs),
];
?>
<script type="application/ld+json">
<?= json_encode($faq_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>

</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
