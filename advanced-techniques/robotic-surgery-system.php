<?php
$page_title = 'Da Vinci Robotic System for Hernia Repair | Dr. Kumar of Billroth Hospitals';
$page_description = 'How the Da Vinci robotic system is used for hernia repair in Chennai, what its wristed instruments allow, and which hernias benefit most from the approach.';
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
                    <span class="text-slate-400">Advanced Techniques</span>
                    <span class="text-slate-500">/</span>
                    <span class="text-accent font-medium">Robotic system</span>
                </nav>

                <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider mb-6 border border-white/10 shadow-sm">
                    <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                    Advanced Robotic Technology
                </span>
                <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] mb-6">
                    Robotic<br>
                    <span class="text-accent">Surgery System</span>
                </h1>
                <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                    Experience the next generation of surgical precision with our advanced robotic-assisted surgery system. Dr. Kumar of Billroth Hospitals brings robotically-assisted hernia repair to Chennai with unmatched accuracy and control.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition duration-300 shadow-lg shadow-accent/20 hover:scale-105">
                        Schedule Consultation
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7H3"/></svg>
                    </a>
                    <a href="#how-it-works" class="inline-flex items-center gap-2 bg-white/15 hover:bg-white/25 backdrop-blur text-white font-bold px-7 py-3.5 rounded-full border border-white/30 transition duration-300 hover:scale-105">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                        How It Works
                    </a>
                </div>
            </div>

            <!-- Right: Hero Visual -->
            <div class="bg-gradient-to-br from-brand-700/30 to-brand-900/50 rounded-3xl p-4 border border-brand-400/20 overflow-hidden">
                <img
                    src="<?= $base_path ?>assets/images/davinci-system.png"
                    alt="Advanced Robotic Surgical System"
                    class="w-full h-[280px] object-cover rounded-2xl"
                />
            </div>
        </div>
    </div>
</section>

<!-- Key Benefits -->
<section class="py-16 lg:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-4">Why Choose Robotic Surgery?</h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">Our advanced robotic system offers significant advantages over traditional laparoscopic surgery, particularly for complex hernia repairs.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="tech-card bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Enhanced 3D Visualization</h3>
                <p class="text-slate-600">Ten times magnification with true 3D depth perception allows Dr. Kumar of Billroth Hospitals to see critical structures with extraordinary clarity.</p>
            </div>

            <div class="tech-card bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Wristed Instruments</h3>
                <p class="text-slate-600">EndoWrist technology provides 7 degrees of freedom, mimicking human hand movements with superior precision inside the abdomen.</p>
            </div>

            <div class="tech-card bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Surgeon Control</h3>
                <p class="text-slate-600">Every movement is controlled by Dr. Kumar of Billroth Hospitals at a console, translating hand motions into precise instrument movements in real-time.</p>
            </div>

            <div class="tech-card bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Faster Recovery</h3>
                <p class="text-slate-600">Minimally invasive approach means less pain, smaller scars, and quicker return to normal activities compared to open surgery.</p>
            </div>

            <div class="tech-card bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Reduced Complications</h3>
                <p class="text-slate-600">Studies show robotic hernia repair has lower rates of recurrence and fewer wound infections compared to conventional methods.</p>
            </div>

            <div class="tech-card bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.361 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Complex Cases Possible</h3>
                <p class="text-slate-600">Robotic technology enables repair of bilateral hernias, recurrent hernias, and large defects that may be challenging laparoscopically.</p>
            </div>
        </div>
    </div>
</section>

