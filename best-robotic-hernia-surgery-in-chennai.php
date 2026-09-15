<?php
$page_title = 'Robotic Hernia Surgery in Chennai | Dr. Kumar of Billroth Hospitals';
$page_description = 'Robotic hernia surgery in Chennai by Dr. Kumar of Billroth Hospitals. Tiny incisions, high precision, less pain after surgery and a faster return to work.';
require __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white overflow-hidden py-20 md:py-28">
    <div class="absolute inset-0 opacity-15">
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
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 text-sm text-slate-300 mb-6 bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full w-max border border-white/10">
            <a href="<?= $base_path ?>" class="hover:text-white transition">Home</a>
            <span class="text-slate-500">/</span>
            <a href="<?= $base_path ?>treatment/hernia-surgeon-in-chennai" class="hover:text-white transition">Treatments</a>
            <span class="text-slate-500">/</span>
            <span class="text-accent font-medium">Robotic Surgery</span>
        </nav>

        <div class="grid lg:grid-cols-12 gap-12 items-center">
            <!-- Left Column -->
            <div class="lg:col-span-7">
                <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 border border-white/10 shadow-sm">
                    <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                    Advanced Robotic Surgery
                </span>
                <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] mb-6">
                    Advanced Robotic<br>
                    <span class="text-accent">Hernia Surgery</span>
                </h1>
                <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                    Experience the next generation of hernia repair with advanced robotic systems. Dr.Kumar leading Robotic Hernia Surgeon in Chennai, brings unprecedented 3D visualization, tremor filtration, and wristed precision to your procedure.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#why-robotic" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition duration-300 shadow-lg shadow-accent/20 hover:scale-105">
                        Surgical Benefits
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7H3"/></svg>
                    </a>
                    <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-white/15 hover:bg-white/25 backdrop-blur text-white font-bold px-7 py-3.5 rounded-full border border-white/30 transition duration-300 hover:scale-105">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                        Book Consultation
                    </a>
                </div>
            </div>

            <!-- Right Column: Premium Image with Overlay -->
            <div class="lg:col-span-5 relative">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl bg-slate-800 aspect-[4/3] border border-white/10 group">
                    <img src="<?= $base_path ?>assets/images/robotic-precision.png" 
                         alt="Advanced Robotic Surgery System Setup"
                         class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-slate-950/10 to-transparent"></div>
                    
                    <!-- Bottom-Left Glassmorphic Badge -->
                    <div class="absolute bottom-5 left-5 right-5 bg-white/95 backdrop-blur-sm rounded-2xl p-4 shadow-xl border border-white/25 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-brand-50 border border-brand-100 flex items-center justify-center text-brand-700 shrink-0 shadow-inner">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <p class="font-bold text-slate-900 text-xs leading-none font-display">Latest Robotic Systems</p>
                            <p class="text-[10px] text-brand-600 font-semibold mt-1">3D systems with 720 degrees rotation and 15x magnification</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Robotic Surgery -->
