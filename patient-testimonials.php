<?php
$page_title = 'Patient Reviews and Recovery Stories | Dr. Kumar of Billroth Hospitals';
$page_description = 'Read reviews and watch recovery stories from patients who had robotic, laparoscopic and complex hernia repair with Dr. Kumar of Billroth Hospitals, Chennai.';
$page_keywords = 'patient reviews Dr. Kumar of Billroth Hospitals, hernia surgery testimonials chennai, hernia surgery success stories, laparoscopic hernia recovery reviews, patient feedback billroth hospital';

require __DIR__ . '/includes/header.php';
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
            <span>Patient Corner</span>
            <span class="mx-2">/</span>
            <span class="text-white">Testimonials</span>
        </nav>
        <h1 class="font-display text-4xl md:text-5xl font-bold mb-4">Patient Testimonials</h1>
        <p class="text-xl text-brand-100 max-w-2xl">Real stories of recovery, health restored, and lives changed through advanced laparoscopic, robotic, and complex hernia surgeries.</p>
    </div>
</section>

<!-- Featured Video Testimonials -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center gap-4 mb-10">
            <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-600 flex items-center justify-center shrink-0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-slate-900 font-display">Featured Video Story</h2>
                <p class="text-slate-600 text-sm md:text-base">Watch real patient share their treatment and recovery experience</p>
            </div>
        </div>

        <div class="grid lg:grid-cols-12 gap-8 items-center bg-slate-50 p-6 md:p-8 rounded-3xl border border-slate-100 shadow-sm">
            <div class="lg:col-span-7">
                <div class="aspect-video w-full rounded-2xl overflow-hidden shadow-lg border border-slate-200 bg-black">
                    <iframe class="w-full h-full" 
                            src="https://www.youtube.com/embed/NpWwTbucxqM" 
                            title="Patient Testimonial | Dr. Kumar of Billroth Hospitals"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="lg:col-span-5 space-y-6">
                <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">
                    Patient Spotlight
                </span>
                <h3 class="font-display text-2xl md:text-3xl font-bold text-slate-950 leading-snug">
                    Inguinal Hernia Surgery Journey & Recovery
                </h3>
                <p class="text-slate-600 leading-relaxed">
                    Watch our patient share their direct experience from diagnosis to post-operative recovery. They detail the clear guidance, professional surgical care, and rapid return to daily activities under the treatment of Dr. Kumar of Billroth Hospitals and the clinical team at Billroth Hospitals.
                </p>
                <div class="grid grid-cols-2 gap-4 border-t border-slate-200 pt-6">
                    <div>
                        <p class="text-3xl font-extrabold text-brand-700">100%</p>
                        <p class="text-xs text-slate-500 font-medium uppercase tracking-wider mt-1">Patient Comfort</p>
                    </div>
                    <div>
                        <p class="text-3xl font-extrabold text-brand-700">48 Hrs</p>
                        <p class="text-xs text-slate-500 font-medium uppercase tracking-wider mt-1">Average Mobilitative Recovery</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Written Testimonials Section -->
