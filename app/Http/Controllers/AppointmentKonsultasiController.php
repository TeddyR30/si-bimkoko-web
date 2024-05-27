<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppointmentKonsultasi;
use App\Http\Controllers\AppointmentKonsultasiController;

class AppointmentKonsultasiController extends Controller
{
    public function create()
    {
        return view('konsultasi.appointment_konsultasis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required',
            'counselor_name' => 'required',
            'appointment_time' => 'required|date',
            'notes' => 'nullable',
        ]);

        AppointmentKonsultasi::create($request->all());

        return redirect()->route('appointment_konsultasis.index')
                         ->with('success', 'Appointment Konsultasi created successfully.');
    }

    public function index()
    {
        $appointmentKonsultasis = AppointmentKonsultasi::all();
        return view('konsultasi.appointment_konsultasis.index', compact('appointmentKonsultasis'));
    }
}


