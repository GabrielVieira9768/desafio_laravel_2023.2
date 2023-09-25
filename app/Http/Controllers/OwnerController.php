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

    public function create()
    {
        $owner = new Owner();
        return view ('admin.owners.create', compact('owner'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('fotoPerfil')) {
            $file = $request->file('fotoPerfil');
            $file->store('public/storage/fotosPerfil');
            $data['fotoPerfil'] = $file->hashName();
        }
        else {
            $data['fotoPerfil'] = null;
        }

        Owner::create($data);
        
        return redirect()->route('owners.index')->with('success', true);
    }

    public function show(Owner $owner)
    {
        return view ('admin.owners.show', compact('owner'));
    }

    public function edit(Owner $owner)
    {
        return view ('admin.owners.edit', compact('owner'));
    }

    public function update(Request $request, Owner $owner)
    {
        $data = $request->all();

        if ($request->hasFile('fotoPerfil')) {
            $file = $request->file('fotoPerfil');
            $file->store('public/storage/fotosPerfil');
            $data['fotoPerfil'] = $file->hashName();
        }
        else {
            $data['fotoPerfil'] = null;
        }

        $owner->update($data);

        return redirect()->route('owners.index')->with('success', true);
    }

    public function destroy(Owner $owner)
    {
        $owner->delete();

        return redirect()->route('owners.index')->with('success', true);
    }
}
