<?php
$page_title = 'Intra-Operative Hernia Techniques | Dr. Kumar of Billroth Hospitals, Chennai';
$page_description = 'The specialized techniques Dr. Kumar of Billroth Hospitals uses during hernia and abdominal wall surgery, chosen according to the defect, the anatomy and the patient in front.';
$page_keywords = 'intra operative techniques hernia, special surgical techniques, defect closure, component separation, TAR, nerve preservation, intraoperative decision making hernia, chennai hernia surgeon';
require __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white overflow-hidden py-20 md:py-28">
    <div class="absolute inset-0 opacity-20">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="grid" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse">
                    <path d="M 60 0 L 0 0 0 60" fill="none" stroke="white" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid)"/>
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 z-10">
        <nav class="flex items-center gap-2 text-sm text-slate-300 mb-6 bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full w-max border border-white/10">
            <a href="<?= $base_path ?>" class="hover:text-white transition">Home</a>
            <span class="text-slate-500">/</span>
            <span class="text-slate-400">Treatments</span>
            <span class="text-slate-500">/</span>
            <span class="text-accent font-medium">Intra Operative Special Techniques</span>
        </nav>

        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 border border-white/10 shadow-sm">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Precision In The Operating Room
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] mb-6">
                Intra Operative<br>
                <span class="text-accent">Special Techniques</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                The decisions and manoeuvres made by the surgeon once you are asleep on the table - tailored to your defect, your tissues, and your recovery goals. These are the techniques that turn a good operation into the right operation for you.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#techniques" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition duration-300 shadow-lg shadow-accent/20 hover:scale-105">
                    Explore Techniques
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7H3"/></svg>
                </a>
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-white/15 hover:bg-white/25 backdrop-blur text-white font-bold px-7 py-3.5 rounded-full border border-white/30 transition duration-300 hover:scale-105">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                    Book Consultation
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Intro -->
<section id="techniques" class="py-12 md:py-16 bg-white scroll-mt-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-50 px-3.5 py-1.5 rounded-full inline-block mb-4">Why "Special Techniques"?</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mb-6 leading-tight">
                    What happens after you're anesthetized determines everything
                </h2>
                <p class="text-slate-600 leading-relaxed mb-4">No two hernias are identical. The broad approach is chosen in clinic, but sac handling, defect closure, mesh plane, component separation and nerve preservation are decided during the operation itself.</p>
                <p class="text-slate-600 leading-relaxed mb-4">
                    These intra-operative decisions are what separate a routine hernia repair from a durable reconstruction - and they require both training and judgement. The list below covers the special techniques most often deployed in Dr. Kumar of Billroth Hospitals&rsquo; practice.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-brand-50 rounded-2xl p-6 border border-brand-100">
                    <div class="text-3xl font-bold text-brand-700 mb-1">29+</div>
                    <div class="text-sm text-slate-600">Years of surgical decision-making</div>
                </div>
                <div class="bg-brand-50 rounded-2xl p-6 border border-brand-100">
                    <div class="text-3xl font-bold text-brand-700 mb-1">10k+</div>
                    <div class="text-sm text-slate-600">Hernia repairs performed</div>
                </div>
                <div class="bg-brand-50 rounded-2xl p-6 border border-brand-100">
                    <div class="text-3xl font-bold text-brand-700 mb-1">3</div>
                    <div class="text-sm text-slate-600">Modalities: open, lap, robotic</div>
                </div>
                <div class="bg-brand-50 rounded-2xl p-6 border border-brand-100">
                    <div class="text-3xl font-bold text-brand-700 mb-1">Custom</div>
                    <div class="text-sm text-slate-600">Plan tailored to your anatomy</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Special Techniques Grid -->
