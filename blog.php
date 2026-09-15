<?php
$page_title = 'Hernia Blog and Surgical Insights | Dr. Kumar of Billroth Hospitals';
$page_description = 'Articles on hernia symptoms, surgery, recovery and warning signs, written by Dr. Kumar of Billroth Hospitals, hernia and abdominal wall surgeon at Billroth Hospitals, Chennai.';
$page_keywords = 'hernia blog, medical insights Chennai, robotic surgery articles, laparoscopy guide, hernia recovery tips';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="absolute top-1/4 right-0 w-96 h-96 bg-brand-500/20 rounded-full blur-[120px]"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <nav class="text-sm mb-6 text-brand-200">
            <a href="" class="hover:text-white transition">Home</a>
            <span class="mx-2">/</span>
            <span class="text-white">Blog</span>
        </nav>
        
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 border border-white/10 shadow-sm">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Expert Medical Insights
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                Surgical Insights & <span class="text-accent">Health Advice</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed max-w-2xl">
                Stay updated with the latest advancements in minimally invasive, laparoscopic, and robotic hernia surgery, along with practical recovery tips from Dr. Kumar of Billroth Hospitals.
            </p>
        </div>
    </div>
</section>

<!-- Search & Filtering Section -->
<section class="bg-slate-50 border-b border-slate-200/80 py-8 sticky top-[72px] z-30 shadow-sm">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
            <!-- Filter Tabs -->
            <div class="flex flex-wrap items-center gap-2" id="filterTabs">
                <button data-target="all" class="filter-btn bg-brand-700 text-white font-medium px-5 py-2.5 rounded-full text-sm shadow-sm transition duration-300">
                    All Articles
                </button>
                <button data-target="hernia" class="filter-btn bg-white text-slate-600 hover:bg-slate-100 font-medium px-5 py-2.5 rounded-full text-sm shadow-sm border border-slate-200 transition duration-300">
                    Hernia Surgery
                </button>
                <button data-target="recovery" class="filter-btn bg-white text-slate-600 hover:bg-slate-100 font-medium px-5 py-2.5 rounded-full text-sm shadow-sm border border-slate-200 transition duration-300">
                    Recovery Guides
                </button>
            </div>
            
            <!-- Search Bar -->
            <div class="relative w-full md:w-80">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input type="text" id="blogSearch" placeholder="Search articles..." class="w-full pl-10 pr-4 py-2.5 rounded-full border border-slate-200 bg-white text-slate-700 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500 shadow-sm text-sm transition-all" />
            </div>
        </div>
    </div>
</section>

