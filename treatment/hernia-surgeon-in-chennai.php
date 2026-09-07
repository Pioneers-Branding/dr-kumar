<?php
$page_title       = 'Best Hernia Surgeon in Chennai | Dr. Kumar Billroth';
$page_description = 'Dr. Kumar is a hernia and abdominal wall surgeon in Chennai with 29 years of practice and over 10,000 repairs. Laparoscopic, robotic and complex surgery.';
$page_keywords    = 'hernia surgeon in chennai, best hernia surgeon chennai, hernia specialist chennai, laparoscopic hernia surgeon chennai, robotic hernia surgery chennai, complex hernia surgeon, Dr. Kumar Billroth Hospitals';
$page_url         = 'https://herniacare360.com/treatment/hernia-surgeon-in-chennai';

// This is the city pillar page. It owns the "hernia surgeon in Chennai" term and
// leads with what actually separates one surgeon from another. Hernia type detail
// and the full recovery timeline live on their own pages and are linked, not
// restated, so this page does not compete with them.
$faqs = [
    [
        'q' => 'How many hernia surgeries has Dr. Kumar performed?',
        'a' => 'Dr. Kumar has performed more than 10,000 hernia repairs across 29 years of practice, including over 12,000 laparoscopic procedures in total. Volume in hernia specifically matters.',
    ],
    [
        'q' => 'Is it always necessary to operate on a hernia?',
        'a' => 'Not always. A small, painless hernia can sometimes be monitored. But surgery is the only way to close the muscle gap, so most people repair it eventually.',
    ],
    [
        'q' => 'Which is better for me, keyhole or open repair?',
        'a' => 'That depends on the defect, your build, previous surgery and fitness for anesthesia. Most patients suit keyhole repair, but the decision is made after examination, not before.',
    ],
    [
        'q' => 'Can a hernia come back after surgery?',
        'a' => 'Yes, though modern mesh repair makes it uncommon. Recurrence is more likely after emergency surgery, in smokers, and where a previous repair has already failed once.',
    ],
    [
        'q' => 'How soon can I return to work?',
        'a' => 'Most people doing desk work return within one to two weeks after keyhole repair. Heavy manual work takes longer, and your date is set at the review appointment.',
    ],
    [
        'q' => 'Do you treat complex and recurrent hernias?',
        'a' => 'Yes. Complex abdominal wall reconstruction and repair of hernias that failed previously are a core part of the practice, which is what the departmental role covers.',
    ],
];

require __DIR__ . '/../includes/header.php';
?>

