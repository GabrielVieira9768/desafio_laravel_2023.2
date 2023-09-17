<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailProprietarios extends Mailable
{
    use Queueable, SerializesModels;

    public $assunto, $saudacoes, $corpo, $agradecimentos;


    /**
     * Create a new message instance.
     */
    public function __construct($assunto, $saudacoes, $corpo, $agradecimentos)
    {
        $this->assunto = $assunto;
        $this->saudacoes = $saudacoes;
        $this->corpo = $corpo;
        $this->agradecimentos = $agradecimentos;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Email aos Proprietarios',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'admin.mail.mensagem',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    public function build()
    {
        return  $this->subject($this->assunto)->view('admin.mail.mensagem'); 
    }
}
