<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;

use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $contact_first_name;
    public $contact_second_name;
    public $contact_email;
    public $contact_telephone_number;
    public $contact_message;

    /**
     * Create a new message instance.
     */
    public function __construct(
        $contact_first_name,
        $contact_second_name,
        $contact_email,
        $contact_telephone_number,
        $contact_message
    ) {
        $this->contact_first_name = $contact_first_name;
        $this->contact_second_name = $contact_second_name;
        $this->contact_email = $contact_email;
        $this->contact_telephone_number = $contact_telephone_number;
        $this->contact_message = $contact_message;
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('noreply@pro-bg.net', 'Bestcars BG'),
              replyTo: [
                new Address('info@pro-bg.net', 'Bestcars BG'),
            ],
            subject: 'Запитване за автомобил',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.contact',
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
}
