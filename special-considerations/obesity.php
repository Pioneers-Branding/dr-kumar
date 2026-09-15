<?php
$page_title = 'Hernia Repair with High BMI or Obesity | Dr. Kumar of Billroth Hospitals';
$page_description = 'Why a raised BMI makes hernia repair harder and recurrence more likely, and how Dr. Kumar of Billroth Hospitals prepares patients with obesity for safer keyhole surgery today.';
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
                Hernia &amp; <span class="text-accent">Obesity</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Understanding the complex relationship between obesity and hernia, and how weight management can improve your surgical outcomes and recovery.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#connection" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-6 py-3 rounded-full transition">
                    Understand the Connection
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7H3"/></svg>
                </a>
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-6 py-3 rounded-full border border-white/30 transition">
                    Book Consultation
                </a>
            </div>
        </div>
    </div>
</section>

<!-- The Connection Section -->
<section id="connection" class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">The Link</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                    How Obesity Affects Hernia
                </h2>
                <p class="text-slate-600 leading-relaxed mb-5">
                    Obesity is both a risk factor for developing hernias and a challenge when it comes to surgical repair. The increased intra-abdominal pressure from excess weight weakens the abdominal wall, making hernias more likely to develop and recur.
                </p>
                <p class="text-slate-600 leading-relaxed mb-8">
                    Understanding this relationship is crucial for effective treatment and long-term success. Dr. Kumar of Billroth Hospitals creates personalized treatment plans that address both the hernia and the underlying weight concerns.
                </p>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-12 h-12 rounded-lg bg-red-100 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Increased Intra-abdominal Pressure</h4>
                            <p class="text-sm text-slate-600">Excess weight creates constant pressure on the abdominal wall, weakening muscles and creating ideal conditions for hernia formation.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-12 h-12 rounded-lg bg-amber-100 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Fatty Tissue Weakness</h4>
                            <p class="text-sm text-slate-600">Adipose tissue is less vascular and heals poorly, increasing the risk of wound complications and recurrence.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-12 h-12 rounded-lg bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Higher Surgical Risks</h4>
                            <p class="text-sm text-slate-600">Obesity increases risks of infection, thrombosis, and cardiorespiratory complications during and after surgery.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="bg-white rounded-3xl shadow-2xl p-8 border border-slate-100">
                    <!-- Inline SVG Illustration: Obesity and Hernia -->
                    <svg class="w-full h-auto mb-6" viewBox="0 0 400 280" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Background circle -->
                        <circle cx="200" cy="140" r="100" fill="#f0fdfa" stroke="#0e7490" stroke-width="2"/>

                        <!-- Body silhouette showing obesity -->
                        <path d="M160 80 Q200 60 240 80 L250 140 Q260 200 240 240 L210 250 L200 240 L190 250 L160 240 Q140 200 150 140 Z" fill="#cffafe" stroke="#0e7490" stroke-width="2"/>

                        <!-- Hernia bulge -->
                        <ellipse cx="175" cy="160" rx="25" ry="20" fill="#f59e0b" stroke="#d97706" stroke-width="2"/>
                        <path d="M160 155 Q175 150 190 155" stroke="#92400e" stroke-width="1.5" fill="none"/>
                        <path d="M165 165 Q175 170 185 165" stroke="#92400e" stroke-width="1.5" fill="none"/>

                        <!-- Arrow pointing to hernia -->
                        <path d="M120 150 L145 158" stroke="#0e7490" stroke-width="3" stroke-linecap="round"/>
                        <circle cx="118" cy="150" r="4" fill="#0e7490"/>

                        <!-- Labels -->
                        <text x="95" y="145" fill="#334155" font-size="11" font-weight="600">Hernia</text>
                        <text x="95" y="158" fill="#64748b" font-size="9">Bulge Site</text>

                        <!-- Pressure arrows -->
                        <path d="M200 55 L200 45" stroke="#dc2626" stroke-width="2" stroke-linecap="round"/>
                        <path d="M185 60 L180 52" stroke="#dc2626" stroke-width="2" stroke-linecap="round"/>
                        <path d="M215 60 L220 52" stroke="#dc2626" stroke-width="2" stroke-linecap="round"/>
                        <text x="175" y="38" fill="#dc2626" font-size="10" font-weight="600">Pressure</text>

                        <!-- BMI indicator -->
                        <rect x="280" y="100" width="90" height="80" rx="8" fill="#fff7ed" stroke="#f59e0b" stroke-width="2"/>
                        <text x="325" y="125" fill="#92400e" font-size="12" font-weight="700" text-anchor="middle">BMI</text>
                        <text x="325" y="155" fill="#0e7490" font-size="24" font-weight="800" text-anchor="middle">&gt;30</text>
                        <text x="325" y="170" fill="#64748b" font-size="9" text-anchor="middle">High Risk</text>
                    </svg>

                    <div class="mt-6 p-4 bg-brand-50 rounded-xl border border-brand-100">
                        <p class="text-sm text-brand-800 font-medium">
                            <strong>Key Insight:</strong> Patients with BMI over 30 have significantly higher hernia recurrence rates and surgical complication risks. Weight optimization before surgery improves outcomes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Weight Management Before Surgery -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Pre-Surgery Preparation
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Weight Management <span class="text-brand-700">Before Surgery</span>
            </h2>
            <p class="text-slate-600 text-lg">Strategic weight loss before hernia surgery significantly improves outcomes and reduces complications.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-gradient-to-br from-slate-50 to-brand-50 rounded-2xl p-6 border border-slate-100">
                <div class="w-14 h-14 rounded-xl bg-brand-100 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-3">Set Realistic Goals</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Aim for 5-10% weight loss before surgery. Even modest reduction in BMI improves surgical outcomes and reduces risk.
                </p>
            </div>

            <div class="bg-gradient-to-br from-slate-50 to-amber-50 rounded-2xl p-6 border border-slate-100">
                <div class="w-14 h-14 rounded-xl bg-amber-100 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-3">Timeline Planning</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Allow 3-6 months for weight optimization before elective hernia surgery. This reduces surgical risks significantly.
                </p>
            </div>

            <div class="bg-gradient-to-br from-slate-50 to-emerald-50 rounded-2xl p-6 border border-slate-100">
                <div class="w-14 h-14 rounded-xl bg-emerald-100 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-3">Nutrition Focus</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    High-protein, low-carb diet with adequate hydration. Consider consultation with a nutritionist for personalized plan.
                </p>
            </div>

            <div class="bg-gradient-to-br from-slate-50 to-rose-50 rounded-2xl p-6 border border-slate-100">
                <div class="w-14 h-14 rounded-xl bg-rose-100 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-3">Light Exercise</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Low-impact activities like walking, swimming, or cycling. Avoid heavy lifting that could worsen the hernia.
                </p>
            </div>
        </div>

        <!-- BMI Chart -->
        <div class="mt-12 bg-gradient-to-br from-brand-50 to-cyan-50 rounded-2xl p-8 border border-brand-100">
            <h3 class="font-display text-2xl font-bold text-slate-900 mb-6 text-center">BMI Categories &amp; Surgery Risk</h3>
            <div class="grid md:grid-cols-4 gap-4">
                <div class="bg-white rounded-xl p-4 text-center shadow-sm">
                    <div class="text-sm text-slate-500 mb-2">Underweight</div>
                    <div class="text-2xl font-bold text-slate-700">&lt;18.5</div>
                    <div class="mt-2 text-xs text-slate-600">May need nutritional support</div>
                </div>
                <div class="bg-white rounded-xl p-4 text-center shadow-sm ring-2 ring-emerald-400">
                    <div class="text-sm text-slate-500 mb-2">Normal</div>
                    <div class="text-2xl font-bold text-emerald-700">18.5-24.9</div>
                    <div class="mt-2 text-xs text-emerald-600 font-medium">Optimal surgical risk</div>
                </div>
                <div class="bg-white rounded-xl p-4 text-center shadow-sm ring-2 ring-amber-400">
                    <div class="text-sm text-slate-500 mb-2">Overweight</div>
                    <div class="text-2xl font-bold text-amber-700">25-29.9</div>
                    <div class="mt-2 text-xs text-amber-600 font-medium">Moderate risk - weight loss helpful</div>
                </div>
                <div class="bg-white rounded-xl p-4 text-center shadow-sm ring-2 ring-red-400">
                    <div class="text-sm text-slate-500 mb-2">Obese</div>
                    <div class="text-2xl font-bold text-red-700">30+</div>
                    <div class="mt-2 text-xs text-red-600 font-medium">High risk - weight loss recommended</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Surgical Risks Section -->
