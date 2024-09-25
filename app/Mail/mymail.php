<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class mymail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $code;
    public $email;

    public function __construct($email)
    {
        $this->email = $email;
        $this->code = rand(100000,999999);
        session(['mcode'=>$this->code]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Alpine Ascent Viet Nam', // Tiêu đề email
            from: new Address('manhnguyenn23077@gmail.com','Alpine Ascent Viet Nam'), // Địa chỉ gửi
            to: $this->email // Sử dụng email người dùng nhập vào
        );
    }

    // return $this->subject('Alpine Ascent Viet Nam')
    //                 ->view('emails.mymail')
    //                 ->with('details',$this->details);

    /**
     * Get the message content definition.
     */
    
    public function content(): Content
    {
        return new Content(
            view: 'emails.mymail',
            with: ['code'=>$this->code]
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
