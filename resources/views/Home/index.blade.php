
    @extends('layout.layout')
        @section('content')
        <main>
            <div class="container-fluid bg-primary-subtle" >
                <div id="carouselExampleDark" class="carousel carousel-dark slide small-carousel" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="assets/sider1.jpg" class="d-block w-100" alt="..." style="opacity: 0.4;">
                            <div class="carousel-caption d-none d-md-block position-absolute text-start slider-position"  style="top: 40%;left:20%;">
                                <h1>Empowering Better Health for Everyone</h1>
                                <p class="fs-5">Dedicated to delivering compassionate care and personalized health solutions for a better tomorrow.</p>
                                <button
                                    type="button"
                                    class="btn btn-primary fs-5 " 
                                style="width: 200px">
                                Better Health
                                </button>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="assets/slider2.jpg" class="d-block w-100" alt="..." style="opacity: 0.4;">
                            <div class="carousel-caption d-none d-md-block  position-absolute text-start " style="top: 40%;left:20%;">
                                <h1>Modern Healthcare Solutions</h1>
                                <p class="fs-5">Revolutionizing healthcare with cutting-edge technology, innovative treatments, and a commitment to excellence in patient care.
                                    </p>
                                <button
                                type="button"
                                class="btn btn-primary fs-5 " 
                            style="width: 200px; ">
                            Solutions
                            </button>
                                
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/slider3.jpg" class="d-block w-100" alt="..." style="opacity: 0.4;">
                            <div class="carousel-caption d-none d-md-block  position-absolute text-start " style="top: 40%;left:20%;">
                                <h1> Your Health, Our Priority</h1>
                                <p class="fs-5">    Experience exceptional healthcare services delivered by compassionate professionals dedicated to your well-being and a healthier future.
                                </p>
                                <button
                                type="button"
                                class="btn btn-primary fs-5 " 
                            style="width: 200px; ">
                            Our Priority
                            </button>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            

        </main>
        @endsection
        