<section id="why-robotic" class="py-12 md:py-16 bg-white scroll-mt-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-12 items-center">
            <!-- Left Column: Guidelines List (lg:col-span-5) -->
            <div class="lg:col-span-5 space-y-6">
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-50 px-3.5 py-1.5 rounded-full inline-block mb-2">Technological Edge</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 leading-tight">
                    Why Choose Robotic<br>Hernia Surgery?
                </h2>
                <p class="text-slate-655 leading-relaxed text-sm md:text-base mb-6">
                    Robotic surgery combines the benefits of minimally invasive keyhole procedures with advanced computer controls that give Dr. Kumar of Billroth Hospitals enhanced capabilities for meticulous abdominal reconstruction.
                </p>

                <div class="relative rounded-3xl overflow-hidden bg-slate-100 aspect-[735/548] border border-slate-200 shadow-xl group">
                    <img src="<?= $base_path ?>assets/latest-images/robotic-surgery-dr-kumar.png"
                         alt="Dr. Kumar of Billroth Hospitals performing advanced robotic hernia surgery"
                         class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/40 via-transparent to-transparent"></div>
                    <div class="absolute bottom-5 left-5 right-5 bg-white/95 backdrop-blur-sm rounded-2xl p-4 shadow-xl border border-white/20 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-brand-50 border border-brand-100 flex items-center justify-center text-brand-700 shrink-0 shadow-inner">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <div>
                            <p class="font-bold text-slate-900 text-xs leading-none font-display">Tremor Filtration</p>
                            <p class="text-[10px] text-brand-600 font-semibold mt-1">Steady and micron-level motion scaling</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Line-Divided Benefits List (lg:col-span-7) -->
            <div class="lg:col-span-7">
                <div class="space-y-0 divide-y divide-slate-200 border-t border-b border-slate-200">
                    <!-- 3D Visualization -->
                    <div class="flex gap-4 items-start py-5 group">
                        <div class="shrink-0 w-10 h-10 rounded-full bg-brand-50 text-brand-700 flex items-center justify-center group-hover:bg-brand-700 group-hover:text-white transition duration-300 shadow-sm group-hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-base mb-0.5 group-hover:text-brand-700 transition">Enhanced 3D Visualization</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">15x magnification with true 3D systems. Dr. Kumar of Billroth Hospitals can view abdominal structures, nerves, and vessels with microscopic clarity for precise mesh placement.</p>
                        </div>
                    </div>

                    <!-- Wristed Instruments -->
                    <div class="flex gap-4 items-start py-5 group">
                        <div class="shrink-0 w-10 h-10 rounded-full bg-brand-50 text-brand-700 flex items-center justify-center group-hover:bg-brand-700 group-hover:text-white transition duration-300 shadow-sm group-hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-base mb-0.5 group-hover:text-brand-700 transition">Wristed Instruments (EndoWrist)</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Robotic wristed instruments feature 720 degrees rotation, exceeding human hand range of motion. This enables highly precise suturing and mesh fixation in narrow anatomical pockets.</p>
                        </div>
                    </div>

                    <!-- Surgeon Control -->
                    <div class="flex gap-4 items-start py-5 group">
                        <div class="shrink-0 w-10 h-10 rounded-full bg-brand-50 text-brand-700 flex items-center justify-center group-hover:bg-brand-700 group-hover:text-white transition duration-300 shadow-sm group-hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-base mb-0.5 group-hover:text-brand-700 transition">Direct Surgeon Control</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Every motion is performed dynamically by Dr. Kumar of Billroth Hospitals from the console. The robotic arms act as a direct extension of his hands, eliminating minor tremors and filtering movements.</p>
                        </div>
                    </div>

                    <!-- Faster Recovery -->
                    <div class="flex gap-4 items-start py-5 group">
                        <div class="shrink-0 w-10 h-10 rounded-full bg-brand-50 text-brand-700 flex items-center justify-center group-hover:bg-brand-700 group-hover:text-white transition duration-300 shadow-sm group-hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-base mb-0.5 group-hover:text-brand-700 transition">Faster Recovery & Less Pain</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Small, precise keyhole incisions result in minimal tissue trauma, reduced post-operative pain, shorter hospital stays, and a quicker return to work.</p>
                        </div>
                    </div>

                    <!-- Complex Cases -->
                    <div class="flex gap-4 items-start py-5 group">
                        <div class="shrink-0 w-10 h-10 rounded-full bg-brand-50 text-brand-700 flex items-center justify-center group-hover:bg-brand-700 group-hover:text-white transition duration-300 shadow-sm group-hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-base mb-0.5 group-hover:text-brand-700 transition">Unrivaled in Complex Cases</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Specially suited for large ventral defects, recurrent hernias, bilateral inguinal hernias, and abdominal wall reconstructions (TAR procedures).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- When Robotic Is Recommended -->
