<?php
$page_title = 'Frequently Asked Questions on Hernia Surgery | Chennai';
$page_description = 'Answers to common hernia questions on symptoms, mesh safety, keyhole versus robotic repair, recovery times, costs and insurance, from Dr. Kumar of Billroth Hospitals in Chennai.';
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
            <span class="text-white">FAQs</span>
        </nav>
        <h1 class="font-display text-4xl md:text-5xl font-bold mb-4">Frequently Asked Questions</h1>
        <p class="text-xl text-brand-100 max-w-2xl">Find answers to common questions about hernia conditions, surgery options, recovery, and insurance coverage.</p>
    </div>
</section>

<!-- Search Section -->
<section class="bg-white border-b border-slate-200 sticky top-[72px] z-30 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 py-4">
        <div class="flex flex-col md:flex-row gap-4 items-center">
            <div class="relative flex-1 w-full">
                <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                <input type="text" id="faqSearch" placeholder="Search questions..." class="w-full pl-12 pr-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none">
            </div>
            <div class="flex flex-wrap gap-2">
                <button class="faq-filter-btn active px-4 py-2 rounded-full text-sm font-medium bg-brand-700 text-white" data-filter="all">All</button>
                <button class="faq-filter-btn px-4 py-2 rounded-full text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200" data-filter="general">General</button>
                <button class="faq-filter-btn px-4 py-2 rounded-full text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200" data-filter="surgery">Surgery</button>
                <button class="faq-filter-btn px-4 py-2 rounded-full text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200" data-filter="recovery">Recovery</button>
                <button class="faq-filter-btn px-4 py-2 rounded-full text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200" data-filter="insurance">Insurance</button>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Content -->
