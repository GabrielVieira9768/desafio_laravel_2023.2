<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view ('admin.users.index', compact('users'));
    }

    public function create()
    {
        $user = new User();
        return view ('admin.users.create', compact('user'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        User::create($data);

        return redirect()->route('users.index')->with('success', true);
    }

    public function show(User $user)
    {
        return view ('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view ('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->all();
        $user->update($data);

        return redirect()->route('users.index')->with('success', true);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', true);
    }
}