<section class="py-12 md:py-16 bg-slate-50 border-t border-b border-slate-100 scroll-mt-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-12 items-center">
            <!-- Left Column: Indications list (lg:col-span-7) -->
            <div class="lg:col-span-7">
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-50 px-3.5 py-1.5 rounded-full inline-block mb-4">Patient Suitability</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6 leading-tight">
                    When Is Robotic Surgery Recommended?
                </h2>
                <p class="text-slate-655 leading-relaxed mb-8 text-sm md:text-base">
                    While robotic surgery can be used for most standard hernia repairs, it offers particular clinical advantages in specific, demanding scenarios. Dr. Kumar of Billroth Hospitals recommends robotic intervention for:
                </p>

                <div class="space-y-0 divide-y divide-slate-200 border-t border-b border-slate-200">
                    <!-- Bilateral -->
                    <div class="flex gap-4 items-start py-4 group">
                        <div class="shrink-0 w-8 h-8 rounded-full bg-brand-50 text-brand-600 flex items-center justify-center shrink-0 shadow-sm mt-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm mb-0.5 group-hover:text-brand-700 transition">Bilateral Hernia Repairs</h4>
                            <p class="text-xs text-slate-600 leading-relaxed">Repairing hernias on both sides of the groin simultaneously using a single set of small abdominal keyholes.</p>
                        </div>
                    </div>

                    <!-- Recurrent -->
                    <div class="flex gap-4 items-start py-4 group">
                        <div class="shrink-0 w-8 h-8 rounded-full bg-brand-50 text-brand-600 flex items-center justify-center shrink-0 shadow-sm mt-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm mb-0.5 group-hover:text-brand-700 transition">Recurrent Hernias</h4>
                            <p class="text-xs text-slate-600 leading-relaxed">For patients with previous repairs. Precise wrist controls allow delicate separation of scar tissues and old mesh layers.</p>
                        </div>
                    </div>

                    <!-- Large/Complex -->
                    <div class="flex gap-4 items-start py-4 group">
                        <div class="shrink-0 w-8 h-8 rounded-full bg-brand-50 text-brand-600 flex items-center justify-center shrink-0 shadow-sm mt-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm mb-0.5 group-hover:text-brand-700 transition">Large Ventral & Incisional Hernias</h4>
                            <p class="text-xs text-slate-600 leading-relaxed">Abdominal wall reconstructions requiring complex muscle releases (TAR) and large mesh inserts to restore structural strength.</p>
                        </div>
                    </div>

                    <!-- Obese -->
                    <div class="flex gap-4 items-start py-4 group">
                        <div class="shrink-0 w-8 h-8 rounded-full bg-brand-50 text-brand-600 flex items-center justify-center shrink-0 shadow-sm mt-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm mb-0.5 group-hover:text-brand-700 transition">Patients with Higher BMI</h4>
                            <p class="text-xs text-slate-600 leading-relaxed">Stable instrument platforms and strong, motorized controls bypass thick abdominal walls cleanly without losing surgical reach.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Stats Box (lg:col-span-5) -->
            <div class="lg:col-span-5">
                <div class="bg-brand-950 rounded-3xl p-8 text-white border border-brand-700/50 shadow-xl hover:scale-[1.02] transition duration-300 relative overflow-hidden">
                    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>
                    <div class="relative z-10">
                        <span class="text-accent text-xs font-bold uppercase tracking-wider bg-white/10 px-3.5 py-1.5 rounded-full mb-6 inline-block border border-white/10">Clinical Leadership</span>
                        <h3 class="text-2xl font-bold font-display mb-6">Dr. Kumar of Billroth Hospitals&rsquo; Robotic Experience</h3>

                        <div class="space-y-5 mb-8">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center font-bold text-lg border border-white/20 shrink-0">29+</div>
                                <div>
                                    <div class="font-bold text-sm">29+ years of Experience</div>
                                    <div class="text-brand-200 text-xs mt-0.5">Minimal access focus</div>
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center font-bold text-lg border border-white/20 shrink-0">10k+</div>
                                <div>
                                    <div class="font-bold text-sm">10k+ Hernia Surgeries completed</div>
                                    <div class="text-brand-200 text-xs mt-0.5">High volume complex reconstruction</div>
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center font-bold text-lg border border-white/20 shrink-0">20+k</div>
                                <div>
                                    <div class="font-bold text-sm">20+k Laparoscopic Procedures</div>
                                    <div class="text-brand-200 text-xs mt-0.5">Pioneering keyhole Surgery expert</div>
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center font-bold text-lg border border-white/20 shrink-0">100s</div>
                                <div>
                                    <div class="font-bold text-sm">Robotic Hernia Surgeries</div>
                                    <div class="text-brand-200 text-xs mt-0.5">Hundreds of Robotic Hernia surgeries</div>
                                </div>
                            </div>
                        </div>

                        <blockquote class="border-l-4 border-l-accent pl-4 italic text-slate-350 text-xs leading-relaxed mb-6">
                            "Robotic instrumentation acts as an advanced extension of the surgeon's hands, allowing us to perform reconstructive maneuvers that are difficult with straight laparoscopic tools."
                        </blockquote>

                        <div class="flex flex-wrap gap-2 text-[10px] uppercase font-bold tracking-wider">
                            <span class="bg-white/10 px-3 py-1.5 rounded-full border border-white/10">FALS Robotic Fellowship</span>
                            <span class="bg-white/10 px-3 py-1.5 rounded-full border border-white/10">MRCS England</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Robotic vs Other Methods -->
