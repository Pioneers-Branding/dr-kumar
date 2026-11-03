<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2027-04-08');

$page_title       = 'Yoga and Hernia: Safe Asanas and Poses to Avoid Guide';
$page_description = 'Yoga and hernia: which poses and breathing practices are usually gentler, which raise abdominal pressure, and why a hernia needs examining before you practice.';
$page_keywords    = 'yoga and hernia, yoga for hernia, yoga poses to avoid with hernia, safe yoga with hernia, pranayama with hernia, yoga after hernia surgery';
$page_image       = $site['url'] . 'assets/images/yoga-and-hernia.png';
$page_published   = '2027-04-08';
$page_modified    = '2027-04-08';

$schema_about = [
    '@type'       => 'MedicalCondition',
    'name'        => 'Yoga Practice With a Hernia',
    'description' => 'General guidance on yoga asanas and breathing practices for people with an abdominal wall hernia, focused on avoiding movements that sharply raise pressure inside the abdomen.',
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'Can I do yoga with a hernia?',
        'a' => 'Possibly, but get the hernia examined first. Gentle, breath-led practice is usually the safer end, while deep twists, strong core holds and inversions are generally avoided.',
    ],
    [
        'q' => 'Which yoga poses should I avoid with a hernia?',
        'a' => 'Commonly advised to avoid are deep twists, deep forward folds, inversions, boat pose and other hard core holds. Exact advice depends on your hernia type, so confirm with your doctor.',
    ],
    [
        'q' => 'Can yoga cure or heal a hernia?',
        'a' => 'No. A hernia is a gap in the muscle wall, and exercise cannot close it. Yoga may help comfort and general fitness, but repair needs surgery.',
    ],
    [
        'q' => 'Is pranayama safe with a hernia?',
        'a' => 'Slow, natural breathing is generally gentler. Forceful breathing, abdominal locks and long breath holds raise abdominal pressure, so ask your doctor and teacher before continuing them.',
    ],
    [
        'q' => 'When can I do yoga after hernia surgery?',
        'a' => 'Your surgeon sets the timing. Walking comes first, and poses that stretch or load the core are usually held back for several weeks. Return gradually and tell your instructor.',
    ],
    [
        'q' => 'Does yoga help prevent a hernia?',
        'a' => 'Yoga supports general fitness and breath control, but it is not a proven way to prevent hernias. Lifting technique, treating a chronic cough and managing constipation matter more.',
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
            <span class="text-white">Yoga and Hernia</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Exercise Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Yoga and Hernia: <br class="hidden md:inline"><span class="text-accent">Safe Asanas and Poses to Avoid</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar of Billroth Hospitals</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>April 8, 2027</span>
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

                    <img src="<?= $base_path ?>assets/images/yoga-and-hernia.png" alt="Yoga and Hernia: Safe Asanas and Poses to Avoid" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: Yoga and Hernia</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>Yoga may be possible with a hernia, but only after the hernia has been examined.</strong> The usual rule is to avoid anything that spikes pressure inside the abdomen: deep twists, held breath, strong core clenching and inversions. Gentle, breath-led movement is the safer end. The right answer depends on your hernia type and size.
                        </p>
                    </div>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">Get It Examined Before You Roll Out the Mat</h2>
                    <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-r-2xl mb-8"><p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">Yoga cannot tell you what a bulge or groin ache is, and it cannot close a hernia. If you suspect a hernia, get it examined first. If you have already been diagnosed, ask your surgeon which movements are acceptable for you. Everything below is general guidance, not a prescription for your body.</p></div>
                    <p class="text-slate-600 leading-relaxed mb-6">Many people reach for yoga because it feels gentle. That is a fair instinct, but a hernia is a gap in the abdominal wall, and the risk lies in how much a movement squeezes or loads that wall. Not sure what you are feeling? Our <a href="<?= $base_path ?>hernia/symptoms" class="text-brand-700 font-semibold hover:underline">hernia symptoms guide</a> describes the common signs.</p>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">The Real Rule: Think Pressure, Not Pose Names</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">A hernia forms where tissue pushes through a weak spot in the abdominal wall. So what matters is not the Sanskrit name of an asana but what it does to the pressure inside your abdomen. Ask three questions of any pose or breathing practice:</p>
                    <ol class="list-decimal pl-6 space-y-2 text-slate-600 leading-relaxed mb-6"><li>Does it squeeze or compress the belly, as a deep twist or deep forward fold can?</li><li>Does it demand a hard, held core contraction?</li><li>Does it ask me to hold my breath or breathe forcefully?</li></ol>
                    <p class="text-slate-600 leading-relaxed mb-6">A yes to any of these means caution. Sources on this topic agree on the broad direction, which is to avoid deep twists, deep forward folds, inversions and strong core holds, but they disagree on a few specific poses. That disagreement is exactly why individual advice beats a generic list.</p>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">A Traffic-Light Guide to Yoga With a Hernia</h2>
                    <div class="grid md:grid-cols-3 gap-4 mb-8">
                    <div class="bg-green-50 border border-green-200 rounded-2xl p-5"><h3 class="font-bold text-green-900 text-base mb-2">Generally gentler</h3><p class="text-xs text-green-900/80 mb-2">Once examined and cleared</p><ul class="list-disc pl-5 space-y-1.5 text-sm text-slate-700"><li>Cat-cow in a small, comfortable range</li><li>Child's pose with knees apart and a bolster, if it does not press on the bulge</li><li>Mountain pose and gentle standing stretches</li><li>Slow, natural breathing while seated</li></ul></div>
                    <div class="bg-amber-50 border border-amber-200 rounded-2xl p-5"><h3 class="font-bold text-amber-900 text-base mb-2">Ask first</h3><p class="text-xs text-amber-900/80 mb-2">Advice varies by hernia type</p><ul class="list-disc pl-5 space-y-1.5 text-sm text-slate-700"><li>Forward folds, kept shallow</li><li>Supported bridge pose</li><li>Backbends such as cobra</li><li>Wide hip openers that stretch the groin</li><li>Plank-based flows</li></ul></div>
                    <div class="bg-red-50 border border-red-200 rounded-2xl p-5"><h3 class="font-bold text-red-900 text-base mb-2">Usually hold off</h3><p class="text-xs text-red-900/80 mb-2">Until a clinician says otherwise</p><ul class="list-disc pl-5 space-y-1.5 text-sm text-slate-700"><li>Boat pose and other strong core holds</li><li>Deep, closed twists</li><li>Headstand, shoulder stand and other inversions</li><li>Arm balances</li><li>Breath retention and forceful abdominal breathing</li></ul></div>
                    </div>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What About Pranayama and Abdominal Locks?</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">In India, yoga classes often include breathing practices, and some of them work directly on the abdomen. Practices built on forceful, pumping breaths or strong abdominal contraction, such as kapalabhati, bhastrika, uddiyana bandha and nauli, and practices that hold the breath after inhaling, are the opposite of what a hernia needs. They raise pressure on the very wall that is weak. This is a reasoned caution rather than something a trial has tested, so ask your doctor and your teacher before continuing them. Slow, natural breathing, without strain or long holds, is the calmer option.</p>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Your Hernia Type Changes the Advice</h2>
                    <div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm"><table class="w-full text-slate-700 text-sm"><thead><tr class="bg-brand-900 text-white"><th class="px-5 py-3.5 text-left font-semibold">Hernia type</th><th class="px-5 py-3.5 text-left font-semibold">Main concern</th><th class="px-5 py-3.5 text-left font-semibold">Practice note</th></tr></thead><tbody class="divide-y divide-slate-100"><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Groin (inguinal) or femoral</td><td class="px-5 py-3.5">Pressure and stretch near the groin</td><td class="px-5 py-3.5">Be careful with wide-legged folds, deep hip openers and held core work. Stop if you feel pulling or a bulge.</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Belly button, ventral or incisional</td><td class="px-5 py-3.5">Pressure on the front abdominal wall</td><td class="px-5 py-3.5">Avoid poses that press the belly into the mat or demand hard core clenching.</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Hiatal</td><td class="px-5 py-3.5">Upper stomach pushing through the diaphragm, often with reflux</td><td class="px-5 py-3.5">Folds and inversions may aggravate reflux. See our <a href="<?= $base_path ?>my_types/hiatal-hernia-surgery-in-chennai" class="text-brand-700 font-semibold hover:underline">hiatal hernia surgery page</a>.</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">After repair</td><td class="px-5 py-3.5">Healing tissue</td><td class="px-5 py-3.5">Follow your surgeon's timeline. Core-stretching poses come back late, as our <a href="<?= $base_path ?>blog/hernia-surgery-recovery-week-by-week" class="text-brand-700 font-semibold hover:underline">week-by-week recovery guide</a> explains.</td></tr></tbody></table></div>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Practical Rules for Class and Home Practice</h2>
                    <ul class="list-disc pl-6 space-y-2 text-slate-600 leading-relaxed mb-6"><li><strong>Tell your instructor before class.</strong> A teacher can offer modifications only if they know.</li><li><strong>Breathe out on effort and never hold your breath.</strong></li><li><strong>Skip the "go deeper" push.</strong> Group classes and online videos reward intensity, and a hernia does not.</li><li><strong>Stop at pulling, burning or a bulge.</strong> Do not push through it.</li><li><strong>Be honest about home videos.</strong> No one is watching your form, so choose simpler sequences.</li><li><strong>Keep other training in mind.</strong> The same pressure logic applies in the gym, covered in our guide to <a href="<?= $base_path ?>blog/gym-with-a-hernia" class="text-brand-700 font-semibold hover:underline">exercising with a hernia</a>. After surgery, see <a href="<?= $base_path ?>blog/exercise-after-hernia-surgery" class="text-brand-700 font-semibold hover:underline">exercise after hernia surgery</a>.</li></ul>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Stop and Seek Help If</h2>
                    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 rounded-r-2xl mb-8"><p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">A bulge that will not go back in, severe or worsening pain, or nausea and vomiting during or after practice means stop and get urgent help. Read about <a href="<?= $base_path ?>blog/hernia-emergency-warning-signs" class="text-amber-900 font-semibold hover:underline">hernia emergency warning signs</a> so you know what counts.</p></div>

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
                            This article is general information on exercise and does not replace an examination. Yoga cannot diagnose or treat a hernia. If you notice a bulge, pulling or groin discomfort, have it assessed before continuing practice.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Not Sure Whether It Is Safe to Practice?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">A consultation confirms what the lump or ache is and which movements are reasonable for your hernia while you decide on treatment.</p>
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
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Get the hernia examined before practicing.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Avoid pressure spikes: deep twists, held breath, hard core holds.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Forceful breathing and abdominal locks need medical clearance.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Stop and seek help for a bulge that will not go back.</li>
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
                        <a href="<?= $base_path ?>blog/do-i-need-hernia-surgery" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Do I Need Hernia Surgery?</h4>
                                <span class="text-[11px] text-slate-400">17 August 2026</span>
                            </div>
                        </a>
                        <a href="<?= $base_path ?>blog/how-fast-does-a-hernia-grow" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">How Fast Does a Hernia Grow?</h4>
                                <span class="text-[11px] text-slate-400">31 August 2026</span>
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
