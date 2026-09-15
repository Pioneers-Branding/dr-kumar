<?php
$page_title = 'Interactive Hernia Symptom Checker | Dr. Kumar of Billroth Hospitals Chennai';
$page_description = 'Answer a few questions about your symptoms to understand which hernia type may fit, and whether what you are describing needs urgent medical attention.';
require __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="max-w-7xl mx-auto px-4 relative">
        <nav class="text-sm mb-6 text-brand-200">
            <a href="<?= $base_path ?>" class="hover:text-white transition">Home</a>
            <span class="mx-2">/</span>
            <a href="<?= $base_path ?>resources/patient-resources" class="hover:text-white transition">Resources</a>
            <span class="mx-2">/</span>
            <span class="text-white">Symptom Checker</span>
        </nav>
        <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 text-amber-300 border border-amber-500/30">
            Self-Assessment Tool
        </span>
        <h1 class="font-display text-4xl md:text-5xl font-bold mb-4">Hernia Symptom Checker</h1>
        <p class="text-xl text-brand-100 max-w-2xl">An interactive, step-by-step tool designed to help you identify potential hernia symptoms and assess urgency levels.</p>
    </div>
</section>

<!-- Checker Tool Container -->
<section class="py-16 bg-slate-50 min-h-[600px]">
    <div class="max-w-3xl mx-auto px-4">
        
        <!-- Disclaimer Card -->
        <div id="disclaimerCard" class="bg-white rounded-3xl p-8 md:p-12 shadow-md border border-slate-100 mb-8 transition-all duration-500">
            <div class="w-16 h-16 rounded-2xl bg-amber-100 flex items-center justify-center mb-6 text-amber-600">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
            </div>
            <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 mb-4">Important Medical Disclaimer</h2>
            <p class="text-slate-600 leading-relaxed mb-6">
                This tool is designed to provide educational information about common hernia symptoms and help you understand potential risks. It is **not a diagnostic tool** and does **not replace a professional clinical evaluation** by a qualified doctor or surgeon. 
            </p>
            <div class="bg-slate-50 border border-slate-200/60 rounded-2xl p-5 mb-8">
                <p class="text-xs text-slate-500 leading-relaxed">
                    By clicking "Start Symptom Checker", you acknowledge that this tool is for informational purposes only. If you are experiencing sudden, severe abdominal or groin pain accompanied by nausea, vomiting, or a fever, go to the nearest emergency room immediately.
                </p>
            </div>
            <button onclick="startChecker()" class="w-full md:w-auto inline-flex items-center justify-center gap-2 bg-brand-700 hover:bg-brand-800 text-white font-semibold px-8 py-4 rounded-xl shadow-md hover:shadow-lg transition">
                Start Symptom Checker
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </button>
        </div>

        <!-- Interactive Quiz Card (Initially Hidden) -->
        <div id="quizCard" class="hidden bg-white rounded-3xl shadow-xl border border-slate-100 overflow-hidden transition-all duration-500 transform scale-95 opacity-0">
            <!-- Progress Bar -->
            <div class="h-1.5 bg-slate-100 relative">
                <div id="progressBar" class="absolute top-0 left-0 h-full bg-gradient-to-r from-brand-600 to-accent transition-all duration-500" style="width: 0%"></div>
            </div>
            
            <div class="p-8 md:p-12">
                <!-- Step Info -->
                <div class="flex items-center justify-between text-xs text-slate-400 font-bold uppercase tracking-wider mb-6">
                    <span id="stepCounter">Question 1 of 5</span>
                    <span id="stepCategory" class="text-brand-700">Observation</span>
                </div>

                <!-- Questions Holder -->
                <div id="questionContainer" class="min-h-[220px]">
                    <!-- Dynamic Question Text & Options Inject Here -->
                </div>

                <!-- Navigation Controls -->
                <div class="flex items-center justify-between border-t border-slate-100 pt-8 mt-8">
                    <button id="btnBack" onclick="goBack()" class="hidden items-center gap-2 text-slate-500 hover:text-slate-800 font-semibold transition py-2 px-4 rounded-xl hover:bg-slate-50">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                        Back
                    </button>
                    <button id="btnNext" onclick="goNext()" disabled class="ml-auto inline-flex items-center gap-2 bg-brand-700 hover:bg-brand-800 disabled:opacity-40 disabled:hover:bg-brand-700 text-white font-semibold px-6 py-3 rounded-xl transition shadow-md">
                        Next
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Results Card (Initially Hidden) -->
        <div id="resultsCard" class="hidden bg-white rounded-3xl shadow-xl border border-slate-100 overflow-hidden transition-all duration-500 transform scale-95 opacity-0">
            <div class="p-8 md:p-12">
                
                <!-- Status Badge/Icon -->
                <div class="flex items-center gap-4 mb-8">
                    <div id="statusIconBg" class="w-16 h-16 rounded-2xl flex items-center justify-center shrink-0">
                        <!-- SVG icon dynamically injected -->
                    </div>
                    <div>
                        <span id="statusLabel" class="text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full border">Low Risk</span>
                        <h2 id="resultTitle" class="font-display text-2xl md:text-3xl font-bold text-slate-900 mt-2">Symptom Assessment Result</h2>
                    </div>
                </div>

                <!-- Analysis Details -->
                <div class="prose prose-slate max-w-none mb-8">
                    <p id="resultDescription" class="text-slate-600 leading-relaxed mb-6">
                        <!-- Result description dynamically injected -->
                    </p>
                    
                    <div id="emergencyNotice" class="hidden bg-red-50 border border-red-200 rounded-2xl p-6 mb-6">
                        <h4 class="text-red-800 font-bold flex items-center gap-2 mb-2">
                            <span class="w-2.5 h-2.5 bg-red-600 rounded-full animate-ping"></span>
                            Urgent Warning Signs
                        </h4>
                        <p class="text-xs text-red-700 leading-relaxed">
                            A strangulated hernia is a surgical emergency. The blood supply to your bowel is restricted and can cause permanent damage within hours if left untreated. **Do not delay seeking treatment.**
                        </p>
                    </div>

                    <!-- Likely Hernia Type -->
                    <div id="likelyTypeBox" class="bg-brand-50 border border-brand-100 rounded-2xl p-6">
                        <h3 class="font-bold text-slate-900 mb-2 flex items-center gap-2">
                            <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Symptom Location Analysis
                        </h3>
                        <p id="likelyTypeDescription" class="text-sm text-slate-600 leading-relaxed">
                            <!-- Location breakdown -->
                        </p>
                    </div>
                </div>

                <!-- Action Button Block -->
                <div class="border-t border-slate-100 pt-8 mt-8 flex flex-wrap gap-4">
                    <a id="btnPrimaryAction" href="<?= $base_path ?>book-appointment" class="flex-1 min-w-[200px] inline-flex items-center justify-center bg-brand-700 hover:bg-brand-800 text-white font-semibold px-6 py-4 rounded-xl shadow-md hover:shadow-lg transition">
                        Schedule Consultation
                    </a>
                    <a id="btnSecondaryAction" href="tel:+918925502759" class="inline-flex items-center justify-center border border-slate-200 hover:bg-slate-50 text-slate-700 font-semibold px-6 py-4 rounded-xl transition">
                        Call Clinic
                    </a>
                    <button onclick="resetChecker()" class="ml-auto inline-flex items-center justify-center text-slate-400 hover:text-slate-700 transition py-2 px-4 rounded-xl">
                        Restart Test
                    </button>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- Script logic for symptom checker -->
