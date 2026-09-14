<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2026-09-15');

$page_title       = 'How to Sleep and Travel After Hernia Surgery';
$page_description = 'How to sleep after hernia surgery, and when it is safe to travel. Position guidance for the first two weeks, plus a fit-to-fly timeline for short and long flights.';
$page_keywords    = 'how to sleep after hernia surgery, sleeping position after hernia surgery, fit to fly after hernia surgery, travel after hernia surgery, flying after hernia surgery';
$page_image       = $site['url'] . 'assets/images/sleeping-and-travel-after-hernia-surgery.png';
$page_published   = '2026-09-15';
$page_modified    = '2026-09-15';

$schema_about = [
    '@type'       => 'MedicalProcedure',
    'name'        => 'Hernia Repair Recovery: Sleep and Travel Guidance',
    'description' => 'How to sleep comfortably after hernia repair and when it becomes safe to travel by road or air, which depends on the surgical technique used and the length of the journey.',
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'What is the best sleeping position after hernia surgery?',
        'a' => 'On your back with your upper body slightly raised, using pillows or a recliner. This reduces pressure on the repair. Avoid sleeping on your stomach for the first two weeks.',
    ],
    [
        'q' => 'How do I get out of bed without straining my hernia repair?',
        'a' => 'Roll onto your side first, then use your arms to push yourself up sideways, rather than sitting straight up from your back, which puts direct strain on the abdominal muscles.',
    ],
    [
        'q' => 'How soon can I fly after hernia surgery?',
        'a' => 'Short flights are often fine after two weeks for keyhole repair. Long-haul flights usually need four to six weeks, longer after open surgery or a large hernia repair.',
    ],
    [
        'q' => 'Do I need a fit-to-fly letter after hernia surgery?',
        'a' => 'Many airlines and travel insurers ask for one, especially within a month of surgery. Your surgeon can provide this once they have examined the healing wound at review.',
    ],
    [
        'q' => 'Is a long car journey safe soon after hernia surgery?',
        'a' => 'Short trips as a passenger are usually fine once you are comfortable sitting. Save long drives for after your first review, and stop regularly to walk and stretch.',
    ],
    [
        'q' => 'Can I use a seatbelt comfortably after hernia surgery?',
        'a' => 'Yes, and you should always wear one. A folded cloth or small cushion between the belt and the incision reduces direct pressure without compromising how the belt protects you.',
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
            <span class="text-white">Sleep and Travel</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Recovery Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Sleeping, Sitting and Travelling <br class="hidden md:inline"><span class="text-accent">After Hernia Surgery</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>September 15, 2026</span>
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

                    <img src="<?= $base_path ?>assets/images/sleeping-and-travel-after-hernia-surgery.png" alt="Sleeping, Sitting and Travelling After Hernia Surgery" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: Sleep and Travel After Surgery</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>Sleep on your back with your upper body slightly raised for the first two weeks, and avoid stomach sleeping.</strong> For travel, short flights are often reasonable from around two weeks after keyhole repair, but long-haul flights need four to six weeks. Both are longer after open surgery. A fit-to-fly letter from your surgeon covers you with airlines and insurers.
                        </p>
                    </div>

                    <!-- 1. Why position matters -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">Why Sleeping Position Actually Matters After Hernia Repair</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        The abdominal wall does not switch off overnight. Lying flat on your stomach, or twisting sharply to sit up from your back, both put direct tension through the exact muscle layer that was just repaired. Getting the mechanics right for the first two weeks is a small habit that measurably reduces pain and swelling, and it costs nothing beyond a pillow or two.
                    </p>

                    <!-- 2. Sleeping positions -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">The Three Positions That Work</h2>
                    <ul class="list-none p-0 space-y-4 mb-8">
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                            <span class="w-7 h-7 rounded-full bg-brand-700 text-white text-xs font-bold flex items-center justify-center shrink-0">1</span>
                            <div><strong class="text-slate-900 block mb-1">On your back, upper body raised</strong><span class="text-slate-600 text-sm">The best default. Prop yourself up with two or three pillows, or use a recliner, so your torso sits at an angle rather than fully flat. This takes direct pressure off the incision and tends to ease overnight swelling.</span></div>
                        </li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                            <span class="w-7 h-7 rounded-full bg-brand-700 text-white text-xs font-bold flex items-center justify-center shrink-0">2</span>
                            <div><strong class="text-slate-900 block mb-1">On your side, away from the repair</strong><span class="text-slate-600 text-sm">A pillow hugged against your abdomen adds gentle support and stops you rolling fully onto the operated side during the night. Comfortable for most people from around the first week.</span></div>
                        </li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                            <span class="w-7 h-7 rounded-full bg-brand-700 text-white text-xs font-bold flex items-center justify-center shrink-0">3</span>
                            <div><strong class="text-slate-900 block mb-1">A recliner chair, if getting into bed is hard</strong><span class="text-slate-600 text-sm">Entirely reasonable for the first few nights if lying down and standing back up from a bed feels difficult. There is no medical downside to sleeping upright in a recliner while you find your feet.</span></div>
                        </li>
                    </ul>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Avoid lying flat on your stomach for the first two weeks. When getting up, roll onto your side first and push up with your arms, rather than sitting straight up from lying flat, which uses the abdominal muscles directly.
                    </p>

                    <!-- 3. Sitting and daily positioning -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Sitting, Standing and Getting Around the House</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Choose a firm chair with arms over a low sofa for the first week or two, since pushing yourself up from a low, soft seat loads the core directly. When you cough or sneeze, which is genuinely uncomfortable early on, place a firm pillow against the incision and press gently while you do it. This is called splinting, and it noticeably reduces the sharp pull that a sudden cough otherwise causes.
                    </p>

                    <!-- 4. Travel timeline table -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Travel Clearance Timeline</h2>
                    <div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm">
                        <table class="w-full text-slate-700 text-sm">
                            <thead>
                                <tr class="bg-brand-900 text-white">
                                    <th class="px-5 py-3.5 text-left font-semibold">Journey type</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">Keyhole repair</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">Open repair</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Local car travel, as a passenger</td>
                                    <td class="px-5 py-3.5">2 to 3 days</td>
                                    <td class="px-5 py-3.5">5 to 7 days</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Train or short flight, under 4 hours</td>
                                    <td class="px-5 py-3.5">10 to 14 days</td>
                                    <td class="px-5 py-3.5">2 to 3 weeks</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Long-haul flight, over 4 hours</td>
                                    <td class="px-5 py-3.5 font-semibold">4 to 6 weeks</td>
                                    <td class="px-5 py-3.5 font-semibold">6 to 8 weeks</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Driving yourself</td>
                                    <td class="px-5 py-3.5">7 to 10 days</td>
                                    <td class="px-5 py-3.5">2 to 3 weeks</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Long-haul figures are more cautious than short trips for a specific reason: cabin pressure, long periods of immobility, and reduced access to medical help all combine to make a complication further from home a bigger problem than the same complication at home. A large or complex hernia repair generally means adding time to every row of this table.
                    </p>

                    <!-- 5. International patients -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Travelling to Chennai for Surgery, or Home Afterward</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        If you are travelling from outside Chennai, or from abroad, for the operation itself, the same principle works in reverse: plan your return journey around the table above rather than your original flight booking. Many airlines and travel insurers specifically ask for a fit-to-fly letter within a month of any surgery, which your surgeon issues once they have examined the wound and confirmed you are healing as expected.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Our <a href="<?= $base_path ?>international-patients" class="text-brand-700 font-semibold hover:underline">international patients page</a> covers planning a surgical trip to Chennai end to end, including how to build enough recovery time into your itinerary before a long flight home.
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
                            This article is general medical information, not personal travel clearance. Confirm your own timeline, and request a fit-to-fly letter if you need one, at your post-operative review.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Planning a Trip Around Your Surgery?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Book a review so your travel dates are set against your actual healing, with a fit-to-fly letter if you need one.</p>
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
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Sleep on your back, slightly raised, for 2 weeks.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Roll to your side before sitting up.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Short flights: around 2 weeks. Long-haul: 4 to 6 weeks.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Ask for a fit-to-fly letter at your review.</li>
                    </ul>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm text-center">
                    <img src="<?= $base_path ?>assets/images/dr-kumar-headshot-2026.jpg" alt="Dr. Kumar, hernia and abdominal wall surgeon in Chennai" width="96" height="96" class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-brand-50 shadow-md mb-4">
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
                        <a href="<?= $base_path ?>blog/exercise-after-hernia-surgery" class="flex gap-3 group">
                            <img src="<?= $base_path ?>assets/images/hernia-surgery-recovery-week-by-week.png" alt="Exercise After Hernia Surgery" width="64" height="64" class="w-16 h-16 rounded-xl object-cover shrink-0" loading="lazy">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Exercise After Hernia Surgery</h4>
                                <span class="text-[11px] text-slate-400">11 September 2026</span>
                            </div>
                        </a>
                        <a href="<?= $base_path ?>blog/hernia-surgery-recovery-week-by-week" class="flex gap-3 group">
                            <img src="<?= $base_path ?>assets/images/hernia-surgery-recovery-week-by-week.png" alt="Hernia Surgery Recovery Time" width="64" height="64" class="w-16 h-16 rounded-xl object-cover shrink-0" loading="lazy">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Recovery Time: Week by Week</h4>
                                <span class="text-[11px] text-slate-400">09 September 2026</span>
                            </div>
                        </a>
                    </div>
                </div>
            </aside>

        </div>
    </div>
</section>

<?php
// FAQPage and HowTo schema. HowTo steps mirror the three sleeping positions
// described above.
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

$howto_schema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'HowTo',
    '@id'         => $page_url . '#howto',
    'name'        => 'How to Sleep Comfortably After Hernia Surgery',
    'description' => 'Safe sleeping positions for the first two weeks after hernia repair, chosen to keep pressure off the incision while it heals.',
    'step' => [
        ['@type' => 'HowToStep', 'name' => 'Sleep on your back, upper body raised', 'text' => 'Prop yourself up with two or three pillows or use a recliner so your torso sits at an angle. This takes pressure off the incision and reduces overnight swelling.'],
        ['@type' => 'HowToStep', 'name' => 'Or sleep on your side, away from the repair', 'text' => 'Hug a pillow against your abdomen for support and to stop yourself rolling onto the operated side during the night.'],
        ['@type' => 'HowToStep', 'name' => 'Use a recliner if bed is difficult', 'text' => 'Sleeping upright in a recliner for the first few nights is a reasonable option if lying down and standing back up from a bed feels difficult.'],
        ['@type' => 'HowToStep', 'name' => 'Get up by rolling to your side first', 'text' => 'Roll onto your side, then push yourself up with your arms, rather than sitting straight up from lying flat, which strains the abdominal muscles directly.'],
    ],
];
?>
<script type="application/ld+json">
<?= json_encode($faq_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>

</script>
<script type="application/ld+json">
<?= json_encode($howto_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>

</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
