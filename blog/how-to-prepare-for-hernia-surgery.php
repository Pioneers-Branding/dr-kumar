<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2027-01-18');

$page_title       = 'How to Prepare for Hernia Surgery: Pre-Op Checklist';
$page_description = 'How to prepare for hernia surgery: a practical pre-op checklist covering assessments, fasting, what to ask about medicines, tobacco, packing and home setup.';
$page_keywords    = 'how to prepare for hernia surgery, pre-op checklist hernia surgery, fasting before hernia surgery, medicines before hernia surgery, hernia surgery preparation';
$page_image       = $site['url'] . 'assets/images/how-to-prepare-for-hernia-surgery.png';
$page_published   = '2027-01-18';
$page_modified    = '2027-01-18';

$schema_about = [
    '@type'       => 'MedicalProcedure',
    'name'        => 'Preparing for Hernia Surgery',
    'description' => 'General pre-operative preparation for hernia surgery, including assessments, fasting, medicine review, tobacco, packing and arranging support at home.',
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'How long before hernia surgery should I stop eating?',
        'a' => 'Common anesthesia guidelines for healthy adults allow a light meal until about six hours and clear liquids until about two hours before. Follow the exact times your hospital gives you.',
    ],
    [
        'q' => 'Should I stop my regular medicines before hernia surgery?',
        'a' => 'Do not stop anything on your own. Some medicines continue, some pause, some are skipped only that morning. Your surgeon and anesthesiologist will tell you exactly what to do with each.',
    ],
    [
        'q' => 'Can I take my blood pressure or diabetes tablets on the morning of surgery?',
        'a' => 'It depends on the medicine and your plan. Ask at the pre-anesthetic visit which to take, with how much water, and when to restart them afterward.',
    ],
    [
        'q' => 'What tests are done before hernia surgery?',
        'a' => 'It varies with your age, health and anesthesia type. Typical assessments include a pre-anesthetic check-up and tests your team requests. They will tell you which apply to you.',
    ],
    [
        'q' => 'Who should come with me to the hospital?',
        'a' => 'Bring a responsible adult who can stay, sign papers if needed and take you home. For day-care surgery you should not travel home alone or ride a two-wheeler.',
    ],
    [
        'q' => 'What should I tell the team if I get a cold or fever before surgery?',
        'a' => 'Report it as soon as it starts. A new cough, fever or skin infection near the site may change the timing, and your team would rather reschedule than risk complications.',
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
            <span class="text-white">Prepare for Hernia Surgery</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Pre-Op Checklist
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                How to Prepare for Hernia Surgery: <br class="hidden md:inline"><span class="text-accent">Pre-Op Checklist, Fasting and Medicines</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar of Billroth Hospitals</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>January 18, 2027</span>
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

                    <img src="<?= $base_path ?>assets/images/how-to-prepare-for-hernia-surgery.png" alt="How to Prepare for Hernia Surgery: Pre-Op Checklist, Fasting and Medicines" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: How Do You Prepare for Hernia Surgery?</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>Complete your pre-operative assessments, share a full medicine list, and follow the fasting and medicine instructions your own team gives you.</strong> Avoid tobacco, report any new cough or infection, and arrange a companion and a resting spot at home. Never stop a prescribed medicine on your own. Your surgeon and anesthesiologist decide those details.
                        </p>
                    </div>

<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">The Short Answer on How to Prepare for Hernia Surgery</h2>
<p class="text-slate-600 leading-relaxed mb-6">
To prepare for hernia surgery, you complete a pre-operative assessment, give your team a full list of your medicines and health conditions, follow the fasting and medicine instructions they give you, arrange help for the first days at home, and avoid anything that could delay healing, such as tobacco or an untreated cough or chest infection. Most of this is simple, and almost all of it is decided by your own surgeon and anesthesia team.
</p>
<div class="bg-amber-50 border-l-4 border-amber-500 p-6 rounded-r-2xl mb-8">
<p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">
<strong>One rule above all:</strong> where this article and your hospital's written instructions differ, follow the hospital. Fasting times and medicine instructions vary with your health, the anesthesia planned and the operation. Never stop, skip or change a prescribed medicine on your own, even a blood thinner or a diabetes tablet, unless your surgeon or anesthesiologist has told you to.
</p>
</div>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">A Timeline You Can Follow</h2>
<ol class="list-none p-0 m-0 mb-8 space-y-4">
<li class="flex gap-4 items-start"><span class="shrink-0 w-9 h-9 rounded-full bg-brand-900 text-white font-bold flex items-center justify-center text-sm">1</span><div><p class="font-bold text-slate-900 m-0">As soon as surgery is planned: get the assessments done</p><p class="text-slate-600 text-sm md:text-base leading-relaxed m-0 mt-1">This normally includes a pre-anesthetic check-up and any tests your team requests. Do them early, because a result that needs follow-up is much easier to handle two weeks out than two days out. If you have diabetes, heart disease or high blood pressure, our guide to <a href="<?= $base_path ?>blog/hernia-surgery-with-diabetes-obesity-heart-disease" class="text-brand-700 font-semibold hover:underline">hernia surgery with diabetes, obesity or heart disease</a> covers what usually matters.</p></div></li>
<li class="flex gap-4 items-start"><span class="shrink-0 w-9 h-9 rounded-full bg-brand-900 text-white font-bold flex items-center justify-center text-sm">2</span><div><p class="font-bold text-slate-900 m-0">Write down everything you take</p><p class="text-slate-600 text-sm md:text-base leading-relaxed m-0 mt-1">List every prescription medicine, over-the-counter tablet, vitamin, herbal and Ayurvedic product, with doses. Hospitals consistently ask for the full list, because some products affect bleeding or anesthesia. Bring it to the pre-anesthetic visit and ask exactly what to do with each one.</p></div></li>
<li class="flex gap-4 items-start"><span class="shrink-0 w-9 h-9 rounded-full bg-brand-900 text-white font-bold flex items-center justify-center text-sm">3</span><div><p class="font-bold text-slate-900 m-0">Deal with tobacco, cough and constipation</p><p class="text-slate-600 text-sm md:text-base leading-relaxed m-0 mt-1">Many surgeons ask for a nicotine-free period before planned repair; see <a href="<?= $base_path ?>blog/smoking-and-hernia-surgery" class="text-brand-700 font-semibold hover:underline">smoking and hernia surgery</a>. A new cough, cold, fever or skin problem near the operation site is also worth reporting rather than hiding, because it may change the timing.</p></div></li>
<li class="flex gap-4 items-start"><span class="shrink-0 w-9 h-9 rounded-full bg-brand-900 text-white font-bold flex items-center justify-center text-sm">4</span><div><p class="font-bold text-slate-900 m-0">Understand the anesthesia plan</p><p class="text-slate-600 text-sm md:text-base leading-relaxed m-0 mt-1">Know whether you are having general, spinal or local anesthesia and why. Our article on <a href="<?= $base_path ?>blog/hernia-surgery-anesthesia" class="text-brand-700 font-semibold hover:underline">hernia surgery anesthesia</a> explains the options and what to ask.</p></div></li>
<li class="flex gap-4 items-start"><span class="shrink-0 w-9 h-9 rounded-full bg-brand-900 text-white font-bold flex items-center justify-center text-sm">5</span><div><p class="font-bold text-slate-900 m-0">Set up your home and your support</p><p class="text-slate-600 text-sm md:text-base leading-relaxed m-0 mt-1">Arrange a family member or friend to accompany you and stay, plan leave from work, and prepare a resting spot with easy access to the bathroom. Keep frequently used things at waist height so you do not need to bend or lift.</p></div></li>
<li class="flex gap-4 items-start"><span class="shrink-0 w-9 h-9 rounded-full bg-brand-900 text-white font-bold flex items-center justify-center text-sm">6</span><div><p class="font-bold text-slate-900 m-0">The day before: confirm instructions</p><p class="text-slate-600 text-sm md:text-base leading-relaxed m-0 mt-1">Check your arrival time, fasting start time and which morning medicines, if any, to take with a sip of water. Bathe as instructed, pack your bag and keep your phone charged.</p></div></li>
</ol>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Fasting: General Guidance, Not Your Instructions</h2>
<p class="text-slate-600 leading-relaxed mb-6">
Fasting exists to keep your stomach empty during anesthesia, which lowers the risk of stomach contents reaching the lungs. Common anesthesia guidelines for healthy adults allow clear liquids such as water, up to about two hours before, a light meal up to about six hours before, and ask for longer, around eight hours, after fried, fatty or meaty food. Your hospital may set different times, and people with diabetes or digestive problems often get individual instructions.
</p>
<div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm">
<table class="w-full text-slate-700 text-sm">
<thead>
<tr class="bg-brand-900 text-white">
<th class="px-5 py-3.5 text-left font-semibold">Before surgery</th>
<th class="px-5 py-3.5 text-left font-semibold">General pattern in anesthesia guidelines</th>
<th class="px-5 py-3.5 text-left font-semibold">Your instruction</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100">
<tr class="hover:bg-slate-50">
<td class="px-5 py-3.5 font-semibold text-slate-900">Clear liquids (water, clear tea)</td>
<td class="px-5 py-3.5">Often allowed until about 2 hours before</td>
<td class="px-5 py-3.5">Use the time your hospital gives you</td>
</tr>
<tr class="hover:bg-slate-50">
<td class="px-5 py-3.5 font-semibold text-slate-900">Light meal (toast and tea)</td>
<td class="px-5 py-3.5">Often allowed until about 6 hours before</td>
<td class="px-5 py-3.5">Use the time your hospital gives you</td>
</tr>
<tr class="hover:bg-slate-50">
<td class="px-5 py-3.5 font-semibold text-slate-900">Fried, fatty or meaty meal</td>
<td class="px-5 py-3.5">Longer fast, around 8 hours</td>
<td class="px-5 py-3.5">Use the time your hospital gives you</td>
</tr>
<tr class="hover:bg-slate-50">
<td class="px-5 py-3.5 font-semibold text-slate-900">Chewing tobacco, paan, gum or candy</td>
<td class="px-5 py-3.5">Ask the team; do not assume they are allowed</td>
<td class="px-5 py-3.5">Ask the anesthesia team</td>
</tr>
</tbody>
</table>
</div>
<p class="text-slate-600 leading-relaxed mb-6">
If you are unsure what counts, or you accidentally eat or drink during the fasting window, tell the team when you arrive. They would rather know than guess.
</p>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Medicines: What to Ask, Not What to Stop</h2>
<p class="text-slate-600 leading-relaxed mb-6">
Hospitals consistently advise telling the team about everything you take. Blood thinners, aspirin, diabetes medicines, blood pressure tablets, anti-inflammatory painkillers and supplements are all discussed in pre-operative checklists, but the right action for each differs by person. Some are continued, some are paused for a set number of days, some are skipped only on the morning of surgery. That decision belongs to your surgeon, anesthesiologist and the doctor who prescribes the medicine. Ask three things for every item on your list: should I take it before surgery, on the morning of surgery, and when do I restart it afterward?
</p>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What to Pack for the Hospital</h2>
<div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 mb-8">
<ul class="list-none p-0 m-0 space-y-2.5">
<li class="flex items-start gap-3 text-slate-700 text-sm md:text-base"><span class="mt-1 w-5 h-5 shrink-0 rounded border-2 border-brand-600 bg-white"></span><span>ID, hospital registration papers, doctor's notes and insurance or approval documents</span></li>
<li class="flex items-start gap-3 text-slate-700 text-sm md:text-base"><span class="mt-1 w-5 h-5 shrink-0 rounded border-2 border-brand-600 bg-white"></span><span>Your written medicine list and any reports you were asked to bring</span></li>
<li class="flex items-start gap-3 text-slate-700 text-sm md:text-base"><span class="mt-1 w-5 h-5 shrink-0 rounded border-2 border-brand-600 bg-white"></span><span>Loose, comfortable clothes that button or slip on without bending, and non-slip footwear</span></li>
<li class="flex items-start gap-3 text-slate-700 text-sm md:text-base"><span class="mt-1 w-5 h-5 shrink-0 rounded border-2 border-brand-600 bg-white"></span><span>Spectacles, hearing aids or dentures, with their cases, and a phone charger</span></li>
<li class="flex items-start gap-3 text-slate-700 text-sm md:text-base"><span class="mt-1 w-5 h-5 shrink-0 rounded border-2 border-brand-600 bg-white"></span><span>A responsible adult to accompany you home, and a way to travel that does not involve riding a two-wheeler yourself</span></li>
<li class="flex items-start gap-3 text-slate-700 text-sm md:text-base"><span class="mt-1 w-5 h-5 shrink-0 rounded border-2 border-brand-600 bg-white"></span><span>Questions for your surgeon, and the phone number to call if something worries you afterward</span></li>
</ul>
</div>
<p class="text-slate-600 leading-relaxed mb-6">
Leave jewelry and valuables at home, and follow any instructions about skin care or what to wear on the day.
</p>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">After the Operation: What to Read Next</h2>
<p class="text-slate-600 leading-relaxed mb-6">
Good preparation continues into recovery. Our <a href="<?= $base_path ?>blog/hernia-surgery-recovery-week-by-week" class="text-brand-700 font-semibold hover:underline">week-by-week hernia surgery recovery guide</a> describes the weeks ahead, and the <a href="<?= $base_path ?>blog/return-to-work-after-hernia-surgery" class="text-brand-700 font-semibold hover:underline">return to work guide</a> helps you plan leave. If you are still choosing an approach, read about <a href="<?= $base_path ?>treatment/index" class="text-brand-700 font-semibold hover:underline">our hernia treatments</a> before your pre-operative visit.
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
                            This article is general medical information, not instructions for your own operation. Fasting times, medicine changes and other preparation must come from your surgeon and anesthesia team.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Planning a Hernia Repair?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Book a consultation to get a preparation plan that fits your health, your hernia and your operation with Dr. Kumar at Billroth Hospitals, Chennai.</p>
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
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Do the pre-anesthetic check and tests early.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Give your team a full list of medicines and supplements.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Never stop a prescribed medicine on your own.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Follow your hospital's fasting times over any general guide.</li>
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
                        <a href="<?= $base_path ?>blog/hernia-surgery-anesthesia" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Hernia Surgery Anesthesia: General vs Spinal</h4>
                                <span class="text-[11px] text-slate-400">3 January 2027</span>
                            </div>
                        </a>
                        <a href="<?= $base_path ?>blog/smoking-and-hernia-surgery" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Smoking and Hernia Surgery</h4>
                                <span class="text-[11px] text-slate-400">8 January 2027</span>
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
