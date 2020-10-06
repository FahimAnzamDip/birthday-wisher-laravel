<?php

namespace App\Mail;

use App\Models\Employee;
use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BirthdayMail extends Mailable
{

    use Queueable, SerializesModels;

    public $employee;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Employee $employee) {
        $this->employee = $employee;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->subject('Happy Birthday To You!')
                    ->view('mail.mail');
    }
}
