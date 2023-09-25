<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailProprietarios;
use Illuminate\Support\Facades\Auth;

class EmailController extends Controller
{
    public function index()
    {
        return view('mail.mensagem');
    }

    public function store(Request $request)
    {
        $owners = Owner::all();

        foreach($owners as $indice => $owner){
            $multiplicador = $indice + 1;
            $email = new EmailProprietarios($request->input('assunto'), $request->saudacoes, $request->corpo, $request->agradecimentos);
            $when = now()->addSeconds($multiplicador * 5);
            Mail::to($owner)->later($when, $email);
        }

        return redirect()->route('email.index')->with('success', 'A mensagem foi enviada com sucesso!');
    }
}
