<?php
$page_title = 'eTEP Hernia Repair in Chennai | Dr. Kumar of Billroth Hospitals';
$page_description = 'Seeking eTEP Hernia Repair in Chennai? Consult Dr. Kumar of Billroth Hospitals, a top laparoscopic hernia surgeon for advanced, minimally invasive eTEP repair.';
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
            <span class="text-accent font-medium">eTEP Repair</span>
        </nav>

        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 border border-white/10 shadow-sm">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Advanced Abdominal Reconstruction
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] mb-6">
                eTEP Rives-Stoppa<br>
                <span class="text-accent">Hernia Repair</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Extended view totally extraperitoneal (eTEP) repair - a cutting-edge approach for complex abdominal wall hernias requiring durable muscle reconstruction.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#what-is-etep" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition duration-300 shadow-lg shadow-accent/20 hover:scale-105">
                    Explore eTEP
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

<!-- What is eTEP Section -->
<section id="what-is-etep" class="py-12 md:py-16 bg-white scroll-mt-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column: Description & Evolution -->
            <div>
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-50 px-3.5 py-1.5 rounded-full inline-block mb-4">Understanding eTEP</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                    What is eTEP Rives-Stoppa Repair?
                </h2>
                <p class="text-slate-600 leading-relaxed mb-5">
                    eTEP stands for <strong>extended view Totally Extraperitoneal</strong> repair. It is an advanced surgical development that adapts the classic, highly successful open **Rives-Stoppa** retrorectus repair for modern laparoscopic and robotic platforms.
                </p>
                <p class="text-slate-600 leading-relaxed mb-6">
                    By accessing the retrorectus space (the natural pocket located behind the rectus abdominis or "six-pack" muscles), the surgeon creates a spacious extraperitoneal working environment. This allows large defects in the abdominal wall to be closed and reinforced with mesh, while avoiding entering the peritoneal cavity containing internal organs.
                </p>

                <div class="bg-brand-50 rounded-3xl p-6 border border-brand-100 shadow-sm mb-6">
                    <h3 class="font-bold text-slate-900 mb-3">Key Structural Innovation</h3>
                    <p class="text-slate-650 text-sm leading-relaxed">
                        eTEP represents a major leap in abdominal wall reconstruction. It brings the robust, time-tested principles of posterior sublay mesh placement to a minimally invasive keyhole platform, enabling surgeons to treat complex hernias that previously required massive, painful open scars.
                    </p>
                </div>
            </div>

            <!-- Right Column: Unsplash Image -->
            <div>
                <div class="relative rounded-3xl overflow-hidden bg-slate-100 aspect-[4/3] border border-slate-200 shadow-2xl mb-0 group">
                    <img src="<?= $base_path ?>assets/images/etep-access.png"
                         alt="eTEP Rives-Stoppa Repair - Advanced Retrorectus Access"
                         class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/50 via-slate-950/10 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6 bg-white/95 backdrop-blur rounded-2xl p-5 shadow-2xl border border-white/20 flex items-center gap-4 hover:-translate-y-1 transition duration-300">
                        <div class="w-12 h-12 rounded-xl bg-brand-100 text-brand-700 flex items-center justify-center shrink-0 shadow-inner">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 9.172V5L8 4z"/></svg>
                        </div>
                        <div>
                            <p class="font-bold text-slate-900 text-base leading-tight">Retrorectus Positioning</p>
                            <p class="text-xs text-brand-600 font-semibold mt-0.5">Places mesh behind the six-pack muscles</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- eTEP for Complex Hernias -->
