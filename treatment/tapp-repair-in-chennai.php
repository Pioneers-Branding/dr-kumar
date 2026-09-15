<?php
$page_title = 'TAPP Hernia Repair in Chennai | Dr. Kumar of Billroth Hospitals';
$page_description = 'TAPP hernia repair in Chennai by Dr. Kumar of Billroth Hospitals. How this laparoscopic approach works from inside the abdomen, and when it is chosen instead of a TEP repair.';
$page_url = 'https://herniacare360.com/treatment/tapp-repair-in-chennai';
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
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 text-sm text-slate-300 mb-6 bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full w-max border border-white/10">
            <a href="<?= $base_path ?>" class="hover:text-white transition">Home</a>
            <span class="text-slate-500">/</span>
            <span class="text-slate-400">Treatments</span>
            <span class="text-slate-500">/</span>
            <span class="text-accent font-medium">TAPP Repair</span>
        </nav>

        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 border border-white/10 shadow-sm">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Laparoscopic Technique
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] mb-6">
                TAPP Hernia<br>
                <span class="text-accent">Repair in Chennai</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Transabdominal Preperitoneal (TAPP) repair is a highly versatile laparoscopic hernia surgery in Chennai. Consult Dr. Kumar of Billroth Hospitals, the leading hernia specialist in Chennai, for expert TAPP repair.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#what-is-tapp" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition duration-300 shadow-lg shadow-accent/20 hover:scale-105">
                    How TAPP Works
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

<!-- What is TAPP Section -->
<section id="what-is-tapp" class="py-12 md:py-16 bg-white scroll-mt-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column: Description & Comparison Table -->
            <div>
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-50 px-3.5 py-1.5 rounded-full inline-block mb-4">Understanding TAPP</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                    What is TAPP Hernia Repair?
                </h2>
                <p class="text-slate-600 leading-relaxed mb-5">
                    TAPP stands for <strong>Transabdominal Preperitoneal</strong> hernia repair. It is a highly reliable laparoscopic technique where the surgeon accesses the preperitoneal plane (behind the abdominal lining) through the abdominal cavity. 
                </p>
                <p class="text-slate-600 leading-relaxed mb-6">
                    Entering the abdominal cavity allows the surgeon to visualize the entire pelvis area. This is highly useful for inspecting both groin channels, repairing bilateral (double-sided) hernias efficiently, and detecting other underlying wall weaknesses that might not be visible from the outside.
                </p>

                <div class="bg-brand-50 rounded-3xl p-6 border border-brand-100 shadow-sm">
                    <h3 class="font-bold text-slate-900 mb-4">TAPP vs TEP: Key Comparison</h3>
                    <div class="overflow-x-auto rounded-2xl border border-slate-200/80 bg-white">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="bg-brand-900 text-white">
                                    <th class="px-4 py-3 text-left font-semibold">Aspect</th>
                                    <th class="px-4 py-3 text-left font-semibold">TAPP Repair</th>
                                    <th class="px-4 py-3 text-left font-semibold">TEP Repair</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-600 divide-y divide-slate-100">
                                <tr class="hover:bg-brand-50/20">
                                    <td class="px-4 py-3 font-semibold text-slate-900">Peritoneal Entry</td>
                                    <td class="px-4 py-3 font-medium text-brand-700">Yes - briefly</td>
                                    <td class="px-4 py-3">No (stays outside)</td>
                                </tr>
                                <tr class="hover:bg-brand-50/20">
                                    <td class="px-4 py-3 font-semibold text-slate-900">Pelvic Visibility</td>
                                    <td class="px-4 py-3 font-medium text-brand-700">Full 360 view</td>
                                    <td class="px-4 py-3">Localized preperitoneal</td>
                                </tr>
                                <tr class="hover:bg-brand-50/20">
                                    <td class="px-4 py-3 font-semibold text-slate-900">Complexity fit</td>
                                    <td class="px-4 py-3 font-medium text-brand-700">Excellent for large hernias</td>
                                    <td class="px-4 py-3">Best for primary/simpler</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Right Column: Unsplash Image -->
            <div>
                <div class="relative rounded-3xl overflow-hidden bg-slate-100 aspect-[4/3] border border-slate-200 shadow-2xl mb-0 group">
                    <img src="<?= $base_path ?>assets/images/tapp-access.png"
                         alt="TAPP Hernia Repair - Advanced Abdominal View"
                         class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/50 via-slate-950/10 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6 bg-white/95 backdrop-blur rounded-2xl p-5 shadow-2xl border border-white/20 flex items-center gap-4 hover:-translate-y-1 transition duration-300">
                        <div class="w-12 h-12 rounded-xl bg-brand-100 text-brand-700 flex items-center justify-center shrink-0 shadow-inner">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        </div>
                        <div>
                            <p class="font-bold text-slate-900 text-base leading-tight">Complete Visibility</p>
                            <p class="text-xs text-brand-600 font-semibold mt-0.5">Allows 360-degree inspection of groin defects</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How TAPP Works Section -->
