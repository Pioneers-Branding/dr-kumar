<?php
$page_title = 'ERAS Protocol for Faster Hernia Recovery | Dr. Kumar of Billroth Hospitals';
$page_description = 'How the Enhanced Recovery After Surgery protocol shortens hernia recovery, from pre-operative preparation through early mobilization and pain control.';
require __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white overflow-hidden py-20 md:py-28">

    <div class="relative max-w-7xl mx-auto px-4 z-10">
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 text-sm text-slate-300 mb-6 bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full w-max border border-white/10">
            <a href="<?= $base_path ?>" class="hover:text-white transition">Home</a>
            <span class="text-slate-500">/</span>
            <span class="text-slate-400">Advanced Techniques</span>
            <span class="text-slate-500">/</span>
            <span class="text-accent font-medium">ERAS Protocol</span>
        </nav>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 border border-white/10 shadow-sm">
                    <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                    Modern Surgical Protocol
                </span>
                <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] mb-6">
                    Enhanced Recovery<br>
                    <span class="text-accent">After Surgery</span>
                </h1>
                <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                    ERAS protocols represent a paradigm shift in surgical care. By optimizing every phase of your surgical journey, Dr. Kumar of Billroth Hospitals helps you recover faster, with less pain and fewer complications.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#eras-components" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition duration-300 shadow-lg shadow-accent/20 hover:scale-105">
                        Explore ERAS
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7H3"/></svg>
                    </a>
                    <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-white/15 hover:bg-white/25 backdrop-blur text-white font-bold px-7 py-3.5 rounded-full border border-white/30 transition duration-300 hover:scale-105">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                        Start Recovery Journey
                    </a>
                </div>
            </div>

            <div class="bg-gradient-to-br from-brand-800/30 to-slate-800/50 rounded-3xl p-4 border border-brand-600/20 overflow-hidden">
                <img
                    src="<?= $base_path ?>assets/images/eras-hero.png"
                    alt="ERAS Protocol - Fast Recovery After Surgery"
                    class="w-full h-[280px] object-cover rounded-2xl"
                />
            </div>
        </div>
    </div>
</section>

<!-- What is ERAS -->
<section id="eras-components" class="py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-4">What is ERAS?</h2>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">
                Enhanced Recovery After Surgery (ERAS) is a evidence-based, multidisciplinary approach that optimizes the surgical experience from pre-operative preparation through post-operative recovery. Developed in Europe in the 1990s, ERAS has revolutionized how patients recover from surgery.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-gradient-to-br from-brand-50 to-brand-100 rounded-2xl p-6 border border-brand-100">
                <div class="w-12 h-12 bg-brand-700 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Evidence-Based</h3>
                <p class="text-slate-600 text-sm">Built on scientific research and proven outcomes from thousands of patients worldwide.</p>
            </div>

            <div class="bg-gradient-to-br from-brand-50 to-brand-100 rounded-2xl p-6 border border-brand-100">
                <div class="w-12 h-12 bg-brand-700 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Multidisciplinary</h3>
                <p class="text-slate-600 text-sm">Involves surgeons, anesthesiologists, nurses, and physiotherapists working together.</p>
            </div>

            <div class="bg-gradient-to-br from-brand-50 to-brand-100 rounded-2xl p-6 border border-brand-100">
                <div class="w-12 h-12 bg-brand-700 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Patient-Centered</h3>
                <p class="text-slate-600 text-sm">Focuses on your experience and actively involves you in your own recovery.</p>
            </div>

            <div class="bg-gradient-to-br from-brand-50 to-brand-100 rounded-2xl p-6 border border-brand-100">
                <div class="w-12 h-12 bg-brand-700 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Proven Results</h3>
                <p class="text-slate-600 text-sm">Studies show ERAS reduces complications and shortens hospital stay significantly.</p>
            </div>
        </div>
    </div>
</section>

