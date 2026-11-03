<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2027-04-28');

$page_title       = 'Caring for Someone After Hernia Surgery: A Family Guide';
$page_description = 'Caring for someone after hernia surgery? A family guide to the first days at home, what to watch for, when to call the surgical team, and what helps most.';
$page_keywords    = 'caring for someone after hernia surgery, how to help after hernia surgery, hernia surgery caregiver guide, hernia surgery family help, what to do after hernia surgery for family';
$page_image       = $site['url'] . 'assets/images/caring-for-someone-after-hernia-surgery.png';
$page_published   = '2027-04-28';
$page_modified    = '2027-04-28';

$schema_about = [
    '@type'       => 'MedicalProcedure',
    'name'        => 'Caregiver Support After Hernia Surgery',
    'description' => 'Guidance for family members and caregivers supporting a patient at home after hernia repair, including what to ask at discharge, what to watch for, and which signs need a call to the surgical team or emergency care.',
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'How can I help someone after hernia surgery?',
        'a' => 'Keep the discharge plan and medicine log, walk with them, take over lifting and errands, check the wound daily, and call the surgical team if warning signs appear.',
    ],
    [
        'q' => 'How long does someone need care after hernia surgery?',
        'a' => 'Help matters most in the first few days, with lifting and errands needed for longer. Typical recovery is around 4 to 6 weeks, often longer after open surgery.',
    ],
    [
        'q' => 'Should the patient stay in bed after hernia surgery?',
        'a' => 'No. Rest is important, but short, frequent walks are encouraged because movement improves circulation and lowers clot risk. Avoid lifting and strenuous activity, and follow the surgeon\'s plan.',
    ],
    [
        'q' => 'When should I call the doctor after hernia surgery?',
        'a' => 'Call for fever, a wound with pus, spreading redness or heavy bleeding, a more swollen or painful belly, or vomiting beyond 24 hours. Seek emergency help for breathing trouble or chest pain.',
    ],
    [
        'q' => 'Can the patient be left alone after hernia surgery?',
        'a' => 'Ask the surgical team. A responsible adult nearby during the first night after anesthesia is commonly advised, and help with lifting and errands remains useful for weeks.',
    ],
    [
        'q' => 'What should the patient not lift after hernia surgery?',
        'a' => 'Heavy lifting and strenuous activity are avoided for at least 4 to 6 weeks, so take over water cans, shopping, luggage and children until the surgeon clears them.',
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
            <span class="text-white">Caring After Surgery</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Caregiver Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Caring for Someone After Hernia Surgery: <br class="hidden md:inline"><span class="text-accent">A Family Guide</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar of Billroth Hospitals</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>April 28, 2027</span>
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

                    <img src="<?= $base_path ?>assets/images/caring-for-someone-after-hernia-surgery.png" alt="Caring for Someone After Hernia Surgery: A Family Guide" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: Caring for Someone After Hernia Surgery</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>Keep the written discharge plan in your own hands and do the lifting for them.</strong> Encourage short walks rather than bed rest, check the wound and belly daily, and know the signs that mean a call to the surgical team: fever, spreading redness or pus, heavy bleeding, a more swollen or painful belly, or vomiting that continues.
                        </p>
                    </div>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">Your Job Is Different From the Patient's</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">The person who had surgery is focused on pain and rest. Your role is to be the observer and the organizer: you notice changes they may play down, you keep the plan on track, and you take over the physical jobs that strain a healing repair. Patient-side detail lives in our <a href="<?= $base_path ?>blog/hernia-surgery-recovery-week-by-week" class="text-brand-700 font-semibold hover:underline">week-by-week recovery guide</a> and our <a href="<?= $base_path ?>treatment/recovery" class="text-brand-700 font-semibold hover:underline">hernia surgery recovery</a> page. This guide is written for you.</p>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Before You Leave the Hospital: Questions to Ask</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">Take a notebook, because the patient may be drowsy from anesthesia when instructions are given. Ask the team to write down or confirm:</p>
                    <ul class="list-disc pl-6 space-y-2 text-slate-600 leading-relaxed mb-6"><li>Each medicine, its timing and what it is for</li><li>How to care for the dressing, and who changes it</li><li>Which phone number to call, and when to call it</li><li>Whether an adult should stay overnight at home</li><li>Diet and bowel advice, and which activities to avoid</li><li>The date and place of the follow-up review</li></ul>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">The First Two Days at Home</h2>
                    <ul class="list-disc pl-6 space-y-2 text-slate-600 leading-relaxed mb-6"><li><strong>Stay close.</strong> Ask the team whether someone should be with the patient the first night. A responsible adult nearby after anesthesia is commonly advised.</li><li><strong>Keep a medicine log.</strong> Write the time of every dose. It prevents missed or doubled doses and helps if you need to call the team.</li><li><strong>Help with the first walks.</strong> Gentle movement helps circulation and lowers the risk of clots. Walk beside them to the bathroom, especially if they feel dizzy.</li><li><strong>Offer fluids and light meals.</strong> See our guide to <a href="<?= $base_path ?>blog/what-not-to-eat-after-hernia-surgery" class="text-brand-700 font-semibold hover:underline">what not to eat after hernia surgery</a>.</li><li><strong>Teach the pillow trick.</strong> Pressing a pillow or a hand over the wound when coughing or sneezing eases the pull, as the NHS advises.</li></ul>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What to Watch For</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">Use this as a quick reference. It draws on NHS, Alberta Health and Medtronic recovery guidance and does not replace your surgeon's own list.</p>
                    <div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm"><table class="w-full text-slate-700 text-sm"><thead><tr class="bg-brand-900 text-white"><th class="px-5 py-3.5 text-left font-semibold">Usually expected</th><th class="px-5 py-3.5 text-left font-semibold">Call the surgical team</th><th class="px-5 py-3.5 text-left font-semibold">Emergency</th></tr></thead><tbody class="divide-y divide-slate-100"><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Soreness at the wound for the first few days</td><td class="px-5 py-3.5">Fever (hospital guides use 38 to 38.3 C as the line)</td><td class="px-5 py-3.5">Severe difficulty breathing</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Some swelling and bruising, which can last a couple of weeks</td><td class="px-5 py-3.5">Wound with pus, spreading redness, warmth or worsening pain</td><td class="px-5 py-3.5">Chest or upper back pain</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Tiredness</td><td class="px-5 py-3.5">Belly more swollen or painful</td><td class="px-5 py-3.5">Coughing up more than a few spots of blood</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Light bleeding for a couple of days</td><td class="px-5 py-3.5">Still feeling or being sick 24 hours after surgery</td><td class="px-5 py-3.5">Heavy bleeding that soaks the dressing</td></tr><tr class="hover:bg-slate-50 align-top"><td class="px-5 py-3.5 font-semibold">Sleepiness from anesthesia on the first day</td><td class="px-5 py-3.5">No bowel movement for three days or more, or throbbing leg pain or new breathlessness</td><td class="px-5 py-3.5">A hard, painful bulge with vomiting</td></tr></tbody></table></div>
                    <p class="text-slate-600 leading-relaxed mb-6">Call the surgical team early rather than late. If you are unsure whether it is an emergency, our guide to <a href="<?= $base_path ?>blog/hernia-emergency-warning-signs" class="text-brand-700 font-semibold hover:underline">hernia emergency warning signs</a> lays out the red flags.</p>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Where Families Often Go Wrong</h2>
                    <ul class="list-disc pl-6 space-y-2 text-slate-600 leading-relaxed mb-6"><li><strong>"Let them rest in bed."</strong> Rest matters, but short walks are part of recovery.</li><li><strong>Letting them lift.</strong> Take over water cans, groceries, luggage and children. Heavy lifting is avoided for at least 4 to 6 weeks, and the surgeon sets the exact date.</li><li><strong>Rich, heavy food as care.</strong> Love often comes as ghee and sweets, but straining at the toilet is the last thing a repair needs. See our guide to <a href="<?= $base_path ?>blog/constipation-after-hernia-surgery" class="text-brand-700 font-semibold hover:underline">constipation after hernia surgery</a>.</li><li><strong>Crowded visiting.</strong> A stream of visitors tires the patient. Set visiting hours.</li><li><strong>Applying oils, pastes or tight cloth bands to the wound.</strong> Do not, unless the surgeon has said so.</li><li><strong>Giving extra medicines.</strong> Only give what has been prescribed.</li><li><strong>Pushing an early return to work.</strong> Pressure from family or employers is a common reason people overdo it in the first weeks.</li></ul>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Pain: Know What Is Typical</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">Some people hide pain, and others dread it. Keep to the prescribed schedule and read our guide on <a href="<?= $base_path ?>blog/how-painful-is-hernia-surgery" class="text-brand-700 font-semibold hover:underline">how painful hernia surgery is</a> so you know what is typical. Pain that is getting worse instead of better is a reason to call.</p>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Looking After the Carer, Too</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">Recovery usually takes around 4 to 6 weeks, and longer after open surgery. Share the duties among family members so that one person is not worn down, and expect the patient to be irritable at times. Restrictions are frustrating for people used to being active, and patience helps more than persuasion.</p>

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
                            This article is general information for families and does not replace the instructions given by the surgical team. Follow the surgeon's discharge plan and call the team if you are worried.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Planning Surgery for a Family Member?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Book a consultation so the whole family can ask questions, understand the recovery plan and know what help will be needed at home.</p>
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
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Keep the written plan and a medicine log.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Encourage short walks, not bed rest.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>You do the lifting, they do the healing.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Call early for fever, pus, bleeding or a swollen, painful belly.</li>
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
                        <a href="<?= $base_path ?>blog/showering-stairs-and-intimacy-after-hernia-surgery" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Showering, Stairs and Intimacy After Hernia Surgery</h4>
                                <span class="text-[11px] text-slate-400">13 April 2027</span>
                            </div>
                        </a>
                        <a href="<?= $base_path ?>blog/hospital-stay-after-hernia-surgery" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Day-Care or Overnight Stay After Hernia Surgery</h4>
                                <span class="text-[11px] text-slate-400">28 January 2027</span>
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
