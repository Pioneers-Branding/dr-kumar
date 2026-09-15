<?php
$page_title = 'Online Hernia Consultation with Dr. Kumar of Billroth Hospitals | Chennai';
$page_description = 'Consult Dr. Kumar of Billroth Hospitals online from anywhere. Video consultation to review your scans and reports, discuss options and decide whether surgery is needed now.';
require __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="video" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse">
                    <circle cx="30" cy="30" r="20" fill="none" stroke="white" stroke-width="1"/>
                    <circle cx="30" cy="30" r="8" fill="none" stroke="white" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#video)"/>
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-28">
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur px-4 py-2 rounded-full text-sm font-medium mb-6">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Telemedicine Available
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                Online<br>
                <span class="text-accent">Consultation</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Expert surgical consultation from the comfort of your home. Connect with Dr. Kumar of Billroth Hospitals via secure video call for initial evaluations, second opinions, and follow-up appointments.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#consultation-form" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-6 py-3 rounded-full transition">
                    Request Online Consultation
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7H3"/></svg>
                </a>
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-6 py-3 rounded-full border border-white/30 transition">
                    Call for Details
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
                Why Telemedicine
            </span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-6 mb-4">
                Benefits of Online<br><span class="text-brand-700">Consultation</span>
            </h2>
            <p class="text-slate-600 text-lg">Experience quality healthcare from anywhere, without compromising on the expertise of an in-person visit.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition">
                <div class="w-14 h-14 rounded-xl bg-brand-100 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Convenience</h3>
                <p class="text-slate-600 text-sm">No travel required. Consult with Dr. Kumar of Billroth Hospitals from your home, office, or anywhere with an internet connection.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition">
                <div class="w-14 h-14 rounded-xl bg-accent/10 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Time-Saving</h3>
                <p class="text-slate-600 text-sm">Skip the commute and waiting room. Get expert advice in a focused, one-on-one video consultation.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition">
                <div class="w-14 h-14 rounded-xl bg-emerald-100 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Expert Access</h3>
                <p class="text-slate-600 text-sm">Get the same level of expertise from one of Chennai's leading hernia surgeons, regardless of your location.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition">
                <div class="w-14 h-14 rounded-xl bg-purple-100 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Digital Reports</h3>
                <p class="text-slate-600 text-sm">Securely upload your medical reports, images, and test results for Dr. Kumar of Billroth Hospitals to review before your consultation.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition">
                <div class="w-14 h-14 rounded-xl bg-rose-100 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">E-Prescriptions</h3>
                <p class="text-slate-600 text-sm">Receive digital prescriptions that you can use at any pharmacy. No lost papers or waiting for mail.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition">
                <div class="w-14 h-14 rounded-xl bg-amber-100 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Ideal for Out-of-Town</h3>
                <p class="text-slate-600 text-sm">Perfect for patients traveling from other cities or countries who want an initial evaluation before visiting.</p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Simple Process
            </span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-6 mb-4">
                How Online Consultation<br><span class="text-brand-700">Works</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <div class="relative">
                <div class="bg-gradient-to-br from-brand-50 to-cyan-50 rounded-2xl p-6 border border-brand-100 h-full">
                    <div class="w-12 h-12 rounded-full bg-brand-700 text-white flex items-center justify-center font-bold text-xl mb-5">1</div>
                    <h3 class="font-bold text-lg text-slate-900 mb-2">Submit Request</h3>
                    <p class="text-slate-600 text-sm">Fill out the online form with your details, symptoms, and preferred time slot. Upload any medical reports if available.</p>
                </div>
                <div class="hidden lg:block absolute top-1/2 -right-4 w-8 h-0.5 bg-brand-300"></div>
            </div>

            <div class="relative">
                <div class="bg-gradient-to-br from-accent/5 to-amber-50 rounded-2xl p-6 border border-amber-100 h-full">
                    <div class="w-12 h-12 rounded-full bg-accent text-white flex items-center justify-center font-bold text-xl mb-5">2</div>
                    <h3 class="font-bold text-lg text-slate-900 mb-2">Confirm & Schedule</h3>
                    <p class="text-slate-600 text-sm">Our team contacts you to confirm your preferred time and provides payment instructions if applicable.</p>
                </div>
                <div class="hidden lg:block absolute top-1/2 -right-4 w-8 h-0.5 bg-amber-300"></div>
            </div>

            <div class="relative">
                <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-6 border border-emerald-100 h-full">
                    <div class="w-12 h-12 rounded-full bg-emerald-600 text-white flex items-center justify-center font-bold text-xl mb-5">3</div>
                    <h3 class="font-bold text-lg text-slate-900 mb-2">Video Consultation</h3>
                    <p class="text-slate-600 text-sm">Connect via secure video link at your scheduled time. Dr. Kumar of Billroth Hospitals reviews your case and discusses treatment options.</p>
                </div>
                <div class="hidden lg:block absolute top-1/2 -right-4 w-8 h-0.5 bg-emerald-300"></div>
            </div>

            <div>
                <div class="bg-gradient-to-br from-purple-50 to-violet-50 rounded-2xl p-6 border border-purple-100 h-full">
                    <div class="w-12 h-12 rounded-full bg-purple-600 text-white flex items-center justify-center font-bold text-xl mb-5">4</div>
                    <h3 class="font-bold text-lg text-slate-900 mb-2">Follow-Up Care</h3>
                    <p class="text-slate-600 text-sm">Receive your e-prescription, detailed treatment plan, and schedule any required in-person follow-ups if needed.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Requirements Section -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Before Your Consultation</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                    What to Prepare
                </h2>
                <p class="text-slate-600 mb-8">
                    To make the most of your online consultation, please have the following ready before your appointment.
                </p>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Medical Reports & Imaging</h4>
                            <p class="text-sm text-slate-600">Upload any ultrasound reports, CT scans, MRI images, or previous surgical records. Clear photos of visible symptoms are also helpful.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Current Medications List</h4>
                            <p class="text-sm text-slate-600">Include all prescription medications, over-the-counter drugs, and supplements you are currently taking.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Symptom Timeline</h4>
                            <p class="text-sm text-slate-600">Note when symptoms started, what triggers them, and any previous treatments you have tried.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Good Internet Connection</h4>
                            <p class="text-sm text-slate-600">Ensure you have a stable internet connection and a quiet, private space for your consultation.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="bg-white rounded-3xl shadow-xl p-8 border border-slate-100">
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-6">Technical Requirements</h3>
                    <div class="space-y-5">
                        <div class="flex items-center gap-4 pb-4 border-b border-slate-100">
                            <div class="w-10 h-10 rounded-lg bg-brand-50 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <p class="font-semibold text-slate-900">Device</p>
                                <p class="text-sm text-slate-600">Desktop, laptop, tablet, or smartphone with camera</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 pb-4 border-b border-slate-100">
                            <div class="w-10 h-10 rounded-lg bg-brand-50 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.14 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/></svg>
                            </div>
                            <div>
                                <p class="font-semibold text-slate-900">Internet</p>
                                <p class="text-sm text-slate-600">Stable broadband or 4G/LTE connection (min 2 Mbps recommended)</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 pb-4 border-b border-slate-100">
                            <div class="w-10 h-10 rounded-lg bg-brand-50 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <p class="font-semibold text-slate-900">Browser</p>
                                <p class="text-sm text-slate-600">Chrome, Safari, Firefox, or Edge (latest versions)</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-lg bg-brand-50 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                            </div>
                            <div>
                                <p class="font-semibold text-slate-900">Privacy</p>
                                <p class="text-sm text-slate-600">End-to-end encrypted video calls for complete confidentiality</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 p-4 bg-accent/10 rounded-xl border border-accent/20">
                        <p class="text-sm text-amber-800">
                            <strong>Note:</strong> Online consultations are best for initial evaluations, second opinions, and follow-ups. For physical examinations or procedures, an in-person visit will be recommended.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Consultation Form -->
