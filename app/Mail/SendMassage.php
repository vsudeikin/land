<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMassage extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $email;
    protected $text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($massage)
    {
        $this->name = $massage->name;
        $this->email = $massage->email;
        $this->text = $massage->text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('admin@suval.com.ua')->view('layouts.mail')->with([
            'name' => $this->name,
            'email' => $this->email,
            'text' => $this->text,

        ]);
    }
}
