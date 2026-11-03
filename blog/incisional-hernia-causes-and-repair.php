<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2027-03-03');

$page_title       = 'Incisional Hernia: Causes, Risk Factors and Repair';
$page_description = 'An incisional hernia is a bulge through an old surgical scar. Learn why it forms, which risks you can change, when it needs repair and how it is fixed.';
$page_keywords    = 'incisional hernia, incisional hernia causes, scar hernia, hernia after surgery, incisional hernia repair, incisional hernia mesh';
$page_image       = $site['url'] . 'assets/images/incisional-hernia-causes-and-repair.png';
$page_published   = '2027-03-03';
$page_modified    = '2027-03-03';

$schema_about = [
    '@type'       => 'MedicalCondition',
    'name'        => 'Incisional Hernia',
    'description' => 'A hernia that develops through the scar of a previous abdominal operation, where the healed fascia has not regained the strength of the original abdominal wall.',
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'How long after surgery can an incisional hernia appear?',
        'a' => 'It can appear within weeks or many years later. In one review, nearly half of cases appeared within two years and about three quarters within three years of the operation.',
    ],
    [
        'q' => 'Can an incisional hernia heal on its own?',
        'a' => 'No. A gap in the abdominal wall does not close by itself. Some small, painless ones are monitored for a time, but monitoring is a decision made with a surgeon.',
    ],
    [
        'q' => 'Does every incisional hernia need mesh?',
        'a' => 'Mesh is the usual choice because suture-only repair in scarred tissue fails more often. Your surgeon decides based on defect size, location, infection risk and your overall health.',
    ],
    [
        'q' => 'What are the risk factors for an incisional hernia?',
        'a' => 'Wound infection, obesity, smoking, diabetes, kidney or lung disease, steroid use, chronic cough, and emergency surgery are commonly listed. Closure technique also plays a part.',
    ],
    [
        'q' => 'Can an incisional hernia be repaired with keyhole surgery?',
        'a' => 'Often yes. Laparoscopic and robotic methods suit many patients, while very large, infected or complex defects may need open repair or abdominal wall reconstruction.',
    ],
    [
        'q' => 'Is it dangerous to ignore an incisional hernia?',
        'a' => 'A hernia can enlarge over time, and bowel can become trapped. A hard, painful, unreducible bulge with vomiting needs emergency care, so any new bulge deserves an examination.',
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
            <span class="text-white">Incisional Hernia</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Condition Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Incisional Hernia: Why It Forms After Surgery <br class="hidden md:inline"><span class="text-accent">and How It Is Repaired</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar of Billroth Hospitals</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>March 3, 2027</span>
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

                    <img src="<?= $base_path ?>assets/images/incisional-hernia-causes-and-repair.png" alt="Incisional Hernia: Why It Forms After Surgery and How It Is Repaired" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: What Is an Incisional Hernia?</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>An incisional hernia is a bulge that pushes through the scar of an earlier abdominal operation.</strong> A healed incision never fully regains the strength of untouched muscle wall, and infection, obesity, smoking, diabetes, straining and the way the wall was closed can all tip it toward failure. Repair is usually done with mesh, by open, laparoscopic or robotic methods, chosen by hernia size and your health.
                        </p>
                    </div>


<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Why a Healed Scar Is Not the Same as Healthy Muscle Wall</h2>
<p class="text-slate-600 leading-relaxed mb-6">
When a surgeon operates through the abdomen, the cut passes through the fascia, the tough fibrous sheet that holds the belly wall together. Stitches close it, and the body lays down scar tissue to knit it shut. That scar is the repair, but it never regains the full strength of the original fascia. For the first weeks the closure holds mainly because of the stitches, and for months afterward the scar is still maturing.
</p>
<p class="text-slate-600 leading-relaxed mb-6">
A hernia forms when that closure slowly gives way and a gap opens. Fat or bowel then pushes into the gap and creates a bulge under the skin along the old incision. Doctors call this an incisional hernia, and many patients simply call it a scar hernia. The weak point is usually not one dramatic event. It is the balance between how strong the scar is and how much pressure the belly wall has to resist, and that balance can tip in either direction.
</p>

<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Three Groups of Causes, and Which Ones You Can Influence</h2>
<p class="text-slate-600 leading-relaxed mb-6">
Reviews of the topic sort the reasons for a failed closure into patient factors, disease factors, and technical factors. Seeing them side by side helps, because only some are within your control.
</p>
<div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm">
    <table class="w-full text-slate-700 text-sm">
        <thead>
            <tr class="bg-brand-900 text-white">
                <th class="px-5 py-3.5 text-left font-semibold">Group</th>
                <th class="px-5 py-3.5 text-left font-semibold">Examples</th>
                <th class="px-5 py-3.5 text-left font-semibold">Can it be changed?</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
            <tr class="hover:bg-slate-50">
                <td class="px-5 py-3.5 font-semibold">Patient factors</td>
                <td class="px-5 py-3.5">Obesity, smoking, diabetes, steroid or immunosuppressant use, kidney or lung disease, a chronic cough</td>
                <td class="px-5 py-3.5">Often partly, before or after surgery</td>
            </tr>
            <tr class="hover:bg-slate-50">
                <td class="px-5 py-3.5 font-semibold">Disease factors</td>
                <td class="px-5 py-3.5">Emergency surgery, infection inside the abdomen, wound infection afterward</td>
                <td class="px-5 py-3.5">Rarely, since the illness decides the operation</td>
            </tr>
            <tr class="hover:bg-slate-50">
                <td class="px-5 py-3.5 font-semibold">Technical factors</td>
                <td class="px-5 py-3.5">Where the incision was made, how the fascia was closed, suture type and spacing</td>
                <td class="px-5 py-3.5">Only by the operating team, at the original surgery</td>
            </tr>
        </tbody>
    </table>
</div>
<p class="text-slate-600 leading-relaxed mb-6">
Wound infection deserves a special mention because it is one of the most commonly reported contributors. An infected wound heals poorly and the closure beneath it can loosen. That is why redness, warmth, discharge or fever after any abdominal surgery should be reported to your surgical team promptly rather than watched at home. If you have diabetes, our page on <a href="<?= $base_path ?>special-considerations/diabetes" class="text-brand-700 font-semibold hover:underline">diabetes and hernia surgery</a> explains why blood sugar control matters for wound healing.
</p>

<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">How Surgeons Try to Prevent It, and What That Tells You</h2>
<p class="text-slate-600 leading-relaxed mb-6">
The European Hernia Society closure guideline recommends a small-bites technique for closing the midline fascia, with a suture length at least four times the length of the wound. Later reviews describe this as small bites about 5 mm wide and 5 mm apart with a slowly absorbable continuous suture. The reasoning is simple: many tiny bites spread tension evenly and are less likely to tear through tissue than a few large ones.
</p>
<p class="text-slate-600 leading-relaxed mb-6">
The same guideline suggests that prophylactic mesh, a mesh placed during the first operation to reinforce the closure, can be considered in high-risk patients such as those having aortic aneurysm surgery and people with obesity. For emergency operations, the guideline did not give a firm recommendation on the best closure technique. This is why a hernia can still appear even when the original surgeon did everything right: the patient and the illness carry part of the risk.
</p>

<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">When Does It Show Up?</h2>
<p class="text-slate-600 leading-relaxed mb-6">
Estimates of how many people develop one after abdominal surgery vary enormously between studies, from a few percent to far higher, with the best estimates in one review at roughly 10 to 15 percent of laparotomies (open abdominal operations). The same review reports that nearly half appear within two years of the operation, and about three quarters within three years. These are population figures from different studies, so they describe patterns, not your personal risk.
</p>
<p class="text-slate-600 leading-relaxed mb-6">
Later onset is also common enough to matter. A hernia that appears years after surgery often follows weight gain, a chronic cough, or repeated straining. If your original operation was a C-section or hysterectomy, see our guide to <a href="<?= $base_path ?>blog/hernia-after-c-section" class="text-brand-700 font-semibold hover:underline">a bulge near a C-section scar</a>, which covers that situation in detail.
</p>

<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Do You Always Need Repair?</h2>
<p class="text-slate-600 leading-relaxed mb-6">
Not always. A small incisional hernia that causes little or no discomfort can sometimes be monitored under a surgeon's guidance. Repair is usually advised when the hernia is growing, painful, interfering with daily life, or when there is any sign that bowel is getting trapped. Our general guide on <a href="<?= $base_path ?>blog/do-i-need-hernia-surgery" class="text-brand-700 font-semibold hover:underline">whether you need hernia surgery</a> walks through that decision.
</p>
<div class="bg-amber-50 border-l-4 border-amber-500 p-6 rounded-r-2xl mb-8">
    <p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">
        <strong>Treat it as an emergency if</strong> the bulge becomes hard, tender and cannot be pushed back, turns red or dark, or comes with vomiting and swelling of the abdomen. These can mean trapped bowel. Read <a href="<?= $base_path ?>blog/hernia-emergency-warning-signs" class="text-amber-900 font-semibold hover:underline">hernia emergency warning signs</a> and go to a hospital without waiting for a routine appointment.
    </p>
</div>

<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">How Incisional Hernias Are Repaired</h2>
<p class="text-slate-600 leading-relaxed mb-6">
Mesh reinforcement is the usual approach, because closing a hernia in already scarred tissue with stitches alone fails more often. Beyond that, the choice depends on the size of the defect, where it sits, whether you have had earlier repairs, and your general health. Here is the same menu in plain terms.
</p>
<div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm">
    <table class="w-full text-slate-700 text-sm">
        <thead>
            <tr class="bg-brand-900 text-white">
                <th class="px-5 py-3.5 text-left font-semibold">Approach</th>
                <th class="px-5 py-3.5 text-left font-semibold">What it means</th>
                <th class="px-5 py-3.5 text-left font-semibold">Typically considered for</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
            <tr class="hover:bg-slate-50">
                <td class="px-5 py-3.5 font-semibold">Open repair</td>
                <td class="px-5 py-3.5">Incision over the hernia, mesh placed through the opening</td>
                <td class="px-5 py-3.5">Infected or contaminated fields, emergencies, some very large defects</td>
            </tr>
            <tr class="hover:bg-slate-50">
                <td class="px-5 py-3.5 font-semibold">Laparoscopic or robotic, mesh inside the abdomen</td>
                <td class="px-5 py-3.5">Small ports, mesh placed against the inner wall</td>
                <td class="px-5 py-3.5">Small to medium defects in suitable patients</td>
            </tr>
            <tr class="hover:bg-slate-50">
                <td class="px-5 py-3.5 font-semibold">Retrorectus or eTEP repair</td>
                <td class="px-5 py-3.5">Mesh placed between muscle layers, outside the abdominal cavity</td>
                <td class="px-5 py-3.5">Medium to large midline defects</td>
            </tr>
            <tr class="hover:bg-slate-50">
                <td class="px-5 py-3.5 font-semibold">TAR (transversus abdominis release)</td>
                <td class="px-5 py-3.5">A deep muscle is released so the wall can be closed with wide mesh</td>
                <td class="px-5 py-3.5">Large or complex defects</td>
            </tr>
        </tbody>
    </table>
</div>
<p class="text-slate-600 leading-relaxed mb-6">
Dr. Kumar of Billroth Hospitals offers laparoscopic, robotic, eTEP and TAR approaches, and the choice is made after examination and imaging, not before. Our <a href="<?= $base_path ?>my_types/incisional-hernia-treatment-in-chennai" class="text-brand-700 font-semibold hover:underline">incisional hernia treatment page</a> sets out the approaches offered, and <a href="<?= $base_path ?>treatment/etep-technique-expert-in-chennai" class="text-brand-700 font-semibold hover:underline">eTEP repair</a> has its own page. For very large or recurrent defects, see <a href="<?= $base_path ?>special-considerations/complex-hernia-info" class="text-brand-700 font-semibold hover:underline">complex hernia information</a>.
</p>

<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Preparing So the Repair Lasts</h2>
<p class="text-slate-600 leading-relaxed mb-6">
Because the same factors that caused the first failure can threaten the repair, surgeons often ask patients to prepare. Stopping smoking, bringing blood sugar under control, and losing weight where appropriate all improve healing. None of this guarantees success, and a repair can still recur, but it moves the odds in your favor. If your hernia has come back after a previous repair, our page on <a href="<?= $base_path ?>my_types/recurrent-hernia" class="text-brand-700 font-semibold hover:underline">recurrent hernia</a> explains what changes in the plan.
</p>


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
                            This article is general medical information based on published reviews and guidelines. It is not a diagnosis. Any new bulge near a surgical scar should be examined in person, and the repair plan depends on your own scans and health.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Noticed a Bulge Near an Old Surgical Scar?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">An examination, and imaging if needed, tells you the size of the defect and whether repair is advisable. Dr. Kumar of Billroth Hospitals can walk you through the options.</p>
                        <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition shadow-lg hover:scale-105">
                            Book an Incisional Hernia Consultation
                        </a>
                    </div>
                </div>
            </article>

            <aside class="lg:col-span-4 space-y-8">
                <div class="bg-brand-50 rounded-3xl p-6 border border-brand-100">
                    <h3 class="font-bold text-brand-900 text-base mb-3">The Short Version</h3>
                    <ul class="list-none p-0 m-0 space-y-2.5">
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>An old scar can bulge because healed fascia never regains full strength.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Infection, obesity, smoking and diabetes raise the risk.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Many appear within two to three years, but later onset happens.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Mesh repair is the usual approach, by open or keyhole methods.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>A hard, painful bulge with vomiting is an emergency.</li>
                    </ul>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm text-center">
                    <img src="<?= $base_path ?>assets/images/dr-kumar-headshot-2026.jpg" alt="Dr. Kumar of Billroth Hospitals, hernia and abdominal wall surgeon in Chennai" width="96" height="96" class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-brand-50 shadow-md mb-4">
                    <h3 class="font-bold text-slate-900 text-lg mb-1">Dr. Kumar of Billroth Hospitals</h3>
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
                        <a href="<?= $base_path ?>blog/hernia-after-c-section" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Hernia After a C-Section</h4>
                                <span class="text-[11px] text-slate-400">18 December 2026</span>
                            </div>
                        </a>
                        <a href="<?= $base_path ?>blog/can-hernia-come-back-after-surgery" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Can a Hernia Come Back After Surgery?</h4>
                                <span class="text-[11px] text-slate-400">9 July 2026</span>
                            </div>
                        </a>
                    </div>
                </div>
            </aside>

        </div>
    </div>
</section>

<?php
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
