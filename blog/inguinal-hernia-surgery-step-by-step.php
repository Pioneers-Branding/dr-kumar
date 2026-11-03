<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2026-11-28');

$page_title       = 'Inguinal Hernia Surgery Step by Step: Admission to Discharge';
$page_description = 'Inguinal hernia surgery step by step: from the first exam and pre-op checks to anesthesia, the operation, recovery room and going home, with what to ask.';
$page_keywords    = 'inguinal hernia surgery step by step, what happens during hernia surgery, inguinal hernia repair procedure, hernia surgery admission to discharge, hernia operation process';
$page_image       = $site['url'] . 'assets/images/inguinal-hernia-surgery-step-by-step.png';
$page_published   = '2026-11-28';
$page_modified    = '2026-11-28';

$schema_about = [
    '@type'       => 'MedicalCondition',
    'name'        => 'Inguinal Hernia Surgery',
    'description' => 'Surgical repair of an inguinal (groin) hernia, which returns the bulging tissue to the abdomen and strengthens the weak spot, usually with mesh. It may be done by open, laparoscopic or robotic approaches and is often followed by same-day discharge.',
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'How long does inguinal hernia surgery take?',
        'a' => 'The NHS says it usually takes 30 to 90 minutes. The time depends on the approach, whether one or both sides are repaired, and the size of the hernia.',
    ],
    [
        'q' => 'Do I have to stay overnight after inguinal hernia surgery?',
        'a' => 'Often not. The NHS says most people can go home the same day, though some stay longer depending on the repair, anesthetic and their general health.',
    ],
    [
        'q' => 'Which anesthesia is used for inguinal hernia repair?',
        'a' => 'General anesthesia or local anesthesia, depending on hernia size, approach and your health. Open repair often uses local with sedation, and laparoscopic repair typically uses general anesthesia.',
    ],
    [
        'q' => 'Is mesh always used in inguinal hernia surgery?',
        'a' => 'No. A thin mesh is usually placed over the hernia, but in some cases stitches alone are used, as the NHS notes. Your surgeon decides based on your situation.',
    ],
    [
        'q' => 'When can I walk after inguinal hernia surgery?',
        'a' => 'Gentle walking is usually encouraged soon after, increasing little by little. Your team will tell you when to begin and which activities, such as heavy lifting, to avoid.',
    ],
    [
        'q' => 'When can I go back to work after inguinal hernia surgery?',
        'a' => 'The NHS says at least one to two weeks off work, and up to six weeks for heavy manual jobs. Your job, repair type and recovery decide the date.',
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
            <span class="text-white">Inguinal Hernia Surgery Steps</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Procedure Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Inguinal Hernia Surgery Step by Step: <br class="hidden md:inline"><span class="text-accent">From Admission to Discharge</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar of Billroth Hospitals</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>November 28, 2026</span>
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

                    <img src="<?= $base_path ?>assets/images/inguinal-hernia-surgery-step-by-step.png" alt="Inguinal Hernia Surgery Step by Step: From Admission to Discharge" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: Inguinal Hernia Surgery Step by Step</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>Inguinal hernia surgery follows eight steps:</strong> examination and plan, pre-op checks, admission, anesthesia, the repair, recovery room, discharge, and home recovery. The NHS says the operation usually takes 30 to 90 minutes and most people go home the same day.
                        </p>
                    </div>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">The Whole Journey in One View</h2>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        Inguinal hernia surgery repairs a gap in the groin where tissue has pushed through the abdominal wall. The operation itself is short, but it sits inside a longer sequence, from your first examination to your first weeks at home. Knowing each step in advance removes a lot of the anxiety, and helps you ask better questions. The sequence below follows the standard path for a planned repair. Exact timings, fasting instructions and medicines always come from your own surgical team.
                    </p>

                    <ol class="list-none p-0 m-0 mb-10">
                    <li class="relative pl-14 pb-8 border-l-2 border-brand-100 ml-4 last:border-transparent last:pb-0">
                        <span class="absolute -left-4 top-0 w-8 h-8 rounded-full bg-brand-700 text-white text-sm font-bold flex items-center justify-center">1</span>
                        <h3 class="font-bold text-slate-900 text-lg mb-1 mt-0">Consultation and confirming the plan</h3>
                        <p class="text-slate-600 leading-relaxed m-0">An examination, standing and while coughing, confirms the hernia. A scan is added only if the picture is unclear. You and the surgeon agree on the repair approach: open, laparoscopic (keyhole) or robotic. See <a href="<?= $base_path ?>blog/open-vs-laparoscopic-vs-robotic-hernia-surgery" class="text-brand-700 font-semibold hover:underline">open vs laparoscopic vs robotic hernia surgery</a> for how that choice is made.</p>
                    </li>
                    <li class="relative pl-14 pb-8 border-l-2 border-brand-100 ml-4 last:border-transparent last:pb-0">
                        <span class="absolute -left-4 top-0 w-8 h-8 rounded-full bg-brand-700 text-white text-sm font-bold flex items-center justify-center">2</span>
                        <h3 class="font-bold text-slate-900 text-lg mb-1 mt-0">Pre-operative checks</h3>
                        <p class="text-slate-600 leading-relaxed m-0">Expect a review of your medical history and current medicines, and usually some blood tests to check you are fit for the anesthetic. The team tells you when to stop eating and drinking, and which medicines to continue or pause. Follow those instructions exactly, since the safe timings depend on you and the type of anesthetic.</p>
                    </li>
                    <li class="relative pl-14 pb-8 border-l-2 border-brand-100 ml-4 last:border-transparent last:pb-0">
                        <span class="absolute -left-4 top-0 w-8 h-8 rounded-full bg-brand-700 text-white text-sm font-bold flex items-center justify-center">3</span>
                        <h3 class="font-bold text-slate-900 text-lg mb-1 mt-0">Admission</h3>
                        <p class="text-slate-600 leading-relaxed m-0">You check in, and your details, consent and instructions are confirmed. A nurse checks your vital signs, and the anesthesiologist, the doctor who gives and manages your anesthesia, meets you. This is the moment to ask any last questions.</p>
                    </li>
                    <li class="relative pl-14 pb-8 border-l-2 border-brand-100 ml-4 last:border-transparent last:pb-0">
                        <span class="absolute -left-4 top-0 w-8 h-8 rounded-full bg-brand-700 text-white text-sm font-bold flex items-center justify-center">4</span>
                        <h3 class="font-bold text-slate-900 text-lg mb-1 mt-0">Anesthesia</h3>
                        <p class="text-slate-600 leading-relaxed m-0">The NHS describes a general anesthetic (you are asleep) or a local anesthetic (you are awake but numb), chosen by the hernia location and size and your health. NIDDK adds that open repair most often uses local anesthesia with a sedative, while laparoscopic repair typically uses general anesthesia, and a spinal block is sometimes used.</p>
                    </li>
                    <li class="relative pl-14 pb-8 border-l-2 border-brand-100 ml-4 last:border-transparent last:pb-0">
                        <span class="absolute -left-4 top-0 w-8 h-8 rounded-full bg-brand-700 text-white text-sm font-bold flex items-center justify-center">5</span>
                        <h3 class="font-bold text-slate-900 text-lg mb-1 mt-0">The operation</h3>
                        <p class="text-slate-600 leading-relaxed m-0">The surgeon returns the bulging tissue to the abdomen and strengthens the weak spot. The NHS says the operation usually takes 30 to 90 minutes, and that a thin sheet of mesh is usually placed over the hernia, although sometimes stitches alone are used. Open repair uses one cut in the groin. Laparoscopic and robotic repair use several small cuts and a camera.</p>
                    </li>
                    <li class="relative pl-14 pb-8 border-l-2 border-brand-100 ml-4 last:border-transparent last:pb-0">
                        <span class="absolute -left-4 top-0 w-8 h-8 rounded-full bg-brand-700 text-white text-sm font-bold flex items-center justify-center">6</span>
                        <h3 class="font-bold text-slate-900 text-lg mb-1 mt-0">Recovery room</h3>
                        <p class="text-slate-600 leading-relaxed m-0">You wake up under observation. Staff monitor your breathing, pain, nausea and wound, and give pain relief. The surgeon or team must be satisfied with your recovery before you leave, and your care instructions are explained to you or a family member.</p>
                    </li>
                    <li class="relative pl-14 pb-8 border-l-2 border-brand-100 ml-4 last:border-transparent last:pb-0">
                        <span class="absolute -left-4 top-0 w-8 h-8 rounded-full bg-brand-700 text-white text-sm font-bold flex items-center justify-center">7</span>
                        <h3 class="font-bold text-slate-900 text-lg mb-1 mt-0">Discharge</h3>
                        <p class="text-slate-600 leading-relaxed m-0">The NHS says you can usually go home the same day, though some people stay longer depending on the repair and their health. You leave with written wound-care instructions, pain medicines and a follow-up plan. Arrange for someone to take you home, since you should not drive yourself after the operation.</p>
                    </li>
                    <li class="relative pl-14 pb-8 border-l-2 border-brand-100 ml-4 last:border-transparent last:pb-0">
                        <span class="absolute -left-4 top-0 w-8 h-8 rounded-full bg-brand-700 text-white text-sm font-bold flex items-center justify-center">8</span>
                        <h3 class="font-bold text-slate-900 text-lg mb-1 mt-0">The first days and weeks at home</h3>
                        <p class="text-slate-600 leading-relaxed m-0">Expect some wound bleeding for a couple of days, pain for a few days, and bruising or swelling for about two weeks, plus bloating or shoulder pain after keyhole surgery, according to the NHS. The NHS advises avoiding heavy lifting for at least four to six weeks. Our <a href="<?= $base_path ?>blog/hernia-surgery-recovery-week-by-week" class="text-brand-700 font-semibold hover:underline">week-by-week recovery guide</a> covers the timeline in detail.</p>
                    </li>
                    </ol>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What Changes From Patient to Patient</h2>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        Not every admission looks identical. A few things shape your own route.
                    </p>

                    <ul class="list-none p-0 m-0 mb-8 space-y-3">
                        <li class="flex items-start gap-3 text-slate-600 leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-2.5 shrink-0"></span><span><strong>The approach.</strong> Open, laparoscopic and robotic repair differ in how many cuts are made and which anesthetic is typical. Dr. Kumar offers laparoscopic, robotic and advanced techniques such as <a href="<?= $base_path ?>treatment/etep-technique-expert-in-chennai" class="text-brand-700 font-semibold hover:underline">eTEP repair</a> at Billroth Hospitals, Chennai.</span></li>
                        <li class="flex items-start gap-3 text-slate-600 leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-2.5 shrink-0"></span><span><strong>Your health.</strong> Heart, lung, diabetes or blood-thinner issues can change the anesthetic choice and the preparation. Tell the team everything.</span></li>
                        <li class="flex items-start gap-3 text-slate-600 leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-2.5 shrink-0"></span><span><strong>One side or both.</strong> A hernia on each side may be repaired in the same operation, which affects the plan.</span></li>
                        <li class="flex items-start gap-3 text-slate-600 leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-2.5 shrink-0"></span><span><strong>Mesh or stitches.</strong> Mesh is common, and our post on <a href="<?= $base_path ?>blog/hernia-mesh-types-and-safety" class="text-brand-700 font-semibold hover:underline">hernia mesh types and safety</a> answers the usual worries.</span></li>
                    </ul>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Questions Worth Asking Before the Day</h2>

                    <ul class="list-none p-6 m-0 mb-8 space-y-3 bg-slate-50 border border-slate-200 rounded-2xl">
                        <li class="flex items-start gap-3 text-slate-700 leading-relaxed"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Which repair approach do you recommend for me, and why?</span></li>
                        <li class="flex items-start gap-3 text-slate-700 leading-relaxed"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Which anesthetic will I have?</span></li>
                        <li class="flex items-start gap-3 text-slate-700 leading-relaxed"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Which of my regular medicines should I take or pause, and when do I stop eating and drinking?</span></li>
                        <li class="flex items-start gap-3 text-slate-700 leading-relaxed"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>How long will I stay in hospital, and who should be with me?</span></li>
                        <li class="flex items-start gap-3 text-slate-700 leading-relaxed"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>What pain relief will I go home with, and what should make me call you?</span></li>
                        <li class="flex items-start gap-3 text-slate-700 leading-relaxed"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>When can I return to work, driving, and exercise?</span></li>
                    </ul>

                    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 rounded-r-2xl mb-8">
                        <p class="font-bold text-amber-900 text-base mb-2">After you are home</p>
                        <p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">
                            Call the hospital promptly after discharge if you have a fever, a wound that is red, hot or leaking, increasing pain or swelling, vomiting, or you cannot pass urine. Anything that feels wrong deserves a phone call, not a wait. For how risk is assessed and kept low, see <a href="<?= $base_path ?>blog/is-hernia-surgery-dangerous" class="text-brand-700 font-semibold hover:underline">is hernia surgery dangerous</a>.
                        </p>
                    </div>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        The NHS notes that complications are uncommon but can include wound infection, a lump or painful bruise at the site, groin pain or numbness lasting more than three months, the hernia returning, and rarely damage to nearby organs or blood vessels, or blood clots. Your surgeon should go through the risks that apply to you before you consent.
                    </p>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        If you are weighing a repair for yourself, the <a href="<?= $base_path ?>my_types/inguinal-hernia-treatment-in-chennai" class="text-brand-700 font-semibold hover:underline">inguinal hernia treatment in Chennai</a> page describes the options in more detail, and a consultation lets you ask the questions above in person.
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
                            This article describes the usual sequence of inguinal hernia surgery and is general medical information. Your own plan, fasting instructions and medicines will come from your surgical team and may differ.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Planning Inguinal Hernia Surgery?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Book a consultation to confirm your hernia, choose between open, keyhole and robotic repair, and walk through your own admission-to-discharge plan with Dr. Kumar.</p>
                        <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition shadow-lg hover:scale-105">
                            Book a Hernia Surgery Consultation
                        </a>
                    </div>
                </div>
            </article>

            <aside class="lg:col-span-4 space-y-8">
                <div class="bg-brand-50 rounded-3xl p-6 border border-brand-100">
                    <h3 class="font-bold text-brand-900 text-base mb-3">The Short Version</h3>
                    <ul class="list-none p-0 m-0 space-y-2.5">
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Eight steps: exam, pre-op checks, admission, anesthesia, repair, recovery room, discharge, home.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>The NHS says the operation usually takes 30 to 90 minutes.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Many people go home the same day.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Avoid heavy lifting for at least four to six weeks.</li>
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
                        <a href="<?= $base_path ?>blog/open-vs-laparoscopic-vs-robotic-hernia-surgery" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Open vs Laparoscopic vs Robotic Hernia Surgery</h4>
                                <span class="text-[11px] text-slate-400">13 October 2026</span>
                            </div>
                        </a>
                        <a href="<?= $base_path ?>blog/hernia-surgery-recovery-week-by-week" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Hernia Surgery Recovery, Week by Week</h4>
                                <span class="text-[11px] text-slate-400">9 September 2026</span>
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

$howto_schema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'HowTo',
    '@id'         => $page_url . '#howto',
    'name'        => 'What Happens During Inguinal Hernia Surgery',
    'description' => 'The standard sequence of a planned inguinal hernia repair, from consultation to the first weeks at home.',
    'step' => [
        ['@type' => 'HowToStep', 'name' => 'Consultation and plan', 'text' => 'An examination confirms the hernia, a scan is added only if unclear, and the repair approach (open, laparoscopic or robotic) is agreed.'],
        ['@type' => 'HowToStep', 'name' => 'Pre-operative checks', 'text' => 'Review of medical history and medicines, usually blood tests, and instructions on when to stop eating and drinking.'],
        ['@type' => 'HowToStep', 'name' => 'Admission', 'text' => 'Check-in, consent, vital signs, and a meeting with the anesthesiologist.'],
        ['@type' => 'HowToStep', 'name' => 'Anesthesia', 'text' => 'General anesthesia or local anesthesia, chosen by the hernia, the approach and your health.'],
        ['@type' => 'HowToStep', 'name' => 'The operation', 'text' => 'The tissue is returned to the abdomen and the weak spot is strengthened, usually with mesh, in about 30 to 90 minutes.'],
        ['@type' => 'HowToStep', 'name' => 'Recovery room', 'text' => 'Observation while you wake up, with monitoring of breathing, pain, nausea and the wound.'],
        ['@type' => 'HowToStep', 'name' => 'Discharge', 'text' => 'Most people go home the same day with wound-care instructions, pain medicines and a follow-up plan.'],
        ['@type' => 'HowToStep', 'name' => 'Recovery at home', 'text' => 'Some bruising and swelling for about two weeks, and no heavy lifting for at least four to six weeks.'],
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
