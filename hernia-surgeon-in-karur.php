<?php
$page_title       = 'Hernia Surgeon in Karur, Tamil Nadu | Dr. Kumar';
$page_description = 'Hernia surgery for Karur patients by Dr. Kumar of Billroth Hospitals, Shenoy Nagar, Chennai. approximately 380 km. Book your consultation today.';
$page_keywords    = 'hernia surgeon in Karur, hernia treatment Karur Tamil Nadu, hernia specialist near Karur, laparoscopic hernia surgery Karur, Dr. Kumar of Billroth Hospitals';
$page_url         = 'https://herniacare360.com/hernia-surgeon-in-karur';

$faqs = [
    ['q' => 'How can a patient from Karur reach the Shenoy Nagar clinic easily?', 'a' => 'Take an overnight express train from Karur Junction to Chennai Central or Egmore. Both terminals connect directly via the Chennai Metro Green Line to Shenoy Nagar Station on Gajapathy Street.'],
    ['q' => 'How long will a patient from Karur need to take off from textile or industrial work?', 'a' => 'With laparoscopic surgery, desk work and managerial duties can resume in 7 days. Heavy manual lifting in bus coach or textile factories can be safely restarted in 4 to 6 weeks.'],
    ['q' => 'Can I have post-surgery follow-up reviews done from Karur?', 'a' => 'Yes. Dr. Kumar conducts follow-up reviews via video call. Because modern laparoscopic repairs use absorbable internal sutures, you do not need to return to Chennai simply for suture removal.'],
    ['q' => 'What should Karur residents do in an emergency hernia situation?', 'a' => 'If you notice sudden severe pain, redness, or nausea, report directly to the emergency department at Government Medical College Hospital, Karur.'],
];

require __DIR__ . '/includes/header.php';
?>

<!-- Hero -->
<section class="relative bg-brand-950 text-white overflow-hidden py-16 md:py-20">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="relative max-w-7xl mx-auto px-4 z-10">
        <nav class="flex items-center gap-2 text-sm text-slate-300 mb-6">
            <a href="<?= $base_path ?>" class="hover:text-white transition">Home</a>
            <span class="text-slate-500">/</span>
            <a href="<?= $base_path ?>treatment/hernia-surgeon-in-chennai" class="hover:text-white transition">Hernia Surgeon in Chennai</a>
            <span class="text-slate-500">/</span>
            <span class="text-accent font-medium">Karur</span>
        </nav>

        <div class="max-w-3xl">
            <h1 class="font-display text-3xl md:text-5xl font-bold leading-tight mb-6">
                Hernia Surgeon in Karur,<br><span class="text-accent">Tamil Nadu</span>
            </h1>
            <p class="text-lg text-slate-200 leading-relaxed mb-8">
                Advanced laparoscopic and robotic hernia surgery for patients from Karur and Karur by Dr. Kumar of Billroth Hospitals, Shenoy Nagar, Chennai. Located approximately 380 km with direct access via NH 81 & NH 45 and train connectivity via Karur Junction (KRR).
            </p>
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

