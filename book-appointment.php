<?php
$page_title = 'Book a Hernia Consultation in Chennai | Dr. Kumar of Billroth Hospitals';
$page_description = 'Book an appointment with Dr. Kumar of Billroth Hospitals, Shenoy Nagar, Chennai. Consultations for hernia assessment, second opinions and surgery planning.';
require __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="cal" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse">
                    <rect x="5" y="5" width="30" height="30" rx="4" fill="none" stroke="white" stroke-width="1"/>
                    <line x1="5" y1="15" x2="35" y2="15" stroke="white" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#cal)"/>
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-28">
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur px-4 py-2 rounded-full text-sm font-medium mb-6">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Schedule Your Visit
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                Book Your<br>
                <span class="text-accent">Appointment</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Take the first step toward better health. Schedule a consultation with Chennai's most experienced hernia and laparoscopic surgeon for personalized care and treatment planning.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-6 py-3 rounded-full transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                    Call Now: <?= $site['phone'] ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Why Book With Us
            </span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-6 mb-4">
                Benefits of Scheduling<br><span class="text-brand-700">Your Appointment</span>
            </h2>
            <p class="text-slate-600 text-lg">We make it easy to get the expert care you need, when you need it.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition">
                <div class="w-14 h-14 rounded-xl bg-brand-100 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Quick Scheduling</h3>
                <p class="text-slate-600 text-sm">Appointments available within 24-48 hours. No long waiting times for initial consultations.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition">
                <div class="w-14 h-14 rounded-xl bg-accent/10 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Expert Consultation</h3>
                <p class="text-slate-600 text-sm">Direct access to Dr. Kumar of Billroth Hospitals with 29+ years of specialized hernia and laparoscopic surgery experience.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition">
                <div class="w-14 h-14 rounded-xl bg-emerald-100 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Online Options</h3>
                <p class="text-slate-600 text-sm">Can't visit in person? We offer secure video consultations for initial evaluations and follow-ups.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition">
                <div class="w-14 h-14 rounded-xl bg-purple-100 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Insurance Accepted</h3>
                <p class="text-slate-600 text-sm">Accepted networks include Star Health, Care Health, HDFC ERGO, ICICI Lombard, Niva Bupa, Bajaj Allianz, Tata AIG, ManipalCigna, major TPAs, and government/PSU insurers. Cashless approval is subject to policy and network authorization.</p>
            </div>
        </div>
    </div>
</section>

