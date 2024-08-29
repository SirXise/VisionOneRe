@extends('_layouts.main')

@section('title', 'About')

@section('css')
<link href="{{ asset('build/css/about_style.css') }}" rel="stylesheet">
@endsection

@section('body')
<div class="hero">
    <img src="{{ url('build/img/about_img/ocean_hero.png') }}" alt="Service Background Image" class="back-image">
    <div class="overlay-gradient"></div>
    <div class="text-overlay">
        <h2><span class="highlight">Empowering</span> Your Industry Journey</h2>
        <p>Join us on a journey to revolutionize the energy sector through our commitment to cutting-edge solutions, environmental stewardship, and unwavering dedication to excellence.</p>
    </div>
    <div class="oil-rig-wrapper2">
        <img src="{{ url('build/img/about_img/oil_platform.png') }}" alt="Oil Platform" class="oil-rig-image2">
    </div>
    <!-- <div class="oil-rig-wrapper">
    <img src="{{ url('assets/build/img/about/oil platform no bg.png') }}" alt="Oil Platform" class="oil-rig-image">
</div> -->
</div>

<section class="white-section">
    <div class="grid-container">
        <div class="image-container">
            <video autoplay loop muted plays-inline class="back-video">
                <source src="{{ url('build/img/about_img/about_video.mp4') }}" type="video/mp4">
            </video>
            <div class="offsetbox"></div>
        </div>
        <div class="content-container">
            <div class="title-offset">
                <span class="background-text">Our Story</span>
                <h2 class="foreground-text">Our Story</h2>
            </div>
            <p class="paragraph">
                Vision One is a prominent player in the oil and gas industry, delivering tailored technical solutions, advanced inspection, non-destructive testing, and comprehensive maintenance and repair services with a steadfast focus on safety since the year of 1997.
                <br><br> Our operations adhere rigorously to stringent global industry standards, ensuring not only top-tier quality and integrity but also paramount safety measures.
            </p>
            <div class="items-grid">
                <div class="grid-item">
                    <div class="item-icon">
                        <img src="{{ url('build/img/about_img/icon/endorsed.png') }}" alt="Icon 1">
                    </div>
                    <div class="item-text">Endorsed by esteemed national and international bodies.</div>
                </div>
                <div class="grid-item">
                    <div class="item-icon">
                        <img src="{{ url('build/img/about_img/icon/collaboration.png') }}" alt="Icon 2">
                    </div>
                    <div class="item-text">Strategic collaborations with affiliated firms.</div>
                </div>
                <div class="grid-item">
                    <div class="item-icon">
                        <img src="{{ url('build/img/about_img/icon/efficiency.png') }}" alt="Icon 3">
                    </div>
                    <div class="item-text">Executing projects with the highest level of safety and efficiency.</div>
                </div>
                <div class="grid-item">
                    <div class="item-icon">
                        <img src="{{ url('build/img/about_img/icon/certified.png') }}" alt="Icon 4">
                    </div>
                    <div class="item-text">Team comprises seasoned experts certified in their respective fields.</div>
                </div>
                <div class="grid-item">
                    <div class="item-icon">
                        <img src="{{ url('build/img/about_img/icon/benchmark.png') }}" alt="Icon 5">
                    </div>
                    <div class="item-text">Surpassing client expectations and setting new benchmarks in service excellence.</div>
                </div>
                <div class="grid-item">
                    <div class="item-icon">
                        <img src="{{ url('build/img/about_img/icon/safety.png') }}" alt="Icon 6">
                    </div>
                    <div class="item-text">Prioritizing safety protocols at every stage.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="white-section" style="background-color: #d4dfe0; padding-bottom:0;">
