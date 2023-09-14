<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{
    public function index()
    {
        $owners = Owner::all();
        return view ('admin.owners.index', compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $owner = new Owner();
        return view ('admin.owners.create', compact('owner'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Owner::create($data);
        
        return redirect()->route('owners.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(Owner $owner)
    {
        return view ('admin.owners.show', compact('owner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Owner $owner)
    {
        return view ('admin.owners.edit', compact('owner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Owner $owner)
    {
        $data = $request->all();
        $owner->update($data);

        return redirect()->route('owners.index')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Owner $owner)
    {
        $owner->delete();

        return redirect()->route('owners.index')->with('success', true);
    }
}
