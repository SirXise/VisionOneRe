@extends('_layouts.main')

@section('title', 'Projects')

@section('css')
<link href="{{ asset('build/css/projectstyle.css') }}" rel="stylesheet">
@endsection

@section('body')
<!-- Page Header Start -->
<div class="hero">
    <img src="{{ url('build/img/project_img/project_hero.jpeg') }}" alt="Project Background Image" class="back-image">
    <div class="overlay-gradient"></div>
    <div class="text-overlay2">
        <h2>Legacy of <br><span class="highlight">Successful Projects</span></h2>
        <p>Explore our diverse project portfolio showcasing our commitment to innovation and excellence. Discover how our solutions drive progress and set new industry benchmarks.</p>
    </div>
    <!-- <div class="text-overlay">
        <h2>Projects</h2>
    </div> -->
</div>
<!-- Page Header End -->
<section class="white-section">
    <!-- Main Content with Sidebar Start -->
    <div class="w-100" style="display: flex; gap: 20px; background-color: white;">
        <!-- Sidebar Start -->
        <div class="sidebar-wrapper">
            <ul class="sidebar-nav sticky">
                <li class="active py-2" id="inspect-link">
                    <a href="#">
                        <div class="icon"><i class="fa fa-search"></i></div>
                        <div class="text">Inspection</div>
                    </a>
                </li>
                <li class="py-2" id="maintenance-link">
                    <a href="#">
                        <div class="icon"><i class="fa fa-wrench"></i></div>
                        <div class="text">Maintenance</div>
                    </a>
                </li>
                <li class="py-2" id="repair-link">
                    <a href="#">
                        <div class="icon"><i class="fa fa-tools"></i></div>
                        <div class="text">Repair</div>
                    </a>
                </li>
                <li class="py-2" id="special-link">
                    <a href="#">
                        <div class="icon"><i class="fa fa-star"></i></div>
                        <div class="text">Special Projects</div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar End -->

        <!-- Main Content Start -->
        <div class="main-content" style="flex: 3;">
            <div class="text-center py-5">
                <div class="title-offset">
                    <span class="background-text">Integrity Inspection</span>
                    <h2 class="foreground-text">Integrity Inspection</h2>
                </div>

            </div>
            <div id="app">
                <div>
                    <div class="wrapper" id="timeline-wrapper">
                        <!-- Timeline items will be appended here -->
                    </div>
                    <div class="text-center align-items-center pb-5">
                        <button id="view-more" class="btn-lg btn-primary mt-4">View More</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content End -->
    </div>
