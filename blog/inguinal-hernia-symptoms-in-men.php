<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2026-11-03');

$page_title       = 'Inguinal Hernia Symptoms in Men: 9 Early Signs to Know';
$page_description = 'Inguinal hernia symptoms in men, from a first groin bulge to aching and heaviness. Nine early signs, red flags that need urgent care, and what to do next.';
$page_keywords    = 'inguinal hernia symptoms in men, early signs of inguinal hernia, groin bulge in men, inguinal hernia pain, how to know if you have an inguinal hernia';
$page_image       = $site['url'] . 'assets/images/inguinal-hernia-symptoms-in-men.png';
$page_published   = '2026-11-03';
$page_modified    = '2026-11-03';

$schema_about = [
    '@type'       => 'MedicalCondition',
    'name'        => 'Inguinal Hernia in Men',
    'description' => 'A bulge or weakness at the groin where abdominal tissue pushes through the inguinal canal. In men it commonly shows as a groin or scrotal bulge that appears on standing, coughing or straining, with aching, burning or heaviness.',
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'What are the first signs of an inguinal hernia in a man?',
        'a' => 'Usually a soft bulge in the groin that appears when standing, coughing or straining, sometimes with aching, burning or heaviness. It often shrinks or disappears when lying down.',
    ],
    [
        'q' => 'Can an inguinal hernia be painless?',
        'a' => 'Yes. Many are painless early on, and large hernias may not hurt at all. Pain is not required for a hernia to exist, so any new groin lump deserves an exam.',
    ],
    [
        'q' => 'Can I check myself for an inguinal hernia?',
        'a' => 'You can stand, cough and look or feel for a groin bulge, but this cannot confirm a hernia. Other conditions look similar, so a doctor\'s examination is the reliable way.',
    ],
    [
        'q' => 'Can an inguinal hernia cause swelling in the scrotum?',
        'a' => 'Yes. A larger inguinal hernia can extend into the scrotum and make one side swollen or heavy. Sudden severe testicular pain, however, is a separate emergency needing same-day care.',
    ],
    [
        'q' => 'Will an inguinal hernia go away on its own?',
        'a' => 'No. The gap in the muscle wall does not heal itself. Some men with minimal symptoms can safely watch and wait under medical advice, but most eventually need repair.',
    ],
    [
        'q' => 'When does an inguinal hernia become an emergency?',
        'a' => 'When the bulge turns hard, red or dark, will not go back in, or comes with severe pain, vomiting or fever. These can mean trapped or strangulated tissue.',
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
            <span class="text-white">Inguinal Hernia Symptoms</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Symptoms Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Inguinal Hernia Symptoms in Men: <br class="hidden md:inline"><span class="text-accent">9 Early Signs You Should Not Ignore</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar of Billroth Hospitals</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>November 3, 2026</span>
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

                    <img src="<?= $base_path ?>assets/images/inguinal-hernia-symptoms-in-men.png" alt="Inguinal Hernia Symptoms in Men: 9 Early Signs You Should Not Ignore" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: Inguinal Hernia Symptoms in Men</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>The earliest sign is a bulge in the groin</strong> that shows when you stand, cough or strain and often settles when you lie down. Aching, burning or heaviness may come with it, but some hernias cause no pain at all. A groin lump should always be examined.
                        </p>
                    </div>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">What an Inguinal Hernia Is, and Why Men Get It</h2>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        An inguinal hernia happens when fat or a loop of intestine pushes through a weak spot in the lower abdominal wall, at the groin. The weak spot is the inguinal canal, a small passage that the testicles travel through before birth. Because that passage exists in men, they are far more likely to develop this type of hernia. The US National Institute of Diabetes and Digestive and Kidney Diseases (NIDDK) reports that about 27 percent of men, compared with 3 percent of women, develop one at some point in their lives.
                    </p>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        The tricky part is that inguinal hernia symptoms in men often begin quietly. Many men notice something small and odd, then dismiss it as a pulled muscle for months. Below are nine early signs, roughly in the order men tend to notice them, followed by the signs that mean you should not wait.
                    </p>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Nine Early Signs of an Inguinal Hernia in Men</h2>

                    <div class="grid md:grid-cols-2 gap-4 mb-8">
                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">
                        <div class="flex items-center gap-3 mb-2"><span class="w-8 h-8 rounded-full bg-brand-700 text-white text-sm font-bold flex items-center justify-center shrink-0">1</span><h3 class="font-bold text-slate-900 text-base m-0">A bulge in the groin</h3></div>
                        <p class="text-slate-600 text-sm leading-relaxed m-0">The classic sign. It sits where the thigh meets the lower belly, usually on one side, and can start as a small soft lump.</p>
                    </div>
                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">
                        <div class="flex items-center gap-3 mb-2"><span class="w-8 h-8 rounded-full bg-brand-700 text-white text-sm font-bold flex items-center justify-center shrink-0">2</span><h3 class="font-bold text-slate-900 text-base m-0">A bulge that comes and goes</h3></div>
                        <p class="text-slate-600 text-sm leading-relaxed m-0">It appears when you stand, cough, lift or strain, and often settles when you lie down. This is the pattern of a reducible hernia.</p>
                    </div>
                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">
                        <div class="flex items-center gap-3 mb-2"><span class="w-8 h-8 rounded-full bg-brand-700 text-white text-sm font-bold flex items-center justify-center shrink-0">3</span><h3 class="font-bold text-slate-900 text-base m-0">A dull ache or burning</h3></div>
                        <p class="text-slate-600 text-sm leading-relaxed m-0">A mild, nagging ache or a burning feeling at the bulge, often worse at the end of the day.</p>
                    </div>
                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">
                        <div class="flex items-center gap-3 mb-2"><span class="w-8 h-8 rounded-full bg-brand-700 text-white text-sm font-bold flex items-center justify-center shrink-0">4</span><h3 class="font-bold text-slate-900 text-base m-0">Heaviness or a dragging feeling</h3></div>
                        <p class="text-slate-600 text-sm leading-relaxed m-0">A sense of weight or pulling in the groin. The NHS also describes a heavy, dragging feeling in the leg with groin hernias.</p>
                    </div>
                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">
                        <div class="flex items-center gap-3 mb-2"><span class="w-8 h-8 rounded-full bg-brand-700 text-white text-sm font-bold flex items-center justify-center shrink-0">5</span><h3 class="font-bold text-slate-900 text-base m-0">Pain with lifting or long standing</h3></div>
                        <p class="text-slate-600 text-sm leading-relaxed m-0">Discomfort that builds during effort or after hours on your feet and eases with rest.</p>
                    </div>
                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">
                        <div class="flex items-center gap-3 mb-2"><span class="w-8 h-8 rounded-full bg-brand-700 text-white text-sm font-bold flex items-center justify-center shrink-0">6</span><h3 class="font-bold text-slate-900 text-base m-0">Swelling in the scrotum</h3></div>
                        <p class="text-slate-600 text-sm leading-relaxed m-0">A larger hernia can travel down into the scrotum and make one side look swollen or heavy.</p>
                    </div>
                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">
                        <div class="flex items-center gap-3 mb-2"><span class="w-8 h-8 rounded-full bg-brand-700 text-white text-sm font-bold flex items-center justify-center shrink-0">7</span><h3 class="font-bold text-slate-900 text-base m-0">Tight, stretched skin over the lump</h3></div>
                        <p class="text-slate-600 text-sm leading-relaxed m-0">The NHS lists skin that looks tight or stretched over a hernia bulge as a possible sign.</p>
                    </div>
                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">
                        <div class="flex items-center gap-3 mb-2"><span class="w-8 h-8 rounded-full bg-brand-700 text-white text-sm font-bold flex items-center justify-center shrink-0">8</span><h3 class="font-bold text-slate-900 text-base m-0">A weak or pressured feeling</h3></div>
                        <p class="text-slate-600 text-sm leading-relaxed m-0">Some men describe a vague sense of weakness in the groin during exercise, without a clear lump.</p>
                    </div>
                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">
                        <div class="flex items-center gap-3 mb-2"><span class="w-8 h-8 rounded-full bg-brand-700 text-white text-sm font-bold flex items-center justify-center shrink-0">9</span><h3 class="font-bold text-slate-900 text-base m-0">No pain at all</h3></div>
                        <p class="text-slate-600 text-sm leading-relaxed m-0">Many hernias are painless at first, and the NHS notes that large hernias may not hurt. Painless does not mean harmless.</p>
                    </div>
                    </div>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        These signs overlap with other groin problems, so a list cannot tell you what you have. The groin has several look-alikes, from muscle strains to fluid-filled swellings, and only an examination can confirm a hernia.
                    </p>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Why the Signs Come and Go</h2>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        Standing, coughing and straining raise pressure inside the abdomen, and that pushes tissue into the weak spot. Lying down removes the pressure, so the lump can slip back and the discomfort fades. That is why many men feel fine in the morning and notice the bulge by evening. If your day involves long hours on your feet, riding a two-wheeler through traffic, or carrying loads, it helps to note whether the lump shows up after those hours.
                    </p>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        A lump that vanishes is not a sign of healing. The gap in the muscle wall stays. NIDDK notes that an inguinal hernia does not repair itself, and that men with few or no symptoms may safely delay surgery, but about 70 percent develop new or worsening symptoms and need surgery within five years. If you want to understand where you sit on that spectrum, read <a href="<?= $base_path ?>blog/do-i-need-hernia-surgery" class="text-brand-700 font-semibold hover:underline">how to decide whether you need hernia surgery</a>.
                    </p>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Who Is More Likely to Notice These Signs</h2>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        Anyone with a groin can get an inguinal hernia, but some things raise the odds or bring symptoms forward. NIDDK lists a family history of inguinal hernia, a previous prostate removal operation, and connective tissue disorders among the risk factors, and says researchers are also studying chronic cough, chronic constipation, heavy lifting, and long hours of standing or walking. In adults, risk rises with age.
                    </p>

                    <ul class="list-none p-0 m-0 mb-8 space-y-3">
                        <li class="flex items-start gap-3 text-slate-600 leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-2.5 shrink-0"></span><span><strong>Repeated strain:</strong> a persistent cough, constant straining on the toilet, or heavy lifting at work can push symptoms to the surface.</span></li>
                        <li class="flex items-start gap-3 text-slate-600 leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-2.5 shrink-0"></span><span><strong>Family history:</strong> if a father or brother had a groin hernia, take a new groin lump more seriously.</span></li>
                        <li class="flex items-start gap-3 text-slate-600 leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-2.5 shrink-0"></span><span><strong>Earlier groin or pelvic surgery:</strong> operations in the area can leave the wall less secure. Tell your doctor about any.</span></li>
                    </ul>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        The full list of contributing factors is on our <a href="<?= $base_path ?>hernia/causes" class="text-brand-700 font-semibold hover:underline">what causes a hernia</a> page. None of these factors is a diagnosis, they are simply reasons to pay closer attention to a groin change.
                    </p>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Red Flags: When Not to Wait</h2>

                    <div class="bg-red-50 border-l-4 border-red-600 p-6 rounded-r-2xl mb-8">
                        <p class="font-bold text-red-800 text-base mb-3">Get urgent medical care, today, if you notice any of these</p>
                        <ul class="list-none p-0 m-0 space-y-2">
                            <li class="flex items-start gap-3 text-red-900 text-sm md:text-base leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-2 shrink-0"></span><span>A groin bulge that suddenly becomes larger, or one that will not go back in when you lie down</span></li>
                            <li class="flex items-start gap-3 text-red-900 text-sm md:text-base leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-2 shrink-0"></span><span>Sudden, severe pain or tenderness at the hernia</span></li>
                            <li class="flex items-start gap-3 text-red-900 text-sm md:text-base leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-2 shrink-0"></span><span>A hard, red or dark-colored lump, or a fever</span></li>
                            <li class="flex items-start gap-3 text-red-900 text-sm md:text-base leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-2 shrink-0"></span><span>Nausea, vomiting, a swollen belly, or being unable to pass gas or stool</span></li>
                        </ul>
                    </div>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        These can mean a trapped (incarcerated) or strangulated hernia, where the blood supply to the trapped tissue is at risk. NIDDK describes a strangulated hernia as life-threatening. Our page on <a href="<?= $base_path ?>blog/hernia-emergency-warning-signs" class="text-brand-700 font-semibold hover:underline">hernia emergency warning signs</a> goes through what each one looks like. Sudden severe testicular pain is a separate emergency and should also be seen the same day.
                    </p>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What to Do Next</h2>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        If you have noticed even one of the signs above, book an examination rather than waiting for pain to push you. A doctor reviews your history, then examines you standing and may ask you to cough or strain. If the picture is unclear, an ultrasound, CT or MRI may be used, as NIDDK describes. You can read how this works on our <a href="<?= $base_path ?>hernia/diagnosis" class="text-brand-700 font-semibold hover:underline">hernia diagnosis page</a>, and the full symptom list for all hernia types is on the <a href="<?= $base_path ?>hernia/symptoms" class="text-brand-700 font-semibold hover:underline">hernia symptoms page</a>.
                    </p>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        Before the visit, jot down three things: when you first noticed the lump, what makes it appear, and whether it always goes back in. These notes make the consultation faster and more precise. If an examination confirms an inguinal hernia, Dr. Kumar can explain the options in detail, including keyhole and robotic repair, on the <a href="<?= $base_path ?>my_types/inguinal-hernia-treatment-in-chennai" class="text-brand-700 font-semibold hover:underline">inguinal hernia treatment in Chennai</a> page.
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
                            This article is general medical information and cannot diagnose a hernia. Groin symptoms have several possible causes, and only a qualified examination can tell them apart.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Noticed a Groin Bulge or Ache?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Book a consultation for a proper examination. Dr. Kumar can confirm what it is and explain whether you need to act now or can safely watch.</p>
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
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>The first sign is usually a groin bulge that appears on standing or straining.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>It often vanishes when lying down, but the gap remains.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Pain is optional: many hernias are painless early on.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>A hard, painful, discolored bulge with vomiting is an emergency.</li>
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
                        <a href="<?= $base_path ?>blog/hernia-emergency-warning-signs" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Hernia Emergency Warning Signs</h4>
                                <span class="text-[11px] text-slate-400">28 August 2026</span>
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
