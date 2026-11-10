<?php

namespace App\Mail;

use App\Models\Event;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NotifyAdminBookingMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @param array $booking
     * @param Event $event
     */
    public function __construct(
        public array $booking,
        public Event $event
    ) {}

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(
                'noreply@mira-therapy.com',
                'Mira Therapy'
            ),
            subject: 'Известие - Ново записване за събитие: ' . $this->event->title,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.email-notify-admin-booking',
            with: [
                'booking' => $this->booking,
                'event' => $this->event,
            ],
        );
    }

    /**
     * Get the attachments.
     *
     * @return array
     */
    public function attachments(): array
    {
        return [];
    }
}
