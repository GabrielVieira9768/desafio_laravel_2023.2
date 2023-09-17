<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailProprietarios;

class EmailController extends Controller
{
    public function index()
    {
        return view('mail.mensagem');
    }

    public function store(Request $request)
    {
        $request->validate([
            'assunto' => 'required|string|max:255',
            'saudacoes' => 'required|string',
            'corpo' => 'required|string|max:255',
            'agradecimentos' => 'required|string|max:255',
        ]);

        $owners = Owner::all();
        foreach ($owners as $indice => $owner) {
            $multiplicador = $indice + 1;
            $when = now()->addSecond($multiplicador * 5);
            Mail::to($owner->email)->later($when, new \App\Mail\EmailProprietarios($request->assunto, $request->saudacoes, $request->corpo, $request->agradecimentos));
        }

        return redirect()->route('email.store')->with('success', 'A mensagem foi enviada com sucesso!');
    }
}
