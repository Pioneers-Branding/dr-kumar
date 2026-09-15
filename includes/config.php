<?php
// Calculate base path dynamically based on actual request URL to avoid broken assets or pages in subdirectories
if (!isset($base_path)) {
    $base_path = '';

    if (isset($_SERVER['REQUEST_URI'])) {
        $request_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $request_path = str_replace('\\', '/', $request_path);
        $request_path = ltrim($request_path, '/');
        
        if (!empty($request_path)) {
            $levels = substr_count(rtrim($request_path, '/'), '/');
            if (str_ends_with($request_path, '/')) {
                $levels += 1;
            }
            $base_path = str_repeat('../', $levels);
        }
    }
}

$site = [
    'name'        => 'HerniaCare 360 - Advanced Hernia Surgery by Dr. Kumar',
    // Person entity. Kept separate from the hospital name so schema.org/Person
    // and schema.org/Hospital resolve as two distinct entities.
    // TODO: replace with the full registered name once confirmed with the practice.
    'doctor'      => 'Dr. Kumar',
    'doctor_brand'=> 'Dr. Kumar of Billroth Hospitals',
    'credentials' => 'MBBS, MS (Surgery), MRCS (England), FMAS, FIAGES',
    'job_title'   => 'Consultant Hernia, Laparoscopic & Robotic Surgeon',
    // TODO: add the Tamil Nadu Medical Council / NMC registration number here.
    // It is the strongest single YMYL trust signal and is currently absent sitewide.
    'reg_number'  => '',
    'tagline'     => 'Advanced Abdominal Hernia & Laparoscopic Surgeon in Chennai',
    'phone'       => '+91 89255 02759',
    'phone_link'  => '+918925502759',
    'email'       => 'drkumargastrosurgeon@gmail.com',
    'address'     => '505, First Floor, OP Block, No: 11/59, Gajapathy Street, Shenoy Nagar, Chennai 600030',
    'url'         => 'https://herniacare360.com/',
    'logo'        => 'assets/images/logo.png',

    // Insurance networks accepted through Billroth Hospitals. Final cashless
    // approval remains subject to the patient's policy and insurer/TPA.
    'insurance' => [
        'private_insurers' => [
            'Star Health', 'Care Health', 'HDFC ERGO', 'ICICI Lombard',
            'Niva Bupa', 'Bajaj Allianz', 'Tata AIG', 'ManipalCigna',
        ],
        'tpas' => [
            'Medi Assist', 'Vidal Health', 'MDIndia', 'Paramount TPA',
            'Heritage Health', 'Raksha TPA', 'Family Health Plan Insurance (FHPL)',
        ],
        'government_psu' => [
            'National Insurance', 'New India Assurance',
            'Oriental Insurance', 'United India Insurance',
        ],
    ],

    // Practice location. This is the single source of truth for the address:
    // every page and every schema block reads from here, so the address is
    // never hardcoded into a page again.
    'clinic' => [
        'name'     => 'Billroth Hospitals',
        'street'   => '505, First Floor, OP Block, No: 11/59, Gajapathy Street',
        'locality' => 'Shenoy Nagar, Chennai',
        'region'   => 'Tamil Nadu',
        'postal'   => '600030',
        'country'  => 'IN',
        // Google Business Profile for the practice.
        'map_url'    => 'https://maps.google.com/?cid=6550270631746872398',
        'review_url' => 'https://search.google.com/local/writereview?placeid=ChIJr-kzCsFlUjoRTiTyS28851o',
        // TODO: add verified GeoCoordinates from the GBP listing. Deliberately
        // left empty rather than estimated - wrong coordinates are worse than none.
        'latitude'   => '',
        'longitude'  => '',
    ],

    // Dr. Kumar's general-surgery practice site. Same person, broader scope
    // (gallbladder, fistula, appendix, GERD). Declared as sameAs so both
    // domains resolve to one physician entity instead of two competing ones.
    'provider_site' => 'https://surgeondrkumar.com/',

    'social'      => [
        'facebook'  => 'https://www.facebook.com/share/1DXEY26Qra/',
        'instagram' => 'https://www.instagram.com/drkumar_billrothherniasurgeon?igsi=azRnbjFpZW94OTBr',
        'linkedin'  => 'https://www.linkedin.com/in/dr-kumar-hernia-surgeon-19971b325',
        'youtube'   => 'https://youtube.com/@drkumargastrosurgeon?si=-7wp7_hSzI70tHUc',
    ],
];

