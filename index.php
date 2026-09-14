<?php
$page_title = 'Hernia Surgeon in Chennai | Dr. Kumar, Billroth Hospitals';
$page_description = 'Dr. Kumar is a senior hernia, laparoscopic and robotic surgeon at Billroth Hospitals in Chennai, with 29 years of practice. Book a consultation today.';
$is_home = true;
require __DIR__ . '/includes/header.php';
?>

<style>
/* Homepage visual system — intentionally scoped so internal pages remain unchanged. */
.home-page { background: #f8fafc; }
.home-page section { scroll-margin-top: 112px; }
.home-page section h1,
.home-page section h2,
.home-page section h3,
.home-page section h4 { letter-spacing: -0.025em; }
.home-page section h2 { text-wrap: balance; }
.home-page section p { text-wrap: pretty; }

.home-page > section:first-of-type {
    min-height: min(690px, calc(100vh - 96px));
    background-position: 72% center;
}
.home-page > section:first-of-type > div:first-child {
    background: linear-gradient(90deg, rgba(4, 24, 39, .97) 0%, rgba(5, 42, 61, .86) 45%, rgba(5, 42, 61, .16) 78%, transparent 100%);
}
.home-page > section:first-of-type h1 { max-width: 760px; text-shadow: 0 2px 22px rgba(0,0,0,.16); }

#hernia-care-360,
#about,
#hernia,
#treatments,
#why,
#testimonials,
#reels,
#blog { padding-top: 6rem !important; padding-bottom: 6rem !important; }

#hernia-care-360 { background: #fff !important; }
#hernia-care-360 > div > div:nth-child(2) {
    border: 1px solid #dbe7ea;
    box-shadow: 0 26px 70px -34px rgba(10, 67, 82, .28);
}
#hernia-care-360 > div > div:last-child > div {
    border: 1px solid #dcebed;
    box-shadow: none;
}

#about { background: linear-gradient(135deg, #f1f7f7 0%, #fff 58%, #f8fafc 100%) !important; }
#about img { height: 540px !important; border-radius: 1.5rem; }
#about > div > div:first-child > div:first-child:after {
    content: '';
    position: absolute;
    inset: 18px -18px -18px 18px;
    border: 1px solid rgba(12, 117, 128, .18);
    border-radius: 1.5rem;
    z-index: -1;
}

#hernia { background: #fff !important; }
#hernia .grid > a { border: 1px solid #e2e8f0; box-shadow: 0 10px 35px -24px rgba(15, 23, 42, .35); }
#hernia .grid > a:hover { border-color: #9ac8ce; box-shadow: 0 22px 45px -28px rgba(10, 85, 98, .45); }
#hernia > div > div:nth-last-child(2) { box-shadow: none !important; border: 1px solid #dcebed; background: #f6fafb !important; }

#treatments { background: #eff6f7 !important; }
#treatments .grid > a { border: 1px solid rgba(12, 117, 128, .12); box-shadow: 0 14px 38px -28px rgba(10, 67, 82, .38); }

#why { background: #fff !important; }
#why > div { align-items: center !important; }
#why > div > div:last-child { display: grid; grid-template-columns: repeat(2, minmax(0,1fr)); gap: .75rem; }
#why > div > div:last-child > div {
    border: 1px solid #e2e8f0 !important;
    border-radius: 1rem;
    padding: 1rem !important;
    background: #fff;
}

#testimonials { background: #f1f7f7 !important; }
#reels { background: #fff !important; }
#shorts { background: radial-gradient(circle at 50% 0%, #18364b 0%, #0f172a 45%, #09111e 100%) !important; }
#blog { background: #f8fafc !important; }
#contact { margin: 0; }

@media (max-width: 1023px) {
    .home-page > section:first-of-type { background-position: 66% center; }
    #why > div > div:last-child { grid-template-columns: 1fr; }
}
@media (max-width: 767px) {
    .home-page > section:first-of-type {
        min-height: 660px;
        background-position: 62% center;
    }
    .home-page > section:first-of-type > div:first-child {
        background: linear-gradient(90deg, rgba(4, 24, 39, .98) 0%, rgba(5, 42, 61, .88) 65%, rgba(5, 42, 61, .48) 100%);
    }
    #hernia-care-360,
    #about,
    #hernia,
    #treatments,
    #why,
    #testimonials,
    #reels,
    #blog { padding-top: 4.5rem !important; padding-bottom: 4.5rem !important; }
    #about img { height: 430px !important; }
}
@media (prefers-reduced-motion: reduce) {
    .home-page *, .home-page *:before, .home-page *:after { scroll-behavior: auto !important; transition-duration: .01ms !important; animation-duration: .01ms !important; animation-iteration-count: 1 !important; }
}
</style>

<section class="relative bg-cover bg-center overflow-hidden" style="background-image: url('assets/images/1.png');" aria-labelledby="home-heading">
    <!-- Dark gradient overlay for text readability -->
    <div class="absolute inset-0 bg-gradient-to-r from-slate-950/70 via-slate-950/30 to-transparent pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto min-h-[620px] lg:min-h-[680px] flex items-center">
        <div class="px-6 lg:px-8 py-16 lg:py-24 max-w-3xl relative z-10">

            <p class="inline-flex items-center gap-2 rounded-full border border-white/25 bg-slate-950/35 px-4 py-2 text-xs md:text-sm font-semibold text-white backdrop-blur-sm mb-5">
                <span class="w-2 h-2 rounded-full bg-emerald-400" aria-hidden="true"></span>
                Billroth Hospitals, Chennai &middot; In-person &amp; online consultations
            </p>

            <h1 id="home-heading" class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] text-white mb-5">
                Specialist Hernia Care, Built Around Your Recovery
            </h1>

            <p class="text-slate-100 text-base md:text-xl leading-relaxed mb-7 max-w-2xl">
                Get a clear diagnosis and a treatment plan from <strong><?= $site['doctor'] ?></strong>, a Chennai specialist in laparoscopic, robotic and complex hernia surgery.
            </p>

            <div class="flex flex-col sm:flex-row gap-3">
                <a href="book-appointment" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-lg shadow-lg hover:shadow-xl transition">
                    Book a Consultation
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center justify-center bg-white hover:bg-slate-50 text-slate-900 font-semibold px-7 py-3.5 rounded-lg border border-white shadow-sm transition">
                    Call <?= $site['phone'] ?>
                </a>
            </div>

            <div class="mt-7 flex flex-wrap items-center gap-x-5 gap-y-2 text-sm text-slate-100">
                <span><strong class="text-white">29+ years</strong> of experience</span>
                <span class="hidden sm:block w-1 h-1 rounded-full bg-white/50" aria-hidden="true"></span>
                <span><strong class="text-white">10,000+</strong> hernia surgeries</span>
                <a href="emergency-hernia-care" class="font-semibold text-amber-300 hover:text-amber-200 underline underline-offset-4">View emergency warning signs</a>
            </div>
        </div>
    </div>


