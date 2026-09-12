<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/schedule-gate.php';
hc360_publish_gate('2026-10-23');

$page_title       = 'Hernia in Children: What Parents Need to Know';
$page_description = 'Hernia in children explained simply for worried parents. Which ones go away on their own, which need surgery, and the warning signs that mean go to hospital now.';
$page_keywords    = 'hernia in children, baby belly button hernia, umbilical hernia in babies, inguinal hernia in children, does umbilical hernia go away, child hernia surgery';
$page_image       = $site['url'] . 'assets/images/hernia-surgery-recovery-week-by-week.png';
$page_published   = '2026-10-23';
$page_modified    = '2026-10-23';

$schema_about = [
    '@type'         => 'MedicalCondition',
    'name'          => 'Hernia in Children',
    'description'   => 'Umbilical and inguinal hernias in infants and children. Umbilical hernias often close on their own in the first few years, while inguinal hernias in the groin usually need surgical repair.',
    'signOrSymptom' => [
        ['@type' => 'MedicalSignOrSymptom', 'name' => 'A soft bulge at the belly button that grows when the child cries or strains'],
        ['@type' => 'MedicalSignOrSymptom', 'name' => 'A bulge in the groin, more noticeable when standing or crying'],
        ['@type' => 'MedicalSignOrSymptom', 'name' => 'Sudden pain, a hard bulge, and vomiting, which needs emergency care'],
    ],
];

