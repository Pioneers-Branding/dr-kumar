<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2027-04-23');

$page_title       = 'Riding a Two-Wheeler With a Hernia and After Repair';
$page_description = 'Can you ride a scooter, motorbike or bicycle with a hernia, and when after repair? What strains the abdomen on Indian roads, plus a staged return to riding.';
$page_keywords    = 'riding a two-wheeler with a hernia, bike riding with hernia, scooter after hernia surgery, motorcycle after hernia surgery, cycling with a hernia';
$page_image       = $site['url'] . 'assets/images/riding-a-two-wheeler-with-a-hernia.png';
$page_published   = '2027-04-23';
$page_modified    = '2027-04-23';

$schema_about = [
    '@type'       => 'MedicalCondition',
    'name'        => 'Two-Wheeler Riding With a Hernia',
    'description' => 'Considerations for riding scooters, motorbikes and bicycles with an abdominal wall hernia and after hernia repair, including jolts, bracing, lifting the vehicle and the need for surgeon clearance.',
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'Can I ride a scooter or motorbike with a hernia?',
        'a' => 'It depends on your hernia, symptoms and surgeon\'s advice. Jolts, bracing and lifting the bike strain the abdomen, so get it examined first and stop if a bulge or pain builds.',
    ],
    [
        'q' => 'Can riding a bike cause a hernia?',
        'a' => 'Riding itself is not a typical cause. Heavy lifting, chronic cough and constipation are better-recognized contributors, though jolts and lifting the bike can aggravate an existing bulge.',
    ],
    [
        'q' => 'When can I ride a bike after hernia surgery?',
        'a' => 'There is no single date. Walking comes first, and a two-wheeler generally needs a longer wait than a car. Your surgeon confirms when, based on your repair and healing.',
    ],
    [
        'q' => 'Can I ride as a pillion after hernia surgery?',
        'a' => 'Ask your surgeon first. Pillion riding avoids steering and braking, but bumps and sudden stops still jolt the abdomen, so start with short, slow trips on smooth roads.',
    ],
    [
        'q' => 'Is cycling safe with a hernia?',
        'a' => 'It depends on the hernia and symptoms. Pedaling and standing on the pedals load the abdomen and groin, so get examined first and stop if you feel pulling or see a bulge.',
    ],
    [
        'q' => 'Should I ride myself to the hospital if I think the hernia is stuck?',
        'a' => 'No. A hard, painful bulge that will not go back, especially with vomiting, is an emergency. Have someone drive you or call for help instead of riding yourself.',
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
            <span class="text-white">Two-Wheelers and Hernia</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Daily Life Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Riding a Two-Wheeler With a Hernia <br class="hidden md:inline"><span class="text-accent">and After Repair</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar of Billroth Hospitals</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>April 23, 2027</span>
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

                    <img src="<?= $base_path ?>assets/images/riding-a-two-wheeler-with-a-hernia.png" alt="Riding a Two-Wheeler With a Hernia and After Repair" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: Riding a Two-Wheeler With a Hernia</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>Whether you can ride depends on the hernia, your symptoms and your surgeon, not on one rule.</strong> Jolts, bracing and heavy handling, such as kick-starting or lifting the bike onto its stand, are what stress the abdomen. After repair, a two-wheeler generally needs a longer wait than a car, because balance and sudden braking load the repair.
                        </p>
                    </div>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">Why a Two-Wheeler Is a Different Question From Driving</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">For cars, the test is a hard emergency stop without pain, and we cover it in our guide to <a href="<?= $base_path ?>blog/return-to-work-after-hernia-surgery" class="text-brand-700 font-semibold hover:underline">returning to work after hernia surgery</a>. A scooter, motorbike or bicycle adds more: you balance the machine yourself, hold its weight at every stop, and feel every bump through the seat. In Chennai that means speed breakers, potholes, stop-and-go traffic and, in the monsoon, flooded and slippery roads. We found no published, standard guideline written specifically for two-wheelers, so this article reasons from how the abdominal wall is loaded and flags where that is our judgment.</p>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Before Repair: Where the Strain Really Comes From</h2>
                    <div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm"><table class="w-full text-slate-700 text-sm"><thead><tr class="bg-brand-900 text-white"><th class="px-5 py-3.5 text-left font-semibold">Situation</th><th class="px-5 py-3.5 text-left font-semibold">Why it matters</th><th class="px-5 py-3.5 text-left font-semibold">Gentler option</th></tr></thead><tbody class="divide-y divide-slate-100"><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Speed breakers and potholes</td><td class="px-5 py-3.5">Repeated jolts travel up through the seat to the abdomen and groin</td><td class="px-5 py-3.5">Slow down early and avoid the worst roads</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Kick-starting or pushing the bike</td><td class="px-5 py-3.5">Forceful leg and trunk effort, often with a held breath</td><td class="px-5 py-3.5">Use the self-start, or ask someone to start it</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Lifting onto the center stand, or pulling out of tight parking</td><td class="px-5 py-3.5">Heavy lifting with straining</td><td class="px-5 py-3.5">Use the side stand and park where no lifting is needed</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Carrying gas cylinders, water cans or groceries</td><td class="px-5 py-3.5">Extra weight to lift and balance</td><td class="px-5 py-3.5">Use delivery or let someone else carry</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Long stop-and-go commutes</td><td class="px-5 py-3.5">Constant braking, clutch work and bracing</td><td class="px-5 py-3.5">Shorten the trip, or use a cab, shared auto or train</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Riding while coughing, or with constipation</td><td class="px-5 py-3.5">Added pressure spikes on top of the ride</td><td class="px-5 py-3.5">Treat the cough or bowel problem first</td></tr></tbody></table></div>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Scooter, Motorbike or Bicycle?</h2>
                    <div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm"><table class="w-full text-slate-700 text-sm"><thead><tr class="bg-brand-900 text-white"><th class="px-5 py-3.5 text-left font-semibold">Vehicle</th><th class="px-5 py-3.5 text-left font-semibold">What stresses the abdomen</th><th class="px-5 py-3.5 text-left font-semibold">Practical note</th></tr></thead><tbody class="divide-y divide-slate-100"><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Scooter (gearless)</td><td class="px-5 py-3.5">Bumps through a small-wheeled frame, lifting onto the stand</td><td class="px-5 py-3.5">Step-through, upright seating and no kick-start generally make it the easier option</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Motorbike</td><td class="px-5 py-3.5">Heavier to hold at stops, kick-start on some models, center stand, forward-leaning posture on sporty designs</td><td class="px-5 py-3.5">Needs more bracing, so the wait after surgery is usually longer</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Bicycle</td><td class="px-5 py-3.5">Pedaling and standing on the pedals load the abdomen and groin, and hills load them more</td><td class="px-5 py-3.5">A stationary bicycle comes first after surgery. See <a href="<?= $base_path ?>blog/exercise-after-hernia-surgery" class="text-brand-700 font-semibold hover:underline">exercise after hernia surgery</a>.</td></tr></tbody></table></div>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">When Not to Ride at All</h2>
                    <ul class="list-disc pl-6 space-y-2 text-slate-600 leading-relaxed mb-6"><li>The bulge stays out and will not go back in, or pain builds as you ride.</li><li>You feel dizzy or drowsy from prescription painkillers.</li><li>You are unwell with nausea or vomiting alongside a painful bulge.</li></ul>
                    <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-r-2xl mb-8"><p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">If you suspect the hernia is stuck, do not ride yourself to the hospital. A hard, painful bulge that will not go back, especially with vomiting, is an emergency. Have someone drive you or call for help, and read our guide to <a href="<?= $base_path ?>blog/hernia-emergency-warning-signs" class="text-amber-900 font-semibold hover:underline">hernia emergency warning signs</a>.</p></div>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">After Repair: A Staged Return</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">We are not quoting a date, because the sources we found that give times are mostly rider anecdotes ranging from a few weeks to a couple of months, and surgeons vary. Here is a sensible order instead, to be confirmed by your own surgeon at your review:</p>
                    <ol class="list-decimal pl-6 space-y-2 text-slate-600 leading-relaxed mb-6"><li><strong>Walk first.</strong> Regular, comfortable walking comes before any machine. Our <a href="<?= $base_path ?>blog/hernia-surgery-recovery-week-by-week" class="text-brand-700 font-semibold hover:underline">week-by-week recovery guide</a> shows how this builds.</li><li><strong>Be off prescription painkillers</strong> and pass the parked-vehicle test: can you brace and brake hard without pain making you flinch?</li><li><strong>Try a short, slow trip on a smooth, quiet road,</strong> ideally with someone nearby. Skip the kick-start and the center stand.</li><li><strong>Build up gradually,</strong> adding distance before adding traffic and rough roads. Pillion riding on bumpy roads can jolt just as much, so treat it as a later step.</li><li><strong>Return to cycling last,</strong> starting stationary and light before road riding, in step with the exercise timeline.</li></ol>
                    <p class="text-slate-600 leading-relaxed mb-6">Stop and call your surgical team if you notice sharp pulling at the wound, new swelling, or a bulge at the repair site. The full recovery picture is on our <a href="<?= $base_path ?>treatment/recovery" class="text-brand-700 font-semibold hover:underline">hernia surgery recovery</a> page.</p>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Getting Around in the Meantime</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">For the weeks when riding is off the table, shared autos, app cabs, the train where it suits your route, or a family member as rider can cover the commute. Arranging this before surgery is easier than improvising on day three.</p>

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
                            This article is general information, and no published standard exists for two-wheelers specifically. Your surgeon decides when riding is safe for your repair. Check your own insurance terms if you are unsure.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Want a Clear Date for Getting Back on the Road?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Book a consultation to plan your repair and recovery around your commute, so you know what to expect and when you can ride again.</p>
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
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Jolts, bracing and lifting the bike are the real strain.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Avoid kick-starting and the center stand.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>After repair, expect a longer wait than for a car.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Never ride yourself to hospital with a stuck hernia.</li>
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
                        <a href="<?= $base_path ?>blog/do-i-need-hernia-surgery" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Do I Need Hernia Surgery?</h4>
                                <span class="text-[11px] text-slate-400">17 August 2026</span>
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
