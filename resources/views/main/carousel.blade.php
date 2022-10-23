
<div id="mycarousel" class="carousel slide" data-bs-ride="carousel">
    {{-- Indicators --}}
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="3"></button>
    </div>

    {{-- Wrapper for Slides --}}
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/duct-work.jpeg') }}" alt="" class="d-block w-100" height="350">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/electrical-work.jpg') }}" alt="" class="d-block w-100" height="350">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/plumbing-work.jpeg') }}" alt="" class="d-block w-100" height="350">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/raised-floor.jpeg') }}" alt="" class="d-block w-100" height="350">
        </div>
    </div>

    {{-- Left and Right Controls --}}
    <a href="#mycarousel" class="carousel-control-prev" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a href="#mycarousel" class="carousel-control-next" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>
