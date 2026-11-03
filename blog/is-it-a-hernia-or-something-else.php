<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2027-04-18');

$page_title       = 'Is It a Hernia or Something Else? Lipoma, Hydrocele, Gland';
$page_description = 'Is it a hernia or something else? Compare how a hernia, lipoma, hydrocele, swollen gland and muscle strain differ, and why a lump needs a proper examination.';
$page_keywords    = 'is it a hernia or something else, hernia vs lipoma, hernia vs hydrocele, hernia vs swollen lymph node, groin lump or hernia, lump that looks like a hernia';
$page_image       = $site['url'] . 'assets/images/is-it-a-hernia-or-something-else.png';
$page_published   = '2027-04-18';
$page_modified    = '2027-04-18';

$schema_about = [
    '@type'       => 'MedicalCondition',
    'name'        => 'Conditions That Mimic a Hernia',
    'description' => 'Lumps and pains that can be mistaken for a hernia, including lipoma, hydrocele, swollen lymph glands and muscle strain, and the features clinicians use to tell them apart.',
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'How can I tell if a lump is a hernia or a lipoma?',
        'a' => 'A hernia often bulges with coughing and shrinks lying down. A lipoma is a soft, movable, usually painless fatty lump that does not change with position. Examination confirms which.',
    ],
    [
        'q' => 'Can a hernia be mistaken for a swollen lymph node?',
        'a' => 'Yes. Swollen glands are usually tender and linked to an infection, and tend to settle in one to two weeks. A groin ultrasound can usually tell them apart.',
    ],
    [
        'q' => 'What is the difference between a hernia and a hydrocele?',
        'a' => 'A hydrocele is a fluid-filled swelling around the testicle, usually painless, while a hernia is tissue pushing through the muscle wall. A clinician can tell them apart on examination.',
    ],
    [
        'q' => 'Can muscle strain feel like a hernia?',
        'a' => 'It can, because both cause groin or lower belly pain with activity. Strain usually has no lump and follows a specific effort, but only an examination separates them.',
    ],
    [
        'q' => 'Do I need an ultrasound for a lump in the groin?',
        'a' => 'Not always. Many hernias are diagnosed on examination. Ultrasound is used when the cause is unclear or the lump may be a swollen gland or another lookalike.',
    ],
    [
        'q' => 'Should I see a doctor for any new lump?',
        'a' => 'Yes. Most causes are harmless, but only a clinician can confirm which. Seek urgent care if the lump is hard, painful or discolored, or if you are vomiting.',
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
            <span class="text-white">Hernia or Something Else</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Diagnosis Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Is It a Hernia or Something Else? <br class="hidden md:inline"><span class="text-accent">Lipoma, Hydrocele, Gland or Muscle Pain</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar of Billroth Hospitals</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>April 18, 2027</span>
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

                    <img src="<?= $base_path ?>assets/images/is-it-a-hernia-or-something-else.png" alt="Is It a Hernia or Something Else? Lipoma, Hydrocele, Gland or Muscle Pain" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: Is It a Hernia or Something Else?</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>Not every groin or belly lump is a hernia.</strong> A hernia is usually a soft bulge that swells with coughing or straining and often settles lying down. Lipomas are soft fatty lumps, hydroceles are painless fluid swellings near the testicle, and swollen glands are tender and infection-linked. Only an examination confirms which.
                        </p>
                    </div>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">Why So Many Lumps Get Mistaken for Hernias</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">A hernia is the most common cause of groin swelling, so it is the first thing people suspect. But several harmless and not-so-harmless problems produce a lump in the same area, and a few hernias produce no visible lump at all. This guide shows how clinicians tell them apart. It is not a way to diagnose yourself, because even doctors confirm the cause by examining the lump.</p>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Side-by-Side: Five Lookalikes</h2>
                    <div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm"><table class="w-full text-slate-700 text-sm"><thead><tr class="bg-brand-900 text-white"><th class="px-5 py-3.5 text-left font-semibold">Feature</th><th class="px-5 py-3.5 text-left font-semibold">Hernia</th><th class="px-5 py-3.5 text-left font-semibold">Lipoma</th><th class="px-5 py-3.5 text-left font-semibold">Hydrocele</th><th class="px-5 py-3.5 text-left font-semibold">Swollen gland</th></tr></thead><tbody class="divide-y divide-slate-100"><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Feel</td><td class="px-5 py-3.5">Soft bulge, may feel firmer when you strain</td><td class="px-5 py-3.5">Soft and squishy, may shift slightly under a finger</td><td class="px-5 py-3.5">Smooth, fluid-filled swelling around the testicle</td><td class="px-5 py-3.5">Tender lump, often firmer than a hernia</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Changes with position or coughing</td><td class="px-5 py-3.5">Often shrinks lying down and bulges with a cough or strain</td><td class="px-5 py-3.5">Usually does not change with position or straining</td><td class="px-5 py-3.5">Judged on examination; a clinician traces its origin and may shine a light through it</td><td class="px-5 py-3.5">Tenderness, not position, is the main clue</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Pain</td><td class="px-5 py-3.5">Ache, heaviness or sharp pain with effort</td><td class="px-5 py-3.5">Usually painless</td><td class="px-5 py-3.5">Usually painless</td><td class="px-5 py-3.5">Tender or painful</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Typical clue</td><td class="px-5 py-3.5">Tends to get worse over time</td><td class="px-5 py-3.5">Grows slowly, harmless</td><td class="px-5 py-3.5">Painless scrotal or groin swelling</td><td class="px-5 py-3.5">Often near an infection; fever, sore throat or an infected skin spot or leg</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Usual course</td><td class="px-5 py-3.5">Eventually needs repair</td><td class="px-5 py-3.5">Treated only if it grows or causes problems</td><td class="px-5 py-3.5">Needs a check to confirm</td><td class="px-5 py-3.5">Usually settles within 1 to 2 weeks as infection clears</td></tr></tbody></table></div>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">A Few Details Worth Knowing</h2>
                    <p class="text-slate-600 leading-relaxed mb-6"><strong>Lipoma.</strong> The NHS describes it as a soft, fatty lump under the skin that may shift when pressed, usually painless and slow-growing. A large lipoma in the groin can be hard to tell from a hernia by eye, and a hard, fixed or enlarging lump should be checked sooner.</p>
                    <p class="text-slate-600 leading-relaxed mb-6"><strong>Hydrocele.</strong> This is a collection of fluid around the testicle. Because it can light up under a bright torch while most hernias do not, a clinician may use that as a clue. Whether a lump can be traced up to the groin opening is also part of the examination.</p>
                    <p class="text-slate-600 leading-relaxed mb-6"><strong>Swollen gland.</strong> Groin glands swell when the body fights an infection nearby, and the NHS notes these usually improve in one to two weeks. A gland that is hard, does not move, keeps growing, or comes with night sweats needs a doctor's attention.</p>
                    <p class="text-slate-600 leading-relaxed mb-6"><strong>Muscle strain.</strong> This is the fifth lookalike: pain with movement and usually no lump. We compare it in detail in <a href="<?= $base_path ?>blog/hernia-vs-groin-strain-vs-testicular-pain" class="text-brand-700 font-semibold hover:underline">hernia vs groin strain vs testicular pain</a>.</p>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Clues You Can Note Before the Appointment</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">You cannot diagnose yourself, but a short list helps the doctor:</p>
                    <ul class="list-disc pl-6 space-y-2 text-slate-600 leading-relaxed mb-6"><li>Does it shrink or vanish when you lie down? Our explainer on a <a href="<?= $base_path ?>blog/why-does-my-hernia-disappear-when-i-lie-down" class="text-brand-700 font-semibold hover:underline">hernia that disappears when you lie down</a> covers why.</li><li>Does it swell when you cough, strain or stand for long?</li><li>Is it tender, warm or red, and did you have a fever or infection recently?</li><li>How long has it been there, and has it grown?</li><li>Does it feel soft and squishy, or hard?</li></ul>
                    <p class="text-slate-600 leading-relaxed mb-6">Avoid poking or pressing it repeatedly, and do not try to force it back in.</p>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">How the Doctor Tells Them Apart</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">The examination usually happens standing and lying down, often with a cough. When the picture is unclear, imaging helps: a groin ultrasound can usually separate a swollen gland from a hernia. Which scan suits which situation is explained in our guide to <a href="<?= $base_path ?>blog/hernia-ultrasound-vs-ct-vs-mri" class="text-brand-700 font-semibold hover:underline">ultrasound vs CT vs MRI for hernias</a>. To know what the visit involves, read <a href="<?= $base_path ?>blog/first-hernia-consultation-what-to-expect" class="text-brand-700 font-semibold hover:underline">what to expect at your first hernia consultation</a>, and for the diagnostic process in general, see our <a href="<?= $base_path ?>hernia/diagnosis" class="text-brand-700 font-semibold hover:underline">hernia diagnosis</a> page.</p>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Lumps That Should Not Wait</h2>
                    <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-r-2xl mb-8"><p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">A lump that is hard and cannot be pushed back, a bulge with severe pain, nausea or vomiting, skin that looks red or discolored, or a lump that pulsates needs urgent assessment. Read about <a href="<?= $base_path ?>blog/hernia-emergency-warning-signs" class="text-amber-900 font-semibold hover:underline">hernia emergency warning signs</a> and do not wait for a routine appointment.</p></div>

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
                            This article is general medical information, not a diagnosis. Lumps can have many causes, and only a qualified examination can tell which one you have.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Found a Lump and Not Sure What It Is?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">A proper examination, with ultrasound if needed, tells you whether it is a hernia or something else and what to do about it.</p>
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
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>A hernia is the most common cause of groin swelling, but not the only one.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Lipomas, hydroceles, swollen glands and strains all look similar.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>A groin ultrasound can usually separate a gland from a hernia.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>A hard, painful lump with vomiting is an emergency.</li>
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
                        <a href="<?= $base_path ?>blog/inguinal-hernia-symptoms-in-men" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Inguinal Hernia Symptoms in Men</h4>
                                <span class="text-[11px] text-slate-400">3 November 2026</span>
                            </div>
                        </a>
                        <a href="<?= $base_path ?>blog/unusual-hernia-symptoms" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Unusual Hernia Symptoms</h4>
                                <span class="text-[11px] text-slate-400">28 February 2027</span>
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