<section class="py-12 md:py-16 bg-white scroll-mt-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-50 px-3.5 py-1.5 rounded-full inline-block mb-4">Surgical Comparison</span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-3 mb-6">
                Robotic vs. Other Techniques
            </h2>
            <p class="text-slate-655 leading-relaxed text-base md:text-lg">How robotic-assisted repair compares with traditional open surgery and standard laparoscopic procedures.</p>
        </div>

        <div class="overflow-x-auto rounded-3xl border border-slate-100 shadow-lg">
            <table class="w-full bg-white border-collapse min-w-[850px]">
                <thead>
                    <tr class="bg-slate-900 text-white font-display text-sm md:text-base">
                        <th class="px-8 py-6 text-left font-bold">Feature</th>
                        <th class="px-8 py-6 text-center font-semibold text-slate-300">Open Surgery</th>
                        <th class="px-8 py-6 text-center font-semibold text-slate-300">Laparoscopic</th>
                        <th class="px-8 py-6 text-center font-bold bg-brand-900 text-white relative">
                            <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-accent text-slate-950 font-sans text-[10px] font-black uppercase tracking-wider px-4 py-1.5 rounded-full shadow-md z-20 animate-pulse">Gold Standard</div>
                            Robotic-Assisted
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-slate-700 text-xs md:text-sm">
                    <!-- Incision Size -->
                    <tr class="hover:bg-slate-50/60 transition duration-150">
                        <td class="px-8 py-6 font-bold text-slate-900">Incision Size</td>
                        <td class="px-8 py-6 text-center text-slate-600">Single incision (5–10 cm)</td>
                        <td class="px-8 py-6 text-center text-slate-600">3 keyholes (0.5–1 cm)</td>
                        <td class="px-8 py-6 text-center bg-brand-50/30 text-brand-950 font-bold border-l border-r border-brand-100/30">3 keyholes (0.5–1 cm)</td>
                    </tr>
                    <!-- 3D Visualization -->
                    <tr class="hover:bg-slate-50/60 transition duration-150">
                        <td class="px-8 py-6 font-bold text-slate-900">3D Visualization</td>
                        <td class="px-8 py-6 text-center text-slate-600">Direct view (No magnification)</td>
                        <td class="px-8 py-6 text-center text-slate-600">Flat screen monitor (2D)</td>
                        <td class="px-8 py-6 text-center bg-brand-50/30 text-brand-950 font-bold border-l border-r border-brand-100/30">True 3D HD (15x magnification)</td>
                    </tr>
                    <!-- Instruments -->
                    <tr class="hover:bg-slate-50/60 transition duration-150">
                        <td class="px-8 py-6 font-bold text-slate-900">Surgical Instruments</td>
                        <td class="px-8 py-6 text-center text-slate-550">
                            <div class="inline-flex items-center gap-2 justify-center text-slate-400">
                                <svg class="w-4 h-4 text-slate-350 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                                <span>Rigid Hand Access</span>
                            </div>
                        </td>
                        <td class="px-8 py-6 text-center text-slate-550">
                            <div class="inline-flex items-center gap-2 justify-center text-slate-400">
                                <svg class="w-4 h-4 text-slate-350 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                                <span>Rigid Straight Tools</span>
                            </div>
                        </td>
                        <td class="px-8 py-6 text-center bg-brand-50/30 text-brand-950 font-bold border-l border-r border-brand-100/30">
                            <div class="inline-flex items-center gap-2 justify-center text-brand-700">
                                <svg class="w-5 h-5 text-brand-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                <span class="font-bold">EndoWrist (720° rotation)</span>
                            </div>
                        </td>
                    </tr>
                    <!-- Hospital Stay -->
                    <tr class="hover:bg-slate-50/60 transition duration-150">
                        <td class="px-8 py-6 font-bold text-slate-900">Hospital Stay</td>
                        <td class="px-8 py-6 text-center text-slate-600">1 to 3 nights admission</td>
                        <td class="px-8 py-6 text-center text-slate-600">Same-day discharge (daycare)</td>
                        <td class="px-8 py-6 text-center bg-brand-50/30 text-brand-950 font-bold border-l border-r border-brand-100/30">Same-day discharge (daycare)</td>
                    </tr>
                    <!-- Recovery Timeline -->
                    <tr class="hover:bg-slate-50/60 transition duration-150">
                        <td class="px-8 py-6 font-bold text-slate-900">Recovery Timeline</td>
                        <td class="px-8 py-6 text-center text-slate-600">4 to 6 weeks restrictions</td>
                        <td class="px-8 py-6 text-center text-slate-600">1 to 2 weeks restrictions</td>
                        <td class="px-8 py-6 text-center bg-brand-50/30 text-brand-950 font-bold border-l border-r border-brand-100/30">1 to 2 weeks (lower early pain)</td>
                    </tr>
                    <!-- Recurrent Hernia -->
                    <tr class="hover:bg-slate-50/60 transition duration-150">
                        <td class="px-8 py-6 font-bold text-slate-900">Recurrent Hernias</td>
                        <td class="px-8 py-6 text-center text-slate-600">Good option</td>
                        <td class="px-8 py-6 text-center text-slate-600">Technically difficult</td>
                        <td class="px-8 py-6 text-center bg-brand-50/30 text-brand-950 font-bold border-l border-r border-brand-100/30 rounded-b-2xl">Excellent clinical option</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Recovery Timeline -->
