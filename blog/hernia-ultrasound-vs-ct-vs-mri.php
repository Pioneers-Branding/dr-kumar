<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2027-01-23');

$page_title       = 'Hernia Ultrasound vs CT vs MRI: Which Scan Do You Need?';
$page_description = 'Hernia ultrasound vs CT vs MRI compared: what each scan shows, whether it uses radiation, when a surgeon orders one, and why many hernias need no scan.';
$page_keywords    = 'hernia ultrasound vs CT vs MRI, which scan for hernia, hernia ultrasound, CT scan for hernia, MRI for hernia, occult hernia imaging';
$page_image       = $site['url'] . 'assets/images/hernia-ultrasound-vs-ct-vs-mri.png';
$page_published   = '2027-01-23';
$page_modified    = '2027-01-23';

$schema_about = [
    '@type'       => 'MedicalTest',
    'name'        => 'Imaging for Hernia Diagnosis',
    'description' => 'How ultrasound, CT and MRI are used to diagnose hernias, what each can and cannot show, and why many hernias are diagnosed by examination alone.',
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'Can an ultrasound miss a hernia?',
        'a' => 'Yes. Ultrasound depends on the operator and your body build, and can miss small or deep hernias. If symptoms persist, your surgeon may suggest a repeat examination or another scan.',
    ],
    [
        'q' => 'When is a CT scan needed for a hernia?',
        'a' => 'CT is commonly used for incisional, large or recurrent hernias, to plan repair, and in emergencies to check for obstruction. It uses radiation, so it is chosen when it will change the plan.',
    ],
    [
        'q' => 'Is MRI better than CT for a hernia?',
        'a' => 'For hidden groin hernias, a small study found MRI detected most that CT missed. For complex abdominal wall hernias, CT is commonly used. The better test depends on the question.',
    ],
    [
        'q' => 'Do I need a scan for every hernia?',
        'a' => 'No. Many groin, belly button and scar hernias are diagnosed by history and examination alone. Scans are added when the examination is unclear or the hernia is complex.',
    ],
    [
        'q' => 'Is a hernia scan safe?',
        'a' => 'Ultrasound and MRI use no radiation. CT uses radiation and sometimes contrast dye. Tell the team about pregnancy, kidney problems, allergies and metal implants so the right test is chosen safely.',
    ],
    [
        'q' => 'Can a normal scan rule out a hernia?',
        'a' => 'Not always. Small or hidden hernias can be missed, so your surgeon weighs the scan with your symptoms and examination. A normal result with ongoing symptoms still deserves follow-up.',
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
            <span class="text-white">Hernia Scans Compared</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Diagnosis Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Hernia Ultrasound vs CT vs MRI: <br class="hidden md:inline"><span class="text-accent">Which Scan Do You Actually Need?</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar of Billroth Hospitals</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>January 23, 2027</span>
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

                    <img src="<?= $base_path ?>assets/images/hernia-ultrasound-vs-ct-vs-mri.png" alt="Hernia Ultrasound vs CT vs MRI: Which Scan Do You Actually Need?" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: Which Scan Is Best for a Hernia?</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>Ultrasound is usually the first scan, CT suits complex or incisional hernias and emergencies, and MRI helps find hidden groin hernias.</strong> Many hernias need no scan, because an experienced surgeon can diagnose them by examination. The right test depends on the question your surgeon needs answered.
                        </p>
                    </div>

<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">First, Do You Need a Scan at All?</h2>
<p class="text-slate-600 leading-relaxed mb-6">
Hernia ultrasound vs CT vs MRI is a common worry because many people arrive at a hernia clinic expecting a scan, and many leave without needing one. A clear groin, belly button or scar bulge is usually diagnosed by a surgeon's history and examination alone. Imaging earns its place when the examination is uncertain: a small or deep hernia, a painful area with nothing visible, a previous operation that complicates the picture, or a large or complicated hernia that needs planning. The question is rarely "which scan is best?" but "which scan answers this particular question?"
</p>
<p class="text-slate-600 leading-relaxed mb-6">
Your surgeon chooses which scan, if any, you need.
</p>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">The Three Scans at a Glance</h2>
<div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm">
<table class="w-full text-slate-700 text-sm">
<thead>
<tr class="bg-brand-900 text-white">
<th class="px-5 py-3.5 text-left font-semibold"></th>
<th class="px-5 py-3.5 text-left font-semibold">Ultrasound</th>
<th class="px-5 py-3.5 text-left font-semibold">CT scan</th>
<th class="px-5 py-3.5 text-left font-semibold">MRI</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100">
<tr class="hover:bg-slate-50">
<td class="px-5 py-3.5 font-semibold text-slate-900">How it works</td>
<td class="px-5 py-3.5">Sound waves; a probe on the skin</td>
<td class="px-5 py-3.5">X-ray images built into slices; sometimes with contrast dye</td>
<td class="px-5 py-3.5">Magnets and radio waves, no X-rays</td>
</tr>
<tr class="hover:bg-slate-50">
<td class="px-5 py-3.5 font-semibold text-slate-900">Radiation</td>
<td class="px-5 py-3.5">None</td>
<td class="px-5 py-3.5">Yes</td>
<td class="px-5 py-3.5">None</td>
</tr>
<tr class="hover:bg-slate-50">
<td class="px-5 py-3.5 font-semibold text-slate-900">Often used for</td>
<td class="px-5 py-3.5">First test for a lump, especially in the groin</td>
<td class="px-5 py-3.5">Defining the defect in an incisional or complex hernia; checking for obstruction</td>
<td class="px-5 py-3.5">Problem-solving, such as groin pain with no visible hernia</td>
</tr>
<tr class="hover:bg-slate-50">
<td class="px-5 py-3.5 font-semibold text-slate-900">Strength</td>
<td class="px-5 py-3.5">Live view; can be done while you strain or cough; widely available</td>
<td class="px-5 py-3.5">Shows the whole abdominal wall and organs in one picture</td>
<td class="px-5 py-3.5">Detailed soft-tissue images without radiation</td>
</tr>
<tr class="hover:bg-slate-50">
<td class="px-5 py-3.5 font-semibold text-slate-900">Limits</td>
<td class="px-5 py-3.5">Depends on the operator and your body build; can miss small or deep hernias</td>
<td class="px-5 py-3.5">Radiation; contrast dye needs a kidney and allergy check</td>
<td class="px-5 py-3.5">Longer, more expensive and less available; not suitable with some implants</td>
</tr>
</tbody>
</table>
</div>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Ultrasound: Usually the First Step</h2>
<p class="text-slate-600 leading-relaxed mb-6">
Ultrasound is non-invasive, uses no radiation and can look at the area in real time. For a palpable lump, a radiology reference suggests ultrasound is the sensible first test, and a review describes a positive predictive value of about 90 percent for impalpable groin hernias. Because it can be done while you cough or strain, it can show a hernia that disappears when you lie down. Its weakness is that it is operator-dependent and can miss small or deep hernias. If the result does not fit your symptoms, that does not mean nothing is wrong; it may mean the next test is needed. If this is you, <a href="<?= $base_path ?>blog/why-does-my-hernia-disappear-when-i-lie-down" class="text-brand-700 font-semibold hover:underline">why a hernia can disappear when you lie down</a> explains what is going on.
</p>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">CT Scan: When the Picture Is Complex</h2>
<p class="text-slate-600 leading-relaxed mb-6">
CT gives the clearest map of the abdominal wall, which is why it is commonly used for incisional hernias, for large or recurrent hernias and for planning a complex repair. In one small study of incisional hernias after aortic surgery, ultrasound had a sensitivity of about 71 percent when CT was used as the reference, and CT found seven hernias that ultrasound missed. The authors called the numbers preliminary, so treat this as an illustration, not a rule. CT also matters in an emergency, because it can show a blocked or strangled bowel. In that situation, speed matters more than anything. See <a href="<?= $base_path ?>blog/hernia-emergency-warning-signs" class="text-brand-700 font-semibold hover:underline">hernia emergency warning signs</a>.
</p>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">MRI: For the Hard-to-Find Hernia</h2>
<p class="text-slate-600 leading-relaxed mb-6">
MRI has the strongest evidence for a specific problem, the occult (hidden) groin hernia, where someone has groin pain, but nothing can be felt and ultrasound is unhelpful. A 2014 study of 59 groins found that ultrasound and CT could not reliably exclude occult abnormalities, and that MRI picked up a hernia in 10 of 11 groins where CT had missed it. That was a small study, so it supports MRI as a problem-solving test, not a routine first test. People with unexplained groin pain may find our comparison of <a href="<?= $base_path ?>blog/hernia-vs-groin-strain-vs-testicular-pain" class="text-brand-700 font-semibold hover:underline">hernia, groin strain and testicular pain</a> useful, and <a href="<?= $base_path ?>blog/hernia-in-women" class="text-brand-700 font-semibold hover:underline">hernia in women</a> explains why hidden hernias are a particular issue there.
</p>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Practical Points Before Any Scan</h2>
<ul class="list-disc pl-6 mb-6 space-y-2 text-slate-600 leading-relaxed">
<li><strong>Tell the team about kidney problems, allergies and pregnancy</strong> before a CT, since contrast dye and radiation need a check.</li>
<li><strong>Tell them about metal in your body</strong> before an MRI, such as a pacemaker, clips or implants, because some cannot go into the scanner.</li>
<li><strong>Ask what question the scan is meant to answer.</strong> A scan ordered "just in case" can add cost and anxiety without changing the plan.</li>
<li><strong>Bring your old scans.</strong> A comparison with earlier images is often more informative than a new scan alone.</li>
<li><strong>A normal scan does not always rule a hernia out.</strong> Your surgeon looks at the whole picture, including your symptoms and the examination.</li>
</ul>
<div class="bg-amber-50 border-l-4 border-amber-500 p-6 rounded-r-2xl mb-8">
<p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">
<strong>Not every hernia is checked this way.</strong> Hiatal hernias, which sit in the upper abdomen near the diaphragm, are usually diagnosed with endoscopy or a barium swallow rather than the scans above, because an examination from outside is not reliable for them. Your surgeon will explain which test fits your type.
</p>
</div>
<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What Happens After the Scan</h2>
<p class="text-slate-600 leading-relaxed mb-6">
The result is reviewed together with your examination, not on its own. A scan may confirm a hernia, show its size and contents, or find another cause for your symptoms, and that guides the decision on repair. To see what to expect from that first visit, read <a href="<?= $base_path ?>blog/first-hernia-consultation-what-to-expect" class="text-brand-700 font-semibold hover:underline">what to expect at your first hernia consultation</a>, and our <a href="<?= $base_path ?>hernia/diagnosis" class="text-brand-700 font-semibold hover:underline">hernia diagnosis page</a> covers the tests in more detail.
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
                            This article is general medical information, not a diagnosis. Which scan, if any, you need is a decision for your surgeon after examining you.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Unsure Whether You Need a Scan?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Book a consultation for a proper hernia examination first. Dr. Kumar will tell you whether imaging will actually help and which test fits.</p>
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
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Many hernias need no scan; examination is often enough.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Ultrasound is usually the first test and uses no radiation.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>CT maps complex and incisional hernias and checks emergencies.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>MRI helps when groin pain is unexplained and no hernia is found.</li>
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
                        <a href="<?= $base_path ?>blog/first-hernia-consultation-what-to-expect" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">What to Expect at Your First Hernia Consultation</h4>
                                <span class="text-[11px] text-slate-400">13 January 2027</span>
                            </div>
                        </a>
                        <a href="<?= $base_path ?>blog/hernia-in-women" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Hernia in Women: Symptoms and Why It Is Missed</h4>
                                <span class="text-[11px] text-slate-400">3 September 2026</span>
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
