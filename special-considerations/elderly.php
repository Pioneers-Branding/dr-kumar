<?php
$page_title = 'Hernia Surgery for Elderly Patients | Dr. Kumar of Billroth Hospitals Chennai';
$page_description = 'Age alone rarely rules out hernia repair. How Dr. Kumar of Billroth Hospitals assesses fitness for anesthesia and plans safer, minimally invasive surgery for older patients.';
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
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur px-4 py-2 rounded-full text-sm font-medium mb-6">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Special Considerations
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                Hernia &amp; <span class="text-accent">Elderly Patients</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Specialized surgical care tailored for older adults, combining advanced techniques with comprehensive assessment for optimal outcomes and safety.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#assessment" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-6 py-3 rounded-full transition">
                    Explore Assessment Process
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7H3"/></svg>
                </a>
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-6 py-3 rounded-full border border-white/30 transition">
                    Book Consultation
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Why Elderly Section -->
<section id="assessment" class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Understanding the Challenge
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Why Elderly Patients <span class="text-brand-700">Need Special Care</span>
            </h2>
            <p class="text-slate-600 text-lg">As we age, surgical decisions become more complex. Understanding the unique considerations helps in making informed choices.</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">
            <div>
                <div class="bg-white rounded-3xl shadow-2xl p-8 border border-slate-100 mb-8">
                    <!-- Inline SVG: Elderly Patient Assessment -->
                    <svg class="w-full h-auto mb-6" viewBox="0 0 400 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Background -->
                        <rect x="10" y="10" width="380" height="230" rx="12" fill="#f8fafc"/>

                        <!-- Title -->
                        <text x="200" y="40" fill="#334155" font-size="14" font-weight="700" text-anchor="middle">Comprehensive Pre-Op Assessment</text>

                        <!-- Central figure - elderly patient -->
                        <circle cx="200" cy="120" r="35" fill="#cffafe" stroke="#0e7490" stroke-width="2"/>
                        <circle cx="200" cy="110" r="18" fill="#e2e8f0"/>
                        <path d="M175 130 Q200 145 225 130" stroke="#94a3b8" stroke-width="2" fill="none"/>

                        <!-- Assessment rings -->
                        <circle cx="200" cy="120" r="55" stroke="#0e7490" stroke-width="1.5" stroke-dasharray="4 2"/>
                        <circle cx="200" cy="120" r="75" stroke="#f59e0b" stroke-width="1.5" stroke-dasharray="4 2"/>

                        <!-- Assessment points -->
                        <circle cx="145" cy="85" r="20" fill="#fff" stroke="#0e7490" stroke-width="1.5"/>
                        <text x="145" y="88" fill="#0e7490" font-size="16" font-weight="600" text-anchor="middle">1</text>
                        <text x="145" y="115" fill="#64748b" font-size="8" text-anchor="middle">Cardiac</text>

                        <circle cx="255" cy="85" r="20" fill="#fff" stroke="#0e7490" stroke-width="1.5"/>
                        <text x="255" y="88" fill="#0e7490" font-size="16" font-weight="600" text-anchor="middle">2</text>
                        <text x="255" y="115" fill="#64748b" font-size="8" text-anchor="middle">Pulmonary</text>

                        <circle cx="145" cy="165" r="20" fill="#fff" stroke="#f59e0b" stroke-width="1.5"/>
                        <text x="145" y="168" fill="#f59e0b" font-size="16" font-weight="600" text-anchor="middle">3</text>
                        <text x="145" y="195" fill="#64748b" font-size="8" text-anchor="middle">Mobility</text>

                        <circle cx="255" cy="165" r="20" fill="#fff" stroke="#f59e0b" stroke-width="1.5"/>
                        <text x="255" y="168" fill="#f59e0b" font-size="16" font-weight="600" text-anchor="middle">4</text>
                        <text x="255" y="195" fill="#64748b" font-size="8" text-anchor="middle">Medications</text>

                        <!-- Connecting lines -->
                        <line x1="165" y1="95" x2="175" y2="105" stroke="#0e7490" stroke-width="1"/>
                        <line x1="225" y1="95" x2="225" y2="105" stroke="#0e7490" stroke-width="1"/>
                        <line x1="165" y1="145" x2="175" y2="135" stroke="#f59e0b" stroke-width="1"/>
                        <line x1="225" y1="145" x2="225" y2="135" stroke="#f59e0b" stroke-width="1"/>

                        <!-- Bottom note -->
                        <rect x="120" y="215" width="160" height="20" rx="4" fill="#0e7490" fill-opacity="0.1" stroke="#0e7490" stroke-width="1"/>
                        <text x="200" y="229" fill="#0e7490" font-size="9" font-weight="600" text-anchor="middle">Individualized Risk Stratification</text>
                    </svg>

                    <div class="mt-4 p-4 bg-brand-50 rounded-xl border border-brand-100">
                        <p class="text-sm text-brand-800 font-medium">
                            <strong>Dr. Kumar of Billroth Hospitals&rsquo; Approach:</strong> Every elderly patient undergoes thorough cardiac, pulmonary, and functional assessment before surgery to ensure maximum safety.
                        </p>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="flex items-start gap-4 p-6 bg-white rounded-xl shadow-sm border border-slate-100">
                    <div class="w-14 h-14 rounded-xl bg-brand-100 flex items-center justify-center shrink-0">
                        <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-slate-900 text-lg mb-2">Cardiovascular Considerations</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Age-related cardiovascular changes require careful evaluation. Dr. Kumar of Billroth Hospitals works with cardiologists to optimize heart health before surgery, ensuring safe anesthesia and recovery.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-6 bg-white rounded-xl shadow-sm border border-slate-100">
                    <div class="w-14 h-14 rounded-xl bg-amber-100 flex items-center justify-center shrink-0">
                        <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-slate-900 text-lg mb-2">Pulmonary Function</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Older lungs have reduced capacity and reserve. Pre-operative breathing exercises and pulmonary optimization reduce post-operative respiratory complications significantly.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-6 bg-white rounded-xl shadow-sm border border-slate-100">
                    <div class="w-14 h-14 rounded-xl bg-emerald-100 flex items-center justify-center shrink-0">
                        <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-slate-900 text-lg mb-2">Medication Management</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Many elderly patients take blood thinners,血压 medications, or diabetes drugs. Careful review and temporary adjustments ensure surgical safety without compromising underlying conditions.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-6 bg-white rounded-xl shadow-sm border border-slate-100">
                    <div class="w-14 h-14 rounded-xl bg-purple-100 flex items-center justify-center shrink-0">
                        <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-slate-900 text-lg mb-2">Mobility & Fall Risk</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Post-surgery mobility assessment helps prevent falls and ensures adequate support during recovery. Physical therapy integration accelerates rehabilitation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Age-Related Risk Factors -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Risk Factors
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Age-Related <span class="text-brand-700">Risk Factors</span>
            </h2>
            <p class="text-slate-600 text-lg">Understanding these factors helps in preparing for surgery and managing expectations.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gradient-to-br from-slate-50 to-red-50 rounded-2xl p-6 border border-slate-200">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                    </div>
                    <h3 class="font-bold text-lg text-slate-900">Slower Healing</h3>
                </div>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Tissue repair and immune response diminish with age, requiring extended recovery time and closer monitoring for wound complications.
                </p>
            </div>

            <div class="bg-gradient-to-br from-slate-50 to-amber-50 rounded-2xl p-6 border border-slate-200">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full bg-amber-100 flex items-center justify-center">
                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="font-bold text-lg text-slate-900">Longer Recovery</h3>
                </div>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Metabolic changes mean elderly patients may need 1.5-2x the recovery time compared to younger patients for equivalent procedures.
                </p>
            </div>

            <div class="bg-gradient-to-br from-slate-50 to-purple-50 rounded-2xl p-6 border border-slate-200">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    </div>
                    <h3 class="font-bold text-lg text-slate-900">Co-morbidities</h3>
                </div>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Multiple health conditions like diabetes, hypertension, and heart disease add complexity to surgical planning and post-op care.
                </p>
            </div>

            <div class="bg-gradient-to-br from-slate-50 to-cyan-50 rounded-2xl p-6 border border-slate-200">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full bg-cyan-100 flex items-center justify-center">
                        <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="font-bold text-lg text-slate-900">Anesthesia Risk</h3>
                </div>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Increased sensitivity to anesthetic agents requires careful dosage calculations and close monitoring during surgery.
                </p>
            </div>

            <div class="bg-gradient-to-br from-slate-50 to-teal-50 rounded-2xl p-6 border border-slate-200">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full bg-teal-100 flex items-center justify-center">
                        <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="font-bold text-lg text-slate-900">Infection Risk</h3>
                </div>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Diminished immune function increases susceptibility to post-operative infections, requiring vigilant monitoring and prophylactic measures.
                </p>
            </div>

            <div class="bg-gradient-to-br from-slate-50 to-rose-50 rounded-2xl p-6 border border-slate-200">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full bg-rose-100 flex items-center justify-center">
                        <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
                    </div>
                    <h3 class="font-bold text-lg text-slate-900">Sleep Quality</h3>
                </div>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Age-related sleep changes affect healing. Pain and discomfort can further disrupt sleep, impacting recovery trajectories.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Minimally Invasive Benefits -->