<script>
const questions = [
    {
        id: "bulge",
        category: "Visual Observation",
        title: "Do you have a visible or feelable bulge or lump in your groin or abdomen?",
        options: [
            { text: "Yes, I can clearly feel or see a lump/bulge", value: "yes", next: "reducibility" },
            { text: "No, I only have pain or discomfort without a lump", value: "no", next: "location" }
        ]
    },
    {
        id: "reducibility",
        category: "Mobility",
        title: "Does this bulge go away or shrink when you lie down flat, or can you gently push it back in?",
        options: [
            { text: "Yes, it disappears or pushes back easily", value: "reducible", next: "location" },
            { text: "No, it stays sticking out and feels stuck or hard", value: "irreducible", next: "location" },
            { text: "I'm not sure / I haven't tried", value: "unsure", next: "location" }
        ]
    },
    {
        id: "location",
        category: "Location",
        title: "Where is the lump, bulge, or focal pain located?",
        options: [
            { text: "In the groin, crease of the leg, or scrotum", value: "groin", next: "pain" },
            { text: "Near or directly inside the belly button (navel)", value: "belly", next: "pain" },
            { text: "Right along or near a previous surgical scar", value: "scar", next: "pain" },
            { text: "In the upper abdomen, below the chest but above the navel", value: "upper", next: "pain" },
            { text: "Elsewhere or I am not completely sure", value: "other", next: "pain" }
        ]
    },
    {
        id: "pain",
        category: "Sensation",
        title: "How would you describe the pain or discomfort in that area?",
        options: [
            { text: "No pain at all - just a lump or pressure", value: "none", next: "flags" },
            { text: "Mild aching, heaviness, or dragging sensation that worsens during the day", value: "mild", next: "flags" },
            { text: "Sharp, burning, or pinching pain during heavy lifting, coughing, or bending", value: "activity", next: "flags" },
            { text: "Constant, severe, excruciating pain that does not resolve", value: "severe", next: "flags" }
        ]
    },
    {
        id: "flags",
        category: "Complications Check",
        title: "Are you experiencing any of these other symptoms? (Select all that apply)",
        isMultiSelect: true,
        options: [
            { text: "Nausea, vomiting, or inability to keep food down", value: "nausea" },
            { text: "The bulge has turned dark, red, purple, or highly discolored", value: "color" },
            { text: "Inability to pass gas, have a bowel movement, or severe bloating", value: "constipation" },
            { text: "None of these apply to me", value: "none", isNoneOption: true }
        ],
        next: "analyze"
    }
];