</section>

<!-- Patient-first task navigation -->
<nav aria-label="Common patient needs" class="relative z-20 -mt-8 px-4">
    <div class="max-w-6xl mx-auto rounded-2xl bg-white border border-slate-200 shadow-xl p-3 grid sm:grid-cols-2 lg:grid-cols-4 gap-2">
        <?php
        $patient_tasks = [
            ['I have symptoms', 'Understand common signs and when to seek help', 'hernia/symptoms', '01'],
            ['I need treatment advice', 'Compare laparoscopic, robotic and open repair', '#treatments', '02'],
            ['I was advised surgery', 'Get an expert second opinion on your plan', 'second-opinion', '03'],
            ['I am planning recovery', 'Know what to expect after hernia surgery', 'treatment/recovery', '04'],
        ];
        foreach ($patient_tasks as [$title, $copy, $link, $number]): ?>
            <a href="<?= $link ?>" class="group flex gap-3 rounded-xl p-4 hover:bg-brand-50 focus:outline-none focus:ring-2 focus:ring-brand-600 focus:ring-offset-2 transition">
                <span class="shrink-0 w-9 h-9 rounded-lg bg-brand-100 text-brand-800 flex items-center justify-center text-xs font-bold group-hover:bg-brand-700 group-hover:text-white transition" aria-hidden="true"><?= $number ?></span>
                <span>
                    <strong class="block text-slate-900 group-hover:text-brand-800 leading-tight"><?= $title ?></strong>
                    <span class="block text-sm text-slate-500 mt-1 leading-snug"><?= $copy ?></span>
                </span>
            </a>
        <?php endforeach; ?>
    </div>
</nav>

