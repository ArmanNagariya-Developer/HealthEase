@extends('layout.layout')

@section('content')
<style>
    /* General Styling */
.hero-section {
    background: linear-gradient(to right, #1e88e5, #0a58ca);
    padding: 100px 0;
}

.search-section {
    margin-top: -30px;
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.input-group {
    border-radius: 50px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.icon-circle {
    width: 60px;
    height: 60px;
    line-height: 60px;
    border-radius: 50%;
    display: inline-block;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* Card Hover Animation */
.card {
    transition: transform 0.3s, box-shadow 0.3s;
    border-radius: 20px;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

/* Button Animations */
.search-btn:hover {
    background-color: #0a58ca;
    transform: scale(1.05);
}

/* Hover Animations */
.animate-hover {
    transition: all 0.3s ease-in-out;
}

.animate-hover:hover {
    transform: scale(1.05);
}

/* Contact Section */
.contact-section {
    padding: 50px 0;
    background: linear-gradient(to right, #1e88e5, #0a58ca);
}
/* Search Section Styling */
.search-section {
    padding-top: 70px;
    padding-bottom: 70px;
    background: linear-gradient(to bottom, #f8f9fa, #fff);
}

/* Search Box Styling */
.search-box {
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

/* Hover Effect */
.search-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
}

/* Form Control Styling */
.form-control-lg {
    border-radius: 12px;
    padding: 15px 18px;
    font-size: 16px;
}

/* Search Section Styling */
#search-section {
    padding-top: 80px;
    padding-bottom: 80px;
    background: linear-gradient(to right, #e3f2fd, #e0f7fa);
}

/* Search Box Styling */
.search-box {
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
}

/* Search Box Hover Effect */
.search-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
}

/* Form Control Styling */
.form-control-lg {
    border-radius: 12px;
    padding: 14px 16px;
    font-size: 16px;
    border: 1px solid #0d6efd;
    transition: all 0.3s ease-in-out;
}

/* Form Input Hover Effect */
.form-control-lg:focus {
    border-color: #1e88e5;
    box-shadow: 0 0 8px rgba(13, 110, 253, 0.2);
}

/* Button Gradient */
.btn-gradient {
    background: linear-gradient(to right, #1e88e5, #0a58ca);
    color: #fff;
    padding: 12px 18px;
    border-radius: 12px;
    border: none;
    transition: background 0.3s ease-in-out, transform 0.2s ease-in-out;
}

/* Button Hover Effect */
.btn-gradient:hover {
    background: linear-gradient(to right, #0a58ca, #1e88e5);
    transform: scale(1.05);
}

/* Label Styling */
.form-label {
    font-size: 14px;
    font-weight: 600;
    color: #495057;
}

/* Smooth Transition */
.search-btn {
    transition: all 0.3s ease-in-out;
}


</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

<!-- Hero Section -->
<section class="hero-section text-white text-center py-5" style="background: linear-gradient(to right, #1e88e5, #0a58ca);">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-start">
                <h1 class="fw-bold display-4 mb-3 text-light">📅 Book Your Doctor<br>Appointment Online.</h1>
                <p class="lead mb-4">A Healthier Tomorrow Starts Today. Schedule Your Appointment Now! <br> Get expert care at your convenience.</p>
                <div class="d-flex gap-3 mt-3">
                    <a href="#search-section" class="btn btn-light btn-lg shadow-sm">📅 Book Appointment</a>
                    <a href="tel:+1234567890" class="btn btn-outline-light btn-lg shadow-sm">📞 Call Now</a>
                </div>
            </div>
            <div class="col-lg-6 text-center mt-4 mt-lg-0">
                <img src="{{ asset('assets/image-removebg-preview.png') }}" alt="Doctor" class="img-fluid rounded-circle border border-4 border-light shadow-lg" style="max-width: 350px;">
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Search Section -->
<section id="search-section" class="search-section bg-light py-5 position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="search-box bg-white p-5 rounded-4 shadow-lg position-relative">
                    <div class="row g-3 align-items-center justify-content-center">
                        <!-- Doctor Search -->
                        <div class="col-md-8">
                            <input type="text" class="form-control form-control-lg border-0 shadow-sm" id="searchDoctor" placeholder="🔍 Search doctors, name, or specialty" required>
                        </div>

                        <!-- Search Button -->
                        <div class="col-md-4 text-center mt-4 mt-md-0">
                            <label for="searchButton" class="form-label fw-bold d-none"></label>
                            <button class="btn btn-gradient btn-lg w-100 search-btn shadow-lg" type="button" id="searchButton">
                                <i class="bi bi-search me-1"></i> Search
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        @if(isset($doctors) && count($doctors) > 0)
            @foreach($doctors as $doctor)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-0 p-4 bg-white rounded-4 text-start animate-hover">
                        <h5 class="fw-bold text-primary"><strong>Docotor Name:</strong> {{ $doctor->doctorname }}</h5>
                        <p class="text-muted"><strong>Docotor Specialization:</strong> {{ $doctor->specialization }}</p>
                        <p class="text-muted"><strong class="pe-2">Docotor Phone:</strong><i class="bi bi-telephone"></i> {{ $doctor->phone ?? 'N/A' }}</p>
                        <p class="text-muted"><strong class="pe-2">Docotor Email:</strong><i class="bi bi-envelope"></i> {{ $doctor->email ?? 'N/A' }}</p>
                        <a href="{{route('appointment.create', ['doctor_id' => $doctor->id]) }}" class="btn btn-outline-primary btn-sm mt-2">📅 Book Appointment</a>
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-center text-muted">No doctors found.</p>
        @endif
    </div>
</section>


<!-- How It Works Section -->
<section class="how-it-works-section text-center py-5 bg-light">
    <div class="container">
        <h2 class="fw-bold mb-4 text-primary">🚀 How It Works!</h2>
        <p class="text-muted">Discover, book, and experience personalized healthcare effortlessly with our easy-to-use platform.</p>

        <div class="row mt-5">
            <!-- Step 1 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-0 p-4 bg-white rounded-4 text-center animate-hover">
                    <div class="icon-circle bg-primary text-white mb-3">
                        <i class="bi bi-search fa-2x pe-1"></i>
                    </div>
                    <h5 class="fw-bold">1. Find a Doctor</h5>
                    <p class="text-muted">Search by name, specialty, or available time slots.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-0 p-4 bg-white rounded-4 text-center animate-hover">
                    <div class="icon-circle bg-success text-white mb-3 ">
                        <i class="bi bi-calendar-check fs-3 pe-1"></i>
                    </div>
                    <h5 class="fw-bold">2. Book Appointment</h5>
                    <p class="text-muted">Select the best time and confirm your appointment.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-0 p-4 bg-white rounded-4 text-center animate-hover">
                    <div class="icon-circle bg-danger text-white mb-3">
                        <i class="bi bi-heart-pulse fa-2x pe-1"></i>
                    </div>
                    <h5 class="fw-bold">3. Visit Doctor</h5>
                    <p class="text-muted">Get quality healthcare at your convenience.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section text-center py-5 text-white" style="background: linear-gradient(to right, #1e88e5, #0a58ca);">
    <div class="container">
        <h2 class="fw-bold mb-3">💬 Need Help?</h2>
        <p class="lead mb-4">Our support team is available 24/7 to assist you. Get in touch now!</p>
        <a href="tel:+1234567890" class="btn btn-outline-light btn-lg shadow-sm">📞 Contact Us</a>
    </div>
</section>

@endsection


<script>
    // Smooth Scroll to Search Section
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Search Doctor Button Alert
document.querySelector('.search-btn').addEventListener('click', function () {
    const searchQuery = document.getElementById('searchDoctor').value;
    if (searchQuery === '') {
        alert('Please enter a doctor or specialty to search.');
    } else {
        alert(`Searching for "${searchQuery}"...`);
    }
});

// Handle Search Button Click
document.querySelector('#searchButton').addEventListener('click', function () {
    const searchQuery = document.getElementById('searchDoctor').value.trim();

    if (searchQuery === '') {
        alert('🔍 Please enter a doctor name or specialty to search.');
    } else {
        alert(`✅ Searching for "${searchQuery}"...`);
    }
});

// Smooth Scroll to Search Section
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

</script>