<section class="py-16 bg-slate-50 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-brand-700 font-bold uppercase tracking-[0.2em] text-xs mb-3 block">
                Verified Feedback
            </span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                What Our Patients Say
            </h2>
            <p class="text-slate-600">
                Explore reviews directly based on Google Business ratings and patient recovery feedback celebrating compassionate surgical care.
            </p>
        </div>

        <!-- Filter Tabs -->
        <div class="flex flex-wrap justify-center gap-2 mb-10 select-none">
            <button class="px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 shadow-sm border bg-brand-700 text-white border-transparent hover:scale-105 filter-tab active" data-filter="all">
                All Stories
            </button>
            <button class="px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 shadow-sm border bg-white text-slate-700 border-slate-200 hover:border-brand-500 hover:text-brand-700 hover:scale-105 filter-tab" data-filter="groin">
                Groin (Inguinal/Femoral) Hernia
            </button>
            <button class="px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 shadow-sm border bg-white text-slate-700 border-slate-200 hover:border-brand-500 hover:text-brand-700 hover:scale-105 filter-tab" data-filter="abdomen">
                Abdomen (Ventral/Umbilical) Hernia
            </button>
            <button class="px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 shadow-sm border bg-white text-slate-700 border-slate-200 hover:border-brand-500 hover:text-brand-700 hover:scale-105 filter-tab" data-filter="gallbladder-general">
                Gallbladder & General Surgery
            </button>
        </div>

        <?php
        $detailedTestimonials = [
            [
                'name' => 'Ruby A.',
                'role' => 'Gallbladder & Hernia Patient',
                'place' => 'Chennai',
                'quote' => 'Dr. Kumar of Billroth Hospitals is an excellent surgeon. I recently underwent gallbladder and hernia surgery, and the entire experience was smooth and reassuring. Dr. Kumar of Billroth Hospitals explained everything clearly, made me feel comfortable, and the surgery went very well. My recovery has been quick and trouble-free thanks to his expertise and care. I am truly grateful for his professionalism and kindness. Highly recommended!',
                'border' => 'border-brand-700',
                'categories' => ['gallbladder', 'abdomen']
            ],
            [
                'name' => 'Mercy F.',
                'role' => 'Local Guide',
                'place' => 'Chennai',
                'quote' => 'I underwent gall bladder surgery under Dr. Kumar of Billroth Hospitals. From the initial consultation to post-operative care, the doctor was extremely professional, patient, and reassuring. All my doubts were answered clearly, and I was guided properly regarding recovery and diet. The surgery went smoothly, and my recovery has been good. I truly appreciate the care and support provided. I highly recommend Dr. Kumar of Billroth Hospitals to anyone needing surgical care.',
                'border' => 'border-brand-700',
                'categories' => ['gallbladder']
            ],
            [
                'name' => 'Thirulogachandar D.',
                'role' => 'Local Guide · 24 reviews',
                'place' => 'Chennai',
                'quote' => 'Reviewing this doctor after a month of dad\'s surgery and follow ups. Had admitted my dad for Hernia Surgery. The treatment by Dr. Kumar of Billroth Hospitals was excellent, even at the follow-ups. Very clear on his suggestions, well mannered, explaining without jargons. Best and Go To doctor for Gastro related. Very polite and composed dr.',
                'border' => 'border-brand-700',
                'categories' => ['groin']
            ],
            [
                'name' => 'AAA Electricals',
                'role' => 'Local Guide · 3 reviews',
                'place' => 'Chennai',
                'quote' => 'I am proud to share my experience with Dr. Kumar of Billroth Hospitals. He performed my grandfather\'s hernia operation, and it was a great success. My grandfather is now doing very well, thanks to Dr. Kumar of Billroth Hospitals\'s excellent treatment and successful surgery. I highly recommend him.',
                'border' => 'border-accent',
                'categories' => ['groin', 'abdomen']
            ],
            [
                'name' => 'Suresh A.',
                'role' => 'Local Guide · 19 reviews',
                'place' => 'Chennai',
                'quote' => 'Exceptional surgeon with outstanding patient care. I am writing this review one month after my Supra Umbilical Hernia surgery, and I can confidently say that choosing Dr. Kumar of Billroth Hospitals Sir (Billroth Hospital) was the best decision. The surgery went smoothly and recovery has been excellent.',
                'border' => 'border-brand-700',
                'categories' => ['abdomen']
            ],
            [
                'name' => 'Elango K.',
                'role' => 'Hernia Patient',
                'place' => 'Purasawalkam',
                'quote' => '5/5 stars for Dr. Kumar of Billroth Hospitals. After a complicated gallbladder surgery at another hospital led to complications, Dr. Kumar of Billroth Hospitals completely turned things around. His professionalism, reassurance, and clear communication instantly put me at ease. The surgery was a success and recovery has been smooth sailing. Highly recommend!',
                'border' => 'border-accent',
                'categories' => ['gallbladder']
            ],
            [
                'name' => 'Anitha S.',
                'role' => 'Family Member',
                'place' => 'Chennai',
                'quote' => 'My father underwent laparoscopic surgery with Dr. Kumar of Billroth Hospitals for colon growth and is absolutely normal now. Dr. Kumar of Billroth Hospitals is the best laparoscopic doctor. He is very friendly, interacts well with all patients, answers all our questions, and gives exceptional care to his patients. Highly recommend.',
                'border' => 'border-brand-700',
                'categories' => ['general']
            ],
            [
                'name' => 'Mubarak H.',
                'role' => 'Local Guide · 20 reviews',
                'place' => 'Chennai',
                'quote' => 'Highly recommend Dr. Kumar of Billroth Hospitals. He successfully performed a laparoscopic surgery for my father. Despite the risks and complications involved, Dr. Kumar of Billroth Hospitals performed the surgery with great success. His technical expertise is matched by his wonderful hospitality; he treated my father with immense patience and kindness, keeping our family informed at every step.',
                'border' => 'border-brand-700',
                'categories' => ['general']
            ],
            [
                'name' => 'Rajesh R.',
                'role' => 'Local Guide · 11 reviews',
                'place' => 'Chennai',
                'quote' => 'I was admitted to Billroth Hospital under Dr. Kumar of Billroth Hospitals for a complicated appendix infection. I am extremely thankful to Dr. Kumar of Billroth Hospitals for his expert laparoscopic surgery and outstanding care throughout my treatment. The surgery was done with great precision, and my recovery was smooth and quick. Dr. Kumar of Billroth Hospitals is the best doctor for laparoscopic surgery.',
                'border' => 'border-accent',
                'categories' => ['general']
            ],
            [
                'name' => 'Prakash M.',
                'role' => 'Son of Patient',
                'place' => 'Chennai',
                'quote' => 'My mother was admitted for robotic ventral hernia surgery and it was gone well and my mother completely alright now and moreover the recovery took 1 to 2 weeks max. Highly recommend Dr. Kumaraguru at Billroth Hospitals for robotic ventral hernia surgery! Expertise and care were top-notch. Thanks to Dr. Kumaraguru and the amazing team.',
                'border' => 'border-accent',
                'categories' => ['abdomen']
            ],
            [
                'name' => 'Annammal P.',
                'role' => 'Daughter of Patient',
                'place' => 'Chennai',
                'quote' => 'Dad was suffering from Inguinal hernia and we consulted Dr. Kumar of Billroth Hospitals Hernia surgeon at Billroth hospitals. Dr. Kumar of Billroth Hospitals did laparoscopic Inguinal hernia surgery and dad was back on his feet in two days time, in spite of his age, he had a speedy recovery. Thanks to Dr. Kumar of Billroth Hospitals. Excellent Hernia surgeon for keyhole Inguinal hernia surgery.',
                'border' => 'border-brand-700',
                'categories' => ['groin']
            ],
            [
                'name' => 'Saranya U.',
                'role' => 'Sister of Patient',
                'place' => 'Chennai',
                'quote' => 'My brother had undergone complicated inguinal hernia surgery by keyhole method by Dr. Kumar of Billroth Hospitals with very less pain and fast recovery. Dr. Kumar of Billroth Hospitals clearly explained the procedure and the treatment and gave very good care. Dr. Kumar of Billroth Hospitals the very best doctor for keyhole inguinal hernia surgery.',
                'border' => 'border-accent',
                'categories' => ['groin']
            ],
            [
                'name' => 'Idhayachandran S.',
                'role' => 'Ventral Hernia Patient',
                'place' => 'Chennai',
                'quote' => 'Thanks to Dr. Kumaraguru for Ventral Hernia Surgery. Before visiting, I was afraid of the treatment procedure, but Dr. Kumaraguru explained clearly and cleared all my doubts. Operation was done successfully, and I recovered very fast. Highly recommended surgeon in Chennai.',
                'border' => 'border-brand-700',
                'categories' => ['abdomen']
            ],
            [
                'name' => 'Vedamuthu Y.',
                'role' => 'Gallbladder Patient',
                'place' => 'Chennai',
                'quote' => 'Dr. Kumar of Billroth Hospitals is an excellent doctor who made gallbladder stone surgery for me on 1st December of 2025. He was a caring doctor. I had gallbladder stone. I really thank Dr. Kumar of Billroth Hospitals for smooth and safely surgery. The doctor took great care of me. Once again I thank Dr. Kumar of Billroth Hospitals for my surgery.',
                'border' => 'border-brand-700',
                'categories' => ['gallbladder']
            ],
        ];
        ?>

        <!-- Testimonial Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" id="testimonialsGrid">
            <?php foreach ($detailedTestimonials as $review): 
                $catString = implode(' ', $review['categories']);
            ?>
                <div class="testimonial-card bg-white rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden border-t-4 <?= $review['border'] ?> flex flex-col h-full opacity-100 transform scale-100" 
                     data-categories="<?= $catString ?>">
                    <div class="p-6 md:p-8 flex flex-col justify-between flex-1 relative">
                        <svg class="absolute top-4 right-4 w-12 h-12 text-slate-100 pointer-events-none" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z"/>
                        </svg>
                        
                        <div class="relative z-10 flex-1">
                            <div class="flex text-amber-400 mb-4">
                                <?php for ($i = 0; $i < 5; $i++): ?>
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.293z"/></svg>
                                <?php endfor; ?>
                            </div>
                            <p class="text-slate-700 italic leading-relaxed mb-6">"<?= $review['quote'] ?>"</p>
                        </div>

                        <div class="relative z-10 flex items-center gap-3 pt-4 border-t border-slate-100 mt-auto">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-brand-100 to-cyan-100 text-brand-700 flex items-center justify-center font-bold shrink-0 text-sm">
                                <?= strtoupper($review['name'][0]) ?>
                            </div>
                            <div class="min-w-0">
                                <p class="font-bold text-slate-900 leading-tight text-sm md:text-base"><?= $review['name'] ?></p>
                                <p class="text-xs text-brand-700 truncate"><?= $review['role'] ?> &middot; <?= $review['place'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Leave a Review Section -->
<section class="py-16 bg-white border-t border-slate-200/50">
    <div class="max-w-4xl mx-auto px-4">
        <div class="bg-gradient-to-br from-brand-900 to-brand-950 text-white rounded-3xl p-8 md:p-12 shadow-lg border border-brand-800 text-center relative overflow-hidden">
            <!-- Background Glow -->
            <div class="absolute -right-32 -top-32 w-80 h-80 bg-brand-700/20 rounded-full blur-3xl pointer-events-none"></div>
            
            <div class="relative z-10">
                <span class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-white/10 text-amber-400 mb-6">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.293z"/></svg>
                </span>
                
                <h2 class="font-display text-2xl md:text-3xl font-bold mb-4">Have you been treated by Dr. Kumar of Billroth Hospitals?</h2>
                <p class="text-brand-100 text-base md:text-lg mb-8 max-w-2xl mx-auto">
                    Your feedback helps other patients make informed, confident decisions about their surgical care. Please share your recovery story on Google.
                </p>
                
                <a href="<?= $site['clinic']['review_url'] ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 bg-gradient-to-r from-accent to-amber-500 hover:from-amber-500 hover:to-amber-600 text-white font-bold px-8 py-4 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                    Write a Google Review
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="bg-gradient-to-r from-brand-700 to-brand-800 py-16 text-white text-center">
    <div class="max-w-4xl mx-auto px-4">
        <h2 class="font-display text-3xl md:text-4xl font-bold mb-4">Start Your Recovery Journey Today</h2>
        <p class="text-brand-100 text-lg mb-8 max-w-2xl mx-auto">
            Schedule a comprehensive consult with Dr. Kumar of Billroth Hospitals for a personalized diagnosis, detailed surgical review, and recovery planning.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="book-appointment" class="inline-flex items-center justify-center gap-2 bg-white text-brand-800 font-bold px-8 py-4 rounded-xl hover:bg-brand-50 transition shadow-md">
                Book Appointment
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            </a>
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center justify-center gap-2 bg-accent text-white font-bold px-8 py-4 rounded-xl hover:bg-amber-600 transition shadow-md">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                Call Now
            </a>
        </div>
    </div>
</section>

<!-- Filter Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.filter-tab');
    const cards = document.querySelectorAll('.testimonial-card');

    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            // Update active tab styles
            tabs.forEach(t => {
                t.classList.remove('bg-brand-700', 'text-white', 'border-transparent');
                t.classList.add('bg-white', 'text-slate-700', 'border-slate-200');
            });
            this.classList.remove('bg-white', 'text-slate-700', 'border-slate-200');
            this.classList.add('bg-brand-700', 'text-white', 'border-transparent');

            const filterValue = this.getAttribute('data-filter');

            cards.forEach(card => {
                const categories = card.getAttribute('data-categories').split(' ');
                
                // Animate card filter
                if (filterValue === 'all') {
                    card.style.display = 'flex';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    let hasMatch = false;
                    
                    // Match rules
                    if (filterValue === 'groin' && categories.includes('groin')) {
                        hasMatch = true;
                    } else if (filterValue === 'abdomen' && categories.includes('abdomen')) {
                        hasMatch = true;
                    } else if (filterValue === 'gallbladder-general' && (categories.includes('gallbladder') || categories.includes('general'))) {
                        hasMatch = true;
                    }

                    if (hasMatch) {
                        card.style.display = 'flex';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'scale(1)';
                        }, 50);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'scale(0.95)';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 300);
                    }
                }
            });
        });
    });
});
</script>

<?php require __DIR__ . '/includes/footer.php'; ?>
