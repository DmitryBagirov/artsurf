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
    public function __construct($brief)
    {
        $this->brief = $brief;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->from("no-reply@artsurf.pro", 'Заказ от ' . $this->brief->name)
            ->subject("Тема");
        $files = json_decode($this->brief->files);
        foreach ($files as $file) {
            $this->attach($file);
        }
        $questions = ["Как Вас зовут?",  "Какую компанию Вы представляете?",
            "Какие услуги Вам нужны?", "Каковы основные цели Вашего проекта?", "Описание",
            "Адрес сайта", "Сроки", "Почта", "Телефон", "Откуда вы узнали о нас?"];
        return $this->view('briefEmail', ['brief' => $this->brief, 'questions' => $questions]);
    }
}
