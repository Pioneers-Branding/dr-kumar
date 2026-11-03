<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2027-01-13');

$page_title       = 'What to Expect at Your First Hernia Consultation';
$page_description = 'What to expect at your first hernia consultation: how the exam works, when a scan is needed, what to bring and the questions to ask your surgeon.';
$page_keywords    = 'first hernia consultation, what to expect hernia doctor visit, hernia examination, questions to ask hernia surgeon, hernia consultation Chennai';
$page_image       = $site['url'] . 'assets/images/first-hernia-consultation-what-to-expect.png';
$page_published   = '2027-01-13';
$page_modified    = '2027-01-13';

$schema_about = [
    '@type'       => 'MedicalProcedure',
    'name'        => 'Hernia Consultation and Examination',
    'description' => 'What happens at a first hernia consultation: history, physical examination, the selective use of imaging, and a discussion of treatment options.',
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'Will I need a scan at my first hernia visit?',
        'a' => 'Not usually. Most hernias are diagnosed by history and examination. A scan, often an ultrasound, is added when the hernia is small, deep, unclear, or when the examination does not settle things.',
    ],
    [
        'q' => 'Is the hernia examination painful?',
        'a' => 'It is usually brief and not painful. The doctor looks and gently feels the area, and may ask you to cough or strain. Tell them if any part is tender.',
    ],
    [
        'q' => 'Should I see a family doctor or a surgeon first?',
        'a' => 'Either works. A family doctor can examine you and refer you on, while a hernia surgeon can confirm the diagnosis and discuss repair options directly. Seeing a surgeon first can save time.',
    ],
    [
        'q' => 'Do I have to decide on surgery during the first visit?',
        'a' => 'No. You can ask questions, take time, or seek a second opinion. Some hernias are repaired promptly, others can be watched, and your surgeon will explain which applies to you.',
    ],
    [
        'q' => 'What should I bring to my hernia consultation?',
        'a' => 'Bring your medicine list, earlier scan reports, past surgery or discharge notes, and any relevant sugar, blood pressure or heart reports. A note of when the bulge appears also helps.',
    ],
    [
        'q' => 'Can I book an online consultation first?',
        'a' => 'A video visit can help with questions and reviewing reports, but a hernia usually needs hands-on examination to confirm. Ask the team what they advise for your situation.',
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
            <span class="text-white">First Hernia Consultation</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Patient Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                What to Expect at Your First Hernia Consultation: <br class="hidden md:inline"><span class="text-accent">Exam, Scans and Questions</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar of Billroth Hospitals</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>January 13, 2027</span>
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

                    <img src="<?= $base_path ?>assets/images/first-hernia-consultation-what-to-expect.png" alt="What to Expect at Your First Hernia Consultation: Exam, Scans and Questions" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: What Happens at a First Hernia Consultation?</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>The surgeon takes your history, examines the area while you stand and lie down, and may ask you to cough or strain.</strong> A scan is added only if the exam is unclear. You then discuss whether repair, watching or another cause fits. Surgery is not automatic, and you can take time to decide.
                        </p>
                    </div>

<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">What Your First Hernia Consultation Is Really For</h2>
<p class="text-slate-600 leading-relaxed mb-6">
A first hernia consultation is a visit where a surgeon listens to your history, examines the bulge or painful area, and tells you what is going on and what your options are. It is not a commitment to surgery. For many people it ends with a clear diagnosis and a plan that may be repair, may be careful watching, or may be reassurance that the problem is something else.
</p>
<p class="text-slate-600 leading-relaxed mb-6">
Knowing the shape of the visit takes most of the worry out of it. Here is what normally happens, what to bring, and what to ask.
</p>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What Happens, Step by Step</h2>
<ol class="list-none p-0 m-0 mb-8 space-y-4">
<li class="flex gap-4 items-start"><span class="shrink-0 w-9 h-9 rounded-full bg-brand-900 text-white font-bold flex items-center justify-center text-sm">1</span><div><p class="font-bold text-slate-900 m-0">A conversation about your symptoms</p><p class="text-slate-600 text-sm md:text-base leading-relaxed m-0 mt-1">The doctor asks when you first noticed the bulge or discomfort, whether it comes and goes, what makes it worse (standing, lifting, coughing) and whether it has been growing. Expect questions on past surgery, other illnesses, your medicines and your work.</p></div></li>
<li class="flex gap-4 items-start"><span class="shrink-0 w-9 h-9 rounded-full bg-brand-900 text-white font-bold flex items-center justify-center text-sm">2</span><div><p class="font-bold text-slate-900 m-0">A physical examination</p><p class="text-slate-600 text-sm md:text-base leading-relaxed m-0 mt-1">For most hernias the examination is what makes the diagnosis. The doctor looks and feels the area, usually while you stand and again lying down, and may ask you to cough or strain, because that makes a hernia more obvious. It is often brief.</p></div></li>
<li class="flex gap-4 items-start"><span class="shrink-0 w-9 h-9 rounded-full bg-brand-900 text-white font-bold flex items-center justify-center text-sm">3</span><div><p class="font-bold text-slate-900 m-0">Deciding whether a scan is needed</p><p class="text-slate-600 text-sm md:text-base leading-relaxed m-0 mt-1">Imaging is not routine. It is mainly used when the examination is unclear, when a hernia is small or deep, or when the picture is more complex. Our page on <a href="<?= $base_path ?>hernia/diagnosis" class="text-brand-700 font-semibold hover:underline">how a hernia is diagnosed</a> explains the tests in more detail.</p></div></li>
<li class="flex gap-4 items-start"><span class="shrink-0 w-9 h-9 rounded-full bg-brand-900 text-white font-bold flex items-center justify-center text-sm">4</span><div><p class="font-bold text-slate-900 m-0">Talking through the options</p><p class="text-slate-600 text-sm md:text-base leading-relaxed m-0 mt-1">You hear whether the hernia needs repair, whether watching is reasonable, which approach suits you, and what the realistic timeline is. This is the time to ask everything.</p></div></li>
</ol>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What to Bring and Prepare</h2>
<div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 mb-8">
<p class="font-bold text-slate-900 mb-3 mt-0">A short checklist:</p>
<ul class="list-none p-0 m-0 space-y-2.5">
<li class="flex items-start gap-3 text-slate-700 text-sm md:text-base"><span class="mt-1 w-5 h-5 shrink-0 rounded border-2 border-brand-600 bg-white"></span><span>A list of every medicine you take, with doses, including supplements and Ayurvedic or herbal products</span></li>
<li class="flex items-start gap-3 text-slate-700 text-sm md:text-base"><span class="mt-1 w-5 h-5 shrink-0 rounded border-2 border-brand-600 bg-white"></span><span>Previous scan reports and films, and any operation or discharge summaries, especially earlier abdominal or groin surgery</span></li>
<li class="flex items-start gap-3 text-slate-700 text-sm md:text-base"><span class="mt-1 w-5 h-5 shrink-0 rounded border-2 border-brand-600 bg-white"></span><span>Your recent blood sugar, blood pressure or heart reports if you have those conditions</span></li>
<li class="flex items-start gap-3 text-slate-700 text-sm md:text-base"><span class="mt-1 w-5 h-5 shrink-0 rounded border-2 border-brand-600 bg-white"></span><span>A note of when the bulge appears and how big it gets; a photo taken when it is at its largest can help if it disappears when you lie down</span></li>
<li class="flex items-start gap-3 text-slate-700 text-sm md:text-base"><span class="mt-1 w-5 h-5 shrink-0 rounded border-2 border-brand-600 bg-white"></span><span>Your questions written down, because most people forget half of them in the room</span></li>
<li class="flex items-start gap-3 text-slate-700 text-sm md:text-base"><span class="mt-1 w-5 h-5 shrink-0 rounded border-2 border-brand-600 bg-white"></span><span>Loose, easy-to-remove clothing, and someone you trust if you would like company</span></li>
</ul>
</div>
<p class="text-slate-600 leading-relaxed mb-6">
Mention smoking or tobacco use of any kind, and weight or blood-thinning medicines, even if they seem unrelated. They affect timing and the safest plan. Our note on <a href="<?= $base_path ?>blog/smoking-and-hernia-surgery" class="text-brand-700 font-semibold hover:underline">smoking and hernia surgery</a> explains why surgeons ask.
</p>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Questions Worth Asking</h2>
<div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm">
<table class="w-full text-slate-700 text-sm">
<thead>
<tr class="bg-brand-900 text-white">
<th class="px-5 py-3.5 text-left font-semibold">About the diagnosis</th>
<th class="px-5 py-3.5 text-left font-semibold">About treatment</th>
<th class="px-5 py-3.5 text-left font-semibold">About living with it</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100">
<tr class="hover:bg-slate-50">
<td class="px-5 py-3.5 font-semibold text-slate-900">What type of hernia is this, and how sure are you?</td>
<td class="px-5 py-3.5">Do I need surgery now, or is watching reasonable?</td>
<td class="px-5 py-3.5">What activities should I avoid until then?</td>
</tr>
<tr class="hover:bg-slate-50">
<td class="px-5 py-3.5 font-semibold text-slate-900">Is a scan needed, and what will it add?</td>
<td class="px-5 py-3.5">Which approach would you suggest, and why?</td>
<td class="px-5 py-3.5">Which symptoms should send me to the emergency room?</td>
</tr>
<tr class="hover:bg-slate-50">
<td class="px-5 py-3.5 font-semibold text-slate-900">Could anything else be causing this?</td>
<td class="px-5 py-3.5">What are the risks for someone with my health?</td>
<td class="px-5 py-3.5">How long will I be off work after repair?</td>
</tr>
</tbody>
</table>
</div>
<p class="text-slate-600 leading-relaxed mb-6">
If you are unsure whether surgery is needed at all, our article on <a href="<?= $base_path ?>blog/do-i-need-hernia-surgery" class="text-brand-700 font-semibold hover:underline">whether you actually need hernia surgery</a> is a useful companion before you go. If the symptoms confuse you, <a href="<?= $base_path ?>blog/hernia-vs-groin-strain-vs-testicular-pain" class="text-brand-700 font-semibold hover:underline">how hernia pain differs from groin strain</a> may help you describe what you feel.
</p>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Things That Surprise First-Time Patients</h2>
<ul class="list-disc pl-6 mb-6 space-y-2 text-slate-600 leading-relaxed">
<li><strong>The bulge may not show up in the clinic.</strong> A hernia that comes and goes can be hidden when you are lying relaxed, so the doctor may examine you standing and ask you to cough or strain. Do not be embarrassed if you are asked to do so.</li>
<li><strong>A normal exam does not always settle it.</strong> Small or deep hernias can be missed on examination alone, particularly in people with more body fat, which is why imaging is sometimes added.</li>
<li><strong>Some hernias are easy to miss.</strong> Hernias in women, for example, can be small and overlooked. Our guide to <a href="<?= $base_path ?>blog/hernia-in-women" class="text-brand-700 font-semibold hover:underline">hernia in women</a> explains why.</li>
<li><strong>You are not obliged to decide that day.</strong> You can take time, or get a <a href="<?= $base_path ?>second-opinion" class="text-brand-700 font-semibold hover:underline">second opinion</a>, before committing to surgery.</li>
</ul>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Do Not Wait for an Appointment if This Happens</h2>
<div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-r-2xl mb-8">
<p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">
<strong>Go to the emergency room instead</strong> if a bulge becomes hard, very painful, discolored or cannot be pushed back, or if you have vomiting, fever or cannot pass gas or stool. See <a href="<?= $base_path ?>blog/hernia-emergency-warning-signs" class="text-amber-900 font-semibold hover:underline">hernia emergency warning signs</a> for the full list.
</p>
</div>

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
                            This article is general medical information, not a diagnosis. Only a qualified examination can tell you whether you have a hernia and what to do about it.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Ready for a Proper Examination?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Book a consultation with Dr. Kumar at Billroth Hospitals, Chennai. Bring your reports and your questions, and leave with a clear plan.</p>
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
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Most hernias are diagnosed by history and examination.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>You may be examined standing and asked to cough or strain.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Scans are added only when the exam is unclear.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Bring your medicine list and past reports; surgery is not automatic.</li>
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
                        <a href="<?= $base_path ?>blog/hernia-vs-groin-strain-vs-testicular-pain" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Hernia vs Groin Strain vs Testicular Pain</h4>
                                <span class="text-[11px] text-slate-400">8 November 2026</span>
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
