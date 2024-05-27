<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppointmentKonseling;
use App\Http\Controllers\AppointmentKonselingController;

class AppointmentKonselingController extends Controller
{
    public function create()
    {
        return view('konseling.appointment_konselings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required',
            'counselor_name' => 'required',
            'appointment_time' => 'required|date',
            'notes' => 'nullable',
        ]);

        AppointmentKonseling::create($request->all());

        return redirect()->route('appointment_konselings.index')
                         ->with('success', 'Appointment Konseling created successfully.');
    }

    public function index()
    {
        $appointmentKonselings = AppointmentKonseling::all();
        return view('konseling.appointment_konselings.index', compact('appointmentKonselings'));
    }
}


