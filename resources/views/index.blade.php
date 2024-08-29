@extends('_layouts.main')

@section('title', 'Home')

@section('css')
<link href="{{ asset('build/css/main_style.css') }}" rel="stylesheet">
@endsection

@section('body')
<div class="hero">
    <video autoplay loop muted plays-inline class="back-video">
        <source src="{{ url('build/img/index_img/web_landing.mp4') }}" type="video/mp4">
    </video>
    <div class="overlay-gradient"></div>
    <div class="text-overlay">
        <div class="header-content-container">
            <h1>Commanding the <span class="highlight">Energy Sector</span> Through the <br>Seamless of <span class="highlight">Advanced Technology</span> and <span class="highlight">Innovative Solutions</span></h1>
            <img src="{{ url('build/img/index_img/icon/jubilee no bg.png') }}" id="jubileeIcon" alt="Jubilee Icon" class="jubilee-icon">
        </div>
    </div>
</div>

<section class="title-container">
    <section class="title-content-green" style="text-align: center;">
        <h2 style="color: #ffffff;margin: 0;">Vision One Sdn. Bhd.</h2>
    </section>
</section>

<section class="content">
    <p style="text-align: center; margin-bottom:2%;">A cornerstone of the <span class="highlight">Oil and Gas Industry</span> since <span class="highlight">1997</span></p>
    <div class="custom-container">

        <div class="custom-row">
            <div class="custom-column">
                <h3>Speciality Expertise</h3>
                <ul>
                    <li><i class="bi bi-tools"></i> Tailored Technical Solutions</li>
                    <li><i class="bi bi-search"></i> Advanced Inspection and Nondestructive Testing</li>
                    <li><i class="bi bi-wrench"></i> Comprehensive Maintenance and Repair</li>
                </ul>
            </div>

            <div class="custom-column">
                <h3>Strategic Collaborations</h3>
                <ul>
                    <li><i class="bi bi-people"></i> Partnerships with Leading Firms</li>
                    <li><i class="bi bi-bar-chart"></i> Efficient Project Execution</li>
                    <li><i class="bi bi-star"></i> Innovation and Excellence</li>
                </ul>
            </div>

            <div class="custom-column">
                <h3>Commitment to Excellence</h3>
                <ul>
                    <li><i class="bi bi-shield-check"></i> Unwavering Focus on Safety</li>
                    <li><i class="bi bi-globe"></i> Global Standards Compliance</li>
                    <li><i class="bi bi-award"></i> Certified Expertise</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="waves-container">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use class="wave wave1" xlink:href="#gentle-wave" x="150" y="0" fill="rgba(6, 119, 141, 0.7)" />
                <use class="wave wave2" xlink:href="#gentle-wave" x="50" y="5" fill="rgba(6, 119, 141, 0.5)" />
                <use class="wave wave3" xlink:href="#gentle-wave" x="120" y="3" fill="rgba(6, 119, 141, 0.3)" />
                <use class="wave wave4" xlink:href="#gentle-wave" x="90" y="7" fill="#06768D" />
            </g>
        </svg>
    </div>








</section>



<section class="button-container">
    <div class="button-wrapper">

        <button class="icon-button" data-hover-icon="{{ url('build/img/index_img/icon/inspection_icon.png') }}" data-href="{{ url('project') }}">
            <img src="{{ url('build/img/index_img/icon/Inspection_button.png') }}" alt="Inspection Icon">
            <span>Inspection</span>
        </button>
        <button class="icon-button" data-hover-icon="{{ url('build/img/index_img/icon/maintenance_icon.png') }}" data-href="{{ url('project') }}">
            <img src="{{ url('build/img/index_img/icon/maintenance_button.png') }}" alt="Maintenance Icon">
            <span>Maintenance</span>
        </button>
        <button class="icon-button" data-hover-icon="{{ url('build/img/index_img/icon/repair_icon.png') }}" data-href="{{ url('project') }}">
            <img src="{{ url('build/img/index_img/icon/repair_button.png') }}" alt="Repair Icon">
            <span>Repair</span>
        </button>
        <button class="icon-button" data-hover-icon="{{ url('build/img/index_img/icon/project_icon.png') }}" data-href="{{ url('project') }}">
            <img src="{{ url('build/img/index_img/icon/special_project.png') }}" alt="Special Project Icon">
            <span>Special Project</span>
        </button>
    </div>
</section>


