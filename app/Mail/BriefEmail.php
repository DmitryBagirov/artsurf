<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BriefEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $brief;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($brief, $files = [])
    {
        $this->brief = $brief;

        if (!empty($files)) {
            foreach ($files as $file) {
                $this->attach($file, [
                    'as' => $file->getClientOriginalName()
                ]);
            }
        }
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this
            ->from("no-reply@artsurf.pro", 'Заказ #' . $this->brief->id)
            ->subject("Тема");

        return $this->view('brief-email', ['brief' => $this->brief]);
    }
}
