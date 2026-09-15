<?php
$page_title = 'Biological Mesh for Complex Hernia Repair | Dr. Kumar of Billroth Hospitals';
$page_description = 'When biological mesh is used in contaminated, infected or high-risk hernia repair, how it integrates with tissue, and which patients genuinely benefit.';
require __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white overflow-hidden py-20 md:py-28">

    <div class="relative max-w-7xl mx-auto px-4 z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left: Content -->
            <div>
                <!-- Breadcrumbs -->
                <nav class="flex items-center gap-2 text-sm text-slate-300 mb-6 bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full w-max border border-white/10">
                    <a href="<?= $base_path ?>" class="hover:text-white transition">Home</a>
                    <span class="text-slate-500">/</span>
                    <span class="text-slate-400">Treatments</span>
                    <span class="text-slate-500">/</span>
                    <span class="text-accent font-medium">Biological Mesh</span>
                </nav>

                <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 border border-white/10 shadow-sm">
                    <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                    Biological Implant Technology
                </span>
                <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] mb-6">
                    Biological<br>
                    <span class="text-accent">Mesh</span>
                </h1>
                <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                    A breakthrough approach for complex hernia repairs, especially in contaminated fields. Biological mesh provides a natural scaffold for your body's own tissue regeneration.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#details" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition duration-300 shadow-lg shadow-accent/20 hover:scale-105">
                        Learn About Options
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7H3"/></svg>
                    </a>
                    <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-white/15 hover:bg-white/25 backdrop-blur text-white font-bold px-7 py-3.5 rounded-full border border-white/30 transition duration-300 hover:scale-105">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                        Consultation Booking
                    </a>
                </div>
            </div>

            <!-- Right: Hero Visual -->
            <div class="bg-gradient-to-br from-brand-700/30 to-brand-900/50 rounded-3xl p-4 border border-brand-400/20 overflow-hidden">
                <img
                    src="<?= $base_path ?>assets/images/biological-hero.png"
                    alt="Biological Mesh for Tissue Regeneration"
                    class="w-full h-[280px] object-cover rounded-2xl"
                />
            </div>
        </div>
    </div>
</section>

<!-- Visual Section -->
<section id="details" class="py-12 md:py-16 bg-white scroll-mt-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="relative">
            <div class="bg-gradient-to-br from-brand-900 to-slate-900 rounded-3xl p-8 md:p-12 text-white relative overflow-hidden shadow-2xl border border-white/5">
                <div class="absolute top-0 left-1/4 w-96 h-96 bg-brand-500 rounded-full filter blur-3xl opacity-10"></div>
                <div class="absolute bottom-0 right-1/4 w-72 h-72 bg-brand-500 rounded-full filter blur-3xl opacity-10"></div>

                <div class="relative z-10 grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="inline-flex items-center gap-2 bg-emerald-500/20 border border-emerald-400/30 rounded-full px-4 py-2 mb-6">
                            <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                            <span class="text-sm font-medium text-emerald-300">Biological Scaffold</span>
                        </div>
                        <h2 class="font-display text-3xl md:text-4xl font-bold mb-4 leading-tight">
                            Natural Tissue<br>
                            <span class="text-emerald-400">Remodeling</span>
                        </h2>
                        <p class="text-slate-300 leading-relaxed mb-6">
                            A breakthrough approach for complex hernia repairs, especially in contaminated fields. Biological mesh provides a natural scaffold for your body's own tissue regeneration.
                        </p>
                    </div>

                    <div>
                        <img
                            src="<?= $base_path ?>assets/images/biological-scaffold.png"
                            alt="Biological Scaffold for Tissue Regeneration"
                            class="w-full h-[280px] object-cover rounded-2xl"
                        />
                        <div class="mt-6 grid grid-cols-3 gap-3">
                            <div class="bg-white/10 backdrop-blur rounded-2xl p-3 text-center border border-white/20">
                                <svg class="w-6 h-6 text-emerald-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                                <div class="text-xs text-slate-300">Natural</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur rounded-2xl p-3 text-center border border-white/20">
                                <svg class="w-6 h-6 text-emerald-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                <div class="text-xs text-slate-300">Infection-Resistant</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur rounded-2xl p-3 text-center border border-white/20">
                                <svg class="w-6 h-6 text-emerald-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                <div class="text-xs text-slate-300">Remodels</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What is Biological Mesh -->