<section class="py-16 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4">

        <!-- General FAQs -->
        <div class="faq-category mb-12" data-category="general">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-slate-800">General Hernia Questions</h2>
            </div>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="faq-item active bg-brand-700 text-white rounded-2xl overflow-hidden transition-all duration-300 border border-transparent shadow-md" data-keywords="what is hernia causes symptoms">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-white text-base md:text-lg leading-snug transition-colors duration-300">What is a hernia and what causes it?</span>
                        <span class="faq-symbol text-2xl font-light bg-brand-800 text-white w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">&minus;</span>
                    </button>
                    <div class="faq-content px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-brand-50 text-sm md:text-base leading-relaxed transition-colors duration-300">A hernia is an organ or tissue pushing through a weak spot in the muscle wall, usually in the abdomen. Causes include congenital weakness, aging, coughing, lifting, obesity, pregnancy and surgical scars.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20" data-keywords="types hernia inguinal umbilical incisional ventral">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">What are the different types of hernias?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-3 transition-colors duration-300">The most common types include:</p>
                        <ul class="list-disc list-inside text-slate-600 space-y-1 text-sm md:text-base leading-relaxed transition-colors duration-300">
                            <li><strong>Inguinal hernia</strong> - Occurs in the groin area, most common type</li>
                            <li><strong>Femoral hernia</strong> - Below the groin, more common in women</li>
                            <li><strong>Umbilical hernia</strong> - Around the belly button</li>
                            <li><strong>Incisional hernia</strong> - Through a previous surgical scar</li>
                            <li><strong>Ventral hernia</strong> - Through the front abdominal wall</li>
                            <li><strong>Hiatal hernia</strong> - When part of the stomach pushes into the chest</li>
                            <li><strong>Paraumbilical hernia</strong> - Near but not at the belly button</li>
                        </ul>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20" data-keywords="hernia pain symptoms bulge warning signs">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">What are the warning signs of a hernia?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-3 transition-colors duration-300">Warning signs include:</p>
                        <ul class="list-disc list-inside text-slate-600 space-y-1 text-sm md:text-base leading-relaxed transition-colors duration-300">
                            <li>A visible bulge, especially when standing or coughing</li>
                            <li>Pain or discomfort at the bulge site</li>
                            <li>Burning, gurgling, or aching sensation at the bulge</li>
                            <li>Heavy feeling in the groin or abdomen</li>
                            <li>Weakness or pressure in the affected area</li>
                            <li>Pain that worsens with coughing, lifting, or straining</li>
                        </ul>
                        <p class="text-amber-700 font-medium mt-3">Emergency signs: Severe pain, tenderness, redness, inability to pass gas or have bowel movements - seek immediate medical attention.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20" data-keywords="hernia dangerous risk complications strangulation">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">Is a hernia dangerous if left untreated?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-3 transition-colors duration-300">Yes, an untreated hernia can lead to serious complications:</p>
                        <ul class="list-disc list-inside text-slate-600 space-y-1 text-sm md:text-base leading-relaxed transition-colors duration-300">
                            <li><strong>Incarceration</strong> - The hernia becomes trapped and cannot be pushed back</li>
                            <li><strong>Strangulation</strong> - Blood supply to the trapped tissue is cut off, causing tissue death</li>
                            <li><strong>Obstruction</strong> - Bowel becomes blocked, causing nausea, vomiting, and inability to pass gas</li>
                            <li><strong>Rupture</strong> - Rare but life-threatening tearing of the abdominal wall</li>
                        </ul>
                        <p class="text-amber-700 font-medium mt-3"> Strangulation is a medical emergency requiring immediate surgery. Early repair is always safer than waiting for complications.</p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20" data-keywords="hernia diagnosis ultrasound CT scan imaging">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">How is a hernia diagnosed?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-3 transition-colors duration-300">Diagnosis typically involves:</p>
                        <ul class="list-disc list-inside text-slate-600 space-y-1 text-sm md:text-base leading-relaxed transition-colors duration-300">
                            <li><strong>Physical examination</strong> - Doctor palpates the area while you stand and cough</li>
                            <li><strong>Ultrasound</strong> - Uses sound waves to image soft tissues</li>
                            <li><strong>CT scan</strong> - Detailed cross-sectional images of the abdomen</li>
                            <li><strong>MRI</strong> - For complex or recurrent hernias</li>
                            <li><strong>CT/MRI with Valsalva maneuver</strong> - Imaging while bearing down to visualize the hernia</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Surgery FAQs -->
        <div class="faq-category mb-12" data-category="surgery">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-12 h-12 rounded-xl bg-amber-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-slate-800">Surgery Questions</h2>
            </div>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20" data-keywords="surgery options laparoscopic open repair mesh">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">What are the different surgical options for hernia repair?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-3 transition-colors duration-300">Modern hernia surgery options include:</p>
                        <ul class="list-disc list-inside text-slate-600 space-y-1 text-sm md:text-base leading-relaxed transition-colors duration-300">
                            <li><strong>Laparoscopic (Keyhole) Surgery</strong> - Small incisions, camera-guided repair with mesh</li>
                            <li><strong>Open Herniorrhaphy</strong> - Traditional single incision repair</li>
                            <li><strong>Lichtenstein Tension-Free Repair</strong> - Gold standard open mesh repair</li>
                            <li><strong>eTEP (enhanced Totally Extraperitoneal)</strong> - Advanced laparoscopic approach</li>
                            <li><strong>TEP (Totally Extraperitoneal)</strong> - Laparoscopic preperitoneal repair</li>
                            <li><strong>TAPP (Transabdominal Preperitoneal)</strong> - Laparoscopic transabdominal approach</li>
                            <li><strong>Robotic Hernia Repair</strong> - Precision robotic-assisted surgery</li>
                        </ul>
                        <p class="text-slate-600 mt-3">Dr. Kumar of Billroth Hospitals will recommend the best approach based on your hernia type, size, location, and overall health.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20" data-keywords="mesh safe complications recall">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">Is mesh safe for hernia repair?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-3 transition-colors duration-300">Mesh is considered safe and is used in over 90% of hernia repairs worldwide. Modern meshes have excellent safety profiles and significantly reduce recurrence rates compared to non-mesh repairs.</p>
                        <p class="text-slate-600 mb-3">Types of mesh include:</p>
                        <ul class="list-disc list-inside text-slate-600 space-y-1 text-sm md:text-base leading-relaxed transition-colors duration-300">
                            <li><strong>Synthetic mesh</strong> - Polypropylene or polyester, permanent or absorbable</li>
                            <li><strong>Biological mesh</strong> - Made from human or animal tissue, used in contaminated fields</li>
                            <li><strong>Coated/composite mesh</strong> - Anti-adhesion barriers for intra-abdominal placement</li>
                        </ul>
                        <p class="text-brand-700 font-medium mt-3">The FDA has cleared all meshes used by Dr. Kumar of Billroth Hospitals. Mesh-related complications are rare (&lt;1%) when placed by experienced surgeons.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20" data-keywords="duration surgery time how long operation">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">How long does hernia surgery take?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-3 transition-colors duration-300">Surgery duration varies based on complexity:</p>
                        <ul class="list-disc list-inside text-slate-600 space-y-1 text-sm md:text-base leading-relaxed transition-colors duration-300">
                            <li><strong>Simple inguinal hernia</strong> - 30-60 minutes</li>
                            <li><strong>Umbilical hernia</strong> - 30-45 minutes</li>
                            <li><strong>Complex incisional hernia</strong> - 2-4 hours</li>
                            <li><strong>Robotic-assisted repair</strong> - Similar to laparoscopic, may be slightly longer</li>
                        </ul>
                        <p class="text-slate-600 mt-3">Laparoscopic repairs are typically outpatient procedures, meaning you go home the same day. Complex cases may require an overnight stay.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20" data-keywords="anesthesia general spinal local sedation">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">What type of anesthesia is used?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-3 transition-colors duration-300">Anesthesia type depends on the surgical approach:</p>
                        <ul class="list-disc list-inside text-slate-600 space-y-1 text-sm md:text-base leading-relaxed transition-colors duration-300">
                            <li><strong>General anesthesia</strong> - Most common for laparoscopic and complex repairs; you are fully asleep</li>
                            <li><strong>Spinal/Regional anesthesia</strong> - Numbs the lower body; may be used for open repairs</li>
                            <li><strong>Local anesthesia with sedation</strong> - Sometimes used for small, simple hernias</li>
                        </ul>
                        <p class="text-slate-600 mt-3">Your anesthesiologist will discuss options based on your medical history, the surgical approach, and your preference.</p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20" data-keywords="pain after surgery discomfort manage">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">Will I experience pain after surgery?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed transition-colors duration-300"><p class="text-slate-600 leading-relaxed">Some discomfort is normal. Most describe it as mild to moderate, like muscle soreness, peaking in the first two to three days. Many move to over-the-counter pain relief within a week.</p></p>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20" data-keywords="scars scars laparoscopic small minimal">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">What will my scars look like?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-3 transition-colors duration-300">Scarring depends on the surgical approach:</p>
                        <ul class="list-disc list-inside text-slate-600 space-y-1 text-sm md:text-base leading-relaxed transition-colors duration-300">
                            <li><strong>Laparoscopic surgery</strong> - 3 small ports (5mm, two 10mm incisions); scars fade to nearly invisible</li>
                            <li><strong>Open surgery</strong> - One incision at the hernia site; size varies by hernia type</li>
                            <li><strong>Robotic surgery</strong> - Similar to laparoscopic, with excellent cosmetic outcomes</li>
                        </ul>
                        <p class="text-slate-600 mt-3">All scars will initially appear pink/red and gradually fade over 6-12 months. Proper wound care and sun protection help minimize long-term appearance.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recovery FAQs -->
        <div class="faq-category mb-12" data-category="recovery">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-slate-800">Recovery Questions</h2>
            </div>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20" data-keywords="recovery time weeks activity return work">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">How long is the recovery time after hernia surgery?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-3 transition-colors duration-300">Recovery varies by procedure type and individual health:</p>
                        <ul class="list-disc list-inside text-slate-600 space-y-1 mb-3 text-sm md:text-base leading-relaxed transition-colors duration-300">
                            <li><strong>Laparoscopic surgery</strong> - 1-2 weeks for light activity, 3-4 weeks for full recovery</li>
                            <li><strong>Open surgery</strong> - 2-3 weeks for light activity, 4-6 weeks for full recovery</li>
                            <li><strong>Complex/comprehensive repair</strong> - 3-4 weeks for light activity, 6-8 weeks for full recovery</li>
                        </ul>
                        <p class="text-slate-600">Most patients can return to desk work within 1-2 weeks. Physical labor jobs may require 4-6 weeks of modified duty.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20" data-keywords="driving car after surgery when">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">When can I drive after hernia surgery?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed transition-colors duration-300">Generally, you should wait at least 24-48 hours after surgery before driving, and only when:</p>
                        <ul class="list-disc list-inside text-slate-600 space-y-1 mt-2 text-sm md:text-base leading-relaxed transition-colors duration-300">
                            <li>You are no longer taking prescription pain medications</li>
                            <li>You can move comfortably without significant pain</li>
                            <li>You can perform an emergency stop safely</li>
                            <li>Your insurance company permits it (check your policy)</li>
                        </ul>
                        <p class="text-slate-600 mt-2">For laparoscopic surgery, this is typically 3-5 days. For open surgery, wait at least 1-2 weeks. When in doubt, ask your surgeon.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20" data-keywords="exercise gym workout lifting restrictions">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">When can I exercise and lift heavy objects?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-3 transition-colors duration-300">Follow this gradual progression:</p>
                        <ul class="list-disc list-inside text-slate-600 space-y-1 text-sm md:text-base leading-relaxed transition-colors duration-300">
                            <li><strong>Week 1-2</strong> - Light walking only; no lifting over 5-10 lbs</li>
                            <li><strong>Week 2-4</strong> - Moderate walking; gradual increase in daily activities</li>
                            <li><strong>Week 4-6</strong> - Light cardio (walking, stationary cycling); no heavy lifting (&gt;20 lbs)</li>
                            <li><strong>Week 6+</strong> - Gradual return to normal exercise and heavy lifting with surgeon approval</li>
                        </ul>
                        <p class="text-amber-700 font-medium mt-3">Avoid core-heavy exercises ( crunches, planks, heavy squats) for at least 6-8 weeks. Always follow your surgeon's specific instructions.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20" data-keywords="diet eating food after surgery constipation">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">What dietary restrictions should I follow after surgery?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-3 transition-colors duration-300">Post-surgery dietary guidelines:</p>
                        <ul class="list-disc list-inside text-slate-600 space-y-1 text-sm md:text-base leading-relaxed transition-colors duration-300">
                            <li><strong>First 24-48 hours</strong> - Clear liquids, then soft foods as tolerated</li>
                            <li><strong>First week</strong> - Easy-to-digest foods; avoid gas-producing foods (beans, carbonated drinks)</li>
                            <li><strong>High fiber diet</strong> - Prevent constipation; include fruits, vegetables, whole grains</li>
                            <li><strong>Stay hydrated</strong> - Drink 8+ glasses of water daily</li>
                            <li><strong>Small frequent meals</strong> - Easier on the digestive system</li>
                        </ul>
                        <p class="text-slate-600 mt-3">Avoid heavy meals that cause bloating or discomfort. A balanced diet rich in protein supports tissue healing.</p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20" data-keywords="shower bath wound care incision">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">When can I shower and bathe after surgery?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed transition-colors duration-300">Most patients can shower within 24-48 hours after surgery:</p>
                        <ul class="list-disc list-inside text-slate-600 space-y-1 mt-2 text-sm md:text-base leading-relaxed transition-colors duration-300">
                            <li>Let water run over the incision; do not scrub</li>
                            <li>Gently pat the area dry with a clean towel</li>
                            <li>Do not soak in bathtubs, hot tubs, or swimming pools until cleared by your surgeon (usually 2-4 weeks)</li>
                            <li>Waterproof dressings may be recommended for the first few showers</li>
                        </ul>
                        <p class="text-slate-600 mt-2">Keep the incision clean and dry. Watch for signs of infection: increasing redness, warmth, swelling, or drainage.</p>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20" data-keywords="recurrence hernia come back risk rate">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">What is the risk of hernia recurrence?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-3 transition-colors duration-300">Modern hernia repair has excellent outcomes:</p>
                        <ul class="list-disc list-inside text-slate-600 space-y-1 text-sm md:text-base leading-relaxed transition-colors duration-300">
                            <li><strong>Laparoscopic mesh repair</strong> - Recurrence rate less than 1-2%</li>
                            <li><strong>Open mesh repair (Lichtenstein)</strong> - Recurrence rate 1-3%</li>
                            <li><strong>Non-mesh repairs</strong> - Higher recurrence rates (5-10%)</li>
                            <li><strong>Complex/comprehensive AWR</strong> - Recurrence rates vary by case complexity</li>
                        </ul>
                        <p class="text-slate-600 mt-3">Factors that reduce recurrence include: choosing an experienced surgeon, using mesh when appropriate, following post-op restrictions, maintaining healthy weight, and avoiding heavy lifting during recovery.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Insurance FAQs -->
        <div class="faq-category mb-12" data-category="insurance">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-slate-800">Insurance & Cost Questions</h2>
            </div>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20" data-keywords="insurance coverage cashless claim approval">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">Does insurance cover hernia surgery?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-3 transition-colors duration-300">Most health insurance plans cover hernia surgery as it is considered a medically necessary procedure. Coverage typically includes:</p>
                        <ul class="list-disc list-inside text-slate-600 space-y-1 text-sm md:text-base leading-relaxed transition-colors duration-300">
                            <li>Health insurance (individual and corporate policies)</li>
                            <li>Mediclaim policies</li>
                            <li>Government schemes (CGHS, ECHS,ESIS)</li>
                            <li>Ayushman Bharat Yojana (for eligible patients)</li>
                        </ul>
                        <p class="text-slate-600 mt-3"><strong>Accepted networks:</strong> Star Health, Care Health, HDFC ERGO, ICICI Lombard, Niva Bupa, Bajaj Allianz, Tata AIG, ManipalCigna; Medi Assist, Vidal Health, MDIndia, Paramount TPA, Heritage Health, Raksha TPA and FHPL; National Insurance, New India Assurance, Oriental Insurance and United India Insurance.</p>
                        <p class="text-slate-600 mt-3">Coverage may vary by procedure, pre-existing conditions, waiting periods, room eligibility, and policy terms. The team of Dr. Kumar of Billroth Hospitals will help verify your coverage and assist with insurance processing.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20" data-keywords="cashless hospitalization empanelled hospitals">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">Is cashless facility available?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-3 transition-colors duration-300">Yes, cashless treatment is available at empanelled hospitals. The process involves:</p>
                        <ul class="list-disc list-inside text-slate-600 space-y-1 text-sm md:text-base leading-relaxed transition-colors duration-300">
                            <li>Pre-authorization: Submit insurance/TPA details for approval before admission</li>
                            <li>Verification: The hospital coordinates with your insurance company</li>
                            <li>Approval: Typically takes 2-24 hours for routine approvals</li>
                            <li>Direct settlement: Hospital bills are settled directly with the insurer</li>
                        </ul>
                        <p class="text-slate-600 mt-3">Our administrative team handles all insurance paperwork to make the process seamless for you.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20" data-keywords="cost price surgery cost estimate package">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">What is the cost of hernia surgery?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-3 transition-colors duration-300">Costs vary based on several factors:</p>
                        <ul class="list-disc list-inside text-slate-600 space-y-1 text-sm md:text-base leading-relaxed transition-colors duration-300">
                            <li><strong>Hernia type and complexity</strong> - Simple vs. complex repair</li>
                            <li><strong>Surgical approach</strong> - Laparoscopic vs. open vs. robotic</li>
                            <li><strong>Hospital category</strong> - Economy to premium rooms</li>
                            <li><strong>Mesh type</strong> - Standard vs. advanced/composite meshes</li>
                            <li><strong>Length of stay</strong> - Daycare vs. overnight stay</li>
                        </ul>
                        <p class="text-brand-700 font-medium mt-3">We provide transparent cost estimates during consultation. Please contact us for a personalized quote based on your specific condition.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20" data-keywords="documents required insurance TPA claim">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">What documents are needed for insurance claim?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-3 transition-colors duration-300">Standard documents required:</p>
                        <ul class="list-disc list-inside text-slate-600 space-y-1 text-sm md:text-base leading-relaxed transition-colors duration-300">
                            <li>Health insurance policy card/member ID</li>
                            <li>Photo ID proof (Aadhaar, PAN, Passport)</li>
                            <li>Address proof</li>
                            <li>Pre-operative diagnostic reports</li>
                            <li>Doctor's prescription for surgery</li>
                            <li>Insurance claim form (duly filled)</li>
                            <li>Previous medical records (if applicable)</li>
                        </ul>
                        <p class="text-slate-600 mt-3">Our team will guide you through the documentation process and help with any additional requirements from your insurer.</p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20" data-keywords="pre-existing condition waiting period hernia">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">Are pre-existing conditions covered?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-3 transition-colors duration-300">Coverage for pre-existing conditions depends on your policy:</p>
                        <ul class="list-disc list-inside text-slate-600 space-y-1 text-sm md:text-base leading-relaxed transition-colors duration-300">
                            <li>Most policies have a <strong>waiting period</strong> (typically 2-4 years) for pre-existing conditions</li>
                            <li>Some policies cover pre-existing conditions after the waiting period</li>
                            <li>Emergency treatment for life-threatening conditions may be covered earlier</li>
                            <li>Government schemes may have different terms</li>
                        </ul>
                        <p class="text-slate-600 mt-3">Review your policy documents or ask our insurance team to clarify your specific coverage and waiting period.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- No Results Message -->
        <div id="noResults" class="hidden text-center py-12">
            <svg class="w-16 h-16 mx-auto text-slate-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <h3 class="text-xl font-semibold text-slate-700 mb-2">No results found</h3>
            <p class="text-slate-500">Try adjusting your search terms or browse all categories</p>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-gradient-to-r from-brand-700 to-brand-800 py-16">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">Have More Questions?</h2>
        <p class="text-brand-100 text-lg mb-8 max-w-2xl mx-auto">Our team is here to help. Schedule a consultation to get personalized answers for your specific condition.</p>
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

