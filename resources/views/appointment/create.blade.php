@extends('layout.layout')

@section('content')
<!-- Appointment Section -->
<section id="appointment" class="appointment section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Appointment</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>
    <!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <form action="{{ route('appointment.store') }}" method="POST" role="form" class="php-email-form">
            @csrf
            <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
        
            <div class="row">
                <div class="col-md-4 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
                </div>
            </div>
        
            <div class="form-group mt-3">
                <input type="text" class="form-control" name="address" id="address" placeholder="Address" required>
            </div>
        
            <div class="form-group mt-3">
                <input type="datetime-local" name="appointment_date" class="form-control" id="date" placeholder="Appointment Date" required>
            </div>
        
            <div class="form-group mt-3">
                <textarea class="form-control" name="notes" rows="5" placeholder="Message (Optional)"></textarea>
            </div>
        
            <div class="mt-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                <div class="text-center"><button type="submit" class="btn btn-primary">Make an Appointment</button></div>
            </div>
        </form>
        
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    </div>

</section>
<!-- /Appointment Section -->
@endsection
