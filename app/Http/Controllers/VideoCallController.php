<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Str;

class VideoCallController extends Controller
{
    public function show($appointment_id)
    {
        $appointment = Appointment::where('id', $appointment_id)
            ->where('user_id', FacadesAuth::id())
            ->firstOrFail();

        // ✅ Check if the date matches the current date
        // if ($appointment->appointment_date->formt('Y-m-d') !== now()->format('Y-m-d')) {
        //     return redirect()->route('appointment.myAppointments')
        //         ->with('error', 'You can only join the video call on the appointment date.');
        // }

        // ✅ Pass doctor and appointment details to view
        return view('video.call', [
            'appointment' => $appointment,
            'doctor' => $appointment->doctor,
        ]);
    }

    public function acceptCall($id)
    {
        $appointment = Appointment::findOrFail($id);
    
        if ($appointment->status !== 'confirmed') {
            return redirect()->route('admin.dashboard')->with('error', 'Call is not available yet.');
        }
    
        $sessionId = Str::uuid();
        $doctor = $appointment->doctor; // Get the related doctor
    
        return view('video.acceptCall', compact('appointment', 'sessionId', 'doctor'));
    }
    
}