<section class="py-12 md:py-16 bg-slate-50 border-y border-slate-100">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Left Column: Branding and Key Media -->
            <div class="lg:col-span-5">
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-50 px-3.5 py-1.5 rounded-full inline-block mb-4">Indications</span>
                <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 leading-[1.1] mb-6">
                    eTEP for<br>
                    <span class="text-brand-700">Complex Hernias</span>
                </h2>
                <p class="text-slate-655 leading-relaxed text-base md:text-lg mb-8">
                    eTEP is highly useful for patients with large, multiple, or recurrent hernias, bridging the gap between keyhole simplicity and massive reconstructive durability.
                </p>

                <div class="relative rounded-[2rem] overflow-hidden bg-slate-100 aspect-[16/10] border border-slate-200 shadow-xl group mb-8 lg:mb-0">
                    <img src="<?= $base_path ?>assets/images/etep-reconstruction.png"
                         alt="eTEP Advanced Reconstructive Surgery"
                         class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/45 via-slate-950/10 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4 bg-white/95 backdrop-blur-sm rounded-2xl p-4 shadow-xl border border-white/20 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-brand-50 border border-brand-100 flex items-center justify-center text-brand-700 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div>
                            <p class="font-bold text-slate-900 text-sm leading-tight">Sublay Submuscular Substrate</p>
                            <p class="text-xs text-brand-600 font-semibold mt-0.5">Maximum stability behind rectus muscles</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Premium List (No Cards, Divide layout) -->
            <div class="lg:col-span-7 divide-y divide-slate-200">
                
                <!-- Giant Ventral Hernias -->
                <div class="flex gap-4 items-start group py-5 first:pt-0 last:pb-0">
                    <div class="shrink-0 w-12 h-12 rounded-full bg-brand-50 group-hover:bg-brand-700 border border-brand-100/60 text-brand-700 group-hover:text-white flex items-center justify-center transition duration-300 shadow-inner group-hover:shadow-brand-700/20 group-hover:scale-105">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    </div>
                    <div class="flex-1 pt-1">
                        <h3 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-brand-700 transition">Giant Ventral Hernias</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Ventral defects with wide muscle gaps that require large, secure mesh borders and comprehensive abdominal wall restoration.</p>
                    </div>
                </div>

                <!-- Recurrent Abdominal Hernias -->
                <div class="flex gap-4 items-start group py-5 first:pt-0 last:pb-0">
                    <div class="shrink-0 w-12 h-12 rounded-full bg-brand-50 group-hover:bg-brand-700 border border-brand-100/60 text-brand-700 group-hover:text-white flex items-center justify-center transition duration-300 shadow-inner group-hover:shadow-brand-700/20 group-hover:scale-105">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                    </div>
                    <div class="flex-1 pt-1">
                        <h3 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-brand-700 transition">Recurrent Abdominal Hernias</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Hernias that have recurred after previous suture or mesh attempts, surrounded by deep scarring and anatomical changes.</p>
                    </div>
                </div>

                <!-- Incisional Hernias -->
                <div class="flex gap-4 items-start group py-5 first:pt-0 last:pb-0">
                    <div class="shrink-0 w-12 h-12 rounded-full bg-brand-50 group-hover:bg-brand-700 border border-brand-100/60 text-brand-700 group-hover:text-white flex items-center justify-center transition duration-300 shadow-inner group-hover:shadow-brand-700/20 group-hover:scale-105">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                    </div>
                    <div class="flex-1 pt-1">
                        <h3 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-brand-700 transition">Incisional Hernias</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Abdominal defects that have formed along previous surgical scars due to underlying tissue weakness.</p>
                    </div>
                </div>

                <!-- Multiple Wall Defects -->
                <div class="flex gap-4 items-start group py-5 first:pt-0 last:pb-0">
                    <div class="shrink-0 w-12 h-12 rounded-full bg-brand-50 group-hover:bg-brand-700 border border-brand-100/60 text-brand-700 group-hover:text-white flex items-center justify-center transition duration-300 shadow-inner group-hover:shadow-brand-700/20 group-hover:scale-105">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                    </div>
                    <div class="flex-1 pt-1">
                        <h3 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-brand-700 transition">Multiple Wall Defects</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Patients displaying multiple concurrent defects (such as an umbilical hernia and a groin hernia) needing simultaneous repair.</p>
                    </div>
                </div>

                <!-- Occult Groin Weaknesses -->
                <div class="flex gap-4 items-start group py-5 first:pt-0 last:pb-0">
                    <div class="shrink-0 w-12 h-12 rounded-full bg-brand-50 group-hover:bg-brand-700 border border-brand-100/60 text-brand-700 group-hover:text-white flex items-center justify-center transition duration-300 shadow-inner group-hover:shadow-brand-700/20 group-hover:scale-105">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <div class="flex-1 pt-1">
                        <h3 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-brand-700 transition">Occult Groin Weaknesses</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Detects hidden lateral weaknesses on initial view, reinforcing them to prevent future hernia formations.</p>
                    </div>
                </div>

                <!-- Mesh Failure Cases -->
                <div class="flex gap-4 items-start group py-5 first:pt-0 last:pb-0">
                    <div class="shrink-0 w-12 h-12 rounded-full bg-brand-50 group-hover:bg-brand-700 border border-brand-100/60 text-brand-700 group-hover:text-white flex items-center justify-center transition duration-300 shadow-inner group-hover:shadow-brand-700/20 group-hover:scale-105">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div class="flex-1 pt-1">
                        <h3 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-brand-700 transition">Mesh Failure Cases</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Previous sub-optimal mesh applications that have migrated or curled, requiring safe extraction and a larger retrorectus sublay mesh placement.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- TAR Banner -->
        <div class="bg-gradient-to-br from-brand-900 to-slate-900 rounded-3xl p-8 text-white shadow-2xl relative overflow-hidden border border-white/5">
            <div class="absolute -top-24 -left-24 w-48 h-48 bg-brand-850 rounded-full opacity-20"></div>
            <div class="relative z-10 flex flex-col md:flex-row items-center gap-8">
                <div class="shrink-0 w-20 h-20 rounded-2xl bg-white/10 flex items-center justify-center shadow-lg border border-white/10">
                    <svg class="w-10 h-10 text-accent animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <div class="flex-1">
                    <h3 class="text-2xl font-bold mb-3">eTEP + TAR for Massive Reconstruction</h3>
                    <p class="text-slate-350 leading-relaxed text-sm">
                        For extremely large abdominal wall hernias, eTEP can be combined with a **TAR (Transversus Abdominis Release)**. By releasing a specific muscle layer on the sides of the abdomen, the surgeon can advance the central muscles significantly, closing huge gaps without structural tension, and laying a massive reinforcing mesh underneath.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Advantages of eTEP -->