<!-- ERAS Components -->
<section class="py-16 lg:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-4">ERAS Protocol Components</h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">Every phase of your surgical journey is optimized for better outcomes.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Pre-operative -->
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center mb-4">
                    <span class="text-brand-700 font-bold text-xl">1</span>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-3">Pre-Operative Preparation</h3>
                <ul class="space-y-2 text-slate-600 text-sm">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Pre-operative counseling and education
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        No prolonged fasting - drink clear fluids until 2 hours before surgery
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Carbohydrate loading to reduce surgical stress
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Pre-emptive pain management
                    </li>
                </ul>
            </div>

            <!-- Intra-operative -->
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center mb-4">
                    <span class="text-brand-700 font-bold text-xl">2</span>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-3">During Surgery</h3>
                <ul class="space-y-2 text-slate-600 text-sm">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Minimally invasive surgical techniques
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Goal-directed fluid therapy
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Optimal anesthesia protocols
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Prevention of hypothermia
                    </li>
                </ul>
            </div>

            <!-- Post-operative -->
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center mb-4">
                    <span class="text-brand-700 font-bold text-xl">3</span>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-3">Post-Operative Care</h3>
                <ul class="space-y-2 text-slate-600 text-sm">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Multimodal pain management (reducing opioid reliance)
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Early mobilization - out of bed within hours
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Early oral nutrition - regular diet same day
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Regular audits and continuous improvement
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Pain Management -->
<section class="py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-6">Advanced Pain Management</h2>
                <p class="text-lg text-slate-600 mb-6">
                    One of ERAS's greatest achievements is transforming pain management after surgery. By using multimodal approaches, patients experience less pain while avoiding the side effects of strong opioid medications.
                </p>

                <div class="space-y-6">
                    <div class="flex gap-4 items-start">
                        <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Multimodal Analgesia</h4>
                            <p class="text-slate-600 text-sm">Combining different pain medications that work through different mechanisms, allowing lower doses of each while providing superior pain relief.</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start">
                        <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Reduced Opioid Use</h4>
                            <p class="text-slate-600 text-sm">Patients on ERAS protocols typically need fewer or no opioid pain medications, avoiding side effects like drowsiness, nausea, and constipation.</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start">
                        <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Longer-Lasting Relief</h4>
                            <p class="text-slate-600 text-sm">Pre-operative and intra-operative pain blocking techniques extend pain relief well beyond the immediate postoperative period.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-brand-50 to-brand-100 rounded-2xl p-4 border border-brand-100 shadow-inner">
                <img src="<?= $base_path ?>assets/images/eras-pain-chart.png" alt="Traditional vs ERAS Pain Control Comparison" class="w-full h-auto object-cover rounded-xl shadow-md border border-slate-200/50" />
            </div>
        </div>
    </div>
</section>

<!-- Early Mobilization -->
<section class="py-16 lg:py-20 bg-gradient-to-br from-brand-700 to-brand-800 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold mb-4">Early Mobilization Benefits</h2>
            <p class="text-lg text-brand-100 max-w-2xl mx-auto">Getting you moving sooner is one of the most important aspects of ERAS protocols.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white/10 backdrop-blur rounded-2xl p-6 border border-white/20 text-center">
                <svg class="w-12 h-12 mx-auto mb-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <h3 class="text-lg font-bold mb-2">Within 4-6 Hours</h3>
                <p class="text-brand-100 text-sm">Out of bed and walking with assistance shortly after surgery</p>
            </div>

            <div class="bg-white/10 backdrop-blur rounded-2xl p-6 border border-white/20 text-center">
                <svg class="w-12 h-12 mx-auto mb-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                <h3 class="text-lg font-bold mb-2">Prevents Complications</h3>
                <p class="text-brand-100 text-sm">Reduces risk of blood clots, pneumonia, and ileus</p>
            </div>

            <div class="bg-white/10 backdrop-blur rounded-2xl p-6 border border-white/20 text-center">
                <svg class="w-12 h-12 mx-auto mb-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                <h3 class="text-lg font-bold mb-2">Builds Confidence</h3>
                <p class="text-brand-100 text-sm">Patients feel empowered and in control of recovery</p>
            </div>

            <div class="bg-white/10 backdrop-blur rounded-2xl p-6 border border-white/20 text-center">
                <svg class="w-12 h-12 mx-auto mb-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/></svg>
                <h3 class="text-lg font-bold mb-2">Accelerates Healing</h3>
                <p class="text-brand-100 text-sm">Promotes circulation, bowel function, and overall recovery</p>
            </div>
        </div>
    </div>
</section>

