<?php
$page_title = 'Hernia and Surgery Glossary | Dr. Kumar of Billroth Hospitals Chennai';
$page_description = 'Plain-language definitions of hernia and surgical terms, covering anatomy, mesh types, laparoscopic and robotic techniques, and post-operative language.';
require __DIR__ . '/../includes/header.php';
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
            <span>Resources</span>
            <span class="mx-2">/</span>
            <span class="text-white">Medical Glossary</span>
        </nav>
        <h1 class="font-display text-4xl md:text-5xl font-bold mb-4">Medical Glossary</h1>
        <p class="text-xl text-brand-100 max-w-2xl">Comprehensive reference guide to medical terms used in hernia diagnosis, treatment, and surgery.</p>
    </div>
</section>

<!-- Quick Navigation -->
<nav class="bg-white border-b border-slate-200 sticky top-[72px] z-30 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 py-4">
        <div class="flex flex-wrap gap-2 justify-center">
            <a href="#A" class="glossary-nav-btn px-3 py-1.5 rounded-lg text-sm font-medium bg-brand-50 text-brand-700 hover:bg-brand-100">A</a>
            <a href="#B" class="glossary-nav-btn px-3 py-1.5 rounded-lg text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200">B</a>
            <a href="#C" class="glossary-nav-btn px-3 py-1.5 rounded-lg text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200">C</a>
            <a href="#D" class="glossary-nav-btn px-3 py-1.5 rounded-lg text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200">D</a>
            <a href="#E" class="glossary-nav-btn px-3 py-1.5 rounded-lg text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200">E</a>
            <a href="#F" class="glossary-nav-btn px-3 py-1.5 rounded-lg text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200">F</a>
            <a href="#G" class="glossary-nav-btn px-3 py-1.5 rounded-lg text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200">G</a>
            <a href="#H" class="glossary-nav-btn px-3 py-1.5 rounded-lg text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200">H</a>
            <a href="#I" class="glossary-nav-btn px-3 py-1.5 rounded-lg text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200">I</a>
            <a href="#L" class="glossary-nav-btn px-3 py-1.5 rounded-lg text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200">L</a>
            <a href="#M" class="glossary-nav-btn px-3 py-1.5 rounded-lg text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200">M</a>
            <a href="#N" class="glossary-nav-btn px-3 py-1.5 rounded-lg text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200">N</a>
            <a href="#O" class="glossary-nav-btn px-3 py-1.5 rounded-lg text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200">O</a>
            <a href="#P" class="glossary-nav-btn px-3 py-1.5 rounded-lg text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200">P</a>
            <a href="#R" class="glossary-nav-btn px-3 py-1.5 rounded-lg text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200">R</a>
            <a href="#S" class="glossary-nav-btn px-3 py-1.5 rounded-lg text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200">S</a>
            <a href="#T" class="glossary-nav-btn px-3 py-1.5 rounded-lg text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200">T</a>
            <a href="#V" class="glossary-nav-btn px-3 py-1.5 rounded-lg text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200">V</a>
            <a href="#W" class="glossary-nav-btn px-3 py-1.5 rounded-lg text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200">W</a>
        </div>
    </div>
</nav>

