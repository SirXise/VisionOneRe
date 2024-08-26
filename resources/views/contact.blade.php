@extends('_layouts.main')

@section('title', 'Contact Us')

@section('css')
<link href="{{ asset('build/css/contactstyle.css') }}" rel="stylesheet">
@endsection

@section('body')
<img src="{{ url('build/img/contact/contactBGG.jpg') }}" alt="Service Background Image" class="full-page-background">

<!-- Contact Start -->
<section class="contact-us-section">
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="bg-secondary col-lg-8">
                <div class="row">
                    <div class=" col-lg-2">
                    </div>
                    <div class="col-lg-9">
                        <div class="p-5">
                            <h1 class="mb-4">Let's Connect</h1>
                            <p class="mb-4" style="font-size: 20px;">Got any Question? Please Contact Us!</p>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-transparent" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-transparent" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control bg-transparent" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                    <div class="col-5">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-1">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-start align-items-center" style="padding-left: 30px;">
                <div class="contact-info">
                    <div class="p-3 info-item">
                        <div class="icon-circle">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h5>Contact</h5>
                            <p>Tel: +603 7733 2858<br />Fax: +603 7722 3858</p>
                        </div>
                    </div>
                    <div class="p-3 info-item">
                        <div class="icon-circle">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h5>Email</h5>
                            <p>
                                <strong>Management, Legal and Compliance</strong><br />faiz@visionone.com.my<br />
                                <strong>Technical and Business Development</strong><br />ckhoo@visionone.com.my
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> -->
</section>

<section class="contact" id="contact" style="margin-top: 50px;">
    <div class="container">

        <div class="contact-box-container">
            <div class="contact-grid">
                <div class="contact-form">
                    <h2 class="text-uppercase" style="text-align: center; margin-bottom:30px;">E-mail to Us</h2>
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                    <form action="{{ route('post-message') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                    <label for="email">Your e-mail</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 120px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-block" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="contact-info">
                    <div class="flex-container">
                        <!-- Left Column -->
                        <div class="left-column">
                            <!-- Info-1 -->
                            <div class="info info-reach">
                                <i class="fas fa-mobile-alt"></i>
                                <h4 class="d-inline-block">TELEFAX :<br><span>Tel: +603 7733 2858<br>Fax: +603 7722 3858</span></h4>
                            </div>
                            <!-- Info-2 -->
                            <div class="info info-email">
                                <i class="far fa-envelope"></i>
                                <h4 class="d-inline-block">E-MAIL :<br><strong>Management, Legal and Compliance</strong><br><span>faiz@visionone.com.my</span><br><strong>Technical and Business Development</strong><br><span>ckhoo@visionone.com.my</span></h4>
                            </div>
                        </div>
                        <!-- Right Column -->
                        <div class="right-column">
                            <!-- Info-3 -->
                            <div class="info info-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <h4 class="d-inline-block"><strong>HEADQUARTERS</strong><br><span>8-1, Jalan PJU 7/16 <br>Mutiara Damansara<br>47800 Petaling Jaya<br>Selangor Darul Ehsan<br>MALAYSIA</span></h4>
                            </div>
                            <div class="info info-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <h4 class="d-inline-block"><strong>YARD</strong><br><span>OYP 2108, Phase II <br>Kemaman Supply Base (KSB)<br> Teluk Kalong<br>24007 Kemaman<br>Terengganu Darul Iman<br>MALAYSIA</span></h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="heading text-center" style="margin-top: 40px;">
                <h2>Find Your Way to <span>Our Office</span></h2>
                <p>Navigate easily using Google Maps!</p>
                <div class="map-container-contact">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.754948269409!2d101.5982938409907!3d3.1591714449327806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4fd9fec08e19%3A0x50a0cc95bef0540a!2sVision%20One%20Sdn%20Bhd!5e0!3m2!1sen!2smy!4v1700389253422!5m2!1sen!2smy" width="100%" height="450" style="border: 0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Contact End -->

<!-- Location Section -->
<!-- <section class="location-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 d-flex flex-column" style="height: 50vh;">
                <div class="map-container" style="flex: 1; position: relative;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.754948269409!2d101.5982938409907!3d3.1591714449327806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4fd9fec08e19%3A0x50a0cc95bef0540a!2sVision%20One%20Sdn%20Bhd!5e0!3m2!1sen!2smy!4v1700389253422!5m2!1sen!2smy" width="100%" height="100%" style="border: 0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Location Section End -->
@endsection