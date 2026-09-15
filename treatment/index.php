<?php
$page_title = 'Hernia Surgical Techniques in Chennai | Dr. Kumar of Billroth Hospitals';
$page_description = 'The full range of hernia techniques Dr. Kumar of Billroth Hospitals performs in Chennai, from laparoscopic TEP and TAPP to robotic repair and abdominal wall reconstruction.';
require __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white overflow-hidden">
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

    <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-28">
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 text-sm text-slate-300 mb-6 bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full w-max border border-white/10">
            <a href="<?= $base_path ?>" class="hover:text-white transition">Home</a>
            <span class="text-slate-500">/</span>
            <span class="text-accent font-medium">All Treatments</span>
        </nav>

        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur px-4 py-2 rounded-full text-sm font-medium mb-6">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Comprehensive Surgical Solutions
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                All Hernia &amp; Laparoscopic<br>
                <span class="text-accent">Treatment Options</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Explore the complete range of advanced hernia and laparoscopic treatments offered by Dr. Kumar of Billroth Hospitals - from daycare procedures to complex abdominal wall reconstruction.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#all-treatments" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition duration-300 shadow-lg shadow-accent/20 hover:scale-105">
                    Browse Treatments
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

<!-- All Treatments Grid -->
<section id="all-treatments" class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Our Treatments
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Complete <span class="text-brand-700">Treatment Solutions</span>
            </h2>
            <p class="text-slate-600 text-lg">
                Browse through all our specialized hernia and laparoscopic surgery treatments, tailored to your specific needs.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <?php foreach ($treatments as $t): ?>
                <a href="<?= $base_path . $t['link'] ?>" class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-slate-100 flex flex-col">
                    <div class="relative aspect-[4/3] overflow-hidden bg-slate-100">
                        <img src="<?= $base_path . $t['img'] ?>" alt="<?= htmlspecialchars($t['title']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/30 to-transparent"></div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h3 class="font-bold text-slate-900 text-lg mb-2 leading-tight group-hover:text-brand-700 transition">
                            <?= $t['title'] ?>
                        </h3>
                        <p class="text-slate-600 text-sm leading-relaxed flex-1">
                            <?= $t['desc'] ?>
                        </p>
                        <div class="mt-4 inline-flex items-center gap-1.5 text-brand-700 font-semibold text-sm">
                            See how it works
                            <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why Choose Section -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Why Choose Us
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Expert Care for <span class="text-brand-700">Every Patient</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center bg-slate-50 rounded-2xl p-8">
                <div class="w-16 h-16 rounded-full bg-brand-100 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-xl text-slate-900 mb-3">Personalized Approach</h3>
                <p class="text-slate-600">Every treatment plan is customized to your specific condition, medical history, and recovery goals.</p>
            </div>
            <div class="text-center bg-slate-50 rounded-2xl p-8">
                <div class="w-16 h-16 rounded-full bg-brand-100 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 13l4 4L19 5"/></svg>
                </div>
                <h3 class="font-bold text-xl text-slate-900 mb-3">Proven Outcomes</h3>
                <p class="text-slate-600">10,000+ hernia repairs and 20,000+ laparoscopic procedures with exceptional success rates.</p>
            </div>
            <div class="text-center bg-slate-50 rounded-2xl p-8">
                <div class="w-16 h-16 rounded-full bg-brand-100 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="font-bold text-xl text-slate-900 mb-3">Latest Technology</h3>
                <p class="text-slate-600">State-of-the-art robotic, laparoscopic, and minimally invasive techniques for optimal recovery.</p>
            </div>
        </div>
    </div>
</section>