<section class="py-16 md:py-24 bg-slate-900 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <span class="text-brand-400 font-semibold uppercase tracking-wider text-sm">Surgical Considerations</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold mt-3 mb-6">
                    Risks with <span class="text-accent">High BMI</span>
                </h2>
                <p class="text-slate-300 leading-relaxed mb-6">
                    Understanding surgical risks helps in making informed decisions. Dr. Kumar of Billroth Hospitals assesses each patient individually to determine the safest approach.
                </p>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-4 bg-white/5 rounded-xl border border-white/10">
                        <div class="w-10 h-10 rounded-lg bg-red-500/20 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white">Wound Infection</h4>
                            <p class="text-sm text-slate-400">Higher rates of surgical site infections due to reduced blood supply to fatty tissue.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white/5 rounded-xl border border-white/10">
                        <div class="w-10 h-10 rounded-lg bg-amber-500/20 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white">Seroma Formation</h4>
                            <p class="text-sm text-slate-400">Fluid accumulation under the skin is more common in obese patients post-surgery.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white/5 rounded-xl border border-white/10">
                        <div class="w-10 h-10 rounded-lg bg-purple-500/20 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white">Cardiovascular Strain</h4>
                            <p class="text-sm text-slate-400">Increased risk of cardiac and respiratory complications due to added strain on the heart and lungs.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white/5 rounded-xl border border-white/10">
                        <div class="w-10 h-10 rounded-lg bg-brand-500/20 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white">Hernia Recurrence</h4>
                            <p class="text-sm text-slate-400">Higher recurrence rates without proper weight management due to continued pressure on repair site.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative">
                <!-- Inline SVG: Risk Assessment -->
                <svg class="w-full h-auto" viewBox="0 0 400 350" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Background -->
                    <rect x="20" y="20" width="360" height="310" rx="16" fill="#1e293b" stroke="#334155" stroke-width="2"/>

                    <!-- Title -->
                    <text x="200" y="55" fill="white" font-size="16" font-weight="700" text-anchor="middle">Risk Assessment Matrix</text>

                    <!-- BMI Scale Bar -->
                    <rect x="50" y="75" width="300" height="25" rx="4" fill="#334155"/>
                    <rect x="50" y="75" width="100" height="25" rx="4" fill="#22c55e"/>
                    <rect x="150" y="75" width="100" height="25" fill="#eab308"/>
                    <rect x="250" y="75" width="100" height="25" rx="4" fill="#ef4444"/>

                    <text x="100" y="93" fill="white" font-size="10" text-anchor="middle">18.5-25</text>
                    <text x="200" y="93" fill="white" font-size="10" text-anchor="middle">25-30</text>
                    <text x="300" y="93" fill="white" font-size="10" text-anchor="middle">30+</text>

                    <!-- Risk Levels -->
                    <rect x="50" y="115" width="80" height="30" rx="4" fill="#22c55e/20" stroke="#22c55e" stroke-width="1.5"/>
                    <text x="90" y="134" fill="#22c55e" font-size="12" font-weight="600" text-anchor="middle">LOW</text>

                    <rect x="160" y="115" width="80" height="30" rx="4" fill="#eab308/20" stroke="#eab308" stroke-width="1.5"/>
                    <text x="200" y="134" fill="#eab308" font-size="12" font-weight="600" text-anchor="middle">MODERATE</text>

                    <rect x="270" y="115" width="80" height="30" rx="4" fill="#ef4444/20" stroke="#ef4444" stroke-width="1.5"/>
                    <text x="310" y="134" fill="#ef4444" font-size="12" font-weight="600" text-anchor="middle">HIGH</text>

                    <!-- Risk Factors List -->
                    <rect x="50" y="160" width="140" height="130" rx="8" fill="#0f172a" stroke="#334155" stroke-width="1"/>
                    <text x="120" y="185" fill="#94a3b8" font-size="11" text-anchor="middle">Risk Factors</text>

                    <circle cx="70" cy="205" r="4" fill="#ef4444"/>
                    <text x="85" y="209" fill="#cbd5e1" font-size="10">Infection Risk</text>

                    <circle cx="70" cy="230" r="4" fill="#eab308"/>
                    <text x="85" y="234" fill="#cbd5e1" font-size="10">Healing Issues</text>

                    <circle cx="70" cy="255" r="4" fill="#f97316"/>
                    <text x="85" y="259" fill="#cbd5e1" font-size="10">Recurrence</text>

                    <circle cx="70" cy="280" r="4" fill="#22c55e"/>
                    <text x="85" y="284" fill="#cbd5e1" font-size="10">Recovery Time</text>

                    <!-- Solutions Box -->
                    <rect x="210" y="160" width="140" height="130" rx="8" fill="#0f172a" stroke="#0e7490" stroke-width="1.5"/>
                    <text x="280" y="185" fill="#0e7490" font-size="11" font-weight="600" text-anchor="middle">Solutions</text>

                    <circle cx="230" cy="205" r="4" fill="#0e7490"/>
                    <text x="245" y="209" fill="#cbd5e1" font-size="10">Weight Loss Program</text>

                    <circle cx="230" cy="230" r="4" fill="#0e7490"/>
                    <text x="245" y="234" fill="#cbd5e1" font-size="10">MIS Techniques</text>

                    <circle cx="230" cy="255" r="4" fill="#0e7490"/>
                    <text x="245" y="259" fill="#cbd5e1" font-size="10">Enhanced Recovery</text>

                    <circle cx="230" cy="280" r="4" fill="#0e7490"/>
                    <text x="245" y="284" fill="#cbd5e1" font-size="10">Close Monitoring</text>

                    <!-- Bottom recommendation -->
                    <rect x="50" y="305" width="300" height="35" rx="6" fill="#0e7490" fill-opacity="0.2" stroke="#0e7490" stroke-width="1"/>
                    <text x="200" y="327" fill="#0e7490" font-size="11" font-weight="600" text-anchor="middle">Goal: BMI &lt;30 for optimal surgical outcomes</text>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Post-Surgery Weight Management -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Long-Term Success
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Post-Surgery Weight <span class="text-brand-700">Management</span>
            </h2>
            <p class="text-slate-600 text-lg">Sustained weight management after hernia repair is essential for preventing recurrence and maintaining optimal health.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full bg-brand-100 flex items-center justify-center">
                        <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="font-bold text-lg text-slate-900">Weeks 1-4</h3>
                </div>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Light walking as tolerated
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Protein-rich diet for healing
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Avoid strenuous activity
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Stay hydrated
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full bg-amber-100 flex items-center justify-center">
                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </div>
                    <h3 class="font-bold text-lg text-slate-900">Months 2-3</h3>
                </div>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-amber-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Gradually increase exercise
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-amber-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Begin structured weight loss
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-amber-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Strength training starts
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-amber-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Follow-up with surgeon
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="font-bold text-lg text-slate-900">Long-Term</h3>
                </div>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-emerald-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Maintain healthy weight
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-emerald-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Core strengthening exercises
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-emerald-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Annual check-ups
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-emerald-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Balanced nutrition lifestyle
                    </li>
                </ul>
            </div>
        </div>

        <!-- Key Points Box -->
        <div class="mt-12 bg-gradient-to-r from-brand-700 to-brand-800 rounded-2xl p-8 text-white">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="font-display text-2xl font-bold mb-4">Why Weight Management Matters</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Reduces hernia recurrence risk by up to 50%</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Improves wound healing and reduces complications</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Enhances overall quality of life and mobility</span>
                        </li>
                    </ul>
                </div>
                <div class="text-center">
                    <div class="bg-white/10 backdrop-blur rounded-xl p-6">
                        <svg class="w-16 h-16 mx-auto mb-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        <p class="text-lg font-semibold">Dr. Kumar of Billroth Hospitals&rsquo; Approach</p>
                        <p class="text-brand-200 text-sm mt-2">Comprehensive weight management support integrated with surgical care</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 md:py-20 bg-gradient-to-br from-brand-700 via-brand-800 to-slate-900 text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-display text-3xl md:text-4xl font-bold mb-4">
            Ready to Start Your Journey?
        </h2>
        <p class="text-brand-100 text-lg mb-8 max-w-2xl mx-auto">
            Get personalized guidance on hernia treatment and weight management. Schedule your consultation with Dr. Kumar of Billroth Hospitals today.
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