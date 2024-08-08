<section class="navigation-section sticky-nav">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent nav-animation">
        <div class="container-fluid">
            <div class="nav-responsive">
                <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" class="xwatt-logo"
                        alt="brand-logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#NavbarToggleMenu" aria-controls="NavbarToggleMenu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="NavbarToggleMenu">
                <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}" @if(request()->routeIs('welcome')) data-section="about-us" @endif>About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}" @if(request()->routeIs('welcome')) data-section="product" @endif>Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}" @if(request()->routeIs('welcome')) data-section="download" @endif>Download</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="dropbtn">Request
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="{{ route('warranty') }}">Warranty Request</a>
                                <a href="{{ route('service') }}" target="_top">Service Request</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}" @if(request()->routeIs('welcome')) data-section="gallery" @endif>Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}" @if(request()->routeIs('welcome')) data-section="testimonial" @endif>Testimonial</a>
                    </li>
                    
                </ul>
                <button type="button" class="btn btn-primary contact-btn-animation">Contact us</button>
            </div>
        </div>
    </nav>
</section>


