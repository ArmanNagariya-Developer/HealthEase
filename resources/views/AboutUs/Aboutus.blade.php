@extends('layout.layout')
@section('content')
    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">
  
          <div class="row gy-4 gx-5">
  
            <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
              <img src="{{asset('images/about.jpg')}}" class="img-fluid" alt="">
              <a href="" class="glightbox pulsating-play-btn"></a>
            </div>
  
            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
              <h3>About Us</h3>
              <p>
                Dolor iure expedita id fuga asperiores qui sunt consequatur minima. Quidem voluptas deleniti. Sit quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti totam ut eius incidunt reiciendis veritatis asperiores placeat.
              </p>
              <ul>
                <li>
                  <i class="fa-solid fa-vial-circle-check"></i>
                  <div>
                    <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                    <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                  </div>
                </li>
                <li>
                  <i class="fa-solid fa-pump-medical"></i>
                  <div>
                    <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                    <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                  </div>
                </li>
                <li>
                  <i class="fa-solid fa-heart-circle-xmark"></i>
                  <div>
                    <h5>Voluptatem et qui exercitationem</h5>
                    <p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime veniam</p>
                  </div>
                </li>
              </ul>
            </div>
  
          </div>
  
        </div>
  
      </section><!-- /About Section -->    

        <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="row gy-4">
  
            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
              <i class="fa fa-user-md"></i>
              <div class="stats-item">
                <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
                <p>Doctors</p>
              </div>
            </div><!-- End Stats Item -->
  
            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
              <i class="fa fa-hospital-o"></i>
              <div class="stats-item">
                <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
                <p>Departments</p>
              </div>
            </div><!-- End Stats Item -->
  
            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
              <i class="fa fa-flask"></i>
              <div class="stats-item">
                <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
                <p>Research Labs</p>
              </div>
            </div><!-- End Stats Item -->
  
            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
              <i class="fa fa-trophy"></i>
              <div class="stats-item">
                <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
                <p>Awards</p>
              </div>
            </div><!-- End Stats Item -->
  
          </div>
  
        </div>
  
      </section><!-- /Stats Section -->
  
@endsection