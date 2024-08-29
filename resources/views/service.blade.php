@extends('_layouts.main')

@section('title', 'Services')

@section('css')
<link href="{{ asset('build/css/service_style.css') }}" rel="stylesheet">

@endsection

@section('body')

<div class="hero">
    <img src="{{ url('build/img/service_img/service_hero.jpg') }}" alt="Service Background Image" class="back-image">
    <div class="overlay-gradient"></div>
    <div class="text-overlay2">
        <h2>Unleashing <span class="highlight">Excellence</span> <br>in Every Service</h2>
        <p>Explore our comprehensive range of services designed to meet the evolving needs of the energy sector with precision and innovation.</p>
    </div>
    <!-- <div class="text-overlay">
        <h2>Services</h2>
    </div> -->

</div>
<section class="white-section">
    <section class="title-content" style="text-align: left; padding-top:30px;">
        <div class="title-offset">
            <span class="background-text">Our Amazing Work</span>
            <h2 class="foreground-text">Our Amazing Work</h2>
        </div>
        <p>Our services are built on a rich foundation of expertise and a long history of excellence, ensuring unparalleled depth and quality.</p>
    </section>

    <section class="our-service">
        <!-- Card 1 -->
        <div class="card-container">
            <div class="left-fade"></div>
            <button class="scroll-btn left" onclick="scrollCards('left')">
                <i class="bi bi-chevron-left"></i>
            </button>
            <div class="cards-wrapper">



                <a class="card" href="{{ url('project') }}">
                    <div class="card-image">
                        <img src="{{ url('build/img/service_img/inspection_storage_card.jpg') }}" alt="Inspection Image" class="card-image" style="object-fit: cover;">
                    </div>
                    <img src="{{ url('build/icon/inspection_icon.png') }}" class="card-icon" alt="Inspection Icon" width="40" height="40">
                    <div class="text-container">
                        <div class="text-content">
                            <div class="card-header-head">Inspection</div>
                            <div class="card-content">
                                <p class="hover-text">Thorough inspections to ensure quality and safety.</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Card 2 -->
                <a class="card" href="{{ url('project') }}">
                    <div class="card-image">
                        <img src="{{ url('build/img/service_img/maintenance_card.jpg') }}" alt="Maintenance Image" class="card-image" style="object-fit: cover;">
                    </div>
                    <img src="{{ url('build/icon/maintenance_icon.png') }}" class="card-icon" alt="Maintenance Icon" width="40" height="40">
                    <div class="text-container">
                        <div class="text-content">
                            <div class="card-header-head">Maintenance</div>
                            <div class="card-content">
                                <p class="hover-text">Regular upkeep to ensure optimal performance.</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Card 3 -->
                <a class="card" href="{{ url('project') }}">
                    <div class="card-image">
                        <img src="{{ url('build/img/service_img/repair_card.jpg') }}" alt="Repair Image" class="card-image" style="object-fit: cover;">
                    </div>
                    <img src="{{ url('build/icon/repair_icon.png') }}" class="card-icon" alt="Repair Icon" width="40" height="40">
                    <div class="text-container">
                        <div class="text-content">
                            <div class="card-header-head">Repair</div>
                            <div class="card-content">
                                <p class="hover-text">Expert repair services to fix issues quickly.</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Card 4 -->
                <a class="card" href="{{ url('project') }}">
                    <div class="card-image">
                        <img src="{{ url('build/img/service_img/special_project_card.jpg') }}" alt="Special Project Image" class="card-image" style="object-fit: cover;">
                    </div>
                    <!-- <div class="card-icons-container">
                <img src="{{ url('assets/build/icon/DYNASEGMENT logo.png') }}" class="card-icon-top" alt="Special Project Icon">
                <img src="{{ url('assets/build/icon/ISDB logo.png') }}" class="card-icon-top" alt="Special Project Icon">
            </div> -->
                    <img src="{{ url('build/icon/project_icon.png') }}" class="card-icon" alt="Special Project Icon" width="40" height="40">
                    <div class="text-container">
                        <div class="text-content">
                            <div class="card-header-head">Special Project</div>
                            <div class="card-content">
                                <p class="hover-text">Innovative projects with remarkable outcomes.</p>
                            </div>
                        </div>
                    </div>
                </a>

                <div class="right-fade"></div>
                <button class="scroll-btn right" onclick="scrollCards('right')">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
    </section>

    <section class="title-content" style="text-align: left;">

        <h2 style="font-size: 2.3rem;">Vision One : Pioneering Excellence in Non-destructive Testing and Safety</h2>
    </section>

    <!-- <section class="title-content" style="text-align: left;">
    <p>Integrity inspection and nondestructive testing have long been essential practices, globally recognized for their role in identifying and analyzing potential hazards to ensure the safety of assets and personnel. At Vision One Sdn. Bhd., we are dedicated to upholding these standards with unparalleled excellence. Our comprehensive suite of both conventional and advanced NDT services reflects our commitment to precision and innovation, ensuring the ongoing reliability and safety of critical assets.</p>