<section class="py-12 md:py-16 bg-slate-50 border-t border-b border-slate-100 scroll-mt-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-12 items-center">
            <!-- Left Column: Chronological Timeline track (lg:col-span-7) -->
            <div class="lg:col-span-7">
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-50 px-3.5 py-1.5 rounded-full inline-block mb-4">Post-Op Journey</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                    Robotic Recovery Timeline
                </h2>
                <p class="text-slate-655 leading-relaxed mb-10 text-sm md:text-base">
                    With advanced robotic wristed tissue handling, incision margins remain unstretched. This leads to a structured, comfortable post-operative rehabilitation path.
                </p>

                <!-- Vertical timeline component -->
                <div class="relative border-l-2 border-slate-200 ml-5 pl-8 space-y-8">
                    <!-- Step 1 -->
                    <div class="relative group">
                        <div class="absolute -left-[41px] top-0 w-8 h-8 rounded-full bg-brand-50 border-2 border-brand-700 text-brand-700 font-bold text-xs flex items-center justify-center group-hover:bg-brand-700 group-hover:text-white transition duration-300 shadow-sm">
                            01
                        </div>
                        <div>
                            <span class="text-brand-700 text-[10px] font-bold uppercase tracking-wider block mb-1">Same Day</span>
                            <h3 class="font-bold text-slate-900 text-base mb-1.5 group-hover:text-brand-700 transition">Discharge Home</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Surgery takes 1–2 hours. After a short 4–6 hour recovery phase in our daycare ward, most patients are discharged home to rest.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="relative group">
                        <div class="absolute -left-[41px] top-0 w-8 h-8 rounded-full bg-brand-50 border-2 border-brand-600 text-brand-600 font-bold text-xs flex items-center justify-center group-hover:bg-brand-600 group-hover:text-white transition duration-300 shadow-sm">
                            02
                        </div>
                        <div>
                            <span class="text-brand-600 text-[10px] font-bold uppercase tracking-wider block mb-1">Days 1–2</span>
                            <h3 class="font-bold text-slate-900 text-base mb-1.5 group-hover:text-brand-600 transition">Light Mobility</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Local soreness at port sites is managed with light oral medication. Gentle walking on flat ground is encouraged to promote blood flow.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="relative group">
                        <div class="absolute -left-[41px] top-0 w-8 h-8 rounded-full bg-accent/10 border-2 border-accent text-accent font-bold text-xs flex items-center justify-center group-hover:bg-accent group-hover:text-white transition duration-300 shadow-sm">
                            03
                        </div>
                        <div>
                            <span class="text-accent text-[10px] font-bold uppercase tracking-wider block mb-1">Weeks 1–2</span>
                            <h3 class="font-bold text-slate-900 text-base mb-1.5 group-hover:text-accent transition font-display">Active Rehabilitation</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Desk jobs and driving can be safely resumed. Patients return to moderate walking, swimming, and cycling. Avoid lifting exceeding 10 kg.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="relative group">
                        <div class="absolute -left-[41px] top-0 w-8 h-8 rounded-full bg-slate-100 border-2 border-slate-500 text-slate-650 font-bold text-xs flex items-center justify-center group-hover:bg-slate-600 group-hover:text-white transition duration-300 shadow-sm">
                            04
                        </div>
                        <div>
                            <span class="text-slate-500 text-[10px] font-bold uppercase tracking-wider block mb-1">Weeks 4–6</span>
                            <h3 class="font-bold text-slate-900 text-base mb-1.5 group-hover:text-slate-655 transition font-display">Complete Recovery</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">The abdominal wall has successfully integrated with the mesh reinforcement. All physical restrictions are lifted, including active gym exercises.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Serene Image & Caution Note (lg:col-span-5) -->
            <div class="lg:col-span-5 space-y-6">
                <div class="relative rounded-3xl overflow-hidden bg-slate-100 aspect-[4/3] border border-slate-200 shadow-2xl group">
                    <img src="<?= $base_path ?>assets/images/robotic-reassurance.png"
                         alt="Serene wellness recovery rehabilitation"
                         class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/40 via-transparent to-transparent"></div>
                    <div class="absolute bottom-5 left-5 right-5 bg-white/95 backdrop-blur-sm rounded-2xl p-4 shadow-xl border border-white/20 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-brand-50 border border-brand-100 flex items-center justify-center text-brand-700 shrink-0 shadow-inner">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4"/></svg>
                        </div>
                        <div>
                            <p class="font-bold text-slate-900 text-xs leading-none font-display">Active Recovery</p>
                            <p class="text-[10px] text-brand-600 font-semibold mt-1">Guided return to active lifestyle</p>
                        </div>
                    </div>
                </div>

                <!-- Caution note banner -->
                <div class="bg-white border-l-4 border-l-accent rounded-2xl p-6 shadow-sm flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-accent/10 border border-accent/20 flex items-center justify-center text-accent shrink-0 shadow-inner">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-slate-900 text-sm mb-1 font-display">Clinical Care Note</h3>
                        <p class="text-slate-600 text-xs leading-relaxed">
                            Recovery is highly individualized based on age, core physical strength, and hernia defect size. Always consult Dr. Kumar of Billroth Hospitals&rsquo; clinical staff prior to resuming heavy core load workouts.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Other Advanced Techniques -->
