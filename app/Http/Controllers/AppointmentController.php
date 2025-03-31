<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AppointmentController extends Controller
{
    public function create($doctor_id)
    {   
        $doctor = Doctor::findOrFail($doctor_id);
        return view('appointment.create', compact('doctor'));
    }

    // Handle booking submission
    public function store(Request $request)
{
    $request->validate([
        'doctor_id' => 'required|exists:doctors,id',
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:15',
        'address' => 'required|string|max:255',
        'appointment_date' => 'required|date|after:today',
        'notes' => 'nullable|string',
    ]);

    // Create appointment
    Appointment::create([
        'patient_id' => Auth::id(), 
        'user_id' => Auth::id(), 
        'doctor_id' => $request->doctor_id,
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
        'appointment_date' => $request->appointment_date,
        'notes' => $request->notes,
    ]);

    return redirect()->route('welcome')->with('success', 'Appointment booked successfully!');
}
public function myAppointments()
{
    // ✅ Fetch appointments for the logged-in user
    $appointments = Appointment::where('patient_id', Auth::id())
        ->with('doctor') // Eager load doctor details
        ->orderBy('appointment_date', 'desc')
        ->get();

    // ✅ Return to view
    return view('appointment.myAppointments', compact('appointments'));
}

public function cancelAppointment($id)
{
    // Log to debug
    Log::info('Canceling appointment for user: ' . Auth::id() . ', appointment ID: ' . $id);

    // Fetch the appointment using user_id
    $appointment = Appointment::where('id', $id)
        ->where('user_id', Auth::id()) // ✅ Corrected to 'user_id'
        ->first();

    // Check if the appointment exists
    if (!$appointment) {
        return redirect()->route('appointment.myAppointments')->with('error', 'Appointment not found or unauthorized!');
    }

    // ✅ Update status to 'cancelled'
    $appointment->update(['status' => 'cancelled']);

    return redirect()->route('appointment.myAppointments')->with('success', 'Appointment cancelled successfully!');
}

public function checkAndRedirectToCall($id)
{
    $appointment = Appointment::where('id', $id)
        ->where('user_id', Auth::id())
        ->firstOrFail();

    // ✅ Check if appointment date matches today
    if (Carbon::parse($appointment->appointment_date)->format('Y-m-d') === now()->format('Y-m-d')) {
        return redirect()->route('video.call', $id);
    } else {
        return redirect()->route('appointment.myAppointments')
            ->with('error', 'You can only join the video call on the appointment date.');
    }
}

}
