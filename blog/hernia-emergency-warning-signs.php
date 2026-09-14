<?php
require_once __DIR__ . '/../includes/config.php';

$page_title       = 'Hernia Emergency Warning Signs: When to Go to the ER';
$page_description = 'Know the hernia emergency warning signs that mean go to the ER now, how fast a hernia turns dangerous, and what not to do while you wait for help in Chennai.';
$page_keywords    = 'hernia emergency warning signs, when is a hernia an emergency, strangulated hernia symptoms, incarcerated hernia symptoms, hernia pain when to worry, hernia emergency, emergency hernia surgery Chennai, Dr. Kumar Billroth Hospitals';
// PNG rather than the WebP used on the page: some social scrapers still do not
// render WebP previews, and og:image is never downloaded by page visitors.
$page_image       = $site['url'] . 'assets/images/hernia-emergency-warning-signs.png';
$page_published   = '2026-08-28';
$page_modified    = '2026-08-28';

// Set explicitly rather than letting header.php infer it from the URL. This page
// is about the strangulation emergency, which the slug does not contain.
$schema_about = [
    '@type'         => 'MedicalCondition',
    'name'          => 'Strangulated Hernia',
    'description'   => 'A surgical emergency in which trapped hernia tissue loses its blood supply, causing the tissue to die if it is not released quickly.',
    'signOrSymptom' => [
        ['@type' => 'MedicalSignOrSymptom', 'name' => 'Sudden severe pain at the hernia site'],
        ['@type' => 'MedicalSignOrSymptom', 'name' => 'Firm bulge that cannot be pushed back in'],
        ['@type' => 'MedicalSignOrSymptom', 'name' => 'Red, purple or darkened skin over the bulge'],
        ['@type' => 'MedicalSignOrSymptom', 'name' => 'Nausea and vomiting'],
        ['@type' => 'MedicalSignOrSymptom', 'name' => 'Bloated abdomen with no passage of gas or stool'],
        ['@type' => 'MedicalSignOrSymptom', 'name' => 'Fever or rapid heartbeat'],
    ],
    'possibleTreatment' => [
        ['@type' => 'MedicalProcedure', 'name' => 'Emergency Hernia Surgery'],
    ],
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'What are the first signs of a hernia emergency?',
        'a' => 'Sudden severe pain at the bulge, a lump that turns firm and will not push back, and skin that darkens are the earliest emergency signs. Go to hospital immediately.',
    ],
    [
        'q' => 'How quickly can a hernia become dangerous?',
        'a' => 'Strangulation can develop within hours, not days. Once blood supply to trapped bowel is cut off, tissue begins to die quickly, which is why waiting overnight is unsafe.',
    ],
    [
        'q' => 'Can an incarcerated hernia go back in on its own?',
        'a' => 'Sometimes it slips back on its own, but you cannot rely on that. An incarcerated hernia that stays stuck is the stage directly before strangulation, so seek care.',
    ],
    [
        'q' => 'Is hernia pain at night a sign of an emergency?',
        'a' => 'Usually not. Ordinary hernia ache often feels worse by evening after a day on your feet and settles when you lie down. Pain that wakes you and keeps worsening does not.',
    ],
    [
        'q' => 'Should I go to the ER or wait until morning?',
        'a' => 'If the bulge is hard, discolored, or will not reduce, or you are vomiting, go now. Waiting until morning is what turns a keyhole repair into bowel surgery.',
    ],
    [
        'q' => 'Can I push my hernia back in myself?',
        'a' => 'One gentle attempt while lying down is reasonable. Never force it. Repeated pushing can injure trapped bowel and can mask the very symptoms doctors need to assess.',
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
            <span class="text-white">Emergency Warning Signs</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-red-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-red-300 border border-red-500/30">
                Urgent Care Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Hernia Warning Signs: <br class="hidden md:inline"><span class="text-accent">When It Becomes an Emergency</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>August 28, 2026</span>
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

                    <!-- Banner sits first; the emergency box follows directly beneath it. -->
                    <img src="<?= $base_path ?>assets/images/hernia-emergency-warning-signs.webp" alt="Hernia Warning Signs: When It Becomes an Emergency, with Dr. Kumar reviewing a patient's symptoms" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-6 shadow-md">

                    <!-- EMERGENCY BOX: kept compact so it sits fully in view under the banner -->
                    <div class="bg-red-50 border-2 border-red-500 p-5 rounded-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-red-800 font-bold text-base mb-2.5">
                            <svg class="w-6 h-6 text-red-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                            <span>Go to the emergency room now if any of these apply</span>
                        </div>
                        <ul class="list-none p-0 m-0 space-y-1.5 mb-3.5">
                            <li class="flex items-start gap-2 text-slate-800 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-1.5 shrink-0"></span>Sudden, severe pain at the hernia that keeps getting worse</li>
                            <li class="flex items-start gap-2 text-slate-800 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-1.5 shrink-0"></span>The bulge has gone hard and will not push back in</li>
                            <li class="flex items-start gap-2 text-slate-800 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-1.5 shrink-0"></span>Skin over the bulge is red, purple or darkening</li>
                            <li class="flex items-start gap-2 text-slate-800 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-1.5 shrink-0"></span>Nausea or vomiting alongside the pain</li>
                            <li class="flex items-start gap-2 text-slate-800 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-1.5 shrink-0"></span>A bloated abdomen with no gas or stool passing</li>
                            <li class="flex items-start gap-2 text-slate-800 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-1.5 shrink-0"></span>Fever, chills or a racing heartbeat</li>
                        </ul>
                        <p class="text-slate-700 text-xs md:text-sm leading-relaxed m-0 mb-3.5">
                            Do not wait for morning, and do not eat or drink anything on the way. Head to the nearest hospital with a 24 hour emergency department and surgical cover.
                        </p>
                        <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white font-bold text-sm px-5 py-2.5 rounded-full transition shadow-md">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                            Call the 24/7 helpline: <?= $site['phone'] ?>
                        </a>
                    </div>

                    <!-- 1. What turns an ordinary hernia into an emergency -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">What Turns an Ordinary Hernia Into an Emergency</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        A hernia is a gap in the muscle wall of the abdomen or groin that lets fat or a loop of intestine push through. Most of the time that tissue slides in and out freely, and the hernia is uncomfortable rather than dangerous. The <strong>hernia emergency warning signs</strong> that matter all point to one thing: tissue has become trapped in the gap and can no longer slide back.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        That trapped tissue swells. Swelling tightens the grip of the muscle gap around it, which causes more swelling, and the pressure eventually squeezes off the tissue's own blood supply. Without blood, bowel begins to die. That is the emergency, and it is the reason a hernia that has been a mild nuisance for years can turn serious in the space of a single evening.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        The distinction worth knowing is that this happens in two stages, not one. Recognizing the first stage is what gives you time.
                    </p>

                    <!-- 2. The six warning signs -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">The 6 Hernia Emergency Warning Signs</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Ordinary hernia discomfort is a dull ache or a dragging heaviness. It gets worse when you stand, cough or lift, and it usually eases when you lie down. Every sign below is a departure from that pattern, which is exactly what makes it meaningful.
                    </p>

                    <ul class="list-none p-0 space-y-4 mb-8">
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                            <span class="w-7 h-7 rounded-full bg-red-600 text-white text-xs font-bold flex items-center justify-center shrink-0">1</span>
                            <div>
                                <strong class="text-slate-900 block mb-1">Sudden, severe pain that keeps escalating</strong>
                                <span class="text-slate-600 text-sm">Not the familiar ache. This is sharp, constant pain that arrives quickly, does not settle when you lie down, and is worse an hour later than when it started.</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                            <span class="w-7 h-7 rounded-full bg-red-600 text-white text-xs font-bold flex items-center justify-center shrink-0">2</span>
                            <div>
                                <strong class="text-slate-900 block mb-1">A bulge that has gone firm and will not reduce</strong>
                                <span class="text-slate-600 text-sm">If a hernia that always slipped back with gentle pressure now stays out, tender and solid to the touch, the tissue inside it is trapped. This is the single most important sign on the list.</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                            <span class="w-7 h-7 rounded-full bg-red-600 text-white text-xs font-bold flex items-center justify-center shrink-0">3</span>
                            <div>
                                <strong class="text-slate-900 block mb-1">Skin over the bulge turning red, purple or dark</strong>
                                <span class="text-slate-600 text-sm">Color change over the swelling suggests blood flow is already compromised underneath. Treat this as a same-hour emergency rather than something to photograph and monitor.</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                            <span class="w-7 h-7 rounded-full bg-red-600 text-white text-xs font-bold flex items-center justify-center shrink-0">4</span>
                            <div>
                                <strong class="text-slate-900 block mb-1">Nausea and vomiting</strong>
                                <span class="text-slate-600 text-sm">Vomiting alongside hernia pain suggests the trapped loop of intestine is blocked. Food and fluid have nowhere to go, so they come back up.</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                            <span class="w-7 h-7 rounded-full bg-red-600 text-white text-xs font-bold flex items-center justify-center shrink-0">5</span>
                            <div>
                                <strong class="text-slate-900 block mb-1">A swollen abdomen with no gas or stool passing</strong>
                                <span class="text-slate-600 text-sm">Being unable to pass wind is an easily missed sign, and often the clearest one. Combined with a distended, drum-tight abdomen, it points to bowel obstruction.</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                            <span class="w-7 h-7 rounded-full bg-red-600 text-white text-xs font-bold flex items-center justify-center shrink-0">6</span>
                            <div>
                                <strong class="text-slate-900 block mb-1">Fever, chills or a racing heart</strong>
                                <span class="text-slate-600 text-sm">These are late signs. They suggest tissue is already dying and the body is reacting to it. Anyone with fever plus hernia pain needs a hospital now, not a clinic appointment.</span>
                            </div>
                        </li>
                    </ul>

                    <!-- 3. Incarcerated vs strangulated -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Incarcerated or Strangulated: How to Tell the Difference</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        These two words get used interchangeably, and they should not be. An <strong>incarcerated</strong> hernia is stuck: the tissue cannot be pushed back, but blood is still reaching it. A <strong>strangulated</strong> hernia is stuck and starved: the blood supply has been cut off and the tissue is dying.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Strangulation almost always begins as incarceration. That sequence is the most useful thing on this page, because incarceration is the stage where you still have a window to act with a normal operation ahead of you rather than a complicated one.
                    </p>

                    <div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm">
                        <table class="w-full text-slate-700 text-sm">
                            <thead>
                                <tr class="bg-brand-900 text-white">
                                    <th class="px-5 py-3.5 text-left font-semibold">Sign</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">Incarcerated (stuck)</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">Strangulated (blood supply cut off)</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Pain</td>
                                    <td class="px-5 py-3.5">Persistent ache and tenderness</td>
                                    <td class="px-5 py-3.5 text-red-700 font-semibold">Severe, constant, rapidly worsening</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">The bulge</td>
                                    <td class="px-5 py-3.5">Will not push back in</td>
                                    <td class="px-5 py-3.5 text-red-700 font-semibold">Hard, exquisitely tender, will not push back</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Skin color</td>
                                    <td class="px-5 py-3.5">Usually normal</td>
                                    <td class="px-5 py-3.5 text-red-700 font-semibold">Red, purple or darkened</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Gut symptoms</td>
                                    <td class="px-5 py-3.5">May have nausea or constipation</td>
                                    <td class="px-5 py-3.5 text-red-700 font-semibold">Vomiting, no gas or stool, bloating</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Whole-body signs</td>
                                    <td class="px-5 py-3.5">Usually none</td>
                                    <td class="px-5 py-3.5 text-red-700 font-semibold">Fever, fast pulse, feeling very unwell</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">What to do</td>
                                    <td class="px-5 py-3.5 font-semibold">Same-day hospital assessment</td>
                                    <td class="px-5 py-3.5 text-red-700 font-bold">Emergency room immediately</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        You are not expected to make this diagnosis at home. The practical rule is simpler: a hernia that will not go back in needs a doctor today, whichever column it sits in. Our detailed guide to <a href="<?= $base_path ?>my_types/strangulated-hernia-surgery-in-chennai" class="text-brand-700 font-semibold hover:underline">strangulated hernia surgery</a> covers what the operation itself involves.
                    </p>

                    <!-- 4. How fast -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">How Fast a Hernia Becomes Dangerous</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        This is where most people misjudge the situation. The timeline for strangulation is measured in hours, not days. A hernia that first became painful after dinner can be a genuine surgical emergency well before sunrise.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Once blood flow to trapped bowel is choked off, that segment of intestine begins to die. The longer it stays without circulation, the greater the chance that the surgeon has to remove the damaged section rather than simply release it and repair the gap. Left long enough, dying bowel can perforate and cause infection that spreads through the bloodstream.
                    </p>
                    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 rounded-r-2xl mb-8">
                        <p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">
                            <strong>The point to take away:</strong> the size of the bulge tells you very little about the danger. A small hernia with a tight, narrow opening is more likely to trap bowel than a large one that slides freely. It is the clock, not the size, that decides how this ends. A fuller account of what can go wrong sits in our guide to <a href="<?= $base_path ?>hernia/complications" class="text-brand-700 font-semibold hover:underline">hernia complications</a>.
                        </p>
                    </div>

                    <!-- 5. What to do right now -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What to Do Right Now</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        If you have read this far and recognize your own symptoms, work through these four steps in order.
                    </p>
                    <ol class="list-none p-0 space-y-4 mb-8">
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                            <span class="w-7 h-7 rounded-full bg-brand-700 text-white text-xs font-bold flex items-center justify-center shrink-0">1</span>
                            <div><strong class="text-slate-900 block mb-1">Stop eating and drinking immediately.</strong><span class="text-slate-600 text-sm">If surgery is needed, an empty stomach makes anesthesia safer and may prevent a delay of several hours on arrival.</span></div>
                        </li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                            <span class="w-7 h-7 rounded-full bg-brand-700 text-white text-xs font-bold flex items-center justify-center shrink-0">2</span>
                            <div><strong class="text-slate-900 block mb-1">Call ahead while you are getting ready.</strong><span class="text-slate-600 text-sm">A call lets the hospital prepare. Our <a href="<?= $base_path ?>emergency-hernia-care" class="text-brand-700 font-semibold hover:underline">emergency hernia care helpline</a> is answered around the clock.</span></div>
                        </li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                            <span class="w-7 h-7 rounded-full bg-brand-700 text-white text-xs font-bold flex items-center justify-center shrink-0">3</span>
                            <div><strong class="text-slate-900 block mb-1">Get someone else to take you.</strong><span class="text-slate-600 text-sm">Do not drive yourself. Severe pain and possible vomiting make driving unsafe, and you may be admitted straight from triage.</span></div>
                        </li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                            <span class="w-7 h-7 rounded-full bg-brand-700 text-white text-xs font-bold flex items-center justify-center shrink-0">4</span>
                            <div><strong class="text-slate-900 block mb-1">Say the right words at triage.</strong><span class="text-slate-600 text-sm">Lead with: "I have a hernia that will not go back in, and the pain is severe." Add when it started, whether you have vomited, and when you last passed gas. That sentence moves you up the queue.</span></div>
                        </li>
                    </ol>

                    <!-- 6. What not to do -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What Not to Do While You Wait</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        The hour between realizing something is wrong and reaching hospital is where avoidable harm happens. Four things to avoid:
                    </p>
                    <ul class="list-none p-0 space-y-3 mb-8">
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-red-100 text-red-700 text-sm font-bold flex items-center justify-center shrink-0">&times;</span><span class="text-slate-600 text-sm md:text-base"><strong class="text-slate-900">Do not keep forcing the bulge back in.</strong> One gentle attempt lying flat is reasonable. Repeated forceful pushing can damage the trapped bowel, and in rare cases can push dead tissue back inside the abdomen where it does more harm unseen.</span></li>
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-red-100 text-red-700 text-sm font-bold flex items-center justify-center shrink-0">&times;</span><span class="text-slate-600 text-sm md:text-base"><strong class="text-slate-900">Do not eat or drink to settle your stomach.</strong> It will not help a blocked bowel, and it can delay an urgently needed operation.</span></li>
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-red-100 text-red-700 text-sm font-bold flex items-center justify-center shrink-0">&times;</span><span class="text-slate-600 text-sm md:text-base"><strong class="text-slate-900">Do not take strong painkillers to see if it settles.</strong> Masking the pain hides the one signal that tells you and the surgical team how fast this is progressing.</span></li>
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-red-100 text-red-700 text-sm font-bold flex items-center justify-center shrink-0">&times;</span><span class="text-slate-600 text-sm md:text-base"><strong class="text-slate-900">Do not apply a hot compress or wait until the clinic opens.</strong> Heat does nothing for trapped tissue, and every hour of waiting narrows the surgical options.</span></li>
                    </ul>

                    <!-- 7. Serious but not an emergency -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">When It Is Serious but Not a 2am Emergency</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Not every worrying hernia needs an ambulance, and it helps to know which situations do not. Book a specialist appointment within the next few days, rather than heading to hospital tonight, if your hernia is getting steadily larger, aches more than it used to, takes more effort to push back at the end of the day but still goes back, or causes a dragging discomfort after standing or lifting.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        These are signs a hernia is progressing, not signs it is strangulating. They are the right moment to arrange a planned repair, which is a very different experience from an emergency one.
                    </p>

                    <!-- 8. Why emergency repair is harder -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Why an Emergency Repair Is Harder Than a Planned One</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        A planned hernia repair is a controlled operation. The patient is optimized beforehand, blood sugar and blood pressure are under control, the surgeon works through keyhole incisions, mesh reinforces the defect, and most people go home the same day.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        An emergency repair on a strangulated hernia is a different operation with the same name. The surgeon is working on inflamed tissue, often through a larger incision, sometimes at night, and has to judge whether the trapped bowel is still viable. If it is not, that segment has to be removed and the two healthy ends rejoined. Contaminated tissue may also rule out using mesh at that sitting, which raises the chance of the hernia coming back later.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        This is the honest reason surgeons press patients not to postpone a symptomatic hernia. <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-brand-700 font-semibold hover:underline">Dr. Kumar</a>, who leads the hernia and abdominal wall reconstruction service at Billroth Hospitals in Chennai with 29 years of practice and more than 10,000 hernia repairs behind him, sees both versions of this operation. The difference between them is usually decided by how quickly the patient came in.
                    </p>

                    <!-- 9. FAQ -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-12 mb-6 border-b border-slate-100 pb-3">Frequently Asked Questions</h2>
                    <div class="space-y-4 mb-10" id="faqAccordion">
                        <?php foreach ($faqs as $i => $faq): ?>
                        <div class="faq-item bg-slate-50 rounded-2xl border border-slate-200 p-6">
                            <h3 class="font-bold text-slate-900 text-lg mb-2">Q<?= $i + 1 ?>: <?= htmlspecialchars($faq['q'], ENT_QUOTES, 'UTF-8') ?></h3>
                            <p class="text-slate-600 text-sm md:text-base leading-relaxed m-0"><?= htmlspecialchars($faq['a'], ENT_QUOTES, 'UTF-8') ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- 10. Closing note + CTA -->
                    <div class="bg-slate-100 border border-slate-200 rounded-2xl p-6 mb-8">
                        <p class="text-slate-600 text-sm leading-relaxed m-0">
                            This article is general medical information, not a diagnosis. If you are worried about your own symptoms right now, act on the emergency box at the top of this page and let a doctor examine you in person.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Not an Emergency, but Ready to Get It Repaired?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">If your hernia still reduces but is growing or aching more, this is the right time to plan a keyhole repair rather than wait for one at 2am.</p>
                        <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition shadow-lg hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            Book a Hernia Consultation
                        </a>
                    </div>
                </div>
            </article>

            <!-- Right Column: Sidebar -->
            <aside class="lg:col-span-4 space-y-8">
                <!-- Emergency Card -->
                <div class="bg-red-600 text-white rounded-3xl p-6 shadow-lg">
                    <h3 class="font-bold text-lg mb-2">Hernia Emergency?</h3>
                    <p class="text-red-100 text-xs leading-relaxed mb-4">If the bulge is hard, discolored, or you are vomiting, do not wait. Call now or go to the nearest emergency department.</p>
                    <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center justify-center w-full gap-2 bg-white text-red-700 font-bold text-sm py-3 rounded-xl hover:bg-red-50 transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                        <?= $site['phone'] ?>
                    </a>
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

                <!-- Related Articles Card -->
                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                    <h3 class="font-bold text-slate-900 text-base mb-4 border-b border-slate-100 pb-2">Related Articles</h3>
                    <div class="space-y-4">
                        <a href="<?= $base_path ?>blog/do-i-need-hernia-surgery" class="flex gap-3 group">
                            <img src="<?= $base_path ?>assets/images/do-i-need-hernia-surgery.jpg" alt="Do I Need Hernia Surgery?" width="64" height="64" class="w-16 h-16 rounded-xl object-cover shrink-0" loading="lazy">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Do I Need Hernia Surgery? A Surgeon's Honest Answer</h4>
                                <span class="text-[11px] text-slate-400">17 August 2026</span>
                            </div>
                        </a>
                        <a href="<?= $base_path ?>blog/is-hernia-surgery-dangerous" class="flex gap-3 group">
                            <img src="<?= $base_path ?>assets/images/is-hernia-surgery-dangerous.jpg" alt="Is Hernia Surgery Dangerous?" width="64" height="64" class="w-16 h-16 rounded-xl object-cover shrink-0" loading="lazy">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Is Hernia Surgery Dangerous?</h4>
                                <span class="text-[11px] text-slate-400">14 July 2026</span>
                            </div>
                        </a>
                        <a href="<?= $base_path ?>blog/can-hernia-come-back-after-surgery" class="flex gap-3 group">
                            <img src="<?= $base_path ?>assets/images/hernia-come-back-after-surgery.jpg" alt="Can a Hernia Come Back After Surgery?" width="64" height="64" class="w-16 h-16 rounded-xl object-cover shrink-0" loading="lazy">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Can a Hernia Come Back After Surgery?</h4>
                                <span class="text-[11px] text-slate-400">28 July 2026</span>
                            </div>
                        </a>
                    </div>
                </div>
            </aside>

        </div>
    </div>
</section>

<?php
// FAQPage and EmergencyService schema. The FAQ nodes are generated from the same
// $faqs array rendered above so the markup and the visible text cannot disagree.
// MedicalWebPage, BreadcrumbList and the MedicalCondition ("about") node are
// emitted by header.php already.
$page_schema = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
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
        ],
        [
            '@type'       => 'EmergencyService',
            '@id'         => $page_url . '#emergency',
            'name'        => 'Emergency Hernia Care, Dr. Kumar at Billroth Hospitals',
            'description' => 'Round-the-clock assessment and emergency surgery for incarcerated and strangulated hernias in Chennai.',
            'telephone'   => $site['phone'],
            'url'         => rtrim($site['url'], '/') . '/emergency-hernia-care',
            'areaServed'  => ['@type' => 'City', 'name' => 'Chennai'],
            'address'     => [
                '@type'           => 'PostalAddress',
                'streetAddress'   => $site['clinic']['street'],
                'addressLocality' => $site['clinic']['locality'],
                'addressRegion'   => $site['clinic']['region'],
                'postalCode'      => $site['clinic']['postal'],
                'addressCountry'  => $site['clinic']['country'],
            ],
            'availableService' => [
                '@type' => 'MedicalProcedure',
                'name'  => 'Emergency Hernia Surgery',
            ],
        ],
    ],
];
?>
<script type="application/ld+json">
<?= json_encode($page_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>

</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