<!-- Glossary Content -->
<section class="py-16 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4">

        <!-- Search -->
        <div class="mb-10">
            <div class="relative max-w-md mx-auto">
                <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                <input type="text" id="glossarySearch" placeholder="Search terms..." class="w-full pl-12 pr-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none">
            </div>
        </div>

        <!-- A -->
        <div class="glossary-letter-section mb-10" id="A">
            <h2 class="text-2xl font-bold text-slate-800 mb-4 flex items-center gap-3">
                <span class="w-12 h-12 rounded-xl bg-brand-700 text-white flex items-center justify-center text-xl font-bold">A</span>
            </h2>
            <div class="space-y-4">
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="abdominal wall">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Abdominal Wall</h3>
                    <p class="text-slate-600">The layered structure of muscle, fat, and tissue that forms the front of the abdomen, protecting internal organs. Hernias occur when this wall weakens or has gaps.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="abdominal wall reconstruction AWR">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Abdominal Wall Reconstruction (AWR)</h3>
                    <p class="text-slate-600">A comprehensive surgical procedure to repair complex or large abdominal wall defects, often involving mesh reinforcement and component separation techniques.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="adhesion adhesions scar tissue">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Adhesions</h3>
                    <p class="text-slate-600">Bands of scar tissue that form between abdominal organs or between organs and the abdominal wall after surgery or inflammation. Can cause pain or intestinal obstruction.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="anesthesia general local regional">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Anesthesia</h3>
                    <p class="text-slate-600">Medication that prevents pain during surgery. Types include general (puts you to sleep), regional (numbs a region of the body), and local (numbs a specific area).</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="antibiotics">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Antibiotics</h3>
                    <p class="text-slate-600">Medications used to prevent or treat bacterial infections. May be given before surgery to prevent surgical site infections.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="appendectomy">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Appendectomy</h3>
                    <p class="text-slate-600">Surgical removal of the appendix. Can be performed laparoscopically or as an open surgery, often done emergently for appendicitis.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="autonomic nervous system">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Autonomic Nervous System</h3>
                    <p class="text-slate-600">The part of the nervous system that controls involuntary functions like heart rate, digestion, and breathing. Important during abdominal surgery.</p>
                </div>
            </div>
        </div>

        <!-- B -->
        <div class="glossary-letter-section mb-10" id="B">
            <h2 class="text-2xl font-bold text-slate-800 mb-4 flex items-center gap-3">
                <span class="w-12 h-12 rounded-xl bg-brand-700 text-white flex items-center justify-center text-xl font-bold">B</span>
            </h2>
            <div class="space-y-4">
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="biological mesh">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Biological Mesh</h3>
                    <p class="text-slate-600">A type of surgical implant made from human or animal tissue (such as pig skin or cow heart tissue) that is processed to create a scaffold for tissue regeneration. Used in contaminated surgical fields.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="bowel intestine">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Bowel</h3>
                    <p class="text-slate-600">Another term for the intestine, including both the small bowel (small intestine) and large bowel (colon/large intestine). Commonly referred to during abdominal surgery.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="bariatric surgery weight loss">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Bariatric Surgery</h3>
                    <p class="text-slate-600">Surgical procedures performed to help with weight loss. Sometimes combined with hernia repair in patients with obesity.</p>
                </div>
            </div>
        </div>

        <!-- C -->
        <div class="glossary-letter-section mb-10" id="C">
            <h2 class="text-2xl font-bold text-slate-800 mb-4 flex items-center gap-3">
                <span class="w-12 h-12 rounded-xl bg-brand-700 text-white flex items-center justify-center text-xl font-bold">C</span>
            </h2>
            <div class="space-y-4">
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="camera port laparoscopic">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Camera Port</h3>
                    <p class="text-slate-600">The small incision through which a laparoscope (tiny camera) is inserted during laparoscopic surgery, allowing the surgeon to view the operative field on a monitor.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="chronic pain">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Chronic Pain</h3>
                    <p class="text-slate-600">Pain that persists for more than 3 months after surgery. While uncommon after hernia repair (&lt;3% of patients), it can be a complication requiring additional treatment.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="component separation">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Component Separation</h3>
                    <p class="text-slate-600">A surgical technique used in complex abdominal wall reconstruction where the layers of abdominal muscle are separated to allow better closure of large defects. Can be performed with or without mesh reinforcement.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="contaminated field infection">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Contaminated Field</h3>
                    <p class="text-slate-600">A surgical site that has been exposed to bacteria or infection. Hernia repairs in contaminated fields require special techniques and sometimes biological mesh.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="congenital birth defect">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Congenital</h3>
                    <p class="text-slate-600">A condition present at birth. Some hernias, such as indirect inguinal hernias, are congenital (present from birth) and may become apparent later in life.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="CT scan computed tomography">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">CT Scan</h3>
                    <p class="text-slate-600">Computed Tomography scan - an imaging test that creates detailed cross-sectional images of the body. Used to diagnose hernias and plan surgery.</p>
                </div>
            </div>
        </div>

        <!-- D -->
        <div class="glossary-letter-section mb-10" id="D">
            <h2 class="text-2xl font-bold text-slate-800 mb-4 flex items-center gap-3">
                <span class="w-12 h-12 rounded-xl bg-brand-700 text-white flex items-center justify-center text-xl font-bold">D</span>
            </h2>
            <div class="space-y-4">
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="daycare day surgery outpatient">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Daycare/Day Surgery</h3>
                    <p class="text-slate-600">Surgery where the patient is discharged on the same day as the procedure, typically within a few hours after the operation. Most laparoscopic hernia repairs are daycare procedures.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="defect hernia gap opening">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Defect</h3>
                    <p class="text-slate-600">The opening or weakness in the abdominal wall through which tissue protrudes. Hernia defects vary in size from small (1-2 cm) to very large (15+ cm).</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="desarda repair no mesh">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Desarda Repair</h3>
                    <p class="text-slate-600">A tension-free tissue repair technique for inguinal hernias that uses a strip of external oblique aponeurosis to reinforce the posterior wall without using mesh.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="diagnostic imaging ultrasound MRI">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Diagnostic Imaging</h3>
                    <p class="text-slate-600">Tests used to diagnose hernias and plan treatment, including ultrasound, CT scan, and MRI. Essential for complex or recurrent hernias.</p>
                </div>
            </div>
        </div>

        <!-- E -->
        <div class="glossary-letter-section mb-10" id="E">
            <h2 class="text-2xl font-bold text-slate-800 mb-4 flex items-center gap-3">
                <span class="w-12 h-12 rounded-xl bg-brand-700 text-white flex items-center justify-center text-xl font-bold">E</span>
            </h2>
            <div class="space-y-4">
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="eTEP enhanced totally extraperitoneal">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">eTEP (Enhanced Totally Extraperitoneal)</h3>
                    <p class="text-slate-600">An advanced laparoscopic technique for inguinal hernia repair that accesses the preperitoneal space from the contralateral side, providing excellent visualization and repair.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="emergency surgery urgent">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Emergency Surgery</h3>
                    <p class="text-slate-600">Surgery performed urgently due to a life-threatening condition. Strangulated or incarcerated hernias require emergency surgery to prevent tissue death.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="epigastric hernia">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Epigastric Hernia</h3>
                    <p class="text-slate-600">A hernia that occurs in the epigastric region of the abdomen, between the belly button and the breastbone. Contains fat or occasionally bowel.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="external oblique muscle">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">External Oblique</h3>
                    <p class="text-slate-600">The outermost layer of abdominal muscle. An important anatomical structure in hernia repair and component separation techniques.</p>
                </div>
            </div>
        </div>

        <!-- F -->
        <div class="glossary-letter-section mb-10" id="F">
            <h2 class="text-2xl font-bold text-slate-800 mb-4 flex items-center gap-3">
                <span class="w-12 h-12 rounded-xl bg-brand-700 text-white flex items-center justify-center text-xl font-bold">F</span>
            </h2>
            <div class="space-y-4">
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="femoral hernia thigh groin">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Femoral Hernia</h3>
                    <p class="text-slate-600">A hernia that occurs through the femoral canal, located just below the inguinal ligament in the upper thigh. More common in women and requires surgical repair.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="fistula abnormal connection">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Fistula</h3>
                    <p class="text-slate-600">An abnormal connection or tunnel between two body structures. In hernia context, may refer to a communication between the bowel and skin or other organs.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="fixation tacks sutures mesh">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Fixation</h3>
                    <p class="text-slate-600">The method of securing mesh to tissues during hernia repair. Can be done with sutures, tacks, glue, or self-fixating mesh.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="flank side abdomen">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Flank</h3>
                    <p class="text-slate-600">The side of the body between the ribs and hip. Lumbar hernias occur in this region.</p>
                </div>
            </div>
        </div>

        <!-- G -->
        <div class="glossary-letter-section mb-10" id="G">
            <h2 class="text-2xl font-bold text-slate-800 mb-4 flex items-center gap-3">
                <span class="w-12 h-12 rounded-xl bg-brand-700 text-white flex items-center justify-center text-xl font-bold">G</span>
            </h2>
            <div class="space-y-4">
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="gallbladder gallstones cholecystectomy">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Gallbladder</h3>
                    <p class="text-slate-600">A small organ that stores bile. Gallstones and gallbladder inflammation (cholecystitis) are common conditions treated by laparoscopic surgery.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="gastrointestinal GI stomach bowel">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Gastrointestinal (GI)</h3>
                    <p class="text-slate-600">Relating to the digestive system, including the stomach, small intestine, large intestine, and related organs.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="gerd reflux heartburn">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">GERD (Gastresophageal Reflux Disease)</h3>
                    <p class="text-slate-600">Chronic acid reflux where stomach acid regularly flows back into the esophagus. May be associated with hiatal hernia.</p>
                </div>
            </div>
        </div>

        <!-- H -->
        <div class="glossary-letter-section mb-10" id="H">
            <h2 class="text-2xl font-bold text-slate-800 mb-4 flex items-center gap-3">
                <span class="w-12 h-12 rounded-xl bg-brand-700 text-white flex items-center justify-center text-xl font-bold">H</span>
            </h2>
            <div class="space-y-4">
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="hernia bulge lump">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Hernia</h3>
                    <p class="text-slate-600">A bulge or lump that occurs when an organ or tissue pushes through a weak spot in the surrounding muscle or connective tissue. Requires surgical repair for complete resolution.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="herniorrhaphy repair">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Herniorrhaphy</h3>
                    <p class="text-slate-600">The surgical term for hernia repair. Can be performed with or without mesh reinforcement.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="hiatal hernia stomach chest">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Hiatal Hernia</h3>
                    <p class="text-slate-600">A hernia where part of the stomach pushes up through the diaphragm into the chest cavity. Often associated with GERD and may require fundoplication surgery.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="hydrocele">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Hydrocele</h3>
                    <p class="text-slate-600">A fluid-filled sac surrounding a testicle, causing scrotal swelling. Often associated with inguinal hernias in infants but can occur in adults.</p>
                </div>
            </div>
        </div>

        <!-- I -->
        <div class="glossary-letter-section mb-10" id="I">
            <h2 class="text-2xl font-bold text-slate-800 mb-4 flex items-center gap-3">
                <span class="w-12 h-12 rounded-xl bg-brand-700 text-white flex items-center justify-center text-xl font-bold">I</span>
            </h2>
            <div class="space-y-4">
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="incarcerated trapped hernia">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Incarcerated Hernia</h3>
                    <p class="text-slate-600">A hernia where the protruding tissue becomes trapped and cannot be pushed back into the abdominal cavity. Can lead to strangulation if not treated.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="incisional hernia previous surgery scar">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Incisional Hernia</h3>
                    <p class="text-slate-600">A hernia that occurs through a previous surgical scar. Incisional hernias can occur after any abdominal surgery and often require complex repair.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="indirect inguinal hernia congenital">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Indirect Inguinal Hernia</h3>
                    <p class="text-slate-600">A hernia that passes through the internal inguinal ring, following the path the testicles took during development. Often congenital (present from birth) and common in males.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="inguinal canal groin">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Inguinal Canal</h3>
                    <p class="text-slate-600">A passage through the lower abdominal wall in the groin region. In males, it contains the spermatic cord; in females, it contains the round ligament.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="inguinal hernia groin">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Inguinal Hernia</h3>
                    <p class="text-slate-600">A hernia that occurs in the groin region. The most common type of hernia, accounting for about 75% of all hernias. Can be indirect or direct.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="intraperitoneal inside abdomen">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Intraperitoneal</h3>
                    <p class="text-slate-600">Located within the peritoneal cavity (the space containing abdominal organs). Some mesh types are designed for intraperitoneal placement.</p>
                </div>
            </div>
        </div>

        <!-- L -->
        <div class="glossary-letter-section mb-10" id="L">
            <h2 class="text-2xl font-bold text-slate-800 mb-4 flex items-center gap-3">
                <span class="w-12 h-12 rounded-xl bg-brand-700 text-white flex items-center justify-center text-xl font-bold">L</span>
            </h2>
            <div class="space-y-4">
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="laparoscopic keyhole minimally invasive">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Laparoscopic Surgery</h3>
                    <p class="text-slate-600">Minimally invasive surgery performed through several small incisions using a camera and specialized instruments. Benefits include less pain, faster recovery, and better cosmetic outcomes.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="lichtenstein tension-free mesh">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Lichtenstein Repair</h3>
                    <p class="text-slate-600">The gold standard open technique for inguinal hernia repair, using a flat mesh placed over the posterior wall. Often called tension-free repair.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="liver">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Liver</h3>
                    <p class="text-slate-600">The largest internal organ, located in the upper right abdomen. Important landmark during abdominal surgery.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="local anesthesia numbing">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Local Anesthesia</h3>
                    <p class="text-slate-600">Medication that numbs a specific area of the body. Used for minor procedures or to supplement other anesthesia types.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="lumbar hernia flank">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Lumbar Hernia</h3>
                    <p class="text-slate-600">A rare hernia through the muscles of the flank (side of the abdomen). May be congenital or acquired after surgery or trauma.</p>
                </div>
            </div>
        </div>

        <!-- M -->
        <div class="glossary-letter-section mb-10" id="M">
            <h2 class="text-2xl font-bold text-slate-800 mb-4 flex items-center gap-3">
                <span class="w-12 h-12 rounded-xl bg-brand-700 text-white flex items-center justify-center text-xl font-bold">M</span>
            </h2>
            <div class="space-y-4">
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="mesh prosthetic implant">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Mesh</h3>
                    <p class="text-slate-600">A prosthetic implant used to reinforce hernia repairs. Made from synthetic materials (polypropylene, polyester) or biological tissues. Dramatically reduces recurrence rates.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="meshoma meshoma">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Meshoma</h3>
                    <p class="text-slate-600">A rare complication where mesh shrinks, bunches, or forms a mass. Can cause pain or discomfort and may require revision surgery.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="morbid obesity BMI">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Morbid Obesity</h3>
                    <p class="text-slate-600">A condition defined by Body Mass Index (BMI) of 40 or higher, or BMI of 35-40 with obesity-related health conditions. A risk factor for hernia development and recurrence.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="MRI magnetic resonance imaging">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">MRI</h3>
                    <p class="text-slate-600">Magnetic Resonance Imaging - an imaging test that uses strong magnetic fields to create detailed images of organs and tissues. Useful for complex hernia diagnosis.</p>
                </div>
            </div>
        </div>

        <!-- N -->
        <div class="glossary-letter-section mb-10" id="N">
            <h2 class="text-2xl font-bold text-slate-800 mb-4 flex items-center gap-3">
                <span class="w-12 h-12 rounded-xl bg-brand-700 text-white flex items-center justify-center text-xl font-bold">N</span>
            </h2>
            <div class="space-y-4">
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="narcotics opioids pain medication">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Narcotics/Opioids</h3>
                    <p class="text-slate-600">Strong pain medications that may be prescribed after surgery. Used short-term to manage pain. Patients are encouraged to transition to over-the-counter pain relievers as soon as possible.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="nerves nerve injury chronic pain">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Nerves</h3>
                    <p class="text-slate-600">Delicate structures that can be damaged during hernia surgery, potentially causing numbness, tingling, or chronic pain. Careful surgical technique minimizes this risk.</p>
                </div>
            </div>
        </div>

        <!-- O -->
        <div class="glossary-letter-section mb-10" id="O">
            <h2 class="text-2xl font-bold text-slate-800 mb-4 flex items-center gap-3">
                <span class="w-12 h-12 rounded-xl bg-brand-700 text-white flex items-center justify-center text-xl font-bold">O</span>
            </h2>
            <div class="space-y-4">
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="obesity BMI weight">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Obesity</h3>
                    <p class="text-slate-600">Excess body weight, typically measured by Body Mass Index (BMI). A significant risk factor for hernia development, recurrence, and surgical complications.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="obstruction bowel blockage">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Obstruction</h3>
                    <p class="text-slate-600">A blockage of the bowel that prevents food, fluid, and gas from passing through. Can be caused by incarcerated or strangulated hernias.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="open surgery traditional">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Open Surgery</h3>
                    <p class="text-slate-600">Traditional surgical approach using a single, larger incision directly over the hernia. May be necessary for complex hernias or when laparoscopic surgery is not suitable.</p>
                </div>
            </div>
        </div>

        <!-- P -->
        <div class="glossary-letter-section mb-10" id="P">
            <h2 class="text-2xl font-bold text-slate-800 mb-4 flex items-center gap-3">
                <span class="w-12 h-12 rounded-xl bg-brand-700 text-white flex items-center justify-center text-xl font-bold">P</span>
            </h2>
            <div class="space-y-4">
                <div id="paraumbilical-hernia-surgery-in-chennai" class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="paraumbilical hernia near belly button">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Paraumbilical Hernia</h3>
                    <p class="text-slate-600">A hernia that occurs near but not at the belly button. Common in adults, especially those with obesity or after pregnancy.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="peritoneum lining abdominal cavity">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Peritoneum</h3>
                    <p class="text-slate-600">The membrane that lines the abdominal cavity and covers abdominal organs. Important anatomical landmark in hernia repair.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="polypropylene mesh">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Polypropylene</h3>
                    <p class="text-slate-600">The most common material used in surgical mesh. Lightweight, strong, and well-tolerated by the body.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="pneumoperitoneum carbon dioxide gas">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Pneumoperitoneum</h3>
                    <p class="text-slate-600">Insufflation of carbon dioxide gas into the abdominal cavity during laparoscopic surgery to create working space for the surgeon.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="port incision laparoscopic trocars">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Port</h3>
                    <p class="text-slate-600">A hollow tube inserted through the abdominal wall during laparoscopic surgery. Instruments and the camera pass through these ports.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="preoperative tests blood work ECG">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Preoperative Tests</h3>
                    <p class="text-slate-600">Medical tests performed before surgery to ensure patient safety, including blood tests, ECG, chest X-ray, and other evaluations as needed.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="primary repair no mesh">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Primary Repair</h3>
                    <p class="text-slate-600">Hernia repair without mesh, using sutures to close the defect. Reserved for small hernias or contaminated fields where mesh is not advisable.</p>
                </div>
            </div>
        </div>

        <!-- R -->
        <div class="glossary-letter-section mb-10" id="R">
            <h2 class="text-2xl font-bold text-slate-800 mb-4 flex items-center gap-3">
                <span class="w-12 h-12 rounded-xl bg-brand-700 text-white flex items-center justify-center text-xl font-bold">R</span>
            </h2>
            <div class="space-y-4">
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="recurrence recurrent hernia come back">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Recurrence</h3>
                    <p class="text-slate-600">When a hernia returns after surgical repair. Modern techniques with mesh have recurrence rates of less than 1-3%.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="recurrent hernia previous repair">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Recurrent Hernia</h3>
                    <p class="text-slate-600">A hernia that has returned after previous surgical repair. Often more complex to repair due to scar tissue from previous surgery.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="regional anesthesia spinal epidural">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Regional Anesthesia</h3>
                    <p class="text-slate-600">Anesthesia that numbs a region of the body, such as spinal or epidural anesthesia that numbs the lower body.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="robotic surgery">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Robotic Surgery</h3>
                    <p class="text-slate-600">Advanced surgical technique using robotic arms controlled by the surgeon. Provides enhanced precision, 3D visualization, and dexterity for complex hernia repairs.</p>
                </div>
            </div>
        </div>

        <!-- S -->
        <div class="glossary-letter-section mb-10" id="S">
            <h2 class="text-2xl font-bold text-slate-800 mb-4 flex items-center gap-3">
                <span class="w-12 h-12 rounded-xl bg-brand-700 text-white flex items-center justify-center text-xl font-bold">S</span>
            </h2>
            <div class="space-y-4">
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="seroma fluid collection">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Seroma</h3>
                    <p class="text-slate-600">A collection of clear fluid that can accumulate under the skin after surgery. Usually resolves on its own but may need drainage if large or persistent.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="shoulder pain referred gas">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Shoulder Pain</h3>
                    <p class="text-slate-600">Common after laparoscopic surgery due to diaphragmatic irritation from residual carbon dioxide gas. Usually resolves within 24-48 hours.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="sling support mesh">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Sling</h3>
                    <p class="text-slate-600">A supportive mesh structure placed under an organ (such as the bladder in female pelvic hernias) to hold it in position during repair.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="spermatic cord testicle">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Spermatic Cord</h3>
                    <p class="text-slate-600">The cord that connects the testicles to the prostate. Contains blood vessels, nerves, and the vas deferens. Must be carefully protected during inguinal hernia repair.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="sportsman hernia athletic pubalgia">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Sportsman's Hernia</h3>
                    <p class="text-slate-600">A condition causing chronic groin pain in athletes without a visible hernia. May involve weakness of the abdominal wall or injury to the pubic bone.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="sutures stitches">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Sutures</h3>
                    <p class="text-slate-600">Stitches used to close wounds or secure mesh during surgery. Can be absorbable (dissolve over time) or non-absorbable (removed later).</p>
                </div>
            </div>
        </div>

        <!-- T -->
        <div class="glossary-letter-section mb-10" id="T">
            <h2 class="text-2xl font-bold text-slate-800 mb-4 flex items-center gap-3">
                <span class="w-12 h-12 rounded-xl bg-brand-700 text-white flex items-center justify-center text-xl font-bold">T</span>
            </h2>
            <div class="space-y-4">
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="TAPP transabdominal preperitoneal">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">TAPP (Transabdominal Preperitoneal)</h3>
                    <p class="text-slate-600">A laparoscopic technique for inguinal hernia repair where the surgeon enters the peritoneal cavity and places mesh in the preperitoneal space.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="TAR transversus abdominis release">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">TAR (Transversus Abdominis Release)</h3>
                    <p class="text-slate-600">An advanced component separation technique used in complex abdominal wall reconstruction. Allows closure of large defects with less tension.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="TEP totally extraperitoneal">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">TEP (Totally Extraperitoneal)</h3>
                    <p class="text-slate-600">A laparoscopic technique for inguinal hernia repair where the surgeon works in the preperitoneal space without entering the peritoneal cavity.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="testicular atrophy">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Testicular Atrophy</h3>
                    <p class="text-slate-600">Shrinkage of the testicle due to compromised blood supply. A rare complication of inguinal hernia repair, usually from injury to the testicular artery.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="tissue grating">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Tissue Grating</h3>
                    <p class="text-slate-600">A technique where mesh is placed without fixation, relying on the body's own tissue growth to hold it in position. Reduces chronic pain risk.</p>
                </div>
            </div>
        </div>

        <!-- V -->
        <div class="glossary-letter-section mb-10" id="V">
            <h2 class="text-2xl font-bold text-slate-800 mb-4 flex items-center gap-3">
                <span class="w-12 h-12 rounded-xl bg-brand-700 text-white flex items-center justify-center text-xl font-bold">V</span>
            </h2>
            <div class="space-y-4">
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="Valsalva maneuver cough strain">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Valsalva Maneuver</h3>
                    <p class="text-slate-600">The action of forcibly exhaling against a closed airway, like straining during bowel movements or lifting heavy objects. Increases intra-abdominal pressure and makes hernias more visible.</p>
                </div>
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="ventral hernia front abdomen">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Ventral Hernia</h3>
                    <p class="text-slate-600">A hernia that occurs through the front (ventral) abdominal wall. Includes epigastric, umbilical, and incisional hernias.</p>
                </div>
            </div>
        </div>

        <!-- W -->
        <div class="glossary-letter-section mb-10" id="W">
            <h2 class="text-2xl font-bold text-slate-800 mb-4 flex items-center gap-3">
                <span class="w-12 h-12 rounded-xl bg-brand-700 text-white flex items-center justify-center text-xl font-bold">W</span>
            </h2>
            <div class="space-y-4">
                <div class="glossary-term bg-white rounded-xl p-5 border border-slate-100 shadow-sm" data-term="wound infection surgical site">
                    <h3 class="font-bold text-brand-700 text-lg mb-2">Wound Infection</h3>
                    <p class="text-slate-600">An infection at the surgical site. Proper surgical technique, antibiotics, and wound care minimize this risk. May require antibiotics or wound drainage.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- CTA Section -->
