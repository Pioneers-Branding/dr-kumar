<?php
$page_title       = 'Hernia Surgeon in Korattur, Chennai | Dr. Kumar of Billroth Hospitals';
$page_description = 'Hernia treatment for Korattur patients by Dr. Kumar of Billroth Hospitals, Shenoy Nagar. Suburban rail 12 km from Chennai Central. Book a consultation.';
$page_keywords    = 'hernia surgeon in Korattur, hernia treatment Korattur Chennai, hernia specialist near Korattur, laparoscopic hernia surgery Korattur, Dr. Kumar of Billroth Hospitals';
$page_url         = 'https://herniacare360.com/treatment/hernia-surgeon-in-korattur';

// This page serves the Korattur catchment. The medical depth lives on the Chennai
// pillar page and the individual procedure pages, which are linked below rather
// than restated here, so each neighborhood page stays genuinely about its own area.
$faqs = [
    ['q' => 'Does factory work make a hernia worse?', 'a' => 'Repeated heavy lifting raises abdominal pressure and tends to enlarge a hernia faster, which is why manual workers often need repair earlier than office workers.'],
    ['q' => 'How do I reach the hospital from Korattur?', 'a' => 'Korattur station is about twelve kilometers from Chennai Central. By road, travel through Villivakkam and Konnur High Road to Shenoy Nagar.'],
    ['q' => 'Will I need time off work after hernia surgery?', 'a' => 'Yes, and more if your job involves lifting. Your return date is set at review, based on the repair and your work demands.'],
];

require __DIR__ . '/../includes/header.php';
?>