<section id="consultation-form" class="py-16 md:py-24 bg-gradient-to-br from-brand-700 via-brand-800 to-slate-900 text-white">
    <div class="max-w-4xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="font-display text-3xl md:text-4xl font-bold mb-4">
                Request Online Consultation
            </h2>
            <p class="text-brand-100 text-lg">Fill out the form and we will contact you within 24 hours to schedule your video consultation.</p>
        </div>

        <form accept-charset="UTF-8" action="https://app.formester.com/forms/4ke0WX9jt/submissions" method="POST">
            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-semibold text-white mb-2">Full Name *</label>
                    <input type="text" name="name" required class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-brand-400 focus:border-brand-400 transition bg-white text-slate-900 placeholder-slate-400" placeholder="Your full name">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-white mb-2">Phone Number *</label>
                    <input type="tel" name="phone" required class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-brand-400 focus:border-brand-400 transition bg-white text-slate-900 placeholder-slate-400" placeholder="+91 98765 43210">
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-semibold text-white mb-2">Email Address *</label>
                    <input type="email" name="email" required class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-brand-400 focus:border-brand-400 transition bg-white text-slate-900 placeholder-slate-400" placeholder="your.email@example.com">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-white mb-2">City / Location</label>
                    <input type="text" name="location" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-brand-400 focus:border-brand-400 transition bg-white text-slate-900 placeholder-slate-400" placeholder="Your city">
                </div>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-semibold text-white mb-2">Condition *</label>
                <select name="condition" required class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-brand-400 focus:border-brand-400 transition bg-white text-slate-900">
                    <option value="">Select your condition</option>
                    <option value="inguinal_hernia">Inguinal Hernia</option>
                    <option value="umbilical_hernia">Umbilical Hernia</option>
                    <option value="incisional_hernia">Incisional Hernia</option>
                    <option value="ventral_hernia">Ventral Hernia</option>
                    <option value="hiatal_hernia">Hiatal Hernia</option>
                    <option value="gallbladder">Gallbladder Stones</option>
                    <option value="gerd">GERD / Acid Reflux</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-semibold text-white mb-2">Preferred Consultation Type *</label>
                <div class="grid grid-cols-2 gap-4">
                    <label class="flex items-center gap-3 p-4 rounded-lg border-2 border-slate-300 bg-white/90 cursor-pointer hover:border-brand-400 transition has-[:checked]:border-brand-400 has-[:checked]:bg-brand-50">
                        <input type="radio" name="consult_type" value="initial" checked class="w-5 h-5 text-brand-600">
                        <span class="font-medium text-slate-800">Initial Evaluation</span>
                    </label>
                    <label class="flex items-center gap-3 p-4 rounded-lg border-2 border-slate-300 bg-white/90 cursor-pointer hover:border-brand-400 transition has-[:checked]:border-brand-400 has-[:checked]:bg-brand-50">
                        <input type="radio" name="consult_type" value="second_opinion" class="w-5 h-5 text-brand-600">
                        <span class="font-medium text-slate-800">Second Opinion</span>
                    </label>
                </div>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-semibold text-white mb-2">Tell us about your condition</label>
                <textarea name="description" rows="4" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-brand-400 focus:border-brand-400 transition bg-white text-slate-900 placeholder-slate-400 resize-none" placeholder="Describe your symptoms, when they started, and any previous treatments..."></textarea>
            </div>

            <button type="submit" class="w-full bg-accent hover:bg-amber-500 text-white font-bold px-6 py-4 rounded-lg shadow-lg hover:shadow-xl transition flex items-center justify-center gap-2 text-lg">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                Request Online Consultation
            </button>
        </form>

        <div id="onlineConsultSuccess" class="hidden bg-white rounded-3xl p-8 shadow-2xl text-center">
            <div class="w-20 h-20 mx-auto rounded-full bg-emerald-100 flex items-center justify-center mb-6">
                <svg class="w-10 h-10 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
            </div>
            <h3 class="font-display text-2xl font-bold text-slate-900 mb-3">Request Received!</h3>
            <p class="text-slate-600 mb-4">Thank you for your interest in online consultation. Our team will contact you within 24 hours to confirm your appointment.</p>
            <p class="text-slate-500">Questions? Call us at <a href="tel:<?= $site['phone_link'] ?>" class="text-brand-700 font-semibold"><?= $site['phone'] ?></a></p>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16 bg-slate-50 text-center">
    <div class="max-w-3xl mx-auto px-4">
        <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">Prefer an In-Person Visit?</h2>
        <p class="text-slate-600 mb-6">If you would rather meet Dr. Kumar of Billroth Hospitals in person, we also offer in-clinic consultations at Billroth Hospital.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="book-appointment" class="inline-flex items-center gap-2 bg-brand-700 hover:bg-brand-800 text-white font-semibold px-6 py-3 rounded-full transition">
                Book In-Person Appointment
            </a>
            <a href="second-opinion" class="inline-flex items-center gap-2 bg-white hover:bg-slate-50 text-slate-800 font-semibold px-6 py-3 rounded-full border border-slate-200 transition">
                Get Second Opinion
            </a>
        </div>
    </div>
</section>

<script>
    function handleOnlineConsultSubmit(event, form) {
        event.preventDefault();
        form.classList.add('hidden');
        document.getElementById('onlineConsultSuccess').classList.remove('hidden');
        window.scrollTo({ top: document.getElementById('onlineConsultSuccess').offsetTop - 100, behavior: 'smooth' });
    }
</script>


<?php require __DIR__ . '/includes/footer.php'; ?>