<!-- Appointment Types -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Appointment Options
            </span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-6 mb-4">
                Choose Your<br><span class="text-brand-700">Consultation Type</span>
            </h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 mb-16">
            <!-- In-Person Appointment -->
            <div class="bg-gradient-to-br from-brand-50 to-cyan-50 rounded-3xl p-8 border-2 border-brand-200 relative">
                <div class="absolute top-4 right-4">
                    <span class="bg-brand-700 text-white text-xs font-bold px-3 py-1 rounded-full">Most Popular</span>
                </div>
                <div class="w-16 h-16 rounded-2xl bg-brand-700 flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <h3 class="font-display text-2xl font-bold text-slate-900 mb-3">In-Person Consultation</h3>
                <p class="text-slate-600 mb-6">Visit our clinic at Billroth Hospital for a comprehensive physical examination and detailed discussion about your condition and treatment options.</p>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-brand-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Complete physical examination</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-brand-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Review of previous reports</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-brand-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Personalized treatment planning</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-brand-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Same-day diagnostic tests available</span>
                    </li>
                </ul>
                <a href="tel:<?= $site['phone_link'] ?>" class="w-full inline-flex items-center justify-center gap-2 bg-brand-700 hover:bg-brand-800 text-white font-semibold px-6 py-3 rounded-lg transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                    Schedule In-Person Visit
                </a>
            </div>

            <!-- Online Consultation -->
            <div class="bg-white rounded-3xl p-8 border-2 border-slate-200 hover:border-accent transition">
                <div class="w-16 h-16 rounded-2xl bg-accent flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                </div>
                <h3 class="font-display text-2xl font-bold text-slate-900 mb-3">Online Consultation</h3>
                <p class="text-slate-600 mb-6">Connect with Dr. Kumar of Billroth Hospitals from anywhere via secure video call. Ideal for initial evaluations, second opinions, and follow-up appointments.</p>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Secure video consultation</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Upload reports digitally</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">E-prescriptions available</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Perfect for out-of-town patients</span>
                    </li>
                </ul>
                <a href="online-consultation" class="w-full inline-flex items-center justify-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-6 py-3 rounded-lg transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                    Book Online Consultation
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Appointment Form -->
<section class="py-16 md:py-24 bg-gradient-to-br from-slate-50 to-brand-50">
    <div class="max-w-4xl mx-auto px-4">
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
            <div class="bg-brand-700 text-white px-8 py-8 text-center">
                <h2 class="font-display text-3xl font-bold mb-2">Request an Appointment</h2>
                <p class="text-brand-100">Fill out the form below and we will contact you within 24 hours</p>
            </div>

            <form accept-charset="UTF-8" action="https://app.formester.com/forms/4ke0WX9jt/submissions" method="POST">
                <div class="p-8 space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-slate-800 mb-2">Full Name *</label>
                        <input type="text" name="name" required class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition text-slate-900 placeholder-slate-400" placeholder="Enter your full name">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-800 mb-2">Phone Number *</label>
                        <input type="tel" name="phone" required class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition text-slate-900 placeholder-slate-400" placeholder="+91 98765 43210">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-slate-800 mb-2">Email Address</label>
                        <input type="email" name="email" class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition text-slate-900 placeholder-slate-400" placeholder="your.email@example.com">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-800 mb-2">Preferred Date *</label>
                        <input type="date" name="date" required class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition text-slate-900">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-800 mb-2">Appointment Type *</label>
                    <div class="grid grid-cols-2 gap-4">
                        <label class="flex items-center gap-3 p-4 rounded-lg border-2 border-slate-200 bg-slate-50 cursor-pointer hover:border-brand-500 hover:bg-white transition has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                            <input type="radio" name="appointment_type" value="in_person" checked class="w-5 h-5 text-brand-600">
                            <span class="font-medium text-slate-800">In-Person Visit</span>
                        </label>
                        <label class="flex items-center gap-3 p-4 rounded-lg border-2 border-slate-200 bg-slate-50 cursor-pointer hover:border-brand-500 hover:bg-white transition has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                            <input type="radio" name="appointment_type" value="online" class="w-5 h-5 text-brand-600">
                            <span class="font-medium text-slate-800">Online Consultation</span>
                        </label>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-800 mb-2">Condition / Reason for Visit *</label>
                    <select name="condition" required class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition text-slate-900">
                        <option value="">Select your condition</option>
                        <option value="inguinal_hernia">Inguinal Hernia</option>
                        <option value="umbilical_hernia">Umbilical Hernia</option>
                        <option value="incisional_hernia">Incisional Hernia</option>
                        <option value="ventral_hernia">Ventral Hernia</option>
                        <option value="hiatal_hernia">Hiatal Hernia</option>
                        <option value="paraumbilical">Paraumbilical Hernia</option>
                        <option value="gallbladder">Gallbladder Stones</option>
                        <option value="gerd">GERD / Acid Reflux</option>
                        <option value="appendicitis">Appendicitis</option>
                        <option value="piles">Piles / Hemorrhoids</option>
                        <option value="fissure">Anal Fissure</option>
                        <option value="thyroid">Thyroid Disorder</option>
                        <option value="second_opinion">Second Opinion</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-800 mb-2">Additional Information</label>
                    <textarea name="notes" rows="3" class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition text-slate-900 placeholder-slate-400 resize-none" placeholder="Please describe any symptoms, previous treatments, or other relevant information..."></textarea>
                </div>

                <div class="flex items-start gap-3 p-4 bg-slate-50 rounded-lg border border-slate-200">
                    <input type="checkbox" id="consent" name="consent" required class="w-5 h-5 mt-0.5 text-brand-600 rounded border-slate-300">
                    <label for="consent" class="text-sm text-slate-700 leading-relaxed">
                        I consent to being contacted regarding my appointment request. I understand that this form is for appointment requests only and does not constitute medical advice.
                    </label>
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-accent to-amber-500 hover:from-amber-500 hover:to-amber-600 text-white font-bold px-6 py-4 rounded-lg shadow-lg shadow-amber-500/20 hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center gap-2 text-lg">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    Request Appointment
                </button>
                </div>
            </form>

            <div id="appointmentSuccess" class="hidden p-8 text-center">
                <div class="w-20 h-20 mx-auto rounded-full bg-emerald-100 flex items-center justify-center mb-6">
                    <svg class="w-10 h-10 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                </div>
                <h3 class="font-display text-2xl font-bold text-slate-900 mb-3">Appointment Request Received!</h3>
                <p class="text-slate-600 mb-6">Thank you for choosing Dr. Kumar of Billroth Hospitals. Our team will contact you within 24 hours to confirm your appointment.</p>
                <p class="text-slate-500">For urgent matters, please call us directly at <a href="tel:<?= $site['phone_link'] ?>" class="text-brand-700 font-semibold"><?= $site['phone'] ?></a></p>
            </div>
        </div>
    </div>