<!-- How Robotic Surgery Works -->
<section id="how-it-works" class="py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center gap-2 bg-brand-100 text-brand-700 rounded-full px-4 py-2 mb-6 text-sm font-medium">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                    Surgical Process
                </div>
                <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-6">How Robotic Hernia Repair Works</h2>
                <p class="text-lg text-slate-600 mb-8">The advanced robotic system translates Dr. Kumar of Billroth Hospitals&rsquo; hand movements into micro-movements of tiny instruments inside your body, providing unmatched precision.</p>

                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-brand-600 text-white rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Console-Based Control</h4>
                            <p class="text-slate-600 text-sm">Dr. Kumar of Billroth Hospitals sits at a console with a 3D view of the surgical field and controls the robotic arms using specialized hand controls.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-brand-600 text-white rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Small Incisions</h4>
                            <p class="text-slate-600 text-sm">4-5 tiny keyhole incisions (5-8mm) are made, through which the robotic instruments and camera are introduced.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-brand-600 text-white rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Precise Mesh Placement</h4>
                            <p class="text-slate-600 text-sm">The robotic arms position mesh with sub-millimeter accuracy, ensuring optimal coverage of the hernia defect.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-brand-600 text-white rounded-full flex items-center justify-center font-bold">4</div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Secure Fixation</h4>
                            <p class="text-slate-600 text-sm">Absorbable tacks or self-gripping mesh secures the implant, with the robot providing steady hands for perfect placement.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gradient-to-br from-slate-100 to-brand-50 rounded-2xl p-4 overflow-hidden">
                <img src="<?= $base_path ?>assets/images/davinci-process.png" alt="Robotic Surgery Visualization" class="w-full rounded-xl" />
            </div>
        </div>
    </div>
</section>

<!-- Patient Benefits -->
<section class="py-16 lg:py-20 bg-gradient-to-br from-brand-700 to-brand-900 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold mb-4">Benefits for You as a Patient</h2>
            <p class="text-lg text-brand-100 max-w-2xl mx-auto">Robotic hernia surgery combines the benefits of minimally invasive surgery with unmatched surgical precision.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white/10 backdrop-blur rounded-2xl p-6 border border-white/20 text-center hover:-translate-y-1 transition duration-300">
                <svg class="w-10 h-10 text-accent mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <h3 class="text-lg font-bold mb-2">Quicker Return Home</h3>
                <p class="text-brand-100 text-sm">Same day or one night stay vs 2-3 days with open surgery</p>
            </div>
            <div class="bg-white/10 backdrop-blur rounded-2xl p-6 border border-white/20 text-center hover:-translate-y-1 transition duration-300">
                <svg class="w-10 h-10 text-accent mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                <h3 class="text-lg font-bold mb-2">Less Post-Op Pain</h3>
                <p class="text-brand-100 text-sm">Smaller incisions mean significantly less pain and discomfort</p>
            </div>
            <div class="bg-white/10 backdrop-blur rounded-2xl p-6 border border-white/20 text-center hover:-translate-y-1 transition duration-300">
                <svg class="w-10 h-10 text-accent mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <h3 class="text-lg font-bold mb-2">Better Cosmetics</h3>
                <p class="text-brand-100 text-sm">Five tiny scars instead of one large incision</p>
            </div>
            <div class="bg-white/10 backdrop-blur rounded-2xl p-6 border border-white/20 text-center hover:-translate-y-1 transition duration-300">
                <svg class="w-10 h-10 text-accent mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                <h3 class="text-lg font-bold mb-2">Lower Recurrence</h3>
                <p class="text-brand-100 text-sm">Precise mesh placement for better long-term outcomes</p>
            </div>
        </div>
    </div>
</section>

