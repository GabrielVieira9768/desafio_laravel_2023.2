<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Animal;
use App\Models\User;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = appointment::all();
        return view ('admin.appointments.index', compact('appointments'));
    }

    public function create()
    {
        $users = User::all();
        $animals = animal::all();
        $appointment = new appointment();
        return view ('admin.appointments.create', compact('appointment', 'users', 'animals'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        appointment::create($data);

        return redirect()->route('appointments.index')->with('success', true);
    }

    public function show(appointment $appointment)
    {
        $users = User::all();
        $animals = animal::all();
        return view ('admin.appointments.show', compact('appointment', 'users', 'animals'));
    }

    public function edit(appointment $appointment)
    {
        $users = User::all();
        $animals = animal::all();
        return view ('admin.appointments.edit', compact('appointment', 'users', 'animals'));
    }

    public function update(Request $request, appointment $appointment)
    {
        $data = $request->all();
        $appointment->update($data);

        return redirect()->route('appointments.index')->with('success', true);
    }

    public function destroy(appointment $appointment)
    {
        $appointment->delete();

        return redirect()->route('appointments.index')->with('success', true);
    }
}