let currentStepIndex = 0;
let historySteps = [];
let answers = {};

function startChecker() {
    const disc = document.getElementById('disclaimerCard');
    const quiz = document.getElementById('quizCard');
    
    disc.classList.add('opacity-0', 'scale-95');
    setTimeout(() => {
        disc.classList.add('hidden');
        quiz.classList.remove('hidden');
        setTimeout(() => {
            quiz.classList.remove('opacity-0', 'scale-95');
            showStep(0);
        }, 50);
    }, 400);
}

function showStep(index) {
    currentStepIndex = index;
    const q = questions[index];
    
    // Set progress
    const pct = ((index) / questions.length) * 100;
    document.getElementById('progressBar').style.width = pct + '%';
    document.getElementById('stepCounter').innerText = `Question ${index + 1} of ${questions.length}`;
    document.getElementById('stepCategory').innerText = q.category;
    
    // Render question
    let html = `<h3 class="text-xl font-bold text-slate-800 mb-6 leading-snug">${q.title}</h3>`;
    
    if (q.isMultiSelect) {
        html += `<div class="space-y-3">`;
        q.options.forEach((opt, idx) => {
            const isChecked = (answers[q.id] || []).includes(opt.value);
            html += `
                <label class="flex items-start gap-4 p-4 rounded-2xl border-2 ${isChecked ? 'border-brand-600 bg-brand-50/40' : 'border-slate-200 hover:border-slate-300'} cursor-pointer transition select-none group">
                    <input type="checkbox" name="${q.id}" value="${opt.value}" ${isChecked ? 'checked' : ''} onchange="handleCheckboxChange('${q.id}', '${opt.value}', ${opt.isNoneOption || false})" class="mt-1 w-4 h-4 rounded text-brand-600 focus:ring-brand-500 border-slate-300">
                    <span class="text-sm font-semibold text-slate-700 leading-tight group-hover:text-slate-900">${opt.text}</span>
                </label>
            `;
        });
        html += `</div>`;
    } else {
        html += `<div class="space-y-3">`;
        q.options.forEach((opt, idx) => {
            const isSelected = answers[q.id] === opt.value;
            html += `
                <button onclick="handleRadioSelect('${q.id}', '${opt.value}', '${opt.next}')" class="w-full text-left flex items-start gap-4 p-4 rounded-2xl border-2 ${isSelected ? 'border-brand-600 bg-brand-50/40' : 'border-slate-200 hover:border-slate-300'} hover:bg-slate-50/30 transition select-none group">
                    <div class="mt-0.5 w-5 h-5 rounded-full border-2 ${isSelected ? 'border-brand-600 bg-brand-600 flex items-center justify-center' : 'border-slate-300'} shrink-0">
                        ${isSelected ? '<div class="w-1.5 h-1.5 bg-white rounded-full"></div>' : ''}
                    </div>
                    <span class="text-sm font-semibold text-slate-700 leading-tight group-hover:text-slate-900">${opt.text}</span>
                </button>
            `;
        });
        html += `</div>`;
    }
    
    document.getElementById('questionContainer').innerHTML = html;
    
    // Toggle Back button
    const btnBack = document.getElementById('btnBack');
    if (historySteps.length > 0) {
        btnBack.classList.remove('hidden');
        btnBack.classList.add('inline-flex');
    } else {
        btnBack.classList.add('hidden');
        btnBack.classList.remove('inline-flex');
    }
    
    // Toggle Next button status
    validateNextButton();
}