<!-- When Robotic Is Recommended -->
<section class="py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12">
            <div>
                <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-6">When Is Robotic Recommended?</h2>
                <p class="text-lg text-slate-600 mb-8">While robotic surgery can be used for most hernia repairs, it is particularly beneficial in certain situations.</p>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 bg-brand-50 rounded-xl p-4">
                        <svg class="w-6 h-6 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <div>
                            <h4 class="font-semibold text-slate-800">Bilateral Hernias</h4>
                            <p class="text-slate-600 text-sm">Repair of hernias on both sides simultaneously with precision.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 bg-brand-50 rounded-xl p-4">
                        <svg class="w-6 h-6 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <div>
                            <h4 class="font-semibold text-slate-800">Recurrent Hernias</h4>
                            <p class="text-slate-600 text-sm">Patients who had previous repairs and need re-operation.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 bg-brand-50 rounded-xl p-4">
                        <svg class="w-6 h-6 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <div>
                            <h4 class="font-semibold text-slate-800">Large or Complex Defects</h4>
                            <p class="text-slate-600 text-sm">Big hernias, incisional hernias, or ventral hernias requiring meticulous mesh placement.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 bg-brand-50 rounded-xl p-4">
                        <svg class="w-6 h-6 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <div>
                            <h4 class="font-semibold text-slate-800">Obese Patients</h4>
                            <p class="text-slate-600 text-sm">Better visualization helps navigate through thicker abdominal wall.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-slate-50 rounded-2xl p-8">
                <h3 class="text-2xl font-bold text-slate-800 mb-6">Dr. Kumar of Billroth Hospitals&rsquo; Robotic Experience</h3>
                <div class="space-y-4 mb-8">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-brand-600 rounded-full flex items-center justify-center text-white font-bold text-lg">29+</div>
                        <div>
                            <div class="font-semibold text-slate-800">Years of Surgical Experience</div>
                            <div class="text-sm text-slate-500">Trained at Stanley Medical College</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-brand-600 rounded-full flex items-center justify-center text-white font-bold text-lg">10K+</div>
                        <div>
                            <div class="font-semibold text-slate-800">Hernia Surgeries Performed</div>
                            <div class="text-sm text-slate-500">Including complex repairs</div>
                        </div>
                    </div>
                </div>

                <blockquote class="border-l-4 border-accent pl-4 italic text-slate-600 mb-6">
                    "Robotic surgery has transformed how we approach complex hernia repairs. The enhanced visualization and precision allow us to achieve outcomes that weren't possible before."
                </blockquote>

                <div class="flex flex-wrap gap-3">
                    <span class="bg-slate-200 text-slate-700 px-3 py-1 rounded-full text-sm">Fellowship Training</span>
                    <span class="bg-slate-200 text-slate-700 px-3 py-1 rounded-full text-sm">Advanced Robotic Certification</span>
                    <span class="bg-slate-200 text-slate-700 px-3 py-1 rounded-full text-sm">International Exposure</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-12 md:py-16 bg-slate-50 border-t border-slate-100">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-10">
            <span class="text-xs font-bold uppercase tracking-wider text-brand-700 bg-brand-50 px-3 py-1.5 rounded-full mb-4 inline-block">FAQ</span>
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 leading-tight">
                Frequently Asked Questions
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-6 items-start">
            <div class="space-y-4">
                <div class="faq-item active bg-brand-700 text-white rounded-2xl overflow-hidden transition-all duration-300 border border-transparent shadow-md">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-white text-base md:text-lg leading-snug transition-colors duration-300">Is robotic surgery the same as being operated on by a robot?</span>
                        <span class="faq-symbol text-2xl font-light bg-brand-800 text-white w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">&minus;</span>
                    </button>
                    <div class="faq-content px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-brand-50 text-sm md:text-base leading-relaxed transition-colors duration-300">No. The robot is a tool controlled entirely by Dr. Kumar of Billroth Hospitals. No artificial intelligence makes any decision. Every movement comes from the surgeon working at the console.</p>
                    </div>
                </div>

                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">Will I have less pain with robotic surgery?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed transition-colors duration-300">Yes, most patients report much less pain than after open surgery. Smaller incisions and precise tissue handling make recovery more comfortable, and many need only over-the-counter relief after a few days.</p>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">How long is the recovery?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed transition-colors duration-300">Most return to light activity within days and to full work in one to two weeks, depending on the job. Avoid heavy lifting for four to six weeks.</p>
                    </div>
                </div>

                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">Is robotic surgery covered by insurance?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed transition-colors duration-300">Hernia repair, whether performed robotically, laparoscopically, or open, is typically covered by health insurance. Our team will help verify your coverage and explain any out-of-pocket costs before your procedure.</p>
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
            Ready to Explore Robotic Hernia Repair?
        </h2>
        <p class="text-lg text-slate-300 leading-relaxed mb-8 max-w-2xl mx-auto">
            Schedule a consultation with Dr. Kumar of Billroth Hospitals to find out if robotic surgery is right for your hernia.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-full transition shadow-lg shadow-accent/25 hover:scale-105">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                Book Appointment
            </a>
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-8 py-4 rounded-full border border-white/30 transition hover:scale-105">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                Call Now
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