<?php require_once __DIR__ . '/config.php'; ?>

<!-- ============== INSURANCE NETWORKS ============== -->
<section class="bg-slate-50 border-t border-slate-200 py-12 md:py-16" aria-labelledby="insurance-networks-title">
    <div class="max-w-7xl mx-auto px-4 lg:px-6">
        <div class="max-w-3xl mb-8">
            <span class="inline-flex items-center rounded-full bg-brand-100 text-brand-800 px-3 py-1 text-xs font-bold uppercase tracking-wider mb-3">Insurance Support</span>
            <h2 id="insurance-networks-title" class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-3">Health Insurance Accepted at Billroth Hospitals</h2>
            <p class="text-slate-600 leading-relaxed">We accept corporate health coverage, individual and family-floater policies, and leading private health-insurance networks for eligible treatment with <?= htmlspecialchars($site['doctor_brand']) ?>.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-5">
            <?php
            $insurance_groups = [
                ['Private Insurers', $site['insurance']['private_insurers']],
                ['Major TPAs', $site['insurance']['tpas']],
                ['Government & PSU Networks', $site['insurance']['government_psu']],
            ];
            foreach ($insurance_groups as [$insurance_title, $insurance_names]): ?>
                <div class="bg-white rounded-2xl border border-slate-200 p-5 shadow-sm">
                    <h3 class="font-bold text-slate-900 mb-3"><?= htmlspecialchars($insurance_title) ?></h3>
                    <p class="text-sm text-slate-600 leading-relaxed"><?= htmlspecialchars(implode(', ', $insurance_names)) ?>.</p>
                </div>
            <?php endforeach; ?>
        </div>

        <p class="mt-5 text-xs text-slate-500 leading-relaxed"><strong>Coverage note:</strong> Network participation, cashless authorization, waiting periods, exclusions, room eligibility, and final claim approval depend on your policy and the insurer or TPA. Please confirm coverage before admission.</p>
    </div>
</section>

