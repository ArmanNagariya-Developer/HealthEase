<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    /**
     * Display the home page with all doctors.
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view("appointment.appointment", compact('doctors'));
    }

    /**
     * Search for doctors by name or specialty.
     */
    public function search(Request $request)
    {
        $query = $request->input('searchDoctor');

        $doctors = Doctor::where('name', 'LIKE', "%$query%")
                        ->orWhere('specialty', 'LIKE', "%$query%")
                        ->get();

        return view('appointment.appointment', compact('doctors'));
    }
}