<!-- Doctor Profile Section -->
<section id="surgeon-profile" class="py-14 md:py-20 bg-white border-b border-slate-200 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Left Info Content -->
            <div class="lg:col-span-7">
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-xs bg-brand-100 px-3.5 py-1.5 rounded-full inline-block mb-4">Meet Your Senior Hernia Surgeon</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mb-3 leading-tight">
                    Dr. Kumar of Billroth Hospitals
                </h2>
                <p class="text-brand-700 font-semibold text-sm md:text-base mb-4">
                    <?= $site['job_title'] ?> | <?= $site['credentials'] ?>
                </p>
                <p class="text-slate-600 leading-relaxed mb-4 text-base">
                    With nearly three decades of dedicated surgical experience, Dr. Kumar is a leading specialist in laparoscopic, robotic, and complex abdominal wall reconstruction in Chennai. Serving patients from Karur, Chennai, and across Tamil Nadu, his practice focuses on durable, anatomical hernia repairs that allow patients to return safely to daily activities.
                </p>
                
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 my-6">
                    <div class="bg-slate-50 border border-slate-200 rounded-xl p-3 text-center">
                        <div class="text-2xl font-bold text-brand-700">29+</div>
                        <div class="text-xs text-slate-500 font-medium mt-0.5">Years Practice</div>
                    </div>
                    <div class="bg-slate-50 border border-slate-200 rounded-xl p-3 text-center">
                        <div class="text-2xl font-bold text-brand-700">10,000+</div>
                        <div class="text-xs text-slate-500 font-medium mt-0.5">Hernia Repairs</div>
                    </div>
                    <div class="bg-slate-50 border border-slate-200 rounded-xl p-3 text-center">
                        <div class="text-2xl font-bold text-brand-700">12,000+</div>
                        <div class="text-xs text-slate-500 font-medium mt-0.5">Keyhole Surgeries</div>
                    </div>
                    <div class="bg-slate-50 border border-slate-200 rounded-xl p-3 text-center">
                        <div class="text-2xl font-bold text-accent">5.0 ★</div>
                        <div class="text-xs text-slate-500 font-medium mt-0.5">600+ Reviews</div>
                    </div>
                </div>

                <div class="grid sm:grid-cols-2 gap-2.5 text-slate-700 text-sm mb-6">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" clip-rule="evenodd"/></svg>
                        <span>MBBS, MS (Surgery)</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" clip-rule="evenodd"/></svg>
                        <span>MRCS (England)</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" clip-rule="evenodd"/></svg>
                        <span>FMAS, FIAGES Fellow</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" clip-rule="evenodd"/></svg>
                        <span>FALS Robotic, Hernia &amp; AWR</span>
                    </div>
                </div>

                <div class="bg-amber-50 border-l-4 border-accent p-4 rounded-r-xl mb-6">
                    <p class="text-slate-700 text-xs md:text-sm m-0">
                        <strong>Award Recognition:</strong> Recipient of the Times Health Award for Service Excellence in Laparoscopic Hernia Surgery (2025) and Advanced Laparoscopy &amp; Robotic Surgery (2026).
                    </p>
                </div>

                <div class="flex flex-wrap gap-3">
                    <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-brand-700 hover:bg-brand-800 text-white font-bold text-sm px-6 py-3 rounded-full transition shadow-md hover:scale-105">
                        Book Consultation
                    </a>
                    <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai" class="inline-flex items-center gap-2 bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold text-sm px-6 py-3 rounded-full transition">
                        View Full Surgeon Profile
                    </a>
                </div>
            </div>
            
            <!-- Right Doctor Portrait -->
            <div class="lg:col-span-5">
                <div class="relative max-w-md mx-auto">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white bg-slate-100 aspect-[3/4]">
                        <img src="<?= $base_path ?>assets/images/dr-kumar-office-portrait.jpg" alt="Dr. Kumar of Billroth Hospitals, senior hernia and laparoscopic surgeon" width="1280" height="960" class="w-full h-full object-cover object-[center_28%]">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/40 via-transparent to-transparent"></div>
                    </div>
                    
                    <div class="absolute -bottom-5 -right-4 bg-white rounded-2xl shadow-xl p-4 border border-slate-100 max-w-xs hidden sm:block">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-brand-50 flex items-center justify-center text-brand-700 shrink-0 border border-brand-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <div>
                                <p class="text-[10px] text-slate-500 font-bold uppercase tracking-wider">Clinical Lead</p>
                                <p class="text-xs font-bold text-slate-900 mt-0.5">Minimal Access &amp; Robotic Surgery</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Main Content Area -->
