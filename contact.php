<?php
$page_title = 'Contact Dr. Kumar of Billroth Hospitals | Hernia Surgeon, Shenoy Nagar Chennai';
$page_description = 'Contact Dr. Kumar of Billroth Hospitals, 505 OP Block, Gajapathy Street, Shenoy Nagar, Chennai 600030. Call, message or book a hernia consultation online.';
require __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="waves" x="0" y="0" width="100" height="20" patternUnits="userSpaceOnUse">
                    <path d="M0 10 Q25 0 50 10 T100 10" fill="none" stroke="white" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#waves)"/>
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-28">
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur px-4 py-2 rounded-full text-sm font-medium mb-6">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Get In Touch
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                Contact Us for<br>
                <span class="text-accent">Expert Care</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Whether you need a consultation, have questions about your treatment, or want to book an appointment, we are here to help. Reach out through any of the channels below.
            </p>
        </div>
    </div>
</section>

<!-- Contact Info Cards -->
<section class="py-16 md:py-24 -mt-12 relative z-10">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-6">
            <a href="tel:<?= $site['phone_link'] ?>" class="bg-white rounded-2xl shadow-xl p-8 text-center hover:shadow-2xl hover:-translate-y-1 transition border-t-4 border-brand-700">
                <div class="w-16 h-16 mx-auto rounded-full bg-brand-100 flex items-center justify-center mb-5">
                    <svg class="w-8 h-8 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                </div>
                <h3 class="font-bold text-xl text-slate-900 mb-2">Call Us</h3>
                <p class="text-brand-700 font-semibold text-lg"><?= $site['phone'] ?></p>
                <p class="text-slate-500 text-sm mt-2">Mon-Sat, 9AM - 7PM</p>
            </a>

            <a href="mailto:<?= $site['email'] ?>" class="bg-white rounded-2xl shadow-xl p-8 text-center hover:shadow-2xl hover:-translate-y-1 transition border-t-4 border-accent">
                <div class="w-16 h-16 mx-auto rounded-full bg-amber-100 flex items-center justify-center mb-5">
                    <svg class="w-8 h-8 text-accent" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/></svg>
                </div>
                <h3 class="font-bold text-xl text-slate-900 mb-2">Email Us</h3>
                <p class="text-accent font-semibold"><?= $site['email'] ?></p>
                <p class="text-slate-500 text-sm mt-2">We respond within 24 hours</p>
            </a>

            <div class="bg-white rounded-2xl shadow-xl p-8 text-center border-t-4 border-emerald-500">
                <div class="w-16 h-16 mx-auto rounded-full bg-emerald-100 flex items-center justify-center mb-5">
                    <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <h3 class="font-bold text-xl text-slate-900 mb-2">Visit Us</h3>
                <p class="text-slate-700"><?= $site['address'] ?></p>
                <p class="text-slate-500 text-sm mt-2">Billroth Hospital</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Details -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16">
            <!-- Contact Form -->
            <div>
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Send a Message</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                    Get in Touch
                </h2>
                <p class="text-slate-600 mb-8">
                    Fill out the form below and our team will get back to you within 24 hours. For urgent matters, please call us directly.
                </p>

                <form accept-charset="UTF-8" action="https://app.formester.com/forms/4ke0WX9jt/submissions" method="POST">
                    <div class="bg-white rounded-2xl shadow-xl border border-slate-100 p-6 md:p-8 space-y-5">
                    <div class="grid md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-semibold text-slate-800 mb-2">Full Name *</label>
                            <input type="text" name="name" required class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition text-slate-900 placeholder-slate-400" placeholder="Your full name">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-800 mb-2">Phone Number *</label>
                            <input type="tel" name="phone" required class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition text-slate-900 placeholder-slate-400" placeholder="+91 98765 43210">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-800 mb-2">Email Address</label>
                        <input type="email" name="email" class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition text-slate-900 placeholder-slate-400" placeholder="your.email@example.com">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-800 mb-2">Subject *</label>
                        <select name="subject" required class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition text-slate-900">
                            <option value="">Select a subject</option>
                            <option value="appointment">Book Appointment</option>
                            <option value="consultation">Request Consultation</option>
                            <option value="second_opinion">Second Opinion</option>
                            <option value="online_consultation">Online Consultation</option>
                            <option value="treatment_query">Treatment Query</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-800 mb-2">Message *</label>
                        <textarea name="message" rows="4" required class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition text-slate-900 placeholder-slate-400 resize-none" placeholder="Please describe your condition or inquiry..."></textarea>
                    </div>

                    <button type="submit" class="w-full bg-gradient-to-r from-accent to-amber-500 hover:from-amber-500 hover:to-amber-600 text-white font-bold px-6 py-4 rounded-lg shadow-lg shadow-amber-500/20 hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center gap-2 text-lg">
                        <span>Send Message</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                    </button>
                    </div>
                </form>

                <div id="formSuccess" class="hidden mt-6 p-4 bg-emerald-100 border border-emerald-200 rounded-lg text-emerald-800">
                    <div class="flex items-center gap-3">
                        <svg class="w-6 h-6 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <div>
                            <p class="font-semibold">Message Sent Successfully!</p>
                            <p class="text-sm">We will get back to you within 24 hours.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Info -->
            <div>
                <h3 class="font-display text-2xl font-bold text-slate-900 mb-6">Office Information</h3>

                <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden mb-6">
                    <div class="bg-brand-700 text-white px-6 py-4">
                        <h4 class="font-bold">Billroth Hospital</h4>
                        <p class="text-brand-100 text-sm">Primary Practice Location</p>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="flex items-start gap-4">
                            <svg class="w-6 h-6 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                            <div>
                                <p class="font-semibold text-slate-900">Address</p>
                                <p class="text-slate-600 text-sm"><?= $site['clinic']['street'] ?>,<br><?= $site['clinic']['locality'] ?> <?= $site['clinic']['postal'] ?></p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <svg class="w-6 h-6 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                            <div>
                                <p class="font-semibold text-slate-900">Phone</p>
                                <a href="tel:<?= $site['phone_link'] ?>" class="text-brand-700 hover:underline"><?= $site['phone'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Office Hours -->
                <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6 mb-6">
                    <h4 class="font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Office Hours
                    </h4>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center py-2 border-b border-slate-100">
                            <span class="text-slate-600">Monday - Friday</span>
                            <span class="font-semibold text-slate-900">9:00 AM - 7:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-slate-100">
                            <span class="text-slate-600">Saturday</span>
                            <span class="font-semibold text-slate-900">9:00 AM - 5:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-slate-600">Sunday</span>
                            <span class="font-semibold text-red-600">Closed</span>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-amber-50 rounded-lg border border-amber-100">
                        <p class="text-sm text-amber-800">
                            <strong>Emergency:</strong> For urgent medical concerns outside office hours, please visit the nearest emergency department or call our emergency line.
                        </p>
                    </div>
                </div>

                <!-- Map Placeholder -->
                <div class="bg-slate-200 rounded-2xl overflow-hidden aspect-video flex items-center justify-center">
                    <div class="text-center p-8">
                        <svg class="w-16 h-16 text-slate-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <p class="text-slate-600 font-medium">Billroth Hospital, Shenoy Nagar</p>
                        <p class="text-slate-500 text-sm mt-1">Chennai, Tamil Nadu</p>
                        <a href="https://maps.google.com/?q=<?= urlencode($site['address']) ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 mt-4 text-brand-700 hover:text-brand-800 font-semibold">
                            Open in Google Maps
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4">
        <div class="text-center mb-12">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Common Questions
            </span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-6 mb-4">
                Frequently Asked Questions
            </h2>
        </div>

        <div class="space-y-4">
            <div class="bg-slate-50 rounded-xl border border-slate-100 overflow-hidden">
                <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4" data-target="faq1">
                    <span class="font-semibold text-slate-900">How do I book an appointment?</span>
                    <svg class="w-5 h-5 text-slate-400 shrink-0 faq-icon transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div id="faq1" class="hidden px-6 pb-5">
                    <p class="text-slate-600 text-sm leading-relaxed">You can book an appointment by calling us at <?= $site['phone'] ?>, using our online booking form, or sending a WhatsApp message. For online consultations, please use the dedicated online consultation page.</p>
                </div>
            </div>

            <div class="bg-slate-50 rounded-xl border border-slate-100 overflow-hidden">
                <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4" data-target="faq2">
                    <span class="font-semibold text-slate-900">What information should I bring to my consultation?</span>
                    <svg class="w-5 h-5 text-slate-400 shrink-0 faq-icon transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div id="faq2" class="hidden px-6 pb-5">
                    <p class="text-slate-600 text-sm leading-relaxed">Please bring any previous medical reports, imaging (ultrasound, CT scans), list of current medications, and insurance documents if applicable. This helps us provide the most accurate assessment.</p>
                </div>
            </div>

            <div class="bg-slate-50 rounded-xl border border-slate-100 overflow-hidden">
                <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4" data-target="faq3">
                    <span class="font-semibold text-slate-900">Do you accept insurance?</span>
                    <svg class="w-5 h-5 text-slate-400 shrink-0 faq-icon transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div id="faq3" class="hidden px-6 pb-5">
                    <p class="text-slate-600 text-sm leading-relaxed">Yes. Accepted networks include Star Health, Care Health, HDFC ERGO, ICICI Lombard, Niva Bupa, Bajaj Allianz, Tata AIG, ManipalCigna, major TPAs, and government/PSU insurers. Please contact us to verify network status, cashless eligibility, and coverage for your procedure.</p>
                </div>
            </div>

            <div class="bg-slate-50 rounded-xl border border-slate-100 overflow-hidden">
                <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4" data-target="faq4">
                    <span class="font-semibold text-slate-900">Is there parking available at the hospital?</span>
                    <svg class="w-5 h-5 text-slate-400 shrink-0 faq-icon transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div id="faq4" class="hidden px-6 pb-5">
                    <p class="text-slate-600 text-sm leading-relaxed">Yes, Billroth Hospital has ample parking facilities available for patients and visitors. The hospital is also easily accessible by public transportation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function handleFormSubmit(event, form) {
        event.preventDefault();
        document.getElementById('formSuccess').classList.remove('hidden');
        form.reset();
        setTimeout(function() {
            document.getElementById('formSuccess').classList.add('hidden');
        }, 5000);
    }

    document.querySelectorAll('.faq-toggle').forEach(function(toggle) {
        toggle.addEventListener('click', function() {
            var targetId = this.getAttribute('data-target');
            var target = document.getElementById(targetId);
            var icon = this.querySelector('.faq-icon');

            document.querySelectorAll('.faq-toggle').forEach(function(other) {
                var otherTargetId = other.getAttribute('data-target');
                var otherTarget = document.getElementById(otherTargetId);
                var otherIcon = other.querySelector('.faq-icon');
                if (otherTargetId !== targetId) {
                    otherTarget.classList.add('hidden');
                    otherIcon.style.transform = 'rotate(0deg)';
                }
            });

            target.classList.toggle('hidden');
            icon.style.transform = target.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
        });
    });
</script>


<?php require __DIR__ . '/includes/footer.php'; ?>
