<?php
require_once __DIR__ . '/../includes/config.php';

$page_title       = 'How Fast Does a Hernia Grow? A Month by Month Guide';
$page_description = 'How fast does a hernia grow? There is no fixed rate. Learn what actually changes month by month, what speeds it up, and how long it is safe to delay surgery.';
$page_keywords    = 'how fast does a hernia grow, does a hernia get bigger over time, how long can I delay hernia surgery, what makes a hernia worse, does a small hernia always grow, hernia growth rate, Dr. Kumar of Billroth Hospitals';
// PNG rather than the WebP used on the page: some social scrapers still do not
// render WebP previews, and og:image is never downloaded by page visitors.
$page_image       = $site['url'] . 'assets/images/how-fast-does-a-hernia-grow.png';
$page_published   = '2026-08-31';
$page_modified    = '2026-08-31';

// Set explicitly. The slug names no hernia type, so the URL-based inference in
// header.php would not land on a useful "about" node for this page.
$schema_about = [
    '@type'       => 'MedicalCondition',
    'name'        => 'Abdominal Hernia',
    'description' => 'A defect in the abdominal or groin muscle wall through which fat or intestine protrudes. Untreated hernias tend to enlarge gradually, though the rate varies widely between individuals.',
    'riskFactor'  => [
        ['@type' => 'MedicalRiskFactor', 'name' => 'Obesity and raised intra-abdominal pressure'],
        ['@type' => 'MedicalRiskFactor', 'name' => 'Chronic cough'],
        ['@type' => 'MedicalRiskFactor', 'name' => 'Repeated heavy lifting'],
        ['@type' => 'MedicalRiskFactor', 'name' => 'Chronic constipation and straining'],
        ['@type' => 'MedicalRiskFactor', 'name' => 'Pregnancy'],
    ],
    'possibleTreatment' => [
        ['@type' => 'MedicalProcedure', 'name' => 'Laparoscopic Hernia Repair'],
        ['@type' => 'MedicalProcedure', 'name' => 'Robotic Hernia Repair'],
    ],
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'How fast does a hernia grow?',
        'a' => 'There is no measured rate. Hernias grow in response to abdominal pressure rather than time, so progression varies widely between people and cannot be predicted from size alone.',
    ],
    [
        'q' => 'Can a hernia grow overnight?',
        'a' => 'The bulge can appear suddenly, often after a cough or a heavy lift, but the muscle defect behind it usually developed slowly over months or years.',
    ],
    [
        'q' => 'Does a small hernia always get bigger?',
        'a' => 'No. Most enlarge gradually, but some stay stable for years. Researchers openly describe why certain hernias progress and others do not as poorly understood.',
    ],
    [
        'q' => 'How long can I safely delay hernia surgery?',
        'a' => 'Trial data on groin hernias in men found about a third moved to surgery within three years and over two thirds by ten years, usually because of pain.',
    ],
    [
        'q' => 'Does exercise make a hernia grow faster?',
        'a' => 'Gentle activity is fine and encouraged. Heavy lifting, breath holding, and hard straining raise abdominal pressure sharply, and those repeated spikes are what push more tissue through.',
    ],
    [
        'q' => 'Does a bigger hernia mean a bigger operation?',
        'a' => 'Generally yes. A wider defect often needs larger mesh, longer surgery, and more dissection, which can mean a slower recovery than repairing the same hernia earlier.',
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
            <span class="text-white">Hernia Growth Timeline</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Timeline Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                How Fast Does a Hernia Grow? <br class="hidden md:inline"><span class="text-accent">What to Expect Month by Month</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar of Billroth Hospitals</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>August 31, 2026</span>
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

                    <img src="<?= $base_path ?>assets/images/how-fast-does-a-hernia-grow.webp" alt="How Fast Does a Hernia Grow? What to Expect Month by Month, with a patient holding his abdomen in a consultation room" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: How Fast Does a Hernia Grow?</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>There is no published growth rate, and no surgeon can honestly give you centimeters per month.</strong> A hernia does not enlarge on a schedule. It enlarges in response to pressure inside your abdomen, which means two people diagnosed on the same day can be in completely different positions a year later.
                        </p>
                    </div>

                    <!-- 1. Why no rate exists -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">Why No Surgeon Can Give You Centimeters Per Month</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        If you have searched <strong>how fast does a hernia grow</strong> and come away frustrated, there is a reason. Nobody has measured it properly. Hernia research has concentrated on repair techniques and recurrence rates, not on tracking untreated hernias with a tape measure over time. A recent review of hernia biomechanics is unusually candid about this, describing why some hernias enlarge while others stay stable as insufficiently studied.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        So when a page tells you a hernia grows a specific number of millimeters per year, that figure is not coming from evidence. The useful question is not how fast hernias grow in general. It is what determines whether yours grows at all.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        The answer is pressure. Every cough, lift, strain and laugh briefly raises the pressure inside your abdomen and presses tissue against the weak point in the muscle wall. The defect widens in small increments under those repeated spikes. Calendar time only matters because it accumulates more of them. A person doing heavy manual work with a smoker's cough is loading that defect thousands of times more often than someone with a desk job, and their hernias will not behave the same way.
                    </p>

                    <!-- 2. The timeline table -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What Actually Changes Month by Month</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Since size cannot be predicted, the table below tracks what patients actually notice changing, alongside what the research genuinely supports at each stage. Treat it as a typical pattern, not a forecast for your own hernia.
                    </p>

                    <div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm">
                        <table class="w-full text-slate-700 text-sm">
                            <thead>
                                <tr class="bg-brand-900 text-white">
                                    <th class="px-5 py-3.5 text-left font-semibold">Time since diagnosis</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">What usually changes</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">What the evidence shows</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">0 to 3 months</td>
                                    <td class="px-5 py-3.5">Often nothing noticeable. The bulge may appear only when you stand, cough or strain.</td>
                                    <td class="px-5 py-3.5">Most people report no perceptible change this early.</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">3 to 6 months</td>
                                    <td class="px-5 py-3.5">The bulge becomes more consistently visible. Mild dragging after a long day on your feet.</td>
                                    <td class="px-5 py-3.5">Symptoms, not size, are what patients notice first.</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">6 to 12 months</td>
                                    <td class="px-5 py-3.5">Pushing it back may take more deliberate effort. Discomfort arrives earlier in the day.</td>
                                    <td class="px-5 py-3.5">Around 29 percent of monitored patients moved to surgery within the first year.</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">1 to 2 years</td>
                                    <td class="px-5 py-3.5">More tissue occupies the sac. Belts and waistbands start to feel different.</td>
                                    <td class="px-5 py-3.5">Pain, not size, is the most common reason people choose repair.</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">2 to 5 years</td>
                                    <td class="px-5 py-3.5">Gradual enlargement is typical as the edges of the defect stretch.</td>
                                    <td class="px-5 py-3.5">Roughly half of monitored groin hernias in men came to surgery within five years.</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Beyond 5 years</td>
                                    <td class="px-5 py-3.5">Larger defects, more contents, and a repair that is technically more demanding.</td>
                                    <td class="px-5 py-3.5 font-semibold">Over two thirds by ten years, and above 96 percent by twelve.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- 3. Accelerators -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What Speeds a Hernia Up</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        These are the factors that move a hernia down the table faster. Every one of them works through the same mechanism: raised pressure inside the abdomen, applied repeatedly.
                    </p>
                    <ul class="list-none p-0 space-y-4 mb-8">
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                            <span class="w-2.5 h-2.5 rounded-full bg-brand-600 mt-2 shrink-0"></span>
                            <div><strong class="text-slate-900 block">A chronic cough</strong><span class="text-slate-600 text-sm">The most underestimated accelerator on this list. Coughing from smoking, allergy or COPD delivers thousands of sharp pressure spikes against the same weak point, day after day.</span></div>
                        </li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                            <span class="w-2.5 h-2.5 rounded-full bg-brand-600 mt-2 shrink-0"></span>
                            <div><strong class="text-slate-900 block">Carrying excess weight</strong><span class="text-slate-600 text-sm">Extra abdominal weight raises baseline pressure constantly rather than in spikes, which is why a raised BMI is linked to faster progression and to more complex repairs. Our guide to <a href="<?= $base_path ?>special-considerations/obesity" class="text-brand-700 font-semibold hover:underline">hernia surgery and obesity</a> covers this in depth.</span></div>
                        </li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                            <span class="w-2.5 h-2.5 rounded-full bg-brand-600 mt-2 shrink-0"></span>
                            <div><strong class="text-slate-900 block">Repeated heavy lifting, especially with poor technique</strong><span class="text-slate-600 text-sm">Holding your breath while lifting turns the abdomen into a sealed pressurized cavity. The load has to go somewhere, and it goes to the weakest point.</span></div>
                        </li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                            <span class="w-2.5 h-2.5 rounded-full bg-brand-600 mt-2 shrink-0"></span>
                            <div><strong class="text-slate-900 block">Chronic constipation and straining</strong><span class="text-slate-600 text-sm">Sustained bearing down produces prolonged high pressure rather than a brief spike. It is also one of the easiest accelerators to fix, through fiber, fluids and treating the underlying cause.</span></div>
                        </li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                            <span class="w-2.5 h-2.5 rounded-full bg-brand-600 mt-2 shrink-0"></span>
                            <div><strong class="text-slate-900 block">Pregnancy</strong><span class="text-slate-600 text-sm">Progressive stretching of the abdominal wall over months, combined with the strain of delivery. Umbilical and epigastric hernias in particular tend to become more prominent.</span></div>
                        </li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                            <span class="w-2.5 h-2.5 rounded-full bg-brand-600 mt-2 shrink-0"></span>
                            <div><strong class="text-slate-900 block">Heavy physical occupations</strong><span class="text-slate-600 text-sm">Not one dramatic lift but the cumulative total. Someone lifting all day is loading the defect far more often than the calendar alone suggests. The wider picture sits in our guide to <a href="<?= $base_path ?>hernia/causes" class="text-brand-700 font-semibold hover:underline">what causes a hernia</a>.</span></div>
                        </li>
                    </ul>

                    <!-- 4. Delay data -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What the Delay Research Actually Shows</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        There is one area where real numbers exist. Randomized trials have followed men with mildly symptomatic or symptom-free groin hernias who chose monitoring instead of immediate surgery, and recorded how many eventually crossed over to an operation.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Roughly 29 percent had surgery within the first year. About a third had by three years, around half within five, more than two thirds by ten, and by twelve years the figure exceeded 96 percent. The dominant reason was not an emergency. It was pain, which accounted for the majority of crossovers.
                    </p>
                    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 rounded-r-2xl mb-8">
                        <p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">
                            <strong>Read that carefully, because it cuts both ways.</strong> In the short term, waiting is reasonable and safe for many people. Over a long enough horizon, monitoring turns out to be a delay rather than an alternative. These figures come from groin hernias in men aged 50 and over, so they do not transfer directly to umbilical, incisional or complex hernias, or to younger patients.
                        </p>
                    </div>

                    <!-- 5. The ones that do not grow -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">The Hernias That Do Not Grow</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        It would be easy to read the section above as a warning that every hernia is on an inevitable march. That is not what the evidence says. Some hernias stay essentially unchanged for years, and the honest position is that surgeons cannot reliably predict in advance which ones will.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        What tends to distinguish the stable ones is a small, firm-edged defect in someone whose pressure load is low: no chronic cough, stable weight, no heavy lifting, no straining. If that describes you and the hernia is not causing symptoms, monitoring it with a surgeon who examines it at agreed intervals is a legitimate plan, not negligence.
                    </p>

                    <!-- 6. Signs it is moving faster -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Six Signs Yours Is Moving Faster Than It Should</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        You will not spot a few millimeters of change by looking. These are the practical signals that a hernia is progressing rather than sitting still:
                    </p>
                    <ul class="list-none p-0 space-y-3 mb-8">
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-brand-100 text-brand-700 text-xs font-bold flex items-center justify-center shrink-0">1</span><span class="text-slate-600 text-sm md:text-base">Reducing the bulge takes more deliberate effort than it did a few months ago.</span></li>
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-brand-100 text-brand-700 text-xs font-bold flex items-center justify-center shrink-0">2</span><span class="text-slate-600 text-sm md:text-base">Discomfort now starts earlier in the day than it used to.</span></li>
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-brand-100 text-brand-700 text-xs font-bold flex items-center justify-center shrink-0">3</span><span class="text-slate-600 text-sm md:text-base">The bulge stays visible when lying down, when it previously disappeared.</span></li>
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-brand-100 text-brand-700 text-xs font-bold flex items-center justify-center shrink-0">4</span><span class="text-slate-600 text-sm md:text-base">You have started avoiding activities, lifting or exercise because of it.</span></li>
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-brand-100 text-brand-700 text-xs font-bold flex items-center justify-center shrink-0">5</span><span class="text-slate-600 text-sm md:text-base">Waistbands and belts sit differently, or you have changed how you dress around it.</span></li>
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-brand-100 text-brand-700 text-xs font-bold flex items-center justify-center shrink-0">6</span><span class="text-slate-600 text-sm md:text-base">A dragging ache appears after lifting that never used to bother you.</span></li>
                    </ul>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        None of these is an emergency. They are the signals that the balance has shifted from watching to planning. A hernia that suddenly becomes hard, painful and impossible to push back is a different situation entirely and needs a hospital the same day.
                    </p>

                    <!-- 7. What it means for timing -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What This Means for Timing Your Repair</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Size matters less for danger than people assume, but it matters a great deal for the operation itself. A small defect repaired early is usually a straightforward keyhole procedure with a standard mesh and a quick recovery. The same hernia several years later can mean a wider defect, a larger mesh, more dissection to free tissue that has settled into the sac, and a longer road back to normal activity.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        That is the real cost of waiting, and it is a gradual one rather than a cliff edge. <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-brand-700 font-semibold hover:underline">Dr. Kumar of Billroth Hospitals</a>, with 29 years of practice and more than 10,000 hernia repairs at Billroth Hospitals in Chennai, works from measurement rather than guesswork: examine it, record the defect size, agree a review interval, and let the trajectory make the decision rather than a number from the internet. If you are still weighing up whether to operate at all, our companion guide on <a href="<?= $base_path ?>blog/do-i-need-hernia-surgery" class="text-brand-700 font-semibold hover:underline">whether you need hernia surgery</a> sets out the full decision framework.
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
                            This article is general medical information, not a diagnosis. The only way to know how your hernia is behaving is to have it examined and measured by a surgeon.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Want to Know Where Yours Actually Stands?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Have the defect measured and a review interval agreed, so the decision to repair is based on your trajectory rather than guesswork.</p>
                        <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition shadow-lg hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            Book a Hernia Assessment
                        </a>
                    </div>
                </div>
            </article>

            <!-- Right Column: Sidebar -->
            <aside class="lg:col-span-4 space-y-8">
                <!-- Author Profile Card -->
                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm text-center">
                    <img src="<?= $base_path ?>assets/images/dr-kumar-headshot-2026.jpg" alt="Dr. Kumar of Billroth Hospitals, hernia and abdominal wall surgeon in Chennai" width="96" height="96" class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-brand-50 shadow-md mb-4">
                    <h3 class="font-bold text-slate-900 text-lg mb-1">Dr. Kumar of Billroth Hospitals</h3>
                    <p class="text-xs text-brand-700 font-semibold mb-3">Senior Hernia &amp; Abdominal Wall Surgeon</p>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">Over 29 years of experience specializing in advanced laparoscopic and robotic hernia repairs at Billroth Hospitals, Chennai.</p>
                    <a href="<?= $base_path ?>treatment/hernia-surgeon-in-chennai" class="inline-flex items-center justify-center w-full bg-brand-50 hover:bg-brand-100 text-brand-800 text-xs font-bold py-2.5 rounded-xl border border-brand-100 transition">
                        View Doctor Profile
                    </a>
                </div>

                <!-- Key Takeaway Card -->
                <div class="bg-brand-50 rounded-3xl p-6 border border-brand-100">
                    <h3 class="font-bold text-brand-900 text-base mb-3">The Short Version</h3>
                    <ul class="list-none p-0 m-0 space-y-2.5">
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>No measured growth rate exists for hernias.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Pressure drives growth, not elapsed time.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Some hernias stay stable for years.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Most people who monitor do eventually operate, usually for pain.</li>
                    </ul>
                </div>

                <!-- Related Articles Card -->
                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                    <h3 class="font-bold text-slate-900 text-base mb-4 border-b border-slate-100 pb-2">Related Articles</h3>
                    <div class="space-y-4">
                        <a href="<?= $base_path ?>blog/hernia-emergency-warning-signs" class="flex gap-3 group">
                            <img src="<?= $base_path ?>assets/images/hernia-emergency-warning-signs.webp" alt="Hernia Warning Signs: When It Becomes an Emergency" width="64" height="64" class="w-16 h-16 rounded-xl object-cover shrink-0" loading="lazy">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Hernia Warning Signs: When It Becomes an Emergency</h4>
                                <span class="text-[11px] text-slate-400">28 August 2026</span>
                            </div>
                        </a>
                        <a href="<?= $base_path ?>blog/is-hernia-surgery-dangerous" class="flex gap-3 group">
                            <img src="<?= $base_path ?>assets/images/is-hernia-surgery-dangerous.jpg" alt="Is Hernia Surgery Dangerous?" width="64" height="64" class="w-16 h-16 rounded-xl object-cover shrink-0" loading="lazy">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Is Hernia Surgery Dangerous?</h4>
                                <span class="text-[11px] text-slate-400">14 July 2026</span>
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
// BreadcrumbList and the MedicalCondition ("about") node come from header.php.
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