<section class="py-14 md:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-10">

            <article class="lg:col-span-8 bg-white rounded-3xl p-7 md:p-10 shadow-sm border border-slate-100">
                <div class="prose prose-slate max-w-none">

                    <!-- Where the clinic is -->
                    <div class="bg-brand-50 border-l-4 border-brand-700 p-5 rounded-r-2xl mb-9">
                        <p class="text-slate-700 text-sm md:text-base leading-relaxed m-0">
                            <strong>Where to find Dr. Kumar of Billroth Hospitals:</strong> <?= $site['clinic']['name'] ?>, <?= $site['address'] ?>. This is the single consulting and operating location, welcoming patients from Karur, Karur, and surrounding towns across Tamil Nadu.
                        </p>
                    </div>

                    <!-- Getting here: the genuinely local section -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">Travelling to Billroth Hospitals from Karur</h2>
                    <p class="text-slate-600 leading-relaxed mb-5">
                        Karur is located approximately 380 km from our hospital in Shenoy Nagar, Chennai. Patients travelling from Karur and across Karur have convenient, well-established rail and road connectivity into the city.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-5">
                        <strong>By Train:</strong> Regular services operate via Karur Junction (KRR), providing regular express trains connecting to Chennai Central / Chennai Egmore (approx. 6.5 to 7.5 hours). Upon arrival at Chennai Central or Chennai Egmore, patients can directly board the <strong>Chennai Metro Green Line</strong> straight to <strong>Shenoy Nagar Metro Station</strong>. This provides a cool, continuous transit without dealing with city road bottlenecks.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-5">
                        <strong>By Road:</strong> For patients arriving by private vehicle or taxi, the primary route is along NH 81 & NH 45 (via Tiruchirappalli, Perambalur, and Villupuram). The hospital on Gajapathy Street has dedicated parking and ramp-assisted entry for comfortable arrival.
                    </p>

                    <!-- Local Occupations & Hernia Prevalence -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-9 mb-4 border-b border-slate-100 pb-3">Occupational Strain &amp; Hernia Risks in Karur</h2>
                    <p class="text-slate-600 leading-relaxed mb-5">
                        The regional economic landscape in Karur includes home textiles manufacturing and export, cotton spinning mills, bus body building, and paper production. Many local residents experience chronic physical demands including heavy textile roll handling, mechanical metal fabrication in bus coach building, and prolonged standing.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-5">
                        Repeated physical strain, prolonged standing, and chronic heavy lifting significantly increase intra-abdominal pressure. When combined with natural weakness in the groin or abdominal wall fascia, this frequently leads to inguinal, umbilical, or incisional hernias. For working professionals and laborers from Karur, laparoscopic keyhole repair offers a durable, mesh-reinforced solution that minimizes tissue trauma and prevents recurrence.
                    </p>

                    <!-- Care available -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-9 mb-4 border-b border-slate-100 pb-3">Specialized Hernia Treatments for Karur Patients</h2>
                    <p class="text-slate-600 leading-relaxed mb-5">
                        Every advanced hernia technique Dr. Kumar provides is available to patients from Karur. Clinical details and treatment overviews are detailed on their respective procedure guides:
                    </p>
                    <div class="grid sm:grid-cols-2 gap-3 mb-6 not-prose">
                        <a href="<?= $base_path ?>my_types/inguinal-hernia-treatment-in-chennai" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold text-slate-800 hover:text-brand-700 transition">Inguinal hernia treatment</a>
                        <a href="<?= $base_path ?>my_types/umbilical-hernia-treatment-in-chennai" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold text-slate-800 hover:text-brand-700 transition">Umbilical hernia treatment</a>
                        <a href="<?= $base_path ?>my_types/incisional-hernia-treatment-in-chennai" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold text-slate-800 hover:text-brand-700 transition">Incisional hernia treatment</a>
                        <a href="<?= $base_path ?>treatment/best-laparoscopic-hernia-surgery-in-chennai" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold text-slate-800 hover:text-brand-700 transition">Laparoscopic keyhole repair</a>
                        <a href="<?= $base_path ?>best-robotic-hernia-surgery-in-chennai" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold text-slate-800 hover:text-brand-700 transition">Robotic hernia surgery</a>
                        <a href="<?= $base_path ?>my_types/recurrent-hernia" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold text-slate-800 hover:text-brand-700 transition">Recurrent hernia repair</a>
                    </div>
                    <p class="text-slate-600 leading-relaxed mb-5">
                        For comprehensive background on Dr. Kumar&rsquo;s 29 years of surgical leadership and patient outcomes, explore the main <a href="<?= $base_path ?>treatment/hernia-surgeon-in-chennai" class="text-brand-700 font-semibold hover:underline">hernia surgeon in Chennai</a> pillar page.
                    </p>

                    <!-- Outstation care pathway -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-9 mb-4 border-b border-slate-100 pb-3">Seamless Care Protocol for Karur Patients</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        To ensure that patients travelling from Karur have an efficient experience without repeated long-distance trips, our department follows a streamlined care pathway:
                    </p>
                    <ol class="list-decimal pl-5 space-y-2 text-slate-600 text-sm md:text-base mb-6">
                        <li><strong>Pre-Travel Digital Review:</strong> Share your ultrasound or CT scans via WhatsApp or phone consultation. Dr. Kumar reviews the clinical indications and confirms eligibility before you book your journey.</li>
                        <li><strong>Planned Day-of-Arrival Surgery:</strong> With pre-operative fasting instructions given ahead of time, admission and surgical clearance are completed smoothly on the morning of your arrival.</li>
                        <li><strong>Minimal 24-Hour Hospitalization:</strong> Modern keyhole techniques allow most patients to walk within hours and receive discharge clearance the following day.</li>
                        <li><strong>Safe Return Journey:</strong> Our team provides specific travel guidance (e.g. choosing AC sleeper berths on trains over bumpy road buses) to ensure comfortable transit back to Karur.</li>
                        <li><strong>Remote Video Follow-Up:</strong> Suture removal is unnecessary with modern absorbable stitches. Recovery reviews at 1 week and 1 month are completed via video call.</li>
                    </ol>

                    <!-- What to bring -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-9 mb-4 border-b border-slate-100 pb-3">What to Bring to Your First Consultation</h2>
                    <ul class="list-none p-0 space-y-2.5 mb-6">
                        <li class="flex items-start gap-2.5 text-slate-600 text-sm md:text-base"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-2 shrink-0"></span>Any previous ultrasound or CT scan films/CDs, not just the printed summary.</li>
                        <li class="flex items-start gap-2.5 text-slate-600 text-sm md:text-base"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-2 shrink-0"></span>A comprehensive list of current medications (especially blood thinners, blood pressure, and diabetes prescriptions).</li>
                        <li class="flex items-start gap-2.5 text-slate-600 text-sm md:text-base"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-2 shrink-0"></span>Discharge summaries or notes from any previous abdominal or pelvic surgeries.</li>
                        <li class="flex items-start gap-2.5 text-slate-600 text-sm md:text-base"><span class="w-1.5 h-1.5 rounded-full bg-brand-600 mt-2 shrink-0"></span>Original health insurance e-card and government photo ID for cashless TPA desk processing.</li>
                    </ul>

                    <!-- Emergency warning -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-9 mb-4 border-b border-slate-100 pb-3">Emergency Warning: When Not to Travel from Karur</h2>
                    <div class="bg-red-50 border-2 border-red-500 p-5 rounded-2xl mb-6">
                        <p class="text-slate-800 text-sm md:text-base leading-relaxed m-0">
                            <strong>Do not undertake a long journey if you experience acute hernia symptoms:</strong> If your hernia suddenly becomes excruciatingly painful, turns firm, red or dark, cannot be pushed back, or is accompanied by continuous vomiting or inability to pass gas, seek immediate emergency surgical evaluation at <strong>Government Medical College Hospital, Karur</strong> or the nearest emergency casualty ward in Karur. For full medical guidance, read our <a href="<?= $base_path ?>emergency-hernia-care" class="text-red-700 font-bold hover:underline">emergency hernia care</a> page and <a href="<?= $base_path ?>blog/hernia-emergency-warning-signs" class="text-red-700 font-bold hover:underline">warning signs guide</a>.
                        </p>
                    </div>

                    <!-- FAQs -->
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-10 mb-5 border-b border-slate-100 pb-3">Karur Patient Questions</h2>
                    <div class="space-y-4 mb-8">
                        <?php foreach ($faqs as $i => $faq): ?>
                        <div class="bg-slate-50 rounded-2xl border border-slate-200 p-5">
                            <h3 class="font-bold text-slate-900 text-base mb-2"><?= htmlspecialchars($faq['q'], ENT_QUOTES, 'UTF-8') ?></h3>
                            <p class="text-slate-600 text-sm leading-relaxed m-0"><?= htmlspecialchars($faq['a'], ENT_QUOTES, 'UTF-8') ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white rounded-3xl p-7 text-center shadow-xl">
                        <h3 class="font-display text-xl md:text-2xl font-bold mb-3">Schedule a Consultation from Karur</h3>
                        <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Get an expert surgical assessment, confirm whether repair is required, and plan your treatment safely with Dr. Kumar.</p>
                        <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition shadow-lg hover:scale-105">
                            Book an Appointment
                        </a>
                    </div>
                </div>
            </article>

            <!-- Sidebar -->
            <aside class="lg:col-span-4 space-y-6">
                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                    <h3 class="font-bold text-slate-900 text-base mb-3">Clinic Location</h3>
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
                    <p class="text-red-100 text-xs leading-relaxed mb-4">If the bulge is firm, discolored, or you have vomiting, seek emergency care immediately.</p>
                    <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center justify-center w-full gap-2 bg-white text-red-700 font-bold text-sm py-3 rounded-xl hover:bg-red-50 transition">
                        <?= $site['phone'] ?>
                    </a>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                    <h3 class="font-bold text-slate-900 text-base mb-3">Nearby Districts We Serve</h3>
                    <div class="flex flex-wrap gap-2">
                        <a href="<?= $base_path ?>hernia-surgeon-in-tiruchirappalli" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-full px-3 py-1.5 text-xs font-medium text-slate-700 hover:text-brand-700 transition">Tiruchirappalli</a>
                        <a href="<?= $base_path ?>hernia-surgeon-in-dindigul" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-full px-3 py-1.5 text-xs font-medium text-slate-700 hover:text-brand-700 transition">Dindigul</a>
                        <a href="<?= $base_path ?>hernia-surgeon-in-namakkal" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-full px-3 py-1.5 text-xs font-medium text-slate-700 hover:text-brand-700 transition">Namakkal</a>
                        <a href="<?= $base_path ?>hernia-surgeon-in-erode" class="bg-slate-50 hover:bg-brand-50 border border-slate-200 rounded-full px-3 py-1.5 text-xs font-medium text-slate-700 hover:text-brand-700 transition">Erode</a>
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

<?php require_once __DIR__ . '/includes/footer.php'; ?>
