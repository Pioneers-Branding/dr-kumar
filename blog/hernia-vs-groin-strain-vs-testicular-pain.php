<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2026-11-08');

$page_title       = 'Hernia vs Groin Strain vs Testicular Pain: Key Differences';
$page_description = 'Hernia vs groin strain vs testicular pain: how the lump, timing and pain pattern differ, which signs need same-day care, and why an exam settles it fast.';
$page_keywords    = 'hernia vs groin strain, groin strain or hernia, hernia vs testicular pain, how to tell hernia from pulled groin muscle, groin pain in men causes';
$page_image       = $site['url'] . 'assets/images/hernia-vs-groin-strain-vs-testicular-pain.png';
$page_published   = '2026-11-08';
$page_modified    = '2026-11-08';

$schema_about = [
    '@type'       => 'MedicalCondition',
    'name'        => 'Groin and Testicular Pain: Hernia vs Strain',
    'description' => 'Groin pain in men most often comes from an inguinal hernia, a muscle or tendon strain, or a problem in the scrotum. A hernia typically shows a groin bulge, a strain starts with a clear injury, and sudden severe testicular pain is an emergency.',
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'Can a hernia feel like a pulled groin muscle?',
        'a' => 'Yes. Harvard Health notes the symptoms overlap heavily, with dull ache, burning or heaviness. A visible lump points toward a hernia, but only an examination can tell for certain.',
    ],
    [
        'q' => 'How long should a groin strain take to improve?',
        'a' => 'A strain usually eases over days to weeks. Pain that is not improving, keeps returning, or comes with any groin lump should be examined rather than rested indefinitely.',
    ],
    [
        'q' => 'Can an inguinal hernia cause testicle pain?',
        'a' => 'It can. A hernia that extends into the scrotum may cause swelling, heaviness or discomfort near the testicle. Any new scrotal swelling or pain should be checked promptly.',
    ],
    [
        'q' => 'Is sudden testicular pain an emergency?',
        'a' => 'Yes. Sudden, severe pain in one testicle can be torsion, where blood supply is cut off. Go to an emergency department immediately and do not wait to see if it eases.',
    ],
    [
        'q' => 'Will an ultrasound show whether it is a hernia?',
        'a' => 'Often, when an examination is unclear. NIDDK lists ultrasound, CT and MRI as options. Many hernias are diagnosed by examination alone, standing and coughing, without any scan.',
    ],
    [
        'q' => 'Is a sports hernia a real hernia?',
        'a' => 'Not in the usual sense. Harvard Health calls the name misleading because it is a muscle injury in the groin, not a gap in the abdominal wall with a bulge.',
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
            <span class="text-white">Hernia vs Groin Strain</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Comparison Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Hernia vs Groin Strain vs Testicular Pain: <br class="hidden md:inline"><span class="text-accent">How to Tell the Difference</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar of Billroth Hospitals</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>November 8, 2026</span>
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

                    <img src="<?= $base_path ?>assets/images/hernia-vs-groin-strain-vs-testicular-pain.png" alt="Hernia vs Groin Strain vs Testicular Pain: How to Tell the Difference" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: Hernia vs Groin Strain vs Testicular Pain</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>A hernia usually brings a groin bulge that grows over weeks and does not heal.</strong> A strain starts with a clear injury and improves over days to weeks. Sudden, severe testicular pain is different: it can be torsion, an emergency needing care within hours.
                        </p>
                    </div>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">Why These Three Get Confused</h2>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        Pain in the groin or just above the testicle has many causes, and the three most common culprits for men are a hernia, a groin strain, and a problem inside the scrotum. Harvard Health puts it bluntly: for a strain versus a hernia, "there's very little difference in symptoms." Both can cause a dull ache, burning or heaviness, especially when standing. That is why guessing from pain alone often goes wrong, and why the clues below are about timing, lumps and triggers rather than how much it hurts.
                    </p>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        One point matters more than everything else here: sudden, severe testicular pain is an emergency, not something to compare against a table. We cover that first so you do not lose time.
                    </p>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Sudden Testicular Pain Is Never a Wait-and-See Problem</h2>

                    <div class="bg-red-50 border-l-4 border-red-600 p-6 rounded-r-2xl mb-8">
                        <p class="font-bold text-red-800 text-base mb-3">Go to an emergency department right away if you have</p>
                        <ul class="list-none p-0 m-0 space-y-2">
                            <li class="flex items-start gap-3 text-red-900 text-sm md:text-base leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-2 shrink-0"></span><span>Sudden, severe pain in one testicle, especially with nausea or vomiting</span></li>
                            <li class="flex items-start gap-3 text-red-900 text-sm md:text-base leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-2 shrink-0"></span><span>A testicle that looks higher than usual, or a swollen, tender scrotum that came on quickly</span></li>
                            <li class="flex items-start gap-3 text-red-900 text-sm md:text-base leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-2 shrink-0"></span><span>Pain that is severe and not easing within an hour</span></li>
                        </ul>
                    </div>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        These can point to testicular torsion, where the testicle twists and its blood supply is cut off. NHS-affiliated guidance stresses going straight to A&amp;E and not waiting to see if the pain improves. The time window is short: NHS sources describe a good chance of saving the testicle when it is treated within about six hours, and some clinical guidance aims for surgery sooner. The safe rule is simply that earlier is better. Do not take a painkiller and wait for morning.
                    </p>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Hernia vs Groin Strain vs Testicular Pain at a Glance</h2>

                    <div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm">
                    <table class="w-full text-slate-700 text-sm">
                    <thead><tr class="bg-brand-900 text-white"><th class="px-5 py-3.5 text-left font-semibold"></th><th class="px-5 py-3.5 text-left font-semibold">Inguinal hernia</th><th class="px-5 py-3.5 text-left font-semibold">Groin strain</th><th class="px-5 py-3.5 text-left font-semibold">Testicular or scrotal problem</th></tr></thead>
                    <tbody class="divide-y divide-slate-100">
                    <tr class="hover:bg-slate-50"><td class="px-5 py-3.5 align-top font-semibold text-slate-900">How it starts</td><td class="px-5 py-3.5 align-top">Often gradual, over weeks or months. Some men notice it after a lift or cough.</td><td class="px-5 py-3.5 align-top">A clear moment: a sprint, kick or sudden twist, sometimes with a pop.</td><td class="px-5 py-3.5 align-top">Torsion is sudden and severe. Infection or inflammation tends to build, with tenderness.</td></tr>
                    <tr class="hover:bg-slate-50"><td class="px-5 py-3.5 align-top font-semibold text-slate-900">A lump</td><td class="px-5 py-3.5 align-top">Often yes, a bulge in the groin that may reach the scrotum.</td><td class="px-5 py-3.5 align-top">Usually no lump.</td><td class="px-5 py-3.5 align-top">Swelling of the scrotum or testicle itself.</td></tr>
                    <tr class="hover:bg-slate-50"><td class="px-5 py-3.5 align-top font-semibold text-slate-900">Gets worse with</td><td class="px-5 py-3.5 align-top">Standing, coughing, lifting, straining.</td><td class="px-5 py-3.5 align-top">Moving the leg: kicking, sprinting, squeezing the thighs.</td><td class="px-5 py-3.5 align-top">Touch, or movement, depending on the cause.</td></tr>
                    <tr class="hover:bg-slate-50"><td class="px-5 py-3.5 align-top font-semibold text-slate-900">Effect of lying down</td><td class="px-5 py-3.5 align-top">Lump often shrinks or vanishes.</td><td class="px-5 py-3.5 align-top">Little change, rest helps over days.</td><td class="px-5 py-3.5 align-top">Little change.</td></tr>
                    <tr class="hover:bg-slate-50"><td class="px-5 py-3.5 align-top font-semibold text-slate-900">Course over time</td><td class="px-5 py-3.5 align-top">Does not heal on its own and can grow.</td><td class="px-5 py-3.5 align-top">Improves over days to weeks.</td><td class="px-5 py-3.5 align-top">Depends on cause. Torsion needs surgery urgently.</td></tr>
                    <tr class="hover:bg-slate-50"><td class="px-5 py-3.5 align-top font-semibold text-slate-900">Who to see</td><td class="px-5 py-3.5 align-top">A hernia surgeon or doctor, soon.</td><td class="px-5 py-3.5 align-top">A doctor, if not improving.</td><td class="px-5 py-3.5 align-top">Urgent care if sudden. Otherwise a doctor promptly.</td></tr>
                    </tbody>
                    </table>
                    </div>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        Table sources: Harvard Health on strain versus hernia, NIDDK on inguinal hernia, and NHS-affiliated guidance on testicular torsion. It describes typical patterns only. Real symptoms overlap, and a man can have more than one problem at once.
                    </p>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Five Questions That Point You in a Direction</h2>

                    <ul class="list-none p-6 m-0 mb-8 space-y-3 bg-slate-50 border border-slate-200 rounded-2xl">
                        <li class="flex items-start gap-3 text-slate-700 leading-relaxed"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span><strong>Was there a moment?</strong> A definite sprint, kick or twist followed by pain suggests a muscle or tendon strain. Harvard Health describes a strain as often starting with a noticeable moment of injury, sometimes a popping feeling.</span></li>
                        <li class="flex items-start gap-3 text-slate-700 leading-relaxed"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span><strong>Can you see or feel a lump?</strong> A bulge in the groin is the hallmark of a hernia. A strain typically does not produce one.</span></li>
                        <li class="flex items-start gap-3 text-slate-700 leading-relaxed"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span><strong>Does the lump change when you lie down?</strong> A groin bulge that shrinks when flat fits a reducible hernia. <a href="<?= $base_path ?>hernia/symptoms" class="text-brand-700 font-semibold hover:underline">The hernia symptoms page</a> lists the other signs.</span></li>
                        <li class="flex items-start gap-3 text-slate-700 leading-relaxed"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span><strong>Is it getting better by itself?</strong> A strain should improve over days to weeks. A hernia hole does not heal on its own, although the pain can come and go.</span></li>
                        <li class="flex items-start gap-3 text-slate-700 leading-relaxed"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span><strong>Is the pain in the testicle, or above it?</strong> Pain that is truly in the testicle, or with scrotal swelling, needs a prompt exam, because a groin hernia can also reach the scrotum.</span></li>
                    </ul>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">The Hernia Look-Alike Called a Sports Hernia</h2>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        Athletes in Chennai's cricket grounds, football turfs and gyms may hear the term "sports hernia". Harvard Health points out that this is a misleading name, since it describes a muscle injury in the groin rather than a true hernia with a bulge. If your groin pain began during sport and you have no lump, this may be the category. Our page on <a href="<?= $base_path ?>my_types/sports-hernia" class="text-brand-700 font-semibold hover:underline">sports hernia</a> explains how it is assessed. A true inguinal hernia, by contrast, is a gap in the muscle wall and needs a different plan.
                    </p>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What the Doctor Does to Sort It Out</h2>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        The examination is simple and quick. The doctor takes a history, looks and feels the groin while you stand, and asks you to cough or strain so that a bulge can show itself. If the picture is unclear, NIDDK notes that ultrasound, CT or MRI may be used. Our <a href="<?= $base_path ?>hernia/diagnosis" class="text-brand-700 font-semibold hover:underline">hernia diagnosis page</a> describes the full process. For the detailed list of signs that suggest a hernia in particular, see <a href="<?= $base_path ?>blog/inguinal-hernia-symptoms-in-men" class="text-brand-700 font-semibold hover:underline">inguinal hernia symptoms in men</a>.
                    </p>

                    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 rounded-r-2xl mb-8">
                        <p class="font-bold text-amber-900 text-base mb-2">A note on self-treating</p>
                        <p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">
                            If you have a groin lump, do not treat it as a strain. Rest, ice and anti-inflammatory tablets suit a muscle strain. They do nothing for a hernia, and months of "resting" a hernia only delay the right treatment.
                        </p>
                    </div>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        If an examination confirms an inguinal hernia, treatment options are laid out on the <a href="<?= $base_path ?>my_types/inguinal-hernia-treatment-in-chennai" class="text-brand-700 font-semibold hover:underline">inguinal hernia treatment in Chennai</a> page. If it is a strain or a scrotal condition, you will be told that too, and directed to the right care.
                    </p>

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
                            This article is general medical information, not a diagnosis. Groin and testicular pain has many causes, and anyone with sudden severe pain should seek emergency care instead of reading further.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Not Sure What Your Groin Pain Is?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Book a consultation for a proper examination. Dr. Kumar can tell you whether a hernia is involved and what to do next.</p>
                        <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition shadow-lg hover:scale-105">
                            Book a Groin Pain Consultation
                        </a>
                    </div>
                </div>
            </article>

            <aside class="lg:col-span-4 space-y-8">
                <div class="bg-brand-50 rounded-3xl p-6 border border-brand-100">
                    <h3 class="font-bold text-brand-900 text-base mb-3">The Short Version</h3>
                    <ul class="list-none p-0 m-0 space-y-2.5">
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>A hernia gives a lump that does not heal. A strain follows a clear injury and settles.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Sudden severe testicular pain is an emergency, go the same day.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Symptoms overlap, so an examination is the real test.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Do not rest a groin lump as if it were a strain.</li>
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
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Inguinal Hernia Symptoms in Men: 9 Early Signs</h4>
                                <span class="text-[11px] text-slate-400">3 November 2026</span>
                            </div>
                        </a>
                        <a href="<?= $base_path ?>blog/hernia-emergency-warning-signs" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Hernia Emergency Warning Signs</h4>
                                <span class="text-[11px] text-slate-400">28 August 2026</span>
                            </div>
                        </a>
                    </div>
                </div>
            </aside>

        </div>
    </div>
</section>

<?php
// FAQPage schema (and HowTo where the post is step-based).
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