<section class="whats-on">
    <div class="card-container">
        <div class="left-fade"></div>
        <button class="scroll-btn left" onclick="scrollCards('left')">
            <i class="bi bi-chevron-left"></i>
        </button>
        <div class="cards-wrapper">
            <!-- Card 1 -->
            <div class="card" onclick="openPopup('popup1')">
                <div class="card-image">
                    <img src="{{ url('build/img/index_img/our_mission_card.jpg') }}" alt="Mission Image" class="card-image" style="object-fit: cover;">
                </div>
                <img src="{{ url('build/img/index_img/icon/MissionIcon.png') }}" class="card-icon" alt="Mission Icon" width="40" height="40">
                <div class="text-container">
                    <div class="text-content">
                        <div class="card-header-head">Our Mission</div>
                        <div class="card-content">
                            <p class="hover-text">Focused on Customer Values and Service Excellence</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Popup for Card 1 -->
            <div id="popup1" class="popup-container">
                <div class="popup-content">
                    <span class="popup-close" onclick="closePopup('popup1')">&times;</span>
                    <div class="popup-image">
                        <img src="{{ url('build/img/index_img/our_mission_card.jpg') }}" alt="Popup Image" class="popup-image-img">
                    </div>
                    <div class="popup-bottom-gradient"></div>
                    <div class="popup-text-content">
                        <img src="{{ url('build/img/index_img/icon/MissionIcon.png') }}" alt="Popup Icon" class="popup-icon">
                        <div class="popup-header">Our Mission</div>
                        <div class="popup-p">
                            Dedicated to the noble mission of championing the core values of customer dedication, unparalleled service proficiency, and unwavering commitment to safety, we meticulously craft our endeavours with precision.
                        </div>
                        <div class="popup-view-more">
                            <a href="/about" class="view-more-link">View More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Repeat similarly for other cards and popups -->
            <!-- Card 2 -->
            <div class="card" onclick="openPopup('popup2')">
                <div class="card-image">
                    <img src="{{ url('build/img/index_img/solutions_provider_card.jpg') }}" alt="Solution Provider Image" class="card-image" style="object-fit: cover;">
                </div>
                <img src="{{ url('build/img/index_img/icon/SolutionProviderIcon.png') }}" class="card-icon" alt="Solution Provider Icon" width="40" height="40">
                <div class="text-container">
                    <div class="text-content">
                        <div class="card-header-head">Solutions Provider</div>
                        <div class="card-content">
                            <p class="hover-text">Specialized Support for Energy Industries</p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Popup for Card 2 -->
            <div id="popup2" class="popup-container">
                <div class="popup-content">
                    <span class="popup-close" onclick="closePopup('popup2')">&times;</span>
                    <div class="popup-image">
                        <img src="{{ url('build/img/index_img/solutions_provider_card.jpg') }}" alt="Popup Image" class="popup-image-img">
                    </div>
                    <div class="popup-bottom-gradient"></div>
                    <div class="popup-text-content">
                        <img src="{{ url('build/img/index_img/icon/SolutionProviderIcon.png') }}" alt="Popup Icon" class="popup-icon">
                        <div class="popup-header">Solutions Provider</div>
                        <div class="popup-p">
                            At the forefront of the energy sector, our company stands as a premier solution provider, leveraging our extensive expertise in inspection, maintenance, and repair services. With a team comprising seasoned professionals adept in these specialized areas, we excel in delivering tailored solutions to meet the diverse needs of both local and international clients. Our commitment to excellence drives us to continuously refine our methodologies and embrace innovative technologies, ensuring that we remain at the forefront of industry standards. Whether it's optimizing operational efficiency, enhancing safety protocols, or prolonging asset lifespan, our comprehensive approach is designed to exceed expectations and foster enduring partnerships in the ever-evolving energy landscape.
                        </div>
                        <div class="popup-view-more">
                            <a href="/project" class="view-more-link">View More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card" onclick="openPopup('popup3')">
                <div class="card-image">
                    <img src="{{ url('build/img/index_img/service_card.jpg') }}" alt="Services Image" class="card-image" style="object-fit: cover;">
                </div>
                <img src="{{ url('build/img/index_img/icon/ServicesIcon.png') }}" class="card-icon" alt="Services Icon" width="40" height="40">
                <div class="text-container">
                    <div class="text-content">
                        <div class="card-header-head">Services</div>
                        <div class="card-content">
                            <p class="hover-text">Expert services for diverse industries with unmatched quality.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Popup for Card 3 -->
            <div id="popup3" class="popup-container">
                <div class="popup-content">
                    <span class="popup-close" onclick="closePopup('popup3')">&times;</span>
                    <div class="popup-image">
                        <img src="{{ url('build/img/index_img/service_card.jpg') }}" alt="Popup Image" class="popup-image-img">
                    </div>
                    <div class="popup-bottom-gradient"></div>
                    <div class="popup-text-content">
                        <img src="{{ url('build/img/index_img/icon/ServicesIcon.png') }}" alt="Popup Icon" class="popup-icon">
                        <div class="popup-header">Services</div>
                        <div class="popup-p">
                            At Vision One Sdn. Bhd., we specialize in delivering top-tier solutions tailored to the needs of EPCC contractors, offshore fabricators, and process package specialists. Our expertise spans the oil and gas, petrochemical, and other diverse sectors, both domestically and internationally. We are committed to providing exceptional quality and innovation, ensuring the highest standards in every project we undertake.
                        </div>
                        <div class="popup-view-more">
                            <a href="/service" class="view-more-link">View More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="card" onclick="openPopup('popup4')">
                <div class="card-image">
                    <img src="{{ url('build/img/index_img/partnership_card.jpg') }}" alt="Partnership Image" class="card-image" style="object-fit: cover;">
                </div>
                <img src="{{ url('build/img/index_img/icon/PartnershipIcon.png') }}" class="card-icon" alt="Partnership Icon" width="40" height="40">
                <div class="text-container">
                    <div class="text-content">
                        <div class="card-header-head">Partnership</div>
                        <div class="card-content">
                            <p class="hover-text">Building trusted partnerships for exceptional industry service.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Popup for Card 4 -->
            <div id="popup4" class="popup-container">
                <div class="popup-content">
                    <span class="popup-close" onclick="closePopup('popup4')">&times;</span>
                    <div class="popup-image">
                        <img src="{{ url('build/img/index_img/partnership_card.jpg') }}" alt="Popup Image" class="popup-image-img">
                    </div>
                    <div class="popup-bottom-gradient"></div>
                    <div class="popup-text-content">
                        <img src="{{ url('build/img/index_img/icon/PartnershipIcon.png') }}" alt="Popup Icon" class="popup-icon">
                        <div class="popup-header">Partnership</div>
                        <div class="popup-p">
                            At Vision One Sdn. Bhd., we cultivate strong partnerships to deliver tailored solutions and exceptional service across various industries. Our collaborative approach ensures that we meet and exceed client expectations while driving mutual success and growth.
                        </div>
                        <div class="popup-view-more">
                            <a href="/about" class="view-more-link">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-fade"></div>
        <button class="scroll-btn right" onclick="scrollCards('right')">
            <i class="bi bi-chevron-right"></i>
        </button>
    </div>