<style>
.faq-item.hidden { display: none; }
.faq-item[data-keywords*=""] { }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('faqSearch');
    const filterBtns = document.querySelectorAll('.faq-filter-btn');
    const categories = document.querySelectorAll('.faq-category');
    const noResults = document.getElementById('noResults');

    // Filter functionality
    function filterFAQs() {
        const searchTerm = searchInput.value.toLowerCase().trim();
        const activeFilter = document.querySelector('.faq-filter-btn.active').dataset.filter;
        let visibleCount = 0;

        categories.forEach(category => {
            const categoryType = category.dataset.category;
            const items = category.querySelectorAll('.faq-item');
            let categoryHasVisibleItems = false;

            items.forEach(item => {
                const keywords = item.dataset.keywords || '';
                const question = item.querySelector('.faq-toggle span').textContent.toLowerCase();
                const answer = item.querySelector('.faq-content')?.textContent.toLowerCase() || '';

                const matchesSearch = !searchTerm ||
                    keywords.includes(searchTerm) ||
                    question.includes(searchTerm) ||
                    answer.includes(searchTerm);

                const matchesFilter = activeFilter === 'all' || categoryType === activeFilter;

                if (matchesSearch && matchesFilter) {
                    item.classList.remove('hidden');
                    categoryHasVisibleItems = true;
                    visibleCount++;
                } else {
                    item.classList.add('hidden');
                }
            });

            // Show/hide entire category
            if (categoryHasVisibleItems || (activeFilter === 'all' && !searchTerm)) {
                category.style.display = 'block';
                if (activeFilter !== 'all' && searchTerm === '') {
                    category.style.display = activeFilter === category.dataset.category ? 'block' : 'none';
                }
            } else {
                category.style.display = categoryHasVisibleItems ? 'block' : 'none';
            }
        });

        // Show/hide no results message
        noResults.classList.toggle('hidden', visibleCount > 0);
    }

    // Search input event
    searchInput.addEventListener('input', filterFAQs);

    // Filter button clicks
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => {
                b.classList.remove('active', 'bg-brand-700', 'text-white');
                b.classList.add('bg-slate-100', 'text-slate-700');
            });
            btn.classList.add('active', 'bg-brand-700', 'text-white');
            btn.classList.remove('bg-slate-100', 'text-slate-700');
            filterFAQs();
        });
    });
});
</script>

<?php require __DIR__ . '/../includes/footer.php'; ?>
