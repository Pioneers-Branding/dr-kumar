<?php
$page_title = 'Hernia Patient Resources and Guides | Dr. Kumar of Billroth Hospitals Chennai';
$page_description = 'Preparation checklists, post-operative instructions and recovery guides for the hernia surgery patients of Dr. Kumar of Billroth Hospitals in Chennai.';
require __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <defs>
                <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="currentColor" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#grid)"/>
        </svg>
    </div>
    <div class="max-w-7xl mx-auto px-4 relative">
        <nav class="text-sm mb-6 text-brand-200">
            <a href="<?= $site['url'] ?>" class="hover:text-white">Home</a>
            <span class="mx-2">/</span>
            <span>Resources</span>
            <span class="mx-2">/</span>
            <span class="text-white">Patient Resources</span>
        </nav>
        <h1 class="font-display text-4xl md:text-5xl font-bold mb-4">Patient Resources</h1>
        <p class="text-xl text-brand-100 max-w-2xl">Comprehensive guides, checklists, and information to help you prepare for and recover from hernia surgery.</p>
    </div>
</section>

<!-- Resources Grid -->
<section class="py-16 bg-slate-50">
    <div class="max-w-6xl mx-auto px-4">

        <!-- Hernia Symptom Checker Callout -->
        <div class="mb-12 bg-gradient-to-r from-brand-900 to-brand-950 text-white rounded-3xl p-8 md:p-10 shadow-lg border border-brand-800 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="max-w-xl">
                <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider mb-4 text-amber-300 border border-emerald-500/30">
                    Interactive Assessment
                </span>
                <h3 class="font-display text-2xl md:text-3xl font-bold mb-3">Interactive Hernia Symptom Checker</h3>
                <p class="text-brand-100 text-sm md:text-base leading-relaxed">Concerned about abdominal discomfort, a persistent ache, or a visible bulge? Use our self-assessment checker to evaluate your symptoms and see if a surgical consultation is recommended.</p>
            </div>
            <div class="shrink-0 w-full md:w-auto">
                <a href="symptom-checker" class="w-full md:w-auto text-center inline-flex items-center justify-center bg-gradient-to-r from-accent to-amber-500 hover:shadow-lg text-white font-bold px-8 py-4 rounded-xl shadow-md transition hover:scale-105 gap-2">
                    Start Symptom Checker
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>

        <!-- Hernia Symptom Spotter -->
        <div class="mb-16">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-14 h-14 rounded-2xl bg-cyan-600 text-white flex items-center justify-center">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-slate-800">Hernia Symptom Spotter</h2>
                    <p class="text-slate-600">Identify the signs and know when to consult a specialist</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 md:p-8">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Symptom 1 -->
                    <div class="p-5 rounded-xl bg-slate-50 border border-slate-100">
                        <span class="inline-block px-2.5 py-1 text-xs font-semibold bg-brand-100 text-brand-800 rounded-full mb-3">Visual Sign</span>
                        <h4 class="font-bold text-slate-800 mb-2">Visible Bulge or Lump</h4>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            A swelling under the skin in the groin or abdomen. It often increases in size when standing, coughing, or lifting, and may disappear when lying down.
                        </p>
                    </div>
                    <!-- Symptom 2 -->
                    <div class="p-5 rounded-xl bg-slate-50 border border-slate-100">
                        <span class="inline-block px-2.5 py-1 text-xs font-semibold bg-brand-100 text-brand-800 rounded-full mb-3">Sensory Sign</span>
                        <h4 class="font-bold text-slate-800 mb-2">Dull Ache or Burning</h4>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            A nagging ache, pulling, or burning sensation at the bulge site. This discomfort typically intensifies during heavy lifting, bending, or prolonged standing.
                        </p>
                    </div>
                    <!-- Symptom 3 -->
                    <div class="p-5 rounded-xl bg-slate-50 border border-slate-100">
                        <span class="inline-block px-2.5 py-1 text-xs font-semibold bg-brand-100 text-brand-800 rounded-full mb-3">Pressure Sign</span>
                        <h4 class="font-bold text-slate-800 mb-2">Feeling of Heaviness</h4>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            A continuous sensation of pressure, fullness, or weakness in the abdomen or groin, especially when straining or lifting weights.
                        </p>
                    </div>
                </div>

                <!-- Warning Callout -->
                <div class="mt-6 p-6 bg-red-50 rounded-xl border border-red-200 flex flex-col md:flex-row items-start gap-4">
                    <div class="w-12 h-12 rounded-lg bg-red-100 flex items-center justify-center shrink-0 text-red-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-red-950 mb-1">Emergency Warning Signs (Incarcerated / Strangulated Hernia)</h4>
                        <p class="text-sm text-red-800 leading-relaxed mb-2">
                            Seek immediate emergency medical attention if you experience: a bulge that turns dark/purple or cannot be gently pushed back, severe or worsening pain, nausea or vomiting, or inability to pass gas or have bowel movements.
                        </p>
                        <a href="<?= $base_path ?>emergency-hernia-care" class="text-xs font-bold text-red-700 hover:text-red-900 flex items-center gap-1">
                            Read Emergency Care Protocols →
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Prevention of Hernia -->
        <div class="mb-16">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-14 h-14 rounded-2xl bg-emerald-600 text-white flex items-center justify-center">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-slate-800">Prevention of Hernia</h2>
                    <p class="text-slate-600">Practical tips to protect and strengthen your abdominal wall</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 md:p-8">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Tip 1 -->
                    <div class="flex gap-4">
                        <div class="w-10 h-10 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800 mb-1">Lift Safely</h4>
                            <p class="text-xs text-slate-600 leading-relaxed">Always bend from your knees and lift using your leg muscles rather than bending your waist. Avoid lifting objects that are excessively heavy.</p>
                        </div>
                    </div>
                    <!-- Tip 2 -->
                    <div class="flex gap-4">
                        <div class="w-10 h-10 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800 mb-1">Manage Weight</h4>
                            <p class="text-xs text-slate-600 leading-relaxed">Maintaining a healthy BMI reduces persistent downward and outward pressure on the abdominal muscles and tissues.</p>
                        </div>
                    </div>
                    <!-- Tip 3 -->
                    <div class="flex gap-4">
                        <div class="w-10 h-10 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800 mb-1">High-Fiber Diet</h4>
                            <p class="text-xs text-slate-600 leading-relaxed">Eat fiber-rich foods and drink plenty of water to promote easy bowel movements. Straining during constipation increases groin pressure.</p>
                        </div>
                    </div>
                    <!-- Tip 4 -->
                    <div class="flex gap-4">
                        <div class="w-10 h-10 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800 mb-1">Stop Smoking</h4>
                            <p class="text-xs text-slate-600 leading-relaxed">Smoking causes chronic coughs which spike pressure in the abdomen, and nicotine degrades the collagen structures responsible for fascial strength.</p>
                        </div>
                    </div>
                    <!-- Tip 5 -->
                    <div class="flex gap-4">
                        <div class="w-10 h-10 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800 mb-1">Treat Chronic Cough</h4>
                            <p class="text-xs text-slate-600 leading-relaxed">Optimize respiratory issues such as asthma, COPD, or chronic bronchitis promptly to avoid constant abdominal pressure spikes.</p>
                        </div>
                    </div>
                    <!-- Tip 6 -->
                    <div class="flex gap-4">
                        <div class="w-10 h-10 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800 mb-1">Strengthen Core</h4>
                            <p class="text-xs text-slate-600 leading-relaxed">Engage in exercises that build abdominal muscle strength and structural integrity, supporting the organs naturally.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pre-Surgery Checklist -->
        <div class="mb-16">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-14 h-14 rounded-2xl bg-brand-700 text-white flex items-center justify-center">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-slate-800">Pre-Surgery Checklist</h2>
                    <p class="text-slate-600">Everything you need to do before your hernia surgery</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 md:p-8">
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="font-bold text-brand-700 mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            1-2 Weeks Before Surgery
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-slate-700">Complete all preoperative tests as instructed</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-slate-700">Review current medications with your surgeon</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-slate-700">Stop blood thinners as directed</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-slate-700">Arrange transportation for surgery day</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-slate-700">Plan for post-surgery care at home</span>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="font-bold text-brand-700 mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Day Before Surgery
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-slate-700">Do not eat or drink after midnight</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-slate-700">Prepare comfortable loose clothing</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-slate-700">Gather personal items for hospital stay</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-slate-700">Pack ID, insurance cards, and documents</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-slate-700">Get a good night's rest</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t border-slate-100">
                    <h3 class="font-bold text-brand-700 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Morning of Surgery
                    </h3>
                    <ul class="grid md:grid-cols-2 gap-3">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">Take approved medications with small sip of water</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">Brush teeth, do not swallow water</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">Remove jewelry and nail polish</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">Wear comfortable, loose-fitting clothes</span>
                        </li>
                    </ul>
                </div>

                <div class="mt-6">
                    <a href="#" class="inline-flex items-center gap-2 bg-brand-700 text-white font-semibold px-6 py-3 rounded-xl hover:bg-brand-800 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                        Download Pre-Surgery Checklist (PDF)
                    </a>
                </div>
            </div>
        </div>

        <!-- Downloadable Guides -->
        <div class="mb-16">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-14 h-14 rounded-2xl bg-amber-500 text-white flex items-center justify-center">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-slate-800">Patient Guides & Downloads</h2>
                    <p class="text-slate-600">Educational materials to help you understand your treatment</p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Guide 1 -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 hover:shadow-md transition">
                    <div class="w-16 h-16 rounded-2xl bg-brand-100 flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-800 text-lg mb-2">Complete Hernia Guide</h3>
                    <p class="text-slate-600 text-sm mb-4">Comprehensive guide covering all aspects of hernia conditions, treatment options, and surgical procedures.</p>
                    <span class="inline-block bg-slate-100 text-slate-600 text-xs px-3 py-1 rounded-full mb-4">PDF - 2.5 MB</span>
                    <a href="#" class="flex items-center gap-2 text-brand-700 font-semibold hover:text-brand-800">
                        Download
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                    </a>
                </div>

                <!-- Guide 2 -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 hover:shadow-md transition">
                    <div class="w-16 h-16 rounded-2xl bg-amber-100 flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-800 text-lg mb-2">Laparoscopic Surgery Guide</h3>
                    <p class="text-slate-600 text-sm mb-4">Detailed information about laparoscopic hernia repair, what to expect, and recovery timeline.</p>
                    <span class="inline-block bg-slate-100 text-slate-600 text-xs px-3 py-1 rounded-full mb-4">PDF - 1.8 MB</span>
                    <a href="#" class="flex items-center gap-2 text-brand-700 font-semibold hover:text-brand-800">
                        Download
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                    </a>
                </div>

                <!-- Guide 3 -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 hover:shadow-md transition">
                    <div class="w-16 h-16 rounded-2xl bg-green-100 flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-800 text-lg mb-2">Post-Surgery Care Guide</h3>
                    <p class="text-slate-600 text-sm mb-4">Complete recovery instructions including wound care, activity restrictions, and warning signs.</p>
                    <span class="inline-block bg-slate-100 text-slate-600 text-xs px-3 py-1 rounded-full mb-4">PDF - 1.5 MB</span>
                    <a href="#" class="flex items-center gap-2 text-brand-700 font-semibold hover:text-brand-800">
                        Download
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                    </a>
                </div>

                <!-- Guide 4 -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 hover:shadow-md transition">
                    <div class="w-16 h-16 rounded-2xl bg-blue-100 flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-800 text-lg mb-2">Diet & Nutrition Guide</h3>
                    <p class="text-slate-600 text-sm mb-4">Pre and post-surgery dietary recommendations, foods to avoid, and meal planning tips.</p>
                    <span class="inline-block bg-slate-100 text-slate-600 text-xs px-3 py-1 rounded-full mb-4">PDF - 1.2 MB</span>
                    <a href="#" class="flex items-center gap-2 text-brand-700 font-semibold hover:text-brand-800">
                        Download
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                    </a>
                </div>

                <!-- Guide 5 -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 hover:shadow-md transition">
                    <div class="w-16 h-16 rounded-2xl bg-purple-100 flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-800 text-lg mb-2">Emergency Signs Guide</h3>
                    <p class="text-slate-600 text-sm mb-4">Know when to seek immediate medical attention and what symptoms require urgent care.</p>
                    <span class="inline-block bg-slate-100 text-slate-600 text-xs px-3 py-1 rounded-full mb-4">PDF - 0.8 MB</span>
                    <a href="#" class="flex items-center gap-2 text-brand-700 font-semibold hover:text-brand-800">
                        Download
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                    </a>
                </div>

                <!-- Guide 6 -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 hover:shadow-md transition">
                    <div class="w-16 h-16 rounded-2xl bg-red-100 flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-800 text-lg mb-2">Insurance Guide</h3>
                    <p class="text-slate-600 text-sm mb-4">Understanding insurance coverage, pre-authorization process, and documentation requirements.</p>
                    <span class="inline-block bg-slate-100 text-slate-600 text-xs px-3 py-1 rounded-full mb-4">PDF - 1.0 MB</span>
                    <a href="#" class="flex items-center gap-2 text-brand-700 font-semibold hover:text-brand-800">
                        Download
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Post-Surgery Care Guide -->
        <div class="mb-16">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-14 h-14 rounded-2xl bg-green-600 text-white flex items-center justify-center">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-slate-800">Post-Surgery Care Guide</h2>
                    <p class="text-slate-600">Essential recovery instructions for the first weeks after surgery</p>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- First Week -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-10 h-10 rounded-full bg-brand-100 text-brand-700 font-bold flex items-center justify-center">1</span>
                        <h3 class="font-bold text-slate-800">First Week</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-2">
                            <span class="text-brand-600 mt-1">-</span>
                            <span class="text-slate-700 text-sm">Rest as much as possible</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-brand-600 mt-1">-</span>
                            <span class="text-slate-700 text-sm">Take prescribed pain medications</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-brand-600 mt-1">-</span>
                            <span class="text-slate-700 text-sm">Light walking encouraged</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-brand-600 mt-1">-</span>
                            <span class="text-slate-700 text-sm">No lifting over 5 kg</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-brand-600 mt-1">-</span>
                            <span class="text-slate-700 text-sm">Keep incision clean and dry</span>
                        </li>
                    </ul>
                </div>

                <!-- Weeks 2-3 -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-10 h-10 rounded-full bg-amber-100 text-amber-700 font-bold flex items-center justify-center">2</span>
                        <h3 class="font-bold text-slate-800">Weeks 2-3</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-2">
                            <span class="text-brand-600 mt-1">-</span>
                            <span class="text-slate-700 text-sm">Gradually increase activity</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-brand-600 mt-1">-</span>
                            <span class="text-slate-700 text-sm">May return to desk work</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-brand-600 mt-1">-</span>
                            <span class="text-slate-700 text-sm">Avoid heavy lifting (&gt;10 kg)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-brand-600 mt-1">-</span>
                            <span class="text-slate-700 text-sm">Continue wound care</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-brand-600 mt-1">-</span>
                            <span class="text-slate-700 text-sm">Follow-up appointment</span>
                        </li>
                    </ul>
                </div>

                <!-- Weeks 4-6 -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-10 h-10 rounded-full bg-green-100 text-green-700 font-bold flex items-center justify-center">3</span>
                        <h3 class="font-bold text-slate-800">Weeks 4-6</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-2">
                            <span class="text-brand-600 mt-1">-</span>
                            <span class="text-slate-700 text-sm">Return to most activities</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-brand-600 mt-1">-</span>
                            <span class="text-slate-700 text-sm">Light exercise ok if cleared</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-brand-600 mt-1">-</span>
                            <span class="text-slate-700 text-sm">Avoid strenuous core exercises</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-brand-600 mt-1">-</span>
                            <span class="text-slate-700 text-sm">Continue healthy diet</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-brand-600 mt-1">-</span>
                            <span class="text-slate-700 text-sm">Full recovery by week 6</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Diet Guidelines -->
        <div class="mb-16">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-14 h-14 rounded-2xl bg-orange-500 text-white flex items-center justify-center">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-slate-800">Diet Guidelines</h2>
                    <p class="text-slate-600">Nutrition tips for before and after hernia surgery</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 md:p-8">
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="font-bold text-green-600 mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Foods to Eat
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-slate-700">High-fiber foods (fruits, vegetables, whole grains)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-slate-700">Lean protein (chicken, fish, eggs, legumes)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-slate-700">Plenty of water (8+ glasses daily)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-slate-700">Small, frequent meals</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-slate-700">Easy-to-digest foods post-surgery</span>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Foods to Avoid
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-red-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                <span class="text-slate-700">Gas-producing foods (beans, cabbage, carbonated drinks)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-red-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                <span class="text-slate-700">Spicy and fatty foods</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-red-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                <span class="text-slate-700">Heavy meals that cause bloating</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-red-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                <span class="text-slate-700">Processed and junk food</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-red-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                <span class="text-slate-700">Alcohol and caffeine (excess)</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Video Resources -->
        <div>
            <div class="flex items-center gap-4 mb-6">
                <div class="w-14 h-14 rounded-2xl bg-purple-600 text-white flex items-center justify-center">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-slate-800">Video Resources</h2>
                    <p class="text-slate-600">Watch educational videos about hernia surgery and recovery</p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                    <div class="aspect-video bg-slate-200 flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-16 h-16 rounded-full bg-brand-100 flex items-center justify-center mx-auto mb-3">
                                <svg class="w-8 h-8 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <span class="text-slate-500 text-sm">Understanding Hernia - Video Coming Soon</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-slate-800">Understanding Hernia Conditions</h3>
                        <p class="text-slate-600 text-sm">Learn about different types of hernias and their symptoms</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                    <div class="aspect-video bg-slate-200 flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-16 h-16 rounded-full bg-brand-100 flex items-center justify-center mx-auto mb-3">
                                <svg class="w-8 h-8 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <span class="text-slate-500 text-sm">Recovery Tips - Video Coming Soon</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-slate-800">Recovery Tips After Surgery</h3>
                        <p class="text-slate-600 text-sm">Essential guidance for a smooth and safe recovery</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- CTA Section -->
<section class="bg-gradient-to-r from-brand-700 to-brand-800 py-16">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">Need More Information?</h2>
        <p class="text-brand-100 text-lg mb-8 max-w-2xl mx-auto">Schedule a consultation to get personalized guidance for your specific condition and treatment plan.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center justify-center gap-2 bg-white text-brand-800 font-semibold px-8 py-4 rounded-xl hover:bg-brand-50 transition">
                Book Appointment
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            </a>
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center justify-center gap-2 bg-accent text-white font-semibold px-8 py-4 rounded-xl hover:bg-amber-600 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                Call Now
            </a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
