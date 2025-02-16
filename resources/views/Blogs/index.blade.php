@extends('layout.layout')

@section('content')
<section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Recent Articles</h2>
        
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div>
              {{-- <i class="fa fa-heartbeat"></i> --}}
              <img src="https://www.uclahealth.org/sites/default/files/styles/landscape_3x2_016000_640x427/public/images/bf/stroke-graphic-istock-1345643700.jpg?f=c137313b&itok=xEiUuxR0" alt="" class="w-100 h-100 p-0">
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
@endsection