<section class="bg-gradient-to-r from-brand-700 to-brand-800 py-16">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">Need More Information?</h2>
        <p class="text-brand-100 text-lg mb-8 max-w-2xl mx-auto">Schedule a consultation to discuss your specific condition and treatment options with Dr. Kumar of Billroth Hospitals.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?= $base_path ?>book-appointment" class="inline-flex items-center justify-center gap-2 bg-white text-brand-800 font-semibold px-8 py-4 rounded-xl hover:bg-brand-50 transition">
                Book Appointment
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            </a>
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center justify-center gap-2 bg-accent text-white font-semibold px-8 py-4 rounded-xl hover:bg-amber-600 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                Call Now
            </a>
        </div>
    </div>
</section>

<style>
.glossary-term.hidden { display: none; }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('glossarySearch');
    const terms = document.querySelectorAll('.glossary-term');
    const letterSections = document.querySelectorAll('.glossary-letter-section');

    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase().trim();

        if (searchTerm === '') {
            // Show all terms and sections
            terms.forEach(term => term.classList.remove('hidden'));
            letterSections.forEach(section => section.style.display = 'block');
            return;
        }

        // Filter terms
        let visibleCount = 0;
        letterSections.forEach(section => {
            const sectionTerms = section.querySelectorAll('.glossary-term');
            let sectionHasVisibleTerms = false;

            sectionTerms.forEach(term => {
                const termText = term.dataset.term || '';
                const termTitle = term.querySelector('h3').textContent.toLowerCase();
                const termDesc = term.querySelector('p').textContent.toLowerCase();

                if (termText.includes(searchTerm) || termTitle.includes(searchTerm) || termDesc.includes(searchTerm)) {
                    term.classList.remove('hidden');
                    sectionHasVisibleTerms = true;
                    visibleCount++;
                } else {
                    term.classList.add('hidden');
                }
            });

            section.style.display = sectionHasVisibleTerms ? 'block' : 'none';
        });
    });
});
</script>

<?php require __DIR__ . '/../includes/footer.php'; ?>