<!-- Hero -->
<section class="relative bg-brand-950 text-white overflow-hidden py-16 md:py-20">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="relative max-w-7xl mx-auto px-4 z-10">
        <nav class="flex items-center gap-2 text-sm text-slate-300 mb-6">
            <a href="<?= $base_path ?>" class="hover:text-white transition">Home</a>
            <span class="text-slate-500">/</span>
            <a href="<?= $base_path ?>treatment/hernia-surgeon-in-chennai" class="hover:text-white transition">Hernia Surgeon in Chennai</a>
            <span class="text-slate-500">/</span>
            <span class="text-accent font-medium">Korattur</span>
        </nav>

        <div class="max-w-3xl">
            <h1 class="font-display text-3xl md:text-5xl font-bold leading-tight mb-6">
                Hernia Surgeon in Korattur,<br><span class="text-accent">Chennai</span>
            </h1>
            <p class="text-lg text-slate-200 leading-relaxed mb-8">
                Korattur is served by its own suburban station and sits beside the Ambattur Industrial Estate, a catchment where physically demanding work is common.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition shadow-lg hover:scale-105">
                    Book a Consultation
                </a>
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-white/15 hover:bg-white/25 backdrop-blur text-white font-bold px-7 py-3.5 rounded-full border border-white/30 transition hover:scale-105">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                    <?= $site['phone'] ?>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-14 md:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-10">

            <article class="lg:col-span-8 bg-white rounded-3xl p-7 md:p-10 shadow-sm border border-slate-100">
                <div class="prose prose-slate max-w-none">

                    <!-- Where the clinic is -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-5 rounded-r-2xl mb-9">
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>Where to find Dr. Kumar of Billroth Hospitals:</strong> <?= $site['clinic']['name'] ?>, <?= $site['address'] ?>. This is the single consulting and operating location, serving Korattur and the surrounding areas of Korattur, the Ambattur Industrial Estate side, Padi border and Korattur lake area.
                        </p>
                    </div>

                    <!-- Getting here: the genuinely local section -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">Getting to Billroth Hospitals from Korattur</h2>
                    <p class="text-slate-600 leading-relaxed mb-5">Korattur railway station is about twelve kilometers from Chennai Central on the suburban network and serves Korattur along with parts of Kolathur and Padi. The station chiefly serves students and workers from the Ambattur Industrial Estate.</p>
                    <p class="text-slate-600 leading-relaxed mb-5">From Korattur, the road route to Shenoy Nagar runs through Villivakkam and Konnur High Road toward Kilpauk and Gajapathy Street.</p>
                    <p class="text-slate-600 leading-relaxed mb-5">The industrial catchment here is clinically relevant, not just geographic. Sustained heavy lifting raises abdominal pressure repeatedly, and that is one of the factors that pushes a stable hernia toward needing repair sooner.</p>

                    <!-- Care available -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-9 mb-4 border-b border-slate-100 pb-3">Hernia Care Available to Korattur Patients</h2>
                    <p class="text-slate-600 leading-relaxed mb-5">
                        Every hernia service Dr. Kumar of Billroth Hospitals offers is available to patients from Korattur, since all consulting and surgery happens at the Shenoy Nagar hospital. Rather than repeat the clinical detail here, each is set out in full on its own page:
                    </p>
                    <div class="grid sm:grid-cols-2 gap-3 mb-6 not-prose">
                        <a href="<?= $base_path ?>my_types/inguinal-hernia-treatment-in-chennai" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold text-slate-800 hover:text-brand-700 transition">Inguinal hernia treatment</a>
                        <a href="<?= $base_path ?>my_types/umbilical-hernia-treatment-in-chennai" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold text-slate-800 hover:text-brand-700 transition">Umbilical hernia treatment</a>
                        <a href="<?= $base_path ?>my_types/incisional-hernia-treatment-in-chennai" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold text-slate-800 hover:text-brand-700 transition">Incisional hernia treatment</a>
                        <a href="<?= $base_path ?>treatment/best-laparoscopic-hernia-surgery-in-chennai" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold text-slate-800 hover:text-brand-700 transition">Laparoscopic keyhole repair</a>
                        <a href="<?= $base_path ?>best-robotic-hernia-surgery-in-chennai" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold text-slate-800 hover:text-brand-700 transition">Robotic hernia surgery</a>
                        <a href="<?= $base_path ?>my_types/recurrent-hernia" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold text-slate-800 hover:text-brand-700 transition">Recurrent hernia repair</a>
                    </div>
                    <p class="text-slate-600 leading-relaxed mb-5">
                        For the full picture of Dr. Kumar of Billroth Hospitals&rsquo; practice, his 29 years of surgical experience and the techniques used, see the main <a href="<?= $base_path ?>treatment/hernia-surgeon-in-chennai" class="text-brand-700 font-semibold hover:underline">hernia surgeon in Chennai</a> page.
                    </p>

                    <!-- What to bring -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-9 mb-4 border-b border-slate-100 pb-3">What to Bring to Your First Consultation</h2>
                    <ul class="list-none p-0 space-y-2.5 mb-6">
                        <li class="flex items-start gap-2.5 text-slate-600 text-sm md:text-base"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-2 shrink-0"></span>Any previous ultrasound or CT images, not just the printed report.</li>
                        <li class="flex items-start gap-2.5 text-slate-600 text-sm md:text-base"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-2 shrink-0"></span>A list of your current medicines, including blood thinners and diabetes medication.</li>
                        <li class="flex items-start gap-2.5 text-slate-600 text-sm md:text-base"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-2 shrink-0"></span>Details of any previous abdominal surgery, with discharge summaries if you have them.</li>
                        <li class="flex items-start gap-2.5 text-slate-600 text-sm md:text-base"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-2 shrink-0"></span>Clothing that allows a straightforward abdominal and groin examination.</li>
                    </ul>

                    <!-- Do not wait -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-9 mb-4 border-b border-slate-100 pb-3">When You Should Not Wait for an Appointment</h2>
                    <div class="bg-red-50 border-2 border-red-500 p-5 rounded-2xl mb-6">
                        <p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">
                            If your hernia becomes suddenly and severely painful, turns hard and will not push back in, changes color, or comes with vomiting or fever, do not wait for a scheduled slot. Go to the nearest emergency department. Our <a href="<?= $base_path ?>emergency-hernia-care" class="text-red-700 font-bold hover:underline">emergency hernia care</a> page explains what happens next, and the <a href="<?= $base_path ?>blog/hernia-emergency-warning-signs" class="text-red-700 font-bold hover:underline">warning signs guide</a> covers how to tell the difference.
                        </p>
                    </div>

                    <!-- FAQ -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-5 border-b border-slate-100 pb-3">Korattur Patient Questions</h2>
                    <div class="space-y-4 mb-8">
                        <?php foreach ($faqs as $i => $faq): ?>
                        <div class="bg-slate-50 rounded-2xl border border-slate-200 p-5">
                            <h3 class="font-bold text-slate-900 text-base mb-2"><?= htmlspecialchars($faq['q'], ENT_QUOTES, 'UTF-8') ?></h3>
                            <p class="text-slate-600 text-sm leading-relaxed m-0"><?= htmlspecialchars($faq['a'], ENT_QUOTES, 'UTF-8') ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-7 text-center shadow-xl">
                        <h3 class="font-display text-xl md:text-2xl font-bold mb-3">Book a Hernia Consultation from Korattur</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Have the hernia examined and measured, and get a clear answer on whether it needs repair now or can be monitored.</p>
                        <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition shadow-lg hover:scale-105">
                            Book an Appointment
                        </a>
                    </div>
                </div>
            </article>

            <aside class="lg:col-span-4 space-y-6">
                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                    <h3 class="font-bold text-slate-900 text-base mb-3">Clinic Address</h3>
                    <p class="text-sm text-slate-600 leading-relaxed mb-4">
                        <?= $site['clinic']['name'] ?><br>
                        <?= $site['clinic']['street'] ?><br>
                        <?= $site['clinic']['locality'] ?> <?= $site['clinic']['postal'] ?>
                    </p>
                    <a href="<?= $site['clinic']['map_url'] ?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-full bg-brand-50 hover:bg-brand-100 text-brand-800 text-xs font-bold py-2.5 rounded-xl border border-brand-100 transition">
                        Open in Google Maps
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
                    <h3 class="font-bold text-slate-900 text-base mb-3">Other Areas We Serve</h3>
                    <div class="flex flex-wrap gap-2">
                        <a href="<?= $base_path ?>treatment/hernia-surgeon-in-shenoy-nagar" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-full px-3 py-1.5 text-xs font-medium text-slate-700 hover:text-brand-700 transition">Shenoy Nagar</a>
                        <a href="<?= $base_path ?>treatment/hernia-surgeon-in-annanagar" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-full px-3 py-1.5 text-xs font-medium text-slate-700 hover:text-brand-700 transition">Anna Nagar</a>
                        <a href="<?= $base_path ?>treatment/hernia-surgeon-in-kilpauk" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-full px-3 py-1.5 text-xs font-medium text-slate-700 hover:text-brand-700 transition">Kilpauk</a>
                        <a href="<?= $base_path ?>treatment/hernia-surgeon-in-aminjikarai" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-full px-3 py-1.5 text-xs font-medium text-slate-700 hover:text-brand-700 transition">Aminjikarai</a>
                        <a href="<?= $base_path ?>treatment/hernia-surgeon-in-koyambedu" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-full px-3 py-1.5 text-xs font-medium text-slate-700 hover:text-brand-700 transition">Koyambedu</a>
                        <a href="<?= $base_path ?>treatment/hernia-surgeon-in-arumbakkam" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-full px-3 py-1.5 text-xs font-medium text-slate-700 hover:text-brand-700 transition">Arumbakkam</a>
                        <a href="<?= $base_path ?>treatment/hernia-surgeon-in-mogappair" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-full px-3 py-1.5 text-xs font-medium text-slate-700 hover:text-brand-700 transition">Mogappair</a>
                        <a href="<?= $base_path ?>treatment/hernia-surgeon-in-nungambakkam" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-full px-3 py-1.5 text-xs font-medium text-slate-700 hover:text-brand-700 transition">Nungambakkam</a>
                        <a href="<?= $base_path ?>treatment/hernia-surgeon-in-purasawalkam" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-full px-3 py-1.5 text-xs font-medium text-slate-700 hover:text-brand-700 transition">Purasawalkam</a>
                        <a href="<?= $base_path ?>treatment/hernia-surgeon-in-ayanavaram" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-full px-3 py-1.5 text-xs font-medium text-slate-700 hover:text-brand-700 transition">Ayanavaram</a>
                        <a href="<?= $base_path ?>treatment/hernia-surgeon-in-perambur" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-full px-3 py-1.5 text-xs font-medium text-slate-700 hover:text-brand-700 transition">Perambur</a>
                        <a href="<?= $base_path ?>treatment/hernia-surgeon-in-villivakkam" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-full px-3 py-1.5 text-xs font-medium text-slate-700 hover:text-brand-700 transition">Villivakkam</a>
                        <a href="<?= $base_path ?>treatment/hernia-surgeon-in-kolathur" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-full px-3 py-1.5 text-xs font-medium text-slate-700 hover:text-brand-700 transition">Kolathur</a>
                        <a href="<?= $base_path ?>treatment/hernia-surgeon-in-padi" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-full px-3 py-1.5 text-xs font-medium text-slate-700 hover:text-brand-700 transition">Padi</a>
                        <a href="<?= $base_path ?>treatment/hernia-surgeon-in-maduravoyal" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-full px-3 py-1.5 text-xs font-medium text-slate-700 hover:text-brand-700 transition">Maduravoyal</a>
                    </div>
                </div>
            </aside>

        </div>
    </div>
</section>

<?php
// FAQPage schema built from the same $faqs array rendered above.
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
