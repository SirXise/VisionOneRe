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
                desc: "We successfully supplied craned to the Kazakhstan market in collaboration with Dyna Segmen. Our partnership ensured the seamless provision of high-quality industrial equipment and services, tailored to meet the specific needs of the region."
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
                name: "Brunei Darussalam",
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
                imgElement.style.width = '85%';
                circleDiv.appendChild(imgElement);

                const contentDiv = document.createElement('div');
                contentDiv.className = 'content';

                const nameH1 = document.createElement('h2');
                nameH1.textContent = subItem.name;
                nameH1.style.color = '#008080';
                nameH1.style.marginBottom = '0px';
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