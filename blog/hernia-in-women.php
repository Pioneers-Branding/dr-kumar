<?php
require_once __DIR__ . '/../includes/config.php';

$page_title       = 'Hernia in Women: Symptoms and Why It Is Missed | Dr. Kumar';
$page_description = 'Hernia in women is often missed because there is no obvious bulge. Learn the symptoms, how it differs from gynecologic and muscle pain, and what to do next.';
$page_keywords    = 'hernia in women symptoms, can women get hernias, female hernia symptoms, femoral hernia in women, groin pain in women, hernia misdiagnosed women, Dr. Kumar Billroth Hospitals';
// PNG rather than the WebP used on the page: some social scrapers still do not
// render WebP previews, and og:image is never downloaded by page visitors.
$page_image       = $site['url'] . 'assets/images/hernia-in-women.png';
$page_published   = '2026-09-03';
$page_modified    = '2026-09-03';

// Set explicitly. The slug names no hernia type, and the clinical subject of this
// page is the femoral hernia that women are disproportionately likely to have.
$schema_about = [
    '@type'         => 'MedicalCondition',
    'name'          => 'Femoral and Inguinal Hernia in Women',
    'description'   => 'Groin hernias in women are frequently smaller and deeper than in men and often present without a visible bulge, which contributes to delayed diagnosis. Femoral hernias are more common in women and carry a high risk of strangulation.',
    'signOrSymptom' => [
        ['@type' => 'MedicalSignOrSymptom', 'name' => 'Deep groin or lower abdominal ache without a visible lump'],
        ['@type' => 'MedicalSignOrSymptom', 'name' => 'Pain worse on standing, coughing or lifting'],
        ['@type' => 'MedicalSignOrSymptom', 'name' => 'Dragging heaviness relieved by lying flat'],
        ['@type' => 'MedicalSignOrSymptom', 'name' => 'Burning or pinching pain in the groin'],
    ],
    'possibleTreatment' => [
        ['@type' => 'MedicalProcedure', 'name' => 'Laparoscopic Femoral Hernia Repair'],
        ['@type' => 'MedicalProcedure', 'name' => 'Robotic Hernia Repair'],
    ],
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'Can women get hernias?',
        'a' => 'Yes. Women get hernias less often than men overall, but femoral hernias are around four times more common in women, and those carry the highest risk of strangulation.',
    ],
    [
        'q' => 'What does a hernia feel like in a woman?',
        'a' => 'Often not a lump. It can be a deep ache, burning, pinching or a dragging heaviness in the groin or lower abdomen, worse on standing, coughing or straining.',
    ],
    [
        'q' => 'Why do doctors miss hernias in women?',
        'a' => 'Women\'s groin hernias are smaller and deeper, and frequently have no visible bulge. Symptoms overlap with gynecologic and musculoskeletal causes, so those are investigated first.',
    ],
    [
        'q' => 'Can a pelvic ultrasound detect a hernia?',
        'a' => 'Not reliably. A standard pelvic ultrasound looks at the uterus and ovaries, not the groin canals. Detecting a small hernia usually needs targeted dynamic imaging of the groin.',
    ],
    [
        'q' => 'Is a femoral hernia more dangerous than other hernias?',
        'a' => 'Yes. Strangulation risk reaches about 22 percent at three months and 45 percent by 21 months, against under 5 percent for inguinal hernias. That is why prompt repair matters.',
    ],
    [
        'q' => 'Could my groin pain be a hernia rather than a gynecological problem?',
        'a' => 'It can be, particularly if the pain worsens on standing, coughing or lifting and eases when lying flat. Ask specifically for a groin examination standing up.',
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
            <span class="text-white">Hernia in Women</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Diagnosis Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Hernia in Women: <br class="hidden md:inline"><span class="text-accent">Why It's Missed and What's Different</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>September 3, 2026</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Content & Sidebar Layout -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-12">

            <!-- Left Column: Article Body -->
            <article class="lg:col-span-8 bg-white rounded-3xl p-8 md:p-12 shadow-sm border border-slate-100">
                <div class="prose prose-slate max-w-none">

                    <img src="<?= $base_path ?>assets/images/hernia-in-women.webp" alt="Hernia in Women: Why It's Missed and What's Different, with a woman describing lower abdominal pain in a consultation" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: Why Hernias Are Missed in Women</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>Because there is usually nothing to see.</strong> A woman's groin hernia tends to be smaller and deeper than a man's, and often produces no visible bulge at all. What she reports is pain, and pain in that area gets attributed to gynecologic or musculoskeletal causes first. If you have been told your groin pain is something else and it has not settled, that is worth taking seriously rather than accepting.
                        </p>
                    </div>

                    <!-- 1. Anatomy -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">Why a Woman's Hernia Does Not Match the Textbook Picture</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Almost everything written about hernias describes a visible lump in the groin that appears on standing and disappears on lying down. That description comes from male anatomy, where inguinal hernias are between nine and twelve times more common. It is a poor guide to what happens in women.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        The female pelvis is wider and structurally more complex, built for childbirth, which changes the position and shape of the structures around the groin canals. Hormones matter too. Estrogen, relaxin and progesterone all act on collagen, the protein that gives connective tissue its strength, which is why the abdominal wall is more vulnerable around pregnancy and again around menopause.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        The practical consequence is that a woman's groin hernia is frequently small, sits deep, and never produces the obvious bulge everyone is looking for. So the symptom she brings to a consultation is pain, without a sign anyone can point to. That is the whole problem in one sentence.
                    </p>

                    <!-- 2. Comparison table -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Hernia, Gynecologic or Musculoskeletal? How the Pain Differs</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        These three groups of causes overlap heavily, which is exactly why the wrong one gets investigated first. The pattern of the pain, rather than its severity, is what separates them. This table is a guide to that pattern, not a way to diagnose yourself.
                    </p>

                    <div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm">
                        <table class="w-full text-slate-700 text-sm">
                            <thead>
                                <tr class="bg-brand-900 text-white">
                                    <th class="px-5 py-3.5 text-left font-semibold">Feature</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">Groin hernia</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">Gynecologic cause</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">Musculoskeletal cause</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">How it feels</td>
                                    <td class="px-5 py-3.5">Dragging heaviness, burning or pinching, often deep in the groin crease</td>
                                    <td class="px-5 py-3.5">Cramping or pressure, usually more central and pelvic</td>
                                    <td class="px-5 py-3.5">Sharp or pulling, tied to a specific movement</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Worse with</td>
                                    <td class="px-5 py-3.5">Standing for long periods, coughing, lifting, straining</td>
                                    <td class="px-5 py-3.5">Points in the menstrual cycle, intercourse</td>
                                    <td class="px-5 py-3.5">Specific movements, twisting, exercise</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Better with</td>
                                    <td class="px-5 py-3.5 font-semibold">Lying flat, often noticeably</td>
                                    <td class="px-5 py-3.5">Varies, may not change with position</td>
                                    <td class="px-5 py-3.5">Rest from the specific activity</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Timing pattern</td>
                                    <td class="px-5 py-3.5">Worse as the day goes on</td>
                                    <td class="px-5 py-3.5">Often cyclical, tracks the month</td>
                                    <td class="px-5 py-3.5">Follows activity, not the clock or calendar</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Physical sign</td>
                                    <td class="px-5 py-3.5">May be none. A subtle fullness on standing and coughing</td>
                                    <td class="px-5 py-3.5">Tenderness on internal examination</td>
                                    <td class="px-5 py-3.5">Tenderness over a muscle or tendon insertion</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Test that finds it</td>
                                    <td class="px-5 py-3.5 font-semibold">Groin examination standing, plus dynamic imaging</td>
                                    <td class="px-5 py-3.5">Pelvic ultrasound</td>
                                    <td class="px-5 py-3.5">Clinical examination, sometimes MRI</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        The single most useful line in that table is the third one. Pain that clearly eases when you lie flat, and builds again through a day on your feet, fits a hernia better than it fits most gynecologic causes.
                    </p>

                    <!-- 3. Delay data -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What the Delay Research Actually Found</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        This is not a matter of opinion. A study following women with groin hernias recorded how long they had symptoms before repair, and the answer was uncomfortable. Around 40 percent had been symptomatic for more than a year by the time they reached surgery.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        The route to a surgeon was rarely direct. Women in that study had typically passed through family practitioners, gynecologists, and in some cases psychiatrists first. Their symptoms had been attributed to arthritis of the pelvic girdle, gastroenteritis, swollen lymph nodes, diverticulitis and constipation. Two documented cases were put down to post-partum abdominal pain and to a previous uterine ablation.
                    </p>
                    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 rounded-r-2xl mb-8">
                        <p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">
                            <strong>The consequence of that delay is measurable.</strong> Emergency hernia repair rates in women run roughly three to four times higher than in men. Women are not getting more dangerous hernias by chance. They are arriving later, by which point the situation has become urgent.
                        </p>
                    </div>

                    <!-- 4. The key statistic -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">The Statistic That Matters Most</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        In that same group of women, surgeons found at operation that <strong>35 percent of the hernias were femoral</strong>. Before surgery, only <strong>7.5 percent</strong> had been identified as femoral.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Read those two numbers together. The specific hernia type that women are most likely to have was being recognized beforehand less than a fifth of the time it was actually present. And of all the hernia types, femoral is the one where being missed carries the highest cost.
                    </p>

                    <!-- 5. Femoral risk -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Why Femoral Hernias Are the Ones to Catch Early</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Femoral hernias push through the femoral canal, just below the groin crease rather than above it. They are about four times more common in women than in men. The femoral canal is narrow and bounded by rigid ligament, so anything that enters it is easily trapped.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        That anatomy produces a risk profile unlike any other hernia:
                    </p>
                    <ul class="list-none p-0 space-y-3 mb-8">
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200"><span class="w-2.5 h-2.5 rounded-full bg-red-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm md:text-base">Strangulation risk of roughly <strong>22 percent within three months</strong> of appearing, rising to about <strong>45 percent by 21 months</strong>.</span></li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200"><span class="w-2.5 h-2.5 rounded-full bg-red-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm md:text-base">For comparison, inguinal hernias sit under <strong>5 percent</strong> over two years. Strangulation is roughly twelve times more common in femoral hernias.</span></li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200"><span class="w-2.5 h-2.5 rounded-full bg-red-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm md:text-base">Femoral hernias are only about <strong>5 percent</strong> of all abdominal wall hernias, yet account for close to <strong>40 percent of emergency repairs</strong>.</span></li>
                    </ul>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        This is why surgeons do not offer watchful waiting for a confirmed femoral hernia the way they might for a small, quiet inguinal one. The planned operation is a straightforward keyhole procedure. The emergency version, once bowel is trapped, is a different operation entirely. Our page on <a href="<?= $base_path ?>my_types/femoral-hernia-treatment-in-chennai" class="text-brand-700 font-semibold hover:underline">femoral hernia treatment</a> sets out what the repair involves.
                    </p>

                    <!-- 6. Right examination -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Getting the Right Examination and the Right Scan</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        A great many women with groin pain do get imaged. The problem is that they are often imaged for the wrong thing. A standard pelvic ultrasound is looking at the uterus and ovaries. It is not looking at the groin canals, and a small hernia can sit entirely outside the field being examined. A normal pelvic scan does not rule out a hernia, and it should never be treated as though it does.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Two things change the odds of finding it. The examination should be done <strong>standing as well as lying down</strong>, with a cough, because a small hernia may only become apparent under that pressure. And the imaging needs to be targeted at the groin and dynamic, meaning taken while you strain, rather than a static scan of the pelvis. Our guide to <a href="<?= $base_path ?>hernia/diagnosis" class="text-brand-700 font-semibold hover:underline">how a hernia is diagnosed</a> explains what each test shows.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        If pregnancy is part of your history, that is relevant context rather than an alternative explanation, and it is covered separately in our page on <a href="<?= $base_path ?>special-considerations/pregnancy" class="text-brand-700 font-semibold hover:underline">hernia during pregnancy</a>.
                    </p>

                    <!-- 7. When to stop waiting -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">When to Stop Waiting</h2>
                    <div class="bg-red-50 border-2 border-red-500 p-5 rounded-2xl mb-6">
                        <p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">
                            <strong>Go to an emergency department today</strong> if you have sudden severe groin or abdominal pain, a lump that has become hard and will not push back, skin that has changed color over it, vomiting, fever, or you cannot pass gas. The <a href="<?= $base_path ?>blog/hernia-emergency-warning-signs" class="text-red-700 font-bold hover:underline">warning signs guide</a> covers this in detail.
                        </p>
                    </div>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Short of that, ask for a surgical opinion within days rather than months if your groin or lower abdominal pain has persisted, if it is clearly worse on standing and better lying flat, if it worsens with coughing or lifting, or if you have already been investigated for gynecologic causes and nothing was found.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        A sentence that helps: <em>"I would like my groin examined for a hernia, standing up and with a cough."</em> It is specific, it names the test, and it is difficult to set aside. <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-brand-700 font-semibold hover:underline">Dr. Kumar</a>, with 29 years of practice and more than 10,000 hernia repairs at Billroth Hospitals in Chennai, sees a steady number of women who were told for months that their pain was something else.
                    </p>

                    <!-- 8. FAQ -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-12 mb-6 border-b border-slate-100 pb-3">Frequently Asked Questions</h2>
                    <div class="space-y-4 mb-10" id="faqAccordion">
                        <?php foreach ($faqs as $i => $faq): ?>
                        <div class="faq-item bg-slate-50 rounded-2xl border border-slate-200 p-6">
                            <h3 class="font-bold text-slate-900 text-lg mb-2">Q<?= $i + 1 ?>: <?= htmlspecialchars($faq['q'], ENT_QUOTES, 'UTF-8') ?></h3>
                            <p class="text-slate-600 text-sm md:text-base leading-relaxed m-0"><?= htmlspecialchars($faq['a'], ENT_QUOTES, 'UTF-8') ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- 9. Closing note + CTA -->
                    <div class="bg-slate-100 border border-slate-200 rounded-2xl p-6 mb-8">
                        <p class="text-slate-600 text-sm leading-relaxed m-0">
                            This article is general medical information, not a diagnosis. Groin pain has many causes and some of them are gynecologic. The point is not that it is always a hernia, only that a hernia should be actively ruled out rather than assumed absent because no lump was visible.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Ask for a Groin Examination That Looks for a Hernia</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Examined standing and lying down, with dynamic imaging if the picture is unclear, so a small hernia is found rather than missed.</p>
                        <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition shadow-lg hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            Book a Consultation
                        </a>
                    </div>
                </div>
            </article>

            <!-- Right Column: Sidebar -->
            <aside class="lg:col-span-4 space-y-8">
                <!-- Key Takeaway Card -->
                <div class="bg-brand-50 rounded-3xl p-6 border border-brand-100">
                    <h3 class="font-bold text-brand-900 text-base mb-3">The Short Version</h3>
                    <ul class="list-none p-0 m-0 space-y-2.5">
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Women's groin hernias are often deep and produce no visible bulge.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Pain that eases lying flat and builds through the day fits a hernia.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>A normal pelvic ultrasound does not rule one out.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Femoral hernias are commoner in women and strangulate far more often.</li>
                    </ul>
                </div>

                <!-- Author Profile Card -->
                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm text-center">
                    <img src="<?= $base_path ?>assets/images/dr-kumar-headshot-2026.jpg" alt="Dr. Kumar, hernia and abdominal wall surgeon in Chennai" width="96" height="96" class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-brand-50 shadow-md mb-4">
                    <h3 class="font-bold text-slate-900 text-lg mb-1">Dr. Kumar</h3>
                    <p class="text-xs text-brand-700 font-semibold mb-3">Senior Hernia &amp; Abdominal Wall Surgeon</p>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">Over 29 years of experience specializing in advanced laparoscopic and robotic hernia repairs at Billroth Hospitals, Chennai.</p>
                    <a href="<?= $base_path ?>treatment/hernia-surgeon-in-chennai" class="inline-flex items-center justify-center w-full bg-brand-50 hover:bg-brand-100 text-brand-800 text-xs font-bold py-2.5 rounded-xl border border-brand-100 transition">
                        View Doctor Profile
                    </a>
                </div>

                <!-- Emergency Card -->
                <div class="bg-red-600 text-white rounded-3xl p-6 shadow-lg">
                    <h3 class="font-bold text-lg mb-2">Hernia Emergency?</h3>
                    <p class="text-red-100 text-xs leading-relaxed mb-4">If a lump is hard, discolored, or you are vomiting, do not wait for an appointment.</p>
                    <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center justify-center w-full gap-2 bg-white text-red-700 font-bold text-sm py-3 rounded-xl hover:bg-red-50 transition">
                        <?= $site['phone'] ?>
                    </a>
                </div>

                <!-- Related Articles Card -->
                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                    <h3 class="font-bold text-slate-900 text-base mb-4 border-b border-slate-100 pb-2">Related Articles</h3>
                    <div class="space-y-4">
                        <a href="<?= $base_path ?>blog/how-fast-does-a-hernia-grow" class="flex gap-3 group">
                            <img src="<?= $base_path ?>assets/images/how-fast-does-a-hernia-grow.webp" alt="How Fast Does a Hernia Grow?" width="64" height="64" class="w-16 h-16 rounded-xl object-cover shrink-0" loading="lazy">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">How Fast Does a Hernia Grow?</h4>
                                <span class="text-[11px] text-slate-400">31 August 2026</span>
                            </div>
                        </a>
                        <a href="<?= $base_path ?>blog/do-i-need-hernia-surgery" class="flex gap-3 group">
                            <img src="<?= $base_path ?>assets/images/do-i-need-hernia-surgery.jpg" alt="Do I Need Hernia Surgery?" width="64" height="64" class="w-16 h-16 rounded-xl object-cover shrink-0" loading="lazy">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Do I Need Hernia Surgery?</h4>
                                <span class="text-[11px] text-slate-400">17 August 2026</span>
                            </div>
                        </a>
                        <a href="<?= $base_path ?>blog/can-hernia-be-cured-without-surgery" class="flex gap-3 group">
                            <img src="<?= $base_path ?>assets/images/can-hernia-be-cured-without-surgery.png" alt="Can Hernia be Cured without Surgery?" width="64" height="64" class="w-16 h-16 rounded-xl object-cover shrink-0" loading="lazy">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Can Hernia be Cured without Surgery?</h4>
                                <span class="text-[11px] text-slate-400">24 July 2026</span>
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
// markup and the visible text can never disagree. MedicalWebPage,
// BreadcrumbList and the MedicalCondition node come from header.php.
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
