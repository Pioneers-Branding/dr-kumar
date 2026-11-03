<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2027-02-18');

$page_title       = 'Epigastric Hernia: The Lump Above Your Belly Button';
$page_description = 'Epigastric hernia explained: what the lump between your breastbone and belly button is, how it differs from other hernias, and when repair is advised.';
$page_keywords    = 'epigastric hernia, lump above belly button, epigastric hernia symptoms, epigastric hernia surgery, upper abdominal hernia';
$page_image       = $site['url'] . 'assets/images/epigastric-hernia-lump-above-belly-button.png';
$page_published   = '2027-02-18';
$page_modified    = '2027-02-18';

$schema_about = [
    '@type'       => 'MedicalCondition',
    'name'        => 'Epigastric Hernia',
    'description' => 'An epigastric hernia is a defect in the midline abdominal wall between the breastbone and the belly button through which fat or other tissue protrudes. It does not resolve on its own, and surgery is the only way to close the defect.',
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'What does an epigastric hernia feel like?',
        'a' => 'Usually a small lump between the breastbone and belly button, sometimes tender, more noticeable when coughing or straining. Some people have no pain and only see the bump.',
    ],
    [
        'q' => 'Will an epigastric hernia go away on its own?',
        'a' => 'No. The gap in the abdominal wall does not close by itself, although the lump may flatten when lying down. Surgery is the only repair, if one is needed.',
    ],
    [
        'q' => 'Is an epigastric hernia dangerous?',
        'a' => 'Usually not, since it often contains only fat. Rarely, tissue can become trapped and lose blood supply, which is an emergency. Sudden pain, a hard lump or vomiting needs urgent care.',
    ],
    [
        'q' => 'Is an epigastric hernia the same as diastasis recti?',
        'a' => 'No. An epigastric hernia is a true gap with tissue pushing through, while diastasis recti is a widening of the midline with no hole. They can occur together.',
    ],
    [
        'q' => 'How is an epigastric hernia repaired?',
        'a' => 'The gap is closed with stitches, often reinforced with mesh, using open, laparoscopic or robotic techniques. Many people go home the same day, with lifting restrictions afterward.',
    ],
    [
        'q' => 'Can an epigastric hernia come back after surgery?',
        'a' => 'Yes, recurrence is possible, and one source reports a long-term rate up to 10 percent. Mesh reinforcement typically lowers that risk, and your surgeon can explain your own risk.',
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
            <span class="text-white">Epigastric Hernia</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Condition Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Epigastric Hernia: <br class="hidden md:inline"><span class="text-accent">The Lump Above Your Belly Button Explained</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar of Billroth Hospitals</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>February 18, 2027</span>
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

                    <img src="<?= $base_path ?>assets/images/epigastric-hernia-lump-above-belly-button.png" alt="Epigastric Hernia: The Lump Above Your Belly Button Explained" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: What Is an Epigastric Hernia?</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>An epigastric hernia is a small gap in the midline abdominal wall, between the breastbone and the belly button, where fat or other tissue pushes through.</strong> It shows as a lump that may flatten when you lie down. It does not heal on its own; surgery is the only repair, and urgency depends on symptoms.
                        </p>
                    </div>

<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What an Epigastric Hernia Is</h2>
<p class="text-slate-600 leading-relaxed mb-6">An epigastric hernia is a gap in the abdominal wall in the midline <strong>between the lower breastbone and the belly button</strong>. Through that gap, a small amount of tissue pushes out, most often fatty tissue rather than bowel. It shows as a small bump that may be visible all the time or only when you cough, strain or stand up. Healthline puts epigastric hernias at roughly 2 to 3 percent of abdominal wall hernias, and they occur in adults and children.</p>
<p class="text-slate-600 leading-relaxed mb-6">The wall here is a thin seam of fibrous tissue (the linea alba) rather than thick muscle, which is why small gaps can open without any dramatic strain.</p>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">How It Feels, and Why It Is Often Missed</h2>
<ul class="list-disc pl-6 space-y-2 text-slate-600 leading-relaxed mb-6">
<li>A small, firm or soft lump in the upper middle of the abdomen.</li>
<li>Tenderness or a dull ache at the spot, worse with straining or after a meal.</li>
<li>A lump that may flatten when you lie down, which makes it easy to dismiss.</li>
<li>More than one lump can occur, according to Healthline.</li>
<li>Many people have no pain at all and notice it only in the mirror or while dressing.</li>
</ul>
<p class="text-slate-600 leading-relaxed mb-6">Because pain sits in the upper abdomen, people often assume it is gastritis, an ulcer or a gallbladder problem and spend months on acidity medicines. Upper abdominal pain has many causes, so a proper examination matters. If you can feel a distinct point of tenderness with a lump, mention it specifically.</p>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Epigastric vs Umbilical Hernia vs Diastasis Recti</h2>
<div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm"><table class="w-full text-slate-700 text-sm"><thead><tr class="bg-brand-900 text-white"><th class="px-5 py-3.5 text-left font-semibold"></th><th class="px-5 py-3.5 text-left font-semibold">Epigastric hernia</th><th class="px-5 py-3.5 text-left font-semibold">Umbilical hernia</th><th class="px-5 py-3.5 text-left font-semibold">Diastasis recti</th></tr></thead><tbody class="divide-y divide-slate-100">
<tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5">Where</td><td class="px-5 py-3.5">Between breastbone and navel</td><td class="px-5 py-3.5">At or right beside the navel</td><td class="px-5 py-3.5">A ridge along the whole midline, often above and below the navel</td></tr>
<tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5">What it is</td><td class="px-5 py-3.5">A true gap with tissue pushing through</td><td class="px-5 py-3.5">A true gap at the navel</td><td class="px-5 py-3.5">Widening and thinning of the midline tissue, with no hole</td></tr>
<tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5">Typical lump</td><td class="px-5 py-3.5">Small, localized</td><td class="px-5 py-3.5">Localized, at the navel</td><td class="px-5 py-3.5">Long ridge or dome when you tense the abdomen</td></tr>
<tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5">Needs surgery?</td><td class="px-5 py-3.5">Repair is the only way to close the gap</td><td class="px-5 py-3.5">Often yes if symptomatic</td><td class="px-5 py-3.5">Usually not, unless a hernia is also present</td></tr>
</tbody></table></div>
<p class="text-slate-600 leading-relaxed mb-6">Our pages on <a href="<?= $base_path ?>treatment/diastasis-recti" class="text-brand-700 font-semibold hover:underline">diastasis recti</a> and the article on whether an <a href="<?= $base_path ?>blog/can-umbilical-hernia-be-treated-without-surgery" class="text-brand-700 font-semibold hover:underline">umbilical hernia can be treated without surgery</a> explain the neighbors in detail. A hernia and diastasis recti can coexist, which is one reason a hands-on examination, sometimes with an ultrasound, is worth having. See <a href="<?= $base_path ?>hernia/diagnosis" class="text-brand-700 font-semibold hover:underline">how hernias are diagnosed</a>.</p>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Does It Need Treatment?</h2>
<p class="text-slate-600 leading-relaxed mb-6">Honest answers differ here, and you should know the range. Several sources say an epigastric hernia does not heal on its own and that surgery is the only repair. Others note that a small one that causes no symptoms and contains only fat may be safe to watch. What everyone agrees on is that it can enlarge over time, and the main danger, though uncommon, is tissue becoming trapped with its blood supply cut off.</p>
<p class="text-slate-600 leading-relaxed mb-6">In practice the decision turns on your symptoms, the size of the defect, and whether there is more than one. A painful lump, a growing lump or one that is interfering with daily life usually points to repair. Our guide to <a href="<?= $base_path ?>blog/do-i-need-hernia-surgery" class="text-brand-700 font-semibold hover:underline">whether you need hernia surgery</a> explains the general framework.</p>
<div class="bg-red-50 border-red-500 border-l-4 p-6 rounded-r-2xl mb-8"><p class="text-red-900 text-sm md:text-base leading-relaxed m-0"><strong>See a doctor urgently if the lump becomes hard, very tender or discolored, or if pain increases with vomiting or fever.</strong> Those can be signs of trapped tissue or a bowel blockage. See our list of <a href="<?= $base_path ?>blog/hernia-emergency-warning-signs" class="text-amber-900 font-semibold hover:underline">hernia emergency warning signs</a>.</p></div>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">How an Epigastric Hernia Is Repaired</h2>
<p class="text-slate-600 leading-relaxed mb-6">Repair closes the gap in the midline wall. The surgeon chooses a technique after examining the size and number of defects: small defects may be closed directly with sutures, and many repairs add a mesh to reinforce the wall. One source reports a recurrence rate as high as 10 percent over the long term after epigastric repair, noting that mesh typically lowers recurrence. Healthline notes that most people go home the same day and that surgeons typically restrict lifting for six to eight weeks, though your own plan depends on the repair.</p>
<p class="text-slate-600 leading-relaxed mb-6">At Billroth Hospitals, Dr. Kumar offers laparoscopic and robotic repair, with open repair where the defect calls for it, and the approach is decided after your examination, not before. Read more on our <a href="<?= $base_path ?>my_types/epigastric-hernia-surgery-in-chennai" class="text-brand-700 font-semibold hover:underline">epigastric hernia surgery page</a> and the <a href="<?= $base_path ?>treatment/recovery" class="text-brand-700 font-semibold hover:underline">recovery guide</a> for what the weeks after look like.</p>

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
                            This article is general medical information, not a diagnosis. A lump in the upper abdomen needs a hands-on examination, and sudden severe pain, vomiting or a hard tender lump needs urgent medical care.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Found a Lump Above Your Belly Button?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Book a consultation for a proper examination to confirm whether it is an epigastric hernia and whether repair is advisable.</p>
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
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>A lump between breastbone and navel, often just fat.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>It does not close by itself.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Hard, tender lump or vomiting: urgent care.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Often mistaken for acidity or diastasis recti.</li>
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
                        <a href="<?= $base_path ?>blog/can-umbilical-hernia-be-treated-without-surgery" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Can an Umbilical Hernia Be Treated Without Surgery?</h4>
                                <span class="text-[11px] text-slate-400">3 August 2026</span>
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
