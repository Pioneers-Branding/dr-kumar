<?php
$page_title = 'What Is a Hernia? Definition and Anatomy | Dr. Kumar of Billroth Hospitals';
$page_description = 'What a hernia actually is, how a gap forms in the muscle wall, why it cannot heal by itself, and when you should go and see a surgeon about one in Chennai.';
require __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white overflow-hidden py-20 md:py-28">
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <nav class="flex items-center gap-2 text-sm text-slate-300 mb-6 bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full w-max border border-white/10">
            <a href="<?= $base_path ?>" class="hover:text-white transition">Home</a>
            <span class="text-slate-500">/</span>
            <span class="text-slate-400">Patient Education</span>
            <span class="text-slate-500">/</span>
            <span class="text-accent font-medium">What is Hernia</span>
        </nav>

        <div class="max-w-3xl">
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] mb-6">
                What is a <span class="text-accent">Hernia?</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8">
                A hernia occurs when an internal organ or tissue pushes through a weak spot in the surrounding muscle or connective tissue.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="tel:+918925502759" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition shadow-lg hover:scale-105">
                    Book Consultation
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="causes" class="inline-flex items-center gap-2 bg-white/15 hover:bg-white/25 backdrop-blur text-white font-bold px-7 py-3.5 rounded-full border border-white/30 transition hover:scale-105">
                    Learn Causes
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Definition Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                    Understanding Hernias
                </span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mb-6">
                    How Hernias Develop
                </h2>
                <p class="text-slate-600 leading-relaxed mb-6">
                    A hernia develops when an internal organ, typically part of the intestine or abdominal tissue, protrudes through a weakened area in the surrounding muscle or fascia. Think of it like a tube sock where the fabric has a weak spot, the sock can push through that hole.
                </p>
                <div class="flex items-center gap-3 p-4 bg-brand-50 rounded-xl border border-brand-100">
                    <div class="w-12 h-12 rounded-full bg-brand-700 text-white flex items-center justify-center font-bold text-lg">1 in 4</div>
                    <div>
                        <p class="font-semibold text-slate-900">Men will develop a hernia</p>
                        <p class="text-sm text-slate-500">in their lifetime</p>
                    </div>
                </div>
            </div>
            <div class="relative rounded-3xl overflow-hidden aspect-[1332/747] border border-slate-200/60 shadow-xl bg-slate-50 group">
                <img src="<?= $base_path ?>assets/latest-images/classification-of-hernia.png" 
                     alt="Classification of Abdominal Hernias Diagram" 
                     class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                     loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/45 via-transparent to-transparent"></div>
            </div>
        </div>
    </div>
</section>

<!-- Development Timeline -->
<section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="inline-flex items-center gap-2 bg-accent/10 text-amber-700 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                Progression
            </span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900">
                How Do Hernias Develop?
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <div class="bg-white rounded-2xl p-6 border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="w-14 h-14 rounded-full bg-brand-700 text-white font-bold text-xl flex items-center justify-center mb-4">1</div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Weakness Develops</h3>
                <p class="text-slate-600 text-sm">Natural weakness in the abdominal wall exists due to anatomy, aging, or previous surgery.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="w-14 h-14 rounded-full bg-brand-700 text-white font-bold text-xl flex items-center justify-center mb-4">2</div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Pressure Increases</h3>
                <p class="text-slate-600 text-sm">Activities that increase intra-abdominal pressure (coughing, lifting, straining) create force against the weak area.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="w-14 h-14 rounded-full bg-brand-700 text-white font-bold text-xl flex items-center justify-center mb-4">3</div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Bulge Appears</h3>
                <p class="text-slate-600 text-sm">Internal tissue begins pushing through, creating a visible bulge that may reduce when lying down.</p>
            </div>
        </div>
    </div>
</section>

