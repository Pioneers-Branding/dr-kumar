<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2026-12-03');

$page_title       = 'Belly Button Pain in Adults: Hernia or Infection Guide';
$page_description = 'Belly button pain in adults can be a hernia, infection or something else. Learn the clues, the red flags that need urgent care, and when to see a surgeon.';
$page_keywords    = 'belly button pain in adults, belly button discharge, navel pain, umbilical hernia or infection, smelly belly button, omphalitis in adults';
$page_image       = $site['url'] . 'assets/images/belly-button-pain-or-discharge-in-adults.png';
$page_published   = '2026-12-03';
$page_modified    = '2026-12-03';

$schema_about = [
    '@type'       => 'MedicalCondition',
    'name'        => 'Umbilical Hernia and Navel Pain in Adults',
    'description' => 'Pain, swelling or discharge at the navel in adults, which may come from an umbilical hernia, a skin or yeast infection, an infected piercing, a urachal cyst or a cause inside the abdomen.',
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'Why does my belly button hurt when I press on it?',
        'a' => 'Tenderness can come from an umbilical hernia, a skin infection, an infected piercing or an irritated area inside the abdomen. A doctor needs to examine it to tell which.',
    ],
    [
        'q' => 'Can an umbilical hernia cause discharge?',
        'a' => 'Not usually. Hernias typically cause a bulge, pressure or pain. Discharge more often points to infection of the skin, a piercing or a cyst, although both problems can occur together.',
    ],
    [
        'q' => 'What causes a smelly belly button in adults?',
        'a' => 'A foul smell with discharge usually means infection, often from bacteria or yeast trapped in a damp fold. Cleaning and drying helps, but persistent smell needs medical review.',
    ],
    [
        'q' => 'When should I worry about belly button pain?',
        'a' => 'Worry if pain is severe, you have vomiting, fever, a hard or discolored lump, or a bulge that will not go back in. Those signs need urgent medical attention.',
    ],
    [
        'q' => 'Is a belly button hernia dangerous in adults?',
        'a' => 'It can be, if bowel becomes trapped and loses its blood supply. Most adult umbilical hernias do not heal alone, which is why surgery is usually recommended.',
    ],
    [
        'q' => 'Can belly button pain go away on its own?',
        'a' => 'Pain from mild irritation may settle, but pain from a hernia or infection usually will not resolve fully without treatment. Persistent or returning pain deserves an examination.',
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
            <span class="text-white">Belly Button Pain</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Symptoms Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Belly Button Pain or Discharge in Adults: <br class="hidden md:inline"><span class="text-accent">Hernia, Infection or Something Else?</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar of Billroth Hospitals</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>December 3, 2026</span>
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

                    <img src="<?= $base_path ?>assets/images/belly-button-pain-or-discharge-in-adults.png" alt="Belly Button Pain or Discharge in Adults: Hernia, Infection or Something Else?" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: What Causes Belly Button Pain in Adults?</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>Often an umbilical hernia or an infection of the navel.</strong> A lump that changes with coughing or lying down suggests a hernia. Redness, discharge or a bad smell suggests infection. Pain with a hard, tender lump, vomiting or fever needs urgent care. Some belly button pain in adults comes from inside the abdomen, so an examination is the only way to be sure.
                        </p>
                    </div>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">First, Look at What the Belly Button Is Actually Doing</h2>
<p class="text-slate-600 leading-relaxed mb-6">
    Belly button pain in adults rarely has one cause, so the most useful first step is to notice what you can see and feel, not only where it hurts. The navel is a scar from birth, a natural weak point in the abdominal wall, and a skin fold that stays warm and damp. Each of those three features leads to a different kind of problem.
</p>
<div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm">
<table class="w-full text-slate-700 text-sm">
<thead><tr class="bg-brand-900 text-white"><th class="px-5 py-3.5 text-left font-semibold">What you notice</th><th class="px-5 py-3.5 text-left font-semibold">What it often points to</th><th class="px-5 py-3.5 text-left font-semibold">What to do</th></tr></thead>
<tbody class="divide-y divide-slate-100">
<tr class="hover:bg-slate-50"><td class="px-5 py-3.5 font-semibold">A soft lump that grows when you cough or strain and shrinks when you lie down</td><td class="px-5 py-3.5">An umbilical hernia</td><td class="px-5 py-3.5">Have it examined; adults usually need repair eventually</td></tr>
<tr class="hover:bg-slate-50"><td class="px-5 py-3.5 font-semibold">Red, warm, tender skin with pus or foul-smelling discharge</td><td class="px-5 py-3.5">A bacterial skin infection of the navel (omphalitis)</td><td class="px-5 py-3.5">See a doctor promptly, especially with fever</td></tr>
<tr class="hover:bg-slate-50"><td class="px-5 py-3.5 font-semibold">Itchy red rash with thick white discharge in the fold</td><td class="px-5 py-3.5">A yeast (Candida) infection</td><td class="px-5 py-3.5">Keep dry; get a doctor to confirm and prescribe an antifungal</td></tr>
<tr class="hover:bg-slate-50"><td class="px-5 py-3.5 font-semibold">Pain, redness or discharge around a piercing</td><td class="px-5 py-3.5">Infected piercing</td><td class="px-5 py-3.5">Do not remove jewelry yourself if swollen; get it checked</td></tr>
<tr class="hover:bg-slate-50"><td class="px-5 py-3.5 font-semibold">Cloudy or bloody fluid, or discharge that keeps returning</td><td class="px-5 py-3.5">Possibly a urachal cyst (a leftover from fetal development) that has become infected</td><td class="px-5 py-3.5">Needs a medical assessment</td></tr>
<tr class="hover:bg-slate-50"><td class="px-5 py-3.5 font-semibold">Pain deep in the abdomen with nausea or fever, and the navel looks normal</td><td class="px-5 py-3.5">A cause inside the abdomen, such as constipation, indigestion, or something more serious</td><td class="px-5 py-3.5">Do not assume it is the navel; seek care if it persists or worsens</td></tr>
</tbody>
</table>
</div>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">When Belly Button Pain Is a Hernia</h2>
<p class="text-slate-600 leading-relaxed mb-6">
    An umbilical hernia forms when tissue, often fat and sometimes a loop of bowel, pushes through a weak spot in the abdominal wall at the navel. The NHS describes it as a lump near the belly button that can get bigger when you cough or strain and shrink when you relax or lie down. In adults it can cause discomfort with coughing or straining, and it is more common in women and in people with raised abdominal pressure from pregnancy or excess weight.
</p>
<p class="text-slate-600 leading-relaxed mb-6">
    The detail many people miss is that a hernia on its own does not normally leak. Pain, a bulge and pressure are hernia symptoms. Discharge points to the skin or something else in the navel, although a hernia and a skin problem can exist together. Adults seldom grow out of an umbilical hernia, and that is why surgery is usually advised once it is symptomatic. If you are weighing up whether to wait, our guide to <a href="<?= $base_path ?>blog/can-umbilical-hernia-be-treated-without-surgery" class="text-brand-700 font-semibold hover:underline">treating an umbilical hernia without surgery</a> explains what is realistic, and the <a href="<?= $base_path ?>my_types/umbilical-hernia-treatment-in-chennai" class="text-brand-700 font-semibold hover:underline">umbilical hernia treatment page</a> describes the repair options.
</p>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">When It Is Infection, Not a Hernia</h2>
<p class="text-slate-600 leading-relaxed mb-6">
    The navel is deep, warm and often damp, which makes it easy for bacteria and yeast to settle in. Yeast thrives when the area is not kept clean and dry, and people with diabetes have a higher risk of Candida infections. That matters in a warm, humid city like Chennai, where sweat collects in the fold through most of the year. If you live with diabetes, a stubborn rash or discharge at the navel deserves attention; our page on <a href="<?= $base_path ?>special-considerations/diabetes" class="text-brand-700 font-semibold hover:underline">hernia and diabetes</a> covers why skin and wound health matter for you.
</p>
<p class="text-slate-600 leading-relaxed mb-6">
    Piercings add another route for bacteria. Discharge that smells bad, or is white, yellow, brown or bloody, usually signals infection. Treatment depends on the cause: an antifungal cream for yeast, an antibiotic for bacterial infection, and drainage or later removal for an infected cyst. Guessing at home with leftover creams often delays the right treatment.
</p>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Red Flags: Do Not Wait for an Appointment</h2>
<div class="bg-red-50 border-l-4 border-red-600 p-6 rounded-r-2xl mb-8">
    <p class="font-bold text-red-800 text-base mb-3 m-0">Get urgent care if the navel area shows any of these:</p>
    <ul class="list-none p-0 m-0 space-y-2"><li class="flex items-start gap-2 text-sm text-red-900"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-2 shrink-0"></span>Very bad belly pain that does not settle, especially with nausea or vomiting</li><li class="flex items-start gap-2 text-sm text-red-900"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-2 shrink-0"></span>A bulge that is suddenly more swollen than usual, hard, or will not go back in</li><li class="flex items-start gap-2 text-sm text-red-900"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-2 shrink-0"></span>Skin over the bulge turning red, dark or purple</li><li class="flex items-start gap-2 text-sm text-red-900"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-2 shrink-0"></span>Discharge together with fever, spreading redness or severe tenderness</li><li class="flex items-start gap-2 text-sm text-red-900"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-2 shrink-0"></span>You cannot keep food down, or you are not passing stool or gas</li></ul>
</div>
<p class="text-slate-600 leading-relaxed mb-6">
    A trapped hernia can cut off blood supply to bowel, which is why these signs matter. Our guide to <a href="<?= $base_path ?>blog/hernia-emergency-warning-signs" class="text-brand-700 font-semibold hover:underline">hernia emergency warning signs</a> lists them in more detail.
</p>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What You Can Safely Do at Home</h2>
<ul class="list-none p-0 m-0 mb-8 space-y-3 bg-slate-50 rounded-2xl border border-slate-200 p-6"><li class="flex items-start gap-3 text-slate-700 text-sm md:text-base"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Wash the navel gently with mild soap and warm water, then dry the fold completely after bathing or swimming.</span></li><li class="flex items-start gap-3 text-slate-700 text-sm md:text-base"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Do not dig inside the navel with cotton buds, nails or sharp objects.</span></li><li class="flex items-start gap-3 text-slate-700 text-sm md:text-base"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Avoid tight waistbands rubbing the area, and change out of sweaty clothes promptly.</span></li><li class="flex items-start gap-3 text-slate-700 text-sm md:text-base"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Do not press hard on a bulge or try to force it back in.</span></li><li class="flex items-start gap-3 text-slate-700 text-sm md:text-base"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Stop lifting heavy loads until you have been examined if you can feel a bulge.</span></li><li class="flex items-start gap-3 text-slate-700 text-sm md:text-base"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Note when it started, whether it changes with lying down, and any fever, so your doctor gets a clear history.</span></li></ul>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What the Examination Involves</h2>
<p class="text-slate-600 leading-relaxed mb-6">
    A doctor usually works out the cause by looking at the navel, feeling it while you lie down and while you cough, and asking about discharge, piercings, diabetes and previous surgery. Imaging such as an ultrasound is used when the picture is unclear, for example to confirm a hernia or look for a cyst. This is the point where the question, hernia or infection, gets a real answer. You can read how a hernia is confirmed on our <a href="<?= $base_path ?>hernia/diagnosis" class="text-brand-700 font-semibold hover:underline">hernia diagnosis page</a>.
</p>
<div class="bg-amber-50 border-l-4 border-amber-500 p-6 rounded-r-2xl mb-8">
    <p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">A practical rule: a lump that comes and goes with position is a hernia question; a red, wet, smelly or painful navel is a skin question; pain with no visible change is an abdominal question. If you are unsure which of the three you have, an examination is quicker than guessing.</p>
</div>

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
                            This article is general medical information and cannot diagnose the cause of your symptoms. Belly button pain with fever, vomiting, a hard bulge or spreading redness needs prompt medical attention.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Belly Button Lump or Pain That Will Not Settle?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">An examination can tell a hernia from an infection and decide what treatment, if any, you need. Do not wait if the area is hard, discolored or very painful.</p>
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
                                                <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>A lump that changes with coughing or lying down suggests a hernia.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Discharge or a bad smell usually points to infection, not a hernia.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Hard, discolored or very painful bulge: seek urgent care.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Keep the navel clean and dry; never dig into it.</li>
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
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Do I Need Hernia Surgery? A Surgeon's Honest Answer</h4>
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
// FAQPage schema.
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
