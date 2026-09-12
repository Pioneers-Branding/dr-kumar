<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2026-09-04');

$page_title       = 'When Can I Return to Work After Hernia Surgery?';
$page_description = 'When can you return to work after hernia surgery? A job-by-job answer for desk, driving, retail, manual and heavy labor roles, not just a vague range.';
$page_keywords    = 'when can i return to work after hernia surgery, hernia surgery time off work, hernia surgery return to work by job, desk job hernia recovery, manual labor hernia recovery';
$page_image       = $site['url'] . 'assets/images/return-to-work-after-hernia-surgery.png';
$page_published   = '2026-09-04';
$page_modified    = '2026-09-04';

// Set explicitly. This page is about return-to-work timing specifically, which
// is a narrower question than the general recovery timeline header.php would
// otherwise infer from the slug.
$schema_about = [
    '@type'       => 'MedicalProcedure',
    'name'        => 'Hernia Repair Recovery and Return to Work',
    'description' => 'The time before a patient can safely return to work after hernia repair, which depends on the physical demands of the job and whether the repair was done by keyhole or open surgery.',
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'How soon can I go back to a desk job after hernia surgery?',
        'a' => 'Most people return to desk work within five to seven days after keyhole repair, sometimes sooner if working from home. Open repair usually needs one to two weeks.',
    ],
    [
        'q' => 'How soon can I drive after hernia surgery?',
        'a' => 'Once you are off strong painkillers and can perform an emergency stop without hesitation or pain, usually seven to ten days after keyhole repair and a bit longer after open surgery.',
    ],
    [
        'q' => 'Is standing all day at work safe during hernia recovery?',
        'a' => 'Standing itself is fine once you are mobile, but retail and similar roles often involve stock lifting. Most people manage full shifts within two to three weeks.',
    ],
    [
        'q' => 'What if my job involves occasional heavy lifting?',
        'a' => 'Occasional lifting still counts. Plan for three to four weeks before lifting above five kilograms, and confirm the exact limit with your surgeon at your review appointment.',
    ],
    [
        'q' => 'Does open surgery mean more time off than keyhole repair?',
        'a' => 'Usually yes, by roughly one to two weeks across every job category, because open repair involves a larger incision and more tissue disruption to heal.',
    ],
    [
        'q' => 'What happens if I go back to work too soon?',
        'a' => 'Returning before the muscle wall has enough strength raises the risk of pain, wound problems, and in some cases pushes the hernia repair itself toward failure.',
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
            <span class="text-white">Return to Work</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Recovery Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                When Can I Go Back to Work <br class="hidden md:inline"><span class="text-accent">After Hernia Surgery?</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>September 4, 2026</span>
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

                    <img src="<?= $base_path ?>assets/images/return-to-work-after-hernia-surgery.png" alt="When Can I Go Back to Work After Hernia Surgery?" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: When Can I Return to Work?</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>Desk work: five to seven days. Driving-based work: seven to ten days. Retail and light physical roles: two to three weeks. Manual labor: three to four weeks. Heavy lifting: four to six weeks.</strong> These are typical figures for keyhole repair. Open surgery generally adds one to two weeks to every category. Your own date is confirmed at the post-operative review, once your surgeon has actually examined the repair.
                        </p>
                    </div>

                    <!-- 1. Why job type is the real variable -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">Why the Answer Depends on Your Job, Not the Calendar</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Most recovery advice gives a single number, and that number is nearly always wrong for someone. The muscle wall does not know what day it is. What it responds to is load: how much pressure is placed on the repair, how often, and how suddenly. A desk job places almost none. A warehouse shift places a great deal, repeatedly, all day.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        That is why <strong>when can I return to work after hernia surgery</strong> genuinely needs a job-by-job answer rather than one figure everyone is told to remember. The table below is built around that, using the physical demand of the role as the organizing factor rather than the calendar.
                    </p>

                    <!-- 2. The job-type table -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Return-to-Work Timeline by Job Type</h2>
                    <div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm">
                        <table class="w-full text-slate-700 text-sm">
                            <thead>
                                <tr class="bg-brand-900 text-white">
                                    <th class="px-5 py-3.5 text-left font-semibold">Job type</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">Keyhole repair</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">Open repair</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Desk or remote work</td>
                                    <td class="px-5 py-3.5">5 to 7 days</td>
                                    <td class="px-5 py-3.5">10 to 14 days</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Driving, delivery, sales calls</td>
                                    <td class="px-5 py-3.5">7 to 10 days</td>
                                    <td class="px-5 py-3.5">2 to 3 weeks</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Retail, standing, light stock work</td>
                                    <td class="px-5 py-3.5">2 to 3 weeks</td>
                                    <td class="px-5 py-3.5">3 to 4 weeks</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Manual work, moderate lifting</td>
                                    <td class="px-5 py-3.5">3 to 4 weeks</td>
                                    <td class="px-5 py-3.5">4 to 5 weeks</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Heavy labor, construction, warehouse</td>
                                    <td class="px-5 py-3.5 font-semibold">4 to 6 weeks</td>
                                    <td class="px-5 py-3.5 font-semibold">6 to 8 weeks</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Treat these as planning ranges, not guarantees. The size of the original hernia, whether it was a first repair or a recurrence, and how your own healing progresses all shift the number within the range. A fuller week-by-week picture of what recovery looks like in general sits in our <a href="<?= $base_path ?>blog/hernia-surgery-recovery-week-by-week" class="text-brand-700 font-semibold hover:underline">recovery timeline guide</a>.
                    </p>

                    <!-- 3. Driving specifically -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Driving Deserves Its Own Answer</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Driving sits outside the simple desk-versus-manual split because the test for it is not time, it is a specific physical action: can you perform an emergency stop, hard and without hesitation, without pain making you flinch or slow down. Most people reach that point seven to ten days after keyhole repair. You also need to be off strong prescription painkillers, since they affect reaction time and judgment regardless of how the wound feels.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        If your work is driving-based, whether that is deliveries, sales, or a daily commute to a physical job, this test matters more than any date on a calendar. Try it gently in a parked, stationary vehicle first.
                    </p>

                    <!-- 4. What "light duty" actually means -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">If You Are Offered Light Duty</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Many employers offer a modified role for the first couple of weeks back. That can genuinely shorten your time off, provided it is enforced rather than aspirational. Light duty only works if it actually removes lifting, prolonged standing, and repetitive bending, not just relabels the same job with a gentler name. Agree the specifics with your manager and your surgeon before you return, not on the first day back.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        For roles built around laparoscopic technique specifically, the smaller incisions of <a href="<?= $base_path ?>treatment/best-laparoscopic-hernia-surgery-in-chennai" class="text-brand-700 font-semibold hover:underline">keyhole hernia surgery</a> are a large part of why the desk and driving categories above move so much faster than the open-surgery column.
                    </p>

                    <!-- 5. Warning signs -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Signs You Went Back Too Soon</h2>
                    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 rounded-r-2xl mb-8">
                        <p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">
                            A pulling sensation at the end of a shift, swelling that appears in the evening and settles overnight, or pain that is worse on the days you work are all signals to slow back down and extend your time off, not push through. Sudden sharp pain, a new bulge, or the wound reopening need same-day medical attention, not a wait-and-see approach.
                        </p>
                    </div>

                    <!-- 6. Setting the actual date -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">How Your Actual Date Gets Set</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        The ranges above are a starting point for planning conversations with your employer, not a certificate. Your surgeon sets your real return date at the post-operative review, once the wound has been examined and your specific repair, defect size, and healing progress are known. Bring your job description in concrete terms: what you lift, how often, and for how long, rather than just a job title, since two people with the same title can have very different physical demands.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        For a full breakdown of what happens week by week regardless of your job, our <a href="<?= $base_path ?>treatment/recovery" class="text-brand-700 font-semibold hover:underline">hernia surgery recovery guide</a> covers pain, wound care, and activity in general terms alongside this occupation-specific picture.
                    </p>

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
                            This article is general medical information, not a diagnosis. Your actual return-to-work date should be confirmed by the surgeon who performed your repair, based on your specific procedure and progress.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Need a Return-to-Work Date You Can Plan Around?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Book a review so your surgeon can examine the repair and set a date based on your job, not a generic range.</p>
                        <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition shadow-lg hover:scale-105">
                            Book a Consultation
                        </a>
                    </div>
                </div>
            </article>

            <aside class="lg:col-span-4 space-y-8">
                <div class="bg-brand-50 rounded-3xl p-6 border border-brand-100">
                    <h3 class="font-bold text-brand-900 text-base mb-3">The Short Version</h3>
                    <ul class="list-none p-0 m-0 space-y-2.5">
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Desk work: 5 to 7 days after keyhole repair.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Driving needs the emergency-stop test, not just a date.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Heavy labor: plan for 4 to 6 weeks minimum.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Open surgery adds roughly 1 to 2 weeks to every category.</li>
                    </ul>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm text-center">
                    <img src="<?= $base_path ?>assets/images/doctor-about.avif" alt="Dr. Kumar, hernia and abdominal wall surgeon in Chennai" width="96" height="96" class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-brand-50 shadow-md mb-4">
                    <h3 class="font-bold text-slate-900 text-lg mb-1">Dr. Kumar</h3>
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
                        <a href="<?= $base_path ?>blog/hernia-surgery-recovery-week-by-week" class="flex gap-3 group">
                            <img src="<?= $base_path ?>assets/images/hernia-surgery-recovery-week-by-week.png" alt="Hernia Surgery Recovery Time" width="64" height="64" class="w-16 h-16 rounded-xl object-cover shrink-0" loading="lazy">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Hernia Surgery Recovery Time: Week by Week</h4>
                                <span class="text-[11px] text-slate-400">09 September 2026</span>
                            </div>
                        </a>
                        <a href="<?= $base_path ?>blog/hernia-in-women" class="flex gap-3 group">
                            <img src="<?= $base_path ?>assets/images/hernia-in-women.webp" alt="Hernia in Women" width="64" height="64" class="w-16 h-16 rounded-xl object-cover shrink-0" loading="lazy">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Hernia in Women: Why It's Missed</h4>
                                <span class="text-[11px] text-slate-400">03 September 2026</span>
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
// markup and the visible text can never disagree.
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