<section class="py-16 md:py-24 bg-brand-950 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur px-4 py-1.5 rounded-full text-sm font-medium mb-4">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                Preferred Approach
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold mb-4">
                Benefits of <span class="text-accent">Minimally Invasive Surgery</span>
            </h2>
            <p class="text-slate-300 text-lg">For elderly patients, minimally invasive techniques offer significant advantages that can transform surgical outcomes.</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <!-- Inline SVG: Laparoscopic Advantages -->
                <svg class="w-full h-auto" viewBox="0 0 400 350" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Background -->
                    <rect x="20" y="20" width="360" height="310" rx="16" fill="#1e293b" stroke="#334155" stroke-width="2"/>

                    <!-- Title -->
                    <text x="200" y="50" fill="white" font-size="14" font-weight="700" text-anchor="middle">MIS vs Open Surgery</text>

                    <!-- Comparison bars -->
                    <text x="60" y="85" fill="#94a3b8" font-size="10">Recovery Time</text>
                    <rect x="150" y="75" width="50" height="16" rx="3" fill="#22c55e"/>
                    <text x="175" y="87" fill="white" font-size="9" font-weight="600" text-anchor="middle">1-2 wks</text>
                    <rect x="220" y="75" width="130" height="16" rx="3" fill="#ef4444"/>
                    <text x="285" y="87" fill="white" font-size="9" font-weight="600" text-anchor="middle">4-6 weeks</text>

                    <text x="60" y="115" fill="#94a3b8" font-size="10">Pain Level</text>
                    <rect x="150" y="105" width="60" height="16" rx="3" fill="#22c55e"/>
                    <text x="180" y="117" fill="white" font-size="9" font-weight="600" text-anchor="middle">Minimal</text>
                    <rect x="220" y="105" width="130" height="16" rx="3" fill="#ef4444"/>
                    <text x="285" y="117" fill="white" font-size="9" font-weight="600" text-anchor="middle">Moderate</text>

                    <text x="60" y="145" fill="#94a3b8" font-size="10">Infection Risk</text>
                    <rect x="150" y="135" width="45" height="16" rx="3" fill="#22c55e"/>
                    <text x="172" y="147" fill="white" font-size="9" font-weight="600" text-anchor="middle">Low</text>
                    <rect x="220" y="135" width="130" height="16" rx="3" fill="#ef4444"/>
                    <text x="285" y="147" fill="white" font-size="9" font-weight="600" text-anchor="middle">Higher</text>

                    <text x="60" y="175" fill="#94a3b8" font-size="10">Hospital Stay</text>
                    <rect x="150" y="165" width="40" height="16" rx="3" fill="#22c55e"/>
                    <text x="170" y="177" fill="white" font-size="9" font-weight="600" text-anchor="middle">Day</text>
                    <rect x="220" y="165" width="130" height="16" rx="3" fill="#ef4444"/>
                    <text x="285" y="177" fill="white" font-size="9" font-weight="600" text-anchor="middle">3-5 days</text>

                    <!-- Key benefits section -->
                    <rect x="40" y="200" width="160" height="120" rx="8" fill="#0e7490" fill-opacity="0.2" stroke="#0e7490" stroke-width="1.5"/>
                    <text x="120" y="225" fill="#0e7490" font-size="11" font-weight="600" text-anchor="middle">MIS Benefits</text>

                    <circle cx="60" cy="250" r="4" fill="#0e7490"/>
                    <text x="75" y="254" fill="#cbd5e1" font-size="10">Smaller incisions</text>

                    <circle cx="60" cy="275" r="4" fill="#0e7490"/>
                    <text x="75" y="279" fill="#cbd5e1" font-size="10">Less blood loss</text>

                    <circle cx="60" cy="300" r="4" fill="#0e7490"/>
                    <text x="75" y="304" fill="#cbd5e1" font-size="10">Faster return to activity</text>

                    <!-- Elderly specific benefits -->
                    <rect x="220" y="200" width="140" height="120" rx="8" fill="#f59e0b" fill-opacity="0.2" stroke="#f59e0b" stroke-width="1.5"/>
                    <text x="290" y="225" fill="#f59e0b" font-size="11" font-weight="600" text-anchor="middle">Elderly Advantages</text>

                    <circle cx="240" cy="250" r="4" fill="#f59e0b"/>
                    <text x="255" y="254" fill="#cbd5e1" font-size="10">Reduced complications</text>

                    <circle cx="240" cy="275" r="4" fill="#f59e0b"/>
                    <text x="255" y="279" fill="#cbd5e1" font-size="10">Lower infection rates</text>

                    <circle cx="240" cy="300" r="4" fill="#f59e0b"/>
                    <text x="255" y="304" fill="#cbd5e1" font-size="10">Quick mobilization</text>
                </svg>
            </div>

            <div class="space-y-6">
                <div class="flex items-start gap-4 p-5 bg-white/5 backdrop-blur rounded-xl border border-white/10">
                    <div class="w-12 h-12 rounded-xl bg-brand-500/30 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-white text-lg mb-2">Reduced Trauma</h4>
                        <p class="text-slate-300 text-sm leading-relaxed">
                            Smaller incisions mean less disruption to muscles and tissues, reducing post-operative pain and allowing faster mobilization.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-5 bg-white/5 backdrop-blur rounded-xl border border-white/10">
                    <div class="w-12 h-12 rounded-xl bg-emerald-500/30 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-white text-lg mb-2">Lower Infection Rates</h4>
                        <p class="text-slate-300 text-sm leading-relaxed">
                            Minimally invasive surgery significantly reduces surgical site infections, a major concern for elderly patients with weaker immune systems.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-5 bg-white/5 backdrop-blur rounded-xl border border-white/10">
                    <div class="w-12 h-12 rounded-xl bg-purple-500/30 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-white text-lg mb-2">Shorter Hospital Stay</h4>
                        <p class="text-slate-300 text-sm leading-relaxed">
                            Many elderly patients can go home the same day or after one night, reducing risks of hospital-acquired infections and enabling faster recovery at home.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-5 bg-white/5 backdrop-blur rounded-xl border border-white/10">
                    <div class="w-12 h-12 rounded-xl bg-amber-500/30 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-white text-lg mb-2">Faster Return to Activity</h4>
                        <p class="text-slate-300 text-sm leading-relaxed">
                            Quicker recovery allows elderly patients to regain independence faster, reducing the risk of deconditioning and falls that can occur with prolonged bed rest.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pre-Operative Assessment -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Preparation
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Pre-Operative <span class="text-brand-700">Assessment Protocol</span>
            </h2>
            <p class="text-slate-600 text-lg">A thorough evaluation ensures the safest surgical experience for elderly patients.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-brand-50 rounded-bl-full"></div>
                <div class="relative">
                    <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                    </div>
                    <div class="text-3xl font-bold text-brand-700 mb-2">Step 1</div>
                    <h3 class="font-bold text-lg text-slate-900 mb-2">Medical History Review</h3>
                    <p class="text-slate-600 text-sm">Complete review of all conditions, previous surgeries, and current medications.</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-amber-50 rounded-bl-full"></div>
                <div class="relative">
                    <div class="w-12 h-12 rounded-xl bg-amber-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    </div>
                    <div class="text-3xl font-bold text-amber-600 mb-2">Step 2</div>
                    <h3 class="font-bold text-lg text-slate-900 mb-2">Cardiac Evaluation</h3>
                    <p class="text-slate-600 text-sm">ECG, echocardiogram if needed, and clearance from cardiologist for surgical fitness.</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-emerald-50 rounded-bl-full"></div>
                <div class="relative">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    </div>
                    <div class="text-3xl font-bold text-emerald-600 mb-2">Step 3</div>
                    <h3 class="font-bold text-lg text-slate-900 mb-2">Pulmonary Tests</h3>
                    <p class="text-slate-600 text-sm">Chest X-ray, pulmonary function tests, and breathing exercises to optimize lung health.</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-purple-50 rounded-bl-full"></div>
                <div class="relative">
                    <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <div class="text-3xl font-bold text-purple-600 mb-2">Step 4</div>
                    <h3 class="font-bold text-lg text-slate-900 mb-2">Anesthesia Planning</h3>
                    <p class="text-slate-600 text-sm">Discussion of anesthesia options, risks, and personalized pain management plan.</p>
                </div>
            </div>
        </div>

        <!-- Important Note -->
        <div class="mt-12 bg-gradient-to-r from-brand-700 to-brand-800 rounded-2xl p-8 text-white">
            <div class="flex flex-col md:flex-row items-center gap-6">
                <div class="shrink-0">
                    <svg class="w-16 h-16 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div>
                    <h3 class="font-display text-2xl font-bold mb-2">Important Consideration</h3>
                    <p class="text-brand-100 leading-relaxed">
                        Age alone is not a contraindication for hernia surgery. With proper assessment and planning, elderly patients can safely undergo hernia repair with excellent outcomes. The decision is based on overall health status, not chronological age. Dr. Kumar of Billroth Hospitals has successfully treated patients well into their 80s and 90s with appropriate precautions.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 md:py-20 bg-gradient-to-br from-brand-700 via-brand-800 to-slate-900 text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-display text-3xl md:text-4xl font-bold mb-4">
            Compassionate Care for Every Age
        </h2>
        <p class="text-brand-100 text-lg mb-8 max-w-2xl mx-auto">
            Dr. Kumar of Billroth Hospitals specializes in providing safe, effective hernia treatment for elderly patients with comprehensive pre-operative assessment and personalized care plans.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-full shadow-lg hover:shadow-xl transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                Book Consultation
            </a>
            <a href="<?= $base_path ?>special-considerations" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-8 py-4 rounded-full border border-white/30 transition">
                View All Special Considerations
            </a>
        </div>
    </div>
</section>

<!-- Floating Call Button -->
<a href="tel:<?= $site['phone_link'] ?>" class="fixed bottom-6 right-6 z-50 bg-brand-700 hover:bg-brand-800 text-white p-4 rounded-full shadow-2xl transition-transform hover:scale-110 flex items-center justify-center">
    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
</a>

<?php require __DIR__ . '/../includes/footer.php'; ?>