</section>
<!-- Main Content with Sidebar End -->
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var sidebarLinks = document.querySelectorAll('.sidebar-nav li');
        var titleElement = document.querySelector('.foreground-text');
        var backElement = document.querySelector('.background-text');

        sidebarLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                sidebarLinks.forEach(function(item) {
                    item.classList.remove('active');
                });
                this.classList.add('active');

                if (this.id === 'maintenance-link') {
                    titleElement.textContent = 'Maintenance';
                    backElement.textContent = 'Maintenance';
                } else if (this.id === 'inspect-link') {
                    titleElement.textContent = 'Integrity Inspection';
                    backElement.textContent = 'Integrity Inspection';
                } else if (this.id === 'repair-link') {
                    titleElement.textContent = 'Repair';
                    backElement.textContent = 'Repair';
                } else if (this.id === 'special-link') {
                    titleElement.textContent = 'Special Projects';
                    backElement.textContent = 'Special Projects';
                }
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var sidebarLinks = document.querySelectorAll('.sidebar-nav li');
        var titleElement = document.querySelector('.foreground-text');
        var backElement = document.querySelector('.background-text');
        const timelineWrapper = document.getElementById('timeline-wrapper');
        const viewMoreButton = document.getElementById('view-more');
        const maintenanceSidebarItem = document.querySelector('#maintenance-link');
        const inspectSidebarItem = document.querySelector('#inspect-link');
        const repairSidebarItem = document.querySelector('#repair-link');
        const specialSidebarItem = document.querySelector('#special-link');

        let currentPage = 1;
        if (window.matchMedia('(min-width: 1440px)').matches) {
            itemsPerPage = 9; // lg screen
        } else if (window.matchMedia('(min-width: 768px)').matches) {
            itemsPerPage = 8; // md screen
        } else {
            itemsPerPage = 9; // sm screen
        }
        let currentData = [];
        let rowCount = 0;
        let elementsPerSubArray = getElementsPerSubArray(); // Initialize with the correct value

        const dataInspect = listToMatrix([{
                id: 1,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2024",
                desc: "Manpower Supply NDT Rope Access UT to Perform UT With Abseiling at PM3 South"
            },
            {
                id: 2,
                image: "{{ url('build/img/project_img/VOClient/winner.png') }}",
                name: "Winner Inspection Sdn. Bhd.",
                year: "2024",
                desc: "Rental of Eddyfi  Lyft PEC Equipment & Probe"
            },
            {
                id: 3,
                image: "{{ url('build/img/project_img/VOClient/AriseGlobal.jpg') }}",
                name: "Arise Star Sdn. Bhd.",
                year: "2024",
                desc: "Rental of ISONIC Encoder"
            },
            {
                id: 4,
                image: "{{ url('build/img/project_img/VOClient/visca-logo.png') }}",
                name: "Visca International Sdn. Bhd.",
                year: "2023",
                desc: "LRUT Inspection & IRATA Service at Kuching, Sarawak."
            },
            {
                id: 5,
                image: "{{ url('build/img/project_img/VOClient/vouas.png') }}",
                name: "Vision One UAS Sdn. Bhd.",
                year: "2023",
                desc: "Manpower Supply"
            },
            {
                id: 6,
                image: "{{ url('build/img/project_img/VOClient/boster.png') }}",
                name: "Boster Engineering Sdn. Bhd.",
                year: "2023",
                desc: "Rental of LRUT 8\" Collar"
            },
            {
                id: 7,
                image: "{{ url('build/img/project_img/VOClient/winner.png') }}",
                name: "Winner Inspection Sdn. Bhd.",
                year: "2023",
                desc: "Rental of Eddyfi  Lyft PEC Equipment"
            },
            {
                id: 8,
                image: "{{ url('build/img/project_img/VOClient/FPSO-Logo.png') }}",
                name: "FPSO Ventures Sdn. Bhd.",
                year: "2023",
                desc: "Provision of Manpower, Materials, Equipment, Tools and consumable for Cleaning, Inspection and Repair of Topsides Process Pressure Vessel (PPV) and Heat Exchanger (HEX) onboard FPSO Bunga Kertas"
            },
            {
                id: 9,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2023",
                desc: "Conventional Eddy Current Testing Method on PCSB Platform"
            },
            {
                id: 10,
                image: "{{ url('build/img/project_img/VOClient/rosen.png') }}",
                name: "H.Rosen Engineering (M) Sdn. Bhd.",
                year: "2023",
                desc: "Rental of Long Range Ultrasonic Testing (LRUT) Equipment c/w Assistant Operator"
            },
            {
                id: 11,
                image: "{{ url('build/img/project_img/VOClient/profieins.png') }}",
                name: "Proficient Inspection Sdn. Bhd.",
                year: "2022",
                desc: "Rental of Eddyfi  Lyft PEC Equipment"
            },
            {
                id: 12,
                image: "{{ url('build/img/project_img/VOClient/infiins.png') }}",
                name: "Infinite Inspection (M) Sdn. Bhd.",
                year: "2022",
                desc: "Rental of Omniscan MX2"
            },
            {
                id: 13,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "PT MPL Jasa Lestari",
                year: "2022",
                desc: "Developing Non-Destructive Testing Procedure For Testing & Commissioning"
            },
            {
                id: 14,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2022",
                desc: "To Perform PAUT Inspection for Vessel V-130 in PM9 Tiong A Platform"
            },
            {
                id: 15,
                image: "{{ url('build/img/project_img/VOClient/petra.png') }}",
                name: "Petra Resources Sdn. Bhd.",
                year: "2022",
                desc: "To Perform Ultrasonic Testing Gauging (UTTG) Services for Newly Installed Piping (1st Mob) - Quaratine Claim"
            },
            {
                id: 16,
                image: "{{ url('build/img/project_img/VOClient/ewf.png') }}",
                name: "Energy Workforce Group",
                year: "2022",
                desc: "PEC Inspection  & IRATA Service for Spherical Tank at TITAN Pasir Gudang"
            },
            {
                id: 17,
                image: "{{ url('build/img/project_img/VOClient/boster.png') }}",
                name: "Boster Engineering Sdn. Bhd.",
                year: "2022",
                desc: "Long-Range UT with Non-IRATA Technicians for Onshore Jobs at Kertih Terminal"
            },
            {
                id: 18,
                image: "{{ url('build/img/project_img/VOClient/AriseGlobal.jpg') }}",
                name: "Arise Star Sdn. Bhd.",
                year: "2021",
                desc: "* Rental of LRUT Equipment \n* Rental of Omniscan MX2 \n* Rental of LRUT Equipment"
            },
            {
                id: 19,
                image: "{{ url('build/img/project_img/VOClient/gtisb.png') }}",
                name: "Group Technical Inspection (GTI) Sdn. Bhd.",
                year: "2021",
                desc: "Provision of Pulsed Eddy Current Testing (PECT) for Sphere Tank Lower Column Fie Proofing at Pengerang Terminal Two"
            },
            {
                id: 20,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2021",
                desc: "Eddy Current Array (ECA) for Jacket Structure (near base plate) to Identify and size the propogation of suspected crack"
            },
            {
                id: 21,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Talent Management International Company Limited",
                year: "2021",
                desc: "Sulawesi Selatan (Sulsel) Barru-2 - NDT Procedure"
            },
            {
                id: 22,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2021",
                desc: "* Pulsed Eddy Current Testing (PECT) for Enquest Riser Inspection at Seligi D \n* Long Range Ultrasonic Testing (LRUT) for Enquest Riser Inspection at Seligi D \n* Eddy Current Weldment Scanning at Tangga Barat Platform"
            },
            {
                id: 23,
                image: "{{ url('build/img/project_img/VOClient/reliacraft.png') }}",
                name: "Reliacraft Engineering Sdn. Bhd.",
                year: "2020",
                desc: "Provision of Pulsed Eddy Current Testing (PECT) For Pressure Vessel Inspection at : \n* Cendor\n* West Desaru - MOPU"
            },
            {
                id: 24,
                image: "{{ url('build/img/project_img/VOClient/profieins.png') }}",
                name: "Proficient Inspection Services Co., Ltd.",
                year: "2020",
                desc: "Rental of Eddyfi  Lyft PEC"
            },
            {
                id: 25,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2020",
                desc: "Neutron Backscatter for HESS"
            },
            {
                id: 26,
                image: "{{ url('build/img/project_img/VOClient/nde.png') }}",
                name: "NDE Consultancy Services Sdn. Bhd.",
                year: "2020",
                desc: "Rental of Isonic 2006 "
            },
            {
                id: 27,
                image: "{{ url('build/img/project_img/VOClient/petra.png') }}",
                name: "Petra Resources Sdn. Bhd.",
                year: "2020",
                desc: "To Perform Ultrasonic Testing Gauging (UTTG) Services for Newly Installed Piping "
            },
            {
                id: 28,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2019",
                desc: "* PEC Lyft Inspection \n* Piping Insulated and Non Insulated Inspection Campaign\n* Provision of Manpower and Equipment for Acoustic Emission Testing (AET)"
            },
            {
                id: 29,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2019",
                desc: "* Visual Inspection and NDT ACFM On Helideck Structure Via Rope Access\n* Piping (PAUT / UT) - Onshore"
            },
            {
                id: 30,
                image: "{{ url('build/img/project_img/VOClient/insptechsol.png') }}",
                name: "Inspection Technical Solution Sdn. Bhd.",
                year: "2019",
                desc: "NDT On Furnace Front Wall Riser "
            },
            {
                id: 31,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2019",
                desc: "WHP Topside Piping Inspection Hydrocarbon Insulated & Non-Insulated Pipin - Visual Inspection and NDT PEC and UTTM On Insulated Piping Via Rope Access"
            },
            {
                id: 32,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2019",
                desc: "* COT 4C NDT and Inspection - ECA Testing Inspection On Cargo Oil Tank Via Rope Access\n* AET On Valves In Piping Room - Acoustic Emission Testing (AET) On Valve In Pump Room"
            },
            {
                id: 33,
                image: "{{ url('build/img/project_img/VOClient/riasolu.png') }}",
                name: "Ria Solutions (M) Sdn. Bhd.",
                year: "2019",
                desc: "Pulsed Eddy Current (PEC) Inspection On Riser - DTU-SPAR KIKEH"
            },
            {
                id: 34,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2019",
                desc: "Tube Inspection On Boiler Evaporator Bank - Vacuum Leak Test, RFET and Video Scope At Port Side Boiler & Starboard Boiler Evaporator Bank"
            },
            {
                id: 35,
                image: "{{ url('build/img/project_img/VOClient/amaniaga.png') }}",
                name: "Amaniaga Resources (M) Sdn. Bhd.",
                year: "2019",
                desc: "Partial Retubing of Auxiliary Condenser 2018/010795 WSR - Retube Auxiliary Condenser"
            },
            {
                id: 36,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2019",
                desc: "* COT 4C NDT and Inspection - UTTM Inspection In Cargo Oil Tank 4 Center\n* Forward Water Ballast  and Inspection - ACFM Testing Inspection On Forward Water Ballast Via Rope Access"
            },
            {
                id: 37,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2019",
                desc: "* Crane Structure and Inspection - ECA & UTTM Inspection On FPSO Via Rope Access\n* ECT On Pad Eye Boiler Via Rope Access"
            },
            {
                id: 38,
                image: "{{ url('build/img/project_img/VOClient/profieins.png') }}",
                name: "Proficient Inspection Services Co., Ltd.",
                year: "2019",
                desc: "Rental of Eddyfi  Lyft PEC"
            },
            {
                id: 39,
                image: "{{ url('build/img/project_img/VOClient/nadimaarine.png') }}",
                name: "Nadi Marine Sdn. Bhd.",
                year: "2019",
                desc: "Manpower Supply for Subsea ACFM Operator / Interpreter"
            },
            {
                id: 40,
                image: "{{ url('build/img/project_img/VOClient/riasolu.png') }}",
                name: "Ria Solutions (M) Sdn. Bhd.",
                year: "2019",
                desc: "Pulsed Eddy Current (PEC) Inspection On Riser - Bintulu Offshore"
            },
            {
                id: 41,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2019",
                desc: "ECT On Lifting Pad Eye at Wellhead Platform & Engine Room"
            },
            {
                id: 42,
                image: "{{ url('build/img/project_img/VOClient/kmz-energy.png') }}",
                name: "KMZ Energy",
                year: "2019",
                desc: "Pulsed Eddy Current (PEC) Mock Up - Terengganu Crude Oil Terminal"
            },
            {
                id: 43,
                image: "{{ url('build/img/project_img/VOClient/Applus_Logo.png') }}",
                name: "Applus Malaysia Sdn. Bhd.",
                year: "2019",
                desc: "Rental of Isonic 2006"
            },
            {
                id: 44,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2019",
                desc: "* COT 4C NDT and Inspection - PAUT and ACFM Inspection In Cargo Oil Tank 4 Center\n* PEC Mockup for Tank Top & Sea Chest Corrosion Survey"
            },
            {
                id: 45,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2019",
                desc: "* Sepat ECA Inspection Campaign\n* Eddy Current Array At Crane Boom (Tiong Platform)"
            },
            {
                id: 46,
                image: "{{ url('build/img/project_img/VOClient/hijraoi.jpg') }}",
                name: "Hijra Oil & Gas Sdn. Bhd.",
                year: "2019",
                desc: "Phonon PEC Inspection at Kerteh"
            },
            {
                id: 47,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2018",
                desc: "Unmannded Aerial Vehicle Inspection Campaign"
            },
            {
                id: 48,
                image: "{{ url('build/img/project_img/VOClient/almhiro.png') }}",
                name: "Alam Hidro (M) Sdn. Bhd.",
                year: "2018",
                desc: "LYFT UNderwater (U/W) CUI Inspection for the Subsea Pipelines IMR Campaigns"
            },
            {
                id: 49,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Velosi Specialised Inspection Sdn. Bhd.",
                year: "2018",
                desc: "Rental of NDT Equipment - Isonic 2006"
            },
            {
                id: 50,
                image: "{{ url('build/img/project_img/VOClient/hha.png') }}",
                name: "HHA Associates Sdn. Bhd.",
                year: "2018",
                desc: "Provision of Manpower Supply to Perform Painting Repair Work atFPSO Hull & Lundin's Logo Replacement Lundin FPSO Bertam"
            },
            {
                id: 51,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Velosi Specialised Inspection Sdn. Bhd.",
                year: "2018",
                desc: "Provision of Manpower Supply to Perform PAUT at Bintulu"
            },
            {
                id: 52,
                image: "{{ url('build/img/project_img/VOClient/bumitech-global.png') }}",
                name: "Bumitech Global Energy Sdn. Bhd.",
                year: "2018",
                desc: "Provision of Corrosion Under Insulation (CUI) Inspection Campaign for a Long Term Master Service Agreement with Petronas OPU for 2 + 1 years within PMO Onshore"
            },
            {
                id: 53,
                image: "{{ url('build/img/project_img/VOClient/bumitech-global.png') }}",
                name: "Bumitech Global Energy Sdn. Bhd.",
                year: "2018",
                desc: "Rental of Long Range Ultrasonic Testing ( LRUT) Equipment"
            },
            {
                id: 54,
                image: "{{ url('build/img/project_img/VOClient/Petronas-Dagangan-Berhad.png') }}",
                name: "Petronas Dagangan Berhad",
                year: "2018",
                desc: "Inspection Tank 207 at KLIA"
            },
            {
                id: 55,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2018",
                desc: "* Perform NDT (MPI), Power Tooling and Touchup Painting at FPSO Bertam PM307\n* Bertam Pressure Vessel and Heat Exchanger Inspection and NDT Campaign\n* Rig Move in SD Flare Tip"
            },
            {
                id: 56,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2018",
                desc: "* Provision of NDT for Infill Activities (Onshore)\n* To Prepare / Compile UT reports and prepare drawing ,mark-up for Subsea Campaign"
            },
            {
                id: 57,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2018",
                desc: "* Provision of Manpower Supply  for A17 flowline installation plan\n* Provision of Manpower Supply for A16 flowline installation plan"
            },
            {
                id: 58,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2018",
                desc: "Provision of Manpower Supply for Inspection, Stock Check and Installation at HHA Yard Kemaman"
            },
            {
                id: 59,
                image: "{{ url('build/img/project_img/VOClient/steadfast.jpg') }}",
                name: "Steadfast Inspection Sdn. Bhd.",
                year: "2018",
                desc: "Provision of Manpower and Equipment for PECT"
            },
            {
                id: 60,
                image: "{{ url('build/img/project_img/VOClient/petra.png') }}",
                name: "Petra Resources Sdn. Bhd.",
                year: "2018",
                desc: "Provision of Ground Investigation and Geotechnical Engineering Services for Sabah Oil & Gas Terminal Project"
            },
            {
                id: 61,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2018",
                desc: "* Provision of Advanced NDT Inspection Campaign for Vacuum Test for REBOILER Tubes at EnQuest Seligi-A"
            },
            {
                id: 62,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2018",
                desc: "* Perform ECA on Pad Eye at Off Loading Station\n* Flare Tower/Tip Inspection & Spreader Bar Retrieval During Shutdown of Bertam FPSO"
            },
            {
                id: 63,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2018",
                desc: "* Provision of Manpower and Equipment for PECT & PAUT Inspection for NII Campaign\n* PEC Inspection on PV (V-125) Via Abseiling"
            },
            {
                id: 64,
                image: "{{ url('build/img/project_img/VOClient/magnamitre.png') }}",
                name: "Magna-Mitre Sdn. Bhd.",
                year: "2018",
                desc: "Provision of Integrity Assessment, Inspection and Disposal Schedule waste of Continuously Oil Contaminated (COC), Accidently Oil Contaminated (AOC), System in Petronas LNG Complex"
            },
            {
                id: 65,
                image: "{{ url('build/img/project_img/VOClient/almhiro.png') }}",
                name: "Alam Hidro (M) Sdn. Bhd.",
                year: "2018",
                desc: "Provision of Manpower and Equipment for IPC Uwild  FPSO Bertam"
            },
            {
                id: 66,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Applus Velosi Malaysia Sdn. Bhd.",
                year: "2018",
                desc: "Provision of Manpower and Equipment for PECT Inspection at BORF"
            },
            {
                id: 67,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2018",
                desc: "Provision of Manpower and Equipment for PEC & PAUT Inspection for NII Campaign (2nd Cycle)"
            },
            {
                id: 68,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2018",
                desc: "Provision of Manpower and Equipment PECT Inspection for Shutdown (Piping and Vessel)"
            },
            {
                id: 69,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2018",
                desc: "Provision of Manpower and Equipment PECT Inspection for Carigali Hess"
            },
            {
                id: 70,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Eastbay Sdn. Bhd.",
                year: "2018",
                desc: "Provision of Manpower and Equipment for Advanced NDT Inspection - Pulsed Eddy Current (Eddyfi Lyft) - Murphy FPSO Kikeh"
            },
            {
                id: 71,
                image: "{{ url('build/img/project_img/VOClient/repsol.png') }}",
                name: "Repsol Oil & Gas Malaysia Ltd.",
                year: "2018",
                desc: "Provision of Lifting Plan (BRE & BOA)"
            },
            {
                id: 72,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2018",
                desc: "* Provision of External Inspection Pressure Vessel & HX Inspection\n* PV & HX Internal Inspection Campaign"
            },
            {
                id: 73,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2018",
                desc: "* ECA on Padeyed and Lifting Hoist\n* Provision of Tank Inspection\n* Provision of Manpower and Equipment PAUT & UT at FPSO Bertam"
            },
            {
                id: 74,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "CUI Solutions Sdn. Bhd.",
                year: "2017",
                desc: "Provision of Manpower to Perform Long Range Ultrasonic Testing ( LRUT) at Chevron La Union (Batangas Terminal)"
            },
            {
                id: 75,
                image: "{{ url('build/img/project_img/VOClient/rosen.png') }}",
                name: "H.Rosen Engineering (M) Sdn. Bhd.",
                year: "2017",
                desc: "NDT Services for Structural Inspection at Bertam FPSO"
            },
            {
                id: 76,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2017",
                desc: "To Perform Baseline Inspection on Structure at Seligi Enquest"
            },
            {
                id: 77,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Lloyd's Register Technical Services Sdn. Bhd.",
                year: "2017",
                desc: "Inspection, Examination & Testing for 25 Line Pipes of EX-Stock NPS 14in API 5L X65"
            },
            {
                id: 78,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "CUI Solutions Sdn. Bhd.",
                year: "2017",
                desc: "Advanced NDT Services for Piping CUI Inspections at Lundin/EPOMS Bertam FPSO & WHP"
            },
            {
                id: 79,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2017",
                desc: "Provision of Manpower & Equipment to Perform PECT at Murphy Oil Co. Ltd. Facilities"
            },
            {
                id: 80,
                image: "{{ url('build/img/project_img/VOClient/XPERT-Engineering-Solution.png') }}",
                name: "Xpert Engineering Solution Sdn. Bhd.",
                year: "2017",
                desc: "To Perform Pulsed Eddy Current (PEC) on Selected Vessel (FELDA Vegetable Oil)"
            },
            {
                id: 81,
                image: "{{ url('build/img/project_img/VOClient/ndtinstr.png') }}",
                name: "NDT Instruments Sdn. Bhd.",
                year: "2017",
                desc: "Video Production of underwater LYFT Demo"
            },
            {
                id: 82,
                image: "{{ url('build/img/project_img/VOClient/TESTEX.jpg') }}",
                name: "TestEx (M) Sdn. Bhd.",
                year: "2017",
                desc: "To Perform Pulsed Eddy Current (PEC) at Petronas Chemicals Ethlyene"
            },
            {
                id: 83,
                image: "{{ url('build/img/project_img/VOClient/norimax.png') }}",
                name: "Norimax Sdn. Bhd.",
                year: "2017",
                desc: "Skided Anode Frame, Jacket-Clamp & Lifting-Gears"
            },
            {
                id: 84,
                image: "{{ url('build/img/project_img/VOClient/Petronas-Dagangan-Berhad.png') }}",
                name: "Petronas Dagangan Berhad",
                year: "2017",
                desc: "Provision of Manpower & Equipment to Perform UT at Petronas Dagangan Berhad"
            },
            {
                id: 85,
                image: "{{ url('build/img/project_img/VOClient/almhiro.png') }}",
                name: "Alam Hidro (M) Sdn. Bhd.",
                year: "2017",
                desc: "Repsol Diving Campaign 2017 PEC Equipment"
            },
            {
                id: 86,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2017",
                desc: "UAV Campaign at FPSO Bertam"
            },
            {
                id: 87,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Applus Velosi Malaysia Sdn. Bhd.",
                year: "2017",
                desc: "PAUT Inspection at FPSO Kikeh, Labuan for Murphy"
            },
            {
                id: 88,
                image: "{{ url('build/img/project_img/VOClient/magnamitre.png') }}",
                name: "Magna-Mitre Sdn. Bhd.",
                year: "2017",
                desc: "Provision of Integrity Assessment, Inspection and Disposal Schedule waste of Continuously Oil Contaminated (COC), Accidently Oil Contaminated (AOC), System in Petronas LNG Complex"
            },
            {
                id: 89,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2017",
                desc: "Provision of Supply, Installation and Commisioning Corrosion Coupon, Corrosion Probe, Chemical Injection Point and Sampling Point  for Bertam  ( FPSO & Wellhead Platform)"
            },
            {
                id: 90,
                image: "{{ url('build/img/project_img/VOClient/shamira.jpg') }}",
                name: "Shamira Sdn. Bhd.",
                year: "2017",
                desc: "IRATA Team for Flexible Hose Inspection WD and CP2"
            },
            {
                id: 91,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2017",
                desc: "To Supply \"Additional Scope\" (i.e. Corrosion Engineering and Site Stinging Job) for the Installation of Corrosion Coupon, Corrosion Probe, Chemical Injection Point and Sampling Point for Lundin BV Mal"
            },
            {
                id: 92,
                image: "{{ url('build/img/project_img/VOClient/hha.png') }}",
                name: "HHA Associates Sdn. Bhd.",
                year: "2017",
                desc: "Provision of Manpower supply to perform survey work at FPSO Hull & Lundin's Logo replacement Lundin FPSO Bertam"
            },
            {
                id: 93,
                image: "{{ url('build/img/project_img/VOClient/hha.png') }}",
                name: "HHA Associates Sdn. Bhd.",
                year: "2017",
                desc: "Rental of UT Thickness Measurement"
            },
            {
                id: 94,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2017",
                desc: "2017 Turnaround Campaign for BERTAM FPSO & WHP PM-307"
            },
            {
                id: 95,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Eastbay Frontier Sdn. Bhd.",
                year: "2017",
                desc: "Advanced NDT Inspection - Pulsed Eddy Current (Eddyfi Lyft) - Murphy FPSO Kikeh"
            },
            {
                id: 96,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Eastbay Frontier Sdn. Bhd.",
                year: "2017",
                desc: "Advanced NDT Inspection - Phased Array UT (PAUT)- Murphy FPSO Kikeh"
            },
            {
                "id": 97,
                "image": "{{ url('build/img/project_img/VOClient/magnamitre.png') }}",
                "name": "Magna-Mitre Sdn. Bhd.",
                "year": "2015 - 2017",
                "desc": "Provision of Integrity Assessment, Inspection and Disposal Schedule Waste of Continuously Oil Contaminated (COC), Accidentally Oil Contaminated (AOC) System in Petronas LNG Complex"
            },
            {
                id: 98,
                image: "{{ url('build/img/project_img/VOClient/sgs-malaysia.png') }}",
                name: "SGS Malaysia Sdn. Bhd.",
                year: "2015",
                desc: "Heating Coil Inspection NDT at Bertam FPSO"
            },
            {
                "id": 99,
                "image": "{{ url('build/img/project_img/VOClient/budimaninsp.jpg') }}",
                "name": "Budiman Inspection Sdn. Bhd.",
                "year": "2015",
                "desc": "LRUT Inspection for 12\" piping GAF System (TNB Manjung)"
            },
            {
                "id": 100,
                "image": "{{ url('build/img/project_img/VOClient/ime-1.png') }}",
                "name": "IME Sdn. Bhd.",
                "year": "2015",
                "desc": "Rope Access Team for PFPSO - West Desaru Mopu and Cendor Platform"
            },
            {
                "id": 101,
                "image": "{{ url('build/img/project_img/VOClient/Talisman[1].png') }}",
                "name": "Talisman Malaysia Limited",
                "year": "2015",
                "desc": "Spray Pig Loop Test"
            },
            {
                "id": 103,
                "image": "{{ url('build/img/project_img/VOClient/almhiro.png') }}",
                "name": "Alam Hidro (M) Sdn. Bhd.",
                "year": "2015",
                "desc": "BKA Pipeline Spool Repair on Board Crest Odessey-2"
            },
            {
                "id": 104,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "Velosi Specialised Inspection Sdn. Bhd.",
                "year": "2015",
                "desc": "Provision of Radiography Testing at South Angsi Platform"
            },
            {
                "id": 105,
                "image": "{{ url('build/img/project_img/VOClient/danamin.png') }}",
                "name": "Danamin (M) Sdn. Bhd.",
                "year": "2015",
                "desc": "Perform C-Scan Inspection at Petron Port Dickson"
            },
            {
                "id": 106,
                "image": "{{ url('build/img/project_img/VOClient/nadimaarine.png') }}",
                "name": "Nadi Marine Sdn. Bhd.",
                "year": "2015",
                "desc": "Perform MPI Inspection at Perisai Pacific 101"
            },
            {
                "id": 107,
                "image": "{{ url('build/img/project_img/VOClient/nde.png') }}",
                "name": "NDE Consultancy Services Sdn. Bhd.",
                "year": "2014",
                "desc": "Perform C-Scan at PGB Kerteh"
            },
            {
                "id": 108,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "Bumitech Inspection Sdn. Bhd.",
                "year": "2014",
                "desc": "Perform LRUT at PDB Sepangar Sabah"
            },
            {
                "id": 109,
                "image": "{{ url('build/img/project_img/VOClient/lottechemic.png') }}",
                "name": "Lotte Chemical Titan (M) Sdn. Bhd.",
                "year": "2014",
                "desc": "Boroscope Inspection"
            },
            {
                "id": 110,
                "image": "{{ url('build/img/project_img/VOClient/pioneereng.png') }}",
                "name": "Pioneer Engineering Sdn. Bhd.",
                "year": "2014",
                "desc": "Provision of Mechanical Integrity Assessment at PDB Bintulu Terminal"
            },
            {
                "id": 111,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "ROSEN Inspection Asia Pacific Sdn. Bhd.",
                "year": "2014",
                "desc": "Test Loop Assembly and Test Run Assistance"
            },
            {
                "id": 112,
                "image": "{{ url('build/img/project_img/VOClient/lottechemic.png') }}",
                "name": "Lotte Chemical Titan (M) Sdn. Bhd.",
                "year": "2014",
                "desc": "NDT Inspection Storage Tank"
            },
            {
                "id": 113,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "Innovative Oilfield Services",
                "year": "2014",
                "desc": "Perform Marine Growth Preventor removal via rope access"
            },
            {
                "id": 114,
                "image": "{{ url('build/img/project_img/VOClient/nadimaarine.png') }}",
                "name": "Nadi Marine Sdn. Bhd.",
                "year": "2014",
                "desc": "MPI Job at Tanjung Pelepas"
            },
            {
                "id": 115,
                "image": "{{ url('build/img/project_img/VOClient/Petronas-Dagangan-Berhad.png') }}",
                "name": "Petronas Dagangan Berhad",
                "year": "2014",
                "desc": "Price Agreement (PA) of Inspection Services for Product Tanks, Pressure Vessel and Piping at PDB Terminal (Eastern & Central)"
            },
            {
                "id": 116,
                "image": "{{ url('build/img/project_img/VOClient/Petronas-Dagangan-Berhad.png') }}",
                "name": "Petronas Dagangan Berhad",
                "year": "2014",
                "desc": "* NDT Services - KLIA Fuel Terminal\n* Pipeline Integrity Test And Inspection\n* Tank Integrity Inspection"
            },
            {
                "id": 119,
                "image": "{{ url('build/img/project_img/VOClient/Petronas-Dagangan-Berhad.png') }}",
                "name": "Petronas Dagangan Berhad",
                "year": "2014",
                "desc": "Tank Inspection - Langkawi Fuel Terminal"
            },
            {
                "id": 120,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "Velosi Specialised Inspection Sdn. Bhd.",
                "year": "2014",
                "desc": "Provision of Radiography Testing - PM3S - BRA"
            },
            {
                "id": 121,
                "image": "{{ url('build/img/project_img/VOClient/murphyoil.png') }}",
                "name": "Murphy Oil",
                "year": "2013",
                "desc": "Advance NDT. Provision for PAUT LRUT C-Scan Inspection for SEP-A GOP-A/B BORF and KIKEH"
            },
            {
                "id": 122,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "Talisman Malaysia Limited",
                "year": "2013",
                "desc": "NDT Services"
            },
            {
                "id": 123,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "Titan Petchem",
                "year": "2013",
                "desc": "Piping Inspection via Rope Access"
            },
            {
                "id": 124,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "Talisman - PESB",
                "year": "2013",
                "desc": "* Pressure Vessels Piping Inspection via Rope Access\n* Cooler Inspection"
            },
            {
                "id": 126,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "Petronas Polly Etheylene - PESB",
                "year": "2013",
                "desc": "Advance NDT"
            },
            {
                "id": 132,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "Murphy Oil Corp (Sarawak)",
                "year": "2011 - 2013",
                "desc": "Price Agreements NDT Services"
            },
            {
                "id": 133,
                "image": "{{ url('build/img/project_img/VOClient/petronagasberhad.png') }}",
                "name": "Petronas Gas Berhad",
                "year": "2011 - 2013",
                "desc": "LRUT Inspection and Coating Repair for PGU Metering Station"
            },
            {
                "id": 127,
                "image": "{{ url('build/img/project_img/VOClient/jowahaki.png') }}",
                "name": "Johawaki Sdn. Bhd.",
                "year": "2013",
                "desc": "Forensic Testing - NDT / Concrete Inspection at Hospital Besar Kuala Lumpur"
            },
            {
                "id": 128,
                "image": "{{ url('build/img/project_img/VOClient/gpile.jpg') }}",
                "name": "G-Pile",
                "year": "2013",
                "desc": "NDT Services"
            },
            {
                "id": 129,
                "image": "{{ url('build/img/project_img/VOClient/petronas-penapisan-melaka.jpg') }}",
                "name": "Petronas Penapisan Melaka",
                "year": "2012",
                "desc": "Tank Inspection via Rope Access"
            },
            {
                "id": 130,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "Huntsman Tioxide",
                "year": "2012",
                "desc": "LRUT - Piping Inspection"
            },
            {
                "id": 131,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "TWI",
                "year": "2012",
                "desc": "NDT Services - UUTM"
            },
            {
                "id": 134,
                "image": "{{ url('build/img/project_img/VOClient/pioneereng.png') }}",
                "name": "Pioneer Engineering Sdn. Bhd.",
                "year": "2011",
                "desc": "Phase Array Inspection for HX at Talisman South Angsi"
            },
            {
                "id": 135,
                "image": "{{ url('build/img/project_img/VOClient/NRS.png') }}",
                "name": "NRS Associates",
                "year": "2011",
                "desc": "Structure and Assessment Integrity at TNB Kg. Limau"
            },
            {
                "id": 136,
                "image": "{{ url('build/img/project_img/VOClient/FPSO-Logo.png') }}",
                "name": "FPSO Ventures Sdn. Bhd.",
                "year": "2011",
                "desc": "Flare Tip Inspection"
            },
            {
                "id": 137,
                "image": "{{ url('build/img/project_img/VOClient/FPSO-Logo.png') }}",
                "name": "FPSO Ventures Sdn. Bhd.",
                "year": "2011",
                "desc": "Vessel & Piping Integrity Assessment at FPSO Bunga Kertas"
            },
            {
                "id": 138,
                "image": "{{ url('build/img/project_img/VOClient/oceancare.jpg') }}",
                "name": "OceanCare Sdn. Bhd.",
                "year": "2011",
                "desc": "Eddy Current Testing on Cross Arm at Murphy Labuan Warehouse"
            },
            {
                "id": 139,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "Huntsman Tioxide",
                "year": "2011",
                "desc": "Annual Shutdown - Inspection of Vessels and Piping (Advance NDT - LRUT)"
            },
            {
                "id": 140,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "GPP - NDE Consultancy",
                "year": "2011",
                "desc": "Advance NDT"
            },
            {
                "id": 141,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "FPSO Ventures Sdn. Bhd.",
                "year": "2011",
                "desc": "Load Test & MPI on Cargo Handling Equipment"
            },
            {
                "id": 142,
                "image": "{{ url('build/img/project_img/VOClient/petronas_carigali_0.png') }}",
                "name": "Petronas Carigali Sdn. Bhd.",
                "year": "2010 - 2011",
                "desc": "Provision of heat exchanger inspection and specialist services, Petronas Carigali Sdn. Bhd., Peninsular Malaysia Operations (PMO)"
            },
            {
                "id": 142,
                "image": "{{ url('build/img/project_img/VOClient/oceancare.jpg') }}",
                "name": "OceanCare Sdn. Bhd.",
                "year": "2011",
                "desc": "PAUT Inspection on Flowline at Murphy Oil Golok Platform"
            },
            {
                "id": 143,
                "image": "{{ url('build/img/project_img/VOClient/oceancare.jpg') }}",
                "name": "OceanCare Sdn. Bhd.",
                "year": "2011",
                "desc": "PAUT Inspection on Riser at Murphy Oil Golok Platform"
            },
            {
                "id": 144,
                "image": "{{ url('build/img/project_img/VOClient/careiontech.jpg') }}",
                "name": "Careion Technologist Sdn. Bhd.",
                "year": "2011",
                "desc": "* C-Scan at Kumang Cluster Onshore MLNG2 for Petra Resources\n* C-Scan at Diesel Storage Tank BCOT Bintulu for Lutong Brothers"
            },
            {
                "id": 146,
                "image": "{{ url('build/img/project_img/VOClient/careiontech.jpg') }}",
                "name": "Careion Technologist Sdn. Bhd.",
                "year": "2011",
                "desc": "* B-Scan on Tank at KSB for Schlumberger\n* Sulfur Storage Tank Inspection for Flexsys\n* Abi Scan & ECT via Rope Access at Chendor MOPU"
            },
            {
                "id": 149,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "Careion Technologist – Petronas LPG",
                "year": "2010",
                "desc": "UTTM for sphere Tank using Rope Access at LPG Klang"
            },
            {
                "id": 150,
                "image": "{{ url('build/img/project_img/VOClient/Talisman[1].png') }}",
                "name": "Talisman Malaysia Limited",
                "year": "2009",
                "desc": "BRE MEMGUARD PRESSURE VESSEL - External Visual Inspection, Thermography and 100% UT TOFD"
            },
            {
                "id": 151,
                "image": "{{ url('build/img/project_img/VOClient/JX_Nippon7.jpg') }}",
                "name": "Nippon Oil Exploration (Malaysia) Ltd.",
                "year": "2009",
                "desc": "Provision of Interim Inspection Services for Nippon’s Onshore and Offshore Activities"
            },
            {
                "id": 152,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "M3Nergy FPSO Perintis Sdn. Bhd.",
                "year": "2009",
                "desc": "CARGO OIL TANK (COT) 4 & 6 CENTRE - ROPE ACCESS CLOSE-UP SURVEY AND THICKNESS GAUGING"
            },
            {
                "id": 152,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "M3Nergy FPSO Perintis Sdn. Bhd.",
                "year": "2009",
                "desc": "3rd Party Inspection and Expeditor for piping Fabrication"
            },
            {
                "id": 153,
                "image": "{{ url('build/img/project_img/VOClient/Talisman[1].png') }}",
                "name": "Talisman Malaysia Limited",
                "year": "2009",
                "desc": "Rope Access Inspection Campaign – Process Piping for Gas Platform Bunga Raya Echo."
            },
            {
                "id": 154,
                "image": "{{ url('build/img/project_img/VOClient/Talisman[1].png') }}",
                "name": "Talisman Malaysia Limited",
                "year": "2009",
                "desc": "Rope Access Inspection Campaign – Process Piping and Riser for PM3 Main Platform and 7 Satellite Platforms."
            },
            {
                "id": 155,
                "image": "{{ url('build/img/project_img/VOClient/optimalchem.jpg') }}",
                "name": "Optimal Chemical Sdn. Bhd.",
                "year": "2009",
                "desc": "NDT Services for Heat Exchanger, Pressure Vessel & Fabrication Project – Shutdown Replacement Equipment."
            },
            {
                "id": 156,
                "image": "{{ url('build/img/project_img/VOClient/kertihtermin.png') }}",
                "name": "Kerteh Terminal Sdn. Bhd.",
                "year": "2009",
                "desc": "Rope access integrity inspection – Provision of Ultrasonic Thickness measurement, visual inspection, corrosion mapping & acoustic emission testing on 3 units of Spherical Tanks."
            },
            {
                "id": 157,
                "image": "{{ url('build/img/project_img/VOClient/fpg-logo.png') }}",
                "name": "FPG Oleochemical",
                "year": "2008",
                "desc": "Turnaround 2008 – Corrosion Monitoring B-Scan on 3 units Cooler."
            },
            {
                "id": 158,
                "image": "{{ url('build/img/project_img/VOClient/Talisman[1].png') }}",
                "name": "Talisman Malaysia Limited",
                "year": "2008",
                "desc": "Rope Access Corrosion monitoring on flow lines for PM3 Satellite Platforms Bunga Raya Charlie and Bunga Raya Delta."
            },
            {
                "id": 159,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "Trenergy FPSO Sdn. Bhd.",
                "year": "2008",
                "desc": "Integrity Inspection – Statutory Equipment – UTTM, Visual inspection & Corrosion Monitoring CSCAN."
            },
            {
                "id": 160,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "Trenergy FPSO Sdn. Bhd.",
                "year": "2008",
                "desc": "Integrity inspection – Process Piping Rope Access UTTM & Visual Inspection."
            },
            {
                "id": 161,
                "image": "{{ url('build/img/project_img/VOClient/perwaja_2.png') }}",
                "name": "Perwaja Steel Sdn. Bhd.",
                "year": "2008",
                "desc": "NDT Services for Heat Exchanger Fabrication Project – Shutdown Replacement Equipment."
            },
            {
                "id": 162,
                "image": "{{ url('build/img/project_img/VOClient/logomakhostia.png') }}",
                "name": "Makhostia Utilities Sdn. Bhd.",
                "year": "2008",
                "desc": "Corrosion Mapping on Pressure Vessel & NDT Eddy Current Tube Inspection for Condenser Unit Shutdown Job for GDC KLCC Plant"
            },
            {
                "id": 163,
                "image": "{{ url('build/img/project_img/VOClient/careiontech.jpg') }}",
                "name": "Careion Technologist Malaysia Sdn. Bhd.",
                "year": "2008",
                "desc": "Rope Access Inspection and NDT on Jacket Leg and Flare Tower Piping at PM3 Field Talisman Malaysia Limited."
            },
            {
                "id": 164,
                "image": "{{ url('build/img/project_img/VOClient/intimulieng.jpg') }}",
                "name": "INTISARI MULIA ENGINEERING Sdn. Bhd.",
                "year": "2008",
                "desc": "Corrosion mapping Ultrasonic C-Scan via Rope Access for South Angsi MOAB lines at SAA Field Talisman (M) Ltd."
            },
            {
                "id": 165,
                "image": "{{ url('build/img/project_img/VOClient/logomakhostia.png') }}",
                "name": "Makhostia Utilities Sdn. Bhd.",
                "year": "2007",
                "desc": "Corrosion Mapping on Cooling Water Piping for GDC KLCC Plant."
            },
            {
                "id": 166,
                "image": "{{ url('build/img/project_img/VOClient/intimulieng.jpg') }}",
                "name": "INTISARI MULIA ENGINEERING Sdn. Bhd.",
                "year": "2007",
                "desc": "Piping Integrity Inspection via Rope Access for PM3 Satellite Platforms at PM3 Field Talisman Malaysia Limited – Bunga Raya Alpha, Delta, Bravo, Bunga Kekwa Alpha, Charlie, Bunga Seroja Alpha & Bunga Tulip Alpha."
            },
            {
                "id": 167,
                "image": "{{ url('build/img/project_img/VOClient/careiontech.jpg') }}",
                "name": "Careion Technologist Malaysia Sdn. Bhd.",
                "year": "2007",
                "desc": "LRUT on PM3 Export & Import Risers at PM3 Satelite platforms for Talisman (M) Ltd."
            },
            {
                "id": 168,
                "image": "{{ url('build/img/project_img/VOClient/intimulieng.jpg') }}",
                "name": "INTISARI MULIA ENGINEERING Sdn. Bhd.",
                "year": "2007",
                "desc": "Corrosion mapping Ultrasonic C-Scan via Rope Access for Bunga Kekwa Satelite flow lines at PM3 Field Talisman (M) Ltd."
            },
            {
                "id": 169,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "NDT PHILIPINES INSPECTION SERVICES CORPORATION",
                "year": "2005",
                "desc": "NDT Long Range Ultrasonic for Tank Farm Piping Corrosion Monitoring at Caltex Chevron Inc. Batangas Tank Farm, Philippines."
            },
            {
                "id": 171,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "M3NERGY FPSO Sdn. Bhd.",
                "year": "2004",
                "desc": "On-stream Inspection and evaluation for Perintis FPSO process piping via Ultrasonic C-scan, Ultrasonic Thickness Gauging Measurement and Radiographic Profile for corrosion evaluation."
            },
            {
                "id": 172,
                "image": "{{ url('build/img/project_img/VOClient/tnec.png') }}",
                "name": "TENAGA NASIONAL ENGINEERING & CONSTRUCTION (M) Sdn. Bhd.",
                "year": "2004",
                "desc": "Transfer of MPO at Prai Power Station."
            },
            {
                "id": 173,
                "image": "{{ url('build/img/project_img/VOClient/dnv.png') }}",
                "name": "DET NORSKE VERITAS AS Sdn. Bhd.",
                "year": "2001",
                "desc": "Provision of Pressure Vessel Surveyor for Petronas Gas Receipt Gas Station Miri, Sarawak."
            },
            {
                "id": 174,
                "image": "{{ url('build/img/project_img/VOClient/toyoeng.png') }}",
                "name": "TOYO ENGINEERING & CONSTRUCTION (M) Sdn. Bhd.",
                "year": "2000 - 2001",
                "desc": "Provision of project inspector for UPP Project in Fabrication of Statutory Equipment Fabrication."
            },
            {
                "id": 175,
                "image": "{{ url('build/img/project_img/VOClient/dnv.png') }}",
                "name": "DET NORSKE VERITAS AS Sdn. Bhd.",
                "year": "2000",
                "desc": "Provision of project inspector for AMP2 Project."
            },
            {
                "id": 176,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "BERKAT GLOBAL Sdn. Bhd.",
                "year": "1999 - 2004",
                "desc": "Marine Warranty Verification Services for Nippon Steel Construction."
            },
            {
                "id": 177,
                "image": "{{ url('build/img/project_img/VOClient/dnv.png') }}",
                "name": "DET NORSKE VERITAS AS Sdn. Bhd.",
                "year": "1999",
                "desc": "Provision of Welding Inspector for Rig Trident 16, Miri Offshore Project."
            },
            {
                "id": 178,
                "image": "{{ url('build/img/project_img/VOClient/dnv.png') }}",
                "name": "DET NORSKE VERITAS AS Sdn. Bhd.",
                "year": "1999",
                "desc": "Structural inspection for Skud Beam on Deck Excellot Offshore Miri."
            },
            {
                "id": 179,
                "image": "{{ url('build/img/project_img/VOClient/toyoeng.png') }}",
                "name": "TOYO ENGINEERING & CONSTRUCTION (M) Sdn. Bhd.",
                "year": "1998 - 1999",
                "desc": "Provision of project inspector for FPG Oleochemical Plant Extension Project."
            },
            {
                "id": 180,
                "image": "{{ url('build/img/project_img/VOClient/dnv.png') }}",
                "name": "DET NORSKE VERITAS AS Sdn. Bhd.",
                "year": "1998",
                "desc": "Coating Inspection for EPCC - MPP at Bredero Price Kuantan Port"
            },
            {
                "id": 181,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "METAL PIPELINE ENDUR Sdn. Bhd.",
                "year": "1998",
                "desc": "Provision of Welding Inspector for Structural, JGC Pulau Seraya Project"
            },
            {
                "id": 182,
                "image": "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                "name": "KEJURUTERAAN KOTA AMAN Sdn. Bhd.",
                "year": "1998",
                "desc": "Provision of Ultrasonic Testing for Petronas Gas, PGU III Project Metering Station"
            }
        ], elementsPerSubArray);

        const dataMaintenance = listToMatrix([{
                id: 1,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "PT MPL Jasa Lestari",
                year: "2022",
                desc: "Developing, Publishing & Maintaining Working Procedure & Technical Specification For Engineering Indonesia Cirebon 2 (1x1000mw Coal-Fired Power Plant)"
            },
            {
                id: 2,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "PT MPL Jasa Lestari",
                year: "2022",
                desc: "Proposed Contract for Quality Assurance & Reliability Study of Startup Testing & Operation for Steam Turbine at Cirebon-2 Power Plant (1x1000 MW), Indonesia."
            },
            {
                id: 3,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "PT MPL Jasa Lestari",
                year: "2022",
                desc: "Design, Engineering, Construction and InstallationProcedures For Steam Turbine Generator System"
            },
            {
                id: 4,
                image: "{{ url('build/img/project_img/VOClient/repsol.png') }}",
                name: "Repsol Oil & Gas Malaysia Ltd.",
                year: "2018 - 2021",
                desc: "Provision of Pipeline Storage Facilities"
            },

            {
                id: 5,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2018",
                desc: "To Supply Corrosion Engineering Team - Site Supervision Job for the Installation of 1 new flowline - CC and ERP Supervision (A16 and A17)"
            },
            {
                id: 6,
                image: "{{ url('build/img/project_img/VOClient/Velosi.jpg') }}",
                name: "Velosi (M) Sdn. Bhd.",
                year: "2018",
                desc: "Perform Cathodic Protection System Survey for SACP System for Bertam Wellhead Platform"
            },
            {
                id: 7,
                image: "{{ url('build/img/project_img/VOClient/ptsc.jpg') }}",
                name: "Petrovietnam Technical Services Corporation (PTSC Malaysia)",
                year: "2018",
                desc: "Provision of Temporary Storage Facilities"
            },
            {
                id: 8,
                image: "{{ url('build/img/project_img/VOClient/ptsc.jpg') }}",
                name: "Petrovietnam Technical Services Corporation (PTSC Malaysia)",
                year: "2018",
                desc: "Clearance, Re-stacking and Unloading of BPA's Excess Stock (45T Mobile Crane)"
            },
            {
                id: 9,
                image: "{{ url('build/img/project_img/VOClient/almhiro.png') }}",
                name: "Alam Hidro (M) Sdn. Bhd.",
                year: "2017",
                desc: "Fabrication of 24 Sets of Anode & Sled Frames For KNDP-A Jackets"
            },
            {
                id: 10,
                image: "{{ url('build/img/project_img/VOClient/ptsc.jpg') }}",
                name: "Petrovietnam Technical Services Corporation (PTSC Malaysia)",
                year: "2017",
                desc: "Provision of Temporary Storage for Existing 26in Pipes and the New 24in Pipes for the BOC-BOD Pipeline Replacement Project	"
            },
            {
                id: 11,
                image: "{{ url('build/img/project_img/VOClient/idemitsu.jpg') }}",
                name: "Idemitsu SM (M) Sdn. Bhd.",
                year: "2017",
                desc: "Hot Oil Tank V552 Cleaning Internal tank cleaning"
            },
            {
                id: 12,
                image: "{{ url('build/img/project_img/VOClient/logoQUESTINT.png') }}",
                name: "Quest Integrity MYS Sdn. Bhd.",
                year: "2017",
                desc: "Fabrication of Pig Trap at Pasir Gudang"
            },
            {
                id: 13,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Lloyds Register Technical Sdn. Bhd.",
                year: "2015",
                desc: "10\" Test Loop - Fabricate and run testinddg for TML"
            },
            {
                id: 14,
                image: "{{ url('build/img/project_img/VOClient/almhiro.png') }}",
                name: "Alam Hidro (M) Sdn. Bhd.",
                year: "2015",
                desc: "Fabrication of underwater bypass spool for 4\" gas lift from BRB to BSA"
            },
            {
                id: 15,
                image: "{{ url('build/img/project_img/VOClient/ptsc.jpg') }}",
                name: "Petrovietnam Technical Services Corporation (PTSC) Malaysia",
                year: "2014 - 2015",
                desc: "Rental for 6 months storage yard at Balok Kuantan cw relevant facilities & maintenance services"
            },
            {
                id: 16,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Shapadu / Rekayasa",
                year: "2015",
                desc: "* Lube Blending Tank\n* Launcher Receiver"
            },
            {
                id: 18,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "JGC Corp / Argonaut",
                year: "2015",
                desc: "Stabilizer Column - PT Polytama Propindo Indonesia"
            },
            {
                id: 19,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Sallehuddin Power Station",
                year: "2015",
                desc: "Pressure Transmittal Vessel, Port Klang"
            },
            {
                id: 20,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Petra Fabricators Sdn. Bhd.",
                year: "2015",
                desc: "Thinning & Monomer Tank – Cray Valley Project"
            },
            {
                id: 21,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Petra Fabricators Sdn. Bhd.",
                year: "2015",
                desc: "Crude Oil Custody Transfer Metering Skid – Gaspian Sea FSO"
            },
            {
                id: 22,
                image: "{{ url('build/img/project_img/VOClient/jgc.png') }}",
                name: "JGC Corp.",
                year: "2015",
                desc: "Gas Metering Skid – Thai Lube Oil Project"
            },
            {
                id: 23,
                image: "{{ url('build/img/project_img/VOClient/bwg.png') }}",
                name: "Bestwide Engineering Sdn. Bhd.",
                year: "2015",
                desc: "Chemical Injection Skid – EPMI Bunga Seroja Platform"
            },
            {
                id: 24,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "ROSEN Inspection Asia Pacific Sdn. Bhd.",
                year: "2014",
                desc: "Test Loop Assembly and Test Run Assistance"
            },
            {
                id: 25,
                image: "{{ url('build/img/project_img/VOClient/petronagasberhad.png') }}",
                name: "Petronas Gas Berhad",
                year: "2013",
                desc: "Provision Pipe support Replacement At PGU Phase III at Regulator Metering Skids at PGM, Pasir Gudang, Johor"
            },
            {
                id: 26,
                image: "{{ url('build/img/project_img/VOClient/petpioneereng.png') }}",
                name: "Pioneer Engineering Sdn. Bhd.",
                year: "2011 - 2013",
                desc: "CHESS – Blasting & Painting job via Rope Access"
            },
            {
                id: 26,
                image: "{{ url('build/img/project_img/VOClient/petronagasberhad.png') }}",
                name: "Petronas Gas Berhad",
                year: "2013",
                desc: "Provision of Blasting & Painting at PGMS Metering Station"
            },
            {
                id: 27,
                image: "{{ url('build/img/project_img/VOClient/petronas_carigali_0.png') }}",
                name: "Petronas Carigali Sdn. Bhd.",
                year: "2012",
                desc: "Provision Tilted Perform V3010/3080 Reinstatement Carigali - PMO"
            },
            {
                id: 28,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Polyplastic Asia Pacific Sdn. Bhd. (EPCC: Oversea Technical Engineering & Construction Pte. Ltd.)",
                year: "2011",
                desc: "Fabrication and erection of 1 unit of Demin Water Storage Tank c/w Distribution Piping System at MP2 Project"
            },
            {
                id: 29,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Kaneka Polymer Plastic (M) Sdn. Bhd. (EPCC: Mitsubishi Kokaki Kaisha Pte. Ltd.)",
                year: "2011",
                desc: "Fabrication and erection of 1 unit of Water Storage Tank at Kaneka MEP Project"
            },
            {
                id: 29,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Titan Chemicals",
                year: "2011",
                desc: "* Cleaning Reactor Shell via Rope Access\n* 1 Unit of Binding SILO Repair using Rope Access"
            },
            {
                id: 30,
                image: "{{ url('build/img/project_img/VOClient/FPSO-Logo.png') }}",
                name: "FPSO Ventures Sdn. Bhd.",
                year: "2011",
                desc: "Provision of Manpower, Material, equipment, tools and consumables for heat Exchanger (E-1710 and E-17508) Cleaning Works onboard FPSO Bunga Kertas"
            },
            {
                id: 29,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Titan Chemicals",
                year: "2011",
                desc: "Acid Pickling at Titan Chemicals Plant Pasir Gudang"
            },
            {
                id: 30,
                image: "{{ url('build/img/project_img/VOClient/FPSO-Logo.png') }}",
                name: "FPSO Ventures Sdn. Bhd.",
                year: "2011",
                desc: "Painting & Blasting via Rope Access on Mongkey Island at FPSO Bunga Kertas"
            },
            {
                id: 31,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Sunpower Melaka Solar Manufacturing (M) Sdn. Bhd. (EPCC: PT Technic Engineering Sdn. Bhd.)",
                year: "2010",
                desc: "EPCC of Diesel Storage Tank c/w Distribution Piping Works"
            },
            {
                id: 32,
                image: "{{ url('build/img/project_img/VOClient/FPSO-Logo.png') }}",
                name: "FPSO Ventures Sdn. Bhd.",
                year: "2010",
                desc: "Provision of Manpower, Material, equipment, tools and consumables for heat Exchanger (E-1710 and E-17508) Cleaning Works onboard FPSO Bunga Kertas"
            },
            {
                id: 33,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Kaneka Polymer Plastic (M) Sdn. Bhd. (EPCC: Mitsubishi Kokaki Kaisha Pte. Ltd.)",
                year: "2010",
                desc: "Fabrication and erection of 1 unit of Water Storage Tank at Kaneka MEP Project"
            },
            {
                id: 34,
                image: "{{ url('build/img/project_img/VOClient/petronas_carigali_0.png') }}",
                name: "Petronas Carigali Sdn. Bhd.",
                year: "2010",
                desc: "Provision to supply manpower, material, equipment for to perform Cleaning on printed circuit Heat Exchanger, E2430"
            },
            {
                id: 35,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Careion Technologist - Kerteh Terminal Sdn. Bhd.",
                year: "2009",
                desc: "AE Probe Installation for Sphere Tank using Rope Access at KTSB"
            },
            {
                id: 36,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Sunpower Melaka Solar Manufacturing (M) Sdn. Bhd. (EPCC: PT Technic Engineering Sdn. Bhd.)",
                year: "2009",
                desc: "EPCC of Diesel Storage Tank c/w Distribution Piping Works"
            },
            {
                id: 37,
                image: "{{ url('build/img/project_img/VOClient/FPSO-Logo.png') }}",
                name: "FPSO Ventures Sdn. Bhd.",
                year: "2009",
                desc: "Provision of Manpower, Material, equipment, tools and consumables for heat Exchanger (E-1710 and E-17508) Cleaning Works onboard FPSO Bunga Kertas"
            },
            {
                id: 38,
                image: "{{ url('build/img/project_img/VOClient/petronas_carigali_0.png') }}",
                name: "Petronas Carigali Sdn. Bhd.",
                year: "2009",
                desc: "Provision of heat exchanger inspection and specialist services, Petronas Carigali Sdn. Bhd., Peninsular Malaysia Operations (PMO)"
            },
            {
                id: 39,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Petronas Penapisan (Melaka) Sdn. Bhd. (EPCC: PT Technic Engineering Sdn. Bhd.)",
                year: "2009",
                desc: "Fabrication and erection of 7 units of Water Storage Tanks at MG3 Project c/w Tank Farm Interconnection Piping Works"
            },
            {
                id: 41,
                image: "{{ url('build/img/project_img/VOClient/logomakhostia.png') }}",
                name: "Makhostia Utilities Sdn. Bhd.",
                year: "2008",
                desc: "Mechanical work for Gas District Cooling KLCC on Evaporator, Condenser, Intercooler & Lube oil cooler"
            },
            {
                id: 42,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "Port Tanjung Langsat Sdn. Bhd. (EPCC: Saga Dialog Sdn. Bhd.)",
                year: "2008",
                desc: "Fabrication and erection of 2 units of Diesel Storage Tanks at Langsat Terminal One and Langsat CTF c/w Interconnecting Piping in Tank Farm at Tanjung Langsat Johor"
            },
            {
                id: 43,
                image: "{{ url('build/img/project_img/VOClient/CenservHD.png') }}",
                name: "CENSERV Sdn. Bhd.",
                year: "2008",
                desc: "Fabrication of 6 units of Oil Cooler Heat Exchanger & 1 unit Titanium Bundle"
            },
            {
                id: 44,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "EDARAN ASIA Ptd. Ltd.",
                year: "2006",
                desc: "Consultancy for Welding and Fabrication QMS for Structural and Pipeline Works - Batam Indonesia Project"
            },
            {
                id: 45,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "POLYETHYLENE MALAYSIA Sdn. Bhd.",
                year: "2005",
                desc: "Installation of sleeves, support plate bars and flange. Bolts and nuts replacement for top nozzle of SILO PE-1-880B"
            },
            {
                id: 44,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "EDARAN ASIA Ptd. Ltd.",
                year: "2006",
                desc: "Consultancy services for Quality Manual System – Process piping fabrication project compliance with API/ASME Code of Practices."
            },
            {
                id: 46,
                image: "{{ url('build/img/project_img/VOClient/tnec.png') }}",
                name: "TNB ENGINEERING CORPORATION Sdn. Bhd.",
                year: "2004",
                desc: "Transfer of MPO at Prai Power Station – Fabrication of metering pump skid"
            },
            {
                id: 47,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "ETHYLENE MALAYSIA Sdn. Bhd.",
                year: "2004",
                desc: "Fabrication and supply of bell mouth for cracking heater’s induced draft fan motor"
            },
            {
                id: 48,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "ETHYLENE MALAYSIA Sdn. Bhd.",
                year: "2004",
                desc: "Fabrication and supply of bell mouth for cracking heater’s induced draft fan motor"
            },
            {
                id: 49,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "ETHYLENE MALAYSIA Sdn. Bhd.",
                year: "2003",
                desc: "Supply of Burner modification kit including fittings and site installation"
            },
            {
                id: 50,
                image: "{{ url('build/img/project_img/VOClient/tnec.png') }}",
                name: "TENAGA NASIONAL ENGINEERING & CONSTRUCTION (M) Sdn. Bhd.",
                year: "2002",
                desc: "EPCC Distillate Line from Marine Jetty to Tank Farm for TNB SJSI Power Plant Pasir Gudang"
            },
            {
                id: 51,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "POLYETHYLENE MALAYSIA Sdn. Bhd.",
                year: "2002",
                desc: "Modifying broken tube, installation of sleeves and installation of support plate bars for SILO PE-1-880A"
            },
            {
                id: 52,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "ETHYLENE MALAYSIA Sdn. Bhd.",
                year: "2002",
                desc: "Fabrication and site installation of 6-inch cracking heater’s decoking effluent line"
            },
            {
                id: 50,
                image: "{{ url('build/img/project_img/VOClient/tnec.png') }}",
                name: "TENAGA NASIONAL ENGINEERING & CONSTRUCTION (M) Sdn. Bhd.",
                year: "2002",
                desc: "Quality Assurance and Control Project Development Package"
            }


        ], elementsPerSubArray);

        const dataRepair = listToMatrix([{
                id: 1,
                image: "{{ url('build/img/project_img/VOClient/FPSO-Logo.png') }}",
                name: "FPSO Ventures Sdn. Bhd.",
                year: "2022",
                desc: "Provision of Manpower, Materials, Equipment, Tools and consumable for Cleaning, Inspection and Repair of Topsides Process Pressure Vessel (PPV) and Heat Exchanger (HEX) onboard FPSO Bunga Kertas"
            },
            {
                id: 2,
                image: "{{ url('build/img/project_img/VOClient/altec.jpg') }}",
                name: "Altec Industrial & Engineering Supply Sdn. Bhd.",
                year: "2018",
                desc: "Refurbished 880 Delta Projector Complete Set - 2 Unit"
            },
            {
                id: 3,
                image: "{{ url('build/img/project_img/VOClient/repsol.png') }}",
                name: "Repsol Oil & Gas Malaysia Ltd.",
                year: "2017",
                desc: "BRA Diesel Tank Cleaning and Fuel Reconditioning Services"
            },
            {
                id: 4,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "M3nergy FPSO Perintis Sdn. Bhd.",
                year: "2009",
                desc: "BRA Diesel Tank Cleaning and Fuel Reconditioning Services"
            },
            {
                id: 5,
                image: "{{ url('build/img/project_img/VOClient/default_logo.png') }}",
                name: "POLYETHYLENE MALAYSIA Sdn. Bhd.",
                year: "2004",
                desc: "Repair and fabrication of SILO 880A and 880B"
            }
        ], elementsPerSubArray);

        const dataSpecial = listToMatrix([{
                id: 1,
                image: "{{ url('build/img/project_img/VOClient/vouas.png') }}",
                name: "Vision One UAS",
                desc: "Partnership with Vision One UAS to revolutionize smart farming using advanced drones. We're optimizing crop monitoring, resource management, and yield prediction, empowering farmers with actionable data for increased productivity and sustainability."
            },
            {
                id: 2,
                image: "{{ url('build/img/project_img/VOClient/DYNASEGMENT logo.png') }}",
                name: "Dyna Segmen",
                desc: "We successfully supplied cranes to the Kazakhstan market in collaboration with Dyna Segmen. Our partnership ensured the seamless provision of high-quality industrial equipment and services, tailored to meet the specific needs of the region."
            },
            {
                id: 3,
                image: "{{ url('build/img/project_img/VOClient/ISDB logo.png') }}",
                name: "IsDB",
                desc: "Currently collaborating with IsDB to enhance capacity building in the NDT sector, driving innovation and expertise."
            },
            {
                id: 2,
                image: "{{ url('build/img/project_img/VOClient/Emblem_of_Brunei.png') }}",
                name: "BEDB Brunei Darussalam",
                desc: "Exploring the potential of floating solar technology in Brunei Darussalam, paving the way for sustainable energy solutions."
            }
        ], elementsPerSubArray);

        currentData = listToMatrix(dataInspect.flat(), elementsPerSubArray);

        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        function handleQueryParams() {
            const section = getQueryParam('section');

            sidebarLinks.forEach(link => link.classList.remove('active'));

            if (section === 'maintenance') {
                currentData = listToMatrix(dataMaintenance.flat(), elementsPerSubArray);
                sidebarLinks[1].classList.add('active');
                titleElement.textContent = 'Maintenance';
                backElement.textContent = 'Maintenance';
            } else if (section === 'inspect') {
                currentData = listToMatrix(dataInspect.flat(), elementsPerSubArray);
                sidebarLinks[0].classList.add('active');
                titleElement.textContent = 'Integrity Inspection';
                backElement.textContent = 'Integrity Inspection';
            } else if (section === 'repair') {
                currentData = listToMatrix(dataRepair.flat(), elementsPerSubArray);
                sidebarLinks[2].classList.add('active');
                titleElement.textContent = 'Repair';
                backElement.textContent = 'Repair';
            } else if (section === 'special') {
                currentData = listToMatrix(dataSpecial.flat(), elementsPerSubArray);
                sidebarLinks[3].classList.add('active');
                titleElement.textContent = 'Special Projects';
                backElement.textContent = 'Special Projects';
            } else {
                currentData = listToMatrix(dataInspect.flat(), elementsPerSubArray);
                sidebarLinks[0].classList.add('active');
                titleElement.textContent = 'Integrity Inspection';
                backElement.textContent = 'Integrity Inspection';
            }
        }

        handleQueryParams();

        function renderTimeline(data, page = 1) {
            console.log(data);
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const itemsToRender = data.flat().slice(start, end);

            let rowCount = document.querySelectorAll('.timeline').length; // Start counting from existing timelines

            // Create timelines in chunks of the current elementsPerSubArray
            for (let i = 0; i < itemsToRender.length; i += elementsPerSubArray) {
                const timelineDiv = document.createElement('div');
                timelineDiv.className = 'timeline';

                if (rowCount % 2 === 1) {
                    timelineDiv.classList.add('row-reverse');
                }

                buildTimelineItems(timelineDiv, itemsToRender.slice(i, i + elementsPerSubArray));
                timelineWrapper.appendChild(timelineDiv);
                rowCount++;
            }

            viewMoreButton.style.display = end >= data.flat().length ? 'none' : 'inline-block';
        }

        function buildTimelineItems(timelineDiv, items) {
            // Loop through the items and create the timeline elements
            items.forEach(subItem => {
                const itemDiv = document.createElement('div');
                itemDiv.className = 'item';

                const subitemDiv = document.createElement('div');
                subitemDiv.className = 'subitem';

                const circleDiv = document.createElement('div');
                circleDiv.className = 'circle';
                const imgElement = document.createElement('img');
                imgElement.src = subItem.image;
                imgElement.alt = subItem.name;
                imgElement.style.maxHeight = '120px';
                imgElement.style.maxWidth = '120px';
                imgElement.style.backgroundColor = 'white';
                circleDiv.appendChild(imgElement);

                const contentDiv = document.createElement('div');
                contentDiv.className = 'content';

                const nameH1 = document.createElement('h2');
                nameH1.textContent = subItem.name;
                nameH1.style.color = '#008080';
                nameH1.style.marginTop = '5px';
                nameH1.style.textAlign = 'center';
                contentDiv.appendChild(nameH1);

                const yearP = document.createElement('p');
                yearP.textContent = subItem.year;
                yearP.style.color = '#AEAEAE';
                yearP.style.fontSize = '25px';
                yearP.style.fontWeight = '300px';
                yearP.style.padding = '0';
                yearP.style.margin = '0';
                yearP.style.textAlign = 'center';
                contentDiv.appendChild(yearP);

                const descP = document.createElement('p');
                descP.innerHTML = subItem.desc.replace(/\n/g, '<br>');
                descP.style.fontSize = '21px';
                descP.style.textAlign = 'center';
                contentDiv.appendChild(descP);

                subitemDiv.appendChild(circleDiv);
                subitemDiv.appendChild(contentDiv);
                itemDiv.appendChild(subitemDiv);
                timelineDiv.appendChild(itemDiv);
            });
        }

        function getElementsPerSubArray() {
            if (window.matchMedia('(min-width: 1440px)').matches) {
                return 3; // lg screen
            } else if (window.matchMedia('(min-width: 768px)').matches) {
                return 2; // md screen
            } else {
                return 1; // sm screen
            }
        }

        function getItemsPerPages() {
            if (window.matchMedia('(min-width: 1440px)').matches) {
                return 9; // lg screen
            } else if (window.matchMedia('(min-width: 768px)').matches) {
                return 8; // md screen
            } else {
                return 9; // sm screen
            }
        }

        // Recalculate elementsPerSubArray on screen resize
        window.addEventListener('resize', function() {
            elementsPerSubArray = getElementsPerSubArray();
            itemsPerPage = getItemsPerPages();
            currentPage = 1; // Reset to first page
            currentData = listToMatrix(currentData.flat(), elementsPerSubArray); // Recreate the matrix
            timelineWrapper.innerHTML = ''; // Clear existing items
            renderTimeline(currentData); // Re-render the items
        });

        renderTimeline(currentData);

        viewMoreButton.addEventListener('click', function() {
            currentPage++;
            renderTimeline(currentData, currentPage);
        });

        maintenanceSidebarItem.addEventListener('click', function() {
            timelineWrapper.innerHTML = ''; // Clear existing items
            currentPage = 1; // Reset to first page
            currentData = listToMatrix(dataMaintenance.flat(), elementsPerSubArray); // Switch data set
            renderTimeline(currentData); // Render the first batch of items
        });

        inspectSidebarItem.addEventListener('click', function() {
            timelineWrapper.innerHTML = ''; // Clear existing items
            currentPage = 1; // Reset to first page
            currentData = listToMatrix(dataInspect.flat(), elementsPerSubArray); // Switch data set
            renderTimeline(currentData); // Render the first batch of items
        });

        repairSidebarItem.addEventListener('click', function() {
            timelineWrapper.innerHTML = ''; // Clear existing items
            currentPage = 1; // Reset to first page
            currentData = listToMatrix(dataRepair.flat(), elementsPerSubArray); // Switch data set
            renderTimeline(currentData); // Render the first batch of items
        });

        specialSidebarItem.addEventListener('click', function() {
            timelineWrapper.innerHTML = ''; // Clear existing items
            currentPage = 1; // Reset to first page
            currentData = listToMatrix(dataSpecial.flat(), elementsPerSubArray); // Switch data set
            renderTimeline(currentData); // Render the first batch of items
        });

        function listToMatrix(list, elementsPerSubArray) {
            const matrix = [];
            let i, k;
            for (i = 0, k = -1; i < list.length; i++) {
                if (i % elementsPerSubArray === 0) {
                    k++;
                    matrix[k] = [];
                }
                matrix[k].push(list[i]);
            }
            return matrix;
        }
    });
</script>

@endsection