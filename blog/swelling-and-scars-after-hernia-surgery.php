<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2026-09-25');

$page_title       = 'Swelling and Scars After Hernia Surgery: Is It Normal?';
$page_description = 'Swelling after hernia surgery at weeks 2 to 8 can look like the surgery failed. A differential guide to normal seroma, infection and recurrence, with red flags.';
$page_keywords    = 'swelling after hernia surgery, hernia surgery scar still bulging, seroma after hernia surgery, is my hernia surgery scar normal, lump after hernia repair';
$page_image       = $site['url'] . 'assets/images/swelling-and-scars-after-hernia-surgery.png';
$page_published   = '2026-09-25';
$page_modified    = '2026-09-25';

$schema_about = [
    '@type'         => 'MedicalCondition',
    'name'          => 'Post-Operative Seroma',
    'description'   => 'A collection of clear fluid under the skin at the site of hernia surgery, common in the first month after repair and usually harmless, distinct from infection or a returning hernia.',
    'signOrSymptom' => [
        ['@type' => 'MedicalSignOrSymptom', 'name' => 'Soft, painless swelling near the incision'],
        ['@type' => 'MedicalSignOrSymptom', 'name' => 'Swelling that does not worsen with coughing or straining'],
    ],
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'Is it normal to still have a lump weeks after hernia surgery?',
        'a' => 'Often yes. A soft, painless swelling in the first four to six weeks is usually a seroma, a normal fluid collection, not a sign that the repair has failed.',
    ],
    [
        'q' => 'How do I tell a seroma from my hernia coming back?',
        'a' => 'A seroma stays roughly the same size when you cough or strain. A recurring hernia typically bulges more noticeably with those movements, the same way the original hernia did.',
    ],
    [
        'q' => 'What does an infected hernia wound look like?',
        'a' => 'Increasing redness, warmth, and pain rather than improvement, sometimes with fever or discharge from the incision. This differs from a seroma, which is usually painless.',
    ],
    [
        'q' => 'How long does swelling last after hernia surgery?',
        'a' => 'Most swelling peaks in the first week and gradually reduces over four to six weeks. Small seromas can occasionally take a couple of months to fully resolve.',
    ],
    [
        'q' => 'Should I try to drain a lump myself?',
        'a' => 'No. Never attempt to drain, press hard on, or puncture a post-surgical lump yourself. If it needs draining, that should be done by your surgical team under sterile conditions.',
    ],
    [
        'q' => 'When should I get swelling checked urgently?',
        'a' => 'If it comes with fever, spreading redness, a bulge that clearly worsens with straining, or the wound reopening. Those need same-week or same-day medical review, not a wait-and-see approach.',
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
            <span class="text-white">Swelling and Scars</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Recovery Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Hernia Surgery Scars, Swelling <br class="hidden md:inline"><span class="text-accent">and the "Still Looks Bulgy" Problem</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar of Billroth Hospitals</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>September 25, 2026</span>
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

                    <img src="<?= $base_path ?>assets/images/swelling-and-scars-after-hernia-surgery.png" alt="Hernia Surgery Scars, Swelling and the Still Looks Bulgy Problem" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: Is the Swelling Normal?</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>A soft, painless bulge in the first four to six weeks is very often a seroma, a normal fluid collection, not a failed repair.</strong> The clue that separates it from a returning hernia is straightforward: a seroma stays roughly the same size when you cough or strain, while a recurring hernia noticeably grows. Fever, spreading redness or increasing pain point toward infection instead, and need prompt attention.
                        </p>
                    </div>

                    <!-- 1. Why this fear is so common -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">Why This Is One of the Most Common Post-Op Worries</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Somewhere around weeks two to eight, a lot of hernia patients notice a lump, a firmness, or a visible bulge at the surgery site and think the same thing: the surgery did not work. That fear is understandable, since the swelling can genuinely resemble the original hernia. It is also, in the great majority of cases, wrong.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        There are three genuinely different things that can be happening at this stage, and they look similar enough on the surface that a straightforward comparison is more useful than a general description of any one of them.
                    </p>

                    <!-- 2. The differential table -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Seroma, Infection or Recurrence: How to Tell Them Apart</h2>
                    <div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm">
                        <table class="w-full text-slate-700 text-sm">
                            <thead>
                                <tr class="bg-brand-900 text-white">
                                    <th class="px-5 py-3.5 text-left font-semibold">Feature</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">Seroma (normal)</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">Infection</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">Recurrence</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">How it feels</td>
                                    <td class="px-5 py-3.5">Soft, fluid-filled, like a small water balloon</td>
                                    <td class="px-5 py-3.5">Firm, warm, tender to touch</td>
                                    <td class="px-5 py-3.5">A bulge that resembles the original hernia</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Pain</td>
                                    <td class="px-5 py-3.5">Usually minimal or none</td>
                                    <td class="px-5 py-3.5 text-red-700 font-semibold">Increasing, throbbing</td>
                                    <td class="px-5 py-3.5">Often mild, sometimes none</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Fever</td>
                                    <td class="px-5 py-3.5">No</td>
                                    <td class="px-5 py-3.5 text-red-700 font-semibold">Often present</td>
                                    <td class="px-5 py-3.5">No</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Changes with coughing or straining</td>
                                    <td class="px-5 py-3.5">Stays about the same size</td>
                                    <td class="px-5 py-3.5">No, but may worsen with movement</td>
                                    <td class="px-5 py-3.5 text-red-700 font-semibold">Yes, noticeably bulges more</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Typical timing</td>
                                    <td class="px-5 py-3.5">Weeks 1 to 4, resolves within 4 to 8 weeks</td>
                                    <td class="px-5 py-3.5">Days 3 to 14, sometimes later</td>
                                    <td class="px-5 py-3.5">Weeks to years later</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">What to do</td>
                                    <td class="px-5 py-3.5">Monitor, mention at review, rarely needs drainage</td>
                                    <td class="px-5 py-3.5 font-bold">See your surgical team promptly</td>
                                    <td class="px-5 py-3.5 font-bold">Book a surgical reassessment</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        The single most useful test in that table is the fourth row. Press gently, or cough, and watch what happens. A lump that holds steady is behaving like fluid. A lump that visibly grows is behaving like a hernia.
                    </p>

                    <!-- 3. Seroma in depth -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Why Seromas Happen, and Why They Are Usually Fine</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        When tissue is dissected during surgery, particularly when a hernia sac is separated from the surrounding layers, the space left behind can fill with clear fluid as part of normal healing. This is especially common after larger or more complex repairs. Most seromas are picked up on examination without ever being noticed by the patient, and the ones that are noticeable usually shrink gradually on their own over four to eight weeks as the body reabsorbs the fluid.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        A larger, uncomfortable, or slow-resolving seroma occasionally needs to be drained by your surgical team, which is a quick, low-risk procedure. This is different from the general causes of post-operative swelling covered in our earlier guide on <a href="<?= $base_path ?>blog/why-is-my-stomach-bigger-after-hernia-surgery" class="text-brand-700 font-semibold hover:underline">why your stomach looks bigger after hernia surgery</a>, which walks through the broader picture of bloating and swelling in general.
                    </p>

                    <!-- 4. Scar concerns -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What About the Scar Itself?</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Keyhole incisions are small, but the skin around them often looks puffy, slightly raised, or numb for several weeks, which is normal tissue response rather than a problem. A firm ridge directly under the scar, distinct from a soft bulge beside it, is frequently just healing scar tissue rather than a fluid collection or a hernia. It typically softens over two to three months. Any redness that is spreading rather than settling, or a scar that separates rather than closing, is different and needs review.
                    </p>

                    <!-- 5. Red flags -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Red Flags That Need Prompt Review</h2>
                    <div class="bg-red-50 border-2 border-red-500 p-5 rounded-2xl mb-6">
                        <ul class="list-none p-0 m-0 space-y-2">
                            <li class="flex items-start gap-2.5 text-slate-800 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-1.5 shrink-0"></span>Fever, chills, or the incision feeling hot to the touch.</li>
                            <li class="flex items-start gap-2.5 text-slate-800 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-1.5 shrink-0"></span>Redness that is spreading outward rather than fading.</li>
                            <li class="flex items-start gap-2.5 text-slate-800 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-1.5 shrink-0"></span>Pus or foul-smelling discharge from the wound.</li>
                            <li class="flex items-start gap-2.5 text-slate-800 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-1.5 shrink-0"></span>A bulge that clearly grows when you cough, strain, or stand for a while.</li>
                            <li class="flex items-start gap-2.5 text-slate-800 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-1.5 shrink-0"></span>Pain that is getting worse rather than steadily improving.</li>
                        </ul>
                    </div>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        If you are genuinely unsure whether what you are seeing is recurrence, our detailed guide on <a href="<?= $base_path ?>blog/will-my-hernia-come-back" class="text-brand-700 font-semibold hover:underline">hernia recurrence risk</a> covers the factors that make it more or less likely in your specific situation. Persistent discomfort around the scar that does not fit the seroma or infection pattern is also sometimes nerve-related rather than mesh-related, which our page on <a href="<?= $base_path ?>special-considerations/chronic-pain" class="text-brand-700 font-semibold hover:underline">chronic pain after hernia surgery</a> explains in more depth.
                    </p>

                    <!-- 6. FAQ -->
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
                            This article is general medical information, not a diagnosis. If you are genuinely unsure what you are looking at, have it examined rather than guessing from a description.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Not Sure What You Are Seeing?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Book a review so your swelling or scar can be properly examined, rather than guessed at from a description.</p>
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
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Soft swelling weeks 2 to 8 is often a normal seroma.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>A seroma does not grow when you cough. A recurrence usually does.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Fever and spreading redness point to infection, not a seroma.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Never drain a post-surgical lump yourself.</li>
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
                    <h3 class="font-bold text-lg mb-2">Signs of Infection?</h3>
                    <p class="text-red-100 text-xs leading-relaxed mb-4">Fever, spreading redness or a wound that has opened need same-day attention.</p>
                    <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center justify-center w-full gap-2 bg-white text-red-700 font-bold text-sm py-3 rounded-xl hover:bg-red-50 transition">
                        <?= $site['phone'] ?>
                    </a>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                    <h3 class="font-bold text-slate-900 text-base mb-4 border-b border-slate-100 pb-2">Related Articles</h3>
                    <div class="space-y-4">
                        <a href="<?= $base_path ?>blog/why-is-my-stomach-bigger-after-hernia-surgery" class="flex gap-3 group">
                            <img src="<?= $base_path ?>assets/images/why-is-my-stomach-bigger-after-hernia-surgery.jpg" alt="Why Is My Stomach Bigger After Hernia Surgery?" width="64" height="64" class="w-16 h-16 rounded-xl object-cover shrink-0" loading="lazy">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Why Is My Stomach Bigger After Surgery?</h4>
                                <span class="text-[11px] text-slate-400">General swelling guide</span>
                            </div>
                        </a>
                        <a href="<?= $base_path ?>blog/will-my-hernia-come-back" class="flex gap-3 group">
                            <img src="<?= $base_path ?>assets/images/hernia-surgery-recovery-week-by-week.png" alt="Will My Hernia Come Back?" width="64" height="64" class="w-16 h-16 rounded-xl object-cover shrink-0" loading="lazy">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Will My Hernia Come Back?</h4>
                                <span class="text-[11px] text-slate-400">22 September 2026</span>
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