<!-- Hernia Surgery Locations in Chennai -->
<section class="py-16 md:py-24 bg-slate-50 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Locations We Serve
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Hernia Surgery Centers in <span class="text-brand-700">Chennai</span>
            </h2>
            <p class="text-slate-600 text-lg">
                Find expert hernia surgeon consultation, daycare surgery, and advanced laparoscopic procedures near your location in Chennai.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <a href="<?= $base_path ?>treatment/hernia-surgeon-in-annanagar" class="bg-white border border-slate-200 hover:border-brand-300 hover:bg-brand-50/50 rounded-2xl p-4 flex items-center justify-between text-slate-800 hover:text-brand-700 font-semibold text-sm transition-all duration-200 group">
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-brand-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Hernia Surgeon in Anna Nagar
                </span>
                <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="<?= $base_path ?>treatment/hernia-surgeon-in-mogappair" class="bg-white border border-slate-200 hover:border-brand-300 hover:bg-brand-50/50 rounded-2xl p-4 flex items-center justify-between text-slate-800 hover:text-brand-700 font-semibold text-sm transition-all duration-200 group">
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-brand-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Hernia Surgeon in Mogappair
                </span>
                <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="<?= $base_path ?>treatment/hernia-surgeon-in-kilpauk" class="bg-white border border-slate-200 hover:border-brand-300 hover:bg-brand-50/50 rounded-2xl p-4 flex items-center justify-between text-slate-800 hover:text-brand-700 font-semibold text-sm transition-all duration-200 group">
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-brand-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Hernia Surgeon in Kilpauk
                </span>
                <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="<?= $base_path ?>treatment/hernia-surgeon-in-shenoy-nagar" class="bg-white border border-slate-200 hover:border-brand-300 hover:bg-brand-50/50 rounded-2xl p-4 flex items-center justify-between text-slate-800 hover:text-brand-700 font-semibold text-sm transition-all duration-200 group">
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-brand-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Hernia Surgeon in Shenoy Nagar
                </span>
                <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="<?= $base_path ?>treatment/hernia-surgeon-in-arumbakkam" class="bg-white border border-slate-200 hover:border-brand-300 hover:bg-brand-50/50 rounded-2xl p-4 flex items-center justify-between text-slate-800 hover:text-brand-700 font-semibold text-sm transition-all duration-200 group">
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-brand-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Hernia Surgeon in Arumbakkam
                </span>
                <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="<?= $base_path ?>treatment/hernia-surgeon-in-aminjikarai" class="bg-white border border-slate-200 hover:border-brand-300 hover:bg-brand-50/50 rounded-2xl p-4 flex items-center justify-between text-slate-800 hover:text-brand-700 font-semibold text-sm transition-all duration-200 group">
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-brand-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Hernia Surgeon in Aminjikarai
                </span>
                <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="<?= $base_path ?>treatment/hernia-surgeon-in-nungambakkam" class="bg-white border border-slate-200 hover:border-brand-300 hover:bg-brand-50/50 rounded-2xl p-4 flex items-center justify-between text-slate-800 hover:text-brand-700 font-semibold text-sm transition-all duration-200 group">
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-brand-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Hernia Surgeon in Nungambakkam
                </span>
                <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="<?= $base_path ?>treatment/hernia-surgeon-in-koyambedu" class="bg-white border border-slate-200 hover:border-brand-300 hover:bg-brand-50/50 rounded-2xl p-4 flex items-center justify-between text-slate-800 hover:text-brand-700 font-semibold text-sm transition-all duration-200 group">
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-brand-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Hernia Surgeon in Koyambedu
                </span>
                <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="<?= $base_path ?>treatment/hernia-surgeon-in-maduravoyal" class="bg-white border border-slate-200 hover:border-brand-300 hover:bg-brand-50/50 rounded-2xl p-4 flex items-center justify-between text-slate-800 hover:text-brand-700 font-semibold text-sm transition-all duration-200 group">
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-brand-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Hernia Surgeon in Maduravoyal
                </span>
                <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="<?= $base_path ?>treatment/hernia-surgeon-in-villivakkam" class="bg-white border border-slate-200 hover:border-brand-300 hover:bg-brand-50/50 rounded-2xl p-4 flex items-center justify-between text-slate-800 hover:text-brand-700 font-semibold text-sm transition-all duration-200 group">
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-brand-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Hernia Surgeon in Villivakkam
                </span>
                <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="<?= $base_path ?>treatment/hernia-surgeon-in-padi" class="bg-white border border-slate-200 hover:border-brand-300 hover:bg-brand-50/50 rounded-2xl p-4 flex items-center justify-between text-slate-800 hover:text-brand-700 font-semibold text-sm transition-all duration-200 group">
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-brand-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Hernia Surgeon in Padi
                </span>
                <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="<?= $base_path ?>treatment/hernia-surgeon-in-kolathur" class="bg-white border border-slate-200 hover:border-brand-300 hover:bg-brand-50/50 rounded-2xl p-4 flex items-center justify-between text-slate-800 hover:text-brand-700 font-semibold text-sm transition-all duration-200 group">
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-brand-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Hernia Surgeon in Kolathur
                </span>
                <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="<?= $base_path ?>treatment/hernia-surgeon-in-korattur" class="bg-white border border-slate-200 hover:border-brand-300 hover:bg-brand-50/50 rounded-2xl p-4 flex items-center justify-between text-slate-800 hover:text-brand-700 font-semibold text-sm transition-all duration-200 group">
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-brand-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Hernia Surgeon in Korattur
                </span>
                <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="<?= $base_path ?>treatment/hernia-surgeon-in-ayanavaram" class="bg-white border border-slate-200 hover:border-brand-300 hover:bg-brand-50/50 rounded-2xl p-4 flex items-center justify-between text-slate-800 hover:text-brand-700 font-semibold text-sm transition-all duration-200 group">
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-brand-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Hernia Surgeon in Ayanavaram
                </span>
                <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="<?= $base_path ?>treatment/hernia-surgeon-in-perambur" class="bg-white border border-slate-200 hover:border-brand-300 hover:bg-brand-50/50 rounded-2xl p-4 flex items-center justify-between text-slate-800 hover:text-brand-700 font-semibold text-sm transition-all duration-200 group">
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-brand-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Hernia Surgeon in Perambur
                </span>
                <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="<?= $base_path ?>treatment/hernia-surgeon-in-purasawalkam" class="bg-white border border-slate-200 hover:border-brand-300 hover:bg-brand-50/50 rounded-2xl p-4 flex items-center justify-between text-slate-800 hover:text-brand-700 font-semibold text-sm transition-all duration-200 group">
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-brand-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Hernia Surgeon in Purasawalkam
                </span>
                <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 md:py-24 bg-brand-950 text-white text-center relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-brand-800/10 rounded-full blur-[160px]"></div>

    <div class="max-w-4xl mx-auto px-4 relative z-10">
        <span class="text-accent text-xs font-bold uppercase tracking-wider bg-white/10 px-4 py-1.5 rounded-full mb-6 inline-block border border-white/10">Consultation</span>
        <h2 class="font-display text-3xl md:text-5xl font-bold mb-6">
            Not Sure Which Treatment is Right for You?
        </h2>
        <p class="text-lg text-slate-300 leading-relaxed mb-10 max-w-2xl mx-auto">
            Schedule a consultation with Dr. Kumar of Billroth Hospitals to discuss your condition and find the best treatment approach for your specific needs.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-full transition shadow-lg shadow-accent/25 hover:scale-105">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                Call: <?= $site['phone'] ?>
            </a>
            <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white font-semibold px-8 py-4 rounded-full border border-white/30 transition duration-300 hover:scale-105">
                Book Appointment
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>