<section class="py-12 md:py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-50 px-3.5 py-1.5 rounded-full inline-block mb-4">The Toolbox</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                Special Techniques Used During Surgery
            </h2>
            <p class="text-slate-600 leading-relaxed">
                Each technique is selected based on intra-operative findings - the size of the defect, the quality of tissues, prior scarring, and your long-term functional goals.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="w-12 h-12 rounded-xl bg-brand-50 text-brand-700 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Defect Closure & Fascial Reapproximation</h3>
                <p class="text-sm text-slate-600 leading-relaxed">Re-approximating the muscle and fascia in the midline (or over the defect) before mesh placement - restores anatomy, distributes mesh tension, and improves functional outcome.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="w-12 h-12 rounded-xl bg-brand-50 text-brand-700 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10l8 4 8-4V7M12 3v18"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Component Separation (Anterior / Posterior)</h3>
                <p class="text-sm text-slate-600 leading-relaxed">Releasing the external oblique (anterior) or transversus abdominis (posterior) to allow the rectus muscles to come back to the midline in large defects - the foundation of AWR.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="w-12 h-12 rounded-xl bg-brand-50 text-brand-700 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3z M3 9h18 M9 21V9"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Transversus Abdominis Release (TAR)</h3>
                <p class="text-sm text-slate-600 leading-relaxed">A posterior component separation that creates a large retro-muscular space for sublay mesh placement - the gold standard for complex incisional and recurrent ventral hernias.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="w-12 h-12 rounded-xl bg-brand-50 text-brand-700 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Nerve Identification & Preservation</h3>
                <p class="text-sm text-slate-600 leading-relaxed">Careful identification and protection of the ilioinguinal, iliohypogastric and lateral cutaneous nerves to reduce post-op chronic groin pain after inguinal hernia repair.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="w-12 h-12 rounded-xl bg-brand-50 text-brand-700 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a10 10 0 100 20 10 10 0 000-20z M12 6v6l4 2"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Sac Reduction & Peritoneal Closure</h3>
                <p class="text-sm text-slate-600 leading-relaxed">Complete reduction of the hernia sac and meticulous peritoneal closure to prevent adhesions and bowel-related complications - especially important in TAPP and TEP.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="w-12 h-12 rounded-xl bg-brand-50 text-brand-700 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Intra-operative Sizing & Mesh Selection</h3>
                <p class="text-sm text-slate-600 leading-relaxed">Mesh size, shape and overlap (typically 3-5 cm beyond defect) decided after measuring the defect under pneumoperitoneum - not from the scan alone.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="w-12 h-12 rounded-xl bg-brand-50 text-brand-700 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3z M7 12h10 M12 7v10"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Mesh Fixation Strategy (Tack / Glue / Sutureless)</h3>
                <p class="text-sm text-slate-600 leading-relaxed">Choosing between self-fixating mesh, fibrin glue, tacks, or transfascial sutures based on defect location, tissue quality, and risk of chronic pain.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="w-12 h-12 rounded-xl bg-brand-50 text-brand-700 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4 M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Intra-operative Adhesiolysis</h3>
                <p class="text-sm text-slate-600 leading-relaxed">Careful, often painstaking sharp and hydro-dissection adhesiolysis in recurrent or incisional hernias to free the bowel and create a clean plane for mesh placement.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="w-12 h-12 rounded-xl bg-brand-50 text-brand-700 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2H7a2 2 0 00-2 2v2"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Intra-operative Bowel & Vascular Assessment</h3>
                <p class="text-sm text-slate-600 leading-relaxed">Direct inspection of incarcerated or strangulated contents to assess viability - deciding whether bowel resection is needed in the same sitting or as a staged procedure.</p>
            </div>

        </div>
    </div>
</section>

