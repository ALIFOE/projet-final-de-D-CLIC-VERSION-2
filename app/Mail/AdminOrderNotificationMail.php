<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminOrderNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Order $order)
    {
        $this->to(config('mail.admin_email'));
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            to: [config('mail.admin_email')],
            subject: 'Nouvelle commande - NE DON ENERGY',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.admin-order-notification',
            with: [
                'order' => $this->order
            ]
        );
    }
}