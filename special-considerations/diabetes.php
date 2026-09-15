<?php
$page_title = 'Hernia Surgery with Diabetes | Dr. Kumar of Billroth Hospitals Chennai';
$page_description = 'How diabetes affects hernia surgery and wound healing, what blood sugar control is needed beforehand, and how infection risk is managed during recovery.';
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
                Hernia &amp; <span class="text-accent">Diabetes</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Expert guidance for diabetic patients undergoing hernia surgery. Learn how proper blood sugar management leads to successful outcomes.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#management" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-6 py-3 rounded-full transition">
                    Explore Management Tips
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7H3"/></svg>
                </a>
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-6 py-3 rounded-full border border-white/30 transition">
                    Book Consultation
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Diabetes and Hernia Connection -->
<section id="management" class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">The Connection</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                    How Diabetes Affects Hernia
                </h2>
                <p class="text-slate-600 leading-relaxed mb-5">
                    Diabetes creates unique challenges for hernia surgery and recovery. Elevated blood sugar levels affect wound healing, increase infection risk, and can complicate surgical outcomes.
                </p>
                <p class="text-slate-600 leading-relaxed mb-8">
                    Understanding these connections helps patients and surgeons plan for the safest, most successful outcomes through careful diabetes management.
                </p>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-12 h-12 rounded-lg bg-red-100 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Impaired Wound Healing</h4>
                            <p class="text-sm text-slate-600">High blood sugar damages blood vessels, reducing oxygen and nutrients reaching surgical wounds.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-12 h-12 rounded-lg bg-amber-100 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Increased Infection Risk</h4>
                            <p class="text-sm text-slate-600">Elevated glucose creates an environment where bacteria thrive, increasing surgical site infection rates.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-12 h-12 rounded-lg bg-purple-100 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Microvascular Complications</h4>
                            <p class="text-sm text-slate-600">Long-term diabetes can affect small blood vessels, impacting tissue health and recovery capacity.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="bg-white rounded-3xl shadow-2xl p-8 border border-slate-100">
                    <!-- Inline SVG: Diabetes and Surgery -->
                    <svg class="w-full h-auto mb-6" viewBox="0 0 400 280" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Background -->
                        <rect x="20" y="20" width="360" height="240" rx="12" fill="#fef3c7"/>

                        <!-- Title -->
                        <text x="200" y="50" fill="#92400e" font-size="14" font-weight="700" text-anchor="middle">Blood Sugar Impact on Surgery</text>

                        <!-- Blood sugar meter illustration -->
                        <rect x="50" y="70" width="140" height="180" rx="10" fill="#fff" stroke="#f59e0b" stroke-width="2"/>

                        <!-- Meter display -->
                        <rect x="70" y="90" width="100" height="60" rx="4" fill="#1e293b"/>
                        <text x="120" y="125" fill="#ef4444" font-size="28" font-weight="800" text-anchor="middle">180</text>
                        <text x="120" y="142" fill="#94a3b8" font-size="10" text-anchor="middle">mg/dL</text>

                        <!-- Meter scale -->
                        <line x1="60" y1="165" x2="180" y2="165" stroke="#d1d5db" stroke-width="8" stroke-linecap="round"/>
                        <circle cx="80" cy="165" r="6" fill="#22c55e"/>
                        <circle cx="120" cy="165" r="6" fill="#eab308"/>
                        <circle cx="160" cy="165" r="6" fill="#ef4444"/>

                        <text x="80" y="185" fill="#22c55e" font-size="9" text-anchor="middle">70</text>
                        <text x="120" y="185" fill="#eab308" font-size="9" text-anchor="middle">140</text>
                        <text x="160" y="185" fill="#ef4444" font-size="9" text-anchor="middle">180</text>

                        <!-- Labels -->
                        <text x="120" y="205" fill="#6b7280" font-size="8" text-anchor="middle">Low</text>
                        <text x="120" y="215" fill="#6b7280" font-size="8" text-anchor="middle">Target</text>
                        <text x="120" y="225" fill="#6b7280" font-size="8" text-anchor="middle">High</text>
                        <text x="120" y="240" fill="#92400e" font-size="9" font-weight="600" text-anchor="middle">Surgery Target: 80-140</text>

                        <!-- Surgery illustration -->
                        <rect x="210" y="70" width="160" height="180" rx="10" fill="#fff" stroke="#0e7490" stroke-width="2"/>

                        <text x="290" y="95" fill="#0e7490" font-size="11" font-weight="600" text-anchor="middle">Good Control</text>

                        <!-- Checklist -->
                        <circle cx="235" cy="120" r="5" fill="#22c55e"/>
                        <text x="250" y="124" fill="#374151" font-size="9">HbA1c &lt;7%</text>

                        <circle cx="235" cy="145" r="5" fill="#22c55e"/>
                        <text x="250" y="149" fill="#374151" font-size="9">Stable sugars</text>

                        <circle cx="235" cy="170" r="5" fill="#22c55e"/>
                        <text x="250" y="174" fill="#374151" font-size="9">Good nutrition</text>

                        <circle cx="235" y="195" r="5" fill="#22c55e"/>
                        <text x="250" y="199" fill="#374151" font-size="9">Medication optimized</text>

                        <!-- Success indicator -->
                        <rect x="230" y="215" width="120" height="25" rx="6" fill="#22c55e"/>
                        <text x="290" y="232" fill="white" font-size="11" font-weight="600" text-anchor="middle">Optimal Outcomes</text>
                    </svg>

                    <div class="mt-6 p-4 bg-emerald-50 rounded-xl border border-emerald-200">
                        <p class="text-sm text-emerald-800 font-medium">
                            <strong>Goal:</strong> Maintain blood sugar between 80-140 mg/dL before surgery. Well-controlled diabetes leads to outcomes comparable to non-diabetic patients.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blood Sugar Management -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Pre-Surgery Planning
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Blood Sugar <span class="text-brand-700">Management</span>
            </h2>
            <p class="text-slate-600 text-lg">Proper preparation is key to successful surgery and recovery for diabetic patients.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gradient-to-br from-brand-50 to-cyan-50 rounded-2xl p-6 border border-brand-200">
                <div class="w-14 h-14 rounded-xl bg-brand-100 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-3">HbA1c Testing</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                    Your hemoglobin A1c reflects average blood sugar over 2-3 months. Target below 7% for surgery, ideally below 6.5%.
                </p>
                <div class="bg-white rounded-lg p-3 border border-brand-200">
                    <div class="text-xs text-slate-500 mb-1">Target HbA1c</div>
                    <div class="text-xl font-bold text-brand-700">&lt;7.0%</div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl p-6 border border-amber-200">
                <div class="w-14 h-14 rounded-xl bg-amber-100 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-3">Pre-Op Timeline</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                    If HbA1c is high, work with your endocrinologist for 3-6 months to optimize control before elective hernia surgery.
                </p>
                <div class="bg-white rounded-lg p-3 border border-amber-200">
                    <div class="text-xs text-slate-500 mb-1">Planning Window</div>
                    <div class="text-xl font-bold text-amber-600">3-6 Months</div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-emerald-50 to-green-50 rounded-2xl p-6 border border-emerald-200">
                <div class="w-14 h-14 rounded-xl bg-emerald-100 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-3">Medication Review</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                    Some diabetes medications need adjustment before surgery. Metformin may be continued, but SGLT2 inhibitors may need to be stopped.
                </p>
                <div class="bg-white rounded-lg p-3 border border-emerald-200">
                    <div class="text-xs text-slate-500 mb-1">Consultation</div>
                    <div class="text-xl font-bold text-emerald-600">Required</div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-purple-50 to-violet-50 rounded-2xl p-6 border border-purple-200">
                <div class="w-14 h-14 rounded-xl bg-purple-100 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-3">Nutrition Planning</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                    Work with a dietitian to optimize nutrition. High-protein diet supports wound healing while managing blood sugar.
                </p>
                <div class="bg-white rounded-lg p-3 border border-purple-200">
                    <div class="text-xs text-slate-500 mb-1">Protein Goal</div>
                    <div class="text-xl font-bold text-purple-600">1.2-1.5g/kg</div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-rose-50 to-pink-50 rounded-2xl p-6 border border-rose-200">
                <div class="w-14 h-14 rounded-xl bg-rose-100 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-3">Blood Sugar Monitoring</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                    Check blood sugar more frequently in the weeks before surgery. Keep a log to share with your surgical team.
                </p>
                <div class="bg-white rounded-lg p-3 border border-rose-200">
                    <div class="text-xs text-slate-500 mb-1">Pre-Meal Target</div>
                    <div class="text-xl font-bold text-rose-600">80-130 mg/dL</div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-slate-50 to-gray-100 rounded-2xl p-6 border border-slate-300">
                <div class="w-14 h-14 rounded-xl bg-slate-200 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-3">Coordinate Care</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                    Ensure your endocrinologist, primary care physician, and surgeon are all communicating about your diabetes management plan.
                </p>
                <div class="bg-white rounded-lg p-3 border border-slate-300">
                    <div class="text-xs text-slate-500 mb-1">Team Approach</div>
                    <div class="text-xl font-bold text-slate-600">Essential</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Healing Considerations -->
