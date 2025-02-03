
    @extends('layout.layout')
        @section('content')
        <main>
            {{-- Slider --}}
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

            <section id="services" class="services section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                  <h2>Healthcare Departments</h2>
                  <p>Hospitals and healthcare institutions house various departments dedicated to diagnosing, treating, and managing specific medical conditions.</p>
                </div><!-- End Section Title -->
          
                <div class="container">
          
                  <div class="row gy-4">
          
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                      <div class="service-item  position-relative">
                        <div class="icon">
                          <i class="fa fa-heartbeat"></i>
                        </div>
                        <a href="#" class="stretched-link">
                          <h3>Cardiology</h3>
                        </a>
                        <p>Specializes in diagnosing and treating heart diseases, such as coronary artery disease, heart failure, and arrhythmias.</p>
                      </div>
                    </div><!-- End Service Item -->
          
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                      <div class="service-item position-relative">
                        <div class="icon">
                          <i class="fa fa-stethoscope"></i>
                        </div>
                        <a href="#" class="stretched-link">
                          <h3>Neurology</h3>
                        </a>
                        <p>Focuses on disorders related to the brain, spinal cord, and nervous system. </p>
                      </div>
                    </div><!-- End Service Item -->
          
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                      <div class="service-item position-relative">
                        <div class="icon">
                          <i class="fa fa-plus-square"></i>
                        </div>
                        <a href="#" class="stretched-link">
                          <h3>Orthopedics</h3>
                        </a>
                        <p>Deals with conditions involving bones, joints, ligaments, and muscles.</p>
                      </div>
                    </div><!-- End Service Item -->
          
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                      <div class="service-item position-relative">
                        <div class="icon">
                          <i class="fa fa-wheelchair"></i>
                        </div>
                        <a href="#" class="stretched-link">
                          <h3>Pediatrics</h3>
                        </a>
                        <p>Specializes in the health and medical care of infants, children, and adolescents.</p>
                        <a href="#" class="stretched-link"></a>
                      </div>
                    </div><!-- End Service Item -->
          
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                      <div class="service-item position-relative">
                        <div class="icon">
                          <i class="fa fa-female"></i>
                        </div>
                        <a href="#" class="stretched-link">
                          <h3>Obstetrics & Gynecology (OB-GYN)</h3>
                        </a>
                        <p>Handles reproductive health, pregnancy, and childbirth for women.</p>
                        <a href="#" class="stretched-link"></a>
                      </div>
                    </div><!-- End Service Item -->
          
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                      <div class="service-item position-relative">
                        <div class="icon">
                          <i class="fa fa-medkit"></i>
                        </div>
                        <a href="#" class="stretched-link">
                          <h3> Dermatology</h3>
                        </a>
                        <p>Focuses on skin, hair, and nail disorders.</p>
                        <a href="#" class="stretched-link"></a>
                      </div>
                    </div><!-- End Service Item -->
          
                  </div>
          
                </div>
          
              </section><!-- /Services Section -->        



                <!-- Gallery Section -->
    <section id="gallery" class="gallery section">
        
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Gallery</h2>
          <p>Images of advanced medical units, operation theaters, diagnostic centers, and recovery wards.</p>
        </div><!-- End Section Title -->
        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
  
          <div class="row g-0">
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-1.jpg" class="glightbox" data-gallery="images-gallery">
                  <img src="{{asset("images/gallery/gallery-1.jpg")}}" alt="" class="img-fluid">
                </a>
              </div>
            </div><!-- End Gallery Item -->
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-2.jpg" class="glightbox" data-gallery="images-gallery">
                  <img src="{{asset("images/gallery/gallery-2.jpg")}}" alt="" class="img-fluid">
                </a>
              </div>
            </div><!-- End Gallery Item -->
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-3.jpg" class="glightbox" data-gallery="images-gallery">
                  <img src="{{asset("images/gallery/gallery-3.jpg")}}" alt="" class="img-fluid">
                </a>
              </div>
            </div><!-- End Gallery Item -->
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-4.jpg" class="glightbox" data-gallery="images-gallery">
                  <img src="{{asset("images/gallery/gallery-4.jpg")}}" alt="" class="img-fluid">
                </a>
              </div>
            </div><!-- End Gallery Item -->
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-5.jpg" class="glightbox" data-gallery="images-gallery">
                  <img src="{{asset("images/gallery/gallery-5.jpg")}}" alt="" class="img-fluid">
                </a>
              </div>
            </div><!-- End Gallery Item -->
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-6.jpg" class="glightbox" data-gallery="images-gallery">
                  <img src="{{asset("images/gallery/gallery-6.jpg")}}" alt="" class="img-fluid">
                </a>
              </div>
            </div><!-- End Gallery Item -->
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-7.jpg" class="glightbox" data-gallery="images-gallery">
                  <img src="{{asset("images/gallery/gallery-7.jpg")}}" alt="" class="img-fluid">
                </a>
              </div>
            </div><!-- End Gallery Item -->
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-8.jpg" class="glightbox" data-gallery="images-gallery">
                  <img src="{{asset("images/gallery/gallery-8.jpg")}}" alt="" class="img-fluid">
                </a>
              </div>
            </div><!-- End Gallery Item -->
  
          </div>
  
        </div>
  
      </section>
      <!-- /Gallery Section -->
    
          <!-- Services Section -->
    
    </main>
 @endsection
        