// FAQ content lives here once, so the visible accordion and the FAQPage schema
// below can never drift apart. Google requires the two to match.
$faqs = [
    [
        'q' => 'Will my baby\'s belly button hernia go away on its own?',
        'a' => 'Very often yes. Most umbilical hernias close by age one, and almost all close by age five without any treatment, especially small ones under a centimeter.',
    ],
    [
        'q' => 'Is a hernia in a baby dangerous?',
        'a' => 'Usually not. Most umbilical hernias in babies are harmless and simply watched. Danger arises only if the bulge suddenly becomes hard, painful, and cannot be pushed back.',
    ],
    [
        'q' => 'Why does my child need surgery for a groin hernia but not the belly button one?',
        'a' => 'Inguinal hernias, in the groin, do not close on their own the way umbilical hernias often do, so surgery is usually recommended once one is found.',
    ],
    [
        'q' => 'What are the signs of a hernia emergency in a child?',
        'a' => 'A bulge that becomes hard, will not push back in, and is accompanied by pain, vomiting, or a child who seems unusually unwell needs the emergency room immediately.',
    ],
    [
        'q' => 'Is hernia surgery safe for a young child?',
        'a' => 'Yes. Pediatric hernia repair is a well-established, routine procedure with a strong safety record, usually done as a day case with a short, straightforward recovery.',
    ],
    [
        'q' => 'Can I do anything at home to help my child\'s hernia?',
        'a' => 'No home treatment closes a hernia. For umbilical hernias, watching and waiting under medical guidance is the correct approach. Avoid taping or binding the area.',
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
            <span class="text-white">Hernia in Children</span>
        </nav>

        <div class="max-w-4xl">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
                Parent's Guide
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Hernia in Children: <br class="hidden md:inline"><span class="text-accent">What Parents Actually Need to Know</span>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-slate-300 mt-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>By <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="text-accent hover:underline font-semibold">Dr. Kumar</a></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>October 23, 2026</span>
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

                    <!-- AEO Direct Answer Box -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-6 rounded-r-2xl mb-10 shadow-sm">
                        <div class="flex items-center gap-2 text-brand-900 font-bold text-base mb-2">
                            <svg class="w-6 h-6 text-brand-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Quick Answer: Hernia in Children</span>
                        </div>
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>A belly button hernia in a baby usually closes on its own by age five and rarely needs surgery.</strong> A groin hernia is different and almost always needs a small operation, since it does not close by itself. Both are common, and most children do perfectly well. The only true emergency is a bulge that suddenly turns hard, painful and will not go back in.
                        </p>
                    </div>

                    <!-- 1. First reassurance -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">First, the Reassurance Most Parents Actually Need</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Finding a soft lump on your child, whether at the belly button or in the groin, is frightening the first time you notice it. It is worth saying plainly, before anything else: hernias in children are common, they are well understood, and the great majority of children with one go on completely fine, whether that means the hernia closes by itself or needs a short, routine operation.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        The two hernias parents encounter most are genuinely different conditions that happen to share a name. Telling them apart is the first step to knowing what to expect.
                    </p>

                    <!-- 2. Age-based table -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What to Expect, by Age and Type</h2>
                    <div class="overflow-x-auto rounded-2xl border border-slate-200 mb-8 shadow-sm">
                        <table class="w-full text-slate-700 text-sm">
                            <thead>
                                <tr class="bg-brand-900 text-white">
                                    <th class="px-5 py-3.5 text-left font-semibold">Age</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">Hernia type</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">Likely course</th>
                                    <th class="px-5 py-3.5 text-left font-semibold">When surgery is considered</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Birth to age 1</td>
                                    <td class="px-5 py-3.5">Umbilical (belly button)</td>
                                    <td class="px-5 py-3.5">Often shrinks and closes on its own</td>
                                    <td class="px-5 py-3.5">Not yet. Watched, not operated on.</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Age 1 to 3</td>
                                    <td class="px-5 py-3.5">Umbilical, still present</td>
                                    <td class="px-5 py-3.5">Continues to close in most children</td>
                                    <td class="px-5 py-3.5">Usually still watched unless large or symptomatic</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Age 3 to 5</td>
                                    <td class="px-5 py-3.5">Umbilical, still present</td>
                                    <td class="px-5 py-3.5">Less likely to close from here on its own</td>
                                    <td class="px-5 py-3.5">Often recommended around this age if still open</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Any age</td>
                                    <td class="px-5 py-3.5">Inguinal (groin)</td>
                                    <td class="px-5 py-3.5 font-semibold">Does not close on its own</td>
                                    <td class="px-5 py-3.5 font-semibold">Usually recommended soon after diagnosis</td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-3.5 font-semibold text-slate-900">Any age</td>
                                    <td class="px-5 py-3.5">Sudden pain, hard bulge, vomiting</td>
                                    <td class="px-5 py-3.5 text-red-700 font-semibold">Tissue trapped, cannot be pushed back</td>
                                    <td class="px-5 py-3.5 text-red-700 font-bold">Emergency surgery, right away</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- 3. Umbilical explained -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">The Belly Button Hernia: Why Watching and Waiting Is the Right Plan</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        An umbilical hernia is a small gap in the muscle where the umbilical cord once passed through, which has not yet fully closed. It looks like a soft bulge that pushes out when your baby cries, coughs, or strains, and settles back down when they relax. Small openings, under about a centimeter, close on their own in the vast majority of children, most commonly before their first birthday and almost always by age five.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        This is why your pediatrician or surgeon will often recommend simply watching a small umbilical hernia rather than operating. If it is still open by around age five, has grown larger rather than smaller, or is genuinely bothering your child, surgical closure becomes the sensible next step. Our dedicated guide on <a href="<?= $base_path ?>special-considerations/hernia-in-children" class="text-brand-700 font-semibold hover:underline">hernia in children</a> and our page on <a href="<?= $base_path ?>my_types/umbilical-hernia-treatment-in-chennai" class="text-brand-700 font-semibold hover:underline">umbilical hernia treatment</a> both go into more detail on this.
                    </p>

                    <!-- 4. Inguinal explained -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">The Groin Hernia: Why It Is Treated Differently</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        An inguinal hernia in a child shows up as a bulge in the groin, sometimes extending toward the scrotum in boys, more noticeable when your child cries, coughs, or stands. Unlike an umbilical hernia, this does not close on its own, because it involves a different structure of the body wall entirely. For this reason, surgery is usually recommended fairly soon after diagnosis, rather than a period of watching and waiting.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        The operation itself is short, well established, and children typically go home the same day. The reason surgeons tend not to delay is that a groin hernia carries a higher chance of tissue becoming trapped compared with an umbilical hernia, which is the genuine emergency to know about.
                    </p>

                    <!-- 5. The emergency -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">When to Go to the Emergency Room</h2>
                    <div class="bg-red-50 border-2 border-red-500 p-5 rounded-2xl mb-6">
                        <p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">
                            <strong>Go straight to the emergency room</strong> if the bulge suddenly becomes hard, cannot be gently pushed back, and your child has pain, is vomiting, or seems generally unwell. This means tissue has become trapped and lost its blood supply, which needs treatment the same day, not a scheduled appointment. Our <a href="<?= $base_path ?>emergency-hernia-care" class="text-red-700 font-bold hover:underline">emergency hernia care</a> page explains what happens if you arrive with this.
                        </p>
                    </div>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        This emergency situation is uncommon, and most children with either type of hernia never experience it. Knowing what it looks like is simply what lets you act quickly on the rare occasion it does happen, rather than something to expect by default.
                    </p>

                    <!-- 6. What not to do -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-4 border-b border-slate-100 pb-3">What Not to Do</h2>
                    <ul class="list-none p-0 space-y-3 mb-8">
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-red-100 text-red-700 text-sm font-bold flex items-center justify-center shrink-0">&times;</span><span class="text-slate-600 text-sm md:text-base">Do not tape, bind, or strap a coin or object over the bulge. This does not help it close and can irritate the skin.</span></li>
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-red-100 text-red-700 text-sm font-bold flex items-center justify-center shrink-0">&times;</span><span class="text-slate-600 text-sm md:text-base">Do not try any home remedy or supplement to speed up closure. Nothing sold for this purpose has any effect on the muscle gap.</span></li>
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-red-100 text-red-700 text-sm font-bold flex items-center justify-center shrink-0">&times;</span><span class="text-slate-600 text-sm md:text-base">Do not repeatedly push on the bulge to test it. A gentle, occasional check is fine, but frequent pressing serves no purpose.</span></li>
                    </ul>

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
                            This article is general medical information, not a diagnosis for your child. Any bulge on a child should be examined by a doctor to confirm the type and the right plan.
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-8 text-center shadow-xl">
                        <h3 class="font-display text-2xl font-bold mb-3">Worried About a Bulge on Your Child?</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Book a consultation for a straightforward examination and a clear plan, whether that is watching or a simple procedure.</p>
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
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Belly button hernias usually close by age 5.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Groin hernias almost always need surgery.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>A hard bulge with pain or vomiting is an emergency.</li>
                        <li class="flex items-start gap-2 text-xs text-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-1.5 shrink-0"></span>Pediatric hernia surgery is routine and well established.</li>
                    </ul>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm text-center">
                    <img src="<?= $base_path ?>assets/images/doctor-about.avif" alt="Dr. Kumar, hernia and abdominal wall surgeon in Chennai" width="96" height="96" class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-brand-50 shadow-md mb-4">
                    <h3 class="font-bold text-slate-900 text-lg mb-1">Dr. Kumar</h3>
                    <p class="text-xs text-brand-700 font-semibold mb-3">Senior Hernia &amp; Abdominal Wall Surgeon</p>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">Over 29 years of surgical experience, including hernia repair across all ages, at Billroth Hospitals, Chennai.</p>
                    <a href="<?= $base_path ?>treatment/hernia-surgeon-in-chennai" class="inline-flex items-center justify-center w-full bg-brand-50 hover:bg-brand-100 text-brand-800 text-xs font-bold py-2.5 rounded-xl border border-brand-100 transition">
                        View Doctor Profile
                    </a>
                </div>

                <div class="bg-red-600 text-white rounded-3xl p-6 shadow-lg">
                    <h3 class="font-bold text-lg mb-2">Hernia Emergency in a Child?</h3>
                    <p class="text-red-100 text-xs leading-relaxed mb-4">A hard bulge with pain or vomiting needs the emergency room now, not an appointment.</p>
                    <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center justify-center w-full gap-2 bg-white text-red-700 font-bold text-sm py-3 rounded-xl hover:bg-red-50 transition">
                        <?= $site['phone'] ?>
                    </a>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                    <h3 class="font-bold text-slate-900 text-base mb-4 border-b border-slate-100 pb-2">Related Articles</h3>
                    <div class="space-y-4">
                        <a href="<?= $base_path ?>special-considerations/hernia-in-children" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Hernia in Children: Full Guide</h4>
                                <span class="text-[11px] text-slate-400">Special considerations</span>
                            </div>
                        </a>
                        <a href="<?= $base_path ?>my_types/umbilical-hernia-treatment-in-chennai" class="flex gap-3 group">
                            <div>
                                <h4 class="font-semibold text-slate-900 text-xs leading-snug group-hover:text-brand-700 transition">Umbilical Hernia Treatment</h4>
                                <span class="text-[11px] text-slate-400">Hernia types</span>
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