<section class="py-12 md:py-16 bg-white scroll-mt-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-12 items-start">
            <!-- Left Column (lg:col-span-5) -->
            <div class="lg:col-span-5 space-y-6">
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-50 px-3.5 py-1.5 rounded-full inline-block mb-2">Technological Options</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 leading-tight">
                    Complete Surgical<br>Recovery Arsenal
                </h2>
                <p class="text-slate-655 leading-relaxed text-sm md:text-base">
                    Dr. Kumar of Billroth Hospitals utilizes a range of advanced materials science and clinical pathways to tailor the surgical procedure specifically to your body's structural needs.
                </p>
                <div class="bg-slate-50 border border-slate-200 rounded-3xl p-6 shadow-sm">
                    <h3 class="font-bold text-slate-900 text-sm mb-1.5 font-display">Tailored Biomaterial Choices</h3>
                    <p class="text-slate-600 text-xs leading-relaxed">Mesh selection is based on tissue quality, infection risk, defect location, and physical demands, ensuring custom reinforcement for each patient.</p>
                </div>
            </div>

            <!-- Right Column: Asymmetrical borderless blocks (lg:col-span-7) -->
            <div class="lg:col-span-7">
                <div class="grid sm:grid-cols-2 gap-8">
                    <!-- 3D Mesh -->
                    <div class="group flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 rounded-2xl bg-brand-50 border border-brand-100 text-brand-700 flex items-center justify-center mb-4 group-hover:bg-brand-700 group-hover:text-white transition duration-300 shadow-inner">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 9.172V5L8 4z"/></svg>
                            </div>
                            <h4 class="font-bold text-slate-900 text-base mb-1.5 font-display group-hover:text-brand-700 transition">3D Mesh Technology</h4>
                            <p class="text-slate-600 text-xs leading-relaxed">Contoured, anatomically shaped mesh that mimics the natural groin layout for tension-free fixation.</p>
                        </div>
                        <a href="advanced-techniques/3d-mesh" class="text-brand-700 text-xs font-bold uppercase tracking-wider mt-3 inline-flex items-center gap-1 hover:underline">Learn Details &rarr;</a>
                    </div>

                    <!-- Self-Gripping -->
                    <div class="group flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 rounded-2xl bg-accent/10 border border-accent/20 text-accent flex items-center justify-center mb-4 group-hover:bg-accent group-hover:text-white transition duration-300 shadow-inner">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <h4 class="font-bold text-slate-900 text-base mb-1.5 font-display group-hover:text-accent transition">Self-Gripping Mesh</h4>
                            <p class="text-slate-600 text-xs leading-relaxed">Sutureless mesh using micro-grippers to distribute holding pressure evenly, significantly reducing post-op groin discomfort.</p>
                        </div>
                        <a href="advanced-techniques/self-gripping-mesh" class="text-accent text-xs font-bold uppercase tracking-wider mt-3 inline-flex items-center gap-1 hover:underline">Learn Details &rarr;</a>
                    </div>

                    <!-- Biological -->
                    <div class="group flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 rounded-2xl bg-brand-50 border border-brand-100 text-brand-600 flex items-center justify-center mb-4 group-hover:bg-brand-655 group-hover:text-white transition duration-300 shadow-inner">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                            </div>
                            <h4 class="font-bold text-slate-900 text-base mb-1.5 font-display group-hover:text-brand-600 transition font-display">Biological Mesh</h4>
                            <p class="text-slate-600 text-xs leading-relaxed">Natural bio-absorbable structures that down-regulate inflammation and support local tissue remodeling.</p>
                        </div>
                        <a href="advanced-techniques/biological-mesh" class="text-brand-600 text-xs font-bold uppercase tracking-wider mt-3 inline-flex items-center gap-1 hover:underline">Learn Details &rarr;</a>
                    </div>

                    <!-- ERAS -->
                    <div class="group flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 rounded-2xl bg-slate-50 border border-slate-150 text-slate-600 flex items-center justify-center mb-4 group-hover:bg-slate-600 group-hover:text-white transition duration-300 shadow-inner">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            </div>
                            <h4 class="font-bold text-slate-900 text-base mb-1.5 font-display group-hover:text-slate-600 transition font-display">ERAS Protocol</h4>
                            <p class="text-slate-600 text-xs leading-relaxed">An evidence-based recovery pathway designed to optimize hydration, limit opioids, and encourage early post-op walking.</p>
                        </div>
                        <a href="advanced-techniques/eras-protocol" class="text-slate-500 text-xs font-bold uppercase tracking-wider mt-3 inline-flex items-center gap-1 hover:underline">Learn Details &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FAQ Section -->