</section>

<!-- What to Expect -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                What to Expect
            </span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-6 mb-4">
                Your Visit<br><span class="text-brand-700">Journey</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 mx-auto rounded-full bg-brand-100 flex items-center justify-center mb-5 relative">
                    <span class="text-2xl font-bold text-brand-700">1</span>
                    <div class="hidden md:block absolute top-1/2 left-full w-full h-0.5 bg-brand-200 -translate-y-1/2"></div>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Book Appointment</h3>
                <p class="text-slate-600 text-sm">Schedule via phone or our online form. Receive confirmation within 24 hours.</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 mx-auto rounded-full bg-brand-100 flex items-center justify-center mb-5 relative">
                    <span class="text-2xl font-bold text-brand-700">2</span>
                    <div class="hidden md:block absolute top-1/2 left-full w-full h-0.5 bg-brand-200 -translate-y-1/2"></div>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Prepare Documents</h3>
                <p class="text-slate-600 text-sm">Bring medical reports, imaging, insurance documents, and a list of current medications.</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 mx-auto rounded-full bg-brand-100 flex items-center justify-center mb-5 relative">
                    <span class="text-2xl font-bold text-brand-700">3</span>
                    <div class="hidden md:block absolute top-1/2 left-full w-full h-0.5 bg-brand-200 -translate-y-1/2"></div>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Consultation</h3>
                <p class="text-slate-600 text-sm">Meet Dr. Kumar of Billroth Hospitals for comprehensive evaluation and personalized treatment discussion.</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 mx-auto rounded-full bg-accent flex items-center justify-center mb-5">
                    <span class="text-2xl font-bold text-white">4</span>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Treatment Plan</h3>
                <p class="text-slate-600 text-sm">Receive your customized treatment plan with clear next steps and timelines.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 md:py-20 bg-gradient-to-br from-brand-700 via-brand-800 to-slate-900 text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-display text-3xl md:text-4xl font-bold mb-4">
            Need Immediate Assistance?
        </h2>
        <p class="text-brand-100 text-lg mb-8 max-w-2xl mx-auto">
            If you have an urgent concern or need to speak with someone immediately, our team is just a phone call away.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-full shadow-lg hover:shadow-xl transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                Call: <?= $site['phone'] ?>
            </a>
            <a href="contact" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-8 py-4 rounded-full border border-white/30 transition">
                See contact details
            </a>
        </div>
    </div>
</section>

<script>
    function handleAppointmentSubmit(event, form) {
        event.preventDefault();
        // Redirect to dedicated thank you page
        window.location.href = '<?= $base_path ?>thankyou.php';
    }
</script>


<?php require __DIR__ . '/includes/footer.php'; ?>