<!-- ============== FOOTER ============== -->
<footer class="relative bg-slate-900 text-slate-300">

    <!-- Top Accent Bar -->
    <div class="h-1 bg-gradient-to-r from-brand-500 via-cyan-400 to-brand-700"></div>

    <!-- ============== CTA STRIP ============== -->
    <div class="border-b border-white/5 bg-slate-800">
        <div class="max-w-7xl mx-auto px-4 py-5">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="text-center sm:text-left">
                    <h2 class="text-white font-display text-xl lg:text-2xl font-bold leading-tight">Need a Hernia Consultation?</h2>
                    <p class="text-slate-300 text-sm mt-0.5">Speak with Dr. Kumar of Billroth Hospitals today. 29+ years of surgical excellence.</p>
                </div>
                <div class="flex items-center gap-3 shrink-0">
                    <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold text-sm px-5 py-2.5 rounded-full transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                        Call <?= $site['phone'] ?>
                    </a>
                    <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center gap-2 bg-white/5 hover:bg-white/10 text-white font-semibold text-sm px-5 py-2.5 rounded-full border border-white/15 transition-colors">
                        Book Online
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ============== MAIN FOOTER CONTENT ============== -->
    <div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-2 lg:grid-cols-12 gap-x-6 gap-y-8">

        <!-- BRAND + CONTACT -->
        <div class="col-span-2 lg:col-span-4">
            <img src="<?= $base_path ?>assets/logo/herniacare-final-logo.png" alt="Dr. Kumar of Billroth Hospitals - Hernia Care 360" width="200" height="56" class="h-14 w-auto mb-4">

            <p class="text-sm leading-relaxed text-slate-400 mb-4">
                Clinical Lead &amp; HOD, Department of Minimal Access, Robotic, Hernia &amp; Abdominal Wall Reconstruction Surgery at Billroth Hospital, Chennai.
            </p>

            <!-- Trust Stats -->
            <div class="flex items-center gap-4 text-sm mb-4">
                <span><strong class="text-white font-bold">29+</strong> <span class="text-slate-500">Years</span></span>
                <span class="w-px h-4 bg-white/10"></span>
                <span><strong class="text-white font-bold">10K+</strong> <span class="text-slate-500">Hernia Surgeries</span></span>
                <span class="w-px h-4 bg-white/10"></span>
                <span><strong class="text-white font-bold">20K+</strong> <span class="text-slate-500">Laparoscopic</span></span>
            </div>

            <!-- Contact -->
            <ul class="space-y-2 text-sm mb-5">
                <li>
                    <a href="https://maps.google.com/?q=<?= urlencode($site['address']) ?>" target="_blank" rel="noopener" class="flex items-start gap-2.5 text-slate-300 hover:text-white transition-colors">
                        <svg class="w-4 h-4 mt-0.5 text-brand-400 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                        <span><?= $site['address'] ?></span>
                    </a>
                </li>
                <li>
                    <a href="tel:<?= $site['phone_link'] ?>" class="flex items-center gap-2.5 text-slate-300 hover:text-white transition-colors">
                        <svg class="w-4 h-4 text-accent shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                        <span><?= $site['phone'] ?> <span class="text-slate-500">· 24/7 Emergency</span></span>
                    </a>
                </li>
                <li>
                    <a href="mailto:<?= $site['email'] ?>" class="flex items-center gap-2.5 text-slate-300 hover:text-white transition-colors">
                        <svg class="w-4 h-4 text-cyan-400 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/></svg>
                        <span class="break-all"><?= $site['email'] ?></span>
                    </a>
                </li>
            </ul>

            <!-- Social Icons -->
            <div class="flex gap-2">
                <a href="<?= $site['social']['facebook'] ?>" aria-label="Facebook" target="_blank" rel="noopener" class="w-9 h-9 rounded-lg bg-white/5 hover:bg-[#1877F2] border border-white/10 flex items-center justify-center text-slate-300 hover:text-white transition-colors">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="<?= $site['social']['instagram'] ?>" aria-label="Instagram" target="_blank" rel="noopener" class="w-9 h-9 rounded-lg bg-white/5 hover:bg-[#dc2743] border border-white/10 flex items-center justify-center text-slate-300 hover:text-white transition-colors">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2.1 1.8.2 2.2.4.6.2 1 .5 1.4 1 .5.4.8.9 1 1.4.2.4.4 1 .4 2.2.1 1.2.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.2 1.8-.4 2.2-.2.6-.5 1-1 1.4-.4.5-.9.8-1.4 1-.4.2-1 .4-2.2.4-1.2.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-1.8-.2-2.2-.4-.6-.2-1-.5-1.4-1-.5-.4-.8-.9-1-1.4-.2-.4-.4-1-.4-2.2C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.8c.1-1.2.2-1.8.4-2.2.2-.6.5-1 1-1.4.4-.5.9-.8 1.4-1 .4-.2 1-.4 2.2-.4C8.4 2.2 8.8 2.2 12 2.2zm0 5.3a4.5 4.5 0 100 9 4.5 4.5 0 000-9zm5.6-.2a1.05 1.05 0 11-2.1 0 1.05 1.05 0 012.1 0zM12 9.5a2.5 2.5 0 110 5 2.5 2.5 0 010-5z"/></svg>
                </a>
                <a href="<?= $site['social']['linkedin'] ?>" aria-label="LinkedIn" target="_blank" rel="noopener" class="w-9 h-9 rounded-lg bg-white/5 hover:bg-[#0A66C2] border border-white/10 flex items-center justify-center text-slate-300 hover:text-white transition-colors">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
                <a href="<?= $site['social']['youtube'] ?>" aria-label="YouTube" target="_blank" rel="noopener" class="w-9 h-9 rounded-lg bg-white/5 hover:bg-[#FF0000] border border-white/10 flex items-center justify-center text-slate-300 hover:text-white transition-colors">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.5 6.2a3 3 0 00-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 00.5 6.2C0 8.1 0 12 0 12s0 3.9.5 5.8a3 3 0 002.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 002.1-2.1c.5-1.9.5-5.8.5-5.8s0-3.9-.5-5.8zM9.6 15.6V8.4l6.3 3.6-6.3 3.6z"/></svg>
                </a>
                <a href="https://wa.me/<?= $site['phone_link'] ?>" aria-label="WhatsApp" target="_blank" rel="noopener" class="w-9 h-9 rounded-lg bg-white/5 hover:bg-[#25D366] border border-white/10 flex items-center justify-center text-slate-300 hover:text-white transition-colors">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.464 3.488"/></svg>
                </a>
            </div>
        </div>

        <!-- QUICK LINKS -->
        <div class="lg:col-span-2">
            <h3 class="text-white font-bold text-xs uppercase tracking-wider mb-3">Quick Links</h3>
            <ul class="space-y-2 text-sm">
                <?php foreach ($nav as $label => $link): ?>
                    <li><a href="<?= $base_path . $link ?>" class="text-slate-400 hover:text-white transition-colors"><?= $label ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- TREATMENTS -->
        <div class="lg:col-span-3">
            <h3 class="text-white font-bold text-xs uppercase tracking-wider mb-3">Treatments</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="<?= $base_path ?>treatment/hernia-surgeon-in-chennai" class="text-slate-400 hover:text-white transition-colors">Hernia Surgery</a></li>
                <li><a href="<?= $base_path ?>treatment/best-laparoscopic-hernia-surgery-in-chennai" class="text-slate-400 hover:text-white transition-colors">Laparoscopic Surgery</a></li>
                <li><a href="<?= $base_path ?>best-robotic-hernia-surgery-in-chennai" class="text-slate-400 hover:text-white transition-colors">Robotic Surgery</a></li>
                <li><a href="<?= $base_path ?>treatment/etep-technique-expert-in-chennai" class="text-slate-400 hover:text-white transition-colors">eTEP Repair</a></li>
                <li><a href="<?= $base_path ?>treatment/mesh-hernia-repair-in-chennai" class="text-slate-400 hover:text-white transition-colors">Mesh Repair</a></li>
                <li><a href="<?= $base_path ?>treatment/recovery" class="text-slate-400 hover:text-white transition-colors">Recovery</a></li>
                <li><a href="<?= $base_path ?>treatment/abdominal-wall-reconstruction-in-chennai" class="text-slate-400 hover:text-white transition-colors">Abdominal Wall Reconstruction</a></li>
                <li><a href="<?= $base_path ?>treatment/diastasis-recti" class="text-slate-400 hover:text-white transition-colors">Diastasis Recti</a></li>
            </ul>
        </div>

        <!-- HERNIA TYPES -->
        <div class="col-span-2 lg:col-span-3">
            <h3 class="text-white font-bold text-xs uppercase tracking-wider mb-3">Hernia Types</h3>
            <div class="grid grid-cols-2 gap-x-4 gap-y-2 text-sm">
                <a href="<?= $base_path ?>my_types/inguinal-hernia-treatment-in-chennai" class="text-slate-400 hover:text-white transition-colors">Inguinal</a>
                <a href="<?= $base_path ?>my_types/umbilical-hernia-treatment-in-chennai" class="text-slate-400 hover:text-white transition-colors">Umbilical</a>
                <a href="<?= $base_path ?>my_types/incisional-hernia-treatment-in-chennai" class="text-slate-400 hover:text-white transition-colors">Incisional</a>
                <a href="<?= $base_path ?>my_types/ventral-hernia-treatment-in-chennai" class="text-slate-400 hover:text-white transition-colors">Ventral</a>
                <a href="<?= $base_path ?>my_types/hiatal-hernia-surgery-in-chennai" class="text-slate-400 hover:text-white transition-colors">Hiatal</a>
                <a href="<?= $base_path ?>my_types/femoral-hernia-treatment-in-chennai" class="text-slate-400 hover:text-white transition-colors">Femoral</a>
                <a href="<?= $base_path ?>my_types/strangulated-hernia-surgery-in-chennai" class="text-slate-400 hover:text-white transition-colors">Strangulated</a>
                <a href="<?= $base_path ?>my_types/sports-hernia" class="text-slate-400 hover:text-white transition-colors">Sports</a>
                <a href="<?= $base_path ?>special-considerations/complex-hernia-info" class="text-slate-400 hover:text-white transition-colors">Complex</a>
                <a href="<?= $base_path ?>my_types/recurrent-hernia" class="text-slate-400 hover:text-white transition-colors">Recurrent</a>
                <a href="<?= $base_path ?>my_types/rare-hernia" class="text-slate-400 hover:text-white transition-colors">Rare Types</a>
                <a href="<?= $base_path ?>my_types/epigastric-hernia-surgery-in-chennai" class="text-slate-400 hover:text-white transition-colors">Epigastric</a>
                <a href="<?= $base_path ?>my_types/rare-hernia#supraumbilical" class="text-slate-400 hover:text-white transition-colors">Supraumbilical</a>
                <a href="<?= $base_path ?>my_types/rare-hernia#lumbar" class="text-slate-400 hover:text-white transition-colors">Lumbar</a>
                <a href="<?= $base_path ?>my_types/rare-hernia#spigelian" class="text-slate-400 hover:text-white transition-colors">Spigelian</a>
                <a href="<?= $base_path ?>my_types/rare-hernia#diaphragmatic" class="text-slate-400 hover:text-white transition-colors">Diaphragmatic</a>
            </div>
        </div>
    </div>

    <!-- ============== LEARN MORE ROW ============== -->
    <div class="border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 py-4">
            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-sm">
                <span class="text-white font-bold text-xs uppercase tracking-wider">See rare hernia types</span>
                <a href="<?= $base_path ?>hernia/what-is-hernia" class="text-slate-400 hover:text-white transition-colors">What is Hernia</a>
                <a href="<?= $base_path ?>hernia/causes" class="text-slate-400 hover:text-white transition-colors">Causes</a>
                <a href="<?= $base_path ?>hernia/symptoms" class="text-slate-400 hover:text-white transition-colors">Symptoms</a>
                <a href="<?= $base_path ?>hernia/diagnosis" class="text-slate-400 hover:text-white transition-colors">Diagnosis</a>
                <a href="<?= $base_path ?>hernia/complications" class="text-slate-400 hover:text-white transition-colors">Complications</a>
                <a href="<?= $base_path ?>second-opinion" class="text-slate-400 hover:text-white transition-colors">Second Opinion</a>
                <a href="<?= $base_path ?>resources/symptom-checker" class="text-slate-400 hover:text-white transition-colors">Symptom Spotter</a>
                <a href="<?= $base_path ?>patient-testimonials" class="text-slate-400 hover:text-white transition-colors">Patient Testimonials</a>
                <a href="<?= $base_path ?>resources/faqs" class="text-slate-400 hover:text-white transition-colors">FAQs</a>
                <a href="<?= $base_path ?>book-appointment" class="text-brand-300 hover:text-white font-semibold transition-colors">Book Appointment &rarr;</a>
            </div>
        </div>
    </div>

    <!-- ============== BOTTOM BAR ============== -->
    <div class="border-t border-white/5 bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 py-4">
            <div class="flex flex-col md:flex-row justify-between items-center gap-2 text-xs">
                <p class="text-slate-400 text-center md:text-left">
                    &copy; <?= date('Y') ?> <?= $site['name'] ?>. All rights reserved.
                </p>
                <div class="flex items-center gap-4 text-slate-400">
                    <a href="<?= $base_path ?>privacy-policy" class="hover:text-white transition-colors">Privacy Policy</a>
                    <span class="w-1 h-1 rounded-full bg-slate-600"></span>
                    <a href="<?= $base_path ?>terms-conditions" class="hover:text-white transition-colors">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </div>