function handleRadioSelect(key, val, nextStep) {
    answers[key] = val;
    // Visually update
    showStep(currentStepIndex);
    
    // Auto-advance radio buttons
    setTimeout(() => {
        goNext();
    }, 150);
}

function handleCheckboxChange(key, val, isNone) {
    if (!answers[key]) answers[key] = [];
    
    if (isNone) {
        // If "None" is checked, clear other checkboxes
        answers[key] = ['none'];
    } else {
        // If standard is checked, remove "None"
        answers[key] = answers[key].filter(v => v !== 'none');
        if (answers[key].includes(val)) {
            answers[key] = answers[key].filter(v => v !== val);
        } else {
            answers[key].push(val);
        }
    }
    showStep(currentStepIndex);
}

function validateNextButton() {
    const q = questions[currentStepIndex];
    const btnNext = document.getElementById('btnNext');
    let hasAnswer = false;
    
    if (q.isMultiSelect) {
        hasAnswer = answers[q.id] && answers[q.id].length > 0;
    } else {
        hasAnswer = answers[q.id] !== undefined;
    }
    
    btnNext.disabled = !hasAnswer;
}

function goBack() {
    if (historySteps.length > 0) {
        const prevStep = historySteps.pop();
        showStep(prevStep);
    }
}

function goNext() {
    const q = questions[currentStepIndex];
    let nextStep = null;
    
    if (q.isMultiSelect) {
        nextStep = currentStepIndex + 1;
    } else {
        const selectedVal = answers[q.id];
        const selectedOpt = q.options.find(opt => opt.value === selectedVal);
        const nextVal = selectedOpt.next;
        
        if (nextVal === 'location') {
            nextStep = questions.findIndex(step => step.id === 'location');
        } else if (nextVal === 'pain') {
            nextStep = questions.findIndex(step => step.id === 'pain');
        } else if (nextVal === 'flags') {
            nextStep = questions.findIndex(step => step.id === 'flags');
        } else if (nextVal === 'reducibility') {
            nextStep = questions.findIndex(step => step.id === 'reducibility');
        } else {
            nextStep = currentStepIndex + 1;
        }
    }
    
    if (nextStep >= questions.length || nextStep === -1) {
        showResults();
    } else {
        historySteps.push(currentStepIndex);
        showStep(nextStep);
    }
}