<!-- Hernia Care 360 Section -->
<section id="hernia-care-360" class="pt-16 pb-12 md:pt-20 md:pb-14 bg-gradient-to-br from-slate-50 via-white to-brand-50 overflow-hidden">
    <div class="relative max-w-7xl mx-auto px-4">

        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-10">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Welcome to Hernia Care 360
            </span>
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 mt-4 leading-tight">
                Chennai's Dedicated <span class="text-brand-700">Advanced Center</span><br>
                for Complete Hernia &amp; Abdominal Wall Care
            </h2>
        </div>

        <!-- Main content card -->
        <div class="relative bg-white rounded-3xl shadow-xl border border-slate-100 overflow-hidden">
            <div class="absolute top-0 right-0 w-72 h-72 bg-brand-700/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>

            <div class="relative grid lg:grid-cols-12 gap-0">
                <!-- Left: copy -->
                <div class="lg:col-span-7 p-8 md:p-10 lg:p-12">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-brand-700 text-white flex items-center justify-center font-display font-bold text-lg shadow-md">
                            360&deg;
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest text-brand-700">Hernia Care 360</p>
                            <p class="text-sm text-slate-500">at Billroth Hospitals, Chennai</p>
                        </div>
                    </div>

                    <h3 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-5 leading-snug">
                        A True 360-Degree Care Model, from Consultation to Follow-up
                    </h3>

                    <p class="text-slate-600 leading-relaxed mb-6 text-lg">
                        <strong>Hernia Care 360</strong>, led by renowned hernia specialist <strong>Dr. Kumar</strong> at Billroth Hospitals, is Chennai's dedicated advanced center for complete hernia and abdominal wall care. Offering comprehensive solutions for complex and recurrent hernias, the center uses cutting-edge technologies such as <strong>robotic surgery, advanced laparoscopy, eTEP, TAR, and component separation</strong> to achieve durable results.
                    </p>

                    <div class="flex flex-wrap gap-3">
                        <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-brand-700 hover:bg-brand-800 text-white font-semibold px-6 py-3 rounded-full shadow-md hover:shadow-lg transition">
                            Schedule a Consultation
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                        <a href="#treatments" class="inline-flex items-center gap-2 bg-white hover:bg-slate-50 text-slate-800 font-semibold px-6 py-3 rounded-full border border-slate-200 shadow-sm transition">
                            Explore Treatments
                        </a>
                    </div>
                </div>

                <!-- Right: 360-degree care pillars -->
                <div class="lg:col-span-5 bg-gradient-to-br from-brand-700 to-brand-900 text-white p-8 md:p-10 lg:p-12 relative overflow-hidden">
                    <svg class="absolute inset-0 w-full h-full text-white/[0.05] pointer-events-none" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <pattern id="care360-pattern" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse">
                                <path d="M18 14h4v4h-4v4h-4v-4h-4v-4h4v-4h4v4z" fill="currentColor"/>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#care360-pattern)"/>
                    </svg>

                    <div class="relative">
                        <p class="text-xs font-bold uppercase tracking-widest text-amber-300 mb-2">Complete Care, Under One Roof</p>
                        <h4 class="font-display text-xl md:text-2xl font-bold mb-6">The 360&deg; Care Journey</h4>

                        <ul class="space-y-3">
                            <?php
                            $care360 = [
                                ['Consultation',  'Expert evaluation by Dr. Kumar and a personalized treatment roadmap.'],
                                ['Diagnosis',      'Advanced imaging and clinical assessment for accurate staging.'],
                                ['Treatment',      'Robotic, laparoscopic, eTEP, TAR &amp; component separation techniques.'],
                                ['Recovery',       'Structured post-op protocols for faster, safer healing.'],
                                ['Rehabilitation', 'Physiotherapy and lifestyle guidance to restore core strength.'],
                                ['Follow-up',      'Long-term monitoring to prevent recurrence and ensure lasting results.'],
                            ];
                            foreach ($care360 as $i => [$title, $desc]): ?>
                                <li class="flex items-start gap-3">
                                    <span class="shrink-0 w-9 h-9 rounded-full bg-white/15 border border-white/20 text-white font-bold text-sm flex items-center justify-center">
                                        <?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?>
                                    </span>
                                    <div class="pt-1">
                                        <p class="font-bold text-white leading-tight"><?= $title ?></p>
                                        <p class="text-sm text-brand-100 leading-snug"><?= $desc ?></p>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom strip: advanced techniques highlight -->
        <div class="mt-8 grid grid-cols-2 md:grid-cols-5 gap-3">
            <?php
            $techs = [
                ['Robotic Surgery',      'Advanced robotic system'],
                ['Advanced Laparoscopy', 'Minimally invasive'],
                ['eTEP',                 'Enhanced view'],
                ['TAR',                  'Component separation'],
                ['3D Mesh',              'Durable reinforcement'],
            ];
            foreach ($techs as [$t, $sub]): ?>
                <div class="bg-white rounded-xl border border-slate-200 px-4 py-4 text-center shadow-sm hover:shadow-md hover:-translate-y-0.5 transition">
                    <p class="font-display font-bold text-brand-700 text-base"><?= $t ?></p>
                    <p class="text-xs text-slate-500 mt-0.5"><?= $sub ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="about" class="py-12 md:py-14 bg-white overflow-hidden">
    <div class="relative max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-12 items-center">
        <div>
            <div class="relative">
                <img src="assets/images/dr-kumar-office-portrait.jpg" alt="Dr. Kumar, hernia surgeon at his Chennai clinic" width="1280" height="960" class="rounded-2xl shadow-xl w-full h-[650px] object-cover object-[center_28%]">
                <div class="absolute -bottom-6 -right-6 bg-accent text-white rounded-2xl px-6 py-5 shadow-xl hidden md:block">
                    <p class="font-display text-3xl font-bold">29+</p>
                    <p class="text-sm">Years of Excellence</p>
                </div>
            </div>
            <div class="mt-8 text-center">
                <p class="font-display text-xl font-bold text-slate-900">Dr. Kumar, <span class="text-brand-700">Hernia Specialist</span></p>
            </div>
        </div>

        <div>
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">About the Doctor</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-5">
                Pioneer in Laparoscopic Hernia Surgery &amp; Expert in Robotic Hernia Surgery
            </h2>
            <p class="text-slate-600 mb-6 leading-relaxed text-lg">
                With <strong>29+ years of experience</strong> and more than <strong>10,000 hernia surgeries</strong>, Dr. Kumar combines advanced laparoscopic and robotic techniques with a treatment plan tailored to each patient. His expertise includes eTEP, TEP, TAPP, TAR and complex abdominal wall reconstruction.
            </p>

            <div class="grid grid-cols-2 gap-4 mb-7">
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-sm font-medium">MBBS, MS Surgery</span>
                </div>
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-sm font-medium">MRCS England</span>
                </div>
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-sm font-medium">FALS Robotic, FALS Hernia & AWR</span>
                </div>
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-sm font-medium">FMAS, FIAGES</span>
                </div>

                 <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-sm font-medium">Dip ALS. Advanced Laparoscopy</span>
                </div>
            </div>

            <!-- Highlight strip: 10,000+ Surgeries + Laparoscopic + Robotic -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-7">
                <div class="rounded-xl bg-gradient-to-br from-brand-700 to-brand-800 text-white px-4 py-4 shadow-sm">
                    <p class="font-display text-2xl md:text-3xl font-bold leading-none">10,000+</p>
                    <p class="text-xs text-brand-100 mt-1.5 leading-snug">Hernia Surgeries Performed</p>
                </div>
                <div class="rounded-xl bg-white border border-brand-100 px-4 py-4 shadow-sm">
                    <div class="w-9 h-9 rounded-lg bg-brand-50 text-brand-700 flex items-center justify-center mb-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 7h4l2-2h4l2 2h4M5 7v11a1 1 0 001 1h12a1 1 0 001-1V7M9 12h6"/></svg>
                    </div>
                    <p class="font-display text-base font-bold text-slate-900 leading-tight">Laparoscopic</p>
                    <p class="text-xs text-slate-500 mt-0.5">Hernia Surgery Expert</p>
                </div>
                <div class="rounded-xl bg-white border border-brand-100 px-4 py-4 shadow-sm">
                    <div class="w-9 h-9 rounded-lg bg-brand-50 text-brand-700 flex items-center justify-center mb-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 3v2M15 3v2M6 7h12M6 7l1 12a2 2 0 002 2h6a2 2 0 002-2l1-12M10 11v6M14 11v6"/></svg>
                    </div>
                    <p class="font-display text-base font-bold text-slate-900 leading-tight">Robotic</p>
                    <p class="text-xs text-slate-500 mt-0.5">Hernia Surgery Expert</p>
                </div>
            </div>

            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-brand-700 hover:bg-brand-800 text-white font-semibold px-6 py-3 rounded-full shadow transition">
                Schedule Consultation
            </a>
        </div>
    </div>
</section>

<section id="hernia" class="py-12 md:py-14 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Advanced Hernia Surgery</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-4">
                Comprehensive Advanced Abdominal Hernia Care
            </h2>
            <p class="text-slate-600">From complex incisional hernias to advanced abdominal wall reconstructions, Dr. Kumar offers the most sophisticated minimally invasive treatment options for all types of abdominal hernias.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <?php
            $hernias = [
                ['Inguinal Hernia',   'assets/images/inguinal-new-v2.png',   'my_types/inguinal-hernia-treatment-in-chennai.php',          'Advanced laparoscopic &amp; robotic repair with mesh reinforcement.'],
                ['Umbilical Hernia',  'assets/images/umbilical-new-v2.png',  'my_types/umbilical-hernia-treatment-in-chennai.php',         'Daycare mesh &amp; meshless repair tailored to defect size.'],
                ['Incisional Hernia', 'assets/images/incisional-new.png',  'my_types/incisional-hernia-treatment-in-chennai.php',        'Complex AWR with TAR &amp; component separation techniques.'],
                ['Ventral Hernia',    'assets/images/ventral-new.png',     'my_types/ventral-hernia-treatment-in-chennai.php',           'Minimally invasive repair for abdominal wall defects.'],
            ];
            foreach ($hernias as [$t, $img, $link, $desc]): ?>
                <a href="<?= $link ?>" class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl hover:-translate-y-1 transition group block">
                    <div class="overflow-hidden h-44">
                        <img src="<?= $img ?>" alt="<?= $t ?> treatment Chennai" class="w-full h-full object-cover group-hover:scale-105 transition" loading="lazy">
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-lg text-slate-900 mb-2"><?= $t ?></h3>
                        <p class="text-sm text-slate-600"><?= $desc ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="mt-10 bg-white rounded-2xl p-8 grid md:grid-cols-3 gap-6 text-center shadow">
            <div>
                <p class="font-display text-3xl font-bold text-brand-700">eTEP &amp; TAR</p>
                <p class="text-sm text-slate-600 mt-2">Advanced techniques for complex hernias</p>
            </div>
            <div>
                <p class="font-display text-3xl font-bold text-brand-700">Daycare</p>
                <p class="text-sm text-slate-600 mt-2">Same-day discharge for select cases</p>
            </div>
            <div>
                <p class="font-display text-3xl font-bold text-brand-700">Meshless</p>
                <p class="text-sm text-slate-600 mt-2">Desarda technique available</p>
            </div>
        </div>

        <div class="mt-10 text-center">
            <a href="hernia-types" class="inline-flex items-center gap-2 bg-brand-700 hover:bg-brand-800 text-white font-semibold px-7 py-3 rounded-full shadow-md hover:shadow-lg hover:-translate-y-0.5 transition">
                View All Hernia Types
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