</section>


<section class="title-content-green" style="text-align: center;">
    <h2 style="color: #ffffff; margin: 0;">Why Vision One?</h2>
</section>


<section class="why-vision-one">
    <div class="icon-text-item">
        <img src="{{ url('build/img/index_img/icon/team_icon.png') }}" alt="Team Icon">
        <div class="text-container">
            <p><span class="highlight">Dynamic and diverse team</span> in engineering and management</p>
        </div>
    </div>
    <div class="icon-text-item">
        <img src="{{ url('build/img/index_img/icon/energy_icon.png') }}" alt="Energy Icon">
        <div class="text-container">
            <p>We aim to <span class="highlight">advance significantly</span> within the <span class="highlight">global energy sector</span></p>
        </div>
    </div>
    <div class="icon-text-item">
        <img src="{{ url('build/img/index_img/icon/safety_icon.png') }}" alt="Safety Icon">
        <div class="text-container">
            <p><span class="highlight">Safety</span> is a cornerstone of our operations, prioritized at every step</p>
        </div>
    </div>
    <div class="icon-text-item">
        <img src="{{ url('build/img/index_img/icon/integrity_icon.png') }}" alt="Integrity Icon">
        <div class="text-container">
            <p>Solidifying our reputation as a dependable contractor known for <span class="highlight">integrity</span></p>
        </div>
    </div>
</section>

<section class="title-content" style="text-align: center;">
    <h2 style="color: #06768D; font-size: 25px;">Our Esteemed Clients</h2>
</section>