</section> -->

    <section class="inspection-container">
        <div class="ndt-card-first">
            <video class="ndt-background-video" autoplay muted loop>
                <source src="{{ url('build/img/service_img/NDT_video.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="ndt-card-image-first">
                <div class="ndt-card-desc-green-bg">
                    <div class="ndt-card-desc">
                        <p class="ndt-card-description float" style="text-align:justify; font-weight:500; color:white; bottom:10px">
                            Integrity inspection and non-destructive testing have long been essential practices, globally recognized for their role in identifying and analyzing potential hazards to ensure the safety of assets and personnel. <br><br> Vision One Sdn. Bhd., we are dedicated to upholding these standards with unparalleled excellence. Our comprehensive suite of both conventional and advanced NDT services reflects our commitment to precision and innovation, ensuring the ongoing reliability and safety of critical assets.
                        </p>
                    </div>
                </div>
            </div>
        </div>



        <div class="ndt-card" onclick="scrollToTop(this); toggleActiveTop(this);" data-target="conventional-list">
            <div class="ndt-card-image">
                <img src="{{ url('build/img/service_img/conventional_NDT.jpg') }}" alt="Service Background Image">
            </div>
            <div class="ndt-card-content">
                <h2 class="ndt-card-title">Conventional NDT Services</h2>
                <p class="ndt-card-description">Techniques to evaluate the integrity of materials and structures for detecting defects of discontinuities to ensure the safety and performance namely but not limited to UT, VT, MPI, DPI, PMI, RT and ECT. <br></p>
                <p class="drop-down-ndt">View More</p>
            </div>
        </div>
        <div class="ndt-card" onclick="scrollToTop(this); toggleActiveTop(this);" data-target="advanced-list">
            <div class="ndt-card-image">
                <img src="{{ url('build/img/service_img/advanced_NDT.jpg') }}" alt="Service Background Image">
            </div>
            <div class="ndt-card-content">
                <h2 class="ndt-card-title">Advanced NDT Services</h2>
                <p class="ndt-card-description">More sophisticated methods for evaluating the integrity of materials and structures, often using digital technology and automation for enhanced precision namely but not limited to PAUT, AET, ECA, PEC and LRUT. <br></p>
                <p class="drop-down-ndt">View More</p>
            </div>
        </div>

    </section>

    <section class="service-list">
        <div class="dim-overlay"></div>
        <div id="conventional-list-popup" class="content-list-popup">
            <h2>Conventional NDT Services</h2>
            <div class="grid-container1">
                <div class="grid-item item1">
                    <img src="{{ url('build/img/service_img/conventional_NDT_desc1.jpeg') }}" alt="Service Background Image">
                </div>
                <div class="grid-item item2">
                    <ol class="ol-cards alternate" style="margin-left: 0;">
                        <li style="--ol-cards-color-accent:#06768D">
                            <div class="step"><i class="fas fa-x-ray"></i></div> <!-- Radiography Testing -->
                            <div class="title">Radiography Testing</div>
                            <div class="content">Radiographic Testing (RT) is a non-destructive testing (NDT) technique that employs x-rays or gamma rays to inspect the internal structure of manufactured parts, allowing for the detection of any flaws or defects.</div>
                        </li>
                        <li style="--ol-cards-color-accent:#2189A6">
                            <div class="step"><i class="fas fa-bezier-curve"></i></div> <!-- Ultrasonic Testing -->
                            <div class="title">Ultrasonic Testing</div>
                            <div class="content">Ultrasonic Testing (UT) encompasses a range of non-destructive testing (NDT) methods that employ high-frequency sound waves to traverse an object or material. This technique facilitates the characterization of material properties and the detection of any imperfections or flaws.</div>
                        </li>
                        <li style="--ol-cards-color-accent:#409AB4">
                            <div class="step"><i class="fas fa-cogs"></i></div> <!-- Magnetic Particle Testing -->
                            <div class="title">Magnetic Particle Testing</div>
                            <div class="content">Magnetic Particle Inspection (MPI) is a non-destructive testing method that utilizes a magnetic field to identify surface and near-surface discontinuities in ferromagnetic materials.</div>
                        </li>
                    </ol>

                </div>
            </div>

            <div class="grid-container2">
                <div class="grid-item item3">
                    <ol class="ol-cards alternate" style="margin-left: 0;">
                        <li style="--ol-cards-color-accent:#5AACBF">
                            <div class="step"><i class="fas fa-tint"></i></div> <!-- Dye/Liquid Penetrant Testing -->
                            <div class="title">Dye/Liquid Penetrant Testing</div>
                            <div class="content">Dye Penetrant Inspection (DPI), also referred to as Liquid Penetrant Inspection (LPI), is a prevalent non-destructive testing technique employed to reveal surface-breaking flaws. This cost-effective method is adept at detecting a variety of surface discontinuities, including cracks, porosity, laps, seams, and other imperfections.</div>
                        </li>
                        <li style="--ol-cards-color-accent:#72BECB">
                            <div class="step"><i class="fas fa-eye"></i></div> <!-- Visual Inspection -->
                            <div class="title">Visual Inspection</div>
                            <div class="content">Visual Testing (VT) relies on the direct observation of flaws visible to the naked eye and is the most widely employed non-destructive testing (NDT) method across various industries. It provides a practical and rapid means of quality control throughout every stage of the fabrication or maintenance process.</div>
                        </li>
                        <li style="--ol-cards-color-accent:#8BD0D6">
                            <div class="step"><i class="fas fa-cogs"></i></div> <!-- Eddy Current Testing -->
                            <div class="title">Eddy Current Testing</div>
                            <div class="content">Eddy Current Testing is a non-destructive testing (NDT) technique employed for various applications, including the detection of flaws, measurement of material and coating thickness, identification of materials, and assessment of heat treatment conditions in certain substances.</div>
                        </li>
                    </ol>

                </div>
                <div class="grid-item item4">
                    <img src="{{ url('build/img/service_img/conventional_NDT_desc2.jpeg') }}" alt="Service Background Image">
                </div>
            </div>
        </div>


        <div id="advanced-list-popup" class="content-list-popup">
        <h2>Advanced NDT Services</h2>
            <div class="grid-container1">
                <div class="grid-item item1">
                    <img src="{{ url('build/img/service_img/advance_NDT_desc1.jpeg') }}" alt="Service Background Image">
                </div>
                <div class="grid-item item2">
                    <ol class="ol-cards alternate" style="margin-left: 0;">
                        <li style="--ol-cards-color-accent:#8BD0D6">
                            <div class="step"><i class="fas fa-paint-roller"></i></div> <!-- Coating Inspection -->
                            <div class="title">Coating Inspection</div>
                            <div class="content">Eddy Current Testing is a non-destructive testing (NDT) technique employed for various applications, including the detection of flaws, measurement of material and coating thickness, identification of materials, and assessment of heat treatment conditions in certain substances.</div>
                        </li>
                        <li style="--ol-cards-color-accent:#72BECB">
                            <div class="step"><i class="fas fa-x-ray"></i></div> <!-- Computerized Radiography Testing -->
                            <div class="title">Computerized Radiography Testing</div>
                            <div class="content">In Computed Radiography, imaging plates exposed to X-rays or gamma rays retain the incoming radiation energy within a distinctive phosphor layer. This latent image is subsequently revealed by a specialized device, known as a scanner, which employs a precisely focused laser beam to stimulate and read the stored image from the plate.</div>
                        </li>
                        <li style="--ol-cards-color-accent:#5AACBF">
                            <div class="step"><i class="fas fa-chart-line"></i></div> <!-- Corrosion Monitoring – C-Scan and B-Scan UT -->
                            <div class="title">Corrosion Monitoring – C-Scan and B-Scan UT</div>
                            <div class="content">B-scan provides a cross-sectional view of the part's thickness, while a C-scan offers a top-down perspective of the two-dimensional encoded area. In the C-scan, time-of-flight or amplitude values are depicted using a color-coded palette.</div>
                        </li>
                        <li style="--ol-cards-color-accent:#409AB4">
                            <div class="step"><i class="fas fa-bolt"></i></div> <!-- Corrosion Under Insulation – Pulse Eddy Current Testing -->
                            <div class="title">Corrosion Under Insulation – Pulse Eddy Current Testing</div>
                            <div class="content">Pulsed Eddy Current technology utilizes electromagnetic principles to deliver average wall thickness measurements across the probe's footprint. It assesses and compares the percentage variation in average wall thickness throughout the entire object.</div>
                        </li>
                        <li style="--ol-cards-color-accent:#2189A6">
                            <div class="step"><i class="fas fa-cogs"></i></div> <!-- Eddy Current Array -->
                            <div class="title">Eddy Current Array</div>
                            <div class="content">Eddy Current Array (ECA) is a non-destructive testing technology that operates multiple eddy current coils arranged adjacently within a single probe assembly. Each coil within the probe generates a signal that corresponds to the amplitude and phase of the underlying structure.</div>
                        </li>
                    </ol>

                </div>
            </div>

            <div class="grid-container2">
                <div class="grid-item item3">
                    <ol class="ol-cards alternate" style="margin-left: 0;">
                        <li style="--ol-cards-color-accent:#06768D">
                            <div class="step"><i class="fas fa-ruler"></i></div> <!-- Long Range Ultrasonic Testing -->
                            <div class="title">Long Range Ultrasonic Testing</div>
                            <div class="content">Long Range Ultrasonic Testing (LRUT), or Guided Wave Ultrasonic Testing (GWUT), is an ultrasonic method that involves transmitting waves along the pipe wall (guiding walls) for distances of up to 180 meters.</div>
                        </li>
                        <li style="--ol-cards-color-accent:#8BD0D6">
                            <div class="step"><i class="fas fa-compass"></i></div> <!-- Magnetic Flux Leakage Testing -->
                            <div class="title">Magnetic Flux Leakage Testing</div>
                            <div class="content">Magnetic Flux Leakage (MFL) is a magnetic non-destructive testing technique designed to identify corrosion, pitting, and wall loss in steel structures. It is particularly prevalent for inspecting tank floors in the petrochemical sector.</div>
                        </li>
                        <li style="--ol-cards-color-accent:#72BECB">
                            <div class="step"><i class="fas fa-bezier-curve"></i></div> <!-- Phased Array Ultrasonic Testing -->
                            <div class="title">Phased Array Ultrasonic Testing</div>
                            <div class="content">Phased Array Ultrasonic Testing (PAUT) is an advanced inspection technique that utilizes beam-forming technology to detect and size defects within complex geometries. This method allows for precise and detailed examination by electronically controlling the angle and focus of ultrasonic beams.</div>
                        </li>
                        <li style="--ol-cards-color-accent:#5AACBF">
                            <div class="step"><i class="fas fa-tag"></i></div> <!-- Positive Metal Identification -->
                            <div class="title">Positive Metal Identification</div>
                            <div class="content">Positive Material Identification (PMI) is a swift and non-destructive testing (NDT) method employed to verify the chemical composition of metals and alloys. It is used to confirm that materials meet the necessary standards and specifications.</div>
                        </li>
                        <li style="--ol-cards-color-accent:#409AB4">
                            <div class="step"><i class="fas fa-search"></i></div> <!-- Videoscope/Boroscope Inspection -->
                            <div class="title">Videoscope/Boroscope Inspection</div>
                            <div class="content">Borescope inspection, or Remote Visual Inspection (RVI), utilizes a flexible or rigid optical device that permits the examination of areas otherwise inaccessible. This technique allows inspectors to observe and assess confined or obstructed regions with precision.</div>
                        </li>
                    </ol>
                </div>
                <div class="grid-item item4">
                    <img src="{{ url('build/img/service_img/advance_NDT_desc2.jpeg') }}" alt="Service Background Image">
                </div>
            </div>
        </div>
    </section>


    <section class="title-content" style="text-align: left; margin-top:0px;">
        <h2 style="font-size: 2.3rem;">Serving Global Industries with Expertise and Innovation</h2>
    </section>
    <section class="title-content" style="text-align: left;">
        <p style="padding-bottom:20px;"><span class="highlight">Vision One Sdn. Bhd.</span> is renowned for its expertise in crafting and producing the following offerings. Our esteemed clientele encompasses EPCC contractors, offshore structure fabricators, process package specialists, and more, spanning the oil and gas, petrochemical, and diverse industries within both domestic and international markets.</p>
    </section>

    <section class="service-list">

        <div class="service-grid-init">
            <div class="service-grid-item right-triangle" style="border-top-left-radius: 15px;">
                <img src="{{ url('build/img/service_img/process_pressure_vessels.jpeg') }}" alt="Service Background Image">
                <div class="right-triangle">
                </div>
            </div>
            <div class="service-grid-item service-grid-item-odd hover-effect" onclick="scrollToTop(this); toggleActive(this); toggleContent2('Process-Pressure-Vessels')">
                <h1>Process Pressure Vessels</h1>

                <p class="view-list">View More</p>

            </div>
            <div class="service-grid-item right-triangle"><img src="{{ url('build/img/service_img/heat_transfer_equipment.jpg') }}" alt="Service Background Image"></div>
            <div class="service-grid-item service-grid-item-odd hover-effect" style="border-top-right-radius: 15px;" onclick="scrollToTop(this); toggleActive(this); toggleContent2('Heat-Transfer-Equipment')">
                <h1>Heat Transfer Equipment</h1>

                <p class="view-list">View More</p>

            </div>

        </div>
        <section id="Process-Pressure-Vessels" class="dropdown-service-list">
            <div class="content-list-show">
                <div id="Process-Pressure-Vessels" class="grid-container">
                    <div class="grid-item itemfull">
                        <ol class="ol-cards alternate" style="margin-left: 0;">
                            <li style="--ol-cards-color-accent:#06768D">
                                <div class="step"><i class="fas fa-building"></i></div>
                                <div class="title">Expertise</div>
                                <div class="content">• Columns and Towers<br>• Drums<br>• Mixing Vessels</div>
                            </li>

                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section id="Heat-Transfer-Equipment" class="dropdown-service-list">
            <div class="content-list-show">
                <div class="grid-container">
                    <div class="grid-item itemfull">
                        <ol class="ol-cards alternate" style="margin-left: 0;">
                            <li style="--ol-cards-color-accent:#06768D">
                                <div class="step"><i class="fas fa-fan"></i></div>
                                <div class="title">Expertise</div>
                                <div class="content">• Air Cooler<br>• Heat Exchanger</div>
                            </li>

                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <div class="service-grid-init">
            <div class="service-grid-item service-grid-item-even" onclick="scrollToTop(this); toggleActive(this); toggleContent2('Storage-Facilities')">
                <h1>Storage Facilities</h1>
                <!-- <h6>description</h6> -->
                <p class="view-list">View More</p>
            </div>
            <div class="service-grid-item left-triangle"><img src="{{ url('build/img/service_img/inspection_storage_card.jpg') }}" alt="Service Background Image"></div>
            <div class="service-grid-item service-grid-item-even hover-effect" onclick="scrollToTop(this); toggleActive(this); toggleContent2('Mechanical')">
                <h1>Mechanical</h1>
                <!-- <h6>description</h6> -->
                <p class="view-list">View More</p>
            </div>
            <div class="service-grid-item left-triangle"><img src="{{ url('build/img/service_img/mechanical.jpeg') }}" alt="Service Background Image"></div>
        </div>

        <section id="Storage-Facilities" class="dropdown-service-list">
            <div class="content-list-show">
                <div class="grid-container">
                    <div class="grid-item itemfull">
                        <ol class="ol-cards alternate" style="margin-left: 0;">
                            <li style="--ol-cards-color-accent:#06768D">
                                <div class="step"><i class="fas fa-warehouse"></i></div>
                                <div class="title">Expertise</div>
                                <div class="content">• Tank<br>• Silo</div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section id="Mechanical" class="dropdown-service-list">
            <div class="content-list-show">
                <div class="grid-container">
                    <div class="grid-item itemfull">
                        <ol class="ol-cards alternate" style="margin-left: 0;">
                            <li style="--ol-cards-color-accent:#06768D">
                                <div class="step"><i class="fas fa-tools"></i></div>
                                <div class="title">Expertise</div>
                                <div class="content">• Piping<br>• Rotary Equipment<br>• Ducting Works <br>• Mechanical Equipment</div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <div class="service-grid-init">
            <div class="service-grid-item right-triangle" style="border-bottom-left-radius: 15px;"><img src="{{ url('build/img/service_img/subsea_and_offshore_fabrication.jpeg') }}" alt="Service Background Image"></div>
            <div class="service-grid-item service-grid-item-odd hover-effect" onclick="scrollToTop(this); toggleActive(this); toggleContent2('Subsea-and-Offshore-Fabrication')">
                <h1>Subsea and Offshore Fabrication</h1>
                <p class="view-list">View More</p>
            </div>
            <div class="service-grid-item right-triangle"><img src="{{ url('build/img/service_img/pipeline_and_storage_solutions.jpeg') }}" alt="Service Background Image"></div>
            <div class="service-grid-item service-grid-item-odd hover-effect" style="border-bottom-right-radius: 15px;" onclick="scrollToTop(this); toggleActive(this); toggleContent2('Pipeline-and-Storage-Solutions')">
                <h1>Pipeline and Storage Solutions</h1>
                <p class="view-list">View More</p>
            </div>
        </div>

        <section id="Subsea-and-Offshore-Fabrication" class="dropdown-service-list">
            <div class="content-list-show">
                <div class="grid-container">
                    <div class="grid-item itemfull">
                        <ol class="ol-cards alternate" style="margin-left: 0;">
                            <li style="--ol-cards-color-accent:#06768D">
                                <div class="step"><i class="fas fa-hard-hat"></i></div>
                                <div class="title">Expertise</div>
                                <div class="content">• Spreader Bar Design and Fabrication for Subsea Lifting<br>• Structural Skid for Subsea Anodes Frame<br>• Concrete Mattress for Subsea Pipeline Protection <br>• Pipeline In-Situ Repair Fabrication</div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section id="Pipeline-and-Storage-Solutions" class="dropdown-service-list">
            <div class="content-list-show">
                <div class="grid-container">
                    <div class="grid-item itemfull">
                        <ol class="ol-cards alternate" style="margin-left: 0;">
                            <li style="--ol-cards-color-accent:#06768D">
                                <div class="step"><i class="fas fa-ruler"></i></div>
                                <div class="title">Expertise</div>
                                <div class="content">• Process Skid Packages and Modules<br>• Pipeline Loop Testing<br>• Pipeline In-Situ Coating and Field Joint Coating Repair <br>• Pressurize Export Skid for Storage Tanks Discharge System</div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


    </section>
    <section class="service-list">

    </section>

    <section class="service-list">

    </section>
