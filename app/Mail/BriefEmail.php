<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BriefEmail extends Mailable
{
    use Queueable, SerializesModels;
    private $files;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($files)
    {
        $this->files = $files;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->from("no-reply@artsurf.pro");
        $this->subject("Тема");
        foreach ($this->files as $file) {
            $this->attach($file->getRealPath());
            break;
        }
        return $this->view('briefEmail');
    }
}
