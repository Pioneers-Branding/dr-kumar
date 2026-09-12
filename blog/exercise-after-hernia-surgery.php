<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2026-09-11');

$page_title       = 'Exercise After Hernia Surgery: Gym, Lifting, Core Work';
$page_description = 'Exercise after hernia surgery, explained by phase. What load is safe at weeks 0-2, 2-6, 6-12 and beyond, and how to get back to the gym without risking recurrence.';
$page_keywords    = 'exercise after hernia surgery, gym after hernia surgery, lifting weights after hernia repair, core exercises after hernia surgery, when can i exercise after hernia surgery';
$page_image       = $site['url'] . 'assets/images/exercise-after-hernia-surgery.png';
$page_published   = '2026-09-11';
$page_modified    = '2026-09-11';

$schema_about = [
    '@type'       => 'MedicalProcedure',
    'name'        => 'Hernia Repair Recovery and Exercise Progression',
    'description' => 'A phased return to physical training after hernia repair, from walking in the first two weeks through to full pre-surgery training loads, designed to protect the repair while it gains strength.',
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'When can I go back to the gym after hernia surgery?',
        'a' => 'Light machine work and resistance bands are usually fine from around week four. Full gym training, including free weights and compound lifts, typically waits until week eight to twelve.',
    ],
    [
        'q' => 'Can I do core exercises like sit-ups or planks after hernia repair?',
        'a' => 'Not in the first six weeks. Core exercises load the exact muscle layer that was repaired, so they are reintroduced last, starting with gentle pelvic tilts around week eight.',
    ],
    [
        'q' => 'How much weight can I lift two weeks after hernia surgery?',
        'a' => 'Keep everything under two to four kilograms for the first two weeks, roughly a full kettle or a bag of groceries. Anything heavier risks straining the fresh repair.',
    ],
    [
        'q' => 'Will exercising too soon cause my hernia to come back?',
        'a' => 'It can. Loading the repair before the mesh has integrated and the tissue has regained strength is one of the more avoidable causes of early recurrence after surgery.',
    ],
    [
        'q' => 'Is running safe after hernia surgery?',
        'a' => 'Light jogging is often possible from around week six for keyhole repairs. The repeated impact means most surgeons prefer walking and cycling until then, then a gradual build-up.',
    ],
    [
        'q' => 'Do I need to change my training forever after a hernia repair?',
        'a' => 'No. Most people return to their full pre-surgery training within three months. The changes described here are temporary, built around how the repair heals, not permanent limits.',
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
            <span class="text-white">Exercise After Surgery</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Recovery Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Exercise After Hernia Surgery: <br class="hidden md:inline"><span class="text-accent">Gym, Lifting and Core Work</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>September 11, 2026</span>
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

                    <img src="<?= $base_path ?>assets/images/exercise-after-hernia-surgery.png" alt="Exercise After Hernia Surgery: Gym, Lifting and Core Work" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: Exercise After Hernia Surgery</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>Walking only for the first two weeks, light resistance from week four, moderate weights from week six, and a gradual return to full training between weeks eight and twelve.</strong> Core exercises come back last, not first, because they load the exact tissue that was repaired. Losing fitness for a few weeks is temporary. Loading the repair too soon can undo the surgery itself.
                        </p>
                    </div>

                    <!-- 1. Why the caution is worth it -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">Why This Matters More to Gym-Goers Than to Anyone Else</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        If you train regularly, hernia surgery raises a specific fear that a desk-job patient never has: not just "when can I move again" but "will I lose the fitness I built." That fear pushes people toward the gym faster than is wise, and the abdominal wall is precisely the structure that just had a defect closed in it.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Mesh takes time to integrate with your own tissue, and the muscle layer around it needs time to regain tensile strength. Training load before that has happened is one of the more preventable reasons a repair fails early. The good news is that the loss of fitness during a properly paced return is smaller than most active people expect, and mostly reversible within weeks of resuming full training.
                    </p>

                    <!-- 2. The phased table -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">The Phased Return: What Load Is Safe, and When</h2>
                    <div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm">
                        <table class="w-full text-slate-700 text-sm">
                            <thead>
                                <tr class="bg-brand-900 text-white">
                                    <th class="px-5 py-3.5 text-left font-semibold">Phase</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">Permitted load</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">What to do</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Weeks 0 to 2</td>
                                    <td class="px-5 py-3.5">Under 2 to 4 kg</td>
                                    <td class="px-5 py-3.5">Short, frequent walks only. No resistance training, no core work of any kind.</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Weeks 2 to 6</td>
                                    <td class="px-5 py-3.5">Up to 5 to 8 kg</td>
                                    <td class="px-5 py-3.5">Resistance bands, light machines that avoid the trunk, longer walks. Still no sit-ups, planks or deadlifts.</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Weeks 6 to 12</td>
                                    <td class="px-5 py-3.5">Roughly 50% of pre-surgery weights</td>
                                    <td class="px-5 py-3.5">Bodyweight squats, light dumbbells, gentle core reintroduction from week 8 onward, easy jogging or cycling.</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Week 12 onward</td>
                                    <td class="px-5 py-3.5 font-semibold">Full pre-surgery loads</td>
                                    <td class="px-5 py-3.5">Compound lifts, running, contact sport and full core training, if pain-free and cleared at review.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        These figures are typical for a standard keyhole repair with no complications. Open surgery, a large defect, or a recurrent hernia usually shift every phase later by one to two weeks. For the general recovery picture alongside this training focus, see our <a href="<?= $base_path ?>blog/hernia-surgery-recovery-week-by-week" class="text-brand-700 font-semibold hover:underline">week-by-week recovery guide</a>.
                    </p>

                    <!-- 3. Core work specifically -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Why Core Work Comes Back Last</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Every other muscle group you train sits away from the repair. Your core does not. Sit-ups, crunches, planks and heavy compound lifts all raise pressure directly against the area that was just closed, which is exactly the pressure a hernia forms under in the first place.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        From around week eight, start with pelvic tilts and seated marches, movements that engage the core gently without bracing hard against it. Add load slowly from there. If a movement causes pulling, pinching, or a bulge you did not have before, stop and go back a phase rather than pushing through it.
                    </p>

                    <!-- 4. Sports and athletic training -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Athletes and Sports-Specific Training</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        If your training involves repeated twisting, sprinting, or change of direction, add an extra check before returning to full contact or competition. Groin and lower abdominal pain in athletes is not always a straightforward hernia, and sometimes overlaps with what is known as a <a href="<?= $base_path ?>my_types/sports-hernia" class="text-brand-700 font-semibold hover:underline">sports hernia</a>, a related but distinct injury with its own rehabilitation path. Mention your sport specifically at your review so the plan reflects the actual demands of it.
                    </p>

                    <!-- 5. Recurrence link -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">The Real Reason to Be Patient</h2>
                    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 rounded-r-2xl mb-8">
                        <p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">
                            <strong>Recurrence, not slow fitness, is the actual risk here.</strong> Training too heavy, too early is one of the load-related factors that can undermine an otherwise successful repair. Our guide on <a href="<?= $base_path ?>blog/will-my-hernia-come-back" class="text-amber-900 font-semibold hover:underline">hernia recurrence risk</a> covers what genuinely raises that risk and what does not, alongside this training timeline.
                        </p>
                    </div>

                    <!-- 6. Signs to stop -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Signs to Stop and Step Back a Phase</h2>
                    <ul class="list-none p-0 space-y-3 mb-8">
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-red-100 text-red-700 text-xs font-bold flex items-center justify-center shrink-0">1</span><span class="text-slate-600 text-sm md:text-base">A new bulge or swelling at the incision during or after a set.</span></li>
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-red-100 text-red-700 text-xs font-bold flex items-center justify-center shrink-0">2</span><span class="text-slate-600 text-sm md:text-base">Sharp, localized pain rather than the general muscle fatigue you would expect.</span></li>
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-red-100 text-red-700 text-xs font-bold flex items-center justify-center shrink-0">3</span><span class="text-slate-600 text-sm md:text-base">Pain that is worse the next morning rather than settling with rest.</span></li>
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-red-100 text-red-700 text-xs font-bold flex items-center justify-center shrink-0">4</span><span class="text-slate-600 text-sm md:text-base">Any pulling sensation that was not present in your last session.</span></li>
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
                            This article is general medical information, not a personal training plan. Confirm your own phased return with the surgeon who performed your repair.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Get a Training Plan Matched to Your Repair</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Book a review so your progression back to the gym is set against your actual healing, not a generic timeline.</p>
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
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Weeks 0 to 2: walking only.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Weeks 6 to 12: roughly half your usual weights.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Core work returns last, gently, from week 8.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Full training is typical by week 12.</li>
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
                        <a href="<?= $base_path ?>blog/return-to-work-after-hernia-surgery" class="flex gap-3 group">
                            <img src="<?= $base_path ?>assets/images/hernia-surgery-recovery-week-by-week.png" alt="Return to Work After Hernia Surgery" width="64" height="64" class="w-16 h-16 rounded-xl object-cover shrink-0" loading="lazy">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">When Can I Return to Work?</h4>
                                <span class="text-[11px] text-slate-400">04 September 2026</span>
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
// FAQPage and HowTo schema. HowTo steps mirror the phased table above so the
// visible content and the structured data describe the same four stages.
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
    '@context'      => 'https://schema.org',
    '@type'         => 'HowTo',
    '@id'           => $page_url . '#howto',
    'name'          => 'How to Return to Exercise After Hernia Surgery',
    'description'   => 'A phased return to gym training, lifting and core work after hernia repair, from walking in weeks 0 to 2 through to full pre-surgery loads from week 12.',
    'step' => [
        ['@type' => 'HowToStep', 'name' => 'Weeks 0 to 2', 'text' => 'Short, frequent walks only. Keep any carried load under 2 to 4 kg. No resistance training and no core exercises of any kind.'],
        ['@type' => 'HowToStep', 'name' => 'Weeks 2 to 6', 'text' => 'Introduce resistance bands and light machines that avoid the trunk, up to roughly 5 to 8 kg. Still no sit-ups, planks or deadlifts.'],
        ['@type' => 'HowToStep', 'name' => 'Weeks 6 to 12', 'text' => 'Add bodyweight squats, light dumbbells and easy jogging or cycling, at around 50 percent of pre-surgery weights. Reintroduce gentle core work such as pelvic tilts from week 8.'],
        ['@type' => 'HowToStep', 'name' => 'Week 12 onward', 'text' => 'Resume compound lifts, running, contact sport and full core training at pre-surgery loads, once cleared as pain-free at your surgical review.'],
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
