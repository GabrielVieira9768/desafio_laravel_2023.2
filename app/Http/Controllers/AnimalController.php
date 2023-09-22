<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Owner;
use App\Models\Appointment;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = animal::all();
        return view ('admin.animals.index', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $owners = Owner::all();
        $animal = new animal();
        $appointments = Appointment::all();
        return view ('admin.animals.create', compact('animal', 'owners', 'appointments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        animal::create($data);

        return redirect()->route('animals.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(animal $animal)
    {
        $owners = Owner::all();
        $appointments = Appointment::all();
        return view ('admin.animals.show', compact('animal', 'owners', 'appointments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(animal $animal)
    {
        $owners = Owner::all();
        $appointments = Appointment::all();
        return view ('admin.animals.edit', compact('animal', 'owners', 'appointments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, animal $animal)
    {
        $data = $request->all();
        $animal->update($data);

        return redirect()->route('animals.index')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(animal $animal)
    {
        $animal->delete();

        return redirect()->route('animals.index')->with('success', true);
    }
}
