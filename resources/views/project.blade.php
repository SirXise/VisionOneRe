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
                        <div class="text">Special Project</div>
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
        var titleElement = document.querySelector('.section-title');

        sidebarLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                sidebarLinks.forEach(function(item) {
                    item.classList.remove('active');
                });
                this.classList.add('active');

                if (this.id === 'maintenance-link') {
                    titleElement.textContent = 'Maintenance';
                } else if (this.id === 'inspect-link') {
                    titleElement.textContent = 'Integrity Inspection';
                }
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const timelineWrapper = document.getElementById('timeline-wrapper');
        const viewMoreButton = document.getElementById('view-more');
        const maintenanceSidebarItem = document.querySelector('#maintenance-link');
        const inspectSidebarItem = document.querySelector('#inspect-link');

        let currentPage = 1;
        const itemsPerPage = 9;
        let currentData = [];
        let rowCount = 0;
        let elementsPerSubArray = getElementsPerSubArray(); // Initialize with the correct value

        const dataInspect = listToMatrix([{
                id: 1,
                image: "{{ url('build/img/project_img/Collaborators/MAGNA-MITRE.png') }}",
                name: "Magna-Mitre Sdn Bhd",
                year: "2015 - 2017",
                desc: "Provision of Integrity Assessment, Inspection and Disposal Schedule waste of Continuously Oil Contaminated (COC), Accidently Oil Contaminated (AOC) System in Petronas LNG Complex"
            },
            {
                id: 2,
                image: "{{ url('build/img/project_img/Collaborators/SGS-NORMAL.jpg') }}",
                name: "SGS Malaysia Sdn Bhd",
                year: "2015",
                desc: "Heating Coil Inspection NDT at Bertam FPSO"
            },
            {
                id: 3,
                image: "{{ url('build/img/project_img/Collaborators/FPSO VENTURES.png') }}",
                name: "//Budiman Inspection Sdn Bhd",
                year: "2015",
                desc: "LRUT Inspection for 12\" piping GAF System (TNB Manjung)"
            },
            {
                id: 4,
                image: "{{ url('build/img/project_img/Collaborators/IME.png') }}",
                name: "IME Sdn Bhd",
                year: "2015",
                desc: "Rope Access Team for PFPSO \n - West Desaru Mopu \n - Cendor Platform"
            },
            {
                id: 5,
                image: "{{ url('build/img/project_img/Collaborators/Talisman[1].png') }}",
                name: "Talisman Malaysia Limited",
                year: "2015",
                desc: "Spray Pig Loop Test"
            },
            {
                id: 6,
                image: "{{ url('build/img/project_img/Collaborators/FPSO VENTURES.png') }}",
                name: "//Alam Hidro (M) Sdn Bhd",
                year: "2015",
                desc: "BKA Pipeline Spool Repair on Board Crest Odessey-2"
            },
            {
                id: 7,
                image: "{{ url('build/img/project_img/Collaborators/Velosi-logo.jpg') }}",
                name: "Velosi Specialised Inspection Sdn Bhd",
                year: "2015",
                desc: "Provision of Radiography Testing at South Angsi Platform"
            },
            {
                id: 8,
                image: "{{ url('build/img/project_img/Collaborators/DANAMIN-LOGO.png') }}",
                name: "Danamin (M) Sdn Bhd",
                year: "2015",
                desc: "Perform Cscan Inspection at Petron Port Dickson"
            },
            {
                id: 9,
                image: "{{ url('build/img/project_img/Collaborators/NadiMarine.png') }}",
                name: "Nadi Marine Sdn Bhd",
                year: "2015",
                desc: "Perform MPI Inspection at Perisai Pacific 101"
            },
            {
                id: 10,
                image: "{{ url('build/img/project_img/Collaborators/ndeLogo.png') }}",
                name: "NDE Consultancy Services Sdn Bhd",
                year: "2014",
                desc: "Perform Cscan at PGB Kerteh"
            },
            {
                id: 11,
                image: "{{ url('build/img/project_img/Collaborators/bumitech-global-logo.png') }}",
                name: "Bumitech Inspection Sdn Bhd",
                year: "2014",
                desc: "Perforn LRUT at PDB Sepangar Sabah"
            },
            {
                id: 12,
                image: "{{ url('build/img/project_img/Collaborators/TITAN PETCHEM.png') }}",
                name: "Lotte Chemical Titan (M) Sdn Bhd",
                year: "2014",
                desc: "Boroscope Inspection"
            },
            {
                id: 13,
                image: "{{ url('build/img/project_img/Collaborators/cropped-pesb4.png') }}",
                name: "Pioneer Engineering Sdn Bhd",
                year: "2014",
                desc: "Provision of Mechanical Integrity Assessment at PDB Bintulu Terminal"
            },
            {
                id: 14,
                image: "{{ url('build/img/project_img/Collaborators/rosen group logo_1.jpg') }}",
                name: "ROSEN Inspection Asia Pacific S/B",
                year: "2014",
                desc: "Test Loop Assembly and Test Run Assistance"
            },
            {
                id: 15,
                image: "{{ url('build/img/project_img/Collaborators/TITAN PETCHEM.png') }}",
                name: "Lotte Chemical Titan (M) Sdn Bhd",
                year: "2014",
                desc: "NDT Inspection Storage Tank"
            },
            {
                id: 16,
                image: "{{ url('build/img/project_img/Collaborators/IOS.png') }}",
                name: "Innovative Oilfield Services",
                year: "2014",
                desc: "Perform Marine Growth Preventor removal via rope access"
            },
            {
                id: 17,
                image: "{{ url('build/img/project_img/Collaborators/NadiMarine.png') }}",
                name: "Nadi Marine Sdn Bhd",
                year: "2014",
                desc: "Price Agreement (PA) of Inspection Services for Product Tanks, Pressure Vessel and Piping at PDB Terminal (Eastern & Central)"
            },
            {
                id: 18,
                image: "{{ url('build/img/project_img/Collaborators/Logo-Petronas-Dagangan-Berhad.png') }}",
                name: "Petronas Dagangan Berhad",
                year: "2014",
                desc: "Price Agreement (PA) of Inspection Services for Product Tanks, Pressure Vessel and Piping at PDB Terminal (Eastern & Central)"
            },
            {
                id: 19,
                image: "{{ url('build/img/project_img/Collaborators/Logo-Petronas-Dagangan-Berhad.png') }}",
                name: "Petronas Dagangan Berhad",
                year: "2014",
                desc: "NDT Services - KLIA Fuel Terminal"
            },
            {
                id: 20,
                image: "{{ url('build/img/project_img/Collaborators/Logo-Petronas-Dagangan-Berhad.png') }}",
                name: "Petronas Dagangan Berhad",
                year: "2014",
                desc: "Pipeline Integrity Test And Inspection"
            },
            {
                id: 21,
                image: "{{ url('build/img/project_img/Collaborators/Logo-Petronas-Dagangan-Berhad.png') }}",
                name: "Petronas Dagangan Berhad",
                year: "2014",
                desc: "Tank Integrity Inspection"
            },
            {
                id: 22,
                image: "{{ url('build/img/project_img/Collaborators/Logo-Petronas-Dagangan-Berhad.png') }}",
                name: "Petronas Dagangan Berhad",
                year: "2014",
                desc: "Tank Inspection - Langkawi Fuel Terminal"
            },
            {
                id: 23,
                image: "{{ url('build/img/project_img/Collaborators/Velosi-logo.jpg') }}",
                name: "Velosi Specialised Inspection S/B",
                year: "2014",
                desc: "Provision of Radiography Testing - PM3S - BRA"
            },
            {
                id: 24,
                image: "{{ url('build/img/project_img/Collaborators/murphyoil.png') }}",
                name: "Murphy Oil",
                year: "2013",
                desc: "Advance NDT. Provision for PAUT LRUT C-Scan Inspection for SEP-A GOP-A/B BORF and KIKEH"
            },
            {
                id: 25,
                image: "{{ url('build/img/project_img/Collaborators/Talisman[1].png') }}",
                name: "Talisman Malaysia Limited",
                year: "2013",
                desc: "NDT Services"
            },
            {
                id: 26,
                image: "{{ url('build/img/project_img/Collaborators/NadiMarine.png') }}",
                name: "//Titan Petchem",
                year: "2013",
                desc: "Piping Inspection via Rope Access"
            },
            {
                id: 27,
                image: "{{ url('build/img/project_img/Collaborators/NadiMarine.png') }}",
                name: "//Talisman - PESB",
                year: "2013",
                desc: "Pressure Vessels Piping Inspection via Rope Access "
            }
        ], elementsPerSubArray);

        const dataMaintenance = listToMatrix([{
                id: 1,
                image: "{{ url('build/img/project_img/Collaborators/MAGNA-MITRE.png') }}",
                name: "//Lloyds Register Technical Sdn Bhd",
                year: "2015",
                desc: "10\" Test Loop - Fabricate and run testing for TML"
            },
            {
                id: 2,
                image: "{{ url('build/img/project_img/Collaborators/SGS-NORMAL.jpg') }}",
                name: "//Alam Hidro (M) Sdn Bhd",
                year: "2015",
                desc: "Fabrication of underwater bypass spool for 4\" gas lift from BRB to BSA"
            },
            {
                id: 3,
                image: "{{ url('build/img/project_img/Collaborators/SGS-NORMAL.jpg') }}",
                name: "//Shapadu / Rekayasa",
                year: "2015",
                desc: "Lube Blending Tank"
            },
            {
                id: 4,
                image: "{{ url('build/img/project_img/Collaborators/SGS-NORMAL.jpg') }}",
                name: "//Shapadu / Rekayasa",
                year: "2015",
                desc: "Launcher Receiver"
            },
            {
                id: 5,
                image: "{{ url('build/img/project_img/Collaborators/SGS-NORMAL.jpg') }}",
                name: "//JGC Corp / Argonaut",
                year: "2015",
                desc: "Stabilizer Column - PT Polytama Propindo Indonesia"
            },
            {
                id: 6,
                image: "{{ url('build/img/project_img/Collaborators/SGS-NORMAL.jpg') }}",
                name: "//Sallehuddin Power Station",
                year: "2015",
                desc: "Pressure Transmittal Vessel, Port Klang"
            },
            {
                id: 7,
                image: "{{ url('build/img/project_img/Collaborators/SGS-NORMAL.jpg') }}",
                name: "//Petra Fabricators Sdn Bhd",
                year: "2015",
                desc: "Thinning & Monomer Tank – Cray Valley Project"
            },
            {
                id: 8,
                image: "{{ url('build/img/project_img/Collaborators/SGS-NORMAL.jpg') }}",
                name: "//Petra Fabricators Sdn Bhd",
                year: "2015",
                desc: "Crude Oil Custody Transfer Metering Skid – Gaspian Sea FSO"
            },
            {
                id: 9,
                image: "{{ url('build/img/project_img/Collaborators/SGS-NORMAL.jpg') }}",
                name: "//JGC Corp",
                year: "2015",
                desc: "Gas Metering Skid – Thai Lube Oil Project"
            },
            {
                id: 10,
                image: "{{ url('build/img/project_img/Collaborators/SGS-NORMAL.jpg') }}",
                name: "//Bestwide Engineering Sdn Bhd",
                year: "2015",
                desc: "Chemical Injection Skid – EPMI Bunga Seroja Platform"
            },
            {
                id: 11,
                image: "{{ url('build/img/project_img/Collaborators/SGS-NORMAL.jpg') }}",
                name: "//Petrovietnam Technical Services Corporation (PTSC) Malaysia",
                year: "2015",
                desc: "Rental for 6 months storage yard at Balok Kuantan cw relevant facilities & maintenance services"
            },
            {
                id: 12,
                image: "{{ url('build/img/project_img/Collaborators/SGS-NORMAL.jpg') }}",
                name: "//ROSEN Inspection Asia Pacific S/B",
                year: "2015",
                desc: "Test Loop Assembly and Test Run Assistance"
            }
        ], elementsPerSubArray);

        console.log('Data matrix:', dataInspect);

        function renderTimeline(data, page = 1) {
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const itemsToRender = data.flat().slice(start, end);

            console.log('Rendering timeline with items:', itemsToRender); // Debugging line

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
                imgElement.style.width = '100%';
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

        // Recalculate elementsPerSubArray on screen resize
        window.addEventListener('resize', function() {
            elementsPerSubArray = getElementsPerSubArray();
            currentPage = 1; // Reset to first page
            currentData = listToMatrix(currentData.flat(), elementsPerSubArray); // Recreate the matrix
            timelineWrapper.innerHTML = ''; // Clear existing items
            renderTimeline(currentData); // Re-render the items
        });

        currentData = dataInspect;
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
            console.log('Matrix created:', matrix);
            return matrix;
        }
    });
</script>

@endsection