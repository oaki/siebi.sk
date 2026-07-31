<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    /** @param array{name:string,company:?string,email:string,phone:?string,message:string} $data */
    public function __construct(
        public array $data,
        public string $siteLocale,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '[siebi.sk] Nová správa z kontaktného formulára — '.$this->data['name'],
            replyTo: [$this->data['email']],
            bcc: array_filter([config('mail.contact_bcc')]),
        );
    }

    public function content(): Content
    {
        return new Content(markdown: 'emails.contact-submitted');
    }
}