</footer>

<!-- Spacer so the mobile sticky bar never covers footer content -->
<div class="h-16 lg:hidden"></div>

<script>
(function() {
    // Global Premium FAQ toggle handler using Event Delegation for bulletproof robustness
    document.addEventListener('click', function(e) {
        const toggle = e.target.closest('.faq-toggle');
        if (!toggle) return;

        e.preventDefault();

        const item = toggle.closest('.faq-item');
        if (!item) return;

        const content = item.querySelector('.faq-content');
        const symbol = item.querySelector('.faq-symbol');
        const isOpen = item.classList.contains('active');

        // Close all other items in the same category/container
        const parentSection = item.closest('.space-y-4') || item.closest('.faq-category') || item.parentElement;
        if (parentSection) {
            parentSection.querySelectorAll('.faq-item').forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                    const otherContent = otherItem.querySelector('.faq-content');
                    if (otherContent) otherContent.classList.add('hidden');

                    const otherSymbol = otherItem.querySelector('.faq-symbol');
                    if (otherSymbol) {
                        otherSymbol.textContent = '+';
                    }
                }
            });
        }

        // Toggle clicked item
        if (isOpen) {
            item.classList.remove('active');
            if (content) content.classList.add('hidden');
            if (symbol) symbol.textContent = '+';
        } else {
            item.classList.add('active');
            if (content) content.classList.remove('hidden');
            if (symbol) symbol.textContent = ', ';
        }
    });
})();
</script>

