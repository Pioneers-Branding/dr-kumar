<?php
$page_title = 'Thank You for Contacting Dr. Kumar of Billroth Hospitals | Hernia Chennai';
$page_description = 'Thank you for contacting Dr. Kumar of Billroth Hospitals in Chennai. Your enquiry has reached our team and someone will get back to you again very shortly.';
// Post-submission confirmation page. No search intent, and it should never be
// a landing page from search results, so it stays out of the index.
$page_robots = 'noindex, follow, max-image-preview:large';
require __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="success-pattern" x="0" y="0" width="100" height="20" patternUnits="userSpaceOnUse">
                    <path d="M0 10 Q50 0 100 10" fill="none" stroke="white" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#success-pattern)"/>
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-24">
        <div class="max-w-3xl text-center mx-auto">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur px-4 py-2 rounded-full text-sm font-medium mb-6">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Submission Received
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                Thank You,<br>
                <span class="text-accent">We've Got It!</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl mx-auto">
                Your request has been received successfully. Our care team at Hernia Care 360 will review your details and get back to you within 24 hours.
            </p>
        </div>
    </div>
</section>

<!-- Thank You Content Section -->
<div class="relative py-14 md:py-16 bg-white">
    <div class="relative max-w-3xl mx-auto px-4 text-center w-full">

        <!-- Success icon with animated rings -->
        <div class="relative inline-flex items-center justify-center mb-6">
            <span class="absolute inline-flex h-32 w-32 rounded-full bg-green-400/20 animate-ping"></span>
            <span class="absolute inline-flex h-28 w-28 rounded-full bg-green-400/30"></span>
            <div class="relative inline-flex items-center justify-center w-24 h-24 bg-gradient-to-br from-green-400 to-green-600 rounded-full shadow-2xl shadow-green-500/40 ring-4 ring-white">
                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M5 13l4 4L19 7"/>
                </svg>
            </div>
        </div>

        <span class="inline-flex items-center gap-2 bg-green-100 text-green-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-5">
            <span class="w-1.5 h-1.5 rounded-full bg-green-600"></span>
            Submission Successful
        </span>

        <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 leading-tight mb-4">
            What Happens Next?
        </h2>

        <p class="text-base text-slate-600 leading-relaxed mb-10 max-w-2xl mx-auto">
            Our team at <strong>Hernia Care 360</strong> will personally review your details and reach out to confirm your appointment.
        </p>

        <!-- What happens next -->
        <div class="bg-white rounded-3xl shadow-xl border border-slate-100 p-6 md:p-8 mb-8 text-left">
            <div class="space-y-5">
                <div class="flex items-start gap-4">
                    <div class="shrink-0 w-10 h-10 rounded-full bg-brand-100 text-brand-700 flex items-center justify-center font-bold text-sm">1</div>
                    <div class="flex-1 pt-1">
                        <h3 class="font-semibold text-slate-900 mb-1">Review of Your Request</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Dr. Kumar of Billroth Hospitals&rsquo; team will review your details and medical concern to understand your case.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="shrink-0 w-10 h-10 rounded-full bg-brand-100 text-brand-700 flex items-center justify-center font-bold text-sm">2</div>
                    <div class="flex-1 pt-1">
                        <h3 class="font-semibold text-slate-900 mb-1">Confirmation Call / Message</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">You'll receive a call or WhatsApp message within 24 hours to confirm your appointment slot.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="shrink-0 w-10 h-10 rounded-full bg-brand-100 text-brand-700 flex items-center justify-center font-bold text-sm">3</div>
                    <div class="flex-1 pt-1">
                        <h3 class="font-semibold text-slate-900 mb-1">Visit Billroth Hospital</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Arrive at the scheduled time for your consultation with Dr. Kumar of Billroth Hospitals.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick action buttons -->
        <div class="flex flex-col sm:flex-row gap-3 justify-center items-center mb-8">
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-gradient-to-r from-accent to-amber-500 hover:from-amber-500 hover:to-amber-600 text-white font-bold px-6 py-3.5 rounded-full shadow-lg shadow-amber-500/20 hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                Call <?= $site['phone'] ?>
            </a>
            <a href="https://wa.me/<?= $site['phone_link'] ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 bg-[#25D366] hover:bg-[#1da851] text-white font-bold px-6 py-3.5 rounded-full shadow-lg shadow-green-500/20 hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.464 3.488"/></svg>
                WhatsApp Us
            </a>
        </div>

        <!-- Secondary link -->
        <a href="<?= $base_path ?>" class="inline-flex items-center gap-2 text-brand-700 hover:text-brand-800 font-semibold transition-colors group">
            <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Back to Homepage
        </a>

        <!-- Trust reassurance -->
        <div class="mt-10 pt-8 border-t border-slate-200 grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
            <div>
                <p class="font-display text-2xl font-bold text-brand-700">29+</p>
                <p class="text-xs uppercase tracking-wider text-slate-500 font-semibold mt-1">Years of Excellence</p>
            </div>
            <div>
                <p class="font-display text-2xl font-bold text-brand-700">10,000+</p>
                <p class="text-xs uppercase tracking-wider text-slate-500 font-semibold mt-1">Surgeries Performed</p>
            </div>
            <div>
                <p class="font-display text-2xl font-bold text-brand-700">5.0 ★</p>
                <p class="text-xs uppercase tracking-wider text-slate-500 font-semibold mt-1">600+ Patient Reviews</p>
            </div>
        </div>

    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
