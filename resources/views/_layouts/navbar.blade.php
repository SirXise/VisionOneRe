<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-navbar navbar-dark py-lg-0 px-lg-5" data-wow-delay="0.1s">
    <a href="/" class="navbar-brand ms-4 ms-lg-0">
        <img src="{{ url('build/img/company_logo/VO-04.png') }}" alt="Vision One Logo" />
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0 text-center">
            <a href="{{ route('home') }}" class="navbarcustomfont nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="navbarcustomfont nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('service') }}" class="navbarcustomfont nav-item nav-link {{ request()->routeIs('service') ? 'active' : '' }}">Service</a>
            <a href="{{ route('project') }}" class="navbarcustomfont nav-item nav-link {{ request()->routeIs('project') ? 'active' : '' }}">Project</a>
            <a href="{{ route('contact') }}" class="navbarcustomfont nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->