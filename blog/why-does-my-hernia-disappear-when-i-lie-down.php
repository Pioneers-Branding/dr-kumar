<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2026-11-13');

$page_title       = 'Hernia Disappears When You Lie Down? What It Means';
$page_description = 'Hernia disappears when you lie down? Learn why a reducible hernia goes back in, why it is not healed, and the signs that mean it is trapped and urgent.';
$page_keywords    = 'hernia disappears when lying down, reducible hernia, hernia goes away when I lie down, hernia lump comes and goes, incarcerated hernia signs';
$page_image       = $site['url'] . 'assets/images/why-does-my-hernia-disappear-when-i-lie-down.png';
$page_published   = '2026-11-13';
$page_modified    = '2026-11-13';

$schema_about = [
    '@type'       => 'MedicalCondition',
    'name'        => 'Reducible Hernia',
    'description' => 'A reducible hernia is one where the bulging tissue can slide back into the abdomen, typically when lying down, while the gap in the muscle wall remains. If the tissue cannot be returned, it may be trapped (incarcerated) or strangulated, which are emergencies.',
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'Is it normal for a hernia to go away when I lie down?',
        'a' => 'Yes, this is typical of a reducible hernia. Lying down lowers abdominal pressure, so the tissue slips back inside. The weak spot in the muscle wall remains.',
    ],
    [
        'q' => 'Does a hernia that disappears mean it has healed?',
        'a' => 'No. A hernia does not heal on its own. The bulge hides only because pressure has dropped, and it usually returns when you stand, cough or strain.',
    ],
    [
        'q' => 'Is a reducible hernia dangerous?',
        'a' => 'It is the least urgent stage, but it can change. If the tissue becomes stuck and will not go back, it needs prompt medical care.',
    ],
    [
        'q' => 'Should I push my hernia back in myself?',
        'a' => 'Sources advise against forcing it. If it goes back easily when lying down, leave it. If it will not go back, seek medical care instead of pushing harder.',
    ],
    [
        'q' => 'How do I know if my hernia is trapped?',
        'a' => 'A lump that no longer goes back in, even lying down, especially if it is firm, tender, red or dark, or comes with vomiting or severe pain.',
    ],
    [
        'q' => 'Can I wait for surgery if my hernia goes back in?',
        'a' => 'Sometimes, if it is small and comfortable and your surgeon agrees. Many still progress, so an examination is needed first and you should know the emergency signs.',
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
            <span class="text-white">Reducible Hernia</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Explainer
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Why Does My Hernia Disappear When I Lie Down? <br class="hidden md:inline"><span class="text-accent">(Reducible Hernia Explained)</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar of Billroth Hospitals</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>November 13, 2026</span>
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

                    <img src="<?= $base_path ?>assets/images/why-does-my-hernia-disappear-when-i-lie-down.png" alt="Why Does My Hernia Disappear When I Lie Down? (Reducible Hernia Explained)" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: Why a Hernia Disappears When You Lie Down</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>Lying down removes the pressure that pushes tissue through the weak spot,</strong> so a reducible hernia slips back inside. The gap in the muscle wall remains, so the lump returns. A lump that stays out, turns hard, or hurts severely is an emergency.
                        </p>
                    </div>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">What Is Happening When the Lump Vanishes</h2>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        A hernia that disappears when you lie down is called a reducible hernia. "Reducible" simply means the tissue pushed through the muscle wall can slide back into the abdomen. When you stand, cough or strain, pressure inside the abdomen rises and presses fat or intestine into the weak spot. When you lie flat, that pressure drops and the tissue can drift back. The NHS describes exactly this pattern: a hernia lump may get bigger when you cough, sneeze or cry, and smaller when you lie down.
                    </p>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        So the lump is not shrinking because the problem is shrinking. Only the pressure has changed. The opening in the muscle wall is still there, waiting for the next time you stand, lift or strain.
                    </p>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Three Stages: Reducible, Trapped, Strangled</h2>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        The vanishing lump is the mildest of three states. Knowing the other two is the most useful thing you can take from this page, because the difference between them is the difference between booking an appointment and going to the hospital tonight.
                    </p>

                    <div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm">
                    <table class="w-full text-slate-700 text-sm">
                    <thead><tr class="bg-brand-900 text-white"><th class="px-5 py-3.5 text-left font-semibold">Stage</th><th class="px-5 py-3.5 text-left font-semibold">What you notice</th><th class="px-5 py-3.5 text-left font-semibold">What it means</th><th class="px-5 py-3.5 text-left font-semibold">What to do</th></tr></thead>
                    <tbody class="divide-y divide-slate-100">
                    <tr class="hover:bg-slate-50"><td class="px-5 py-3.5 align-top font-semibold text-slate-900">Reducible</td><td class="px-5 py-3.5 align-top">A lump that appears on standing or straining and slips back when you lie down.</td><td class="px-5 py-3.5 align-top">The tissue moves freely in and out of the gap.</td><td class="px-5 py-3.5 align-top">Book an examination soon. This is the best time to plan repair.</td></tr>
                    <tr class="hover:bg-slate-50"><td class="px-5 py-3.5 align-top font-semibold text-slate-900">Incarcerated (trapped)</td><td class="px-5 py-3.5 align-top">A lump that stays out and will not go back, even lying down. It may ache or feel firm.</td><td class="px-5 py-3.5 align-top">The tissue is stuck in the gap. Bowel may be blocked.</td><td class="px-5 py-3.5 align-top">Seek medical care the same day.</td></tr>
                    <tr class="hover:bg-slate-50"><td class="px-5 py-3.5 align-top font-semibold text-slate-900">Strangulated</td><td class="px-5 py-3.5 align-top">A hard, tender lump that looks red or dark, with severe pain, nausea, vomiting or fever.</td><td class="px-5 py-3.5 align-top">The blood supply to the trapped tissue is cut off. This is life-threatening.</td><td class="px-5 py-3.5 align-top">Emergency. Go to a hospital at once.</td></tr>
                    </tbody>
                    </table>
                    </div>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        Table sources: NHS and NIDDK. Both list a bulge that no longer goes back in, sudden severe pain, redness, fever, vomiting and a swollen belly as reasons to seek immediate care. NIDDK calls a strangulated hernia life-threatening. Our guide to <a href="<?= $base_path ?>blog/hernia-emergency-warning-signs" class="text-brand-700 font-semibold hover:underline">hernia emergency warning signs</a> shows how each of these looks in practice.
                    </p>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Why a Vanishing Lump Is Not Good News</h2>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        It is tempting to treat a lump that comes and goes as less serious. It is less urgent, yes, but it is not harmless, for three reasons.
                    </p>

                    <ul class="list-none p-0 m-0 mb-8 space-y-3">
                        <li class="flex items-start gap-3 text-slate-600 leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-2.5 shrink-0"></span><span><strong>The hole does not heal.</strong> A hernia does not close by itself, and a lump hiding when you lie down does not change that.</span></li>
                        <li class="flex items-start gap-3 text-slate-600 leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-2.5 shrink-0"></span><span><strong>It tends to change.</strong> NIDDK reports that among men with few or no symptoms who delay surgery, about 70 percent develop new or worsening symptoms and need an operation within five years. Our post on <a href="<?= $base_path ?>blog/how-fast-does-a-hernia-grow" class="text-brand-700 font-semibold hover:underline">how fast a hernia grows</a> covers what to expect.</span></li>
                        <li class="flex items-start gap-3 text-slate-600 leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-2.5 shrink-0"></span><span><strong>The risk is a lump that stops going back.</strong> Many emergency hernias start as comfortable, reducible ones. You cannot predict the day the tissue gets stuck.</span></li>
                    </ul>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        None of this means everyone with a reducible hernia needs surgery tomorrow. Some people, with a small and comfortable hernia, can sensibly watch under a surgeon's guidance. The point is that the decision should be made after an examination, not because the lump seems to vanish. Our guide to <a href="<?= $base_path ?>blog/do-i-need-hernia-surgery" class="text-brand-700 font-semibold hover:underline">whether you need hernia surgery</a> explains how that call is made.
                    </p>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What to Do, and What to Avoid</h2>

                    <ul class="list-none p-6 m-0 mb-8 space-y-3 bg-slate-50 border border-slate-200 rounded-2xl">
                        <li class="flex items-start gap-3 text-slate-700 leading-relaxed"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span><strong>Do</strong> note how the lump behaves: when it appears, how quickly it goes away, and whether it is getting larger.</span></li>
                        <li class="flex items-start gap-3 text-slate-700 leading-relaxed"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span><strong>Do</strong> book an examination even if it is painless. Many hernias do not hurt, and the NHS notes large hernias may not hurt at all.</span></li>
                        <li class="flex items-start gap-3 text-slate-700 leading-relaxed"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span><strong>Do</strong> treat any change as important: a lump that suddenly grows, or one that used to go back easily and now will not.</span></li>
                        <li class="flex items-start gap-3 text-slate-700 leading-relaxed"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span><strong>Do not</strong> force or repeatedly push it back in. Sources advise against pushing a hernia in yourself, and the lump usually returns anyway.</span></li>
                        <li class="flex items-start gap-3 text-slate-700 leading-relaxed"><svg class="w-5 h-5 text-brand-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span><strong>Do not</strong> assume a lump that disappears was never a hernia. Other swellings can also vanish, so only an examination can tell.</span></li>
                    </ul>

                    <div class="bg-red-50 border-l-4 border-red-600 p-6 rounded-r-2xl mb-8">
                        <p class="font-bold text-red-800 text-base mb-3">Go to a hospital the same day if the lump</p>
                        <ul class="list-none p-0 m-0 space-y-2">
                            <li class="flex items-start gap-3 text-red-900 text-sm md:text-base leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-2 shrink-0"></span><span>Will not go back in when you lie down</span></li>
                            <li class="flex items-start gap-3 text-red-900 text-sm md:text-base leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-2 shrink-0"></span><span>Is hard, red, purple or dark, or suddenly much larger</span></li>
                            <li class="flex items-start gap-3 text-red-900 text-sm md:text-base leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-red-600 mt-2 shrink-0"></span><span>Comes with severe pain, vomiting, fever, a swollen belly, or being unable to pass gas or stool</span></li>
                        </ul>
                    </div>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Seen in Daily Life in Chennai</h2>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        A common story is a lump that is invisible in the morning, appears after a long ride through traffic or a day on your feet, and is gone again by night. Nothing about that pattern is reassuring. If anything, it shows the hernia responds to pressure and gravity, which is exactly how a reducible hernia behaves. If this is you, write down what you were doing before the lump appeared, and bring that to the consultation.
                    </p>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What Happens Next</h2>

                    <p class="text-slate-600 leading-relaxed mb-6">
                        A surgeon examines you standing and lying, asks you to cough, and checks whether the lump reduces fully. Scans are only needed if the picture is unclear. When repair is advised, it closes the gap and reinforces the wall, and a reducible hernia in its early stage is usually the simplest to deal with. You can read more on the <a href="<?= $base_path ?>hernia/symptoms" class="text-brand-700 font-semibold hover:underline">hernia symptoms page</a>, and if your lump is in the groin, our post on <a href="<?= $base_path ?>blog/inguinal-hernia-symptoms-in-men" class="text-brand-700 font-semibold hover:underline">inguinal hernia symptoms in men</a> lists the other signs to look for.
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
                            This article is general medical information and does not replace an examination. A hernia that will not go back in, or that causes severe pain, should be treated as an emergency.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Have a Lump That Comes and Goes?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Book a consultation while it is still easy to reduce. Dr. Kumar can examine it, explain your options, and tell you whether to act or watch.</p>
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
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>A lump that vanishes lying down is a reducible hernia, not a healed one.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>The gap stays, so the lump returns on standing or straining.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>A lump that will not go back, turns hard or hurts severely is an emergency.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Do not force it back in. Get it examined.</li>
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
                        <a href="<?= $base_path ?>blog/how-fast-does-a-hernia-grow" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">How Fast Does a Hernia Grow?</h4>
                                <span class="text-[11px] text-slate-400">31 August 2026</span>
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