<!-- Blog Listing Grid -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="blogGrid">

            <?php if (date('Y-m-d') >= '2026-10-27'): ?>
            <!-- Scheduled: Can You Prevent a Hernia? (27 October 2026) -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="hernia">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/can-you-prevent-a-hernia.png" alt="Can You Prevent a Hernia? What Actually Works" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-brand-50 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full border border-brand-100 shadow-sm">Prevention Guide</span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>27 October 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/can-you-prevent-a-hernia" class="blog-title">Can You Prevent a Hernia? What Actually Works</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">What genuinely lowers your risk, from lifting technique to treating a chronic cough, and the popular myths that do not work.</p>
                    <a href="<?= $base_path ?>blog/can-you-prevent-a-hernia" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>
            <?php endif; ?>

            <?php if (date('Y-m-d') >= '2026-10-23'): ?>
            <!-- Scheduled: Hernia in Children (23 October 2026) -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="hernia">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/hernia-in-children-parents-guide.png" alt="Hernia in Children: What Parents Actually Need to Know" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-brand-50 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full border border-brand-100 shadow-sm">Parent's Guide</span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>23 October 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/hernia-in-children-parents-guide" class="blog-title">Hernia in Children: What Parents Actually Need to Know</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">Which childhood hernias go away on their own, which need surgery, and the warning signs that mean go to hospital now.</p>
                    <a href="<?= $base_path ?>blog/hernia-in-children-parents-guide" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>
            <?php endif; ?>

            <?php if (date('Y-m-d') >= '2026-10-16'): ?>
            <!-- Scheduled: Hernia Surgery With Diabetes, Obesity or Heart Disease (16 October 2026) -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="hernia">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/hernia-surgery-with-diabetes-obesity-heart-disease.png" alt="Hernia Surgery When You Have Diabetes, Obesity or Heart Disease" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-brand-50 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full border border-brand-100 shadow-sm">Patient Decision Guide</span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>16 October 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/hernia-surgery-with-diabetes-obesity-heart-disease" class="blog-title">Hernia Surgery With Diabetes, Obesity or Heart Disease</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">What changes about your risk with a comorbidity, and what gets optimized before an elective hernia repair.</p>
                    <a href="<?= $base_path ?>blog/hernia-surgery-with-diabetes-obesity-heart-disease" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>
            <?php endif; ?>

            <?php if (date('Y-m-d') >= '2026-10-13'): ?>
            <!-- Scheduled: Open vs Laparoscopic vs Robotic (13 October 2026) -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="hernia">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/open-vs-laparoscopic-vs-robotic-hernia-surgery.png" alt="Open vs Laparoscopic vs Robotic Hernia Surgery" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-brand-50 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full border border-brand-100 shadow-sm">Patient Decision Guide</span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>13 October 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/open-vs-laparoscopic-vs-robotic-hernia-surgery" class="blog-title">Open vs Laparoscopic vs Robotic Hernia Surgery</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">A four-way comparison across incision, stay, pain, recovery, recurrence and cost, to help you choose between quoted techniques.</p>
                    <a href="<?= $base_path ?>blog/open-vs-laparoscopic-vs-robotic-hernia-surgery" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>
            <?php endif; ?>

            <?php if (date('Y-m-d') >= '2026-10-06'): ?>
            <!-- Scheduled: Hernia Mesh Types and Safety (06 October 2026) -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="hernia">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/hernia-mesh-types-and-safety.png" alt="Hernia Mesh: Types, Safety and Whether You Really Need It" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-brand-50 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full border border-brand-100 shadow-sm">Patient Decision Guide</span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>06 October 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/hernia-mesh-types-and-safety" class="blog-title">Hernia Mesh: Types, Safety and Whether You Really Need It</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">What the mesh lawsuits were actually about, the real complication rates, and how the main mesh types compare.</p>
                    <a href="<?= $base_path ?>blog/hernia-mesh-types-and-safety" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>
            <?php endif; ?>

            <?php if (date('Y-m-d') >= '2026-10-02'): ?>
            <!-- Scheduled: Hernia Surgery Cost in Chennai (02 October 2026) -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="hernia">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/hernia-surgery-chennai-cost-and-choosing-a-surgeon.png" alt="Hernia Surgery in Chennai: Cost, Options and How to Choose a Surgeon" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-brand-50 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full border border-brand-100 shadow-sm">Patient Decision Guide</span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>02 October 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/hernia-surgery-chennai-cost-and-choosing-a-surgeon" class="blog-title">Hernia Surgery in Chennai: Cost, Options and How to Choose</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">Real cost ranges by procedure type, what a quote should include, and the questions worth asking before you choose a surgeon.</p>
                    <a href="<?= $base_path ?>blog/hernia-surgery-chennai-cost-and-choosing-a-surgeon" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>
            <?php endif; ?>

            <?php if (date('Y-m-d') >= '2026-09-25'): ?>
            <!-- Scheduled: Swelling and Scars After Hernia Surgery (25 September 2026) -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="recovery">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/swelling-and-scars-after-hernia-surgery.png" alt="Hernia Surgery Scars, Swelling and the Still Looks Bulgy Problem" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-brand-50 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full border border-brand-100 shadow-sm">Recovery Guide</span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>25 September 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/swelling-and-scars-after-hernia-surgery" class="blog-title">Hernia Surgery Scars, Swelling and the "Still Looks Bulgy" Problem</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">A differential guide to normal seroma, infection and recurrence at weeks 2 to 8, with the red flags that need review.</p>
                    <a href="<?= $base_path ?>blog/swelling-and-scars-after-hernia-surgery" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>
            <?php endif; ?>

            <?php if (date('Y-m-d') >= '2026-09-22'): ?>
            <!-- Scheduled: Will My Hernia Come Back? (22 September 2026) -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="recovery">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/will-my-hernia-come-back.png" alt="Will My Hernia Come Back? Recurrence Risk Explained" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-brand-50 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full border border-brand-100 shadow-sm">Recovery Guide</span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>22 September 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/will-my-hernia-come-back" class="blog-title">Will My Hernia Come Back? Recurrence Risk Explained</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">A risk-factor breakdown, split into what you can change and what you cannot, with real recurrence statistics.</p>
                    <a href="<?= $base_path ?>blog/will-my-hernia-come-back" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>
            <?php endif; ?>

            <?php if (date('Y-m-d') >= '2026-09-15'): ?>
            <!-- Scheduled: Sleeping, Sitting and Travelling After Hernia Surgery (15 September 2026) -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="recovery">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/sleeping-and-travel-after-hernia-surgery.png" alt="Sleeping, Sitting and Travelling After Hernia Surgery" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-brand-50 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full border border-brand-100 shadow-sm">Recovery Guide</span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>15 September 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/sleeping-and-travel-after-hernia-surgery" class="blog-title">Sleeping, Sitting and Travelling After Hernia Surgery</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">Safe sleeping positions for the first two weeks, plus a fit-to-fly timeline table for short and long flights.</p>
                    <a href="<?= $base_path ?>blog/sleeping-and-travel-after-hernia-surgery" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>
            <?php endif; ?>

            <?php if (date('Y-m-d') >= '2026-09-11'): ?>
            <!-- Scheduled: Exercise After Hernia Surgery (11 September 2026) -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="recovery">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/exercise-after-hernia-surgery.png" alt="Exercise After Hernia Surgery: Gym, Lifting and Core Work" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-brand-50 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full border border-brand-100 shadow-sm">Recovery Guide</span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>11 September 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/exercise-after-hernia-surgery" class="blog-title">Exercise After Hernia Surgery: Gym, Lifting and Core Work</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">What load is safe at weeks 0-2, 2-6, 6-12 and beyond, and how to get back to the gym without risking recurrence.</p>
                    <a href="<?= $base_path ?>blog/exercise-after-hernia-surgery" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>
            <?php endif; ?>

            <?php if (date('Y-m-d') >= '2026-09-09'): ?>
            <!-- Existing post, listed for the first time: Hernia Surgery Recovery Time (09 September 2026) -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="recovery">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/hernia-surgery-recovery-week-by-week.png" alt="Hernia Surgery Recovery Time: A Realistic Week-by-Week Guide" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-brand-50 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full border border-brand-100 shadow-sm">Patient Medical Guide</span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>09 September 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/hernia-surgery-recovery-week-by-week" class="blog-title">Hernia Surgery Recovery Time: A Realistic Week-by-Week Guide</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">A realistic, week-by-week timeline of healing, pain management, and returning to normal life after hernia repair.</p>
                    <a href="<?= $base_path ?>blog/hernia-surgery-recovery-week-by-week" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>
            <?php endif; ?>

            <?php if (date('Y-m-d') >= '2026-09-04'): ?>
            <!-- Scheduled: When Can I Go Back to Work? (04 September 2026) -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="recovery">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/return-to-work-after-hernia-surgery.png" alt="When Can I Go Back to Work After Hernia Surgery?" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-brand-50 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full border border-brand-100 shadow-sm">Recovery Guide</span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>04 September 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/return-to-work-after-hernia-surgery" class="blog-title">When Can I Go Back to Work After Hernia Surgery?</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">A job-by-job answer for desk, driving, retail, manual and heavy labor roles, not just a vague range.</p>
                    <a href="<?= $base_path ?>blog/return-to-work-after-hernia-surgery" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>
            <?php endif; ?>

            <!-- Article 0: Hernia in Women (03 September 2026) -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="hernia">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/hernia-in-women.webp" alt="Hernia in Women: Why It's Missed and What's Different" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-brand-50 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full border border-brand-100 shadow-sm">
                        Diagnosis Guide
                    </span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>03 September 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/hernia-in-women" class="blog-title">Hernia in Women: Why It's Missed and What's Different</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">
                        Women's groin hernias often have no visible bulge, so the pain gets attributed elsewhere. How to tell it apart, and why femoral hernias matter most.
                    </p>
                    <a href="<?= $base_path ?>blog/hernia-in-women" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>

            <!-- Article 1: How Fast Does a Hernia Grow? (31 August 2026) -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="hernia">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/how-fast-does-a-hernia-grow.webp" alt="How Fast Does a Hernia Grow? What to Expect Month by Month" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-brand-50 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full border border-brand-100 shadow-sm">
                        Timeline Guide
                    </span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>31 August 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/how-fast-does-a-hernia-grow" class="blog-title">How Fast Does a Hernia Grow? What to Expect Month by Month</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">
                        There is no published growth rate. What actually changes month by month, what speeds a hernia up, and what the delay research really shows.
                    </p>
                    <a href="<?= $base_path ?>blog/how-fast-does-a-hernia-grow" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>

            <!-- Article 2: Hernia Warning Signs: When It Becomes an Emergency (28 August 2026) -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="hernia">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/hernia-emergency-warning-signs.webp" alt="Hernia Warning Signs: When It Becomes an Emergency" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-red-50 text-red-700 text-xs font-semibold px-3 py-1 rounded-full border border-red-100 shadow-sm">
                        Emergency Care
                    </span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>28 August 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/hernia-emergency-warning-signs" class="blog-title">Hernia Warning Signs: When It Becomes an Emergency</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">
                        The six signs that mean go to the ER now, how fast a trapped hernia turns dangerous, and what not to do while you wait for help.
                    </p>
                    <a href="<?= $base_path ?>blog/hernia-emergency-warning-signs" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>

            <!-- Article 3: Do I Need Hernia Surgery? (17 August 2026) -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="hernia">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/do-i-need-hernia-surgery.jpg" alt="Do I Need Hernia Surgery? A Surgeon's Honest Answer" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-brand-50 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full border border-brand-100 shadow-sm">
                        Treatment Decision
                    </span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>17 August 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/do-i-need-hernia-surgery" class="blog-title">Do I Need Hernia Surgery? A Surgeon's Honest Answer</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">
                        When to operate, when it is safe to wait, and the warning signs that mean you need care today. A clear three-way decision guide from Dr. Kumar of Billroth Hospitals.
                    </p>
                    <a href="<?= $base_path ?>blog/do-i-need-hernia-surgery" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>

            <!-- Article 4: Can Umbilical Hernia be Treated Without Surgery? (03 August 2026) -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="hernia">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/can-umbilical-hernia-be-treated-without-surgery.png" alt="Can Umbilical Hernia be treated without Surgery?" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-brand-50 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full border border-brand-100 shadow-sm">
                        Umbilical Hernia
                    </span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>03 August 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/can-umbilical-hernia-be-treated-without-surgery.php" class="blog-title">Can Umbilical Hernia be Treated Without Surgery?</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">
                        Read our complete 2026 medical guide on non-surgical navel hernia myths, risks of untreated hernias, and modern keyhole repairs by Dr. Kumar of Billroth Hospitals.
                    </p>
                    <a href="<?= $base_path ?>blog/can-umbilical-hernia-be-treated-without-surgery.php" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="hernia">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/can-hernia-be-cured-without-surgery.png" alt="Can Hernia be Cured without Surgery? {In 2026}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-brand-50 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full border border-brand-100 shadow-sm">
                        Hernia Guide
                    </span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>24 July 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/can-hernia-be-cured-without-surgery.php" class="blog-title">Can Hernia be Cured without Surgery? {In 2026}</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">
                        Read our complete 2026 medical guide on non-surgical hernia management, home care, risks, and expert surgical advice by Dr. Kumar of Billroth Hospitals.
                    </p>
                    <a href="<?= $base_path ?>blog/can-hernia-be-cured-without-surgery.php" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>

            <!-- Article 5: What Not to Eat After Hernia Surgery? (19 July 2026) -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="recovery">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/what-not-to-eat-after-hernia-surgery.png" alt="What not to eat after Hernia Surgery?" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-amber-50 text-amber-700 text-xs font-semibold px-3 py-1 rounded-full border border-amber-100 shadow-sm">
                        Recovery Guide
                    </span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>19 July 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/what-not-to-eat-after-hernia-surgery.php" class="blog-title">What not to eat after Hernia Surgery?</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">
                        Read our complete 2026 medical guide on foods to avoid after hernia surgery, post-op diet rules, and expert tips by Dr. Kumar of Billroth Hospitals.
                    </p>
                    <a href="<?= $base_path ?>blog/what-not-to-eat-after-hernia-surgery.php" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>

            <!-- Article 6: Is Hernia Surgery Dangerous? (14 July 2026) -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="hernia">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/is-hernia-surgery-dangerous.jpg" alt="Is Hernia Surgery Dangerous? {Key Insights}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-brand-50 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full border border-brand-100 shadow-sm">
                        Safety & Risk Guide
                    </span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>14 July 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/is-hernia-surgery-dangerous.php" class="blog-title">Is Hernia Surgery Dangerous? {Key Insights}</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">
                        Read our complete 2026 medical safety guide on hernia surgery risks, elective vs emergency repair, and expert advice by Dr. Kumar of Billroth Hospitals.
                    </p>
                    <a href="<?= $base_path ?>blog/is-hernia-surgery-dangerous.php" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>

            <!-- Article 7: Why is my Stomach Bigger After Hernia Surgery? (09 July 2026) -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="recovery">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/why-is-my-stomach-bigger-after-hernia-surgery.jpg" alt="Why is my Stomach Bigger After Hernia Surgery?" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-emerald-50 text-emerald-700 text-xs font-semibold px-3 py-1 rounded-full border border-emerald-100 shadow-sm">
                        Recovery Guide
                    </span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>09 July 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/why-is-my-stomach-bigger-after-hernia-surgery.php" class="blog-title">Why is my Stomach Bigger After Hernia Surgery?</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">
                        Read our complete medical guide on stomach swelling after hernia surgery, bloating, timeline, and recovery tips.
                    </p>
                    <a href="<?= $base_path ?>blog/why-is-my-stomach-bigger-after-hernia-surgery.php" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>

            <!-- Article 8: Can a Hernia Come Back After Surgery? (04 July 2026) -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="hernia">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/hernia-come-back-after-surgery.jpg" alt="Can a Hernia Come Back After Surgery? {Complete Guide}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-amber-50 text-amber-700 text-xs font-semibold px-3 py-1 rounded-full border border-amber-100 shadow-sm">
                        Hernia Surgery
                    </span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>04 July 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="<?= $base_path ?>blog/can-hernia-come-back-after-surgery.php" class="blog-title">Can a Hernia Come Back After Surgery? {Complete Guide}</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">
                        Read our complete medical guide on hernia recurrence, chances, causes, prevention, and treatment options by Dr. Kumar of Billroth Hospitals.
                    </p>
                    <a href="<?= $base_path ?>blog/can-hernia-come-back-after-surgery.php" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>

        </div>

        <!-- No Results Message -->
        <div id="noResults" class="hidden text-center py-16 bg-slate-50 rounded-3xl border border-dashed border-slate-200 mt-8">
            <svg class="w-16 h-16 text-slate-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h3 class="text-lg font-bold text-slate-800 mb-1">No articles found</h3>
            <p class="text-sm text-slate-500">Try adjusting your filters or search terms.</p>
        </div>

        <!-- Pagination (Hidden or Single Page since we have 2 posts) -->
        <div class="hidden items-center justify-center gap-2 mt-16" id="paginationControl">
            <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-brand-700 text-white font-semibold text-sm shadow-md">1</span>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="relative bg-gradient-to-br from-brand-800 to-brand-950 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:20px_20px]"></div>
    
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
        <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 border border-white/10">
            ✉️ Newsletter Signup
        </span>
        <h2 class="font-display text-3xl md:text-4xl font-bold mb-4">
            Stay Updated with Medical Insights
        </h2>
        <p class="text-slate-200 max-w-2xl mx-auto mb-8 leading-relaxed">
            Subscribe to our monthly newsletter to receive health tips, recovery checklists, and insights directly from Dr. Kumar of Billroth Hospitals.
        </p>
        
        <form class="max-w-lg mx-auto flex flex-col sm:flex-row gap-3" onsubmit="event.preventDefault(); alert('Thank you for subscribing!');">
            <input type="email" required placeholder="Enter your email address" class="flex-1 px-6 py-4 rounded-full text-slate-900 bg-white placeholder-slate-400 border border-transparent focus:outline-none focus:ring-2 focus:ring-accent text-sm" />
            <button type="submit" class="bg-accent hover:bg-amber-600 text-white font-bold px-8 py-4 rounded-full transition shadow-lg shadow-accent/20 hover:scale-105 text-sm whitespace-nowrap">
                Subscribe Now
            </button>
        </form>
    </div>