function showResults() {
    const quiz = document.getElementById('quizCard');
    const results = document.getElementById('resultsCard');
    
    // Set 100% progress
    document.getElementById('progressBar').style.width = '100%';
    
    quiz.classList.add('opacity-0', 'scale-95');
    setTimeout(() => {
        quiz.classList.add('hidden');
        results.classList.remove('hidden');
        setTimeout(() => {
            results.classList.remove('opacity-0', 'scale-95');
            calculateReport();
        }, 50);
    }, 400);
}

function calculateReport() {
    const isBulge = answers['bulge'] === 'yes';
    const isReducible = answers['reducibility'] === 'reducible';
    const isIrreducible = answers['reducibility'] === 'irreducible';
    const location = answers['location'];
    const pain = answers['pain'];
    const flags = answers['flags'] || [];
    
    // Warn indicators
    const hasFlags = flags.some(f => f === 'nausea' || f === 'color' || f === 'constipation');
    const isSeverePain = pain === 'severe';
    const isEmergency = hasFlags || isSeverePain;
    
    let reportCategory = ''; // emergency, probable, warning, low
    let iconColor = '';
    let iconSvg = '';
    let badgeClass = '';
    let badgeText = '';
    let title = '';
    let description = '';
    let likelyDesc = '';
    let btnText = 'Schedule Consultation';
    let btnLink = '<?= $base_path ?>book-appointment';
    let btnColor = 'bg-brand-700 hover:bg-brand-800';
    
    if (isEmergency) {
        reportCategory = 'emergency';
        badgeClass = 'bg-red-50 text-red-700 border-red-200';
        badgeText = 'Emergency Critical';
        iconColor = 'bg-red-100 text-red-600';
        iconSvg = `<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>`;
        title = "Emergency Medical Attention Required!";
        description = "Your responses indicate critical warning symptoms associated with a **strangulated or incarcerated hernia** (where herniated tissues are cut off from blood supply or blocking bowels). This is a **life-threatening condition** that requires immediate evaluation in an Emergency Room. Do not delay.";
        btnText = 'Call Emergency Line';
        btnLink = 'tel:+918925502759';
        btnColor = 'bg-red-600 hover:bg-red-700';
        document.getElementById('emergencyNotice').classList.remove('hidden');
    } else if (isBulge && isIrreducible) {
        reportCategory = 'warning';
        badgeClass = 'bg-amber-50 text-amber-700 border-amber-200';
        badgeText = 'Urgent Evaluation';
        iconColor = 'bg-amber-100 text-amber-600';
        iconSvg = `<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>`;
        title = "Possible Incarcerated Hernia";
        description = "You reported a visible bulge that **cannot be gently pushed back inside** (non-reducible). This suggests a potential **incarcerated hernia**. While it is not an immediate emergency if you do not have severe pain or vomiting, it has a high risk of becoming strangulated and should be evaluated by a hernia surgeon within 24 to 48 hours.";
        btnText = 'Book Urgent Appointment';
        btnColor = 'bg-amber-600 hover:bg-amber-700';
        document.getElementById('emergencyNotice').classList.add('hidden');
    } else if (isBulge || (pain !== 'none' && location !== 'other')) {
        reportCategory = 'probable';
        badgeClass = 'bg-brand-50 text-brand-700 border-brand-200';
        badgeText = 'High Probability';
        iconColor = 'bg-brand-100 text-brand-700';
        iconSvg = `<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>`;
        title = "Probable Hernia Detected";
        description = "Your responses indicate a highly typical pattern of a hernia: a noticeable bulge and/or pain in a vulnerable site (groin, scar, navel) that reacts to physical strain. Since hernias **do not heal on their own** and tend to enlarge over time, scheduling a clinical examination and planning a repair is recommended to prevent future issues.";
        document.getElementById('emergencyNotice').classList.add('hidden');
    } else {
        reportCategory = 'low';
        badgeClass = 'bg-slate-50 text-slate-600 border-slate-200';
        badgeText = 'Low Risk / Unclear';
        iconColor = 'bg-slate-100 text-slate-500';
        iconSvg = `<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>`;
        title = "Low Probability of Hernia";
        description = "Your answers do not suggest a typical hernia (no lump reported, and pain is diffuse or non-localized). Your discomfort might stem from muscle strains, joint strain, or other abdominal causes. We recommend monitoring your symptoms closely and seeking a general medical consult if the discomfort continues.";
        document.getElementById('emergencyNotice').classList.add('hidden');
    }
    
    // Set location analysis
    if (location === 'groin') {
        likelyDesc = "Based on the location of symptoms in the groin crease, this is highly characteristic of an **Inguinal Hernia** (most common in men) or a **Femoral Hernia** (more common in women). Inguinal hernias occur when fat or intestine pushes through the inguinal canal.";
    } else if (location === 'belly') {
        likelyDesc = "Symptoms near the navel are highly indicative of an **Umbilical Hernia**. These occur when the abdominal wall weakens near the belly button, often caused by heavy lifting, pregnancy, or obesity.";
    } else if (location === 'scar') {
        likelyDesc = "Discomfort or bulging around a previous surgical scar points directly to an **Incisional Hernia**. These develop when muscle tissue does not heal fully after a previous abdominal operation.";
    } else if (location === 'upper') {
        likelyDesc = "Symptoms in the midline of the upper abdomen points to an **Epigastric Hernia**. These are typically small protrusions of fat through the fibers of the linea alba between the navel and breastbone.";
    } else {
        likelyDesc = "Your symptoms do not point to a specific single category, but could indicate an occult hernia (where no visible bulge is present yet) or general soft-tissue injury. A physical examination is the most reliable way to confirm.";
    }
    
    // Update DOM
    const badge = document.getElementById('statusLabel');
    badge.className = `text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full border ${badgeClass}`;
    badge.innerText = badgeText;
    
    const iconBg = document.getElementById('statusIconBg');
    iconBg.className = `w-16 h-16 rounded-2xl flex items-center justify-center shrink-0 ${iconColor}`;
    iconBg.innerHTML = iconSvg;
    
    document.getElementById('resultTitle').innerText = title;
    
    // Convert markdownbold ** to HTML bold tags
    let formattedDesc = description.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
    document.getElementById('resultDescription').innerHTML = formattedDesc;
    
    document.getElementById('likelyTypeDescription').innerText = likelyDesc;
    
    const pBtn = document.getElementById('btnPrimaryAction');
    pBtn.innerText = btnText;
    pBtn.href = btnLink;
    pBtn.className = `flex-1 min-w-[200px] inline-flex items-center justify-center text-white font-semibold px-6 py-4 rounded-xl shadow-md hover:shadow-lg transition ${btnColor}`;
}

function resetChecker() {
    answers = {};
    historySteps = [];
    currentStepIndex = 0;
    
    const disc = document.getElementById('disclaimerCard');
    const results = document.getElementById('resultsCard');
    
    results.classList.add('opacity-0', 'scale-95');
    setTimeout(() => {
        results.classList.add('hidden');
        disc.classList.remove('hidden');
        setTimeout(() => {
            disc.classList.remove('opacity-0', 'scale-95');
        }, 50);
    }, 400);
}
</script>

<?php require __DIR__ . '/../includes/footer.php'; ?>