<section id="treatments" class="relative py-12 md:py-14 bg-slate-50 overflow-hidden">
    <!-- Background pattern: medical plus signs -->
    <svg class="absolute inset-0 w-full h-full text-brand-700 opacity-[0.03] pointer-events-none" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <pattern id="plus-pattern" x="0" y="0" width="50" height="50" patternUnits="userSpaceOnUse">
                <path d="M22 18h6v4h-6v6h-4v-6h-6v-4h6v-6h4v6z" fill="currentColor"/>
            </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#plus-pattern)"/>
    </svg>

    <div class="relative max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Our Specialities
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-5 leading-tight">
                Specialized Care to <span class="text-brand-700">Restore</span><br>
                &amp; Protect Abdominal Wall Health
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 md:gap-6">
            <?php foreach (array_slice($treatments, 4, 8) as $t): ?>
                <a href="<?= $t['link'] ?>"
                   class="group relative flex flex-col rounded-2xl overflow-hidden bg-white shadow-sm hover:shadow-xl transition duration-300 hover:-translate-y-1">

                    <div class="p-5 flex flex-col flex-1">
                        <div class="flex items-start justify-between gap-2 mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-brand-700">
                                Speciality
                            </span>
                            <span class="shrink-0 w-7 h-7 rounded-full bg-slate-100 text-slate-600 group-hover:bg-brand-700 group-hover:text-white flex items-center justify-center transition group-hover:rotate-45">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
                            </span>
                        </div>

                        <h3 class="font-display font-bold text-lg md:text-xl leading-snug text-slate-900 mb-2">
                            <?= $t['title'] ?>
                        </h3>

                        <p class="text-sm leading-relaxed text-slate-600 flex-1">
                            <?= $t['desc'] ?>
                        </p>
                    </div>

                    <div class="relative mx-3 mb-3 rounded-xl overflow-hidden aspect-[4/3] bg-slate-100">
                        <img src="<?= $t['img'] ?>"
                             alt="<?= $t['title'] ?> by Dr. Kumar Chennai"
                             loading="lazy"
                             class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-10">
            <a href="treatment" class="inline-flex items-center gap-2 bg-brand-700 hover:bg-brand-800 text-white font-semibold px-7 py-3 rounded-full shadow-md hover:shadow-lg hover:-translate-y-0.5 transition">
                View All Treatments
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