// Every profile that should resolve to the same physician entity.
$site['same_as'] = array_values(array_filter(array_merge(
    [$site['provider_site'], $site['clinic']['map_url']],
    array_values($site['social'])
)));

// Flat navigation for simple loops or fallback lists (like the footer)
$nav = [
    'Home'                       => '',
    'About Us'                   => 'about-best-hernia-hospital-in-chennai',
    'Hernia Surgery'             => 'treatment/hernia-surgeon-in-chennai',
    'Laparoscopic Hernia Surgery'=> 'treatment/best-laparoscopic-hernia-surgery-in-chennai',
    'Robotic Hernia Surgery'     => 'best-robotic-hernia-surgery-in-chennai',
    'Emergency Care'             => 'emergency-hernia-care',
    'Blog'                       => 'blog',
    'Contact Us'                 => 'contact',
    'Patient Testimonials'       => 'patient-testimonials',
];

// Structured multidimensional menu for the header (desktop mega-menu and mobile accordion)
$headerMenu = [
    [
        'label' => 'Home',
        'link'  => '',
    ],
    [
        'label' => 'About Us',
        'link'  => 'about-best-hernia-hospital-in-chennai',
    ],
    [
        'label' => 'Hernia Guide',
        'dropdown' => [
            [
                'title' => 'Understanding Hernia',
                'links' => [
                    ['label' => 'What is a Hernia?', 'link' => 'hernia/what-is-hernia'],
                    ['label' => 'Causes & Risks', 'link' => 'hernia/causes'],
                    ['label' => 'Symptoms & Signs', 'link' => 'hernia/symptoms'],
                    ['label' => 'Diagnosis Methods', 'link' => 'hernia/diagnosis'],
                    ['label' => 'Complications', 'link' => 'hernia/complications'],
                ]
            ],
            [
                'title' => 'Hernia Types',
                'links' => [
                    ['label' => 'Inguinal Hernia (Groin)', 'link' => 'my_types/inguinal-hernia-treatment-in-chennai'],
                    ['label' => 'Umbilical Hernia (Navel)', 'link' => 'my_types/umbilical-hernia-treatment-in-chennai'],
                    ['label' => 'Incisional Hernia (Scar)', 'link' => 'my_types/incisional-hernia-treatment-in-chennai'],
                    ['label' => 'Ventral Hernia (Abdomen)', 'link' => 'my_types/ventral-hernia-treatment-in-chennai'],
                    ['label' => 'Femoral Hernia (Groin)', 'link' => 'my_types/femoral-hernia-treatment-in-chennai'],
                    ['label' => 'Hiatal Hernia (Internal)', 'link' => 'my_types/hiatal-hernia-surgery-in-chennai'],
                    ['label' => 'Epigastric Hernia', 'link' => 'my_types/epigastric-hernia-surgery-in-chennai'],
                    ['label' => 'Strangulated (Emergency)', 'link' => 'my_types/strangulated-hernia-surgery-in-chennai'],
                ]
            ]
        ]
    ],
    [
        'label' => 'Treatments',
        'dropdown' => [
            [
                'title' => 'Surgical Procedures',
                'links' => [
                    ['label' => 'Hernia Surgery Overview', 'link' => 'treatment/hernia-surgeon-in-chennai'],
                    ['label' => 'Laparoscopic Surgery', 'link' => 'treatment/best-laparoscopic-hernia-surgery-in-chennai'],
                    ['label' => 'Robotic Hernia Surgery', 'link' => 'best-robotic-hernia-surgery-in-chennai'],
                    ['label' => 'TAPP Repair Technique', 'link' => 'treatment/tapp-repair-in-chennai'],
                    ['label' => 'TEP Repair Technique', 'link' => 'treatment/tep-repair-in-chennai'],
                    ['label' => 'eTEP Repair Technique', 'link' => 'treatment/etep-technique-expert-in-chennai'],
                    ['label' => 'Abdominal Wall Reconstruction', 'link' => 'treatment/abdominal-wall-reconstruction-in-chennai'],
                    ['label' => 'Diastasis Recti Repair', 'link' => 'treatment/diastasis-recti'],
                ]
            ],
            [
                'title' => 'Intra Operative Special Techniques',
                'links' => [
                    ['label' => 'Overview & Approach', 'link' => 'treatment/intra-operative-special-techniques'],
                ]
            ],
            [
                'title' => 'Mesh & Recovery',
                'links' => [
                    ['label' => 'Mesh Repair Technology', 'link' => 'treatment/mesh-hernia-repair-in-chennai'],
                    ['label' => 'Post-Op Recovery Process', 'link' => 'treatment/recovery'],
                ]
            ]
        ]
    ],
    [
        'label' => 'Advanced Tech',
        'dropdown' => [
            [
                'title' => 'Surgical Innovation',
                'links' => [
                    ['label' => 'Advanced Robotic Surgery', 'link' => 'advanced-techniques/robotic-surgery-system'],
                    ['label' => '3D Mesh Implants', 'link' => 'advanced-techniques/3d-mesh'],
                    ['label' => 'Biological Mesh Options', 'link' => 'advanced-techniques/biological-mesh'],
                    ['label' => 'Self-Gripping Mesh Tech', 'link' => 'advanced-techniques/self-gripping-mesh'],
                    ['label' => 'ERAS Recovery Protocol', 'link' => 'advanced-techniques/eras-protocol'],
                ]
            ]
        ]
    ],
    [
        'label' => 'Patient Corner',
        'dropdown' => [
            [
                'title' => 'Special Considerations',
                'links' => [
                    ['label' => 'Complex Hernia Info', 'link' => 'special-considerations/complex-hernia-info'],
                    ['label' => 'Obesity & Hernia', 'link' => 'special-considerations/obesity'],
                    ['label' => 'Diabetes & Hernia', 'link' => 'special-considerations/diabetes'],
                    ['label' => 'Pregnancy & Hernia Care', 'link' => 'special-considerations/pregnancy'],
                    ['label' => 'Elderly Hernia Care', 'link' => 'special-considerations/elderly'],
                    ['label' => 'Hernia in Children', 'link' => 'special-considerations/hernia-in-children'],
                    ['label' => 'Chronic Pain after Surgery', 'link' => 'special-considerations/chronic-pain'],
                    ['label' => 'Hernia & Chronic Cough - COPD', 'link' => 'special-considerations/chronic-cough-copd'],
                ]
            ],
            [
                'title' => 'Services & Consults',
                'links' => [
                    ['label' => 'Emergency Hernia Care', 'link' => 'emergency-hernia-care'],
                    ['label' => 'Online Consultation Portal', 'link' => 'online-consultation'],
                    ['label' => 'International Patients Portal', 'link' => 'international-patients'],
                    ['label' => 'Expert Second Opinion', 'link' => 'second-opinion'],
                ]
            ],
            [
                'title' => 'Patient Resources',
                'links' => [
                    ['label' => 'Education & Resources', 'link' => 'resources/patient-resources'],
                    ['label' => 'Hernia Symptom Checker', 'link' => 'resources/symptom-checker'],
                    ['label' => 'Patient Testimonials', 'link' => 'patient-testimonials'],
                    ['label' => 'FAQs', 'link' => 'resources/faqs'],
                    ['label' => 'Medical Glossary & Terms', 'link' => 'resources/glossary'],
                ]
            ]
        ]
    ],
    [
        'label' => 'Blog',
        'link'  => 'blog',
    ],
    [
        'label' => 'Contact Us',
        'link'  => 'contact',
    ],
];