<div class="title-offset">
                <span class="background-text">Company Ethos</span>
                <h2 class="foreground-text">Company Ethos</h2>
            </div>

            <p class="paragraph" style="margin-bottom: 20px;">
                At Vision One Sdn. Bhd., we are committed to excellence and innovation in everything we do. Our focus is on delivering top-notch service, prioritizing safety, and always putting our customers first. We aim to provide outstanding solutions through careful planning and dedication.
            </p>
    <div class="grid-container2">
        <div class="content-container">
            

            <div class="vision-content">
                <div class="vision-item">
                    <div class="icon-title-container">
                        <img src="{{ url('build/img/about_img/icon/vision.png') }}" alt="vision" class="title-icon">
                        <div class="title-offset">
                            <span class="background-text">Vision</span>
                            <h2 class="foreground-text">Vision</h2>
                        </div>
                    </div>
                    <p>Dedicated to the noble mission of championing the core values of customer dedication, unparalleled service proficiency, and unwavering commitment to safety, we meticulously craft our endeavours with precision.</p>
                </div>
                <div class="vision-item">
                    <div class="icon-title-container">
                        <img src="{{ url('build/img/about_img/icon/mission.png') }}" alt="vision" class="title-icon">
                        <div class="title-offset">
                            <span class="background-text">Mission</span>
                            <h2 class="foreground-text">Mission</h2>
                        </div>
                    </div>
                    <p>To emerge as the frontrunner, Vision One Sdn. Bhd. aims to pioneer the convergence of traditional and groundbreaking solutions, with an unwavering commitment to safety.<br> <br>Our vision is to ascend as the premier national and global provider of technical solutions, inspection, nondestructive testing, maintenance, and repair services, ensuring paramount safety measures while catering to esteemed clientele in the energy, power, and petrochemical sectors.</p>
                </div>
            </div>

        </div>
        <div class="image-container">
        <img src="{{ url('build/img/about_img/ethos.png') }}" alt="vision" class="title-icon">
        </div>
    </div>
</section>

<section class="white-section">
    <div class="title-offset" style="margin-bottom:20px;">
        <span class="background-text">Certifications</span>
        <h2 class="foreground-text">Certifications</h2>
    </div>
    <p class="paragraph" style="margin-bottom: 30px;">
        We take pride in our industry-leading certifications, which reflect our commitment to excellence and adherence to international standards. Explore the certifications that showcase our dedication to quality and safety.
    </p>

    <div class="certifications-container">
    <div class="certification-card">
            <img src="{{ url('build/img/about_img/PETRONASLogo.png') }}" alt="Petronas" class="certification-image">
            <div class="certification-info">
                <h3 class="certification-title">Petronas Standardized Work & Equipment Categories (SWEC)</h3>
            </div>
        </div>
        <div class="certification-card">
            <img src="{{ url('build/img/about_img/MOF_Final.png') }}" alt="MOF" class="certification-image">
            <div class="certification-info">
                <h3 class="certification-title">Ministry of Finance (MoF)</h3>
            </div>
        </div>
        <div class="certification-card">
            <img src="{{ url('build/img/about_img/CIDB.png') }}" alt="AELB" class="certification-image">
            <div class="certification-info">
                <h3 class="certification-title" style="margin-top: 60px;">CIDB (G7)</h3>
            </div>
        </div>
        <div class="certification-card">
            <img src="{{ url('build/img/about_img/ISO9001.png') }}" alt="ISO" class="certification-image">
            <div class="certification-info">
                <h3 class="certification-title">ISO 9001:2015 Quality Management System (QMS)</h3>
            </div>
        </div>
        <div class="certification-card">
            <img src="{{ url('build/img/about_img/iso.jpeg') }}" alt="ISO" class="certification-image">
            <div class="certification-info">
                <h3 class="certification-title">ISO 45001:2018 Occupational Health and Safety Management System (OH&S)</h3>
            </div>
        </div>
        <div class="certification-card">
            <img src="{{ url('build/img/about_img/aelb.png') }}" alt="AELB" class="certification-image">
            <div class="certification-info">
                <h3 class="certification-title">Atomic Energy Licencing Board (AELB)</h3>
            </div>
        </div>
        

    </div>

</section>
<!-- <section class="white-section">
    <div class="ending-image">
        <div class="overlay-content">
            <h2>Want To Join Us?</h2>
            <p>If you’re looking for a career with a purpose, we’d love to hear from you.</p>
            <a href="{{ url('contact') }}" class="cta-button">Get In Touch</a>
        </div>
        <img src="{{ url('assets/build/img/about/interested.jpg') }}" alt="ending">
        <div class="overlay-gradient"></div>
    </div>
</section> -->


<!-- <script>
    function applyAlternatingWaveEffect(element, index) {
        const amplitude = 5; // Amplitude of the wave effect (height in pixels)
        const period = 6000; // Duration of one complete wave cycle (in milliseconds)
        const offset = Math.PI * 2 * index / 4; // Different phase shift for alternating effect

        let start = null;

        function animate(timestamp) {
            if (!start) start = timestamp;
            const elapsed = timestamp - start;
            const progress = (elapsed % period) / period;
            const wave = amplitude * Math.sin(progress * 2 * Math.PI + offset);
            element.style.transform = `translateY(${wave}px)`;
            requestAnimationFrame(animate);
        }

        requestAnimationFrame(animate);
    }

    document.querySelectorAll('.certification-card').forEach((card, index) => {
        applyAlternatingWaveEffect(card, index);
    });
</script> -->


@endsection