<!-- Why it matters -->
<section class="py-12 md:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="bg-gradient-to-br from-brand-700 to-brand-900 rounded-3xl p-8 md:p-12 text-white relative overflow-hidden">
            <div class="absolute -right-20 -top-20 w-64 h-64 rounded-full bg-white/5"></div>
            <div class="absolute -right-10 -bottom-10 w-40 h-40 rounded-full bg-accent/20"></div>
            <div class="relative max-w-3xl">
                <span class="inline-flex items-center gap-2 bg-white/10 px-3 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-4">
                    Why this matters for you
                </span>
                <h2 class="font-display text-3xl md:text-4xl font-bold mb-4 leading-tight">
                    The right technique, not just the right mesh
                </h2>
                <p class="text-slate-200 leading-relaxed mb-6">
                    Most recurrences, chronic pain, and poor functional results after hernia surgery are not failures of mesh - they are failures of intra-operative judgement. Choosing the right plane, closing the defect where possible, releasing the right component, and protecting the right nerve are the things you cannot see in a marketing brochure but which determine whether your repair lasts a lifetime.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition duration-300 shadow-lg hover:scale-105">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                        Call: <?= $site['phone'] ?>
                    </a>
                    <a href="mailto:<?= $site['email'] ?>" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-bold px-7 py-3.5 rounded-full border border-white/30 transition duration-300">
                        Email Dr. Kumar of Billroth Hospitals
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQs -->
<section class="py-12 md:py-16 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4">
        <div class="text-center mb-10">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-50 px-3.5 py-1.5 rounded-full inline-block mb-4">Common Questions</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900">
                Intra Operative Techniques - FAQs
            </h2>
        </div>

        <div class="space-y-4">
            <div class="faq-item bg-white rounded-2xl border border-slate-200 overflow-hidden">
                <button class="faq-toggle w-full flex items-center justify-between gap-4 p-5 text-left">
                    <span class="font-semibold text-slate-900">How do I know which technique will be used for me?</span>
                    <span class="faq-symbol text-2xl font-light bg-brand-50 text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm">+</span>
                </button>
                <div class="faq-content hidden px-5 pb-5">
                    <p class="text-slate-600 leading-relaxed">You will not know the exact intra-operative plan in advance, because the final decision follows what the anatomy shows. What is planned in clinic is the broad approach.</p>
                </div>
            </div>

            <div class="faq-item bg-white rounded-2xl border border-slate-200 overflow-hidden">
                <button class="faq-toggle w-full flex items-center justify-between gap-4 p-5 text-left">
                    <span class="font-semibold text-slate-900">Is component separation safe?</span>
                    <span class="faq-symbol text-2xl font-light bg-brand-50 text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm">+</span>
                </button>
                <div class="faq-content hidden px-5 pb-5">
                    <p class="text-slate-600 leading-relaxed">Both anterior and posterior component separation are safe in experienced hands, and are reserved for defects that cannot close without them. TAR preserves the nerve and blood supply better.</p>
                </div>
            </div>

            <div class="faq-item bg-white rounded-2xl border border-slate-200 overflow-hidden">
                <button class="faq-toggle w-full flex items-center justify-between gap-4 p-5 text-left">
                    <span class="font-semibold text-slate-900">Will my defect be closed during surgery?</span>
                    <span class="faq-symbol text-2xl font-light bg-brand-50 text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm">+</span>
                </button>
                <div class="faq-content hidden px-5 pb-5">
                    <p class="text-slate-600 leading-relaxed">Wherever tissue quality and tension allow, yes. Closing it restores the working anatomy of the wall and spreads mesh tension evenly. Very large or contaminated defects may need bridging.</p>
                </div>
            </div>

            <div class="faq-item bg-white rounded-2xl border border-slate-200 overflow-hidden">
                <button class="faq-toggle w-full flex items-center justify-between gap-4 p-5 text-left">
                    <span class="font-semibold text-slate-900">How is nerve injury avoided during the operation?</span>
                    <span class="faq-symbol text-2xl font-light bg-brand-50 text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm">+</span>
                </button>
                <div class="faq-content hidden px-5 pb-5">
                    <p class="text-slate-600 leading-relaxed">In open groin repair the ilioinguinal, iliohypogastric and lateral femoral cutaneous nerves are identified and protected. In keyhole repair they lie deeper, and are spared by avoiding tacks in the triangle of pain.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