<section id="why" class="py-12 md:py-14 bg-white overflow-hidden">
    <div class="relative max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">

        <!-- LEFT: heading + image -->
        <div>
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-5">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Why Choose Us
            </span>

            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold leading-[1.15] text-slate-900 mb-8">
                Experience That Inspires <span class="text-brand-700">Confidence at Every Step</span>
            </h2>

            <div class="relative rounded-2xl overflow-hidden bg-slate-100 aspect-[16/10]">
                <img src="assets/images/dr-kumar-office-wide.jpg"
                     alt="Dr. Kumar - Senior Laparoscopic & Robotic Surgeon, Chennai"
                     width="1280" height="960"
                     class="absolute inset-0 w-full h-full object-cover object-[center_32%]"
                     loading="lazy">
                <div class="absolute bottom-4 left-4 bg-white/95 backdrop-blur-sm rounded-xl px-4 py-3 shadow-lg flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-brand-100 flex items-center justify-center">
                        <svg class="w-5 h-5 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    </div>
                    <div>
                        <p class="font-bold text-slate-900 text-sm leading-tight">Times Health Award</p>
                        <p class="text-xs text-slate-500">2025 and 2026 Winner</p>
                    </div>
                </div>
            </div>

            <!-- LEFT: Additional points below image -->
            <div class="mt-6 divide-y divide-slate-200">
                <?php
                $whys_left = [
                    [
                        'title' => 'Proven Surgical Outcomes',
                        'desc'  => '10,000+ hernia repairs and 20,000+ laparoscopic procedures delivering faster recovery and lasting results.',
                        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 13l4 4L19 5"/>',
                    ],
                    [
                        'title' => 'Clinical Lead &amp; HOD, Billroth Hospital',
                        'desc'  => 'Department of Minimal Access, Robotic, Hernia &amp; AWR Surgery at Billroth Hospitals, Chennai',
                        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 21h18M5 21V7l7-4 7 4v14M9 9h.01M9 13h.01M9 17h.01M15 9h.01M15 13h.01M15 17h.01"/>',
                    ],
                ];
                foreach ($whys_left as $w): ?>
                    <div class="flex gap-3 items-start group py-3 first:pt-0 last:pb-0">
                        <div class="shrink-0 w-10 h-10 rounded-full bg-brand-50 group-hover:bg-brand-100 border border-brand-100 flex items-center justify-center transition">
                            <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><?= $w['icon'] ?></svg>
                        </div>
                        <div class="flex-1 pt-0.5">
                            <h3 class="font-bold text-slate-900 text-[15px] mb-1 leading-snug"><?= $w['title'] ?></h3>
                            <p class="text-slate-600 text-[13px] leading-snug"><?= $w['desc'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- RIGHT: feature list (reduced to match left height) -->
        <div class="divide-y divide-slate-200">
            <?php
            $whys_right = [
                [
                    'title' => 'Pioneer Laparoscopic Surgeon',
                    'desc'  => 'One of the first surgeons in Chennai to perform laparoscopic hernia surgery, with 29+ years of operating-room mastery.',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>',
                ],
                [
                    'title' => 'Mentor &amp; Trainer',
                    'desc'  => 'Has trained numerous young surgeons aspiring for DNB Surgery and MRCS examinations - passing on decades of expertise to the next generation.',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 4.354v4.354a.5.5 0 00.5.5.5h2a.5.5 0 00.5-.5V4.354M12 15.646v4.354a.5.5 0 01-.5.5h-2a.5.5 0 01-.5-.5v-4.354m0 0a7.5 7.5 0 1114.708 0M12 15.646a7.5 7.5 0 11-14.708 0"/>',
                ],
                [
                    'title' => 'Expert Robotic Hernia Surgeon',
                    'desc'  => 'Robotic Hernia Surgery Expert,Advanced eTEP, TAR, TAPP &amp; IPOM techniques and robotic-assisted surgery for the most complex cases.',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
                ],
                [
                    'title' => 'Internationally Trained Expertise',
                    'desc'  => 'MRCS England &amp; member of multiple global surgical societies, bringing internationally trained surgical standards to every procedure.',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>',
                ],
                [
                    'title' => 'Award-Winning Hernia Surgeon',
                    'desc'  => 'Times Health Award 2025 (Laparoscopic Hernia &amp; GI) and 2026 (Advanced Laparoscopic &amp; Robotic).',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-4.5A3.375 3.375 0 0020.25 11.25H3.75A3.375 3.375 0 006 14.25v4.5m14.25-9.75l-1.406-1.406A2.25 2.25 0 0017.438 7.5H6.562a2.25 2.25 0 00-1.406.844L3.75 9.75M12 3v3.75m-3.75 0h7.5"/>',
                ],
                [
                    'title' => 'Daycare Hernia Surgery',
                    'desc'  => 'Same-day discharge protocol allowing patients to return home within hours of surgery with faster recovery.',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>',
                ],
                [
                    'title' => 'Hernia Surgery Under Local Anesthesia',
                    'desc'  => 'Selected hernia cases performed safely under local anesthesia - avoiding general anesthesia risks and enabling quicker recovery.',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>',
                ],
                [
                    'title' => 'Meshless Hernia Surgery (Desarda &amp; Shouldice)',
                    'desc'  => 'Specialized tissue-based repair techniques (Desarda &amp; Shouldice) for suitable patients - avoiding mesh implants and their long-term risks.',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>',
                ],
                [
                    'title' => 'Advanced Complex Hernia Techniques',
                    'desc'  => 'Specialized techniques like Botox, PPP (Positive Pressure Pneumoperitoneum), and Fasciotens for managing the most complex hernias.',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"/>',
                ],
                [
                    'title' => 'AWR Expert',
                    'desc'  => 'TAR, component separation &amp; eTEP for recurrent and complex incisional hernias.',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"/>',
                ],
                [
                    'title' => 'Patient-First Care',
                    'desc'  => '5.0-star rating with 600+ verified Google reviews from patients who trust Dr. Kumar with their care.',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>',
                ],
            ];
            foreach ($whys_right as $w): ?>
                <div class="flex gap-3 items-start group py-3 first:pt-0 last:pb-0">
                    <div class="shrink-0 w-10 h-10 rounded-full bg-brand-50 group-hover:bg-brand-100 border border-brand-100 flex items-center justify-center transition">
                        <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><?= $w['icon'] ?></svg>
                    </div>
                    <div class="flex-1 pt-0.5">
                        <h3 class="font-bold text-slate-900 text-[15px] mb-1 leading-snug"><?= $w['title'] ?></h3>
                        <p class="text-slate-600 text-[13px] leading-snug"><?= $w['desc'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============== SECOND OPINION STRIP ============== -->
<section class="relative bg-gradient-to-r from-brand-800 via-brand-700 to-brand-900 text-white overflow-hidden">
    <!-- Decorative dotted pattern -->
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:18px_18px] pointer-events-none"></div>
    <!-- Glow blobs -->
    <div class="absolute -top-20 -left-20 w-72 h-72 bg-accent/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-24 -right-16 w-72 h-72 bg-cyan-400/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 py-8 md:py-10">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-6 text-center lg:text-left">
            <div class="flex items-center gap-5">
                <div class="hidden sm:flex w-14 h-14 rounded-2xl bg-white/10 backdrop-blur items-center justify-center shrink-0 border border-white/15">
                    <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div>
                    <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider mb-2 text-accent border border-accent/30">
                        <span class="w-1.5 h-1.5 bg-accent rounded-full animate-pulse"></span>
                        Expert Review
                    </span>
                    <h2 class="font-display text-2xl md:text-3xl font-bold leading-tight">Already advised surgery? Get a Second Opinion.</h2>
                    <p class="text-slate-200 text-sm md:text-base mt-1 max-w-2xl">A thorough expert review from Dr. Kumar, 29+ years of experience, for clarity and confidence before you decide.</p>
                </div>
            </div>
            <div class="flex flex-wrap items-center justify-center gap-3 shrink-0">
                <a href="<?= $base_path ?>second-opinion" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-6 py-3.5 rounded-full shadow-lg shadow-amber-500/20 hover:-translate-y-0.5 transition-all duration-300">
                    Get a Second Opinion
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-6 py-3.5 rounded-full border border-white/25 hover:border-white/40 transition-all duration-300">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                    Call <?= $site['phone'] ?>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="py-12 md:py-14 bg-slate-50 overflow-hidden">
    <div class="relative max-w-7xl mx-auto px-4">

        <!-- HEADER ROW: title left, rating right -->
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-10">
            <div>
                <span class="text-brand-700 font-bold uppercase tracking-[0.2em] text-xs mb-3 block">
                    Real Patient Outcomes
                </span>
                <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 leading-tight">
                    What Our Patients Say
                </h2>
            </div>
            <div class="flex items-center gap-3">
                <div class="flex text-amber-400">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.293z"/></svg>
                    <?php endfor; ?>
                </div>
                <p class="text-sm text-slate-600">
                    <span class="font-bold text-slate-900">5.0 avg</span> &middot; 600+ verified reviews
                </p>
            </div>
        </div>

        <?php
        $testimonials = [
                        ['Ruby A.',      'Gallbladder & Hernia Patient', 'Chennai', 'Dr. Kumar at Billroth Hospital is an excellent surgeon. I recently underwent gallbladder and hernia surgery, and the entire experience was smooth and reassuring. Dr. Kumar explained everything clearly, made me feel comfortable, and the surgery went very well. My recovery has been quick and trouble-free thanks to his expertise and care. I am truly grateful for his professionalism and kindness. Highly recommended!', 'border-brand-700'],
            ['Mercy F.',     'Local Guide · 4 reviews',  'Chennai', 'I underwent gall bladder surgery under Dr. Kumar. From the initial consultation to post-operative care, the doctor was extremely professional, patient, and reassuring. All my doubts were answered clearly, and I was guided properly regarding recovery and diet. The surgery went smoothly, and my recovery has been good. I truly appreciate the care and support provided. I highly recommend Dr. Kumar to anyone needing surgical care.', 'border-brand-700'],

            ['Thirulogachandar D.', 'Local Guide · 24 reviews', 'Chennai', 'Reviewing this doctor after a month of dad\'s surgery and follow ups. Had admitted my dad for Hernia Surgery. The treatment by Dr. Kumar was excellent, even at the follow-ups. Very clear on his suggestions, well mannered, explaining without jargons. Best and Go To doctor for Gastro related. Very polite and composed dr.', 'border-brand-700'],
            ['AAA Electricals',     'Local Guide · 3 reviews',  'Chennai', 'I am proud to share my experience with Dr. Kumar from Billroth Hospital. He performed my grandfather\'s hernia operation, and it was a great success. My grandfather is now doing very well, thanks to Dr. Kumar\'s excellent treatment and successful surgery. I highly recommend him.', 'border-amber-500'],
            ['Suresh A.',  'Local Guide · 19 reviews',  'Chennai', 'Exceptional surgeon with outstanding patient care. I am writing this review one month after my Supra Umbilical Hernia surgery, and I can confidently say that choosing Dr. Kumar Sir (Billroth Hospital) was the best decision. The surgery went smoothly and recovery has been excellent.', 'border-brand-700'],
            ['Elango K.',  'Hernia Patient',            'Purasawalkam', '5/5 stars for Dr. Kumar at Billroth Hospitals. After a complicated gallbladder surgery at another hospital led to complications, Dr. Kumar completely turned things around. His professionalism, reassurance, and clear communication instantly put me at ease. The surgery was a success and recovery has been smooth sailing. Highly recommend!', 'border-amber-500'],
            ['Anitha S.',  'Family Member',             'Chennai', 'My father underwent laparoscopic surgery with Dr. Kumar for colon growth and is absolutely normal now. Dr. Kumar is the best laparoscopic doctor. He is very friendly, interacts well with all patients, answers all our questions, and gives exceptional care to his patients. Highly recommend.', 'border-brand-700'],
            ['Mubarak H.', 'Local Guide · 20 reviews',  'Chennai', 'Highly recommend Dr. Kumar at Billroth Hospital. He successfully performed a laparoscopic surgery for my father. Despite the risks and complications involved, Dr. Kumar performed the surgery with great success. His technical expertise is matched by his wonderful hospitality; he treated my father with immense patience and kindness, keeping our family informed at every step.', 'border-brand-700'],
            ['Rajesh R.',  'Local Guide · 11 reviews',  'Chennai', 'I was admitted to Billroth Hospital under Dr. Kumar for a complicated appendix infection. I am extremely thankful to Dr. Kumar for his expert laparoscopic surgery and outstanding care throughout my treatment. The surgery was done with great precision, and my recovery was smooth and quick. Dr. Kumar is the best doctor for laparoscopic surgery.', 'border-amber-500'],
            ['Prakash M.',   'Son of Patient',          'Chennai', 'My mother was admitted for robotic ventral hernia surgery and it was gone well and my mother completely alright now and moreover the recovery took 1 to 2 weeks max. Highly recommend Dr. Kumaraguru at Billroth Hospitals for robotic ventral hernia surgery! Expertise and care were top-notch. Thanks to Dr. Kumaraguru and the amazing team.', 'border-amber-500'],
            ['Annammal P.',  'Daughter of Patient',     'Chennai', 'Dad was suffering from Inguinal hernia and we consulted Dr. Kumar Hernia surgeon at Billroth hospitals. Dr. Kumar did laparoscopic Inguinal hernia surgery and dad was back on his feet in two days time, in spite of his age, he had a speedy recovery. Thanks to Dr. Kumar. Excellent Hernia surgeon for keyhole Inguinal hernia surgery.', 'border-brand-700'],
            ['Saranya U.',   'Sister of Patient',       'Chennai', 'My brother had undergone complicated inguinal hernia surgery by keyhole method by Dr. Kumar with very less pain and fast recovery. Dr. Kumar clearly explained the procedure and the treatment and gave very good care. Dr. Kumar the very best doctor for keyhole inguinal hernia surgery.', 'border-amber-500'],
            ['Vedamuthu Y.', 'Gallbladder Patient',     'Chennai', 'Dr. Kumar is an excellent doctor who made gallbladder stone surgery for me on 1st December of 2025. He was a caring doctor. I had gallbladder stone. I really thank Dr. Kumar for smooth and safely surgery. The doctor took great care of me. Once again I thank Dr. Kumar for my surgery.', 'border-brand-700'],
        ];
        ?>

        <!-- TESTIMONIAL SLIDER -->
        <div class="relative mb-8" id="reviewSlider">
            <div class="overflow-hidden">
                <div id="reviewTrack" class="flex snap-x snap-mandatory overflow-x-auto scroll-smooth gap-6 pb-2 -mx-2 px-2 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                    <?php foreach ($testimonials as [$name, $role, $place, $quote, $border]): ?>
                        <div class="snap-start shrink-0 w-full sm:w-[calc((100%-1.5rem)/2)] lg:w-[calc((100%-3rem)/3)]">
                            <div class="relative bg-white rounded-lg  shadow-sm hover:shadow-md transition overflow-hidden border-t-4 <?= $border ?> h-full">
                                <svg class="absolute top-4 right-4 w-16 h-16 text-slate-100" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z"/>
                                </svg>
                                <div class="relative p-7">
                                    <div class="flex text-amber-400 mb-4">
                                        <?php for ($i = 0; $i < 5; $i++): ?>
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.293z"/></svg>
                                        <?php endfor; ?>
                                    </div>
                                    <p class="text-slate-700 italic leading-relaxed mb-6">"<?= $quote ?>"</p>
                                    <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                                        <div class="w-11 h-11 rounded-full bg-gradient-to-br from-brand-100 to-cyan-100 text-brand-700 flex items-center justify-center font-bold shrink-0">
                                            <?= strtoupper($name[0]) ?>
                                        </div>
                                        <div class="min-w-0">
                                            <p class="font-bold text-slate-900 leading-tight"><?= $name ?></p>
                                            <p class="text-xs text-brand-700 truncate"><?= $role ?> &middot; <?= $place ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Controls: prev / next + dots -->
            <div class="flex items-center justify-center md:justify-between gap-6 mt-7">
                <div class="hidden md:flex items-center gap-3">
                    <button type="button" id="reviewPrev" class="w-11 h-11 rounded-full border border-slate-200 bg-white hover:bg-brand-700 hover:border-brand-700 hover:text-white text-slate-700 shadow-sm flex items-center justify-center transition" aria-label="Previous review">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                    </button>
                    <button type="button" id="reviewNext" class="w-11 h-11 rounded-full border border-slate-200 bg-white hover:bg-brand-700 hover:border-brand-700 hover:text-white text-slate-700 shadow-sm flex items-center justify-center transition" aria-label="Next review">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>
                </div>

                <div id="reviewDots" class="flex items-center gap-2"></div>

                <div class="hidden md:block w-24"></div>
            </div>
        </div>

        <script>
            (function () {
                var track = document.getElementById('reviewTrack');
                var prev  = document.getElementById('reviewPrev');
                var next  = document.getElementById('reviewNext');
                var dotsW = document.getElementById('reviewDots');
                if (!track) return;

                var slides = Array.from(track.children);
                var perView = function () {
                    if (window.innerWidth >= 1024) return 3;
                    if (window.innerWidth >= 640)  return 2;
                    return 1;
                };
                var pageCount = function () { return Math.max(1, Math.ceil(slides.length / perView())); };
                var current = 0;

                function buildDots() {
                    dotsW.innerHTML = '';
                    for (var i = 0; i < pageCount(); i++) {
                        var b = document.createElement('button');
                        b.type = 'button';
                        b.className = 'transition-all rounded-full ' + (i === current ? 'w-8 h-2 bg-brand-700' : 'w-2 h-2 bg-slate-300 hover:bg-slate-400');
                        b.setAttribute('aria-label', 'Go to review ' + (i + 1));
                        (function (idx) { b.addEventListener('click', function () { goTo(idx); }); })(i);
                        dotsW.appendChild(b);
                    }
                }

                function goTo(page) {
                    current = (page + pageCount()) % pageCount();
                    var firstSlide = slides[Math.min(current * perView(), slides.length - 1)];
                    track.scrollTo({ left: firstSlide.offsetLeft - track.offsetLeft, behavior: 'smooth' });
                    buildDots();
                }

                prev.addEventListener('click', function () { goTo(current - 1); });
                next.addEventListener('click', function () { goTo(current + 1); });

                // Sync dots when user scrolls (e.g. swipes)
                var t;
                track.addEventListener('scroll', function () {
                    clearTimeout(t);
                    t = setTimeout(function () {
                        var idx = Math.round(track.scrollLeft / (slides[0].offsetWidth + 24));
                        var page = Math.floor(idx / perView());
                        if (page !== current) { current = page; buildDots(); }
                    }, 80);
                });

                window.addEventListener('resize', function () { buildDots(); });

                // Auto-advance every 6s, pause on hover
                var auto = setInterval(function () { goTo(current + 1); }, 6000);
                track.parentElement.parentElement.addEventListener('mouseenter', function () { clearInterval(auto); });

                buildDots();
            })();
        </script>

        <!-- STATS STRIP (moved from hero) -->
        <div class="bg-white rounded-lg shadow-sm border border-slate-100 overflow-hidden">
            <div class="grid grid-cols-2 md:grid-cols-4 divide-y md:divide-y-0 md:divide-x divide-slate-100">
                <?php foreach ($stats as $stat): ?>
                    <div class="px-6 py-7 text-center hover:bg-slate-50 transition">
                        <p class="font-display text-3xl md:text-4xl font-bold text-brand-700 leading-none"><?= $stat['num'] ?></p>
                        <p class="text-xs md:text-sm text-slate-500 mt-2"><?= $stat['label'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Instagram Reels Section -->
<section id="reels" class="py-12 md:py-14 bg-gradient-to-br from-slate-50 via-white to-brand-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-10">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Instagram Reels
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold leading-tight text-slate-900 mb-4">
                Patient Awareness &amp; <span class="text-brand-700">Surgical Insights</span>
            </h2>
            <p class="text-slate-600 text-base md:text-lg">
                Stay informed with educational videos, surgical insights, and patient success stories shared by <?= $site['doctor'] ?> on Instagram.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto justify-center">
            <?php
            $reels = [
                'DaUuOTcpF9q',
                'Dam42YcpoaC',
                'Da0MjWKDwbV'
            ];
            foreach ($reels as $reel_id): ?>
                <div class="flex justify-center w-full">
                    <div class="relative w-full aspect-[9/16] max-w-[320px] rounded-2xl overflow-hidden shadow-md border border-slate-100 bg-black">
                        <iframe 
                            src="https://www.instagram.com/reel/<?= $reel_id ?>/embed/" 
                            class="absolute w-full h-[120%] -top-[10%] left-0" 
                            frameborder="0" 
                            scrolling="no" 
                            allowtransparency="true" 
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="mt-10 text-center">
            <a href="<?= $site['social']['instagram'] ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 bg-brand-700 hover:bg-brand-800 text-white font-semibold px-7 py-3 rounded-full shadow-md hover:shadow-lg hover:-translate-y-0.5 transition">
                Follow @drkumar_billrothherniasurgeon on Instagram
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Patient video library -->
<section id="shorts" class="py-12 md:py-16 bg-slate-900 text-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-8">
            <span class="inline-flex items-center gap-2 bg-red-500/20 border border-red-500/30 text-red-400 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M19.14 12.936l-10.4 6a2.015 2.015 0 01-3.007-1.74V5.196a2.016 2.016 0 013.007-1.74l10.4 6a2.016 2.016 0 010 3.48z"/></svg>
                Video Guide
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold leading-tight mb-4">
                Clear Answers to <span class="text-red-400">Common Hernia Questions</span>
            </h2>
            <p class="text-slate-400 text-base md:text-lg">
                Choose the question that matters to you. Each short video is explained by <?= $site['doctor'] ?> in patient-friendly language.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 justify-center">
            <?php
            $shorts = [
                ['title' => 'Which surgery is best: robotic or laparoscopic?', 'id' => 't0cNAzB1zgA', 'tag' => 'Treatment options'],
                ['title' => 'Types of hernia in women: symptoms and warning signs', 'id' => 'LWJmZrMU_Zo', 'tag' => "Women's health"],
                ['title' => "What not to do after hernia surgery", 'id' => 'Po25qGoGk6k', 'tag' => 'Recovery'],
                ['title' => 'Signs of hernia in women and how it is treated', 'id' => '_PNyQ4se0vY', 'tag' => "Women's health"],
                ['title' => 'When does a hernia become dangerous?', 'id' => 'h2adhLOGN4U', 'tag' => 'Warning signs'],
                ['title' => 'Common hernia symptoms in men', 'id' => 'DdVAAIssGGU', 'tag' => "Men's health"],
                ['title' => 'A patient shares their hernia surgery experience', 'id' => 'NpWwTbucxqM', 'tag' => 'Patient story'],
            ];
            foreach ($shorts as $s): ?>
                <article class="group relative flex flex-col max-w-[340px] w-full mx-auto rounded-2xl overflow-hidden bg-slate-800 border border-slate-700 shadow-lg hover:-translate-y-1 hover:shadow-2xl transition duration-300">
                    <div class="youtube-lite relative aspect-video overflow-hidden bg-black" data-video-id="<?= $s['id'] ?>">
                        <img src="https://i.ytimg.com/vi/<?= $s['id'] ?>/hqdefault.jpg" alt="" loading="lazy" width="480" height="360" class="absolute inset-0 w-full h-full object-cover opacity-85 group-hover:opacity-100 group-hover:scale-105 transition duration-500">
                        <button type="button" class="absolute inset-0 w-full h-full flex items-center justify-center focus:outline-none focus:ring-4 focus:ring-inset focus:ring-red-400" aria-label="Play: <?= htmlspecialchars($s['title']) ?>">
                            <span class="w-16 h-12 rounded-xl bg-red-600 shadow-xl flex items-center justify-center group-hover:bg-red-500 group-hover:scale-110 transition" aria-hidden="true">
                                <svg class="w-6 h-6 fill-white translate-x-0.5" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </span>
                        </button>
                    </div>
                    <div class="p-5 bg-gradient-to-t from-slate-900 to-slate-800 flex-1">
                        <p class="text-[11px] font-bold uppercase tracking-widest text-red-400 mb-2"><?= htmlspecialchars($s['tag']) ?></p>
                        <h3 class="font-bold text-base text-white leading-snug">
                            <?= $s['title'] ?>
                        </h3>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="mt-8 text-center">
            <a href="https://youtube.com/@drkumargastrosurgeon/shorts" target="_blank" rel="noopener" class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-3 rounded-full shadow-md transition">
                View All Shorts on YouTube
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
            </a>
        </div>
    </div>
</section>

<script>
document.querySelectorAll('.youtube-lite button').forEach(function (button) {
    button.addEventListener('click', function () {
        var wrapper = button.closest('.youtube-lite');
        var id = wrapper.dataset.videoId;
        var iframe = document.createElement('iframe');
        iframe.className = 'absolute inset-0 w-full h-full';
        iframe.src = 'https://www.youtube-nocookie.com/embed/' + encodeURIComponent(id) + '?autoplay=1&rel=0';
        iframe.title = button.getAttribute('aria-label').replace(/^Play:\s*/, '');
        iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';
        iframe.referrerPolicy = 'strict-origin-when-cross-origin';
        iframe.allowFullscreen = true;
        wrapper.replaceChildren(iframe);
    });
});
</script>

<!-- Blog Section -->
<section id="blog" class="py-10 md:py-12 bg-slate-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-8">
            <div>
                <span class="text-brand-700 font-bold uppercase tracking-[0.2em] text-xs mb-3 block">
                    Health Resources
                </span>
                <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 leading-tight">
                    Latest Insights &amp; Medical Blog
                </h2>
            </div>
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 text-brand-700 hover:text-brand-800 font-bold text-sm uppercase tracking-wider transition group">
                Ask a Question
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-5xl mx-auto">
            <?php
            require_once __DIR__ . '/includes/blog-feed.php';
            $posts = hc360_latest_blog_posts(2);
            foreach ($posts as $p): ?>
                <a href="<?= $p['link'] ?>" class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300 flex flex-col block">
                    <div class="relative overflow-hidden aspect-[16/9] bg-slate-100 shrink-0">
                        <img src="<?= $p['img'] ?>" alt="<?= htmlspecialchars($p['title']) ?>" class="absolute inset-0 w-full h-full object-cover hover:scale-105 transition duration-500" loading="lazy">
                        <span class="absolute top-4 left-4 bg-brand-700 text-white font-bold text-[10px] uppercase tracking-wider px-2.5 py-1 rounded-md shadow-sm">
                            <?= $p['tag'] ?>
                        </span>
                    </div>

                    <div class="p-5 flex flex-col flex-1">
                        <p class="text-xs font-semibold text-slate-400 mb-1.5">
                            <?= $p['date'] ?> &middot; By <?= $site['doctor'] ?>
                        </p>
                        <h3 class="font-display font-bold text-lg md:text-xl text-slate-900 mb-2.5 leading-snug">
                            <?= $p['title'] ?>
                        </h3>
                        <p class="text-sm leading-relaxed text-slate-600 mb-4 flex-1">
                            <?= $p['desc'] ?>
                        </p>
                        <div class="pt-4 border-t border-slate-100 shrink-0">
                            <span class="inline-flex items-center gap-1.5 text-brand-700 hover:text-brand-800 font-bold text-xs uppercase tracking-wider transition group">
                                Read Article
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                            </span>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="contact" class="relative py-16 md:py-24 text-center text-white bg-brand-950 overflow-hidden">
    <!-- Pattern overlay -->
    <svg class="absolute inset-0 w-full h-full text-white/[0.07] pointer-events-none" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <pattern id="cta-plus" x="0" y="0" width="50" height="50" patternUnits="userSpaceOnUse">
                <path d="M22 18h6v4h-6v6h-4v-6h-6v-4h6v-6h4v6z" fill="currentColor"/>
            </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#cta-plus)"/>
    </svg>

    <div class="relative max-w-3xl mx-auto px-4">
        <h2 class="font-display text-2xl md:text-4xl font-bold mb-4 leading-tight">
            Book Your <span class="text-accent">Consultation</span> Today
        </h2>
        <p class="text-brand-50 max-w-xl mx-auto mb-7">
            Expert advice from one of Chennai's most experienced laparoscopic &amp; robotic Hernia surgeons.
        </p>
        <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-7 py-3.5 rounded-full shadow-lg hover:-translate-y-0.5 transition">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
            Call <?= $site['phone'] ?>
        </a>
    </div>
</section>


<?php require __DIR__ . '/includes/footer.php'; ?>