<section class="py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-6">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Mesh Technology
            </span>
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-4">What is Biological Mesh?</h2>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">
                Biological mesh is a revolutionary implant derived from human or animal tissue that serves as a scaffold for your body's own tissue regeneration. Unlike synthetic mesh, it is eventually replaced by your own tissue, providing a more natural repair.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-2xl p-8 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-emerald-100 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-4">Human Dermis (Allograft)</h3>
                <p class="text-slate-600 mb-4">
                    Derived from donated human skin tissue, human dermis mesh undergoes rigorous processing to remove cells while preserving the natural collagen structure and extracellular matrix.
                </p>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Processed and sterilized human tissue
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        No risk of animal-related concerns
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Excellent integration properties
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-emerald-100 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-4">Porcine (Pig) Dermis</h3>
                <p class="text-slate-600 mb-4">
                    Porcine dermis is sourced from pig skin and processed to remove cells while maintaining the natural collagen architecture. It provides similar benefits to human dermis at a lower cost.
                </p>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Decellularized porcine tissue
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Proven track record in hernia repair
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Readily available supply
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- When Biological Mesh is Used -->
<section class="py-16 lg:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="inline-flex items-center gap-2 bg-accent/20 text-slate-800 rounded-full px-4 py-2 mb-6 text-sm font-medium">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                    Clinical Indications
                </span>
                <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-6">When is Biological Mesh Recommended?</h2>
                <p class="text-lg text-slate-600 mb-6">
                    Biological mesh is typically reserved for complex situations where synthetic mesh may carry higher risks. Dr. Kumar of Billroth Hospitals will evaluate your case to determine if biological mesh is the best option for you.
                </p>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 bg-white rounded-2xl p-4 shadow-sm border border-slate-100">
                        <div class="w-10 h-10 bg-red-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Contaminated Fields</h4>
                            <p class="text-slate-600 text-sm">When hernia repair must be performed in the presence of infection or potential contamination (bowel perforation, stoma reversal, etc.).</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 bg-white rounded-2xl p-4 shadow-sm border border-slate-100">
                        <div class="w-10 h-10 bg-orange-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Previous Mesh Infection</h4>
                            <p class="text-slate-600 text-sm">Patients who have had infected synthetic mesh removed may benefit from biological mesh in subsequent repairs.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 bg-white rounded-2xl p-4 shadow-sm border border-slate-100">
                        <div class="w-10 h-10 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.361 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Immunocompromised Patients</h4>
                            <p class="text-slate-600 text-sm">Patients with compromised immune systems may have better outcomes with biological rather than synthetic implants.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 bg-white rounded-2xl p-4 shadow-sm border border-slate-100">
                        <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Complex/Recurrent Hernias</h4>
                            <p class="text-slate-600 text-sm">Large, complex, or multiply recurrent hernias where enhanced healing is desirable.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-brand-50 to-brand-100 rounded-3xl p-4 border border-brand-100 shadow-inner">
                <img src="<?= $base_path ?>assets/images/biomesh-timeline.png" alt="Biological Mesh Integration Timeline" class="w-full h-auto object-cover rounded-2xl shadow-md border border-slate-200/50" />
            </div>
        </div>
    </div>
</section>

<!-- Advantages Section -->
<section class="py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-6">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Benefits
            </span>
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-4">Advantages of Biological Mesh</h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">Biological mesh offers several unique benefits, particularly in challenging clinical scenarios.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-emerald-100 rounded-2xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Infection Resistance</h3>
                <p class="text-slate-600 text-sm">Biological mesh has better resistance to infection and can be used safely in contaminated fields where synthetic mesh would be contraindicated.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-emerald-100 rounded-2xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Natural Remodeling</h3>
                <p class="text-slate-600 text-sm">The body's cells gradually replace the mesh with native tissue, resulting in a repair that is fully integrated into your body.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-emerald-100 rounded-2xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Reduced Adhesions</h3>
                <p class="text-slate-600 text-sm">Biological materials tend to cause fewer adhesions to intra-abdominal organs compared to some synthetic meshes.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-emerald-100 rounded-2xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">No Long-Term Foreign Body</h3>
                <p class="text-slate-600 text-sm">Once fully remodeled, there is minimal permanent foreign material left in the body, which may reduce long-term complications.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-emerald-100 rounded-2xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Preserved Extracellular Matrix</h3>
                <p class="text-slate-600 text-sm">The natural collagen structure provides scaffolding for tissue growth while maintaining mechanical strength during healing.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-emerald-100 rounded-2xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Biocompatible</h3>
                <p class="text-slate-600 text-sm">Biological mesh is well-tolerated by the body with minimal inflammatory response compared to synthetic alternatives.</p>
            </div>
        </div>
    </div>
</section>