</section>

<!-- JS Script for Interactive Client-Side Filtering -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('blogSearch');
    const filterButtons = document.querySelectorAll('.filter-btn');
    const blogCards = document.querySelectorAll('.blog-card');
    const noResults = document.getElementById('noResults');

    let currentCategory = 'all';
    let searchQuery = '';

    function filterPosts() {
        let visibleCount = 0;
        
        blogCards.forEach(card => {
            const category = card.getAttribute('data-category');
            const title = card.querySelector('.blog-title').textContent.toLowerCase();
            const excerpt = card.querySelector('.blog-excerpt').textContent.toLowerCase();
            
            const matchesCategory = currentCategory === 'all' || category === currentCategory;
            const matchesSearch = title.includes(searchQuery) || excerpt.includes(searchQuery);

            if (matchesCategory && matchesSearch) {
                card.style.display = 'flex';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Toggle 'No Results' Message
        if (visibleCount === 0) {
            noResults.classList.remove('hidden');
        } else {
            noResults.classList.add('hidden');
        }
    }

    searchInput.addEventListener('input', (e) => {
        searchQuery = e.target.value.toLowerCase().trim();
        filterPosts();
    });

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            // Reset visual active state for all buttons
            filterButtons.forEach(b => {
                b.classList.remove('bg-brand-700', 'text-white');
                b.classList.add('bg-white', 'text-slate-600', 'hover:bg-slate-100');
            });
            // Make current button active
            btn.classList.remove('bg-white', 'text-slate-600', 'hover:bg-slate-100');
            btn.classList.add('bg-brand-700', 'text-white');

            currentCategory = btn.getAttribute('data-target');
            filterPosts();
        });
    });
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