<section class="py-12 md:py-16 bg-white scroll-mt-20">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-10">
            <span class="text-xs font-bold uppercase tracking-wider text-brand-700 bg-brand-50 px-3 py-1.5 rounded-full mb-4 inline-block">🤷‍♂️ FAQ</span>
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 leading-tight">
                Frequently Asked Questions
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-6 items-start">
            <!-- Left Column -->
            <div class="space-y-4">
                <!-- Item 1 (Active by default) -->
                <div class="faq-item active bg-brand-700 text-white rounded-2xl overflow-hidden transition-all duration-300 border border-transparent shadow-md">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-white text-base md:text-lg leading-snug">Is the robot actually performing the surgery on me?</span>
                        <span class="faq-symbol text-2xl font-light bg-brand-800 text-white w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition">&minus;</span>
                    </button>
                    <div class="faq-content px-6 pb-6">
                        <div class="h-px bg-white/20 mb-4"></div>
                        <p class="text-brand-50 text-sm md:text-base leading-relaxed">No. The robotic system is computer-assisted but controlled entirely by Dr. Kumar of Billroth Hospitals. Every incision, dissection and suture is directed by your surgeon in real time.</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug">How long does recovery take compared to laparoscopy?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <div class="h-px bg-slate-200 mb-4"></div>
                        <p class="text-slate-655 text-sm md:text-base leading-relaxed">Incision sizes are the same, so recovery is similar at one to two weeks. The wristed precision of the robot reduces internal bruising, so many report less soreness in the first 48 hours.</p>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-4">
                <!-- Item 2 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug">Will I experience less post-operative pain?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <div class="h-px bg-slate-200 mb-4"></div>
                        <p class="text-slate-655 text-sm md:text-base leading-relaxed">Yes. Robotic instruments pivot cleanly at the port, so less torque reaches the abdominal wall muscles. That reduces incision soreness and the need for strong pain medication.</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug">Is robotic hernia repair covered by standard insurance?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <div class="h-px bg-slate-200 mb-4"></div>
                        <p class="text-slate-655 text-sm md:text-base leading-relaxed">Yes. Hernia repairs are classified as medically necessary procedures. Most insurance providers cover robotic-assisted repairs in the same manner as open or laparoscopic procedures. Our clinic team will assist in verifying pre-authorization documents.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- CTA Section -->
