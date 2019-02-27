<?php

namespace Omaxe\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VendorsContactMail extends Mailable
{
    use Queueable, SerializesModels;


    public $data;



    public function __construct($vendor_store)
    {
        $this->data = $vendor_store;
    }

    public function build()
    {
        $ddata = $this->data;
        $address = 'noreply@omaxe.com';
        $subject = 'Vendors Contact Us Lead';
        $name = 'Omaxe';

        $headerData = [
            'category' => 'category',
            'unique_args' => [
                'variable_1' => 'abc'
            ]
        ];


        $gst_details_file = unserialize($this->data['gst_details_file']);
        
        $header = $this->asString($headerData);

        $this->withSwiftMessage(function ($message) use ($header) {
            $message->getHeaders()
                ->addTextHeader('X-SMTPAPI', $header);
        });

        $email = $this->view('emails.VendorContactUs',compact("data"))
            ->from($address, $name)
//            ->cc($address, $name)
//            ->bcc($address, $name)
            ->replyTo($address, $name)
            ->subject($subject)

            ;

        $email->attach('vendorfile/'.$this->data['PAN_No']);


        foreach ($gst_details_file as $key => $gst_details_files) {

            $email->attach('gstFile/' . $gst_details_files);
        }
        return $email;
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