<!-- Recovery Timeline -->
<section class="py-16 lg:py-20">
    <div class="max-w-4xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-4">Your ERAS Recovery Timeline</h2>
        </div>

        <div class="space-y-6">
            <div class="flex gap-6 items-start">
                <div class="w-16 h-16 bg-brand-600 text-white rounded-xl flex items-center justify-center font-bold text-lg flex-shrink-0">AM</div>
                <div class="flex-1 bg-white rounded-xl p-6 shadow-sm border border-slate-100">
                    <h4 class="font-semibold text-slate-800 mb-2">Before Surgery (Evening Before)</h4>
                    <p class="text-slate-600 text-sm">Clear carbohydrate drink, no solid food after midnight, continue medications as directed.</p>
                </div>
            </div>

            <div class="flex gap-6 items-start">
                <div class="w-16 h-16 bg-brand-600 text-white rounded-xl flex items-center justify-center font-bold text-lg flex-shrink-0">2h</div>
                <div class="flex-1 bg-white rounded-xl p-6 shadow-sm border border-slate-100">
                    <h4 class="font-semibold text-slate-800 mb-2">2 Hours Before Surgery</h4>
                    <p class="text-slate-600 text-sm">Clear carbohydrate drink to optimize energy and reduce surgical stress response.</p>
                </div>
            </div>

            <div class="flex gap-6 items-start">
                <div class="w-16 h-16 bg-brand-600 text-white rounded-xl flex items-center justify-center font-bold text-lg flex-shrink-0">0</div>
                <div class="flex-1 bg-white rounded-xl p-6 shadow-sm border border-slate-100">
                    <h4 class="font-semibold text-slate-800 mb-2">Day of Surgery</h4>
                    <p class="text-slate-600 text-sm">Minimally invasive procedure, multimodal pain prevention, recovery room mobilization begins.</p>
                </div>
            </div>

            <div class="flex gap-6 items-start">
                <div class="w-16 h-16 bg-brand-600 text-white rounded-xl flex items-center justify-center font-bold text-lg flex-shrink-0">+1</div>
                <div class="flex-1 bg-white rounded-xl p-6 shadow-sm border border-slate-100">
                    <h4 class="font-semibold text-slate-800 mb-2">Post-Operative Day 1</h4>
                    <p class="text-slate-600 text-sm">Regular diet, walking in hallway, pain managed with oral medications, shower allowed.</p>
                </div>
            </div>

            <div class="flex gap-6 items-start">
                <div class="w-16 h-16 bg-emerald-500 text-white rounded-xl flex items-center justify-center font-bold text-lg flex-shrink-0">+2</div>
                <div class="flex-1 bg-white rounded-xl p-6 shadow-sm border border-slate-100">
                    <h4 class="font-semibold text-slate-800 mb-2">Discharge Day (Usually Day 1-2)</h4>
                    <p class="text-slate-600 text-sm">Mobile, comfortable on oral pain medications, wound checked, discharge instructions reviewed, follow-up scheduled.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 lg:py-20 bg-slate-50 border-t border-slate-100">
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
                        <span class="font-display font-bold text-white text-base md:text-lg leading-snug transition-colors duration-300">Is ERAS only for robotic or laparoscopic surgery?</span>
                        <span class="faq-symbol text-2xl font-light bg-brand-800 text-white w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">&minus;</span>
                    </button>
                    <div class="faq-content px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-brand-50 text-sm md:text-base leading-relaxed transition-colors duration-300">While ERAS principles work especially well with minimally invasive surgery, they can be applied to open surgeries as well. The goal is to optimize recovery regardless of surgical approach.</p>
                    </div>
                </div>

                <!-- Item 2 (Inactive) -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">Will I go home the same day?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed transition-colors duration-300">Many ERAS hernia repairs are day surgery, so you go home the same day. Larger hernias or other medical factors may mean one night. Discharge happens as soon as it is safe.</p>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-4">
                <!-- Item 3 (Inactive) -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">What if I have concerns about going home so soon?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed transition-colors duration-300">Your safety is paramount. Dr. Kumar of Billroth Hospitals will only recommend discharge when you are medically ready. You will receive detailed instructions, emergency contact numbers, and follow-up appointments to ensure peace of mind.</p>
                    </div>
                </div>

                <!-- Item 4 (Inactive) -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">Do I need to do anything special to prepare?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed transition-colors duration-300">Yes. Pre-operative optimization is part of ERAS. This includes stopping smoking if needed, optimizing any chronic conditions, maintaining good nutrition, and following the specific instructions you receive before surgery.</p>
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
        <span class="text-accent text-xs font-bold uppercase tracking-wider bg-white/10 px-4 py-1.5 rounded-full mb-4 inline-block border border-white/10">Experience Better Recovery</span>
        <h2 class="font-display text-3xl md:text-5xl font-bold mb-6">
            Faster Recovery with ERAS Protocols
        </h2>
        <p class="text-lg text-slate-300 leading-relaxed mb-8 max-w-2xl mx-auto">
            Dr. Kumar of Billroth Hospitals implements ERAS protocols to help you get back to your life sooner with less pain and fewer complications.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-full transition shadow-lg shadow-accent/25 hover:scale-105">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                Book Your Consultation
            </a>
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-8 py-4 rounded-full border border-white/30 transition hover:scale-105">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
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