<section class="py-12 md:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column: Premium Interactive Cards -->
            <div class="order-2 lg:order-1 space-y-5">
                <!-- Card 1 -->
                <div class="group bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-brand-200 transition-all duration-300 flex gap-4 items-start">
                    <div class="shrink-0 w-12 h-12 rounded-2xl bg-brand-50 border border-brand-100/60 text-brand-700 group-hover:bg-brand-700 group-hover:text-white transition duration-300 flex items-center justify-center shadow-md group-hover:shadow-brand-700/20 group-hover:scale-105">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-brand-700 transition duration-300">Extremely Robust Support</h4>
                        <p class="text-sm text-slate-600 leading-relaxed">Placing a large mesh in the retrorectus plane behind the rectus muscles leverages the patient's own tissue weight to hold the repair in place permanently.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="group bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-brand-200 transition-all duration-300 flex gap-4 items-start">
                    <div class="shrink-0 w-12 h-12 rounded-2xl bg-accent/10 text-accent group-hover:bg-accent group-hover:text-white transition duration-300 flex items-center justify-center shadow-md group-hover:shadow-accent/20 group-hover:scale-105">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-brand-700 transition duration-300">Minimally Invasive Comfort</h4>
                        <p class="text-sm text-slate-600 leading-relaxed">Replaces giant 20–30 cm incisions with a few tiny port entries. This preserves cosmetic results, lowers infection rates, and shortens healing.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="group bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-brand-200 transition-all duration-300 flex gap-4 items-start">
                    <div class="shrink-0 w-12 h-12 rounded-2xl bg-brand-50 border border-brand-100/60 text-brand-700 group-hover:bg-brand-700 group-hover:text-white transition duration-300 flex items-center justify-center shadow-md group-hover:shadow-brand-700/20 group-hover:scale-105">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-brand-700 transition duration-300">Reduced Adhesion Profile</h4>
                        <p class="text-sm text-slate-600 leading-relaxed">Keeping the mesh outside the peritoneal cavity isolates it completely from the bowels and stomach, eliminating bowel stickiness or chronic pain.</p>
                    </div>
                </div>
            </div>

            <!-- Right Column: Explanations -->
            <div class="order-1 lg:order-2">
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-50 px-3.5 py-1.5 rounded-full inline-block mb-4">Why Choose eTEP</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                    Proven Open Principles,<br>Keyhole Simplicity
                </h2>
                <p class="text-slate-600 leading-relaxed mb-5">
                    For decades, the open sublay retrorectus mesh placement (Rives-Stoppa) has been recognized as the most durable abdominal wall repair possible, boasting recurrence rates near zero. However, it required large incisions that caused substantial post-op pain and prolonged recovery.
                </p>
                <p class="text-slate-600 leading-relaxed mb-6">
                    eTEP delivers this exact robust structural outcome using a few tiny port entries. By reinforcing the defect from behind the muscle, the repair is protected by the patient's own muscular tissues, providing high long-term strength.
                </p>
                <div class="bg-brand-50 rounded-3xl p-6 border border-brand-100/60 flex items-start gap-4 shadow-inner">
                    <span class="w-10 h-10 rounded-xl bg-brand-700 text-white flex items-center justify-center shrink-0 shadow-md">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </span>
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm mb-1">Clinical Expertise Matters</h4>
                        <p class="text-xs text-slate-655 leading-relaxed font-medium">
                            eTEP is technically demanding and requires advanced, specialized training. Dr. Kumar of Billroth Hospitals has extensive experience in complex abdominal wall reconstruction.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recovery Section -->
