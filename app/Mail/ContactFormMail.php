<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $senderName;
    public string $senderEmail;
    public string $subject;
    public string $service;
    public string $userMessage;

    public function __construct(array $data)
    {
        $this->senderName    = $data['name'];
        $this->senderEmail   = $data['email'];
        $this->subject       = $data['subject'] ?? '(Tanpa Subjek)';
        $this->service       = $data['service'] ?? '-';
        $this->userMessage   = $data['message'];
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '[Portfolio] Pesan dari ' . $this->senderName,
            replyTo: [
                new \Illuminate\Mail\Mailables\Address($this->senderEmail, $this->senderName),
            ],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
        );
    }
}