<section id="how-it-works" class="py-12 md:py-16 bg-slate-50 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-100 px-3.5 py-1.5 rounded-full inline-block">The Procedure</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-4 mb-4">
                TAPP Procedure Step-by-Step
            </h2>
            <p class="text-slate-600 leading-relaxed text-sm md:text-base">
                An overview of the clinical workflow can help demystify the TAPP surgery.
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="relative">
                <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-brand-200"></div>

                <div class="space-y-8">
                    <!-- Step 1 -->
                    <div class="relative flex gap-6 group">
                        <div class="w-16 h-16 rounded-2xl bg-brand-50 border border-brand-100/60 text-brand-700 group-hover:bg-brand-700 group-hover:text-white flex items-center justify-center shrink-0 z-10 shadow-md group-hover:shadow-brand-700/20 group-hover:scale-105 transition duration-300">
                            <span class="font-extrabold text-xl">1</span>
                        </div>
                        <div class="flex-1 bg-white rounded-3xl shadow-sm hover:shadow-xl p-6 border border-slate-200/80 transition duration-300">
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-brand-700 transition duration-300 mb-2">Anesthesia & Entry</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                General anesthesia is administered. The surgeon enters the abdominal cavity through a 1 cm incision at the belly button, inflating it with carbon dioxide for safe visualization.
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="relative flex gap-6 group">
                        <div class="w-16 h-16 rounded-2xl bg-brand-50 border border-brand-100/60 text-brand-700 group-hover:bg-brand-700 group-hover:text-white flex items-center justify-center shrink-0 z-10 shadow-md group-hover:shadow-brand-700/20 group-hover:scale-105 transition duration-300">
                            <span class="font-extrabold text-xl">2</span>
                        </div>
                        <div class="flex-1 bg-white rounded-3xl shadow-sm hover:shadow-xl p-6 border border-slate-200/80 transition duration-300">
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-brand-700 transition duration-300 mb-2">Peritoneal Incision</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                Under micro-camera guidance, the surgeon makes a precise flap cut in the peritoneum above the hernia bulge, opening access directly to the preperitoneal repair space.
                            </p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="relative flex gap-6 group">
                        <div class="w-16 h-16 rounded-2xl bg-brand-50 border border-brand-100/60 text-brand-700 group-hover:bg-brand-700 group-hover:text-white flex items-center justify-center shrink-0 z-10 shadow-md group-hover:shadow-brand-700/20 group-hover:scale-105 transition duration-300">
                            <span class="font-extrabold text-xl">3</span>
                        </div>
                        <div class="flex-1 bg-white rounded-3xl shadow-sm hover:shadow-xl p-6 border border-slate-200/80 transition duration-300">
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-brand-700 transition duration-300 mb-2">Hernia Reduction & Mesh Deployment</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                The protruding hernia contents are gently retracted back into the abdominal cavity. A synthetic anatomical mesh is laid flat, covering the defect and its surrounding weak areas.
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="relative flex gap-6 group">
                        <div class="w-16 h-16 rounded-2xl bg-brand-50 border border-brand-100/60 text-brand-700 group-hover:bg-brand-700 group-hover:text-white flex items-center justify-center shrink-0 z-10 shadow-md group-hover:shadow-brand-700/20 group-hover:scale-105 transition duration-300">
                            <span class="font-extrabold text-xl">4</span>
                        </div>
                        <div class="flex-1 bg-white rounded-3xl shadow-sm hover:shadow-xl p-6 border border-slate-200/80 transition duration-300">
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-brand-700 transition duration-300 mb-2">Peritoneal Closure</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                The peritoneal flap is carefully sutured back shut over the mesh. This isolates the mesh completely from internal organs, eliminating bowel friction or stickiness.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits of TAPP Section -->
<section class="py-12 md:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Left Column: Branding and Key Media -->
            <div class="lg:col-span-5">
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-50 px-3.5 py-1.5 rounded-full inline-block mb-4">Advantages</span>
                <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 leading-[1.1] mb-6">
                    Benefits of<br>
                    <span class="text-brand-700">TAPP Repair</span>
                </h2>
                <p class="text-slate-655 leading-relaxed text-base md:text-lg mb-8">
                    TAPP repair provides outstanding surgical reliability and diagnostic leverage. Here is why it remains a premium standard for groin and bilateral hernias.
                </p>

                <div class="relative rounded-[2rem] overflow-hidden bg-slate-100 aspect-[16/10] border border-slate-200 shadow-xl group">
                    <img src="<?= $base_path ?>assets/images/tapp-precision.png"
                         alt="TAPP Hernia Surgery Precision"
                         class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/45 via-slate-950/10 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4 bg-white/95 backdrop-blur-sm rounded-2xl p-4 shadow-xl border border-white/20 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-brand-50 border border-brand-100 flex items-center justify-center text-brand-700 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div>
                            <p class="font-bold text-slate-900 text-sm leading-tight">Gold Standard Care</p>
                            <p class="text-xs text-brand-600 font-semibold mt-0.5">Top Choice for Groin &amp; Bilateral Hernias</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Premium List (No Cards, Divide layout) -->
            <div class="lg:col-span-7 divide-y divide-slate-200">
                
                <!-- Complete Pelvis View -->
                <div class="flex gap-4 items-start group py-5 first:pt-0 last:pb-0">
                    <div class="shrink-0 w-12 h-12 rounded-full bg-brand-50 group-hover:bg-brand-700 border border-brand-100/60 text-brand-700 group-hover:text-white flex items-center justify-center transition duration-300 shadow-inner group-hover:shadow-brand-700/20 group-hover:scale-105">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    </div>
                    <div class="flex-1 pt-1">
                        <h3 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-brand-700 transition">Complete Pelvis View</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Provides direct visual inspection of all abdominal wall structures, allowing the surgeon to find and secure concurrent groin wall weaknesses on both sides.</p>
                    </div>
                </div>

                <!-- High Recurrence Control -->
                <div class="flex gap-4 items-start group py-5 first:pt-0 last:pb-0">
                    <div class="shrink-0 w-12 h-12 rounded-full bg-brand-50 group-hover:bg-brand-700 border border-brand-100/60 text-brand-700 group-hover:text-white flex items-center justify-center transition duration-300 shadow-inner group-hover:shadow-brand-700/20 group-hover:scale-105">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <div class="flex-1 pt-1">
                        <h3 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-brand-700 transition">High Recurrence Control</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Suturing the mesh securely inside the preperitoneal pocket guarantees it remains stabilized, reducing long-term recurrence rates to below 1.5%.</p>
                    </div>
                </div>

                <!-- Standardized and Safe -->
                <div class="flex gap-4 items-start group py-5 first:pt-0 last:pb-0">
                    <div class="shrink-0 w-12 h-12 rounded-full bg-brand-50 group-hover:bg-brand-700 border border-brand-100/60 text-brand-700 group-hover:text-white flex items-center justify-center transition duration-300 shadow-inner group-hover:shadow-brand-700/20 group-hover:scale-105">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div class="flex-1 pt-1">
                        <h3 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-brand-700 transition">Standardized and Safe</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">TAPP's clear anatomical landmarks make it highly reliable, ensuring extremely high procedural safety and safety margins.</p>
                    </div>
                </div>

                <!-- Simultaneous Bilateral Repair -->
                <div class="flex gap-4 items-start group py-5 first:pt-0 last:pb-0">
                    <div class="shrink-0 w-12 h-12 rounded-full bg-brand-50 group-hover:bg-brand-700 border border-brand-100/60 text-brand-700 group-hover:text-white flex items-center justify-center transition duration-300 shadow-inner group-hover:shadow-brand-700/20 group-hover:scale-105">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                    </div>
                    <div class="flex-1 pt-1">
                        <h3 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-brand-700 transition">Simultaneous Bilateral Repair</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Both groin channels can be addressed using the same laparoscopy incisions, avoiding separate open groin incisions.</p>
                    </div>
                </div>

                <!-- Quick Daycare Return -->
                <div class="flex gap-4 items-start group py-5 first:pt-0 last:pb-0">
                    <div class="shrink-0 w-12 h-12 rounded-full bg-brand-50 group-hover:bg-brand-700 border border-brand-100/60 text-brand-700 group-hover:text-white flex items-center justify-center transition duration-300 shadow-inner group-hover:shadow-brand-700/20 group-hover:scale-105">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <div class="flex-1 pt-1">
                        <h3 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-brand-700 transition">Quick Daycare Return</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Many patients undergo TAPP as outpatient day surgery, returning home with minimal down-time and starting desk duties in 5-7 days.</p>
                    </div>
                </div>

                <!-- Micro Incisions -->
                <div class="flex gap-4 items-start group py-5 first:pt-0 last:pb-0">
                    <div class="shrink-0 w-12 h-12 rounded-full bg-brand-50 group-hover:bg-brand-700 border border-brand-100/60 text-brand-700 group-hover:text-white flex items-center justify-center transition duration-300 shadow-inner group-hover:shadow-brand-700/20 group-hover:scale-105">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                    </div>
                    <div class="flex-1 pt-1">
                        <h3 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-brand-700 transition">Micro Incisions</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Small, minimally invasive ports reduce surgical skin cuts, delivering superior post-op cosmetic healing and zero large scars.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Recovery Section -->