$herniaConditions = [
    ['title' => 'Inguinal Hernia',    'img' => 'assets/images/inguinal-new-v2.png',        'desc' => 'eTEP, TEP & TAPP repair for groin hernias in adults.'],
    ['title' => 'Umbilical Hernia',   'img' => 'assets/images/umbilical-new-v2.png',       'desc' => 'Mesh & meshless repair tailored to defect size.'],
    ['title' => 'Incisional Hernia',  'img' => 'assets/images/incisional-new.png',      'desc' => 'Complex AWR with TAR & component separation techniques.'],
    ['title' => 'Ventral Hernia',     'img' => 'assets/images/ventral-new.png',          'desc' => 'Minimally invasive ventral hernia repair.'],
    ['title' => 'Paraumbilical',      'img' => 'assets/images/paraumbilical-new.png',   'desc' => 'Daycare paraumbilical hernia surgery with mesh.'],
];

$treatments = [
    ['title' => 'Inguinal Hernia',              'img' => 'assets/images/inguinal-new-v2.png',          'desc' => 'Laparoscopic &amp; Robotic TEP/TAPP repair for groin hernias with rapid recovery.',             'link' => 'my_types/inguinal-hernia-treatment-in-chennai'],
    ['title' => 'Umbilical Hernia',             'img' => 'assets/images/umbilical-new-v2.png',          'desc' => 'Daycare mesh & meshless repair tailored to defect size.',                        'link' => 'my_types/umbilical-hernia-treatment-in-chennai'],
    ['title' => 'Incisional Hernia',            'img' => 'assets/images/incisional-new.png',        'desc' => 'Complex AWR with TAR & component separation techniques.',                        'link' => 'my_types/incisional-hernia-treatment-in-chennai'],
    ['title' => 'Ventral Hernia',               'img' => 'assets/images/ventral-new.png',           'desc' => 'Minimally invasive repair for abdominal wall defects.',                        'link' => 'my_types/ventral-hernia-treatment-in-chennai'],
    ['title' => 'Robotic Hernia Surgery',        'img' => 'assets/images/hernia-surgery-new.png',   'desc' => 'Advanced robotic-assisted precision surgery.',                                  'link' => 'best-robotic-hernia-surgery-in-chennai'],
    ['title' => 'Laparoscopic Hernia Surgery',          'img' => 'assets/images/laparoscopic-new.png',   'desc' => 'Minimally invasive keyhole surgery for faster recovery and minimal scarring.',           'link' => 'treatment/best-laparoscopic-hernia-surgery-in-chennai'],
    ['title' => 'TAPP Repair',                   'img' => 'assets/images/tapp-precision.png',       'desc' => 'Transabdominal preperitoneal repair for groin and ventral hernias.',                  'link' => 'treatment/tapp-repair-in-chennai'],
    ['title' => 'eTEP Repair',                  'img' => 'assets/images/etep-reconstruction.png',   'desc' => 'Enhanced totally extraperitoneal technique for complex hernias.',             'link' => 'treatment/etep-technique-expert-in-chennai'],
    ['title' => 'Hiatal Hernia',                 'img' => 'assets/images/gerd-new.png',              'desc' => 'Laparoscopic hiatus hernia repair with anti-reflux surgery.',                  'link' => 'my_types/hiatal-hernia-surgery-in-chennai'],
    ['title' => 'Abdominal Wall Reconstruction','img' => 'assets/images/laparoscopic-new.png',   'desc' => 'Advanced TAR & component separation for complex cases.',                        'link' => 'treatment/abdominal-wall-reconstruction-in-chennai'],
    ['title' => 'Emergency Hernia Care',         'img' => 'assets/images/complications_emergency.png','desc' => '24/7 emergency strangulated hernia management.',                               'link' => 'emergency-hernia-care'],
    ['title' => 'Hernia Mesh Repair',            'img' => 'assets/images/mesh-comparison-3d.png',   'desc' => '3D mesh, biological mesh, & self-gripping options.',                          'link' => 'treatment/mesh-hernia-repair-in-chennai'],
];

$stats = [
    ['num' => '29+',     'label' => 'Years Experience'],
    ['num' => '10,000+', 'label' => 'Hernia Surgeries'],
    ['num' => '5,000+',  'label' => 'Gallbladder Surgeries'],
    ['num' => '20,000+', 'label' => 'Laparoscopic Procedures'],
];
