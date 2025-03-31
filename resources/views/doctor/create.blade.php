@extends('layout.layout')

@section('content')
<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="text-center text-primary">📅 Book an Appointment</h2>
        <p class="text-center">Doctor: <strong>{{ $doctor->doctorname }}</strong></p>

        <form action="{{ route('appointment.store') }}" method="POST">
            @csrf
            <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">

            <div class="mb-3">
                <label for="appointment_date" class="form-label">Choose Date & Time:</label>
                <input type="datetime-local" class="form-control" name="appointment_date" required>
            </div>

            <div class="mb-3">
                <label for="notes" class="form-label">Additional Notes:</label>
                <textarea class="form-control" name="notes" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">Confirm Appointment</button>
        </form>
    </div>
</div>
@endsection