<section id="recovery" class="py-12 md:py-16 bg-slate-50 border-y border-slate-100">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-50 px-3.5 py-1.5 rounded-full inline-block">Healing Journey</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-4 mb-4">
                TAPP Recovery Timeline
            </h2>
            <p class="text-slate-600 leading-relaxed text-sm md:text-base">
                TAPP recovery is structured and highly reliable. Here is what you should expect during your healing journey.
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-6 mb-12">
            <div class="bg-white rounded-3xl p-6 border-t-4 border-brand-700 shadow-sm hover:scale-105 hover:shadow-md transition duration-300">
                <span class="text-xs font-bold text-brand-700 uppercase tracking-wider">Days 1-2</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-2">Hospital Stay</h3>
                <p class="text-sm text-slate-600">Most patients leave within a few hours or the next morning. Gentle walking is highly encouraged.</p>
            </div>

            <div class="bg-white rounded-3xl p-6 border-t-4 border-brand-600 shadow-sm hover:scale-105 hover:shadow-md transition duration-300">
                <span class="text-xs font-bold text-brand-600 uppercase tracking-wider">Days 3-7</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-2">Initial Healing</h3>
                <p class="text-sm text-slate-600">Rest comfortably at home. Avoid lifting items above 5 kg. Mild soreness at port sites disappears.</p>
            </div>

            <div class="bg-white rounded-3xl p-6 border-t-4 border-brand-500 shadow-sm hover:scale-105 hover:shadow-md transition duration-300">
                <span class="text-xs font-bold text-brand-500 uppercase tracking-wider">Weeks 2-3</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-2">Activity Increase</h3>
                <p class="text-sm text-slate-600">Desk-based work can be safely resumed. Return to driving and start active, brisk walks.</p>
            </div>

            <div class="bg-white rounded-3xl p-6 border-t-4 border-accent shadow-sm hover:scale-105 hover:shadow-md transition duration-300">
                <span class="text-xs font-bold text-accent uppercase tracking-wider">Weeks 4-6</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-2">Full Recovery</h3>
                <p class="text-sm text-slate-600">Mesh integrates with abdominal muscles. Resume heavy lifting, gym workouts, and sports.</p>
            </div>
        </div>

        <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm">
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="flex-1">
                    <h3 class="text-xl font-bold text-slate-900 mb-4">When to Contact Dr. Kumar of Billroth Hospitals</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="flex items-center gap-3">
                            <span class="text-red-500 font-bold">⚠</span>
                            <span class="text-sm text-slate-650 font-medium">Fever higher than 101°F</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-red-500 font-bold">⚠</span>
                            <span class="text-sm text-slate-650 font-medium">Increasing redness, swelling, or fluid at incisions</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-red-500 font-bold">⚠</span>
                            <span class="text-sm text-slate-650 font-medium">Severe pain not controlled by prescription medications</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-red-500 font-bold">⚠</span>
                            <span class="text-sm text-slate-650 font-medium">Difficulty urinating or passing bowel movements</span>
                        </div>
                    </div>
                </div>
                <a href="tel:<?= $site['phone_link'] ?>" class="shrink-0 inline-flex items-center gap-2 bg-brand-700 hover:bg-brand-800 text-white font-bold px-7 py-3.5 rounded-full transition shadow-lg hover:scale-105">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                    Contact Specialist
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-12 md:py-16 bg-slate-50 border-t border-slate-100 scroll-mt-20">
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
                <div class="faq-item active bg-brand-700 text-white rounded-2xl overflow-hidden transition-all duration-300 border border-transparent shadow-md">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-white text-base md:text-lg leading-snug">What does TAPP stand for and how is it done?</span>
                        <span class="faq-symbol text-2xl font-light bg-brand-800 text-white w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm">&minus;</span>
                    </button>
                    <div class="faq-content px-6 pb-6">
                        <div class="h-px bg-white/20 mb-4"></div>
                        <p class="text-brand-50 text-sm md:text-base leading-relaxed">TAPP is transabdominal preperitoneal repair. Under general anesthesia the surgeon reaches the defect through small ports in the abdominal cavity, opens the peritoneum, places mesh, then closes the lining.</p>
                    </div>
                </div>

                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug">When does Dr. Kumar of Billroth Hospitals prefer TAPP over TEP repair?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <div class="h-px bg-slate-200 mb-4"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed">TAPP suits large, complicated, sliding or recurrent groin hernias where previous surgery makes the extraperitoneal space hard to create. It also allows full pelvic inspection of both sides.</p>
                    </div>
                </div>

                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug">How long does the TAPP procedure take?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <div class="h-px bg-slate-200 mb-4"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed">A standard unilateral (one-sided) TAPP repair takes 45 to 75 minutes depending on anatomical complexity and hernia size. A bilateral (two-sided) repair takes 75 to 100 minutes. It is generally a daycare procedure with same-day discharge.</p>
                    </div>
                </div>

                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug">Is a TAPP repair suitable for bilateral inguinal hernias?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <div class="h-px bg-slate-200 mb-4"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed">Yes, TAPP suits bilateral groin hernias particularly well. Working from inside the abdomen, the surgeon repairs both sides through the same three small incisions, avoiding a second operation.</p>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-4">
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug">What is the recovery period after a TAPP repair?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <div class="h-px bg-slate-200 mb-4"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed">Most patients return to light, desk-based work within 5 to 7 days. Strenuous exercises, sports, and heavy lifting above 5 kg should be avoided for 4 to 6 weeks to ensure that the mesh incorporates correctly with the abdominal tissues.</p>
                    </div>
                </div>

                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug">Does TAPP hernia repair require a mesh?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <div class="h-px bg-slate-200 mb-4"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed">Yes, good-quality synthetic mesh is standard for TAPP. It provides the reinforcing scaffold that prevents return. Suture-only repair is not usually done laparoscopically because recurrence is much higher.</p>
                    </div>
                </div>

                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug">What are the potential complications of TAPP surgery?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <div class="h-px bg-slate-200 mb-4"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed">TAPP is extremely safe. Rare risks (under 1%) include temporary urinary retention, localized hematoma or seroma (fluid pocket), port site infection, or mild temporary groin numbness. Serious complications like bowel or vascular injury are exceptionally rare.</p>
                    </div>
                </div>

                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug">What are the main indications to choose TAPP over open surgery?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <div class="h-px bg-slate-200 mb-4"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed">TAPP suits patients wanting faster recovery, less pain and better cosmetic results. It is especially useful for recurrent hernias after failed open surgery, bilateral hernias, and when the cavity needs inspection.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 md:py-16 bg-brand-950 text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-display text-3xl md:text-4xl font-bold mb-6">
            Ready to Discuss TAPP Repair?
        </h2>
        <p class="text-lg text-slate-200 leading-relaxed mb-8 max-w-2xl mx-auto">
            Dr. Kumar of Billroth Hospitals will evaluate your condition and recommend the most appropriate surgical technique for your specific needs.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-8 py-4 rounded-full transition hover:scale-105 shadow-lg shadow-accent/20">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                Book Consultation
            </a>
            <a href="<?= $base_path ?>treatment/etep-technique-expert-in-chennai" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-bold px-8 py-4 rounded-full border border-white/30 transition hover:scale-105">
                Learn About eTEP
            </a>
        </div>
    </div>
</section>

<!-- Floating Call Button -->
<a href="tel:<?= $site['phone_link'] ?>" class="fixed bottom-6 right-6 z-50 group" aria-label="Call Dr. Kumar of Billroth Hospitals">
    <div class="relative flex items-center">
        <div class="absolute right-full mr-3 bg-white rounded-xl shadow-2xl p-4 whitespace-nowrap opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-x-2 group-hover:translate-x-0">
            <p class="font-bold text-slate-900"><?= $site['phone'] ?></p>
            <p class="text-sm text-slate-500">Tap to call</p>
        </div>
        <div class="w-14 h-14 bg-gradient-to-r from-brand-600 to-brand-700 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110">
            <svg class="w-6 h-6 text-white animate-pulse" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
        </div>
    </div>
</a>

<?php require __DIR__ . '/../includes/footer.php'; ?>