</section>

<script>
    function scrollCards(direction) {
        const wrapper = document.querySelector('.cards-wrapper');
        const scrollAmount = 320; // Adjust this value as needed

        if (direction === 'left') {
            wrapper.scrollBy({
                left: -scrollAmount,
                behavior: 'smooth'
            });
        } else if (direction === 'right') {
            wrapper.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        }
    }

    function updateButtonVisibility() {
        const container = document.querySelector('.card-container');
        const wrapper = document.querySelector('.cards-wrapper');
        const hasOverflow = wrapper.scrollWidth > wrapper.clientWidth;

        if (hasOverflow) {
            container.classList.add('show-buttons');
        } else {
            container.classList.remove('show-buttons');
        }
    }

    // Initial check and set up event listeners
    updateButtonVisibility();
    window.addEventListener('resize', updateButtonVisibility);


    document.querySelectorAll('.icon-button').forEach(button => {
        button.addEventListener('mouseenter', () => {
            const img = button.querySelector('img');
            const hoverIcon = button.getAttribute('data-hover-icon');
            img.setAttribute('data-original-src', img.src);
            img.src = hoverIcon;
        });

        button.addEventListener('mouseleave', () => {
            const img = button.querySelector('img');
            const originalIcon = img.getAttribute('data-original-src');
            img.src = originalIcon;
        });
    });
    // document.addEventListener('DOMContentLoaded', (event) => {
    //     const viewListButtons = document.querySelectorAll('.view-list');
    //     const contentListPopups = document.querySelectorAll('.content-list-popup');
    //     const overlay = document.createElement('div');
    //     overlay.className = 'overlay';
    //     document.body.appendChild(overlay);

    //     viewListButtons.forEach((button, index) => {
    //         button.addEventListener('click', () => {
    //             const contentListPopup = contentListPopups[index];
    //             contentListPopup.classList.toggle('active');
    //             overlay.classList.toggle('active');
    //         });
    //     });

    //     overlay.addEventListener('click', () => {
    //         contentListPopups.forEach(popup => {
    //             popup.classList.remove('active');
    //         });
    //         overlay.classList.remove('active');
    //     });
    // });



    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.toggle-btn');

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                const contentList = this.parentElement.nextElementSibling;
                if (contentList.style.display === 'none' || contentList.style.display === '') {
                    contentList.style.display = 'block'; // Show content
                    this.classList.add('open');
                } else {
                    contentList.style.display = 'none'; // Hide content
                    this.classList.remove('open');
                }
            });
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        const dimOverlay = document.querySelector('.dim-overlay');
        const conventionalListPopup = document.getElementById('conventional-list-popup');
        const advancedListPopup = document.getElementById('advanced-list-popup');

        // Function to show a popup
        function showPopup(popupElement) {
            hideAllPopups(); // Hide all popups first
            popupElement.style.display = 'block';
            dimOverlay.style.display = 'block';
        }

        // Function to hide all popups
        function hideAllPopups() {
            conventionalListPopup.style.display = 'none';
            advancedListPopup.style.display = 'none';
            dimOverlay.style.display = 'none';
        }

        // Event listener for clicks outside the popup
        document.addEventListener('click', (event) => {
            if (!conventionalListPopup.contains(event.target) &&
                !advancedListPopup.contains(event.target) &&
                !event.target.closest('.ndt-card')) {
                hideAllPopups();
            }
        });

        // Attach event listeners to the cards
        document.querySelector('.ndt-card[data-target="conventional-list"]').addEventListener('click', () => {
            showPopup(conventionalListPopup);
        });

        document.querySelector('.ndt-card[data-target="advanced-list"]').addEventListener('click', () => {
            showPopup(advancedListPopup);
        });
    });





    // let currentVisibleSection1 = null;

    // function toggleContent(listId) {
    //     const conventionalList = document.getElementById('conventional-list-popup');
    //     const advancedList = document.getElementById('advanced-list-popup');

    //     let sectionToShow;
    //     if (listId === 'conventional-list') {
    //         sectionToShow = conventionalList;
    //     } else if (listId === 'advanced-list') {
    //         sectionToShow = advancedList;
    //     }

    //     // Check if the clicked section is already active
    //     if (currentVisibleSection1 && currentVisibleSection1 === sectionToShow) {
    //         // Hide the currently visible section
    //         currentVisibleSection1.style.maxHeight = '0';
    //         currentVisibleSection1.classList.remove('content-list-show');
    //         currentVisibleSection1.classList.remove('active');
    //         currentVisibleSection1 = null;
    //     } else {
    //         // Hide the currently visible section if there is one
    //         if (currentVisibleSection1) {
    //             currentVisibleSection1.style.maxHeight = '0';
    //             currentVisibleSection1.classList.remove('content-list-show');
    //             currentVisibleSection1.classList.remove('active');
    //         }

    //         // Show the new section
    //         sectionToShow.classList.add('content-list-show');
    //         sectionToShow.classList.add('active');
    //         sectionToShow.style.maxHeight = sectionToShow.scrollHeight + 'px'; // Fit the content height
    //         currentVisibleSection1 = sectionToShow;
    //     }
    // }

    let currentVisibleSection = null;

    function toggleContent2(sectionId) {
        const section = document.getElementById(sectionId);

        if (currentVisibleSection && currentVisibleSection !== section) {
            // Hide the currently visible section
            currentVisibleSection.style.maxHeight = '0';
            currentVisibleSection.classList.remove('active'); // Remove the active class
            // Ensure the transition completes before setting the new section
            setTimeout(() => {
                currentVisibleSection = section; // No section is currently visible
            }, 500); // Match this to your transition duration
        }

        if (section.classList.contains('active')) {
            // If the clicked section is already active, hide it
            section.style.maxHeight = '0';
            section.classList.remove('active');
            currentVisibleSection = null; // No section is currently visible
        } else {
            // Show the clicked section
            section.classList.add('active');
            section.style.maxHeight = section.scrollHeight + 'px'; // Fit the content height
            currentVisibleSection = section; // Update the currently visible section
        }
    }

    function scrollToTop(element) {
        element.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }

    function scrollToTopID(elementId) {
        const element = document.getElementById(elementId);
        if (element) {
            element.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    }



    function toggleActive(element) {
        // Check if the clicked item is already active
        if (element.classList.contains('active')) {
            // Remove 'active' class from the clicked item if it is already active
            element.classList.remove('active');
        } else {
            // Remove 'active' class from all items
            const items = document.querySelectorAll('.service-grid-item');
            items.forEach(item => item.classList.remove('active'));

            // Add 'active' class to the clicked item
            element.classList.add('active');
        }
    }

    function toggleActiveTop(element) {
        // Check if the clicked item is already active
        if (element.classList.contains('active')) {
            // Remove 'active' class from the clicked item if it is already active
            element.classList.remove('active');
        } else {
            // Remove 'active' class from all items
            const items = document.querySelectorAll('.ndt-card');
            items.forEach(item => item.classList.remove('active'));

            // Add 'active' class to the clicked item
            element.classList.add('active');
        }
    }
</script>

@endsection