<section class="py-16 md:py-24 bg-brand-950 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur px-4 py-1.5 rounded-full text-sm font-medium mb-4">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                Recovery Insights
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold mb-4">
                Healing <span class="text-accent">Considerations</span>
            </h2>
            <p class="text-slate-300 text-lg">Understanding what to expect during recovery as a diabetic patient.</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12">
            <div class="space-y-6">
                <div class="bg-white/5 backdrop-blur rounded-2xl p-6 border border-white/10">
                    <h3 class="font-bold text-lg text-white mb-4 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg bg-emerald-500/30 flex items-center justify-center text-emerald-400 font-bold">1</span>
                        Enhanced Monitoring
                    </h3>
                    <p class="text-slate-300 text-sm leading-relaxed mb-4">
                        Blood sugar will be monitored more frequently after surgery, often every 4-6 hours. This helps catch and address any fluctuations quickly.
                    </p>
                    <div class="bg-emerald-500/20 rounded-lg p-3">
                        <p class="text-emerald-300 text-xs">Expect: More finger pricks and potential IV insulin if needed temporarily</p>
                    </div>
                </div>

                <div class="bg-white/5 backdrop-blur rounded-2xl p-6 border border-white/10">
                    <h3 class="font-bold text-lg text-white mb-4 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg bg-amber-500/30 flex items-center justify-center text-amber-400 font-bold">2</span>
                        Extended Recovery Time
                    </h3>
                    <p class="text-slate-300 text-sm leading-relaxed mb-4">
                        Diabetic patients may need additional time for wound healing. Plan for a slightly longer recovery timeline compared to non-diabetic patients.
                    </p>
                    <div class="bg-amber-500/20 rounded-lg p-3">
                        <p class="text-amber-300 text-xs">Average: 1-2 additional weeks for complete wound healing</p>
                    </div>
                </div>

                <div class="bg-white/5 backdrop-blur rounded-2xl p-6 border border-white/10">
                    <h3 class="font-bold text-lg text-white mb-4 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg bg-brand-500/30 flex items-center justify-center text-brand-400 font-bold">3</span>
                        Infection Vigilance
                    </h3>
                    <p class="text-slate-300 text-sm leading-relaxed mb-4">
                        Be alert for signs of infection: increased redness, warmth, swelling, drainage, or fever. Report these immediately to your care team.
                    </p>
                    <div class="bg-brand-500/20 rounded-lg p-3">
                        <p class="text-brand-300 text-xs">Prevention: Keep wound clean, dry, and follow all care instructions</p>
                    </div>
                </div>
            </div>

            <div>
                <!-- Inline SVG: Healing Timeline -->
                <svg class="w-full h-auto" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Background -->
                    <rect x="20" y="20" width="360" height="360" rx="16" fill="#1e293b" stroke="#334155" stroke-width="2"/>

                    <!-- Title -->
                    <text x="200" y="50" fill="white" font-size="14" font-weight="700" text-anchor="middle">Diabetic Recovery Timeline</text>

                    <!-- Timeline -->
                    <line x1="70" y1="90" x2="330" y2="90" stroke="#475569" stroke-width="3"/>

                    <!-- Week markers -->
                    <circle cx="70" cy="90" r="12" fill="#0e7490" stroke="#0891b2" stroke-width="2"/>
                    <text x="70" y="94" fill="white" font-size="8" font-weight="600" text-anchor="middle">W1</text>

                    <circle cx="145" cy="90" r="12" fill="#0891b2" stroke="#06b6d4" stroke-width="2"/>
                    <text x="145" y="94" fill="white" font-size="8" font-weight="600" text-anchor="middle">W2</text>

                    <circle cx="220" cy="90" r="12" fill="#06b6d4" stroke="#22d3ee" stroke-width="2"/>
                    <text x="220" y="94" fill="#164e63" font-size="8" font-weight="600" text-anchor="middle">W4</text>

                    <circle cx="295" cy="90" r="12" fill="#22d3ee" stroke="#67e8f9" stroke-width="2"/>
                    <text x="295" y="94" fill="#164e63" font-size="8" font-weight="600" text-anchor="middle">W6</text>

                    <circle cx="330" cy="90" r="8" fill="#22c55e"/>
                    <text x="330" y="94" fill="white" font-size="7" font-weight="600" text-anchor="middle">Done</text>

                    <!-- Healing phases -->
                    <rect x="40" y="115" width="320" height="260" rx="8" fill="#0e7490" fill-opacity="0.1" stroke="#0e7490" stroke-width="1"/>

                    <text x="200" y="140" fill="#0e7490" font-size="11" font-weight="600" text-anchor="middle">Recovery Milestones</text>

                    <!-- Week 1 -->
                    <rect x="50" y="155" width="70" height="55" rx="6" fill="#fff" stroke="#0e7490" stroke-width="1"/>
                    <text x="85" y="175" fill="#0e7490" font-size="9" font-weight="600" text-anchor="middle">Week 1</text>
                    <text x="85" y="190" fill="#6b7280" font-size="7" text-anchor="middle">Sugar monitoring</text>
                    <text x="85" y="202" fill="#6b7280" font-size="7" text-anchor="middle">Wound care</text>

                    <!-- Week 2 -->
                    <rect x="130" y="155" width="70" height="55" rx="6" fill="#fff" stroke="#0891b2" stroke-width="1"/>
                    <text x="165" y="175" fill="#0891b2" font-size="9" font-weight="600" text-anchor="middle">Week 2</text>
                    <text x="165" y="190" fill="#6b7280" font-size="7" text-anchor="middle">Stitches out</text>
                    <text x="165" y="202" fill="#6b7280" font-size="7" text-anchor="middle">Light activity</text>

                    <!-- Week 4 -->
                    <rect x="210" y="155" width="70" height="55" rx="6" fill="#fff" stroke="#06b6d4" stroke-width="1"/>
                    <text x="245" y="175" fill="#06b6d4" font-size="9" font-weight="600" text-anchor="middle">Week 4</text>
                    <text x="245" y="190" fill="#6b7280" font-size="7" text-anchor="middle">Driving OK</text>
                    <text x="245" y="202" fill="#6b7280" font-size="7" text-anchor="middle">Desk work</text>

                    <!-- Week 6 -->
                    <rect x="290" y="155" width="70" height="55" rx="6" fill="#fff" stroke="#22d3ee" stroke-width="1"/>
                    <text x="325" y="175" fill="#22d3ee" font-size="9" font-weight="600" text-anchor="middle">Week 6</text>
                    <text x="325" y="190" fill="#6b7280" font-size="7" text-anchor="middle">Most activities</text>
                    <text x="325" y="202" fill="#6b7280" font-size="7" text-anchor="middle">Resume</text>

                    <!-- Key points -->
                    <rect x="50" y="225" width="310" height="120" rx="6" fill="#f59e0b" fill-opacity="0.1" stroke="#f59e0b" stroke-width="1"/>
                    <text x="205" y="250" fill="#f59e0b" font-size="10" font-weight="600" text-anchor="middle">Diabetic-Specific Tips</text>

                    <circle cx="70" cy="275" r="4" fill="#f59e0b"/>
                    <text x="85" y="279" fill="#e2e8f0" font-size="9">Maintain stable blood sugar levels</text>

                    <circle cx="70" cy="300" r="4" fill="#f59e0b"/>
                    <text x="85" y="304" fill="#e2e8f0" font-size="9">Protein-rich diet accelerates healing</text>

                    <circle cx="70" cy="325" r="4" fill="#f59e0b"/>
                    <text x="85" y="329" fill="#e2e8f0" font-size="9">Report any wound changes immediately</text>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Long-term Management -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Long-Term Success
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Long-Term <span class="text-brand-700">Management</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-2xl p-8 shadow-lg border border-slate-100">
                <h3 class="font-display text-2xl font-bold text-slate-900 mb-6">Benefits of Good Control</h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Reduced Recurrence Risk</h4>
                            <p class="text-slate-600 text-sm">Well-controlled diabetes lowers the risk of hernia coming back after repair.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Better Wound Healing</h4>
                            <p class="text-slate-600 text-sm">Optimal blood sugar promotes faster, stronger tissue repair.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Fewer Complications</h4>
                            <p class="text-slate-600 text-sm">Reduced rates of infection, seroma, and other post-surgical issues.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Overall Health Improvement</h4>
                            <p class="text-slate-600 text-sm">Managing diabetes benefits your entire body, not just surgical outcomes.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-slate-100">
                <h3 class="font-display text-2xl font-bold text-slate-900 mb-6">Ongoing Care Tips</h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center shrink-0">
                            <span class="text-brand-700 font-bold text-sm">1</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Continue Monitoring</h4>
                            <p class="text-slate-600 text-sm">Keep tracking blood sugar regularly, especially during recovery and stress.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center shrink-0">
                            <span class="text-brand-700 font-bold text-sm">2</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Regular Check-ups</h4>
                            <p class="text-slate-600 text-sm">See your endocrinologist and surgeon for follow-up appointments as recommended.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center shrink-0">
                            <span class="text-brand-700 font-bold text-sm">3</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Maintain a Healthy Weight</h4>
                            <p class="text-slate-600 text-sm">Weight management helps control diabetes and reduces strain on the abdominal wall.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center shrink-0">
                            <span class="text-brand-700 font-bold text-sm">4</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Report Concerns Early</h4>
                            <p class="text-slate-600 text-sm">Don't wait - contact your care team if you notice any changes or have questions.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 md:py-20 bg-gradient-to-br from-brand-700 via-brand-800 to-slate-900 text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-display text-3xl md:text-4xl font-bold mb-4">
            Expert Care for Diabetic Patients
        </h2>
        <p class="text-brand-100 text-lg mb-8 max-w-2xl mx-auto">
            Dr. Kumar of Billroth Hospitals has extensive experience treating diabetic patients with hernia conditions. Proper planning and coordination ensure excellent outcomes.
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