<section id="recovery" class="py-12 md:py-16 bg-slate-50 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-100 px-3.5 py-1.5 rounded-full inline-block">Healing Journey</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-4 mb-4">
                eTEP Recovery Timeline
            </h2>
            <p class="text-slate-600 leading-relaxed text-sm md:text-base">
                Because eTEP is used for complex abdominal reconstructions, recovery is longer than standard keyholes, but still significantly faster and less painful than traditional open surgery.
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-6 mb-12">
            <div class="bg-white rounded-3xl p-6 border-t-4 border-brand-700 shadow-sm hover:scale-105 hover:shadow-md transition duration-300">
                <span class="text-xs font-bold text-brand-700 uppercase tracking-wider">Days 1-3</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-2">Hospital Stay</h3>
                <p class="text-sm text-slate-600">Typically requires 1 to 3 days in the hospital for pain monitoring, early mobilization, and active bowel function checks.</p>
            </div>

            <div class="bg-white rounded-3xl p-6 border-t-4 border-brand-600 shadow-sm hover:scale-105 hover:shadow-md transition duration-300">
                <span class="text-xs font-bold text-brand-600 uppercase tracking-wider">Weeks 2-3</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-2">Home Rest</h3>
                <p class="text-sm text-slate-600">Recover comfortably at home. Walk around regularly. Pain levels subside dramatically as ports heal.</p>
            </div>

            <div class="bg-white rounded-3xl p-6 border-t-4 border-brand-500 shadow-sm hover:scale-105 hover:shadow-md transition duration-300">
                <span class="text-xs font-bold text-brand-500 uppercase tracking-wider">Weeks 4-6</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-2">Gradual Return</h3>
                <p class="text-sm text-slate-600">Return to office-based light duties. Abdominal wall strength is rebuilding. Maintain binder usage.</p>
            </div>

            <div class="bg-white rounded-3xl p-6 border-t-4 border-accent shadow-sm hover:scale-105 hover:shadow-md transition duration-300">
                <span class="text-xs font-bold text-accent uppercase tracking-wider">Weeks 8+</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-2">Full Activity</h3>
                <p class="text-sm text-slate-600">The sublay mesh is completely incorporated. Strenuous sports, gym training, and heavy lifting can be resumed.</p>
            </div>
        </div>

        <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm">
            <h3 class="text-xl font-bold text-slate-900 mb-6">eTEP Recovery Special Instructions</h3>
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-green-700 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Abdominal Protection Dos
                    </h4>
                    <ul class="space-y-3 text-sm text-slate-650">
                        <li class="flex items-start gap-2"><span>✓</span> Wear your fitted abdominal binder support belt continuously as directed (usually 4 to 6 weeks).</li>
                        <li class="flex items-start gap-2"><span>✓</span> Sleep with your chest elevated slightly to relieve core abdominal skin tension.</li>
                        <li class="flex items-start gap-2"><span>✓</span> Maintain a healthy, fiber-rich diet to promote smooth digestion and avoid core strain.</li>
                        <li class="flex items-start gap-2"><span>✓</span> Attend your planned clinical follow-ups with Dr. Kumar of Billroth Hospitals to verify healing.</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-red-700 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>
                        Warning Signs - Contact Specialist
                    </h4>
                    <ul class="space-y-3 text-sm text-slate-650">
                        <li class="flex items-start gap-2"><span>✗</span> High fever (>101°F) or persistent chills.</li>
                        <li class="flex items-start gap-2"><span>✗</span> Active redness, localized heat, or purulent fluid discharge at port cuts.</li>
                        <li class="flex items-start gap-2"><span>✗</span> Appearance of a new structural bulge at the repair region.</li>
                        <li class="flex items-start gap-2"><span>✗</span> Severe abdominal distension, nausea, or inability to pass gas or stool.</li>
                    </ul>
                </div>
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
                        <span class="font-display font-bold text-white text-base md:text-lg leading-snug">What does eTEP stand for and how does it work?</span>
                        <span class="faq-symbol text-2xl font-light bg-brand-800 text-white w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm">&minus;</span>
                    </button>
                    <div class="faq-content px-6 pb-6">
                        <div class="h-px bg-white/20 mb-4"></div>
                        <p class="text-brand-50 text-sm md:text-base leading-relaxed">eTEP is extended view totally extraperitoneal repair. The surgeon works in the retrorectus space, behind the abdominal muscles but in front of the peritoneum, through three small ports.</p>
                    </div>
                </div>

                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug">What is the advantage of retrorectus mesh placement?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <div class="h-px bg-slate-200 mb-4"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed">Very securely. Abdominal pressure pushes retrorectus mesh flat against the muscle wall rather than displacing it, which gives strong reinforcement and keeps recurrence very low.</p>
                    </div>
                </div>

                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug">When is eTEP combined with TAR?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <div class="h-px bg-slate-200 mb-4"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed">TAR is added for very large ventral or incisional hernias where the muscle edges have separated widely. Releasing the lateral layer lets the midline muscles close without tension.</p>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-4">
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug">What is the recovery timeline after eTEP repair?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <div class="h-px bg-slate-200 mb-4"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed">Hospital stay is one to three days and desk work resumes in two to three weeks. Core training, running and lifting above five kilograms wait six to eight weeks.</p>
                    </div>
                </div>

                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug">Is eTEP a laparoscopic or robotic procedure?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <div class="h-px bg-slate-200 mb-4"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed">Both. Standard eTEP works well laparoscopically. For complex cases involving transversus release, robotic instruments add precision, three-dimensional vision and greater wrist articulation.</p>
                    </div>
                </div>

                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug">Who is the ideal candidate for an eTEP Rives-Stoppa repair?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <div class="h-px bg-slate-200 mb-4"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed">Patients with large midline ventral hernias, complex incisional hernias after a failed scar, or recurrent hernias following open suture repair. It avoids a large painful open incision.</p>
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
            Do You Have a Complex Hernia?
        </h2>
        <p class="text-lg text-slate-200 leading-relaxed mb-8 max-w-2xl mx-auto">
            Dr. Kumar of Billroth Hospitals specializes in advanced hernia reconstruction including eTEP. If you've been told your hernia is too complex, schedule an expert evaluation.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-8 py-4 rounded-full transition hover:scale-105 shadow-lg shadow-accent/20">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                Book Consultation
            </a>
            <a href="<?= $base_path ?>treatment/recovery" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-bold px-8 py-4 rounded-full border border-white/30 transition hover:scale-105">
                View Recovery Guide
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