<section class="py-16 md:py-20 bg-brand-950 text-white text-center relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <span class="text-accent text-xs font-bold uppercase tracking-wider bg-white/10 px-4 py-1.5 rounded-full mb-4 inline-block border border-white/10">Consultation Enquiry</span>
        <h2 class="font-display text-3xl md:text-5xl font-bold mb-6">
            Ready to Explore Robotic Surgery?
        </h2>
        <p class="text-lg text-slate-300 leading-relaxed mb-8 max-w-2xl mx-auto">
            Schedule a clinical consultation with Dr. Kumar of Billroth Hospitals to assess your hernia and determine if a robotic-assisted repair is the ideal pathway for your recovery.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-8 py-4 rounded-full transition shadow-lg shadow-accent/25 hover:scale-105">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                Call Clinic Hotline
            </a>
            <a href="book-appointment" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-8 py-4 rounded-full border border-white/30 transition hover:scale-105">
                Book Online Appointment
            </a>
        </div>
    </div>
</section>

<!-- Floating Call Button -->
<a href="tel:<?= $site['phone_link'] ?>" class="fixed bottom-6 right-6 z-50 group" aria-label="Call Dr. Kumar of Billroth Hospitals">
    <div class="relative flex items-center">
        <div class="absolute right-full mr-3 bg-white rounded-xl shadow-2xl p-4 whitespace-nowrap opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-x-2 group-hover:translate-x-0 border border-slate-100">
            <p class="font-bold text-slate-900"><?= $site['phone'] ?></p>
            <p class="text-sm text-slate-500">Tap to call</p>
        </div>
        <div class="w-14 h-14 bg-gradient-to-r from-brand-600 to-brand-700 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110">
            <svg class="w-6 h-6 text-white animate-pulse" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
        </div>
    </div>
</a>

<?php require __DIR__ . '/includes/footer.php'; ?>