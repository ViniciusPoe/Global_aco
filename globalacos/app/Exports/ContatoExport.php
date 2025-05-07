<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContatoExport extends Mailable
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Mensagem de Contato')->view('emails.contato', ['data' => $this->data]);
    }
}