<!-- Cost Considerations -->
<section class="py-16 lg:py-20 bg-gradient-to-br from-slate-800 to-slate-900 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <span class="inline-flex items-center gap-2 bg-white/10 text-white px-4 py-1.5 rounded-full text-xs font-medium border border-white/20 mb-6">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.657 0-3-.895-3-2s1.343-2 3-2 3 .895 3 2-1.343 2-3 2m0-1v9"/></svg>
                Investment Overview
            </span>
            <h2 class="font-display text-3xl lg:text-4xl font-bold mb-4">Cost Considerations</h2>
            <p class="text-lg text-slate-300 max-w-2xl mx-auto">Understanding the investment in biological mesh for your hernia repair.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="bg-white/10 backdrop-blur rounded-2xl p-6 border border-white/20">
                <h3 class="text-xl font-bold text-white mb-4">Investment in Your Health</h3>
                <p class="text-slate-300 mb-4">
                    Biological mesh typically costs more than synthetic mesh due to the complex processing required to ensure safety and efficacy. However, this investment may be justified in complex cases.
                </p>
                <ul class="space-y-2 text-slate-300 text-sm">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Higher upfront cost than synthetic mesh
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        May reduce need for future revision surgery
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Potential for better outcomes in high-risk cases
                    </li>
                </ul>
            </div>

            <div class="bg-white/10 backdrop-blur rounded-2xl p-6 border border-white/20">
                <h3 class="text-xl font-bold text-white mb-4">Insurance & Coverage</h3>
                <p class="text-slate-300 mb-4">
                    Coverage for biological mesh varies by insurance plan. Dr. Kumar of Billroth Hospitals&rsquo; office will help verify your benefits and discuss options.
                </p>
                <ul class="space-y-2 text-slate-300 text-sm">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Pre-authorization assistance available
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Flexible payment options
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Transparent pricing discussion
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 lg:py-20 bg-slate-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-10">
            <span class="text-xs font-bold uppercase tracking-wider text-brand-700 bg-brand-50 px-3 py-1.5 rounded-full mb-4 inline-block">FAQ</span>
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 leading-tight">
                Frequently Asked Questions
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-6 items-start">
            <!-- Left Column -->
            <div class="space-y-4">
                <!-- Item 1 (Active) -->
                <div class="faq-item active bg-brand-700 text-white rounded-2xl overflow-hidden transition-all duration-300 border border-transparent shadow-md">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-white text-base md:text-lg leading-snug transition-colors duration-300">Is biological mesh permanent?</span>
                        <span class="faq-symbol text-2xl font-light bg-brand-800 text-white w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">&minus;</span>
                    </button>
                    <div class="faq-content px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-brand-50 text-sm md:text-base leading-relaxed transition-colors duration-300">The mesh itself is gradually replaced by your body's own tissue over time (typically 1-2 years). What remains is native tissue reinforced by the remodeling process, so the repair is effectively permanent.</p>
                    </div>
                </div>

                <!-- Item 2 (Inactive) -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">Why is biological mesh more expensive?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-slate-200 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed transition-colors duration-300">The processing required to safely prepare biological tissue (removing cells while preserving the collagen scaffold) is complex and expensive. Each piece of mesh undergoes rigorous testing for safety and efficacy.</p>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-4">
                <!-- Item 3 (Inactive) -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">Can I choose biological mesh for any hernia?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-slate-200 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed transition-colors duration-300">Biological mesh is typically reserved for specific clinical situations. For straightforward, clean hernia repairs, synthetic mesh is usually the standard of care. Dr. Kumar of Billroth Hospitals will recommend the most appropriate option for your individual case.</p>
                    </div>
                </div>

                <!-- Item 4 (Inactive) -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">Are there religious concerns with porcine mesh?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-slate-200 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed transition-colors duration-300">Porcine mesh may not be suitable for patients who avoid pork products for religious or cultural reasons. Human dermis mesh is available as an alternative for such patients.</p>
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
        <span class="text-accent text-xs font-bold uppercase tracking-wider bg-white/10 px-4 py-1.5 rounded-full mb-4 inline-block border border-white/10">Personalized Consultations</span>
        <h2 class="font-display text-3xl md:text-5xl font-bold mb-6">
            Need a Complex Hernia Repair?
        </h2>
        <p class="text-lg text-slate-300 leading-relaxed mb-8 max-w-2xl mx-auto">
            Dr. Kumar of Billroth Hospitals has extensive experience with both standard and biological mesh for all types of hernia repairs.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-full transition shadow-lg shadow-accent/25 hover:scale-105">
                Schedule Consultation
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-8 py-4 rounded-full border border-white/30 transition hover:scale-105">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                Call <?= $site['phone'] ?>
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



<?php require __DIR__ . '/../includes/footer.php'; ?>