<!-- Floating Call Button (Bouncing) - Appears on All Pages -->
<a href="tel:<?= $site['phone_link'] ?>" class="floating-call-btn" aria-label="Call now">
    <span class="ripple"></span>
    <span class="ripple ripple-2"></span>
    <span class="ripple ripple-3"></span>
    <span class="floating-call-circle">
        <svg class="w-6 h-6 text-white relative z-10" fill="currentColor" viewBox="0 0 20 20">
            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
        </svg>
    </span>
</a>

<style>
    .floating-call-btn {
        position: fixed;
        bottom: 90px;
        right: 24px;
        z-index: 9999;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #f59e0b;
        color: #ffffff;
        padding: 0;
        width: 56px;
        height: 56px;
        border-radius: 9999px;
        box-shadow: 0 10px 30px -5px rgba(245, 158, 11, 0.5), 0 8px 15px -6px rgba(0, 0, 0, 0.2);
        font-weight: 700;
        font-size: 15px;
        text-decoration: none;
        transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
        animation: float-bounce 2s ease-in-out infinite;
        overflow: hidden;
    }

    .floating-call-circle {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        background: #ea580c;
        border-radius: 9999px;
        box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.15);
    }

    .floating-call-btn:hover {
        animation: none;
        background: #ea580c;
        transform: scale(1.08) translateY(-2px);
        box-shadow: 0 15px 40px -5px rgba(245, 158, 11, 0.6), 0 10px 20px -6px rgba(0, 0, 0, 0.25);
    }

    .floating-call-btn:active {
        transform: scale(0.95);
    }

    @keyframes float-bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    .floating-call-btn .ripple {
        position: absolute;
        inset: 0;
        border-radius: 9999px;
        background: rgba(245, 158, 11, 0.5);
        animation: ripple-expand 2s ease-out infinite;
        z-index: 0;
    }

    .floating-call-btn .ripple-2 { animation-delay: 0.66s; }
    .floating-call-btn .ripple-3 { animation-delay: 1.33s; }

    @keyframes ripple-expand {
        0%   { transform: scale(1);   opacity: 0.6; }
        100% { transform: scale(1.6); opacity: 0; }
    }

    @media (max-width: 1023px) {
        .floating-call-btn {
            bottom: calc(82px + env(safe-area-inset-bottom));
            right: 18px;
        }
    }

    @media (max-width: 479px) {
        .floating-call-btn {
            width: 50px;
            height: 50px;
            right: 12px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .floating-call-btn,
        .floating-call-btn .ripple {
            animation: none;
        }
    }
</style>

<!-- Mobile Sticky Bottom Navbar -->
<div class="lg:hidden fixed bottom-0 left-0 right-0 z-50 pb-[env(safe-area-inset-bottom)]">
    <!-- Backdrop with gradient + blur -->
    <div class="absolute inset-0 bg-white/95 backdrop-blur-md border-t border-slate-200/80 shadow-[0_-8px_24px_rgba(0,0,0,0.08)]"></div>

    <!-- Decorative top accent -->
    <div class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-brand-400 via-cyan-400 to-brand-600"></div>

    <nav class="relative flex items-center justify-center max-w-md mx-auto px-2 py-2.5" aria-label="Mobile quick actions">
        <div class="flex items-center justify-between w-full gap-1">

            <!-- Facebook -->
            <a href="<?= $site['social']['facebook'] ?>" target="_blank" rel="noopener" class="group flex flex-col items-center gap-1 flex-1 py-1 rounded-xl hover:bg-slate-50 transition-all duration-200" aria-label="Facebook">
                <div class="relative w-10 h-10 rounded-2xl bg-[#1877F2] flex items-center justify-center shadow-sm shadow-blue-500/30 group-hover:scale-110 group-active:scale-95 transition-transform duration-200">
                    <svg class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </div>
                <span class="text-[9px] text-slate-600 font-semibold leading-none tracking-wide">Facebook</span>
            </a>

            <!-- Instagram -->
            <a href="<?= $site['social']['instagram'] ?>" target="_blank" rel="noopener" class="group flex flex-col items-center gap-1 flex-1 py-1 rounded-xl hover:bg-slate-50 transition-all duration-200" aria-label="Instagram">
                <div class="relative w-10 h-10 rounded-2xl flex items-center justify-center overflow-hidden shadow-sm shadow-pink-500/30 group-hover:scale-110 group-active:scale-95 transition-transform duration-200">
                    <img src="<?= $base_path ?>assets/logo/instagram.svg" alt="Instagram" class="w-full h-full object-cover">
                </div>
                <span class="text-[9px] text-slate-600 font-semibold leading-none tracking-wide">Instagram</span>
            </a>

            <!-- YouTube -->
            <a href="<?= $site['social']['youtube'] ?>" target="_blank" rel="noopener" class="group flex flex-col items-center gap-1 flex-1 py-1 rounded-xl hover:bg-slate-50 transition-all duration-200" aria-label="YouTube">
                <div class="relative w-10 h-10 rounded-2xl bg-[#FF0000] flex items-center justify-center shadow-sm shadow-red-500/30 group-hover:scale-110 group-active:scale-95 transition-transform duration-200">
                    <svg class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M21.582 6.186a2.506 2.506 0 0 0-1.768-1.768C18.254 4 12 4 12 4s-6.254 0-7.814.418A2.506 2.506 0 0 0 2.418 6.186C2 7.746 2 12 2 12s0 4.254.418 5.814a2.506 2.506 0 0 0 1.768 1.768C5.746 20 12 20 12 20s6.254 0 7.814-.418a2.506 2.506 0 0 0 1.768-1.768C22 16.254 22 12 22 12s0-4.254-.418-5.814zM10 15.464V8.536L16 12l-6 3.464z"/>
                    </svg>
                </div>
                <span class="text-[9px] text-slate-600 font-semibold leading-none tracking-wide">YouTube</span>
            </a>

            <!-- WhatsApp -->
            <a href="https://wa.me/<?= $site['phone_link'] ?>" target="_blank" rel="noopener" class="group flex flex-col items-center gap-1 flex-1 py-1 rounded-xl hover:bg-slate-50 transition-all duration-200" aria-label="WhatsApp">
                <div class="relative w-10 h-10 rounded-2xl bg-[#25D366] flex items-center justify-center shadow-sm shadow-green-500/30 group-hover:scale-110 group-active:scale-95 transition-transform duration-200">
                    <span class="absolute -top-0.5 -right-0.5 w-2.5 h-2.5 bg-green-400 rounded-full ring-2 ring-white animate-pulse"></span>
                    <svg class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/>
                    </svg>
                </div>
                <span class="text-[9px] text-slate-600 font-semibold leading-none tracking-wide">WhatsApp</span>
            </a>

            <!-- Book Now (primary CTA) -->
            <a href="<?= $base_path ?>book-appointment" class="group flex flex-col items-center gap-1 flex-1 py-1 rounded-xl transition-all duration-200" aria-label="Book appointment">
                <div class="relative w-10 h-10 rounded-2xl bg-gradient-to-br from-brand-500 via-brand-600 to-brand-700 flex items-center justify-center shadow-md shadow-brand-500/40 ring-1 ring-white/20 group-hover:scale-110 group-active:scale-95 group-hover:shadow-lg group-hover:shadow-brand-500/50 transition-all duration-200">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <rect x="3" y="4" width="18" height="18" rx="2.5"/>
                        <path d="M16 2v4M8 2v4M3 10h18"/>
                        <path d="M12 14v4M10 16h4"/>
                    </svg>
                </div>
                <span class="text-[9px] text-brand-700 font-bold leading-none tracking-wide">Book Now</span>
            </a>

        </div>
    </nav>
</div>

<!-- Floating WhatsApp Button (Desktop View Only) -->
<a href="https://wa.me/<?= $site['phone_link'] ?>" target="_blank" rel="noopener" class="hidden lg:flex fixed bottom-6 right-6 z-50 group" aria-label="WhatsApp Dr. Kumar of Billroth Hospitals">
    <div class="relative flex items-center">
        <!-- Hover tooltip/label -->
        <div class="absolute right-full mr-3 bg-white rounded-xl shadow-2xl p-4 whitespace-nowrap opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-x-2 group-hover:translate-x-0 border border-slate-100">
            <p class="font-bold text-slate-900"><?= $site['phone'] ?></p>
            <p class="text-sm text-slate-500">WhatsApp Us</p>
        </div>
        <!-- Button circle -->
        <div class="w-14 h-14 bg-[#25D366] hover:bg-[#20ba5a] text-white rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 shadow-green-500/20">
            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.464 3.488"/></svg>
        </div>
    </div>
</a>

</body>
</html>
