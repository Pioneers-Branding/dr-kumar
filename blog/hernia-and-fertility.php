<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2027-03-08');

$page_title       = 'Hernia and Fertility: Does Repair Affect Sperm?';
$page_description = 'Can a groin hernia or its mesh repair affect sperm count, the vas deferens, testicular blood flow or erections? What the studies show and where evidence is thin.';
$page_keywords    = 'hernia and fertility, hernia mesh male infertility, inguinal hernia repair sperm count, hernia surgery erectile dysfunction, vas deferens hernia mesh';
$page_image       = $site['url'] . 'assets/images/hernia-and-fertility.png';
$page_published   = '2027-03-08';
$page_modified    = '2027-03-08';

$schema_about = [
    '@type'       => 'MedicalCondition',
    'name'        => 'Male Fertility After Inguinal Hernia Repair',
    'description' => 'The question of whether an inguinal hernia, or its repair with mesh, affects sperm production, vas deferens patency, testicular blood supply or erectile function, based on limited published studies.',
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'Can inguinal hernia mesh cause male infertility?',
        'a' => 'Rarely, case reports link mesh to vas deferens blockage. A 2018 systematic review found no significant overall effect on fertility, but studies are few and follow-up is short.',
    ],
    [
        'q' => 'Does hernia surgery lower sperm count?',
        'a' => 'Group studies have not shown a clear drop. Case reports exist of severe falls, often with other contributing factors, so any plans for children should be discussed beforehand.',
    ],
    [
        'q' => 'Can hernia surgery cause erectile dysfunction?',
        'a' => 'Very few studies measure it. Some keyhole series report no change in sexual function, but reviewers say urological and sexual complications are under-reported, so no firm rate exists.',
    ],
    [
        'q' => 'Can hernia repair damage the testicle?',
        'a' => 'Injury to the cord veins can cause ischemic orchitis or, rarely, shrinkage. Reported rates vary widely and are higher after repeat repairs. Tell your surgeon about any earlier groin surgery.',
    ],
    [
        'q' => 'Should I bank sperm before hernia surgery?',
        'a' => 'It is not standard. The authors of the main review said it remains unclear for men with fertility concerns, so ask your surgeon and a fertility specialist.',
    ],
    [
        'q' => 'Does a hernia itself reduce fertility?',
        'a' => 'We found no solid evidence that an ordinary groin hernia does. Male infertility has many other causes, so unexplained difficulty conceiving needs its own assessment.',
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
            <span class="text-white">Hernia and Fertility</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Evidence Review
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Hernia and Fertility: Can a Hernia or Its Repair <br class="hidden md:inline"><span class="text-accent">Affect Sperm Count or Erections?</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar of Billroth Hospitals</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>March 8, 2027</span>
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

                    <img src="<?= $base_path ?>assets/images/hernia-and-fertility.png" alt="Hernia and Fertility: Can a Hernia or Its Repair Affect Sperm Count or Erections?" width="1600" height="900" fetchpriority="high" class="w-full h-auto rounded-2xl mb-8 shadow-md">

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: Does Hernia Surgery Affect Fertility?</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>For most men, studies have not shown that mesh repair lowers fertility, but the evidence is limited and rare harms are documented.</strong> Reported problems include vas deferens blockage and reduced testicular blood flow, mostly after repeat or open repairs. Data on erections are thin. If you plan to have children, raise it with your surgeon before the operation.
                        </p>
                    </div>


<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What the Research Can and Cannot Tell You</h2>
<p class="text-slate-600 leading-relaxed mb-6">
Before the details, an honest framing. The studies on this question are small, mixed in design, and mostly measure sperm tests rather than actual pregnancies. Much of the older complication data comes from open repair, written before laparoscopic repair became common. So the useful answer is not a flat yes or no. It is a map of what has been looked at, what was found, and how firm each finding is.
</p>

<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Why Groin Hernia Surgery Raises the Question at All</h2>
<p class="text-slate-600 leading-relaxed mb-6">
In a man, the inguinal canal in the groin carries the spermatic cord. The cord contains the vas deferens (the tube that carries sperm from the testicle), the blood vessels that feed and drain the testicle, and nerves. A groin hernia sits right next to the cord, and the repair, which usually places a mesh over the weak area, happens in the same small space. That closeness is why surgeons take care to protect those structures, and why the question is reasonable to ask.
</p>

<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Evidence at a Glance</h2>
<div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm">
    <table class="w-full text-slate-700 text-sm">
        <thead>
            <tr class="bg-brand-900 text-white">
                <th class="px-5 py-3.5 text-left font-semibold">Question</th>
                <th class="px-5 py-3.5 text-left font-semibold">What the research shows</th>
                <th class="px-5 py-3.5 text-left font-semibold">How firm it is</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
            <tr class="hover:bg-slate-50">
                <td class="px-5 py-3.5 font-semibold">Does mesh lower fertility in general?</td>
                <td class="px-5 py-3.5">A 2018 systematic review found no significant effect of open or laparoscopic mesh repair on male fertility.</td>
                <td class="px-5 py-3.5">Moderate at best. Few trials, short follow-up.</td>
            </tr>
            <tr class="hover:bg-slate-50">
                <td class="px-5 py-3.5 font-semibold">Sperm tests after repair</td>
                <td class="px-5 py-3.5">In trial data, one lightweight mesh had lower sperm motility at one year than a heavyweight mesh, with no difference by three years.</td>
                <td class="px-5 py-3.5">Limited. Small numbers, specific products.</td>
            </tr>
            <tr class="hover:bg-slate-50">
                <td class="px-5 py-3.5 font-semibold">Vas deferens blockage</td>
                <td class="px-5 py-3.5">Case reports and a small case series describe sperm absent from semen (azoospermia) from vas obstruction linked to earlier mesh repair. Animal studies show cord structures are affected, more so with mesh.</td>
                <td class="px-5 py-3.5">Real but rare. We do not have reliable human rates.</td>
            </tr>
            <tr class="hover:bg-slate-50">
                <td class="px-5 py-3.5 font-semibold">Testicular blood flow</td>
                <td class="px-5 py-3.5">Injury to the cord veins can cause ischemic orchitis (painful swelling from poor blood flow) or, rarely, testicular shrinkage (atrophy). Reported rates range widely, from well under 1 percent after a first open repair to roughly 1 to 5 percent after repeat open repairs.</td>
                <td class="px-5 py-3.5">Mostly older open-repair data. Rates differ between papers.</td>
            </tr>
            <tr class="hover:bg-slate-50">
                <td class="px-5 py-3.5 font-semibold">Erectile function</td>
                <td class="px-5 py-3.5">Few studies have measured it. Some laparoscopic series report no change in sexual function. Reviewers describe urological complications as under-reported.</td>
                <td class="px-5 py-3.5">Thin. No dependable rate can be quoted.</td>
            </tr>
        </tbody>
    </table>
</div>

<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Reading the Table Honestly</h2>
<p class="text-slate-600 leading-relaxed mb-6">
Putting it plainly: for most men, the available studies do not show that having a hernia repaired with mesh lowers fertility. That is a statement about the group, and the group evidence is limited. It does not mean the risk is zero for any one man.
</p>
<p class="text-slate-600 leading-relaxed mb-6">
There are two reasons for that caution. First, the reported rare harms are real. Vas deferens obstruction after mesh, and testicular damage from injury to the cord blood vessels, appear in the literature, even if we cannot say how often they happen today with modern techniques. Second, the authors of the main systematic review said it remains unclear whether men with fertility concerns should bank sperm before surgery, and they called for more studies, especially on repairs on both sides.
</p>

<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Who Should Ask Extra Questions Before Surgery</h2>
<ul class="list-disc pl-6 text-slate-600 leading-relaxed space-y-2 mb-6">
    <li><strong>Men planning children soon, or already known to have low sperm counts.</strong> Tell your surgeon at the first visit.</li>
    <li><strong>Men needing repairs on both sides.</strong> The evidence here is weakest, which is exactly why it is worth raising.</li>
    <li><strong>Men whose hernia has come back after an earlier groin repair.</strong> Repeat repairs are where the higher testicular complication rates in the literature sit, possibly because scar tissue around the cord makes the dissection harder.</li>
</ul>
<p class="text-slate-600 leading-relaxed mb-6">
Useful questions to put to your surgeon: which approach do you recommend and why, how will the cord structures be protected, and would a baseline semen test (or sperm banking) make sense for me. Neither the test nor banking is a standard requirement, and the research has not settled when they are advisable, so that is a conversation, not a rule.
</p>

<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What About Pain and Intimacy?</h2>
<p class="text-slate-600 leading-relaxed mb-6">
Separate from fertility, some men worry that groin discomfort after repair could affect sex. Persistent groin pain after hernia repair is a recognized complication in a minority of patients, and ongoing pain can understandably affect intimacy. If pain, numbness or testicular discomfort lasts beyond the usual recovery window, report it rather than waiting. Our guide to <a href="<?= $base_path ?>hernia/complications" class="text-brand-700 font-semibold hover:underline">hernia complications</a> explains what to watch for, and <a href="<?= $base_path ?>blog/hernia-mesh-types-and-safety" class="text-brand-700 font-semibold hover:underline">hernia mesh types and safety</a> covers the wider mesh question, including chronic pain.
</p>

<h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">Does the Hernia Itself Matter?</h2>
<p class="text-slate-600 leading-relaxed mb-6">
It is also fair to ask whether leaving the hernia alone is safer for fertility. We did not find solid evidence that an ordinary groin hernia reduces fertility, so this is not a reason to delay a repair that is otherwise advised. An enlarging or painful hernia can bring its own risks, and the symptom picture is described in <a href="<?= $base_path ?>blog/inguinal-hernia-symptoms-in-men" class="text-brand-700 font-semibold hover:underline">inguinal hernia symptoms in men</a>. If your main symptom is testicular pain rather than a groin bulge, the cause may be something else entirely, and <a href="<?= $base_path ?>blog/hernia-vs-groin-strain-vs-testicular-pain" class="text-brand-700 font-semibold hover:underline">how to tell a hernia from a groin strain or testicular pain</a> is the better starting point.
</p>
<div class="bg-amber-50 border-l-4 border-amber-500 p-6 rounded-r-2xl mb-8">
    <p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">
        <strong>If you are trying to conceive and have not succeeded,</strong> many causes of male infertility have nothing to do with hernias. A semen analysis and an assessment by a urologist or fertility specialist are the right route, not hernia surgery or avoiding it. Dr. Kumar can discuss the timing of any hernia repair alongside that assessment. Learn how groin repairs are done on the <a href="<?= $base_path ?>my_types/inguinal-hernia-treatment-in-chennai" class="text-amber-900 font-semibold hover:underline">inguinal hernia treatment page</a>.
    </p>
</div>


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
                            This article summarizes published research and is general medical information, not advice for your personal circumstances. Where the evidence is limited, we have said so. Decisions about surgery and fertility should be made after an examination and with a fertility specialist if you are trying to conceive.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Planning a Family and Facing Groin Hernia Surgery?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Bring your questions about technique, earlier repairs and timing. A proper examination comes first, and your plan can be built around your family goals.</p>
                        <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition shadow-lg hover:scale-105">
                            Book a Groin Hernia Consultation
                        </a>
                    </div>
                </div>
            </article>

            <aside class="lg:col-span-4 space-y-8">
                <div class="bg-brand-50 rounded-3xl p-6 border border-brand-100">
                    <h3 class="font-bold text-brand-900 text-base mb-3">The Short Version</h3>
                    <ul class="list-none p-0 m-0 space-y-2.5">
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Studies do not show a clear overall effect of mesh repair on fertility.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Rare harms are documented: vas deferens blockage and testicular blood flow injury.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Evidence on erections is thin, so no reliable rate exists.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Repeat and bilateral repairs deserve extra discussion.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Planning children? Tell your surgeon before surgery.</li>
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
                        <a href="<?= $base_path ?>blog/hernia-mesh-types-and-safety" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Hernia Mesh: Types, Safety and Whether You Really Need It</h4>
                                <span class="text-[11px] text-slate-400">6 October 2026</span>
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
