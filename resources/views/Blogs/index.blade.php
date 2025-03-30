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
            <div>
              {{-- <i class="fa fa-heartbeat"></i> --}}
              <img src="https://www.eternalhospital.com/sanganer/uploadedfiles/gallery/1708499612Department-Neurology.jpg" alt="" class="p-0" width="350" height="250">
            </div>
            <a href="#" class="stretched-link">
              <h3>Neurology</h3>
            </a>
            <p>Focuses on disorders related to the brain, spinal cord, and nervous system. </p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div>
              {{-- <i class="fa fa-heartbeat"></i> --}}
              <img src="https://www.chaudharyhospital.in/wp-content/uploads/2020/05/Orthopedics-1-1.png" alt="" class="p-0" width="350" height="250">
            </div>
            <a href="#" class="stretched-link">
              <h3>Orthopedics</h3>
            </a>
            <p>Deals with conditions involving bones, joints, ligaments, and muscles.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div>
              {{-- <i class="fa fa-heartbeat"></i> --}}
              <img src="https://media.istockphoto.com/id/508509000/photo/professional-pediatrician-examining-infant.jpg?s=612x612&w=0&k=20&c=gp0CvpwTWX1rs19ZP8nLiAweUEgIij2tWXB56wVTOeE=" alt="" class="p-0" width="350" height="250">
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
            <div>
              {{-- <i class="fa fa-heartbeat"></i> --}}
              <img src="https://cdn-prod.medicalnewstoday.com/content/images/articles/324/324292/young-woman-speaking-with-gynecologist.jpg" alt="" class="p-0" width="350" height="250">
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
            <div>
              {{-- <i class="fa fa-heartbeat"></i> --}}
              <img src="https://media.npr.org/assets/img/2021/04/01/ucsf_20190522_lester_044_wide-cbd733ed57f5bf71a960fbd6daec3fe0b2f977a1.jpg" alt="" class="p-0" width="350" height="250">
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