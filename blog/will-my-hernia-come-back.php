<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2026-09-22');

$page_title       = 'Will My Hernia Come Back? Recurrence Risk Explained';
$page_description = 'Will your hernia come back after surgery? A risk-factor breakdown, split into what you can change and what you cannot, with real recurrence statistics.';
$page_keywords    = 'hernia recurrence risk, will my hernia come back, hernia coming back after surgery, recurrent hernia risk factors, hernia recurrence rate statistics';
$page_image       = $site['url'] . 'assets/images/will-my-hernia-come-back.png';
$page_published   = '2026-09-22';
$page_modified    = '2026-09-22';

// Set explicitly rather than relying on URL inference, since this page is
// about recurrence risk specifically, distinct from the general "can it come
// back" overview already published on the site.
$schema_about = [
    '@type'         => 'MedicalCondition',
    'name'          => 'Recurrent Hernia',
    'description'   => 'A hernia reappearing at or near the site of a previous repair, whether from lifestyle-related risk factors, the type and size of the original defect, or the circumstances of the original operation.',
    'riskFactor' => [
        ['@type' => 'MedicalRiskFactor', 'name' => 'Smoking'],
        ['@type' => 'MedicalRiskFactor', 'name' => 'Obesity'],
        ['@type' => 'MedicalRiskFactor', 'name' => 'Chronic cough'],
        ['@type' => 'MedicalRiskFactor', 'name' => 'Large original defect size'],
        ['@type' => 'MedicalRiskFactor', 'name' => 'Emergency or contaminated repair'],
    ],
    'possibleTreatment' => [
        ['@type' => 'MedicalProcedure', 'name' => 'Recurrent Hernia Repair'],
        ['@type' => 'MedicalProcedure', 'name' => 'eTEP Technique'],
    ],
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'What percentage of hernias come back after surgery?',
        'a' => 'Baseline recurrence without lifestyle risk factors runs around 14 percent for primary ventral hernias and 25 percent for incisional hernias, based on nationwide registry data.',
    ],
    [
        'q' => 'Does smoking really increase hernia recurrence risk?',
        'a' => 'Yes. Smoking is linked to roughly a third higher odds of recurrence, and combined with obesity raises absolute recurrence rates by several percentage points above baseline.',
    ],
    [
        'q' => 'Can I actually lower my recurrence risk after surgery?',
        'a' => 'Yes. Quitting smoking, managing your weight, treating a chronic cough, and following your lifting restrictions during recovery are all within your control and genuinely change the odds.',
    ],
    [
        'q' => 'Is a second hernia repair riskier than the first?',
        'a' => 'Generally yes. Each recurrence tends to involve more scar tissue and a technically harder repair, which is why recurrent hernias are often referred to a specialist in complex repair.',
    ],
    [
        'q' => 'Does the type of mesh affect recurrence risk?',
        'a' => 'Yes, significantly. Mesh reinforcement lowers recurrence substantially compared with suture-only closure, which is why mesh is standard for most adult hernia repairs today.',
    ],
    [
        'q' => 'How would I know if my hernia has come back?',
        'a' => 'A bulge returning at or near the same site, especially one that grows with coughing or straining, is the main sign. It usually feels similar to how the original hernia felt.',
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
            <span class="text-white">Recurrence Risk</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Recovery Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Will My Hernia Come Back? <br class="hidden md:inline"><span class="text-accent">Recurrence Risk Explained</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>September 22, 2026</span>
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

                    <img src="<?= $base_path ?>assets/images/will-my-hernia-come-back.png" alt="Will My Hernia Come Back? Recurrence Risk Explained" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: Hernia Recurrence Risk</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>Baseline recurrence runs around 14 percent for primary ventral hernias and 25 percent for incisional hernias, before any personal risk factors are added.</strong> Some of what pushes that number up is within your control, like smoking and weight. Some of it is not, like the size of your original defect or whether the repair was done as an emergency. Knowing which is which is what actually helps.
                        </p>
                    </div>

                    <!-- 1. Why this is worth breaking down -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">Why "Will It Come Back" Deserves a Real Answer, Not a Reassurance</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Most information written for a worried post-op patient leans toward comfort: recurrence is rare, do not worry about it. That is not honest, and it is not useful either. Recurrence is a real, measured outcome with published rates, and some of what drives it is genuinely yours to influence. Treating the risk as a fixed number you cannot touch wastes the part you actually can control.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        This is written for two groups specifically: people who have just had a repair and want to know what protects it, and people who are already on a second or third hernia and want to understand why it happened again.
                    </p>

                    <!-- 2. The risk factor table -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What You Can Change, and What You Cannot</h2>
                    <div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm">
                        <table class="w-full text-slate-700 text-sm">
                            <thead>
                                <tr class="bg-brand-900 text-white">
                                    <th class="px-5 py-3.5 text-left font-semibold">Modifiable factors</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">Non-modifiable factors</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5">Smoking</td>
                                    <td class="px-5 py-3.5">Original defect size</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5">Obesity and excess weight</td>
                                    <td class="px-5 py-3.5">Age and tissue quality</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5">An untreated chronic cough</td>
                                    <td class="px-5 py-3.5">Hernia type (incisional carries higher baseline risk than primary)</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5">Chronic constipation and straining</td>
                                    <td class="px-5 py-3.5">Whether the repair was planned or an emergency</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5">Lifting too soon during recovery</td>
                                    <td class="px-5 py-3.5">Number of previous repairs at the same site</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold">Blood sugar control before surgery</td>
                                    <td class="px-5 py-3.5 font-semibold">Whether mesh or sutures alone were used</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        The right side of this table is not something to feel guilty about. It describes the situation you were in, not a choice you made. It is still worth knowing, because it explains why two people can follow the exact same recovery advice and end up with different outcomes.
                    </p>

                    <!-- 3. The numbers -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What the Numbers Actually Show</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        A large nationwide registry study of ventral hernia repairs found a baseline recurrence prevalence of about 14 percent for primary hernias and 25 percent for incisional hernias, in patients without smoking or obesity as a factor. Smoking and obesity each carried roughly a third higher odds of recurrence on their own. Combined, the two raised absolute recurrence prevalence by three to six percentage points above that baseline for primary hernias, and five to six points for incisional ones.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Put plainly: quitting smoking and managing your weight before and after surgery is not a minor lifestyle suggestion. It is one of the few genuinely evidence-backed ways to move your own number down, on top of whatever the surgery itself achieves.
                    </p>

                    <!-- 4. Mesh -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Mesh and the Technical Side of Prevention</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Separately from lifestyle factors, how the repair itself was done matters a great deal. Reinforcing the defect with mesh substantially lowers recurrence compared with closing it with sutures alone, which is why mesh has become the standard approach for most adult hernia repairs rather than the exception. The details of when and how mesh is used are covered fully on our <a href="<?= $base_path ?>treatment/mesh-hernia-repair-in-chennai" class="text-brand-700 font-semibold hover:underline">mesh hernia repair</a> page.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        For larger or more complex defects, the surgical technique used to close and reinforce the abdominal wall, such as the <a href="<?= $base_path ?>treatment/etep-technique-expert-in-chennai" class="text-brand-700 font-semibold hover:underline">eTEP technique</a>, also affects how durable the repair is over the long term.
                    </p>

                    <!-- 5. Already recurrent -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">If This Is Already Your Second Hernia</h2>
                    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 rounded-r-2xl mb-8">
                        <p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">
                            <strong>A recurrence is not necessarily a sign that anything was done wrong the first time.</strong> Scar tissue from the earlier operation, combined with any risk factors that were present then and may still be present now, genuinely makes a second repair a different and more demanding operation. This is why recurrent hernias are usually referred to a surgeon with specific experience in <a href="<?= $base_path ?>my_types/recurrent-hernia" class="text-amber-900 font-semibold hover:underline">recurrent hernia repair</a> rather than treated as a routine repeat of the original procedure.
                        </p>
                    </div>

                    <!-- 6. What you can actually do -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What Is Actually Worth Doing</h2>
                    <ul class="list-none p-0 space-y-3 mb-8">
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-brand-100 text-brand-700 text-xs font-bold flex items-center justify-center shrink-0">1</span><span class="text-slate-600 text-sm md:text-base">Stop smoking before surgery if you can, and stay stopped afterward. This is the single most controllable factor on the list.</span></li>
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-brand-100 text-brand-700 text-xs font-bold flex items-center justify-center shrink-0">2</span><span class="text-slate-600 text-sm md:text-base">Get any chronic cough properly treated rather than tolerated, since it repeatedly stresses the repair the same way straining does.</span></li>
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-brand-100 text-brand-700 text-xs font-bold flex items-center justify-center shrink-0">3</span><span class="text-slate-600 text-sm md:text-base">Follow the lifting limits during recovery rather than improvising your own timeline based on how you feel.</span></li>
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-brand-100 text-brand-700 text-xs font-bold flex items-center justify-center shrink-0">4</span><span class="text-slate-600 text-sm md:text-base">Manage weight and blood sugar with your own doctor, both before elective surgery and as part of long-term recovery.</span></li>
                    </ul>

                    <!-- 7. FAQ -->
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
                            This article is general medical information, not a personal risk assessment. Your own recurrence risk depends on your specific hernia and history, and is best discussed directly with your surgeon.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Worried About a Hernia Returning?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Book a consultation to have your repair examined and your own risk factors discussed directly, whether this is your first hernia or your second.</p>
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
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Baseline recurrence: ~14% primary, ~25% incisional.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Smoking and obesity each add meaningfully to that risk.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Mesh substantially lowers recurrence versus sutures alone.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>A second repair is a different, more complex operation.</li>
                    </ul>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm text-center">
                    <img src="<?= $base_path ?>assets/images/doctor-about.avif" alt="Dr. Kumar, hernia and abdominal wall surgeon in Chennai" width="96" height="96" class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-brand-50 shadow-md mb-4">
                    <h3 class="font-bold text-slate-900 text-lg mb-1">Dr. Kumar</h3>
                    <p class="text-xs text-brand-700 font-semibold mb-3">Senior Hernia &amp; Abdominal Wall Surgeon</p>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">Over 29 years of experience specializing in advanced laparoscopic and robotic hernia repairs at Billroth Hospitals, Chennai.</p>
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
                    <h3 class="font-bold text-slate-900 text-base mb-4 border-b border-slate-100 pb-2">Related Articles</h3>
                    <div class="space-y-4">
                        <a href="<?= $base_path ?>blog/can-hernia-come-back-after-surgery" class="flex gap-3 group">
                            <img src="<?= $base_path ?>assets/images/hernia-come-back-after-surgery.jpg" alt="Can a Hernia Come Back After Surgery?" width="64" height="64" class="w-16 h-16 rounded-xl object-cover shrink-0" loading="lazy">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Can a Hernia Come Back After Surgery?</h4>
                                <span class="text-[11px] text-slate-400">General overview</span>
                            </div>
                        </a>
                        <a href="<?= $base_path ?>blog/exercise-after-hernia-surgery" class="flex gap-3 group">
                            <img src="<?= $base_path ?>assets/images/hernia-surgery-recovery-week-by-week.png" alt="Exercise After Hernia Surgery" width="64" height="64" class="w-16 h-16 rounded-xl object-cover shrink-0" loading="lazy">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Exercise After Hernia Surgery</h4>
                                <span class="text-[11px] text-slate-400">11 September 2026</span>
                            </div>
                        </a>
                    </div>
                </div>
            </aside>

        </div>
    </div>
</section>

<?php
// FAQPage schema, generated from the same $faqs array rendered above so the
// markup and the visible text can never disagree. MedicalWebPage,
// BreadcrumbList and the MedicalCondition node come from header.php.
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