<!-- Types of Hernias -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                Hernia Types
            </span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900">
                Common Types of Hernias
            </h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="group bg-white rounded-2xl border border-slate-200 overflow-hidden hover:shadow-xl hover:border-brand-200 transition-all duration-300">
                <div class="relative h-40 overflow-hidden">
                    <img src="<?= $base_path ?>assets/images/inguinal-new-v2.png" alt="Groin hernia" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                    <span class="absolute bottom-3 left-3 bg-brand-700 text-white text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full">Groin</span>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-slate-900 mb-1">Inguinal Hernia</h3>
                    <p class="text-slate-500 text-sm">Most common type (70%), occurs in the groin area. More frequent in men.</p>
                </div>
            </div>

            <div class="group bg-white rounded-2xl border border-slate-200 overflow-hidden hover:shadow-xl hover:border-brand-200 transition-all duration-300">
                <div class="relative h-40 overflow-hidden">
                    <img src="<?= $base_path ?>assets/images/umbilical-new-v2.png" alt="Umbilical hernia" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                    <span class="absolute bottom-3 left-3 bg-amber-600 text-white text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full">Belly Button</span>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-slate-900 mb-1">Umbilical Hernia</h3>
                    <p class="text-slate-500 text-sm">Appears at or near the belly button. Common in infants and adults.</p>
                </div>
            </div>

            <div class="group bg-white rounded-2xl border border-slate-200 overflow-hidden hover:shadow-xl hover:border-brand-200 transition-all duration-300">
                <div class="relative h-40 overflow-hidden">
                    <img src="<?= $base_path ?>assets/images/incisional-new.png" alt="Incisional hernia" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                    <span class="absolute bottom-3 left-3 bg-purple-700 text-white text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full">Surgical</span>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-slate-900 mb-1">Incisional Hernia</h3>
                    <p class="text-slate-500 text-sm">Develops at the site of a previous surgical incision.</p>
                </div>
            </div>

            <div class="group bg-white rounded-2xl border border-slate-200 overflow-hidden hover:shadow-xl hover:border-brand-200 transition-all duration-300">
                <div class="relative h-40 overflow-hidden">
                    <img src="<?= $base_path ?>assets/images/hiatal_anatomy.png" alt="Hiatal hernia" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                    <span class="absolute bottom-3 left-3 bg-teal-600 text-white text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full">Internal</span>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-slate-900 mb-1">Hiatal Hernia</h3>
                    <p class="text-slate-500 text-sm">Part of stomach pushes through diaphragm into chest cavity.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Symptoms Section -->
<section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1">
                <div class="relative rounded-3xl overflow-hidden h-80 lg:h-96">
                    <img src="<?= $base_path ?>assets/images/what_is_hernia_exam.png" alt="Medical examination" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent"></div>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <span class="inline-flex items-center gap-2 bg-red-50 text-red-700 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                    Warning Signs
                </span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mb-6">
                    Common Symptoms
                </h2>
                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl border border-slate-100 hover:shadow-md transition">
                        <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Visible Bulge</h4>
                            <p class="text-slate-500 text-sm">A noticeable lump, especially when standing or straining.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl border border-slate-100 hover:shadow-md transition">
                        <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Pain or Discomfort</h4>
                            <p class="text-slate-500 text-sm">Aching or sharp pain that worsens with activity.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl border border-slate-100 hover:shadow-md transition">
                        <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Heavy Sensation</h4>
                            <p class="text-slate-500 text-sm">Feeling of heaviness in the abdomen or groin area.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-brand-950 text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-display text-3xl md:text-4xl font-bold mb-4">
            Concerned You Might Have a Hernia?
        </h2>
        <p class="text-slate-300 mb-8">
            Early diagnosis and treatment prevent complications. Schedule a consultation with Dr. Kumar of Billroth Hospitals today.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:+918925502759" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-500 text-white font-bold px-8 py-4 rounded-full transition shadow-lg hover:scale-105">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                Call: +91 89255 02759
            </a>
        </div>
    </div>
</section>

<!-- Related Pages -->
<section class="py-8 bg-white border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-wrap gap-3 justify-center">
            <a href="causes" class="px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-full text-sm font-medium transition">Causes</a>
            <a href="symptoms" class="px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-full text-sm font-medium transition">Symptoms</a>
            <a href="diagnosis" class="px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-full text-sm font-medium transition">Diagnosis</a>
            <a href="complications" class="px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-full text-sm font-medium transition">Complications</a>
        </div>
    </div>
</section>

<!-- Floating Call Button -->
<a href="tel:+918925502759" class="fixed bottom-6 right-6 z-50 bg-brand-700 hover:bg-brand-600 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all">
    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
</a>

<?php require __DIR__ . '/../includes/footer.php'; ?>