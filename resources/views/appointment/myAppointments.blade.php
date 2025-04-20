@extends('layout.layout')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">My Appointments</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

    @if($appointments->isEmpty())
        <div class="alert alert-info text-center">No appointments found.</div>
    @else
        <div class="table-responsive mt-4">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Doctor Name</th>
                        <th>Appointment Date</th>
                        <th>Status</th>
                        <th>Notes</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($appointments as $key => $appointment)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $appointment->doctor->doctorname }}</td>
                            <td>{{ date('d M Y, h:i A', strtotime($appointment->appointment_date)) }}</td>
                            <td>
                                @if($appointment->status == 'pending')
                                    <span class="badge bg-warning">Pending</span>
                                @elseif($appointment->status == 'confirmed')
                                    <span class="badge bg-success">Approved</span>
                                @else
                                    <span class="badge bg-danger">Cancelled</span>
                                @endif
                            </td>
                            <td>{{ $appointment->notes ?? 'N/A' }}</td>
                            <td>
                                <a href="{{ route('appointment.cancel', $appointment->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to cancel this appointment?');">
                                    Cancel
                                </a>
                                @if($appointment->status == 'confirmed')

                                <a href="{{ route('check.call', $appointment->id) }}" class="btn btn-success">Join Video Call</a>
                            @else
                                <span class="btn btn-secondary disabled">Call Unavailable</span>
                            @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
