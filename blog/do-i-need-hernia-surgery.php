<?php
require_once __DIR__ . '/../includes/config.php';

$page_title       = "Do I Need Hernia Surgery? A Surgeon's Honest Answer";
$page_description = 'Do I need hernia surgery? A hernia surgeon explains when to operate, when it is safe to wait, and the warning signs that mean you need care right away.';
$page_keywords    = 'do i need hernia surgery, when is hernia surgery necessary, how long can you wait to have hernia surgery, signs you need hernia surgery, what happens if a hernia is left untreated, watchful waiting hernia, hernia surgery decision, Best Hernia Surgeon in Chennai, Dr. Kumar of Billroth Hospitals';
$page_image       = $site['url'] . 'assets/images/do-i-need-hernia-surgery.jpg';
$page_published   = '2026-08-17';
$page_modified    = '2026-08-17';

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'How long can you wait to have hernia surgery?',
        'a' => 'There is no fixed deadline. Small, painless hernias can often be monitored for months or years, but pain, growth, or difficulty pushing the bulge back means it is time to schedule repair.',
    ],
    [
        'q' => 'Can a hernia heal on its own without surgery?',
        'a' => 'No. A hernia is a gap in the muscle wall, and muscle does not close over that gap by itself. Belts and exercises may ease symptoms but cannot repair the defect.',
    ],
    [
        'q' => 'What happens if you never get a hernia repaired?',
        'a' => 'Most hernias slowly enlarge as pressure pushes more tissue through the defect. The main risks are increasing pain and, less commonly, tissue becoming trapped, which turns a planned operation into an emergency.',
    ],
    [
        'q' => 'Is it safe to live with a small hernia that does not hurt?',
        'a' => 'Often yes, in the short term, and your surgeon may agree to monitor it. Long-term trial data shows most people eventually choose repair anyway, usually because the hernia starts to hurt.',
    ],
    [
        'q' => 'Does a hernia always get bigger over time?',
        'a' => 'Not always, and some stay stable for years. But the defect works like a one-way opening, so coughing, lifting, and straining tend to push more tissue through it over time.',
    ],
    [
        'q' => 'When is a hernia an emergency?',
        'a' => 'Go to hospital immediately if the bulge becomes hard and will not push back, turns red or purple, or comes with severe pain, fever, nausea, or vomiting.',
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
            <span class="text-white">Surgery Decision Guide</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Treatment Decision Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Do I Need Hernia Surgery? <br class="hidden md:inline"><span class="text-accent">A Surgeon's Honest Answer</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar of Billroth Hospitals</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>August 17, 2026</span>
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
                    <img src="<?= $base_path ?>assets/images/do-i-need-hernia-surgery.jpg" alt="Dr. Kumar of Billroth Hospitals discussing hernia surgery options with a patient during consultation" width="1600" height="900" class="w-full rounded-2xl mb-8 shadow-md object-cover max-h-[440px]">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: Do I Need Hernia Surgery?</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>Surgery is the only way to repair a hernia; the gap in the muscle wall cannot close by itself.</strong> Whether you need it <em>now</em> depends on symptoms. A bulge that will not push back, with severe pain, needs emergency care today. A painful or growing hernia needs planned repair soon. A small, painless one can often be watched.
                        </p>
                    </div>

                    <!-- 1. Introduction -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">The Question Behind the Question</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        If you have just been told you have a hernia, one question tends to crowd out everything else: <strong>do I need hernia surgery</strong>, and do I need it right away? Most people asking it are not afraid of the diagnosis so much as the idea of being rushed into an operation they have not had time to think about.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        So here is the honest version. For the large majority of patients who walk into a clinic with a lump they noticed in the shower, the answer is not "operate today." It is "operate at a time you choose, rather than at a time the hernia chooses for you." Those are genuinely different things, and the difference is what this article is about.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Below, <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-brand-700 font-semibold hover:underline">Dr. Kumar of Billroth Hospitals</a>, with 29 years of surgical practice and more than 10,000 hernia repairs, sets out the framework used in clinic to sort a new hernia into one of three categories: operate now, plan repair soon, or reasonable to monitor.
                    </p>

                    <!-- 2. The Three-Way Decision -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Operate Now, Plan Soon, or Reasonable to Monitor</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Nearly every new hernia falls into one of three groups. Finding your row in the table below will tell you more than any amount of general reading about hernias.
                    </p>

                    <div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm">
                        <table class="w-full text-slate-700 text-sm">
                            <thead>
                                <tr class="bg-brand-900 text-white">
                                    <th class="px-5 py-3.5 text-left font-semibold">Category</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">What It Looks Like</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">What To Do</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-bold text-rose-700">Operate now<br><span class="font-normal text-xs text-slate-500">Emergency</span></td>
                                    <td class="px-5 py-3.5">Bulge is hard and will not push back in. Severe or constant pain. Skin over it looks red or purple. Fever, nausea, or vomiting.</td>
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Go to an emergency department immediately. Do not wait for a clinic appointment.</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-bold text-amber-700">Plan repair soon<br><span class="font-normal text-xs text-slate-500">Weeks, not years</span></td>
                                    <td class="px-5 py-3.5">The hernia aches or drags. It interferes with work, exercise, or sleep. It is visibly growing. It is a groin hernia in someone who lifts for a living.</td>
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Book a consultation and schedule a planned keyhole repair at a convenient time.</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-bold text-emerald-700">Reasonable to monitor<br><span class="font-normal text-xs text-slate-500">With review</span></td>
                                    <td class="px-5 py-3.5">Small, no pain, pushes back easily, not growing, and your surgeon has examined it and agrees.</td>
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Agree a review interval, and know the warning signs that change the plan.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        Notice that the third row still involves a surgeon. Monitoring a hernia is a clinical decision made after an examination, not a decision you can safely make on your own from a website, including this one.
                    </p>

                    <!-- 3. Red Flags -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Red Flags That Mean Today, Not Next Month</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        A hernia becomes an emergency when tissue pushes through the defect and then cannot get back. That is called incarceration. If the trapped tissue also loses its blood supply, it is called strangulation, and it needs an operation within hours, not days.
                    </p>

                    <div class="bg-rose-50 border border-rose-200 rounded-2xl p-6 mb-8">
                        <h3 class="font-bold text-rose-950 text-lg mb-3">Go to hospital now if you have any of these</h3>
                        <ul class="space-y-2.5 m-0 list-none pl-0">
                            <li class="flex items-start gap-3"><span class="w-2 h-2 rounded-full bg-rose-600 mt-2 shrink-0"></span><span class="text-slate-700 text-sm">A bulge that suddenly becomes hard and will not push back in</span></li>
                            <li class="flex items-start gap-3"><span class="w-2 h-2 rounded-full bg-rose-600 mt-2 shrink-0"></span><span class="text-slate-700 text-sm">Sudden severe or steadily worsening pain at the hernia</span></li>
                            <li class="flex items-start gap-3"><span class="w-2 h-2 rounded-full bg-rose-600 mt-2 shrink-0"></span><span class="text-slate-700 text-sm">Skin over the bulge turning red, purple, or dusky</span></li>
                            <li class="flex items-start gap-3"><span class="w-2 h-2 rounded-full bg-rose-600 mt-2 shrink-0"></span><span class="text-slate-700 text-sm">Nausea, vomiting, fever, or a stomach that stops passing gas</span></li>
                        </ul>
                    </div>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        These signs are the reason surgeons take hernias seriously even when they are not painful yet. If you want the clinical detail on what incarceration and strangulation involve, read more about <a href="<?= $base_path ?>hernia/complications" class="text-brand-700 font-semibold hover:underline">hernia complications</a>.
                    </p>

                    <!-- 4. What Watchful Waiting Actually Means -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What "Watchful Waiting" Actually Means</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Most articles on this question stop at a reassuring line: if your hernia is small and painless, watchful waiting may be fine. That is true, and it is also where the useful information usually ends. What almost nobody tells you is what happens to those patients over the following years.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Randomized trials have followed exactly this group, men with inguinal hernias causing no symptoms or only mild ones, and the pattern is consistent. Roughly one third had crossed over to surgery by three years. By ten years, more than two thirds had. In the longest follow-up, the great majority had been repaired by the twelve-year mark. The most common reason for changing course was not an emergency. It was pain.
                    </p>

                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-8">
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>The honest read on the evidence:</strong> for a small, symptom-free hernia, waiting is safe, because the rate of needing an urgent operation is low, in the region of two to three percent. But waiting is usually a <em>delay</em> rather than an alternative. Most people who wait end up having the operation anyway, later, once it starts to hurt.
                        </p>
                    </div>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        That reframes the decision in a way that is far more useful than "surgery or no surgery." For most patients the real choice is between a planned repair now, on a date you pick, and a probable repair later, at whatever point the hernia becomes uncomfortable enough to force the issue. Trials also found that patients who had elective repair reported less pain and discomfort at two years than those who waited.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        One important limit on that evidence: those trials studied groin hernias in adult men. They are not a blanket permission slip for every hernia. A femoral hernia, a hernia in a child, and a hernia in a woman are each assessed differently, which is the next section.
                    </p>

                    <!-- 5. Factors -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What Moves Your Decision Toward Surgery</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Two people with the same size hernia can get different advice, for good reasons. These are the factors that shift the balance:
                    </p>

                    <div class="space-y-4 mb-8">
                        <div class="p-5 bg-slate-50 rounded-2xl border border-slate-200">
                            <strong class="text-slate-900 block text-base mb-1">Where the hernia is</strong>
                            <p class="text-slate-600 text-sm leading-relaxed m-0">Site matters more than size. A femoral hernia sits in a narrow, unforgiving opening and is treated with much less patience than a small umbilical hernia, because the risk of tissue getting trapped is higher.</p>
                        </div>
                        <div class="p-5 bg-slate-50 rounded-2xl border border-slate-200">
                            <strong class="text-slate-900 block text-base mb-1">Whether it hurts, and how much</strong>
                            <p class="text-slate-600 text-sm leading-relaxed m-0">Pain is the single most common reason patients who chose to wait change their minds. Pain that interferes with work, exercise, or sleep is a clear signal to schedule repair rather than keep monitoring.</p>
                        </div>
                        <div class="p-5 bg-slate-50 rounded-2xl border border-slate-200">
                            <strong class="text-slate-900 block text-base mb-1">What you do all day</strong>
                            <p class="text-slate-600 text-sm leading-relaxed m-0">Heavy lifting, long shifts on your feet, and physically demanding work all load the abdominal wall repeatedly. The same hernia in a manual worker and in a desk worker are not the same clinical problem.</p>
                        </div>
                        <div class="p-5 bg-slate-50 rounded-2xl border border-slate-200">
                            <strong class="text-slate-900 block text-base mb-1">Anything that raises abdominal pressure</strong>
                            <p class="text-slate-600 text-sm leading-relaxed m-0">A chronic cough, COPD, constipation, straining to pass urine, or obesity all push tissue outward through the defect. Treating the underlying cause is part of planning the repair, not an afterthought.</p>
                        </div>
                        <div class="p-5 bg-slate-50 rounded-2xl border border-slate-200">
                            <strong class="text-slate-900 block text-base mb-1">Your general health</strong>
                            <p class="text-slate-600 text-sm leading-relaxed m-0">Diabetes, heart or lung disease, smoking, and blood-thinning medication all affect the timing and the approach. Optimizing these before a planned repair is one of the advantages of not waiting for an emergency.</p>
                        </div>
                    </div>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        If you are unsure which of these apply to you, the practical step is a proper examination. It also helps to know which <a href="<?= $base_path ?>hernia/symptoms" class="text-brand-700 font-semibold hover:underline">hernia symptoms</a> are worth reporting, because patients routinely dismiss the ones surgeons find most informative.
                    </p>

                    <!-- 6. Why waiting makes the operation harder -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Why Waiting Can Make the Operation Harder</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        There is a mechanical reason surgeons prefer to repair hernias while they are small, and it has nothing to do with pushing patients toward theatre.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        The defect in the muscle behaves like a one-way opening. Every cough, lift, and strain pushes a little more tissue through it, and the tissue that goes through tends to stay there. Over years, the opening widens, the muscle at its edges thins and retracts, and the contents settle into their new position outside the abdominal wall.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        A small defect repaired early is usually a straightforward keyhole procedure with a same-day discharge. A large, long-standing hernia can require a considerably bigger reconstruction of the abdominal wall, a longer stay, and a longer recovery. The condition has not become a different disease; the operation has become a different operation. You can read how the various approaches compare in our guide to <a href="<?= $base_path ?>treatment/hernia-surgery" class="text-brand-700 font-semibold hover:underline">hernia surgery</a>.
                    </p>

                    <!-- 7. Questions to ask -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Questions to Ask Before You Agree to Surgery</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        If a repair is recommended, you are entitled to understand it before consenting. These six questions will tell you most of what you need to know, and a specialist will welcome all of them:
                    </p>

                    <ul class="space-y-3 mb-8 list-none pl-0">
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200"><span class="w-2.5 h-2.5 rounded-full bg-brand-600 mt-2 shrink-0"></span><span class="text-slate-700 text-sm"><strong class="text-slate-900">Which repair are you recommending for my hernia, and why that one?</strong> The answer should reference your specific anatomy, not a default.</span></li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200"><span class="w-2.5 h-2.5 rounded-full bg-brand-600 mt-2 shrink-0"></span><span class="text-slate-700 text-sm"><strong class="text-slate-900">Open, laparoscopic, or robotic?</strong> Ask what makes that approach the right fit in your case.</span></li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200"><span class="w-2.5 h-2.5 rounded-full bg-brand-600 mt-2 shrink-0"></span><span class="text-slate-700 text-sm"><strong class="text-slate-900">Will mesh be used, and what type?</strong> If mesh worries you, say so and have the reasoning explained.</span></li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200"><span class="w-2.5 h-2.5 rounded-full bg-brand-600 mt-2 shrink-0"></span><span class="text-slate-700 text-sm"><strong class="text-slate-900">What does recovery actually look like for my job?</strong> Get specifics on lifting, driving, and returning to work.</span></li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200"><span class="w-2.5 h-2.5 rounded-full bg-brand-600 mt-2 shrink-0"></span><span class="text-slate-700 text-sm"><strong class="text-slate-900">What is the chance of recurrence, and what raises it for me?</strong> Weight, smoking, and cough all matter here.</span></li>
                        <li class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200"><span class="w-2.5 h-2.5 rounded-full bg-brand-600 mt-2 shrink-0"></span><span class="text-slate-700 text-sm"><strong class="text-slate-900">How many of these do you perform?</strong> For hernia repair, surgeon volume is a fair question to ask.</span></li>
                    </ul>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        If the answers do not sit right with you, or you were told to operate immediately for a hernia that has been quietly present for years, it is entirely reasonable to ask for a <a href="<?= $base_path ?>second-opinion" class="text-brand-700 font-semibold hover:underline">second opinion</a> before deciding.
                    </p>

                    <!-- 8. What a hernia is -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">A One-Paragraph Refresher</h2>
                    <p class="text-slate-600 leading-relaxed mb-8">
                        A hernia is a gap or weak point in the muscle wall of the abdomen through which internal tissue, usually fat or a loop of bowel, pushes outward and forms a bulge. It is a structural problem, which is why it will not resolve with rest, diet, or exercise, and why repair means closing and reinforcing the gap surgically. For the fuller explanation, see <a href="<?= $base_path ?>hernia/what-is-hernia" class="text-brand-700 font-semibold hover:underline">what a hernia is</a>.
                    </p>

                    <!-- 9. Conclusion -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">The Honest Answer</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        So, <strong>do I need hernia surgery</strong>? If you have any of the red flag signs, you need it today, and this article is the wrong place to be reading. If your hernia hurts, is growing, or is getting in the way of your life, you need a planned repair, and choosing the date yourself is the single biggest advantage you have. If it is small, painless, and a surgeon has examined it and is content to monitor it, then monitoring is a legitimate choice, made with your eyes open about what the evidence says usually happens next.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-8">
                        What is not a legitimate choice is deciding alone. The examination is what tells you which of the three rows you are in, and that is a fifteen-minute conversation, not an operation.
                    </p>

                    <!-- 10. FAQ -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-12 mb-6 border-b border-slate-100 pb-3">Frequently Asked Questions</h2>

                    <div class="space-y-4 mb-10">
                        <?php foreach ($faqs as $i => $faq): ?>
                            <div class="faq-item bg-slate-50 rounded-2xl border border-slate-200 p-6">
                                <h3 class="font-bold text-slate-900 text-lg mb-2">Q<?= $i + 1 ?>: <?= htmlspecialchars($faq['q']) ?></h3>
                                <p class="text-slate-600 text-sm md:text-base leading-relaxed m-0">
                                    <?= htmlspecialchars($faq['a']) ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Consultation Banner -->
                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Not Sure Which Category You Are In?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">A single examination with Dr. Kumar of Billroth Hospitals will tell you whether your hernia needs repair now, later, or simply monitoring.</p>
                        <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition shadow-lg hover:scale-105">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                            Book a Hernia Assessment
                        </a>
                    </div>
                </div>
            </article>

            <!-- Right Column: Sidebar -->
            <aside class="lg:col-span-4 space-y-8">
                <!-- Author Profile Card -->
                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm text-center">
                    <img src="<?= $base_path ?>assets/images/dr-kumar-headshot-2026.jpg" alt="Dr. Kumar of Billroth Hospitals Specialist" class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-brand-50 shadow-md mb-4">
                    <h3 class="font-bold text-slate-900 text-lg mb-1">Dr. Kumar of Billroth Hospitals</h3>
                    <p class="text-xs text-brand-700 font-semibold mb-3">Senior Hernia &amp; Abdominal Wall Surgeon</p>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">Over 29+ years of experience specializing in advanced laparoscopic and robotic hernia repairs.</p>
                    <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="inline-flex items-center justify-center w-full bg-brand-50 hover:bg-brand-100 text-brand-800 text-xs font-bold py-2.5 rounded-xl border border-brand-100 transition">
                        View Doctor Profile
                    </a>
                </div>

                <!-- Related Articles Card -->
                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                    <h3 class="font-bold text-slate-900 text-base mb-4 border-b border-slate-100 pb-2">Related Articles</h3>
                    <div class="space-y-4">
                        <a href="<?= $base_path ?>blog/can-hernia-be-cured-without-surgery" class="flex gap-3 group">
                            <img src="<?= $base_path ?>assets/images/can-hernia-be-cured-without-surgery.png" alt="Can Hernia be Cured without Surgery?" class="w-16 h-16 rounded-xl object-cover shrink-0" loading="lazy">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Can Hernia be Cured without Surgery?</h4>
                                <span class="text-[11px] text-slate-400">24 July 2026</span>
                            </div>
                        </a>
                        <a href="<?= $base_path ?>blog/is-hernia-surgery-dangerous" class="flex gap-3 group">
                            <img src="<?= $base_path ?>assets/images/is-hernia-surgery-dangerous.jpg" alt="Is Hernia Surgery Dangerous?" class="w-16 h-16 rounded-xl object-cover shrink-0" loading="lazy">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Is Hernia Surgery Dangerous?</h4>
                                <span class="text-[11px] text-slate-400">14 July 2026</span>
                            </div>
                        </a>
                        <a href="<?= $base_path ?>blog/can-hernia-come-back-after-surgery" class="flex gap-3 group">
                            <img src="<?= $base_path ?>assets/images/hernia-come-back-after-surgery.jpg" alt="Can a Hernia Come Back After Surgery?" class="w-16 h-16 rounded-xl object-cover shrink-0" loading="lazy">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Can a Hernia Come Back After Surgery?</h4>
                                <span class="text-[11px] text-slate-400">09 July 2026</span>
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
// BreadcrumbList and MedicalCondition are emitted by header.php already.
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
