<?php

namespace Omaxe\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CommonContactUsMail extends Mailable
{
    use Queueable, SerializesModels;


    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $address = 'noreply@omaxe.com';
        $subject = 'Common Contact Us Lead';
        $name = 'Omaxe';

        $headerData = [
            'category' => 'category',
            'unique_args' => [
                'variable_1' => 'abc'
            ]
        ];

        $header = $this->asString($headerData);

        $this->withSwiftMessage(function ($message) use ($header) {
            $message->getHeaders()
                ->addTextHeader('X-SMTPAPI', $header);
        });

        return $this->view('emails.CommonContactUs',compact("data"))
            ->from($address, $name)
//            ->cc($address, $name)
//            ->bcc($address, $name)
            ->replyTo($address, $name)
            ->subject($subject);
    }

    private function asJSON($data)
    {
        $json = json_encode($data);
        $json = preg_replace('/(["\]}])([,:])(["\[{])/', '$1$2 $3', $json);

        return $json;
    }


    private function asString($data)
    {
        $json = $this->asJSON($data);

        return wordwrap($json, 76, "\n   ");
    }
}