<!-- Hero -->
<section class="relative bg-brand-950 text-white overflow-hidden py-16 md:py-24">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="relative max-w-7xl mx-auto px-4 z-10">
        <nav class="flex items-center gap-2 text-sm text-slate-300 mb-6">
            <a href="<?= $base_path ?>" class="hover:text-white transition">Home</a>
            <span class="text-slate-500">/</span>
            <a href="<?= $base_path ?>treatment" class="hover:text-white transition">Treatments</a>
            <span class="text-slate-500">/</span>
            <span class="text-accent font-medium">Hernia Surgeon in Chennai</span>
        </nav>

        <div class="max-w-4xl">
            <h1 class="font-display text-3xl md:text-5xl font-bold leading-tight mb-6">
                Hernia Surgeon in Chennai:<br><span class="text-accent">Dr. Kumar</span>
            </h1>
            <p class="text-lg text-slate-200 leading-relaxed mb-8 max-w-3xl">
                Dr. Kumar is Clinical Lead and Head of the Department of Minimal Access, Robotic, Hernia and Abdominal Wall Reconstruction Surgery at Billroth Hospitals, Chennai. He has spent 29 years in surgical practice and has performed more than 10,000 hernia repairs.
            </p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8 max-w-3xl">
                <div class="bg-white/10 backdrop-blur rounded-2xl p-4 border border-white/15">
                    <div class="text-2xl font-bold text-accent">10,000+</div>
                    <div class="text-xs text-slate-300 mt-1">Hernia repairs</div>
                </div>
                <div class="bg-white/10 backdrop-blur rounded-2xl p-4 border border-white/15">
                    <div class="text-2xl font-bold text-accent">29</div>
                    <div class="text-xs text-slate-300 mt-1">Years in practice</div>
                </div>
                <div class="bg-white/10 backdrop-blur rounded-2xl p-4 border border-white/15">
                    <div class="text-2xl font-bold text-accent">12,000+</div>
                    <div class="text-xs text-slate-300 mt-1">Laparoscopic procedures</div>
                </div>
                <div class="bg-white/10 backdrop-blur rounded-2xl p-4 border border-white/15">
                    <div class="text-2xl font-bold text-accent">20+</div>
                    <div class="text-xs text-slate-300 mt-1">Years doing keyhole repair</div>
                </div>
            </div>

            <div class="flex flex-wrap gap-4">
                <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition shadow-lg hover:scale-105">
                    Book a Consultation
                </a>
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-white/15 hover:bg-white/25 backdrop-blur text-white font-bold px-7 py-3.5 rounded-full border border-white/30 transition hover:scale-105">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                    <?= $site['phone'] ?>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-14 md:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-10">

            <article class="lg:col-span-8 bg-white rounded-3xl p-7 md:p-10 shadow-sm border border-slate-100">
                <div class="prose prose-slate max-w-none">

                    <!-- 1. The differentiating angle -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">Why Hernia Volume Matters More Than General Surgical Experience</h2>
                    <p class="text-slate-600 leading-relaxed mb-5">
                        Almost every general surgeon repairs hernias. Very few do little else. That distinction is the one worth understanding before you choose anyone, because a hernia repair is a procedure where the difference between a routine result and a difficult one is often decided by judgment the surgeon has built up over hundreds of similar cases.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-5">
                        High volume in hernia specifically buys you three things. The surgeon has seen your variant before, including the awkward ones. They have a considered reason for choosing one technique over another rather than defaulting to the one technique they know. And when something unexpected appears during the operation, such as dense scar tissue from a previous repair, it is a familiar problem rather than a surprise.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-5">
                        Dr. Kumar holds MS and MRCS (England) qualifications along with FMAS and FIAGES fellowships, and heads the minimal access, robotic and abdominal wall reconstruction department at Billroth Hospitals. He has been performing laparoscopic hernia repair for more than 20 years, which predates its routine adoption in much of Indian practice.
                    </p>

                    <div class="bg-brand-50 border-l-4 border-brand-700 p-5 rounded-r-2xl mb-8">
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>Recognition:</strong> Dr. Kumar received the Times Health Award for Service Excellence in Laparoscopic Hernia and Gastrointestinal Surgery in 2025, and the Times Health Award for Service Excellence in Advanced Laparoscopy and Robotic Surgery in 2026.
                        </p>
                    </div>

                    <!-- 2. The commercial-investigation payload -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-9 mb-4 border-b border-slate-100 pb-3">Five Questions to Ask Any Hernia Surgeon</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        If you are comparing surgeons, these are the questions that actually separate them. Ask them of anyone you consult, including Dr. Kumar. The answers below are his.
                    </p>

                    <div class="space-y-4 mb-8">
                        <div class="bg-slate-50 rounded-2xl border border-slate-200 p-5">
                            <h3 class="font-bold text-slate-900 text-base mb-2">1. How many of these repairs have you personally done?</h3>
                            <p class="text-slate-600 text-sm leading-relaxed m-0">More than 10,000 hernia repairs over 29 years, and more than 12,000 laparoscopic procedures across all types of surgery. Ask for a number, not an adjective. A surgeon who repairs hernias occasionally alongside a broad general caseload is a different proposition from one whose practice is built around them.</p>
                        </div>
                        <div class="bg-slate-50 rounded-2xl border border-slate-200 p-5">
                            <h3 class="font-bold text-slate-900 text-base mb-2">2. Which technique do you recommend for my hernia, and why that one?</h3>
                            <p class="text-slate-600 text-sm leading-relaxed m-0">The answer should reference your specific defect, not a general preference. Dr. Kumar performs open, laparoscopic and robotic repair, which means the technique can be chosen on merit. A surgeon who offers only one approach can only ever recommend that one.</p>
                        </div>
                        <div class="bg-slate-50 rounded-2xl border border-slate-200 p-5">
                            <h3 class="font-bold text-slate-900 text-base mb-2">3. What happens if my hernia comes back?</h3>
                            <p class="text-slate-600 text-sm leading-relaxed m-0">Recurrent repair is harder than first-time repair, because scar tissue obscures the planes the surgeon needs to work in. Complex and recurrent hernia repair is a core part of this practice rather than something referred elsewhere, which is worth knowing before you start.</p>
                        </div>
                        <div class="bg-slate-50 rounded-2xl border border-slate-200 p-5">
                            <h3 class="font-bold text-slate-900 text-base mb-2">4. What are the risks, honestly?</h3>
                            <p class="text-slate-600 text-sm leading-relaxed m-0">Every hernia repair carries some risk of infection, bleeding, chronic discomfort and recurrence. A surgeon who tells you there are none is not being straight with you. The relevant comparison is against the risk of leaving a hernia to enlarge and possibly obstruct.</p>
                        </div>
                        <div class="bg-slate-50 rounded-2xl border border-slate-200 p-5">
                            <h3 class="font-bold text-slate-900 text-base mb-2">5. When will I be back at work, given what I actually do?</h3>
                            <p class="text-slate-600 text-sm leading-relaxed m-0">A generic answer is not useful. Desk work after keyhole repair usually means one to two weeks. Loading trucks means considerably longer. Say what your job involves and ask for a date based on that, not on an average.</p>
                        </div>
                    </div>

                    <!-- 3. Types, linked not restated -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-9 mb-4 border-b border-slate-100 pb-3">Hernias Treated at Billroth Hospitals</h2>
                    <p class="text-slate-600 leading-relaxed mb-5">
                        Each type is set out in full on its own page, including how it presents, how it is repaired and what recovery looks like.
                    </p>
                    <div class="grid sm:grid-cols-2 gap-3 mb-6 not-prose">
                        <a href="<?= $base_path ?>my_types/inguinal-hernia-treatment-in-chennai" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold text-slate-800 hover:text-brand-700 transition">Inguinal hernia, the groin</a>
                        <a href="<?= $base_path ?>my_types/umbilical-hernia-treatment-in-chennai" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold text-slate-800 hover:text-brand-700 transition">Umbilical hernia, the navel</a>
                        <a href="<?= $base_path ?>my_types/incisional-hernia-treatment-in-chennai" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold text-slate-800 hover:text-brand-700 transition">Incisional hernia, at a surgical scar</a>
                        <a href="<?= $base_path ?>my_types/ventral-hernia-treatment-in-chennai" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold text-slate-800 hover:text-brand-700 transition">Ventral hernia, the abdominal midline</a>
                        <a href="<?= $base_path ?>my_types/femoral-hernia-treatment-in-chennai" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold text-slate-800 hover:text-brand-700 transition">Femoral hernia, upper thigh</a>
                        <a href="<?= $base_path ?>my_types/hiatal-hernia-surgery-in-chennai" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold text-slate-800 hover:text-brand-700 transition">Hiatal hernia, with acid reflux</a>
                        <a href="<?= $base_path ?>my_types/recurrent-hernia" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold text-slate-800 hover:text-brand-700 transition">Recurrent hernia, after a failed repair</a>
                        <a href="<?= $base_path ?>my_types/rare-hernia" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold text-slate-800 hover:text-brand-700 transition">Rare and unusual hernias</a>
                    </div>

                    <!-- 4. Technique selection: the strongest existing material, kept -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-9 mb-4 border-b border-slate-100 pb-3">How the Technique Is Chosen for You</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        There is no single best hernia operation, only the one that suits your defect and your circumstances. These are the three approaches and what each is genuinely good for.
                    </p>

                    <div class="overflow-x-auto rounded-2xl border border-slate-200 mb-6 shadow-sm">
                        <table class="w-full text-slate-700 text-sm">
                            <thead>
                                <tr class="bg-brand-900 text-white">
                                    <th class="px-5 py-3.5 text-left font-semibold">Approach</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">Best suited to</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">Typical recovery</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Laparoscopic (keyhole)</td>
                                    <td class="px-5 py-3.5">Most primary hernias, and especially hernias on both sides. Mesh is placed behind the defect through incisions of roughly half to one centimeter.</td>
                                    <td class="px-5 py-3.5">1 to 3 weeks, usually same-day discharge</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Robotic</td>
                                    <td class="px-5 py-3.5">Complex and recurrent hernias, where wristed instruments and magnified vision help around scarred tissue.</td>
                                    <td class="px-5 py-3.5">1 to 3 weeks</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Open</td>
                                    <td class="px-5 py-3.5">Large, incarcerated or contaminated hernias, and emergencies. Also where general anesthesia is best avoided.</td>
                                    <td class="px-5 py-3.5">3 to 6 weeks</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-slate-600 leading-relaxed mb-5">
                        Open repair is not an inferior operation. It remains the right choice in specific situations, and a surgeon who never offers it is limiting your options rather than expanding them. Details of each technique sit on the <a href="<?= $base_path ?>treatment/best-laparoscopic-hernia-surgery-in-chennai" class="text-brand-700 font-semibold hover:underline">laparoscopic repair</a>, <a href="<?= $base_path ?>best-robotic-hernia-surgery-in-chennai" class="text-brand-700 font-semibold hover:underline">robotic surgery</a> and <a href="<?= $base_path ?>treatment/mesh-hernia-repair-in-chennai" class="text-brand-700 font-semibold hover:underline">mesh repair</a> pages.
                    </p>

                    <!-- 5. Recovery, condensed and linked -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-9 mb-4 border-b border-slate-100 pb-3">What Happens After Surgery</h2>
                    <p class="text-slate-600 leading-relaxed mb-5">
                        Most keyhole hernia repairs are day-care procedures, meaning you are admitted and discharged the same day provided someone can travel home with you. Expect soreness rather than severe pain for the first few days, gentle walking from the evening of surgery, and a review appointment where your lifting and work restrictions are set against what you actually do.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-5">
                        The full week-by-week picture, including when you can drive, lift and exercise, is on the <a href="<?= $base_path ?>treatment/recovery" class="text-brand-700 font-semibold hover:underline">hernia surgery recovery guide</a>.
                    </p>

                    <!-- 6. Location -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-9 mb-4 border-b border-slate-100 pb-3">Where Dr. Kumar Consults</h2>
                    <p class="text-slate-600 leading-relaxed mb-5">
                        All consulting and surgery happens at <?= $site['clinic']['name'] ?>, <?= $site['address'] ?>. Shenoy Nagar is on the Chennai Metro Green Line, which makes the hospital reachable without driving from much of North and West Chennai.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-5">
                        If you are travelling in from a particular neighborhood, these pages set out the route from each: <a href="<?= $base_path ?>treatment/hernia-surgeon-in-annanagar" class="text-brand-700 font-semibold hover:underline">Anna Nagar</a>, <a href="<?= $base_path ?>treatment/hernia-surgeon-in-kilpauk" class="text-brand-700 font-semibold hover:underline">Kilpauk</a>, <a href="<?= $base_path ?>treatment/hernia-surgeon-in-perambur" class="text-brand-700 font-semibold hover:underline">Perambur</a> and <a href="<?= $base_path ?>treatment/hernia-surgeon-in-koyambedu" class="text-brand-700 font-semibold hover:underline">Koyambedu</a> among others.
                    </p>
                    <div class="bg-red-50 border-2 border-red-500 p-5 rounded-2xl mb-6">
                        <p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">
                            If a hernia has suddenly become hard, severely painful, discolored, or comes with vomiting, do not wait for a consultation slot. Go to the nearest emergency department. Our <a href="<?= $base_path ?>emergency-hernia-care" class="text-red-700 font-bold hover:underline">emergency hernia care</a> page explains what happens next.
                        </p>
                    </div>

                    <!-- 7. FAQ -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-5 border-b border-slate-100 pb-3">Frequently Asked Questions</h2>
                    <div class="space-y-4 mb-8">
                        <?php foreach ($faqs as $faq): ?>
                        <div class="bg-slate-50 rounded-2xl border border-slate-200 p-5">
                            <h3 class="font-bold text-slate-900 text-base mb-2"><?= htmlspecialchars($faq['q'], ENT_QUOTES, 'UTF-8') ?></h3>
                            <p class="text-slate-600 text-sm leading-relaxed m-0"><?= htmlspecialchars($faq['a'], ENT_QUOTES, 'UTF-8') ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-7 text-center shadow-xl">
                        <h3 class="font-display text-xl md:text-2xl font-bold mb-3">Book a Hernia Consultation</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">The hernia is examined and measured, the options are explained against your own circumstances, and you leave knowing whether it needs repair now or can be monitored.</p>
                        <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition shadow-lg hover:scale-105">
                            Book an Appointment
                        </a>
                    </div>
                </div>
            </article>

            <aside class="lg:col-span-4 space-y-6">
                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm text-center">
                    <img src="<?= $base_path ?>assets/images/doctor-about.avif" alt="Dr. Kumar, hernia and abdominal wall surgeon in Chennai" width="96" height="96" class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-brand-50 shadow-md mb-4">
                    <h3 class="font-bold text-slate-900 text-lg mb-1">Dr. Kumar</h3>
                    <p class="text-xs text-brand-700 font-semibold mb-3"><?= $site['credentials'] ?></p>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">Clinical Lead and HOD, Minimal Access, Robotic, Hernia and Abdominal Wall Reconstruction Surgery, Billroth Hospitals, Chennai.</p>
                    <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="inline-flex items-center justify-center w-full bg-brand-50 hover:bg-brand-100 text-brand-800 text-xs font-bold py-2.5 rounded-xl border border-brand-100 transition">
                        View Full Profile
                    </a>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                    <h3 class="font-bold text-slate-900 text-base mb-3">Clinic Address</h3>
                    <p class="text-sm text-slate-600 leading-relaxed mb-4">
                        <?= $site['clinic']['name'] ?><br>
                        <?= $site['clinic']['street'] ?><br>
                        <?= $site['clinic']['locality'] ?> <?= $site['clinic']['postal'] ?>
                    </p>
                    <a href="<?= $site['clinic']['map_url'] ?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-full bg-brand-50 hover:bg-brand-100 text-brand-800 text-xs font-bold py-2.5 rounded-xl border border-brand-100 transition">
                        Open in Google Maps
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
                    <h3 class="font-bold text-slate-900 text-base mb-4 border-b border-slate-100 pb-2">Deciding About Surgery</h3>
                    <div class="space-y-3">
                        <a href="<?= $base_path ?>blog/do-i-need-hernia-surgery" class="block text-xs font-semibold text-slate-800 hover:text-brand-700 transition">Do I need hernia surgery?</a>
                        <a href="<?= $base_path ?>blog/how-fast-does-a-hernia-grow" class="block text-xs font-semibold text-slate-800 hover:text-brand-700 transition">How fast does a hernia grow?</a>
                        <a href="<?= $base_path ?>blog/hernia-emergency-warning-signs" class="block text-xs font-semibold text-slate-800 hover:text-brand-700 transition">Hernia emergency warning signs</a>
                        <a href="<?= $base_path ?>second-opinion" class="block text-xs font-semibold text-slate-800 hover:text-brand-700 transition">Get a second opinion</a>
                    </div>
                </div>
            </aside>

        </div>
    </div>
</section>

<?php
// FAQPage schema, generated from the same $faqs array rendered above.
// MedicalWebPage, BreadcrumbList and the Physician node come from header.php.
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
