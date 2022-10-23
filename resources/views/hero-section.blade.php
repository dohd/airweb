<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
                <h1>Airweb Refrigeration</h1>
                <h1>Best for your business</h1>
                <h2>
                    We specialize in Air Conditioning, Refrigeration, Mechanical Ventilation, Electrical, Plumbing,
                    & General Construction.
                </h2>

                <div>
                    <h2 class="text-white d-inline-block mr-3">Call Now!</h2>
                    <h2 class="text-white d-inline-block  border rounded p-1">+254 722-144-088</h2>
                </div>
                
                {{-- <div class="d-flex justify-content-between justify-content-lg-start">
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                </div> --}}
            </div>
            {{-- <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset('img/hero.png') }}" class="img-fluid animated" alt="">
            </div> --}}
            <div class="col-lg-6 order-1 order-lg-2 hero-slider">
                @include('main.carousel')
            </div>
        </div>
    </div>
</section>