<section class="client-carousel">
    <div class="container-xxl" style="width: 90%;">
        <div class="wrapper">
            <div class="collaborators-container px-4 py-2">
                <div class="collaborators-list">
                    <div class="collaborators-group" id="collaborators-group">
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/PETRONAS.png') }}" alt="Image">
                        </a>
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/PETRONAS PENAPISAN MELAKA.png') }}" alt="Image">
                        </a>
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/PETRONAS GAS BERHAD.png') }}" alt="Image">
                        </a>
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/ROSEN INSPECTION ASIA PACIFIC SB.png') }}" alt="Image">
                        </a>
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/ALAM HIDRO (M) SDN BHD.png') }}" alt="Image">
                        </a>
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/ARISE.png') }}" alt="Image">
                        </a>
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/FPSO VENTURES.png') }}" alt="Image">
                        </a>
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/HIBISCUS PETROLEUM.png') }}" alt="Image">
                        </a>
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/HUNTSMAN TIOXIDE.png') }}" alt="Image">
                        </a>
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/IME SDN BHD.png') }}" alt="Image">
                        </a>
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/INTISARI MULIA ENGINEERING SDN BHD.jpg') }}" alt="Image">
                        </a>
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/LOTTE CHEMICAL TITANS.png') }}" alt="Image">
                        </a>
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/MURPHY OIL.png') }}" alt="Image">
                        </a>
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/NDE CONSULTANCY SERVICES SDN BHD.png') }}" alt="Image">
                        </a>
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/OCEANCARE SDN BHD.png') }}" alt="Image">
                        </a>
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/SGS MALAYSIA.png') }}" alt="Image">
                        </a>
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/VELOSI APPLUS.png') }}" alt="Image">
                        </a>
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/VELOSI.png') }}" alt="Image">
                        </a>
                        <!-- duplicate -->
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/PETRONAS.png') }}" alt="Image">
                        </a>
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/PETRONAS PENAPISAN MELAKA.png') }}" alt="Image">
                        </a>
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/PETRONAS GAS BERHAD.png') }}" alt="Image">
                        </a>
                        <a>
                            <img class="collaborator-image" src="{{ url('build/img/clientsNoBg/ROSEN INSPECTION ASIA PACIFIC SB.png') }}" alt="Image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

    function openPopup(popupId) {
        const popup = document.getElementById(popupId);
        popup.style.display = 'flex';
        popup.classList.remove('hide');
        popup.classList.add('show');
    }

    function closePopup(popupId) {
        const popup = document.getElementById(popupId);
        popup.classList.remove('show');
        popup.classList.add('hide');

        // Ensure the popup is hidden after animation ends
        popup.addEventListener('animationend', () => {
            popup.classList.remove('hide');
            popup.style.display = 'none';
        }, {
            once: true
        });
    }

    window.addEventListener('click', function(event) {
        const popups = document.querySelectorAll('.popup-container');
        popups.forEach(popup => {
            if (event.target === popup) {
                closePopup(popup.id);
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        function animateWave(selector, speed) {
            const wave = document.querySelector(selector);
            let offset = 0;
            let direction = -speed; // Use the provided speed

            function animate() {
                offset += direction; // Move in the current direction

                if (offset <= -100) { // Adjust based on the wave's width
                    direction = speed; // Change direction to right
                } else if (offset >= 0) { // Reached the right end
                    direction = -speed; // Change direction to left
                }

                wave.style.transform = `translateX(${offset}%)`;
                requestAnimationFrame(animate);
            }

            animate(); // Start the animation
        }

        // Initialize each wave with different speeds
        animateWave('.wave1', 0.02); // Slowest speed
        animateWave('.wave2', 0.05); // Slightly faster
        animateWave('.wave3', 0.08); // Faster
        animateWave('.wave4', 0.12); // Fastest
    });

    const icon = document.getElementById('jubileeIcon');
    const amplitude = 6; // Change this to adjust floating height
    const period = 3000; // Animation period in milliseconds
    const interval = 20; // Interval for updating position in milliseconds

    let start = Date.now();

    function animate() {
        const elapsed = Date.now() - start;
        const progress = elapsed % period;
        const floatAmount = Math.sin((progress / period) * 2 * Math.PI) * amplitude;
        icon.style.transform = `translateY(${floatAmount}px)`;

        // Repeat the animation at regular intervals
        setTimeout(animate, interval);
    }

    animate(); // Start the animation

    document.querySelectorAll('.icon-button').forEach(button => {
        button.addEventListener('click', function() {
            window.location.href = this.getAttribute('data-href');
        });
    });
</script>

<script>
    const collaboratorsGroup = document.getElementById('collaborators-group');

    function scrollAnimation() {
        const animationDuration = 40000; // 40 seconds
        const translateDistance = -83.115; // 75% to the left

        collaboratorsGroup.style.transition = `transform ${animationDuration}ms linear`;
        collaboratorsGroup.style.transform = `translateX(${translateDistance}%)`;

        function resetAnimation() {
            collaboratorsGroup.style.transition = '';
            collaboratorsGroup.style.transform = 'translateX(0)';
            requestAnimationFrame(() => {
                collaboratorsGroup.offsetHeight; // Trigger a reflow
                scrollAnimation();
            });
        }

        // Reset the animation when it ends
        collaboratorsGroup.addEventListener('transitionend', resetAnimation);

        setTimeout(resetAnimation, animationDuration);
    }

    scrollAnimation();
</script>


@endsection