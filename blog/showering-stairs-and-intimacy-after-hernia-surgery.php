<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2027-04-13');

$page_title       = 'Showering, Stairs and Intimacy After Hernia Surgery';
$page_description = 'When is it safe to shower, climb stairs and resume intimacy after hernia surgery? Typical timings, tips for Chennai homes, and when to call your surgeon.';
$page_keywords    = 'showering after hernia surgery, stairs after hernia surgery, sex after hernia surgery, bathing after hernia surgery, intimacy after hernia repair';
$page_image       = $site['url'] . 'assets/images/showering-stairs-and-intimacy-after-hernia-surgery.png';
$page_published   = '2027-04-13';
$page_modified    = '2027-04-13';

$schema_about = [
    '@type'       => 'MedicalProcedure',
    'name'        => 'Everyday Activities After Hernia Repair',
    'description' => 'Guidance on when showering, climbing stairs and sexual activity are usually safe after hernia surgery, which depends on the repair technique, wound healing and the surgeon\'s instructions.',
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'When can I shower after hernia surgery?',
        'a' => 'Many people can shower within a few days if the dressing is waterproof. Follow your discharge instructions, pat the area dry, and avoid baths and swimming until the wound has healed.',
    ],
    [
        'q' => 'Can I take a bath after hernia surgery?',
        'a' => 'Not until the wound has healed, usually around two weeks. Soaking can irritate a healing incision, so stay with short showers until your surgeon confirms the wound is closed.',
    ],
    [
        'q' => 'Is it okay to climb stairs after hernia surgery?',
        'a' => 'Usually yes, once it feels comfortable. Go slowly, use the rail, and do not carry loads. Stop if you feel sharp pain, dizziness or breathlessness, and ask your surgeon.',
    ],
    [
        'q' => 'When can I have sex after hernia surgery?',
        'a' => 'Commonly cited timing is one to two weeks, and the main guide is comfort. Stop if it hurts or pulls, and wait longer after open repair or if swelling persists.',
    ],
    [
        'q' => 'Will hernia surgery affect my erections?',
        'a' => 'Repair should not interfere with erections. Bruising and swelling around the groin and scrotum is common for several days after groin repair, and persistent problems should be reported to your surgeon.',
    ],
    [
        'q' => 'Can I get the dressing wet?',
        'a' => 'Only if it is waterproof or your surgeon says so. Otherwise cover it as instructed. If a dressing becomes soaked, ask your surgical team whether it needs changing.',
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
            <span class="text-white">Daily Activities After Surgery</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Recovery Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Showering, Stairs and Intimacy <br class="hidden md:inline"><span class="text-accent">After Hernia Surgery</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar of Billroth Hospitals</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>April 13, 2027</span>
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

                    <img src="<?= $base_path ?>assets/images/showering-stairs-and-intimacy-after-hernia-surgery.png" alt="Showering, Stairs and Intimacy After Hernia Surgery" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: Showering, Stairs and Intimacy</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>Most people can shower within a few days, climb stairs once it feels comfortable, and resume intimacy when it no longer hurts.</strong> Baths and swimming wait until the wound has healed, usually around two weeks. Intimacy is often cited at one to two weeks. These are typical guides only, and your surgeon's own instructions come first.
                        </p>
                    </div>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">Three Everyday Questions, Answered Plainly</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">Showering, stairs and intimacy are the questions patients tend to feel awkward asking, yet they shape the first fortnight at home. How soon each is safe depends on whether your repair was keyhole or open, how the wound is dressed, and how you are healing. Driving is a separate question with its own test, which we cover in our guide to <a href="<?= $base_path ?>blog/return-to-work-after-hernia-surgery" class="text-brand-700 font-semibold hover:underline">returning to work after hernia surgery</a>.</p>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">At a Glance</h2>
                    <div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm"><table class="w-full text-slate-700 text-sm"><thead><tr class="bg-brand-900 text-white"><th class="px-5 py-3.5 text-left font-semibold">Activity</th><th class="px-5 py-3.5 text-left font-semibold">Typical guide</th><th class="px-5 py-3.5 text-left font-semibold">Ask your surgeon if</th></tr></thead><tbody class="divide-y divide-slate-100"><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Showering</td><td class="px-5 py-3.5">Often within a few days, if the dressing is waterproof</td><td class="px-5 py-3.5">You are unsure what type of dressing or glue you have</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Baths and swimming</td><td class="px-5 py-3.5">After the wound has healed, usually around 2 weeks</td><td class="px-5 py-3.5">The wound is still oozing or looks open</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Stairs</td><td class="px-5 py-3.5">When comfortable, one step at a time, using the rail</td><td class="px-5 py-3.5">Climbing brings sharp pain, breathlessness or dizziness</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Intimacy</td><td class="px-5 py-3.5">Commonly 1 to 2 weeks; when you want to and it does not hurt</td><td class="px-5 py-3.5">You had open repair, or groin swelling and pain persist</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Heavy lifting</td><td class="px-5 py-3.5">Avoid for at least 4 to 6 weeks</td><td class="px-5 py-3.5">You are unsure what counts as heavy</td></tr></tbody></table></div>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Showering: Keep It Quick, Clean and Dry</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">The NHS advises that you can usually shower a few days after surgery if you have a waterproof dressing, and that baths and swimming should wait until the wound has healed, which usually takes around 2 weeks. Your discharge sheet decides the details, because dressings, skin glue and tapes are handled differently.</p>
                    <ul class="list-disc pl-6 space-y-2 text-slate-600 leading-relaxed mb-6"><li>Let water run over the area rather than scrubbing it, then pat it dry with a clean towel.</li><li>Do not soak. A tub, a pool or sea bathing is out until the wound is healed.</li><li><strong>Mind the bucket.</strong> In many Chennai homes bathing means a bucket and a mug. A full bucket is heavy to lift, so ask someone to fill it, use the tap, or sit on a stable stool.</li><li>Watch wet floors. Soap, sweat and post-anesthesia drowsiness make slips more likely, and a fall is the last thing a healing repair needs.</li><li>Humid weather can leave a dressing damp from sweat. If it becomes soaked, ask your surgical team whether it needs changing.</li></ul>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Stairs: Slow, Steady and Without a Load</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">We did not find a firm, sourced "day number" for stairs, and that is honest: it depends on your repair. The general advice from hospital recovery guides is gentle movement from the start, building up slowly, while avoiding heavy lifting and strenuous activity for at least 4 to 6 weeks. For stairs that means taking them when they feel comfortable, one step at a time, with a hand on the rail.</p>
                    <p class="text-slate-600 leading-relaxed mb-6">If you live in a walk-up apartment without a lift, plan ahead:</p>
                    <ul class="list-disc pl-6 space-y-2 text-slate-600 leading-relaxed mb-6"><li>Make the first climbs on a day when someone is home.</li><li>Let others carry bags, water cans and groceries.</li><li>Pause on the landing instead of pushing through breathlessness.</li><li>Stop if you feel dizzy, since painkillers and anesthesia can unsettle balance.</li></ul>
                    <p class="text-slate-600 leading-relaxed mb-6">Walking and stairs are part of the recovery rhythm described in our <a href="<?= $base_path ?>blog/hernia-surgery-recovery-week-by-week" class="text-brand-700 font-semibold hover:underline">week-by-week recovery guide</a>.</p>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Intimacy: Timing, Comfort and Common Worries</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">Sources vary, but the common thread is comfort. Healthline's guidance is that sex is fine after hernia repair when you want it and it does not hurt, and GoodRx cites about 1 to 2 weeks. After laparoscopic groin repair there are usually no formal restrictions, though incision discomfort can last a week or two, while full recovery after open repair may take longer. One source notes that vigorous activity too soon could, rarely, raise the chance of the hernia returning.</p>
                    <p class="text-slate-600 leading-relaxed mb-6">What helps in practice:</p>
                    <ul class="list-disc pl-6 space-y-2 text-slate-600 leading-relaxed mb-6"><li>Choose positions that avoid pressure on the abdomen, and let your partner take the lead at first.</li><li>Stop at any pulling, sharp pain or sense that something is giving way, and wait longer.</li><li>Expect some temporary swelling or bruising after groin repair. Healthline reports scrotal swelling usually settling within a week, though it can take longer.</li></ul>
                    <p class="text-slate-600 leading-relaxed mb-6"><strong>What about erections?</strong> The same source says hernia repair should not interfere with erections, and that the risk of injury to the relevant vessels or nerves is very low. If a problem persists, tell your surgeon rather than waiting. Longer-term questions are covered in our article on <a href="<?= $base_path ?>blog/hernia-and-fertility" class="text-brand-700 font-semibold hover:underline">hernia and fertility</a>.</p>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Call Your Surgical Team If You Notice</h2>
                    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 rounded-r-2xl mb-8"><p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">Fever, a wound that turns red, hot, more painful or starts draining pus, heavy bleeding, a belly that is more swollen or painful, or vomiting that continues beyond 24 hours after surgery. Our guide to <a href="<?= $base_path ?>blog/hernia-emergency-warning-signs" class="text-amber-900 font-semibold hover:underline">hernia emergency warning signs</a> explains what needs urgent attention. For the wider picture, see our <a href="<?= $base_path ?>treatment/recovery" class="text-brand-700 font-semibold hover:underline">hernia surgery recovery</a> page.</p></div>

                    <!-- FAQ -->
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
                            This article is general information based on typical recovery guidance and does not replace your surgeon's instructions. Timing varies with the type of hernia, the repair technique and how you heal.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Planning Surgery and Want Clear Aftercare Instructions?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Book a consultation to discuss your repair, what recovery will look like at home, and which activities to expect to resume when.</p>
                        <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition shadow-lg hover:scale-105">
                            Book a Hernia Consultation
                        </a>
                    </div>
                </div>
            </article>

            <aside class="lg:col-span-4 space-y-8">
                <div class="bg-brand-50 rounded-3xl p-6 border border-brand-100">
                    <h3 class="font-bold text-brand-900 text-base mb-3">The Short Version</h3>
                    <ul class="list-none p-0 m-0 space-y-2.5">
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Showers are often fine within days with a waterproof dressing.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>No baths or swimming until the wound has healed.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Stairs: slow, with the rail, and no carrying loads.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Intimacy: when you want to and it does not hurt.</li>
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
                        <a href="<?= $base_path ?>blog/sleeping-and-travel-after-hernia-surgery" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Sleeping and Travel After Hernia Surgery</h4>
                                <span class="text-[11px] text-slate-400">15 September 2026</span>
                            </div>
                        </a>
                        <a href="<?= $base_path ?>blog/exercise-after-hernia-surgery" class="flex gap-3 group">
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
