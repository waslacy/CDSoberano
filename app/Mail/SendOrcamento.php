<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendOrcamento extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from(config('mail.from.address'))
        ->subject('Novo Orçamento solicitado (SOBERANO')
        ->view('orcamento/orcamento')
        ->attach(public_path('src/orcamentos/' .$this->data['arquivo']))
        ->with('data', $this->data);
    }
}
